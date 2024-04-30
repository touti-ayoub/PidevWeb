<?php

namespace App\Controller;
use App\Entity\Exercice;
use App\Entity\Plan;
use App\Form\ExerciceType;
use App\Form\PlanType;
use Doctrine\Persistence\ManagerRegistry;
use Pusher\Pusher;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;




class PlanController extends AbstractController

{

    /**
     * @Route("/plan/new", name="plan_new", methods={"GET","POST"})
     */

    public function new(Request $request, SluggerInterface $slugger): Response
    {
        $plan = new Plan();
        $form = $this->createForm(PlanType::class, $plan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('imageFile')->getData();

            // this condition is needed because the 'imageFile' field is not required
            // so the image file must be processed only when a file is uploaded
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                // Move the file to the directory where images are stored
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'IMAGE_URL' property to store the image file name
                // instead of its contents
                $plan->setImageurl($newFilename);
            }
            // Get the selected exercices from the form
            $exercices = $form->get('exercices')->getData();

            // Add each exercice to the plan
            foreach ($exercices as $exercice) {
                $plan->addExercice($exercice);
            }


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($plan);
            $entityManager->flush();
            return $this->redirect($this->generateUrl('plans'));
        }

        return $this->render('plan/add.html.twig', [
            'form' => $form->createView(),
            'plan' => $plan,

        ]);
    }
    /**
     * @Route("/plans", name="plans")
     */
    public function listPlans(): Response
    {
        $plans = $this->getDoctrine()->getRepository(Plan::class)->findAll();

        return $this->render('plan/list.html.twig', [
            'plans' => $plans,
        ]);
    }
    /**
     * @Route("/plan/{id}/delete", name="plan_delete", methods={"POST"})
     */
    public function delete(Request $request, $id): Response
    {
        $plan = $this->getDoctrine()->getRepository(Plan::class)->find($id);

        if (!$plan) {
            throw $this->createNotFoundException(
                'No plan found for id '.$id
            );
        }

        if ($this->isCsrfTokenValid('delete'.$plan->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($plan);
            $entityManager->flush();
        }
        return $this->redirectToRoute('plans');
    }
    /**
     * @Route("/plan/{id}/edit", name="plan_edit", methods={"GET","POST"})
     */
    public function edit(ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger,  Pusher $pusher, $id): Response
    {
        $plan = $doctrine->getRepository(Plan::class)->find($id);
        $em = $doctrine->getManager();
        $form = $this->createForm(PlanType::class, $plan);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('imageFile')->getData();

            // this condition is needed because the 'imageFile' field is not required
            // so the image file must be processed only when a file is uploaded
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                // Move the file to the directory where images are stored
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'IMAGE_URL' property to store the image file name
                // instead of its contents
                $plan->setImageurl($newFilename);
            }

            $em->persist($plan);
            $em->flush();
            $pusher->trigger('my-channel', 'plan-updated', ['message' => 'Plan updated successfully']);



            return $this->redirectToRoute('plans');
        }

        return $this->render('plan/edit.html.twig', [
            'form' => $form->createView(),
            'plan' => $plan,
        ]);
    }

    /**
     * @Route("/plan/{id}", name="plan_show", methods={"GET"})
     * @ParamConverter("plan", class="App\Entity\Plan")
     */
    public function show(Plan $plan): Response
    {
        return $this->render('plan/show.html.twig', [
            'plan' => $plan,
        ]);
    }

    /**
     * @Route("/plan/{planId}/like", name="plan_like", methods={"POST"})
     */
    public function likePlan(Request $request, int $planId): JsonResponse
    {
        $entityManager = $this->getDoctrine()->getManager();
        $plan = $entityManager->getRepository(Plan::class)->find($planId);
        $user = $this->getUser();

        if (!$plan) {
            return new JsonResponse(['success' => false, 'message' => 'Plan not found'], 404);
        }

        if (!$user) {
            return new JsonResponse(['success' => false, 'message' => 'User not authenticated'], 401);
        }

        try {
            $user->addLikedPlan($plan);
            $entityManager->flush();
        } catch (\Exception $e) {
            $logger->error('Failed to like a plan: ' . $e->getMessage());
            return new JsonResponse(['success' => false, 'message' => 'Server error'], 500);
        }

        return new JsonResponse(['success' => true, 'message' => 'Plan liked successfully']);
    }


    /**
     * @Route("/plan/{id}/unlike", name="plan_unlike", methods={"POST"})
     */
    public function unlikePlan(int $planId): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $plan = $entityManager->getRepository(Plan::class)->find($planId);
        $user = $this->getUser(); // Assuming you have some way to get the authenticated user

        $user->removeLikedPlan($plan);
        $entityManager->flush();

        return $this->redirectToRoute('app_profile');
    }

}

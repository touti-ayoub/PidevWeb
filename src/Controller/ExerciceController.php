<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Exercice;
use App\Form\ExerciceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Plan;


class ExerciceController extends AbstractController
{
    #[Route('/exercice', name: 'app_exercice')]
    public function indexx(): Response
    {
        return $this->render('exercice/index.html.twig', [
            'controller_name' => 'ExerciceController',
        ]);
    }

    /**
     * @Route("/exercice/new", name="exercice_new", methods={"GET","POST"})
     */

    public function new(Request $request, SluggerInterface $slugger): Response
    {
        $exercice = new Exercice();
        $form = $this->createForm(ExerciceType::class, $exercice);
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
                $exercice->setIMAGEURL($newFilename);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($exercice);
            $entityManager->flush();
            return $this->redirect($this->generateUrl('exercices'));
        }

        return $this->render('exercice/add.html.twig', [
            'form' => $form->createView(),
            'exercice' => $exercice,

        ]);
    }
    /**
     * @Route("/exercice", name="exercice_index", methods={"GET"})
     */
    public function index(): Response
    {
        $exercices = $this->getDoctrine()
            ->getRepository(Exercice::class)
            ->findAll();

        return $this->render('exercice/index.html.twig', [
            'exercices' => $exercices,
        ]);
    }
    /**
     * @Route("/exercices", name="exercices")
     */
    public function listExercices(): Response
    {
        $exercices = $this->getDoctrine()->getRepository(Exercice::class)->findAll();

        return $this->render('exercice/list.html.twig', [
            'exercices' => $exercices,
        ]);
    }
    /**
     * @Route("/exercice/{id}/delete", name="exercice_delete", methods={"POST"})
     */
    public function delete(Request $request, $id): Response
    {
        $exercice = $this->getDoctrine()->getRepository(Exercice::class)->find($id);

        if (!$exercice) {
            throw $this->createNotFoundException(
                'No exercise found for id '.$id
            );
        }

        if ($this->isCsrfTokenValid('delete'.$exercice->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($exercice);
            $entityManager->flush();
        }
        return $this->redirectToRoute('exercices');
    }
    /**
     * @Route("/exercice/{id}/edit", name="exercice_edit", methods={"GET","POST"})
     */
    public function edit(ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger, $id): Response
    {
        $exercice = $doctrine->getRepository(Exercice::class)->find($id);
        $em = $doctrine->getManager();
        $form = $this->createForm(ExerciceType::class, $exercice);

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
                $exercice->setIMAGEURL($newFilename);
            }

            $em->persist($exercice);
            $em->flush();

            return $this->redirectToRoute('exercices');
        }

        return $this->render('exercice/edit.html.twig', [
            'form' => $form->createView(),
            'exercice' => $exercice,
        ]);
    }
    #[Route('/main/exercises/{id}', name: 'app_exercises')]
    public function showAllExercises($id): Response
    {
        $plan = $this->getDoctrine()->getRepository(Plan::class)->find($id);

        if (!$plan) {
            throw $this->createNotFoundException(
                'No plan found for id '.$id
            );
        }

        $exercises = $plan->getExercices();

        return $this->render('front/planExercice.html.twig', [
            'exercises' => $exercises,
        ]);
    }
}
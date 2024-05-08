<?php

namespace App\Controller;

use Knp\Component\Pager\PaginatorInterface;

use App\Entity\Food;
use App\Form\FoodType;
use App\Repository\FoodRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/food')]
class FoodController extends AbstractController
{
    //affichage liste food front
    #[Route('/food2', name: 'app_food_index2', methods: ['GET'])]
    public function indexNonArchiver(FoodRepository $foodRepository): Response
    {
        //  return $this->render('food/index.html.twig', [
        // return $this->render('base-front.html.twig', [
        // return $this->render('foodUser/food.html.twig', [

        //   'food' => $foodRepository->findAll(),
        //]);
        // Récupérer toutes les entités Food avec un attribut "archiver" égal à 0
        $foods = $foodRepository->findBy(['archiver' => 0]);

        return $this->render('foodUser/food.html.twig', [
            'food' => $foods,
        ]);
    }

    #[Route('/calculate_totals', name: 'app_recipe_calculate_totals', methods: ['POST'])]
    public function calculateTotals(Request $request): Response
    {
        // Récupérer les IDs des aliments sélectionnés
        $foodIds = $request->request->get('foodIds');

        // Récupérer les aliments sélectionnés à partir de leurs IDs
        $selectedFoods = $this->getDoctrine()->getRepository(Food::class)->findBy(['id' => $foodIds]);

        // Calculer les totaux des calories, protéines, glucides et lipides
        $totalCalories = 0;
        $totalProtein = 0;
        $totalCarbs = 0;
        $totalFat = 0;

        foreach ($selectedFoods as $food) {
            $totalCalories += $food->getCalories();
            $totalProtein += $food->getProtein();
            $totalCarbs += $food->getCarbohydrates();
            $totalFat += $food->getFat();
        }

        // Rendre la vue Twig avec les totaux calculés
        return $this->render('foodUser/calculate_totals.html.twig', [
            'totalCalories' => $totalCalories,
            'totalProtein' => $totalProtein,
            'totalCarbs' => $totalCarbs,
            'totalFat' => $totalFat,
        ]);
    }



    //afficher liste food  non archiver back
    #[Route('/', name: 'app_food_index', methods: ['GET'])]
    public function indexNonArchiver2(FoodRepository $foodRepository, PaginatorInterface $paginator, Request $request): Response
    {
        // Récupérer toutes les entités Food avec un attribut "archiver" égal à 0
        $foodsQuery = $foodRepository->findBy(['archiver' => 0]);

        // Paginer les résultats
        $foods = $paginator->paginate(
            $foodsQuery, // Requête à paginer
            $request->query->getInt('page', 1), // Numéro de page par défaut
            7 // Nombre d'éléments par page
        );
        return $this->render('food/index.html.twig', [
            'food' => $foods,
        ]);
    }

    //afficher liste food   archiver back
    #[Route('/archiver', name: 'app_food_index_archiver', methods: ['GET'])]
    public function indexArchiver2(FoodRepository $foodRepository): Response
    {
        // Récupérer toutes les entités Food avec un attribut "archiver" égal à 0
        $foods = $foodRepository->findBy(['archiver' => 1]);

        return $this->render('food/index_Archiver.html.twig', [
            'food' => $foods,
        ]);
    }


    #[Route('/new', name: 'app_food_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $food = new Food();
        $form = $this->createForm(FoodType::class, $food);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image')->getData();
            if ($file) {
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move(
                    $this->getParameter('upload_directory'),
                    $fileName
                );
                $food->setImage($fileName);
            }


            $entityManager->persist($food);
            $entityManager->flush();

            return $this->redirectToRoute('app_food_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('food/new.html.twig', [
            'food' => $food,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_food_show', methods: ['GET'])]
    public function show(Food $food): Response
    {
        return $this->render('food/show.html.twig', [
            'food' => $food,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_food_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Food $food, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FoodType::class, $food);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image')->getData();
            if ($file) {
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move(
                    $this->getParameter('upload_directory'),
                    $fileName
                );
                $food->setImage($fileName);
            }
            $entityManager->flush();

            return $this->redirectToRoute('app_food_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('food/edit.html.twig', [
            'food' => $food,
            'form' => $form,
        ]);
    }
    #[Route('/{id}/archive', name: 'app_food_archive', methods: ['GET', 'POST'])]
    public function archive(Request $request, Food $food, EntityManagerInterface $entityManager): Response
    {
        // Mettre à jour le champ "archiver" de l'aliment
        $food->setArchiver(1);

        // Enregistrer les modifications dans la base de données
        $entityManager->flush();

        return $this->redirectToRoute('app_food_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/unarchive', name: 'app_food_unarchive', methods: ['GET', 'POST'])]
    public function unarchive(Request $request, Food $food, EntityManagerInterface $entityManager): Response
    {
        // Mettre à jour le champ "archiver" de l'aliment
        $food->setArchiver(0);

        // Enregistrer les modifications dans la base de données
        $entityManager->flush();

        return $this->redirectToRoute('app_food_index_archiver', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}', name: 'app_food_delete', methods: ['POST'])]
    public function delete(Request $request, Food $food, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $food->getId(), $request->request->get('_token'))) {
            $entityManager->remove($food);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_food_index', [], Response::HTTP_SEE_OTHER);
    }
}

<?php

namespace App\Controller;

use App\Entity\Recipe;
use App\Form\RecipeType;
use App\Repository\RecipeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/recipe')]
class RecipeController extends AbstractController
{
    #[Route('/recipe2', name: 'app_recipe_index2', methods: ['GET'])]
    public function index(RecipeRepository $recipeRepository, PaginatorInterface $paginator, Request $request): Response
    {
        //return $this->render('recipeUser/recipe.html.twig', [
        // return $this->render('base-back.html.twig', [
        $recipesQuery = $recipeRepository->findBy(['archiver' => 0]);
        $recipes = $paginator->paginate(
            $recipesQuery, // Requête à paginer
            $request->query->getInt('page', 1), // Numéro de page par défaut
            7 // Nombre d'éléments par page
        );


        return $this->render('recipeUser/recipe.html.twig', [

            'recipe' => $recipes,
        ]);
    }


    #[Route('/create_recipe', name: 'app_recipe_create_recipe', methods: ['POST'])]
    public function createRecipe(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Récupérer les données du formulaire
        $recipeName = $request->request->get('recipeName');
        $totalCalories = $request->request->get('totalCalories');
        $totalProtein = $request->request->get('totalProtein');
        $totalCarbs = $request->request->get('totalCarbs');
        $totalFat = $request->request->get('totalFat');

        // Créer une nouvelle instance de Recipe
        $recipe = new Recipe();
        $recipe->setName($recipeName);
        $recipe->setTotalCalories($totalCalories);
        $recipe->setTotalProtein($totalProtein);
        $recipe->setTotalCarbs($totalCarbs);
        $recipe->setTotalFat($totalFat);
        $recipe->setArchiver(0);
        // Enregistrer la nouvelle recette dans la base de données
        $entityManager->persist($recipe);
        $entityManager->flush();

        // Rediriger vers la page d'index des recettes
        return $this->redirectToRoute('app_recipe_index', [], Response::HTTP_SEE_OTHER);
    }

    //afficher liste recipe  non archiver back
    #[Route('/', name: 'app_recipe_index', methods: ['GET'])]
    public function indexNonArchiver2(RecipeRepository $recipeRepository, PaginatorInterface $paginator, Request $request): Response
    {
        // Récupérer toutes les entités Food avec un attribut "archiver" égal à 0
        $recipesQuery = $recipeRepository->findBy(['archiver' => 0]);
        // Paginer les résultats
        $recipes = $paginator->paginate(
            $recipesQuery, // Requête à paginer
            $request->query->getInt('page', 1), // Numéro de page par défaut
            7 // Nombre d'éléments par page
        );
        return $this->render('recipe/index.html.twig', [
            'recipes' => $recipes,
        ]);
    }

    //afficher liste recipe   archiver back
    #[Route('/archiver', name: 'app_recipe_index_archiver', methods: ['GET'])]
    public function indexArchiver2(RecipeRepository $recipeRepository): Response
    {
        // Récupérer toutes les entités Food avec un attribut "archiver" égal à 0
        $recipes = $recipeRepository->findBy(['archiver' => 1]);

        return $this->render('recipe/index_Archiver.html.twig', [
            'recipes' => $recipes,
        ]);
    }




    #[Route('/new', name: 'app_recipe_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $recipe = new Recipe();
        $form = $this->createForm(RecipeType::class, $recipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('image')->getData();
            if ($file) {
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move(
                    $this->getParameter('upload_directory'),
                    $fileName
                );
                $recipe->setImage($fileName);
            }

            $entityManager->persist($recipe);
            $entityManager->flush();

            return $this->redirectToRoute('app_recipe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('recipe/new.html.twig', [
            'recipe' => $recipe,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_recipe_show', methods: ['GET'])]
    public function show(Recipe $recipe): Response
    {
        return $this->render('recipe/show.html.twig', [
            'recipe' => $recipe,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_recipe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Recipe $recipe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RecipeType::class, $recipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image')->getData();
            if ($file) {
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move(
                    $this->getParameter('upload_directory'),
                    $fileName
                );
                $recipe->setImage($fileName);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_recipe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('recipe/edit.html.twig', [
            'recipe' => $recipe,
            'form' => $form,
        ]);
    }
    #[Route('/{id}/archive', name: 'app_recipe_archive', methods: ['GET', 'POST'])]
    public function archive(Request $request, Recipe $recipe, EntityManagerInterface $entityManager): Response
    {
        // Mettre à jour le champ "archiver" de l'aliment
        $recipe->setArchiver(1);

        // Enregistrer les modifications dans la base de données
        $entityManager->flush();

        return $this->redirectToRoute('app_recipe_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/unarchive', name: 'app_recipe_unarchive', methods: ['GET', 'POST'])]
    public function unarchive(Request $request, Recipe $recipe, EntityManagerInterface $entityManager): Response
    {
        // Mettre à jour le champ "archiver" de l'aliment
        $recipe->setArchiver(0);

        // Enregistrer les modifications dans la base de données
        $entityManager->flush();

        return $this->redirectToRoute('app_recipe_index_archiver', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}', name: 'app_recipe_delete', methods: ['POST'])]
    public function delete(Request $request, Recipe $recipe, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $recipe->getId(), $request->request->get('_token'))) {
            $entityManager->remove($recipe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_recipe_index', [], Response::HTTP_SEE_OTHER);
    }
}

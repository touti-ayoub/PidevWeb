<?php

namespace App\Controller;

use App\Repository\SubscriptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class FrontController extends AbstractController
{
    private $subscriptionRepository;

    public function __construct(SubscriptionRepository $subscriptionRepository)
    {
        $this->subscriptionRepository = $subscriptionRepository;
    }

    #[Route('/banned', name: 'app_banned')]
    public function banned(): Response
    {
        return $this->render('front/banned.html.twig');
    }

    #[Route('/deleted', name: 'app_deleted')]
    public function deleted(): Response
    {
        return $this->render('front/deleted.html.twig');
    }

    #[Route('/main', name: 'app_main')]
    public function index(): Response
    {
        $subscriptions = $this->subscriptionRepository->findAll();

        return $this->render('front/main.html.twig', [
            'subscriptions' => $subscriptions,
        ]);
    }

    #[Route('/profile', name: 'app_profile')]
    public function profile(): Response
    {
        // Fetch the user data. Here, I'm assuming that you want to fetch the data of the currently logged-in user.
        $user = $this->getUser();

        // If the user is not logged in, redirect them to the login page.
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // Pass the user data to the template.
        return $this->render('front/profile.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/membership', name: 'app_membership')]
    public function membership(): Response
    {
        $subscriptions = $this->subscriptionRepository->findAll();

        return $this->render('front/memberships.html.twig', [
            'subscriptions' => $subscriptions,
        ]);
    }
}
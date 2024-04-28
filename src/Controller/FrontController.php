<?php

namespace App\Controller;

use App\Repository\SubscriptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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

    #[Route('/main', name: 'app_main')]
    public function index(): Response
    {
        $subscriptions = $this->subscriptionRepository->findAll();

        return $this->render('front/main.html.twig', [
            'subscriptions' => $subscriptions,
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
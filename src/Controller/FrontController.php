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

    #[Route('/front', name: 'app_front')]
    public function index(): Response
    {
        $subscriptions = $this->subscriptionRepository->findAll();

        return $this->render('front/memberships.html.twig', [
            'subscriptions' => $subscriptions,
        ]);
    }
}
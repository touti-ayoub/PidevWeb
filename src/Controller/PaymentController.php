<?php

namespace App\Controller;

use Stripe\Checkout\Session;
use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Repository\PlanRepository;

class PaymentController extends AbstractController
{

    #[Route('/payment', name: 'payment')]
    public function index(): Response
    {
        return $this->render('payment/membership.html.twig', [
            'controller_name' => 'PaymentController',
        ]);
    }


    #[Route('/success-url', name: 'success_url')]
    public function successUrl(): Response
    {
        return $this->render('payment/success.html.twig', []);
    }


    #[Route('/cancel-url', name: 'cancel_url')]
    public function cancelUrl(): Response
    {
        return $this->render('payment/cancel.html.twig', []);
    }

    private $planRepository;

    public function __construct(PlanRepository $planRepository)
    {
        $this->planRepository = $planRepository;
    }

    #[Route('/checkout/{id}', name: 'checkout')]
    public function checkout(int $id, string $stripeSK): Response
    {
        $plan = $this->planRepository->find($id);

        if (!$plan) {
            throw $this->createNotFoundException('The plan does not exist');
        }

        Stripe::setApiKey($stripeSK);

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $plan->getNomP(),
                        ],
                        'unit_amount' => ((int)$plan->getPrice()) * 100,                    ],
                    'quantity' => 1,
                ]
            ],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success_url', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('cancel_url', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);

        return $this->redirect($session->url, 303);
    }

}
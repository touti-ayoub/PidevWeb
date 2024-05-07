<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\User;

class DashboardController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'app_dashboard')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $userRepository = $doctrine->getRepository(User::class);
        $totalAccounts = $userRepository->countTotalAccounts();
        $verifiedAccounts = $userRepository->countVerifiedAccounts();
        $nonVerifiedAccounts = $totalAccounts - $verifiedAccounts;

        // Initialize all months to 0
        $accountsPerMonth = array_fill_keys(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], 0);

        $accounts = $userRepository->findAll();

        foreach ($accounts as $account) {
            $month = $account->getCreatedAt()->format('F');
            $accountsPerMonth[$month]++;
        }

        return $this->render('dashboard/index.html.twig', [
            'totalAccounts' => $totalAccounts,
            'verifiedAccounts' => $verifiedAccounts,
            'nonVerifiedAccounts' => $nonVerifiedAccounts,
            'accountsPerMonth' => $accountsPerMonth,
            'percentageVerified' => $totalAccounts > 0 ? ($verifiedAccounts / $totalAccounts) * 100 : 0,
        ]);
    }
}
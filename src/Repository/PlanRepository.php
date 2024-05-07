<?php

namespace App\Repository;

use App\Entity\Plan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Plan>
 *
 * @method Plan|null find($id, $lockMode = null, $lockVersion = null)
 * @method Plan|null findOneBy(array $criteria, array $orderBy = null)
 * @method Plan[]    findAll()
 * @method Plan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Plan::class);
    }

    public function countPlansAddedLastMonth()
    {
        $qb = $this->createQueryBuilder('p')
            ->select('count(p.id)')
            ->where('p.createdAt >= :oneMonthAgo')
            ->setParameter('oneMonthAgo', new \DateTime('first day of last month midnight'));

        return $qb->getQuery()->getSingleScalarResult();
    }


    // src/Repository/PlanRepository.php

    public function countPlansByMonthCurrentYear()
    {
        $entityManager = $this->getEntityManager();
        $currentYear = date('Y');

        $sql = "SELECT MONTH(p.created_at) as month, COUNT(p.id) as count
            FROM plan p
            WHERE YEAR(p.created_at) = :currentYear
            GROUP BY month
            ORDER BY month ASC";

        $connection = $entityManager->getConnection();
        $statement = $connection->prepare($sql);
        $result = $statement->executeQuery(['currentYear' => $currentYear]); // Execute query with parameters

        return $result->fetchAllAssociative(); // Fetch all data as associative arrays
    }





//    /**
//     * @return Plan[] Returns an array of Plan objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Plan
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
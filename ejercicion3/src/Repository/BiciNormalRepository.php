<?php

namespace App\Repository;

use App\Entity\BiciNormal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BiciNormal|null find($id, $lockMode = null, $lockVersion = null)
 * @method BiciNormal|null findOneBy(array $criteria, array $orderBy = null)
 * @method BiciNormal[]    findAll()
 * @method BiciNormal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BiciNormalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BiciNormal::class);
    }

    // /**
    //  * @return BiciNormal[] Returns an array of BiciNormal objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BiciNormal
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

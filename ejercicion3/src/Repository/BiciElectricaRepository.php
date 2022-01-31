<?php

namespace App\Repository;

use App\Entity\BiciElectrica;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BiciElectrica|null find($id, $lockMode = null, $lockVersion = null)
 * @method BiciElectrica|null findOneBy(array $criteria, array $orderBy = null)
 * @method BiciElectrica[]    findAll()
 * @method BiciElectrica[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BiciElectricaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BiciElectrica::class);
    }

    // /**
    //  * @return BiciElectrica[] Returns an array of BiciElectrica objects
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
    public function findOneBySomeField($value): ?BiciElectrica
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

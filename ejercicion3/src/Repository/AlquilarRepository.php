<?php

namespace App\Repository;

use App\Entity\Alquilar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Alquilar|null find($id, $lockMode = null, $lockVersion = null)
 * @method Alquilar|null findOneBy(array $criteria, array $orderBy = null)
 * @method Alquilar[]    findAll()
 * @method Alquilar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlquilarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Alquilar::class);
    }

    // /**
    //  * @return Alquilar[] Returns an array of Alquilar objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Alquilar
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

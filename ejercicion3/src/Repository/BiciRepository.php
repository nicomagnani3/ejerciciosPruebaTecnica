<?php

namespace App\Repository;

use App\Entity\Bici;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Bici|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bici|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bici[]    findAll()
 * @method Bici[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BiciRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bici::class);
    }

    // /**
    //  * @return Bici[] Returns an array of Bici objects
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
    public function findOneBySomeField($value): ?Bici
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

<?php

namespace App\Repository;

use App\Entity\BiciAntigua;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BiciAntigua|null find($id, $lockMode = null, $lockVersion = null)
 * @method BiciAntigua|null findOneBy(array $criteria, array $orderBy = null)
 * @method BiciAntigua[]    findAll()
 * @method BiciAntigua[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BiciAntiguaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BiciAntigua::class);
    }

    // /**
    //  * @return BiciAntigua[] Returns an array of BiciAntigua objects
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
    public function findOneBySomeField($value): ?BiciAntigua
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

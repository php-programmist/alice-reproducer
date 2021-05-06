<?php

namespace App\Repository;

use App\Entity\AbstractAccessType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AbstractAccessType|null find($id, $lockMode = null, $lockVersion = null)
 * @method AbstractAccessType|null findOneBy(array $criteria, array $orderBy = null)
 * @method AbstractAccessType[]    findAll()
 * @method AbstractAccessType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AbstractAccessTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AbstractAccessType::class);
    }

    // /**
    //  * @return AbstractAccessType[] Returns an array of AbstractAccessType objects
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
    public function findOneBySomeField($value): ?AbstractAccessType
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

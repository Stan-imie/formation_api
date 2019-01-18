<?php

namespace App\Repository;

use App\Entity\AutorId;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AutorId|null find($id, $lockMode = null, $lockVersion = null)
 * @method AutorId|null findOneBy(array $criteria, array $orderBy = null)
 * @method AutorId[]    findAll()
 * @method AutorId[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AutorIdRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AutorId::class);
    }

    // /**
    //  * @return AutorId[] Returns an array of AutorId objects
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
    public function findOneBySomeField($value): ?AutorId
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

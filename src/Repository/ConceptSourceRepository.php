<?php

namespace App\Repository;

use App\Entity\ConceptSource;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ConceptSource|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConceptSource|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConceptSource[]    findAll()
 * @method ConceptSource[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConceptSourceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ConceptSource::class);
    }

//    /**
//     * @return ConceptSource[] Returns an array of ConceptSource objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ConceptSource
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

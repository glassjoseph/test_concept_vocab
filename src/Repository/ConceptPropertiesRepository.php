<?php

namespace App\Repository;

use App\Entity\ConceptProperties;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ConceptProperties|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConceptProperties|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConceptProperties[]    findAll()
 * @method ConceptProperties[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConceptPropertiesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ConceptProperties::class);
    }

//    /**
//     * @return ConceptProperties[] Returns an array of ConceptProperties objects
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
    public function findOneBySomeField($value): ?ConceptProperties
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

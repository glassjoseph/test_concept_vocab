<?php

namespace App\Repository;

use App\Entity\Concept;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

// use Doctrine\DBAL\Driver\Connection; // which one?
use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityRepository;

/**
 * @method Concept|null find($id, $lockMode = null, $lockVersion = null)
 * @method Concept|null findOneBy(array $criteria, array $orderBy = null)
 * @method Concept[]    findAll()
 * @method Concept[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConceptRepository extends ServiceEntityRepository {
    public function __construct(RegistryInterface $registry) {
        parent::__construct($registry, Concept::class);
    }

    // public function findAllWithTerms() {
    // }


    /**
     * @return Concept[] Returns an array of Concept objects
     */
    public function findByUrl($value) {
        return $this->createQueryBuilder('t')
            ->andWhere('lower(t.url) LIKE lower(:value)')
            ->setParameter('value', $value)
            ->setMaxResults(20)
            ->getQuery()
            ->getResult()
        ;
    }




    public function getPreferredTerms() {

        $sql = "SELECT c.id, t.value FROM concept c LEFT JOIN term t ON c.id = t.concept_id and t.preferred = 't'";

        // return $this->createQueryBuilder()->select('c.id')->from('concept', 'c')->innerJoin('c', 'term', 't', 'c.id = t.concept_id')->getQuery()->getResult();


        $conn = $this->getEntityManager()->getConnection();
        $conn->createQueryBuilder()->select('c.id')->from('concept', 'c')->innerJoin('c', 'term', 't', 'c.id = t.concept_id');


        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }



    public function getPreferredTermsSQL() {

        $sql = "SELECT * FROM concept c LEFT JOIN term t ON c.id = t.concept_id and t.preferred = 't'";
        //or
        $sql = $conn->createQueryBuilder()->select('c.id')->from('concepts', 'c')->innerJoin('c', 'terms', 't', 'c.id = t.concept_id');


        $conn = $this->getEntityManager()->getConnection();

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // public function getPreferredTermsSQL() {
    //         require('/Users/josephglass/.composer/vendor/autoload.php');
    //         \Psy\Shell::debug(get_defined_vars(), $this);
    //
    //     return $this->createQueryBuilder('c')
    //     $sql = "SELECT * FROM concept c LEFT JOIN term t ON c.id = t.concept_id and t.preferred = 't'";
    //
    //     $conn = $this->getDoctrine()->getEntityManager()->getConnection();
    //
    //     $stmt = $conn->getConnection()->prepare($sql);
    //     $stmt->execute();
    //     return $stmt->fetchAll();
    // }
    //


//    /**
//     * @return Concept[] Returns an array of Concept objects
//     */
    /*
    public function findByExampleField($value) {
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
    public function findOneBySomeField($value): ?Concept {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

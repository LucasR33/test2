<?php

namespace App\Repository;

use App\Entity\UserPersonnage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UserPersonnage|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserPersonnage|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserPersonnage[]    findAll()
 * @method UserPersonnage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserPersonnageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UserPersonnage::class);
    }

    // /**
    //  * @return UserPersonnage[] Returns an array of UserPersonnage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserPersonnage
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

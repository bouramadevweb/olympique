<?php

namespace App\Repository;

use App\Entity\DatesCommandes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DatesCommandes>
 *
 * @method DatesCommandes|null find($id, $lockMode = null, $lockVersion = null)
 * @method DatesCommandes|null findOneBy(array $criteria, array $orderBy = null)
 * @method DatesCommandes[]    findAll()
 * @method DatesCommandes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DatesCommandesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DatesCommandes::class);
    }

    //    /**
    //     * @return DatesCommandes[] Returns an array of DatesCommandes objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('d.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?DatesCommandes
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

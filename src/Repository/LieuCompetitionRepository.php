<?php

namespace App\Repository;

use App\Entity\LieuCompetition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LieuCompetition>
 *
 * @method LieuCompetition|null find($id, $lockMode = null, $lockVersion = null)
 * @method LieuCompetition|null findOneBy(array $criteria, array $orderBy = null)
 * @method LieuCompetition[]    findAll()
 * @method LieuCompetition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LieuCompetitionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LieuCompetition::class);
    }

    //    /**
    //     * @return LieuCompetition[] Returns an array of LieuCompetition objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('l.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?LieuCompetition
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

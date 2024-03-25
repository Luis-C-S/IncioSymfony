<?php

namespace App\Repository;

use App\Entity\CoRates;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CoRates>
 *
 * @method CoRates|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoRates|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoRates[]    findAll()
 * @method CoRates[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoRatesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CoRates::class);
    }

    //    /**
    //     * retorna las tarifas de Paq Premium Internacional
    //     */
    public function showRatesPaqPremiumInternacional()
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT c.id, c.product, c.zone, c.id_zone, c.weight, c.kg_fraction, c.rate, c.rate_backup
             FROM App\Entity\CoRates c
             WHERE c.product = :product'
        )->setParameter('product', 'Paq Premium Internacional');

        return $query->getArrayResult();
    }

    public function showRatesPaqStandardInternacional()
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT c.id, c.product, c.zone, c.id_zone, c.weight, c.kg_fraction, c.rate, c.rate_backup
             FROM App\Entity\CoRates c
             WHERE c.product = :product'
        )->setParameter('product', 'Paq Standard Internacional');

        return $query->getArrayResult();
    }

    //    public function findOneBySomeField($value): ?CoRates
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

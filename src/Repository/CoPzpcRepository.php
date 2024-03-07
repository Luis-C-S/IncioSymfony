<?php

namespace App\Repository;

use App\Entity\CoPzpc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CoPzpc>
 *
 * @method CoPzpc|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoPzpc|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoPzpc[]    findAll()
 * @method CoPzpc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoPzpcRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CoPzpc::class);
    }
    //Tabla para mostrar productos
    public function showProductTable()
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT DISTINCT c.product, c.product_active
         FROM App\Entity\CoPzpc c'
        );

        return $query->getResult();
    }
    //Tabla para mostrar detalles
    public function showDetailTable($product)
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT c.product, c.product_active, c.zone, c.ID_zone, c.zone_active, c.country, c.ID_country, c.country_active
             FROM App\Entity\CoPzpc c
             WHERE c.product = :product'
        )->setParameter('product', $product);      

        $resultados = $query->getResult();          
        
        return $resultados;         
    }
    

    public function updateProductActiveByProductId($productId, $newProductActive)
    {
        $qb = $this->createQueryBuilder('c');
        $qb->update(CoPzpc::class, 'c')
            ->set('c.product_active', ':newProductActive')
            ->where('c.product_id = :productId')
            ->setParameter('newProductActive', $newProductActive)
            ->setParameter('productId', $productId);

        $query = $qb->getQuery();
        $query->execute();
    }



    //    /**
    //     * @return CoPzpc[] Returns an array of CoPzpc objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?CoPzpc
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}


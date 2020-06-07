<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Entity\Operations;
use App\Entity\PropertySearch;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Operations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Operations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Operations[]    findAll()
 * @method Operations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OperationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Operations::class);
    }

    /**
     * @return operation[]
     */

    public function findSearch(SearchData $search, User $user): array
    {

        $query = $this
            ->createQueryBuilder('operations')
            //operations.category is already an ID
            ->join('operations.category', 'category')
            ->join('operations.type', 'type')
            ->join('operations.user', 'user')
            ->where('operations.user = :user')
            ->setParameter('user', $user)
            ->orderBy('operations.date', 'DESC');

        // handle search bar
        if (!empty($search->q)) {
            $query = $query
                ->andWhere('operations.content LIKE :q')
                ->setParameter('q', "%{$search->q}%");
        }

        if (!empty($search->type)) {
            $query = $query
                ->andWhere('type IN (:type)')
                ->setParameter('type', $search->type);
        }

        if (!empty($search->categories)) {
            $query = $query
                //operations.category is already an ID then access table category
                ->andWhere('category IN (:category)')
                ->setParameter('category', $search->categories);
        }

        if (!empty($search->min)) {
            $query = $query
                ->andWhere('operations.amount >= :min')
                ->setParameter('min', $search->min)
                ->orderBy('operations.amount', 'ASC');
        }
        if (!empty($search->max)) {
            $query = $query
                ->andWhere('operations.amount <= :max')
                ->setParameter('max', $search->max)
                ->orderBy('operations.amount', 'DESC');
        }

        return $query->getQuery()->getResult();
    }
    /**
     * @return operation[]
     */

    public function findAllOperationsByUsers(User $user): array
    {
        $query = $this
            ->createQueryBuilder('operations')
            //operations.category is already an ID
            ->join('operations.category', 'category')
            ->join('operations.type', 'type')
            ->join('operations.user', 'user')
            ->where('operations.user = :user')
            ->setParameter('user', $user)
            ->orderBy('operations.date', 'DESC');
        return $query->getQuery()->getResult();
    }
}

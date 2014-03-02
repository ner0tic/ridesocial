<?php
  namespace Ddnet\PortfolioBundle\Repository;
  
  use Doctrine\ORM\EntityRepository;
  
  class StatusRepository extends EntityRepository {
    public function orderByName() {
      return $this->getEntityManager()
                  ->createQuery('SELECT s FROM DdnetPortfolioBundle:Status s ORDER BY s.name ASC')
                  ->getResult();      
    }    
  }
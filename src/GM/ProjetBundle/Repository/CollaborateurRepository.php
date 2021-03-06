<?php

namespace GM\ProjetBundle\Repository;

/**
 * CollaborateurRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CollaborateurRepository extends \Doctrine\ORM\EntityRepository
{
    public function requete1() {

        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT f.user as Collaborateur, f.nom as Nom FROM GMProjetBundle:Collaborateur f');
        $query0 = $em->createQuery('SELECT AVG(f.montant) as Montant, m.annonceur as Nom FROM GMProjetBundle:Frais f JOIN f.projet m GROUP BY f.projet');                            /* ->setMaxResults(1) */
        $query1 = $em->createQuery('SELECT f.id as Collaborateur FROM GMProjetBundle:Frais f ');
        $query2 = $em->createQuery('SELECT AVG(f.montant) as Montant, m.nom as Nom FROM GMProjetBundle:Frais f JOIN f.collaborateur m GROUP BY f.collaborateur');
        
        $query->setMaxResults(4);
        return $query->getResult();
    }
    
    
    public function getColl(){
        $rsm = new \Doctrine\ORM\Query\ResultSetMapping();
      $query = $this->getEntityManager()->createNativeQuery(
              'select id, user FROM collaborateur ', $rsm);
      
      return $query->getr;
    }
    
    public function getAllWithoutProject()
    {

            $q1=$this->getEntityManager()->getRepository('GMProjetBundle:Projet')->createQueryBuilder('p')
                    ->select('c2.id')
                    ->join('p.collaborateurs','c2');

            $queryBuilder=$this->createQueryBuilder('c');
            
            $queryBuilder->where( $queryBuilder->expr()->notIn('c.id',$q1->getDQL()));
            
            return $queryBuilder->getQuery()->getResult();

    }
    
      public function getAllWithinProject()
    {

            $q1=$this->getEntityManager()->getRepository('GMProjetBundle:Projet')->createQueryBuilder('p')
                    ->select('c2.id')
                    ->join('p.collaborateurs','c2');

            $queryBuilder=$this->createQueryBuilder('c');
            
            $queryBuilder->where( $queryBuilder->expr()->In('c.id',$q1->getDQL()));
            
            return $queryBuilder->getQuery()->getResult();

    }
    
}

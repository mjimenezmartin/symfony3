<?php 
	
	namespace BlogBundle\Repository;
	use BlogBundle\Entity\Etiqueta;
	use BlogBundle\Entity\EntradaEtiqueta;
	use \Doctrine\ORM\Tools\Pagination\Paginator;

	/**
	* Lo utilizamos para introducir los métodos que interactuan con la base de datos.
	* Equivale al Model junto con las entidades.
	*/
	class EntradaRepository extends \Doctrine\ORM\EntityRepository
	{
		
		public function guardarEntradaEtiqueta($etiquetas, $entrada){

			$em = $this->getEntityManager();

			$etiqueta_repo= $em->getRepository("BlogBundle:Etiqueta");
			
			$etiquetas = explode(",", $etiquetas);




			foreach ($etiquetas as $etiqueta) {
				if ($etiqueta){
					$isset_etiqueta = $etiqueta_repo->findOneBy(array("nombre"=>$etiqueta));
					
					if(count($isset_etiqueta)==0){
						$etiqueta_obj= new Etiqueta();
						$etiqueta_obj->setNombre($etiqueta);
						$etiqueta_obj->setDescripcion($etiqueta);
						$em->persist($etiqueta_obj);
						$flush = $em->flush();		
					}
					$etiqueta = $etiqueta_repo->findOneBy(array("nombre"=>$etiqueta));

					$entradaEtiqueta = new EntradaEtiqueta();
					$entradaEtiqueta->setEntrada($entrada);
					$entradaEtiqueta->setEtiqueta($etiqueta);
					$em->persist($entradaEtiqueta);
				}
			}
			$flush = $em->flush();
			return $flush;
		}

		public function paginaEntradas($pageSize=5, $currentPage=1)
		{
			$em = $this->getEntityManager();
			$dql = "SELECT e FROM BlogBundle\Entity\Entrada e ORDER BY e.id DESC";

			$query = $em->createQuery($dql)
				->setFirstResult($pageSize*($currentPage-1))
				->setMaxResults($pageSize);
			
			$paginator = new Paginator($query, $fetchJoinCollection = true);
			return $paginator;
		}
		public function paginaEntradasCategoria($categoria, $pageSize=5, $currentPage=1){
			$em = $this->getEntityManager();
			$dql = "SELECT e FROM BlogBundle\Entity\Entrada e WHERE e.categoria = :categoria ORDER BY e.id DESC";
			$query = $em->createQuery($dql)
						->setParameter("categoria", $categoria)
						->setFirstResult($pageSize*($currentPage-1))
						->setMaxResults($pageSize);
			$paginator = new Paginator($query, $fetchJoinCollection = true);
			return $paginator;
		}

	}

 ?>
 
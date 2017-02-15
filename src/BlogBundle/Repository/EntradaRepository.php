<?php 
	
	namespace BlogBundle\Repository;
	use BlogBundle\Entity\Etiqueta;
	use BlogBundle\Entity\EntradaEtiqueta;


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

				$isset_etiqueta = $etiqueta_repo->findOneBy(array("nombre"=>$etiqueta));

				if(count($isset_etiqueta)==0){
					$etiqueta_obj= new Etiqueta();
					$etiqueta_obj->setNombre($etiqueta);
					$etiqueta_obj->setDescripcion($etiqueta);
					$em->persist($etiqueta_obj);
					$flush = $em->flush();
				}
			}
			/*$flush = $em->flush();*/
			return $flush;
		}

	}

 ?>
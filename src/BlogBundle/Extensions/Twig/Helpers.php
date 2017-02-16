<?php 
namespace BlogBundle\Extensions\Twig;
use Symfony\Bridge\Doctrine\RegistryInterface;

class Helpers extends \Twig_Extension
{

	protected $doctrine;

	public function __construct(RegistryInterface $doctrine){
		$this->doctrine = $doctrine;
	}

	public function getFunctions(){
		return array(
			new \Twig_SimpleFunction( "getCategorias", array($this, 'getCategorias'))
		);
	}

	public function getCategorias(){
		$categorias_repo = $this->doctrine->getEntityManager()->getRepository("BlogBundle:Categoria");
		$categorias= $categorias_repo->findAll();
		return $categorias;
	}

	public function getName(){
		return "helpers";
	}
}


 ?>
<?php 
namespace AppBundle\Twig;

class FilterVistas extends \Twig_Extension{

	public function getFilters(){
		return array(
			new \Twig_SimpleFilter("addText", array($this, 'addText'))
			);
	}

	public function addText($cadena, $num){

		return $cadena." Texto Añadido".$num;

	}

	public function getName(){
		return "filter_vistas";
	}
}

 ?>
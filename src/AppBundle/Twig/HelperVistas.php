<?php 
namespace AppBundle\Twig;

class HelperVistas extends \Twig_Extension{

	public function getFunctions(){
		return array(
			new \Twig_SimpleFunction( "generateTable", array($this, 'generateTable'))
		);
	}

	public function generateTable($resultSet){
		$table = "<table class='table' style='border: 1px solid black;'>";
		for ($i=0; $i < count($resultSet); $i++) {
			$table .= "<tr>"; 
			for ($j=0; $j < count($resultSet[$i])  ; $j++) { 
				$resulSet_values=array_values($resultSet[$i]);
				$table .= "<td>".$resulSet_values[$j]."</td>";
			}
			$table .= "</tr>";
		}
		$table .= "</table>";
		return $table;
	}

	public function getName(){
		return "app_bundle";
	}

}
 ?>

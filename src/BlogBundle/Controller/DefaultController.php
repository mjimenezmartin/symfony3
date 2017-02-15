<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

    	/*$em = $this->getDoctrine()->getManager();
    	$entry_repo = $em->getRepository("BlogBundle:Entrada");
    	$entradas = $entry_repo->findAll();

    	foreach ($entradas as $entrada) {
    		echo $entrada->getTitulo()."<br>";
    		echo $entrada->getCategoria()->getNombre()."<br>";
    		echo $entrada->getUsuario()->getNombre()."<br>";
    	
    		$tags = $entrada->getEntradaEtiqueta();

    		foreach ($tags as $etiqueta) {
                echo $etiqueta->getEtiqueta()->getNombre().", ";
    		}
            echo "<hr>";
    	}
        $em = $this->getDoctrine()->getManager();
        $categoria_repo = $em->getRepository("BlogBundle:Categoria");
        $categorias = $categoria_repo->findAll();

        foreach ($categorias as $categoria) {
            echo $categoria->getNombre()."<br>";
        
            $entradas = $categoria->getEntrada();

            foreach ($entradas as $entrada) {
                echo $entrada->getTitulo().", ";
            }
            echo "<hr>";
        }
        $em = $this->getDoctrine()->getManager();
        $etiqueta_repo = $em->getRepository("BlogBundle:Etiqueta");
        $etiquetas = $etiqueta_repo->findAll();

        foreach ($etiquetas as $etiqueta) {
            echo $etiqueta->getNombre()."<br>";
        
            $entradaEtiqueta = $etiqueta->getEntradaEtiqueta();

            foreach ($entradaEtiqueta as $entrada) {
                echo $entrada->getEntrada()->getTitulo().", ";
            }
            echo "<hr>";
        }
        $em = $this->getDoctrine()->getManager();
        $usuario_repo = $em->getRepository("BlogBundle:Usuario");
        $usuarios = $usuario_repo->findAll();

        foreach ($usuarios as $usuario) {
            echo "<h1>".$usuario->getNombre()."</h1>";
        
            $usuarioEntrada = $usuario->getEntrada();

            foreach ($usuarioEntrada as $entrada) {
                echo "<h2>".$entrada->getTitulo()."</h2>";
                $entradaEtiquetas = $entrada->getEntradaEtiqueta();

                foreach ($entradaEtiquetas as $etiqueta) {
                    echo "<h3>".$etiqueta->getEtiqueta()->getNombre()."<h3>";
                }
            }
            echo "<hr>";
        }
    	die();
        */
        return $this->render('BlogBundle:Default:index.html.twig');
    }
}

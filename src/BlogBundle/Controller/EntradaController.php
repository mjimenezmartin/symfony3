<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use BlogBundle\Entity\Entrada;
use BlogBundle\Form\EntradaType;

class EntradaController extends Controller
{
    private $session;
    public function __construct(){
        $this->session = new Session();
    }

    public function indexAction(){

        $em = $this->getDoctrine()->getManager();
        $entrada_repo = $em->getRepository("BlogBundle:Entrada");

        $entradas = $entrada_repo->findAll();


        return $this->render("BlogBundle:Entrada:index.html.twig", array(
            "entradas" => $entradas
        ));
    }

    public function addAction(Request $request){

        $entrada = new Entrada();
        $form = $this->createForm(EntradaType::class, $entrada);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $categoria_repo = $em->getRepository("BlogBundle:Categoria");
                $entrada_repo = $em->getRepository("BlogBundle:Entrada");
                $entrada = new Entrada();

                $entrada->setTitulo($form->get("titulo")->getData());
                $entrada->setContenido($form->get("contenido")->getData());
                $entrada->setStatus($form->get("status")->getData());

                //SUBIR FICHERO
                $file = $form["image"]->getData();
                $ext = $file->guessExtension();
                $file_name = time().".".$ext;
                $file->move("uploads", $file_name);

                $entrada->setImage($file_name);
                
                $categoria = $categoria_repo->find($form->get("categoria")->getData());
                $entrada->setCategoria($categoria);
                
                $user = $this->getUser();
                $entrada->setUsuario($user);

                $em->persist($entrada);
                $flush = $em->flush();

                $entrada_repo->guardarEntradaEtiqueta(
                	$form->get("etiqueta")->getData(),
                	$entrada
                	);
				
                if ($flush == null) {
                    $status = "success";
                    $message = "La entrada se ha creado correctamente!!";   
                }
                else {
                    $status = "danger";
                    $message = "La entrada no se ha creado porque el formulario no es válido!!";
                }

            } else{
                $status = "danger";
                $message = "Ha ocurrido un error añadiendo la entrada!!";
            }
            $this->session->getFlashBag()->add($status, $message);
            return $this->redirectToRoute("blog_index_entrada");
        }
        return $this->render("BlogBundle:Entrada:add.html.twig", array(
            "form" => $form->createView()
        ));
    }

    public function deleteAction($id){

        $em = $this->getDoctrine()->getManager();
        $entrada_repo = $em->getRepository("BlogBundle:Entrada");
        $entradaEtiqueta_repo = $em->getRepository("BlogBundle:EntradaEtiqueta");

        $entrada = $entrada_repo->find($id);
        $entradaEtiqueta = $entradaEtiqueta_repo->findBy(array('entrada'=>$id));

        foreach ($entradaEtiqueta as $idEntrada) {
        	$em->remove($idEntrada);
        }
        if ($entrada->getImage()) {
        	unlink("uploads/".$entrada->getImage());
        }
        
        $em->remove($entrada);
        $em->flush();

        return $this->redirectToRoute("blog_homepage");
    }

    public function updateAction(Request $request, $id){

        $em = $this->getDoctrine()->getManager();
        $entrada_repo = $em->getRepository("BlogBundle:Entrada");
        $categoria_repo = $em->getRepository("BlogBundle:Categoria");
        

        $entrada = $entrada_repo->find($id);
        $nombreImagen = $entrada->getImage();
        $etiquetas = "";
        foreach ($entrada->getEntradaEtiqueta() as $etiqueta) {
        	$etiquetas .= $etiqueta->getEtiqueta()->getNombre().", ";
        }

                
        $form = $this->createForm(EntradaType::class, $entrada);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {


                $entrada->setTitulo($form->get("titulo")->getData());
                $entrada->setContenido($form->get("contenido")->getData());
                $entrada->setStatus($form->get("status")->getData());
                $entrada->setImage($nombreImagen);



                //SUSTITUIR FICHERO
                if ($form["image"]->getData() && $form["image"]->getData() != $nombreImagen) {
                	if ($nombreImagen){
                		unlink("uploads/".$nombreImagen);
                	}
                	$file = $form["image"]->getData();
	                $ext = $file->guessExtension();
	                $file_name = time().".".$ext;
	                $file->move("uploads", $file_name);

	                $entrada->setImage($file_name);
                }
                
                
                $categoria = $categoria_repo->find($form->get("categoria")->getData());
                $entrada->setCategoria($categoria);
                
                $entradaEtiqueta_repo = $em->getRepository("BlogBundle:EntradaEtiqueta");
                $entradaEtiqueta = $entradaEtiqueta_repo->findBy(array('entrada'=>$id));

		        foreach ($entradaEtiqueta as $idEntrada) {
		        	$em->remove($idEntrada);
		        	$em->flush();
		        }	

                $em->persist($entrada);
                $flush = $em->flush();


                $entrada_repo->guardarEntradaEtiqueta(
                	$form->get("etiqueta")->getData(),
                	$entrada
                	);
				

                if ($flush == null) {
                    $status = "success";
                    $message = "La entrada se ha modificado correctamente!!";   
                }
                else {
                    $status = "danger";
                    $message = "La entrada no se ha modificado porque el formulario no es válido!!";
                }

            } else{
                $status = "danger";
                $message = "Ha ocurrido un error modificando la entrada!!";
            }
            $this->session->getFlashBag()->add($status, $message);
            return $this->redirectToRoute("blog_index_entrada");
        }

        return $this->render("BlogBundle:Entrada:update.html.twig", array(
            "form" => $form->createview(),
            "entrada" => $entrada,
            "etiquetas" => $etiquetas,
        ));
    }
}
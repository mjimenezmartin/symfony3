<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use BlogBundle\Entity\Categoria;
use BlogBundle\Form\CategoriaType;

class CategoriaController extends Controller
{
    private $session;
    public function __construct(){
        $this->session = new Session();
    }

    public function indexAction(){

        $em = $this->getDoctrine()->getManager();
        $categoria_repo = $em->getRepository("BlogBundle:Categoria");

        $categorias = $categoria_repo->findAll();


        return $this->render("BlogBundle:categoria:index.html.twig", array(
            "categorias" => $categorias
        ));
    }

    public function addAction(Request $request){

        $categoria = new Categoria();
        $form = $this->createForm(CategoriaType::class, $categoria);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();

                $categoria = new Categoria();

                $categoria->setNombre($form->get("nombre")->getData());
                $categoria->setDescripcion($form->get("descripcion")->getData());

                $em->persist($categoria);
                $flush = $em->flush();

                if ($flush == null) {
                    $status = "success";
                    $message = "La categoria se ha creado correctamente!!";   
                }
                else {
                    $status = "danger";
                    $message = "La categoria no se ha creado porque el formulario no es válido!!";
                }

            } else{
                $status = "danger";
                $message = "Ha ocurrido un error añadiendo la categoria!!";
            }
            $this->session->getFlashBag()->add($status, $message);
            return $this->redirectToRoute("blog_index_categoria");
        }
        return $this->render("BlogBundle:categoria:add.html.twig", array(
            "form" => $form->createView()
        ));
    }

    public function deleteAction($id){

        $em = $this->getDoctrine()->getManager();
        $categoria_repo = $em->getRepository("BlogBundle:Categoria");

        $categoria = $categoria_repo->find($id);

        $em->remove($categoria);
        $em->flush();

        return $this->redirectToRoute("blog_index_categoria");
    }

    public function updateAction(Request $request, $id){

        $em = $this->getDoctrine()->getManager();
        $categoria_repo = $em->getRepository("BlogBundle:Categoria");

        $categoria = $categoria_repo->find($id);

        $form = $this->createForm(CategoriaType::class, $categoria);
        $form->handleRequest($request);


        if ($form->isSubmitted()) {
            if ($form->isValid()) {


                $categoria->setNombre($form->get("nombre")->getData());
                $categoria->setDescripcion($form->get("descripcion")->getData());

                $em->persist($categoria);
                $flush = $em->flush();

                if ($flush == null) {
                    $status = "success";
                    $message = "La categoria se ha modificado correctamente!!";   
                }
                else {
                    $status = "danger";
                    $message = "La categoria no se ha modificado porque el formulario no es válido!!";
                }

            } else{
                $status = "danger";
                $message = "Ha ocurrido un error modificando la categoria!!";
            }
            $this->session->getFlashBag()->add($status, $message);
            return $this->redirectToRoute("blog_index_categoria");
        }

        return $this->render("BlogBundle:categoria:update.html.twig", array(
            "form" => $form->createview()
        ));
    }
}
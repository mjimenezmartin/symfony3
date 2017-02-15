<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use BlogBundle\Entity\Etiqueta;
use BlogBundle\Form\EtiquetaType;

class EtiquetaController extends Controller
{
    private $session;
    public function __construct(){
        $this->session = new Session();
    }

    public function indexAction(){

        $em = $this->getDoctrine()->getManager();
        $etiqueta_repo = $em->getRepository("BlogBundle:Etiqueta");

        $etiquetas = $etiqueta_repo->findAll();


        return $this->render("BlogBundle:etiqueta:index.html.twig", array(
            "etiquetas" => $etiquetas
        ));
    }

    public function addAction(Request $request){

        $etiqueta = new Etiqueta();
        $form = $this->createForm(EtiquetaType::class, $etiqueta);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();

                $etiqueta = new Etiqueta();

                $etiqueta->setNombre($form->get("nombre")->getData());
                $etiqueta->setDescripcion($form->get("descripcion")->getData());

                $em->persist($etiqueta);
                $flush = $em->flush();

                if ($flush == null) {
                    $status = "success";
                    $message = "La etiqueta se ha creado correctamente!!";   
                }
                else {
                    $status = "danger";
                    $message = "La etiqueta no se ha creado porque el formulario no es válido!!";
                }

            } else{
                $status = "danger";
                $message = "Ha ocurrido un error añadiendo la etiqueta!!";
            }
            $this->session->getFlashBag()->add($status, $message);
            return $this->redirectToRoute("blog_index_etiqueta");
        }
        return $this->render("BlogBundle:etiqueta:add.html.twig", array(
            "form" => $form->createView()
        ));
    }

    public function deleteAction($id){

        $em = $this->getDoctrine()->getManager();
        $etiqueta_repo = $em->getRepository("BlogBundle:Etiqueta");

        $etiqueta = $etiqueta_repo->find($id);

        $em->remove($etiqueta);
        $em->flush();

        return $this->redirectToRoute("blog_index_etiqueta");
    }
}

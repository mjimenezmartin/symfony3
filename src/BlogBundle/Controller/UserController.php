<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use BlogBundle\Entity\Usuario;
use BlogBundle\Form\UsuarioType;

class UserController extends Controller
{
    private $session;
    public function __construct(){
        $this->session = new Session();
    }

    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get("security.authentication_utils");
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        $usuario = new Usuario();
        $form = $this->createForm(UsuarioType::class, $usuario);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if($form->isValid()){
                    $em = $this->getDoctrine()->getManager();
                    $usuario_repo=$em->getRepository("BlogBundle:Usuario");
                    $usuario = $usuario_repo->findOneBy(array("email"=>$form->get("email")->getData()));
                    if (count($usuario)==0) {
                        $usuario = new Usuario();
                        $usuario->setNombre($form->get("nombre")->getData());

                        $factory = $this->get("security.encoder_factory");
                        $encoder = $factory->getEncoder($usuario);
                        $password = $encoder->encodePassword($form->get("password")->getData(), $usuario->getSalt());

                        $usuario->setPassword($password);
                        $usuario->setEmail($form->get("email")->getData());
                        $usuario->setRol("ROLE_USER");
                        $usuario->setImage(null);

                        $em = $this->getDoctrine()->getManager();
                        $em->persist($usuario);
                        $flush = $em->flush();
                        if ($flush==null) {
                            $status = "El usuario se ha creado correctamente";
                            $estado = "success";
                        } else {
                            $status = "No te has registrado correctamente";
                            $estado = "danger";
                        }   
                    } else{
                        $status = "El usuario ya existe";
                        $estado = "warning";
                } 
            } else {
                    $status = "No te has registrado correctamente";
                    $estado = "danger";
                }

                $this->session->getFlashBag()->add($estado, $status);
            }

        return $this->render(
            "BlogBundle:user:login.html.twig", array(
                "error" => $error,
                "last_username" => $lastUsername,
                "form" => $form->createView()
                )
            );
    }
}

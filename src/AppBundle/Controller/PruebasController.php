<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Curso;
use AppBundle\Form\CursoType;
use Symfony\Component\Validator\Constraints as Assert;

class PruebasController extends Controller
{
    public function indexAction(Request $request, $name, $page)
    {
    	/*return $this->redirect($request->getBaseUrl()."/hello-world?hola=true");*/
        // replace this example code with whatever you need
        //var_dump($request->query->get('name'));
        //die();

        $productos = array(
            array("nombre"=>"Consola", "precio"=>2),
            array("nombre"=>"Consola1", "precio"=>5),
            array("nombre"=>"Consola2", "precio"=>6),
            array("nombre"=>"Consola3", "precio"=>7),
            array("nombre"=>"Consola4", "precio"=>8),
            array("nombre"=>"Consola5", "precio"=>9),
            array("nombre"=>"Consola6", "precio"=>12),
            );

        $frutas=array("manzana"=>"golden","pera"=>"de agua");

        return $this->render('AppBundle:Pruebas:index.html.twig', [
            'texto' => $name."-".$page,
            'productos' => $productos,
            'frutas'=>$frutas
        ]);
    }
    public function createAction(){

        $curso = new Curso();
        $curso->setTitulo("Curso de symfony3");
        $curso->setDescripcion("Curso completo de Symfony 3");
        $curso->setPrecio(80);

        $em = $this->getDoctrine()->getManager();
        $em->persist($curso);
        $flush=$em->flush();

        if($flush != null){
            echo "El curso no se ha creado bien!!";
        }
        else{
            echo "Curso creado correctamente!";
        }
        die();
    }

    public function readAction(){
        $em = $this->getDoctrine()->getManager();
        $cursos_repo = $em->getRepository("AppBundle:Curso");
        $cursos = $cursos_repo->findAll();

        /*$cursos = $cursos_repo->findOneByPrecio(80);
        echo $cursos->getTitulo();*/

        /*foreach($cursos as $curso){
            echo $curso->getTitulo()."<br>";
            echo $curso->getDescripcion()."<br>";
            echo $curso->getPrecio()."<br><hr>";

        }*/
        die();


    }
    public function updateAction($id,$titulo,$descripcion, $precio){
        $em = $this->getDoctrine()->getManager();
        $cursos_repo = $em->getRepository("AppBundle:Curso");

        $curso = $cursos_repo->find($id);
        $curso->setTitulo($titulo);
        $curso->setDescripcion($descripcion);
        $curso->setPrecio($precio);

        $em->persist($curso);
        $flush=$em->flush();

        if ($flush!=null){
            echo "El curso NO se ha actualizado";
        }else{
            echo "Curso actualizado correctamente";
        }
        die();
    }
    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $cursos_repo = $em->getRepository("AppBundle:Curso");

        $curso = $cursos_repo->find($id);
        $em->remove($curso);

        $flush=$em->flush();
        
        if ($flush!=null){
            echo "El curso NO se ha eliminado";
        }else{
            echo "Curso eliminado correctamente";
        }
        die();
    }
    public function nativeSqlAction(){
        $em = $this->getDoctrine()->getManager();
        $cursos_repo = $em->getRepository("AppBundle:Curso");
        /*$db = $em->getConnection();
        $query = "SELECT * FROM cursos";
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);

        $cursos = $stmt->fetchAll();*/

        /*$query = $em->createQuery("
            SELECT c FROM AppBundle:Curso c
            WHERE c.precio > :precio
            ")->setParameter("precio","75");
        $cursos = $query->getResult();*/


        $cursos = $cursos_repo->getCursos();

        foreach ($cursos as $curso) {
            echo $curso->getTitulo()."<br>";
        }
        die();
    }
    public function formAction(Request $request){
        $curso = new Curso();
        $form = $this->createForm(CursoType::class, $curso);

        $form->handleRequest($request);

        if($form->isValid()){
            $status = "Formulario válido";
            $data = array(
                "titulo" => $form->get("titulo")->getData(),
                "descripcion" => $form->get("descripcion")->getData(),
                "precio" => $form->get("precio")->getData()
            );
        } else{
            $status = null;
            $data = null;
        }

        return $this->render('AppBundle:Pruebas:form.html.twig', [
            'form' => $form->createView(),
            'status' => $status,
            'data' => $data
        ]);
    }

    public function validarEmailAction($email){
        $emailConstraint = new Assert\Email();
        $emailConstraint->message = "El email introducido no es válido";

        $error= $this->get("validator")->validate(
            $email,
            $emailConstraint
        );
        if (count($error)==0) {
            echo "Correo válido.";
        } else{
            echo $error[0]->getMessage();
        }
        die();
    }
}
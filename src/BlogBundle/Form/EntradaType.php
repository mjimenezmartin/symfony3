<?php

namespace BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class EntradaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('titulo', TextType::class, array("label"=>"Título", "required" => "required", "attr" => array( "class" => "form-titulo form-control")))
        ->add('contenido', TextareaType::class, array("label"=>"Contenido", "required" => "required", "attr" => array( "class" => "form-descripcion form-control")))
        ->add('status', ChoiceType::class, array("label"=>"Estado","choices"=>array("publicado"=>"published", "borrador"=>"private"), "required" => "required", "attr" => array( "class" => "form-descripcion form-control")))
        ->add('image', FileType::class, array("label"=>"Imagen", "attr" => array( "class" => "form-descripcion form-control"), "data_class"=>null, 'required' => false,))
        ->add('categoria', EntityType::class, array("label"=>"Categoria", "class"=>"BlogBundle:Categoria", "choice_label"=>"nombre", "attr" => array( "class" => "form-descripcion form-control")))
        //->add('usuario')
        ->add('etiqueta', TextType::class, array("label"=>"Etiquetas", "mapped"=>false, "required" => "required", "attr" => array( "class" => "form-titulo form-control")))
        ->add('Guardar', SubmitType::class, array("attr"=>array("class"=>"btn btn-success")))      
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BlogBundle\Entity\Entrada'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'blogbundle_entrada';
    }


}

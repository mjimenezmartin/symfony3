<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
class CursoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('titulo', TextType::Class, array("required"=>"required","attr"=>array("class"=>"form-titulo")))
        ->add('descripcion',TextareaType::Class)
        //->add('precio',TextType::Class)
        /*->add('precio', ChoiceType::Class, array(
            "choices" => array(
                "hombre" => "Hombre",
                "mujer" => "Mujer",
                "cosa" => "Cosa"
            )
        ))*/
        ->add('precio', CheckboxType::Class, array(
            "label"=>"Mostrar precio?",
            "required" => true
        ))
        ->add('Guardar', SubmitType::Class)
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Curso'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_curso';
    }
    
}

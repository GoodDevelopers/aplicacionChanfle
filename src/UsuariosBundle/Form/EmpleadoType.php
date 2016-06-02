<?php

namespace UsuariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmpleadoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nuip', IntegerType::class, array('label' => 'No. de Identificacion:'))
            ->add('nombre', TextType::class, array('label' => 'Nombre y Apellidos:'))
            ->add('telefono', IntegerType::class, array('label' => 'Teléfono:'))
            ->add('esUsuario')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UsuariosBundle\Entity\Empleado'
        ));
    }
}

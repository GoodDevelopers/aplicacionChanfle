<?php

namespace UsuariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nuip', IntegerType::class, array('attr' => array('maxlength' => 11)))
            ->add('nombre')
            ->add('fechaDeNacimiento', DateType::class, array('label' => 'Fecha de nacimiento:', 'widget' => 'single_text','format' => 'yyyy-MM-dd'))
            ->add('puntosAcumulados', IntegerType::class, array('label' => 'Puntos acumulados:'))
            ->add('email', EmailType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UsuariosBundle\Entity\Cliente'
        ));
    }
}

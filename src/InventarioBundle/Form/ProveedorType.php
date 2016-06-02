<?php

namespace InventarioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProveedorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nit', TextType::class, array('label' => 'Nit:'))
            ->add('nombre', TextType::class, array('label' => 'Nombre:'))
            ->add('telefono', IntegerType::class, array('label' => 'Teléfono:'))
            ->add('correo', EmailType::class, array('label' => 'Email:'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'InventarioBundle\Entity\Proveedor'
        ));
    }
}

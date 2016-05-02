<?php

namespace VentasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use VentasBundle\Form\DetalleVentaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class VentaType extends AbstractType
{
   /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options )
    {

        $builder
            ->add('cliente', NumberType::class)
            ->add('valorTotal')
            ->add('tipoVenta')
            ->add('puntosVenta')
            ->add('mesa')
            ->add('personasPorMesa') 
            ->add('detalles', CollectionType::class, array(
                'entry_type' => new DetalleVentaType(),
                'allow_add' => true,
                'allow_delete' => true,
                'required' => false,
                'label' => null,
                
            ))


       
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            $defaultData = array('message' => 'Type your message here')
        ));
    }
}

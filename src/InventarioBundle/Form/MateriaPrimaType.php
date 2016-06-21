<?php

namespace InventarioBundle\Form;

use InventarioBundle\Entity\TipoUnidadDeMedida;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MateriaPrimaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class, array('label' => 'Nombre:'))
            ->add('unidadDeMedida',ChoiceType::class, array('label' => 'Unidad de Medida:','attr'=> array('class' => 'form-control'), 'choices'=>TipoUnidadDeMedida::getTipoUnidadDeMedida(),'placeholder' => 'Seleccione la unidad de medida'))
            ->add('cantidad', IntegerType::class, array('label' => 'Cantidad:'))
            ->add('precio', IntegerType::class, array('label' => 'Valor Unitario:'))
            ->add('stockMinimo', IntegerType::class, array('label' => 'Stock Mínimo:'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'InventarioBundle\Entity\MateriaPrima'
        ));
    }
}

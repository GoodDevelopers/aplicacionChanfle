<?php

namespace InventarioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use InventarioBundle\Entity\TipoUnidadDeMedida;

class MateriaPrimaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('unidadDeMedida',ChoiceType::class, array('attr'=> array('class' => 'form-control'), 'choices'=>TipoUnidadDeMedida::getTipoUnidadDeMedida(),'placeholder' => 'Seleccione la unidad de medida'))
            ->add('cantidad')
            ->add('precio')
            ->add('stockMinimo')
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

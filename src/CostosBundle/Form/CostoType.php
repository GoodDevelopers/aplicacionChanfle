<?php

namespace CostosBundle\Form;

use CostosBundle\Entity\TipoCosto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CostoType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('tipoCosto', ChoiceType::class, array('label' => 'Tipo Costo:', 'attr' => array('class' => 'form-control'), 'choices' => TipoCosto::getTiposCosto(), 'placeholder' => 'Seleccione el tipo de costo'))
                ->add('valor', IntegerType::class, array('label' => 'Valor:'))
                ->add('descripcion', TextareaType::class, array('label' => 'Descripción:'))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'CostosBundle\Entity\Costo'
        ));
    }

}

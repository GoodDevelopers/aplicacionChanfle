<?php

namespace CostosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use CostosBundle\Entity\TipoCosto;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CostoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder

                ->add('tipoCosto',ChoiceType::class, array('attr' => array('class' => 'form-control'), 'choices' => TipoCosto::getTiposCosto(), 'placeholder' => 'Seleccione el tipo de costo'))
                ->add('valor')
                ->add('descripcion', TextareaType::class)

        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CostosBundle\Entity\Costo'
        ));
    }
}

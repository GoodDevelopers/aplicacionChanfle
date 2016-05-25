<?php

namespace JornadasLaboralesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class CajaType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('fecha', DateType::class, array('label' => 'Fecha:', 'widget' => 'single_text', 'format' => 'yyyy-MM-dd'))
                ->add('cajaInicial', IntegerType::class)
                ->add('cajaInicialJustificacion', TextareaType::class)
                ->add('cajaFinal', IntegerType::class)
                ->add('cajaFinalJustificacion', TextareaType::class)
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'JornadasLaboralesBundle\Entity\Caja'
        ));
    }

}

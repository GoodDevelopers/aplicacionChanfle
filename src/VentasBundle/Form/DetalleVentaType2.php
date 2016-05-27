<?php

namespace VentasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class DetalleVentaType2 extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
//                ->add('fecha', 'datetime')
                ->add('cantidad')
//                ->add('valorDetalle')
//                ->add('venta', EntityType::class, array(
//                    'label' => 'Venta',
//                    'class' => 'VentasBundle:Venta',
//                    'query_builder' => function (EntityRepository $er) {
//                        return $er->createQueryBuilder('venta')->orderBy('venta.cliente', 'ASC');
//                    },
//                    'placeholder' => 'Seleccione la venta',
//                    'choice_label' => 'cliente.nombre',
//                ))
                ->add('producto', EntityType::class, array(
                    'label' => 'Producto',
                    'class' => 'InventarioBundle:Producto',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('producto')->orderBy('producto.nombre', 'ASC');
                    },
                    'placeholder' => 'Seleccione el producto',
                    'choice_label' => 'nombre',
                ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
             $defaultData = array('message' => 'Type your message here')
        ));
    }

}

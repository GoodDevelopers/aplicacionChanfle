<?php

namespace InventarioBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductoType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre', TextType::class, array('label' => 'Nombre:'))
                ->add('precio', IntegerType::class, array('label' => 'Precio:'))
                ->add('tipoProducto', EntityType::class, array(
                    'label' => 'Tipo de Producto:',
                    'class' => 'InventarioBundle:TipoProducto',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('tipo')
                                ->orderBy('tipo.nombre', 'ASC');
                    },
                    'placeholder' => 'Seleccione una opcion',
                    'choice_label' => 'nombre',))
                ->add('descripcion', TextareaType::class, array('label' => 'Descripción:'))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'InventarioBundle\Entity\Producto'
        ));
    }

}

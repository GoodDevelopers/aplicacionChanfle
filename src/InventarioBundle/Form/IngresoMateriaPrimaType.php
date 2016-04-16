<?php

namespace InventarioBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IngresoMateriaPrimaType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                //La fecha la debe dar el sistema
//                ->add('fecha', 'datetime')
                ->add('cantidad')
                ->add('valor')
                ->add('materiaPrima', EntityType::class, array(
                    'class' => 'InventarioBundle:MateriaPrima',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('materia')
                                ->orderBy('materia.nombre', 'ASC');
                    },
                    'placeholder' => 'Seleccione una opcion',
                    'choice_label' => 'nombre',))
                //El empleado es el que esta logueado
//                ->add('empleado')
                ->add('proveedor', EntityType::class, array(
                    'class' => 'InventarioBundle:Proveedor',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('proveedor')
                                ->orderBy('proveedor.nombre', 'ASC');
                    },
                    'placeholder' => 'Seleccione una opcion',
                    'choice_label' => 'nombre',))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'InventarioBundle\Entity\IngresoMateriaPrima'
        ));
    }

}

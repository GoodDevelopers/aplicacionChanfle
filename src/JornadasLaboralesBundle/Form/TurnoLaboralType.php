<?php

namespace JornadasLaboralesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class TurnoLaboralType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
                $builder
                ->add('empleado', EntityType::class, array(
                    'label' => 'Empleado',
                    'class' => 'UsuariosBundle:Empleado',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('empleado')->orderBy('empleado.nombre', 'ASC');
                    },
                    'placeholder' => 'Seleccione un empleado',
                    'choice_label' => 'nombre',
                ))
                ->add('cargo', EntityType::class, array(
                    'label' => 'Cargo',
                    'class' => 'JornadasLaboralesBundle:Cargo',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('cargo')->orderBy('cargo.nombre', 'ASC');
                    },
                    'placeholder' => 'Seleccione un cargo',
                    'choice_label' => 'nombre',
                ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JornadasLaboralesBundle\Entity\TurnoLaboral'
        ));
    }
}

<?php

namespace VentasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use VentasBundle\Form\DetalleVentaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use VentasBundle\Entity\TipoVenta;

class VentaType extends AbstractType
{
   /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options )
    {

        $builder
            ->add('cliente', EntityType::class, array(
                'label' => 'Cliente',
                'class' => 'UsuariosBundle:Cliente',
                'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('cliente')->orderBy('cliente.nombre', 'ASC');
                },      
                        'placeholder' => 'Nombre cliente',
                        'choice_label' => 'nombre',
             ))
            ->add('valorTotal', IntegerType::class, array('label' => 'Valor Total:'))
            ->add('tipoVenta', ChoiceType::class,array ('attr' => array( 'class' => 'form-group'), 'choices' => TipoVenta::getTiposVenta(),'placeholder' => 'Seleccione tipo de venta'))
            ->add('puntosVenta', IntegerType::class, array('label' => 'Puntos Venta:'))
            ->add('mesa', IntegerType::class, array('label' => 'Mesa:'))
            ->add('personasPorMesa', IntegerType::class, array('label' => 'Personas por Mesa:')) 
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

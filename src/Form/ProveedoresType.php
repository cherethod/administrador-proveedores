<?php

namespace App\Form;

use App\Entity\Proveedores;
use App\Entity\TipoProveedor;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProveedoresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre')
            ->add('email')
            ->add('telefono', IntegerType::class)
            ->add('activo', ChoiceType::class, [
                'choices' => [
                    '---' => null,
                    'Si' => true,
                    'No' => false,
                ],
            ])
//            ->add('fecha_alta')
//            ->add('ultima_modificacion')
            ->add('tipoProveedor', EntityType::class, [
                'class' => TipoProveedor::class,
                'choice_label' => 'nombre',
                'placeholder' => 'Seleccione tipo de proveedor',
                'choice_value' => 'id',
            ])
            ->add('Enviar', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Proveedores::class,
        ]);
    }
}

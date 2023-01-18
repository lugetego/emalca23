<?php

namespace App\Form;

use App\Entity\Registro;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Vich\UploaderBundle\Form\Type\VichFileType;


class RegistroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre')
            ->add('paterno')
            ->add('materno')
            ->add('sexo', ChoiceType::class, [
                'choices'  => [
                    'Hombre' => 'Hombre',
                    'Mujer' => 'Mujer',
                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('nacimiento',DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('mail')
            ->add('procedencia')
            ->add('carrera')
            ->add('semestre')
            ->add('porcentaje',ChoiceType::class, [
                'choices'  => [
                    '50'=>'50',
                    '60'=>'60',
                    '70'=>'70',
                    '80'=>'80',
                    '90'=>'90',
                    '100'=>'100'
                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('profesor')
            ->add('promedio',ChoiceType::class, [
                'choices'  => [
                    '8'=>'8.0',
                    '8.1'=>'8.1',
                    '8.2'=>'8.2',
                    '8.3'=>'8.3',
                    '8.4'=>'8.4',
                    '8.5'=>'8.5',
                    '8.6'=>'8.6',
                    '8.7'=>'8.7',
                    '8.8'=>'8.8',
                    '8.9'=>'8.9',
                    '9.0'=>'9.0',
                    '9.1'=>'9.1',
                    '9.2'=>'9.2',
                    '9.3'=>'9.3',
                    '9.4'=>'9.4',
                    '9.5'=>'9.5',
                    '9.6'=>'9.6',
                    '9.7'=>'9.7',
                    '9.8'=>'9.8',
                    '9.9'=>'9.9',
                    '10.0'=>'10.0'
                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('univprofesor')
            ->add('mailprofesor')
            ->add('confirmado')
            ->add('vegetariano')
            ->add('vegecomentario', TextareaType::class,array(
                'required' => false,
                'label'=>'Indicaciones'))

            ->add('beca',ChoiceType::class, [
                'choices'  => [
                    'Solamente alimentación' => 'Solamente alimentación',
                    'Solamente hospedaje' => 'Solamente hospedaje',
                    'Hospedaje y alimentación' => 'Hospedaje y alimentación',
                    'Transporte aéreo, sólo para estudiantes de América Latina y del Caribe (México no entra)'=> 'Transporte aéreo'
                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('aereo')
            ->add('aceptado')
            ->add('razones', TextareaType::class,array(
                'label'=>'Razones por las que desa asistir'))
            ->add('comentarios', TextareaType::class,array(
                'required' => false,
                'label'=>'Comentarios'))
            ->add('recomendacion', TextareaType::class,array(
                'required' => false,
                ))
            ->add('cartaFile', VichFileType::class, [
                'required' => false,
                'label'=>'Carta de recomendación'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Registro::class,
        ]);
    }
}

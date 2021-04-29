<?php

namespace App\Form;

use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name of your address ?',
                'attr' => [
                    'placeholder' => 'Please give this address a name.'
                ]
            ])
            ->add('firstname', TextType::class, [
                'label' => 'Your firstname?',
                'attr' => [
                    'placeholder' => 'Please enter your firstname.'
                ]
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Your lastname?',
                'attr' => [
                    'placeholder' => 'Please enter your last name.'
                ]
            ])
            ->add('company', TextType::class, [
                'label' => 'Your company?',
                'required' => false,
                'attr' => [
                    'placeholder' => '(optional) Please enter the name of your company.'
                ]
            ])
            ->add('address', TextType::class, [
                'label' => 'Your Address?',
                'attr' => [
                    'placeholder' => 'best season road 101...'
                ]
            ])
            ->add('postal', TextType::class, [
                'label' => 'Your postal code?',
                'attr' => [
                    'placeholder' => 'Please enter your postal code.'
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'City?',
                'attr' => [
                    'placeholder' => 'Please enter your city.'
                ]
            ])
            ->add('country', CountryType::class, [
                'label' => 'Country?',
                'attr' => [
                    'placeholder' => 'Your country'
                ]
            ])
            ->add('phone', TelType::class, [
                'label' => 'Your phone?',
                'attr' => [
                    'placeholder' => 'Please enter your phone'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Validate',
                'attr' => [
                    'class' => 'btn-block btn-info'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}

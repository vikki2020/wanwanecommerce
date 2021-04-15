<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, ['label' => 'Your firstname', 'attr' => ['placeholder' => 'please enter your firstname.']])
            ->add('lastname', TextType::class, ['label' => 'Your lastname', 'attr' => ['placeholder' => "please enter your lastname."]])
            ->add('email', EmailType::class, ['label' => 'Your Email', 'attr' => ['placeholder' => "please enter your e-mail."]])
            ->add('password', PasswordType::class, ['label' => 'Your password', 'attr' => ['placeholder' => "please enter your password."]])

            ->add('password_confirm', PasswordType::class, ['label' => "Confirm your password.", 'mapped' => false, 'attr' => ['placeholder' => 'please enter your password again.']])
            ->add('submit', SubmitType::class, ['label' => 'Register']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

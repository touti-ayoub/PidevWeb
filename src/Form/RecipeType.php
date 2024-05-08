<?php

namespace App\Form;

use App\Entity\Recipe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class RecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('totalCalories')
            ->add('totalProtein')
            ->add('totalCarbs')
            ->add('totalFat')
            // ->add('foods')
            ->add('image', FileType::class, [
                'label' => 'Image (JPEG, PNG, GIF)',
                'mapped' => false, // Don't map this field to any property of the entity
                'required' => false, // Allow the field to be empty
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recipe::class,
        ]);
    }
}
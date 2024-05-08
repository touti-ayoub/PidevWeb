<?php

namespace App\Form;

use App\Entity\Food;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class FoodType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('calories')
            ->add('protein')
            ->add('carbohydrates')
            ->add('fat')
            ->add('serving_size')
            ->add('serving_unit')
            //            ->add('recipes')
            ->add('image', FileType::class, [
                'label' => 'Image (JPEG, PNG, GIF)',
                'mapped' => false, // Don't map this field to any property of the entity
                'required' => false, // Allow the field to be empty
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Food::class,
        ]);
    }
}

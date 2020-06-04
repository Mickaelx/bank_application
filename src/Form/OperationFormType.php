<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Operations;
use App\Entity\PayementMethod;
use App\Entity\Type;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OperationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', EntityType::class, [
                'class' => Type::class,
                'choice_label' => 'nameType'
            ])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'title'
            ])
            ->add('amount')
            ->add('content')
            ->add('payementMethod', EntityType::class, [
                'class' => PayementMethod::class,
                'choice_label' => 'namePayement'
            ])
        ;


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Operations::class,
        ]);
    }
}

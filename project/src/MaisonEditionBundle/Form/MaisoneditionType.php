<?php

namespace MaisonEditionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MaisoneditionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class)->add('nationalite' , ChoiceType::class, array(
            'choices'  => array(
                'Afrique du Sud' => 'Afrique du Sud',
                'Afghanistan' => 'Afghanistan',
                'Albanie' => 'Albanie',
                'Algérie' => 'Algérie',
                'Allemagne' => 'Allemagne',
                'Andorre' => 'Andorre',
                'Angola' => 'Angola',
                'Afrique du Sud' => 'Afrique du Sud',
                'Bénin' => 'Bénin',
                'Botswana' => 'Botswana',

            )))->add('groupeeditoriel', TextType::class)->add('proprietaire', TextType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MaisonEditionBundle\Entity\Maisonedition'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'maisoneditionbundle_maisonedition';
    }


}

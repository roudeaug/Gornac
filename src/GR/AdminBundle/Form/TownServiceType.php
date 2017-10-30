<?php

namespace GR\AdminBundle\Form;
use GR\AdminBundle\Form\DayType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class TownServiceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',             TextType::class)
            ->add('imgUrl',           TextType::class)
            ->add('personInCharge',   TextType::class)
            ->add('phone',            NumberType::class)
            ->add('email',            TextType::class)
            ->add('adress',           TextType::class)
            ->add('monday',           DayType::class)
            ->add('tuesday',          DayType::class)
            ->add('wednesday',        DayType::class)
            ->add('thursday',         DayType::class)
            ->add('friday',           DayType::class)
            ->add('enregistrer',             SubmitType::class
            
        );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GR\AdminBundle\Entity\TownService'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gr_adminbundle_townservice';
    }


}

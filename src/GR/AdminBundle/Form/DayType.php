<?php

namespace GR\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class DayType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('am_start',       TimeType::class)
            ->add('am_end',         TimeType::class)
            ->add('amIsClosed',     CheckboxType::class, array('required'=>false))
            ->add('pm_start',       TimeType::class)
            ->add('pm_end',         TimeType::class)
            ->add('pmIsClosed',     CheckboxType::class, array('required'=>false)
        );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GR\AdminBundle\Entity\Day'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gr_adminbundle_day';
    }


}

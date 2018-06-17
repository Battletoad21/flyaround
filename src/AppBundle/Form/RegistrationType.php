<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 11/06/18
 * Time: 16:50
 */


namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{

    /**
     * {@inheritdoc} Including all fields from Registration entity.
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('phoneNumber')
            ->add('birthDate')
            ->add('creationDate', \Symfony\Component\Form\Extension\Core\Type\DateType::class, array('empty_data' => '', 'required' => false))
            ->add('note', \Symfony\Component\Form\Extension\Core\Type\IntegerType::class, array('empty_data' => '', 'required' => false))
            ->add('isACertifiedPilot');

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

}


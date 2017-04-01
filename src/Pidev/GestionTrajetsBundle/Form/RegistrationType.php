<?php

namespace Pidev\GestionTrajetsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use FOS\UserBundle\Util\LegacyFormHelper;

class RegistrationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'Email', 'translation_domain' => 'FOSUserBundle'))
            ->add('username', null, array('label' => 'Username', 'translation_domain' => 'FOSUserBundle'))
            ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
                'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'Password'),
                'second_options' => array('label' => 'Password Confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('nom', null, array('label'=>'Name'))->add('DateNaissance', BirthdayType::class, array('label'=>'Birth date'))->add('NumeroTel', null, array('label'=>'Cell number'))->add('Adresse', null, array('label'=>'Address'))
            ->add('Register',SubmitType::class, array('attr'=>array('class'=>'button')));
    }

 /*   public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }*/

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pidev\GestionTrajetsBundle\Entity\Membre'
        ));
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}

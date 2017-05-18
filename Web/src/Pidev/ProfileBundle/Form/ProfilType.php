<?php

namespace Pidev\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProfilType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('imageFile', VichImageType::class, [
            'attr' => [
                'placeholder' => 'Upload Image',
                'class' => 'upload',
                'onchange' =>'PreviewImage();'
            ],
            'required' => false,
            'allow_delete' => true, // not mandatory, default is true
            'download_link' => true, // not mandatory, default is true
        ])->add('Description',TextareaType::class, [
            'attr'=> [
                'placeholder' => 'Description',
                'class'=>''
            ],
        ])
            ->add('facebook',null, [
                'attr'=>[
                    'class' => ''
                ]
            ])
            ->add('google',null, [
                'attr'=>[
                    'class' => ''
                ],
            ])
            ->add('twitter',null, [
                'attr'=>[
                    'class'=>''
                ],
            ])
            ->add('linkedin',null, [
                'attr'=>[
                    'class'=>''
                ],
            ])
            ->add('phonenumber',null, [
                'attr'=>[
                    'class'=>''
                ],
            ])
            ->add('pseudo',null,[
                'attr'=>[
                    'class'=>''
                ],
            ])
            ->add('Submit',SubmitType::class,
        [
            'attr'=>[
                'class'=>'button'

            ],
        ]
                );


    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pidev\UserBundle\Entity\Profil'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pidev_userbundle_profil';
    }


}

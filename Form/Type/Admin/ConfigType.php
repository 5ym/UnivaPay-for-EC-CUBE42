<?php
namespace Plugin\UnivaPayForECCUBE4\Form\Type\Admin;

use Plugin\UnivaPayForECCUBE4\Entity\Config;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class ConfigType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('api_id', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('api_password', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('api_url', UrlType::class, [
                'constraints' => [
                    new NotBlank(),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Config::class,
        ]);
    }
}

<?php

/*
 * This file is part of RGPD project.
 *
 * (c) Sébastien CHOMY <sebastien.chomy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Form\LegalNotice;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GroupSequence;

/**
 * Class PreForm.
 */
class PreForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'isSociety',
                CheckboxType::class,
                [
                    'label'    => 'legal_notice_pre_form.is_society',
                    'required' => false,
                ]
            )
            ->add(
                'isRCS',
                CheckboxType::class,
                [
                    'label'    => 'legal_notice_pre_form.is_rcs',
                    'required' => false,
                ]
            )
            ->add(
                'isRM',
                CheckboxType::class,
                [
                    'label'    => 'legal_notice_pre_form.is_rm',
                    'required' => false,
                ]
            )
            ->add(
                'isCapitalSocial',
                CheckboxType::class,
                [
                    'label'    => 'legal_notice_pre_form.is_capital_social',
                    'required' => false,
                ]
            )
            ->add(
                'isVatIdentifier',
                CheckboxType::class,
                [
                    'label'    => 'legal_notice_pre_form.is_vat_identifier',
                    'required' => false,
                ]
            )
            ->add(
                'isLicensedProfession',
                CheckboxType::class,
                [
                    'label'    => 'legal_notice_pre_form.is_licensed_profession',
                    'required' => false,
                ]
            )
            ->add(
                'none',
                HiddenType::class
            )
        ;
    }

    /**
     * @param OptionsResolver $resolver
     *
     * @throws \Symfony\Component\OptionsResolver\Exception\AccessException
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'translation_domain' => 'application',
                'validation_groups'  => new GroupSequence(['Params', 'Strict']),
            ]
        );
    }
}

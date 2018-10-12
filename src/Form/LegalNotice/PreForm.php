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
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
                ['label' => 'legal_notice_pre_form.is_society']
            )
            ->add(
                'isRCS',
                CheckboxType::class,
                ['label' => 'legal_notice_pre_form.is_rcs']
            )
            ->add(
                'isRM',
                CheckboxType::class,
                ['label' => 'legal_notice_pre_form.is_rm']
            )
            ->add(
                'isCapitalSocial',
                CheckboxType::class,
                ['label' => 'legal_notice_pre_form.is_capital_social']
            )
            ->add(
                'isVatIdentifier',
                CheckboxType::class,
                ['label' => 'legal_notice_pre_form.is_vat_identifier']
            )
            ->add(
                'isLicensedProfession',
                CheckboxType::class,
                [
                    'label' => 'legal_notice_pre_form.is_licensed_profession',
                ]
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
            ]
        );
    }
}

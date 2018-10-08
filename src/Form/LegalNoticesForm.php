<?php

/*
 * This file is part of RGPD project.
 *
 * (c) Sébastien CHOMY <sebastien.chomy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class LegalNoticesGenerator.
 */
class LegalNoticesForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // website section
            ->add(
                'domain',
                TextType::class,
                ['label' => 'legal_notice.domain.label']
            )
            // website owner section
            ->add(
                'individual_owner_lastname',
                TextType::class,
                ['label' => 'legal_notice.individual_owner_lastname.label']
            )
            ->add(
                'individual_owner_firstname',
                TextType::class,
                ['label' => 'legal_notice.individual_owner_firstname.label']
            )
            ->add(
                'society_owner_name',
                TextType::class,
                ['label' => 'legal_notice.society_owner_name.label']
            )
            // address website owner section
            ->add(
                'owner_streetAddress',
                TextType::class,
                ['label' => 'legal_notice.owner_streetAddress.label']
            )
            ->add(
                'owner_postalCode',
                TextType::class,
                ['label' => 'legal_notice.owner_postalCode.label']
            )
            ->add(
                'owner_addressLocality',
                TextType::class,
                ['label' => 'legal_notice.owner_addressLocality.label']
            )
            ->add(
                'owner_addressCountry',
                CountryType::class,
                ['label' => 'legal_notice.owner_addressCountry.label']
            )
            // contact details website owner section
            ->add(
                'owner_email',
                EmailType::class,
                ['label' => 'legal_notice.owner_email.label']
            )
            ->add(
                'owner_phone',
                TelType::class,
                ['label' => 'legal_notice.owner_phone.label']
            )
            // publication officer section
            ->add(
                'publication_officer_lastname',
                TextType::class,
                ['label' => 'legal_notice.publication_officer_lastname.label']
            )
            ->add(
                'publication_officer_firstname',
                TextType::class,
                ['label' => 'legal_notice.publication_officer_firstname.label']
            )
            // hosting section
            ->add(
                'hosting_name',
                TextType::class,
                ['label' => 'legal_notice.hosting_name.label']
            )
            ->add(
                'hosting_streetAddress',
                TextType::class,
                ['label' => 'legal_notice.hosting_streetAddress.label']
            )
            ->add(
                'hosting_postalCode',
                TextType::class,
                ['label' => 'legal_notice.hosting_postalCode.label']
            )
            ->add(
                'hosting_addressLocality',
                TextType::class,
                ['label' => 'legal_notice.hosting_addressLocality.label']
            )
            ->add(
                'hosting_addressCountry',
                CountryType::class,
                ['label' => 'legal_notice.hosting_addressCountry.label']
            )
            ->add(
                'hosting_phone',
                TelType::class,
                ['label' => 'legal_notice.hosting_phone.label']
            )
            // duns section
            ->add(
                'duns_rcs',
                TextType::class,
                ['label' => 'legal_notice.duns_rcs.label']
            )
            ->add(
                'duns_rm',
                TextType::class,
                ['label' => 'legal_notice.duns_rm.label']
            )
            // capital section
            ->add(
                'capital_amount',
                NumberType::class,
                ['label' => 'legal_notice.capital_amount.label']
            )
            // V.A.T. section
            ->add(
                'vat_identifier',
                TextType::class,
                ['label' => 'legal_notice.vat_identifier.label']
            )
            // licensed profession
            ->add(
                'licensed_profession_ref',
                TextType::class,
                ['label' => 'legal_notice.licensed_profession_ref.label']
            )
            ->add(
                'licensed_profession_title',
                TextType::class,
                ['label' => 'legal_notice.licensed_profession_title.label']
            )
            ->add(
                'licensed_profession_eu_state',
                TextType::class,
                ['label' => 'legal_notice.licensed_profession_eu_state.label']
            )
            ->add(
                'licensed_profession_organism',
                TextType::class,
                ['label' => 'legal_notice.licensed_profession_organism.label']
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

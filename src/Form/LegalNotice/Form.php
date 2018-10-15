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

use App\Manager\HostProviderManager;
use App\Model\LegalNotice\params;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class Form.
 */
class Form extends AbstractType
{
    /** @var params */
    private $params;

    /** @var HostProviderManager */
    private $hostProviderManager;

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     *
     * @throws \Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException
     * @throws \Symfony\Component\Yaml\Exception\ParseException
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->params = $options['legalNotice_params'];
        $this->hostProviderManager = $options['hostProviderManager'];

        $builder
            // website section
            ->add(
                'domain',
                UrlType::class,
                ['label' => 'legal_notice.domain.label']
            )
        ;

        // website owner section
        if ($this->params->isSociety()) {
            $builder
                ->add(
                    'societyOwnerName',
                    TextType::class,
                    ['label' => 'legal_notice.society_owner_name.label']
                )
                ->add(
                    'societyEntityType',
                    TextType::class,
                    ['label' => 'legal_notice.society_entity_type.label']
                )
            ;
        } else {
            $builder
                ->add(
                    'individualOwnerLastname',
                    TextType::class,
                    ['label' => 'legal_notice.individual_owner_lastname.label']
                )
                ->add(
                    'individualOwnerFirstname',
                    TextType::class,
                    ['label' => 'legal_notice.individual_owner_firstname.label']
                )
            ;
        }

        $builder
            // address website owner section
            ->add(
                'ownerStreetAddress',
                TextType::class,
                ['label' => 'legal_notice.owner_streetAddress.label']
            )
            ->add(
                'ownerPostalCode',
                TextType::class,
                ['label' => 'legal_notice.owner_postalCode.label']
            )
            ->add(
                'ownerAddressLocality',
                TextType::class,
                ['label' => 'legal_notice.owner_addressLocality.label']
            )
            ->add(
                'ownerAddressCountry',
                CountryType::class,
                [
                    'label'             => 'legal_notice.owner_addressCountry.label',
                    'preferred_choices' => ['FR'],
                ]
            )
            // contact details website owner section
            ->add(
                'ownerEmail',
                EmailType::class,
                ['label' => 'legal_notice.owner_email.label']
            )
            ->add(
                'ownerPhone',
                TelType::class,
                ['label' => 'legal_notice.owner_phone.label']
            )
            // publication officer section
            ->add(
                'publicationOfficerLastname',
                TextType::class,
                ['label' => 'legal_notice.publication_officer_lastname.label']
            )
            ->add(
                'publicationOfficerFirstname',
                TextType::class,
                ['label' => 'legal_notice.publication_officer_firstname.label']
            )
            // hosting section
            ->add(
                'hostProviderList',
                ChoiceType::class,
                [
                    'label'    => 'legal_notice.hostProviderList.label',
                    'expanded' => false,
                    'multiple' => false,
                    'mapped'   => false,
                    'required' => false,
                    'choices'  => array_flip($this->hostProviderManager->getList()),
                ]
            )
            ->add(
                'hostingName',
                TextType::class,
                ['label' => 'legal_notice.hosting_name.label']
            )
            ->add(
                'hostingEntityType',
                TextType::class,
                ['label' => 'legal_notice.hosting_entity_type.label']
            )
            ->add(
                'hostingStreetAddress',
                TextType::class,
                ['label' => 'legal_notice.hosting_streetAddress.label']
            )
            ->add(
                'hostingPostalCode',
                TextType::class,
                ['label' => 'legal_notice.hosting_postalCode.label']
            )
            ->add(
                'hostingAddressLocality',
                TextType::class,
                ['label' => 'legal_notice.hosting_addressLocality.label']
            )
            ->add(
                'hostingAddressCountry',
                TextType::class,
                [
                    'label' => 'legal_notice.hosting_addressCountry.label',
                ]
            )
            ->add(
                'hostingEmail',
                EmailType::class,
                ['label' => 'legal_notice.hosting_email.label']
            )
            ->add(
                'hostingPhone',
                TelType::class,
                ['label' => 'legal_notice.hosting_phone.label']
            )
            ->add(
                'hostingCapitalAmount',
                NumberType::class,
                ['label' => 'legal_notice.hosting_capital_amount.label']
            )
            ->add(
                'hostingDunsRcs',
                TextType::class,
                ['label' => 'legal_notice.hosting_duns_rcs.label']
            )
        ;

        // RCS
        if ($this->params->isRCS()) {
            $builder
                ->add(
                    'dunsRcs',
                    TextType::class,
                    ['label' => 'legal_notice.duns_rcs.label']
                )
            ;
        }

        // RM
        if ($this->params->isRM()) {
            $builder
                ->add(
                    'dunsRm',
                    TextType::class,
                    ['label' => 'legal_notice.duns_rm.label']
                )
            ;
        }

        // V.A.T
        if ($this->params->isVatIdentifier()) {
            $builder
                ->add(
                    'vatIdentifier',
                    TextType::class,
                    ['label' => 'legal_notice.vat_identifier.label']
                )
            ;
        }

        // capital social
        if ($this->params->isCapitalSocial()) {
            $builder
                ->add(
                    'capitalAmount',
                    NumberType::class,
                    ['label' => 'legal_notice.capital_amount.label']
                )
            ;
        }

        // licensed profession
        if ($this->params->isLicensedProfession()) {
            $builder
                ->add(
                    'licensedProfessionRef',
                    TextType::class,
                    ['label' => 'legal_notice.licensed_profession_ref.label']
                )
                ->add(
                    'licensedProfessionTitle',
                    TextType::class,
                    ['label' => 'legal_notice.licensed_profession_title.label']
                )
                ->add(
                    'licensedProfessionEuState',
                    TextType::class,
                    ['label' => 'legal_notice.licensed_profession_eu_state.label']
                )
                ->add(
                    'licensedProfessionOrganism',
                    TextType::class,
                    ['label' => 'legal_notice.licensed_profession_organism.label']
                )
            ;
        }
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
                'translation_domain'  => 'application',
                'legalNotice_params'  => null,
                'hostProviderManager' => null,
                'validation_groups'   => [$this, 'getValidationGroups'],
            ]
        );
    }

    /**
     * @return array
     */
    public function getValidationGroups(): array
    {
        $groups[] = 'default';

        if ($this->params->isSociety()) {
            $groups[] = 'society';
        } else {
            $groups[] = 'individual';
        }

        if ($this->params->isRCS()) {
            $groups[] = 'rcs';
        }

        if ($this->params->isRM()) {
            $groups[] = 'rm';
        }

        if ($this->params->isCapitalSocial()) {
            $groups[] = 'capitalSocial';
        }

        if ($this->params->isVatIdentifier()) {
            $groups[] = 'vatIdentifier';
        }

        if ($this->params->isLicensedProfession()) {
            $groups[] = 'licensedProfession';
        }

        return $groups;
    }
}

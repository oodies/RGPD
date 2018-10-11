<?php

/*
 * This file is part of RGPD project.
 *
 * (c) Sébastien CHOMY <sebastien.chomy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Model\LegalNotice;

/**
 * Class LegalNotices.
 */
class LegalNotices
{
    /** @var null|string */
    private $domain;

    /** @var null|string */
    private $societyOwnerName;

    /** @var null|string */
    private $societyEntityType;

    /** @var null|string */
    private $individualOwnerLastname;

    /** @var null|string */
    private $individualOwnerFirstname;

    /** @var null|string */
    private $ownerStreetAddress;

    /** @var null|string */
    private $ownerPostalCode;

    /** @var null|string */
    private $ownerAddressLocality;

    /** @var null|string */
    private $ownerAddressCountry;

    /** @var null|string */
    private $ownerEmail;

    /** @var null|string */
    private $ownerPhone;

    /** @var null|string */
    private $publicationOfficerLastname;

    /** @var null|string */
    private $publicationOfficerFirstname;

    /** @var null|string */
    private $hostingName;

    /** @var null|string */
    private $hostingEntityType;

    /** @var null|string */
    private $hostingStreetAddress;

    /** @var null|string */
    private $hostingPostalCode;

    /** @var null|string */
    private $hostingAddressLocality;

    /** @var null|string */
    private $hostingAddressCountry;

    /** @var null|string */
    private $hostingEmail;

    /** @var null|string */
    private $hostingPhone;

    /** @var null|string */
    private $hostingCapitalAmount;

    /** @var null|string */
    private $hostingDunsRcs;

    /** @var null|string */
    private $dunsRcs;

    /** @var null|string */
    private $dunsRm;

    /** @var null|string */
    private $vatIdentifier;

    /** @var null|string */
    private $capitalAmount;

    /** @var null|string */
    private $licensedProfessionRef;

    /** @var null|string */
    private $licensedProfessionTitle;

    /** @var null|string */
    private $licensedProfessionEuState;

    /** @var null|string */
    private $licensedProfessionOrganism;

    /**
     * @return null|string
     */
    public function getDomain(): ?string
    {
        return $this->domain;
    }

    /**
     * @param null|string $domain
     *
     * @return LegalNotices
     */
    public function setDomain(?string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getSocietyOwnerName(): ?string
    {
        return $this->societyOwnerName;
    }

    /**
     * @param null|string $societyOwnerName
     *
     * @return LegalNotices
     */
    public function setSocietyOwnerName(?string $societyOwnerName): self
    {
        $this->societyOwnerName = $societyOwnerName;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getSocietyEntityType(): ?string
    {
        return $this->societyEntityType;
    }

    /**
     * @param null|string $societyEntityType
     *
     * @return LegalNotices
     */
    public function setSocietyEntityType(?string $societyEntityType): self
    {
        $this->societyEntityType = $societyEntityType;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getIndividualOwnerLastname(): ?string
    {
        return $this->individualOwnerLastname;
    }

    /**
     * @param null|string $individualOwnerLastname
     *
     * @return LegalNotices
     */
    public function setIndividualOwnerLastname(?string $individualOwnerLastname): self
    {
        $this->individualOwnerLastname = $individualOwnerLastname;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getIndividualOwnerFirstname(): ?string
    {
        return $this->individualOwnerFirstname;
    }

    /**
     * @param null|string $individualOwnerFirstname
     *
     * @return LegalNotices
     */
    public function setIndividualOwnerFirstname(?string $individualOwnerFirstname): self
    {
        $this->individualOwnerFirstname = $individualOwnerFirstname;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getOwnerStreetAddress(): ?string
    {
        return $this->ownerStreetAddress;
    }

    /**
     * @param null|string $ownerStreetAddress
     *
     * @return LegalNotices
     */
    public function setOwnerStreetAddress(?string $ownerStreetAddress): self
    {
        $this->ownerStreetAddress = $ownerStreetAddress;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getOwnerPostalCode(): ?string
    {
        return $this->ownerPostalCode;
    }

    /**
     * @param null|string $ownerPostalCode
     *
     * @return LegalNotices
     */
    public function setOwnerPostalCode(?string $ownerPostalCode): self
    {
        $this->ownerPostalCode = $ownerPostalCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getOwnerAddressLocality(): ?string
    {
        return $this->ownerAddressLocality;
    }

    /**
     * @param null|string $ownerAddressLocality
     *
     * @return LegalNotices
     */
    public function setOwnerAddressLocality(?string $ownerAddressLocality): self
    {
        $this->ownerAddressLocality = $ownerAddressLocality;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getOwnerAddressCountry(): ?string
    {
        return $this->ownerAddressCountry;
    }

    /**
     * @param null|string $ownerAddressCountry
     *
     * @return LegalNotices
     */
    public function setOwnerAddressCountry(?string $ownerAddressCountry): self
    {
        $this->ownerAddressCountry = $ownerAddressCountry;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getOwnerEmail(): ?string
    {
        return $this->ownerEmail;
    }

    /**
     * @param null|string $ownerEmail
     *
     * @return LegalNotices
     */
    public function setOwnerEmail(?string $ownerEmail): self
    {
        $this->ownerEmail = $ownerEmail;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getOwnerPhone(): ?string
    {
        return $this->ownerPhone;
    }

    /**
     * @param null|string $ownerPhone
     *
     * @return LegalNotices
     */
    public function setOwnerPhone(?string $ownerPhone): self
    {
        $this->ownerPhone = $ownerPhone;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPublicationOfficerLastname(): ?string
    {
        return $this->publicationOfficerLastname;
    }

    /**
     * @param null|string $publicationOfficerLastname
     *
     * @return LegalNotices
     */
    public function setPublicationOfficerLastname(?string $publicationOfficerLastname): self
    {
        $this->publicationOfficerLastname = $publicationOfficerLastname;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPublicationOfficerFirstname(): ?string
    {
        return $this->publicationOfficerFirstname;
    }

    /**
     * @param null|string $publicationOfficerFirstname
     *
     * @return LegalNotices
     */
    public function setPublicationOfficerFirstname(?string $publicationOfficerFirstname): self
    {
        $this->publicationOfficerFirstname = $publicationOfficerFirstname;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getHostingName(): ?string
    {
        return $this->hostingName;
    }

    /**
     * @param null|string $hostingName
     *
     * @return LegalNotices
     */
    public function setHostingName(?string $hostingName): self
    {
        $this->hostingName = $hostingName;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getHostingEntityType(): ?string
    {
        return $this->hostingEntityType;
    }

    /**
     * @param null|string $hostingEntityType
     *
     * @return LegalNotices
     */
    public function setHostingEntityType(?string $hostingEntityType): self
    {
        $this->hostingEntityType = $hostingEntityType;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getHostingStreetAddress(): ?string
    {
        return $this->hostingStreetAddress;
    }

    /**
     * @param null|string $hostingStreetAddress
     *
     * @return LegalNotices
     */
    public function setHostingStreetAddress(?string $hostingStreetAddress): self
    {
        $this->hostingStreetAddress = $hostingStreetAddress;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getHostingPostalCode(): ?string
    {
        return $this->hostingPostalCode;
    }

    /**
     * @param null|string $hostingPostalCode
     *
     * @return LegalNotices
     */
    public function setHostingPostalCode(?string $hostingPostalCode): self
    {
        $this->hostingPostalCode = $hostingPostalCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getHostingAddressLocality(): ?string
    {
        return $this->hostingAddressLocality;
    }

    /**
     * @param null|string $hostingAddressLocality
     *
     * @return LegalNotices
     */
    public function setHostingAddressLocality(?string $hostingAddressLocality): self
    {
        $this->hostingAddressLocality = $hostingAddressLocality;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getHostingAddressCountry(): ?string
    {
        return $this->hostingAddressCountry;
    }

    /**
     * @param null|string $hostingAddressCountry
     *
     * @return LegalNotices
     */
    public function setHostingAddressCountry(?string $hostingAddressCountry): self
    {
        $this->hostingAddressCountry = $hostingAddressCountry;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getHostingEmail(): ?string
    {
        return $this->hostingEmail;
    }

    /**
     * @param null|string $hostingEmail
     *
     * @return LegalNotices
     */
    public function setHostingEmail(?string $hostingEmail): self
    {
        $this->hostingEmail = $hostingEmail;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getHostingPhone(): ?string
    {
        return $this->hostingPhone;
    }

    /**
     * @param null|string $hostingPhone
     *
     * @return LegalNotices
     */
    public function setHostingPhone(?string $hostingPhone): self
    {
        $this->hostingPhone = $hostingPhone;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getHostingCapitalAmount(): ?string
    {
        return $this->hostingCapitalAmount;
    }

    /**
     * @param null|string $hostingCapitalAmount
     *
     * @return LegalNotices
     */
    public function setHostingCapitalAmount(?string $hostingCapitalAmount): self
    {
        $this->hostingCapitalAmount = $hostingCapitalAmount;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getHostingDunsRcs(): ?string
    {
        return $this->hostingDunsRcs;
    }

    /**
     * @param null|string $hostingDunsRcs
     *
     * @return LegalNotices
     */
    public function setHostingDunsRcs(?string $hostingDunsRcs): self
    {
        $this->hostingDunsRcs = $hostingDunsRcs;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDunsRcs(): ?string
    {
        return $this->dunsRcs;
    }

    /**
     * @param null|string $dunsRcs
     *
     * @return LegalNotices
     */
    public function setDunsRcs(?string $dunsRcs): self
    {
        $this->dunsRcs = $dunsRcs;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDunsRm(): ?string
    {
        return $this->dunsRm;
    }

    /**
     * @param null|string $dunsRm
     *
     * @return LegalNotices
     */
    public function setDunsRm(?string $dunsRm): self
    {
        $this->dunsRm = $dunsRm;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getVatIdentifier(): ?string
    {
        return $this->vatIdentifier;
    }

    /**
     * @param null|string $vatIdentifier
     *
     * @return LegalNotices
     */
    public function setVatIdentifier(?string $vatIdentifier): self
    {
        $this->vatIdentifier = $vatIdentifier;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCapitalAmount(): ?string
    {
        return $this->capitalAmount;
    }

    /**
     * @param null|string $capitalAmount
     *
     * @return LegalNotices
     */
    public function setCapitalAmount(?string $capitalAmount): self
    {
        $this->capitalAmount = $capitalAmount;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLicensedProfessionRef(): ?string
    {
        return $this->licensedProfessionRef;
    }

    /**
     * @param null|string $licensedProfessionRef
     *
     * @return LegalNotices
     */
    public function setLicensedProfessionRef(?string $licensedProfessionRef): self
    {
        $this->licensedProfessionRef = $licensedProfessionRef;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLicensedProfessionTitle(): ?string
    {
        return $this->licensedProfessionTitle;
    }

    /**
     * @param null|string $licensedProfessionTitle
     *
     * @return LegalNotices
     */
    public function setLicensedProfessionTitle(?string $licensedProfessionTitle): self
    {
        $this->licensedProfessionTitle = $licensedProfessionTitle;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLicensedProfessionEuState(): ?string
    {
        return $this->licensedProfessionEuState;
    }

    /**
     * @param null|string $licensedProfessionEuState
     *
     * @return LegalNotices
     */
    public function setLicensedProfessionEuState(?string $licensedProfessionEuState): self
    {
        $this->licensedProfessionEuState = $licensedProfessionEuState;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLicensedProfessionOrganism(): ?string
    {
        return $this->licensedProfessionOrganism;
    }

    /**
     * @param null|string $licensedProfessionOrganism
     *
     * @return LegalNotices
     */
    public function setLicensedProfessionOrganism(?string $licensedProfessionOrganism): self
    {
        $this->licensedProfessionOrganism = $licensedProfessionOrganism;

        return $this;
    }
}

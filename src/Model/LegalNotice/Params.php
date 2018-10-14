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
 * Class Params.
 */
class Params
{
    /** @var bool */
    private $isSociety = false;

    /** @var bool */
    private $isRCS = false;

    /** @var bool */
    private $isRM = false;

    /** @var bool */
    private $isVatIdentifier = false;

    /** @var bool */
    private $isCapitalSocial = false;

    /** @var bool */
    private $isLicensedProfession = false;

    /** @var null|string */
    private $none;

    /**
     * @return bool
     */
    public function isSociety(): bool
    {
        return $this->isSociety;
    }

    /**
     * @param bool $isSociety
     *
     * @return Params
     */
    public function setIsSociety(bool $isSociety): self
    {
        $this->isSociety = $isSociety;

        return $this;
    }

    /**
     * @return bool
     */
    public function isRCS(): bool
    {
        return $this->isRCS;
    }

    /**
     * @param bool $isRCS
     *
     * @return Params
     */
    public function setIsRCS(bool $isRCS): self
    {
        $this->isRCS = $isRCS;

        return $this;
    }

    /**
     * @return bool
     */
    public function isRM(): bool
    {
        return $this->isRM;
    }

    /**
     * @param bool $isRM
     *
     * @return Params
     */
    public function setIsRM(bool $isRM): self
    {
        $this->isRM = $isRM;

        return $this;
    }

    /**
     * @return bool
     */
    public function isVatIdentifier(): bool
    {
        return $this->isVatIdentifier;
    }

    /**
     * @param bool $isVatIdentifier
     *
     * @return Params
     */
    public function setIsVatIdentifier(bool $isVatIdentifier): self
    {
        $this->isVatIdentifier = $isVatIdentifier;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCapitalSocial(): bool
    {
        return $this->isCapitalSocial;
    }

    /**
     * @param bool $isCapitalSocial
     *
     * @return Params
     */
    public function setIsCapitalSocial(bool $isCapitalSocial): self
    {
        $this->isCapitalSocial = $isCapitalSocial;

        return $this;
    }

    /**
     * @return bool
     */
    public function isLicensedProfession(): bool
    {
        return $this->isLicensedProfession;
    }

    /**
     * @param bool $isLicensedProfession
     *
     * @return Params
     */
    public function setIsLicensedProfession(bool $isLicensedProfession): self
    {
        $this->isLicensedProfession = $isLicensedProfession;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getNone(): ?string
    {
        return $this->none;
    }

    /**
     * @param null|string $none
     *
     * @return Params
     */
    public function setNone(?string $none): self
    {
        $this->none = $none;

        return $this;
    }
}

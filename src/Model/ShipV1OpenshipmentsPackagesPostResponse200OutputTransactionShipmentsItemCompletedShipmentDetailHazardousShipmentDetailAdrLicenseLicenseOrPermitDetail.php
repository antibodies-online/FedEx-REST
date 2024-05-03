<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicenseLicenseOrPermitDetail extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Specifies license or permit detail number.<br>Example: 12345.
     *
     * @var string
     */
    protected $number;
    /**
     * Specifies the effective date of the license.<br>The format is [YYYY-MM-DD].<br>Example: 2019-08-09.
     *
     * @var string
     */
    protected $effectiveDate;
    /**
     * Specifies the expiration date of the license.<br>The format is [YYYY-MM-DD].<br>Example: 2019-04-09.
     *
     * @var string
     */
    protected $expirationDate;

    /**
     * Specifies license or permit detail number.<br>Example: 12345.
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Specifies license or permit detail number.<br>Example: 12345.
     */
    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;

        return $this;
    }

    /**
     * Specifies the effective date of the license.<br>The format is [YYYY-MM-DD].<br>Example: 2019-08-09.
     */
    public function getEffectiveDate(): string
    {
        return $this->effectiveDate;
    }

    /**
     * Specifies the effective date of the license.<br>The format is [YYYY-MM-DD].<br>Example: 2019-08-09.
     */
    public function setEffectiveDate(string $effectiveDate): self
    {
        $this->initialized['effectiveDate'] = true;
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Specifies the expiration date of the license.<br>The format is [YYYY-MM-DD].<br>Example: 2019-04-09.
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }

    /**
     * Specifies the expiration date of the license.<br>The format is [YYYY-MM-DD].<br>Example: 2019-04-09.
     */
    public function setExpirationDate(string $expirationDate): self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;

        return $this;
    }
}

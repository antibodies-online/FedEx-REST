<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail extends \ArrayObject
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
     * Indicate the expiration date for the license or permit. The format is YYYY-MM-DD.<br>Example: "2019-12-03".
     *
     * @var string
     */
    protected $licenseOrPermitExpirationDate;
    /**
     * Indicate License Or Permit Number for the commodity being exported.<br>Example: 11.
     *
     * @var string
     */
    protected $licenseOrPermitNumber;
    /**
     * Indicate Entry Number for the export.<br>Example: 125.
     *
     * @var string
     */
    protected $entryNumber;
    /**
     * Indicate the Foreign Trade Zone Code.<br>Example: US.
     *
     * @var string
     */
    protected $foreignTradeZoneCode;
    /**
     * Indicate International Controlled Export Type.
     *
     * @var string
     */
    protected $type;

    /**
     * Indicate the expiration date for the license or permit. The format is YYYY-MM-DD.<br>Example: "2019-12-03".
     */
    public function getLicenseOrPermitExpirationDate(): string
    {
        return $this->licenseOrPermitExpirationDate;
    }

    /**
     * Indicate the expiration date for the license or permit. The format is YYYY-MM-DD.<br>Example: "2019-12-03".
     */
    public function setLicenseOrPermitExpirationDate(string $licenseOrPermitExpirationDate): self
    {
        $this->initialized['licenseOrPermitExpirationDate'] = true;
        $this->licenseOrPermitExpirationDate = $licenseOrPermitExpirationDate;

        return $this;
    }

    /**
     * Indicate License Or Permit Number for the commodity being exported.<br>Example: 11.
     */
    public function getLicenseOrPermitNumber(): string
    {
        return $this->licenseOrPermitNumber;
    }

    /**
     * Indicate License Or Permit Number for the commodity being exported.<br>Example: 11.
     */
    public function setLicenseOrPermitNumber(string $licenseOrPermitNumber): self
    {
        $this->initialized['licenseOrPermitNumber'] = true;
        $this->licenseOrPermitNumber = $licenseOrPermitNumber;

        return $this;
    }

    /**
     * Indicate Entry Number for the export.<br>Example: 125.
     */
    public function getEntryNumber(): string
    {
        return $this->entryNumber;
    }

    /**
     * Indicate Entry Number for the export.<br>Example: 125.
     */
    public function setEntryNumber(string $entryNumber): self
    {
        $this->initialized['entryNumber'] = true;
        $this->entryNumber = $entryNumber;

        return $this;
    }

    /**
     * Indicate the Foreign Trade Zone Code.<br>Example: US.
     */
    public function getForeignTradeZoneCode(): string
    {
        return $this->foreignTradeZoneCode;
    }

    /**
     * Indicate the Foreign Trade Zone Code.<br>Example: US.
     */
    public function setForeignTradeZoneCode(string $foreignTradeZoneCode): self
    {
        $this->initialized['foreignTradeZoneCode'] = true;
        $this->foreignTradeZoneCode = $foreignTradeZoneCode;

        return $this;
    }

    /**
     * Indicate International Controlled Export Type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Indicate International Controlled Export Type.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}

<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicenseLicenseOrPermitDetail extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Specifies license or permit detail number.<br>Example: 12345
     *
     * @var string
     */
    protected $number;
    /**
     * Specifies the effective date of the license.<br>The format is [YYYY-MM-DD].<br>Example: 2019-08-09
     *
     * @var string
     */
    protected $effectiveDate;
    /**
     * Specifies the expiration date of the license.<br>The format is [YYYY-MM-DD].<br>Example: 2019-04-09
     *
     * @var string
     */
    protected $expirationDate;
    /**
     * Specifies license or permit detail number.<br>Example: 12345
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * Specifies license or permit detail number.<br>Example: 12345
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * Specifies the effective date of the license.<br>The format is [YYYY-MM-DD].<br>Example: 2019-08-09
     *
     * @return string
     */
    public function getEffectiveDate() : string
    {
        return $this->effectiveDate;
    }
    /**
     * Specifies the effective date of the license.<br>The format is [YYYY-MM-DD].<br>Example: 2019-08-09
     *
     * @param string $effectiveDate
     *
     * @return self
     */
    public function setEffectiveDate(string $effectiveDate) : self
    {
        $this->initialized['effectiveDate'] = true;
        $this->effectiveDate = $effectiveDate;
        return $this;
    }
    /**
     * Specifies the expiration date of the license.<br>The format is [YYYY-MM-DD].<br>Example: 2019-04-09
     *
     * @return string
     */
    public function getExpirationDate() : string
    {
        return $this->expirationDate;
    }
    /**
     * Specifies the expiration date of the license.<br>The format is [YYYY-MM-DD].<br>Example: 2019-04-09
     *
     * @param string $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(string $expirationDate) : self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
}
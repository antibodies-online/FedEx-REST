<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyTinsItem extends \ArrayObject
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
     * Specify tax ID number. Maximum length is 18. <br>Example: 123567
     *
     * @var string
     */
    protected $number;
    /**
     * Indicate the type of tax identification number.
     *
     * @var string
     */
    protected $tinType;
    /**
     * Specify the reason for using the tax identification number in shipment processing.
     *
     * @var string
     */
    protected $usage;
    /**
     * Specify the tax ID effective date.<br>Example: 2000-01-23T04:56:07.000+00:00
     *
     * @var string
     */
    protected $effectiveDate;
    /**
     * Specify the tax ID expiration date.<br>Example: 2000-01-23T04:56:07.000+00:00
     *
     * @var string
     */
    protected $expirationDate;
    /**
     * Specify tax ID number. Maximum length is 18. <br>Example: 123567
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * Specify tax ID number. Maximum length is 18. <br>Example: 123567
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
     * Indicate the type of tax identification number.
     *
     * @return string
     */
    public function getTinType() : string
    {
        return $this->tinType;
    }
    /**
     * Indicate the type of tax identification number.
     *
     * @param string $tinType
     *
     * @return self
     */
    public function setTinType(string $tinType) : self
    {
        $this->initialized['tinType'] = true;
        $this->tinType = $tinType;
        return $this;
    }
    /**
     * Specify the reason for using the tax identification number in shipment processing.
     *
     * @return string
     */
    public function getUsage() : string
    {
        return $this->usage;
    }
    /**
     * Specify the reason for using the tax identification number in shipment processing.
     *
     * @param string $usage
     *
     * @return self
     */
    public function setUsage(string $usage) : self
    {
        $this->initialized['usage'] = true;
        $this->usage = $usage;
        return $this;
    }
    /**
     * Specify the tax ID effective date.<br>Example: 2000-01-23T04:56:07.000+00:00
     *
     * @return string
     */
    public function getEffectiveDate() : string
    {
        return $this->effectiveDate;
    }
    /**
     * Specify the tax ID effective date.<br>Example: 2000-01-23T04:56:07.000+00:00
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
     * Specify the tax ID expiration date.<br>Example: 2000-01-23T04:56:07.000+00:00
     *
     * @return string
     */
    public function getExpirationDate() : string
    {
        return $this->expirationDate;
    }
    /**
     * Specify the tax ID expiration date.<br>Example: 2000-01-23T04:56:07.000+00:00
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
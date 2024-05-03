<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail extends \ArrayObject
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
     * This is the merchant phone number and required for Email Return Labels.<br>Example: 19012635656
     *
     * @var string
     */
    protected $merchantPhoneNumber;
    /**
     * Indicate the allowed (merchant-authorized) special services which may be selected when the subsequent shipment is created.<br>Only services represented in EmailLabelAllowedSpecialServiceType will be controlled by this list.
     *
     * @var list<string>
     */
    protected $allowedSpecialService;
    /**
     * This is the merchant phone number and required for Email Return Labels.<br>Example: 19012635656
     *
     * @return string
     */
    public function getMerchantPhoneNumber() : string
    {
        return $this->merchantPhoneNumber;
    }
    /**
     * This is the merchant phone number and required for Email Return Labels.<br>Example: 19012635656
     *
     * @param string $merchantPhoneNumber
     *
     * @return self
     */
    public function setMerchantPhoneNumber(string $merchantPhoneNumber) : self
    {
        $this->initialized['merchantPhoneNumber'] = true;
        $this->merchantPhoneNumber = $merchantPhoneNumber;
        return $this;
    }
    /**
     * Indicate the allowed (merchant-authorized) special services which may be selected when the subsequent shipment is created.<br>Only services represented in EmailLabelAllowedSpecialServiceType will be controlled by this list.
     *
     * @return list<string>
     */
    public function getAllowedSpecialService() : array
    {
        return $this->allowedSpecialService;
    }
    /**
     * Indicate the allowed (merchant-authorized) special services which may be selected when the subsequent shipment is created.<br>Only services represented in EmailLabelAllowedSpecialServiceType will be controlled by this list.
     *
     * @param list<string> $allowedSpecialService
     *
     * @return self
     */
    public function setAllowedSpecialService(array $allowedSpecialService) : self
    {
        $this->initialized['allowedSpecialService'] = true;
        $this->allowedSpecialService = $allowedSpecialService;
        return $this;
    }
}
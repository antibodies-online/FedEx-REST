<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1ReferencenumbersPostBodyReferencesInformation extends \ArrayObject
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
     * Specifies which carrier should be included.<br> Example: FDXE
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * Specify the type of alternate reference used. This is Conditionally required.<br> Valid Values :<ul><li>BILL_OF_LADING</li><li>COD_RETURN_TRACKING_NUMBER</li><li>CUSTOMER_AUTHORIZATION_NUMBER</li><li>CUSTOMER_REFERENCE</li><li>DEPARTMENT</li><li>DOCUMENT_AIRWAY_BILL</li><li>EXPRESS_ALTERNATE_REFERENCE</li><li>FEDEX_OFFICE_JOB_ORDER_NUMBER</li><li>FREE_FORM_REFERENCE</li><li>GROUND_INTERNATIONAL</li><li>GROUND_SHIPMENT_ID</li><li>INTERNATIONAL_DISTRIBUTION</li><li>INVOICE</li><li>JOB_GLOBAL_TRACKING_NUMBER</li><li>ORDER_GLOBAL_TRACKING_NUMBER</li><li>ORDER_TO_PAY_NUMBER</li><li>PART_NUMBER</li><li>PARTNER_CARRIER_NUMBER</li><li>PURCHASE_ORDER</li><li>REROUTE_TRACKING_NUMBER</li><li>RETURN_MATERIALS_AUTHORIZATION</li><li>RETURNED_TO_SHIPPER_TRACKING_NUMBER</li><li>SHIPPER_REFERENCE</li><li>TRANSBORDER_DISTRIBUTION</li><li>TRANSPORTATION_CONTROL_NUMBER</li><li>VIRTUAL_CONSOLIDATION</li></ul>
     *
     * @var string
     */
    protected $type;
    /**
     * Conditionally required. <br>Specifies the alternate reference value. <br> Example: 56754674567546754
     *
     * @var string
     */
    protected $value;
    /**
     * Conditionally required. <br>Specifies the shipper's account number. <br> Note: Either account number or destination postal code and country code are mandatory to track by reference.<br> Example: 697561862
     *
     * @var string
     */
    protected $accountNumber;
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD <br> Example: 2020-03-29
     *
     * @var string
     */
    protected $shipDateBegin;
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD <br> Example: 2020-04-01
     *
     * @var string
     */
    protected $shipDateEndDate;
    /**
     * Conditionally required. <br>Specifies the recipient's country code. <br> Note: Either account number or destination postal code and country code are mandatory to track by reference.<br> Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $destinationCountryCode;
    /**
     * Conditionally required. <br>Indicate recipient postal code. Required for postal-aware countries. <br> Note: Either account number or destination postal code and country code are mandatory to track by reference. <br> Example: 75063<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @var string
     */
    protected $destinationPostalCode;
    /**
     * Specifies which carrier should be included.<br> Example: FDXE
     *
     * @return string
     */
    public function getCarrierCode() : string
    {
        return $this->carrierCode;
    }
    /**
     * Specifies which carrier should be included.<br> Example: FDXE
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(string $carrierCode) : self
    {
        $this->initialized['carrierCode'] = true;
        $this->carrierCode = $carrierCode;
        return $this;
    }
    /**
     * Specify the type of alternate reference used. This is Conditionally required.<br> Valid Values :<ul><li>BILL_OF_LADING</li><li>COD_RETURN_TRACKING_NUMBER</li><li>CUSTOMER_AUTHORIZATION_NUMBER</li><li>CUSTOMER_REFERENCE</li><li>DEPARTMENT</li><li>DOCUMENT_AIRWAY_BILL</li><li>EXPRESS_ALTERNATE_REFERENCE</li><li>FEDEX_OFFICE_JOB_ORDER_NUMBER</li><li>FREE_FORM_REFERENCE</li><li>GROUND_INTERNATIONAL</li><li>GROUND_SHIPMENT_ID</li><li>INTERNATIONAL_DISTRIBUTION</li><li>INVOICE</li><li>JOB_GLOBAL_TRACKING_NUMBER</li><li>ORDER_GLOBAL_TRACKING_NUMBER</li><li>ORDER_TO_PAY_NUMBER</li><li>PART_NUMBER</li><li>PARTNER_CARRIER_NUMBER</li><li>PURCHASE_ORDER</li><li>REROUTE_TRACKING_NUMBER</li><li>RETURN_MATERIALS_AUTHORIZATION</li><li>RETURNED_TO_SHIPPER_TRACKING_NUMBER</li><li>SHIPPER_REFERENCE</li><li>TRANSBORDER_DISTRIBUTION</li><li>TRANSPORTATION_CONTROL_NUMBER</li><li>VIRTUAL_CONSOLIDATION</li></ul>
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Specify the type of alternate reference used. This is Conditionally required.<br> Valid Values :<ul><li>BILL_OF_LADING</li><li>COD_RETURN_TRACKING_NUMBER</li><li>CUSTOMER_AUTHORIZATION_NUMBER</li><li>CUSTOMER_REFERENCE</li><li>DEPARTMENT</li><li>DOCUMENT_AIRWAY_BILL</li><li>EXPRESS_ALTERNATE_REFERENCE</li><li>FEDEX_OFFICE_JOB_ORDER_NUMBER</li><li>FREE_FORM_REFERENCE</li><li>GROUND_INTERNATIONAL</li><li>GROUND_SHIPMENT_ID</li><li>INTERNATIONAL_DISTRIBUTION</li><li>INVOICE</li><li>JOB_GLOBAL_TRACKING_NUMBER</li><li>ORDER_GLOBAL_TRACKING_NUMBER</li><li>ORDER_TO_PAY_NUMBER</li><li>PART_NUMBER</li><li>PARTNER_CARRIER_NUMBER</li><li>PURCHASE_ORDER</li><li>REROUTE_TRACKING_NUMBER</li><li>RETURN_MATERIALS_AUTHORIZATION</li><li>RETURNED_TO_SHIPPER_TRACKING_NUMBER</li><li>SHIPPER_REFERENCE</li><li>TRANSBORDER_DISTRIBUTION</li><li>TRANSPORTATION_CONTROL_NUMBER</li><li>VIRTUAL_CONSOLIDATION</li></ul>
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Conditionally required. <br>Specifies the alternate reference value. <br> Example: 56754674567546754
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Conditionally required. <br>Specifies the alternate reference value. <br> Example: 56754674567546754
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Conditionally required. <br>Specifies the shipper's account number. <br> Note: Either account number or destination postal code and country code are mandatory to track by reference.<br> Example: 697561862
     *
     * @return string
     */
    public function getAccountNumber() : string
    {
        return $this->accountNumber;
    }
    /**
     * Conditionally required. <br>Specifies the shipper's account number. <br> Note: Either account number or destination postal code and country code are mandatory to track by reference.<br> Example: 697561862
     *
     * @param string $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(string $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD <br> Example: 2020-03-29
     *
     * @return string
     */
    public function getShipDateBegin() : string
    {
        return $this->shipDateBegin;
    }
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD <br> Example: 2020-03-29
     *
     * @param string $shipDateBegin
     *
     * @return self
     */
    public function setShipDateBegin(string $shipDateBegin) : self
    {
        $this->initialized['shipDateBegin'] = true;
        $this->shipDateBegin = $shipDateBegin;
        return $this;
    }
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD <br> Example: 2020-04-01
     *
     * @return string
     */
    public function getShipDateEndDate() : string
    {
        return $this->shipDateEndDate;
    }
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD <br> Example: 2020-04-01
     *
     * @param string $shipDateEndDate
     *
     * @return self
     */
    public function setShipDateEndDate(string $shipDateEndDate) : self
    {
        $this->initialized['shipDateEndDate'] = true;
        $this->shipDateEndDate = $shipDateEndDate;
        return $this;
    }
    /**
     * Conditionally required. <br>Specifies the recipient's country code. <br> Note: Either account number or destination postal code and country code are mandatory to track by reference.<br> Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getDestinationCountryCode() : string
    {
        return $this->destinationCountryCode;
    }
    /**
     * Conditionally required. <br>Specifies the recipient's country code. <br> Note: Either account number or destination postal code and country code are mandatory to track by reference.<br> Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @param string $destinationCountryCode
     *
     * @return self
     */
    public function setDestinationCountryCode(string $destinationCountryCode) : self
    {
        $this->initialized['destinationCountryCode'] = true;
        $this->destinationCountryCode = $destinationCountryCode;
        return $this;
    }
    /**
     * Conditionally required. <br>Indicate recipient postal code. Required for postal-aware countries. <br> Note: Either account number or destination postal code and country code are mandatory to track by reference. <br> Example: 75063<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @return string
     */
    public function getDestinationPostalCode() : string
    {
        return $this->destinationPostalCode;
    }
    /**
     * Conditionally required. <br>Indicate recipient postal code. Required for postal-aware countries. <br> Note: Either account number or destination postal code and country code are mandatory to track by reference. <br> Example: 75063<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @param string $destinationPostalCode
     *
     * @return self
     */
    public function setDestinationPostalCode(string $destinationPostalCode) : self
    {
        $this->initialized['destinationPostalCode'] = true;
        $this->destinationPostalCode = $destinationPostalCode;
        return $this;
    }
}
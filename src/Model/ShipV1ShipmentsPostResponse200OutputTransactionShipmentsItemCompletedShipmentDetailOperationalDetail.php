<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailOperationalDetail extends \ArrayObject
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
     * Indicates the origin service area.<br>Example: A1
     *
     * @var string
     */
    protected $originServiceArea;
    /**
     * Indicates the service code.<br>Example: 010
     *
     * @var string
     */
    protected $serviceCode;
    /**
     * Indicates the airport identifier.<br>Example: DFW
     *
     * @var string
     */
    protected $airportId;
    /**
     * Specifies the postal code.<br>Example: 38010<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Indicates standard carrier alpha code.
     *
     * @var string
     */
    protected $scac;
    /**
     * Specifies expected/estimated day of week of the delivery.<br>Example: TUE
     *
     * @var string
     */
    protected $deliveryDay;
    /**
     * This is the origin Location identifier.<br>Example: 678
     *
     * @var string
     */
    protected $originLocationId;
    /**
     * Indicate the two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Specifies astra description.<br>Example: SMART POST
     *
     * @var string
     */
    protected $astraDescription;
    /**
     * Specifies origin location number.<br>Example: 243
     *
     * @var int
     */
    protected $originLocationNumber;
    /**
     * Specifies delivery date for the shipment. The format is [YYYY-MM-DD]<br>Example: 2001-04-05
     *
     * @var string
     */
    protected $deliveryDate;
    /**
     * FedEx Ground delivery features for which this shipment may be eligible.<br>Example: ["deliveryEligibilities"]
     *
     * @var list<string>
     */
    protected $deliveryEligibilities;
    /**
     * Indicates that this shipment is not eligible for money back guarantee.
     *
     * @var bool
     */
    protected $ineligibleForMoneyBackGuarantee;
    /**
     * Maximum expected transit time.<br>Example: SEVEN_DAYS
     *
     * @var string
     */
    protected $maximumTransitTime;
    /**
     * This is the state or province code of the shipment destination location, and is not necessarily the same as the postal state.<br>Example: GA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>
     *
     * @var string
     */
    protected $destinationLocationStateOrProvinceCode;
    /**
     * Text describing planned delivery.<br>Example: TUE - 15 OCT 10:30A
     *
     * @var string
     */
    protected $astraPlannedServiceLevel;
    /**
     * Specifies the FedEx Destination Location Identifier.<br>Example: DALA
     *
     * @var string
     */
    protected $destinationLocationId;
    /**
     * Standard transit time per origin, destination, and service.<br>Example: TWO_DAYS
     *
     * @var string
     */
    protected $transitTime;
    /**
     * This is a placeholder for State or Province code.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br>Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * Indicates destination location number.<br>Example: 876
     *
     * @var int
     */
    protected $destinationLocationNumber;
    /**
     * Indicates packaging code.<br>Example: 03
     *
     * @var string
     */
    protected $packagingCode;
    /**
     * This is committed date of delivery.<br>Example: 2019-10-15
     *
     * @var string
     */
    protected $commitDate;
    /**
     * This is delivery time, as published in Service Guide.<br>Example: 10:30A
     *
     * @var string
     */
    protected $publishedDeliveryTime;
    /**
     * This is ursa suffix code.<br>Example: Ga
     *
     * @var string
     */
    protected $ursaSuffixCode;
    /**
     * This is ursa prefix code.<br>Example: XH
     *
     * @var string
     */
    protected $ursaPrefixCode;
    /**
     * Specifies destination service area.<br>Example: A1
     *
     * @var string
     */
    protected $destinationServiceArea;
    /**
     * Committed day of week of delivery.<br>Example: TUE
     *
     * @var string
     */
    protected $commitDay;
    /**
     * Transit time based on customer eligibility.<br>Example: ONE_DAY
     *
     * @var string
     */
    protected $customTransitTime;
    /**
     * Indicates the origin service area.<br>Example: A1
     *
     * @return string
     */
    public function getOriginServiceArea() : string
    {
        return $this->originServiceArea;
    }
    /**
     * Indicates the origin service area.<br>Example: A1
     *
     * @param string $originServiceArea
     *
     * @return self
     */
    public function setOriginServiceArea(string $originServiceArea) : self
    {
        $this->initialized['originServiceArea'] = true;
        $this->originServiceArea = $originServiceArea;
        return $this;
    }
    /**
     * Indicates the service code.<br>Example: 010
     *
     * @return string
     */
    public function getServiceCode() : string
    {
        return $this->serviceCode;
    }
    /**
     * Indicates the service code.<br>Example: 010
     *
     * @param string $serviceCode
     *
     * @return self
     */
    public function setServiceCode(string $serviceCode) : self
    {
        $this->initialized['serviceCode'] = true;
        $this->serviceCode = $serviceCode;
        return $this;
    }
    /**
     * Indicates the airport identifier.<br>Example: DFW
     *
     * @return string
     */
    public function getAirportId() : string
    {
        return $this->airportId;
    }
    /**
     * Indicates the airport identifier.<br>Example: DFW
     *
     * @param string $airportId
     *
     * @return self
     */
    public function setAirportId(string $airportId) : self
    {
        $this->initialized['airportId'] = true;
        $this->airportId = $airportId;
        return $this;
    }
    /**
     * Specifies the postal code.<br>Example: 38010<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Specifies the postal code.<br>Example: 38010<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode) : self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * Indicates standard carrier alpha code.
     *
     * @return string
     */
    public function getScac() : string
    {
        return $this->scac;
    }
    /**
     * Indicates standard carrier alpha code.
     *
     * @param string $scac
     *
     * @return self
     */
    public function setScac(string $scac) : self
    {
        $this->initialized['scac'] = true;
        $this->scac = $scac;
        return $this;
    }
    /**
     * Specifies expected/estimated day of week of the delivery.<br>Example: TUE
     *
     * @return string
     */
    public function getDeliveryDay() : string
    {
        return $this->deliveryDay;
    }
    /**
     * Specifies expected/estimated day of week of the delivery.<br>Example: TUE
     *
     * @param string $deliveryDay
     *
     * @return self
     */
    public function setDeliveryDay(string $deliveryDay) : self
    {
        $this->initialized['deliveryDay'] = true;
        $this->deliveryDay = $deliveryDay;
        return $this;
    }
    /**
     * This is the origin Location identifier.<br>Example: 678
     *
     * @return string
     */
    public function getOriginLocationId() : string
    {
        return $this->originLocationId;
    }
    /**
     * This is the origin Location identifier.<br>Example: 678
     *
     * @param string $originLocationId
     *
     * @return self
     */
    public function setOriginLocationId(string $originLocationId) : self
    {
        $this->initialized['originLocationId'] = true;
        $this->originLocationId = $originLocationId;
        return $this;
    }
    /**
     * Indicate the two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Indicate the two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Specifies astra description.<br>Example: SMART POST
     *
     * @return string
     */
    public function getAstraDescription() : string
    {
        return $this->astraDescription;
    }
    /**
     * Specifies astra description.<br>Example: SMART POST
     *
     * @param string $astraDescription
     *
     * @return self
     */
    public function setAstraDescription(string $astraDescription) : self
    {
        $this->initialized['astraDescription'] = true;
        $this->astraDescription = $astraDescription;
        return $this;
    }
    /**
     * Specifies origin location number.<br>Example: 243
     *
     * @return int
     */
    public function getOriginLocationNumber() : int
    {
        return $this->originLocationNumber;
    }
    /**
     * Specifies origin location number.<br>Example: 243
     *
     * @param int $originLocationNumber
     *
     * @return self
     */
    public function setOriginLocationNumber(int $originLocationNumber) : self
    {
        $this->initialized['originLocationNumber'] = true;
        $this->originLocationNumber = $originLocationNumber;
        return $this;
    }
    /**
     * Specifies delivery date for the shipment. The format is [YYYY-MM-DD]<br>Example: 2001-04-05
     *
     * @return string
     */
    public function getDeliveryDate() : string
    {
        return $this->deliveryDate;
    }
    /**
     * Specifies delivery date for the shipment. The format is [YYYY-MM-DD]<br>Example: 2001-04-05
     *
     * @param string $deliveryDate
     *
     * @return self
     */
    public function setDeliveryDate(string $deliveryDate) : self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * FedEx Ground delivery features for which this shipment may be eligible.<br>Example: ["deliveryEligibilities"]
     *
     * @return list<string>
     */
    public function getDeliveryEligibilities() : array
    {
        return $this->deliveryEligibilities;
    }
    /**
     * FedEx Ground delivery features for which this shipment may be eligible.<br>Example: ["deliveryEligibilities"]
     *
     * @param list<string> $deliveryEligibilities
     *
     * @return self
     */
    public function setDeliveryEligibilities(array $deliveryEligibilities) : self
    {
        $this->initialized['deliveryEligibilities'] = true;
        $this->deliveryEligibilities = $deliveryEligibilities;
        return $this;
    }
    /**
     * Indicates that this shipment is not eligible for money back guarantee.
     *
     * @return bool
     */
    public function getIneligibleForMoneyBackGuarantee() : bool
    {
        return $this->ineligibleForMoneyBackGuarantee;
    }
    /**
     * Indicates that this shipment is not eligible for money back guarantee.
     *
     * @param bool $ineligibleForMoneyBackGuarantee
     *
     * @return self
     */
    public function setIneligibleForMoneyBackGuarantee(bool $ineligibleForMoneyBackGuarantee) : self
    {
        $this->initialized['ineligibleForMoneyBackGuarantee'] = true;
        $this->ineligibleForMoneyBackGuarantee = $ineligibleForMoneyBackGuarantee;
        return $this;
    }
    /**
     * Maximum expected transit time.<br>Example: SEVEN_DAYS
     *
     * @return string
     */
    public function getMaximumTransitTime() : string
    {
        return $this->maximumTransitTime;
    }
    /**
     * Maximum expected transit time.<br>Example: SEVEN_DAYS
     *
     * @param string $maximumTransitTime
     *
     * @return self
     */
    public function setMaximumTransitTime(string $maximumTransitTime) : self
    {
        $this->initialized['maximumTransitTime'] = true;
        $this->maximumTransitTime = $maximumTransitTime;
        return $this;
    }
    /**
     * This is the state or province code of the shipment destination location, and is not necessarily the same as the postal state.<br>Example: GA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>
     *
     * @return string
     */
    public function getDestinationLocationStateOrProvinceCode() : string
    {
        return $this->destinationLocationStateOrProvinceCode;
    }
    /**
     * This is the state or province code of the shipment destination location, and is not necessarily the same as the postal state.<br>Example: GA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>
     *
     * @param string $destinationLocationStateOrProvinceCode
     *
     * @return self
     */
    public function setDestinationLocationStateOrProvinceCode(string $destinationLocationStateOrProvinceCode) : self
    {
        $this->initialized['destinationLocationStateOrProvinceCode'] = true;
        $this->destinationLocationStateOrProvinceCode = $destinationLocationStateOrProvinceCode;
        return $this;
    }
    /**
     * Text describing planned delivery.<br>Example: TUE - 15 OCT 10:30A
     *
     * @return string
     */
    public function getAstraPlannedServiceLevel() : string
    {
        return $this->astraPlannedServiceLevel;
    }
    /**
     * Text describing planned delivery.<br>Example: TUE - 15 OCT 10:30A
     *
     * @param string $astraPlannedServiceLevel
     *
     * @return self
     */
    public function setAstraPlannedServiceLevel(string $astraPlannedServiceLevel) : self
    {
        $this->initialized['astraPlannedServiceLevel'] = true;
        $this->astraPlannedServiceLevel = $astraPlannedServiceLevel;
        return $this;
    }
    /**
     * Specifies the FedEx Destination Location Identifier.<br>Example: DALA
     *
     * @return string
     */
    public function getDestinationLocationId() : string
    {
        return $this->destinationLocationId;
    }
    /**
     * Specifies the FedEx Destination Location Identifier.<br>Example: DALA
     *
     * @param string $destinationLocationId
     *
     * @return self
     */
    public function setDestinationLocationId(string $destinationLocationId) : self
    {
        $this->initialized['destinationLocationId'] = true;
        $this->destinationLocationId = $destinationLocationId;
        return $this;
    }
    /**
     * Standard transit time per origin, destination, and service.<br>Example: TWO_DAYS
     *
     * @return string
     */
    public function getTransitTime() : string
    {
        return $this->transitTime;
    }
    /**
     * Standard transit time per origin, destination, and service.<br>Example: TWO_DAYS
     *
     * @param string $transitTime
     *
     * @return self
     */
    public function setTransitTime(string $transitTime) : self
    {
        $this->initialized['transitTime'] = true;
        $this->transitTime = $transitTime;
        return $this;
    }
    /**
     * This is a placeholder for State or Province code.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br>Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>
     *
     * @return string
     */
    public function getStateOrProvinceCode() : string
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * This is a placeholder for State or Province code.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br>Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>
     *
     * @param string $stateOrProvinceCode
     *
     * @return self
     */
    public function setStateOrProvinceCode(string $stateOrProvinceCode) : self
    {
        $this->initialized['stateOrProvinceCode'] = true;
        $this->stateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    /**
     * Indicates destination location number.<br>Example: 876
     *
     * @return int
     */
    public function getDestinationLocationNumber() : int
    {
        return $this->destinationLocationNumber;
    }
    /**
     * Indicates destination location number.<br>Example: 876
     *
     * @param int $destinationLocationNumber
     *
     * @return self
     */
    public function setDestinationLocationNumber(int $destinationLocationNumber) : self
    {
        $this->initialized['destinationLocationNumber'] = true;
        $this->destinationLocationNumber = $destinationLocationNumber;
        return $this;
    }
    /**
     * Indicates packaging code.<br>Example: 03
     *
     * @return string
     */
    public function getPackagingCode() : string
    {
        return $this->packagingCode;
    }
    /**
     * Indicates packaging code.<br>Example: 03
     *
     * @param string $packagingCode
     *
     * @return self
     */
    public function setPackagingCode(string $packagingCode) : self
    {
        $this->initialized['packagingCode'] = true;
        $this->packagingCode = $packagingCode;
        return $this;
    }
    /**
     * This is committed date of delivery.<br>Example: 2019-10-15
     *
     * @return string
     */
    public function getCommitDate() : string
    {
        return $this->commitDate;
    }
    /**
     * This is committed date of delivery.<br>Example: 2019-10-15
     *
     * @param string $commitDate
     *
     * @return self
     */
    public function setCommitDate(string $commitDate) : self
    {
        $this->initialized['commitDate'] = true;
        $this->commitDate = $commitDate;
        return $this;
    }
    /**
     * This is delivery time, as published in Service Guide.<br>Example: 10:30A
     *
     * @return string
     */
    public function getPublishedDeliveryTime() : string
    {
        return $this->publishedDeliveryTime;
    }
    /**
     * This is delivery time, as published in Service Guide.<br>Example: 10:30A
     *
     * @param string $publishedDeliveryTime
     *
     * @return self
     */
    public function setPublishedDeliveryTime(string $publishedDeliveryTime) : self
    {
        $this->initialized['publishedDeliveryTime'] = true;
        $this->publishedDeliveryTime = $publishedDeliveryTime;
        return $this;
    }
    /**
     * This is ursa suffix code.<br>Example: Ga
     *
     * @return string
     */
    public function getUrsaSuffixCode() : string
    {
        return $this->ursaSuffixCode;
    }
    /**
     * This is ursa suffix code.<br>Example: Ga
     *
     * @param string $ursaSuffixCode
     *
     * @return self
     */
    public function setUrsaSuffixCode(string $ursaSuffixCode) : self
    {
        $this->initialized['ursaSuffixCode'] = true;
        $this->ursaSuffixCode = $ursaSuffixCode;
        return $this;
    }
    /**
     * This is ursa prefix code.<br>Example: XH
     *
     * @return string
     */
    public function getUrsaPrefixCode() : string
    {
        return $this->ursaPrefixCode;
    }
    /**
     * This is ursa prefix code.<br>Example: XH
     *
     * @param string $ursaPrefixCode
     *
     * @return self
     */
    public function setUrsaPrefixCode(string $ursaPrefixCode) : self
    {
        $this->initialized['ursaPrefixCode'] = true;
        $this->ursaPrefixCode = $ursaPrefixCode;
        return $this;
    }
    /**
     * Specifies destination service area.<br>Example: A1
     *
     * @return string
     */
    public function getDestinationServiceArea() : string
    {
        return $this->destinationServiceArea;
    }
    /**
     * Specifies destination service area.<br>Example: A1
     *
     * @param string $destinationServiceArea
     *
     * @return self
     */
    public function setDestinationServiceArea(string $destinationServiceArea) : self
    {
        $this->initialized['destinationServiceArea'] = true;
        $this->destinationServiceArea = $destinationServiceArea;
        return $this;
    }
    /**
     * Committed day of week of delivery.<br>Example: TUE
     *
     * @return string
     */
    public function getCommitDay() : string
    {
        return $this->commitDay;
    }
    /**
     * Committed day of week of delivery.<br>Example: TUE
     *
     * @param string $commitDay
     *
     * @return self
     */
    public function setCommitDay(string $commitDay) : self
    {
        $this->initialized['commitDay'] = true;
        $this->commitDay = $commitDay;
        return $this;
    }
    /**
     * Transit time based on customer eligibility.<br>Example: ONE_DAY
     *
     * @return string
     */
    public function getCustomTransitTime() : string
    {
        return $this->customTransitTime;
    }
    /**
     * Transit time based on customer eligibility.<br>Example: ONE_DAY
     *
     * @param string $customTransitTime
     *
     * @return self
     */
    public function setCustomTransitTime(string $customTransitTime) : self
    {
        $this->initialized['customTransitTime'] = true;
        $this->customTransitTime = $customTransitTime;
        return $this;
    }
}
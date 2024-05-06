<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetail extends \ArrayObject
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
     * Indicate the Offeror's name or contract number, per DOT regulation.<br>Example: John Smith
     *
     * @var string
     */
    protected $offeror;
    /**
     * Indicate the Dangerous Goods Accessibility Type.<br> Inaccessible means it does not have to be accessible on the aircraft.  Accessible means it must be fully accessible on the aircraft, and is more strictly controlled.
     *
     * @var string
     */
    protected $accessibility;
    /**
     * Indicate the emergency telephone/contact number.
     *
     * @var string
     */
    protected $emergencyContactNumber;
    /**
     * Specify the special handling requested for the package.<br> Example: BATTERY
     *
     * @var list<string>
     */
    protected $options;
    /**
     * Indicate one or more containers used to pack dangerous goods commodities.
     *
     * @var list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItem>
     */
    protected $containers;
    /**
     * The hazardous package shipment regulation type.
     *
     * @var string
     */
    protected $regulation;
    /**
     * Identifies number and type of packaging units for hazardous commodities.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailPackaging
     */
    protected $packaging;
    /**
     * Indicate the Offeror's name or contract number, per DOT regulation.<br>Example: John Smith
     *
     * @return string
     */
    public function getOfferor() : string
    {
        return $this->offeror;
    }
    /**
     * Indicate the Offeror's name or contract number, per DOT regulation.<br>Example: John Smith
     *
     * @param string $offeror
     *
     * @return self
     */
    public function setOfferor(string $offeror) : self
    {
        $this->initialized['offeror'] = true;
        $this->offeror = $offeror;
        return $this;
    }
    /**
     * Indicate the Dangerous Goods Accessibility Type.<br> Inaccessible means it does not have to be accessible on the aircraft.  Accessible means it must be fully accessible on the aircraft, and is more strictly controlled.
     *
     * @return string
     */
    public function getAccessibility() : string
    {
        return $this->accessibility;
    }
    /**
     * Indicate the Dangerous Goods Accessibility Type.<br> Inaccessible means it does not have to be accessible on the aircraft.  Accessible means it must be fully accessible on the aircraft, and is more strictly controlled.
     *
     * @param string $accessibility
     *
     * @return self
     */
    public function setAccessibility(string $accessibility) : self
    {
        $this->initialized['accessibility'] = true;
        $this->accessibility = $accessibility;
        return $this;
    }
    /**
     * Indicate the emergency telephone/contact number.
     *
     * @return string
     */
    public function getEmergencyContactNumber() : string
    {
        return $this->emergencyContactNumber;
    }
    /**
     * Indicate the emergency telephone/contact number.
     *
     * @param string $emergencyContactNumber
     *
     * @return self
     */
    public function setEmergencyContactNumber(string $emergencyContactNumber) : self
    {
        $this->initialized['emergencyContactNumber'] = true;
        $this->emergencyContactNumber = $emergencyContactNumber;
        return $this;
    }
    /**
     * Specify the special handling requested for the package.<br> Example: BATTERY
     *
     * @return list<string>
     */
    public function getOptions() : array
    {
        return $this->options;
    }
    /**
     * Specify the special handling requested for the package.<br> Example: BATTERY
     *
     * @param list<string> $options
     *
     * @return self
     */
    public function setOptions(array $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * Indicate one or more containers used to pack dangerous goods commodities.
     *
     * @return list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItem>
     */
    public function getContainers() : array
    {
        return $this->containers;
    }
    /**
     * Indicate one or more containers used to pack dangerous goods commodities.
     *
     * @param list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItem> $containers
     *
     * @return self
     */
    public function setContainers(array $containers) : self
    {
        $this->initialized['containers'] = true;
        $this->containers = $containers;
        return $this;
    }
    /**
     * The hazardous package shipment regulation type.
     *
     * @return string
     */
    public function getRegulation() : string
    {
        return $this->regulation;
    }
    /**
     * The hazardous package shipment regulation type.
     *
     * @param string $regulation
     *
     * @return self
     */
    public function setRegulation(string $regulation) : self
    {
        $this->initialized['regulation'] = true;
        $this->regulation = $regulation;
        return $this;
    }
    /**
     * Identifies number and type of packaging units for hazardous commodities.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailPackaging
     */
    public function getPackaging() : RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailPackaging
    {
        return $this->packaging;
    }
    /**
     * Identifies number and type of packaging units for hazardous commodities.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailPackaging $packaging
     *
     * @return self
     */
    public function setPackaging(RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailPackaging $packaging) : self
    {
        $this->initialized['packaging'] = true;
        $this->packaging = $packaging;
        return $this;
    }
}
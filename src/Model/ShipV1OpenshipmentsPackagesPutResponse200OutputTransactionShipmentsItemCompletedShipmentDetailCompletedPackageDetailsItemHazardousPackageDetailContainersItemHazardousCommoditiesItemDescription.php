<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription extends \ArrayObject
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
     * In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.<br>Example: 876
     *
     * @var int
     */
    protected $sequenceNumber;
    /**
     * Specifies Packing Instructions.<br>Example: packingInstructions
     *
     * @var string
     */
    protected $packingInstructions;
    /**
     * Specifies subsidiary Classes.<br>Example:["Subsidiary Classes"]
     *
     * @var list<string>
     */
    protected $subsidiaryClasses;
    /**
     * Specifies the text for the label.
     *
     * @var string
     */
    protected $labelText;
    /**
     * There are five categories of tunnel categorization with A representing the least restrictive and E as the most restrictive. Category A, as the least restrictive, will not be sign-posted. Category E, the most restrictive, only allows the passage of UN2919, UN3291, UN3331, UN3359 and UN3373.<br>Example: UN2919
     *
     * @var string
     */
    protected $tunnelRestrictionCode;
    /**
     * Specifies Special Provisions if any.<br>Example: specialProvisions
     *
     * @var string
     */
    protected $specialProvisions;
    /**
     * Fully-expanded descriptive text for a hazardous commodity.<br>Example: properShippingNameAndDescription
     *
     * @var string
     */
    protected $properShippingNameAndDescription;
    /**
     * Specifies Technical Name.<br>Example: technicalName
     *
     * @var string
     */
    protected $technicalName;
    /**
     * Specifies Symbols.<br>Example: symbols
     *
     * @var string
     */
    protected $symbols;
    /**
     * Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     *
     * @var string
     */
    protected $authorization;
    /**
     * Specifies attributes.<br>Example: ["attributes"]
     *
     * @var list<string>
     */
    protected $attributes;
    /**
     * Specifies the Identification.<br>Example: 1234
     *
     * @var string
     */
    protected $id;
    /**
     * Specifies packing group.
     *
     * @var string
     */
    protected $packingGroup;
    /**
     * Specifies proper shipping name.
     *
     * @var string
     */
    protected $properShippingName;
    /**
     * Specifies hazard class.<br>Example: Hazard Class
     *
     * @var string
     */
    protected $hazardClass;
    /**
     * In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.<br>Example: 876
     *
     * @return int
     */
    public function getSequenceNumber() : int
    {
        return $this->sequenceNumber;
    }
    /**
     * In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.<br>Example: 876
     *
     * @param int $sequenceNumber
     *
     * @return self
     */
    public function setSequenceNumber(int $sequenceNumber) : self
    {
        $this->initialized['sequenceNumber'] = true;
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Specifies Packing Instructions.<br>Example: packingInstructions
     *
     * @return string
     */
    public function getPackingInstructions() : string
    {
        return $this->packingInstructions;
    }
    /**
     * Specifies Packing Instructions.<br>Example: packingInstructions
     *
     * @param string $packingInstructions
     *
     * @return self
     */
    public function setPackingInstructions(string $packingInstructions) : self
    {
        $this->initialized['packingInstructions'] = true;
        $this->packingInstructions = $packingInstructions;
        return $this;
    }
    /**
     * Specifies subsidiary Classes.<br>Example:["Subsidiary Classes"]
     *
     * @return list<string>
     */
    public function getSubsidiaryClasses() : array
    {
        return $this->subsidiaryClasses;
    }
    /**
     * Specifies subsidiary Classes.<br>Example:["Subsidiary Classes"]
     *
     * @param list<string> $subsidiaryClasses
     *
     * @return self
     */
    public function setSubsidiaryClasses(array $subsidiaryClasses) : self
    {
        $this->initialized['subsidiaryClasses'] = true;
        $this->subsidiaryClasses = $subsidiaryClasses;
        return $this;
    }
    /**
     * Specifies the text for the label.
     *
     * @return string
     */
    public function getLabelText() : string
    {
        return $this->labelText;
    }
    /**
     * Specifies the text for the label.
     *
     * @param string $labelText
     *
     * @return self
     */
    public function setLabelText(string $labelText) : self
    {
        $this->initialized['labelText'] = true;
        $this->labelText = $labelText;
        return $this;
    }
    /**
     * There are five categories of tunnel categorization with A representing the least restrictive and E as the most restrictive. Category A, as the least restrictive, will not be sign-posted. Category E, the most restrictive, only allows the passage of UN2919, UN3291, UN3331, UN3359 and UN3373.<br>Example: UN2919
     *
     * @return string
     */
    public function getTunnelRestrictionCode() : string
    {
        return $this->tunnelRestrictionCode;
    }
    /**
     * There are five categories of tunnel categorization with A representing the least restrictive and E as the most restrictive. Category A, as the least restrictive, will not be sign-posted. Category E, the most restrictive, only allows the passage of UN2919, UN3291, UN3331, UN3359 and UN3373.<br>Example: UN2919
     *
     * @param string $tunnelRestrictionCode
     *
     * @return self
     */
    public function setTunnelRestrictionCode(string $tunnelRestrictionCode) : self
    {
        $this->initialized['tunnelRestrictionCode'] = true;
        $this->tunnelRestrictionCode = $tunnelRestrictionCode;
        return $this;
    }
    /**
     * Specifies Special Provisions if any.<br>Example: specialProvisions
     *
     * @return string
     */
    public function getSpecialProvisions() : string
    {
        return $this->specialProvisions;
    }
    /**
     * Specifies Special Provisions if any.<br>Example: specialProvisions
     *
     * @param string $specialProvisions
     *
     * @return self
     */
    public function setSpecialProvisions(string $specialProvisions) : self
    {
        $this->initialized['specialProvisions'] = true;
        $this->specialProvisions = $specialProvisions;
        return $this;
    }
    /**
     * Fully-expanded descriptive text for a hazardous commodity.<br>Example: properShippingNameAndDescription
     *
     * @return string
     */
    public function getProperShippingNameAndDescription() : string
    {
        return $this->properShippingNameAndDescription;
    }
    /**
     * Fully-expanded descriptive text for a hazardous commodity.<br>Example: properShippingNameAndDescription
     *
     * @param string $properShippingNameAndDescription
     *
     * @return self
     */
    public function setProperShippingNameAndDescription(string $properShippingNameAndDescription) : self
    {
        $this->initialized['properShippingNameAndDescription'] = true;
        $this->properShippingNameAndDescription = $properShippingNameAndDescription;
        return $this;
    }
    /**
     * Specifies Technical Name.<br>Example: technicalName
     *
     * @return string
     */
    public function getTechnicalName() : string
    {
        return $this->technicalName;
    }
    /**
     * Specifies Technical Name.<br>Example: technicalName
     *
     * @param string $technicalName
     *
     * @return self
     */
    public function setTechnicalName(string $technicalName) : self
    {
        $this->initialized['technicalName'] = true;
        $this->technicalName = $technicalName;
        return $this;
    }
    /**
     * Specifies Symbols.<br>Example: symbols
     *
     * @return string
     */
    public function getSymbols() : string
    {
        return $this->symbols;
    }
    /**
     * Specifies Symbols.<br>Example: symbols
     *
     * @param string $symbols
     *
     * @return self
     */
    public function setSymbols(string $symbols) : self
    {
        $this->initialized['symbols'] = true;
        $this->symbols = $symbols;
        return $this;
    }
    /**
     * Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     *
     * @return string
     */
    public function getAuthorization() : string
    {
        return $this->authorization;
    }
    /**
     * Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     *
     * @param string $authorization
     *
     * @return self
     */
    public function setAuthorization(string $authorization) : self
    {
        $this->initialized['authorization'] = true;
        $this->authorization = $authorization;
        return $this;
    }
    /**
     * Specifies attributes.<br>Example: ["attributes"]
     *
     * @return list<string>
     */
    public function getAttributes() : array
    {
        return $this->attributes;
    }
    /**
     * Specifies attributes.<br>Example: ["attributes"]
     *
     * @param list<string> $attributes
     *
     * @return self
     */
    public function setAttributes(array $attributes) : self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;
        return $this;
    }
    /**
     * Specifies the Identification.<br>Example: 1234
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Specifies the Identification.<br>Example: 1234
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Specifies packing group.
     *
     * @return string
     */
    public function getPackingGroup() : string
    {
        return $this->packingGroup;
    }
    /**
     * Specifies packing group.
     *
     * @param string $packingGroup
     *
     * @return self
     */
    public function setPackingGroup(string $packingGroup) : self
    {
        $this->initialized['packingGroup'] = true;
        $this->packingGroup = $packingGroup;
        return $this;
    }
    /**
     * Specifies proper shipping name.
     *
     * @return string
     */
    public function getProperShippingName() : string
    {
        return $this->properShippingName;
    }
    /**
     * Specifies proper shipping name.
     *
     * @param string $properShippingName
     *
     * @return self
     */
    public function setProperShippingName(string $properShippingName) : self
    {
        $this->initialized['properShippingName'] = true;
        $this->properShippingName = $properShippingName;
        return $this;
    }
    /**
     * Specifies hazard class.<br>Example: Hazard Class
     *
     * @return string
     */
    public function getHazardClass() : string
    {
        return $this->hazardClass;
    }
    /**
     * Specifies hazard class.<br>Example: Hazard Class
     *
     * @param string $hazardClass
     *
     * @return self
     */
    public function setHazardClass(string $hazardClass) : self
    {
        $this->initialized['hazardClass'] = true;
        $this->hazardClass = $hazardClass;
        return $this;
    }
}
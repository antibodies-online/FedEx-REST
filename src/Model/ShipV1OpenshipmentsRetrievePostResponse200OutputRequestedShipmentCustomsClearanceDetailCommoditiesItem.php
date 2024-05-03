<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItem extends \ArrayObject
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
     * This is the unit price.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemUnitPrice
     */
    protected $unitPrice;
    /**
     * This object contains additional quantitative information other than weight and quantity to calculate duties and taxes.
     *
     * @var list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemAdditionalMeasuresItem>
     */
    protected $additionalMeasures;
    /**
     * Indicate the number of pieces associated with the commodity. The value can neither be negative nor exceed 9,999.<br>Example: 12
     *
     * @var int
     */
    protected $numberOfPieces;
    /**
     * This is the units quantity (using quantityUnits as the unit of measure) per commodity. This is used to estimate duties and taxes.<br> Example: 125
     *
     * @var int
     */
    protected $quantity;
    /**
     * This is the unit of measure for the units quantity. This is used to estimate duties and taxes.<br>Example: EA<br><a onclick='loadDocReference("harmonizedsystemcodeunitofmeasure-table1")'>click here to see Commodity Unit Measures</a>
     *
     * @var string
     */
    protected $quantityUnits;
    /**
     * This is the customs value.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemCustomsValue
     */
    protected $customsValue;
    /**
     * This is commodity country of manufacture. This is required for International shipments. Maximum allowed length is 4.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     *
     * @var string
     */
    protected $countryOfManufacture;
    /**
     * This is an identifying mark or number used on the packaging of a shipment to help customers identify a particular shipment<br>Example: 87123
     *
     * @var string
     */
    protected $cIMarksAndNumbers;
    /**
     * This is to specify the Harmonized Tariff System (HTS) code to meet U.S. and foreign governments' customs requirements. These are mainly used to estimate the duties and taxes.<br>Example: 0613<br>To research the classification for your commodity, use the FedEx Global Trade Manager online at <a href='http://www.fedex.com/gtm' target='_blank'>fedex.com/gtm</a>. You will find country-specific information to determine whether your commodity is considered to be a document or non-document for your destination.
     *
     * @var string
     */
    protected $harmonizedCode;
    /**
     * This is the commodity description. Maximum allowed 450 characters.<br><a onclick='loadDocReference("vaguecommoditydescriptions")'>click here to see Vague commodity descriptions</a>
     *
     * @var string
     */
    protected $description;
    /**
     * This is Commodity name.<br>Example: Non-Threaded Rivets
     *
     * @var string
     */
    protected $name;
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemWeight
     */
    protected $weight;
    /**
     * This is the export license number for the shipment.<br>Example: 26456
     *
     * @var string
     */
    protected $exportLicenseNumber;
    /**
     * Specify the export license expiration date for the shipment.<br>Format YYYY-MM-DD<br>Example : 2009-04-12
     *
     * @var \DateTime
     */
    protected $exportLicenseExpirationDate;
    /**
     * This is a part number.<br>Example: 167
     *
     * @var string
     */
    protected $partNumber;
    /**
     * This is the purpose of this shipment. This is used for calculation of duties and taxes.
     *
     * @var string
     */
    protected $purpose;
    /**
     * Indicates the USMCA detail
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemUsmcaDetail
     */
    protected $usmcaDetail;
    /**
     * This is the unit price.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemUnitPrice
     */
    public function getUnitPrice() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemUnitPrice
    {
        return $this->unitPrice;
    }
    /**
     * This is the unit price.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemUnitPrice $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemUnitPrice $unitPrice) : self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * This object contains additional quantitative information other than weight and quantity to calculate duties and taxes.
     *
     * @return list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemAdditionalMeasuresItem>
     */
    public function getAdditionalMeasures() : array
    {
        return $this->additionalMeasures;
    }
    /**
     * This object contains additional quantitative information other than weight and quantity to calculate duties and taxes.
     *
     * @param list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemAdditionalMeasuresItem> $additionalMeasures
     *
     * @return self
     */
    public function setAdditionalMeasures(array $additionalMeasures) : self
    {
        $this->initialized['additionalMeasures'] = true;
        $this->additionalMeasures = $additionalMeasures;
        return $this;
    }
    /**
     * Indicate the number of pieces associated with the commodity. The value can neither be negative nor exceed 9,999.<br>Example: 12
     *
     * @return int
     */
    public function getNumberOfPieces() : int
    {
        return $this->numberOfPieces;
    }
    /**
     * Indicate the number of pieces associated with the commodity. The value can neither be negative nor exceed 9,999.<br>Example: 12
     *
     * @param int $numberOfPieces
     *
     * @return self
     */
    public function setNumberOfPieces(int $numberOfPieces) : self
    {
        $this->initialized['numberOfPieces'] = true;
        $this->numberOfPieces = $numberOfPieces;
        return $this;
    }
    /**
     * This is the units quantity (using quantityUnits as the unit of measure) per commodity. This is used to estimate duties and taxes.<br> Example: 125
     *
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }
    /**
     * This is the units quantity (using quantityUnits as the unit of measure) per commodity. This is used to estimate duties and taxes.<br> Example: 125
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * This is the unit of measure for the units quantity. This is used to estimate duties and taxes.<br>Example: EA<br><a onclick='loadDocReference("harmonizedsystemcodeunitofmeasure-table1")'>click here to see Commodity Unit Measures</a>
     *
     * @return string
     */
    public function getQuantityUnits() : string
    {
        return $this->quantityUnits;
    }
    /**
     * This is the unit of measure for the units quantity. This is used to estimate duties and taxes.<br>Example: EA<br><a onclick='loadDocReference("harmonizedsystemcodeunitofmeasure-table1")'>click here to see Commodity Unit Measures</a>
     *
     * @param string $quantityUnits
     *
     * @return self
     */
    public function setQuantityUnits(string $quantityUnits) : self
    {
        $this->initialized['quantityUnits'] = true;
        $this->quantityUnits = $quantityUnits;
        return $this;
    }
    /**
     * This is the customs value.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemCustomsValue
     */
    public function getCustomsValue() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemCustomsValue
    {
        return $this->customsValue;
    }
    /**
     * This is the customs value.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemCustomsValue $customsValue
     *
     * @return self
     */
    public function setCustomsValue(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemCustomsValue $customsValue) : self
    {
        $this->initialized['customsValue'] = true;
        $this->customsValue = $customsValue;
        return $this;
    }
    /**
     * This is commodity country of manufacture. This is required for International shipments. Maximum allowed length is 4.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     *
     * @return string
     */
    public function getCountryOfManufacture() : string
    {
        return $this->countryOfManufacture;
    }
    /**
     * This is commodity country of manufacture. This is required for International shipments. Maximum allowed length is 4.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     *
     * @param string $countryOfManufacture
     *
     * @return self
     */
    public function setCountryOfManufacture(string $countryOfManufacture) : self
    {
        $this->initialized['countryOfManufacture'] = true;
        $this->countryOfManufacture = $countryOfManufacture;
        return $this;
    }
    /**
     * This is an identifying mark or number used on the packaging of a shipment to help customers identify a particular shipment<br>Example: 87123
     *
     * @return string
     */
    public function getCIMarksAndNumbers() : string
    {
        return $this->cIMarksAndNumbers;
    }
    /**
     * This is an identifying mark or number used on the packaging of a shipment to help customers identify a particular shipment<br>Example: 87123
     *
     * @param string $cIMarksAndNumbers
     *
     * @return self
     */
    public function setCIMarksAndNumbers(string $cIMarksAndNumbers) : self
    {
        $this->initialized['cIMarksAndNumbers'] = true;
        $this->cIMarksAndNumbers = $cIMarksAndNumbers;
        return $this;
    }
    /**
     * This is to specify the Harmonized Tariff System (HTS) code to meet U.S. and foreign governments' customs requirements. These are mainly used to estimate the duties and taxes.<br>Example: 0613<br>To research the classification for your commodity, use the FedEx Global Trade Manager online at <a href='http://www.fedex.com/gtm' target='_blank'>fedex.com/gtm</a>. You will find country-specific information to determine whether your commodity is considered to be a document or non-document for your destination.
     *
     * @return string
     */
    public function getHarmonizedCode() : string
    {
        return $this->harmonizedCode;
    }
    /**
     * This is to specify the Harmonized Tariff System (HTS) code to meet U.S. and foreign governments' customs requirements. These are mainly used to estimate the duties and taxes.<br>Example: 0613<br>To research the classification for your commodity, use the FedEx Global Trade Manager online at <a href='http://www.fedex.com/gtm' target='_blank'>fedex.com/gtm</a>. You will find country-specific information to determine whether your commodity is considered to be a document or non-document for your destination.
     *
     * @param string $harmonizedCode
     *
     * @return self
     */
    public function setHarmonizedCode(string $harmonizedCode) : self
    {
        $this->initialized['harmonizedCode'] = true;
        $this->harmonizedCode = $harmonizedCode;
        return $this;
    }
    /**
     * This is the commodity description. Maximum allowed 450 characters.<br><a onclick='loadDocReference("vaguecommoditydescriptions")'>click here to see Vague commodity descriptions</a>
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * This is the commodity description. Maximum allowed 450 characters.<br><a onclick='loadDocReference("vaguecommoditydescriptions")'>click here to see Vague commodity descriptions</a>
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * This is Commodity name.<br>Example: Non-Threaded Rivets
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * This is Commodity name.<br>Example: Non-Threaded Rivets
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemWeight
     */
    public function getWeight() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemWeight
    {
        return $this->weight;
    }
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemWeight $weight
     *
     * @return self
     */
    public function setWeight(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemWeight $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * This is the export license number for the shipment.<br>Example: 26456
     *
     * @return string
     */
    public function getExportLicenseNumber() : string
    {
        return $this->exportLicenseNumber;
    }
    /**
     * This is the export license number for the shipment.<br>Example: 26456
     *
     * @param string $exportLicenseNumber
     *
     * @return self
     */
    public function setExportLicenseNumber(string $exportLicenseNumber) : self
    {
        $this->initialized['exportLicenseNumber'] = true;
        $this->exportLicenseNumber = $exportLicenseNumber;
        return $this;
    }
    /**
     * Specify the export license expiration date for the shipment.<br>Format YYYY-MM-DD<br>Example : 2009-04-12
     *
     * @return \DateTime
     */
    public function getExportLicenseExpirationDate() : \DateTime
    {
        return $this->exportLicenseExpirationDate;
    }
    /**
     * Specify the export license expiration date for the shipment.<br>Format YYYY-MM-DD<br>Example : 2009-04-12
     *
     * @param \DateTime $exportLicenseExpirationDate
     *
     * @return self
     */
    public function setExportLicenseExpirationDate(\DateTime $exportLicenseExpirationDate) : self
    {
        $this->initialized['exportLicenseExpirationDate'] = true;
        $this->exportLicenseExpirationDate = $exportLicenseExpirationDate;
        return $this;
    }
    /**
     * This is a part number.<br>Example: 167
     *
     * @return string
     */
    public function getPartNumber() : string
    {
        return $this->partNumber;
    }
    /**
     * This is a part number.<br>Example: 167
     *
     * @param string $partNumber
     *
     * @return self
     */
    public function setPartNumber(string $partNumber) : self
    {
        $this->initialized['partNumber'] = true;
        $this->partNumber = $partNumber;
        return $this;
    }
    /**
     * This is the purpose of this shipment. This is used for calculation of duties and taxes.
     *
     * @return string
     */
    public function getPurpose() : string
    {
        return $this->purpose;
    }
    /**
     * This is the purpose of this shipment. This is used for calculation of duties and taxes.
     *
     * @param string $purpose
     *
     * @return self
     */
    public function setPurpose(string $purpose) : self
    {
        $this->initialized['purpose'] = true;
        $this->purpose = $purpose;
        return $this;
    }
    /**
     * Indicates the USMCA detail
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemUsmcaDetail
     */
    public function getUsmcaDetail() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemUsmcaDetail
    {
        return $this->usmcaDetail;
    }
    /**
     * Indicates the USMCA detail
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemUsmcaDetail $usmcaDetail
     *
     * @return self
     */
    public function setUsmcaDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItemUsmcaDetail $usmcaDetail) : self
    {
        $this->initialized['usmcaDetail'] = true;
        $this->usmcaDetail = $usmcaDetail;
        return $this;
    }
}
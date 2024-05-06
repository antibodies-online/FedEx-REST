<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem extends \ArrayObject
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
     * Indicate the description of the dutiable packages.<br> Maximum Length is 450. <br> Example: DOCUMENTS <br><a onclick='loadDocReference("vaguecommoditydescriptions")'>Click here to see Vague commodity descriptions</a>
     *
     * @var string
     */
    protected $description;
    /**
     * Specify the total number of units (using quantityUnits as the unit of measure) of this commodity present in the shipment. This element is used to estimate duties and taxes. <br>Example: 1
     *
     * @var int
     */
    protected $quantity;
    /**
     * Indicate the amount details. This is optional, but if indicated, amount and currency must be provided.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemUnitPrice
     */
    protected $unitPrice;
    /**
     * These are the weight details.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemWeight
     */
    protected $weight;
    /**
     * Indicate the amount details. This is optional, but if indicated, amount and currency must be provided.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemCustomsValue
     */
    protected $customsValue;
    /**
     * Specifies the number of pieces for this commodity.<br>Example: 10
     *
     * @var int
     */
    protected $numberOfPieces;
    /**
     * This is a manufacturing country. Maximum field Length is 4.<br>Example: IN
     *
     * @var string
     */
    protected $countryOfManufacture;
    /**
     * Indicate unit quantity used to estimate duties and taxes.<br>Example: PCS
     *
     * @var string
     */
    protected $quantityUnits;
    /**
     * Indicate the Commodity name.<br>Example: DOCUMENTS
     *
     * @var string
     */
    protected $name;
    /**
     * This is to specify the Harmonized Tariff System (HTS) code to meet U.S. and foreign governments' customs requirements. These are mainly used to estimate the duties and taxes.<br>Example: A six digit code for Almonds fresh or dried is 080211. The HTS code for pistachios in shell is 080251. The HTS code for fish is HS203.<br>To research the classification for your commodity, use the FedEx Global Trade Manager online at <a href='http://www.fedex.com/gtm' target='_blank'>fedex.com/gtm</a>. You can find the commodities and its respective codes by logging into FedEx and selecting harmonized code option. You will find country-specific information to determine whether your commodity is considered to be a document or non-document for your destination. <br>For additional information about harmonized code, refer to <a href='https://www.usitc.gov/documents/hts_external_guide.pdf' target='_blank'>harmonized code</a>.
     *
     * @var string
     */
    protected $harmonizedCode;
    /**
     * Specify the part number if any. Example: P1
     *
     * @var string
     */
    protected $partNumber;
    /**
     * Indicate the description of the dutiable packages.<br> Maximum Length is 450. <br> Example: DOCUMENTS <br><a onclick='loadDocReference("vaguecommoditydescriptions")'>Click here to see Vague commodity descriptions</a>
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Indicate the description of the dutiable packages.<br> Maximum Length is 450. <br> Example: DOCUMENTS <br><a onclick='loadDocReference("vaguecommoditydescriptions")'>Click here to see Vague commodity descriptions</a>
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
     * Specify the total number of units (using quantityUnits as the unit of measure) of this commodity present in the shipment. This element is used to estimate duties and taxes. <br>Example: 1
     *
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }
    /**
     * Specify the total number of units (using quantityUnits as the unit of measure) of this commodity present in the shipment. This element is used to estimate duties and taxes. <br>Example: 1
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
     * Indicate the amount details. This is optional, but if indicated, amount and currency must be provided.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemUnitPrice
     */
    public function getUnitPrice() : AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemUnitPrice
    {
        return $this->unitPrice;
    }
    /**
     * Indicate the amount details. This is optional, but if indicated, amount and currency must be provided.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemUnitPrice $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemUnitPrice $unitPrice) : self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * These are the weight details.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemWeight
     */
    public function getWeight() : AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemWeight
    {
        return $this->weight;
    }
    /**
     * These are the weight details.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemWeight $weight
     *
     * @return self
     */
    public function setWeight(AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemWeight $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Indicate the amount details. This is optional, but if indicated, amount and currency must be provided.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemCustomsValue
     */
    public function getCustomsValue() : AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemCustomsValue
    {
        return $this->customsValue;
    }
    /**
     * Indicate the amount details. This is optional, but if indicated, amount and currency must be provided.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemCustomsValue $customsValue
     *
     * @return self
     */
    public function setCustomsValue(AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemCustomsValue $customsValue) : self
    {
        $this->initialized['customsValue'] = true;
        $this->customsValue = $customsValue;
        return $this;
    }
    /**
     * Specifies the number of pieces for this commodity.<br>Example: 10
     *
     * @return int
     */
    public function getNumberOfPieces() : int
    {
        return $this->numberOfPieces;
    }
    /**
     * Specifies the number of pieces for this commodity.<br>Example: 10
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
     * This is a manufacturing country. Maximum field Length is 4.<br>Example: IN
     *
     * @return string
     */
    public function getCountryOfManufacture() : string
    {
        return $this->countryOfManufacture;
    }
    /**
     * This is a manufacturing country. Maximum field Length is 4.<br>Example: IN
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
     * Indicate unit quantity used to estimate duties and taxes.<br>Example: PCS
     *
     * @return string
     */
    public function getQuantityUnits() : string
    {
        return $this->quantityUnits;
    }
    /**
     * Indicate unit quantity used to estimate duties and taxes.<br>Example: PCS
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
     * Indicate the Commodity name.<br>Example: DOCUMENTS
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Indicate the Commodity name.<br>Example: DOCUMENTS
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
     * This is to specify the Harmonized Tariff System (HTS) code to meet U.S. and foreign governments' customs requirements. These are mainly used to estimate the duties and taxes.<br>Example: A six digit code for Almonds fresh or dried is 080211. The HTS code for pistachios in shell is 080251. The HTS code for fish is HS203.<br>To research the classification for your commodity, use the FedEx Global Trade Manager online at <a href='http://www.fedex.com/gtm' target='_blank'>fedex.com/gtm</a>. You can find the commodities and its respective codes by logging into FedEx and selecting harmonized code option. You will find country-specific information to determine whether your commodity is considered to be a document or non-document for your destination. <br>For additional information about harmonized code, refer to <a href='https://www.usitc.gov/documents/hts_external_guide.pdf' target='_blank'>harmonized code</a>.
     *
     * @return string
     */
    public function getHarmonizedCode() : string
    {
        return $this->harmonizedCode;
    }
    /**
     * This is to specify the Harmonized Tariff System (HTS) code to meet U.S. and foreign governments' customs requirements. These are mainly used to estimate the duties and taxes.<br>Example: A six digit code for Almonds fresh or dried is 080211. The HTS code for pistachios in shell is 080251. The HTS code for fish is HS203.<br>To research the classification for your commodity, use the FedEx Global Trade Manager online at <a href='http://www.fedex.com/gtm' target='_blank'>fedex.com/gtm</a>. You can find the commodities and its respective codes by logging into FedEx and selecting harmonized code option. You will find country-specific information to determine whether your commodity is considered to be a document or non-document for your destination. <br>For additional information about harmonized code, refer to <a href='https://www.usitc.gov/documents/hts_external_guide.pdf' target='_blank'>harmonized code</a>.
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
     * Specify the part number if any. Example: P1
     *
     * @return string
     */
    public function getPartNumber() : string
    {
        return $this->partNumber;
    }
    /**
     * Specify the part number if any. Example: P1
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
}
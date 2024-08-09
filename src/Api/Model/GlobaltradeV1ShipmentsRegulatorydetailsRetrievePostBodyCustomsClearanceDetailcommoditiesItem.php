<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItem extends \ArrayObject
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
     * Total number of units (using quantityUnits as the unit of measure) of this commodity present in the shipment.  <br>Example: '1'
     *
     * @var string
     */
    protected $quantity;
    /**
     * This is the units quantity per commodity. This is used to estimate duties and taxes in GTC.<br>Example: 125
     *
     * @var string
     */
    protected $quantityUOM;
    /**
     * Required<br>Customs value for this commodity
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemCustomsValue
     */
    protected $customsValue;
    /**
     * Required<br> Max Length is 4<br> Example: IN
     *
     * @var string
     */
    protected $countryOfManufacture;
    /**
     * This represents the name of commodity.
     *
     * @var string
     */
    protected $name;
    /**
     * This is to specify the Harmonized Tariff System (HTS) code to meet U.S. and foreign governments' customs requirements. These are mainly used to estimate the duties and taxes.<br>Example: 0613<br>To research the classification for your commodity, use the FedEx Global Trade Manager online at <a href='http://www.fedex.com/gtm' target='_blank'>fedex.com/gtm</a>. You will find country-specific information to determine whether your commodity is considered to be a document or non-document for your destination.
     *
     * @var string
     */
    protected $harmonizedCode;
    /**
     * This represents commodity description
     *
     * @var string
     */
    protected $description;
    /**
     * Represents Weight of the packages or shipment.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemWeight
     */
    protected $weight;
    /**
     * This represents the commodity id
     *
     * @var int
     */
    protected $commodityId;
    /**
     * This object contains additional quantitative information other than weight and quantity to calculate duties and taxes.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasures
     */
    protected $additionalMeasures;
    /**
     * Total number of units (using quantityUnits as the unit of measure) of this commodity present in the shipment.  <br>Example: '1'
     *
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }
    /**
     * Total number of units (using quantityUnits as the unit of measure) of this commodity present in the shipment.  <br>Example: '1'
     *
     * @param string $quantity
     *
     * @return self
     */
    public function setQuantity(string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * This is the units quantity per commodity. This is used to estimate duties and taxes in GTC.<br>Example: 125
     *
     * @return string
     */
    public function getQuantityUOM(): string
    {
        return $this->quantityUOM;
    }
    /**
     * This is the units quantity per commodity. This is used to estimate duties and taxes in GTC.<br>Example: 125
     *
     * @param string $quantityUOM
     *
     * @return self
     */
    public function setQuantityUOM(string $quantityUOM): self
    {
        $this->initialized['quantityUOM'] = true;
        $this->quantityUOM = $quantityUOM;
        return $this;
    }
    /**
     * Required<br>Customs value for this commodity
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemCustomsValue
     */
    public function getCustomsValue(): GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemCustomsValue
    {
        return $this->customsValue;
    }
    /**
     * Required<br>Customs value for this commodity
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemCustomsValue $customsValue
     *
     * @return self
     */
    public function setCustomsValue(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemCustomsValue $customsValue): self
    {
        $this->initialized['customsValue'] = true;
        $this->customsValue = $customsValue;
        return $this;
    }
    /**
     * Required<br> Max Length is 4<br> Example: IN
     *
     * @return string
     */
    public function getCountryOfManufacture(): string
    {
        return $this->countryOfManufacture;
    }
    /**
     * Required<br> Max Length is 4<br> Example: IN
     *
     * @param string $countryOfManufacture
     *
     * @return self
     */
    public function setCountryOfManufacture(string $countryOfManufacture): self
    {
        $this->initialized['countryOfManufacture'] = true;
        $this->countryOfManufacture = $countryOfManufacture;
        return $this;
    }
    /**
     * This represents the name of commodity.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * This represents the name of commodity.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * This is to specify the Harmonized Tariff System (HTS) code to meet U.S. and foreign governments' customs requirements. These are mainly used to estimate the duties and taxes.<br>Example: 0613<br>To research the classification for your commodity, use the FedEx Global Trade Manager online at <a href='http://www.fedex.com/gtm' target='_blank'>fedex.com/gtm</a>. You will find country-specific information to determine whether your commodity is considered to be a document or non-document for your destination.
     *
     * @return string
     */
    public function getHarmonizedCode(): string
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
    public function setHarmonizedCode(string $harmonizedCode): self
    {
        $this->initialized['harmonizedCode'] = true;
        $this->harmonizedCode = $harmonizedCode;
        return $this;
    }
    /**
     * This represents commodity description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * This represents commodity description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Represents Weight of the packages or shipment.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemWeight
     */
    public function getWeight(): GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemWeight
    {
        return $this->weight;
    }
    /**
     * Represents Weight of the packages or shipment.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemWeight $weight
     *
     * @return self
     */
    public function setWeight(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemWeight $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * This represents the commodity id
     *
     * @return int
     */
    public function getCommodityId(): int
    {
        return $this->commodityId;
    }
    /**
     * This represents the commodity id
     *
     * @param int $commodityId
     *
     * @return self
     */
    public function setCommodityId(int $commodityId): self
    {
        $this->initialized['commodityId'] = true;
        $this->commodityId = $commodityId;
        return $this;
    }
    /**
     * This object contains additional quantitative information other than weight and quantity to calculate duties and taxes.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasures
     */
    public function getAdditionalMeasures(): GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasures
    {
        return $this->additionalMeasures;
    }
    /**
     * This object contains additional quantitative information other than weight and quantity to calculate duties and taxes.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasures $additionalMeasures
     *
     * @return self
     */
    public function setAdditionalMeasures(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasures $additionalMeasures): self
    {
        $this->initialized['additionalMeasures'] = true;
        $this->additionalMeasures = $additionalMeasures;
        return $this;
    }
}
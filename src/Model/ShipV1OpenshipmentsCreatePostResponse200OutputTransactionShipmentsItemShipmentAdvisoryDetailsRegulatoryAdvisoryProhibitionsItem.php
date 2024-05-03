<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItem extends \ArrayObject
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
     * Indicates the derived harmonized code value<br>Example: 01
     *
     * @var string
     */
    protected $derivedHarmonizedCode;
    /**
     * Specifies the advisory details.
     *
     * @var ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemAdvisory
     */
    protected $advisory;
    /**
     * Indicates one based index identifying the associated commodity.<br>Example: 12
     *
     * @var int
     */
    protected $commodityIndex;
    /**
     * Indicates the prohibition source type.<br>Example: source
     *
     * @var string
     */
    protected $source;
    /**
     * Indicate the shipment rule type.<br>Example: ["categories"]
     *
     * @var list<string>
     */
    protected $categories;
    /**
     * Indicates the prohibition type.<br>Example: type
     *
     * @var string
     */
    protected $type;
    /**
     * Indicates the regulatory waiver.
     *
     * @var ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiver
     */
    protected $waiver;
    /**
     * Indicates the prohibitory status.<br>Example: status
     *
     * @var string
     */
    protected $status;
    /**
     * Indicates the derived harmonized code value<br>Example: 01
     *
     * @return string
     */
    public function getDerivedHarmonizedCode() : string
    {
        return $this->derivedHarmonizedCode;
    }
    /**
     * Indicates the derived harmonized code value<br>Example: 01
     *
     * @param string $derivedHarmonizedCode
     *
     * @return self
     */
    public function setDerivedHarmonizedCode(string $derivedHarmonizedCode) : self
    {
        $this->initialized['derivedHarmonizedCode'] = true;
        $this->derivedHarmonizedCode = $derivedHarmonizedCode;
        return $this;
    }
    /**
     * Specifies the advisory details.
     *
     * @return ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemAdvisory
     */
    public function getAdvisory() : ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemAdvisory
    {
        return $this->advisory;
    }
    /**
     * Specifies the advisory details.
     *
     * @param ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemAdvisory $advisory
     *
     * @return self
     */
    public function setAdvisory(ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemAdvisory $advisory) : self
    {
        $this->initialized['advisory'] = true;
        $this->advisory = $advisory;
        return $this;
    }
    /**
     * Indicates one based index identifying the associated commodity.<br>Example: 12
     *
     * @return int
     */
    public function getCommodityIndex() : int
    {
        return $this->commodityIndex;
    }
    /**
     * Indicates one based index identifying the associated commodity.<br>Example: 12
     *
     * @param int $commodityIndex
     *
     * @return self
     */
    public function setCommodityIndex(int $commodityIndex) : self
    {
        $this->initialized['commodityIndex'] = true;
        $this->commodityIndex = $commodityIndex;
        return $this;
    }
    /**
     * Indicates the prohibition source type.<br>Example: source
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * Indicates the prohibition source type.<br>Example: source
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
     * Indicate the shipment rule type.<br>Example: ["categories"]
     *
     * @return list<string>
     */
    public function getCategories() : array
    {
        return $this->categories;
    }
    /**
     * Indicate the shipment rule type.<br>Example: ["categories"]
     *
     * @param list<string> $categories
     *
     * @return self
     */
    public function setCategories(array $categories) : self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
        return $this;
    }
    /**
     * Indicates the prohibition type.<br>Example: type
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Indicates the prohibition type.<br>Example: type
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
     * Indicates the regulatory waiver.
     *
     * @return ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiver
     */
    public function getWaiver() : ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiver
    {
        return $this->waiver;
    }
    /**
     * Indicates the regulatory waiver.
     *
     * @param ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiver $waiver
     *
     * @return self
     */
    public function setWaiver(ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiver $waiver) : self
    {
        $this->initialized['waiver'] = true;
        $this->waiver = $waiver;
        return $this;
    }
    /**
     * Indicates the prohibitory status.<br>Example: status
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * Indicates the prohibitory status.<br>Example: status
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}
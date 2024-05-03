<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryCommodityClarificationsItem extends \ArrayObject
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
     * This is a index identifying the commodity in the request that resulted in this COMMODITY or DOCUMENT type prohibition.<br>Example: 25
     *
     * @var int
     */
    protected $commodityIndex;
    /**
     * These are suggested commodity details.
     *
     * @var list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryCommodityClarificationsItemSuggestionsItem>
     */
    protected $suggestions;
    /**
     * This is a index identifying the commodity in the request that resulted in this COMMODITY or DOCUMENT type prohibition.<br>Example: 25
     *
     * @return int
     */
    public function getCommodityIndex() : int
    {
        return $this->commodityIndex;
    }
    /**
     * This is a index identifying the commodity in the request that resulted in this COMMODITY or DOCUMENT type prohibition.<br>Example: 25
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
     * These are suggested commodity details.
     *
     * @return list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryCommodityClarificationsItemSuggestionsItem>
     */
    public function getSuggestions() : array
    {
        return $this->suggestions;
    }
    /**
     * These are suggested commodity details.
     *
     * @param list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryCommodityClarificationsItemSuggestionsItem> $suggestions
     *
     * @return self
     */
    public function setSuggestions(array $suggestions) : self
    {
        $this->initialized['suggestions'] = true;
        $this->suggestions = $suggestions;
        return $this;
    }
}
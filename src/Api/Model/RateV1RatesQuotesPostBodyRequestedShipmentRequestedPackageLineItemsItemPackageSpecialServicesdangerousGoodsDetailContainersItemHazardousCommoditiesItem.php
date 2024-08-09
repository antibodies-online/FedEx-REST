<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItem extends \ArrayObject
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
     * Specifies Hazardous Commodity Quantity Detail.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemQuantity
     */
    protected $quantity;
    /**
     * Specifies the inner receptacles within the container.
     *
     * @var list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemInnerReceptaclesItem>
     */
    protected $innerReceptacles;
    /**
     * Customer-provided specifications for handling individual commodities.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemOptions
     */
    protected $options;
    /**
     * Identifies and describes an individual hazardous commodity.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemDescription
     */
    protected $description;
    /**
     * Specifies Hazardous Commodity Quantity Detail.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemQuantity
     */
    public function getQuantity(): RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemQuantity
    {
        return $this->quantity;
    }
    /**
     * Specifies Hazardous Commodity Quantity Detail.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemQuantity $quantity
     *
     * @return self
     */
    public function setQuantity(RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemQuantity $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Specifies the inner receptacles within the container.
     *
     * @return list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemInnerReceptaclesItem>
     */
    public function getInnerReceptacles(): array
    {
        return $this->innerReceptacles;
    }
    /**
     * Specifies the inner receptacles within the container.
     *
     * @param list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemInnerReceptaclesItem> $innerReceptacles
     *
     * @return self
     */
    public function setInnerReceptacles(array $innerReceptacles): self
    {
        $this->initialized['innerReceptacles'] = true;
        $this->innerReceptacles = $innerReceptacles;
        return $this;
    }
    /**
     * Customer-provided specifications for handling individual commodities.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemOptions
     */
    public function getOptions(): RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemOptions
    {
        return $this->options;
    }
    /**
     * Customer-provided specifications for handling individual commodities.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemOptions $options
     *
     * @return self
     */
    public function setOptions(RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemOptions $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * Identifies and describes an individual hazardous commodity.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemDescription
     */
    public function getDescription(): RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemDescription
    {
        return $this->description;
    }
    /**
     * Identifies and describes an individual hazardous commodity.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemDescription $description
     *
     * @return self
     */
    public function setDescription(RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemDescription $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}
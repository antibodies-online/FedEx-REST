<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesalcoholDetail extends \ArrayObject
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
     * Specify the recipient type for the alcohol shipment.
     *
     * @var string
     */
    protected $alcoholRecipientType;
    /**
     * Specify the shipper entity type. <br>Example: Fulfillment house, Retailer or a Winery.
     *
     * @var string
     */
    protected $shipperAgreementType;
    /**
     * Specify the recipient type for the alcohol shipment.
     *
     * @return string
     */
    public function getAlcoholRecipientType() : string
    {
        return $this->alcoholRecipientType;
    }
    /**
     * Specify the recipient type for the alcohol shipment.
     *
     * @param string $alcoholRecipientType
     *
     * @return self
     */
    public function setAlcoholRecipientType(string $alcoholRecipientType) : self
    {
        $this->initialized['alcoholRecipientType'] = true;
        $this->alcoholRecipientType = $alcoholRecipientType;
        return $this;
    }
    /**
     * Specify the shipper entity type. <br>Example: Fulfillment house, Retailer or a Winery.
     *
     * @return string
     */
    public function getShipperAgreementType() : string
    {
        return $this->shipperAgreementType;
    }
    /**
     * Specify the shipper entity type. <br>Example: Fulfillment house, Retailer or a Winery.
     *
     * @param string $shipperAgreementType
     *
     * @return self
     */
    public function setShipperAgreementType(string $shipperAgreementType) : self
    {
        $this->initialized['shipperAgreementType'] = true;
        $this->shipperAgreementType = $shipperAgreementType;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail extends \ArrayObject
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
     * Specify the Alcohol Recipient Type of the shipment. <br> Example: <br> <ul><li>LICENSEE- FedEx approved alchol shipper having appropriate licenses. </li><li> CONSUMER- Individual consumer to whom the alchol is shipped.</li></ul>
     *
     * @var string
     */
    protected $alcoholRecipientType;
    /**
     * Specify the type of entity, the shipper for alcohol shipment is registered such as fulfillment house, retailer or a winery.
     *
     * @var string
     */
    protected $shipperAgreementType;
    /**
     * Specify the Alcohol Recipient Type of the shipment. <br> Example: <br> <ul><li>LICENSEE- FedEx approved alchol shipper having appropriate licenses. </li><li> CONSUMER- Individual consumer to whom the alchol is shipped.</li></ul>
     *
     * @return string
     */
    public function getAlcoholRecipientType(): string
    {
        return $this->alcoholRecipientType;
    }
    /**
     * Specify the Alcohol Recipient Type of the shipment. <br> Example: <br> <ul><li>LICENSEE- FedEx approved alchol shipper having appropriate licenses. </li><li> CONSUMER- Individual consumer to whom the alchol is shipped.</li></ul>
     *
     * @param string $alcoholRecipientType
     *
     * @return self
     */
    public function setAlcoholRecipientType(string $alcoholRecipientType): self
    {
        $this->initialized['alcoholRecipientType'] = true;
        $this->alcoholRecipientType = $alcoholRecipientType;
        return $this;
    }
    /**
     * Specify the type of entity, the shipper for alcohol shipment is registered such as fulfillment house, retailer or a winery.
     *
     * @return string
     */
    public function getShipperAgreementType(): string
    {
        return $this->shipperAgreementType;
    }
    /**
     * Specify the type of entity, the shipper for alcohol shipment is registered such as fulfillment house, retailer or a winery.
     *
     * @param string $shipperAgreementType
     *
     * @return self
     */
    public function setShipperAgreementType(string $shipperAgreementType): self
    {
        $this->initialized['shipperAgreementType'] = true;
        $this->shipperAgreementType = $shipperAgreementType;
        return $this;
    }
}
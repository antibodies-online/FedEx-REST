<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommercialInvoice extends \ArrayObject
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
     * Indicate the freight charge.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommercialInvoiceFreightCharge
     */
    protected $freightCharge;
    /**
     * It describes the purpose.
     *
     * @var string
     */
    protected $purpose;
    /**
     * Indicate the freight charge.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommercialInvoiceFreightCharge
     */
    public function getFreightCharge(): GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommercialInvoiceFreightCharge
    {
        return $this->freightCharge;
    }
    /**
     * Indicate the freight charge.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommercialInvoiceFreightCharge $freightCharge
     *
     * @return self
     */
    public function setFreightCharge(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommercialInvoiceFreightCharge $freightCharge): self
    {
        $this->initialized['freightCharge'] = true;
        $this->freightCharge = $freightCharge;
        return $this;
    }
    /**
     * It describes the purpose.
     *
     * @return string
     */
    public function getPurpose(): string
    {
        return $this->purpose;
    }
    /**
     * It describes the purpose.
     *
     * @param string $purpose
     *
     * @return self
     */
    public function setPurpose(string $purpose): self
    {
        $this->initialized['purpose'] = true;
        $this->purpose = $purpose;
        return $this;
    }
}
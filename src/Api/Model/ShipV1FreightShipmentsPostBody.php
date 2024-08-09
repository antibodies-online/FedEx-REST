<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBody extends \ArrayObject
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
     * The descriptive data for the FreightShipment being tendered to FedEx.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipment
     */
    protected $freightRequestedShipment;
    /**
     * <p>If the value is LABEL, the encoded label will be included in the response and if the value is  URL_ONLY, the response will include the URLs.</p><p><i>Note: With URL_ONLY option, the URL once created will be active for 24 hours.</i></p>
     *
     * @var string
     */
    protected $labelResponseOptions;
    /**
     * The account number associated with the shipment.
     *
     * @var ShipV1FreightShipmentsPostBodyAccountNumber
     */
    protected $accountNumber;
    /**
    * If the value is false, it uses single shot MPS shipments where in all the packages are processed in the same transaction and can generate number of labels for the handling units all at once. If the value is true, the MPS shipment processes packages and labels one at a time. Default value is false. 
    <br>Example: true or false
    *
    * @var bool
    */
    protected $oneLabelAtATime;
    /**
     * The descriptive data for the FreightShipment being tendered to FedEx.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipment
     */
    public function getFreightRequestedShipment(): ShipV1FreightShipmentsPostBodyFreightRequestedShipment
    {
        return $this->freightRequestedShipment;
    }
    /**
     * The descriptive data for the FreightShipment being tendered to FedEx.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipment $freightRequestedShipment
     *
     * @return self
     */
    public function setFreightRequestedShipment(ShipV1FreightShipmentsPostBodyFreightRequestedShipment $freightRequestedShipment): self
    {
        $this->initialized['freightRequestedShipment'] = true;
        $this->freightRequestedShipment = $freightRequestedShipment;
        return $this;
    }
    /**
     * <p>If the value is LABEL, the encoded label will be included in the response and if the value is  URL_ONLY, the response will include the URLs.</p><p><i>Note: With URL_ONLY option, the URL once created will be active for 24 hours.</i></p>
     *
     * @return string
     */
    public function getLabelResponseOptions(): string
    {
        return $this->labelResponseOptions;
    }
    /**
     * <p>If the value is LABEL, the encoded label will be included in the response and if the value is  URL_ONLY, the response will include the URLs.</p><p><i>Note: With URL_ONLY option, the URL once created will be active for 24 hours.</i></p>
     *
     * @param string $labelResponseOptions
     *
     * @return self
     */
    public function setLabelResponseOptions(string $labelResponseOptions): self
    {
        $this->initialized['labelResponseOptions'] = true;
        $this->labelResponseOptions = $labelResponseOptions;
        return $this;
    }
    /**
     * The account number associated with the shipment.
     *
     * @return ShipV1FreightShipmentsPostBodyAccountNumber
     */
    public function getAccountNumber(): ShipV1FreightShipmentsPostBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * The account number associated with the shipment.
     *
     * @param ShipV1FreightShipmentsPostBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1FreightShipmentsPostBodyAccountNumber $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
    * If the value is false, it uses single shot MPS shipments where in all the packages are processed in the same transaction and can generate number of labels for the handling units all at once. If the value is true, the MPS shipment processes packages and labels one at a time. Default value is false. 
    <br>Example: true or false
    *
    * @return bool
    */
    public function getOneLabelAtATime(): bool
    {
        return $this->oneLabelAtATime;
    }
    /**
    * If the value is false, it uses single shot MPS shipments where in all the packages are processed in the same transaction and can generate number of labels for the handling units all at once. If the value is true, the MPS shipment processes packages and labels one at a time. Default value is false. 
    <br>Example: true or false
    *
    * @param bool $oneLabelAtATime
    *
    * @return self
    */
    public function setOneLabelAtATime(bool $oneLabelAtATime): self
    {
        $this->initialized['oneLabelAtATime'] = true;
        $this->oneLabelAtATime = $oneLabelAtATime;
        return $this;
    }
}
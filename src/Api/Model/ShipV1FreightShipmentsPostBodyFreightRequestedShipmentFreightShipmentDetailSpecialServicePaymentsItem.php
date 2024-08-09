<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailSpecialServicePaymentsItem extends \ArrayObject
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
     * Indicates the requested Special Services.
     *
     * @var string
     */
    protected $specialService;
    /**
     * Indicates the payment type.
     *
     * @var string
     */
    protected $paymentType;
    /**
     * Indicates the requested Special Services.
     *
     * @return string
     */
    public function getSpecialService(): string
    {
        return $this->specialService;
    }
    /**
     * Indicates the requested Special Services.
     *
     * @param string $specialService
     *
     * @return self
     */
    public function setSpecialService(string $specialService): self
    {
        $this->initialized['specialService'] = true;
        $this->specialService = $specialService;
        return $this;
    }
    /**
     * Indicates the payment type.
     *
     * @return string
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }
    /**
     * Indicates the payment type.
     *
     * @param string $paymentType
     *
     * @return self
     */
    public function setPaymentType(string $paymentType): self
    {
        $this->initialized['paymentType'] = true;
        $this->paymentType = $paymentType;
        return $this;
    }
}
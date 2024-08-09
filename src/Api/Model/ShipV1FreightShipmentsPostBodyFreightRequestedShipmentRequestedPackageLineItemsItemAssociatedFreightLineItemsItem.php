<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemAssociatedFreightLineItemsItem extends \ArrayObject
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
     * A freight line item identifier referring to a freight shipment line item that describes goods contained within this handling unit.
     *
     * @var string
     */
    protected $id;
    /**
     * A freight line item identifier referring to a freight shipment line item that describes goods contained within this handling unit.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A freight line item identifier referring to a freight shipment line item that describes goods contained within this handling unit.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}
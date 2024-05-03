<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodesStringBarcodesItem extends \ArrayObject
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
     * This is the type of barcode data in this instance. <br>Valid values:<ul><li>ADDRESS - Represents the recipient address.</li></ul>.
     *
     * @var string
     */
    protected $type;
    /**
     * This is the value.<br>Example: 1010062512241535917900794953544894.
     *
     * @var string
     */
    protected $value;

    /**
     * This is the type of barcode data in this instance. <br>Valid values:<ul><li>ADDRESS - Represents the recipient address.</li></ul>.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * This is the type of barcode data in this instance. <br>Valid values:<ul><li>ADDRESS - Represents the recipient address.</li></ul>.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * This is the value.<br>Example: 1010062512241535917900794953544894.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * This is the value.<br>Example: 1010062512241535917900794953544894.
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}

<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentExpressFreightDetail extends \ArrayObject
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
     * This is an advance booking number.  <br>Minimum length: 5 digits <br> Maximum length: 12 digits  <br>Example: XXXX56789812.
     *
     * @var int
     */
    protected $bookingConfirmationNumber;
    /**
     * Indicates the content of a container were loaded and counted by the shipper.<br>Minimum length: 1 digits <br> Maximum length: 5 digits <br>Example: 100.
     *
     * @var int
     */
    protected $shippersLoadAndCount;
    /**
     * This indicates whether or not the Packing List is enclosed with the shipment. A packing list is a document that includes details about the contents of a package. <br> Example: true.
     *
     * @var bool
     */
    protected $packingListEnclosed;

    /**
     * This is an advance booking number.  <br>Minimum length: 5 digits <br> Maximum length: 12 digits  <br>Example: XXXX56789812.
     */
    public function getBookingConfirmationNumber(): int
    {
        return $this->bookingConfirmationNumber;
    }

    /**
     * This is an advance booking number.  <br>Minimum length: 5 digits <br> Maximum length: 12 digits  <br>Example: XXXX56789812.
     */
    public function setBookingConfirmationNumber(int $bookingConfirmationNumber): self
    {
        $this->initialized['bookingConfirmationNumber'] = true;
        $this->bookingConfirmationNumber = $bookingConfirmationNumber;

        return $this;
    }

    /**
     * Indicates the content of a container were loaded and counted by the shipper.<br>Minimum length: 1 digits <br> Maximum length: 5 digits <br>Example: 100.
     */
    public function getShippersLoadAndCount(): int
    {
        return $this->shippersLoadAndCount;
    }

    /**
     * Indicates the content of a container were loaded and counted by the shipper.<br>Minimum length: 1 digits <br> Maximum length: 5 digits <br>Example: 100.
     */
    public function setShippersLoadAndCount(int $shippersLoadAndCount): self
    {
        $this->initialized['shippersLoadAndCount'] = true;
        $this->shippersLoadAndCount = $shippersLoadAndCount;

        return $this;
    }

    /**
     * This indicates whether or not the Packing List is enclosed with the shipment. A packing list is a document that includes details about the contents of a package. <br> Example: true.
     */
    public function getPackingListEnclosed(): bool
    {
        return $this->packingListEnclosed;
    }

    /**
     * This indicates whether or not the Packing List is enclosed with the shipment. A packing list is a document that includes details about the contents of a package. <br> Example: true.
     */
    public function setPackingListEnclosed(bool $packingListEnclosed): self
    {
        $this->initialized['packingListEnclosed'] = true;
        $this->packingListEnclosed = $packingListEnclosed;

        return $this;
    }
}

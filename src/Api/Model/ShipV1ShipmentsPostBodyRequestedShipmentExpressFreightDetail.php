<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentExpressFreightDetail extends \ArrayObject
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
     * This is an advanced booking number that must be acquired through the appropriate channel in the shipment origin country. Without the booking number pickup and space allocation for the Express Freight shipment are not guaranteed. <br>Minimum length: 5 digits <br> Maximum length: 12 digits  <br>Example: XXXX56789812
     *
     * @var string
     */
    protected $bookingConfirmationNumber;
    /**
     * Indicates the content of a container were loaded and counted by the shipper.<br>Minimum length: 1 digits <br> Maximum length: 5 digits <br>Example:  If a skid has 32 small boxes on it that are shrinkwrapped, the shippersLoadAndCount should be “32”
     *
     * @var int
     */
    protected $shippersLoadAndCount;
    /**
     * This indicates whether or not the Packing List is enclosed with the shipment. A packing list is a document that includes details about the contents of a package. <br> Example: true
     *
     * @var bool
     */
    protected $packingListEnclosed;
    /**
     * This is an advanced booking number that must be acquired through the appropriate channel in the shipment origin country. Without the booking number pickup and space allocation for the Express Freight shipment are not guaranteed. <br>Minimum length: 5 digits <br> Maximum length: 12 digits  <br>Example: XXXX56789812
     *
     * @return string
     */
    public function getBookingConfirmationNumber() : string
    {
        return $this->bookingConfirmationNumber;
    }
    /**
     * This is an advanced booking number that must be acquired through the appropriate channel in the shipment origin country. Without the booking number pickup and space allocation for the Express Freight shipment are not guaranteed. <br>Minimum length: 5 digits <br> Maximum length: 12 digits  <br>Example: XXXX56789812
     *
     * @param string $bookingConfirmationNumber
     *
     * @return self
     */
    public function setBookingConfirmationNumber(string $bookingConfirmationNumber) : self
    {
        $this->initialized['bookingConfirmationNumber'] = true;
        $this->bookingConfirmationNumber = $bookingConfirmationNumber;
        return $this;
    }
    /**
     * Indicates the content of a container were loaded and counted by the shipper.<br>Minimum length: 1 digits <br> Maximum length: 5 digits <br>Example:  If a skid has 32 small boxes on it that are shrinkwrapped, the shippersLoadAndCount should be “32”
     *
     * @return int
     */
    public function getShippersLoadAndCount() : int
    {
        return $this->shippersLoadAndCount;
    }
    /**
     * Indicates the content of a container were loaded and counted by the shipper.<br>Minimum length: 1 digits <br> Maximum length: 5 digits <br>Example:  If a skid has 32 small boxes on it that are shrinkwrapped, the shippersLoadAndCount should be “32”
     *
     * @param int $shippersLoadAndCount
     *
     * @return self
     */
    public function setShippersLoadAndCount(int $shippersLoadAndCount) : self
    {
        $this->initialized['shippersLoadAndCount'] = true;
        $this->shippersLoadAndCount = $shippersLoadAndCount;
        return $this;
    }
    /**
     * This indicates whether or not the Packing List is enclosed with the shipment. A packing list is a document that includes details about the contents of a package. <br> Example: true
     *
     * @return bool
     */
    public function getPackingListEnclosed() : bool
    {
        return $this->packingListEnclosed;
    }
    /**
     * This indicates whether or not the Packing List is enclosed with the shipment. A packing list is a document that includes details about the contents of a package. <br> Example: true
     *
     * @param bool $packingListEnclosed
     *
     * @return self
     */
    public function setPackingListEnclosed(bool $packingListEnclosed) : self
    {
        $this->initialized['packingListEnclosed'] = true;
        $this->packingListEnclosed = $packingListEnclosed;
        return $this;
    }
}
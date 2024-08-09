<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentExpressFreightDetail extends \ArrayObject
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
     * An advance booking number is optional for FedEx 1Day Freight. When you call 1.800.332.0807 to book your freight shipment, you will receive a booking number. This booking number is included in the Ship request, and prints on the shipping label
     *
     * @var string
     */
    protected $bookingConfirmationNumber;
    /**
     * Describes the shippers loaded total package counts.
     *
     * @var int
     */
    protected $shippersLoadAndCount;
    /**
     * An advance booking number is optional for FedEx 1Day Freight. When you call 1.800.332.0807 to book your freight shipment, you will receive a booking number. This booking number is included in the Ship request, and prints on the shipping label
     *
     * @return string
     */
    public function getBookingConfirmationNumber(): string
    {
        return $this->bookingConfirmationNumber;
    }
    /**
     * An advance booking number is optional for FedEx 1Day Freight. When you call 1.800.332.0807 to book your freight shipment, you will receive a booking number. This booking number is included in the Ship request, and prints on the shipping label
     *
     * @param string $bookingConfirmationNumber
     *
     * @return self
     */
    public function setBookingConfirmationNumber(string $bookingConfirmationNumber): self
    {
        $this->initialized['bookingConfirmationNumber'] = true;
        $this->bookingConfirmationNumber = $bookingConfirmationNumber;
        return $this;
    }
    /**
     * Describes the shippers loaded total package counts.
     *
     * @return int
     */
    public function getShippersLoadAndCount(): int
    {
        return $this->shippersLoadAndCount;
    }
    /**
     * Describes the shippers loaded total package counts.
     *
     * @param int $shippersLoadAndCount
     *
     * @return self
     */
    public function setShippersLoadAndCount(int $shippersLoadAndCount): self
    {
        $this->initialized['shippersLoadAndCount'] = true;
        $this->shippersLoadAndCount = $shippersLoadAndCount;
        return $this;
    }
}
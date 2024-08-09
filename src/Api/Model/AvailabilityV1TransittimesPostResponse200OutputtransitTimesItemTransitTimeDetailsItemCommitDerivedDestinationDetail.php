<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDerivedDestinationDetail extends \ArrayObject
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
     * This is the FedEx recognized service area code.
     *
     * @var string
     */
    protected $serviceArea;
    /**
     * This represents the FedEx-system recognized country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $countryCode;
    /**
     * This is the unique FedEx location identifier.
     *
     * @var string
     */
    protected $locationId;
    /**
     * This is a FedEx unique identifier for the Airport.
     *
     * @var string
     */
    protected $airportId;
    /**
     * This represents the FedEx-system recognized postal code.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * This represents the FedEx-system recognized state or province code.
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * The op-co specific numeric identifier for a FedEx location.
     *
     * @var int
     */
    protected $locationNumber;
    /**
     * This is the FedEx recognized service area code.
     *
     * @return string
     */
    public function getServiceArea(): string
    {
        return $this->serviceArea;
    }
    /**
     * This is the FedEx recognized service area code.
     *
     * @param string $serviceArea
     *
     * @return self
     */
    public function setServiceArea(string $serviceArea): self
    {
        $this->initialized['serviceArea'] = true;
        $this->serviceArea = $serviceArea;
        return $this;
    }
    /**
     * This represents the FedEx-system recognized country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * This represents the FedEx-system recognized country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * This is the unique FedEx location identifier.
     *
     * @return string
     */
    public function getLocationId(): string
    {
        return $this->locationId;
    }
    /**
     * This is the unique FedEx location identifier.
     *
     * @param string $locationId
     *
     * @return self
     */
    public function setLocationId(string $locationId): self
    {
        $this->initialized['locationId'] = true;
        $this->locationId = $locationId;
        return $this;
    }
    /**
     * This is a FedEx unique identifier for the Airport.
     *
     * @return string
     */
    public function getAirportId(): string
    {
        return $this->airportId;
    }
    /**
     * This is a FedEx unique identifier for the Airport.
     *
     * @param string $airportId
     *
     * @return self
     */
    public function setAirportId(string $airportId): self
    {
        $this->initialized['airportId'] = true;
        $this->airportId = $airportId;
        return $this;
    }
    /**
     * This represents the FedEx-system recognized postal code.
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     * This represents the FedEx-system recognized postal code.
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * This represents the FedEx-system recognized state or province code.
     *
     * @return string
     */
    public function getStateOrProvinceCode(): string
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * This represents the FedEx-system recognized state or province code.
     *
     * @param string $stateOrProvinceCode
     *
     * @return self
     */
    public function setStateOrProvinceCode(string $stateOrProvinceCode): self
    {
        $this->initialized['stateOrProvinceCode'] = true;
        $this->stateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    /**
     * The op-co specific numeric identifier for a FedEx location.
     *
     * @return int
     */
    public function getLocationNumber(): int
    {
        return $this->locationNumber;
    }
    /**
     * The op-co specific numeric identifier for a FedEx location.
     *
     * @param int $locationNumber
     *
     * @return self
     */
    public function setLocationNumber(int $locationNumber): self
    {
        $this->initialized['locationNumber'] = true;
        $this->locationNumber = $locationNumber;
        return $this;
    }
}
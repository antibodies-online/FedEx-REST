<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class CountryV1PostalValidatePostResponse200OutputLocationDescriptionsItem extends \ArrayObject
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
     * Location id of the postal code provided. <br> Example: MAAPD
     *
     * @var string
     */
    protected $locationId;
    /**
     * Location number of the postal code provided. <br> Example: 6955
     *
     * @var string
     */
    protected $locationNumber;
    /**
     * Service area of the postal code provided. <br> Example: AA
     *
     * @var string
     */
    protected $serviceArea;
    /**
     * Airport Id of the postal code provided. <br> Example: BLR
     *
     * @var string
     */
    protected $airportId;
    /**
     * Location id of the postal code provided. <br> Example: MAAPD
     *
     * @return string
     */
    public function getLocationId(): string
    {
        return $this->locationId;
    }
    /**
     * Location id of the postal code provided. <br> Example: MAAPD
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
     * Location number of the postal code provided. <br> Example: 6955
     *
     * @return string
     */
    public function getLocationNumber(): string
    {
        return $this->locationNumber;
    }
    /**
     * Location number of the postal code provided. <br> Example: 6955
     *
     * @param string $locationNumber
     *
     * @return self
     */
    public function setLocationNumber(string $locationNumber): self
    {
        $this->initialized['locationNumber'] = true;
        $this->locationNumber = $locationNumber;
        return $this;
    }
    /**
     * Service area of the postal code provided. <br> Example: AA
     *
     * @return string
     */
    public function getServiceArea(): string
    {
        return $this->serviceArea;
    }
    /**
     * Service area of the postal code provided. <br> Example: AA
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
     * Airport Id of the postal code provided. <br> Example: BLR
     *
     * @return string
     */
    public function getAirportId(): string
    {
        return $this->airportId;
    }
    /**
     * Airport Id of the postal code provided. <br> Example: BLR
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
}
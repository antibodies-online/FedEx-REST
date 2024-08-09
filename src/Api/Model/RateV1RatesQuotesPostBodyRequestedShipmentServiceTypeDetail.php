<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentServiceTypeDetail extends \ArrayObject
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
     * Identifies which carrier is being described.
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * Description
     *
     * @var string
     */
    protected $description;
    /**
     * Service Name
     *
     * @var string
     */
    protected $serviceName;
    /**
     * Service Category
     *
     * @var string
     */
    protected $serviceCategory;
    /**
     * Identifies which carrier is being described.
     *
     * @return string
     */
    public function getCarrierCode(): string
    {
        return $this->carrierCode;
    }
    /**
     * Identifies which carrier is being described.
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(string $carrierCode): self
    {
        $this->initialized['carrierCode'] = true;
        $this->carrierCode = $carrierCode;
        return $this;
    }
    /**
     * Description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Service Name
     *
     * @return string
     */
    public function getServiceName(): string
    {
        return $this->serviceName;
    }
    /**
     * Service Name
     *
     * @param string $serviceName
     *
     * @return self
     */
    public function setServiceName(string $serviceName): self
    {
        $this->initialized['serviceName'] = true;
        $this->serviceName = $serviceName;
        return $this;
    }
    /**
     * Service Category
     *
     * @return string
     */
    public function getServiceCategory(): string
    {
        return $this->serviceCategory;
    }
    /**
     * Service Category
     *
     * @param string $serviceCategory
     *
     * @return self
     */
    public function setServiceCategory(string $serviceCategory): self
    {
        $this->initialized['serviceCategory'] = true;
        $this->serviceCategory = $serviceCategory;
        return $this;
    }
}
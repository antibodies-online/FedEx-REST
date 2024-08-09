<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyRateRequestControlParameters extends \ArrayObject
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
     * Indicate if the transit time and commit data are to be returned in the reply. Default value is false.
     *
     * @var bool
     */
    protected $returnTransitTimes;
    /**
     * Specify the services to be requested if the rate data is not available.
     *
     * @var bool
     */
    protected $servicesNeededOnRateFailure;
    /**
     * Specify service options whose combinations are to be considered when replying with available services.
     *
     * @var string
     */
    protected $variableOptions;
    /**
     * This is a sort order you can specify to control the order of the response data: <br> Example: <ul><li>SERVICENAMETRADITIONAL - data in order of highest to lowest service (Default)</li><li>COMMITASCENDING - data in order of ascending delivery committment</li><li>COMMITDESCENDING - data in order of descending delivery committment.</li></ul>
     *
     * @var string
     */
    protected $rateSortOrder;
    /**
     * Indicate if the transit time and commit data are to be returned in the reply. Default value is false.
     *
     * @return bool
     */
    public function getReturnTransitTimes(): bool
    {
        return $this->returnTransitTimes;
    }
    /**
     * Indicate if the transit time and commit data are to be returned in the reply. Default value is false.
     *
     * @param bool $returnTransitTimes
     *
     * @return self
     */
    public function setReturnTransitTimes(bool $returnTransitTimes): self
    {
        $this->initialized['returnTransitTimes'] = true;
        $this->returnTransitTimes = $returnTransitTimes;
        return $this;
    }
    /**
     * Specify the services to be requested if the rate data is not available.
     *
     * @return bool
     */
    public function getServicesNeededOnRateFailure(): bool
    {
        return $this->servicesNeededOnRateFailure;
    }
    /**
     * Specify the services to be requested if the rate data is not available.
     *
     * @param bool $servicesNeededOnRateFailure
     *
     * @return self
     */
    public function setServicesNeededOnRateFailure(bool $servicesNeededOnRateFailure): self
    {
        $this->initialized['servicesNeededOnRateFailure'] = true;
        $this->servicesNeededOnRateFailure = $servicesNeededOnRateFailure;
        return $this;
    }
    /**
     * Specify service options whose combinations are to be considered when replying with available services.
     *
     * @return string
     */
    public function getVariableOptions(): string
    {
        return $this->variableOptions;
    }
    /**
     * Specify service options whose combinations are to be considered when replying with available services.
     *
     * @param string $variableOptions
     *
     * @return self
     */
    public function setVariableOptions(string $variableOptions): self
    {
        $this->initialized['variableOptions'] = true;
        $this->variableOptions = $variableOptions;
        return $this;
    }
    /**
     * This is a sort order you can specify to control the order of the response data: <br> Example: <ul><li>SERVICENAMETRADITIONAL - data in order of highest to lowest service (Default)</li><li>COMMITASCENDING - data in order of ascending delivery committment</li><li>COMMITDESCENDING - data in order of descending delivery committment.</li></ul>
     *
     * @return string
     */
    public function getRateSortOrder(): string
    {
        return $this->rateSortOrder;
    }
    /**
     * This is a sort order you can specify to control the order of the response data: <br> Example: <ul><li>SERVICENAMETRADITIONAL - data in order of highest to lowest service (Default)</li><li>COMMITASCENDING - data in order of ascending delivery committment</li><li>COMMITDESCENDING - data in order of descending delivery committment.</li></ul>
     *
     * @param string $rateSortOrder
     *
     * @return self
     */
    public function setRateSortOrder(string $rateSortOrder): self
    {
        $this->initialized['rateSortOrder'] = true;
        $this->rateSortOrder = $rateSortOrder;
        return $this;
    }
}
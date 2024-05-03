<?php

namespace AntibodiesOnline\FedEx\Model;

class LocationV1LocationsPostResponse200OutputlocationDetailListItemlocationCapabilities extends \ArrayObject
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
     * Indicates the service types supported by the location.<br>Example: PRIORITY_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Unique code to identify the transporter.
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * The method by which a package is transferred to the possession of a FedEx location.
     *
     * @var string
     */
    protected $transferOfPossessionType;
    /**
     * The service category applicable for the capability.
     *
     * @var string
     */
    protected $serviceCategory;
    /**
     * The days of the week for which this capability applies.<br>Valid values:<ul><li>MON</li><li>TUE</li><li>WED</li><li>THU</li><li>FRI</li><li>SAT</li><li>SUN</li></ul>
     *
     * @var list<string>
     */
    protected $daysOfWeek;
    /**
     * Indicates the service types supported by the location.<br>Example: PRIORITY_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @return string
     */
    public function getServiceType() : string
    {
        return $this->serviceType;
    }
    /**
     * Indicates the service types supported by the location.<br>Example: PRIORITY_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType) : self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * Unique code to identify the transporter.
     *
     * @return string
     */
    public function getCarrierCode() : string
    {
        return $this->carrierCode;
    }
    /**
     * Unique code to identify the transporter.
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(string $carrierCode) : self
    {
        $this->initialized['carrierCode'] = true;
        $this->carrierCode = $carrierCode;
        return $this;
    }
    /**
     * The method by which a package is transferred to the possession of a FedEx location.
     *
     * @return string
     */
    public function getTransferOfPossessionType() : string
    {
        return $this->transferOfPossessionType;
    }
    /**
     * The method by which a package is transferred to the possession of a FedEx location.
     *
     * @param string $transferOfPossessionType
     *
     * @return self
     */
    public function setTransferOfPossessionType(string $transferOfPossessionType) : self
    {
        $this->initialized['transferOfPossessionType'] = true;
        $this->transferOfPossessionType = $transferOfPossessionType;
        return $this;
    }
    /**
     * The service category applicable for the capability.
     *
     * @return string
     */
    public function getServiceCategory() : string
    {
        return $this->serviceCategory;
    }
    /**
     * The service category applicable for the capability.
     *
     * @param string $serviceCategory
     *
     * @return self
     */
    public function setServiceCategory(string $serviceCategory) : self
    {
        $this->initialized['serviceCategory'] = true;
        $this->serviceCategory = $serviceCategory;
        return $this;
    }
    /**
     * The days of the week for which this capability applies.<br>Valid values:<ul><li>MON</li><li>TUE</li><li>WED</li><li>THU</li><li>FRI</li><li>SAT</li><li>SUN</li></ul>
     *
     * @return list<string>
     */
    public function getDaysOfWeek() : array
    {
        return $this->daysOfWeek;
    }
    /**
     * The days of the week for which this capability applies.<br>Valid values:<ul><li>MON</li><li>TUE</li><li>WED</li><li>THU</li><li>FRI</li><li>SAT</li><li>SUN</li></ul>
     *
     * @param list<string> $daysOfWeek
     *
     * @return self
     */
    public function setDaysOfWeek(array $daysOfWeek) : self
    {
        $this->initialized['daysOfWeek'] = true;
        $this->daysOfWeek = $daysOfWeek;
        return $this;
    }
}
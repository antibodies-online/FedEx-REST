<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class LocationV1LocationsPostResponse200OutputlocationDetailListItemstoreHoursItem extends \ArrayObject
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
     * The day of the week for the location hours.
     *
     * @var string
     */
    protected $dayofweek;
    /**
     * Indicates the type of operational hours.
     *
     * @var string
     */
    protected $operationalHoursType;
    /**
     * List of normal operating hours for the location.
     *
     * @var list<LocationV1LocationsPostResponse200OutputlocationDetailListItemstoreHoursItemOperationalHoursItem>
     */
    protected $operationalHours;
    /**
     * Indicates the type of exceptional hours.
     *
     * @var string
     */
    protected $exceptionalHoursType;
    /**
     * List of operating hours for the location that are an exception from the normal hours of operation.
     *
     * @var list<LocationV1LocationsPostResponse200OutputlocationDetailListItemstoreHoursItemExceptionalHoursItem>
     */
    protected $exceptionalHours;
    /**
     * The day of the week for the location hours.
     *
     * @return string
     */
    public function getDayofweek() : string
    {
        return $this->dayofweek;
    }
    /**
     * The day of the week for the location hours.
     *
     * @param string $dayofweek
     *
     * @return self
     */
    public function setDayofweek(string $dayofweek) : self
    {
        $this->initialized['dayofweek'] = true;
        $this->dayofweek = $dayofweek;
        return $this;
    }
    /**
     * Indicates the type of operational hours.
     *
     * @return string
     */
    public function getOperationalHoursType() : string
    {
        return $this->operationalHoursType;
    }
    /**
     * Indicates the type of operational hours.
     *
     * @param string $operationalHoursType
     *
     * @return self
     */
    public function setOperationalHoursType(string $operationalHoursType) : self
    {
        $this->initialized['operationalHoursType'] = true;
        $this->operationalHoursType = $operationalHoursType;
        return $this;
    }
    /**
     * List of normal operating hours for the location.
     *
     * @return list<LocationV1LocationsPostResponse200OutputlocationDetailListItemstoreHoursItemOperationalHoursItem>
     */
    public function getOperationalHours() : array
    {
        return $this->operationalHours;
    }
    /**
     * List of normal operating hours for the location.
     *
     * @param list<LocationV1LocationsPostResponse200OutputlocationDetailListItemstoreHoursItemOperationalHoursItem> $operationalHours
     *
     * @return self
     */
    public function setOperationalHours(array $operationalHours) : self
    {
        $this->initialized['operationalHours'] = true;
        $this->operationalHours = $operationalHours;
        return $this;
    }
    /**
     * Indicates the type of exceptional hours.
     *
     * @return string
     */
    public function getExceptionalHoursType() : string
    {
        return $this->exceptionalHoursType;
    }
    /**
     * Indicates the type of exceptional hours.
     *
     * @param string $exceptionalHoursType
     *
     * @return self
     */
    public function setExceptionalHoursType(string $exceptionalHoursType) : self
    {
        $this->initialized['exceptionalHoursType'] = true;
        $this->exceptionalHoursType = $exceptionalHoursType;
        return $this;
    }
    /**
     * List of operating hours for the location that are an exception from the normal hours of operation.
     *
     * @return list<LocationV1LocationsPostResponse200OutputlocationDetailListItemstoreHoursItemExceptionalHoursItem>
     */
    public function getExceptionalHours() : array
    {
        return $this->exceptionalHours;
    }
    /**
     * List of operating hours for the location that are an exception from the normal hours of operation.
     *
     * @param list<LocationV1LocationsPostResponse200OutputlocationDetailListItemstoreHoursItemExceptionalHoursItem> $exceptionalHours
     *
     * @return self
     */
    public function setExceptionalHours(array $exceptionalHours) : self
    {
        $this->initialized['exceptionalHours'] = true;
        $this->exceptionalHours = $exceptionalHours;
        return $this;
    }
}
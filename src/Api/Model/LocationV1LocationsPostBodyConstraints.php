<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class LocationV1LocationsPostBodyConstraints extends \ArrayObject
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
     * Specify the information to be included in the location results.
     *
     * @var list<string>
     */
    protected $locationContentOptions;
    /**
     * Specify the preferred drop-off time for a package. This filters the results with locations supporting the specified drop-off time. <br> Example: 16:30:00
     *
     * @var string
     */
    protected $dropOffTimeNeeded;
    /**
     * Filter to exclude locations that are currently unavailable.<br>Valid values: True, False.
     *
     * @var string
     */
    protected $excludeUnavailableLocations;
    /**
     * Specify the information to be included in the location results.
     *
     * @return list<string>
     */
    public function getLocationContentOptions(): array
    {
        return $this->locationContentOptions;
    }
    /**
     * Specify the information to be included in the location results.
     *
     * @param list<string> $locationContentOptions
     *
     * @return self
     */
    public function setLocationContentOptions(array $locationContentOptions): self
    {
        $this->initialized['locationContentOptions'] = true;
        $this->locationContentOptions = $locationContentOptions;
        return $this;
    }
    /**
     * Specify the preferred drop-off time for a package. This filters the results with locations supporting the specified drop-off time. <br> Example: 16:30:00
     *
     * @return string
     */
    public function getDropOffTimeNeeded(): string
    {
        return $this->dropOffTimeNeeded;
    }
    /**
     * Specify the preferred drop-off time for a package. This filters the results with locations supporting the specified drop-off time. <br> Example: 16:30:00
     *
     * @param string $dropOffTimeNeeded
     *
     * @return self
     */
    public function setDropOffTimeNeeded(string $dropOffTimeNeeded): self
    {
        $this->initialized['dropOffTimeNeeded'] = true;
        $this->dropOffTimeNeeded = $dropOffTimeNeeded;
        return $this;
    }
    /**
     * Filter to exclude locations that are currently unavailable.<br>Valid values: True, False.
     *
     * @return string
     */
    public function getExcludeUnavailableLocations(): string
    {
        return $this->excludeUnavailableLocations;
    }
    /**
     * Filter to exclude locations that are currently unavailable.<br>Valid values: True, False.
     *
     * @param string $excludeUnavailableLocations
     *
     * @return self
     */
    public function setExcludeUnavailableLocations(string $excludeUnavailableLocations): self
    {
        $this->initialized['excludeUnavailableLocations'] = true;
        $this->excludeUnavailableLocations = $excludeUnavailableLocations;
        return $this;
    }
}
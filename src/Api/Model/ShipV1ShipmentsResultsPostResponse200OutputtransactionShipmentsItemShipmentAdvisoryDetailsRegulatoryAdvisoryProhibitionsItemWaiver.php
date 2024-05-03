<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiver extends \ArrayObject
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
     * Indicates the advisories list.
     *
     * @var list<ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiverAdvisoriesItem>
     */
    protected $advisories;
    /**
     * Indicates the regulatory prohibitions description.<br>Example: description
     *
     * @var string
     */
    protected $description;
    /**
     * Indicates the prohibitory ID.<br>Example: id
     *
     * @var string
     */
    protected $id;
    /**
     * Indicates the advisories list.
     *
     * @return list<ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiverAdvisoriesItem>
     */
    public function getAdvisories() : array
    {
        return $this->advisories;
    }
    /**
     * Indicates the advisories list.
     *
     * @param list<ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiverAdvisoriesItem> $advisories
     *
     * @return self
     */
    public function setAdvisories(array $advisories) : self
    {
        $this->initialized['advisories'] = true;
        $this->advisories = $advisories;
        return $this;
    }
    /**
     * Indicates the regulatory prohibitions description.<br>Example: description
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Indicates the regulatory prohibitions description.<br>Example: description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Indicates the prohibitory ID.<br>Example: id
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Indicates the prohibitory ID.<br>Example: id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}
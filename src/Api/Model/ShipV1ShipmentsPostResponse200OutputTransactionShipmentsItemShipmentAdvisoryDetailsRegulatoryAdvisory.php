<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory extends \ArrayObject
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
     * It is a regulatory probitions.
     *
     * @var list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItem>
     */
    protected $prohibitions;
    /**
     * It is a regulatory probitions.
     *
     * @return list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItem>
     */
    public function getProhibitions() : array
    {
        return $this->prohibitions;
    }
    /**
     * It is a regulatory probitions.
     *
     * @param list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItem> $prohibitions
     *
     * @return self
     */
    public function setProhibitions(array $prohibitions) : self
    {
        $this->initialized['prohibitions'] = true;
        $this->prohibitions = $prohibitions;
        return $this;
    }
}
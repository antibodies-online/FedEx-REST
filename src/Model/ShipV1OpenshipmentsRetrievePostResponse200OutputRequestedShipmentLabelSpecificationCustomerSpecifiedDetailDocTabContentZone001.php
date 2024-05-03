<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentZone001 extends \ArrayObject
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
     * Indicate the doc tab specifications for the individual doc tab zone on the label.
     *
     * @var list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentZone001DocTabZoneSpecificationsItem>
     */
    protected $docTabZoneSpecifications;
    /**
     * Indicate the doc tab specifications for the individual doc tab zone on the label.
     *
     * @return list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentZone001DocTabZoneSpecificationsItem>
     */
    public function getDocTabZoneSpecifications() : array
    {
        return $this->docTabZoneSpecifications;
    }
    /**
     * Indicate the doc tab specifications for the individual doc tab zone on the label.
     *
     * @param list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentZone001DocTabZoneSpecificationsItem> $docTabZoneSpecifications
     *
     * @return self
     */
    public function setDocTabZoneSpecifications(array $docTabZoneSpecifications) : self
    {
        $this->initialized['docTabZoneSpecifications'] = true;
        $this->docTabZoneSpecifications = $docTabZoneSpecifications;
        return $this;
    }
}
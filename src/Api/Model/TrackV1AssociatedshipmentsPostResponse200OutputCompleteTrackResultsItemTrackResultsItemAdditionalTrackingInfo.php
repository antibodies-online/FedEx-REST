<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfo extends \ArrayObject
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
     * Field which indicates if the current shipment has associated shipments.<br> Example: false
     *
     * @var bool
     */
    protected $hasAssociatedShipments;
    /**
     * Field which holds information about nickname of the shipment. <br> Example: Shipment nickname
     *
     * @var string
     */
    protected $nickname;
    /**
     * Other related identifiers for this package such as reference numbers, purchase order number etc. Provides identifiers other than tracking number that can be used in order to track the shipment.
     *
     * @var list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoPackageIdentifiersItem>
     */
    protected $packageIdentifiers;
    /**
     * Field which holds customer assigned notes for a package.<br> Example: shipment notes
     *
     * @var string
     */
    protected $shipmentNotes;
    /**
     * Field which indicates if the current shipment has associated shipments.<br> Example: false
     *
     * @return bool
     */
    public function getHasAssociatedShipments() : bool
    {
        return $this->hasAssociatedShipments;
    }
    /**
     * Field which indicates if the current shipment has associated shipments.<br> Example: false
     *
     * @param bool $hasAssociatedShipments
     *
     * @return self
     */
    public function setHasAssociatedShipments(bool $hasAssociatedShipments) : self
    {
        $this->initialized['hasAssociatedShipments'] = true;
        $this->hasAssociatedShipments = $hasAssociatedShipments;
        return $this;
    }
    /**
     * Field which holds information about nickname of the shipment. <br> Example: Shipment nickname
     *
     * @return string
     */
    public function getNickname() : string
    {
        return $this->nickname;
    }
    /**
     * Field which holds information about nickname of the shipment. <br> Example: Shipment nickname
     *
     * @param string $nickname
     *
     * @return self
     */
    public function setNickname(string $nickname) : self
    {
        $this->initialized['nickname'] = true;
        $this->nickname = $nickname;
        return $this;
    }
    /**
     * Other related identifiers for this package such as reference numbers, purchase order number etc. Provides identifiers other than tracking number that can be used in order to track the shipment.
     *
     * @return list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoPackageIdentifiersItem>
     */
    public function getPackageIdentifiers() : array
    {
        return $this->packageIdentifiers;
    }
    /**
     * Other related identifiers for this package such as reference numbers, purchase order number etc. Provides identifiers other than tracking number that can be used in order to track the shipment.
     *
     * @param list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoPackageIdentifiersItem> $packageIdentifiers
     *
     * @return self
     */
    public function setPackageIdentifiers(array $packageIdentifiers) : self
    {
        $this->initialized['packageIdentifiers'] = true;
        $this->packageIdentifiers = $packageIdentifiers;
        return $this;
    }
    /**
     * Field which holds customer assigned notes for a package.<br> Example: shipment notes
     *
     * @return string
     */
    public function getShipmentNotes() : string
    {
        return $this->shipmentNotes;
    }
    /**
     * Field which holds customer assigned notes for a package.<br> Example: shipment notes
     *
     * @param string $shipmentNotes
     *
     * @return self
     */
    public function setShipmentNotes(string $shipmentNotes) : self
    {
        $this->initialized['shipmentNotes'] = true;
        $this->shipmentNotes = $shipmentNotes;
        return $this;
    }
}
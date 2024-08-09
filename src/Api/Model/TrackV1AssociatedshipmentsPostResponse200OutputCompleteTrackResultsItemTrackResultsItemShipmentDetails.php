<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetails extends \ArrayObject
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
     * Field which holds information about contents of the shipment. Populated for secure users only.
     *
     * @var list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsContentsItem>
     */
    protected $contents;
    /**
     * Indicates the shipment is not yet in FedEx possession, but is still in shipper's possession.<br> Example: false
     *
     * @var bool
     */
    protected $beforePossessionStatus;
    /**
     * Array of package level weights, which represent the total weight of the shipment.
     *
     * @var list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsWeightItem>
     */
    protected $weight;
    /**
     * Field which holds information about content piece count of the shipment.<br> Example: 3333
     *
     * @var string
     */
    protected $contentPieceCount;
    /**
     * Field which holds information about split shipments.
     *
     * @var list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsSplitShipmentsItem>
     */
    protected $splitShipments;
    /**
     * Field which holds information about contents of the shipment. Populated for secure users only.
     *
     * @return list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsContentsItem>
     */
    public function getContents(): array
    {
        return $this->contents;
    }
    /**
     * Field which holds information about contents of the shipment. Populated for secure users only.
     *
     * @param list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsContentsItem> $contents
     *
     * @return self
     */
    public function setContents(array $contents): self
    {
        $this->initialized['contents'] = true;
        $this->contents = $contents;
        return $this;
    }
    /**
     * Indicates the shipment is not yet in FedEx possession, but is still in shipper's possession.<br> Example: false
     *
     * @return bool
     */
    public function getBeforePossessionStatus(): bool
    {
        return $this->beforePossessionStatus;
    }
    /**
     * Indicates the shipment is not yet in FedEx possession, but is still in shipper's possession.<br> Example: false
     *
     * @param bool $beforePossessionStatus
     *
     * @return self
     */
    public function setBeforePossessionStatus(bool $beforePossessionStatus): self
    {
        $this->initialized['beforePossessionStatus'] = true;
        $this->beforePossessionStatus = $beforePossessionStatus;
        return $this;
    }
    /**
     * Array of package level weights, which represent the total weight of the shipment.
     *
     * @return list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsWeightItem>
     */
    public function getWeight(): array
    {
        return $this->weight;
    }
    /**
     * Array of package level weights, which represent the total weight of the shipment.
     *
     * @param list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsWeightItem> $weight
     *
     * @return self
     */
    public function setWeight(array $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Field which holds information about content piece count of the shipment.<br> Example: 3333
     *
     * @return string
     */
    public function getContentPieceCount(): string
    {
        return $this->contentPieceCount;
    }
    /**
     * Field which holds information about content piece count of the shipment.<br> Example: 3333
     *
     * @param string $contentPieceCount
     *
     * @return self
     */
    public function setContentPieceCount(string $contentPieceCount): self
    {
        $this->initialized['contentPieceCount'] = true;
        $this->contentPieceCount = $contentPieceCount;
        return $this;
    }
    /**
     * Field which holds information about split shipments.
     *
     * @return list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsSplitShipmentsItem>
     */
    public function getSplitShipments(): array
    {
        return $this->splitShipments;
    }
    /**
     * Field which holds information about split shipments.
     *
     * @param list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsSplitShipmentsItem> $splitShipments
     *
     * @return self
     */
    public function setSplitShipments(array $splitShipments): self
    {
        $this->initialized['splitShipments'] = true;
        $this->splitShipments = $splitShipments;
        return $this;
    }
}
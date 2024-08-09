<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsSplitShipmentsItem extends \ArrayObject
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
     * Field which holds the number of pieces in the part.<br> Example: 10
     *
     * @var string
     */
    protected $pieceCount;
    /**
     * Field which holds human-readable description of the status. <br> Example: status
     *
     * @var string
     */
    protected $statusDescription;
    /**
     * Field which holds the date and time the status began.<br>Example: '2019-05-07T08:00:07'
     *
     * @var string
     */
    protected $timestamp;
    /**
     * Field which holds the status code. <br> Example: statusCode
     *
     * @var string
     */
    protected $statusCode;
    /**
     * Field which holds the number of pieces in the part.<br> Example: 10
     *
     * @return string
     */
    public function getPieceCount(): string
    {
        return $this->pieceCount;
    }
    /**
     * Field which holds the number of pieces in the part.<br> Example: 10
     *
     * @param string $pieceCount
     *
     * @return self
     */
    public function setPieceCount(string $pieceCount): self
    {
        $this->initialized['pieceCount'] = true;
        $this->pieceCount = $pieceCount;
        return $this;
    }
    /**
     * Field which holds human-readable description of the status. <br> Example: status
     *
     * @return string
     */
    public function getStatusDescription(): string
    {
        return $this->statusDescription;
    }
    /**
     * Field which holds human-readable description of the status. <br> Example: status
     *
     * @param string $statusDescription
     *
     * @return self
     */
    public function setStatusDescription(string $statusDescription): self
    {
        $this->initialized['statusDescription'] = true;
        $this->statusDescription = $statusDescription;
        return $this;
    }
    /**
     * Field which holds the date and time the status began.<br>Example: '2019-05-07T08:00:07'
     *
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->timestamp;
    }
    /**
     * Field which holds the date and time the status began.<br>Example: '2019-05-07T08:00:07'
     *
     * @param string $timestamp
     *
     * @return self
     */
    public function setTimestamp(string $timestamp): self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * Field which holds the status code. <br> Example: statusCode
     *
     * @return string
     */
    public function getStatusCode(): string
    {
        return $this->statusCode;
    }
    /**
     * Field which holds the status code. <br> Example: statusCode
     *
     * @param string $statusCode
     *
     * @return self
     */
    public function setStatusCode(string $statusCode): self
    {
        $this->initialized['statusCode'] = true;
        $this->statusCode = $statusCode;
        return $this;
    }
}
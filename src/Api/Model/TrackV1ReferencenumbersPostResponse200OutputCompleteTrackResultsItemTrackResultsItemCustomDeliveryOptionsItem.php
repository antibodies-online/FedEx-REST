<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemCustomDeliveryOptionsItem extends \ArrayObject
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
     * Field which specifies the details of the requested appointment.
     *
     * @var TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemCustomDeliveryOptionsItemRequestedAppointmentDetail
     */
    protected $requestedAppointmentDetail;
    /**
     * Field which specifies the description of the custom delivery option requested <br> Example: Redirect the package to the hold location.
     *
     * @var string
     */
    protected $description;
    /**
     * Field which specifies the type of the custom delivery option requested.<br> Example: REDIRECT_TO_HOLD_AT_LOCATION
     *
     * @var string
     */
    protected $type;
    /**
     * Field which specifies the status of the custom delivery option requested.<br> Example: HELD
     *
     * @var string
     */
    protected $status;
    /**
     * Field which specifies the details of the requested appointment.
     *
     * @return TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemCustomDeliveryOptionsItemRequestedAppointmentDetail
     */
    public function getRequestedAppointmentDetail() : TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemCustomDeliveryOptionsItemRequestedAppointmentDetail
    {
        return $this->requestedAppointmentDetail;
    }
    /**
     * Field which specifies the details of the requested appointment.
     *
     * @param TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemCustomDeliveryOptionsItemRequestedAppointmentDetail $requestedAppointmentDetail
     *
     * @return self
     */
    public function setRequestedAppointmentDetail(TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemCustomDeliveryOptionsItemRequestedAppointmentDetail $requestedAppointmentDetail) : self
    {
        $this->initialized['requestedAppointmentDetail'] = true;
        $this->requestedAppointmentDetail = $requestedAppointmentDetail;
        return $this;
    }
    /**
     * Field which specifies the description of the custom delivery option requested <br> Example: Redirect the package to the hold location.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Field which specifies the description of the custom delivery option requested <br> Example: Redirect the package to the hold location.
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
     * Field which specifies the type of the custom delivery option requested.<br> Example: REDIRECT_TO_HOLD_AT_LOCATION
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Field which specifies the type of the custom delivery option requested.<br> Example: REDIRECT_TO_HOLD_AT_LOCATION
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Field which specifies the status of the custom delivery option requested.<br> Example: HELD
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * Field which specifies the status of the custom delivery option requested.<br> Example: HELD
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}
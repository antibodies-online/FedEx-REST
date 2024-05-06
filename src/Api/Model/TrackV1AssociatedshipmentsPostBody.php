<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1AssociatedshipmentsPostBody extends \ArrayObject
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
     * Indicates if detailed scans are requested or not. <br>Valid values are True, or False.
     *
     * @var bool
     */
    protected $includeDetailedScans;
    /**
     * The detailed master tracking details for the shipment to be tracked.
     *
     * @var TrackV1AssociatedshipmentsPostBodyMasterTrackingNumberInfo
     */
    protected $masterTrackingNumberInfo;
    /**
     * The associated shipment type, such as MPS, Group MPS, or an outbound shipment which is linked to a return shipment.<br>Example: STANDARD_MPS<br>STANDARD_MPS: Single shipment with multiple packages, where tracking number got assigned to all pieces, one tracking number is treated as master tracking number while others are child tracking numbers.<br>Group MPS: Behavior is just like standard MPS but it’s created differently. The shipper must be enrolled for this by a particular reference type like ‘PO’ (purchase order).Then any package order create on the same day going to the same place that has the reference number will get grouped into GMPS relationships.<br>OUTBOUND_LINK_TO_RETURN: is an RTRN relationship.Same concept as an MPS.the OUTBOUND_LINK_TO_RETURN is the Master outbound package tracking number, that when tracked with this indicator you can get all the child return pieces.
     *
     * @var string
     */
    protected $associatedType;
    /**
     * The details about how to retrieve the subsequent pages when there is more than one page in the TrackReply.
     *
     * @var TrackV1AssociatedshipmentsPostBodyPagingDetails
     */
    protected $pagingDetails;
    /**
     * Indicates if detailed scans are requested or not. <br>Valid values are True, or False.
     *
     * @return bool
     */
    public function getIncludeDetailedScans() : bool
    {
        return $this->includeDetailedScans;
    }
    /**
     * Indicates if detailed scans are requested or not. <br>Valid values are True, or False.
     *
     * @param bool $includeDetailedScans
     *
     * @return self
     */
    public function setIncludeDetailedScans(bool $includeDetailedScans) : self
    {
        $this->initialized['includeDetailedScans'] = true;
        $this->includeDetailedScans = $includeDetailedScans;
        return $this;
    }
    /**
     * The detailed master tracking details for the shipment to be tracked.
     *
     * @return TrackV1AssociatedshipmentsPostBodyMasterTrackingNumberInfo
     */
    public function getMasterTrackingNumberInfo() : TrackV1AssociatedshipmentsPostBodyMasterTrackingNumberInfo
    {
        return $this->masterTrackingNumberInfo;
    }
    /**
     * The detailed master tracking details for the shipment to be tracked.
     *
     * @param TrackV1AssociatedshipmentsPostBodyMasterTrackingNumberInfo $masterTrackingNumberInfo
     *
     * @return self
     */
    public function setMasterTrackingNumberInfo(TrackV1AssociatedshipmentsPostBodyMasterTrackingNumberInfo $masterTrackingNumberInfo) : self
    {
        $this->initialized['masterTrackingNumberInfo'] = true;
        $this->masterTrackingNumberInfo = $masterTrackingNumberInfo;
        return $this;
    }
    /**
     * The associated shipment type, such as MPS, Group MPS, or an outbound shipment which is linked to a return shipment.<br>Example: STANDARD_MPS<br>STANDARD_MPS: Single shipment with multiple packages, where tracking number got assigned to all pieces, one tracking number is treated as master tracking number while others are child tracking numbers.<br>Group MPS: Behavior is just like standard MPS but it’s created differently. The shipper must be enrolled for this by a particular reference type like ‘PO’ (purchase order).Then any package order create on the same day going to the same place that has the reference number will get grouped into GMPS relationships.<br>OUTBOUND_LINK_TO_RETURN: is an RTRN relationship.Same concept as an MPS.the OUTBOUND_LINK_TO_RETURN is the Master outbound package tracking number, that when tracked with this indicator you can get all the child return pieces.
     *
     * @return string
     */
    public function getAssociatedType() : string
    {
        return $this->associatedType;
    }
    /**
     * The associated shipment type, such as MPS, Group MPS, or an outbound shipment which is linked to a return shipment.<br>Example: STANDARD_MPS<br>STANDARD_MPS: Single shipment with multiple packages, where tracking number got assigned to all pieces, one tracking number is treated as master tracking number while others are child tracking numbers.<br>Group MPS: Behavior is just like standard MPS but it’s created differently. The shipper must be enrolled for this by a particular reference type like ‘PO’ (purchase order).Then any package order create on the same day going to the same place that has the reference number will get grouped into GMPS relationships.<br>OUTBOUND_LINK_TO_RETURN: is an RTRN relationship.Same concept as an MPS.the OUTBOUND_LINK_TO_RETURN is the Master outbound package tracking number, that when tracked with this indicator you can get all the child return pieces.
     *
     * @param string $associatedType
     *
     * @return self
     */
    public function setAssociatedType(string $associatedType) : self
    {
        $this->initialized['associatedType'] = true;
        $this->associatedType = $associatedType;
        return $this;
    }
    /**
     * The details about how to retrieve the subsequent pages when there is more than one page in the TrackReply.
     *
     * @return TrackV1AssociatedshipmentsPostBodyPagingDetails
     */
    public function getPagingDetails() : TrackV1AssociatedshipmentsPostBodyPagingDetails
    {
        return $this->pagingDetails;
    }
    /**
     * The details about how to retrieve the subsequent pages when there is more than one page in the TrackReply.
     *
     * @param TrackV1AssociatedshipmentsPostBodyPagingDetails $pagingDetails
     *
     * @return self
     */
    public function setPagingDetails(TrackV1AssociatedshipmentsPostBodyPagingDetails $pagingDetails) : self
    {
        $this->initialized['pagingDetails'] = true;
        $this->pagingDetails = $pagingDetails;
        return $this;
    }
}
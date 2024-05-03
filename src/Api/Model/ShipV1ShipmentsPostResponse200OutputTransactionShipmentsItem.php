<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItem extends \ArrayObject
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
     * Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     *
     * @var string
     */
    protected $serviceType;
    /**
     * This is the shipment date. Default value is current date in case the date is not provided or a past date is provided.<br>Format [YYYY-MM-DD].<br>Example: 2019-10-14
     *
     * @var string
     */
    protected $shipDatestamp;
    /**
     * Indicates the Service Category.<br>Example: EXPRESS
     *
     * @var string
     */
    protected $serviceCategory;
    /**
     * These are shipping document details.
     *
     * @var list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItem>
     */
    protected $shipmentDocuments;
    /**
     * Specifies the information about the pieces, received in the response.
     *
     * @var list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItem>
     */
    protected $pieceResponses;
    /**
     * This is the service name associated with the shipment.<br>Example: FedEx Ground
     *
     * @var string
     */
    protected $serviceName;
    /**
     * These are alert details received in the response.
     *
     * @var list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemAlertsItem>
     */
    protected $alerts;
    /**
     * Returns the result of processing the desired package as a single-package shipment.
     *
     * @var ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetail
     */
    protected $completedShipmentDetail;
    /**
     * These are shipment advisory details.
     *
     * @var ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetails
     */
    protected $shipmentAdvisoryDetails;
    /**
     * This is a master tracking number for the shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provided).<br>Example: 794953535000
     *
     * @var string
     */
    protected $masterTrackingNumber;
    /**
     * Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     *
     * @return string
     */
    public function getServiceType() : string
    {
        return $this->serviceType;
    }
    /**
     * Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType) : self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * This is the shipment date. Default value is current date in case the date is not provided or a past date is provided.<br>Format [YYYY-MM-DD].<br>Example: 2019-10-14
     *
     * @return string
     */
    public function getShipDatestamp() : string
    {
        return $this->shipDatestamp;
    }
    /**
     * This is the shipment date. Default value is current date in case the date is not provided or a past date is provided.<br>Format [YYYY-MM-DD].<br>Example: 2019-10-14
     *
     * @param string $shipDatestamp
     *
     * @return self
     */
    public function setShipDatestamp(string $shipDatestamp) : self
    {
        $this->initialized['shipDatestamp'] = true;
        $this->shipDatestamp = $shipDatestamp;
        return $this;
    }
    /**
     * Indicates the Service Category.<br>Example: EXPRESS
     *
     * @return string
     */
    public function getServiceCategory() : string
    {
        return $this->serviceCategory;
    }
    /**
     * Indicates the Service Category.<br>Example: EXPRESS
     *
     * @param string $serviceCategory
     *
     * @return self
     */
    public function setServiceCategory(string $serviceCategory) : self
    {
        $this->initialized['serviceCategory'] = true;
        $this->serviceCategory = $serviceCategory;
        return $this;
    }
    /**
     * These are shipping document details.
     *
     * @return list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItem>
     */
    public function getShipmentDocuments() : array
    {
        return $this->shipmentDocuments;
    }
    /**
     * These are shipping document details.
     *
     * @param list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItem> $shipmentDocuments
     *
     * @return self
     */
    public function setShipmentDocuments(array $shipmentDocuments) : self
    {
        $this->initialized['shipmentDocuments'] = true;
        $this->shipmentDocuments = $shipmentDocuments;
        return $this;
    }
    /**
     * Specifies the information about the pieces, received in the response.
     *
     * @return list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItem>
     */
    public function getPieceResponses() : array
    {
        return $this->pieceResponses;
    }
    /**
     * Specifies the information about the pieces, received in the response.
     *
     * @param list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItem> $pieceResponses
     *
     * @return self
     */
    public function setPieceResponses(array $pieceResponses) : self
    {
        $this->initialized['pieceResponses'] = true;
        $this->pieceResponses = $pieceResponses;
        return $this;
    }
    /**
     * This is the service name associated with the shipment.<br>Example: FedEx Ground
     *
     * @return string
     */
    public function getServiceName() : string
    {
        return $this->serviceName;
    }
    /**
     * This is the service name associated with the shipment.<br>Example: FedEx Ground
     *
     * @param string $serviceName
     *
     * @return self
     */
    public function setServiceName(string $serviceName) : self
    {
        $this->initialized['serviceName'] = true;
        $this->serviceName = $serviceName;
        return $this;
    }
    /**
     * These are alert details received in the response.
     *
     * @return list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemAlertsItem>
     */
    public function getAlerts() : array
    {
        return $this->alerts;
    }
    /**
     * These are alert details received in the response.
     *
     * @param list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts) : self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
    /**
     * Returns the result of processing the desired package as a single-package shipment.
     *
     * @return ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetail
     */
    public function getCompletedShipmentDetail() : ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetail
    {
        return $this->completedShipmentDetail;
    }
    /**
     * Returns the result of processing the desired package as a single-package shipment.
     *
     * @param ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetail $completedShipmentDetail
     *
     * @return self
     */
    public function setCompletedShipmentDetail(ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetail $completedShipmentDetail) : self
    {
        $this->initialized['completedShipmentDetail'] = true;
        $this->completedShipmentDetail = $completedShipmentDetail;
        return $this;
    }
    /**
     * These are shipment advisory details.
     *
     * @return ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetails
     */
    public function getShipmentAdvisoryDetails() : ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetails
    {
        return $this->shipmentAdvisoryDetails;
    }
    /**
     * These are shipment advisory details.
     *
     * @param ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetails $shipmentAdvisoryDetails
     *
     * @return self
     */
    public function setShipmentAdvisoryDetails(ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetails $shipmentAdvisoryDetails) : self
    {
        $this->initialized['shipmentAdvisoryDetails'] = true;
        $this->shipmentAdvisoryDetails = $shipmentAdvisoryDetails;
        return $this;
    }
    /**
     * This is a master tracking number for the shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provided).<br>Example: 794953535000
     *
     * @return string
     */
    public function getMasterTrackingNumber() : string
    {
        return $this->masterTrackingNumber;
    }
    /**
     * This is a master tracking number for the shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provided).<br>Example: 794953535000
     *
     * @param string $masterTrackingNumber
     *
     * @return self
     */
    public function setMasterTrackingNumber(string $masterTrackingNumber) : self
    {
        $this->initialized['masterTrackingNumber'] = true;
        $this->masterTrackingNumber = $masterTrackingNumber;
        return $this;
    }
}
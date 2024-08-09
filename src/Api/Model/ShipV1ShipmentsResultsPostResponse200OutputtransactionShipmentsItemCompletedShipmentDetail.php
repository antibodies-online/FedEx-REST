<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetail extends \ArrayObject
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
     * Indicates the completed package details.
     *
     * @var list<ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItem>
     */
    protected $completedPackageDetails;
    /**
     * Indicates the shipment level operational information.
     *
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailOperationalDetail
     */
    protected $operationalDetail;
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * This is default holding location information when HOLD_AT_LOCATION special service is requested and the client does not specify the hold location address.
     *
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetail
     */
    protected $completedHoldAtLocationDetail;
    /**
     * These are completed ETD details when ELECTRONIC_TRADE_DOCUMENTS Special service type is requested
     *
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedEtdDetail
     */
    protected $completedEtdDetail;
    /**
     * Specifies packaging description.
     *
     * @var string
     */
    protected $packagingDescription;
    /**
     * Indicates the tracking details of the package.
     *
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailMasterTrackingId
     */
    protected $masterTrackingId;
    /**
     * Descriptions for a service.
     *
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailServiceDescription
     */
    protected $serviceDescription;
    /**
     * Indicates whether or not this is an intra-U.S. shipment.
     *
     * @var bool
     */
    protected $usDomestic;
    /**
     * Completed shipment level hazardous commodity information.
     *
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail
     */
    protected $hazardousShipmentDetail;
    /**
     * All shipment-level rating data for this shipment, which may include data for multiple rate types.
     *
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailShipmentRating
     */
    protected $shipmentRating;
    /**
     * Indicates the document requirements detail.
     *
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailDocumentRequirements
     */
    protected $documentRequirements;
    /**
     * For US export shipments requiring an EEI, enter the ITN number received from AES when you filed your shipment or the FTR (Foreign Trade Regulations) exemption number.The proper format for an ITN number is AES XYYYYMMDDNNNNNN where YYYYMMDD is date and NNNNNN are numbers generated by the AES.<br> Example: AESX20220714987654<br>Note: The ITN or FTR exemption number you submit in the ship request prints on the international shipping label.<br><br>For CA export shipments,it can be Proof of report number(15-32 alphanumeric) , Summary proof of report number(7-32 alphanumeric) or Exemption number(2 digit) based on the selected b13AFilingOption.<br>Example: 98765432107654321(POR number), 7654321(Summary POR number) and 02(Exemption number).<br>For FTR exemption number you need provide a predefined value as NO_EEI_30_37_A.
     *
     * @var string
     */
    protected $exportComplianceStatement;
    /**
     * This information describes how and when a online email return label shipment may be accessed for completion.
     *
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailAccessDetail
     */
    protected $accessDetail;
    /**
     * Indicates the completed package details.
     *
     * @return list<ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItem>
     */
    public function getCompletedPackageDetails(): array
    {
        return $this->completedPackageDetails;
    }
    /**
     * Indicates the completed package details.
     *
     * @param list<ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItem> $completedPackageDetails
     *
     * @return self
     */
    public function setCompletedPackageDetails(array $completedPackageDetails): self
    {
        $this->initialized['completedPackageDetails'] = true;
        $this->completedPackageDetails = $completedPackageDetails;
        return $this;
    }
    /**
     * Indicates the shipment level operational information.
     *
     * @return ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailOperationalDetail
     */
    public function getOperationalDetail(): ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailOperationalDetail
    {
        return $this->operationalDetail;
    }
    /**
     * Indicates the shipment level operational information.
     *
     * @param ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailOperationalDetail $operationalDetail
     *
     * @return self
     */
    public function setOperationalDetail(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailOperationalDetail $operationalDetail): self
    {
        $this->initialized['operationalDetail'] = true;
        $this->operationalDetail = $operationalDetail;
        return $this;
    }
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * @return string
     */
    public function getCarrierCode(): string
    {
        return $this->carrierCode;
    }
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(string $carrierCode): self
    {
        $this->initialized['carrierCode'] = true;
        $this->carrierCode = $carrierCode;
        return $this;
    }
    /**
     * This is default holding location information when HOLD_AT_LOCATION special service is requested and the client does not specify the hold location address.
     *
     * @return ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetail
     */
    public function getCompletedHoldAtLocationDetail(): ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetail
    {
        return $this->completedHoldAtLocationDetail;
    }
    /**
     * This is default holding location information when HOLD_AT_LOCATION special service is requested and the client does not specify the hold location address.
     *
     * @param ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetail $completedHoldAtLocationDetail
     *
     * @return self
     */
    public function setCompletedHoldAtLocationDetail(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetail $completedHoldAtLocationDetail): self
    {
        $this->initialized['completedHoldAtLocationDetail'] = true;
        $this->completedHoldAtLocationDetail = $completedHoldAtLocationDetail;
        return $this;
    }
    /**
     * These are completed ETD details when ELECTRONIC_TRADE_DOCUMENTS Special service type is requested
     *
     * @return ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedEtdDetail
     */
    public function getCompletedEtdDetail(): ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedEtdDetail
    {
        return $this->completedEtdDetail;
    }
    /**
     * These are completed ETD details when ELECTRONIC_TRADE_DOCUMENTS Special service type is requested
     *
     * @param ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedEtdDetail $completedEtdDetail
     *
     * @return self
     */
    public function setCompletedEtdDetail(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedEtdDetail $completedEtdDetail): self
    {
        $this->initialized['completedEtdDetail'] = true;
        $this->completedEtdDetail = $completedEtdDetail;
        return $this;
    }
    /**
     * Specifies packaging description.
     *
     * @return string
     */
    public function getPackagingDescription(): string
    {
        return $this->packagingDescription;
    }
    /**
     * Specifies packaging description.
     *
     * @param string $packagingDescription
     *
     * @return self
     */
    public function setPackagingDescription(string $packagingDescription): self
    {
        $this->initialized['packagingDescription'] = true;
        $this->packagingDescription = $packagingDescription;
        return $this;
    }
    /**
     * Indicates the tracking details of the package.
     *
     * @return ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailMasterTrackingId
     */
    public function getMasterTrackingId(): ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailMasterTrackingId
    {
        return $this->masterTrackingId;
    }
    /**
     * Indicates the tracking details of the package.
     *
     * @param ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailMasterTrackingId $masterTrackingId
     *
     * @return self
     */
    public function setMasterTrackingId(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailMasterTrackingId $masterTrackingId): self
    {
        $this->initialized['masterTrackingId'] = true;
        $this->masterTrackingId = $masterTrackingId;
        return $this;
    }
    /**
     * Descriptions for a service.
     *
     * @return ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailServiceDescription
     */
    public function getServiceDescription(): ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailServiceDescription
    {
        return $this->serviceDescription;
    }
    /**
     * Descriptions for a service.
     *
     * @param ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailServiceDescription $serviceDescription
     *
     * @return self
     */
    public function setServiceDescription(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailServiceDescription $serviceDescription): self
    {
        $this->initialized['serviceDescription'] = true;
        $this->serviceDescription = $serviceDescription;
        return $this;
    }
    /**
     * Indicates whether or not this is an intra-U.S. shipment.
     *
     * @return bool
     */
    public function getUsDomestic(): bool
    {
        return $this->usDomestic;
    }
    /**
     * Indicates whether or not this is an intra-U.S. shipment.
     *
     * @param bool $usDomestic
     *
     * @return self
     */
    public function setUsDomestic(bool $usDomestic): self
    {
        $this->initialized['usDomestic'] = true;
        $this->usDomestic = $usDomestic;
        return $this;
    }
    /**
     * Completed shipment level hazardous commodity information.
     *
     * @return ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail
     */
    public function getHazardousShipmentDetail(): ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail
    {
        return $this->hazardousShipmentDetail;
    }
    /**
     * Completed shipment level hazardous commodity information.
     *
     * @param ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail $hazardousShipmentDetail
     *
     * @return self
     */
    public function setHazardousShipmentDetail(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail $hazardousShipmentDetail): self
    {
        $this->initialized['hazardousShipmentDetail'] = true;
        $this->hazardousShipmentDetail = $hazardousShipmentDetail;
        return $this;
    }
    /**
     * All shipment-level rating data for this shipment, which may include data for multiple rate types.
     *
     * @return ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailShipmentRating
     */
    public function getShipmentRating(): ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailShipmentRating
    {
        return $this->shipmentRating;
    }
    /**
     * All shipment-level rating data for this shipment, which may include data for multiple rate types.
     *
     * @param ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailShipmentRating $shipmentRating
     *
     * @return self
     */
    public function setShipmentRating(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailShipmentRating $shipmentRating): self
    {
        $this->initialized['shipmentRating'] = true;
        $this->shipmentRating = $shipmentRating;
        return $this;
    }
    /**
     * Indicates the document requirements detail.
     *
     * @return ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailDocumentRequirements
     */
    public function getDocumentRequirements(): ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailDocumentRequirements
    {
        return $this->documentRequirements;
    }
    /**
     * Indicates the document requirements detail.
     *
     * @param ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailDocumentRequirements $documentRequirements
     *
     * @return self
     */
    public function setDocumentRequirements(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailDocumentRequirements $documentRequirements): self
    {
        $this->initialized['documentRequirements'] = true;
        $this->documentRequirements = $documentRequirements;
        return $this;
    }
    /**
     * For US export shipments requiring an EEI, enter the ITN number received from AES when you filed your shipment or the FTR (Foreign Trade Regulations) exemption number.The proper format for an ITN number is AES XYYYYMMDDNNNNNN where YYYYMMDD is date and NNNNNN are numbers generated by the AES.<br> Example: AESX20220714987654<br>Note: The ITN or FTR exemption number you submit in the ship request prints on the international shipping label.<br><br>For CA export shipments,it can be Proof of report number(15-32 alphanumeric) , Summary proof of report number(7-32 alphanumeric) or Exemption number(2 digit) based on the selected b13AFilingOption.<br>Example: 98765432107654321(POR number), 7654321(Summary POR number) and 02(Exemption number).<br>For FTR exemption number you need provide a predefined value as NO_EEI_30_37_A.
     *
     * @return string
     */
    public function getExportComplianceStatement(): string
    {
        return $this->exportComplianceStatement;
    }
    /**
     * For US export shipments requiring an EEI, enter the ITN number received from AES when you filed your shipment or the FTR (Foreign Trade Regulations) exemption number.The proper format for an ITN number is AES XYYYYMMDDNNNNNN where YYYYMMDD is date and NNNNNN are numbers generated by the AES.<br> Example: AESX20220714987654<br>Note: The ITN or FTR exemption number you submit in the ship request prints on the international shipping label.<br><br>For CA export shipments,it can be Proof of report number(15-32 alphanumeric) , Summary proof of report number(7-32 alphanumeric) or Exemption number(2 digit) based on the selected b13AFilingOption.<br>Example: 98765432107654321(POR number), 7654321(Summary POR number) and 02(Exemption number).<br>For FTR exemption number you need provide a predefined value as NO_EEI_30_37_A.
     *
     * @param string $exportComplianceStatement
     *
     * @return self
     */
    public function setExportComplianceStatement(string $exportComplianceStatement): self
    {
        $this->initialized['exportComplianceStatement'] = true;
        $this->exportComplianceStatement = $exportComplianceStatement;
        return $this;
    }
    /**
     * This information describes how and when a online email return label shipment may be accessed for completion.
     *
     * @return ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailAccessDetail
     */
    public function getAccessDetail(): ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailAccessDetail
    {
        return $this->accessDetail;
    }
    /**
     * This information describes how and when a online email return label shipment may be accessed for completion.
     *
     * @param ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailAccessDetail $accessDetail
     *
     * @return self
     */
    public function setAccessDetail(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailAccessDetail $accessDetail): self
    {
        $this->initialized['accessDetail'] = true;
        $this->accessDetail = $accessDetail;
        return $this;
    }
}
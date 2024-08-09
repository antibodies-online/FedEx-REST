<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsMultiuploadPostBodyDocumentInformation extends \ArrayObject
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
     * Indicate if this document is being uploaded for Pre-Shipment or Post-shipment process
     *
     * @var string
     */
    protected $workflowName;
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li></ul>
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * Provide origin country code for the shipment
     *
     * @var string
     */
    protected $orginCountryCode;
    /**
     * Provide destination country code for the shipment
     *
     * @var string
     */
    protected $destinationCountryCode;
    /**
     * Specify the Shipment date. This is only required for Post Shipment document upload. This value is present in Create Shipment response & this should match the shipment date timestamp
     *
     * @var string
     */
    protected $shipmentDate;
    /**
     * Specify the shipment tracking number. This is only required for Post Shipment document upload
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * Indicate the shipment metadata associated with the document to be uploaded
     *
     * @var list<DocumentsV1EtdsMultiuploadPostBodyDocumentInformationMetaDataItem>
     */
    protected $metaData;
    /**
     * Indicate if this document is being uploaded for Pre-Shipment or Post-shipment process
     *
     * @return string
     */
    public function getWorkflowName(): string
    {
        return $this->workflowName;
    }
    /**
     * Indicate if this document is being uploaded for Pre-Shipment or Post-shipment process
     *
     * @param string $workflowName
     *
     * @return self
     */
    public function setWorkflowName(string $workflowName): self
    {
        $this->initialized['workflowName'] = true;
        $this->workflowName = $workflowName;
        return $this;
    }
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li></ul>
     *
     * @return string
     */
    public function getCarrierCode(): string
    {
        return $this->carrierCode;
    }
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li></ul>
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
     * Provide origin country code for the shipment
     *
     * @return string
     */
    public function getOrginCountryCode(): string
    {
        return $this->orginCountryCode;
    }
    /**
     * Provide origin country code for the shipment
     *
     * @param string $orginCountryCode
     *
     * @return self
     */
    public function setOrginCountryCode(string $orginCountryCode): self
    {
        $this->initialized['orginCountryCode'] = true;
        $this->orginCountryCode = $orginCountryCode;
        return $this;
    }
    /**
     * Provide destination country code for the shipment
     *
     * @return string
     */
    public function getDestinationCountryCode(): string
    {
        return $this->destinationCountryCode;
    }
    /**
     * Provide destination country code for the shipment
     *
     * @param string $destinationCountryCode
     *
     * @return self
     */
    public function setDestinationCountryCode(string $destinationCountryCode): self
    {
        $this->initialized['destinationCountryCode'] = true;
        $this->destinationCountryCode = $destinationCountryCode;
        return $this;
    }
    /**
     * Specify the Shipment date. This is only required for Post Shipment document upload. This value is present in Create Shipment response & this should match the shipment date timestamp
     *
     * @return string
     */
    public function getShipmentDate(): string
    {
        return $this->shipmentDate;
    }
    /**
     * Specify the Shipment date. This is only required for Post Shipment document upload. This value is present in Create Shipment response & this should match the shipment date timestamp
     *
     * @param string $shipmentDate
     *
     * @return self
     */
    public function setShipmentDate(string $shipmentDate): self
    {
        $this->initialized['shipmentDate'] = true;
        $this->shipmentDate = $shipmentDate;
        return $this;
    }
    /**
     * Specify the shipment tracking number. This is only required for Post Shipment document upload
     *
     * @return string
     */
    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }
    /**
     * Specify the shipment tracking number. This is only required for Post Shipment document upload
     *
     * @param string $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(string $trackingNumber): self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Indicate the shipment metadata associated with the document to be uploaded
     *
     * @return list<DocumentsV1EtdsMultiuploadPostBodyDocumentInformationMetaDataItem>
     */
    public function getMetaData(): array
    {
        return $this->metaData;
    }
    /**
     * Indicate the shipment metadata associated with the document to be uploaded
     *
     * @param list<DocumentsV1EtdsMultiuploadPostBodyDocumentInformationMetaDataItem> $metaData
     *
     * @return self
     */
    public function setMetaData(array $metaData): self
    {
        $this->initialized['metaData'] = true;
        $this->metaData = $metaData;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsEncodedmultiuploadPostBody extends \ArrayObject
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
     * Indicate if the documents are being uploaded before or after shipment creation process
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
     * Origin country code for the shipment. <br><br> Example: US<br><a href="/developer-portal/en-us/reference-guide.html#countrycodes" target="_blank">Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $orginCountryCode;
    /**
     * Destination country code for the shipment. <br><br> Example: CA
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
     * Specifies the tracking number of the shipment. This is only required for Post Shipment documentation upload. <br> Example: 782514212510
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * Indicate the shipment metadata associated with the document to be uploaded
     *
     * @var list<DocumentsV1EtdsEncodedmultiuploadPostBodyMetaDataItem>
     */
    protected $metaData;
    /**
     * Indicate if the documents are being uploaded before or after shipment creation process
     *
     * @return string
     */
    public function getWorkflowName(): string
    {
        return $this->workflowName;
    }
    /**
     * Indicate if the documents are being uploaded before or after shipment creation process
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
     * Origin country code for the shipment. <br><br> Example: US<br><a href="/developer-portal/en-us/reference-guide.html#countrycodes" target="_blank">Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getOrginCountryCode(): string
    {
        return $this->orginCountryCode;
    }
    /**
     * Origin country code for the shipment. <br><br> Example: US<br><a href="/developer-portal/en-us/reference-guide.html#countrycodes" target="_blank">Click here to see Country Codes</a>
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
     * Destination country code for the shipment. <br><br> Example: CA
     *
     * @return string
     */
    public function getDestinationCountryCode(): string
    {
        return $this->destinationCountryCode;
    }
    /**
     * Destination country code for the shipment. <br><br> Example: CA
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
     * Specifies the tracking number of the shipment. This is only required for Post Shipment documentation upload. <br> Example: 782514212510
     *
     * @return string
     */
    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }
    /**
     * Specifies the tracking number of the shipment. This is only required for Post Shipment documentation upload. <br> Example: 782514212510
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
     * @return list<DocumentsV1EtdsEncodedmultiuploadPostBodyMetaDataItem>
     */
    public function getMetaData(): array
    {
        return $this->metaData;
    }
    /**
     * Indicate the shipment metadata associated with the document to be uploaded
     *
     * @param list<DocumentsV1EtdsEncodedmultiuploadPostBodyMetaDataItem> $metaData
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
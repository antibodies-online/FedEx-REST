<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsUploadPostBodyDocumentMeta extends \ArrayObject
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
     * Provide the type of document to be uploaded. <br><br>For more information on the individual documents, visit Overview section of <b>Upload Documents</b> on this page.
     *
     * @var string
     */
    protected $shipDocumentType;
    /**
     * Specify the form code. This value is required if US/CA/MX trade documents are to be uploaded.<br> Example: USMCA<br><br>Note: if <i>shipDocumentType</i> value provided is either USMCA_CERTIFICATION_OF_ORIGIN or USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN, then it is  REQUIRED to pass value as <i>USMCA</i>.
     *
     * @var string
     */
    protected $formCode;
    /**
     * Specify the shipment tracking number. This is only required for Post Shipment document upload. <br><br> Example: 79XXX12XX805
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * Specify the Shipment date. This is only required for Post Shipment document upload. <br><br> Example: 2021-02-17T00:00:00
     *
     * @var string
     */
    protected $shipmentDate;
    /**
     * Provide origin FedEx location code for the shipment. <br><br> Example: GVTKK
     *
     * @var string
     */
    protected $originLocationCode;
    /**
     * Provide origin country code for the shipment. <br><br> Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $originCountryCode;
    /**
     * Provide destination FedEx location code for the shipment. <br><br> Example: JNUA
     *
     * @var string
     */
    protected $destinationLocationCode;
    /**
     * Provide destination country code for the shipment. <br><br> Example: CA <br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $destinationCountryCode;
    /**
     * Provide the type of document to be uploaded. <br><br>For more information on the individual documents, visit Overview section of <b>Upload Documents</b> on this page.
     *
     * @return string
     */
    public function getShipDocumentType() : string
    {
        return $this->shipDocumentType;
    }
    /**
     * Provide the type of document to be uploaded. <br><br>For more information on the individual documents, visit Overview section of <b>Upload Documents</b> on this page.
     *
     * @param string $shipDocumentType
     *
     * @return self
     */
    public function setShipDocumentType(string $shipDocumentType) : self
    {
        $this->initialized['shipDocumentType'] = true;
        $this->shipDocumentType = $shipDocumentType;
        return $this;
    }
    /**
     * Specify the form code. This value is required if US/CA/MX trade documents are to be uploaded.<br> Example: USMCA<br><br>Note: if <i>shipDocumentType</i> value provided is either USMCA_CERTIFICATION_OF_ORIGIN or USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN, then it is  REQUIRED to pass value as <i>USMCA</i>.
     *
     * @return string
     */
    public function getFormCode() : string
    {
        return $this->formCode;
    }
    /**
     * Specify the form code. This value is required if US/CA/MX trade documents are to be uploaded.<br> Example: USMCA<br><br>Note: if <i>shipDocumentType</i> value provided is either USMCA_CERTIFICATION_OF_ORIGIN or USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN, then it is  REQUIRED to pass value as <i>USMCA</i>.
     *
     * @param string $formCode
     *
     * @return self
     */
    public function setFormCode(string $formCode) : self
    {
        $this->initialized['formCode'] = true;
        $this->formCode = $formCode;
        return $this;
    }
    /**
     * Specify the shipment tracking number. This is only required for Post Shipment document upload. <br><br> Example: 79XXX12XX805
     *
     * @return string
     */
    public function getTrackingNumber() : string
    {
        return $this->trackingNumber;
    }
    /**
     * Specify the shipment tracking number. This is only required for Post Shipment document upload. <br><br> Example: 79XXX12XX805
     *
     * @param string $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(string $trackingNumber) : self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Specify the Shipment date. This is only required for Post Shipment document upload. <br><br> Example: 2021-02-17T00:00:00
     *
     * @return string
     */
    public function getShipmentDate() : string
    {
        return $this->shipmentDate;
    }
    /**
     * Specify the Shipment date. This is only required for Post Shipment document upload. <br><br> Example: 2021-02-17T00:00:00
     *
     * @param string $shipmentDate
     *
     * @return self
     */
    public function setShipmentDate(string $shipmentDate) : self
    {
        $this->initialized['shipmentDate'] = true;
        $this->shipmentDate = $shipmentDate;
        return $this;
    }
    /**
     * Provide origin FedEx location code for the shipment. <br><br> Example: GVTKK
     *
     * @return string
     */
    public function getOriginLocationCode() : string
    {
        return $this->originLocationCode;
    }
    /**
     * Provide origin FedEx location code for the shipment. <br><br> Example: GVTKK
     *
     * @param string $originLocationCode
     *
     * @return self
     */
    public function setOriginLocationCode(string $originLocationCode) : self
    {
        $this->initialized['originLocationCode'] = true;
        $this->originLocationCode = $originLocationCode;
        return $this;
    }
    /**
     * Provide origin country code for the shipment. <br><br> Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getOriginCountryCode() : string
    {
        return $this->originCountryCode;
    }
    /**
     * Provide origin country code for the shipment. <br><br> Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @param string $originCountryCode
     *
     * @return self
     */
    public function setOriginCountryCode(string $originCountryCode) : self
    {
        $this->initialized['originCountryCode'] = true;
        $this->originCountryCode = $originCountryCode;
        return $this;
    }
    /**
     * Provide destination FedEx location code for the shipment. <br><br> Example: JNUA
     *
     * @return string
     */
    public function getDestinationLocationCode() : string
    {
        return $this->destinationLocationCode;
    }
    /**
     * Provide destination FedEx location code for the shipment. <br><br> Example: JNUA
     *
     * @param string $destinationLocationCode
     *
     * @return self
     */
    public function setDestinationLocationCode(string $destinationLocationCode) : self
    {
        $this->initialized['destinationLocationCode'] = true;
        $this->destinationLocationCode = $destinationLocationCode;
        return $this;
    }
    /**
     * Provide destination country code for the shipment. <br><br> Example: CA <br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getDestinationCountryCode() : string
    {
        return $this->destinationCountryCode;
    }
    /**
     * Provide destination country code for the shipment. <br><br> Example: CA <br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @param string $destinationCountryCode
     *
     * @return self
     */
    public function setDestinationCountryCode(string $destinationCountryCode) : self
    {
        $this->initialized['destinationCountryCode'] = true;
        $this->destinationCountryCode = $destinationCountryCode;
        return $this;
    }
}
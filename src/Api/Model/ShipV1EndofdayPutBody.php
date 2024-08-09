<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1EndofdayPutBody extends \ArrayObject
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
     * Specify the close request type to initiate processing of shipment data.For ground close the closeReqType is GCDR and for Reprint EndofDay the applicable value is RGCDR.
     *
     * @var string
     */
    protected $closeReqType;
    /**
     * This is the FedEx Account number. <br>Example: XXX456XXX
     *
     * @var ShipV1EndofdayPutBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * This is to specify FedEx ground category for which the shipment to be submitted for end of the day closing.
     *
     * @var string
     */
    protected $groundServiceCategory;
    /**
     * Indicates the close date. <br> Example: 2020-05-05
     *
     * @var string
     */
    protected $closeDate;
    /**
     * Specify the tracking number for reprinting the report.It is only applicable for reprint EndofDay and its not applicable for ground EndofDay close endpoint. <br> Example: 7XX96XX42946
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * Specify the reprint option to generate report. Either by close date or a tracking number.It is only applicable for reprint EndofDay and its not applicable for ground EndofDay close endpoint.
     *
     * @var string
     */
    protected $reprintOption;
    /**
     * Specifies characteristics of the document to be returned for this request.
     *
     * @var ShipV1EndofdayPutBodyCloseDocumentSpecification
     */
    protected $closeDocumentSpecification;
    /**
     * Specify the close request type to initiate processing of shipment data.For ground close the closeReqType is GCDR and for Reprint EndofDay the applicable value is RGCDR.
     *
     * @return string
     */
    public function getCloseReqType(): string
    {
        return $this->closeReqType;
    }
    /**
     * Specify the close request type to initiate processing of shipment data.For ground close the closeReqType is GCDR and for Reprint EndofDay the applicable value is RGCDR.
     *
     * @param string $closeReqType
     *
     * @return self
     */
    public function setCloseReqType(string $closeReqType): self
    {
        $this->initialized['closeReqType'] = true;
        $this->closeReqType = $closeReqType;
        return $this;
    }
    /**
     * This is the FedEx Account number. <br>Example: XXX456XXX
     *
     * @return ShipV1EndofdayPutBodyAccountNumber
     */
    public function getAccountNumber(): ShipV1EndofdayPutBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is the FedEx Account number. <br>Example: XXX456XXX
     *
     * @param ShipV1EndofdayPutBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1EndofdayPutBodyAccountNumber $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This is to specify FedEx ground category for which the shipment to be submitted for end of the day closing.
     *
     * @return string
     */
    public function getGroundServiceCategory(): string
    {
        return $this->groundServiceCategory;
    }
    /**
     * This is to specify FedEx ground category for which the shipment to be submitted for end of the day closing.
     *
     * @param string $groundServiceCategory
     *
     * @return self
     */
    public function setGroundServiceCategory(string $groundServiceCategory): self
    {
        $this->initialized['groundServiceCategory'] = true;
        $this->groundServiceCategory = $groundServiceCategory;
        return $this;
    }
    /**
     * Indicates the close date. <br> Example: 2020-05-05
     *
     * @return string
     */
    public function getCloseDate(): string
    {
        return $this->closeDate;
    }
    /**
     * Indicates the close date. <br> Example: 2020-05-05
     *
     * @param string $closeDate
     *
     * @return self
     */
    public function setCloseDate(string $closeDate): self
    {
        $this->initialized['closeDate'] = true;
        $this->closeDate = $closeDate;
        return $this;
    }
    /**
     * Specify the tracking number for reprinting the report.It is only applicable for reprint EndofDay and its not applicable for ground EndofDay close endpoint. <br> Example: 7XX96XX42946
     *
     * @return string
     */
    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }
    /**
     * Specify the tracking number for reprinting the report.It is only applicable for reprint EndofDay and its not applicable for ground EndofDay close endpoint. <br> Example: 7XX96XX42946
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
     * Specify the reprint option to generate report. Either by close date or a tracking number.It is only applicable for reprint EndofDay and its not applicable for ground EndofDay close endpoint.
     *
     * @return string
     */
    public function getReprintOption(): string
    {
        return $this->reprintOption;
    }
    /**
     * Specify the reprint option to generate report. Either by close date or a tracking number.It is only applicable for reprint EndofDay and its not applicable for ground EndofDay close endpoint.
     *
     * @param string $reprintOption
     *
     * @return self
     */
    public function setReprintOption(string $reprintOption): self
    {
        $this->initialized['reprintOption'] = true;
        $this->reprintOption = $reprintOption;
        return $this;
    }
    /**
     * Specifies characteristics of the document to be returned for this request.
     *
     * @return ShipV1EndofdayPutBodyCloseDocumentSpecification
     */
    public function getCloseDocumentSpecification(): ShipV1EndofdayPutBodyCloseDocumentSpecification
    {
        return $this->closeDocumentSpecification;
    }
    /**
     * Specifies characteristics of the document to be returned for this request.
     *
     * @param ShipV1EndofdayPutBodyCloseDocumentSpecification $closeDocumentSpecification
     *
     * @return self
     */
    public function setCloseDocumentSpecification(ShipV1EndofdayPutBodyCloseDocumentSpecification $closeDocumentSpecification): self
    {
        $this->initialized['closeDocumentSpecification'] = true;
        $this->closeDocumentSpecification = $closeDocumentSpecification;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostBody extends \ArrayObject
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
     * Specify whether the encoded bytecode or the label URL to be returned in the response.<p>Valid values:<ul><li>LABEL &ndash; Indicates request is for encoded bytecode.</li><li>URL_ONLY &ndash; Indicates label URL request.</li></ul>Note: For asynchronous shipment (More than 40 packages) request only the value LABEL is suported.</p><br><br><i>Note: With URL_ONLY option, the URL once created will be active for 12 hours.</i>
     *
     * @var string
     */
    protected $labelResponseOptions;
    /**
     * Indicate whether to have estimated duties and taxes provided with the rate quotes on this shipment. Only applies for International Shipment.
     *
     * @var string
     */
    protected $edtRequestType;
    /**
     * These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
     *
     * @var ShipV1OpenshipmentsPostBodyLabelSpecification
     */
    protected $labelSpecification;
    /**
     * This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     *
     * @var string
     */
    protected $index;
    /**
     * Use this object to provide all data required for additional (non-label) shipping documents to be produced.
     *
     * @var ShipV1OpenshipmentsPostBodyShippingDocumentSpecification
     */
    protected $shippingDocumentSpecification;
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @var ShipV1OpenshipmentsPostBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * Specify whether the encoded bytecode or the label URL to be returned in the response.<p>Valid values:<ul><li>LABEL &ndash; Indicates request is for encoded bytecode.</li><li>URL_ONLY &ndash; Indicates label URL request.</li></ul>Note: For asynchronous shipment (More than 40 packages) request only the value LABEL is suported.</p><br><br><i>Note: With URL_ONLY option, the URL once created will be active for 12 hours.</i>
     *
     * @return string
     */
    public function getLabelResponseOptions() : string
    {
        return $this->labelResponseOptions;
    }
    /**
     * Specify whether the encoded bytecode or the label URL to be returned in the response.<p>Valid values:<ul><li>LABEL &ndash; Indicates request is for encoded bytecode.</li><li>URL_ONLY &ndash; Indicates label URL request.</li></ul>Note: For asynchronous shipment (More than 40 packages) request only the value LABEL is suported.</p><br><br><i>Note: With URL_ONLY option, the URL once created will be active for 12 hours.</i>
     *
     * @param string $labelResponseOptions
     *
     * @return self
     */
    public function setLabelResponseOptions(string $labelResponseOptions) : self
    {
        $this->initialized['labelResponseOptions'] = true;
        $this->labelResponseOptions = $labelResponseOptions;
        return $this;
    }
    /**
     * Indicate whether to have estimated duties and taxes provided with the rate quotes on this shipment. Only applies for International Shipment.
     *
     * @return string
     */
    public function getEdtRequestType() : string
    {
        return $this->edtRequestType;
    }
    /**
     * Indicate whether to have estimated duties and taxes provided with the rate quotes on this shipment. Only applies for International Shipment.
     *
     * @param string $edtRequestType
     *
     * @return self
     */
    public function setEdtRequestType(string $edtRequestType) : self
    {
        $this->initialized['edtRequestType'] = true;
        $this->edtRequestType = $edtRequestType;
        return $this;
    }
    /**
     * These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
     *
     * @return ShipV1OpenshipmentsPostBodyLabelSpecification
     */
    public function getLabelSpecification() : ShipV1OpenshipmentsPostBodyLabelSpecification
    {
        return $this->labelSpecification;
    }
    /**
     * These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
     *
     * @param ShipV1OpenshipmentsPostBodyLabelSpecification $labelSpecification
     *
     * @return self
     */
    public function setLabelSpecification(ShipV1OpenshipmentsPostBodyLabelSpecification $labelSpecification) : self
    {
        $this->initialized['labelSpecification'] = true;
        $this->labelSpecification = $labelSpecification;
        return $this;
    }
    /**
     * This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     *
     * @return string
     */
    public function getIndex() : string
    {
        return $this->index;
    }
    /**
     * This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     *
     * @param string $index
     *
     * @return self
     */
    public function setIndex(string $index) : self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
    }
    /**
     * Use this object to provide all data required for additional (non-label) shipping documents to be produced.
     *
     * @return ShipV1OpenshipmentsPostBodyShippingDocumentSpecification
     */
    public function getShippingDocumentSpecification() : ShipV1OpenshipmentsPostBodyShippingDocumentSpecification
    {
        return $this->shippingDocumentSpecification;
    }
    /**
     * Use this object to provide all data required for additional (non-label) shipping documents to be produced.
     *
     * @param ShipV1OpenshipmentsPostBodyShippingDocumentSpecification $shippingDocumentSpecification
     *
     * @return self
     */
    public function setShippingDocumentSpecification(ShipV1OpenshipmentsPostBodyShippingDocumentSpecification $shippingDocumentSpecification) : self
    {
        $this->initialized['shippingDocumentSpecification'] = true;
        $this->shippingDocumentSpecification = $shippingDocumentSpecification;
        return $this;
    }
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @return ShipV1OpenshipmentsPostBodyAccountNumber
     */
    public function getAccountNumber() : ShipV1OpenshipmentsPostBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @param ShipV1OpenshipmentsPostBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1OpenshipmentsPostBodyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}
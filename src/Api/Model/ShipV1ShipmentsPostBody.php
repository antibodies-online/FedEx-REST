<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBody extends \ArrayObject
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
     * It specifies the content of the merged pdf URL in the response. The merged pdf URL is generated only if the labelResponseOption is indicated as URL_ONLY.<ul><li>If the value is 'LABELS_AND_DOCS', then merged (all shipping labels and shipping documents) pdf URL will be returned.</li><li>If the value is 'LABELS_ONLY', merged (all shipping labels only) pdf URL will be returned.</li><li>If the value is 'NONE', then no merged pdf URL will be returned.</li></ul><br>This is optional field and will default to LABELS_AND_DOCS.<br>Note: If the value is 'LABELS_ONLY', then the returned merged pdf label will not be in the Base64 encoded format.
     *
     * @var string
     */
    protected $mergeLabelDocOption;
    /**
     * The descriptive data of the requested shipment.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipment
     */
    protected $requestedShipment;
    /**
     * This is to specify whether the encoded bytecode or  the Label URL to be returned in the response.<p>Valid values:<ul><li>LABEL &ndash; Indicates request is for encoded bytecode.</li><li>URL_ONLY &ndash; Indicates label URL request.</li></ul>Note: For asynchronous shipment (More than 40 packages) request only the value LABEL is suported.</p><br><i>Note: With URL_ONLY option, the URL once created will be active for 12 hours.</i>
     *
     * @var string
     */
    protected $labelResponseOptions;
    /**
     * The account number associated with the shipment.
     *
     * @var ShipV1ShipmentsPostBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * Indicate shipment action for the Shipment. <ul><li>CONFIRM &ndash; used in case of shipment submission</li><li>TRANSFER &ndash; used in case of Email Label Shipment or Pending Shipment submission.
     *
     * @var string
     */
    protected $shipAction;
    /**
     * Indicate the processing option for submitting a Single shot MPS shipment. The value indicates if the MPS to be processed synchronously or asynchronously.<br>Note: <ul><li>Default value is SYNCHRONOUS_ONLY.</li><li>Value or element is not needed when groupPackageCount is less than or equal to 40.</li><li>Must provide element with value ALLOW_ASYNCHRONOUS when groupPackageCount is greater than 40.</li></ul>
     *
     * @var string
     */
    protected $processingOptionType;
    /**
     * This flag is used to specify if the shipment is singleshot mps or one Label at a time, piece by piece shipment. Default is false. If true, one label at a time is processed.
     *
     * @var bool
     */
    protected $oneLabelAtATime;
    /**
     * It specifies the content of the merged pdf URL in the response. The merged pdf URL is generated only if the labelResponseOption is indicated as URL_ONLY.<ul><li>If the value is 'LABELS_AND_DOCS', then merged (all shipping labels and shipping documents) pdf URL will be returned.</li><li>If the value is 'LABELS_ONLY', merged (all shipping labels only) pdf URL will be returned.</li><li>If the value is 'NONE', then no merged pdf URL will be returned.</li></ul><br>This is optional field and will default to LABELS_AND_DOCS.<br>Note: If the value is 'LABELS_ONLY', then the returned merged pdf label will not be in the Base64 encoded format.
     *
     * @return string
     */
    public function getMergeLabelDocOption() : string
    {
        return $this->mergeLabelDocOption;
    }
    /**
     * It specifies the content of the merged pdf URL in the response. The merged pdf URL is generated only if the labelResponseOption is indicated as URL_ONLY.<ul><li>If the value is 'LABELS_AND_DOCS', then merged (all shipping labels and shipping documents) pdf URL will be returned.</li><li>If the value is 'LABELS_ONLY', merged (all shipping labels only) pdf URL will be returned.</li><li>If the value is 'NONE', then no merged pdf URL will be returned.</li></ul><br>This is optional field and will default to LABELS_AND_DOCS.<br>Note: If the value is 'LABELS_ONLY', then the returned merged pdf label will not be in the Base64 encoded format.
     *
     * @param string $mergeLabelDocOption
     *
     * @return self
     */
    public function setMergeLabelDocOption(string $mergeLabelDocOption) : self
    {
        $this->initialized['mergeLabelDocOption'] = true;
        $this->mergeLabelDocOption = $mergeLabelDocOption;
        return $this;
    }
    /**
     * The descriptive data of the requested shipment.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipment
     */
    public function getRequestedShipment() : ShipV1ShipmentsPostBodyRequestedShipment
    {
        return $this->requestedShipment;
    }
    /**
     * The descriptive data of the requested shipment.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipment $requestedShipment
     *
     * @return self
     */
    public function setRequestedShipment(ShipV1ShipmentsPostBodyRequestedShipment $requestedShipment) : self
    {
        $this->initialized['requestedShipment'] = true;
        $this->requestedShipment = $requestedShipment;
        return $this;
    }
    /**
     * This is to specify whether the encoded bytecode or  the Label URL to be returned in the response.<p>Valid values:<ul><li>LABEL &ndash; Indicates request is for encoded bytecode.</li><li>URL_ONLY &ndash; Indicates label URL request.</li></ul>Note: For asynchronous shipment (More than 40 packages) request only the value LABEL is suported.</p><br><i>Note: With URL_ONLY option, the URL once created will be active for 12 hours.</i>
     *
     * @return string
     */
    public function getLabelResponseOptions() : string
    {
        return $this->labelResponseOptions;
    }
    /**
     * This is to specify whether the encoded bytecode or  the Label URL to be returned in the response.<p>Valid values:<ul><li>LABEL &ndash; Indicates request is for encoded bytecode.</li><li>URL_ONLY &ndash; Indicates label URL request.</li></ul>Note: For asynchronous shipment (More than 40 packages) request only the value LABEL is suported.</p><br><i>Note: With URL_ONLY option, the URL once created will be active for 12 hours.</i>
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
     * The account number associated with the shipment.
     *
     * @return ShipV1ShipmentsPostBodyAccountNumber
     */
    public function getAccountNumber() : ShipV1ShipmentsPostBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * The account number associated with the shipment.
     *
     * @param ShipV1ShipmentsPostBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1ShipmentsPostBodyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Indicate shipment action for the Shipment. <ul><li>CONFIRM &ndash; used in case of shipment submission</li><li>TRANSFER &ndash; used in case of Email Label Shipment or Pending Shipment submission.
     *
     * @return string
     */
    public function getShipAction() : string
    {
        return $this->shipAction;
    }
    /**
     * Indicate shipment action for the Shipment. <ul><li>CONFIRM &ndash; used in case of shipment submission</li><li>TRANSFER &ndash; used in case of Email Label Shipment or Pending Shipment submission.
     *
     * @param string $shipAction
     *
     * @return self
     */
    public function setShipAction(string $shipAction) : self
    {
        $this->initialized['shipAction'] = true;
        $this->shipAction = $shipAction;
        return $this;
    }
    /**
     * Indicate the processing option for submitting a Single shot MPS shipment. The value indicates if the MPS to be processed synchronously or asynchronously.<br>Note: <ul><li>Default value is SYNCHRONOUS_ONLY.</li><li>Value or element is not needed when groupPackageCount is less than or equal to 40.</li><li>Must provide element with value ALLOW_ASYNCHRONOUS when groupPackageCount is greater than 40.</li></ul>
     *
     * @return string
     */
    public function getProcessingOptionType() : string
    {
        return $this->processingOptionType;
    }
    /**
     * Indicate the processing option for submitting a Single shot MPS shipment. The value indicates if the MPS to be processed synchronously or asynchronously.<br>Note: <ul><li>Default value is SYNCHRONOUS_ONLY.</li><li>Value or element is not needed when groupPackageCount is less than or equal to 40.</li><li>Must provide element with value ALLOW_ASYNCHRONOUS when groupPackageCount is greater than 40.</li></ul>
     *
     * @param string $processingOptionType
     *
     * @return self
     */
    public function setProcessingOptionType(string $processingOptionType) : self
    {
        $this->initialized['processingOptionType'] = true;
        $this->processingOptionType = $processingOptionType;
        return $this;
    }
    /**
     * This flag is used to specify if the shipment is singleshot mps or one Label at a time, piece by piece shipment. Default is false. If true, one label at a time is processed.
     *
     * @return bool
     */
    public function getOneLabelAtATime() : bool
    {
        return $this->oneLabelAtATime;
    }
    /**
     * This flag is used to specify if the shipment is singleshot mps or one Label at a time, piece by piece shipment. Default is false. If true, one label at a time is processed.
     *
     * @param bool $oneLabelAtATime
     *
     * @return self
     */
    public function setOneLabelAtATime(bool $oneLabelAtATime) : self
    {
        $this->initialized['oneLabelAtATime'] = true;
        $this->oneLabelAtATime = $oneLabelAtATime;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiverAdvisoriesItem extends \ArrayObject
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
     * Specifies the message code for the tag created.<br>Example: code
     *
     * @var string
     */
    protected $code;
    /**
     * Specifies the text message for the tag created.<br>Example: Text
     *
     * @var string
     */
    protected $text;
    /**
     * Specifies the message parameters list.
     *
     * @var list<ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiverAdvisoriesItemParametersItem>
     */
    protected $parameters;
    /**
     * Specifies the message ID and value.<br>Example: localizedText
     *
     * @var string
     */
    protected $localizedText;
    /**
     * Specifies the message code for the tag created.<br>Example: code
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Specifies the message code for the tag created.<br>Example: code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Specifies the text message for the tag created.<br>Example: Text
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * Specifies the text message for the tag created.<br>Example: Text
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * Specifies the message parameters list.
     *
     * @return list<ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiverAdvisoriesItemParametersItem>
     */
    public function getParameters() : array
    {
        return $this->parameters;
    }
    /**
     * Specifies the message parameters list.
     *
     * @param list<ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiverAdvisoriesItemParametersItem> $parameters
     *
     * @return self
     */
    public function setParameters(array $parameters) : self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
    /**
     * Specifies the message ID and value.<br>Example: localizedText
     *
     * @return string
     */
    public function getLocalizedText() : string
    {
        return $this->localizedText;
    }
    /**
     * Specifies the message ID and value.<br>Example: localizedText
     *
     * @param string $localizedText
     *
     * @return self
     */
    public function setLocalizedText(string $localizedText) : self
    {
        $this->initialized['localizedText'] = true;
        $this->localizedText = $localizedText;
        return $this;
    }
}
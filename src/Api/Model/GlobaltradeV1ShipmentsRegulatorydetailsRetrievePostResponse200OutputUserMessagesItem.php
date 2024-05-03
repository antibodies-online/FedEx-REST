<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputUserMessagesItem extends \ArrayObject
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
     * Indicates the message code.
     *
     * @var string
     */
    protected $code;
    /**
     * Value indicating the translated text.
     *
     * @var list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputUserMessagesItemMessageParametersItem>
     */
    protected $messageParameters;
    /**
     * Non negative integer value indicating the index of the commodity description.
     *
     * @var int
     */
    protected $index;
    /**
     * Indicates the content of the user-instructional message in English.
     *
     * @var string
     */
    protected $text;
    /**
     * This is the return message from the service provider in local language.
     *
     * @var string
     */
    protected $localizedText;
    /**
     * Indicates the message code.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Indicates the message code.
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
     * Value indicating the translated text.
     *
     * @return list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputUserMessagesItemMessageParametersItem>
     */
    public function getMessageParameters() : array
    {
        return $this->messageParameters;
    }
    /**
     * Value indicating the translated text.
     *
     * @param list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputUserMessagesItemMessageParametersItem> $messageParameters
     *
     * @return self
     */
    public function setMessageParameters(array $messageParameters) : self
    {
        $this->initialized['messageParameters'] = true;
        $this->messageParameters = $messageParameters;
        return $this;
    }
    /**
     * Non negative integer value indicating the index of the commodity description.
     *
     * @return int
     */
    public function getIndex() : int
    {
        return $this->index;
    }
    /**
     * Non negative integer value indicating the index of the commodity description.
     *
     * @param int $index
     *
     * @return self
     */
    public function setIndex(int $index) : self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
    }
    /**
     * Indicates the content of the user-instructional message in English.
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * Indicates the content of the user-instructional message in English.
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
     * This is the return message from the service provider in local language.
     *
     * @return string
     */
    public function getLocalizedText() : string
    {
        return $this->localizedText;
    }
    /**
     * This is the return message from the service provider in local language.
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
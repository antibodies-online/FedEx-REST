<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryCountryAdvisoriesMessagesItem extends \ArrayObject
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
     * Specifies the advisory document related code.
     *
     * @var string
     */
    protected $code;
    /**
     * Specifies names of the regulatory advisories.
     *
     * @var string
     */
    protected $text;
    /**
     * Specifies information related to the advisories and their relevant parameters.
     *
     * @var list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryCountryAdvisoriesMessagesItemParametersItem>
     */
    protected $parameters;
    /**
     * This provides the specifics of the regulations.
     *
     * @var string
     */
    protected $localizedText;
    /**
     * Specifies the advisory document related code.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Specifies the advisory document related code.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Specifies names of the regulatory advisories.
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
    /**
     * Specifies names of the regulatory advisories.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * Specifies information related to the advisories and their relevant parameters.
     *
     * @return list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryCountryAdvisoriesMessagesItemParametersItem>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * Specifies information related to the advisories and their relevant parameters.
     *
     * @param list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryCountryAdvisoriesMessagesItemParametersItem> $parameters
     *
     * @return self
     */
    public function setParameters(array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
    /**
     * This provides the specifics of the regulations.
     *
     * @return string
     */
    public function getLocalizedText(): string
    {
        return $this->localizedText;
    }
    /**
     * This provides the specifics of the regulations.
     *
     * @param string $localizedText
     *
     * @return self
     */
    public function setLocalizedText(string $localizedText): self
    {
        $this->initialized['localizedText'] = true;
        $this->localizedText = $localizedText;
        return $this;
    }
}
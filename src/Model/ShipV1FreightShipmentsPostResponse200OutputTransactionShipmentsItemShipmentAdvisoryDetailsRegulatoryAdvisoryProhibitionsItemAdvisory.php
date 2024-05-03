<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemAdvisory extends \ArrayObject
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
     * Specifies the message code for the tag created.<br>Example: code.
     *
     * @var string
     */
    protected $code;
    /**
     * Specifies the text message for the tag created.<br>Example: Text.
     *
     * @var string
     */
    protected $text;
    /**
     * Specifies the message parameters list.
     *
     * @var list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemAdvisoryParametersItem>
     */
    protected $parameters;
    /**
     * Specifies the message ID and value.<br>Example: localizedText.
     *
     * @var string
     */
    protected $localizedText;

    /**
     * Specifies the message code for the tag created.<br>Example: code.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Specifies the message code for the tag created.<br>Example: code.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Specifies the text message for the tag created.<br>Example: Text.
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Specifies the text message for the tag created.<br>Example: Text.
     */
    public function setText(string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;

        return $this;
    }

    /**
     * Specifies the message parameters list.
     *
     * @return list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemAdvisoryParametersItem>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * Specifies the message parameters list.
     *
     * @param list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemAdvisoryParametersItem> $parameters
     */
    public function setParameters(array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Specifies the message ID and value.<br>Example: localizedText.
     */
    public function getLocalizedText(): string
    {
        return $this->localizedText;
    }

    /**
     * Specifies the message ID and value.<br>Example: localizedText.
     */
    public function setLocalizedText(string $localizedText): self
    {
        $this->initialized['localizedText'] = true;
        $this->localizedText = $localizedText;

        return $this;
    }
}

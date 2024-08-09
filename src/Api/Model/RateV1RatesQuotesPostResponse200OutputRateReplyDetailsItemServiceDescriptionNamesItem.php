<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemServiceDescriptionNamesItem extends \ArrayObject
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
     * Specifies the type of the product.<br> Example: medium
     *
     * @var string
     */
    protected $type;
    /**
     * Specifies the encoding standard. <br> Example: utf-8.
     *
     * @var string
     */
    protected $encoding;
    /**
     * Specifies the value of the Product.<br> Example: FedEx International First®.
     *
     * @var string
     */
    protected $value;
    /**
     * Specifies the type of the product.<br> Example: medium
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Specifies the type of the product.<br> Example: medium
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Specifies the encoding standard. <br> Example: utf-8.
     *
     * @return string
     */
    public function getEncoding(): string
    {
        return $this->encoding;
    }
    /**
     * Specifies the encoding standard. <br> Example: utf-8.
     *
     * @param string $encoding
     *
     * @return self
     */
    public function setEncoding(string $encoding): self
    {
        $this->initialized['encoding'] = true;
        $this->encoding = $encoding;
        return $this;
    }
    /**
     * Specifies the value of the Product.<br> Example: FedEx International First®.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Specifies the value of the Product.<br> Example: FedEx International First®.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}
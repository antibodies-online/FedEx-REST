<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPutResponse401ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: NOT.AUTHORIZED.ERROR.
     *
     * @var string
     */
    protected $code;
    /**
     * Specifies list of parameters.
     *
     * @var list<ShipV1OpenshipmentsPutResponse401ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the description of API error alert message.<br>Example: Access token expired. Please modify your request and try again.
     */
    protected $message;

    /**
     * Indicates the error code.<br>Example: NOT.AUTHORIZED.ERROR.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Indicates the error code.<br>Example: NOT.AUTHORIZED.ERROR.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Specifies list of parameters.
     *
     * @return list<ShipV1OpenshipmentsPutResponse401ErrorsItemParameterListItem>
     */
    public function getParameterList(): array
    {
        return $this->parameterList;
    }

    /**
     * Specifies list of parameters.
     *
     * @param list<ShipV1OpenshipmentsPutResponse401ErrorsItemParameterListItem> $parameterList
     */
    public function setParameterList(array $parameterList): self
    {
        $this->initialized['parameterList'] = true;
        $this->parameterList = $parameterList;

        return $this;
    }

    /**
     * Indicates the description of API error alert message.<br>Example: Access token expired. Please modify your request and try again.
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Indicates the description of API error alert message.<br>Example: Access token expired. Please modify your request and try again.
     */
    public function setMessage($message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }
}

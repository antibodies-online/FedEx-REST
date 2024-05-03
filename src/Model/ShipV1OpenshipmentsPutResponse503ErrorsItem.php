<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPutResponse503ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: SERVICE.UNAVAILABLE.ERROR.
     *
     * @var string
     */
    protected $code;
    /**
     * Specifies list of parameters.
     *
     * @var list<ShipV1OpenshipmentsPutResponse503ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the description of API error alert message.<br>Example: The service is currently unavailable and we are working to resolve the issue. We apologize for any inconvenience. Please check back at a later time.
     */
    protected $message;

    /**
     * Indicates the error code.<br>Example: SERVICE.UNAVAILABLE.ERROR.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Indicates the error code.<br>Example: SERVICE.UNAVAILABLE.ERROR.
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
     * @return list<ShipV1OpenshipmentsPutResponse503ErrorsItemParameterListItem>
     */
    public function getParameterList(): array
    {
        return $this->parameterList;
    }

    /**
     * Specifies list of parameters.
     *
     * @param list<ShipV1OpenshipmentsPutResponse503ErrorsItemParameterListItem> $parameterList
     */
    public function setParameterList(array $parameterList): self
    {
        $this->initialized['parameterList'] = true;
        $this->parameterList = $parameterList;

        return $this;
    }

    /**
     * Indicates the description of API error alert message.<br>Example: The service is currently unavailable and we are working to resolve the issue. We apologize for any inconvenience. Please check back at a later time.
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Indicates the description of API error alert message.<br>Example: The service is currently unavailable and we are working to resolve the issue. We apologize for any inconvenience. Please check back at a later time.
     */
    public function setMessage($message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }
}

<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1ShipmentsTagPostResponse400ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: SHIPMENT.USER.UNAUTHORIZED.
     *
     * @var string
     */
    protected $code;
    /**
     * @var list<ShipV1ShipmentsTagPostResponse400ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the description of API error alert message.<br>Example: Requested user is not authorized to perform the operation.
     *
     * @var string
     */
    protected $message;

    /**
     * Indicates the error code.<br>Example: SHIPMENT.USER.UNAUTHORIZED.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Indicates the error code.<br>Example: SHIPMENT.USER.UNAUTHORIZED.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * @return list<ShipV1ShipmentsTagPostResponse400ErrorsItemParameterListItem>
     */
    public function getParameterList(): array
    {
        return $this->parameterList;
    }

    /**
     * @param list<ShipV1ShipmentsTagPostResponse400ErrorsItemParameterListItem> $parameterList
     */
    public function setParameterList(array $parameterList): self
    {
        $this->initialized['parameterList'] = true;
        $this->parameterList = $parameterList;

        return $this;
    }

    /**
     * Indicates the description of API error alert message.<br>Example: Requested user is not authorized to perform the operation.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Indicates the description of API error alert message.<br>Example: Requested user is not authorized to perform the operation.
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }
}

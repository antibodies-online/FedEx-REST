<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class TrackV1ReferencenumbersPostResponse404ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: NOT.FOUND.ERROR.
     *
     * @var string
     */
    protected $code;
    /**
     * List of parameters.
     *
     * @var list<TrackV1ReferencenumbersPostResponse404ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the description of API error alert message.<br>Example: The resource you requested is no longer available. Please modify your request and try again.
     */
    protected $message;

    /**
     * Indicates the error code.<br>Example: NOT.FOUND.ERROR.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Indicates the error code.<br>Example: NOT.FOUND.ERROR.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * List of parameters.
     *
     * @return list<TrackV1ReferencenumbersPostResponse404ErrorsItemParameterListItem>
     */
    public function getParameterList(): array
    {
        return $this->parameterList;
    }

    /**
     * List of parameters.
     *
     * @param list<TrackV1ReferencenumbersPostResponse404ErrorsItemParameterListItem> $parameterList
     */
    public function setParameterList(array $parameterList): self
    {
        $this->initialized['parameterList'] = true;
        $this->parameterList = $parameterList;

        return $this;
    }

    /**
     * Indicates the description of API error alert message.<br>Example: The resource you requested is no longer available. Please modify your request and try again.
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Indicates the description of API error alert message.<br>Example: The resource you requested is no longer available. Please modify your request and try again.
     */
    public function setMessage($message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }
}

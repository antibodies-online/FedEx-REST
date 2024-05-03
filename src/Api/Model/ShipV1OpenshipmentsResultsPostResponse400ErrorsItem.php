<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsResultsPostResponse400ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: TRACKINGNUMBER.ENTERED.INVALID
     *
     * @var string
     */
    protected $code;
    /**
     * Specifies the message parameter list.
     *
     * @var list<ShipV1OpenshipmentsResultsPostResponse400ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the description of API error alert message.<br>Example: Error with entered Tracking Number. Please verify the entered Tracking Number.
     *
     * @var string
     */
    protected $message;
    /**
     * Indicates the error code.<br>Example: TRACKINGNUMBER.ENTERED.INVALID
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Indicates the error code.<br>Example: TRACKINGNUMBER.ENTERED.INVALID
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
     * Specifies the message parameter list.
     *
     * @return list<ShipV1OpenshipmentsResultsPostResponse400ErrorsItemParameterListItem>
     */
    public function getParameterList() : array
    {
        return $this->parameterList;
    }
    /**
     * Specifies the message parameter list.
     *
     * @param list<ShipV1OpenshipmentsResultsPostResponse400ErrorsItemParameterListItem> $parameterList
     *
     * @return self
     */
    public function setParameterList(array $parameterList) : self
    {
        $this->initialized['parameterList'] = true;
        $this->parameterList = $parameterList;
        return $this;
    }
    /**
     * Indicates the description of API error alert message.<br>Example: Error with entered Tracking Number. Please verify the entered Tracking Number.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Indicates the description of API error alert message.<br>Example: Error with entered Tracking Number. Please verify the entered Tracking Number.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}
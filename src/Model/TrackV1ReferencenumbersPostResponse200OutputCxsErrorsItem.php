<?php

namespace AntibodiesOnline\FedEx\Model;

class TrackV1ReferencenumbersPostResponse200OutputCxsErrorsItem extends \ArrayObject
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
     * Error Code. <br> Example: TRACKING.TRACKINGNUMBER.EMPTY
     *
     * @var string
     */
    protected $code;
    /**
     * List of parameters.
     *
     * @var list<TrackV1ReferencenumbersPostResponse200OutputCxsErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Error Message. <br>Example: Please provide tracking number.
     *
     * @var string
     */
    protected $message;
    /**
     * Error Code. <br> Example: TRACKING.TRACKINGNUMBER.EMPTY
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Error Code. <br> Example: TRACKING.TRACKINGNUMBER.EMPTY
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
     * List of parameters.
     *
     * @return list<TrackV1ReferencenumbersPostResponse200OutputCxsErrorsItemParameterListItem>
     */
    public function getParameterList() : array
    {
        return $this->parameterList;
    }
    /**
     * List of parameters.
     *
     * @param list<TrackV1ReferencenumbersPostResponse200OutputCxsErrorsItemParameterListItem> $parameterList
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
     * Error Message. <br>Example: Please provide tracking number.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Error Message. <br>Example: Please provide tracking number.
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
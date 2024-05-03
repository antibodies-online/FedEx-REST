<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TcnPostResponse400ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: TRACKING.TRACKINGNUMBER.EMPTY
     *
     * @var string
     */
    protected $code;
    /**
     * 
     *
     * @var list<TrackV1TcnPostResponse400ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the description of API error alert message.<br>Example: Please provide tracking number.
     *
     * @var string
     */
    protected $message;
    /**
     * Indicates the error code.<br>Example: TRACKING.TRACKINGNUMBER.EMPTY
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Indicates the error code.<br>Example: TRACKING.TRACKINGNUMBER.EMPTY
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
     * 
     *
     * @return list<TrackV1TcnPostResponse400ErrorsItemParameterListItem>
     */
    public function getParameterList() : array
    {
        return $this->parameterList;
    }
    /**
     * 
     *
     * @param list<TrackV1TcnPostResponse400ErrorsItemParameterListItem> $parameterList
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
     * Indicates the description of API error alert message.<br>Example: Please provide tracking number.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Indicates the description of API error alert message.<br>Example: Please provide tracking number.
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
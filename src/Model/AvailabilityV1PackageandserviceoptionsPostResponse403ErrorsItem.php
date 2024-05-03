<?php

namespace AntibodiesOnline\FedEx\Model;

class AvailabilityV1PackageandserviceoptionsPostResponse403ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: FORBIDDEN.ERROR
     *
     * @var string
     */
    protected $code;
    /**
     * 
     *
     * @var list<AvailabilityV1PackageandserviceoptionsPostResponse403ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the description of API error alert message.<br>Example: We could not authorize your credentials. Please check your permissions and try again
     *
     * @var mixed
     */
    protected $message;
    /**
     * Indicates the error code.<br>Example: FORBIDDEN.ERROR
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Indicates the error code.<br>Example: FORBIDDEN.ERROR
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
     * @return list<AvailabilityV1PackageandserviceoptionsPostResponse403ErrorsItemParameterListItem>
     */
    public function getParameterList() : array
    {
        return $this->parameterList;
    }
    /**
     * 
     *
     * @param list<AvailabilityV1PackageandserviceoptionsPostResponse403ErrorsItemParameterListItem> $parameterList
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
     * Indicates the description of API error alert message.<br>Example: We could not authorize your credentials. Please check your permissions and try again
     *
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Indicates the description of API error alert message.<br>Example: We could not authorize your credentials. Please check your permissions and try again
     *
     * @param mixed $message
     *
     * @return self
     */
    public function setMessage($message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}
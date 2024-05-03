<?php

namespace AntibodiesOnline\FedEx\Model;

class CountryV1PostalValidatePostResponse400ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br> Example:CITYNAME.POSTALCODE.REQUIRED
     *
     * @var string
     */
    protected $code;
    /**
     * Specifies the list of parameters.
     *
     * @var list<CountryV1PostalValidatePostResponse400ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the description of API error alert message.<br>Example: City Name or Postal Code is required.
     *
     * @var string
     */
    protected $message;
    /**
     * Indicates the error code.<br> Example:CITYNAME.POSTALCODE.REQUIRED
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Indicates the error code.<br> Example:CITYNAME.POSTALCODE.REQUIRED
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
     * Specifies the list of parameters.
     *
     * @return list<CountryV1PostalValidatePostResponse400ErrorsItemParameterListItem>
     */
    public function getParameterList() : array
    {
        return $this->parameterList;
    }
    /**
     * Specifies the list of parameters.
     *
     * @param list<CountryV1PostalValidatePostResponse400ErrorsItemParameterListItem> $parameterList
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
     * Indicates the description of API error alert message.<br>Example: City Name or Postal Code is required.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Indicates the description of API error alert message.<br>Example: City Name or Postal Code is required.
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
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class CountryV1PostalValidatePostResponse200OutputAlertsItem extends \ArrayObject
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
     * Specifies the API alert code.<br>Example: CITYNAME.POSTALCODE.REQUIRED
     *
     * @var string
     */
    protected $code;
    /**
     * Specifies the alert type.
     *
     * @var string
     */
    protected $alertType;
    /**
     * List of parameters which indicates the properties of the alert message.
     *
     * @var list<CountryV1PostalValidatePostResponse200OutputAlertsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * This is the alert message. <br> Example: We are unable to process this request. Please try again later or contact FedEx Customer Service.
     *
     * @var string
     */
    protected $message;
    /**
     * Specifies the API alert code.<br>Example: CITYNAME.POSTALCODE.REQUIRED
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Specifies the API alert code.<br>Example: CITYNAME.POSTALCODE.REQUIRED
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Specifies the alert type.
     *
     * @return string
     */
    public function getAlertType(): string
    {
        return $this->alertType;
    }
    /**
     * Specifies the alert type.
     *
     * @param string $alertType
     *
     * @return self
     */
    public function setAlertType(string $alertType): self
    {
        $this->initialized['alertType'] = true;
        $this->alertType = $alertType;
        return $this;
    }
    /**
     * List of parameters which indicates the properties of the alert message.
     *
     * @return list<CountryV1PostalValidatePostResponse200OutputAlertsItemParameterListItem>
     */
    public function getParameterList(): array
    {
        return $this->parameterList;
    }
    /**
     * List of parameters which indicates the properties of the alert message.
     *
     * @param list<CountryV1PostalValidatePostResponse200OutputAlertsItemParameterListItem> $parameterList
     *
     * @return self
     */
    public function setParameterList(array $parameterList): self
    {
        $this->initialized['parameterList'] = true;
        $this->parameterList = $parameterList;
        return $this;
    }
    /**
     * This is the alert message. <br> Example: We are unable to process this request. Please try again later or contact FedEx Customer Service.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * This is the alert message. <br> Example: We are unable to process this request. Please try again later or contact FedEx Customer Service.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}
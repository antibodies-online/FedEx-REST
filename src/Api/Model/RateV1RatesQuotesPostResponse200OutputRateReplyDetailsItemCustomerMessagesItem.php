<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCustomerMessagesItem extends \ArrayObject
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
     * This is a message code.<br> Example:SERVICE.TYPE.INTERNATIONAL.MESSAGE
     *
     * @var string
     */
    protected $code;
    /**
     * This is a message description.<br> Example: Rate does not include duties & taxes, clearance entry fees or other import fees. The payor of duties/taxes/fees will be responsible for any applicable Clearance Entry Fees
     *
     * @var string
     */
    protected $message;
    /**
     * This is a message code.<br> Example:SERVICE.TYPE.INTERNATIONAL.MESSAGE
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * This is a message code.<br> Example:SERVICE.TYPE.INTERNATIONAL.MESSAGE
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
     * This is a message description.<br> Example: Rate does not include duties & taxes, clearance entry fees or other import fees. The payor of duties/taxes/fees will be responsible for any applicable Clearance Entry Fees
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * This is a message description.<br> Example: Rate does not include duties & taxes, clearance entry fees or other import fees. The payor of duties/taxes/fees will be responsible for any applicable Clearance Entry Fees
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
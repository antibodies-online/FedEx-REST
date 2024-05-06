<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoiceEmailNotificationDetail extends \ArrayObject
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
     * This is email Address.<br>Example: xxxx@xxx.com
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * Specify the email status.<br>Example: EMAILED
     *
     * @var string
     */
    protected $type;
    /**
     * Specify the recipient Type.<br>Example: SHIPPER/BROKER
     *
     * @var string
     */
    protected $recipientType;
    /**
     * This is email Address.<br>Example: xxxx@xxx.com
     *
     * @return string
     */
    public function getEmailAddress() : string
    {
        return $this->emailAddress;
    }
    /**
     * This is email Address.<br>Example: xxxx@xxx.com
     *
     * @param string $emailAddress
     *
     * @return self
     */
    public function setEmailAddress(string $emailAddress) : self
    {
        $this->initialized['emailAddress'] = true;
        $this->emailAddress = $emailAddress;
        return $this;
    }
    /**
     * Specify the email status.<br>Example: EMAILED
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Specify the email status.<br>Example: EMAILED
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Specify the recipient Type.<br>Example: SHIPPER/BROKER
     *
     * @return string
     */
    public function getRecipientType() : string
    {
        return $this->recipientType;
    }
    /**
     * Specify the recipient Type.<br>Example: SHIPPER/BROKER
     *
     * @param string $recipientType
     *
     * @return self
     */
    public function setRecipientType(string $recipientType) : self
    {
        $this->initialized['recipientType'] = true;
        $this->recipientType = $recipientType;
        return $this;
    }
}
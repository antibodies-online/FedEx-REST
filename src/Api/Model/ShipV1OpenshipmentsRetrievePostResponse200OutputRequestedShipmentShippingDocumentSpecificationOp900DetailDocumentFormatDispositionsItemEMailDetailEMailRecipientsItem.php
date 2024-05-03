<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationOp900DetailDocumentFormatDispositionsItemEMailDetailEMailRecipientsItem extends \ArrayObject
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
     * Specifies the email address.<br> Example: email@fedex.com
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * Specify the email notification recipient type.
     *
     * @var string
     */
    protected $recipientType;
    /**
     * Specifies the email address.<br> Example: email@fedex.com
     *
     * @return string
     */
    public function getEmailAddress() : string
    {
        return $this->emailAddress;
    }
    /**
     * Specifies the email address.<br> Example: email@fedex.com
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
     * Specify the email notification recipient type.
     *
     * @return string
     */
    public function getRecipientType() : string
    {
        return $this->recipientType;
    }
    /**
     * Specify the email notification recipient type.
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
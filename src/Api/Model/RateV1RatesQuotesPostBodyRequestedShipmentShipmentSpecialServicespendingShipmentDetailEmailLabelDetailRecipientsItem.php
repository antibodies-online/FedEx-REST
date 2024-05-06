<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetailRecipientsItem extends \ArrayObject
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
     * This is the placeholder for Email address of the end-user to be  notified of the return label. Maximum length is 200 characters.
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * Indicates how the email notifications for the pending shipment need to be processed.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetailRecipientsItemOptionsRequested
     */
    protected $optionsRequested;
    /**
     * Specifies the role of the recipient to the pending shipment.
     *
     * @var string
     */
    protected $role;
    /**
     * These are Locale details.<br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetailRecipientsItemLocale
     */
    protected $locale;
    /**
     * This is the placeholder for Email address of the end-user to be  notified of the return label. Maximum length is 200 characters.
     *
     * @return string
     */
    public function getEmailAddress() : string
    {
        return $this->emailAddress;
    }
    /**
     * This is the placeholder for Email address of the end-user to be  notified of the return label. Maximum length is 200 characters.
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
     * Indicates how the email notifications for the pending shipment need to be processed.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetailRecipientsItemOptionsRequested
     */
    public function getOptionsRequested() : RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetailRecipientsItemOptionsRequested
    {
        return $this->optionsRequested;
    }
    /**
     * Indicates how the email notifications for the pending shipment need to be processed.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetailRecipientsItemOptionsRequested $optionsRequested
     *
     * @return self
     */
    public function setOptionsRequested(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetailRecipientsItemOptionsRequested $optionsRequested) : self
    {
        $this->initialized['optionsRequested'] = true;
        $this->optionsRequested = $optionsRequested;
        return $this;
    }
    /**
     * Specifies the role of the recipient to the pending shipment.
     *
     * @return string
     */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
     * Specifies the role of the recipient to the pending shipment.
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role) : self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * These are Locale details.<br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetailRecipientsItemLocale
     */
    public function getLocale() : RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetailRecipientsItemLocale
    {
        return $this->locale;
    }
    /**
     * These are Locale details.<br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetailRecipientsItemLocale $locale
     *
     * @return self
     */
    public function setLocale(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetailRecipientsItemLocale $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
}
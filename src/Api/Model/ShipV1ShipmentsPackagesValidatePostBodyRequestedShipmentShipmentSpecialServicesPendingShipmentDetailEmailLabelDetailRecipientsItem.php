<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetailRecipientsItem extends \ArrayObject
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
     * This is recipient email address for notifying the return label. Maximum length 200 characters.<br> Example: neena@abc.com
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * These are to indicate how the email notifications for the pending shipment to be processed.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetailRecipientsItemOptionsRequested
     */
    protected $optionsRequested;
    /**
     * This is to specify Recipient role in the shipment.Shipment completor role is needed when we pass shipment initiator. We cannot use shipment initiator alone.
     *
     * @var string
     */
    protected $role;
    /**
     * These are locale details.<br>Example: 'en_US'<br><a onclick='loadDocReference("locales")'>click here to see locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @var string
     */
    protected $locale;
    /**
     * This is recipient email address for notifying the return label. Maximum length 200 characters.<br> Example: neena@abc.com
     *
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }
    /**
     * This is recipient email address for notifying the return label. Maximum length 200 characters.<br> Example: neena@abc.com
     *
     * @param string $emailAddress
     *
     * @return self
     */
    public function setEmailAddress(string $emailAddress): self
    {
        $this->initialized['emailAddress'] = true;
        $this->emailAddress = $emailAddress;
        return $this;
    }
    /**
     * These are to indicate how the email notifications for the pending shipment to be processed.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetailRecipientsItemOptionsRequested
     */
    public function getOptionsRequested(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetailRecipientsItemOptionsRequested
    {
        return $this->optionsRequested;
    }
    /**
     * These are to indicate how the email notifications for the pending shipment to be processed.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetailRecipientsItemOptionsRequested $optionsRequested
     *
     * @return self
     */
    public function setOptionsRequested(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetailRecipientsItemOptionsRequested $optionsRequested): self
    {
        $this->initialized['optionsRequested'] = true;
        $this->optionsRequested = $optionsRequested;
        return $this;
    }
    /**
     * This is to specify Recipient role in the shipment.Shipment completor role is needed when we pass shipment initiator. We cannot use shipment initiator alone.
     *
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
    /**
     * This is to specify Recipient role in the shipment.Shipment completor role is needed when we pass shipment initiator. We cannot use shipment initiator alone.
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * These are locale details.<br>Example: 'en_US'<br><a onclick='loadDocReference("locales")'>click here to see locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }
    /**
     * These are locale details.<br>Example: 'en_US'<br><a onclick='loadDocReference("locales")'>click here to see locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @param string $locale
     *
     * @return self
     */
    public function setLocale(string $locale): self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
}
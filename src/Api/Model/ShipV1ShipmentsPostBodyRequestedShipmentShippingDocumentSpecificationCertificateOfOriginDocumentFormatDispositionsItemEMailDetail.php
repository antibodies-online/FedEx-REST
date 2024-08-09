<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOriginDocumentFormatDispositionsItemEMailDetail extends \ArrayObject
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
     * Indicates the shipping document email recipients.
     *
     * @var list<ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOriginDocumentFormatDispositionsItemEMailDetailEMailRecipientsItem>
     */
    protected $eMailRecipients;
    /**
     * These are locale details.<br>Example: 'en_US'<br><a onclick='loadDocReference("locales")'>click here to see locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @var string
     */
    protected $locale;
    /**
     * Identifies the convention by which documents are to be grouped as email attachment.
     *
     * @var string
     */
    protected $grouping;
    /**
     * Indicates the shipping document email recipients.
     *
     * @return list<ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOriginDocumentFormatDispositionsItemEMailDetailEMailRecipientsItem>
     */
    public function getEMailRecipients(): array
    {
        return $this->eMailRecipients;
    }
    /**
     * Indicates the shipping document email recipients.
     *
     * @param list<ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOriginDocumentFormatDispositionsItemEMailDetailEMailRecipientsItem> $eMailRecipients
     *
     * @return self
     */
    public function setEMailRecipients(array $eMailRecipients): self
    {
        $this->initialized['eMailRecipients'] = true;
        $this->eMailRecipients = $eMailRecipients;
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
    /**
     * Identifies the convention by which documents are to be grouped as email attachment.
     *
     * @return string
     */
    public function getGrouping(): string
    {
        return $this->grouping;
    }
    /**
     * Identifies the convention by which documents are to be grouped as email attachment.
     *
     * @param string $grouping
     *
     * @return self
     */
    public function setGrouping(string $grouping): self
    {
        $this->initialized['grouping'] = true;
        $this->grouping = $grouping;
        return $this;
    }
}
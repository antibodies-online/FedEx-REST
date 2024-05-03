<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItem extends \ArrayObject
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
     * This is the content key of the document/label.<br>Example: content key
     *
     * @var string
     */
    protected $contentKey;
    /**
     * These are the number of copies to print for the specific document type.<br>Example: 10
     *
     * @var int
     */
    protected $copiesToPrint;
    /**
     * Indicates the type of document/label.
     *
     * @var string
     */
    protected $contentType;
    /**
     * This is the tracking number of the package. <br>Example: 49XXX0000XXX20032835<br>
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * This is the document type.<br>Example: PDF
     *
     * @var string
     */
    protected $docType;
    /**
     * These are alerts received in the label response.
     *
     * @var list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItemAlertsItem>
     */
    protected $alerts;
    /**
     * Specifies if the document is encoded.<br>Example: encoded label
     *
     * @var string
     */
    protected $encodedLabel;
    /**
     * The URL of the shipping document/label<br>Example: https://.../document/v2/document/retrieve/SH,794816968200_Merge/isLabel=true&autoPrint=false<br><i>Note: The URL once created will be active for 24 hours.</i>
     *
     * @var string
     */
    protected $url;
    /**
     * This is the content key of the document/label.<br>Example: content key
     *
     * @return string
     */
    public function getContentKey() : string
    {
        return $this->contentKey;
    }
    /**
     * This is the content key of the document/label.<br>Example: content key
     *
     * @param string $contentKey
     *
     * @return self
     */
    public function setContentKey(string $contentKey) : self
    {
        $this->initialized['contentKey'] = true;
        $this->contentKey = $contentKey;
        return $this;
    }
    /**
     * These are the number of copies to print for the specific document type.<br>Example: 10
     *
     * @return int
     */
    public function getCopiesToPrint() : int
    {
        return $this->copiesToPrint;
    }
    /**
     * These are the number of copies to print for the specific document type.<br>Example: 10
     *
     * @param int $copiesToPrint
     *
     * @return self
     */
    public function setCopiesToPrint(int $copiesToPrint) : self
    {
        $this->initialized['copiesToPrint'] = true;
        $this->copiesToPrint = $copiesToPrint;
        return $this;
    }
    /**
     * Indicates the type of document/label.
     *
     * @return string
     */
    public function getContentType() : string
    {
        return $this->contentType;
    }
    /**
     * Indicates the type of document/label.
     *
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(string $contentType) : self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * This is the tracking number of the package. <br>Example: 49XXX0000XXX20032835<br>
     *
     * @return string
     */
    public function getTrackingNumber() : string
    {
        return $this->trackingNumber;
    }
    /**
     * This is the tracking number of the package. <br>Example: 49XXX0000XXX20032835<br>
     *
     * @param string $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(string $trackingNumber) : self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * This is the document type.<br>Example: PDF
     *
     * @return string
     */
    public function getDocType() : string
    {
        return $this->docType;
    }
    /**
     * This is the document type.<br>Example: PDF
     *
     * @param string $docType
     *
     * @return self
     */
    public function setDocType(string $docType) : self
    {
        $this->initialized['docType'] = true;
        $this->docType = $docType;
        return $this;
    }
    /**
     * These are alerts received in the label response.
     *
     * @return list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItemAlertsItem>
     */
    public function getAlerts() : array
    {
        return $this->alerts;
    }
    /**
     * These are alerts received in the label response.
     *
     * @param list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItemAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts) : self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
    /**
     * Specifies if the document is encoded.<br>Example: encoded label
     *
     * @return string
     */
    public function getEncodedLabel() : string
    {
        return $this->encodedLabel;
    }
    /**
     * Specifies if the document is encoded.<br>Example: encoded label
     *
     * @param string $encodedLabel
     *
     * @return self
     */
    public function setEncodedLabel(string $encodedLabel) : self
    {
        $this->initialized['encodedLabel'] = true;
        $this->encodedLabel = $encodedLabel;
        return $this;
    }
    /**
     * The URL of the shipping document/label<br>Example: https://.../document/v2/document/retrieve/SH,794816968200_Merge/isLabel=true&autoPrint=false<br><i>Note: The URL once created will be active for 24 hours.</i>
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The URL of the shipping document/label<br>Example: https://.../document/v2/document/retrieve/SH,794816968200_Merge/isLabel=true&autoPrint=false<br><i>Note: The URL once created will be active for 24 hours.</i>
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
}
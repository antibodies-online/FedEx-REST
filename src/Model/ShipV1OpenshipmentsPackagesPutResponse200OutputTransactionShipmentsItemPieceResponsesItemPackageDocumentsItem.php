<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItemPackageDocumentsItem extends \ArrayObject
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
     * This is the content key for the document/label.<br>Example: content key.
     *
     * @var string
     */
    protected $contentKey;
    /**
     * These are the number of copies to print for the specific document type.<br>Example: 10.
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
     * This is a tracking number for the package. <br>Example: 49XXX0000XXX20032835<br>.
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * This is the document type.<br>Example: PDF.
     *
     * @var string
     */
    protected $docType;
    /**
     * These are alerts received in the label response.
     *
     * @var list<ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItemPackageDocumentsItemAlertsItem>
     */
    protected $alerts;
    /**
     * Specifies if the document is encoded.<br>Example: encoded label.
     *
     * @var string
     */
    protected $encodedLabel;
    /**
     * The URL of the shipping document/label<br>Example: https://.../document/v2/document/retrieve/SH,794816968200_Merge/isLabel=true&autoPrint=false<br><br><i>Note: The URL once created will be active for 24 hours.</i>.
     *
     * @var string
     */
    protected $url;

    /**
     * This is the content key for the document/label.<br>Example: content key.
     */
    public function getContentKey(): string
    {
        return $this->contentKey;
    }

    /**
     * This is the content key for the document/label.<br>Example: content key.
     */
    public function setContentKey(string $contentKey): self
    {
        $this->initialized['contentKey'] = true;
        $this->contentKey = $contentKey;

        return $this;
    }

    /**
     * These are the number of copies to print for the specific document type.<br>Example: 10.
     */
    public function getCopiesToPrint(): int
    {
        return $this->copiesToPrint;
    }

    /**
     * These are the number of copies to print for the specific document type.<br>Example: 10.
     */
    public function setCopiesToPrint(int $copiesToPrint): self
    {
        $this->initialized['copiesToPrint'] = true;
        $this->copiesToPrint = $copiesToPrint;

        return $this;
    }

    /**
     * Indicates the type of document/label.
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * Indicates the type of document/label.
     */
    public function setContentType(string $contentType): self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * This is a tracking number for the package. <br>Example: 49XXX0000XXX20032835<br>.
     */
    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    /**
     * This is a tracking number for the package. <br>Example: 49XXX0000XXX20032835<br>.
     */
    public function setTrackingNumber(string $trackingNumber): self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    /**
     * This is the document type.<br>Example: PDF.
     */
    public function getDocType(): string
    {
        return $this->docType;
    }

    /**
     * This is the document type.<br>Example: PDF.
     */
    public function setDocType(string $docType): self
    {
        $this->initialized['docType'] = true;
        $this->docType = $docType;

        return $this;
    }

    /**
     * These are alerts received in the label response.
     *
     * @return list<ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItemPackageDocumentsItemAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }

    /**
     * These are alerts received in the label response.
     *
     * @param list<ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItemPackageDocumentsItemAlertsItem> $alerts
     */
    public function setAlerts(array $alerts): self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;

        return $this;
    }

    /**
     * Specifies if the document is encoded.<br>Example: encoded label.
     */
    public function getEncodedLabel(): string
    {
        return $this->encodedLabel;
    }

    /**
     * Specifies if the document is encoded.<br>Example: encoded label.
     */
    public function setEncodedLabel(string $encodedLabel): self
    {
        $this->initialized['encodedLabel'] = true;
        $this->encodedLabel = $encodedLabel;

        return $this;
    }

    /**
     * The URL of the shipping document/label<br>Example: https://.../document/v2/document/retrieve/SH,794816968200_Merge/isLabel=true&autoPrint=false<br><br><i>Note: The URL once created will be active for 24 hours.</i>.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * The URL of the shipping document/label<br>Example: https://.../document/v2/document/retrieve/SH,794816968200_Merge/isLabel=true&autoPrint=false<br><br><i>Note: The URL once created will be active for 24 hours.</i>.
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }
}
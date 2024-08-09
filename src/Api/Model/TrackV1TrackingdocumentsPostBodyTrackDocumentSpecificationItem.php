<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItem extends \ArrayObject
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
     * 
     *
     * @var TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItemTrackingNumberInfo
     */
    protected $trackingNumberInfo;
    /**
     * ShipDateBegin and ShipDateEnd are used to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number during a specific date range.<br>Format: YYYY-MM-DD<br>example: '2020-03-29'
     *
     * @var string
     */
    protected $shipDateBegin;
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number during a specific date range.<br>Format: YYYY-MM-DD<br>example: '2020-04-01'
     *
     * @var string
     */
    protected $shipDateEnd;
    /**
     * Specifies Signature Proof of Delivery(SPOD) account number for the shipment being tracked.<br>Conditionally required when documentType is BILL_OF_LADING or FREIGHT_BILLING_DOCUMENT<br>Example: 123456789
     *
     * @var string
     */
    protected $accountNumber;
    /**
     * 
     *
     * @return TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItemTrackingNumberInfo
     */
    public function getTrackingNumberInfo(): TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItemTrackingNumberInfo
    {
        return $this->trackingNumberInfo;
    }
    /**
     * 
     *
     * @param TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItemTrackingNumberInfo $trackingNumberInfo
     *
     * @return self
     */
    public function setTrackingNumberInfo(TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItemTrackingNumberInfo $trackingNumberInfo): self
    {
        $this->initialized['trackingNumberInfo'] = true;
        $this->trackingNumberInfo = $trackingNumberInfo;
        return $this;
    }
    /**
     * ShipDateBegin and ShipDateEnd are used to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number during a specific date range.<br>Format: YYYY-MM-DD<br>example: '2020-03-29'
     *
     * @return string
     */
    public function getShipDateBegin(): string
    {
        return $this->shipDateBegin;
    }
    /**
     * ShipDateBegin and ShipDateEnd are used to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number during a specific date range.<br>Format: YYYY-MM-DD<br>example: '2020-03-29'
     *
     * @param string $shipDateBegin
     *
     * @return self
     */
    public function setShipDateBegin(string $shipDateBegin): self
    {
        $this->initialized['shipDateBegin'] = true;
        $this->shipDateBegin = $shipDateBegin;
        return $this;
    }
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number during a specific date range.<br>Format: YYYY-MM-DD<br>example: '2020-04-01'
     *
     * @return string
     */
    public function getShipDateEnd(): string
    {
        return $this->shipDateEnd;
    }
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number during a specific date range.<br>Format: YYYY-MM-DD<br>example: '2020-04-01'
     *
     * @param string $shipDateEnd
     *
     * @return self
     */
    public function setShipDateEnd(string $shipDateEnd): self
    {
        $this->initialized['shipDateEnd'] = true;
        $this->shipDateEnd = $shipDateEnd;
        return $this;
    }
    /**
     * Specifies Signature Proof of Delivery(SPOD) account number for the shipment being tracked.<br>Conditionally required when documentType is BILL_OF_LADING or FREIGHT_BILLING_DOCUMENT<br>Example: 123456789
     *
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }
    /**
     * Specifies Signature Proof of Delivery(SPOD) account number for the shipment being tracked.<br>Conditionally required when documentType is BILL_OF_LADING or FREIGHT_BILLING_DOCUMENT<br>Example: 123456789
     *
     * @param string $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}
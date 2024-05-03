<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItem extends \ArrayObject
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
     * Indicates the net charges amount.<br>Example: 21.45
     *
     * @var float
     */
    protected $netChargeAmount;
    /**
     * Indicates data received that governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @var list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemTransactionDetailsItem>
     */
    protected $transactionDetails;
    /**
     * These are package documents returned in the response.
     *
     * @var list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemPackageDocumentsItem>
     */
    protected $packageDocuments;
    /**
     * Indicates the acceptance tracking number.<br>Example: 7949XXXXX5000
     *
     * @var string
     */
    protected $acceptanceTrackingNumber;
    /**
     * Indicates the service category.
     *
     * @var string
     */
    protected $serviceCategory;
    /**
     * Indicates total charges applicable to the customer.<br>Example: listCustomerTotalCharge
     *
     * @var string
     */
    protected $listCustomerTotalCharge;
    /**
     * Indicates delivery date.<br>Example: 2012-09-23
     *
     * @var string
     */
    protected $deliveryTimestamp;
    /**
     * Indicates the type of the tracking identifier.
     *
     * @var string
     */
    protected $trackingIdType;
    /**
     * These are additional charges or discounts.<br>Example: 621.45
     *
     * @var float
     */
    protected $additionalChargesDiscount;
    /**
     * Indicates the net List rate amount.<br>Example: 1.45
     *
     * @var float
     */
    protected $netListRateAmount;
    /**
     * Specifies the base rate amount.<br>Example: 321.45
     *
     * @var float
     */
    protected $baseRateAmount;
    /**
     * Indicates package sequence number.<br>Example: 215
     *
     * @var int
     */
    protected $packageSequenceNumber;
    /**
     * Specifies the net discount amount.<br>Example: 121.45
     *
     * @var float
     */
    protected $netDiscountAmount;
    /**
     * Specifies the Collect on Delivery collection amount.<br>Example: 231.45
     *
     * @var float
     */
    protected $codcollectionAmount;
    /**
     * This is a master tracking number for the shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provided).<br>Example: 794XXXXX5000
     *
     * @var string
     */
    protected $masterTrackingNumber;
    /**
     * Indicates acceptance type.
     *
     * @var string
     */
    protected $acceptanceType;
    /**
     * This is a tracking number associated with this package. <br>Example: 49XXX0000XXX20032835
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * Returns true if the responses are successful otherwise false.
     *
     * @var bool
     */
    protected $successful;
    /**
     * These are additional customer reference data.<br>Note: The groupPackageCount must be specified to retrieve customer references.
     *
     * @var list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemCustomerReferencesItem>
     */
    protected $customerReferences;
    /**
     * Indicates the net charges amount.<br>Example: 21.45
     *
     * @return float
     */
    public function getNetChargeAmount() : float
    {
        return $this->netChargeAmount;
    }
    /**
     * Indicates the net charges amount.<br>Example: 21.45
     *
     * @param float $netChargeAmount
     *
     * @return self
     */
    public function setNetChargeAmount(float $netChargeAmount) : self
    {
        $this->initialized['netChargeAmount'] = true;
        $this->netChargeAmount = $netChargeAmount;
        return $this;
    }
    /**
     * Indicates data received that governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @return list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemTransactionDetailsItem>
     */
    public function getTransactionDetails() : array
    {
        return $this->transactionDetails;
    }
    /**
     * Indicates data received that governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemTransactionDetailsItem> $transactionDetails
     *
     * @return self
     */
    public function setTransactionDetails(array $transactionDetails) : self
    {
        $this->initialized['transactionDetails'] = true;
        $this->transactionDetails = $transactionDetails;
        return $this;
    }
    /**
     * These are package documents returned in the response.
     *
     * @return list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemPackageDocumentsItem>
     */
    public function getPackageDocuments() : array
    {
        return $this->packageDocuments;
    }
    /**
     * These are package documents returned in the response.
     *
     * @param list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemPackageDocumentsItem> $packageDocuments
     *
     * @return self
     */
    public function setPackageDocuments(array $packageDocuments) : self
    {
        $this->initialized['packageDocuments'] = true;
        $this->packageDocuments = $packageDocuments;
        return $this;
    }
    /**
     * Indicates the acceptance tracking number.<br>Example: 7949XXXXX5000
     *
     * @return string
     */
    public function getAcceptanceTrackingNumber() : string
    {
        return $this->acceptanceTrackingNumber;
    }
    /**
     * Indicates the acceptance tracking number.<br>Example: 7949XXXXX5000
     *
     * @param string $acceptanceTrackingNumber
     *
     * @return self
     */
    public function setAcceptanceTrackingNumber(string $acceptanceTrackingNumber) : self
    {
        $this->initialized['acceptanceTrackingNumber'] = true;
        $this->acceptanceTrackingNumber = $acceptanceTrackingNumber;
        return $this;
    }
    /**
     * Indicates the service category.
     *
     * @return string
     */
    public function getServiceCategory() : string
    {
        return $this->serviceCategory;
    }
    /**
     * Indicates the service category.
     *
     * @param string $serviceCategory
     *
     * @return self
     */
    public function setServiceCategory(string $serviceCategory) : self
    {
        $this->initialized['serviceCategory'] = true;
        $this->serviceCategory = $serviceCategory;
        return $this;
    }
    /**
     * Indicates total charges applicable to the customer.<br>Example: listCustomerTotalCharge
     *
     * @return string
     */
    public function getListCustomerTotalCharge() : string
    {
        return $this->listCustomerTotalCharge;
    }
    /**
     * Indicates total charges applicable to the customer.<br>Example: listCustomerTotalCharge
     *
     * @param string $listCustomerTotalCharge
     *
     * @return self
     */
    public function setListCustomerTotalCharge(string $listCustomerTotalCharge) : self
    {
        $this->initialized['listCustomerTotalCharge'] = true;
        $this->listCustomerTotalCharge = $listCustomerTotalCharge;
        return $this;
    }
    /**
     * Indicates delivery date.<br>Example: 2012-09-23
     *
     * @return string
     */
    public function getDeliveryTimestamp() : string
    {
        return $this->deliveryTimestamp;
    }
    /**
     * Indicates delivery date.<br>Example: 2012-09-23
     *
     * @param string $deliveryTimestamp
     *
     * @return self
     */
    public function setDeliveryTimestamp(string $deliveryTimestamp) : self
    {
        $this->initialized['deliveryTimestamp'] = true;
        $this->deliveryTimestamp = $deliveryTimestamp;
        return $this;
    }
    /**
     * Indicates the type of the tracking identifier.
     *
     * @return string
     */
    public function getTrackingIdType() : string
    {
        return $this->trackingIdType;
    }
    /**
     * Indicates the type of the tracking identifier.
     *
     * @param string $trackingIdType
     *
     * @return self
     */
    public function setTrackingIdType(string $trackingIdType) : self
    {
        $this->initialized['trackingIdType'] = true;
        $this->trackingIdType = $trackingIdType;
        return $this;
    }
    /**
     * These are additional charges or discounts.<br>Example: 621.45
     *
     * @return float
     */
    public function getAdditionalChargesDiscount() : float
    {
        return $this->additionalChargesDiscount;
    }
    /**
     * These are additional charges or discounts.<br>Example: 621.45
     *
     * @param float $additionalChargesDiscount
     *
     * @return self
     */
    public function setAdditionalChargesDiscount(float $additionalChargesDiscount) : self
    {
        $this->initialized['additionalChargesDiscount'] = true;
        $this->additionalChargesDiscount = $additionalChargesDiscount;
        return $this;
    }
    /**
     * Indicates the net List rate amount.<br>Example: 1.45
     *
     * @return float
     */
    public function getNetListRateAmount() : float
    {
        return $this->netListRateAmount;
    }
    /**
     * Indicates the net List rate amount.<br>Example: 1.45
     *
     * @param float $netListRateAmount
     *
     * @return self
     */
    public function setNetListRateAmount(float $netListRateAmount) : self
    {
        $this->initialized['netListRateAmount'] = true;
        $this->netListRateAmount = $netListRateAmount;
        return $this;
    }
    /**
     * Specifies the base rate amount.<br>Example: 321.45
     *
     * @return float
     */
    public function getBaseRateAmount() : float
    {
        return $this->baseRateAmount;
    }
    /**
     * Specifies the base rate amount.<br>Example: 321.45
     *
     * @param float $baseRateAmount
     *
     * @return self
     */
    public function setBaseRateAmount(float $baseRateAmount) : self
    {
        $this->initialized['baseRateAmount'] = true;
        $this->baseRateAmount = $baseRateAmount;
        return $this;
    }
    /**
     * Indicates package sequence number.<br>Example: 215
     *
     * @return int
     */
    public function getPackageSequenceNumber() : int
    {
        return $this->packageSequenceNumber;
    }
    /**
     * Indicates package sequence number.<br>Example: 215
     *
     * @param int $packageSequenceNumber
     *
     * @return self
     */
    public function setPackageSequenceNumber(int $packageSequenceNumber) : self
    {
        $this->initialized['packageSequenceNumber'] = true;
        $this->packageSequenceNumber = $packageSequenceNumber;
        return $this;
    }
    /**
     * Specifies the net discount amount.<br>Example: 121.45
     *
     * @return float
     */
    public function getNetDiscountAmount() : float
    {
        return $this->netDiscountAmount;
    }
    /**
     * Specifies the net discount amount.<br>Example: 121.45
     *
     * @param float $netDiscountAmount
     *
     * @return self
     */
    public function setNetDiscountAmount(float $netDiscountAmount) : self
    {
        $this->initialized['netDiscountAmount'] = true;
        $this->netDiscountAmount = $netDiscountAmount;
        return $this;
    }
    /**
     * Specifies the Collect on Delivery collection amount.<br>Example: 231.45
     *
     * @return float
     */
    public function getCodcollectionAmount() : float
    {
        return $this->codcollectionAmount;
    }
    /**
     * Specifies the Collect on Delivery collection amount.<br>Example: 231.45
     *
     * @param float $codcollectionAmount
     *
     * @return self
     */
    public function setCodcollectionAmount(float $codcollectionAmount) : self
    {
        $this->initialized['codcollectionAmount'] = true;
        $this->codcollectionAmount = $codcollectionAmount;
        return $this;
    }
    /**
     * This is a master tracking number for the shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provided).<br>Example: 794XXXXX5000
     *
     * @return string
     */
    public function getMasterTrackingNumber() : string
    {
        return $this->masterTrackingNumber;
    }
    /**
     * This is a master tracking number for the shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provided).<br>Example: 794XXXXX5000
     *
     * @param string $masterTrackingNumber
     *
     * @return self
     */
    public function setMasterTrackingNumber(string $masterTrackingNumber) : self
    {
        $this->initialized['masterTrackingNumber'] = true;
        $this->masterTrackingNumber = $masterTrackingNumber;
        return $this;
    }
    /**
     * Indicates acceptance type.
     *
     * @return string
     */
    public function getAcceptanceType() : string
    {
        return $this->acceptanceType;
    }
    /**
     * Indicates acceptance type.
     *
     * @param string $acceptanceType
     *
     * @return self
     */
    public function setAcceptanceType(string $acceptanceType) : self
    {
        $this->initialized['acceptanceType'] = true;
        $this->acceptanceType = $acceptanceType;
        return $this;
    }
    /**
     * This is a tracking number associated with this package. <br>Example: 49XXX0000XXX20032835
     *
     * @return string
     */
    public function getTrackingNumber() : string
    {
        return $this->trackingNumber;
    }
    /**
     * This is a tracking number associated with this package. <br>Example: 49XXX0000XXX20032835
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
     * Returns true if the responses are successful otherwise false.
     *
     * @return bool
     */
    public function getSuccessful() : bool
    {
        return $this->successful;
    }
    /**
     * Returns true if the responses are successful otherwise false.
     *
     * @param bool $successful
     *
     * @return self
     */
    public function setSuccessful(bool $successful) : self
    {
        $this->initialized['successful'] = true;
        $this->successful = $successful;
        return $this;
    }
    /**
     * These are additional customer reference data.<br>Note: The groupPackageCount must be specified to retrieve customer references.
     *
     * @return list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemCustomerReferencesItem>
     */
    public function getCustomerReferences() : array
    {
        return $this->customerReferences;
    }
    /**
     * These are additional customer reference data.<br>Note: The groupPackageCount must be specified to retrieve customer references.
     *
     * @param list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemCustomerReferencesItem> $customerReferences
     *
     * @return self
     */
    public function setCustomerReferences(array $customerReferences) : self
    {
        $this->initialized['customerReferences'] = true;
        $this->customerReferences = $customerReferences;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipment extends \ArrayObject
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
     * The descriptive data for the physical location from which the shipment originates.
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShipper
     */
    protected $shipper;
    /**
     * Specifies the recipient details.
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRecipient
     */
    protected $recipient;
    /**
     * The FedEx service type for the shipment. The results will be filtered by the serviceType value indicated.  If no serviceType is indicated then all the applicable services and corresponding rates will be returned.Allowed service types are FEDEX_FREIGHT_PRIORITY and FEDEX_FREIGHT_ECONOMY.
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Indicates the currency the caller requests to have used in all returned monetary values (when a choice is possible).  Used in conjunction with the rateRequestType data element.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'> Click here to see Currency Codes</a>
     *
     * @var string
     */
    protected $preferredCurrency;
    /**
     * Indicate the payment details specifying the method and means of payment to FedEx for providing shipping services.
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPayment
     */
    protected $shippingChargesPayment;
    /**
     * Indicate the type of rates to be returned. The account specific rates are returned by default if the account number is specified in the request.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li><li>ACCOUNT - Returns account specific rates (Default).</li></ul>Examples: ["INCENTIVE", "LIST"]
     *
     * @var list<string>
     */
    protected $rateRequestType;
    /**
     * This is the Shipment date. Required for future ship date rates.Default is current date if not indicated or date is in the past.<br>The format is YYYY-MM-DD<br> Example: 2019-09-06
     *
     * @var string
     */
    protected $shipDateStamp;
    /**
     * One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<br>At least one array instance containing the weight for at least one package is required for freight shipments.<br>Single piece requests will have one RequestedPackageLineItem.<br>Multiple piece requests will have multiple RequestedPackageLineItems.<br> Maximum occurrences is 99.
     *
     * @var list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem>
     */
    protected $requestedPackageLineItems;
    /**
     * Conditional<br>Indicates the total number of packages in the shipment. <br>The Maximum number of packages in a rate request is 100.
     *
     * @var int
     */
    protected $totalPackageCount;
    /**
    * Conditional. Identifies the total weight of the shipment being conveyed to FedEx.
     This is only applicable to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
    *
    * @var int
    */
    protected $totalWeight;
    /**
     * Required when using freight related services.
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetail
     */
    protected $freightShipmentDetail;
    /**
     * Specify the special services requested at the shipment level.<br>This has to be specified if rate is data needed for the special services. 
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServices
     */
    protected $freightShipmentSpecialServices;
    /**
     * The descriptive data for the physical location from which the shipment originates.
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShipper
     */
    public function getShipper() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShipper
    {
        return $this->shipper;
    }
    /**
     * The descriptive data for the physical location from which the shipment originates.
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShipper $shipper
     *
     * @return self
     */
    public function setShipper(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShipper $shipper) : self
    {
        $this->initialized['shipper'] = true;
        $this->shipper = $shipper;
        return $this;
    }
    /**
     * Specifies the recipient details.
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRecipient
     */
    public function getRecipient() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRecipient
    {
        return $this->recipient;
    }
    /**
     * Specifies the recipient details.
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRecipient $recipient
     *
     * @return self
     */
    public function setRecipient(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRecipient $recipient) : self
    {
        $this->initialized['recipient'] = true;
        $this->recipient = $recipient;
        return $this;
    }
    /**
     * The FedEx service type for the shipment. The results will be filtered by the serviceType value indicated.  If no serviceType is indicated then all the applicable services and corresponding rates will be returned.Allowed service types are FEDEX_FREIGHT_PRIORITY and FEDEX_FREIGHT_ECONOMY.
     *
     * @return string
     */
    public function getServiceType() : string
    {
        return $this->serviceType;
    }
    /**
     * The FedEx service type for the shipment. The results will be filtered by the serviceType value indicated.  If no serviceType is indicated then all the applicable services and corresponding rates will be returned.Allowed service types are FEDEX_FREIGHT_PRIORITY and FEDEX_FREIGHT_ECONOMY.
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType) : self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * Indicates the currency the caller requests to have used in all returned monetary values (when a choice is possible).  Used in conjunction with the rateRequestType data element.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'> Click here to see Currency Codes</a>
     *
     * @return string
     */
    public function getPreferredCurrency() : string
    {
        return $this->preferredCurrency;
    }
    /**
     * Indicates the currency the caller requests to have used in all returned monetary values (when a choice is possible).  Used in conjunction with the rateRequestType data element.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'> Click here to see Currency Codes</a>
     *
     * @param string $preferredCurrency
     *
     * @return self
     */
    public function setPreferredCurrency(string $preferredCurrency) : self
    {
        $this->initialized['preferredCurrency'] = true;
        $this->preferredCurrency = $preferredCurrency;
        return $this;
    }
    /**
     * Indicate the payment details specifying the method and means of payment to FedEx for providing shipping services.
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPayment
     */
    public function getShippingChargesPayment() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPayment
    {
        return $this->shippingChargesPayment;
    }
    /**
     * Indicate the payment details specifying the method and means of payment to FedEx for providing shipping services.
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPayment $shippingChargesPayment
     *
     * @return self
     */
    public function setShippingChargesPayment(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPayment $shippingChargesPayment) : self
    {
        $this->initialized['shippingChargesPayment'] = true;
        $this->shippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    /**
     * Indicate the type of rates to be returned. The account specific rates are returned by default if the account number is specified in the request.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li><li>ACCOUNT - Returns account specific rates (Default).</li></ul>Examples: ["INCENTIVE", "LIST"]
     *
     * @return list<string>
     */
    public function getRateRequestType() : array
    {
        return $this->rateRequestType;
    }
    /**
     * Indicate the type of rates to be returned. The account specific rates are returned by default if the account number is specified in the request.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li><li>ACCOUNT - Returns account specific rates (Default).</li></ul>Examples: ["INCENTIVE", "LIST"]
     *
     * @param list<string> $rateRequestType
     *
     * @return self
     */
    public function setRateRequestType(array $rateRequestType) : self
    {
        $this->initialized['rateRequestType'] = true;
        $this->rateRequestType = $rateRequestType;
        return $this;
    }
    /**
     * This is the Shipment date. Required for future ship date rates.Default is current date if not indicated or date is in the past.<br>The format is YYYY-MM-DD<br> Example: 2019-09-06
     *
     * @return string
     */
    public function getShipDateStamp() : string
    {
        return $this->shipDateStamp;
    }
    /**
     * This is the Shipment date. Required for future ship date rates.Default is current date if not indicated or date is in the past.<br>The format is YYYY-MM-DD<br> Example: 2019-09-06
     *
     * @param string $shipDateStamp
     *
     * @return self
     */
    public function setShipDateStamp(string $shipDateStamp) : self
    {
        $this->initialized['shipDateStamp'] = true;
        $this->shipDateStamp = $shipDateStamp;
        return $this;
    }
    /**
     * One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<br>At least one array instance containing the weight for at least one package is required for freight shipments.<br>Single piece requests will have one RequestedPackageLineItem.<br>Multiple piece requests will have multiple RequestedPackageLineItems.<br> Maximum occurrences is 99.
     *
     * @return list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem>
     */
    public function getRequestedPackageLineItems() : array
    {
        return $this->requestedPackageLineItems;
    }
    /**
     * One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<br>At least one array instance containing the weight for at least one package is required for freight shipments.<br>Single piece requests will have one RequestedPackageLineItem.<br>Multiple piece requests will have multiple RequestedPackageLineItems.<br> Maximum occurrences is 99.
     *
     * @param list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem> $requestedPackageLineItems
     *
     * @return self
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems) : self
    {
        $this->initialized['requestedPackageLineItems'] = true;
        $this->requestedPackageLineItems = $requestedPackageLineItems;
        return $this;
    }
    /**
     * Conditional<br>Indicates the total number of packages in the shipment. <br>The Maximum number of packages in a rate request is 100.
     *
     * @return int
     */
    public function getTotalPackageCount() : int
    {
        return $this->totalPackageCount;
    }
    /**
     * Conditional<br>Indicates the total number of packages in the shipment. <br>The Maximum number of packages in a rate request is 100.
     *
     * @param int $totalPackageCount
     *
     * @return self
     */
    public function setTotalPackageCount(int $totalPackageCount) : self
    {
        $this->initialized['totalPackageCount'] = true;
        $this->totalPackageCount = $totalPackageCount;
        return $this;
    }
    /**
    * Conditional. Identifies the total weight of the shipment being conveyed to FedEx.
     This is only applicable to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
    *
    * @return int
    */
    public function getTotalWeight() : int
    {
        return $this->totalWeight;
    }
    /**
    * Conditional. Identifies the total weight of the shipment being conveyed to FedEx.
     This is only applicable to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
    *
    * @param int $totalWeight
    *
    * @return self
    */
    public function setTotalWeight(int $totalWeight) : self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * Required when using freight related services.
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetail
     */
    public function getFreightShipmentDetail() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetail
    {
        return $this->freightShipmentDetail;
    }
    /**
     * Required when using freight related services.
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetail $freightShipmentDetail
     *
     * @return self
     */
    public function setFreightShipmentDetail(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetail $freightShipmentDetail) : self
    {
        $this->initialized['freightShipmentDetail'] = true;
        $this->freightShipmentDetail = $freightShipmentDetail;
        return $this;
    }
    /**
     * Specify the special services requested at the shipment level.<br>This has to be specified if rate is data needed for the special services. 
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServices
     */
    public function getFreightShipmentSpecialServices() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServices
    {
        return $this->freightShipmentSpecialServices;
    }
    /**
     * Specify the special services requested at the shipment level.<br>This has to be specified if rate is data needed for the special services. 
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServices $freightShipmentSpecialServices
     *
     * @return self
     */
    public function setFreightShipmentSpecialServices(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServices $freightShipmentSpecialServices) : self
    {
        $this->initialized['freightShipmentSpecialServices'] = true;
        $this->freightShipmentSpecialServices = $freightShipmentSpecialServices;
        return $this;
    }
}
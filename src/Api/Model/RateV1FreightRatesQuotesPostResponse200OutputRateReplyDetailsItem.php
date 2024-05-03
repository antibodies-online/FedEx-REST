<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItem extends \ArrayObject
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
     * Service code associated with this particular rate. <br> For Ground this will be a direct copy of the service specified in the request.  For domestic Express, the service may have been bumped, so it may not match the value specified on the request.  For International Express the service may be bumped and not mapped.Allowed values are FEDEX_FREIGHT_PRIORITY and FEDEX_FREIGHT_ECONOMY 
     *
     * @var string
     */
    protected $serviceType;
    /**
     * The translated service name associated with service type given. <br> Example: FedEx Freight Economy
     *
     * @var string
     */
    protected $serviceName;
    /**
     * Packaging type associated with this particular rate.  For Ground will always be YOUR_PACKAGING.  For domestic Express, the packaging may have been bumped so it may not match the value specified on the request.  For International Express the packaging may be bumped and not mapped.
     *
     * @var string
     */
    protected $packagingType;
    /**
     * Messages concerning the ability to provide an accurate delivery commitment on an International commit quote.  These could be messages providing information about why a commitment could not be returned or a successful message such as REQUEST_COMPLETED
     *
     * @var list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCustomerMessagesItem>
     */
    protected $customerMessages;
    /**
     * This object provides the shipment and package rating data in a rate request reply.
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetails
     */
    protected $ratedShipmentDetails;
    /**
     * Indicates the Freight origin and destination city center information and total distance between origin and destination city centers.
     *
     * @var list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItem>
     */
    protected $freightTransitLocationDetail;
    /**
     * Indicate the Operational Details.
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail
     */
    protected $operationalDetail;
    /**
     * Indicates the signature Option for this service. <br> Example: SERVICE_DEFAULT
     *
     * @var string
     */
    protected $signatureOptionType;
    /**
     * Indicates the provides the Service Description details.
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemServiceDescription
     */
    protected $serviceDescription;
    /**
     * These are Broker Detail for the rate quote.
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetail
     */
    protected $brokerDetail;
    /**
     * Specifies the delivery commitment details date/time.
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommit
     */
    protected $commit;
    /**
     * Service code associated with this particular rate. <br> For Ground this will be a direct copy of the service specified in the request.  For domestic Express, the service may have been bumped, so it may not match the value specified on the request.  For International Express the service may be bumped and not mapped.Allowed values are FEDEX_FREIGHT_PRIORITY and FEDEX_FREIGHT_ECONOMY 
     *
     * @return string
     */
    public function getServiceType() : string
    {
        return $this->serviceType;
    }
    /**
     * Service code associated with this particular rate. <br> For Ground this will be a direct copy of the service specified in the request.  For domestic Express, the service may have been bumped, so it may not match the value specified on the request.  For International Express the service may be bumped and not mapped.Allowed values are FEDEX_FREIGHT_PRIORITY and FEDEX_FREIGHT_ECONOMY 
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
     * The translated service name associated with service type given. <br> Example: FedEx Freight Economy
     *
     * @return string
     */
    public function getServiceName() : string
    {
        return $this->serviceName;
    }
    /**
     * The translated service name associated with service type given. <br> Example: FedEx Freight Economy
     *
     * @param string $serviceName
     *
     * @return self
     */
    public function setServiceName(string $serviceName) : self
    {
        $this->initialized['serviceName'] = true;
        $this->serviceName = $serviceName;
        return $this;
    }
    /**
     * Packaging type associated with this particular rate.  For Ground will always be YOUR_PACKAGING.  For domestic Express, the packaging may have been bumped so it may not match the value specified on the request.  For International Express the packaging may be bumped and not mapped.
     *
     * @return string
     */
    public function getPackagingType() : string
    {
        return $this->packagingType;
    }
    /**
     * Packaging type associated with this particular rate.  For Ground will always be YOUR_PACKAGING.  For domestic Express, the packaging may have been bumped so it may not match the value specified on the request.  For International Express the packaging may be bumped and not mapped.
     *
     * @param string $packagingType
     *
     * @return self
     */
    public function setPackagingType(string $packagingType) : self
    {
        $this->initialized['packagingType'] = true;
        $this->packagingType = $packagingType;
        return $this;
    }
    /**
     * Messages concerning the ability to provide an accurate delivery commitment on an International commit quote.  These could be messages providing information about why a commitment could not be returned or a successful message such as REQUEST_COMPLETED
     *
     * @return list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCustomerMessagesItem>
     */
    public function getCustomerMessages() : array
    {
        return $this->customerMessages;
    }
    /**
     * Messages concerning the ability to provide an accurate delivery commitment on an International commit quote.  These could be messages providing information about why a commitment could not be returned or a successful message such as REQUEST_COMPLETED
     *
     * @param list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCustomerMessagesItem> $customerMessages
     *
     * @return self
     */
    public function setCustomerMessages(array $customerMessages) : self
    {
        $this->initialized['customerMessages'] = true;
        $this->customerMessages = $customerMessages;
        return $this;
    }
    /**
     * This object provides the shipment and package rating data in a rate request reply.
     *
     * @return RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetails
     */
    public function getRatedShipmentDetails() : RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetails
    {
        return $this->ratedShipmentDetails;
    }
    /**
     * This object provides the shipment and package rating data in a rate request reply.
     *
     * @param RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetails $ratedShipmentDetails
     *
     * @return self
     */
    public function setRatedShipmentDetails(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetails $ratedShipmentDetails) : self
    {
        $this->initialized['ratedShipmentDetails'] = true;
        $this->ratedShipmentDetails = $ratedShipmentDetails;
        return $this;
    }
    /**
     * Indicates the Freight origin and destination city center information and total distance between origin and destination city centers.
     *
     * @return list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItem>
     */
    public function getFreightTransitLocationDetail() : array
    {
        return $this->freightTransitLocationDetail;
    }
    /**
     * Indicates the Freight origin and destination city center information and total distance between origin and destination city centers.
     *
     * @param list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItem> $freightTransitLocationDetail
     *
     * @return self
     */
    public function setFreightTransitLocationDetail(array $freightTransitLocationDetail) : self
    {
        $this->initialized['freightTransitLocationDetail'] = true;
        $this->freightTransitLocationDetail = $freightTransitLocationDetail;
        return $this;
    }
    /**
     * Indicate the Operational Details.
     *
     * @return RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail
     */
    public function getOperationalDetail() : RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail
    {
        return $this->operationalDetail;
    }
    /**
     * Indicate the Operational Details.
     *
     * @param RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail $operationalDetail
     *
     * @return self
     */
    public function setOperationalDetail(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail $operationalDetail) : self
    {
        $this->initialized['operationalDetail'] = true;
        $this->operationalDetail = $operationalDetail;
        return $this;
    }
    /**
     * Indicates the signature Option for this service. <br> Example: SERVICE_DEFAULT
     *
     * @return string
     */
    public function getSignatureOptionType() : string
    {
        return $this->signatureOptionType;
    }
    /**
     * Indicates the signature Option for this service. <br> Example: SERVICE_DEFAULT
     *
     * @param string $signatureOptionType
     *
     * @return self
     */
    public function setSignatureOptionType(string $signatureOptionType) : self
    {
        $this->initialized['signatureOptionType'] = true;
        $this->signatureOptionType = $signatureOptionType;
        return $this;
    }
    /**
     * Indicates the provides the Service Description details.
     *
     * @return RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemServiceDescription
     */
    public function getServiceDescription() : RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemServiceDescription
    {
        return $this->serviceDescription;
    }
    /**
     * Indicates the provides the Service Description details.
     *
     * @param RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemServiceDescription $serviceDescription
     *
     * @return self
     */
    public function setServiceDescription(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemServiceDescription $serviceDescription) : self
    {
        $this->initialized['serviceDescription'] = true;
        $this->serviceDescription = $serviceDescription;
        return $this;
    }
    /**
     * These are Broker Detail for the rate quote.
     *
     * @return RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetail
     */
    public function getBrokerDetail() : RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetail
    {
        return $this->brokerDetail;
    }
    /**
     * These are Broker Detail for the rate quote.
     *
     * @param RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetail $brokerDetail
     *
     * @return self
     */
    public function setBrokerDetail(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetail $brokerDetail) : self
    {
        $this->initialized['brokerDetail'] = true;
        $this->brokerDetail = $brokerDetail;
        return $this;
    }
    /**
     * Specifies the delivery commitment details date/time.
     *
     * @return RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommit
     */
    public function getCommit() : RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommit
    {
        return $this->commit;
    }
    /**
     * Specifies the delivery commitment details date/time.
     *
     * @param RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommit $commit
     *
     * @return self
     */
    public function setCommit(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommit $commit) : self
    {
        $this->initialized['commit'] = true;
        $this->commit = $commit;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItem extends \ArrayObject
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
     * This is the service type associated with this rate (i.e. Priority Overnight, Home Delivery, etc.)<br>For Ground/SmartPost this will be a direct copy of the service specified in the request. For domestic Express, the service may have been bumped, so it may not match the value specified on the request. For International Express the service may be bumped and not mapped.<br>Example: FEDEX_GROUND<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @var string
     */
    protected $serviceType;
    /**
     * This is the service name associated with this rate. <br> Example: FedEx Ground
     *
     * @var string
     */
    protected $serviceName;
    /**
     * This is the Packaging type. For Ground/SmartPost,it  will always be YOUR_PACKAGING. For domestic Express, the packaging may have been bumped so it may not match the value specified on the request. For International Express the packaging may be bumped and not mapped.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     *
     * @var string
     */
    protected $packagingType;
    /**
     * These are messages concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be providing information about why a commitment could not be returned or a successful message<br>Example:<br><ul><li>REQUEST_COMPLETED<br>Request completed successfully</li><li>SERVICE.TYPE.INTERNATIONAL.MESSAGE:<br>Rate does not include duties & taxes, clearance entry fees or other import fees. The payor of duties/taxes/fees will be responsible for any applicable Clearance Entry Fees.</li><li>NATIONAL.HOLIDAY.OBSERVED:<br>National Holiday Observed on Ship Date.</li><li>INCONSISTENT.COMMODITY.DESCRIPTION:<br>The description and harmonized code for the specified commodity are not consistent.</li></ul>
     *
     * @var list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCustomerMessagesItem>
     */
    protected $customerMessages;
    /**
     * This object provides the shipment and package rating data in a rate request reply.
     *
     * @var list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItem>
     */
    protected $ratedShipmentDetails;
    /**
     * Indicate the Operational Details.
     *
     * @var RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail
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
     * @var RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemServiceDescription
     */
    protected $serviceDescription;
    /**
     * These are Broker Detail for the rate quote.
     *
     * @var RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetail
     */
    protected $brokerDetail;
    /**
     * Specifies the delivery commitment details date/time.
     *
     * @var RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommit
     */
    protected $commit;
    /**
     * These are supporting detail for applied options identified in a rate quote.
     *
     * @var RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemServiceSubOptionDetail
     */
    protected $serviceSubOptionDetail;
    /**
     * This is the service type associated with this rate (i.e. Priority Overnight, Home Delivery, etc.)<br>For Ground/SmartPost this will be a direct copy of the service specified in the request. For domestic Express, the service may have been bumped, so it may not match the value specified on the request. For International Express the service may be bumped and not mapped.<br>Example: FEDEX_GROUND<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @return string
     */
    public function getServiceType() : string
    {
        return $this->serviceType;
    }
    /**
     * This is the service type associated with this rate (i.e. Priority Overnight, Home Delivery, etc.)<br>For Ground/SmartPost this will be a direct copy of the service specified in the request. For domestic Express, the service may have been bumped, so it may not match the value specified on the request. For International Express the service may be bumped and not mapped.<br>Example: FEDEX_GROUND<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
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
     * This is the service name associated with this rate. <br> Example: FedEx Ground
     *
     * @return string
     */
    public function getServiceName() : string
    {
        return $this->serviceName;
    }
    /**
     * This is the service name associated with this rate. <br> Example: FedEx Ground
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
     * This is the Packaging type. For Ground/SmartPost,it  will always be YOUR_PACKAGING. For domestic Express, the packaging may have been bumped so it may not match the value specified on the request. For International Express the packaging may be bumped and not mapped.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     *
     * @return string
     */
    public function getPackagingType() : string
    {
        return $this->packagingType;
    }
    /**
     * This is the Packaging type. For Ground/SmartPost,it  will always be YOUR_PACKAGING. For domestic Express, the packaging may have been bumped so it may not match the value specified on the request. For International Express the packaging may be bumped and not mapped.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
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
     * These are messages concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be providing information about why a commitment could not be returned or a successful message<br>Example:<br><ul><li>REQUEST_COMPLETED<br>Request completed successfully</li><li>SERVICE.TYPE.INTERNATIONAL.MESSAGE:<br>Rate does not include duties & taxes, clearance entry fees or other import fees. The payor of duties/taxes/fees will be responsible for any applicable Clearance Entry Fees.</li><li>NATIONAL.HOLIDAY.OBSERVED:<br>National Holiday Observed on Ship Date.</li><li>INCONSISTENT.COMMODITY.DESCRIPTION:<br>The description and harmonized code for the specified commodity are not consistent.</li></ul>
     *
     * @return list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCustomerMessagesItem>
     */
    public function getCustomerMessages() : array
    {
        return $this->customerMessages;
    }
    /**
     * These are messages concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be providing information about why a commitment could not be returned or a successful message<br>Example:<br><ul><li>REQUEST_COMPLETED<br>Request completed successfully</li><li>SERVICE.TYPE.INTERNATIONAL.MESSAGE:<br>Rate does not include duties & taxes, clearance entry fees or other import fees. The payor of duties/taxes/fees will be responsible for any applicable Clearance Entry Fees.</li><li>NATIONAL.HOLIDAY.OBSERVED:<br>National Holiday Observed on Ship Date.</li><li>INCONSISTENT.COMMODITY.DESCRIPTION:<br>The description and harmonized code for the specified commodity are not consistent.</li></ul>
     *
     * @param list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCustomerMessagesItem> $customerMessages
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
     * @return list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItem>
     */
    public function getRatedShipmentDetails() : array
    {
        return $this->ratedShipmentDetails;
    }
    /**
     * This object provides the shipment and package rating data in a rate request reply.
     *
     * @param list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItem> $ratedShipmentDetails
     *
     * @return self
     */
    public function setRatedShipmentDetails(array $ratedShipmentDetails) : self
    {
        $this->initialized['ratedShipmentDetails'] = true;
        $this->ratedShipmentDetails = $ratedShipmentDetails;
        return $this;
    }
    /**
     * Indicate the Operational Details.
     *
     * @return RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail
     */
    public function getOperationalDetail() : RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail
    {
        return $this->operationalDetail;
    }
    /**
     * Indicate the Operational Details.
     *
     * @param RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail $operationalDetail
     *
     * @return self
     */
    public function setOperationalDetail(RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail $operationalDetail) : self
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
     * @return RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemServiceDescription
     */
    public function getServiceDescription() : RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemServiceDescription
    {
        return $this->serviceDescription;
    }
    /**
     * Indicates the provides the Service Description details.
     *
     * @param RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemServiceDescription $serviceDescription
     *
     * @return self
     */
    public function setServiceDescription(RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemServiceDescription $serviceDescription) : self
    {
        $this->initialized['serviceDescription'] = true;
        $this->serviceDescription = $serviceDescription;
        return $this;
    }
    /**
     * These are Broker Detail for the rate quote.
     *
     * @return RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetail
     */
    public function getBrokerDetail() : RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetail
    {
        return $this->brokerDetail;
    }
    /**
     * These are Broker Detail for the rate quote.
     *
     * @param RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetail $brokerDetail
     *
     * @return self
     */
    public function setBrokerDetail(RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetail $brokerDetail) : self
    {
        $this->initialized['brokerDetail'] = true;
        $this->brokerDetail = $brokerDetail;
        return $this;
    }
    /**
     * Specifies the delivery commitment details date/time.
     *
     * @return RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommit
     */
    public function getCommit() : RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommit
    {
        return $this->commit;
    }
    /**
     * Specifies the delivery commitment details date/time.
     *
     * @param RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommit $commit
     *
     * @return self
     */
    public function setCommit(RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommit $commit) : self
    {
        $this->initialized['commit'] = true;
        $this->commit = $commit;
        return $this;
    }
    /**
     * These are supporting detail for applied options identified in a rate quote.
     *
     * @return RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemServiceSubOptionDetail
     */
    public function getServiceSubOptionDetail() : RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemServiceSubOptionDetail
    {
        return $this->serviceSubOptionDetail;
    }
    /**
     * These are supporting detail for applied options identified in a rate quote.
     *
     * @param RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemServiceSubOptionDetail $serviceSubOptionDetail
     *
     * @return self
     */
    public function setServiceSubOptionDetail(RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemServiceSubOptionDetail $serviceSubOptionDetail) : self
    {
        $this->initialized['serviceSubOptionDetail'] = true;
        $this->serviceSubOptionDetail = $serviceSubOptionDetail;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetail extends \ArrayObject
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
     * Conditional.<br>Required if BROKER_SELECT_OPTION is specified as a shipment special service type.  A country code must be specified in addition to one of the following address items: postal code, city, or location id.
     *
     * @var list<RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItem>
     */
    protected $brokers;
    /**
     * The Commercial Invoice element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the 'ETDDetail/RequesteDocumentCopies' element.<br> Support consists of a Maximum of 99 commodity line items.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailcommercialInvoice
     */
    protected $commercialInvoice;
    /**
     *  Indicates Freight on value for customs.
     *
     * @var string
     */
    protected $freightOnValue;
    /**
     * These are details about shipment payment. Value payor is optional when paymentType provided as SENDER.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPayment
     */
    protected $dutiesPayment;
    /**
     * Specify the commodity details.
     *
     * @var list<RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailcommoditiesItem>
     */
    protected $commodities;
    /**
     * Conditional.<br>Required if BROKER_SELECT_OPTION is specified as a shipment special service type.  A country code must be specified in addition to one of the following address items: postal code, city, or location id.
     *
     * @return list<RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItem>
     */
    public function getBrokers() : array
    {
        return $this->brokers;
    }
    /**
     * Conditional.<br>Required if BROKER_SELECT_OPTION is specified as a shipment special service type.  A country code must be specified in addition to one of the following address items: postal code, city, or location id.
     *
     * @param list<RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItem> $brokers
     *
     * @return self
     */
    public function setBrokers(array $brokers) : self
    {
        $this->initialized['brokers'] = true;
        $this->brokers = $brokers;
        return $this;
    }
    /**
     * The Commercial Invoice element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the 'ETDDetail/RequesteDocumentCopies' element.<br> Support consists of a Maximum of 99 commodity line items.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailcommercialInvoice
     */
    public function getCommercialInvoice() : RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailcommercialInvoice
    {
        return $this->commercialInvoice;
    }
    /**
     * The Commercial Invoice element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the 'ETDDetail/RequesteDocumentCopies' element.<br> Support consists of a Maximum of 99 commodity line items.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailcommercialInvoice $commercialInvoice
     *
     * @return self
     */
    public function setCommercialInvoice(RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailcommercialInvoice $commercialInvoice) : self
    {
        $this->initialized['commercialInvoice'] = true;
        $this->commercialInvoice = $commercialInvoice;
        return $this;
    }
    /**
     *  Indicates Freight on value for customs.
     *
     * @return string
     */
    public function getFreightOnValue() : string
    {
        return $this->freightOnValue;
    }
    /**
     *  Indicates Freight on value for customs.
     *
     * @param string $freightOnValue
     *
     * @return self
     */
    public function setFreightOnValue(string $freightOnValue) : self
    {
        $this->initialized['freightOnValue'] = true;
        $this->freightOnValue = $freightOnValue;
        return $this;
    }
    /**
     * These are details about shipment payment. Value payor is optional when paymentType provided as SENDER.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPayment
     */
    public function getDutiesPayment() : RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPayment
    {
        return $this->dutiesPayment;
    }
    /**
     * These are details about shipment payment. Value payor is optional when paymentType provided as SENDER.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPayment $dutiesPayment
     *
     * @return self
     */
    public function setDutiesPayment(RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPayment $dutiesPayment) : self
    {
        $this->initialized['dutiesPayment'] = true;
        $this->dutiesPayment = $dutiesPayment;
        return $this;
    }
    /**
     * Specify the commodity details.
     *
     * @return list<RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailcommoditiesItem>
     */
    public function getCommodities() : array
    {
        return $this->commodities;
    }
    /**
     * Specify the commodity details.
     *
     * @param list<RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailcommoditiesItem> $commodities
     *
     * @return self
     */
    public function setCommodities(array $commodities) : self
    {
        $this->initialized['commodities'] = true;
        $this->commodities = $commodities;
        return $this;
    }
}
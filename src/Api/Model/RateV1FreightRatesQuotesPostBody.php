<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBody extends \ArrayObject
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
     * This is the Account number details.<br><i>Note:<ul><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @var RateV1FreightRatesQuotesPostBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * These are various parameters you can provide for filtering and sorting  capability in the response, such as transit time and commit data, rate sort order etc.
     *
     * @var RateV1FreightRatesQuotesPostBodyRateRequestControlParameters
     */
    protected $rateRequestControlParameters;
    /**
     * This contains shipment data describing the shipment for which a  freight rate quote (or rate-shopping comparison) is desired.
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipment
     */
    protected $freightRequestedShipment;
    /**
     * This is the Account number details.<br><i>Note:<ul><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @return RateV1FreightRatesQuotesPostBodyAccountNumber
     */
    public function getAccountNumber() : RateV1FreightRatesQuotesPostBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is the Account number details.<br><i>Note:<ul><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @param RateV1FreightRatesQuotesPostBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(RateV1FreightRatesQuotesPostBodyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * These are various parameters you can provide for filtering and sorting  capability in the response, such as transit time and commit data, rate sort order etc.
     *
     * @return RateV1FreightRatesQuotesPostBodyRateRequestControlParameters
     */
    public function getRateRequestControlParameters() : RateV1FreightRatesQuotesPostBodyRateRequestControlParameters
    {
        return $this->rateRequestControlParameters;
    }
    /**
     * These are various parameters you can provide for filtering and sorting  capability in the response, such as transit time and commit data, rate sort order etc.
     *
     * @param RateV1FreightRatesQuotesPostBodyRateRequestControlParameters $rateRequestControlParameters
     *
     * @return self
     */
    public function setRateRequestControlParameters(RateV1FreightRatesQuotesPostBodyRateRequestControlParameters $rateRequestControlParameters) : self
    {
        $this->initialized['rateRequestControlParameters'] = true;
        $this->rateRequestControlParameters = $rateRequestControlParameters;
        return $this;
    }
    /**
     * This contains shipment data describing the shipment for which a  freight rate quote (or rate-shopping comparison) is desired.
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipment
     */
    public function getFreightRequestedShipment() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipment
    {
        return $this->freightRequestedShipment;
    }
    /**
     * This contains shipment data describing the shipment for which a  freight rate quote (or rate-shopping comparison) is desired.
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipment $freightRequestedShipment
     *
     * @return self
     */
    public function setFreightRequestedShipment(RateV1FreightRatesQuotesPostBodyFreightRequestedShipment $freightRequestedShipment) : self
    {
        $this->initialized['freightRequestedShipment'] = true;
        $this->freightRequestedShipment = $freightRequestedShipment;
        return $this;
    }
}
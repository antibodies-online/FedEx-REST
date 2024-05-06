<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBody extends \ArrayObject
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
     * This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @var RateV1RatesQuotesPostBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * Specify the return transit times, services needed on rate failure, choice of variable option and order to sort rate options to filter and sort the expected response.
     *
     * @var RateV1RatesQuotesPostBodyRateRequestControlParameters
     */
    protected $rateRequestControlParameters;
    /**
     * This is shipment data for which a rate quote (or rate-shipping comparison) is requested.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipment
     */
    protected $requestedShipment;
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements.<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * @var list<string>
     */
    protected $carrierCodes;
    /**
     * This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @return RateV1RatesQuotesPostBodyAccountNumber
     */
    public function getAccountNumber() : RateV1RatesQuotesPostBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @param RateV1RatesQuotesPostBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(RateV1RatesQuotesPostBodyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Specify the return transit times, services needed on rate failure, choice of variable option and order to sort rate options to filter and sort the expected response.
     *
     * @return RateV1RatesQuotesPostBodyRateRequestControlParameters
     */
    public function getRateRequestControlParameters() : RateV1RatesQuotesPostBodyRateRequestControlParameters
    {
        return $this->rateRequestControlParameters;
    }
    /**
     * Specify the return transit times, services needed on rate failure, choice of variable option and order to sort rate options to filter and sort the expected response.
     *
     * @param RateV1RatesQuotesPostBodyRateRequestControlParameters $rateRequestControlParameters
     *
     * @return self
     */
    public function setRateRequestControlParameters(RateV1RatesQuotesPostBodyRateRequestControlParameters $rateRequestControlParameters) : self
    {
        $this->initialized['rateRequestControlParameters'] = true;
        $this->rateRequestControlParameters = $rateRequestControlParameters;
        return $this;
    }
    /**
     * This is shipment data for which a rate quote (or rate-shipping comparison) is requested.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipment
     */
    public function getRequestedShipment() : RateV1RatesQuotesPostBodyRequestedShipment
    {
        return $this->requestedShipment;
    }
    /**
     * This is shipment data for which a rate quote (or rate-shipping comparison) is requested.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipment $requestedShipment
     *
     * @return self
     */
    public function setRequestedShipment(RateV1RatesQuotesPostBodyRequestedShipment $requestedShipment) : self
    {
        $this->initialized['requestedShipment'] = true;
        $this->requestedShipment = $requestedShipment;
        return $this;
    }
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements.<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * @return list<string>
     */
    public function getCarrierCodes() : array
    {
        return $this->carrierCodes;
    }
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements.<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * @param list<string> $carrierCodes
     *
     * @return self
     */
    public function setCarrierCodes(array $carrierCodes) : self
    {
        $this->initialized['carrierCodes'] = true;
        $this->carrierCodes = $carrierCodes;
        return $this;
    }
}
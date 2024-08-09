<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBody extends \ArrayObject
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
     * The shipment details for which special service availability is requested.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipment
     */
    protected $requestedShipment;
    /**
     * Account number associated with a Payor object. Example: Your account number
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * Optionally supplied to restrict the results to services for a specific carrier. Valid values are: FDXE, FDXG, FXSP. <br> Example: ["FDXG", "FDXE"]
     *
     * @var list<string>
     */
    protected $carrierCodes;
    /**
     * The shipment details for which special service availability is requested.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipment
     */
    public function getRequestedShipment(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipment
    {
        return $this->requestedShipment;
    }
    /**
     * The shipment details for which special service availability is requested.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipment $requestedShipment
     *
     * @return self
     */
    public function setRequestedShipment(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipment $requestedShipment): self
    {
        $this->initialized['requestedShipment'] = true;
        $this->requestedShipment = $requestedShipment;
        return $this;
    }
    /**
     * Account number associated with a Payor object. Example: Your account number
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyAccountNumber
     */
    public function getAccountNumber(): AvailabilityV1SpecialserviceoptionsPostBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * Account number associated with a Payor object. Example: Your account number
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(AvailabilityV1SpecialserviceoptionsPostBodyAccountNumber $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Optionally supplied to restrict the results to services for a specific carrier. Valid values are: FDXE, FDXG, FXSP. <br> Example: ["FDXG", "FDXE"]
     *
     * @return list<string>
     */
    public function getCarrierCodes(): array
    {
        return $this->carrierCodes;
    }
    /**
     * Optionally supplied to restrict the results to services for a specific carrier. Valid values are: FDXE, FDXG, FXSP. <br> Example: ["FDXG", "FDXE"]
     *
     * @param list<string> $carrierCodes
     *
     * @return self
     */
    public function setCarrierCodes(array $carrierCodes): self
    {
        $this->initialized['carrierCodes'] = true;
        $this->carrierCodes = $carrierCodes;
        return $this;
    }
}
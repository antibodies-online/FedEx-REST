<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1PackageandserviceoptionsPostBody extends \ArrayObject
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
     * The descriptive data for the requested shipment.
     *
     * @var mixed
     */
    protected $requestedShipment;
    /**
     * "Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>"
     *
     * @var list<string>
     */
    protected $carrierCodes;
    /**
     * This is a Payor account number associated with the shipment. Account number is required, for SmartPost shipments (i.e. Carrier code: FXSP)
     *
     * @var AvailabilityV1PackageandserviceoptionsPostBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * This is system measurement type, such as Imperial or Metric.
     *
     * @var string
     */
    protected $systemOfMeasureType;
    /**
     * The descriptive data for the requested shipment.
     *
     * @return mixed
     */
    public function getRequestedShipment()
    {
        return $this->requestedShipment;
    }
    /**
     * The descriptive data for the requested shipment.
     *
     * @param mixed $requestedShipment
     *
     * @return self
     */
    public function setRequestedShipment($requestedShipment) : self
    {
        $this->initialized['requestedShipment'] = true;
        $this->requestedShipment = $requestedShipment;
        return $this;
    }
    /**
     * "Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>"
     *
     * @return list<string>
     */
    public function getCarrierCodes() : array
    {
        return $this->carrierCodes;
    }
    /**
     * "Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>"
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
    /**
     * This is a Payor account number associated with the shipment. Account number is required, for SmartPost shipments (i.e. Carrier code: FXSP)
     *
     * @return AvailabilityV1PackageandserviceoptionsPostBodyAccountNumber
     */
    public function getAccountNumber() : AvailabilityV1PackageandserviceoptionsPostBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is a Payor account number associated with the shipment. Account number is required, for SmartPost shipments (i.e. Carrier code: FXSP)
     *
     * @param AvailabilityV1PackageandserviceoptionsPostBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(AvailabilityV1PackageandserviceoptionsPostBodyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This is system measurement type, such as Imperial or Metric.
     *
     * @return string
     */
    public function getSystemOfMeasureType() : string
    {
        return $this->systemOfMeasureType;
    }
    /**
     * This is system measurement type, such as Imperial or Metric.
     *
     * @param string $systemOfMeasureType
     *
     * @return self
     */
    public function setSystemOfMeasureType(string $systemOfMeasureType) : self
    {
        $this->initialized['systemOfMeasureType'] = true;
        $this->systemOfMeasureType = $systemOfMeasureType;
        return $this;
    }
}
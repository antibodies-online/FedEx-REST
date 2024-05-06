<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBody extends \ArrayObject
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
     * Provide shipment data details for which a transit time is desired.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipment
     */
    protected $requestedShipment;
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * @var list<string>
     */
    protected $carrierCodes;
    /**
     * Provide shipment data details for which a transit time is desired.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipment
     */
    public function getRequestedShipment() : AvailabilityV1TransittimesPostBodyRequestedShipment
    {
        return $this->requestedShipment;
    }
    /**
     * Provide shipment data details for which a transit time is desired.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipment $requestedShipment
     *
     * @return self
     */
    public function setRequestedShipment(AvailabilityV1TransittimesPostBodyRequestedShipment $requestedShipment) : self
    {
        $this->initialized['requestedShipment'] = true;
        $this->requestedShipment = $requestedShipment;
        return $this;
    }
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * @return list<string>
     */
    public function getCarrierCodes() : array
    {
        return $this->carrierCodes;
    }
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
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
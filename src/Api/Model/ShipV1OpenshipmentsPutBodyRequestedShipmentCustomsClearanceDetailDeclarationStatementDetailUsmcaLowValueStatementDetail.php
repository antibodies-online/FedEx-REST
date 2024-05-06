<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail extends \ArrayObject
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
     * Specify the country Of Origin of Low Value Document for Customs declaration.
     *
     * @var bool
     */
    protected $countryOfOriginLowValueDocumentRequested;
    /**
     * Specify the shipper role for Customs declaration.
     *
     * @var string
     */
    protected $customsRole;
    /**
     * Specify the country Of Origin of Low Value Document for Customs declaration.
     *
     * @return bool
     */
    public function getCountryOfOriginLowValueDocumentRequested() : bool
    {
        return $this->countryOfOriginLowValueDocumentRequested;
    }
    /**
     * Specify the country Of Origin of Low Value Document for Customs declaration.
     *
     * @param bool $countryOfOriginLowValueDocumentRequested
     *
     * @return self
     */
    public function setCountryOfOriginLowValueDocumentRequested(bool $countryOfOriginLowValueDocumentRequested) : self
    {
        $this->initialized['countryOfOriginLowValueDocumentRequested'] = true;
        $this->countryOfOriginLowValueDocumentRequested = $countryOfOriginLowValueDocumentRequested;
        return $this;
    }
    /**
     * Specify the shipper role for Customs declaration.
     *
     * @return string
     */
    public function getCustomsRole() : string
    {
        return $this->customsRole;
    }
    /**
     * Specify the shipper role for Customs declaration.
     *
     * @param string $customsRole
     *
     * @return self
     */
    public function setCustomsRole(string $customsRole) : self
    {
        $this->initialized['customsRole'] = true;
        $this->customsRole = $customsRole;
        return $this;
    }
}
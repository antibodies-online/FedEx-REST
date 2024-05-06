<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailExportDetailDestinationControlDetail extends \ArrayObject
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
     * Specify End User name. Its is required if StatementTypes is entered as DEPARTMENT_OF_STATE. <br>Example: John Wick
     *
     * @var string
     */
    protected $endUser;
    /**
     * Specify appropriate destination control statement type(s), Also make sure to specify destination country and end user.
     *
     * @var string
     */
    protected $statementTypes;
    /**
     * Specify DCS shipment destination country. You may enter up to four country codes in this element. Up to 11 alphanumeric characters are allowed.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     *
     * @var list<string>
     */
    protected $destinationCountries;
    /**
     * Specify End User name. Its is required if StatementTypes is entered as DEPARTMENT_OF_STATE. <br>Example: John Wick
     *
     * @return string
     */
    public function getEndUser() : string
    {
        return $this->endUser;
    }
    /**
     * Specify End User name. Its is required if StatementTypes is entered as DEPARTMENT_OF_STATE. <br>Example: John Wick
     *
     * @param string $endUser
     *
     * @return self
     */
    public function setEndUser(string $endUser) : self
    {
        $this->initialized['endUser'] = true;
        $this->endUser = $endUser;
        return $this;
    }
    /**
     * Specify appropriate destination control statement type(s), Also make sure to specify destination country and end user.
     *
     * @return string
     */
    public function getStatementTypes() : string
    {
        return $this->statementTypes;
    }
    /**
     * Specify appropriate destination control statement type(s), Also make sure to specify destination country and end user.
     *
     * @param string $statementTypes
     *
     * @return self
     */
    public function setStatementTypes(string $statementTypes) : self
    {
        $this->initialized['statementTypes'] = true;
        $this->statementTypes = $statementTypes;
        return $this;
    }
    /**
     * Specify DCS shipment destination country. You may enter up to four country codes in this element. Up to 11 alphanumeric characters are allowed.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     *
     * @return list<string>
     */
    public function getDestinationCountries() : array
    {
        return $this->destinationCountries;
    }
    /**
     * Specify DCS shipment destination country. You may enter up to four country codes in this element. Up to 11 alphanumeric characters are allowed.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     *
     * @param list<string> $destinationCountries
     *
     * @return self
     */
    public function setDestinationCountries(array $destinationCountries) : self
    {
        $this->initialized['destinationCountries'] = true;
        $this->destinationCountries = $destinationCountries;
        return $this;
    }
}
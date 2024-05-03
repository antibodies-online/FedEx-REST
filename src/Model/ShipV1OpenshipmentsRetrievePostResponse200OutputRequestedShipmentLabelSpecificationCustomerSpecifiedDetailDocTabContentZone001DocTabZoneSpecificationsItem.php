<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentZone001DocTabZoneSpecificationsItem extends \ArrayObject
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
     * It is a non-negative integer that represents the portion of doc-tab in a label.<br>Example: 1.
     *
     * @var int
     */
    protected $zoneNumber;
    /**
     * Indicates the parameter name in the header for the doc tab zone. The maximum charater limit is 7.<br>Example:  WHT.
     *
     * @var string
     */
    protected $header;
    /**
     * Indicate the path request/reply element to be printed on doc tab.<br>Example: <ul><li> REQUEST/PACKAGE/weight/Value</li><li> REQUEST/PACKAGE/weight/Value</li><li> REQUEST/PACKAGE/InsuredValue/Amount</li><li> REQUEST/SHIPMENT/SpecialServicesRequested/CodDetail/CodCollectionAmount/Amount</li><li>REQUEST/SHIPMENT/Shipper/Address/StreetLines[1]CLIENT/MeterNumber</li><li> TRANSACTION/CustomerTransactionId</li><li> REQUEST/SHIPMENT/TotalWeight/Value</li><li> REQUEST/SHIPMENT/ShipTimestamp</li><li> REQUEST/SHIPMENT/Recipient/Contact/PersonName</li><li> REPLY/SHIPMENT/OperationalDetail/DeliveryDate</li><li>  REPLY/SHIPMENT/RATES/ACTUAL/totalBaseCharge/Amount</li><li> REPLY/SHIPMENT/RATES/ACTUAL/totalFreightDiscounts/Amount</li><li>  REPLY/SHIPMENT/RATES/ACTUAL/totalSurcharges/Amount</li><li> REPLY/SHIPMENT/RATES/ACTUAL/totalNetCharge/Amount</li><li> REPLY/SHIPMENT/RATES/PAYOR_ACCOUNT_PACKAGE/totalSurcharges/Amount</li></ul>.
     *
     * @var string
     */
    protected $dataField;
    /**
     * Indicates the actual data to be printed in the label<br>.
     *
     * @var string
     */
    protected $literalValue;
    /**
     * Indicates the justification format for the string.
     *
     * @var string
     */
    protected $justification;

    /**
     * It is a non-negative integer that represents the portion of doc-tab in a label.<br>Example: 1.
     */
    public function getZoneNumber(): int
    {
        return $this->zoneNumber;
    }

    /**
     * It is a non-negative integer that represents the portion of doc-tab in a label.<br>Example: 1.
     */
    public function setZoneNumber(int $zoneNumber): self
    {
        $this->initialized['zoneNumber'] = true;
        $this->zoneNumber = $zoneNumber;

        return $this;
    }

    /**
     * Indicates the parameter name in the header for the doc tab zone. The maximum charater limit is 7.<br>Example:  WHT.
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * Indicates the parameter name in the header for the doc tab zone. The maximum charater limit is 7.<br>Example:  WHT.
     */
    public function setHeader(string $header): self
    {
        $this->initialized['header'] = true;
        $this->header = $header;

        return $this;
    }

    /**
     * Indicate the path request/reply element to be printed on doc tab.<br>Example: <ul><li> REQUEST/PACKAGE/weight/Value</li><li> REQUEST/PACKAGE/weight/Value</li><li> REQUEST/PACKAGE/InsuredValue/Amount</li><li> REQUEST/SHIPMENT/SpecialServicesRequested/CodDetail/CodCollectionAmount/Amount</li><li>REQUEST/SHIPMENT/Shipper/Address/StreetLines[1]CLIENT/MeterNumber</li><li> TRANSACTION/CustomerTransactionId</li><li> REQUEST/SHIPMENT/TotalWeight/Value</li><li> REQUEST/SHIPMENT/ShipTimestamp</li><li> REQUEST/SHIPMENT/Recipient/Contact/PersonName</li><li> REPLY/SHIPMENT/OperationalDetail/DeliveryDate</li><li>  REPLY/SHIPMENT/RATES/ACTUAL/totalBaseCharge/Amount</li><li> REPLY/SHIPMENT/RATES/ACTUAL/totalFreightDiscounts/Amount</li><li>  REPLY/SHIPMENT/RATES/ACTUAL/totalSurcharges/Amount</li><li> REPLY/SHIPMENT/RATES/ACTUAL/totalNetCharge/Amount</li><li> REPLY/SHIPMENT/RATES/PAYOR_ACCOUNT_PACKAGE/totalSurcharges/Amount</li></ul>.
     */
    public function getDataField(): string
    {
        return $this->dataField;
    }

    /**
     * Indicate the path request/reply element to be printed on doc tab.<br>Example: <ul><li> REQUEST/PACKAGE/weight/Value</li><li> REQUEST/PACKAGE/weight/Value</li><li> REQUEST/PACKAGE/InsuredValue/Amount</li><li> REQUEST/SHIPMENT/SpecialServicesRequested/CodDetail/CodCollectionAmount/Amount</li><li>REQUEST/SHIPMENT/Shipper/Address/StreetLines[1]CLIENT/MeterNumber</li><li> TRANSACTION/CustomerTransactionId</li><li> REQUEST/SHIPMENT/TotalWeight/Value</li><li> REQUEST/SHIPMENT/ShipTimestamp</li><li> REQUEST/SHIPMENT/Recipient/Contact/PersonName</li><li> REPLY/SHIPMENT/OperationalDetail/DeliveryDate</li><li>  REPLY/SHIPMENT/RATES/ACTUAL/totalBaseCharge/Amount</li><li> REPLY/SHIPMENT/RATES/ACTUAL/totalFreightDiscounts/Amount</li><li>  REPLY/SHIPMENT/RATES/ACTUAL/totalSurcharges/Amount</li><li> REPLY/SHIPMENT/RATES/ACTUAL/totalNetCharge/Amount</li><li> REPLY/SHIPMENT/RATES/PAYOR_ACCOUNT_PACKAGE/totalSurcharges/Amount</li></ul>.
     */
    public function setDataField(string $dataField): self
    {
        $this->initialized['dataField'] = true;
        $this->dataField = $dataField;

        return $this;
    }

    /**
     * Indicates the actual data to be printed in the label<br>.
     */
    public function getLiteralValue(): string
    {
        return $this->literalValue;
    }

    /**
     * Indicates the actual data to be printed in the label<br>.
     */
    public function setLiteralValue(string $literalValue): self
    {
        $this->initialized['literalValue'] = true;
        $this->literalValue = $literalValue;

        return $this;
    }

    /**
     * Indicates the justification format for the string.
     */
    public function getJustification(): string
    {
        return $this->justification;
    }

    /**
     * Indicates the justification format for the string.
     */
    public function setJustification(string $justification): self
    {
        $this->initialized['justification'] = true;
        $this->justification = $justification;

        return $this;
    }
}

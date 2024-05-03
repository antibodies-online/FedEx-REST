<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetail extends \ArrayObject
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
     * This is human-readable astra handling text.
     *
     * @var string
     */
    protected $astraHandlingText;
    /**
     * These are package barcode details. Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
     *
     * @var ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodes
     */
    protected $barcodes;
    /**
     * These are operational instruction such as Ground Information printed on a given area of the label, one-dimensional barcode with only x-axis that contains the details of the shipment in encrypted form, COD Return operational instructions data such as COD amount, SECURED or UNSECURED.
     *
     * @var list<ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailOperationalInstructionsItem>
     */
    protected $operationalInstructions;

    /**
     * This is human-readable astra handling text.
     */
    public function getAstraHandlingText(): string
    {
        return $this->astraHandlingText;
    }

    /**
     * This is human-readable astra handling text.
     */
    public function setAstraHandlingText(string $astraHandlingText): self
    {
        $this->initialized['astraHandlingText'] = true;
        $this->astraHandlingText = $astraHandlingText;

        return $this;
    }

    /**
     * These are package barcode details. Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
     */
    public function getBarcodes(): ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodes
    {
        return $this->barcodes;
    }

    /**
     * These are package barcode details. Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
     */
    public function setBarcodes(ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodes $barcodes): self
    {
        $this->initialized['barcodes'] = true;
        $this->barcodes = $barcodes;

        return $this;
    }

    /**
     * These are operational instruction such as Ground Information printed on a given area of the label, one-dimensional barcode with only x-axis that contains the details of the shipment in encrypted form, COD Return operational instructions data such as COD amount, SECURED or UNSECURED.
     *
     * @return list<ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailOperationalInstructionsItem>
     */
    public function getOperationalInstructions(): array
    {
        return $this->operationalInstructions;
    }

    /**
     * These are operational instruction such as Ground Information printed on a given area of the label, one-dimensional barcode with only x-axis that contains the details of the shipment in encrypted form, COD Return operational instructions data such as COD amount, SECURED or UNSECURED.
     *
     * @param list<ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailOperationalInstructionsItem> $operationalInstructions
     */
    public function setOperationalInstructions(array $operationalInstructions): self
    {
        $this->initialized['operationalInstructions'] = true;
        $this->operationalInstructions = $operationalInstructions;

        return $this;
    }
}

<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetail extends \ArrayObject
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
     * This is human-readable astra handling text.
     *
     * @var string
     */
    protected $astraHandlingText;
    /**
     * These are package barcode details. Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
     *
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodes
     */
    protected $barcodes;
    /**
     * These are operational instruction such as Ground Information printed on a given area of the label, one-dimensional barcode with only x-axis that contains the details of the shipment in encrypted form, COD Return operational instructions data such as COD amount, SECURED or UNSECURED.
     *
     * @var list<ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailOperationalInstructionsItem>
     */
    protected $operationalInstructions;
    /**
     * This is human-readable astra handling text.
     *
     * @return string
     */
    public function getAstraHandlingText() : string
    {
        return $this->astraHandlingText;
    }
    /**
     * This is human-readable astra handling text.
     *
     * @param string $astraHandlingText
     *
     * @return self
     */
    public function setAstraHandlingText(string $astraHandlingText) : self
    {
        $this->initialized['astraHandlingText'] = true;
        $this->astraHandlingText = $astraHandlingText;
        return $this;
    }
    /**
     * These are package barcode details. Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
     *
     * @return ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodes
     */
    public function getBarcodes() : ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodes
    {
        return $this->barcodes;
    }
    /**
     * These are package barcode details. Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
     *
     * @param ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodes $barcodes
     *
     * @return self
     */
    public function setBarcodes(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodes $barcodes) : self
    {
        $this->initialized['barcodes'] = true;
        $this->barcodes = $barcodes;
        return $this;
    }
    /**
     * These are operational instruction such as Ground Information printed on a given area of the label, one-dimensional barcode with only x-axis that contains the details of the shipment in encrypted form, COD Return operational instructions data such as COD amount, SECURED or UNSECURED.
     *
     * @return list<ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailOperationalInstructionsItem>
     */
    public function getOperationalInstructions() : array
    {
        return $this->operationalInstructions;
    }
    /**
     * These are operational instruction such as Ground Information printed on a given area of the label, one-dimensional barcode with only x-axis that contains the details of the shipment in encrypted form, COD Return operational instructions data such as COD amount, SECURED or UNSECURED.
     *
     * @param list<ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailOperationalInstructionsItem> $operationalInstructions
     *
     * @return self
     */
    public function setOperationalInstructions(array $operationalInstructions) : self
    {
        $this->initialized['operationalInstructions'] = true;
        $this->operationalInstructions = $operationalInstructions;
        return $this;
    }
}
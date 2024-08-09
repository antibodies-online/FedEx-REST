<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodes extends \ArrayObject
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
     * This is binary-style barcodes for the package.
     *
     * @var list<ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodesBinaryBarcodesItem>
     */
    protected $binaryBarcodes;
    /**
     * This is string-style barcodes for the package.
     *
     * @var list<ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodesStringBarcodesItem>
     */
    protected $stringBarcodes;
    /**
     * This is binary-style barcodes for the package.
     *
     * @return list<ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodesBinaryBarcodesItem>
     */
    public function getBinaryBarcodes(): array
    {
        return $this->binaryBarcodes;
    }
    /**
     * This is binary-style barcodes for the package.
     *
     * @param list<ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodesBinaryBarcodesItem> $binaryBarcodes
     *
     * @return self
     */
    public function setBinaryBarcodes(array $binaryBarcodes): self
    {
        $this->initialized['binaryBarcodes'] = true;
        $this->binaryBarcodes = $binaryBarcodes;
        return $this;
    }
    /**
     * This is string-style barcodes for the package.
     *
     * @return list<ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodesStringBarcodesItem>
     */
    public function getStringBarcodes(): array
    {
        return $this->stringBarcodes;
    }
    /**
     * This is string-style barcodes for the package.
     *
     * @param list<ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodesStringBarcodesItem> $stringBarcodes
     *
     * @return self
     */
    public function setStringBarcodes(array $stringBarcodes): self
    {
        $this->initialized['stringBarcodes'] = true;
        $this->stringBarcodes = $stringBarcodes;
        return $this;
    }
}
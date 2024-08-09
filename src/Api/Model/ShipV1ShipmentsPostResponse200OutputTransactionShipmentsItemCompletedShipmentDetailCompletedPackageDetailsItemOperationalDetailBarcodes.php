<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodes extends \ArrayObject
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
     * This is binary-style barcodes used for the package identification.
     *
     * @var list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodesBinaryBarcodesItem>
     */
    protected $binaryBarcodes;
    /**
     * This is string-style barcodes  used for package identification.
     *
     * @var list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodesStringBarcodesItem>
     */
    protected $stringBarcodes;
    /**
     * This is binary-style barcodes used for the package identification.
     *
     * @return list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodesBinaryBarcodesItem>
     */
    public function getBinaryBarcodes(): array
    {
        return $this->binaryBarcodes;
    }
    /**
     * This is binary-style barcodes used for the package identification.
     *
     * @param list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodesBinaryBarcodesItem> $binaryBarcodes
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
     * This is string-style barcodes  used for package identification.
     *
     * @return list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodesStringBarcodesItem>
     */
    public function getStringBarcodes(): array
    {
        return $this->stringBarcodes;
    }
    /**
     * This is string-style barcodes  used for package identification.
     *
     * @param list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodesStringBarcodesItem> $stringBarcodes
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
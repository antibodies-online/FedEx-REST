<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices extends \ArrayObject
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
     * Indicate the types of special services requested for the shipment.<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>click here to see Package Special Service Types</a>
     *
     * @var list<string>
     */
    protected $specialServiceTypes;
    /**
     * Indicate the Signature Type. <br>Valid Values: <ul><li>ADULT - Adult signature required, at recipient address.</li><li>DIRECT - Signature required, at recipient address.</li><li>INDIRECT - Signature required, alternate address is accepted.This option is available for residential deliveries only</li><li>NO_SIGNATURE_REQUIRED - Signature is not required.</li><li>SERVICE_DEFAULT - Signature handled as per current Service Guide.</li></ul>
     *
     * @var string
     */
    protected $signatureOptionType;
    /**
     * Specifies the Priority Alert Detail.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPriorityAlertDetail
     */
    protected $priorityAlertDetail;
    /**
     * This element specifies Signature option details.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesSignatureOptionDetail
     */
    protected $signatureOptionDetail;
    /**
     * These are details for the package containing alcohol. This is required for alcohol special service. The alcoholRecipientType is required.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail
     */
    protected $alcoholDetail;
    /**
     * Provide dangerous goods shipment details.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail
     */
    protected $dangerousGoodsDetail;
    /**
     * These are COD package details. For use with FedEx Ground services only; COD must be present in shipments special services.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetail
     */
    protected $packageCODDetail;
    /**
     * Provide the pieceCount or VerificationBoxCount for batteries or cells that are contained within this specific package.
     *
     * @var int
     */
    protected $pieceCountVerificationBoxCount;
    /**
     * Provide details about the batteries or cells that are contained within this specific package.
     *
     * @var list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesBatteryDetailsItem>
     */
    protected $batteryDetails;
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDryIceWeight
     */
    protected $dryIceWeight;
    /**
     * Indicate the types of special services requested for the shipment.<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>click here to see Package Special Service Types</a>
     *
     * @return list<string>
     */
    public function getSpecialServiceTypes() : array
    {
        return $this->specialServiceTypes;
    }
    /**
     * Indicate the types of special services requested for the shipment.<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>click here to see Package Special Service Types</a>
     *
     * @param list<string> $specialServiceTypes
     *
     * @return self
     */
    public function setSpecialServiceTypes(array $specialServiceTypes) : self
    {
        $this->initialized['specialServiceTypes'] = true;
        $this->specialServiceTypes = $specialServiceTypes;
        return $this;
    }
    /**
     * Indicate the Signature Type. <br>Valid Values: <ul><li>ADULT - Adult signature required, at recipient address.</li><li>DIRECT - Signature required, at recipient address.</li><li>INDIRECT - Signature required, alternate address is accepted.This option is available for residential deliveries only</li><li>NO_SIGNATURE_REQUIRED - Signature is not required.</li><li>SERVICE_DEFAULT - Signature handled as per current Service Guide.</li></ul>
     *
     * @return string
     */
    public function getSignatureOptionType() : string
    {
        return $this->signatureOptionType;
    }
    /**
     * Indicate the Signature Type. <br>Valid Values: <ul><li>ADULT - Adult signature required, at recipient address.</li><li>DIRECT - Signature required, at recipient address.</li><li>INDIRECT - Signature required, alternate address is accepted.This option is available for residential deliveries only</li><li>NO_SIGNATURE_REQUIRED - Signature is not required.</li><li>SERVICE_DEFAULT - Signature handled as per current Service Guide.</li></ul>
     *
     * @param string $signatureOptionType
     *
     * @return self
     */
    public function setSignatureOptionType(string $signatureOptionType) : self
    {
        $this->initialized['signatureOptionType'] = true;
        $this->signatureOptionType = $signatureOptionType;
        return $this;
    }
    /**
     * Specifies the Priority Alert Detail.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPriorityAlertDetail
     */
    public function getPriorityAlertDetail() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPriorityAlertDetail
    {
        return $this->priorityAlertDetail;
    }
    /**
     * Specifies the Priority Alert Detail.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPriorityAlertDetail $priorityAlertDetail
     *
     * @return self
     */
    public function setPriorityAlertDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPriorityAlertDetail $priorityAlertDetail) : self
    {
        $this->initialized['priorityAlertDetail'] = true;
        $this->priorityAlertDetail = $priorityAlertDetail;
        return $this;
    }
    /**
     * This element specifies Signature option details.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesSignatureOptionDetail
     */
    public function getSignatureOptionDetail() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesSignatureOptionDetail
    {
        return $this->signatureOptionDetail;
    }
    /**
     * This element specifies Signature option details.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesSignatureOptionDetail $signatureOptionDetail
     *
     * @return self
     */
    public function setSignatureOptionDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesSignatureOptionDetail $signatureOptionDetail) : self
    {
        $this->initialized['signatureOptionDetail'] = true;
        $this->signatureOptionDetail = $signatureOptionDetail;
        return $this;
    }
    /**
     * These are details for the package containing alcohol. This is required for alcohol special service. The alcoholRecipientType is required.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail
     */
    public function getAlcoholDetail() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail
    {
        return $this->alcoholDetail;
    }
    /**
     * These are details for the package containing alcohol. This is required for alcohol special service. The alcoholRecipientType is required.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail $alcoholDetail
     *
     * @return self
     */
    public function setAlcoholDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail $alcoholDetail) : self
    {
        $this->initialized['alcoholDetail'] = true;
        $this->alcoholDetail = $alcoholDetail;
        return $this;
    }
    /**
     * Provide dangerous goods shipment details.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail
     */
    public function getDangerousGoodsDetail() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail
    {
        return $this->dangerousGoodsDetail;
    }
    /**
     * Provide dangerous goods shipment details.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail $dangerousGoodsDetail
     *
     * @return self
     */
    public function setDangerousGoodsDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail $dangerousGoodsDetail) : self
    {
        $this->initialized['dangerousGoodsDetail'] = true;
        $this->dangerousGoodsDetail = $dangerousGoodsDetail;
        return $this;
    }
    /**
     * These are COD package details. For use with FedEx Ground services only; COD must be present in shipments special services.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetail
     */
    public function getPackageCODDetail() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetail
    {
        return $this->packageCODDetail;
    }
    /**
     * These are COD package details. For use with FedEx Ground services only; COD must be present in shipments special services.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetail $packageCODDetail
     *
     * @return self
     */
    public function setPackageCODDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetail $packageCODDetail) : self
    {
        $this->initialized['packageCODDetail'] = true;
        $this->packageCODDetail = $packageCODDetail;
        return $this;
    }
    /**
     * Provide the pieceCount or VerificationBoxCount for batteries or cells that are contained within this specific package.
     *
     * @return int
     */
    public function getPieceCountVerificationBoxCount() : int
    {
        return $this->pieceCountVerificationBoxCount;
    }
    /**
     * Provide the pieceCount or VerificationBoxCount for batteries or cells that are contained within this specific package.
     *
     * @param int $pieceCountVerificationBoxCount
     *
     * @return self
     */
    public function setPieceCountVerificationBoxCount(int $pieceCountVerificationBoxCount) : self
    {
        $this->initialized['pieceCountVerificationBoxCount'] = true;
        $this->pieceCountVerificationBoxCount = $pieceCountVerificationBoxCount;
        return $this;
    }
    /**
     * Provide details about the batteries or cells that are contained within this specific package.
     *
     * @return list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesBatteryDetailsItem>
     */
    public function getBatteryDetails() : array
    {
        return $this->batteryDetails;
    }
    /**
     * Provide details about the batteries or cells that are contained within this specific package.
     *
     * @param list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesBatteryDetailsItem> $batteryDetails
     *
     * @return self
     */
    public function setBatteryDetails(array $batteryDetails) : self
    {
        $this->initialized['batteryDetails'] = true;
        $this->batteryDetails = $batteryDetails;
        return $this;
    }
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDryIceWeight
     */
    public function getDryIceWeight() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDryIceWeight
    {
        return $this->dryIceWeight;
    }
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDryIceWeight $dryIceWeight
     *
     * @return self
     */
    public function setDryIceWeight(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDryIceWeight $dryIceWeight) : self
    {
        $this->initialized['dryIceWeight'] = true;
        $this->dryIceWeight = $dryIceWeight;
        return $this;
    }
}
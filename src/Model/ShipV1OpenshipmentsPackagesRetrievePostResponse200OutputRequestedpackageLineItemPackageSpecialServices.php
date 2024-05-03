<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServices extends \ArrayObject
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
     * @var ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesPriorityAlertDetail
     */
    protected $priorityAlertDetail;
    /**
     * This element specifies Signature option details.
     *
     * @var ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesSignatureOptionDetail
     */
    protected $signatureOptionDetail;
    /**
     * These are details for the package containing alcohol. This is required for alcohol special service. The alcoholRecipientType is required.
     *
     * @var ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesAlcoholDetail
     */
    protected $alcoholDetail;
    /**
     * Provide dangerous goods shipment details.
     *
     * @var ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesDangerousGoodsDetail
     */
    protected $dangerousGoodsDetail;
    /**
     * These are COD package details. For use with FedEx Ground services only; COD must be present in shipments special services.
     *
     * @var ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesPackageCODDetail
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
     * @var list<ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesBatteryDetailsItem>
     */
    protected $batteryDetails;
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @var ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesDryIceWeight
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
     * @return ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesPriorityAlertDetail
     */
    public function getPriorityAlertDetail() : ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesPriorityAlertDetail
    {
        return $this->priorityAlertDetail;
    }
    /**
     * Specifies the Priority Alert Detail.
     *
     * @param ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesPriorityAlertDetail $priorityAlertDetail
     *
     * @return self
     */
    public function setPriorityAlertDetail(ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesPriorityAlertDetail $priorityAlertDetail) : self
    {
        $this->initialized['priorityAlertDetail'] = true;
        $this->priorityAlertDetail = $priorityAlertDetail;
        return $this;
    }
    /**
     * This element specifies Signature option details.
     *
     * @return ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesSignatureOptionDetail
     */
    public function getSignatureOptionDetail() : ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesSignatureOptionDetail
    {
        return $this->signatureOptionDetail;
    }
    /**
     * This element specifies Signature option details.
     *
     * @param ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesSignatureOptionDetail $signatureOptionDetail
     *
     * @return self
     */
    public function setSignatureOptionDetail(ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesSignatureOptionDetail $signatureOptionDetail) : self
    {
        $this->initialized['signatureOptionDetail'] = true;
        $this->signatureOptionDetail = $signatureOptionDetail;
        return $this;
    }
    /**
     * These are details for the package containing alcohol. This is required for alcohol special service. The alcoholRecipientType is required.
     *
     * @return ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesAlcoholDetail
     */
    public function getAlcoholDetail() : ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesAlcoholDetail
    {
        return $this->alcoholDetail;
    }
    /**
     * These are details for the package containing alcohol. This is required for alcohol special service. The alcoholRecipientType is required.
     *
     * @param ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesAlcoholDetail $alcoholDetail
     *
     * @return self
     */
    public function setAlcoholDetail(ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesAlcoholDetail $alcoholDetail) : self
    {
        $this->initialized['alcoholDetail'] = true;
        $this->alcoholDetail = $alcoholDetail;
        return $this;
    }
    /**
     * Provide dangerous goods shipment details.
     *
     * @return ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesDangerousGoodsDetail
     */
    public function getDangerousGoodsDetail() : ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesDangerousGoodsDetail
    {
        return $this->dangerousGoodsDetail;
    }
    /**
     * Provide dangerous goods shipment details.
     *
     * @param ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesDangerousGoodsDetail $dangerousGoodsDetail
     *
     * @return self
     */
    public function setDangerousGoodsDetail(ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesDangerousGoodsDetail $dangerousGoodsDetail) : self
    {
        $this->initialized['dangerousGoodsDetail'] = true;
        $this->dangerousGoodsDetail = $dangerousGoodsDetail;
        return $this;
    }
    /**
     * These are COD package details. For use with FedEx Ground services only; COD must be present in shipments special services.
     *
     * @return ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesPackageCODDetail
     */
    public function getPackageCODDetail() : ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesPackageCODDetail
    {
        return $this->packageCODDetail;
    }
    /**
     * These are COD package details. For use with FedEx Ground services only; COD must be present in shipments special services.
     *
     * @param ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesPackageCODDetail $packageCODDetail
     *
     * @return self
     */
    public function setPackageCODDetail(ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesPackageCODDetail $packageCODDetail) : self
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
     * @return list<ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesBatteryDetailsItem>
     */
    public function getBatteryDetails() : array
    {
        return $this->batteryDetails;
    }
    /**
     * Provide details about the batteries or cells that are contained within this specific package.
     *
     * @param list<ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesBatteryDetailsItem> $batteryDetails
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
     * @return ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesDryIceWeight
     */
    public function getDryIceWeight() : ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesDryIceWeight
    {
        return $this->dryIceWeight;
    }
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @param ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesDryIceWeight $dryIceWeight
     *
     * @return self
     */
    public function setDryIceWeight(ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesDryIceWeight $dryIceWeight) : self
    {
        $this->initialized['dryIceWeight'] = true;
        $this->dryIceWeight = $dryIceWeight;
        return $this;
    }
}
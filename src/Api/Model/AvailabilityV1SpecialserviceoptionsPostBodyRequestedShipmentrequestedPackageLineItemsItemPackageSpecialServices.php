<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServices extends \ArrayObject
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
     * Indicate the Signature Type.<br>Valid Values:<ul><li>ADULT - Adult signature required, at recipient address.</li><li>DIRECT - Signature required, at recipient address.</li><li>INDIRECT - Signature required, alternate address is accepted.(This option is available for residential deliveries only)</li><li>NO_SIGNATURE_REQUIRED - Signature is not required.</li><li>SERVICE_DEFAULT - Signature handled as per current Service Guide.</li></ul>
     *
     * @var string
     */
    protected $signatureOptionType;
    /**
     * These Signature option details.Required  if SignatureOptions is indicated.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesSignatureOptionDetail
     */
    protected $signatureOptionDetail;
    /**
     * These are details for the package containing alcohol. This is required for alcohol special service. The alcoholRecipientType is required.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail
     */
    protected $alcoholDetail;
    /**
     * Use this object to provide Dangerous Goods Detail in the shipment.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail
     */
    protected $dangerousGoodsDetail;
    /**
     * Provide the pieceCount or VerificationBoxCount for batteries or cells that are contained within this specific package.
     *
     * @var int
     */
    protected $pieceCountVerificationBoxCount;
    /**
     * Indicates the battery details.
     *
     * @var list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesBatteryDetailsItem>
     */
    protected $batteryDetails;
    /**
     * Special services requested for the shipment.<br>Example: <ul><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
     *
     * @var list<string>
     */
    protected $specialServiceTypes;
    /**
     * For Ground-only COD, populate this object for COD detail information at the package level.
     *
     * @var mixed
     */
    protected $codDetail;
    /**
     * These are the weight details.
     *
     * @var mixed
     */
    protected $dryIceWeight;
    /**
     * Indicate the Signature Type.<br>Valid Values:<ul><li>ADULT - Adult signature required, at recipient address.</li><li>DIRECT - Signature required, at recipient address.</li><li>INDIRECT - Signature required, alternate address is accepted.(This option is available for residential deliveries only)</li><li>NO_SIGNATURE_REQUIRED - Signature is not required.</li><li>SERVICE_DEFAULT - Signature handled as per current Service Guide.</li></ul>
     *
     * @return string
     */
    public function getSignatureOptionType(): string
    {
        return $this->signatureOptionType;
    }
    /**
     * Indicate the Signature Type.<br>Valid Values:<ul><li>ADULT - Adult signature required, at recipient address.</li><li>DIRECT - Signature required, at recipient address.</li><li>INDIRECT - Signature required, alternate address is accepted.(This option is available for residential deliveries only)</li><li>NO_SIGNATURE_REQUIRED - Signature is not required.</li><li>SERVICE_DEFAULT - Signature handled as per current Service Guide.</li></ul>
     *
     * @param string $signatureOptionType
     *
     * @return self
     */
    public function setSignatureOptionType(string $signatureOptionType): self
    {
        $this->initialized['signatureOptionType'] = true;
        $this->signatureOptionType = $signatureOptionType;
        return $this;
    }
    /**
     * These Signature option details.Required  if SignatureOptions is indicated.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesSignatureOptionDetail
     */
    public function getSignatureOptionDetail(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesSignatureOptionDetail
    {
        return $this->signatureOptionDetail;
    }
    /**
     * These Signature option details.Required  if SignatureOptions is indicated.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesSignatureOptionDetail $signatureOptionDetail
     *
     * @return self
     */
    public function setSignatureOptionDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesSignatureOptionDetail $signatureOptionDetail): self
    {
        $this->initialized['signatureOptionDetail'] = true;
        $this->signatureOptionDetail = $signatureOptionDetail;
        return $this;
    }
    /**
     * These are details for the package containing alcohol. This is required for alcohol special service. The alcoholRecipientType is required.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail
     */
    public function getAlcoholDetail(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail
    {
        return $this->alcoholDetail;
    }
    /**
     * These are details for the package containing alcohol. This is required for alcohol special service. The alcoholRecipientType is required.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail $alcoholDetail
     *
     * @return self
     */
    public function setAlcoholDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail $alcoholDetail): self
    {
        $this->initialized['alcoholDetail'] = true;
        $this->alcoholDetail = $alcoholDetail;
        return $this;
    }
    /**
     * Use this object to provide Dangerous Goods Detail in the shipment.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail
     */
    public function getDangerousGoodsDetail(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail
    {
        return $this->dangerousGoodsDetail;
    }
    /**
     * Use this object to provide Dangerous Goods Detail in the shipment.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail $dangerousGoodsDetail
     *
     * @return self
     */
    public function setDangerousGoodsDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail $dangerousGoodsDetail): self
    {
        $this->initialized['dangerousGoodsDetail'] = true;
        $this->dangerousGoodsDetail = $dangerousGoodsDetail;
        return $this;
    }
    /**
     * Provide the pieceCount or VerificationBoxCount for batteries or cells that are contained within this specific package.
     *
     * @return int
     */
    public function getPieceCountVerificationBoxCount(): int
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
    public function setPieceCountVerificationBoxCount(int $pieceCountVerificationBoxCount): self
    {
        $this->initialized['pieceCountVerificationBoxCount'] = true;
        $this->pieceCountVerificationBoxCount = $pieceCountVerificationBoxCount;
        return $this;
    }
    /**
     * Indicates the battery details.
     *
     * @return list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesBatteryDetailsItem>
     */
    public function getBatteryDetails(): array
    {
        return $this->batteryDetails;
    }
    /**
     * Indicates the battery details.
     *
     * @param list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesBatteryDetailsItem> $batteryDetails
     *
     * @return self
     */
    public function setBatteryDetails(array $batteryDetails): self
    {
        $this->initialized['batteryDetails'] = true;
        $this->batteryDetails = $batteryDetails;
        return $this;
    }
    /**
     * Special services requested for the shipment.<br>Example: <ul><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
     *
     * @return list<string>
     */
    public function getSpecialServiceTypes(): array
    {
        return $this->specialServiceTypes;
    }
    /**
     * Special services requested for the shipment.<br>Example: <ul><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
     *
     * @param list<string> $specialServiceTypes
     *
     * @return self
     */
    public function setSpecialServiceTypes(array $specialServiceTypes): self
    {
        $this->initialized['specialServiceTypes'] = true;
        $this->specialServiceTypes = $specialServiceTypes;
        return $this;
    }
    /**
     * For Ground-only COD, populate this object for COD detail information at the package level.
     *
     * @return mixed
     */
    public function getCodDetail()
    {
        return $this->codDetail;
    }
    /**
     * For Ground-only COD, populate this object for COD detail information at the package level.
     *
     * @param mixed $codDetail
     *
     * @return self
     */
    public function setCodDetail($codDetail): self
    {
        $this->initialized['codDetail'] = true;
        $this->codDetail = $codDetail;
        return $this;
    }
    /**
     * These are the weight details.
     *
     * @return mixed
     */
    public function getDryIceWeight()
    {
        return $this->dryIceWeight;
    }
    /**
     * These are the weight details.
     *
     * @param mixed $dryIceWeight
     *
     * @return self
     */
    public function setDryIceWeight($dryIceWeight): self
    {
        $this->initialized['dryIceWeight'] = true;
        $this->dryIceWeight = $dryIceWeight;
        return $this;
    }
}
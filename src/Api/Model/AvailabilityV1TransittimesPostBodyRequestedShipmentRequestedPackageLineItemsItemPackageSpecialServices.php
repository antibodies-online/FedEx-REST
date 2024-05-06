<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices extends \ArrayObject
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
     * Optional.<br>Specify special services requested for the package.<br>Example: ["DANGEROUS_GOODS"]<br>a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package Special Service Types</a>
     *
     * @var list<string>
     */
    protected $specialServiceTypes;
    /**
     * Package COD Detail.  COD main information is set in shipment level.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesCodDetail
     */
    protected $codDetail;
    /**
     * Specify weight of dry ice used in packaging.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDryIceWeight
     */
    protected $dryIceWeight;
    /**
     * Use this object to specify Dangerous Goods shipment Detail.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail
     */
    protected $dangerousGoodsDetail;
    /**
     * Provides information about the RecipientType and ShipperAgreementType. This object is manadatory if alcohol special service is selected.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail
     */
    protected $alcoholDetail;
    /**
     * Indicates the box count used for piece count verification.
     *
     * @var int
     */
    protected $pieceCountVerificationBoxCount;
    /**
     * Describes attributes of a battery or cell that are used for classification purposes. Typically this structure would be used to allow customers to declare batteries or cells for which full dangerous goods documentation and procedures are not required.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesBatteryDetails
     */
    protected $batteryDetails;
    /**
     * Optional.<br>Specify special services requested for the package.<br>Example: ["DANGEROUS_GOODS"]<br>a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package Special Service Types</a>
     *
     * @return list<string>
     */
    public function getSpecialServiceTypes() : array
    {
        return $this->specialServiceTypes;
    }
    /**
     * Optional.<br>Specify special services requested for the package.<br>Example: ["DANGEROUS_GOODS"]<br>a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package Special Service Types</a>
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
     * Package COD Detail.  COD main information is set in shipment level.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesCodDetail
     */
    public function getCodDetail() : AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesCodDetail
    {
        return $this->codDetail;
    }
    /**
     * Package COD Detail.  COD main information is set in shipment level.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesCodDetail $codDetail
     *
     * @return self
     */
    public function setCodDetail(AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesCodDetail $codDetail) : self
    {
        $this->initialized['codDetail'] = true;
        $this->codDetail = $codDetail;
        return $this;
    }
    /**
     * Specify weight of dry ice used in packaging.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDryIceWeight
     */
    public function getDryIceWeight() : AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDryIceWeight
    {
        return $this->dryIceWeight;
    }
    /**
     * Specify weight of dry ice used in packaging.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDryIceWeight $dryIceWeight
     *
     * @return self
     */
    public function setDryIceWeight(AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDryIceWeight $dryIceWeight) : self
    {
        $this->initialized['dryIceWeight'] = true;
        $this->dryIceWeight = $dryIceWeight;
        return $this;
    }
    /**
     * Use this object to specify Dangerous Goods shipment Detail.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail
     */
    public function getDangerousGoodsDetail() : AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail
    {
        return $this->dangerousGoodsDetail;
    }
    /**
     * Use this object to specify Dangerous Goods shipment Detail.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail $dangerousGoodsDetail
     *
     * @return self
     */
    public function setDangerousGoodsDetail(AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail $dangerousGoodsDetail) : self
    {
        $this->initialized['dangerousGoodsDetail'] = true;
        $this->dangerousGoodsDetail = $dangerousGoodsDetail;
        return $this;
    }
    /**
     * Provides information about the RecipientType and ShipperAgreementType. This object is manadatory if alcohol special service is selected.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail
     */
    public function getAlcoholDetail() : AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail
    {
        return $this->alcoholDetail;
    }
    /**
     * Provides information about the RecipientType and ShipperAgreementType. This object is manadatory if alcohol special service is selected.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail $alcoholDetail
     *
     * @return self
     */
    public function setAlcoholDetail(AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail $alcoholDetail) : self
    {
        $this->initialized['alcoholDetail'] = true;
        $this->alcoholDetail = $alcoholDetail;
        return $this;
    }
    /**
     * Indicates the box count used for piece count verification.
     *
     * @return int
     */
    public function getPieceCountVerificationBoxCount() : int
    {
        return $this->pieceCountVerificationBoxCount;
    }
    /**
     * Indicates the box count used for piece count verification.
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
     * Describes attributes of a battery or cell that are used for classification purposes. Typically this structure would be used to allow customers to declare batteries or cells for which full dangerous goods documentation and procedures are not required.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesBatteryDetails
     */
    public function getBatteryDetails() : AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesBatteryDetails
    {
        return $this->batteryDetails;
    }
    /**
     * Describes attributes of a battery or cell that are used for classification purposes. Typically this structure would be used to allow customers to declare batteries or cells for which full dangerous goods documentation and procedures are not required.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesBatteryDetails $batteryDetails
     *
     * @return self
     */
    public function setBatteryDetails(AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesBatteryDetails $batteryDetails) : self
    {
        $this->initialized['batteryDetails'] = true;
        $this->batteryDetails = $batteryDetails;
        return $this;
    }
}
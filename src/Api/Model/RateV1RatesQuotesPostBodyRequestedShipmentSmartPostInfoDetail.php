<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentSmartPostInfoDetail extends \ArrayObject
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
     * Indicate the type of ancillary endorsement. Is required for Presorted Standard but not for returns or parcel select. Note not all are usable for all ancillary endorsements.<br>For more information, refer to the <a href = 'https://www.fedex.com/en-us/shipping/fedex-smartpost/rates-zones.html' target='_blank'>FedEx SmartPost®</a>.
     *
     * @var string
     */
    protected $ancillaryEndorsement;
    /**
     * Specify the four-digit numeric Hub ID value used during rate quote for smartport shipments.<br><a onclick='loadDocReference("smartposthubids")'>Click here to see Hub Ids</a>
     *
     * @var string
     */
    protected $hubId;
    /**
     * Specify the indicia type.<br>Available options include:<ul><li>MEDIA_MAIL</li><li>PARCEL_SELECT (1 LB through 70 LB)</li><li>PRESORTED_BOUND_PRINTED_MATTER</li><li>PRESORTED_STANDARD (less than 1 LB)</li><li>PARCEL_RETURN</li></ul>
     *
     * @var string
     */
    protected $indicia;
    /**
     * Specify the special handling associated with Smartpost Shipment.<br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment Level Special Service Types</a>
     *
     * @var string
     */
    protected $specialServices;
    /**
     * Indicate the type of ancillary endorsement. Is required for Presorted Standard but not for returns or parcel select. Note not all are usable for all ancillary endorsements.<br>For more information, refer to the <a href = 'https://www.fedex.com/en-us/shipping/fedex-smartpost/rates-zones.html' target='_blank'>FedEx SmartPost®</a>.
     *
     * @return string
     */
    public function getAncillaryEndorsement(): string
    {
        return $this->ancillaryEndorsement;
    }
    /**
     * Indicate the type of ancillary endorsement. Is required for Presorted Standard but not for returns or parcel select. Note not all are usable for all ancillary endorsements.<br>For more information, refer to the <a href = 'https://www.fedex.com/en-us/shipping/fedex-smartpost/rates-zones.html' target='_blank'>FedEx SmartPost®</a>.
     *
     * @param string $ancillaryEndorsement
     *
     * @return self
     */
    public function setAncillaryEndorsement(string $ancillaryEndorsement): self
    {
        $this->initialized['ancillaryEndorsement'] = true;
        $this->ancillaryEndorsement = $ancillaryEndorsement;
        return $this;
    }
    /**
     * Specify the four-digit numeric Hub ID value used during rate quote for smartport shipments.<br><a onclick='loadDocReference("smartposthubids")'>Click here to see Hub Ids</a>
     *
     * @return string
     */
    public function getHubId(): string
    {
        return $this->hubId;
    }
    /**
     * Specify the four-digit numeric Hub ID value used during rate quote for smartport shipments.<br><a onclick='loadDocReference("smartposthubids")'>Click here to see Hub Ids</a>
     *
     * @param string $hubId
     *
     * @return self
     */
    public function setHubId(string $hubId): self
    {
        $this->initialized['hubId'] = true;
        $this->hubId = $hubId;
        return $this;
    }
    /**
     * Specify the indicia type.<br>Available options include:<ul><li>MEDIA_MAIL</li><li>PARCEL_SELECT (1 LB through 70 LB)</li><li>PRESORTED_BOUND_PRINTED_MATTER</li><li>PRESORTED_STANDARD (less than 1 LB)</li><li>PARCEL_RETURN</li></ul>
     *
     * @return string
     */
    public function getIndicia(): string
    {
        return $this->indicia;
    }
    /**
     * Specify the indicia type.<br>Available options include:<ul><li>MEDIA_MAIL</li><li>PARCEL_SELECT (1 LB through 70 LB)</li><li>PRESORTED_BOUND_PRINTED_MATTER</li><li>PRESORTED_STANDARD (less than 1 LB)</li><li>PARCEL_RETURN</li></ul>
     *
     * @param string $indicia
     *
     * @return self
     */
    public function setIndicia(string $indicia): self
    {
        $this->initialized['indicia'] = true;
        $this->indicia = $indicia;
        return $this;
    }
    /**
     * Specify the special handling associated with Smartpost Shipment.<br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment Level Special Service Types</a>
     *
     * @return string
     */
    public function getSpecialServices(): string
    {
        return $this->specialServices;
    }
    /**
     * Specify the special handling associated with Smartpost Shipment.<br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment Level Special Service Types</a>
     *
     * @param string $specialServices
     *
     * @return self
     */
    public function setSpecialServices(string $specialServices): self
    {
        $this->initialized['specialServices'] = true;
        $this->specialServices = $specialServices;
        return $this;
    }
}
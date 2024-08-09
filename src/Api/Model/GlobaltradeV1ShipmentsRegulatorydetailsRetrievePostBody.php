<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBody extends \ArrayObject
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
     * Specify the type of service that is used to ship the package.<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Specify the total commodity value. Either customsClearenceDetail or totalCommodityValue is required.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyTotalCommodityValue
     */
    protected $totalCommodityValue;
    /**
     * Provide the shipment origin address details.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyOriginAddress
     */
    protected $originAddress;
    /**
     * Provide the shipment destination address details.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyDestinationAddress
     */
    protected $destinationAddress;
    /**
     * Specify attributes to filter location types. If more than one value is specified, only those locations that have all the specified attributes will be returned.
     *
     * @var list<string>
     */
    protected $serviceOptionType;
    /**
     * Specify the Customs clearance details.Either customsClearenceDetail or totalCommodityValue is required.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetail
     */
    protected $customsClearanceDetail;
    /**
     * Specify shipment date. <br><br><i>Note : Default value is current date in case the date is not provided or a past date is provided.</i><br>Format [YYYY-MM-DD].<br>Example: 2021-08-05'
     *
     * @var string
     */
    protected $shipDate;
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements.<br><br>Valid values are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><br>Example: FDXE
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * Provide the total weight for the shipment.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyTotalWeight
     */
    protected $totalWeight;
    /**
     * Specify if the url references to be included in the output. These are regulatory reference data urls specific to document, agency.
     *
     * @var bool
     */
    protected $includeURLReferences;
    /**
     * Specify the type of consolidation that contains this shipment.<br><br>Valid values are:<ul><li>INTERNATIONAL_DISTRIBUTION_FREIGHT</li><li>INTERNATIONAL_ECONOMY_DISTRIBUTION</li><li>INTERNATIONAL_GROUND_DISTRIBUTION</li><li>INTERNATIONAL_PRIORITY_DISTRIBUTION</li><li>TRANSBORDER_DISTRIBUTION</ul>
     *
     * @var string
     */
    protected $consolidationType;
    /**
     * Specify the role this shipment plays within the consolidation.<br><br>Valid values are:<ul><li>CONSOLIDATION_DOCUMENTS_SHIPMENT &ndash; Shipment contains clearance documents for the corresponding consolidation.</li><li>CRN_SHIPMENT &ndash; Shipment is a Child Reference Number(individual shipment within consolidation).</li><li>MASTER_AIRWAYBILL_SHIPMENT &ndash; Shipment represents entire consolidation, moving as a unit.</li></ul>
     *
     * @var string
     */
    protected $consolidationRole;
    /**
     * Specify the type of service that is used to ship the package.<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     *
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }
    /**
     * Specify the type of service that is used to ship the package.<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType): self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * Specify the total commodity value. Either customsClearenceDetail or totalCommodityValue is required.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyTotalCommodityValue
     */
    public function getTotalCommodityValue(): GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyTotalCommodityValue
    {
        return $this->totalCommodityValue;
    }
    /**
     * Specify the total commodity value. Either customsClearenceDetail or totalCommodityValue is required.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyTotalCommodityValue $totalCommodityValue
     *
     * @return self
     */
    public function setTotalCommodityValue(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyTotalCommodityValue $totalCommodityValue): self
    {
        $this->initialized['totalCommodityValue'] = true;
        $this->totalCommodityValue = $totalCommodityValue;
        return $this;
    }
    /**
     * Provide the shipment origin address details.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyOriginAddress
     */
    public function getOriginAddress(): GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyOriginAddress
    {
        return $this->originAddress;
    }
    /**
     * Provide the shipment origin address details.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyOriginAddress $originAddress
     *
     * @return self
     */
    public function setOriginAddress(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyOriginAddress $originAddress): self
    {
        $this->initialized['originAddress'] = true;
        $this->originAddress = $originAddress;
        return $this;
    }
    /**
     * Provide the shipment destination address details.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyDestinationAddress
     */
    public function getDestinationAddress(): GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyDestinationAddress
    {
        return $this->destinationAddress;
    }
    /**
     * Provide the shipment destination address details.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyDestinationAddress $destinationAddress
     *
     * @return self
     */
    public function setDestinationAddress(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyDestinationAddress $destinationAddress): self
    {
        $this->initialized['destinationAddress'] = true;
        $this->destinationAddress = $destinationAddress;
        return $this;
    }
    /**
     * Specify attributes to filter location types. If more than one value is specified, only those locations that have all the specified attributes will be returned.
     *
     * @return list<string>
     */
    public function getServiceOptionType(): array
    {
        return $this->serviceOptionType;
    }
    /**
     * Specify attributes to filter location types. If more than one value is specified, only those locations that have all the specified attributes will be returned.
     *
     * @param list<string> $serviceOptionType
     *
     * @return self
     */
    public function setServiceOptionType(array $serviceOptionType): self
    {
        $this->initialized['serviceOptionType'] = true;
        $this->serviceOptionType = $serviceOptionType;
        return $this;
    }
    /**
     * Specify the Customs clearance details.Either customsClearenceDetail or totalCommodityValue is required.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetail
     */
    public function getCustomsClearanceDetail(): GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetail
    {
        return $this->customsClearanceDetail;
    }
    /**
     * Specify the Customs clearance details.Either customsClearenceDetail or totalCommodityValue is required.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetail $customsClearanceDetail
     *
     * @return self
     */
    public function setCustomsClearanceDetail(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetail $customsClearanceDetail): self
    {
        $this->initialized['customsClearanceDetail'] = true;
        $this->customsClearanceDetail = $customsClearanceDetail;
        return $this;
    }
    /**
     * Specify shipment date. <br><br><i>Note : Default value is current date in case the date is not provided or a past date is provided.</i><br>Format [YYYY-MM-DD].<br>Example: 2021-08-05'
     *
     * @return string
     */
    public function getShipDate(): string
    {
        return $this->shipDate;
    }
    /**
     * Specify shipment date. <br><br><i>Note : Default value is current date in case the date is not provided or a past date is provided.</i><br>Format [YYYY-MM-DD].<br>Example: 2021-08-05'
     *
     * @param string $shipDate
     *
     * @return self
     */
    public function setShipDate(string $shipDate): self
    {
        $this->initialized['shipDate'] = true;
        $this->shipDate = $shipDate;
        return $this;
    }
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements.<br><br>Valid values are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><br>Example: FDXE
     *
     * @return string
     */
    public function getCarrierCode(): string
    {
        return $this->carrierCode;
    }
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements.<br><br>Valid values are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><br>Example: FDXE
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(string $carrierCode): self
    {
        $this->initialized['carrierCode'] = true;
        $this->carrierCode = $carrierCode;
        return $this;
    }
    /**
     * Provide the total weight for the shipment.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyTotalWeight
     */
    public function getTotalWeight(): GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyTotalWeight
    {
        return $this->totalWeight;
    }
    /**
     * Provide the total weight for the shipment.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyTotalWeight $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyTotalWeight $totalWeight): self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * Specify if the url references to be included in the output. These are regulatory reference data urls specific to document, agency.
     *
     * @return bool
     */
    public function getIncludeURLReferences(): bool
    {
        return $this->includeURLReferences;
    }
    /**
     * Specify if the url references to be included in the output. These are regulatory reference data urls specific to document, agency.
     *
     * @param bool $includeURLReferences
     *
     * @return self
     */
    public function setIncludeURLReferences(bool $includeURLReferences): self
    {
        $this->initialized['includeURLReferences'] = true;
        $this->includeURLReferences = $includeURLReferences;
        return $this;
    }
    /**
     * Specify the type of consolidation that contains this shipment.<br><br>Valid values are:<ul><li>INTERNATIONAL_DISTRIBUTION_FREIGHT</li><li>INTERNATIONAL_ECONOMY_DISTRIBUTION</li><li>INTERNATIONAL_GROUND_DISTRIBUTION</li><li>INTERNATIONAL_PRIORITY_DISTRIBUTION</li><li>TRANSBORDER_DISTRIBUTION</ul>
     *
     * @return string
     */
    public function getConsolidationType(): string
    {
        return $this->consolidationType;
    }
    /**
     * Specify the type of consolidation that contains this shipment.<br><br>Valid values are:<ul><li>INTERNATIONAL_DISTRIBUTION_FREIGHT</li><li>INTERNATIONAL_ECONOMY_DISTRIBUTION</li><li>INTERNATIONAL_GROUND_DISTRIBUTION</li><li>INTERNATIONAL_PRIORITY_DISTRIBUTION</li><li>TRANSBORDER_DISTRIBUTION</ul>
     *
     * @param string $consolidationType
     *
     * @return self
     */
    public function setConsolidationType(string $consolidationType): self
    {
        $this->initialized['consolidationType'] = true;
        $this->consolidationType = $consolidationType;
        return $this;
    }
    /**
     * Specify the role this shipment plays within the consolidation.<br><br>Valid values are:<ul><li>CONSOLIDATION_DOCUMENTS_SHIPMENT &ndash; Shipment contains clearance documents for the corresponding consolidation.</li><li>CRN_SHIPMENT &ndash; Shipment is a Child Reference Number(individual shipment within consolidation).</li><li>MASTER_AIRWAYBILL_SHIPMENT &ndash; Shipment represents entire consolidation, moving as a unit.</li></ul>
     *
     * @return string
     */
    public function getConsolidationRole(): string
    {
        return $this->consolidationRole;
    }
    /**
     * Specify the role this shipment plays within the consolidation.<br><br>Valid values are:<ul><li>CONSOLIDATION_DOCUMENTS_SHIPMENT &ndash; Shipment contains clearance documents for the corresponding consolidation.</li><li>CRN_SHIPMENT &ndash; Shipment is a Child Reference Number(individual shipment within consolidation).</li><li>MASTER_AIRWAYBILL_SHIPMENT &ndash; Shipment represents entire consolidation, moving as a unit.</li></ul>
     *
     * @param string $consolidationRole
     *
     * @return self
     */
    public function setConsolidationRole(string $consolidationRole): self
    {
        $this->initialized['consolidationRole'] = true;
        $this->consolidationRole = $consolidationRole;
        return $this;
    }
}
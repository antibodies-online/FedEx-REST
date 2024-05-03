<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetails extends \ArrayObject
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
     * Specifies the list of regulatory statements.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatements
     */
    protected $regulatoryStatements;
    /**
     * This is the statistical unit of measure required by the government.
     *
     * @var list<string>
     */
    protected $requiredCommodityUnitsOfMeasure;
    /**
     * This a Delay Level Type. The attribute of the shipment that caused delay.
     *
     * @var string
     */
    protected $level;
    /**
     * This is a non negative integer. This is a 1-based index identifying the comodity in the request that resulted in this Commodity or Document type prohibition.
     *
     * @var int
     */
    protected $commodityIndex;
    /**
     * Specifies the Regulatory Documents.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocuments
     */
    protected $regulatoryDocuments;
    /**
     * Specifies the types and parameters of Country's advisory regulations.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryCountryAdvisories
     */
    protected $regulatoryCountryAdvisories;
    /**
     * Specifies the list of regulatory statements.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatements
     */
    public function getRegulatoryStatements() : GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatements
    {
        return $this->regulatoryStatements;
    }
    /**
     * Specifies the list of regulatory statements.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatements $regulatoryStatements
     *
     * @return self
     */
    public function setRegulatoryStatements(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatements $regulatoryStatements) : self
    {
        $this->initialized['regulatoryStatements'] = true;
        $this->regulatoryStatements = $regulatoryStatements;
        return $this;
    }
    /**
     * This is the statistical unit of measure required by the government.
     *
     * @return list<string>
     */
    public function getRequiredCommodityUnitsOfMeasure() : array
    {
        return $this->requiredCommodityUnitsOfMeasure;
    }
    /**
     * This is the statistical unit of measure required by the government.
     *
     * @param list<string> $requiredCommodityUnitsOfMeasure
     *
     * @return self
     */
    public function setRequiredCommodityUnitsOfMeasure(array $requiredCommodityUnitsOfMeasure) : self
    {
        $this->initialized['requiredCommodityUnitsOfMeasure'] = true;
        $this->requiredCommodityUnitsOfMeasure = $requiredCommodityUnitsOfMeasure;
        return $this;
    }
    /**
     * This a Delay Level Type. The attribute of the shipment that caused delay.
     *
     * @return string
     */
    public function getLevel() : string
    {
        return $this->level;
    }
    /**
     * This a Delay Level Type. The attribute of the shipment that caused delay.
     *
     * @param string $level
     *
     * @return self
     */
    public function setLevel(string $level) : self
    {
        $this->initialized['level'] = true;
        $this->level = $level;
        return $this;
    }
    /**
     * This is a non negative integer. This is a 1-based index identifying the comodity in the request that resulted in this Commodity or Document type prohibition.
     *
     * @return int
     */
    public function getCommodityIndex() : int
    {
        return $this->commodityIndex;
    }
    /**
     * This is a non negative integer. This is a 1-based index identifying the comodity in the request that resulted in this Commodity or Document type prohibition.
     *
     * @param int $commodityIndex
     *
     * @return self
     */
    public function setCommodityIndex(int $commodityIndex) : self
    {
        $this->initialized['commodityIndex'] = true;
        $this->commodityIndex = $commodityIndex;
        return $this;
    }
    /**
     * Specifies the Regulatory Documents.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocuments
     */
    public function getRegulatoryDocuments() : GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocuments
    {
        return $this->regulatoryDocuments;
    }
    /**
     * Specifies the Regulatory Documents.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocuments $regulatoryDocuments
     *
     * @return self
     */
    public function setRegulatoryDocuments(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocuments $regulatoryDocuments) : self
    {
        $this->initialized['regulatoryDocuments'] = true;
        $this->regulatoryDocuments = $regulatoryDocuments;
        return $this;
    }
    /**
     * Specifies the types and parameters of Country's advisory regulations.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryCountryAdvisories
     */
    public function getRegulatoryCountryAdvisories() : GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryCountryAdvisories
    {
        return $this->regulatoryCountryAdvisories;
    }
    /**
     * Specifies the types and parameters of Country's advisory regulations.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryCountryAdvisories $regulatoryCountryAdvisories
     *
     * @return self
     */
    public function setRegulatoryCountryAdvisories(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryCountryAdvisories $regulatoryCountryAdvisories) : self
    {
        $this->initialized['regulatoryCountryAdvisories'] = true;
        $this->regulatoryCountryAdvisories = $regulatoryCountryAdvisories;
        return $this;
    }
}
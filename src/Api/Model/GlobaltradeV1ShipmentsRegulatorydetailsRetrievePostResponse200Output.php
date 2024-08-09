<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200Output extends \ArrayObject
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
     * Represents User Message
     *
     * @var list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputUserMessagesItem>
     */
    protected $userMessages;
    /**
     * Represents Country Details
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetails
     */
    protected $countryDetails;
    /**
     * 
     *
     * @var list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCxsalertsItem>
     */
    protected $cxsalerts;
    /**
     * Represents User Message
     *
     * @return list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputUserMessagesItem>
     */
    public function getUserMessages(): array
    {
        return $this->userMessages;
    }
    /**
     * Represents User Message
     *
     * @param list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputUserMessagesItem> $userMessages
     *
     * @return self
     */
    public function setUserMessages(array $userMessages): self
    {
        $this->initialized['userMessages'] = true;
        $this->userMessages = $userMessages;
        return $this;
    }
    /**
     * Represents Country Details
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetails
     */
    public function getCountryDetails(): GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetails
    {
        return $this->countryDetails;
    }
    /**
     * Represents Country Details
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetails $countryDetails
     *
     * @return self
     */
    public function setCountryDetails(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetails $countryDetails): self
    {
        $this->initialized['countryDetails'] = true;
        $this->countryDetails = $countryDetails;
        return $this;
    }
    /**
     * 
     *
     * @return list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCxsalertsItem>
     */
    public function getCxsalerts(): array
    {
        return $this->cxsalerts;
    }
    /**
     * 
     *
     * @param list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCxsalertsItem> $cxsalerts
     *
     * @return self
     */
    public function setCxsalerts(array $cxsalerts): self
    {
        $this->initialized['cxsalerts'] = true;
        $this->cxsalerts = $cxsalerts;
        return $this;
    }
}
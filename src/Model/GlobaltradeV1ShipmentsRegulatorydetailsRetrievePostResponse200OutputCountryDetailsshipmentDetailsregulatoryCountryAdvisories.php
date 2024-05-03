<?php

namespace AntibodiesOnline\FedEx\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryCountryAdvisories extends \ArrayObject
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
     * Specifies the advisory type.
     *
     * @var string
     */
    protected $types;
    /**
     * Specifies code and other parameters.
     *
     * @var list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryCountryAdvisoriesMessagesItem>
     */
    protected $messages;
    /**
     * Specifies the advisory type.
     *
     * @return string
     */
    public function getTypes() : string
    {
        return $this->types;
    }
    /**
     * Specifies the advisory type.
     *
     * @param string $types
     *
     * @return self
     */
    public function setTypes(string $types) : self
    {
        $this->initialized['types'] = true;
        $this->types = $types;
        return $this;
    }
    /**
     * Specifies code and other parameters.
     *
     * @return list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryCountryAdvisoriesMessagesItem>
     */
    public function getMessages() : array
    {
        return $this->messages;
    }
    /**
     * Specifies code and other parameters.
     *
     * @param list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryCountryAdvisoriesMessagesItem> $messages
     *
     * @return self
     */
    public function setMessages(array $messages) : self
    {
        $this->initialized['messages'] = true;
        $this->messages = $messages;
        return $this;
    }
}
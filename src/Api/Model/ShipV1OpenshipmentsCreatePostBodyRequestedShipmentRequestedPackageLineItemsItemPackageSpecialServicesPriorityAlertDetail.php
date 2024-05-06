<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPriorityAlertDetail extends \ArrayObject
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
     * The types of all enhancement for the Priority Alert.<br>Example: PRIORITY_ALERT_PLUS
     *
     * @var list<string>
     */
    protected $enhancementTypes;
    /**
     * Specifies Content for the Priority Alert Detail.
     *
     * @var list<string>
     */
    protected $content;
    /**
     * The types of all enhancement for the Priority Alert.<br>Example: PRIORITY_ALERT_PLUS
     *
     * @return list<string>
     */
    public function getEnhancementTypes() : array
    {
        return $this->enhancementTypes;
    }
    /**
     * The types of all enhancement for the Priority Alert.<br>Example: PRIORITY_ALERT_PLUS
     *
     * @param list<string> $enhancementTypes
     *
     * @return self
     */
    public function setEnhancementTypes(array $enhancementTypes) : self
    {
        $this->initialized['enhancementTypes'] = true;
        $this->enhancementTypes = $enhancementTypes;
        return $this;
    }
    /**
     * Specifies Content for the Priority Alert Detail.
     *
     * @return list<string>
     */
    public function getContent() : array
    {
        return $this->content;
    }
    /**
     * Specifies Content for the Priority Alert Detail.
     *
     * @param list<string> $content
     *
     * @return self
     */
    public function setContent(array $content) : self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
}
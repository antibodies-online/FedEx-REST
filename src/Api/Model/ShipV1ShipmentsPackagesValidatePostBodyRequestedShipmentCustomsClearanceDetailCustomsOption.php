<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailCustomsOption extends \ArrayObject
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
     * Specify additional description about customs options. This is a required field when the Type is OTHER.
     *
     * @var string
     */
    protected $description;
    /**
     * Specify the reason for a global return, as recognized by Customs. Valid values:<ul><li>COURTESY_RETURN_LABEL: Applicable for Outbound shipments.</li><li>EXHIBITION_TRADE_SHOW: For exhibition or trade-show, outbound and inbound.</li><li>FAULTY_ITEM: For faulty item being returned, inbound only.</li><li>FOLLOWING_REPAIR: For repaired or processed item being sent, outbound only.</li><li>FOR_REPAIR: For repair or processing, outbound and inbound.</li><li>ITEM_FOR_LOAN: For loan item, outbound and inbound.</li><li>OTHER: Other reason, outbound and inbound. This type requires a description.</li><li>REJECTED: For rejected merchandise being returned, inbound.</li><li>REPLACEMENT: For replacement being sent, outbound only.</li><li>TRIAL: For use in a trial, outbound and inbound.</li></ul>
     *
     * @var string
     */
    protected $type;
    /**
     * Specify additional description about customs options. This is a required field when the Type is OTHER.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Specify additional description about customs options. This is a required field when the Type is OTHER.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Specify the reason for a global return, as recognized by Customs. Valid values:<ul><li>COURTESY_RETURN_LABEL: Applicable for Outbound shipments.</li><li>EXHIBITION_TRADE_SHOW: For exhibition or trade-show, outbound and inbound.</li><li>FAULTY_ITEM: For faulty item being returned, inbound only.</li><li>FOLLOWING_REPAIR: For repaired or processed item being sent, outbound only.</li><li>FOR_REPAIR: For repair or processing, outbound and inbound.</li><li>ITEM_FOR_LOAN: For loan item, outbound and inbound.</li><li>OTHER: Other reason, outbound and inbound. This type requires a description.</li><li>REJECTED: For rejected merchandise being returned, inbound.</li><li>REPLACEMENT: For replacement being sent, outbound only.</li><li>TRIAL: For use in a trial, outbound and inbound.</li></ul>
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Specify the reason for a global return, as recognized by Customs. Valid values:<ul><li>COURTESY_RETURN_LABEL: Applicable for Outbound shipments.</li><li>EXHIBITION_TRADE_SHOW: For exhibition or trade-show, outbound and inbound.</li><li>FAULTY_ITEM: For faulty item being returned, inbound only.</li><li>FOLLOWING_REPAIR: For repaired or processed item being sent, outbound only.</li><li>FOR_REPAIR: For repair or processing, outbound and inbound.</li><li>ITEM_FOR_LOAN: For loan item, outbound and inbound.</li><li>OTHER: Other reason, outbound and inbound. This type requires a description.</li><li>REJECTED: For rejected merchandise being returned, inbound.</li><li>REPLACEMENT: For replacement being sent, outbound only.</li><li>TRIAL: For use in a trial, outbound and inbound.</li></ul>
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}
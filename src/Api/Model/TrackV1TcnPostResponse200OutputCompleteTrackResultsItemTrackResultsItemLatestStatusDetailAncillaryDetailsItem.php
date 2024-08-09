<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailAncillaryDetailsItem extends \ArrayObject
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
     * Field which holds Reason code associated to the status of the shipment being tracked.<br> Example: 15,84,IN001,015A,02
     *
     * @var string
     */
    protected $reason;
    /**
     * Field which holds Reason description associated to the status of the shipment being tracked.<br> Example: Customer not available or business closed,Local delivery restriction, delivery not attempted,Package delivered to recipient address - release authorized
     *
     * @var string
     */
    protected $reasonDescription;
    /**
     * Field which holds recommended action for customer to resolve reason.<br> Example: Contact us at <http://www.fedex.com/us/customersupport/call/index.html> to discuss possible delivery or pickup alternatives.
     *
     * @var string
     */
    protected $action;
    /**
     * Field which holds recommended action description for customer to resolve reason.<br> Example: Customer not Available or Business Closed
     *
     * @var string
     */
    protected $actionDescription;
    /**
     * Field which holds Reason code associated to the status of the shipment being tracked.<br> Example: 15,84,IN001,015A,02
     *
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }
    /**
     * Field which holds Reason code associated to the status of the shipment being tracked.<br> Example: 15,84,IN001,015A,02
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
    /**
     * Field which holds Reason description associated to the status of the shipment being tracked.<br> Example: Customer not available or business closed,Local delivery restriction, delivery not attempted,Package delivered to recipient address - release authorized
     *
     * @return string
     */
    public function getReasonDescription(): string
    {
        return $this->reasonDescription;
    }
    /**
     * Field which holds Reason description associated to the status of the shipment being tracked.<br> Example: Customer not available or business closed,Local delivery restriction, delivery not attempted,Package delivered to recipient address - release authorized
     *
     * @param string $reasonDescription
     *
     * @return self
     */
    public function setReasonDescription(string $reasonDescription): self
    {
        $this->initialized['reasonDescription'] = true;
        $this->reasonDescription = $reasonDescription;
        return $this;
    }
    /**
     * Field which holds recommended action for customer to resolve reason.<br> Example: Contact us at <http://www.fedex.com/us/customersupport/call/index.html> to discuss possible delivery or pickup alternatives.
     *
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }
    /**
     * Field which holds recommended action for customer to resolve reason.<br> Example: Contact us at <http://www.fedex.com/us/customersupport/call/index.html> to discuss possible delivery or pickup alternatives.
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
    /**
     * Field which holds recommended action description for customer to resolve reason.<br> Example: Customer not Available or Business Closed
     *
     * @return string
     */
    public function getActionDescription(): string
    {
        return $this->actionDescription;
    }
    /**
     * Field which holds recommended action description for customer to resolve reason.<br> Example: Customer not Available or Business Closed
     *
     * @param string $actionDescription
     *
     * @return self
     */
    public function setActionDescription(string $actionDescription): self
    {
        $this->initialized['actionDescription'] = true;
        $this->actionDescription = $actionDescription;
        return $this;
    }
}
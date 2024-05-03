<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailAncillaryDetailsItem extends \ArrayObject
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
     * Field which holds Reason code associated to the status of the shipment being tracked.<br> Example: 15,84,IN001,015A,02.
     *
     * @var string
     */
    protected $reason;
    /**
     * Field which holds Reason description associated to the status of the shipment being tracked.<br> Example: Customer not available or business closed,Local delivery restriction, delivery not attempted,Package delivered to recipient address - release authorized.
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
     * Field which holds recommended action description for customer to resolve reason.<br> Example: Customer not Available or Business Closed.
     *
     * @var string
     */
    protected $actionDescription;

    /**
     * Field which holds Reason code associated to the status of the shipment being tracked.<br> Example: 15,84,IN001,015A,02.
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * Field which holds Reason code associated to the status of the shipment being tracked.<br> Example: 15,84,IN001,015A,02.
     */
    public function setReason(string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;

        return $this;
    }

    /**
     * Field which holds Reason description associated to the status of the shipment being tracked.<br> Example: Customer not available or business closed,Local delivery restriction, delivery not attempted,Package delivered to recipient address - release authorized.
     */
    public function getReasonDescription(): string
    {
        return $this->reasonDescription;
    }

    /**
     * Field which holds Reason description associated to the status of the shipment being tracked.<br> Example: Customer not available or business closed,Local delivery restriction, delivery not attempted,Package delivered to recipient address - release authorized.
     */
    public function setReasonDescription(string $reasonDescription): self
    {
        $this->initialized['reasonDescription'] = true;
        $this->reasonDescription = $reasonDescription;

        return $this;
    }

    /**
     * Field which holds recommended action for customer to resolve reason.<br> Example: Contact us at <http://www.fedex.com/us/customersupport/call/index.html> to discuss possible delivery or pickup alternatives.
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * Field which holds recommended action for customer to resolve reason.<br> Example: Contact us at <http://www.fedex.com/us/customersupport/call/index.html> to discuss possible delivery or pickup alternatives.
     */
    public function setAction(string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;

        return $this;
    }

    /**
     * Field which holds recommended action description for customer to resolve reason.<br> Example: Customer not Available or Business Closed.
     */
    public function getActionDescription(): string
    {
        return $this->actionDescription;
    }

    /**
     * Field which holds recommended action description for customer to resolve reason.<br> Example: Customer not Available or Business Closed.
     */
    public function setActionDescription(string $actionDescription): self
    {
        $this->initialized['actionDescription'] = true;
        $this->actionDescription = $actionDescription;

        return $this;
    }
}

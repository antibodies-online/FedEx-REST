<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemSpecialHandlingsItem extends \ArrayObject
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
     * Field which holds the text description of the special handling code.<br> Example: Deliver Weekday
     *
     * @var string
     */
    protected $description;
    /**
     * Field which holds type representing the special handling.<br> Example: DELIVER_WEEKDAY
     *
     * @var string
     */
    protected $type;
    /**
     * Field which holds information about the payment handling related to the special handling.<br> Example: OTHER
     *
     * @var string
     */
    protected $paymentType;
    /**
     * Field which holds the text description of the special handling code.<br> Example: Deliver Weekday
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Field which holds the text description of the special handling code.<br> Example: Deliver Weekday
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
     * Field which holds type representing the special handling.<br> Example: DELIVER_WEEKDAY
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Field which holds type representing the special handling.<br> Example: DELIVER_WEEKDAY
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
    /**
     * Field which holds information about the payment handling related to the special handling.<br> Example: OTHER
     *
     * @return string
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }
    /**
     * Field which holds information about the payment handling related to the special handling.<br> Example: OTHER
     *
     * @param string $paymentType
     *
     * @return self
     */
    public function setPaymentType(string $paymentType): self
    {
        $this->initialized['paymentType'] = true;
        $this->paymentType = $paymentType;
        return $this;
    }
}
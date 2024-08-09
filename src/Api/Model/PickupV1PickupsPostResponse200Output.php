<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1PickupsPostResponse200Output extends \ArrayObject
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
     * The confirmation number provided to the customer when a pickup is requested <br> Example : 3001
     *
     * @var string
     */
    protected $pickupConfirmationCode;
    /**
     * Human-readable text that explains pickup notification <br> Example: Courier on the way
     *
     * @var string
     */
    protected $message;
    /**
     * The location from where the package will be picked up. <br><br><i>Note: The location will only be returned for Express Pickup.<i><br><br>Example: COSA
     *
     * @var string
     */
    protected $location;
    /**
     * These are optional alerts received when a Create pickup is requested. This includes an alert code, type, and message.
     *
     * @var list<PickupV1PickupsPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * The confirmation number provided to the customer when a pickup is requested <br> Example : 3001
     *
     * @return string
     */
    public function getPickupConfirmationCode(): string
    {
        return $this->pickupConfirmationCode;
    }
    /**
     * The confirmation number provided to the customer when a pickup is requested <br> Example : 3001
     *
     * @param string $pickupConfirmationCode
     *
     * @return self
     */
    public function setPickupConfirmationCode(string $pickupConfirmationCode): self
    {
        $this->initialized['pickupConfirmationCode'] = true;
        $this->pickupConfirmationCode = $pickupConfirmationCode;
        return $this;
    }
    /**
     * Human-readable text that explains pickup notification <br> Example: Courier on the way
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Human-readable text that explains pickup notification <br> Example: Courier on the way
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * The location from where the package will be picked up. <br><br><i>Note: The location will only be returned for Express Pickup.<i><br><br>Example: COSA
     *
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }
    /**
     * The location from where the package will be picked up. <br><br><i>Note: The location will only be returned for Express Pickup.<i><br><br>Example: COSA
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * These are optional alerts received when a Create pickup is requested. This includes an alert code, type, and message.
     *
     * @return list<PickupV1PickupsPostResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * These are optional alerts received when a Create pickup is requested. This includes an alert code, type, and message.
     *
     * @param list<PickupV1PickupsPostResponse200OutputAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts): self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
}
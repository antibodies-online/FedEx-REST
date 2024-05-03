<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPutResponse200 extends \ArrayObject
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
     * Unique identifier used to match requests to their respective responses. <br>Example: XXX_ORDERXXXX789.
     *
     * @var string
     */
    protected $transactionId;
    /**
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: AnyCo_order123456789.
     *
     * @var string
     */
    protected $customerTransactionId;
    /**
     * The response elements received when a shipment is created.
     *
     * @var ShipV1OpenshipmentsPutResponse200Output
     */
    protected $output;

    /**
     * Unique identifier used to match requests to their respective responses. <br>Example: XXX_ORDERXXXX789.
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * Unique identifier used to match requests to their respective responses. <br>Example: XXX_ORDERXXXX789.
     */
    public function setTransactionId(string $transactionId): self
    {
        $this->initialized['transactionId'] = true;
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: AnyCo_order123456789.
     */
    public function getCustomerTransactionId(): string
    {
        return $this->customerTransactionId;
    }

    /**
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: AnyCo_order123456789.
     */
    public function setCustomerTransactionId(string $customerTransactionId): self
    {
        $this->initialized['customerTransactionId'] = true;
        $this->customerTransactionId = $customerTransactionId;

        return $this;
    }

    /**
     * The response elements received when a shipment is created.
     */
    public function getOutput(): ShipV1OpenshipmentsPutResponse200Output
    {
        return $this->output;
    }

    /**
     * The response elements received when a shipment is created.
     */
    public function setOutput(ShipV1OpenshipmentsPutResponse200Output $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;

        return $this;
    }
}

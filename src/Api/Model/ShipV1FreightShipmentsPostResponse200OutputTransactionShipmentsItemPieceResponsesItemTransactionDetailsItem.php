<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemTransactionDetailsItem extends \ArrayObject
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
     * Includes data returned which governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.<br>Example: transactionDetails
     *
     * @var string
     */
    protected $transactionDetails;
    /**
     * This element has a unique identifier added in your request, helps you match the request to the reply. Maximum of 40 characters allowed.<br>Example: XXXX_XXX123XXXXX.
     *
     * @var string
     */
    protected $transactionId;
    /**
     * Includes data returned which governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.<br>Example: transactionDetails
     *
     * @return string
     */
    public function getTransactionDetails(): string
    {
        return $this->transactionDetails;
    }
    /**
     * Includes data returned which governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.<br>Example: transactionDetails
     *
     * @param string $transactionDetails
     *
     * @return self
     */
    public function setTransactionDetails(string $transactionDetails): self
    {
        $this->initialized['transactionDetails'] = true;
        $this->transactionDetails = $transactionDetails;
        return $this;
    }
    /**
     * This element has a unique identifier added in your request, helps you match the request to the reply. Maximum of 40 characters allowed.<br>Example: XXXX_XXX123XXXXX.
     *
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }
    /**
     * This element has a unique identifier added in your request, helps you match the request to the reply. Maximum of 40 characters allowed.<br>Example: XXXX_XXX123XXXXX.
     *
     * @param string $transactionId
     *
     * @return self
     */
    public function setTransactionId(string $transactionId): self
    {
        $this->initialized['transactionId'] = true;
        $this->transactionId = $transactionId;
        return $this;
    }
}
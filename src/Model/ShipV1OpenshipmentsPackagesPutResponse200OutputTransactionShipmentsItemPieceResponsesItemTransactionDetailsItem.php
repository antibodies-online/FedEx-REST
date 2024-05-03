<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItemTransactionDetailsItem extends \ArrayObject
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
     * Includes data returned which governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.<br>Example: transactionDetails.
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
     * Includes data returned which governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.<br>Example: transactionDetails.
     */
    public function getTransactionDetails(): string
    {
        return $this->transactionDetails;
    }

    /**
     * Includes data returned which governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.<br>Example: transactionDetails.
     */
    public function setTransactionDetails(string $transactionDetails): self
    {
        $this->initialized['transactionDetails'] = true;
        $this->transactionDetails = $transactionDetails;

        return $this;
    }

    /**
     * This element has a unique identifier added in your request, helps you match the request to the reply. Maximum of 40 characters allowed.<br>Example: XXXX_XXX123XXXXX.
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * This element has a unique identifier added in your request, helps you match the request to the reply. Maximum of 40 characters allowed.<br>Example: XXXX_XXX123XXXXX.
     */
    public function setTransactionId(string $transactionId): self
    {
        $this->initialized['transactionId'] = true;
        $this->transactionId = $transactionId;

        return $this;
    }
}

<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPackagesPutResponse404 extends \ArrayObject
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
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492.
     *
     * @var string
     */
    protected $transactionId;
    /**
     * @var list<ShipV1OpenshipmentsPackagesPutResponse404ErrorsItem>
     */
    protected $errors;

    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492.
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492.
     */
    public function setTransactionId(string $transactionId): self
    {
        $this->initialized['transactionId'] = true;
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * @return list<ShipV1OpenshipmentsPackagesPutResponse404ErrorsItem>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param list<ShipV1OpenshipmentsPackagesPutResponse404ErrorsItem> $errors
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }
}

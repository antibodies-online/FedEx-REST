<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class OauthTokenPostResponse401 extends \ArrayObject
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
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: bc95c0e4-b33e-42a2-80d2-334282b5d37a
     *
     * @var string
     */
    protected $transactionId;
    /**
     * Indicates error details when suspicious files, potential exploits and viruses are found while scanning files, directories and user accounts. This includes code, message and error parameters.
     *
     * @var list<OauthTokenPostResponse401ErrorsItem>
     */
    protected $errors;
    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: bc95c0e4-b33e-42a2-80d2-334282b5d37a
     *
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }
    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: bc95c0e4-b33e-42a2-80d2-334282b5d37a
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
    /**
     * Indicates error details when suspicious files, potential exploits and viruses are found while scanning files, directories and user accounts. This includes code, message and error parameters.
     *
     * @return list<OauthTokenPostResponse401ErrorsItem>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * Indicates error details when suspicious files, potential exploits and viruses are found while scanning files, directories and user accounts. This includes code, message and error parameters.
     *
     * @param list<OauthTokenPostResponse401ErrorsItem> $errors
     *
     * @return self
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}
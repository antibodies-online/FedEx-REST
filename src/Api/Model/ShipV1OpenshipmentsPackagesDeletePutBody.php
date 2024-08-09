<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesDeletePutBody extends \ArrayObject
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
     * This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     *
     * @var string
     */
    protected $index;
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @var ShipV1OpenshipmentsPackagesDeletePutBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * One or more tracking IDs, for which the packages to be removed from the shipment.
     *
     * @var list<ShipV1OpenshipmentsPackagesDeletePutBodyTrackingIdsItem>
     */
    protected $trackingIds;
    /**
     * This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     *
     * @return string
     */
    public function getIndex(): string
    {
        return $this->index;
    }
    /**
     * This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     *
     * @param string $index
     *
     * @return self
     */
    public function setIndex(string $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
    }
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @return ShipV1OpenshipmentsPackagesDeletePutBodyAccountNumber
     */
    public function getAccountNumber(): ShipV1OpenshipmentsPackagesDeletePutBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @param ShipV1OpenshipmentsPackagesDeletePutBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1OpenshipmentsPackagesDeletePutBodyAccountNumber $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * One or more tracking IDs, for which the packages to be removed from the shipment.
     *
     * @return list<ShipV1OpenshipmentsPackagesDeletePutBodyTrackingIdsItem>
     */
    public function getTrackingIds(): array
    {
        return $this->trackingIds;
    }
    /**
     * One or more tracking IDs, for which the packages to be removed from the shipment.
     *
     * @param list<ShipV1OpenshipmentsPackagesDeletePutBodyTrackingIdsItem> $trackingIds
     *
     * @return self
     */
    public function setTrackingIds(array $trackingIds): self
    {
        $this->initialized['trackingIds'] = true;
        $this->trackingIds = $trackingIds;
        return $this;
    }
}
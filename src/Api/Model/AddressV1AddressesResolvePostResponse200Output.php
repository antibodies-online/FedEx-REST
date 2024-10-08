<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AddressV1AddressesResolvePostResponse200Output extends \ArrayObject
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
     * Indicates the list of resolved addresses. The detailed resolved address includes city, state, postal information, and resolution method.
     *
     * @var list<AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItem>
     */
    protected $resolvedAddresses;
    /**
     * Indicates API Alerts includes alert type, alert code, and alert message that is received when the address is resolved.
     *
     * @var list<AddressV1AddressesResolvePostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * Indicates the list of resolved addresses. The detailed resolved address includes city, state, postal information, and resolution method.
     *
     * @return list<AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItem>
     */
    public function getResolvedAddresses(): array
    {
        return $this->resolvedAddresses;
    }
    /**
     * Indicates the list of resolved addresses. The detailed resolved address includes city, state, postal information, and resolution method.
     *
     * @param list<AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItem> $resolvedAddresses
     *
     * @return self
     */
    public function setResolvedAddresses(array $resolvedAddresses): self
    {
        $this->initialized['resolvedAddresses'] = true;
        $this->resolvedAddresses = $resolvedAddresses;
        return $this;
    }
    /**
     * Indicates API Alerts includes alert type, alert code, and alert message that is received when the address is resolved.
     *
     * @return list<AddressV1AddressesResolvePostResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * Indicates API Alerts includes alert type, alert code, and alert message that is received when the address is resolved.
     *
     * @param list<AddressV1AddressesResolvePostResponse200OutputAlertsItem> $alerts
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
<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiver extends \ArrayObject
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
     * Indicates the advisories list.
     *
     * @var list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiverAdvisoriesItem>
     */
    protected $advisories;
    /**
     * Indicates the regulatory prohibitions description.<br>Example: description.
     *
     * @var string
     */
    protected $description;
    /**
     * Indicates the prohibitory ID.<br>Example: id.
     *
     * @var string
     */
    protected $id;

    /**
     * Indicates the advisories list.
     *
     * @return list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiverAdvisoriesItem>
     */
    public function getAdvisories(): array
    {
        return $this->advisories;
    }

    /**
     * Indicates the advisories list.
     *
     * @param list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiverAdvisoriesItem> $advisories
     */
    public function setAdvisories(array $advisories): self
    {
        $this->initialized['advisories'] = true;
        $this->advisories = $advisories;

        return $this;
    }

    /**
     * Indicates the regulatory prohibitions description.<br>Example: description.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Indicates the regulatory prohibitions description.<br>Example: description.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Indicates the prohibitory ID.<br>Example: id.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Indicates the prohibitory ID.<br>Example: id.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }
}

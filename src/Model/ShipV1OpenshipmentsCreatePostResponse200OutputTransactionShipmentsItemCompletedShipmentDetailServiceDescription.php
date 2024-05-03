<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescription extends \ArrayObject
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
     * Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>.
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Specifies code of the Service.<br>example: 80.
     *
     * @var string
     */
    protected $code;
    /**
     * Branded, translated, and/or localized names for this service.
     *
     * @var list<ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescriptionNamesItem>
     */
    protected $names;
    /**
     * FOR FEDEX INTERNAL USE ONLY. The operating org code in a service.<br>Example: ["FXE", "FXE"].
     *
     * @var list<string>
     */
    protected $operatingOrgCodes;
    /**
     * Specifies astra Description.<br>Example: 2 DAY FRT.
     *
     * @var string
     */
    protected $astraDescription;
    /**
     * Specifies the description.
     *
     * @var string
     */
    protected $description;
    /**
     * FOR FEDEX INTERNAL USE ONLY, Designates the service ID.<br>Example: EP1000000027.
     *
     * @var string
     */
    protected $serviceId;
    /**
     * FOR FEDEX INTERNAL USE ONLY. This is tied to the Product EFS interface definition which will currently contain the values of parcel.<br>Example: EXPRESS_PARCEL.
     *
     * @var string
     */
    protected $serviceCategory;

    /**
     * Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>.
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }

    /**
     * Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>.
     */
    public function setServiceType(string $serviceType): self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;

        return $this;
    }

    /**
     * Specifies code of the Service.<br>example: 80.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Specifies code of the Service.<br>example: 80.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Branded, translated, and/or localized names for this service.
     *
     * @return list<ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescriptionNamesItem>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * Branded, translated, and/or localized names for this service.
     *
     * @param list<ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescriptionNamesItem> $names
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;

        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY. The operating org code in a service.<br>Example: ["FXE", "FXE"].
     *
     * @return list<string>
     */
    public function getOperatingOrgCodes(): array
    {
        return $this->operatingOrgCodes;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY. The operating org code in a service.<br>Example: ["FXE", "FXE"].
     *
     * @param list<string> $operatingOrgCodes
     */
    public function setOperatingOrgCodes(array $operatingOrgCodes): self
    {
        $this->initialized['operatingOrgCodes'] = true;
        $this->operatingOrgCodes = $operatingOrgCodes;

        return $this;
    }

    /**
     * Specifies astra Description.<br>Example: 2 DAY FRT.
     */
    public function getAstraDescription(): string
    {
        return $this->astraDescription;
    }

    /**
     * Specifies astra Description.<br>Example: 2 DAY FRT.
     */
    public function setAstraDescription(string $astraDescription): self
    {
        $this->initialized['astraDescription'] = true;
        $this->astraDescription = $astraDescription;

        return $this;
    }

    /**
     * Specifies the description.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Specifies the description.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY, Designates the service ID.<br>Example: EP1000000027.
     */
    public function getServiceId(): string
    {
        return $this->serviceId;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY, Designates the service ID.<br>Example: EP1000000027.
     */
    public function setServiceId(string $serviceId): self
    {
        $this->initialized['serviceId'] = true;
        $this->serviceId = $serviceId;

        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY. This is tied to the Product EFS interface definition which will currently contain the values of parcel.<br>Example: EXPRESS_PARCEL.
     */
    public function getServiceCategory(): string
    {
        return $this->serviceCategory;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY. This is tied to the Product EFS interface definition which will currently contain the values of parcel.<br>Example: EXPRESS_PARCEL.
     */
    public function setServiceCategory(string $serviceCategory): self
    {
        $this->initialized['serviceCategory'] = true;
        $this->serviceCategory = $serviceCategory;

        return $this;
    }
}

<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailServiceDescription extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Specifies code of the Service.<br>example: 80
     *
     * @var string
     */
    protected $code;
    /**
     * Branded, translated, and/or localized names for this service.
     *
     * @var list<ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailServiceDescriptionNamesItem>
     */
    protected $names;
    /**
     * FOR FEDEX INTERNAL USE ONLY. The operating org code in a service.<br>Example: ["FXE", "FXE"]
     *
     * @var list<string>
     */
    protected $operatingOrgCodes;
    /**
     * Specifies astra Description.<br>Example: 2 DAY FRT
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
     * FOR FEDEX INTERNAL USE ONLY, Designates the service ID.<br>Example: EP1000000027
     *
     * @var string
     */
    protected $serviceId;
    /**
     * FOR FEDEX INTERNAL USE ONLY. This is tied to the Product EFS interface definition which will currently contain the values of parcel.<br>Example: EXPRESS_PARCEL
     *
     * @var string
     */
    protected $serviceCategory;
    /**
     * Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     *
     * @return string
     */
    public function getServiceType() : string
    {
        return $this->serviceType;
    }
    /**
     * Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType) : self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * Specifies code of the Service.<br>example: 80
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Specifies code of the Service.<br>example: 80
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Branded, translated, and/or localized names for this service.
     *
     * @return list<ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailServiceDescriptionNamesItem>
     */
    public function getNames() : array
    {
        return $this->names;
    }
    /**
     * Branded, translated, and/or localized names for this service.
     *
     * @param list<ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailServiceDescriptionNamesItem> $names
     *
     * @return self
     */
    public function setNames(array $names) : self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * FOR FEDEX INTERNAL USE ONLY. The operating org code in a service.<br>Example: ["FXE", "FXE"]
     *
     * @return list<string>
     */
    public function getOperatingOrgCodes() : array
    {
        return $this->operatingOrgCodes;
    }
    /**
     * FOR FEDEX INTERNAL USE ONLY. The operating org code in a service.<br>Example: ["FXE", "FXE"]
     *
     * @param list<string> $operatingOrgCodes
     *
     * @return self
     */
    public function setOperatingOrgCodes(array $operatingOrgCodes) : self
    {
        $this->initialized['operatingOrgCodes'] = true;
        $this->operatingOrgCodes = $operatingOrgCodes;
        return $this;
    }
    /**
     * Specifies astra Description.<br>Example: 2 DAY FRT
     *
     * @return string
     */
    public function getAstraDescription() : string
    {
        return $this->astraDescription;
    }
    /**
     * Specifies astra Description.<br>Example: 2 DAY FRT
     *
     * @param string $astraDescription
     *
     * @return self
     */
    public function setAstraDescription(string $astraDescription) : self
    {
        $this->initialized['astraDescription'] = true;
        $this->astraDescription = $astraDescription;
        return $this;
    }
    /**
     * Specifies the description.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Specifies the description.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * FOR FEDEX INTERNAL USE ONLY, Designates the service ID.<br>Example: EP1000000027
     *
     * @return string
     */
    public function getServiceId() : string
    {
        return $this->serviceId;
    }
    /**
     * FOR FEDEX INTERNAL USE ONLY, Designates the service ID.<br>Example: EP1000000027
     *
     * @param string $serviceId
     *
     * @return self
     */
    public function setServiceId(string $serviceId) : self
    {
        $this->initialized['serviceId'] = true;
        $this->serviceId = $serviceId;
        return $this;
    }
    /**
     * FOR FEDEX INTERNAL USE ONLY. This is tied to the Product EFS interface definition which will currently contain the values of parcel.<br>Example: EXPRESS_PARCEL
     *
     * @return string
     */
    public function getServiceCategory() : string
    {
        return $this->serviceCategory;
    }
    /**
     * FOR FEDEX INTERNAL USE ONLY. This is tied to the Product EFS interface definition which will currently contain the values of parcel.<br>Example: EXPRESS_PARCEL
     *
     * @param string $serviceCategory
     *
     * @return self
     */
    public function setServiceCategory(string $serviceCategory) : self
    {
        $this->initialized['serviceCategory'] = true;
        $this->serviceCategory = $serviceCategory;
        return $this;
    }
}
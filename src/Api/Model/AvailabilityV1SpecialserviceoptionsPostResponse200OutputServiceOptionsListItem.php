<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItem extends \ArrayObject
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
     * Indicates the type of service that is used to ship the package.<br>Example: INTERNATIONAL_FIRST<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Specifies if international signature options are available.
     *
     * @var bool
     */
    protected $issEnabled;
    /**
     * All possible signature options if signature options are available.  Indicated by the issEnabled boolean.
     *
     * @var list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemSignatureOptionsListItem>
     */
    protected $signatureOptionsList;
    /**
     * Indicates the list of special services that are available at package level for some or all service types.
     *
     * @var list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemPackageSpecialServicesListItem>
     */
    protected $packageSpecialServicesList;
    /**
     * 
     *
     * @var list<string>
     */
    protected $returnShipmentList;
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * Indicates the battery option list.
     *
     * @var list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemBatteryOptionListItem>
     */
    protected $batteryOptionList;
    /**
     * Indicates the alert details.
     *
     * @var list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemAlertListItem>
     */
    protected $alertList;
    /**
     * Indicates the list of special services that are available at the shipment level for some or all service types.
     *
     * @var list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemShipmentSpecialServicesListItem>
     */
    protected $shipmentSpecialServicesList;
    /**
     * 
     *
     * @var list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemAlertsItem>
     */
    protected $alerts;
    /**
     * Indicates the type of service that is used to ship the package.<br>Example: INTERNATIONAL_FIRST<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }
    /**
     * Indicates the type of service that is used to ship the package.<br>Example: INTERNATIONAL_FIRST<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType): self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * Specifies if international signature options are available.
     *
     * @return bool
     */
    public function getIssEnabled(): bool
    {
        return $this->issEnabled;
    }
    /**
     * Specifies if international signature options are available.
     *
     * @param bool $issEnabled
     *
     * @return self
     */
    public function setIssEnabled(bool $issEnabled): self
    {
        $this->initialized['issEnabled'] = true;
        $this->issEnabled = $issEnabled;
        return $this;
    }
    /**
     * All possible signature options if signature options are available.  Indicated by the issEnabled boolean.
     *
     * @return list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemSignatureOptionsListItem>
     */
    public function getSignatureOptionsList(): array
    {
        return $this->signatureOptionsList;
    }
    /**
     * All possible signature options if signature options are available.  Indicated by the issEnabled boolean.
     *
     * @param list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemSignatureOptionsListItem> $signatureOptionsList
     *
     * @return self
     */
    public function setSignatureOptionsList(array $signatureOptionsList): self
    {
        $this->initialized['signatureOptionsList'] = true;
        $this->signatureOptionsList = $signatureOptionsList;
        return $this;
    }
    /**
     * Indicates the list of special services that are available at package level for some or all service types.
     *
     * @return list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemPackageSpecialServicesListItem>
     */
    public function getPackageSpecialServicesList(): array
    {
        return $this->packageSpecialServicesList;
    }
    /**
     * Indicates the list of special services that are available at package level for some or all service types.
     *
     * @param list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemPackageSpecialServicesListItem> $packageSpecialServicesList
     *
     * @return self
     */
    public function setPackageSpecialServicesList(array $packageSpecialServicesList): self
    {
        $this->initialized['packageSpecialServicesList'] = true;
        $this->packageSpecialServicesList = $packageSpecialServicesList;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getReturnShipmentList(): array
    {
        return $this->returnShipmentList;
    }
    /**
     * 
     *
     * @param list<string> $returnShipmentList
     *
     * @return self
     */
    public function setReturnShipmentList(array $returnShipmentList): self
    {
        $this->initialized['returnShipmentList'] = true;
        $this->returnShipmentList = $returnShipmentList;
        return $this;
    }
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * @return string
     */
    public function getCarrierCode(): string
    {
        return $this->carrierCode;
    }
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(string $carrierCode): self
    {
        $this->initialized['carrierCode'] = true;
        $this->carrierCode = $carrierCode;
        return $this;
    }
    /**
     * Indicates the battery option list.
     *
     * @return list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemBatteryOptionListItem>
     */
    public function getBatteryOptionList(): array
    {
        return $this->batteryOptionList;
    }
    /**
     * Indicates the battery option list.
     *
     * @param list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemBatteryOptionListItem> $batteryOptionList
     *
     * @return self
     */
    public function setBatteryOptionList(array $batteryOptionList): self
    {
        $this->initialized['batteryOptionList'] = true;
        $this->batteryOptionList = $batteryOptionList;
        return $this;
    }
    /**
     * Indicates the alert details.
     *
     * @return list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemAlertListItem>
     */
    public function getAlertList(): array
    {
        return $this->alertList;
    }
    /**
     * Indicates the alert details.
     *
     * @param list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemAlertListItem> $alertList
     *
     * @return self
     */
    public function setAlertList(array $alertList): self
    {
        $this->initialized['alertList'] = true;
        $this->alertList = $alertList;
        return $this;
    }
    /**
     * Indicates the list of special services that are available at the shipment level for some or all service types.
     *
     * @return list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemShipmentSpecialServicesListItem>
     */
    public function getShipmentSpecialServicesList(): array
    {
        return $this->shipmentSpecialServicesList;
    }
    /**
     * Indicates the list of special services that are available at the shipment level for some or all service types.
     *
     * @param list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemShipmentSpecialServicesListItem> $shipmentSpecialServicesList
     *
     * @return self
     */
    public function setShipmentSpecialServicesList(array $shipmentSpecialServicesList): self
    {
        $this->initialized['shipmentSpecialServicesList'] = true;
        $this->shipmentSpecialServicesList = $shipmentSpecialServicesList;
        return $this;
    }
    /**
     * 
     *
     * @return list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * 
     *
     * @param list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemAlertsItem> $alerts
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
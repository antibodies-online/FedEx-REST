<?php

namespace AntibodiesOnline\FedEx\Model;

class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail extends \ArrayObject
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
     * Indicate the location ID of the origin of shipment. <br> Example: YBZA
     *
     * @var list<string>
     */
    protected $originLocationIds;
    /**
     * Indicate the delivery commitment day.<br> Example: MON
     *
     * @var list<string>
     */
    protected $commitDays;
    /**
     * Indicate the service code. <br> Example: 06
     *
     * @var string
     */
    protected $serviceCode;
    /**
     * Specify the Airport Id. <br> Example: MEM
     *
     * @var string
     */
    protected $airportId;
    /**
     * Indicate the Standard Carrier Alpha Code (SCAC) is a privately controlled US code used to identify vessel operating common carriers (VOCC). It is typically two to four letters long.
     *
     * @var string
     */
    protected $scac;
    /**
     * Specify origin service area.<br> Example: AM
     *
     * @var list<string>
     */
    protected $originServiceAreas;
    /**
     * Specify the delivery commitment day. <br> Example: SAT
     *
     * @var string
     */
    protected $deliveryDay;
    /**
     * Specify the origin location ID.<br> Example: 6121
     *
     * @var list<int>
     */
    protected $originLocationNumbers;
    /**
     * Indicate the destination postal code.<br> Example: 38017
     *
     * @var string
     */
    protected $destinationPostalCode;
    /**
     * Indicate the shipment Commit Date. <br> Example: 2019-07-22T08:30:00
     *
     * @var string
     */
    protected $commitDate;
    /**
     * Indicate the ASTRA description for the label. <br> Example: XXXL1ST
     *
     * @var string
     */
    protected $astraDescription;
    /**
     * Indicate the delivery date. <br> Example: 2019-07-22T08:30:00
     *
     * @var string
     */
    protected $deliveryDate;
    /**
     * Indicate the delivery eligibilities.
     *
     * @var list<string>
     */
    protected $deliveryEligibilities;
    /**
     * indicate if ineligible For Money Back Guarantee.
     *
     * @var bool
     */
    protected $ineligibleForMoneyBackGuarantee;
    /**
     * Specify Maximum transit time. <br> Example: THREE_DAYS
     *
     * @var string
     */
    protected $maximumTransitTime;
    /**
     * Indicate Astra Planned Service Level. <br> Example: astraPlannedServicelevel
     *
     * @var string
     */
    protected $astraPlannedServiceLevel;
    /**
     * Indicate Destination Location Ids. <br> Example: HKAA
     *
     * @var list<string>
     */
    protected $destinationLocationIds;
    /**
     * Indicate destination location State Or Province code. <br> Example: TN<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     *
     * @var list<string>
     */
    protected $destinationLocationStateOrProvinceCodes;
    /**
     * Indicate the Transit Time in days. <br> Example: THREE_DAYS
     *
     * @var string
     */
    protected $transitTime;
    /**
     * Indicate the Packaging Code. <br> Example: M1M1M1
     *
     * @var string
     */
    protected $packagingCode;
    /**
     * Indicate the Destination Location Numbers. <br> Example: 386
     *
     * @var list<int>
     */
    protected $destinationLocationNumbers;
    /**
     * Indicate the Published Delivery Time. <br> Example: THREE_DAYS
     *
     * @var string
     */
    protected $publishedDeliveryTime;
    /**
     * Indicate the Country Code.<br>Example: [ US, IN]<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var list<string>
     */
    protected $countryCodes;
    /**
     * Specifies state Or Province Code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2. <br> Example: TN
     *
     * @var list<string>
     */
    protected $stateOrProvinceCodes;
    /**
     * This is FedEx URSA Prefix Code. <br> Example: PrefixCode
     *
     * @var string
     */
    protected $ursaPrefixCode;
    /**
     * This is URSA Suffix Code. <br> Example: SuffixCode
     *
     * @var string
     */
    protected $ursaSuffixCode;
    /**
     * This is Destination Service Areas. <br> Example: A2
     *
     * @var list<string>
     */
    protected $destinationServiceAreas;
    /**
     * This is Origin Postal Codes. <br> Example: M1M1M1
     *
     * @var list<string>
     */
    protected $originPostalCodes;
    /**
     * This is Custom Transit Time in days. <br> Example: THREE_DAYS
     *
     * @var string
     */
    protected $customTransitTime;
    /**
     * Indicate the location ID of the origin of shipment. <br> Example: YBZA
     *
     * @return list<string>
     */
    public function getOriginLocationIds() : array
    {
        return $this->originLocationIds;
    }
    /**
     * Indicate the location ID of the origin of shipment. <br> Example: YBZA
     *
     * @param list<string> $originLocationIds
     *
     * @return self
     */
    public function setOriginLocationIds(array $originLocationIds) : self
    {
        $this->initialized['originLocationIds'] = true;
        $this->originLocationIds = $originLocationIds;
        return $this;
    }
    /**
     * Indicate the delivery commitment day.<br> Example: MON
     *
     * @return list<string>
     */
    public function getCommitDays() : array
    {
        return $this->commitDays;
    }
    /**
     * Indicate the delivery commitment day.<br> Example: MON
     *
     * @param list<string> $commitDays
     *
     * @return self
     */
    public function setCommitDays(array $commitDays) : self
    {
        $this->initialized['commitDays'] = true;
        $this->commitDays = $commitDays;
        return $this;
    }
    /**
     * Indicate the service code. <br> Example: 06
     *
     * @return string
     */
    public function getServiceCode() : string
    {
        return $this->serviceCode;
    }
    /**
     * Indicate the service code. <br> Example: 06
     *
     * @param string $serviceCode
     *
     * @return self
     */
    public function setServiceCode(string $serviceCode) : self
    {
        $this->initialized['serviceCode'] = true;
        $this->serviceCode = $serviceCode;
        return $this;
    }
    /**
     * Specify the Airport Id. <br> Example: MEM
     *
     * @return string
     */
    public function getAirportId() : string
    {
        return $this->airportId;
    }
    /**
     * Specify the Airport Id. <br> Example: MEM
     *
     * @param string $airportId
     *
     * @return self
     */
    public function setAirportId(string $airportId) : self
    {
        $this->initialized['airportId'] = true;
        $this->airportId = $airportId;
        return $this;
    }
    /**
     * Indicate the Standard Carrier Alpha Code (SCAC) is a privately controlled US code used to identify vessel operating common carriers (VOCC). It is typically two to four letters long.
     *
     * @return string
     */
    public function getScac() : string
    {
        return $this->scac;
    }
    /**
     * Indicate the Standard Carrier Alpha Code (SCAC) is a privately controlled US code used to identify vessel operating common carriers (VOCC). It is typically two to four letters long.
     *
     * @param string $scac
     *
     * @return self
     */
    public function setScac(string $scac) : self
    {
        $this->initialized['scac'] = true;
        $this->scac = $scac;
        return $this;
    }
    /**
     * Specify origin service area.<br> Example: AM
     *
     * @return list<string>
     */
    public function getOriginServiceAreas() : array
    {
        return $this->originServiceAreas;
    }
    /**
     * Specify origin service area.<br> Example: AM
     *
     * @param list<string> $originServiceAreas
     *
     * @return self
     */
    public function setOriginServiceAreas(array $originServiceAreas) : self
    {
        $this->initialized['originServiceAreas'] = true;
        $this->originServiceAreas = $originServiceAreas;
        return $this;
    }
    /**
     * Specify the delivery commitment day. <br> Example: SAT
     *
     * @return string
     */
    public function getDeliveryDay() : string
    {
        return $this->deliveryDay;
    }
    /**
     * Specify the delivery commitment day. <br> Example: SAT
     *
     * @param string $deliveryDay
     *
     * @return self
     */
    public function setDeliveryDay(string $deliveryDay) : self
    {
        $this->initialized['deliveryDay'] = true;
        $this->deliveryDay = $deliveryDay;
        return $this;
    }
    /**
     * Specify the origin location ID.<br> Example: 6121
     *
     * @return list<int>
     */
    public function getOriginLocationNumbers() : array
    {
        return $this->originLocationNumbers;
    }
    /**
     * Specify the origin location ID.<br> Example: 6121
     *
     * @param list<int> $originLocationNumbers
     *
     * @return self
     */
    public function setOriginLocationNumbers(array $originLocationNumbers) : self
    {
        $this->initialized['originLocationNumbers'] = true;
        $this->originLocationNumbers = $originLocationNumbers;
        return $this;
    }
    /**
     * Indicate the destination postal code.<br> Example: 38017
     *
     * @return string
     */
    public function getDestinationPostalCode() : string
    {
        return $this->destinationPostalCode;
    }
    /**
     * Indicate the destination postal code.<br> Example: 38017
     *
     * @param string $destinationPostalCode
     *
     * @return self
     */
    public function setDestinationPostalCode(string $destinationPostalCode) : self
    {
        $this->initialized['destinationPostalCode'] = true;
        $this->destinationPostalCode = $destinationPostalCode;
        return $this;
    }
    /**
     * Indicate the shipment Commit Date. <br> Example: 2019-07-22T08:30:00
     *
     * @return string
     */
    public function getCommitDate() : string
    {
        return $this->commitDate;
    }
    /**
     * Indicate the shipment Commit Date. <br> Example: 2019-07-22T08:30:00
     *
     * @param string $commitDate
     *
     * @return self
     */
    public function setCommitDate(string $commitDate) : self
    {
        $this->initialized['commitDate'] = true;
        $this->commitDate = $commitDate;
        return $this;
    }
    /**
     * Indicate the ASTRA description for the label. <br> Example: XXXL1ST
     *
     * @return string
     */
    public function getAstraDescription() : string
    {
        return $this->astraDescription;
    }
    /**
     * Indicate the ASTRA description for the label. <br> Example: XXXL1ST
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
     * Indicate the delivery date. <br> Example: 2019-07-22T08:30:00
     *
     * @return string
     */
    public function getDeliveryDate() : string
    {
        return $this->deliveryDate;
    }
    /**
     * Indicate the delivery date. <br> Example: 2019-07-22T08:30:00
     *
     * @param string $deliveryDate
     *
     * @return self
     */
    public function setDeliveryDate(string $deliveryDate) : self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Indicate the delivery eligibilities.
     *
     * @return list<string>
     */
    public function getDeliveryEligibilities() : array
    {
        return $this->deliveryEligibilities;
    }
    /**
     * Indicate the delivery eligibilities.
     *
     * @param list<string> $deliveryEligibilities
     *
     * @return self
     */
    public function setDeliveryEligibilities(array $deliveryEligibilities) : self
    {
        $this->initialized['deliveryEligibilities'] = true;
        $this->deliveryEligibilities = $deliveryEligibilities;
        return $this;
    }
    /**
     * indicate if ineligible For Money Back Guarantee.
     *
     * @return bool
     */
    public function getIneligibleForMoneyBackGuarantee() : bool
    {
        return $this->ineligibleForMoneyBackGuarantee;
    }
    /**
     * indicate if ineligible For Money Back Guarantee.
     *
     * @param bool $ineligibleForMoneyBackGuarantee
     *
     * @return self
     */
    public function setIneligibleForMoneyBackGuarantee(bool $ineligibleForMoneyBackGuarantee) : self
    {
        $this->initialized['ineligibleForMoneyBackGuarantee'] = true;
        $this->ineligibleForMoneyBackGuarantee = $ineligibleForMoneyBackGuarantee;
        return $this;
    }
    /**
     * Specify Maximum transit time. <br> Example: THREE_DAYS
     *
     * @return string
     */
    public function getMaximumTransitTime() : string
    {
        return $this->maximumTransitTime;
    }
    /**
     * Specify Maximum transit time. <br> Example: THREE_DAYS
     *
     * @param string $maximumTransitTime
     *
     * @return self
     */
    public function setMaximumTransitTime(string $maximumTransitTime) : self
    {
        $this->initialized['maximumTransitTime'] = true;
        $this->maximumTransitTime = $maximumTransitTime;
        return $this;
    }
    /**
     * Indicate Astra Planned Service Level. <br> Example: astraPlannedServicelevel
     *
     * @return string
     */
    public function getAstraPlannedServiceLevel() : string
    {
        return $this->astraPlannedServiceLevel;
    }
    /**
     * Indicate Astra Planned Service Level. <br> Example: astraPlannedServicelevel
     *
     * @param string $astraPlannedServiceLevel
     *
     * @return self
     */
    public function setAstraPlannedServiceLevel(string $astraPlannedServiceLevel) : self
    {
        $this->initialized['astraPlannedServiceLevel'] = true;
        $this->astraPlannedServiceLevel = $astraPlannedServiceLevel;
        return $this;
    }
    /**
     * Indicate Destination Location Ids. <br> Example: HKAA
     *
     * @return list<string>
     */
    public function getDestinationLocationIds() : array
    {
        return $this->destinationLocationIds;
    }
    /**
     * Indicate Destination Location Ids. <br> Example: HKAA
     *
     * @param list<string> $destinationLocationIds
     *
     * @return self
     */
    public function setDestinationLocationIds(array $destinationLocationIds) : self
    {
        $this->initialized['destinationLocationIds'] = true;
        $this->destinationLocationIds = $destinationLocationIds;
        return $this;
    }
    /**
     * Indicate destination location State Or Province code. <br> Example: TN<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     *
     * @return list<string>
     */
    public function getDestinationLocationStateOrProvinceCodes() : array
    {
        return $this->destinationLocationStateOrProvinceCodes;
    }
    /**
     * Indicate destination location State Or Province code. <br> Example: TN<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     *
     * @param list<string> $destinationLocationStateOrProvinceCodes
     *
     * @return self
     */
    public function setDestinationLocationStateOrProvinceCodes(array $destinationLocationStateOrProvinceCodes) : self
    {
        $this->initialized['destinationLocationStateOrProvinceCodes'] = true;
        $this->destinationLocationStateOrProvinceCodes = $destinationLocationStateOrProvinceCodes;
        return $this;
    }
    /**
     * Indicate the Transit Time in days. <br> Example: THREE_DAYS
     *
     * @return string
     */
    public function getTransitTime() : string
    {
        return $this->transitTime;
    }
    /**
     * Indicate the Transit Time in days. <br> Example: THREE_DAYS
     *
     * @param string $transitTime
     *
     * @return self
     */
    public function setTransitTime(string $transitTime) : self
    {
        $this->initialized['transitTime'] = true;
        $this->transitTime = $transitTime;
        return $this;
    }
    /**
     * Indicate the Packaging Code. <br> Example: M1M1M1
     *
     * @return string
     */
    public function getPackagingCode() : string
    {
        return $this->packagingCode;
    }
    /**
     * Indicate the Packaging Code. <br> Example: M1M1M1
     *
     * @param string $packagingCode
     *
     * @return self
     */
    public function setPackagingCode(string $packagingCode) : self
    {
        $this->initialized['packagingCode'] = true;
        $this->packagingCode = $packagingCode;
        return $this;
    }
    /**
     * Indicate the Destination Location Numbers. <br> Example: 386
     *
     * @return list<int>
     */
    public function getDestinationLocationNumbers() : array
    {
        return $this->destinationLocationNumbers;
    }
    /**
     * Indicate the Destination Location Numbers. <br> Example: 386
     *
     * @param list<int> $destinationLocationNumbers
     *
     * @return self
     */
    public function setDestinationLocationNumbers(array $destinationLocationNumbers) : self
    {
        $this->initialized['destinationLocationNumbers'] = true;
        $this->destinationLocationNumbers = $destinationLocationNumbers;
        return $this;
    }
    /**
     * Indicate the Published Delivery Time. <br> Example: THREE_DAYS
     *
     * @return string
     */
    public function getPublishedDeliveryTime() : string
    {
        return $this->publishedDeliveryTime;
    }
    /**
     * Indicate the Published Delivery Time. <br> Example: THREE_DAYS
     *
     * @param string $publishedDeliveryTime
     *
     * @return self
     */
    public function setPublishedDeliveryTime(string $publishedDeliveryTime) : self
    {
        $this->initialized['publishedDeliveryTime'] = true;
        $this->publishedDeliveryTime = $publishedDeliveryTime;
        return $this;
    }
    /**
     * Indicate the Country Code.<br>Example: [ US, IN]<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return list<string>
     */
    public function getCountryCodes() : array
    {
        return $this->countryCodes;
    }
    /**
     * Indicate the Country Code.<br>Example: [ US, IN]<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @param list<string> $countryCodes
     *
     * @return self
     */
    public function setCountryCodes(array $countryCodes) : self
    {
        $this->initialized['countryCodes'] = true;
        $this->countryCodes = $countryCodes;
        return $this;
    }
    /**
     * Specifies state Or Province Code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2. <br> Example: TN
     *
     * @return list<string>
     */
    public function getStateOrProvinceCodes() : array
    {
        return $this->stateOrProvinceCodes;
    }
    /**
     * Specifies state Or Province Code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2. <br> Example: TN
     *
     * @param list<string> $stateOrProvinceCodes
     *
     * @return self
     */
    public function setStateOrProvinceCodes(array $stateOrProvinceCodes) : self
    {
        $this->initialized['stateOrProvinceCodes'] = true;
        $this->stateOrProvinceCodes = $stateOrProvinceCodes;
        return $this;
    }
    /**
     * This is FedEx URSA Prefix Code. <br> Example: PrefixCode
     *
     * @return string
     */
    public function getUrsaPrefixCode() : string
    {
        return $this->ursaPrefixCode;
    }
    /**
     * This is FedEx URSA Prefix Code. <br> Example: PrefixCode
     *
     * @param string $ursaPrefixCode
     *
     * @return self
     */
    public function setUrsaPrefixCode(string $ursaPrefixCode) : self
    {
        $this->initialized['ursaPrefixCode'] = true;
        $this->ursaPrefixCode = $ursaPrefixCode;
        return $this;
    }
    /**
     * This is URSA Suffix Code. <br> Example: SuffixCode
     *
     * @return string
     */
    public function getUrsaSuffixCode() : string
    {
        return $this->ursaSuffixCode;
    }
    /**
     * This is URSA Suffix Code. <br> Example: SuffixCode
     *
     * @param string $ursaSuffixCode
     *
     * @return self
     */
    public function setUrsaSuffixCode(string $ursaSuffixCode) : self
    {
        $this->initialized['ursaSuffixCode'] = true;
        $this->ursaSuffixCode = $ursaSuffixCode;
        return $this;
    }
    /**
     * This is Destination Service Areas. <br> Example: A2
     *
     * @return list<string>
     */
    public function getDestinationServiceAreas() : array
    {
        return $this->destinationServiceAreas;
    }
    /**
     * This is Destination Service Areas. <br> Example: A2
     *
     * @param list<string> $destinationServiceAreas
     *
     * @return self
     */
    public function setDestinationServiceAreas(array $destinationServiceAreas) : self
    {
        $this->initialized['destinationServiceAreas'] = true;
        $this->destinationServiceAreas = $destinationServiceAreas;
        return $this;
    }
    /**
     * This is Origin Postal Codes. <br> Example: M1M1M1
     *
     * @return list<string>
     */
    public function getOriginPostalCodes() : array
    {
        return $this->originPostalCodes;
    }
    /**
     * This is Origin Postal Codes. <br> Example: M1M1M1
     *
     * @param list<string> $originPostalCodes
     *
     * @return self
     */
    public function setOriginPostalCodes(array $originPostalCodes) : self
    {
        $this->initialized['originPostalCodes'] = true;
        $this->originPostalCodes = $originPostalCodes;
        return $this;
    }
    /**
     * This is Custom Transit Time in days. <br> Example: THREE_DAYS
     *
     * @return string
     */
    public function getCustomTransitTime() : string
    {
        return $this->customTransitTime;
    }
    /**
     * This is Custom Transit Time in days. <br> Example: THREE_DAYS
     *
     * @param string $customTransitTime
     *
     * @return self
     */
    public function setCustomTransitTime(string $customTransitTime) : self
    {
        $this->initialized['customTransitTime'] = true;
        $this->customTransitTime = $customTransitTime;
        return $this;
    }
}
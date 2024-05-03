<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailOperationalDetail extends \ArrayObject
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
     * Indicates the origin service area.<br>Example: A1.
     *
     * @var string
     */
    protected $originServiceArea;
    /**
     * Indicates the service code.<br>Example: 010.
     *
     * @var string
     */
    protected $serviceCode;
    /**
     * Indicates the airport identifier.<br>Example: DFW.
     *
     * @var string
     */
    protected $airportId;
    /**
     * Specifies the postal code.<br>Example: 38010<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Indicates standard carrier alpha code.
     *
     * @var string
     */
    protected $scac;
    /**
     * Specifies expected/estimated day of week of the delivery.<br>Example: TUE.
     *
     * @var string
     */
    protected $deliveryDay;
    /**
     * This is the origin Location identifier.<br>Example: 678.
     *
     * @var string
     */
    protected $originLocationId;
    /**
     * Indicate the two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Specifies astra description.<br>Example: SMART POST.
     *
     * @var string
     */
    protected $astraDescription;
    /**
     * Specifies origin location number.<br>Example: 243.
     *
     * @var int
     */
    protected $originLocationNumber;
    /**
     * Specifies delivery date for the shipment. The format is [YYYY-MM-DD]<br>Example: 2001-04-05.
     *
     * @var string
     */
    protected $deliveryDate;
    /**
     * FedEx Ground delivery features for which this shipment may be eligible.<br>Example: ["deliveryEligibilities"].
     *
     * @var list<string>
     */
    protected $deliveryEligibilities;
    /**
     * Indicates that this shipment is not eligible for money back guarantee.
     *
     * @var bool
     */
    protected $ineligibleForMoneyBackGuarantee;
    /**
     * Maximum expected transit time.<br>Example: SEVEN_DAYS.
     *
     * @var string
     */
    protected $maximumTransitTime;
    /**
     * This is the state or province code of the shipment destination location, and is not necessarily the same as the postal state.<br>Example: GA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>.
     *
     * @var string
     */
    protected $destinationLocationStateOrProvinceCode;
    /**
     * Text describing planned delivery.<br>Example: TUE - 15 OCT 10:30A.
     *
     * @var string
     */
    protected $astraPlannedServiceLevel;
    /**
     * Specifies the FedEx Destination Location Identifier.<br>Example: DALA.
     *
     * @var string
     */
    protected $destinationLocationId;
    /**
     * Standard transit time per origin, destination, and service.<br>Example: TWO_DAYS.
     *
     * @var string
     */
    protected $transitTime;
    /**
     * This is a placeholder for State or Province code.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br>Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>.
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * Indicates destination location number.<br>Example: 876.
     *
     * @var int
     */
    protected $destinationLocationNumber;
    /**
     * Indicates packaging code.<br>Example: 03.
     *
     * @var string
     */
    protected $packagingCode;
    /**
     * This is committed date of delivery.<br>Example: 2019-10-15.
     *
     * @var string
     */
    protected $commitDate;
    /**
     * This is delivery time, as published in Service Guide.<br>Example: 10:30A.
     *
     * @var string
     */
    protected $publishedDeliveryTime;
    /**
     * This is ursa suffix code.<br>Example: Ga.
     *
     * @var string
     */
    protected $ursaSuffixCode;
    /**
     * This is ursa prefix code.<br>Example: XH.
     *
     * @var string
     */
    protected $ursaPrefixCode;
    /**
     * Specifies destination service area.<br>Example: A1.
     *
     * @var string
     */
    protected $destinationServiceArea;
    /**
     * Committed day of week of delivery.<br>Example: TUE.
     *
     * @var string
     */
    protected $commitDay;
    /**
     * Transit time based on customer eligibility.<br>Example: ONE_DAY.
     *
     * @var string
     */
    protected $customTransitTime;

    /**
     * Indicates the origin service area.<br>Example: A1.
     */
    public function getOriginServiceArea(): string
    {
        return $this->originServiceArea;
    }

    /**
     * Indicates the origin service area.<br>Example: A1.
     */
    public function setOriginServiceArea(string $originServiceArea): self
    {
        $this->initialized['originServiceArea'] = true;
        $this->originServiceArea = $originServiceArea;

        return $this;
    }

    /**
     * Indicates the service code.<br>Example: 010.
     */
    public function getServiceCode(): string
    {
        return $this->serviceCode;
    }

    /**
     * Indicates the service code.<br>Example: 010.
     */
    public function setServiceCode(string $serviceCode): self
    {
        $this->initialized['serviceCode'] = true;
        $this->serviceCode = $serviceCode;

        return $this;
    }

    /**
     * Indicates the airport identifier.<br>Example: DFW.
     */
    public function getAirportId(): string
    {
        return $this->airportId;
    }

    /**
     * Indicates the airport identifier.<br>Example: DFW.
     */
    public function setAirportId(string $airportId): self
    {
        $this->initialized['airportId'] = true;
        $this->airportId = $airportId;

        return $this;
    }

    /**
     * Specifies the postal code.<br>Example: 38010<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>.
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * Specifies the postal code.<br>Example: 38010<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>.
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Indicates standard carrier alpha code.
     */
    public function getScac(): string
    {
        return $this->scac;
    }

    /**
     * Indicates standard carrier alpha code.
     */
    public function setScac(string $scac): self
    {
        $this->initialized['scac'] = true;
        $this->scac = $scac;

        return $this;
    }

    /**
     * Specifies expected/estimated day of week of the delivery.<br>Example: TUE.
     */
    public function getDeliveryDay(): string
    {
        return $this->deliveryDay;
    }

    /**
     * Specifies expected/estimated day of week of the delivery.<br>Example: TUE.
     */
    public function setDeliveryDay(string $deliveryDay): self
    {
        $this->initialized['deliveryDay'] = true;
        $this->deliveryDay = $deliveryDay;

        return $this;
    }

    /**
     * This is the origin Location identifier.<br>Example: 678.
     */
    public function getOriginLocationId(): string
    {
        return $this->originLocationId;
    }

    /**
     * This is the origin Location identifier.<br>Example: 678.
     */
    public function setOriginLocationId(string $originLocationId): self
    {
        $this->initialized['originLocationId'] = true;
        $this->originLocationId = $originLocationId;

        return $this;
    }

    /**
     * Indicate the two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>.
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Indicate the two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>.
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Specifies astra description.<br>Example: SMART POST.
     */
    public function getAstraDescription(): string
    {
        return $this->astraDescription;
    }

    /**
     * Specifies astra description.<br>Example: SMART POST.
     */
    public function setAstraDescription(string $astraDescription): self
    {
        $this->initialized['astraDescription'] = true;
        $this->astraDescription = $astraDescription;

        return $this;
    }

    /**
     * Specifies origin location number.<br>Example: 243.
     */
    public function getOriginLocationNumber(): int
    {
        return $this->originLocationNumber;
    }

    /**
     * Specifies origin location number.<br>Example: 243.
     */
    public function setOriginLocationNumber(int $originLocationNumber): self
    {
        $this->initialized['originLocationNumber'] = true;
        $this->originLocationNumber = $originLocationNumber;

        return $this;
    }

    /**
     * Specifies delivery date for the shipment. The format is [YYYY-MM-DD]<br>Example: 2001-04-05.
     */
    public function getDeliveryDate(): string
    {
        return $this->deliveryDate;
    }

    /**
     * Specifies delivery date for the shipment. The format is [YYYY-MM-DD]<br>Example: 2001-04-05.
     */
    public function setDeliveryDate(string $deliveryDate): self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * FedEx Ground delivery features for which this shipment may be eligible.<br>Example: ["deliveryEligibilities"].
     *
     * @return list<string>
     */
    public function getDeliveryEligibilities(): array
    {
        return $this->deliveryEligibilities;
    }

    /**
     * FedEx Ground delivery features for which this shipment may be eligible.<br>Example: ["deliveryEligibilities"].
     *
     * @param list<string> $deliveryEligibilities
     */
    public function setDeliveryEligibilities(array $deliveryEligibilities): self
    {
        $this->initialized['deliveryEligibilities'] = true;
        $this->deliveryEligibilities = $deliveryEligibilities;

        return $this;
    }

    /**
     * Indicates that this shipment is not eligible for money back guarantee.
     */
    public function getIneligibleForMoneyBackGuarantee(): bool
    {
        return $this->ineligibleForMoneyBackGuarantee;
    }

    /**
     * Indicates that this shipment is not eligible for money back guarantee.
     */
    public function setIneligibleForMoneyBackGuarantee(bool $ineligibleForMoneyBackGuarantee): self
    {
        $this->initialized['ineligibleForMoneyBackGuarantee'] = true;
        $this->ineligibleForMoneyBackGuarantee = $ineligibleForMoneyBackGuarantee;

        return $this;
    }

    /**
     * Maximum expected transit time.<br>Example: SEVEN_DAYS.
     */
    public function getMaximumTransitTime(): string
    {
        return $this->maximumTransitTime;
    }

    /**
     * Maximum expected transit time.<br>Example: SEVEN_DAYS.
     */
    public function setMaximumTransitTime(string $maximumTransitTime): self
    {
        $this->initialized['maximumTransitTime'] = true;
        $this->maximumTransitTime = $maximumTransitTime;

        return $this;
    }

    /**
     * This is the state or province code of the shipment destination location, and is not necessarily the same as the postal state.<br>Example: GA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>.
     */
    public function getDestinationLocationStateOrProvinceCode(): string
    {
        return $this->destinationLocationStateOrProvinceCode;
    }

    /**
     * This is the state or province code of the shipment destination location, and is not necessarily the same as the postal state.<br>Example: GA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>.
     */
    public function setDestinationLocationStateOrProvinceCode(string $destinationLocationStateOrProvinceCode): self
    {
        $this->initialized['destinationLocationStateOrProvinceCode'] = true;
        $this->destinationLocationStateOrProvinceCode = $destinationLocationStateOrProvinceCode;

        return $this;
    }

    /**
     * Text describing planned delivery.<br>Example: TUE - 15 OCT 10:30A.
     */
    public function getAstraPlannedServiceLevel(): string
    {
        return $this->astraPlannedServiceLevel;
    }

    /**
     * Text describing planned delivery.<br>Example: TUE - 15 OCT 10:30A.
     */
    public function setAstraPlannedServiceLevel(string $astraPlannedServiceLevel): self
    {
        $this->initialized['astraPlannedServiceLevel'] = true;
        $this->astraPlannedServiceLevel = $astraPlannedServiceLevel;

        return $this;
    }

    /**
     * Specifies the FedEx Destination Location Identifier.<br>Example: DALA.
     */
    public function getDestinationLocationId(): string
    {
        return $this->destinationLocationId;
    }

    /**
     * Specifies the FedEx Destination Location Identifier.<br>Example: DALA.
     */
    public function setDestinationLocationId(string $destinationLocationId): self
    {
        $this->initialized['destinationLocationId'] = true;
        $this->destinationLocationId = $destinationLocationId;

        return $this;
    }

    /**
     * Standard transit time per origin, destination, and service.<br>Example: TWO_DAYS.
     */
    public function getTransitTime(): string
    {
        return $this->transitTime;
    }

    /**
     * Standard transit time per origin, destination, and service.<br>Example: TWO_DAYS.
     */
    public function setTransitTime(string $transitTime): self
    {
        $this->initialized['transitTime'] = true;
        $this->transitTime = $transitTime;

        return $this;
    }

    /**
     * This is a placeholder for State or Province code.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br>Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>.
     */
    public function getStateOrProvinceCode(): string
    {
        return $this->stateOrProvinceCode;
    }

    /**
     * This is a placeholder for State or Province code.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br>Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>.
     */
    public function setStateOrProvinceCode(string $stateOrProvinceCode): self
    {
        $this->initialized['stateOrProvinceCode'] = true;
        $this->stateOrProvinceCode = $stateOrProvinceCode;

        return $this;
    }

    /**
     * Indicates destination location number.<br>Example: 876.
     */
    public function getDestinationLocationNumber(): int
    {
        return $this->destinationLocationNumber;
    }

    /**
     * Indicates destination location number.<br>Example: 876.
     */
    public function setDestinationLocationNumber(int $destinationLocationNumber): self
    {
        $this->initialized['destinationLocationNumber'] = true;
        $this->destinationLocationNumber = $destinationLocationNumber;

        return $this;
    }

    /**
     * Indicates packaging code.<br>Example: 03.
     */
    public function getPackagingCode(): string
    {
        return $this->packagingCode;
    }

    /**
     * Indicates packaging code.<br>Example: 03.
     */
    public function setPackagingCode(string $packagingCode): self
    {
        $this->initialized['packagingCode'] = true;
        $this->packagingCode = $packagingCode;

        return $this;
    }

    /**
     * This is committed date of delivery.<br>Example: 2019-10-15.
     */
    public function getCommitDate(): string
    {
        return $this->commitDate;
    }

    /**
     * This is committed date of delivery.<br>Example: 2019-10-15.
     */
    public function setCommitDate(string $commitDate): self
    {
        $this->initialized['commitDate'] = true;
        $this->commitDate = $commitDate;

        return $this;
    }

    /**
     * This is delivery time, as published in Service Guide.<br>Example: 10:30A.
     */
    public function getPublishedDeliveryTime(): string
    {
        return $this->publishedDeliveryTime;
    }

    /**
     * This is delivery time, as published in Service Guide.<br>Example: 10:30A.
     */
    public function setPublishedDeliveryTime(string $publishedDeliveryTime): self
    {
        $this->initialized['publishedDeliveryTime'] = true;
        $this->publishedDeliveryTime = $publishedDeliveryTime;

        return $this;
    }

    /**
     * This is ursa suffix code.<br>Example: Ga.
     */
    public function getUrsaSuffixCode(): string
    {
        return $this->ursaSuffixCode;
    }

    /**
     * This is ursa suffix code.<br>Example: Ga.
     */
    public function setUrsaSuffixCode(string $ursaSuffixCode): self
    {
        $this->initialized['ursaSuffixCode'] = true;
        $this->ursaSuffixCode = $ursaSuffixCode;

        return $this;
    }

    /**
     * This is ursa prefix code.<br>Example: XH.
     */
    public function getUrsaPrefixCode(): string
    {
        return $this->ursaPrefixCode;
    }

    /**
     * This is ursa prefix code.<br>Example: XH.
     */
    public function setUrsaPrefixCode(string $ursaPrefixCode): self
    {
        $this->initialized['ursaPrefixCode'] = true;
        $this->ursaPrefixCode = $ursaPrefixCode;

        return $this;
    }

    /**
     * Specifies destination service area.<br>Example: A1.
     */
    public function getDestinationServiceArea(): string
    {
        return $this->destinationServiceArea;
    }

    /**
     * Specifies destination service area.<br>Example: A1.
     */
    public function setDestinationServiceArea(string $destinationServiceArea): self
    {
        $this->initialized['destinationServiceArea'] = true;
        $this->destinationServiceArea = $destinationServiceArea;

        return $this;
    }

    /**
     * Committed day of week of delivery.<br>Example: TUE.
     */
    public function getCommitDay(): string
    {
        return $this->commitDay;
    }

    /**
     * Committed day of week of delivery.<br>Example: TUE.
     */
    public function setCommitDay(string $commitDay): self
    {
        $this->initialized['commitDay'] = true;
        $this->commitDay = $commitDay;

        return $this;
    }

    /**
     * Transit time based on customer eligibility.<br>Example: ONE_DAY.
     */
    public function getCustomTransitTime(): string
    {
        return $this->customTransitTime;
    }

    /**
     * Transit time based on customer eligibility.<br>Example: ONE_DAY.
     */
    public function setCustomTransitTime(string $customTransitTime): self
    {
        $this->initialized['customTransitTime'] = true;
        $this->customTransitTime = $customTransitTime;

        return $this;
    }
}
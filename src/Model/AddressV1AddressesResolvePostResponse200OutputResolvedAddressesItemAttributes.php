<?php

namespace AntibodiesOnline\FedEx\Model;

class AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributes extends \ArrayObject
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
     * true indicates the input address is a POBox.
     *
     * @var bool
     */
    protected $pOBox;
    /**
     * True indicates a POBox only postal code.
     *
     * @var bool
     */
    protected $pOBoxOnlyZIP;
    /**
     * True indicates when the address comes under a new ZIP code that did not exists previously.
     *
     * @var bool
     */
    protected $splitZip;
    /**
     * True indicates the resolved address includes a suite number, but it was missing in the request.
     *
     * @var bool
     */
    protected $suiteRequiredButMissing;
    /**
     * True indicates an invalid suite number.
     *
     * @var bool
     */
    protected $invalidSuiteNumber;
    /**
     * Type of input information (Currently only option is RAW_ADDRESS).
     *
     * @var string
     */
    protected $resolutionInput;
    /**
     * True indicates the postal delivery address is valid delivery point.
     *
     * @var bool
     */
    protected $dPV;
    /**
     * Indicates the type of resolution method utilized to resolve the address.  Valid Values:  USPS_VALIDATE (US postal), NAVTEQ_GEO_VALIDATE or RELEATLAS_GEO_VALIDATED (US geo/map validated), CA_VALIDATE (Canada postal), GENERIC_VALIADTE (other validation).
     *
     * @var string
     */
    protected $resolutionMethod;
    /**
     * Month and year of the reference data that was used to identify the address.
     *
     * @var string
     */
    protected $dataVintage;
    /**
     * Indicates 'Postal' or 'Map' date was used to match the address.
     *
     * @var string
     */
    protected $matchSource;
    /**
     * True indicates the country is supported by the Address Validation service.
     *
     * @var bool
     */
    protected $countrySupported;
    /**
     * True indicates the address is in a valid format.
     *
     * @var bool
     */
    protected $validlyFormed;
    /**
     * True indicates the address matches to a record in the address validation repository.
     *
     * @var bool
     */
    protected $matched;
    /**
     * True indicates the address was successfully resolved.
     *
     * @var bool
     */
    protected $resolved;
    /**
     * True indicates the address was inserted into the Address data repository.
     *
     * @var bool
     */
    protected $inserted;
    /**
     * True indicates that an input address was resolved to a standardized address for the base address of a multi-unit building. False indicates that the address was not resolved to a standardized address for the base address of a multi-unit building.
     *
     * @var bool
     */
    protected $multiUnitBase;
    /**
     * True indicates the input address was resolved to a standardized address based upon a Zip-11 postal code match. This is the highest level of postal code validation.
     *
     * @var bool
     */
    protected $zIP11Match;
    /**
     * True indicates that the input address was resolved to a standardized address based upon at least a ZIP+4 match, for example 80003-5581.
     *
     * @var bool
     */
    protected $zIP4Match;
    /**
     * True indicates that the postal code of the address is unique for a specific postal customer address. The ZIP may apply to a single unit or floor within a building, to an entire building, or to an institution or corporate campus.
     *
     * @var bool
     */
    protected $uniqueZIP;
    /**
     * True indicates that the house number and street name were validated against reference data.
     *
     * @var bool
     */
    protected $streetAddress;
    /**
     * True indicates a Rural Route conversion was applied to the address in order to process it.
     *
     * @var bool
     */
    protected $rRConversion;
    /**
     * True indicates address contains multiple units.
     *
     * @var bool
     */
    protected $validMultiUnit;
    /**
     * valid values:<br>RAW - address country not supported.<br>NORMALIZED - address country supported, but unable to match the address against reference data.<br>STANDARDIZED - address service was able to successfully match the address against reference data.
     *
     * @var string
     */
    protected $addressType;
    /**
     * Indicates the depth/precision of the address.  MULTI_TENANT_UNIT indicates that the address has valid secondary information.<br>MULTI_TENANT_BASE indicates that the address is a valid multi tentant location but secondary information either was not provided or could not be validated.<br>PO_BOX indicates that the local postal authority services the address through a PO Box.<br>UNIQUE_ZIP indicates that the address could be validated to the postal code level and that postal code is a unique zip for the USPS.<br>STREET_ADDRESS / Street indicates that the location is not a valid multi tenant location.<br>StreetBuilding indicates that the address was validated to a building name that is in the reference data.<br>StreetOrganization indicates that the address was validated to an organization name that is in the reference data.<br>StreetName indicates that the address was validated to the street name level in reference data and the house number (if provided) could not be validated.valid values:<br>MULTI_TENANT_UNIT- address consists of multiple units, some could be BUSINESS, some could be MIXED.
     *
     * @var string
     */
    protected $addressPrecision;
    /**
     * True indicates the address requested has multiple matches available, usually due to a simPle difference such as a leading directional.
     *
     * @var bool
     */
    protected $multipleMatches;
    /**
     * true indicates the input address is a POBox.
     *
     * @return bool
     */
    public function getPOBox() : bool
    {
        return $this->pOBox;
    }
    /**
     * true indicates the input address is a POBox.
     *
     * @param bool $pOBox
     *
     * @return self
     */
    public function setPOBox(bool $pOBox) : self
    {
        $this->initialized['pOBox'] = true;
        $this->pOBox = $pOBox;
        return $this;
    }
    /**
     * True indicates a POBox only postal code.
     *
     * @return bool
     */
    public function getPOBoxOnlyZIP() : bool
    {
        return $this->pOBoxOnlyZIP;
    }
    /**
     * True indicates a POBox only postal code.
     *
     * @param bool $pOBoxOnlyZIP
     *
     * @return self
     */
    public function setPOBoxOnlyZIP(bool $pOBoxOnlyZIP) : self
    {
        $this->initialized['pOBoxOnlyZIP'] = true;
        $this->pOBoxOnlyZIP = $pOBoxOnlyZIP;
        return $this;
    }
    /**
     * True indicates when the address comes under a new ZIP code that did not exists previously.
     *
     * @return bool
     */
    public function getSplitZip() : bool
    {
        return $this->splitZip;
    }
    /**
     * True indicates when the address comes under a new ZIP code that did not exists previously.
     *
     * @param bool $splitZip
     *
     * @return self
     */
    public function setSplitZip(bool $splitZip) : self
    {
        $this->initialized['splitZip'] = true;
        $this->splitZip = $splitZip;
        return $this;
    }
    /**
     * True indicates the resolved address includes a suite number, but it was missing in the request.
     *
     * @return bool
     */
    public function getSuiteRequiredButMissing() : bool
    {
        return $this->suiteRequiredButMissing;
    }
    /**
     * True indicates the resolved address includes a suite number, but it was missing in the request.
     *
     * @param bool $suiteRequiredButMissing
     *
     * @return self
     */
    public function setSuiteRequiredButMissing(bool $suiteRequiredButMissing) : self
    {
        $this->initialized['suiteRequiredButMissing'] = true;
        $this->suiteRequiredButMissing = $suiteRequiredButMissing;
        return $this;
    }
    /**
     * True indicates an invalid suite number.
     *
     * @return bool
     */
    public function getInvalidSuiteNumber() : bool
    {
        return $this->invalidSuiteNumber;
    }
    /**
     * True indicates an invalid suite number.
     *
     * @param bool $invalidSuiteNumber
     *
     * @return self
     */
    public function setInvalidSuiteNumber(bool $invalidSuiteNumber) : self
    {
        $this->initialized['invalidSuiteNumber'] = true;
        $this->invalidSuiteNumber = $invalidSuiteNumber;
        return $this;
    }
    /**
     * Type of input information (Currently only option is RAW_ADDRESS).
     *
     * @return string
     */
    public function getResolutionInput() : string
    {
        return $this->resolutionInput;
    }
    /**
     * Type of input information (Currently only option is RAW_ADDRESS).
     *
     * @param string $resolutionInput
     *
     * @return self
     */
    public function setResolutionInput(string $resolutionInput) : self
    {
        $this->initialized['resolutionInput'] = true;
        $this->resolutionInput = $resolutionInput;
        return $this;
    }
    /**
     * True indicates the postal delivery address is valid delivery point.
     *
     * @return bool
     */
    public function getDPV() : bool
    {
        return $this->dPV;
    }
    /**
     * True indicates the postal delivery address is valid delivery point.
     *
     * @param bool $dPV
     *
     * @return self
     */
    public function setDPV(bool $dPV) : self
    {
        $this->initialized['dPV'] = true;
        $this->dPV = $dPV;
        return $this;
    }
    /**
     * Indicates the type of resolution method utilized to resolve the address.  Valid Values:  USPS_VALIDATE (US postal), NAVTEQ_GEO_VALIDATE or RELEATLAS_GEO_VALIDATED (US geo/map validated), CA_VALIDATE (Canada postal), GENERIC_VALIADTE (other validation).
     *
     * @return string
     */
    public function getResolutionMethod() : string
    {
        return $this->resolutionMethod;
    }
    /**
     * Indicates the type of resolution method utilized to resolve the address.  Valid Values:  USPS_VALIDATE (US postal), NAVTEQ_GEO_VALIDATE or RELEATLAS_GEO_VALIDATED (US geo/map validated), CA_VALIDATE (Canada postal), GENERIC_VALIADTE (other validation).
     *
     * @param string $resolutionMethod
     *
     * @return self
     */
    public function setResolutionMethod(string $resolutionMethod) : self
    {
        $this->initialized['resolutionMethod'] = true;
        $this->resolutionMethod = $resolutionMethod;
        return $this;
    }
    /**
     * Month and year of the reference data that was used to identify the address.
     *
     * @return string
     */
    public function getDataVintage() : string
    {
        return $this->dataVintage;
    }
    /**
     * Month and year of the reference data that was used to identify the address.
     *
     * @param string $dataVintage
     *
     * @return self
     */
    public function setDataVintage(string $dataVintage) : self
    {
        $this->initialized['dataVintage'] = true;
        $this->dataVintage = $dataVintage;
        return $this;
    }
    /**
     * Indicates 'Postal' or 'Map' date was used to match the address.
     *
     * @return string
     */
    public function getMatchSource() : string
    {
        return $this->matchSource;
    }
    /**
     * Indicates 'Postal' or 'Map' date was used to match the address.
     *
     * @param string $matchSource
     *
     * @return self
     */
    public function setMatchSource(string $matchSource) : self
    {
        $this->initialized['matchSource'] = true;
        $this->matchSource = $matchSource;
        return $this;
    }
    /**
     * True indicates the country is supported by the Address Validation service.
     *
     * @return bool
     */
    public function getCountrySupported() : bool
    {
        return $this->countrySupported;
    }
    /**
     * True indicates the country is supported by the Address Validation service.
     *
     * @param bool $countrySupported
     *
     * @return self
     */
    public function setCountrySupported(bool $countrySupported) : self
    {
        $this->initialized['countrySupported'] = true;
        $this->countrySupported = $countrySupported;
        return $this;
    }
    /**
     * True indicates the address is in a valid format.
     *
     * @return bool
     */
    public function getValidlyFormed() : bool
    {
        return $this->validlyFormed;
    }
    /**
     * True indicates the address is in a valid format.
     *
     * @param bool $validlyFormed
     *
     * @return self
     */
    public function setValidlyFormed(bool $validlyFormed) : self
    {
        $this->initialized['validlyFormed'] = true;
        $this->validlyFormed = $validlyFormed;
        return $this;
    }
    /**
     * True indicates the address matches to a record in the address validation repository.
     *
     * @return bool
     */
    public function getMatched() : bool
    {
        return $this->matched;
    }
    /**
     * True indicates the address matches to a record in the address validation repository.
     *
     * @param bool $matched
     *
     * @return self
     */
    public function setMatched(bool $matched) : self
    {
        $this->initialized['matched'] = true;
        $this->matched = $matched;
        return $this;
    }
    /**
     * True indicates the address was successfully resolved.
     *
     * @return bool
     */
    public function getResolved() : bool
    {
        return $this->resolved;
    }
    /**
     * True indicates the address was successfully resolved.
     *
     * @param bool $resolved
     *
     * @return self
     */
    public function setResolved(bool $resolved) : self
    {
        $this->initialized['resolved'] = true;
        $this->resolved = $resolved;
        return $this;
    }
    /**
     * True indicates the address was inserted into the Address data repository.
     *
     * @return bool
     */
    public function getInserted() : bool
    {
        return $this->inserted;
    }
    /**
     * True indicates the address was inserted into the Address data repository.
     *
     * @param bool $inserted
     *
     * @return self
     */
    public function setInserted(bool $inserted) : self
    {
        $this->initialized['inserted'] = true;
        $this->inserted = $inserted;
        return $this;
    }
    /**
     * True indicates that an input address was resolved to a standardized address for the base address of a multi-unit building. False indicates that the address was not resolved to a standardized address for the base address of a multi-unit building.
     *
     * @return bool
     */
    public function getMultiUnitBase() : bool
    {
        return $this->multiUnitBase;
    }
    /**
     * True indicates that an input address was resolved to a standardized address for the base address of a multi-unit building. False indicates that the address was not resolved to a standardized address for the base address of a multi-unit building.
     *
     * @param bool $multiUnitBase
     *
     * @return self
     */
    public function setMultiUnitBase(bool $multiUnitBase) : self
    {
        $this->initialized['multiUnitBase'] = true;
        $this->multiUnitBase = $multiUnitBase;
        return $this;
    }
    /**
     * True indicates the input address was resolved to a standardized address based upon a Zip-11 postal code match. This is the highest level of postal code validation.
     *
     * @return bool
     */
    public function getZIP11Match() : bool
    {
        return $this->zIP11Match;
    }
    /**
     * True indicates the input address was resolved to a standardized address based upon a Zip-11 postal code match. This is the highest level of postal code validation.
     *
     * @param bool $zIP11Match
     *
     * @return self
     */
    public function setZIP11Match(bool $zIP11Match) : self
    {
        $this->initialized['zIP11Match'] = true;
        $this->zIP11Match = $zIP11Match;
        return $this;
    }
    /**
     * True indicates that the input address was resolved to a standardized address based upon at least a ZIP+4 match, for example 80003-5581.
     *
     * @return bool
     */
    public function getZIP4Match() : bool
    {
        return $this->zIP4Match;
    }
    /**
     * True indicates that the input address was resolved to a standardized address based upon at least a ZIP+4 match, for example 80003-5581.
     *
     * @param bool $zIP4Match
     *
     * @return self
     */
    public function setZIP4Match(bool $zIP4Match) : self
    {
        $this->initialized['zIP4Match'] = true;
        $this->zIP4Match = $zIP4Match;
        return $this;
    }
    /**
     * True indicates that the postal code of the address is unique for a specific postal customer address. The ZIP may apply to a single unit or floor within a building, to an entire building, or to an institution or corporate campus.
     *
     * @return bool
     */
    public function getUniqueZIP() : bool
    {
        return $this->uniqueZIP;
    }
    /**
     * True indicates that the postal code of the address is unique for a specific postal customer address. The ZIP may apply to a single unit or floor within a building, to an entire building, or to an institution or corporate campus.
     *
     * @param bool $uniqueZIP
     *
     * @return self
     */
    public function setUniqueZIP(bool $uniqueZIP) : self
    {
        $this->initialized['uniqueZIP'] = true;
        $this->uniqueZIP = $uniqueZIP;
        return $this;
    }
    /**
     * True indicates that the house number and street name were validated against reference data.
     *
     * @return bool
     */
    public function getStreetAddress() : bool
    {
        return $this->streetAddress;
    }
    /**
     * True indicates that the house number and street name were validated against reference data.
     *
     * @param bool $streetAddress
     *
     * @return self
     */
    public function setStreetAddress(bool $streetAddress) : self
    {
        $this->initialized['streetAddress'] = true;
        $this->streetAddress = $streetAddress;
        return $this;
    }
    /**
     * True indicates a Rural Route conversion was applied to the address in order to process it.
     *
     * @return bool
     */
    public function getRRConversion() : bool
    {
        return $this->rRConversion;
    }
    /**
     * True indicates a Rural Route conversion was applied to the address in order to process it.
     *
     * @param bool $rRConversion
     *
     * @return self
     */
    public function setRRConversion(bool $rRConversion) : self
    {
        $this->initialized['rRConversion'] = true;
        $this->rRConversion = $rRConversion;
        return $this;
    }
    /**
     * True indicates address contains multiple units.
     *
     * @return bool
     */
    public function getValidMultiUnit() : bool
    {
        return $this->validMultiUnit;
    }
    /**
     * True indicates address contains multiple units.
     *
     * @param bool $validMultiUnit
     *
     * @return self
     */
    public function setValidMultiUnit(bool $validMultiUnit) : self
    {
        $this->initialized['validMultiUnit'] = true;
        $this->validMultiUnit = $validMultiUnit;
        return $this;
    }
    /**
     * valid values:<br>RAW - address country not supported.<br>NORMALIZED - address country supported, but unable to match the address against reference data.<br>STANDARDIZED - address service was able to successfully match the address against reference data.
     *
     * @return string
     */
    public function getAddressType() : string
    {
        return $this->addressType;
    }
    /**
     * valid values:<br>RAW - address country not supported.<br>NORMALIZED - address country supported, but unable to match the address against reference data.<br>STANDARDIZED - address service was able to successfully match the address against reference data.
     *
     * @param string $addressType
     *
     * @return self
     */
    public function setAddressType(string $addressType) : self
    {
        $this->initialized['addressType'] = true;
        $this->addressType = $addressType;
        return $this;
    }
    /**
     * Indicates the depth/precision of the address.  MULTI_TENANT_UNIT indicates that the address has valid secondary information.<br>MULTI_TENANT_BASE indicates that the address is a valid multi tentant location but secondary information either was not provided or could not be validated.<br>PO_BOX indicates that the local postal authority services the address through a PO Box.<br>UNIQUE_ZIP indicates that the address could be validated to the postal code level and that postal code is a unique zip for the USPS.<br>STREET_ADDRESS / Street indicates that the location is not a valid multi tenant location.<br>StreetBuilding indicates that the address was validated to a building name that is in the reference data.<br>StreetOrganization indicates that the address was validated to an organization name that is in the reference data.<br>StreetName indicates that the address was validated to the street name level in reference data and the house number (if provided) could not be validated.valid values:<br>MULTI_TENANT_UNIT- address consists of multiple units, some could be BUSINESS, some could be MIXED.
     *
     * @return string
     */
    public function getAddressPrecision() : string
    {
        return $this->addressPrecision;
    }
    /**
     * Indicates the depth/precision of the address.  MULTI_TENANT_UNIT indicates that the address has valid secondary information.<br>MULTI_TENANT_BASE indicates that the address is a valid multi tentant location but secondary information either was not provided or could not be validated.<br>PO_BOX indicates that the local postal authority services the address through a PO Box.<br>UNIQUE_ZIP indicates that the address could be validated to the postal code level and that postal code is a unique zip for the USPS.<br>STREET_ADDRESS / Street indicates that the location is not a valid multi tenant location.<br>StreetBuilding indicates that the address was validated to a building name that is in the reference data.<br>StreetOrganization indicates that the address was validated to an organization name that is in the reference data.<br>StreetName indicates that the address was validated to the street name level in reference data and the house number (if provided) could not be validated.valid values:<br>MULTI_TENANT_UNIT- address consists of multiple units, some could be BUSINESS, some could be MIXED.
     *
     * @param string $addressPrecision
     *
     * @return self
     */
    public function setAddressPrecision(string $addressPrecision) : self
    {
        $this->initialized['addressPrecision'] = true;
        $this->addressPrecision = $addressPrecision;
        return $this;
    }
    /**
     * True indicates the address requested has multiple matches available, usually due to a simPle difference such as a leading directional.
     *
     * @return bool
     */
    public function getMultipleMatches() : bool
    {
        return $this->multipleMatches;
    }
    /**
     * True indicates the address requested has multiple matches available, usually due to a simPle difference such as a leading directional.
     *
     * @param bool $multipleMatches
     *
     * @return self
     */
    public function setMultipleMatches(bool $multipleMatches) : self
    {
        $this->initialized['multipleMatches'] = true;
        $this->multipleMatches = $multipleMatches;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocuments extends \ArrayObject
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
     * Object representing the information needed during the interaction with clients
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsUserMessage
     */
    protected $userMessage;
    /**
     * This represents document support type.
     *
     * @var string
     */
    protected $supportType;
    /**
     * This is a Requirement type.
     *
     * @var string
     */
    protected $allowability;
    /**
     * This represents file name.
     *
     * @var string
     */
    protected $fileName;
    /**
     * Specifies the document type.
     *
     * @var string
     */
    protected $documentType;
    /**
     * Represents the agency url.
     *
     * @var string
     */
    protected $agencyUrl;
    /**
     * Represents document url.
     *
     * @var string
     */
    protected $documentUrl;
    /**
     * This specifies Regualatory document id.
     *
     * @var string
     */
    protected $id;
    /**
     * Specifies the agency name.
     *
     * @var string
     */
    protected $agencyName;
    /**
     * Specifies the localized attribute details.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsLocalizedAttributes
     */
    protected $localizedAttributes;
    /**
     * Object representing the information needed during the interaction with clients
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsUserMessage
     */
    public function getUserMessage() : GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsUserMessage
    {
        return $this->userMessage;
    }
    /**
     * Object representing the information needed during the interaction with clients
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsUserMessage $userMessage
     *
     * @return self
     */
    public function setUserMessage(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsUserMessage $userMessage) : self
    {
        $this->initialized['userMessage'] = true;
        $this->userMessage = $userMessage;
        return $this;
    }
    /**
     * This represents document support type.
     *
     * @return string
     */
    public function getSupportType() : string
    {
        return $this->supportType;
    }
    /**
     * This represents document support type.
     *
     * @param string $supportType
     *
     * @return self
     */
    public function setSupportType(string $supportType) : self
    {
        $this->initialized['supportType'] = true;
        $this->supportType = $supportType;
        return $this;
    }
    /**
     * This is a Requirement type.
     *
     * @return string
     */
    public function getAllowability() : string
    {
        return $this->allowability;
    }
    /**
     * This is a Requirement type.
     *
     * @param string $allowability
     *
     * @return self
     */
    public function setAllowability(string $allowability) : self
    {
        $this->initialized['allowability'] = true;
        $this->allowability = $allowability;
        return $this;
    }
    /**
     * This represents file name.
     *
     * @return string
     */
    public function getFileName() : string
    {
        return $this->fileName;
    }
    /**
     * This represents file name.
     *
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(string $fileName) : self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * Specifies the document type.
     *
     * @return string
     */
    public function getDocumentType() : string
    {
        return $this->documentType;
    }
    /**
     * Specifies the document type.
     *
     * @param string $documentType
     *
     * @return self
     */
    public function setDocumentType(string $documentType) : self
    {
        $this->initialized['documentType'] = true;
        $this->documentType = $documentType;
        return $this;
    }
    /**
     * Represents the agency url.
     *
     * @return string
     */
    public function getAgencyUrl() : string
    {
        return $this->agencyUrl;
    }
    /**
     * Represents the agency url.
     *
     * @param string $agencyUrl
     *
     * @return self
     */
    public function setAgencyUrl(string $agencyUrl) : self
    {
        $this->initialized['agencyUrl'] = true;
        $this->agencyUrl = $agencyUrl;
        return $this;
    }
    /**
     * Represents document url.
     *
     * @return string
     */
    public function getDocumentUrl() : string
    {
        return $this->documentUrl;
    }
    /**
     * Represents document url.
     *
     * @param string $documentUrl
     *
     * @return self
     */
    public function setDocumentUrl(string $documentUrl) : self
    {
        $this->initialized['documentUrl'] = true;
        $this->documentUrl = $documentUrl;
        return $this;
    }
    /**
     * This specifies Regualatory document id.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * This specifies Regualatory document id.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Specifies the agency name.
     *
     * @return string
     */
    public function getAgencyName() : string
    {
        return $this->agencyName;
    }
    /**
     * Specifies the agency name.
     *
     * @param string $agencyName
     *
     * @return self
     */
    public function setAgencyName(string $agencyName) : self
    {
        $this->initialized['agencyName'] = true;
        $this->agencyName = $agencyName;
        return $this;
    }
    /**
     * Specifies the localized attribute details.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsLocalizedAttributes
     */
    public function getLocalizedAttributes() : GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsLocalizedAttributes
    {
        return $this->localizedAttributes;
    }
    /**
     * Specifies the localized attribute details.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsLocalizedAttributes $localizedAttributes
     *
     * @return self
     */
    public function setLocalizedAttributes(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsLocalizedAttributes $localizedAttributes) : self
    {
        $this->initialized['localizedAttributes'] = true;
        $this->localizedAttributes = $localizedAttributes;
        return $this;
    }
}
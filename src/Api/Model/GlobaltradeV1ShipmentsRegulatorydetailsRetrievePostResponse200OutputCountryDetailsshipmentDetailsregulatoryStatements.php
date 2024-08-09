<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatements extends \ArrayObject
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
     * Object representing the information needed during the interaction with clients
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsUserMessage
     */
    protected $userMessage;
    /**
     * This represents document support type.
     *
     * @var string
     */
    protected $supportType;
    /**
     * Specifies a requirement type.
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
     * Represents agency url.
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
     * This specifies completion type.
     *
     * @var string
     */
    protected $completionType;
    /**
     * It Specifies agency name.
     *
     * @var string
     */
    protected $agencyName;
    /**
     * Specifies the localized attribute details.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsLocalizedAttributes
     */
    protected $localizedAttributes;
    /**
     * Specifies the document identifier.
     *
     * @var list<string>
     */
    protected $documentIds;
    /**
     * This represents statement url.
     *
     * @var string
     */
    protected $statementUrl;
    /**
     * Object representing the information needed during the interaction with clients
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsUserMessage
     */
    public function getUserMessage(): GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsUserMessage
    {
        return $this->userMessage;
    }
    /**
     * Object representing the information needed during the interaction with clients
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsUserMessage $userMessage
     *
     * @return self
     */
    public function setUserMessage(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsUserMessage $userMessage): self
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
    public function getSupportType(): string
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
    public function setSupportType(string $supportType): self
    {
        $this->initialized['supportType'] = true;
        $this->supportType = $supportType;
        return $this;
    }
    /**
     * Specifies a requirement type.
     *
     * @return string
     */
    public function getAllowability(): string
    {
        return $this->allowability;
    }
    /**
     * Specifies a requirement type.
     *
     * @param string $allowability
     *
     * @return self
     */
    public function setAllowability(string $allowability): self
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
    public function getFileName(): string
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
    public function setFileName(string $fileName): self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * Represents agency url.
     *
     * @return string
     */
    public function getAgencyUrl(): string
    {
        return $this->agencyUrl;
    }
    /**
     * Represents agency url.
     *
     * @param string $agencyUrl
     *
     * @return self
     */
    public function setAgencyUrl(string $agencyUrl): self
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
    public function getDocumentUrl(): string
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
    public function setDocumentUrl(string $documentUrl): self
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
    public function getId(): string
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
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * This specifies completion type.
     *
     * @return string
     */
    public function getCompletionType(): string
    {
        return $this->completionType;
    }
    /**
     * This specifies completion type.
     *
     * @param string $completionType
     *
     * @return self
     */
    public function setCompletionType(string $completionType): self
    {
        $this->initialized['completionType'] = true;
        $this->completionType = $completionType;
        return $this;
    }
    /**
     * It Specifies agency name.
     *
     * @return string
     */
    public function getAgencyName(): string
    {
        return $this->agencyName;
    }
    /**
     * It Specifies agency name.
     *
     * @param string $agencyName
     *
     * @return self
     */
    public function setAgencyName(string $agencyName): self
    {
        $this->initialized['agencyName'] = true;
        $this->agencyName = $agencyName;
        return $this;
    }
    /**
     * Specifies the localized attribute details.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsLocalizedAttributes
     */
    public function getLocalizedAttributes(): GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsLocalizedAttributes
    {
        return $this->localizedAttributes;
    }
    /**
     * Specifies the localized attribute details.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsLocalizedAttributes $localizedAttributes
     *
     * @return self
     */
    public function setLocalizedAttributes(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsLocalizedAttributes $localizedAttributes): self
    {
        $this->initialized['localizedAttributes'] = true;
        $this->localizedAttributes = $localizedAttributes;
        return $this;
    }
    /**
     * Specifies the document identifier.
     *
     * @return list<string>
     */
    public function getDocumentIds(): array
    {
        return $this->documentIds;
    }
    /**
     * Specifies the document identifier.
     *
     * @param list<string> $documentIds
     *
     * @return self
     */
    public function setDocumentIds(array $documentIds): self
    {
        $this->initialized['documentIds'] = true;
        $this->documentIds = $documentIds;
        return $this;
    }
    /**
     * This represents statement url.
     *
     * @return string
     */
    public function getStatementUrl(): string
    {
        return $this->statementUrl;
    }
    /**
     * This represents statement url.
     *
     * @param string $statementUrl
     *
     * @return self
     */
    public function setStatementUrl(string $statementUrl): self
    {
        $this->initialized['statementUrl'] = true;
        $this->statementUrl = $statementUrl;
        return $this;
    }
}
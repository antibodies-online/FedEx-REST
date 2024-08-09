<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailDocumentRequirements extends \ArrayObject
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
     * Indicates the required documents information.<br>Example: ["COMMERCIAL_OR_PRO_FORMA_INVOICE","AIR_WAYBILL"]
     *
     * @var list<string>
     */
    protected $requiredDocuments;
    /**
     * Indicates the prohibited Documents info.<br>Example: ["CERTIFICATE_OF_ORIGIN "]
     *
     * @var list<string>
     */
    protected $prohibitedDocuments;
    /**
     * Specifies the generation details.
     *
     * @var list<ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailDocumentRequirementsGenerationDetailsItem>
     */
    protected $generationDetails;
    /**
     * Indicates the required documents information.<br>Example: ["COMMERCIAL_OR_PRO_FORMA_INVOICE","AIR_WAYBILL"]
     *
     * @return list<string>
     */
    public function getRequiredDocuments(): array
    {
        return $this->requiredDocuments;
    }
    /**
     * Indicates the required documents information.<br>Example: ["COMMERCIAL_OR_PRO_FORMA_INVOICE","AIR_WAYBILL"]
     *
     * @param list<string> $requiredDocuments
     *
     * @return self
     */
    public function setRequiredDocuments(array $requiredDocuments): self
    {
        $this->initialized['requiredDocuments'] = true;
        $this->requiredDocuments = $requiredDocuments;
        return $this;
    }
    /**
     * Indicates the prohibited Documents info.<br>Example: ["CERTIFICATE_OF_ORIGIN "]
     *
     * @return list<string>
     */
    public function getProhibitedDocuments(): array
    {
        return $this->prohibitedDocuments;
    }
    /**
     * Indicates the prohibited Documents info.<br>Example: ["CERTIFICATE_OF_ORIGIN "]
     *
     * @param list<string> $prohibitedDocuments
     *
     * @return self
     */
    public function setProhibitedDocuments(array $prohibitedDocuments): self
    {
        $this->initialized['prohibitedDocuments'] = true;
        $this->prohibitedDocuments = $prohibitedDocuments;
        return $this;
    }
    /**
     * Specifies the generation details.
     *
     * @return list<ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailDocumentRequirementsGenerationDetailsItem>
     */
    public function getGenerationDetails(): array
    {
        return $this->generationDetails;
    }
    /**
     * Specifies the generation details.
     *
     * @param list<ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailDocumentRequirementsGenerationDetailsItem> $generationDetails
     *
     * @return self
     */
    public function setGenerationDetails(array $generationDetails): self
    {
        $this->initialized['generationDetails'] = true;
        $this->generationDetails = $generationDetails;
        return $this;
    }
}
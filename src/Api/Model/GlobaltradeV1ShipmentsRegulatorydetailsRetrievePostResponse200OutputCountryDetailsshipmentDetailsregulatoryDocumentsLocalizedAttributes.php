<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsLocalizedAttributes extends \ArrayObject
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
     * Specify locale details for composing email with the document.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsLocalizedAttributesLocalization
     */
    protected $localization;
    /**
     * Specifies the name of the product being shipped.
     *
     * @var string
     */
    protected $name;
    /**
     * Specifies elabaorate material description and other technical details of the product beingshipped.
     *
     * @var string
     */
    protected $description;
    /**
     * Specify locale details for composing email with the document.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsLocalizedAttributesLocalization
     */
    public function getLocalization(): GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsLocalizedAttributesLocalization
    {
        return $this->localization;
    }
    /**
     * Specify locale details for composing email with the document.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsLocalizedAttributesLocalization $localization
     *
     * @return self
     */
    public function setLocalization(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsLocalizedAttributesLocalization $localization): self
    {
        $this->initialized['localization'] = true;
        $this->localization = $localization;
        return $this;
    }
    /**
     * Specifies the name of the product being shipped.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Specifies the name of the product being shipped.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Specifies elabaorate material description and other technical details of the product beingshipped.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Specifies elabaorate material description and other technical details of the product beingshipped.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}
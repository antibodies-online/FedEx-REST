<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemOptions extends \ArrayObject
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
     * Specifies how the customer wishes the label text to be handled for this commodity in this package.
     *
     * @var string
     */
    protected $labelTextOption;
    /**
     * Text used in labeling the commodity under control of the labelTextOption field.
     *
     * @var string
     */
    protected $customerSuppliedLabelText;
    /**
     * Specifies how the customer wishes the label text to be handled for this commodity in this package.
     *
     * @return string
     */
    public function getLabelTextOption() : string
    {
        return $this->labelTextOption;
    }
    /**
     * Specifies how the customer wishes the label text to be handled for this commodity in this package.
     *
     * @param string $labelTextOption
     *
     * @return self
     */
    public function setLabelTextOption(string $labelTextOption) : self
    {
        $this->initialized['labelTextOption'] = true;
        $this->labelTextOption = $labelTextOption;
        return $this;
    }
    /**
     * Text used in labeling the commodity under control of the labelTextOption field.
     *
     * @return string
     */
    public function getCustomerSuppliedLabelText() : string
    {
        return $this->customerSuppliedLabelText;
    }
    /**
     * Text used in labeling the commodity under control of the labelTextOption field.
     *
     * @param string $customerSuppliedLabelText
     *
     * @return self
     */
    public function setCustomerSuppliedLabelText(string $customerSuppliedLabelText) : self
    {
        $this->initialized['customerSuppliedLabelText'] = true;
        $this->customerSuppliedLabelText = $customerSuppliedLabelText;
        return $this;
    }
}
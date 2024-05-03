<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsOptions extends \ArrayObject
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
     * Indicates the label text option.
     *
     * @var string
     */
    protected $labelTextOption;
    /**
     * 'DG Data Upload Mode:- Optional.,DG Full Validation Mode:- Optional,Text used in labeling the commodity under control of the LabelTextOption field<br>Example:Customer Supplied Label Text' 
     *
     * @var string
     */
    protected $customerSuppliedLabelText;
    /**
     * Indicates the label text option.
     *
     * @return string
     */
    public function getLabelTextOption() : string
    {
        return $this->labelTextOption;
    }
    /**
     * Indicates the label text option.
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
     * 'DG Data Upload Mode:- Optional.,DG Full Validation Mode:- Optional,Text used in labeling the commodity under control of the LabelTextOption field<br>Example:Customer Supplied Label Text' 
     *
     * @return string
     */
    public function getCustomerSuppliedLabelText() : string
    {
        return $this->customerSuppliedLabelText;
    }
    /**
     * 'DG Data Upload Mode:- Optional.,DG Full Validation Mode:- Optional,Text used in labeling the commodity under control of the LabelTextOption field<br>Example:Customer Supplied Label Text' 
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
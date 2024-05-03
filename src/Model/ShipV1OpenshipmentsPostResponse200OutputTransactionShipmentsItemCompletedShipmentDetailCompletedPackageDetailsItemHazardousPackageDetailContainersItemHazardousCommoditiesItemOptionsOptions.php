<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsOptions extends \ArrayObject
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
     * Indicates the label text option.
     *
     * @var string
     */
    protected $labelTextOption;
    /**
     * 'DG Data Upload Mode:- Optional.,DG Full Validation Mode:- Optional,Text used in labeling the commodity under control of the LabelTextOption field<br>Example:Customer Supplied Label Text'.
     *
     * @var string
     */
    protected $customerSuppliedLabelText;

    /**
     * Indicates the label text option.
     */
    public function getLabelTextOption(): string
    {
        return $this->labelTextOption;
    }

    /**
     * Indicates the label text option.
     */
    public function setLabelTextOption(string $labelTextOption): self
    {
        $this->initialized['labelTextOption'] = true;
        $this->labelTextOption = $labelTextOption;

        return $this;
    }

    /**
     * 'DG Data Upload Mode:- Optional.,DG Full Validation Mode:- Optional,Text used in labeling the commodity under control of the LabelTextOption field<br>Example:Customer Supplied Label Text'.
     */
    public function getCustomerSuppliedLabelText(): string
    {
        return $this->customerSuppliedLabelText;
    }

    /**
     * 'DG Data Upload Mode:- Optional.,DG Full Validation Mode:- Optional,Text used in labeling the commodity under control of the LabelTextOption field<br>Example:Customer Supplied Label Text'.
     */
    public function setCustomerSuppliedLabelText(string $customerSuppliedLabelText): self
    {
        $this->initialized['customerSuppliedLabelText'] = true;
        $this->customerSuppliedLabelText = $customerSuppliedLabelText;

        return $this;
    }
}

<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetail extends \ArrayObject
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
     * Specify which data/sections on the label to be masked.<br>Note: <ul><li>SECONDARY_BARCODE &ndash; This is used for Smartpost shipment labels.</li><li>SHIPPER_INFORMATION &ndash; This is used for Third Party Consignee, Intra-UK shipments.</li><li>TOTAL_WEIGHT &ndash; This replaces the Total weight with Actual Weight in Master label and AWB copies.</li></ul>
     *
     * @var list<string>
     */
    protected $maskedData;
    /**
     * Specify how the regulatory details to be provided on the labels.
     *
     * @var list<ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailRegulatoryLabelsItem>
     */
    protected $regulatoryLabels;
    /**
     * Specify how the additional details to be provided on the labels.
     *
     * @var list<ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailAdditionalLabelsItem>
     */
    protected $additionalLabels;
    /**
     * Specifies details of doc tab content.It is only applicable only with imageType as ZPLII
     *
     * @var ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailDocTabContent
     */
    protected $docTabContent;
    /**
     * Specify which data/sections on the label to be masked.<br>Note: <ul><li>SECONDARY_BARCODE &ndash; This is used for Smartpost shipment labels.</li><li>SHIPPER_INFORMATION &ndash; This is used for Third Party Consignee, Intra-UK shipments.</li><li>TOTAL_WEIGHT &ndash; This replaces the Total weight with Actual Weight in Master label and AWB copies.</li></ul>
     *
     * @return list<string>
     */
    public function getMaskedData(): array
    {
        return $this->maskedData;
    }
    /**
     * Specify which data/sections on the label to be masked.<br>Note: <ul><li>SECONDARY_BARCODE &ndash; This is used for Smartpost shipment labels.</li><li>SHIPPER_INFORMATION &ndash; This is used for Third Party Consignee, Intra-UK shipments.</li><li>TOTAL_WEIGHT &ndash; This replaces the Total weight with Actual Weight in Master label and AWB copies.</li></ul>
     *
     * @param list<string> $maskedData
     *
     * @return self
     */
    public function setMaskedData(array $maskedData): self
    {
        $this->initialized['maskedData'] = true;
        $this->maskedData = $maskedData;
        return $this;
    }
    /**
     * Specify how the regulatory details to be provided on the labels.
     *
     * @return list<ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailRegulatoryLabelsItem>
     */
    public function getRegulatoryLabels(): array
    {
        return $this->regulatoryLabels;
    }
    /**
     * Specify how the regulatory details to be provided on the labels.
     *
     * @param list<ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailRegulatoryLabelsItem> $regulatoryLabels
     *
     * @return self
     */
    public function setRegulatoryLabels(array $regulatoryLabels): self
    {
        $this->initialized['regulatoryLabels'] = true;
        $this->regulatoryLabels = $regulatoryLabels;
        return $this;
    }
    /**
     * Specify how the additional details to be provided on the labels.
     *
     * @return list<ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailAdditionalLabelsItem>
     */
    public function getAdditionalLabels(): array
    {
        return $this->additionalLabels;
    }
    /**
     * Specify how the additional details to be provided on the labels.
     *
     * @param list<ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailAdditionalLabelsItem> $additionalLabels
     *
     * @return self
     */
    public function setAdditionalLabels(array $additionalLabels): self
    {
        $this->initialized['additionalLabels'] = true;
        $this->additionalLabels = $additionalLabels;
        return $this;
    }
    /**
     * Specifies details of doc tab content.It is only applicable only with imageType as ZPLII
     *
     * @return ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailDocTabContent
     */
    public function getDocTabContent(): ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailDocTabContent
    {
        return $this->docTabContent;
    }
    /**
     * Specifies details of doc tab content.It is only applicable only with imageType as ZPLII
     *
     * @param ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailDocTabContent $docTabContent
     *
     * @return self
     */
    public function setDocTabContent(ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailDocTabContent $docTabContent): self
    {
        $this->initialized['docTabContent'] = true;
        $this->docTabContent = $docTabContent;
        return $this;
    }
}
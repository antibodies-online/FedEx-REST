<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetailsDeliveryOptionEligibilityDetailsItem extends \ArrayObject
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
     * This is the type of delivery option.<br><br><i>Note: For eligibile DISPUTE_DELIVERY, RETURN_TO_SHIPPER, SUPPLEMENT_ADDRESS go to fedex.com to perform the option/action.</i><br><br>Example: INDIRECT_SIGNATURE_RELEASE
     *
     * @var string
     */
    protected $option;
    /**
     * Eligibility of the customer for the specific delivery options.<br> Example: INELIGIBLE
     *
     * @var string
     */
    protected $eligibility;
    /**
     * This is the type of delivery option.<br><br><i>Note: For eligibile DISPUTE_DELIVERY, RETURN_TO_SHIPPER, SUPPLEMENT_ADDRESS go to fedex.com to perform the option/action.</i><br><br>Example: INDIRECT_SIGNATURE_RELEASE
     *
     * @return string
     */
    public function getOption(): string
    {
        return $this->option;
    }
    /**
     * This is the type of delivery option.<br><br><i>Note: For eligibile DISPUTE_DELIVERY, RETURN_TO_SHIPPER, SUPPLEMENT_ADDRESS go to fedex.com to perform the option/action.</i><br><br>Example: INDIRECT_SIGNATURE_RELEASE
     *
     * @param string $option
     *
     * @return self
     */
    public function setOption(string $option): self
    {
        $this->initialized['option'] = true;
        $this->option = $option;
        return $this;
    }
    /**
     * Eligibility of the customer for the specific delivery options.<br> Example: INELIGIBLE
     *
     * @return string
     */
    public function getEligibility(): string
    {
        return $this->eligibility;
    }
    /**
     * Eligibility of the customer for the specific delivery options.<br> Example: INELIGIBLE
     *
     * @param string $eligibility
     *
     * @return self
     */
    public function setEligibility(string $eligibility): self
    {
        $this->initialized['eligibility'] = true;
        $this->eligibility = $eligibility;
        return $this;
    }
}
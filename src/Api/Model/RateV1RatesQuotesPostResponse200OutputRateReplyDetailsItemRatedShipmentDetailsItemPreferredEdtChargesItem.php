<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemPreferredEdtChargesItem extends \ArrayObject
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
     * Specifies the alternate harmonized codes for the commodity.<br> Example: alternateHarmonizedCodes
     *
     * @var list<string>
     */
    protected $alternateHarmonizedCodes;
    /**
     * Specifies the Estimated duties and taxes detail.
     *
     * @var RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemPreferredEdtChargesItemEdtTaxDetail
     */
    protected $edtTaxDetail;
    /**
     * This is to specify the Harmonized Tariff System (HTS) code to meet U.S. and foreign governments' customs requirements. These are mainly used to estimate the duties and taxes.<br>Example: A six digit code for Almonds fresh or dried is 080211. The HTS code for pistachios in shell is 080251. The HTS code for fish is HS203.<br>To research the classification for your commodity, use the FedEx Global Trade Manager online at <a href='http://www.fedex.com/gtm' target='_blank'>fedex.com/gtm</a>. You can find the commodities and its respective codes by logging into FedEx and selecting harmonized code option. You will find country-specific information to determine whether your commodity is considered to be a document or non-document for your destination. <br>For additional information about harmonized code, refer to <a href='https://www.usitc.gov/documents/hts_external_guide.pdf' target='_blank'>harmonized code</a>.
     *
     * @var string
     */
    protected $harmonizedCode;
    /**
     * Specifies the alternate harmonized codes for the commodity.<br> Example: alternateHarmonizedCodes
     *
     * @return list<string>
     */
    public function getAlternateHarmonizedCodes() : array
    {
        return $this->alternateHarmonizedCodes;
    }
    /**
     * Specifies the alternate harmonized codes for the commodity.<br> Example: alternateHarmonizedCodes
     *
     * @param list<string> $alternateHarmonizedCodes
     *
     * @return self
     */
    public function setAlternateHarmonizedCodes(array $alternateHarmonizedCodes) : self
    {
        $this->initialized['alternateHarmonizedCodes'] = true;
        $this->alternateHarmonizedCodes = $alternateHarmonizedCodes;
        return $this;
    }
    /**
     * Specifies the Estimated duties and taxes detail.
     *
     * @return RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemPreferredEdtChargesItemEdtTaxDetail
     */
    public function getEdtTaxDetail() : RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemPreferredEdtChargesItemEdtTaxDetail
    {
        return $this->edtTaxDetail;
    }
    /**
     * Specifies the Estimated duties and taxes detail.
     *
     * @param RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemPreferredEdtChargesItemEdtTaxDetail $edtTaxDetail
     *
     * @return self
     */
    public function setEdtTaxDetail(RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemPreferredEdtChargesItemEdtTaxDetail $edtTaxDetail) : self
    {
        $this->initialized['edtTaxDetail'] = true;
        $this->edtTaxDetail = $edtTaxDetail;
        return $this;
    }
    /**
     * This is to specify the Harmonized Tariff System (HTS) code to meet U.S. and foreign governments' customs requirements. These are mainly used to estimate the duties and taxes.<br>Example: A six digit code for Almonds fresh or dried is 080211. The HTS code for pistachios in shell is 080251. The HTS code for fish is HS203.<br>To research the classification for your commodity, use the FedEx Global Trade Manager online at <a href='http://www.fedex.com/gtm' target='_blank'>fedex.com/gtm</a>. You can find the commodities and its respective codes by logging into FedEx and selecting harmonized code option. You will find country-specific information to determine whether your commodity is considered to be a document or non-document for your destination. <br>For additional information about harmonized code, refer to <a href='https://www.usitc.gov/documents/hts_external_guide.pdf' target='_blank'>harmonized code</a>.
     *
     * @return string
     */
    public function getHarmonizedCode() : string
    {
        return $this->harmonizedCode;
    }
    /**
     * This is to specify the Harmonized Tariff System (HTS) code to meet U.S. and foreign governments' customs requirements. These are mainly used to estimate the duties and taxes.<br>Example: A six digit code for Almonds fresh or dried is 080211. The HTS code for pistachios in shell is 080251. The HTS code for fish is HS203.<br>To research the classification for your commodity, use the FedEx Global Trade Manager online at <a href='http://www.fedex.com/gtm' target='_blank'>fedex.com/gtm</a>. You can find the commodities and its respective codes by logging into FedEx and selecting harmonized code option. You will find country-specific information to determine whether your commodity is considered to be a document or non-document for your destination. <br>For additional information about harmonized code, refer to <a href='https://www.usitc.gov/documents/hts_external_guide.pdf' target='_blank'>harmonized code</a>.
     *
     * @param string $harmonizedCode
     *
     * @return self
     */
    public function setHarmonizedCode(string $harmonizedCode) : self
    {
        $this->initialized['harmonizedCode'] = true;
        $this->harmonizedCode = $harmonizedCode;
        return $this;
    }
}
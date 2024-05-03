<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemPreferredEdtChargesItemEdtTaxDetail extends \ArrayObject
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
     * Specifies the Estimated duties and taxes type. <br> Example: TaxType
     *
     * @var string
     */
    protected $edtTaxType;
    /**
     * Specifies the amount for the estimated duties and taxes type.<br> Example: 785.12
     *
     * @var float
     */
    protected $amount;
    /**
     * Specifies the Estimated duties and taxes taxable Value.<br> Example: 562.23
     *
     * @var float
     */
    protected $taxableValue;
    /**
     * Indicates the name for the Etd tax.
     *
     * @var string
     */
    protected $name;
    /**
     * Indicates the description for the Etd tax.
     *
     * @var string
     */
    protected $description;
    /**
     * Indicates the formula.
     *
     * @var string
     */
    protected $formula;
    /**
     * Specifies the Estimated duties and taxes effective date. Format [YYYY-MM-DD].<br>  Example: 2019-12-06
     *
     * @var string
     */
    protected $effectiveDate;
    /**
     * Specifies the Estimated duties and taxes type. <br> Example: TaxType
     *
     * @return string
     */
    public function getEdtTaxType() : string
    {
        return $this->edtTaxType;
    }
    /**
     * Specifies the Estimated duties and taxes type. <br> Example: TaxType
     *
     * @param string $edtTaxType
     *
     * @return self
     */
    public function setEdtTaxType(string $edtTaxType) : self
    {
        $this->initialized['edtTaxType'] = true;
        $this->edtTaxType = $edtTaxType;
        return $this;
    }
    /**
     * Specifies the amount for the estimated duties and taxes type.<br> Example: 785.12
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * Specifies the amount for the estimated duties and taxes type.<br> Example: 785.12
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Specifies the Estimated duties and taxes taxable Value.<br> Example: 562.23
     *
     * @return float
     */
    public function getTaxableValue() : float
    {
        return $this->taxableValue;
    }
    /**
     * Specifies the Estimated duties and taxes taxable Value.<br> Example: 562.23
     *
     * @param float $taxableValue
     *
     * @return self
     */
    public function setTaxableValue(float $taxableValue) : self
    {
        $this->initialized['taxableValue'] = true;
        $this->taxableValue = $taxableValue;
        return $this;
    }
    /**
     * Indicates the name for the Etd tax.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Indicates the name for the Etd tax.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Indicates the description for the Etd tax.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Indicates the description for the Etd tax.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Indicates the formula.
     *
     * @return string
     */
    public function getFormula() : string
    {
        return $this->formula;
    }
    /**
     * Indicates the formula.
     *
     * @param string $formula
     *
     * @return self
     */
    public function setFormula(string $formula) : self
    {
        $this->initialized['formula'] = true;
        $this->formula = $formula;
        return $this;
    }
    /**
     * Specifies the Estimated duties and taxes effective date. Format [YYYY-MM-DD].<br>  Example: 2019-12-06
     *
     * @return string
     */
    public function getEffectiveDate() : string
    {
        return $this->effectiveDate;
    }
    /**
     * Specifies the Estimated duties and taxes effective date. Format [YYYY-MM-DD].<br>  Example: 2019-12-06
     *
     * @param string $effectiveDate
     *
     * @return self
     */
    public function setEffectiveDate(string $effectiveDate) : self
    {
        $this->initialized['effectiveDate'] = true;
        $this->effectiveDate = $effectiveDate;
        return $this;
    }
}
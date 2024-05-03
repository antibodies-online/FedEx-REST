<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsRatedPackagesItemPackageRateDetailFreightDiscountsItem extends \ArrayObject
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
     * Indicates the details of the charges are to be added to the COD collect amount. <br> Example: 95
     *
     * @var float
     */
    protected $amount;
    /**
     * Specifies the name of all of the discounts that apply to the package.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @var string
     */
    protected $name;
    /**
     * Specifies the discounts on this package.
     *
     * @var string
     */
    protected $description;
    /**
     * Specifies the type of discount.
     *
     * @var string
     */
    protected $type;
    /**
     * Specifies the percentage of discount.
     *
     * @var float
     */
    protected $percent;
    /**
     * Indicates the details of the charges are to be added to the COD collect amount. <br> Example: 95
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * Indicates the details of the charges are to be added to the COD collect amount. <br> Example: 95
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
     * Specifies the name of all of the discounts that apply to the package.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Specifies the name of all of the discounts that apply to the package.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
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
     * Specifies the discounts on this package.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Specifies the discounts on this package.
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
     * Specifies the type of discount.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Specifies the type of discount.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Specifies the percentage of discount.
     *
     * @return float
     */
    public function getPercent() : float
    {
        return $this->percent;
    }
    /**
     * Specifies the percentage of discount.
     *
     * @param float $percent
     *
     * @return self
     */
    public function setPercent(float $percent) : self
    {
        $this->initialized['percent'] = true;
        $this->percent = $percent;
        return $this;
    }
}
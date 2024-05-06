<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1EndofdayPutBodyCloseDocumentSpecificationOp950DetailFormat extends \ArrayObject
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
     * Specifies how far down the page to move the begining of the image; allows for printing on letterhead and pre printed stock.
     *
     * @var ShipV1EndofdayPutBodyCloseDocumentSpecificationOp950DetailFormatTopOfPageOffset
     */
    protected $topOfPageOffset;
    /**
     * Specify the image format used for a shipping document.
     *
     * @var string
     */
    protected $imageType;
    /**
     * Specifies the label stock type.  Lists the correct type of paper for the Freight address label option.Specify valid value PAPER_4_PER_PAGE_PORTRAIT
     *
     * @var string
     */
    protected $stockType;
    /**
     * this is the language and language locale code for the email<br>Example: en_US, fr_CA, es_MX
     *
     * @var string
     */
    protected $locale;
    /**
     * Specifies how far down the page to move the begining of the image; allows for printing on letterhead and pre printed stock.
     *
     * @return ShipV1EndofdayPutBodyCloseDocumentSpecificationOp950DetailFormatTopOfPageOffset
     */
    public function getTopOfPageOffset() : ShipV1EndofdayPutBodyCloseDocumentSpecificationOp950DetailFormatTopOfPageOffset
    {
        return $this->topOfPageOffset;
    }
    /**
     * Specifies how far down the page to move the begining of the image; allows for printing on letterhead and pre printed stock.
     *
     * @param ShipV1EndofdayPutBodyCloseDocumentSpecificationOp950DetailFormatTopOfPageOffset $topOfPageOffset
     *
     * @return self
     */
    public function setTopOfPageOffset(ShipV1EndofdayPutBodyCloseDocumentSpecificationOp950DetailFormatTopOfPageOffset $topOfPageOffset) : self
    {
        $this->initialized['topOfPageOffset'] = true;
        $this->topOfPageOffset = $topOfPageOffset;
        return $this;
    }
    /**
     * Specify the image format used for a shipping document.
     *
     * @return string
     */
    public function getImageType() : string
    {
        return $this->imageType;
    }
    /**
     * Specify the image format used for a shipping document.
     *
     * @param string $imageType
     *
     * @return self
     */
    public function setImageType(string $imageType) : self
    {
        $this->initialized['imageType'] = true;
        $this->imageType = $imageType;
        return $this;
    }
    /**
     * Specifies the label stock type.  Lists the correct type of paper for the Freight address label option.Specify valid value PAPER_4_PER_PAGE_PORTRAIT
     *
     * @return string
     */
    public function getStockType() : string
    {
        return $this->stockType;
    }
    /**
     * Specifies the label stock type.  Lists the correct type of paper for the Freight address label option.Specify valid value PAPER_4_PER_PAGE_PORTRAIT
     *
     * @param string $stockType
     *
     * @return self
     */
    public function setStockType(string $stockType) : self
    {
        $this->initialized['stockType'] = true;
        $this->stockType = $stockType;
        return $this;
    }
    /**
     * this is the language and language locale code for the email<br>Example: en_US, fr_CA, es_MX
     *
     * @return string
     */
    public function getLocale() : string
    {
        return $this->locale;
    }
    /**
     * this is the language and language locale code for the email<br>Example: en_US, fr_CA, es_MX
     *
     * @param string $locale
     *
     * @return self
     */
    public function setLocale(string $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
}
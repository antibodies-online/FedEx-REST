<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1EndofdayPostBodyCloseDocumentSpecificationOp950Detail extends \ArrayObject
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
     * 
     *
     * @var ShipV1EndofdayPostBodyCloseDocumentSpecificationOp950DetailFormat
     */
    protected $format;
    /**
     * 
     *
     * @return ShipV1EndofdayPostBodyCloseDocumentSpecificationOp950DetailFormat
     */
    public function getFormat() : ShipV1EndofdayPostBodyCloseDocumentSpecificationOp950DetailFormat
    {
        return $this->format;
    }
    /**
     * 
     *
     * @param ShipV1EndofdayPostBodyCloseDocumentSpecificationOp950DetailFormat $format
     *
     * @return self
     */
    public function setFormat(ShipV1EndofdayPostBodyCloseDocumentSpecificationOp950DetailFormat $format) : self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
}
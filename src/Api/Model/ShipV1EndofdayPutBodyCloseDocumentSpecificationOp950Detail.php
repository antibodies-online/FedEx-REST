<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1EndofdayPutBodyCloseDocumentSpecificationOp950Detail extends \ArrayObject
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
     * @var ShipV1EndofdayPutBodyCloseDocumentSpecificationOp950DetailFormat
     */
    protected $format;
    /**
     * 
     *
     * @return ShipV1EndofdayPutBodyCloseDocumentSpecificationOp950DetailFormat
     */
    public function getFormat() : ShipV1EndofdayPutBodyCloseDocumentSpecificationOp950DetailFormat
    {
        return $this->format;
    }
    /**
     * 
     *
     * @param ShipV1EndofdayPutBodyCloseDocumentSpecificationOp950DetailFormat $format
     *
     * @return self
     */
    public function setFormat(ShipV1EndofdayPutBodyCloseDocumentSpecificationOp950DetailFormat $format) : self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
}
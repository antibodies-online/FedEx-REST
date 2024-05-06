<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1EndofdayPutBodyCloseDocumentSpecification extends \ArrayObject
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
     * Indicated the type of close documents requested by the caller. <br> Example: OP_950
     *
     * @var list<string>
     */
    protected $closeDocumentTypes;
    /**
     * 
     *
     * @var ShipV1EndofdayPutBodyCloseDocumentSpecificationOp950Detail
     */
    protected $op950Detail;
    /**
     * Indicated the type of close documents requested by the caller. <br> Example: OP_950
     *
     * @return list<string>
     */
    public function getCloseDocumentTypes() : array
    {
        return $this->closeDocumentTypes;
    }
    /**
     * Indicated the type of close documents requested by the caller. <br> Example: OP_950
     *
     * @param list<string> $closeDocumentTypes
     *
     * @return self
     */
    public function setCloseDocumentTypes(array $closeDocumentTypes) : self
    {
        $this->initialized['closeDocumentTypes'] = true;
        $this->closeDocumentTypes = $closeDocumentTypes;
        return $this;
    }
    /**
     * 
     *
     * @return ShipV1EndofdayPutBodyCloseDocumentSpecificationOp950Detail
     */
    public function getOp950Detail() : ShipV1EndofdayPutBodyCloseDocumentSpecificationOp950Detail
    {
        return $this->op950Detail;
    }
    /**
     * 
     *
     * @param ShipV1EndofdayPutBodyCloseDocumentSpecificationOp950Detail $op950Detail
     *
     * @return self
     */
    public function setOp950Detail(ShipV1EndofdayPutBodyCloseDocumentSpecificationOp950Detail $op950Detail) : self
    {
        $this->initialized['op950Detail'] = true;
        $this->op950Detail = $op950Detail;
        return $this;
    }
}
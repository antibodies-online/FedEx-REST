<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1EndofdayPutResponse200OutputCloseDocumentsItem extends \ArrayObject
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
     * Specifies the type of report.
     *
     * @var string
     */
    protected $type;
    /**
     * Identifies the shipping cycle covered by the content of this document.
     *
     * @var string
     */
    protected $shippingCycle;
    /**
     * 
     *
     * @var string
     */
    protected $shippingDocumentDisposition;
    /**
     * The name under which a STORED or DEFFERED document is written.
     *
     * @var string
     */
    protected $accessReference;
    /**
     * Specifies the image resolution in dpi(Dots per inch)
     *
     * @var int
     */
    protected $resolution;
    /**
     * Can be zero for documents whose dispositions no content is included.
     *
     * @var int
     */
    protected $copiesToPrint;
    /**
     * 
     *
     * @var list<ShipV1EndofdayPutResponse200OutputCloseDocumentsItemPartsItem>
     */
    protected $parts;
    /**
     * Specifies the type of report.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Specifies the type of report.
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
     * Identifies the shipping cycle covered by the content of this document.
     *
     * @return string
     */
    public function getShippingCycle() : string
    {
        return $this->shippingCycle;
    }
    /**
     * Identifies the shipping cycle covered by the content of this document.
     *
     * @param string $shippingCycle
     *
     * @return self
     */
    public function setShippingCycle(string $shippingCycle) : self
    {
        $this->initialized['shippingCycle'] = true;
        $this->shippingCycle = $shippingCycle;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShippingDocumentDisposition() : string
    {
        return $this->shippingDocumentDisposition;
    }
    /**
     * 
     *
     * @param string $shippingDocumentDisposition
     *
     * @return self
     */
    public function setShippingDocumentDisposition(string $shippingDocumentDisposition) : self
    {
        $this->initialized['shippingDocumentDisposition'] = true;
        $this->shippingDocumentDisposition = $shippingDocumentDisposition;
        return $this;
    }
    /**
     * The name under which a STORED or DEFFERED document is written.
     *
     * @return string
     */
    public function getAccessReference() : string
    {
        return $this->accessReference;
    }
    /**
     * The name under which a STORED or DEFFERED document is written.
     *
     * @param string $accessReference
     *
     * @return self
     */
    public function setAccessReference(string $accessReference) : self
    {
        $this->initialized['accessReference'] = true;
        $this->accessReference = $accessReference;
        return $this;
    }
    /**
     * Specifies the image resolution in dpi(Dots per inch)
     *
     * @return int
     */
    public function getResolution() : int
    {
        return $this->resolution;
    }
    /**
     * Specifies the image resolution in dpi(Dots per inch)
     *
     * @param int $resolution
     *
     * @return self
     */
    public function setResolution(int $resolution) : self
    {
        $this->initialized['resolution'] = true;
        $this->resolution = $resolution;
        return $this;
    }
    /**
     * Can be zero for documents whose dispositions no content is included.
     *
     * @return int
     */
    public function getCopiesToPrint() : int
    {
        return $this->copiesToPrint;
    }
    /**
     * Can be zero for documents whose dispositions no content is included.
     *
     * @param int $copiesToPrint
     *
     * @return self
     */
    public function setCopiesToPrint(int $copiesToPrint) : self
    {
        $this->initialized['copiesToPrint'] = true;
        $this->copiesToPrint = $copiesToPrint;
        return $this;
    }
    /**
     * 
     *
     * @return list<ShipV1EndofdayPutResponse200OutputCloseDocumentsItemPartsItem>
     */
    public function getParts() : array
    {
        return $this->parts;
    }
    /**
     * 
     *
     * @param list<ShipV1EndofdayPutResponse200OutputCloseDocumentsItemPartsItem> $parts
     *
     * @return self
     */
    public function setParts(array $parts) : self
    {
        $this->initialized['parts'] = true;
        $this->parts = $parts;
        return $this;
    }
}
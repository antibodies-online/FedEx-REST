<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1EndofdayPostResponse200OutputCloseDocumentsItemPartsItem extends \ArrayObject
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
     * The one-origin position of this part within a document.
     *
     * @var int
     */
    protected $documentPartSequenceNumber;
    /**
     * Graphic or printer commands for this image.
     *
     * @var string
     */
    protected $image;
    /**
     * The one-origin position of this part within a document.
     *
     * @return int
     */
    public function getDocumentPartSequenceNumber() : int
    {
        return $this->documentPartSequenceNumber;
    }
    /**
     * The one-origin position of this part within a document.
     *
     * @param int $documentPartSequenceNumber
     *
     * @return self
     */
    public function setDocumentPartSequenceNumber(int $documentPartSequenceNumber) : self
    {
        $this->initialized['documentPartSequenceNumber'] = true;
        $this->documentPartSequenceNumber = $documentPartSequenceNumber;
        return $this;
    }
    /**
     * Graphic or printer commands for this image.
     *
     * @return string
     */
    public function getImage() : string
    {
        return $this->image;
    }
    /**
     * Graphic or printer commands for this image.
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
}
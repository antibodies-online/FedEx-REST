<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1LhsimagesUploadPostBodyDocumentMeta extends \ArrayObject
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
     * Specify the type of image to be uploaded.<br><br>Valid Values are: <ul><li>SIGNATURE</li><li>LETTERHEAD</li></ul>
     *
     * @var string
     */
    protected $imageType;
    /**
     * Specify the index for the uploaded image.<br><br>Valid Values are:<ul><li>IMAGE_1</li><li>IMAGE_2</li><li>IMAGE_3</li><li>IMAGE_4</li><li>IMAGE_5</li></ul>
     *
     * @var string
     */
    protected $imageIndex;
    /**
     * Specify the type of image to be uploaded.<br><br>Valid Values are: <ul><li>SIGNATURE</li><li>LETTERHEAD</li></ul>
     *
     * @return string
     */
    public function getImageType(): string
    {
        return $this->imageType;
    }
    /**
     * Specify the type of image to be uploaded.<br><br>Valid Values are: <ul><li>SIGNATURE</li><li>LETTERHEAD</li></ul>
     *
     * @param string $imageType
     *
     * @return self
     */
    public function setImageType(string $imageType): self
    {
        $this->initialized['imageType'] = true;
        $this->imageType = $imageType;
        return $this;
    }
    /**
     * Specify the index for the uploaded image.<br><br>Valid Values are:<ul><li>IMAGE_1</li><li>IMAGE_2</li><li>IMAGE_3</li><li>IMAGE_4</li><li>IMAGE_5</li></ul>
     *
     * @return string
     */
    public function getImageIndex(): string
    {
        return $this->imageIndex;
    }
    /**
     * Specify the index for the uploaded image.<br><br>Valid Values are:<ul><li>IMAGE_1</li><li>IMAGE_2</li><li>IMAGE_3</li><li>IMAGE_4</li><li>IMAGE_5</li></ul>
     *
     * @param string $imageIndex
     *
     * @return self
     */
    public function setImageIndex(string $imageIndex): self
    {
        $this->initialized['imageIndex'] = true;
        $this->imageIndex = $imageIndex;
        return $this;
    }
}
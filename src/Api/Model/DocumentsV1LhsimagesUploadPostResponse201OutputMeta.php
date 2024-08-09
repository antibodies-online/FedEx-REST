<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1LhsimagesUploadPostResponse201OutputMeta extends \ArrayObject
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
     * Returns the path which is specified in the request. <br>Example: SIGNATURE
     *
     * @var string
     */
    protected $imageType;
    /**
     * Returns the image index that is specified in the request.<br>            Example: IMAGE_1
     *
     * @var string
     */
    protected $imageIndex;
    /**
     * Returns the path which is specified in the request. <br>Example: SIGNATURE
     *
     * @return string
     */
    public function getImageType(): string
    {
        return $this->imageType;
    }
    /**
     * Returns the path which is specified in the request. <br>Example: SIGNATURE
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
     * Returns the image index that is specified in the request.<br>            Example: IMAGE_1
     *
     * @return string
     */
    public function getImageIndex(): string
    {
        return $this->imageIndex;
    }
    /**
     * Returns the image index that is specified in the request.<br>            Example: IMAGE_1
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
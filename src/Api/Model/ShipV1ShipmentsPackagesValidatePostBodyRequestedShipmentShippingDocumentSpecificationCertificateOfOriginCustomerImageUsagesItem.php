<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOriginCustomerImageUsagesItem extends \ArrayObject
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
     * Specify the Image ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Specify document image type.
     *
     * @var string
     */
    protected $type;
    /**
     * Specify the provided document image type.
     *
     * @var string
     */
    protected $providedImageType;
    /**
     * Specify the Image ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Specify the Image ID.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Specify document image type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Specify document image type.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Specify the provided document image type.
     *
     * @return string
     */
    public function getProvidedImageType(): string
    {
        return $this->providedImageType;
    }
    /**
     * Specify the provided document image type.
     *
     * @param string $providedImageType
     *
     * @return self
     */
    public function setProvidedImageType(string $providedImageType): self
    {
        $this->initialized['providedImageType'] = true;
        $this->providedImageType = $providedImageType;
        return $this;
    }
}
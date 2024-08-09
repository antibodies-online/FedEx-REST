<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetail extends \ArrayObject
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
     * Use this attribute to specify if the Trade documents will be uploaded post the shipment.
     *
     * @var list<string>
     */
    protected $attributes;
    /**
     * Use this object to specify the details regarding already uploded document(s). This object is required if the documents are uploaded Pre-Shipment uploaded documents. It is recommended to provide values for all elements under this object.
     *
     * @var list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetailAttachedDocumentsItem>
     */
    protected $attachedDocuments;
    /**
     * Indicate the types of shipping documents to be produced by FedEx and copied back in the shipment result data.<br>Note: For more information document types, refer business overview topic - <a href='#shippingandcustoms'><b>Shipping and Customs Documents.</b></a>
     *
     * @var list<string>
     */
    protected $requestedDocumentTypes;
    /**
     * Use this attribute to specify if the Trade documents will be uploaded post the shipment.
     *
     * @return list<string>
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }
    /**
     * Use this attribute to specify if the Trade documents will be uploaded post the shipment.
     *
     * @param list<string> $attributes
     *
     * @return self
     */
    public function setAttributes(array $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;
        return $this;
    }
    /**
     * Use this object to specify the details regarding already uploded document(s). This object is required if the documents are uploaded Pre-Shipment uploaded documents. It is recommended to provide values for all elements under this object.
     *
     * @return list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetailAttachedDocumentsItem>
     */
    public function getAttachedDocuments(): array
    {
        return $this->attachedDocuments;
    }
    /**
     * Use this object to specify the details regarding already uploded document(s). This object is required if the documents are uploaded Pre-Shipment uploaded documents. It is recommended to provide values for all elements under this object.
     *
     * @param list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetailAttachedDocumentsItem> $attachedDocuments
     *
     * @return self
     */
    public function setAttachedDocuments(array $attachedDocuments): self
    {
        $this->initialized['attachedDocuments'] = true;
        $this->attachedDocuments = $attachedDocuments;
        return $this;
    }
    /**
     * Indicate the types of shipping documents to be produced by FedEx and copied back in the shipment result data.<br>Note: For more information document types, refer business overview topic - <a href='#shippingandcustoms'><b>Shipping and Customs Documents.</b></a>
     *
     * @return list<string>
     */
    public function getRequestedDocumentTypes(): array
    {
        return $this->requestedDocumentTypes;
    }
    /**
     * Indicate the types of shipping documents to be produced by FedEx and copied back in the shipment result data.<br>Note: For more information document types, refer business overview topic - <a href='#shippingandcustoms'><b>Shipping and Customs Documents.</b></a>
     *
     * @param list<string> $requestedDocumentTypes
     *
     * @return self
     */
    public function setRequestedDocumentTypes(array $requestedDocumentTypes): self
    {
        $this->initialized['requestedDocumentTypes'] = true;
        $this->requestedDocumentTypes = $requestedDocumentTypes;
        return $this;
    }
}
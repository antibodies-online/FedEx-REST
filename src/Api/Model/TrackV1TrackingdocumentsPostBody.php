<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TrackingdocumentsPostBody extends \ArrayObject
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
     * This object specifies the tracking document details such as types of documents, for example, SIGNATURE_PROOF_OF_DELIVERY and also the format of tracking document. Supported values are PDF and PNG. Default is PDF.
     *
     * @var TrackV1TrackingdocumentsPostBodyTrackDocumentDetail
     */
    protected $trackDocumentDetail;
    /**
     * This is the placeholder for document specification details required to identify the shipment being tracked. This includes tracking information such as tracking qualifier, carrier code, and tracking number.<br>At least one trackDocumentSpecification is required. Maximum limit is 30.
     *
     * @var list<TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItem>
     */
    protected $trackDocumentSpecification;
    /**
     * This object specifies the tracking document details such as types of documents, for example, SIGNATURE_PROOF_OF_DELIVERY and also the format of tracking document. Supported values are PDF and PNG. Default is PDF.
     *
     * @return TrackV1TrackingdocumentsPostBodyTrackDocumentDetail
     */
    public function getTrackDocumentDetail(): TrackV1TrackingdocumentsPostBodyTrackDocumentDetail
    {
        return $this->trackDocumentDetail;
    }
    /**
     * This object specifies the tracking document details such as types of documents, for example, SIGNATURE_PROOF_OF_DELIVERY and also the format of tracking document. Supported values are PDF and PNG. Default is PDF.
     *
     * @param TrackV1TrackingdocumentsPostBodyTrackDocumentDetail $trackDocumentDetail
     *
     * @return self
     */
    public function setTrackDocumentDetail(TrackV1TrackingdocumentsPostBodyTrackDocumentDetail $trackDocumentDetail): self
    {
        $this->initialized['trackDocumentDetail'] = true;
        $this->trackDocumentDetail = $trackDocumentDetail;
        return $this;
    }
    /**
     * This is the placeholder for document specification details required to identify the shipment being tracked. This includes tracking information such as tracking qualifier, carrier code, and tracking number.<br>At least one trackDocumentSpecification is required. Maximum limit is 30.
     *
     * @return list<TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItem>
     */
    public function getTrackDocumentSpecification(): array
    {
        return $this->trackDocumentSpecification;
    }
    /**
     * This is the placeholder for document specification details required to identify the shipment being tracked. This includes tracking information such as tracking qualifier, carrier code, and tracking number.<br>At least one trackDocumentSpecification is required. Maximum limit is 30.
     *
     * @param list<TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItem> $trackDocumentSpecification
     *
     * @return self
     */
    public function setTrackDocumentSpecification(array $trackDocumentSpecification): self
    {
        $this->initialized['trackDocumentSpecification'] = true;
        $this->trackDocumentSpecification = $trackDocumentSpecification;
        return $this;
    }
}
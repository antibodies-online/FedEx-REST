<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReturnDetail extends \ArrayObject
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
     * Name of person authorizing the return, entered by the customer.
     *
     * @var string
     */
    protected $authorizationName;
    /**
     * Specifies the return reason details.
     *
     * @var list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReturnDetailReasonDetailItem>
     */
    protected $reasonDetail;
    /**
     * Name of person authorizing the return, entered by the customer.
     *
     * @return string
     */
    public function getAuthorizationName(): string
    {
        return $this->authorizationName;
    }
    /**
     * Name of person authorizing the return, entered by the customer.
     *
     * @param string $authorizationName
     *
     * @return self
     */
    public function setAuthorizationName(string $authorizationName): self
    {
        $this->initialized['authorizationName'] = true;
        $this->authorizationName = $authorizationName;
        return $this;
    }
    /**
     * Specifies the return reason details.
     *
     * @return list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReturnDetailReasonDetailItem>
     */
    public function getReasonDetail(): array
    {
        return $this->reasonDetail;
    }
    /**
     * Specifies the return reason details.
     *
     * @param list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReturnDetailReasonDetailItem> $reasonDetail
     *
     * @return self
     */
    public function setReasonDetail(array $reasonDetail): self
    {
        $this->initialized['reasonDetail'] = true;
        $this->reasonDetail = $reasonDetail;
        return $this;
    }
}
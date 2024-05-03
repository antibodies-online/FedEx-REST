<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReturnDetail extends \ArrayObject
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
     * @var list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReturnDetailReasonDetailItem>
     */
    protected $reasonDetail;

    /**
     * Name of person authorizing the return, entered by the customer.
     */
    public function getAuthorizationName(): string
    {
        return $this->authorizationName;
    }

    /**
     * Name of person authorizing the return, entered by the customer.
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
     * @return list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReturnDetailReasonDetailItem>
     */
    public function getReasonDetail(): array
    {
        return $this->reasonDetail;
    }

    /**
     * Specifies the return reason details.
     *
     * @param list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReturnDetailReasonDetailItem> $reasonDetail
     */
    public function setReasonDetail(array $reasonDetail): self
    {
        $this->initialized['reasonDetail'] = true;
        $this->reasonDetail = $reasonDetail;

        return $this;
    }
}

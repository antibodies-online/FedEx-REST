<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemHoldAtLocationlocationContactAndAddressContact extends \ArrayObject
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
     * Identifies the contact person's name. Max Length is 70.<br> Example: John Taylor.
     *
     * @var string
     */
    protected $personName;
    /**
     * Identifies the phone number associated with this contact. Max length is 15. <br>Example: '1234567890'.
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * Identifies the company this contact is associated with. Max length is 35. <br> Example: Fedex.
     *
     * @var string
     */
    protected $companyName;

    /**
     * Identifies the contact person's name. Max Length is 70.<br> Example: John Taylor.
     */
    public function getPersonName(): string
    {
        return $this->personName;
    }

    /**
     * Identifies the contact person's name. Max Length is 70.<br> Example: John Taylor.
     */
    public function setPersonName(string $personName): self
    {
        $this->initialized['personName'] = true;
        $this->personName = $personName;

        return $this;
    }

    /**
     * Identifies the phone number associated with this contact. Max length is 15. <br>Example: '1234567890'.
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Identifies the phone number associated with this contact. Max length is 15. <br>Example: '1234567890'.
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Identifies the company this contact is associated with. Max length is 35. <br> Example: Fedex.
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * Identifies the company this contact is associated with. Max length is 35. <br> Example: Fedex.
     */
    public function setCompanyName(string $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;

        return $this;
    }
}

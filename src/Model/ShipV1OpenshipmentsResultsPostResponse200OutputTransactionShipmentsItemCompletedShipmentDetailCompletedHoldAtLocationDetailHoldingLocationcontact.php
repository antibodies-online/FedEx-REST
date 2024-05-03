<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationcontact extends \ArrayObject
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
     * Specify person name.<br>Example: John Taylor.
     *
     * @var string
     */
    protected $personName;
    /**
     * Specify toll free phone number.<br>Example: XXXX7812.
     *
     * @var string
     */
    protected $tollFreePhoneNumber;
    /**
     * Specify email address.<br>Example: sample@company.com.
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * Specify phone number.<br>Example: XXX567890.
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * Specify phone extension.<br>Example: 91.
     *
     * @var string
     */
    protected $phoneExtension;
    /**
     * Specify company name.
     *
     * @var string
     */
    protected $companyName;
    /**
     * Specify pager number.<br>Example: XXX7812.
     *
     * @var string
     */
    protected $pagerNumber;
    /**
     * Specify fax number.<br>Example: XXXX567890.
     *
     * @var string
     */
    protected $faxNumber;
    /**
     * Specify the title of the contact.
     *
     * @var string
     */
    protected $title;

    /**
     * Specify person name.<br>Example: John Taylor.
     */
    public function getPersonName(): string
    {
        return $this->personName;
    }

    /**
     * Specify person name.<br>Example: John Taylor.
     */
    public function setPersonName(string $personName): self
    {
        $this->initialized['personName'] = true;
        $this->personName = $personName;

        return $this;
    }

    /**
     * Specify toll free phone number.<br>Example: XXXX7812.
     */
    public function getTollFreePhoneNumber(): string
    {
        return $this->tollFreePhoneNumber;
    }

    /**
     * Specify toll free phone number.<br>Example: XXXX7812.
     */
    public function setTollFreePhoneNumber(string $tollFreePhoneNumber): self
    {
        $this->initialized['tollFreePhoneNumber'] = true;
        $this->tollFreePhoneNumber = $tollFreePhoneNumber;

        return $this;
    }

    /**
     * Specify email address.<br>Example: sample@company.com.
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * Specify email address.<br>Example: sample@company.com.
     */
    public function setEmailAddress(string $emailAddress): self
    {
        $this->initialized['emailAddress'] = true;
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Specify phone number.<br>Example: XXX567890.
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Specify phone number.<br>Example: XXX567890.
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Specify phone extension.<br>Example: 91.
     */
    public function getPhoneExtension(): string
    {
        return $this->phoneExtension;
    }

    /**
     * Specify phone extension.<br>Example: 91.
     */
    public function setPhoneExtension(string $phoneExtension): self
    {
        $this->initialized['phoneExtension'] = true;
        $this->phoneExtension = $phoneExtension;

        return $this;
    }

    /**
     * Specify company name.
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * Specify company name.
     */
    public function setCompanyName(string $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Specify pager number.<br>Example: XXX7812.
     */
    public function getPagerNumber(): string
    {
        return $this->pagerNumber;
    }

    /**
     * Specify pager number.<br>Example: XXX7812.
     */
    public function setPagerNumber(string $pagerNumber): self
    {
        $this->initialized['pagerNumber'] = true;
        $this->pagerNumber = $pagerNumber;

        return $this;
    }

    /**
     * Specify fax number.<br>Example: XXXX567890.
     */
    public function getFaxNumber(): string
    {
        return $this->faxNumber;
    }

    /**
     * Specify fax number.<br>Example: XXXX567890.
     */
    public function setFaxNumber(string $faxNumber): self
    {
        $this->initialized['faxNumber'] = true;
        $this->faxNumber = $faxNumber;

        return $this;
    }

    /**
     * Specify the title of the contact.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Specify the title of the contact.
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }
}

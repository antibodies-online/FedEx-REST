<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailAccessDetailAccessorDetailsItem extends \ArrayObject
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
     * Specifies the accessor password.<br>Example: password
     *
     * @var string
     */
    protected $password;
    /**
     * Specifies the accessor role.<br>Example: role
     *
     * @var string
     */
    protected $role;
    /**
     * Specifies the URL for the email label.<br>Example: emailLabelUrl
     *
     * @var string
     */
    protected $emailLabelUrl;
    /**
     * Specifies the accessor User ID.<br>Example: userId
     *
     * @var string
     */
    protected $userId;
    /**
     * Specifies the accessor password.<br>Example: password
     *
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }
    /**
     * Specifies the accessor password.<br>Example: password
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password) : self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
        return $this;
    }
    /**
     * Specifies the accessor role.<br>Example: role
     *
     * @return string
     */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
     * Specifies the accessor role.<br>Example: role
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role) : self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * Specifies the URL for the email label.<br>Example: emailLabelUrl
     *
     * @return string
     */
    public function getEmailLabelUrl() : string
    {
        return $this->emailLabelUrl;
    }
    /**
     * Specifies the URL for the email label.<br>Example: emailLabelUrl
     *
     * @param string $emailLabelUrl
     *
     * @return self
     */
    public function setEmailLabelUrl(string $emailLabelUrl) : self
    {
        $this->initialized['emailLabelUrl'] = true;
        $this->emailLabelUrl = $emailLabelUrl;
        return $this;
    }
    /**
     * Specifies the accessor User ID.<br>Example: userId
     *
     * @return string
     */
    public function getUserId() : string
    {
        return $this->userId;
    }
    /**
     * Specifies the accessor User ID.<br>Example: userId
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(string $userId) : self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
}
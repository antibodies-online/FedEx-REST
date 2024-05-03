<?php

namespace AntibodiesOnline\FedEx\Model;

class OauthTokenPostBody extends \ArrayObject
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
     * Specify Type of customer requesting the Oauth token.<br>Valid Values: client_credentials, csp_credentials, client_pc_credentials<br>Note:<br>client_credentials - should be used for customers and brand new Compatible Provider customers who are yet to unboard child accounts.<br>csp_credentials - should be used for Compatible Provider customers with existing child accounts.<br>client_pc_credentials – should be used for Proprietary Parent Child customers.
     *
     * @var string
     */
    protected $grantType;
    /**
     * Specify the Client ID also known as API Key received during FedEx Developer portal registration.<br>Example: XXXX-XXX-XXXX-XXX
     *
     * @var string
     */
    protected $clientId;
    /**
     * Specify the Client secret also known as Secret Key received during FedEx Developer portal registration.<br>Example: XXXX-XXX-XXXX-XXX
     *
     * @var string
     */
    protected $clientSecret;
    /**
     * Specify the Client ID also known as Customer Key. This element is used as a login credential for a Compatible customer or a Proprietary Parent Child customer to access the application on behalf of their customer.<br>Example: XXXX-XXX-XXXX-XXX<br>Note: This element should be used by Compatible and Proprietary Parent Child customers.
     *
     * @var string
     */
    protected $childKey;
    /**
     * Specify the Client secret also known as Customer Secret. This element is used as a login credential for a Compatible customer or a Proprietary Parent Child customer to access the application on behalf of their customer.<br>Example: XXXX-XXX-XXXX-XXX<br>Note: This element should be used by Compatible and Proprietary Parent Child customers.
     *
     * @var string
     */
    protected $childSecret;
    /**
     * Specify Type of customer requesting the Oauth token.<br>Valid Values: client_credentials, csp_credentials, client_pc_credentials<br>Note:<br>client_credentials - should be used for customers and brand new Compatible Provider customers who are yet to unboard child accounts.<br>csp_credentials - should be used for Compatible Provider customers with existing child accounts.<br>client_pc_credentials – should be used for Proprietary Parent Child customers.
     *
     * @return string
     */
    public function getGrantType() : string
    {
        return $this->grantType;
    }
    /**
     * Specify Type of customer requesting the Oauth token.<br>Valid Values: client_credentials, csp_credentials, client_pc_credentials<br>Note:<br>client_credentials - should be used for customers and brand new Compatible Provider customers who are yet to unboard child accounts.<br>csp_credentials - should be used for Compatible Provider customers with existing child accounts.<br>client_pc_credentials – should be used for Proprietary Parent Child customers.
     *
     * @param string $grantType
     *
     * @return self
     */
    public function setGrantType(string $grantType) : self
    {
        $this->initialized['grantType'] = true;
        $this->grantType = $grantType;
        return $this;
    }
    /**
     * Specify the Client ID also known as API Key received during FedEx Developer portal registration.<br>Example: XXXX-XXX-XXXX-XXX
     *
     * @return string
     */
    public function getClientId() : string
    {
        return $this->clientId;
    }
    /**
     * Specify the Client ID also known as API Key received during FedEx Developer portal registration.<br>Example: XXXX-XXX-XXXX-XXX
     *
     * @param string $clientId
     *
     * @return self
     */
    public function setClientId(string $clientId) : self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * Specify the Client secret also known as Secret Key received during FedEx Developer portal registration.<br>Example: XXXX-XXX-XXXX-XXX
     *
     * @return string
     */
    public function getClientSecret() : string
    {
        return $this->clientSecret;
    }
    /**
     * Specify the Client secret also known as Secret Key received during FedEx Developer portal registration.<br>Example: XXXX-XXX-XXXX-XXX
     *
     * @param string $clientSecret
     *
     * @return self
     */
    public function setClientSecret(string $clientSecret) : self
    {
        $this->initialized['clientSecret'] = true;
        $this->clientSecret = $clientSecret;
        return $this;
    }
    /**
     * Specify the Client ID also known as Customer Key. This element is used as a login credential for a Compatible customer or a Proprietary Parent Child customer to access the application on behalf of their customer.<br>Example: XXXX-XXX-XXXX-XXX<br>Note: This element should be used by Compatible and Proprietary Parent Child customers.
     *
     * @return string
     */
    public function getChildKey() : string
    {
        return $this->childKey;
    }
    /**
     * Specify the Client ID also known as Customer Key. This element is used as a login credential for a Compatible customer or a Proprietary Parent Child customer to access the application on behalf of their customer.<br>Example: XXXX-XXX-XXXX-XXX<br>Note: This element should be used by Compatible and Proprietary Parent Child customers.
     *
     * @param string $childKey
     *
     * @return self
     */
    public function setChildKey(string $childKey) : self
    {
        $this->initialized['childKey'] = true;
        $this->childKey = $childKey;
        return $this;
    }
    /**
     * Specify the Client secret also known as Customer Secret. This element is used as a login credential for a Compatible customer or a Proprietary Parent Child customer to access the application on behalf of their customer.<br>Example: XXXX-XXX-XXXX-XXX<br>Note: This element should be used by Compatible and Proprietary Parent Child customers.
     *
     * @return string
     */
    public function getChildSecret() : string
    {
        return $this->childSecret;
    }
    /**
     * Specify the Client secret also known as Customer Secret. This element is used as a login credential for a Compatible customer or a Proprietary Parent Child customer to access the application on behalf of their customer.<br>Example: XXXX-XXX-XXXX-XXX<br>Note: This element should be used by Compatible and Proprietary Parent Child customers.
     *
     * @param string $childSecret
     *
     * @return self
     */
    public function setChildSecret(string $childSecret) : self
    {
        $this->initialized['childSecret'] = true;
        $this->childSecret = $childSecret;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ValidatePostalUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\CountryV1PostalValidatePostResponse401
     */
    private $countryV1PostalValidatePostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\CountryV1PostalValidatePostResponse401 $countryV1PostalValidatePostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->countryV1PostalValidatePostResponse401 = $countryV1PostalValidatePostResponse401;
        $this->response = $response;
    }
    public function getCountryV1PostalValidatePostResponse401() : \AntibodiesOnline\FedEx\Api\Model\CountryV1PostalValidatePostResponse401
    {
        return $this->countryV1PostalValidatePostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
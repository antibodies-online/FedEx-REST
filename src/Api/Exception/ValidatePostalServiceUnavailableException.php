<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ValidatePostalServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\CountryV1PostalValidatePostResponse503
     */
    private $countryV1PostalValidatePostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\CountryV1PostalValidatePostResponse503 $countryV1PostalValidatePostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->countryV1PostalValidatePostResponse503 = $countryV1PostalValidatePostResponse503;
        $this->response = $response;
    }
    public function getCountryV1PostalValidatePostResponse503(): \AntibodiesOnline\FedEx\Api\Model\CountryV1PostalValidatePostResponse503
    {
        return $this->countryV1PostalValidatePostResponse503;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
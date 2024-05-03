<?php

namespace AntibodiesOnline\FedEx\Exception;

class ValidatePostalInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\CountryV1PostalValidatePostResponse500
     */
    private $countryV1PostalValidatePostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\CountryV1PostalValidatePostResponse500 $countryV1PostalValidatePostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->countryV1PostalValidatePostResponse500 = $countryV1PostalValidatePostResponse500;
        $this->response = $response;
    }
    public function getCountryV1PostalValidatePostResponse500() : \AntibodiesOnline\FedEx\Model\CountryV1PostalValidatePostResponse500
    {
        return $this->countryV1PostalValidatePostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
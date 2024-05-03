<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ValidatePostalBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\CountryV1PostalValidatePostResponse400
     */
    private $countryV1PostalValidatePostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\CountryV1PostalValidatePostResponse400 $countryV1PostalValidatePostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->countryV1PostalValidatePostResponse400 = $countryV1PostalValidatePostResponse400;
        $this->response = $response;
    }
    public function getCountryV1PostalValidatePostResponse400() : \AntibodiesOnline\FedEx\Api\Model\CountryV1PostalValidatePostResponse400
    {
        return $this->countryV1PostalValidatePostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ValidatePostalNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\CountryV1PostalValidatePostResponse404
     */
    private $countryV1PostalValidatePostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\CountryV1PostalValidatePostResponse404 $countryV1PostalValidatePostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->countryV1PostalValidatePostResponse404 = $countryV1PostalValidatePostResponse404;
        $this->response = $response;
    }
    public function getCountryV1PostalValidatePostResponse404(): \AntibodiesOnline\FedEx\Api\Model\CountryV1PostalValidatePostResponse404
    {
        return $this->countryV1PostalValidatePostResponse404;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
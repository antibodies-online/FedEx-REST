<?php

namespace AntibodiesOnline\FedEx\Exception;

class ValidatePostalForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\CountryV1PostalValidatePostResponse403
     */
    private $countryV1PostalValidatePostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\CountryV1PostalValidatePostResponse403 $countryV1PostalValidatePostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->countryV1PostalValidatePostResponse403 = $countryV1PostalValidatePostResponse403;
        $this->response = $response;
    }
    public function getCountryV1PostalValidatePostResponse403() : \AntibodiesOnline\FedEx\Model\CountryV1PostalValidatePostResponse403
    {
        return $this->countryV1PostalValidatePostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
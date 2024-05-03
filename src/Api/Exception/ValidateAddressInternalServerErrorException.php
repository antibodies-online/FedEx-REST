<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ValidateAddressInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse500
     */
    private $addressV1AddressesResolvePostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse500 $addressV1AddressesResolvePostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->addressV1AddressesResolvePostResponse500 = $addressV1AddressesResolvePostResponse500;
        $this->response = $response;
    }
    public function getAddressV1AddressesResolvePostResponse500() : \AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse500
    {
        return $this->addressV1AddressesResolvePostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
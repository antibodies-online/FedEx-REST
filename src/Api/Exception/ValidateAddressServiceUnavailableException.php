<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ValidateAddressServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse503
     */
    private $addressV1AddressesResolvePostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse503 $addressV1AddressesResolvePostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->addressV1AddressesResolvePostResponse503 = $addressV1AddressesResolvePostResponse503;
        $this->response = $response;
    }
    public function getAddressV1AddressesResolvePostResponse503(): \AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse503
    {
        return $this->addressV1AddressesResolvePostResponse503;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
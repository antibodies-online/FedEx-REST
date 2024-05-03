<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ValidateAddressUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse401
     */
    private $addressV1AddressesResolvePostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse401 $addressV1AddressesResolvePostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->addressV1AddressesResolvePostResponse401 = $addressV1AddressesResolvePostResponse401;
        $this->response = $response;
    }
    public function getAddressV1AddressesResolvePostResponse401() : \AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse401
    {
        return $this->addressV1AddressesResolvePostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
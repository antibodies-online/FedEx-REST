<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ValidateAddressNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse404
     */
    private $addressV1AddressesResolvePostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse404 $addressV1AddressesResolvePostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->addressV1AddressesResolvePostResponse404 = $addressV1AddressesResolvePostResponse404;
        $this->response = $response;
    }
    public function getAddressV1AddressesResolvePostResponse404() : \AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse404
    {
        return $this->addressV1AddressesResolvePostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
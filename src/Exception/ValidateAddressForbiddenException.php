<?php

namespace AntibodiesOnline\FedEx\Exception;

class ValidateAddressForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\AddressV1AddressesResolvePostResponse403
     */
    private $addressV1AddressesResolvePostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\AddressV1AddressesResolvePostResponse403 $addressV1AddressesResolvePostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->addressV1AddressesResolvePostResponse403 = $addressV1AddressesResolvePostResponse403;
        $this->response = $response;
    }
    public function getAddressV1AddressesResolvePostResponse403() : \AntibodiesOnline\FedEx\Model\AddressV1AddressesResolvePostResponse403
    {
        return $this->addressV1AddressesResolvePostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
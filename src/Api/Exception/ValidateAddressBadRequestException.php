<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ValidateAddressBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse400
     */
    private $addressV1AddressesResolvePostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse400 $addressV1AddressesResolvePostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->addressV1AddressesResolvePostResponse400 = $addressV1AddressesResolvePostResponse400;
        $this->response = $response;
    }
    public function getAddressV1AddressesResolvePostResponse400(): \AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse400
    {
        return $this->addressV1AddressesResolvePostResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
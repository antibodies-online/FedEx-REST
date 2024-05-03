<?php

namespace AntibodiesOnline\FedEx\Exception;

class ShipmentRegulatoryDetailsUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse401
     */
    private $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse401 $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse401 = $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse401;
        $this->response = $response;
    }
    public function getGlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse401() : \AntibodiesOnline\FedEx\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse401
    {
        return $this->globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
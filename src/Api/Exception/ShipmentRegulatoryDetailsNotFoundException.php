<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ShipmentRegulatoryDetailsNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse404
     */
    private $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse404 $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse404 = $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse404;
        $this->response = $response;
    }
    public function getGlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse404(): \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse404
    {
        return $this->globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse404;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
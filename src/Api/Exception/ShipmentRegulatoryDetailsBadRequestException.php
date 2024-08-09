<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ShipmentRegulatoryDetailsBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse400
     */
    private $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse400 $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse400 = $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse400;
        $this->response = $response;
    }
    public function getGlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse400(): \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse400
    {
        return $this->globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
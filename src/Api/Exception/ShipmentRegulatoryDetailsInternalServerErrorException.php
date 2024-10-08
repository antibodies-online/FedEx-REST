<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ShipmentRegulatoryDetailsInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse500
     */
    private $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse500 $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse500 = $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse500;
        $this->response = $response;
    }
    public function getGlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse500(): \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse500
    {
        return $this->globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse500;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
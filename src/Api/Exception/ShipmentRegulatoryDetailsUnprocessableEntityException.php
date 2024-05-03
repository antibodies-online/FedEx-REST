<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ShipmentRegulatoryDetailsUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422
     */
    private $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422 $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('UnProcessable Entity');
        $this->globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422 = $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422;
        $this->response = $response;
    }
    public function getGlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422() : \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422
    {
        return $this->globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
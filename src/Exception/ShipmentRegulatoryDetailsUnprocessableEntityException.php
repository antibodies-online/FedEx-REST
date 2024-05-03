<?php

namespace AntibodiesOnline\FedEx\Exception;

class ShipmentRegulatoryDetailsUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422
     */
    private $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422 $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('UnProcessable Entity');
        $this->globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422 = $globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422;
        $this->response = $response;
    }
    public function getGlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422() : \AntibodiesOnline\FedEx\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422
    {
        return $this->globaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
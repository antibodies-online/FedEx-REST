<?php

namespace AntibodiesOnline\FedEx\Exception;

class FreightRateQuoteBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\RateV1FreightRatesQuotesPostResponse400
     */
    private $rateV1FreightRatesQuotesPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\RateV1FreightRatesQuotesPostResponse400 $rateV1FreightRatesQuotesPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->rateV1FreightRatesQuotesPostResponse400 = $rateV1FreightRatesQuotesPostResponse400;
        $this->response = $response;
    }
    public function getRateV1FreightRatesQuotesPostResponse400() : \AntibodiesOnline\FedEx\Model\RateV1FreightRatesQuotesPostResponse400
    {
        return $this->rateV1FreightRatesQuotesPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
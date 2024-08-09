<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class FreightRateQuoteServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse503
     */
    private $rateV1FreightRatesQuotesPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse503 $rateV1FreightRatesQuotesPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->rateV1FreightRatesQuotesPostResponse503 = $rateV1FreightRatesQuotesPostResponse503;
        $this->response = $response;
    }
    public function getRateV1FreightRatesQuotesPostResponse503(): \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse503
    {
        return $this->rateV1FreightRatesQuotesPostResponse503;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
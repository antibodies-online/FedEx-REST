<?php

namespace AntibodiesOnline\FedEx\Exception;

class RateAndTransitTimesServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\RateV1RatesQuotesPostResponse503
     */
    private $rateV1RatesQuotesPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\RateV1RatesQuotesPostResponse503 $rateV1RatesQuotesPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->rateV1RatesQuotesPostResponse503 = $rateV1RatesQuotesPostResponse503;
        $this->response = $response;
    }
    public function getRateV1RatesQuotesPostResponse503() : \AntibodiesOnline\FedEx\Model\RateV1RatesQuotesPostResponse503
    {
        return $this->rateV1RatesQuotesPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
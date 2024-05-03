<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class RateAndTransitTimesNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse404
     */
    private $rateV1RatesQuotesPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse404 $rateV1RatesQuotesPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->rateV1RatesQuotesPostResponse404 = $rateV1RatesQuotesPostResponse404;
        $this->response = $response;
    }
    public function getRateV1RatesQuotesPostResponse404() : \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse404
    {
        return $this->rateV1RatesQuotesPostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
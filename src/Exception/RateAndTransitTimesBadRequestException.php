<?php

namespace AntibodiesOnline\FedEx\Exception;

class RateAndTransitTimesBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\RateV1RatesQuotesPostResponse400
     */
    private $rateV1RatesQuotesPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\RateV1RatesQuotesPostResponse400 $rateV1RatesQuotesPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->rateV1RatesQuotesPostResponse400 = $rateV1RatesQuotesPostResponse400;
        $this->response = $response;
    }
    public function getRateV1RatesQuotesPostResponse400() : \AntibodiesOnline\FedEx\Model\RateV1RatesQuotesPostResponse400
    {
        return $this->rateV1RatesQuotesPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
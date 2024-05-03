<?php

namespace AntibodiesOnline\FedEx\Exception;

class RateAndTransitTimesUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\RateV1RatesQuotesPostResponse401
     */
    private $rateV1RatesQuotesPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\RateV1RatesQuotesPostResponse401 $rateV1RatesQuotesPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->rateV1RatesQuotesPostResponse401 = $rateV1RatesQuotesPostResponse401;
        $this->response = $response;
    }
    public function getRateV1RatesQuotesPostResponse401() : \AntibodiesOnline\FedEx\Model\RateV1RatesQuotesPostResponse401
    {
        return $this->rateV1RatesQuotesPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
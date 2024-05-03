<?php

namespace AntibodiesOnline\FedEx\Exception;

class RateAndTransitTimesInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\RateV1RatesQuotesPostResponse500
     */
    private $rateV1RatesQuotesPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\RateV1RatesQuotesPostResponse500 $rateV1RatesQuotesPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->rateV1RatesQuotesPostResponse500 = $rateV1RatesQuotesPostResponse500;
        $this->response = $response;
    }
    public function getRateV1RatesQuotesPostResponse500() : \AntibodiesOnline\FedEx\Model\RateV1RatesQuotesPostResponse500
    {
        return $this->rateV1RatesQuotesPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
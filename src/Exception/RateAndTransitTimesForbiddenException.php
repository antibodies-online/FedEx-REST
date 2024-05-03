<?php

namespace AntibodiesOnline\FedEx\Exception;

class RateAndTransitTimesForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\RateV1RatesQuotesPostResponse403
     */
    private $rateV1RatesQuotesPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\RateV1RatesQuotesPostResponse403 $rateV1RatesQuotesPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->rateV1RatesQuotesPostResponse403 = $rateV1RatesQuotesPostResponse403;
        $this->response = $response;
    }
    public function getRateV1RatesQuotesPostResponse403() : \AntibodiesOnline\FedEx\Model\RateV1RatesQuotesPostResponse403
    {
        return $this->rateV1RatesQuotesPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
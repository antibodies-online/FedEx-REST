<?php

namespace AntibodiesOnline\FedEx\Exception;

class FreightRateQuoteUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\RateV1FreightRatesQuotesPostResponse401
     */
    private $rateV1FreightRatesQuotesPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\RateV1FreightRatesQuotesPostResponse401 $rateV1FreightRatesQuotesPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->rateV1FreightRatesQuotesPostResponse401 = $rateV1FreightRatesQuotesPostResponse401;
        $this->response = $response;
    }
    public function getRateV1FreightRatesQuotesPostResponse401() : \AntibodiesOnline\FedEx\Model\RateV1FreightRatesQuotesPostResponse401
    {
        return $this->rateV1FreightRatesQuotesPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class FreightRateQuoteInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse500
     */
    private $rateV1FreightRatesQuotesPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse500 $rateV1FreightRatesQuotesPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->rateV1FreightRatesQuotesPostResponse500 = $rateV1FreightRatesQuotesPostResponse500;
        $this->response = $response;
    }
    public function getRateV1FreightRatesQuotesPostResponse500() : \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse500
    {
        return $this->rateV1FreightRatesQuotesPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
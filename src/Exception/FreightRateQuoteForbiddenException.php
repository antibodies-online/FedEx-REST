<?php

namespace AntibodiesOnline\FedEx\Exception;

class FreightRateQuoteForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\RateV1FreightRatesQuotesPostResponse403
     */
    private $rateV1FreightRatesQuotesPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\RateV1FreightRatesQuotesPostResponse403 $rateV1FreightRatesQuotesPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->rateV1FreightRatesQuotesPostResponse403 = $rateV1FreightRatesQuotesPostResponse403;
        $this->response = $response;
    }
    public function getRateV1FreightRatesQuotesPostResponse403() : \AntibodiesOnline\FedEx\Model\RateV1FreightRatesQuotesPostResponse403
    {
        return $this->rateV1FreightRatesQuotesPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
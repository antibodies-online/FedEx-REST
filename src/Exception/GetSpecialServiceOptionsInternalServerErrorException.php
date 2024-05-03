<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Exception;

class GetSpecialServiceOptionsInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\AvailabilityV1SpecialserviceoptionsPostResponse500
     */
    private $availabilityV1SpecialserviceoptionsPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\AntibodiesOnline\FedEx\Model\AvailabilityV1SpecialserviceoptionsPostResponse500 $availabilityV1SpecialserviceoptionsPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->availabilityV1SpecialserviceoptionsPostResponse500 = $availabilityV1SpecialserviceoptionsPostResponse500;
        $this->response = $response;
    }

    public function getAvailabilityV1SpecialserviceoptionsPostResponse500(): \AntibodiesOnline\FedEx\Model\AvailabilityV1SpecialserviceoptionsPostResponse500
    {
        return $this->availabilityV1SpecialserviceoptionsPostResponse500;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
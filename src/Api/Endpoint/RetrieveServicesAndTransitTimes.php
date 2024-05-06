<?php

namespace AntibodiesOnline\FedEx\Api\Endpoint;

class RetrieveServicesAndTransitTimes extends \AntibodiesOnline\FedEx\Api\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\FedEx\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint gives the estimated transit times for a particular shipment.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. It also helps you to track the transaction with APIF.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     */
    public function __construct(?\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBody $requestBody = null, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \AntibodiesOnline\FedEx\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/availability/v1/transittimes';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['x-customer-transaction-id', 'content-type', 'x-locale', 'authorization']);
        $optionsResolver->setRequired(['content-type', 'authorization']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('x-customer-transaction-id', ['string']);
        $optionsResolver->addAllowedTypes('content-type', ['string']);
        $optionsResolver->addAllowedTypes('x-locale', ['string']);
        $optionsResolver->addAllowedTypes('authorization', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveServicesAndTransitTimesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveServicesAndTransitTimesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveServicesAndTransitTimesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveServicesAndTransitTimesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveServicesAndTransitTimesInternalServerErrorException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1TransittimesPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\RetrieveServicesAndTransitTimesBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1TransittimesPostResponse400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\RetrieveServicesAndTransitTimesUnauthorizedException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1TransittimesPostResponse401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\RetrieveServicesAndTransitTimesForbiddenException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1TransittimesPostResponse403', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\RetrieveServicesAndTransitTimesNotFoundException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\RetrieveServicesAndTransitTimesInternalServerErrorException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1TransittimesPostResponse500', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}
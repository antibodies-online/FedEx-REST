<?php

namespace AntibodiesOnline\FedEx\Api\Endpoint;

class CheckPickupAvailability extends \AntibodiesOnline\FedEx\Api\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\FedEx\Api\Runtime\Client\Endpoint
{
    /**
     * Use this endpoint to check the availability of a pickup service.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     */
    public function __construct(?\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostBody $requestBody = null, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \AntibodiesOnline\FedEx\Api\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/pickup/v1/pickups/availabilities';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
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
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityUnauthorizedException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityForbiddenException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse403', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityNotFoundException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse404', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityInternalServerErrorException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse500', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityServiceUnavailableException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse503', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
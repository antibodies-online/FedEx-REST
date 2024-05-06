<?php

namespace AntibodiesOnline\FedEx\Api\Endpoint;

class CancelFreightPickup extends \AntibodiesOnline\FedEx\Api\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\FedEx\Api\Runtime\Client\Endpoint
{
    /**
     * Use this endpoint to cancel the already scheduled freight pickup request. Note a failure notification will be sent if you attempt to cancel a pickup after the FedEx courier has been dispatched to the pickup location.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsCancelPutBody $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     */
    public function __construct(?\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsCancelPutBody $requestBody = null, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \AntibodiesOnline\FedEx\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/pickup/v1/freight/pickups/cancel/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsCancelPutBody) {
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
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsCancelPutResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsCancelPutResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsCancelPutResponse400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupUnauthorizedException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsCancelPutResponse401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupForbiddenException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsCancelPutResponse403', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupNotFoundException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupInternalServerErrorException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsCancelPutResponse500', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupServiceUnavailableException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsCancelPutResponse503', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}
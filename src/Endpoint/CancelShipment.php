<?php

namespace AntibodiesOnline\FedEx\Endpoint;

class CancelShipment extends \AntibodiesOnline\FedEx\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\FedEx\Runtime\Client\Endpoint
{
    /**
     * Use this endpoint to cancel FedEx Express and Ground shipments that have not already been tendered to FedEx. This request will cancel all packages within the shipment.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     */
    public function __construct($requestBody = null, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \AntibodiesOnline\FedEx\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/ship/v1/shipments/cancel';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (isset($this->body)) {
            return [['Content-Type' => ['application/json']], json_encode($this->body)];
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
     * @throws \AntibodiesOnline\FedEx\Exception\CancelShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelShipmentInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelShipmentServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsCancelPutResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsCancelPutResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\CancelShipmentBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsCancelPutResponse400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\CancelShipmentUnauthorizedException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsCancelPutResponse401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\CancelShipmentForbiddenException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsCancelPutResponse403', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\CancelShipmentNotFoundException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsCancelPutResponse404', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\CancelShipmentInternalServerErrorException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsCancelPutResponse500', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\CancelShipmentServiceUnavailableException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsCancelPutResponse503', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}
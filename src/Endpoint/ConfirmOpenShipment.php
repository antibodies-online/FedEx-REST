<?php

namespace AntibodiesOnline\FedEx\Endpoint;

class ConfirmOpenShipment extends \AntibodiesOnline\FedEx\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\FedEx\Runtime\Client\Endpoint
{
    /**
     * Use this endpoint to validate and upload the Open Ship shipment data to FedEx Systems once all packages are added in the Shipment request.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
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
        return 'POST';
    }
    public function getUri() : string
    {
        return '/ship/v1/openshipments/';
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
     * @throws \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentUnauthorizedException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentForbiddenException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse403', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentNotFoundException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse404', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentInternalServerErrorException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse500', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentServiceUnavailableException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse503', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}
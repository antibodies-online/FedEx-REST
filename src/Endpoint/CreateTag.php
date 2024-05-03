<?php

namespace AntibodiesOnline\FedEx\Endpoint;

class CreateTag extends \AntibodiesOnline\FedEx\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\FedEx\Runtime\Client\Endpoint
{
    /**
     * FedEx creates and delivers a return shipping label to your customer and collects the item for return. Your customer needs to have the package ready for pickup when the FedEx driver arrives. Use this endpoint to create tag requests for FedEx Express and FedEx Ground shipments.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
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
        return '/ship/v1/shipments/tag';
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
     * @throws \AntibodiesOnline\FedEx\Exception\CreateTagBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateTagUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateTagForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateTagNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateTagInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateTagServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsTagPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsTagPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\CreateTagBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsTagPostResponse400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\CreateTagUnauthorizedException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsTagPostResponse401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\CreateTagForbiddenException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsTagPostResponse403', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\CreateTagNotFoundException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsTagPostResponse404', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\CreateTagInternalServerErrorException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsTagPostResponse500', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\CreateTagServiceUnavailableException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsTagPostResponse503', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}
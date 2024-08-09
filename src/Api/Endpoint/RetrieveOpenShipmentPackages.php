<?php

namespace AntibodiesOnline\FedEx\Api\Endpoint;

class RetrieveOpenShipmentPackages extends \AntibodiesOnline\FedEx\Api\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\FedEx\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint helps the user to RETRIEVE specific package request details of the Open Shipment that is created.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     */
    public function __construct(?\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostBody $requestBody = null, array $headerParameters = [])
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
        return '/ship/v1/openshipments/packages/retrieve';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostBody) {
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
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesUnauthorizedException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesForbiddenException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse403', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesNotFoundException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse404', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesInternalServerErrorException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse500', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesServiceUnavailableException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse503', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
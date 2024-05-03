<?php

namespace AntibodiesOnline\FedEx\Endpoint;

class GetPackageAndServiceOptions extends \AntibodiesOnline\FedEx\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\FedEx\Runtime\Client\Endpoint
{
    /**
     * Use this endpoint to return a list of all FedEx Express or FedEx Ground services and packaging type combinations that are available between the input origin and destination and subpackaging information.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
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
        return '/availability/v1/packageandserviceoptions';
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
     * @throws \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\AvailabilityV1PackageandserviceoptionsPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsUnauthorizedException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsForbiddenException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse403', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsNotFoundException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse404', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsInternalServerErrorException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse500', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsServiceUnavailableException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse503', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}
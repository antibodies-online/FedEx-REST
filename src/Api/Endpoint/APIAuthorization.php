<?php

namespace AntibodiesOnline\FedEx\Api\Endpoint;

class APIAuthorization extends \AntibodiesOnline\FedEx\Api\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\FedEx\Api\Runtime\Client\Endpoint
{
    /**
     * Use this endpoint to request the OAuth token (bearer token) to authorize your application to access FedEx resources. You can pass this bearer token in your subsequent individual FedEx API endpoint requests.<br/><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param \AntibodiesOnline\FedEx\Api\Model\OauthTokenPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.<br> Example: application/x-www-form-urlencoded
     * }
     */
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\OauthTokenPostBody $requestBody, array $headerParameters = [])
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
        return '/oauth/token';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \AntibodiesOnline\FedEx\Api\Model\OauthTokenPostBody) {
            return [['Content-Type' => ['application/x-www-form-urlencoded']], http_build_query($serializer->normalize($this->body, 'json'))];
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
        $optionsResolver->setDefined(['content-type']);
        $optionsResolver->setRequired(['content-type']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('content-type', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \AntibodiesOnline\FedEx\Api\Exception\APIAuthorizationUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\APIAuthorizationInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\APIAuthorizationServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\OauthTokenPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\OauthTokenPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\APIAuthorizationUnauthorizedException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\OauthTokenPostResponse401', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\APIAuthorizationInternalServerErrorException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\OauthTokenPostResponse500', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\APIAuthorizationServiceUnavailableException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\OauthTokenPostResponse503', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
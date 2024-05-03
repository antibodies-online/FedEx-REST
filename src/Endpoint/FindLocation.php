<?php

namespace AntibodiesOnline\FedEx\Endpoint;

class FindLocation extends \AntibodiesOnline\FedEx\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\FedEx\Runtime\Client\Endpoint
{
    /**
     * Use this endpoint to search for nearest FedEx locations by address, geographicccc coordinates, or phone numberrrr. You can also narrow your search by type of location and services offered. It returns up to 75 locations within a 50-mile radius for the address used in the search criteria. Results are based on current date and time. Supports all FedEx operating companies and countries, dependent upon being able to get a valid geolocation for a given set of criteria.<br><i>Note: You must specify landline numbers only, when searching for the nearest FedEx locations using phone number.</i><br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
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
        return '/location/v1/locations';
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
     * @throws \AntibodiesOnline\FedEx\Exception\FindLocationBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\FindLocationUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\FindLocationForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\FindLocationNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\FindLocationInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\FindLocationServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\LocationV1LocationsPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\FindLocationBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\FindLocationUnauthorizedException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\FindLocationForbiddenException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse403', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\FindLocationNotFoundException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse404', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\FindLocationInternalServerErrorException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse500', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\FindLocationServiceUnavailableException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse503', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}
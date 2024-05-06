<?php

namespace AntibodiesOnline\FedEx\Api\Endpoint;

class UploadETDFiles extends \AntibodiesOnline\FedEx\Api\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\FedEx\Api\Runtime\Client\Endpoint
{
    /**
     * Use this endpoint to upload the trade documents electronically before (pre-shipment) and after (post-shipment) the shipment is created.<br><i>Note&#58; FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Content-Type Indicates the type of content <br> Example: "multipart/form-data"
     *     @var string $Authorization Indicates the JWE token to be used for authorizing the client request. <br> Example: "Bearer ****"
     *     @var string $x-customer-transaction-id This is the customer transaction identifier.<br>Example: 771407-1
     * }
     */
    public function __construct(?\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostBody $requestBody = null, array $headerParameters = [])
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
        return '/documents/v1/etds/upload';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostBody) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
                $bodyBuilder->addResource($key, $value);
            }
            return [['Content-Type' => ['multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '"')]], $bodyBuilder->build()];
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
        $optionsResolver->setDefined(['Content-Type', 'Authorization', 'x-customer-transaction-id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Content-Type', ['string']);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);
        $optionsResolver->addAllowedTypes('x-customer-transaction-id', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse201
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\DocumentsV1EtdsUploadPostResponse201', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\DocumentsV1EtdsUploadPostResponse400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesUnauthorizedException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\DocumentsV1EtdsUploadPostResponse401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesForbiddenException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\DocumentsV1EtdsUploadPostResponse403', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesNotFoundException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\DocumentsV1EtdsUploadPostResponse404', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesInternalServerErrorException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\DocumentsV1EtdsUploadPostResponse500', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesServiceUnavailableException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Api\\Model\\DocumentsV1EtdsUploadPostResponse503', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}
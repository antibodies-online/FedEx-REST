<?php

namespace AntibodiesOnline\FedEx\Endpoint;

class ImageUploadServiceInfo extends \AntibodiesOnline\FedEx\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\FedEx\Runtime\Client\Endpoint
{
    /**
     * Use this endpoint to upload customized Company Letterhead/Logo and Digital signature images which can be used in the FedEx generated paperwork or reports.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.<i>
     *
     * @param null|\AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Specifies the authorization token.<br> Example: Bearer XXX
     *     @var string $x-customer-transaction-id Identifies the transaction ID of the request.<br> Example: "771407-1"
     * }
     */
    public function __construct(?\AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostBody $requestBody = null, array $headerParameters = [])
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
        return '/documents/v1/lhsimages/upload';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostBody) {
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
        $optionsResolver->setDefined(['Authorization', 'x-customer-transaction-id']);
        $optionsResolver->setRequired(['Authorization', 'x-customer-transaction-id']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);
        $optionsResolver->addAllowedTypes('x-customer-transaction-id', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostResponse201
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\DocumentsV1LhsimagesUploadPostResponse201', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\DocumentsV1LhsimagesUploadPostResponse400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoUnauthorizedException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\DocumentsV1LhsimagesUploadPostResponse401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoForbiddenException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\DocumentsV1LhsimagesUploadPostResponse403', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoNotFoundException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\DocumentsV1LhsimagesUploadPostResponse404', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoInternalServerErrorException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\DocumentsV1LhsimagesUploadPostResponse500', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoServiceUnavailableException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\DocumentsV1LhsimagesUploadPostResponse503', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}
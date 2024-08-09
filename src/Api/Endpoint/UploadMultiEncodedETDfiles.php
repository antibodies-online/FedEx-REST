<?php

namespace AntibodiesOnline\FedEx\Api\Endpoint;

class UploadMultiEncodedETDfiles extends \AntibodiesOnline\FedEx\Api\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\FedEx\Api\Runtime\Client\Endpoint
{
    /**
     * Use this endpoint to upload multiple trade documents as base64 electronically before (pre-shipment) and after (post-shipment) the shipment is created
     *
     * @param null|\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Content-Type Type of content
     *     @var string $Authorization This indicates the authorization token for the input request.
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply
     * }
     */
    public function __construct(?\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBody $requestBody = null, array $headerParameters = [])
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
        return '/documents/v1/etds/encodedmultiupload';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBody) {
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
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
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
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadMultiEncodedETDfilesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadMultiEncodedETDfilesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadMultiEncodedETDfilesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadMultiEncodedETDfilesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadMultiEncodedETDfilesInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadMultiEncodedETDfilesServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse201
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse201', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\UploadMultiEncodedETDfilesBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\UploadMultiEncodedETDfilesUnauthorizedException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\UploadMultiEncodedETDfilesForbiddenException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse403', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\UploadMultiEncodedETDfilesNotFoundException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse404', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\UploadMultiEncodedETDfilesInternalServerErrorException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse500', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Api\Exception\UploadMultiEncodedETDfilesServiceUnavailableException($serializer->deserialize($body, 'AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse503', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
<?php

namespace AntibodiesOnline\FedEx\Endpoint;

class ShipmentRegulatoryDetails extends \AntibodiesOnline\FedEx\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\FedEx\Runtime\Client\Endpoint
{
    /**
     * Use this endpoint to retrieve regulatory document and advisories for your shipment.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
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
        return '/globaltrade/v1/shipments/regulatorydetails/retrieve';
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
     * @throws \AntibodiesOnline\FedEx\Exception\ShipmentRegulatoryDetailsBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\ShipmentRegulatoryDetailsUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\ShipmentRegulatoryDetailsNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\ShipmentRegulatoryDetailsUnprocessableEntityException
     * @throws \AntibodiesOnline\FedEx\Exception\ShipmentRegulatoryDetailsInternalServerErrorException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\ShipmentRegulatoryDetailsBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\ShipmentRegulatoryDetailsUnauthorizedException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse401', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\ShipmentRegulatoryDetailsNotFoundException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse404', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\ShipmentRegulatoryDetailsUnprocessableEntityException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\ShipmentRegulatoryDetailsInternalServerErrorException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse500', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}
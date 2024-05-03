<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Endpoint;

class GroundPerformEndOfDayClose extends \AntibodiesOnline\FedEx\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\FedEx\Runtime\Client\Endpoint
{
    use \AntibodiesOnline\FedEx\Runtime\Client\EndpointTrait;

    /**
     * Use this endpoint to close the Ground shipments and generate the reports.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>.
     *
     * @param mixed|null $requestBody
     * @param array      $headerParameters {
     *
     * @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     * @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     * @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     * @var string $authorization This indicates the authorization token for the input request.
     *             }
     */
    public function __construct($requestBody = null, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return '/ship/v1/endofday/';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (isset($this->body)) {
            return [['Content-Type' => ['application/json']], json_encode($this->body)];
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
     * @return \AntibodiesOnline\FedEx\Model\ShipV1EndofdayPutResponse200|null
     *
     * @throws \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1EndofdayPutResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1EndofdayPutResponse400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseUnauthorizedException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1EndofdayPutResponse401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseForbiddenException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1EndofdayPutResponse403', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseNotFoundException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1EndofdayPutResponse404', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseInternalServerErrorException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1EndofdayPutResponse500', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseServiceUnavailableException($serializer->deserialize($body, 'AntibodiesOnline\\FedEx\\Model\\ShipV1EndofdayPutResponse503', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api;

class Client extends \AntibodiesOnline\FedEx\Api\Runtime\Client\Client
{
    /**
     * Use this endpoint to get address resolution details. These details are the outcome of validation andddd resolution of the input address. An address is stated assss resolved when the input address matches the known reference data...<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.<i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ValidateAddressBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ValidateAddressUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ValidateAddressForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ValidateAddressNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ValidateAddressInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ValidateAddressServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function validateAddress($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\ValidateAddress($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this endpoint to request the OAuth token (bearer token) to authorize your application to access FedEx resources. You can pass this bearer token in your subsequent individual FedEx API endpoint requests.<br/><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param \AntibodiesOnline\FedEx\Api\Model\OauthTokenPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.<br> Example: application/x-www-form-urlencoded
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\APIAuthorizationUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\APIAuthorizationInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\APIAuthorizationServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\OauthTokenPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function aPIAuthorization(\AntibodiesOnline\FedEx\Api\Model\OauthTokenPostBody $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\APIAuthorization($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this endpoint to reprint the closed Ground shipments reports.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\PerformEndOfDayCloseBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\PerformEndOfDayCloseUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\PerformEndOfDayCloseForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\PerformEndOfDayCloseNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\PerformEndOfDayCloseInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\PerformEndOfDayCloseServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function performEndOfDayClose($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\PerformEndOfDayClose($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this endpoint to close the Ground shipments and generate the reports.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GroundPerformEndOfDayCloseBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GroundPerformEndOfDayCloseUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GroundPerformEndOfDayCloseForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GroundPerformEndOfDayCloseNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GroundPerformEndOfDayCloseInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GroundPerformEndOfDayCloseServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function groundPerformEndOfDayClose($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\GroundPerformEndOfDayClose($requestBody, $headerParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ShipmentRegulatoryDetailsBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ShipmentRegulatoryDetailsUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ShipmentRegulatoryDetailsNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ShipmentRegulatoryDetailsUnprocessableEntityException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ShipmentRegulatoryDetailsInternalServerErrorException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function shipmentRegulatoryDetails($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\ShipmentRegulatoryDetails($requestBody, $headerParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FindLocationBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FindLocationUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FindLocationForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FindLocationNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FindLocationInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FindLocationServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function findLocation($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\FindLocation($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint provides the abilityy to retrieve rateee quotes and optional transit information... The rate is calculated based on the origin and destination of the shipment. Additional information such as carrier code, service type, or service option can be used to filter the results. Applicable operating company is FedEx Freight.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism...</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FreightRateQuoteBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FreightRateQuoteUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FreightRateQuoteForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FreightRateQuoteNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FreightRateQuoteInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FreightRateQuoteServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function freightRateQuote($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\FreightRateQuote($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint helps you to create a Freight LTL Shipment request with the required Freight LTL Shipment information, and to retrieve information for an already in process shipment. It also allows you to confirm and validate your shipment.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FreightShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FreightShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FreightShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FreightShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FreightShipmentInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\FreightShipmentServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function freightShipment($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\FreightShipment($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint allows you to check the availability of an Freight LTL pickup service. The pickup availability depends on two factors, the cut off time and the access time.<br/><br/>**Cut off time** - The latest time allowed for a pickup to be scheduled. The time is local to the pickup postal code.<br/><br/>**Access time** - The time between the pickup ready time (when the package is ready to be picked) and the time when the driver is ready to pick up the package.<br/><br/><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckFreightPickupAvailabilityBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckFreightPickupAvailabilityUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckFreightPickupAvailabilityForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckFreightPickupAvailabilityNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckFreightPickupAvailabilityInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckFreightPickupAvailabilityServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function checkFreightPickupAvailability($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\CheckFreightPickupAvailability($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint helps you to create a freight pickup request for a package to be picked up.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateFreightPickupBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateFreightPickupUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateFreightPickupForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateFreightPickupNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateFreightPickupInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateFreightPickupServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function createFreightPickup($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\CreateFreightPickup($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this endpoint to cancel the already scheduled freight pickup request. Note a failure notification will be sent if you attempt to cancel a pickup after the FedEx courier has been dispatched to the pickup location.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelFreightPickupServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsCancelPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function cancelFreightPickup($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\CancelFreightPickup($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint helps you to create an opennnn shipment request withh the required shipping information.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism....</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateOpenShipmenttBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateOpenShipmenttUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateOpenShipmenttForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateOpenShipmenttNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateOpenShipmenttInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateOpenShipmenttServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsCreatePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function createOpenShipmentt($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\CreateOpenShipmentt($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this endpoint to validate and upload the Open Ship shipment data to FedEx Systems once all packages are added in the Shipment request.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ConfirmOpenShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ConfirmOpenShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ConfirmOpenShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ConfirmOpenShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ConfirmOpenShipmentInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ConfirmOpenShipmentServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function confirmOpenShipment($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\ConfirmOpenShipment($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint helps you to modify an Open shipment request with the required shipping information before the shipment is confirmed.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ModifyOpenShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ModifyOpenShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ModifyOpenShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ModifyOpenShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ModifyOpenShipmentInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ModifyOpenShipmentServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function modifyOpenShipment($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\ModifyOpenShipment($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint helps you to add packages to Open Shipment request with the required shipping information before the shipment is confirmed.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\AddOpenShipmentPackagesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\AddOpenShipmentPackagesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\AddOpenShipmentPackagesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\AddOpenShipmentPackagesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\AddOpenShipmentPackagesInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\AddOpenShipmentPackagesServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function addOpenShipmentPackages($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\AddOpenShipmentPackages($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint helps you to modify packages in Open Shipment request with the required shipping information before the shipment is confirmed.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ModifyOpenShipmentPackagesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ModifyOpenShipmentPackagesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ModifyOpenShipmentPackagesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ModifyOpenShipmentPackagesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ModifyOpenShipmentPackagesInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ModifyOpenShipmentPackagesServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function modifyOpenShipmentPackages($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\ModifyOpenShipmentPackages($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint helps you to delete packages from Open Shipment request with the required shipping information before the shipment is confirmed.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\DeleteOpenShipmentPackagesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\DeleteOpenShipmentPackagesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\DeleteOpenShipmentPackagesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\DeleteOpenShipmentPackagesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\DeleteOpenShipmentPackagesInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\DeleteOpenShipmentPackagesServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesDeletePutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOpenShipmentPackages($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\DeleteOpenShipmentPackages($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint helps the user to RETRIEVE specific package request details of the Open Shipment that is created.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentPackagesServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveOpenShipmentPackages($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\RetrieveOpenShipmentPackages($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint helps you to delete a Openshipment request with the required shipping information before the shipment is confirmed.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\DeleteOpenShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\DeleteOpenShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\DeleteOpenShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\DeleteOpenShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\DeleteOpenShipmentInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\DeleteOpenShipmentServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsDeletePutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOpenShipment($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\DeleteOpenShipment($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint helps the user to RETRIEVE the entire shipment request details of the OpenShipment that is created.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveOpenShipmentInternalServerErrorException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveOpenShipment($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\RetrieveOpenShipment($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint enables you to finalize the Open Shipment. Once an Open Shipment is confirmed, no further changes can be done.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetOpenShipmentResultsBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetOpenShipmentResultsUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetOpenShipmentResultsForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetOpenShipmentResultsNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetOpenShipmentResultsInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetOpenShipmentResultsServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsResultsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenShipmentResults($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\GetOpenShipmentResults($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this endpoint to create a pickup request for a package.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreatePickupBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreatePickupUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreatePickupForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreatePickupNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreatePickupInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreatePickupServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function createPickup($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\CreatePickup($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this endpoint to check the availability of a pickup service.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CheckPickupAvailabilityServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function checkPickupAvailability($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\CheckPickupAvailability($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this endpoint to cancel the already scheduled pickup request. <br>Note: A failure notification will be sent if you attempt to cancel a pickup after the FedEx courier has been dispatched to the pickup location.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelPickupBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelPickupUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelPickupForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelPickupNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelPickupInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelPickupServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsCancelPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function cancelPickup($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\CancelPickup($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this endpoint to validate postal codes and service commitments. Supports city, postal, country and origin-destination related lookups and validations.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ValidatePostalBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ValidatePostalUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ValidatePostalForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ValidatePostalNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ValidatePostalInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ValidatePostalServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\CountryV1PostalValidatePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function validatePostal($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\ValidatePostal($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint provides the ability to retrieve rate quotes and optionalll transit information. The rate is calculated based on the origin and destination of the shipment. Additional information such as carrier code, service type, or service option can be used to filter the results. If carrier code is provided, the response includes the rate quotes for the specific transportation carrier. This endpoint provides the rates for FedEx Ground and FedEx Express and does not offer rates for FedEx Freight.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RateAndTransitTimesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RateAndTransitTimesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RateAndTransitTimesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RateAndTransitTimesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RateAndTransitTimesInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RateAndTransitTimesServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function rateAndTransitTimes($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\RateAndTransitTimes($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint gives the estimated transit times for a particular shipment.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. It also helps you to track the transaction with APIF.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveServicesAndTransitTimesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveServicesAndTransitTimesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveServicesAndTransitTimesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveServicesAndTransitTimesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\RetrieveServicesAndTransitTimesInternalServerErrorException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveServicesAndTransitTimes($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\RetrieveServicesAndTransitTimes($requestBody, $headerParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetPackageAndServiceOptionsBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetPackageAndServiceOptionsUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetPackageAndServiceOptionsForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetPackageAndServiceOptionsNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetPackageAndServiceOptionsInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetPackageAndServiceOptionsServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPackageAndServiceOptions($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\GetPackageAndServiceOptions($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this endpoint to request list of all available FedEx services, shipment special, service options along with delivery signature options and return shipment types that are available between an origin and destination. You can filter the results using FedEx carrier code(s) and/or service type(s) for specific services.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetSpecialServiceOptionsBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetSpecialServiceOptionsUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetSpecialServiceOptionsForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetSpecialServiceOptionsNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetSpecialServiceOptionsInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetSpecialServiceOptionsServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getSpecialServiceOptions($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\GetSpecialServiceOptions($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint helps you to create shipment requests therebyy validating all the shippingg input information and either generates the labels (if the responses is synchronous) or a job ID if transaction is processed using asynchronous method.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateShipmentInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateShipmentServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function createShipment($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\CreateShipment($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this endpoint to cancel FedEx Express and Ground shipments that have not already been tendered to FedEx. This request will cancel all packages within the shipment.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelShipmentInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelShipmentServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsCancelPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function cancelShipment($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\CancelShipment($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint helps you to process confirmed shipments asynchronously (above 40 packages) and produce results based on job id.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This transaction Id helps the customers to track the transaction with APIF.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetConfirmedShipmentAsyncResultsBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetConfirmedShipmentAsyncResultsUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetConfirmedShipmentAsyncResultsForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetConfirmedShipmentAsyncResultsNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetConfirmedShipmentAsyncResultsInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\GetConfirmedShipmentAsyncResultsServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getConfirmedShipmentAsyncResults($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\GetConfirmedShipmentAsyncResults($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this endpoint to verify the accuracy of a shipment request prior to actually submitting shipment request. This allow businesses that receive shipping orders from end-user/customers to verify the shipment information prior to submitting a create shipment request to FedEx and printing a label. If for any reason the information needs to be edited or changed, it can be done while the end-user is still available to confirm the changes.<br><br>Note:<ul><li>This is shipment level validation hence supports validation for single piece shipment only.</li><li>Shipment validation is supported for all Express and Ground - Domestic as well as international shipments with all applicable special services. </li><li>Shipment validation is supported for SmartPost and not for Freight LTL shipments.</li></ul><br><br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ShipmentPackageValidateBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ShipmentPackageValidateUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ShipmentPackageValidateForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ShipmentPackageValidateNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ShipmentPackageValidateInternalServerErrorException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function shipmentPackageValidate($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\ShipmentPackageValidate($requestBody, $headerParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateTagBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateTagUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateTagForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateTagNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateTagInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CreateTagServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function createTag($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\CreateTag($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint cancels a FedEx Return Tag and the associated pickup for FedEx Express and FedEx Ground shipments if the shipment has not yet been picked up by the courier.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param string $shipmentid 
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelTagBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelTagUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelTagForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelTagNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelTagInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\CancelTagServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function cancelTag(string $shipmentid, $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\CancelTag($shipmentid, $requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint returns tracking information for multiplee piece shipments, Group MPS, or an outbounddd shipment which is linked to a return shipment.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackMultiplePieceShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackMultiplePieceShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackMultiplePieceShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackMultiplePieceShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackMultiplePieceShipmentInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackMultiplePieceShipmentServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function trackMultiplePieceShipment($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\TrackMultiplePieceShipment($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint helps you setup up, customize the tracking event notifications to be received for a shipment.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackSendNotificationBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackSendNotificationUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackSendNotificationForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackSendNotificationNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackSendNotificationInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackSendNotificationServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function trackSendNotification($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\TrackSendNotification($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint returns tracking information based on alternate references other than Tracking Number such as Customer reference numbers, etc.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackByReferencesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackByReferencesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackByReferencesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackByReferencesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackByReferencesInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackByReferencesServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function trackByReferences($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\TrackByReferences($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this endpoint to return tracking information based on a Tracking Control Number.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\F1f9080e8452d9ac903f562a2d2626d0BadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\F1f9080e8452d9ac903f562a2d2626d0UnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\F1f9080e8452d9ac903f562a2d2626d0ForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\F1f9080e8452d9ac903f562a2d2626d0NotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\F1f9080e8452d9ac903f562a2d2626d0InternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\F1f9080e8452d9ac903f562a2d2626d0ServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\TrackV1TcnPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function f1f9080e8452d9ac903f562a2d2626d0($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\F1f9080e8452d9ac903f562a2d2626d0($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint helps you to request a letter that includes the recipient's signature as a proof of delivery.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackingDocumentsBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackingDocumentsUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackingDocumentsForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackingDocumentsNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackingDocumentsInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackingDocumentsServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function trackingDocuments($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\TrackingDocuments($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint provides customers package tracking information based on a tracking number for various shipping services.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $x-customer-transaction-id This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.
     *     @var string $x-locale This indicates the combination of language code and country code.  <a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *     @var string $authorization This indicates the authorization token for the input request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackByTrackingNumberBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackByTrackingNumberUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackByTrackingNumberForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackByTrackingNumberNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackByTrackingNumberInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\TrackByTrackingNumberServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function trackByTrackingNumber($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\TrackByTrackingNumber($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this endpoint to upload the trade documents electronically before (pre-shipment) and after (post-shipment) the shipment is created.<br><i>Note&#58; FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param null|mixed $requestBody 
     * @param array $headerParameters {
     *     @var string $Content-Type Indicates the type of content <br> Example: "multipart/form-data"
     *     @var string $Authorization Indicates the JWE token to be used for authorizing the client request. <br> Example: "Bearer ****"
     *     @var string $x-customer-transaction-id This is the customer transaction identifier.<br>Example: 771407-1
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\UploadETDFilesServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function uploadETDFiles($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\UploadETDFiles($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this endpoint to upload customized Company Letterhead/Logo and Digital signature images which can be used in the FedEx generated paperwork or reports.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.<i>
     *
     * @param null|\AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Specifies the authorization token.<br> Example: Bearer XXX
     *     @var string $x-customer-transaction-id Identifies the transaction ID of the request.<br> Example: "771407-1"
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ImageUploadServiceInfoBadRequestException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ImageUploadServiceInfoUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ImageUploadServiceInfoForbiddenException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ImageUploadServiceInfoNotFoundException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ImageUploadServiceInfoInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Api\Exception\ImageUploadServiceInfoServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function imageUploadServiceInfo(?\AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostBody $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Api\Endpoint\ImageUploadServiceInfo($requestBody, $headerParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://apis-sandbox.fedex.com');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \AntibodiesOnline\FedEx\Api\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
<?php

namespace AntibodiesOnline\FedEx;

class Client extends \AntibodiesOnline\FedEx\Runtime\Client\Client
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
     * @throws \AntibodiesOnline\FedEx\Exception\ValidateAddressBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\ValidateAddressUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\ValidateAddressForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\ValidateAddressNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\ValidateAddressInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\ValidateAddressServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\AddressV1AddressesResolvePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function validateAddress($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\ValidateAddress($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this endpoint to request the OAuth token (bearer token) to authorize your application to access FedEx resources. You can pass this bearer token in your subsequent individual FedEx API endpoint requests.<br/><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param \AntibodiesOnline\FedEx\Model\OauthTokenPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $content-type This is used to indicate the media type of the resource. The media type is a string sent along with the file indicating format of the file.<br> Example: application/x-www-form-urlencoded
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Exception\APIAuthorizationUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\APIAuthorizationInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\APIAuthorizationServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\OauthTokenPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function aPIAuthorization(\AntibodiesOnline\FedEx\Model\OauthTokenPostBody $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\APIAuthorization($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\PerformEndOfDayCloseBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\PerformEndOfDayCloseUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\PerformEndOfDayCloseForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\PerformEndOfDayCloseNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\PerformEndOfDayCloseInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\PerformEndOfDayCloseServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1EndofdayPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function performEndOfDayClose($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\PerformEndOfDayClose($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\GroundPerformEndOfDayCloseServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1EndofdayPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function groundPerformEndOfDayClose($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\GroundPerformEndOfDayClose($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\ShipmentRegulatoryDetailsBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\ShipmentRegulatoryDetailsUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\ShipmentRegulatoryDetailsNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\ShipmentRegulatoryDetailsUnprocessableEntityException
     * @throws \AntibodiesOnline\FedEx\Exception\ShipmentRegulatoryDetailsInternalServerErrorException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function shipmentRegulatoryDetails($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\ShipmentRegulatoryDetails($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\FindLocationBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\FindLocationUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\FindLocationForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\FindLocationNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\FindLocationInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\FindLocationServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\LocationV1LocationsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function findLocation($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\FindLocation($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\FreightRateQuoteBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\FreightRateQuoteUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\FreightRateQuoteForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\FreightRateQuoteNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\FreightRateQuoteInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\FreightRateQuoteServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\RateV1FreightRatesQuotesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function freightRateQuote($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\FreightRateQuote($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\FreightShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\FreightShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\FreightShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\FreightShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\FreightShipmentInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\FreightShipmentServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1FreightShipmentsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function freightShipment($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\FreightShipment($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\CheckFreightPickupAvailabilityBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\CheckFreightPickupAvailabilityUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\CheckFreightPickupAvailabilityForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\CheckFreightPickupAvailabilityNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\CheckFreightPickupAvailabilityInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\CheckFreightPickupAvailabilityServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsAvailabilitiesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function checkFreightPickupAvailability($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\CheckFreightPickupAvailability($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\CreateFreightPickupBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateFreightPickupUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateFreightPickupForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateFreightPickupNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateFreightPickupInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateFreightPickupServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function createFreightPickup($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\CreateFreightPickup($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\CancelFreightPickupBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelFreightPickupUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelFreightPickupForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelFreightPickupNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelFreightPickupInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelFreightPickupServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsCancelPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function cancelFreightPickup($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\CancelFreightPickup($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\CreateOpenShipmenttBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateOpenShipmenttUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateOpenShipmenttForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateOpenShipmenttNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateOpenShipmenttInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateOpenShipmenttServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsCreatePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function createOpenShipmentt($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\CreateOpenShipmentt($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\ConfirmOpenShipmentServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function confirmOpenShipment($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\ConfirmOpenShipment($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\ModifyOpenShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\ModifyOpenShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\ModifyOpenShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\ModifyOpenShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\ModifyOpenShipmentInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\ModifyOpenShipmentServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function modifyOpenShipment($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\ModifyOpenShipment($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\AddOpenShipmentPackagesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\AddOpenShipmentPackagesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\AddOpenShipmentPackagesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\AddOpenShipmentPackagesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\AddOpenShipmentPackagesInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\AddOpenShipmentPackagesServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function addOpenShipmentPackages($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\AddOpenShipmentPackages($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\ModifyOpenShipmentPackagesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\ModifyOpenShipmentPackagesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\ModifyOpenShipmentPackagesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\ModifyOpenShipmentPackagesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\ModifyOpenShipmentPackagesInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\ModifyOpenShipmentPackagesServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function modifyOpenShipmentPackages($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\ModifyOpenShipmentPackages($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\DeleteOpenShipmentPackagesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\DeleteOpenShipmentPackagesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\DeleteOpenShipmentPackagesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\DeleteOpenShipmentPackagesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\DeleteOpenShipmentPackagesInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\DeleteOpenShipmentPackagesServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesDeletePutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOpenShipmentPackages($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\DeleteOpenShipmentPackages($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\RetrieveOpenShipmentPackagesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\RetrieveOpenShipmentPackagesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\RetrieveOpenShipmentPackagesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\RetrieveOpenShipmentPackagesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\RetrieveOpenShipmentPackagesInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\RetrieveOpenShipmentPackagesServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveOpenShipmentPackages($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\RetrieveOpenShipmentPackages($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\DeleteOpenShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\DeleteOpenShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\DeleteOpenShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\DeleteOpenShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\DeleteOpenShipmentInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\DeleteOpenShipmentServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsDeletePutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOpenShipment($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\DeleteOpenShipment($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\RetrieveOpenShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\RetrieveOpenShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\RetrieveOpenShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\RetrieveOpenShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\RetrieveOpenShipmentInternalServerErrorException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveOpenShipment($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\RetrieveOpenShipment($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\GetOpenShipmentResultsBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\GetOpenShipmentResultsUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\GetOpenShipmentResultsForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\GetOpenShipmentResultsNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\GetOpenShipmentResultsInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\GetOpenShipmentResultsServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsResultsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenShipmentResults($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\GetOpenShipmentResults($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\CreatePickupBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\CreatePickupUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\CreatePickupForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\CreatePickupNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\CreatePickupInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\CreatePickupServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\PickupV1PickupsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function createPickup($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\CreatePickup($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\CheckPickupAvailabilityBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\CheckPickupAvailabilityUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\CheckPickupAvailabilityForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\CheckPickupAvailabilityNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\CheckPickupAvailabilityInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\CheckPickupAvailabilityServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\PickupV1PickupsAvailabilitiesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function checkPickupAvailability($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\CheckPickupAvailability($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\CancelPickupBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelPickupUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelPickupForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelPickupNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelPickupInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelPickupServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\PickupV1PickupsCancelPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function cancelPickup($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\CancelPickup($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\ValidatePostalBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\ValidatePostalUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\ValidatePostalForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\ValidatePostalNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\ValidatePostalInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\ValidatePostalServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\CountryV1PostalValidatePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function validatePostal($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\ValidatePostal($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\RateAndTransitTimesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\RateAndTransitTimesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\RateAndTransitTimesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\RateAndTransitTimesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\RateAndTransitTimesInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\RateAndTransitTimesServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\RateV1RatesQuotesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function rateAndTransitTimes($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\RateAndTransitTimes($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\RetrieveServicesAndTransitTimesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\RetrieveServicesAndTransitTimesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\RetrieveServicesAndTransitTimesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\RetrieveServicesAndTransitTimesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\RetrieveServicesAndTransitTimesInternalServerErrorException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\AvailabilityV1TransittimesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveServicesAndTransitTimes($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\RetrieveServicesAndTransitTimes($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\GetPackageAndServiceOptionsServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\AvailabilityV1PackageandserviceoptionsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPackageAndServiceOptions($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\GetPackageAndServiceOptions($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\GetSpecialServiceOptionsBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\GetSpecialServiceOptionsUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\GetSpecialServiceOptionsForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\GetSpecialServiceOptionsNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\GetSpecialServiceOptionsInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\GetSpecialServiceOptionsServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\AvailabilityV1SpecialserviceoptionsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getSpecialServiceOptions($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\GetSpecialServiceOptions($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\CreateShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateShipmentInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateShipmentServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function createShipment($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\CreateShipment($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\CancelShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelShipmentInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelShipmentServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsCancelPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function cancelShipment($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\CancelShipment($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\GetConfirmedShipmentAsyncResultsBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\GetConfirmedShipmentAsyncResultsUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\GetConfirmedShipmentAsyncResultsForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\GetConfirmedShipmentAsyncResultsNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\GetConfirmedShipmentAsyncResultsInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\GetConfirmedShipmentAsyncResultsServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsResultsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getConfirmedShipmentAsyncResults($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\GetConfirmedShipmentAsyncResults($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\ShipmentPackageValidateBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\ShipmentPackageValidateUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\ShipmentPackageValidateForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\ShipmentPackageValidateNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\ShipmentPackageValidateInternalServerErrorException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsPackagesValidatePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function shipmentPackageValidate($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\ShipmentPackageValidate($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\CreateTagBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateTagUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateTagForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateTagNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateTagInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\CreateTagServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsTagPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function createTag($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\CreateTag($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\CancelTagBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelTagUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelTagForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelTagNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelTagInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\CancelTagServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function cancelTag(string $shipmentid, $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\CancelTag($shipmentid, $requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\TrackMultiplePieceShipmentBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackMultiplePieceShipmentUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackMultiplePieceShipmentForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackMultiplePieceShipmentNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackMultiplePieceShipmentInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackMultiplePieceShipmentServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\TrackV1AssociatedshipmentsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function trackMultiplePieceShipment($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\TrackMultiplePieceShipment($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\TrackSendNotificationBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackSendNotificationUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackSendNotificationForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackSendNotificationNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackSendNotificationInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackSendNotificationServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\TrackV1NotificationsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function trackSendNotification($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\TrackSendNotification($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\TrackByReferencesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackByReferencesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackByReferencesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackByReferencesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackByReferencesInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackByReferencesServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\TrackV1ReferencenumbersPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function trackByReferences($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\TrackByReferences($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\F1f9080e8452d9ac903f562a2d2626d0BadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\F1f9080e8452d9ac903f562a2d2626d0UnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\F1f9080e8452d9ac903f562a2d2626d0ForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\F1f9080e8452d9ac903f562a2d2626d0NotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\F1f9080e8452d9ac903f562a2d2626d0InternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\F1f9080e8452d9ac903f562a2d2626d0ServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\TrackV1TcnPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function f1f9080e8452d9ac903f562a2d2626d0($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\F1f9080e8452d9ac903f562a2d2626d0($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\TrackingDocumentsBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackingDocumentsUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackingDocumentsForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackingDocumentsNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackingDocumentsInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackingDocumentsServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\TrackV1TrackingdocumentsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function trackingDocuments($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\TrackingDocuments($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\TrackByTrackingNumberBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackByTrackingNumberUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackByTrackingNumberForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackByTrackingNumberNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackByTrackingNumberInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\TrackByTrackingNumberServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\TrackV1TrackingnumbersPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function trackByTrackingNumber($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\TrackByTrackingNumber($requestBody, $headerParameters), $fetch);
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
     * @throws \AntibodiesOnline\FedEx\Exception\UploadETDFilesBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\UploadETDFilesUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\UploadETDFilesForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\UploadETDFilesNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\UploadETDFilesInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\UploadETDFilesServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\DocumentsV1EtdsUploadPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function uploadETDFiles($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\UploadETDFiles($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this endpoint to upload customized Company Letterhead/Logo and Digital signature images which can be used in the FedEx generated paperwork or reports.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.<i>
     *
     * @param null|\AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Specifies the authorization token.<br> Example: Bearer XXX
     *     @var string $x-customer-transaction-id Identifies the transaction ID of the request.<br> Example: "771407-1"
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoBadRequestException
     * @throws \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoUnauthorizedException
     * @throws \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoForbiddenException
     * @throws \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoNotFoundException
     * @throws \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoInternalServerErrorException
     * @throws \AntibodiesOnline\FedEx\Exception\ImageUploadServiceInfoServiceUnavailableException
     *
     * @return null|\AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function imageUploadServiceInfo(?\AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostBody $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\FedEx\Endpoint\ImageUploadServiceInfo($requestBody, $headerParameters), $fetch);
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \AntibodiesOnline\FedEx\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use AntibodiesOnline\FedEx\Api\Runtime\Normalizer\CheckArray;
use AntibodiesOnline\FedEx\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailOperationalDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailOperationalDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailOperationalDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailOperationalDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('originServiceArea', $data)) {
                $object->setOriginServiceArea($data['originServiceArea']);
                unset($data['originServiceArea']);
            }
            if (\array_key_exists('serviceCode', $data)) {
                $object->setServiceCode($data['serviceCode']);
                unset($data['serviceCode']);
            }
            if (\array_key_exists('airportId', $data)) {
                $object->setAirportId($data['airportId']);
                unset($data['airportId']);
            }
            if (\array_key_exists('postalCode', $data)) {
                $object->setPostalCode($data['postalCode']);
                unset($data['postalCode']);
            }
            if (\array_key_exists('scac', $data)) {
                $object->setScac($data['scac']);
                unset($data['scac']);
            }
            if (\array_key_exists('deliveryDay', $data)) {
                $object->setDeliveryDay($data['deliveryDay']);
                unset($data['deliveryDay']);
            }
            if (\array_key_exists('originLocationId', $data)) {
                $object->setOriginLocationId($data['originLocationId']);
                unset($data['originLocationId']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('astraDescription', $data)) {
                $object->setAstraDescription($data['astraDescription']);
                unset($data['astraDescription']);
            }
            if (\array_key_exists('originLocationNumber', $data)) {
                $object->setOriginLocationNumber($data['originLocationNumber']);
                unset($data['originLocationNumber']);
            }
            if (\array_key_exists('deliveryDate', $data)) {
                $object->setDeliveryDate($data['deliveryDate']);
                unset($data['deliveryDate']);
            }
            if (\array_key_exists('deliveryEligibilities', $data)) {
                $values = [];
                foreach ($data['deliveryEligibilities'] as $value) {
                    $values[] = $value;
                }
                $object->setDeliveryEligibilities($values);
                unset($data['deliveryEligibilities']);
            }
            if (\array_key_exists('ineligibleForMoneyBackGuarantee', $data)) {
                $object->setIneligibleForMoneyBackGuarantee($data['ineligibleForMoneyBackGuarantee']);
                unset($data['ineligibleForMoneyBackGuarantee']);
            }
            if (\array_key_exists('maximumTransitTime', $data)) {
                $object->setMaximumTransitTime($data['maximumTransitTime']);
                unset($data['maximumTransitTime']);
            }
            if (\array_key_exists('destinationLocationStateOrProvinceCode', $data)) {
                $object->setDestinationLocationStateOrProvinceCode($data['destinationLocationStateOrProvinceCode']);
                unset($data['destinationLocationStateOrProvinceCode']);
            }
            if (\array_key_exists('astraPlannedServiceLevel', $data)) {
                $object->setAstraPlannedServiceLevel($data['astraPlannedServiceLevel']);
                unset($data['astraPlannedServiceLevel']);
            }
            if (\array_key_exists('destinationLocationId', $data)) {
                $object->setDestinationLocationId($data['destinationLocationId']);
                unset($data['destinationLocationId']);
            }
            if (\array_key_exists('transitTime', $data)) {
                $object->setTransitTime($data['transitTime']);
                unset($data['transitTime']);
            }
            if (\array_key_exists('stateOrProvinceCode', $data)) {
                $object->setStateOrProvinceCode($data['stateOrProvinceCode']);
                unset($data['stateOrProvinceCode']);
            }
            if (\array_key_exists('destinationLocationNumber', $data)) {
                $object->setDestinationLocationNumber($data['destinationLocationNumber']);
                unset($data['destinationLocationNumber']);
            }
            if (\array_key_exists('packagingCode', $data)) {
                $object->setPackagingCode($data['packagingCode']);
                unset($data['packagingCode']);
            }
            if (\array_key_exists('commitDate', $data)) {
                $object->setCommitDate($data['commitDate']);
                unset($data['commitDate']);
            }
            if (\array_key_exists('publishedDeliveryTime', $data)) {
                $object->setPublishedDeliveryTime($data['publishedDeliveryTime']);
                unset($data['publishedDeliveryTime']);
            }
            if (\array_key_exists('ursaSuffixCode', $data)) {
                $object->setUrsaSuffixCode($data['ursaSuffixCode']);
                unset($data['ursaSuffixCode']);
            }
            if (\array_key_exists('ursaPrefixCode', $data)) {
                $object->setUrsaPrefixCode($data['ursaPrefixCode']);
                unset($data['ursaPrefixCode']);
            }
            if (\array_key_exists('destinationServiceArea', $data)) {
                $object->setDestinationServiceArea($data['destinationServiceArea']);
                unset($data['destinationServiceArea']);
            }
            if (\array_key_exists('commitDay', $data)) {
                $object->setCommitDay($data['commitDay']);
                unset($data['commitDay']);
            }
            if (\array_key_exists('customTransitTime', $data)) {
                $object->setCustomTransitTime($data['customTransitTime']);
                unset($data['customTransitTime']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('originServiceArea') && null !== $object->getOriginServiceArea()) {
                $data['originServiceArea'] = $object->getOriginServiceArea();
            }
            if ($object->isInitialized('serviceCode') && null !== $object->getServiceCode()) {
                $data['serviceCode'] = $object->getServiceCode();
            }
            if ($object->isInitialized('airportId') && null !== $object->getAirportId()) {
                $data['airportId'] = $object->getAirportId();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['postalCode'] = $object->getPostalCode();
            }
            if ($object->isInitialized('scac') && null !== $object->getScac()) {
                $data['scac'] = $object->getScac();
            }
            if ($object->isInitialized('deliveryDay') && null !== $object->getDeliveryDay()) {
                $data['deliveryDay'] = $object->getDeliveryDay();
            }
            if ($object->isInitialized('originLocationId') && null !== $object->getOriginLocationId()) {
                $data['originLocationId'] = $object->getOriginLocationId();
            }
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['countryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('astraDescription') && null !== $object->getAstraDescription()) {
                $data['astraDescription'] = $object->getAstraDescription();
            }
            if ($object->isInitialized('originLocationNumber') && null !== $object->getOriginLocationNumber()) {
                $data['originLocationNumber'] = $object->getOriginLocationNumber();
            }
            if ($object->isInitialized('deliveryDate') && null !== $object->getDeliveryDate()) {
                $data['deliveryDate'] = $object->getDeliveryDate();
            }
            if ($object->isInitialized('deliveryEligibilities') && null !== $object->getDeliveryEligibilities()) {
                $values = [];
                foreach ($object->getDeliveryEligibilities() as $value) {
                    $values[] = $value;
                }
                $data['deliveryEligibilities'] = $values;
            }
            if ($object->isInitialized('ineligibleForMoneyBackGuarantee') && null !== $object->getIneligibleForMoneyBackGuarantee()) {
                $data['ineligibleForMoneyBackGuarantee'] = $object->getIneligibleForMoneyBackGuarantee();
            }
            if ($object->isInitialized('maximumTransitTime') && null !== $object->getMaximumTransitTime()) {
                $data['maximumTransitTime'] = $object->getMaximumTransitTime();
            }
            if ($object->isInitialized('destinationLocationStateOrProvinceCode') && null !== $object->getDestinationLocationStateOrProvinceCode()) {
                $data['destinationLocationStateOrProvinceCode'] = $object->getDestinationLocationStateOrProvinceCode();
            }
            if ($object->isInitialized('astraPlannedServiceLevel') && null !== $object->getAstraPlannedServiceLevel()) {
                $data['astraPlannedServiceLevel'] = $object->getAstraPlannedServiceLevel();
            }
            if ($object->isInitialized('destinationLocationId') && null !== $object->getDestinationLocationId()) {
                $data['destinationLocationId'] = $object->getDestinationLocationId();
            }
            if ($object->isInitialized('transitTime') && null !== $object->getTransitTime()) {
                $data['transitTime'] = $object->getTransitTime();
            }
            if ($object->isInitialized('stateOrProvinceCode') && null !== $object->getStateOrProvinceCode()) {
                $data['stateOrProvinceCode'] = $object->getStateOrProvinceCode();
            }
            if ($object->isInitialized('destinationLocationNumber') && null !== $object->getDestinationLocationNumber()) {
                $data['destinationLocationNumber'] = $object->getDestinationLocationNumber();
            }
            if ($object->isInitialized('packagingCode') && null !== $object->getPackagingCode()) {
                $data['packagingCode'] = $object->getPackagingCode();
            }
            if ($object->isInitialized('commitDate') && null !== $object->getCommitDate()) {
                $data['commitDate'] = $object->getCommitDate();
            }
            if ($object->isInitialized('publishedDeliveryTime') && null !== $object->getPublishedDeliveryTime()) {
                $data['publishedDeliveryTime'] = $object->getPublishedDeliveryTime();
            }
            if ($object->isInitialized('ursaSuffixCode') && null !== $object->getUrsaSuffixCode()) {
                $data['ursaSuffixCode'] = $object->getUrsaSuffixCode();
            }
            if ($object->isInitialized('ursaPrefixCode') && null !== $object->getUrsaPrefixCode()) {
                $data['ursaPrefixCode'] = $object->getUrsaPrefixCode();
            }
            if ($object->isInitialized('destinationServiceArea') && null !== $object->getDestinationServiceArea()) {
                $data['destinationServiceArea'] = $object->getDestinationServiceArea();
            }
            if ($object->isInitialized('commitDay') && null !== $object->getCommitDay()) {
                $data['commitDay'] = $object->getCommitDay();
            }
            if ($object->isInitialized('customTransitTime') && null !== $object->getCustomTransitTime()) {
                $data['customTransitTime'] = $object->getCustomTransitTime();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailOperationalDetail' => false];
        }
    }
} else {
    class ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailOperationalDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailOperationalDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailOperationalDetail';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailOperationalDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('originServiceArea', $data)) {
                $object->setOriginServiceArea($data['originServiceArea']);
                unset($data['originServiceArea']);
            }
            if (\array_key_exists('serviceCode', $data)) {
                $object->setServiceCode($data['serviceCode']);
                unset($data['serviceCode']);
            }
            if (\array_key_exists('airportId', $data)) {
                $object->setAirportId($data['airportId']);
                unset($data['airportId']);
            }
            if (\array_key_exists('postalCode', $data)) {
                $object->setPostalCode($data['postalCode']);
                unset($data['postalCode']);
            }
            if (\array_key_exists('scac', $data)) {
                $object->setScac($data['scac']);
                unset($data['scac']);
            }
            if (\array_key_exists('deliveryDay', $data)) {
                $object->setDeliveryDay($data['deliveryDay']);
                unset($data['deliveryDay']);
            }
            if (\array_key_exists('originLocationId', $data)) {
                $object->setOriginLocationId($data['originLocationId']);
                unset($data['originLocationId']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('astraDescription', $data)) {
                $object->setAstraDescription($data['astraDescription']);
                unset($data['astraDescription']);
            }
            if (\array_key_exists('originLocationNumber', $data)) {
                $object->setOriginLocationNumber($data['originLocationNumber']);
                unset($data['originLocationNumber']);
            }
            if (\array_key_exists('deliveryDate', $data)) {
                $object->setDeliveryDate($data['deliveryDate']);
                unset($data['deliveryDate']);
            }
            if (\array_key_exists('deliveryEligibilities', $data)) {
                $values = [];
                foreach ($data['deliveryEligibilities'] as $value) {
                    $values[] = $value;
                }
                $object->setDeliveryEligibilities($values);
                unset($data['deliveryEligibilities']);
            }
            if (\array_key_exists('ineligibleForMoneyBackGuarantee', $data)) {
                $object->setIneligibleForMoneyBackGuarantee($data['ineligibleForMoneyBackGuarantee']);
                unset($data['ineligibleForMoneyBackGuarantee']);
            }
            if (\array_key_exists('maximumTransitTime', $data)) {
                $object->setMaximumTransitTime($data['maximumTransitTime']);
                unset($data['maximumTransitTime']);
            }
            if (\array_key_exists('destinationLocationStateOrProvinceCode', $data)) {
                $object->setDestinationLocationStateOrProvinceCode($data['destinationLocationStateOrProvinceCode']);
                unset($data['destinationLocationStateOrProvinceCode']);
            }
            if (\array_key_exists('astraPlannedServiceLevel', $data)) {
                $object->setAstraPlannedServiceLevel($data['astraPlannedServiceLevel']);
                unset($data['astraPlannedServiceLevel']);
            }
            if (\array_key_exists('destinationLocationId', $data)) {
                $object->setDestinationLocationId($data['destinationLocationId']);
                unset($data['destinationLocationId']);
            }
            if (\array_key_exists('transitTime', $data)) {
                $object->setTransitTime($data['transitTime']);
                unset($data['transitTime']);
            }
            if (\array_key_exists('stateOrProvinceCode', $data)) {
                $object->setStateOrProvinceCode($data['stateOrProvinceCode']);
                unset($data['stateOrProvinceCode']);
            }
            if (\array_key_exists('destinationLocationNumber', $data)) {
                $object->setDestinationLocationNumber($data['destinationLocationNumber']);
                unset($data['destinationLocationNumber']);
            }
            if (\array_key_exists('packagingCode', $data)) {
                $object->setPackagingCode($data['packagingCode']);
                unset($data['packagingCode']);
            }
            if (\array_key_exists('commitDate', $data)) {
                $object->setCommitDate($data['commitDate']);
                unset($data['commitDate']);
            }
            if (\array_key_exists('publishedDeliveryTime', $data)) {
                $object->setPublishedDeliveryTime($data['publishedDeliveryTime']);
                unset($data['publishedDeliveryTime']);
            }
            if (\array_key_exists('ursaSuffixCode', $data)) {
                $object->setUrsaSuffixCode($data['ursaSuffixCode']);
                unset($data['ursaSuffixCode']);
            }
            if (\array_key_exists('ursaPrefixCode', $data)) {
                $object->setUrsaPrefixCode($data['ursaPrefixCode']);
                unset($data['ursaPrefixCode']);
            }
            if (\array_key_exists('destinationServiceArea', $data)) {
                $object->setDestinationServiceArea($data['destinationServiceArea']);
                unset($data['destinationServiceArea']);
            }
            if (\array_key_exists('commitDay', $data)) {
                $object->setCommitDay($data['commitDay']);
                unset($data['commitDay']);
            }
            if (\array_key_exists('customTransitTime', $data)) {
                $object->setCustomTransitTime($data['customTransitTime']);
                unset($data['customTransitTime']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('originServiceArea') && null !== $object->getOriginServiceArea()) {
                $data['originServiceArea'] = $object->getOriginServiceArea();
            }
            if ($object->isInitialized('serviceCode') && null !== $object->getServiceCode()) {
                $data['serviceCode'] = $object->getServiceCode();
            }
            if ($object->isInitialized('airportId') && null !== $object->getAirportId()) {
                $data['airportId'] = $object->getAirportId();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['postalCode'] = $object->getPostalCode();
            }
            if ($object->isInitialized('scac') && null !== $object->getScac()) {
                $data['scac'] = $object->getScac();
            }
            if ($object->isInitialized('deliveryDay') && null !== $object->getDeliveryDay()) {
                $data['deliveryDay'] = $object->getDeliveryDay();
            }
            if ($object->isInitialized('originLocationId') && null !== $object->getOriginLocationId()) {
                $data['originLocationId'] = $object->getOriginLocationId();
            }
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['countryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('astraDescription') && null !== $object->getAstraDescription()) {
                $data['astraDescription'] = $object->getAstraDescription();
            }
            if ($object->isInitialized('originLocationNumber') && null !== $object->getOriginLocationNumber()) {
                $data['originLocationNumber'] = $object->getOriginLocationNumber();
            }
            if ($object->isInitialized('deliveryDate') && null !== $object->getDeliveryDate()) {
                $data['deliveryDate'] = $object->getDeliveryDate();
            }
            if ($object->isInitialized('deliveryEligibilities') && null !== $object->getDeliveryEligibilities()) {
                $values = [];
                foreach ($object->getDeliveryEligibilities() as $value) {
                    $values[] = $value;
                }
                $data['deliveryEligibilities'] = $values;
            }
            if ($object->isInitialized('ineligibleForMoneyBackGuarantee') && null !== $object->getIneligibleForMoneyBackGuarantee()) {
                $data['ineligibleForMoneyBackGuarantee'] = $object->getIneligibleForMoneyBackGuarantee();
            }
            if ($object->isInitialized('maximumTransitTime') && null !== $object->getMaximumTransitTime()) {
                $data['maximumTransitTime'] = $object->getMaximumTransitTime();
            }
            if ($object->isInitialized('destinationLocationStateOrProvinceCode') && null !== $object->getDestinationLocationStateOrProvinceCode()) {
                $data['destinationLocationStateOrProvinceCode'] = $object->getDestinationLocationStateOrProvinceCode();
            }
            if ($object->isInitialized('astraPlannedServiceLevel') && null !== $object->getAstraPlannedServiceLevel()) {
                $data['astraPlannedServiceLevel'] = $object->getAstraPlannedServiceLevel();
            }
            if ($object->isInitialized('destinationLocationId') && null !== $object->getDestinationLocationId()) {
                $data['destinationLocationId'] = $object->getDestinationLocationId();
            }
            if ($object->isInitialized('transitTime') && null !== $object->getTransitTime()) {
                $data['transitTime'] = $object->getTransitTime();
            }
            if ($object->isInitialized('stateOrProvinceCode') && null !== $object->getStateOrProvinceCode()) {
                $data['stateOrProvinceCode'] = $object->getStateOrProvinceCode();
            }
            if ($object->isInitialized('destinationLocationNumber') && null !== $object->getDestinationLocationNumber()) {
                $data['destinationLocationNumber'] = $object->getDestinationLocationNumber();
            }
            if ($object->isInitialized('packagingCode') && null !== $object->getPackagingCode()) {
                $data['packagingCode'] = $object->getPackagingCode();
            }
            if ($object->isInitialized('commitDate') && null !== $object->getCommitDate()) {
                $data['commitDate'] = $object->getCommitDate();
            }
            if ($object->isInitialized('publishedDeliveryTime') && null !== $object->getPublishedDeliveryTime()) {
                $data['publishedDeliveryTime'] = $object->getPublishedDeliveryTime();
            }
            if ($object->isInitialized('ursaSuffixCode') && null !== $object->getUrsaSuffixCode()) {
                $data['ursaSuffixCode'] = $object->getUrsaSuffixCode();
            }
            if ($object->isInitialized('ursaPrefixCode') && null !== $object->getUrsaPrefixCode()) {
                $data['ursaPrefixCode'] = $object->getUrsaPrefixCode();
            }
            if ($object->isInitialized('destinationServiceArea') && null !== $object->getDestinationServiceArea()) {
                $data['destinationServiceArea'] = $object->getDestinationServiceArea();
            }
            if ($object->isInitialized('commitDay') && null !== $object->getCommitDay()) {
                $data['commitDay'] = $object->getCommitDay();
            }
            if ($object->isInitialized('customTransitTime') && null !== $object->getCustomTransitTime()) {
                $data['customTransitTime'] = $object->getCustomTransitTime();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailOperationalDetail' => false];
        }
    }
}
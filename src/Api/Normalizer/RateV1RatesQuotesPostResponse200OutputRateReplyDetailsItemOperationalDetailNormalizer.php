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
    class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('originLocationIds', $data)) {
                $values = [];
                foreach ($data['originLocationIds'] as $value) {
                    $values[] = $value;
                }
                $object->setOriginLocationIds($values);
                unset($data['originLocationIds']);
            }
            if (\array_key_exists('commitDays', $data)) {
                $values_1 = [];
                foreach ($data['commitDays'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCommitDays($values_1);
                unset($data['commitDays']);
            }
            if (\array_key_exists('serviceCode', $data)) {
                $object->setServiceCode($data['serviceCode']);
                unset($data['serviceCode']);
            }
            if (\array_key_exists('airportId', $data)) {
                $object->setAirportId($data['airportId']);
                unset($data['airportId']);
            }
            if (\array_key_exists('scac', $data)) {
                $object->setScac($data['scac']);
                unset($data['scac']);
            }
            if (\array_key_exists('originServiceAreas', $data)) {
                $values_2 = [];
                foreach ($data['originServiceAreas'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setOriginServiceAreas($values_2);
                unset($data['originServiceAreas']);
            }
            if (\array_key_exists('deliveryDay', $data)) {
                $object->setDeliveryDay($data['deliveryDay']);
                unset($data['deliveryDay']);
            }
            if (\array_key_exists('originLocationNumbers', $data)) {
                $values_3 = [];
                foreach ($data['originLocationNumbers'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setOriginLocationNumbers($values_3);
                unset($data['originLocationNumbers']);
            }
            if (\array_key_exists('destinationPostalCode', $data)) {
                $object->setDestinationPostalCode($data['destinationPostalCode']);
                unset($data['destinationPostalCode']);
            }
            if (\array_key_exists('commitDate', $data)) {
                $object->setCommitDate($data['commitDate']);
                unset($data['commitDate']);
            }
            if (\array_key_exists('astraDescription', $data)) {
                $object->setAstraDescription($data['astraDescription']);
                unset($data['astraDescription']);
            }
            if (\array_key_exists('deliveryDate', $data)) {
                $object->setDeliveryDate($data['deliveryDate']);
                unset($data['deliveryDate']);
            }
            if (\array_key_exists('deliveryEligibilities', $data)) {
                $values_4 = [];
                foreach ($data['deliveryEligibilities'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setDeliveryEligibilities($values_4);
                unset($data['deliveryEligibilities']);
            }
            if (\array_key_exists('ineligibleForMoneyBackGuarantee', $data)) {
                $object->setIneligibleForMoneyBackGuarantee($data['ineligibleForMoneyBackGuarantee']);
                unset($data['ineligibleForMoneyBackGuarantee']);
            }
            if (\array_key_exists('MaximumTransitTime', $data)) {
                $object->setMaximumTransitTime($data['MaximumTransitTime']);
                unset($data['MaximumTransitTime']);
            }
            if (\array_key_exists('astraPlannedServiceLevel', $data)) {
                $object->setAstraPlannedServiceLevel($data['astraPlannedServiceLevel']);
                unset($data['astraPlannedServiceLevel']);
            }
            if (\array_key_exists('destinationLocationIds', $data)) {
                $values_5 = [];
                foreach ($data['destinationLocationIds'] as $value_5) {
                    $values_5[] = $value_5;
                }
                $object->setDestinationLocationIds($values_5);
                unset($data['destinationLocationIds']);
            }
            if (\array_key_exists('destinationLocationStateOrProvinceCodes', $data)) {
                $values_6 = [];
                foreach ($data['destinationLocationStateOrProvinceCodes'] as $value_6) {
                    $values_6[] = $value_6;
                }
                $object->setDestinationLocationStateOrProvinceCodes($values_6);
                unset($data['destinationLocationStateOrProvinceCodes']);
            }
            if (\array_key_exists('transitTime', $data)) {
                $object->setTransitTime($data['transitTime']);
                unset($data['transitTime']);
            }
            if (\array_key_exists('packagingCode', $data)) {
                $object->setPackagingCode($data['packagingCode']);
                unset($data['packagingCode']);
            }
            if (\array_key_exists('destinationLocationNumbers', $data)) {
                $values_7 = [];
                foreach ($data['destinationLocationNumbers'] as $value_7) {
                    $values_7[] = $value_7;
                }
                $object->setDestinationLocationNumbers($values_7);
                unset($data['destinationLocationNumbers']);
            }
            if (\array_key_exists('publishedDeliveryTime', $data)) {
                $object->setPublishedDeliveryTime($data['publishedDeliveryTime']);
                unset($data['publishedDeliveryTime']);
            }
            if (\array_key_exists('countryCodes', $data)) {
                $values_8 = [];
                foreach ($data['countryCodes'] as $value_8) {
                    $values_8[] = $value_8;
                }
                $object->setCountryCodes($values_8);
                unset($data['countryCodes']);
            }
            if (\array_key_exists('stateOrProvinceCodes', $data)) {
                $values_9 = [];
                foreach ($data['stateOrProvinceCodes'] as $value_9) {
                    $values_9[] = $value_9;
                }
                $object->setStateOrProvinceCodes($values_9);
                unset($data['stateOrProvinceCodes']);
            }
            if (\array_key_exists('ursaPrefixCode', $data)) {
                $object->setUrsaPrefixCode($data['ursaPrefixCode']);
                unset($data['ursaPrefixCode']);
            }
            if (\array_key_exists('ursaSuffixCode', $data)) {
                $object->setUrsaSuffixCode($data['ursaSuffixCode']);
                unset($data['ursaSuffixCode']);
            }
            if (\array_key_exists('destinationServiceAreas', $data)) {
                $values_10 = [];
                foreach ($data['destinationServiceAreas'] as $value_10) {
                    $values_10[] = $value_10;
                }
                $object->setDestinationServiceAreas($values_10);
                unset($data['destinationServiceAreas']);
            }
            if (\array_key_exists('originPostalCodes', $data)) {
                $values_11 = [];
                foreach ($data['originPostalCodes'] as $value_11) {
                    $values_11[] = $value_11;
                }
                $object->setOriginPostalCodes($values_11);
                unset($data['originPostalCodes']);
            }
            if (\array_key_exists('customTransitTime', $data)) {
                $object->setCustomTransitTime($data['customTransitTime']);
                unset($data['customTransitTime']);
            }
            foreach ($data as $key => $value_12) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_12;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('originLocationIds') && null !== $object->getOriginLocationIds()) {
                $values = [];
                foreach ($object->getOriginLocationIds() as $value) {
                    $values[] = $value;
                }
                $data['originLocationIds'] = $values;
            }
            if ($object->isInitialized('commitDays') && null !== $object->getCommitDays()) {
                $values_1 = [];
                foreach ($object->getCommitDays() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['commitDays'] = $values_1;
            }
            if ($object->isInitialized('serviceCode') && null !== $object->getServiceCode()) {
                $data['serviceCode'] = $object->getServiceCode();
            }
            if ($object->isInitialized('airportId') && null !== $object->getAirportId()) {
                $data['airportId'] = $object->getAirportId();
            }
            if ($object->isInitialized('scac') && null !== $object->getScac()) {
                $data['scac'] = $object->getScac();
            }
            if ($object->isInitialized('originServiceAreas') && null !== $object->getOriginServiceAreas()) {
                $values_2 = [];
                foreach ($object->getOriginServiceAreas() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['originServiceAreas'] = $values_2;
            }
            if ($object->isInitialized('deliveryDay') && null !== $object->getDeliveryDay()) {
                $data['deliveryDay'] = $object->getDeliveryDay();
            }
            if ($object->isInitialized('originLocationNumbers') && null !== $object->getOriginLocationNumbers()) {
                $values_3 = [];
                foreach ($object->getOriginLocationNumbers() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['originLocationNumbers'] = $values_3;
            }
            if ($object->isInitialized('destinationPostalCode') && null !== $object->getDestinationPostalCode()) {
                $data['destinationPostalCode'] = $object->getDestinationPostalCode();
            }
            if ($object->isInitialized('commitDate') && null !== $object->getCommitDate()) {
                $data['commitDate'] = $object->getCommitDate();
            }
            if ($object->isInitialized('astraDescription') && null !== $object->getAstraDescription()) {
                $data['astraDescription'] = $object->getAstraDescription();
            }
            if ($object->isInitialized('deliveryDate') && null !== $object->getDeliveryDate()) {
                $data['deliveryDate'] = $object->getDeliveryDate();
            }
            if ($object->isInitialized('deliveryEligibilities') && null !== $object->getDeliveryEligibilities()) {
                $values_4 = [];
                foreach ($object->getDeliveryEligibilities() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['deliveryEligibilities'] = $values_4;
            }
            if ($object->isInitialized('ineligibleForMoneyBackGuarantee') && null !== $object->getIneligibleForMoneyBackGuarantee()) {
                $data['ineligibleForMoneyBackGuarantee'] = $object->getIneligibleForMoneyBackGuarantee();
            }
            if ($object->isInitialized('maximumTransitTime') && null !== $object->getMaximumTransitTime()) {
                $data['MaximumTransitTime'] = $object->getMaximumTransitTime();
            }
            if ($object->isInitialized('astraPlannedServiceLevel') && null !== $object->getAstraPlannedServiceLevel()) {
                $data['astraPlannedServiceLevel'] = $object->getAstraPlannedServiceLevel();
            }
            if ($object->isInitialized('destinationLocationIds') && null !== $object->getDestinationLocationIds()) {
                $values_5 = [];
                foreach ($object->getDestinationLocationIds() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['destinationLocationIds'] = $values_5;
            }
            if ($object->isInitialized('destinationLocationStateOrProvinceCodes') && null !== $object->getDestinationLocationStateOrProvinceCodes()) {
                $values_6 = [];
                foreach ($object->getDestinationLocationStateOrProvinceCodes() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['destinationLocationStateOrProvinceCodes'] = $values_6;
            }
            if ($object->isInitialized('transitTime') && null !== $object->getTransitTime()) {
                $data['transitTime'] = $object->getTransitTime();
            }
            if ($object->isInitialized('packagingCode') && null !== $object->getPackagingCode()) {
                $data['packagingCode'] = $object->getPackagingCode();
            }
            if ($object->isInitialized('destinationLocationNumbers') && null !== $object->getDestinationLocationNumbers()) {
                $values_7 = [];
                foreach ($object->getDestinationLocationNumbers() as $value_7) {
                    $values_7[] = $value_7;
                }
                $data['destinationLocationNumbers'] = $values_7;
            }
            if ($object->isInitialized('publishedDeliveryTime') && null !== $object->getPublishedDeliveryTime()) {
                $data['publishedDeliveryTime'] = $object->getPublishedDeliveryTime();
            }
            if ($object->isInitialized('countryCodes') && null !== $object->getCountryCodes()) {
                $values_8 = [];
                foreach ($object->getCountryCodes() as $value_8) {
                    $values_8[] = $value_8;
                }
                $data['countryCodes'] = $values_8;
            }
            if ($object->isInitialized('stateOrProvinceCodes') && null !== $object->getStateOrProvinceCodes()) {
                $values_9 = [];
                foreach ($object->getStateOrProvinceCodes() as $value_9) {
                    $values_9[] = $value_9;
                }
                $data['stateOrProvinceCodes'] = $values_9;
            }
            if ($object->isInitialized('ursaPrefixCode') && null !== $object->getUrsaPrefixCode()) {
                $data['ursaPrefixCode'] = $object->getUrsaPrefixCode();
            }
            if ($object->isInitialized('ursaSuffixCode') && null !== $object->getUrsaSuffixCode()) {
                $data['ursaSuffixCode'] = $object->getUrsaSuffixCode();
            }
            if ($object->isInitialized('destinationServiceAreas') && null !== $object->getDestinationServiceAreas()) {
                $values_10 = [];
                foreach ($object->getDestinationServiceAreas() as $value_10) {
                    $values_10[] = $value_10;
                }
                $data['destinationServiceAreas'] = $values_10;
            }
            if ($object->isInitialized('originPostalCodes') && null !== $object->getOriginPostalCodes()) {
                $values_11 = [];
                foreach ($object->getOriginPostalCodes() as $value_11) {
                    $values_11[] = $value_11;
                }
                $data['originPostalCodes'] = $values_11;
            }
            if ($object->isInitialized('customTransitTime') && null !== $object->getCustomTransitTime()) {
                $data['customTransitTime'] = $object->getCustomTransitTime();
            }
            foreach ($object as $key => $value_12) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_12;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail::class => false];
        }
    }
} else {
    class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('originLocationIds', $data)) {
                $values = [];
                foreach ($data['originLocationIds'] as $value) {
                    $values[] = $value;
                }
                $object->setOriginLocationIds($values);
                unset($data['originLocationIds']);
            }
            if (\array_key_exists('commitDays', $data)) {
                $values_1 = [];
                foreach ($data['commitDays'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCommitDays($values_1);
                unset($data['commitDays']);
            }
            if (\array_key_exists('serviceCode', $data)) {
                $object->setServiceCode($data['serviceCode']);
                unset($data['serviceCode']);
            }
            if (\array_key_exists('airportId', $data)) {
                $object->setAirportId($data['airportId']);
                unset($data['airportId']);
            }
            if (\array_key_exists('scac', $data)) {
                $object->setScac($data['scac']);
                unset($data['scac']);
            }
            if (\array_key_exists('originServiceAreas', $data)) {
                $values_2 = [];
                foreach ($data['originServiceAreas'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setOriginServiceAreas($values_2);
                unset($data['originServiceAreas']);
            }
            if (\array_key_exists('deliveryDay', $data)) {
                $object->setDeliveryDay($data['deliveryDay']);
                unset($data['deliveryDay']);
            }
            if (\array_key_exists('originLocationNumbers', $data)) {
                $values_3 = [];
                foreach ($data['originLocationNumbers'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setOriginLocationNumbers($values_3);
                unset($data['originLocationNumbers']);
            }
            if (\array_key_exists('destinationPostalCode', $data)) {
                $object->setDestinationPostalCode($data['destinationPostalCode']);
                unset($data['destinationPostalCode']);
            }
            if (\array_key_exists('commitDate', $data)) {
                $object->setCommitDate($data['commitDate']);
                unset($data['commitDate']);
            }
            if (\array_key_exists('astraDescription', $data)) {
                $object->setAstraDescription($data['astraDescription']);
                unset($data['astraDescription']);
            }
            if (\array_key_exists('deliveryDate', $data)) {
                $object->setDeliveryDate($data['deliveryDate']);
                unset($data['deliveryDate']);
            }
            if (\array_key_exists('deliveryEligibilities', $data)) {
                $values_4 = [];
                foreach ($data['deliveryEligibilities'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setDeliveryEligibilities($values_4);
                unset($data['deliveryEligibilities']);
            }
            if (\array_key_exists('ineligibleForMoneyBackGuarantee', $data)) {
                $object->setIneligibleForMoneyBackGuarantee($data['ineligibleForMoneyBackGuarantee']);
                unset($data['ineligibleForMoneyBackGuarantee']);
            }
            if (\array_key_exists('MaximumTransitTime', $data)) {
                $object->setMaximumTransitTime($data['MaximumTransitTime']);
                unset($data['MaximumTransitTime']);
            }
            if (\array_key_exists('astraPlannedServiceLevel', $data)) {
                $object->setAstraPlannedServiceLevel($data['astraPlannedServiceLevel']);
                unset($data['astraPlannedServiceLevel']);
            }
            if (\array_key_exists('destinationLocationIds', $data)) {
                $values_5 = [];
                foreach ($data['destinationLocationIds'] as $value_5) {
                    $values_5[] = $value_5;
                }
                $object->setDestinationLocationIds($values_5);
                unset($data['destinationLocationIds']);
            }
            if (\array_key_exists('destinationLocationStateOrProvinceCodes', $data)) {
                $values_6 = [];
                foreach ($data['destinationLocationStateOrProvinceCodes'] as $value_6) {
                    $values_6[] = $value_6;
                }
                $object->setDestinationLocationStateOrProvinceCodes($values_6);
                unset($data['destinationLocationStateOrProvinceCodes']);
            }
            if (\array_key_exists('transitTime', $data)) {
                $object->setTransitTime($data['transitTime']);
                unset($data['transitTime']);
            }
            if (\array_key_exists('packagingCode', $data)) {
                $object->setPackagingCode($data['packagingCode']);
                unset($data['packagingCode']);
            }
            if (\array_key_exists('destinationLocationNumbers', $data)) {
                $values_7 = [];
                foreach ($data['destinationLocationNumbers'] as $value_7) {
                    $values_7[] = $value_7;
                }
                $object->setDestinationLocationNumbers($values_7);
                unset($data['destinationLocationNumbers']);
            }
            if (\array_key_exists('publishedDeliveryTime', $data)) {
                $object->setPublishedDeliveryTime($data['publishedDeliveryTime']);
                unset($data['publishedDeliveryTime']);
            }
            if (\array_key_exists('countryCodes', $data)) {
                $values_8 = [];
                foreach ($data['countryCodes'] as $value_8) {
                    $values_8[] = $value_8;
                }
                $object->setCountryCodes($values_8);
                unset($data['countryCodes']);
            }
            if (\array_key_exists('stateOrProvinceCodes', $data)) {
                $values_9 = [];
                foreach ($data['stateOrProvinceCodes'] as $value_9) {
                    $values_9[] = $value_9;
                }
                $object->setStateOrProvinceCodes($values_9);
                unset($data['stateOrProvinceCodes']);
            }
            if (\array_key_exists('ursaPrefixCode', $data)) {
                $object->setUrsaPrefixCode($data['ursaPrefixCode']);
                unset($data['ursaPrefixCode']);
            }
            if (\array_key_exists('ursaSuffixCode', $data)) {
                $object->setUrsaSuffixCode($data['ursaSuffixCode']);
                unset($data['ursaSuffixCode']);
            }
            if (\array_key_exists('destinationServiceAreas', $data)) {
                $values_10 = [];
                foreach ($data['destinationServiceAreas'] as $value_10) {
                    $values_10[] = $value_10;
                }
                $object->setDestinationServiceAreas($values_10);
                unset($data['destinationServiceAreas']);
            }
            if (\array_key_exists('originPostalCodes', $data)) {
                $values_11 = [];
                foreach ($data['originPostalCodes'] as $value_11) {
                    $values_11[] = $value_11;
                }
                $object->setOriginPostalCodes($values_11);
                unset($data['originPostalCodes']);
            }
            if (\array_key_exists('customTransitTime', $data)) {
                $object->setCustomTransitTime($data['customTransitTime']);
                unset($data['customTransitTime']);
            }
            foreach ($data as $key => $value_12) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_12;
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
            if ($object->isInitialized('originLocationIds') && null !== $object->getOriginLocationIds()) {
                $values = [];
                foreach ($object->getOriginLocationIds() as $value) {
                    $values[] = $value;
                }
                $data['originLocationIds'] = $values;
            }
            if ($object->isInitialized('commitDays') && null !== $object->getCommitDays()) {
                $values_1 = [];
                foreach ($object->getCommitDays() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['commitDays'] = $values_1;
            }
            if ($object->isInitialized('serviceCode') && null !== $object->getServiceCode()) {
                $data['serviceCode'] = $object->getServiceCode();
            }
            if ($object->isInitialized('airportId') && null !== $object->getAirportId()) {
                $data['airportId'] = $object->getAirportId();
            }
            if ($object->isInitialized('scac') && null !== $object->getScac()) {
                $data['scac'] = $object->getScac();
            }
            if ($object->isInitialized('originServiceAreas') && null !== $object->getOriginServiceAreas()) {
                $values_2 = [];
                foreach ($object->getOriginServiceAreas() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['originServiceAreas'] = $values_2;
            }
            if ($object->isInitialized('deliveryDay') && null !== $object->getDeliveryDay()) {
                $data['deliveryDay'] = $object->getDeliveryDay();
            }
            if ($object->isInitialized('originLocationNumbers') && null !== $object->getOriginLocationNumbers()) {
                $values_3 = [];
                foreach ($object->getOriginLocationNumbers() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['originLocationNumbers'] = $values_3;
            }
            if ($object->isInitialized('destinationPostalCode') && null !== $object->getDestinationPostalCode()) {
                $data['destinationPostalCode'] = $object->getDestinationPostalCode();
            }
            if ($object->isInitialized('commitDate') && null !== $object->getCommitDate()) {
                $data['commitDate'] = $object->getCommitDate();
            }
            if ($object->isInitialized('astraDescription') && null !== $object->getAstraDescription()) {
                $data['astraDescription'] = $object->getAstraDescription();
            }
            if ($object->isInitialized('deliveryDate') && null !== $object->getDeliveryDate()) {
                $data['deliveryDate'] = $object->getDeliveryDate();
            }
            if ($object->isInitialized('deliveryEligibilities') && null !== $object->getDeliveryEligibilities()) {
                $values_4 = [];
                foreach ($object->getDeliveryEligibilities() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['deliveryEligibilities'] = $values_4;
            }
            if ($object->isInitialized('ineligibleForMoneyBackGuarantee') && null !== $object->getIneligibleForMoneyBackGuarantee()) {
                $data['ineligibleForMoneyBackGuarantee'] = $object->getIneligibleForMoneyBackGuarantee();
            }
            if ($object->isInitialized('maximumTransitTime') && null !== $object->getMaximumTransitTime()) {
                $data['MaximumTransitTime'] = $object->getMaximumTransitTime();
            }
            if ($object->isInitialized('astraPlannedServiceLevel') && null !== $object->getAstraPlannedServiceLevel()) {
                $data['astraPlannedServiceLevel'] = $object->getAstraPlannedServiceLevel();
            }
            if ($object->isInitialized('destinationLocationIds') && null !== $object->getDestinationLocationIds()) {
                $values_5 = [];
                foreach ($object->getDestinationLocationIds() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['destinationLocationIds'] = $values_5;
            }
            if ($object->isInitialized('destinationLocationStateOrProvinceCodes') && null !== $object->getDestinationLocationStateOrProvinceCodes()) {
                $values_6 = [];
                foreach ($object->getDestinationLocationStateOrProvinceCodes() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['destinationLocationStateOrProvinceCodes'] = $values_6;
            }
            if ($object->isInitialized('transitTime') && null !== $object->getTransitTime()) {
                $data['transitTime'] = $object->getTransitTime();
            }
            if ($object->isInitialized('packagingCode') && null !== $object->getPackagingCode()) {
                $data['packagingCode'] = $object->getPackagingCode();
            }
            if ($object->isInitialized('destinationLocationNumbers') && null !== $object->getDestinationLocationNumbers()) {
                $values_7 = [];
                foreach ($object->getDestinationLocationNumbers() as $value_7) {
                    $values_7[] = $value_7;
                }
                $data['destinationLocationNumbers'] = $values_7;
            }
            if ($object->isInitialized('publishedDeliveryTime') && null !== $object->getPublishedDeliveryTime()) {
                $data['publishedDeliveryTime'] = $object->getPublishedDeliveryTime();
            }
            if ($object->isInitialized('countryCodes') && null !== $object->getCountryCodes()) {
                $values_8 = [];
                foreach ($object->getCountryCodes() as $value_8) {
                    $values_8[] = $value_8;
                }
                $data['countryCodes'] = $values_8;
            }
            if ($object->isInitialized('stateOrProvinceCodes') && null !== $object->getStateOrProvinceCodes()) {
                $values_9 = [];
                foreach ($object->getStateOrProvinceCodes() as $value_9) {
                    $values_9[] = $value_9;
                }
                $data['stateOrProvinceCodes'] = $values_9;
            }
            if ($object->isInitialized('ursaPrefixCode') && null !== $object->getUrsaPrefixCode()) {
                $data['ursaPrefixCode'] = $object->getUrsaPrefixCode();
            }
            if ($object->isInitialized('ursaSuffixCode') && null !== $object->getUrsaSuffixCode()) {
                $data['ursaSuffixCode'] = $object->getUrsaSuffixCode();
            }
            if ($object->isInitialized('destinationServiceAreas') && null !== $object->getDestinationServiceAreas()) {
                $values_10 = [];
                foreach ($object->getDestinationServiceAreas() as $value_10) {
                    $values_10[] = $value_10;
                }
                $data['destinationServiceAreas'] = $values_10;
            }
            if ($object->isInitialized('originPostalCodes') && null !== $object->getOriginPostalCodes()) {
                $values_11 = [];
                foreach ($object->getOriginPostalCodes() as $value_11) {
                    $values_11[] = $value_11;
                }
                $data['originPostalCodes'] = $values_11;
            }
            if ($object->isInitialized('customTransitTime') && null !== $object->getCustomTransitTime()) {
                $data['customTransitTime'] = $object->getCustomTransitTime();
            }
            foreach ($object as $key => $value_12) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_12;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail::class => false];
        }
    }
}
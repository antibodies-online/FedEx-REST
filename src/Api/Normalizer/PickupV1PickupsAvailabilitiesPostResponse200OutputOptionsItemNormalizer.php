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
    class PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('carrier', $data)) {
                $object->setCarrier($data['carrier']);
                unset($data['carrier']);
            }
            if (\array_key_exists('available', $data)) {
                $object->setAvailable($data['available']);
                unset($data['available']);
            }
            if (\array_key_exists('pickupDate', $data)) {
                $object->setPickupDate($data['pickupDate']);
                unset($data['pickupDate']);
            }
            if (\array_key_exists('cutOffTime', $data)) {
                $object->setCutOffTime($data['cutOffTime']);
                unset($data['cutOffTime']);
            }
            if (\array_key_exists('accessTime', $data)) {
                $object->setAccessTime($this->denormalizer->denormalize($data['accessTime'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemAccessTime', 'json', $context));
                unset($data['accessTime']);
            }
            if (\array_key_exists('residentialAvailable', $data)) {
                $object->setResidentialAvailable($data['residentialAvailable']);
                unset($data['residentialAvailable']);
            }
            if (\array_key_exists('countryRelationship', $data)) {
                $object->setCountryRelationship($data['countryRelationship']);
                unset($data['countryRelationship']);
            }
            if (\array_key_exists('scheduleDay', $data)) {
                $object->setScheduleDay($data['scheduleDay']);
                unset($data['scheduleDay']);
            }
            if (\array_key_exists('defaultReadyTime', $data)) {
                $object->setDefaultReadyTime($data['defaultReadyTime']);
                unset($data['defaultReadyTime']);
            }
            if (\array_key_exists('defaultLatestTimeOptions', $data)) {
                $object->setDefaultLatestTimeOptions($data['defaultLatestTimeOptions']);
                unset($data['defaultLatestTimeOptions']);
            }
            if (\array_key_exists('earlyCutOffTime', $data)) {
                $object->setEarlyCutOffTime($data['earlyCutOffTime']);
                unset($data['earlyCutOffTime']);
            }
            if (\array_key_exists('earlyAccessTime', $data)) {
                $object->setEarlyAccessTime($this->denormalizer->denormalize($data['earlyAccessTime'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemEarlyAccessTime', 'json', $context));
                unset($data['earlyAccessTime']);
            }
            if (\array_key_exists('earlyPickupLocationId', $data)) {
                $object->setEarlyPickupLocationId($data['earlyPickupLocationId']);
                unset($data['earlyPickupLocationId']);
            }
            if (\array_key_exists('readyTimeOptions', $data)) {
                $values = [];
                foreach ($data['readyTimeOptions'] as $value) {
                    $values[] = $value;
                }
                $object->setReadyTimeOptions($values);
                unset($data['readyTimeOptions']);
            }
            if (\array_key_exists('latestTimeOptions', $data)) {
                $values_1 = [];
                foreach ($data['latestTimeOptions'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setLatestTimeOptions($values_1);
                unset($data['latestTimeOptions']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('carrier') && null !== $object->getCarrier()) {
                $data['carrier'] = $object->getCarrier();
            }
            if ($object->isInitialized('available') && null !== $object->getAvailable()) {
                $data['available'] = $object->getAvailable();
            }
            if ($object->isInitialized('pickupDate') && null !== $object->getPickupDate()) {
                $data['pickupDate'] = $object->getPickupDate();
            }
            if ($object->isInitialized('cutOffTime') && null !== $object->getCutOffTime()) {
                $data['cutOffTime'] = $object->getCutOffTime();
            }
            if ($object->isInitialized('accessTime') && null !== $object->getAccessTime()) {
                $data['accessTime'] = $this->normalizer->normalize($object->getAccessTime(), 'json', $context);
            }
            if ($object->isInitialized('residentialAvailable') && null !== $object->getResidentialAvailable()) {
                $data['residentialAvailable'] = $object->getResidentialAvailable();
            }
            if ($object->isInitialized('countryRelationship') && null !== $object->getCountryRelationship()) {
                $data['countryRelationship'] = $object->getCountryRelationship();
            }
            if ($object->isInitialized('scheduleDay') && null !== $object->getScheduleDay()) {
                $data['scheduleDay'] = $object->getScheduleDay();
            }
            if ($object->isInitialized('defaultReadyTime') && null !== $object->getDefaultReadyTime()) {
                $data['defaultReadyTime'] = $object->getDefaultReadyTime();
            }
            if ($object->isInitialized('defaultLatestTimeOptions') && null !== $object->getDefaultLatestTimeOptions()) {
                $data['defaultLatestTimeOptions'] = $object->getDefaultLatestTimeOptions();
            }
            if ($object->isInitialized('earlyCutOffTime') && null !== $object->getEarlyCutOffTime()) {
                $data['earlyCutOffTime'] = $object->getEarlyCutOffTime();
            }
            if ($object->isInitialized('earlyAccessTime') && null !== $object->getEarlyAccessTime()) {
                $data['earlyAccessTime'] = $this->normalizer->normalize($object->getEarlyAccessTime(), 'json', $context);
            }
            if ($object->isInitialized('earlyPickupLocationId') && null !== $object->getEarlyPickupLocationId()) {
                $data['earlyPickupLocationId'] = $object->getEarlyPickupLocationId();
            }
            if ($object->isInitialized('readyTimeOptions') && null !== $object->getReadyTimeOptions()) {
                $values = [];
                foreach ($object->getReadyTimeOptions() as $value) {
                    $values[] = $value;
                }
                $data['readyTimeOptions'] = $values;
            }
            if ($object->isInitialized('latestTimeOptions') && null !== $object->getLatestTimeOptions()) {
                $values_1 = [];
                foreach ($object->getLatestTimeOptions() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['latestTimeOptions'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItem' => false];
        }
    }
} else {
    class PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItem';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('carrier', $data)) {
                $object->setCarrier($data['carrier']);
                unset($data['carrier']);
            }
            if (\array_key_exists('available', $data)) {
                $object->setAvailable($data['available']);
                unset($data['available']);
            }
            if (\array_key_exists('pickupDate', $data)) {
                $object->setPickupDate($data['pickupDate']);
                unset($data['pickupDate']);
            }
            if (\array_key_exists('cutOffTime', $data)) {
                $object->setCutOffTime($data['cutOffTime']);
                unset($data['cutOffTime']);
            }
            if (\array_key_exists('accessTime', $data)) {
                $object->setAccessTime($this->denormalizer->denormalize($data['accessTime'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemAccessTime', 'json', $context));
                unset($data['accessTime']);
            }
            if (\array_key_exists('residentialAvailable', $data)) {
                $object->setResidentialAvailable($data['residentialAvailable']);
                unset($data['residentialAvailable']);
            }
            if (\array_key_exists('countryRelationship', $data)) {
                $object->setCountryRelationship($data['countryRelationship']);
                unset($data['countryRelationship']);
            }
            if (\array_key_exists('scheduleDay', $data)) {
                $object->setScheduleDay($data['scheduleDay']);
                unset($data['scheduleDay']);
            }
            if (\array_key_exists('defaultReadyTime', $data)) {
                $object->setDefaultReadyTime($data['defaultReadyTime']);
                unset($data['defaultReadyTime']);
            }
            if (\array_key_exists('defaultLatestTimeOptions', $data)) {
                $object->setDefaultLatestTimeOptions($data['defaultLatestTimeOptions']);
                unset($data['defaultLatestTimeOptions']);
            }
            if (\array_key_exists('earlyCutOffTime', $data)) {
                $object->setEarlyCutOffTime($data['earlyCutOffTime']);
                unset($data['earlyCutOffTime']);
            }
            if (\array_key_exists('earlyAccessTime', $data)) {
                $object->setEarlyAccessTime($this->denormalizer->denormalize($data['earlyAccessTime'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemEarlyAccessTime', 'json', $context));
                unset($data['earlyAccessTime']);
            }
            if (\array_key_exists('earlyPickupLocationId', $data)) {
                $object->setEarlyPickupLocationId($data['earlyPickupLocationId']);
                unset($data['earlyPickupLocationId']);
            }
            if (\array_key_exists('readyTimeOptions', $data)) {
                $values = [];
                foreach ($data['readyTimeOptions'] as $value) {
                    $values[] = $value;
                }
                $object->setReadyTimeOptions($values);
                unset($data['readyTimeOptions']);
            }
            if (\array_key_exists('latestTimeOptions', $data)) {
                $values_1 = [];
                foreach ($data['latestTimeOptions'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setLatestTimeOptions($values_1);
                unset($data['latestTimeOptions']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('carrier') && null !== $object->getCarrier()) {
                $data['carrier'] = $object->getCarrier();
            }
            if ($object->isInitialized('available') && null !== $object->getAvailable()) {
                $data['available'] = $object->getAvailable();
            }
            if ($object->isInitialized('pickupDate') && null !== $object->getPickupDate()) {
                $data['pickupDate'] = $object->getPickupDate();
            }
            if ($object->isInitialized('cutOffTime') && null !== $object->getCutOffTime()) {
                $data['cutOffTime'] = $object->getCutOffTime();
            }
            if ($object->isInitialized('accessTime') && null !== $object->getAccessTime()) {
                $data['accessTime'] = $this->normalizer->normalize($object->getAccessTime(), 'json', $context);
            }
            if ($object->isInitialized('residentialAvailable') && null !== $object->getResidentialAvailable()) {
                $data['residentialAvailable'] = $object->getResidentialAvailable();
            }
            if ($object->isInitialized('countryRelationship') && null !== $object->getCountryRelationship()) {
                $data['countryRelationship'] = $object->getCountryRelationship();
            }
            if ($object->isInitialized('scheduleDay') && null !== $object->getScheduleDay()) {
                $data['scheduleDay'] = $object->getScheduleDay();
            }
            if ($object->isInitialized('defaultReadyTime') && null !== $object->getDefaultReadyTime()) {
                $data['defaultReadyTime'] = $object->getDefaultReadyTime();
            }
            if ($object->isInitialized('defaultLatestTimeOptions') && null !== $object->getDefaultLatestTimeOptions()) {
                $data['defaultLatestTimeOptions'] = $object->getDefaultLatestTimeOptions();
            }
            if ($object->isInitialized('earlyCutOffTime') && null !== $object->getEarlyCutOffTime()) {
                $data['earlyCutOffTime'] = $object->getEarlyCutOffTime();
            }
            if ($object->isInitialized('earlyAccessTime') && null !== $object->getEarlyAccessTime()) {
                $data['earlyAccessTime'] = $this->normalizer->normalize($object->getEarlyAccessTime(), 'json', $context);
            }
            if ($object->isInitialized('earlyPickupLocationId') && null !== $object->getEarlyPickupLocationId()) {
                $data['earlyPickupLocationId'] = $object->getEarlyPickupLocationId();
            }
            if ($object->isInitialized('readyTimeOptions') && null !== $object->getReadyTimeOptions()) {
                $values = [];
                foreach ($object->getReadyTimeOptions() as $value) {
                    $values[] = $value;
                }
                $data['readyTimeOptions'] = $values;
            }
            if ($object->isInitialized('latestTimeOptions') && null !== $object->getLatestTimeOptions()) {
                $values_1 = [];
                foreach ($object->getLatestTimeOptions() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['latestTimeOptions'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItem' => false];
        }
    }
}
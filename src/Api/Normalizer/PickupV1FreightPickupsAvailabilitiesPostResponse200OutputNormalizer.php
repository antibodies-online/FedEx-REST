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
    class PickupV1FreightPickupsAvailabilitiesPostResponse200OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse200Output::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse200Output::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse200Output();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('closeTime', $data)) {
                $object->setCloseTime($data['closeTime']);
                unset($data['closeTime']);
            }
            if (\array_key_exists('closeTimeType', $data)) {
                $object->setCloseTimeType($data['closeTimeType']);
                unset($data['closeTimeType']);
            }
            if (\array_key_exists('localTime', $data)) {
                $object->setLocalTime($data['localTime']);
                unset($data['localTime']);
            }
            if (\array_key_exists('options', $data)) {
                $values = [];
                foreach ($data['options'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse200OutputOptionsItem::class, 'json', $context);
                }
                $object->setOptions($values);
                unset($data['options']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values_1 = [];
                foreach ($data['alerts'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse200OutputAlertsItem::class, 'json', $context);
                }
                $object->setAlerts($values_1);
                unset($data['alerts']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('closeTime') && null !== $object->getCloseTime()) {
                $data['closeTime'] = $object->getCloseTime();
            }
            if ($object->isInitialized('closeTimeType') && null !== $object->getCloseTimeType()) {
                $data['closeTimeType'] = $object->getCloseTimeType();
            }
            if ($object->isInitialized('localTime') && null !== $object->getLocalTime()) {
                $data['localTime'] = $object->getLocalTime();
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values = [];
                foreach ($object->getOptions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['options'] = $values;
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values_1 = [];
                foreach ($object->getAlerts() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['alerts'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse200Output::class => false];
        }
    }
} else {
    class PickupV1FreightPickupsAvailabilitiesPostResponse200OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse200Output::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse200Output::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse200Output();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('closeTime', $data)) {
                $object->setCloseTime($data['closeTime']);
                unset($data['closeTime']);
            }
            if (\array_key_exists('closeTimeType', $data)) {
                $object->setCloseTimeType($data['closeTimeType']);
                unset($data['closeTimeType']);
            }
            if (\array_key_exists('localTime', $data)) {
                $object->setLocalTime($data['localTime']);
                unset($data['localTime']);
            }
            if (\array_key_exists('options', $data)) {
                $values = [];
                foreach ($data['options'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse200OutputOptionsItem::class, 'json', $context);
                }
                $object->setOptions($values);
                unset($data['options']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values_1 = [];
                foreach ($data['alerts'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse200OutputAlertsItem::class, 'json', $context);
                }
                $object->setAlerts($values_1);
                unset($data['alerts']);
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
            if ($object->isInitialized('closeTime') && null !== $object->getCloseTime()) {
                $data['closeTime'] = $object->getCloseTime();
            }
            if ($object->isInitialized('closeTimeType') && null !== $object->getCloseTimeType()) {
                $data['closeTimeType'] = $object->getCloseTimeType();
            }
            if ($object->isInitialized('localTime') && null !== $object->getLocalTime()) {
                $data['localTime'] = $object->getLocalTime();
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values = [];
                foreach ($object->getOptions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['options'] = $values;
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values_1 = [];
                foreach ($object->getAlerts() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['alerts'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse200Output::class => false];
        }
    }
}
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
    class PickupV1FreightPickupsAvailabilitiesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsAvailabilitiesPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsAvailabilitiesPostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pickupAddress', $data)) {
                $object->setPickupAddress($this->denormalizer->denormalize($data['pickupAddress'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsAvailabilitiesPostBodyPickupAddress', 'json', $context));
                unset($data['pickupAddress']);
            }
            if (\array_key_exists('packageReadyTime', $data)) {
                $object->setPackageReadyTime($data['packageReadyTime']);
                unset($data['packageReadyTime']);
            }
            if (\array_key_exists('customerCloseTime', $data)) {
                $object->setCustomerCloseTime($data['customerCloseTime']);
                unset($data['customerCloseTime']);
            }
            if (\array_key_exists('shipmentAttributes', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['shipmentAttributes'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setShipmentAttributes($values);
                unset($data['shipmentAttributes']);
            }
            if (\array_key_exists('freightPickupSpecialServiceDetail', $data)) {
                $object->setFreightPickupSpecialServiceDetail($this->denormalizer->denormalize($data['freightPickupSpecialServiceDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetail', 'json', $context));
                unset($data['freightPickupSpecialServiceDetail']);
            }
            if (\array_key_exists('dispatchDate', $data)) {
                $object->setDispatchDate($data['dispatchDate']);
                unset($data['dispatchDate']);
            }
            if (\array_key_exists('numberOfBusinessDays', $data)) {
                $object->setNumberOfBusinessDays($data['numberOfBusinessDays']);
                unset($data['numberOfBusinessDays']);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['pickupAddress'] = $this->normalizer->normalize($object->getPickupAddress(), 'json', $context);
            if ($object->isInitialized('packageReadyTime') && null !== $object->getPackageReadyTime()) {
                $data['packageReadyTime'] = $object->getPackageReadyTime();
            }
            if ($object->isInitialized('customerCloseTime') && null !== $object->getCustomerCloseTime()) {
                $data['customerCloseTime'] = $object->getCustomerCloseTime();
            }
            if ($object->isInitialized('shipmentAttributes') && null !== $object->getShipmentAttributes()) {
                $values = [];
                foreach ($object->getShipmentAttributes() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['shipmentAttributes'] = $values;
            }
            if ($object->isInitialized('freightPickupSpecialServiceDetail') && null !== $object->getFreightPickupSpecialServiceDetail()) {
                $data['freightPickupSpecialServiceDetail'] = $this->normalizer->normalize($object->getFreightPickupSpecialServiceDetail(), 'json', $context);
            }
            if ($object->isInitialized('dispatchDate') && null !== $object->getDispatchDate()) {
                $data['dispatchDate'] = $object->getDispatchDate();
            }
            if ($object->isInitialized('numberOfBusinessDays') && null !== $object->getNumberOfBusinessDays()) {
                $data['numberOfBusinessDays'] = $object->getNumberOfBusinessDays();
            }
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsAvailabilitiesPostBody' => false];
        }
    }
} else {
    class PickupV1FreightPickupsAvailabilitiesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsAvailabilitiesPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsAvailabilitiesPostBody';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pickupAddress', $data)) {
                $object->setPickupAddress($this->denormalizer->denormalize($data['pickupAddress'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsAvailabilitiesPostBodyPickupAddress', 'json', $context));
                unset($data['pickupAddress']);
            }
            if (\array_key_exists('packageReadyTime', $data)) {
                $object->setPackageReadyTime($data['packageReadyTime']);
                unset($data['packageReadyTime']);
            }
            if (\array_key_exists('customerCloseTime', $data)) {
                $object->setCustomerCloseTime($data['customerCloseTime']);
                unset($data['customerCloseTime']);
            }
            if (\array_key_exists('shipmentAttributes', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['shipmentAttributes'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setShipmentAttributes($values);
                unset($data['shipmentAttributes']);
            }
            if (\array_key_exists('freightPickupSpecialServiceDetail', $data)) {
                $object->setFreightPickupSpecialServiceDetail($this->denormalizer->denormalize($data['freightPickupSpecialServiceDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetail', 'json', $context));
                unset($data['freightPickupSpecialServiceDetail']);
            }
            if (\array_key_exists('dispatchDate', $data)) {
                $object->setDispatchDate($data['dispatchDate']);
                unset($data['dispatchDate']);
            }
            if (\array_key_exists('numberOfBusinessDays', $data)) {
                $object->setNumberOfBusinessDays($data['numberOfBusinessDays']);
                unset($data['numberOfBusinessDays']);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
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
            $data['pickupAddress'] = $this->normalizer->normalize($object->getPickupAddress(), 'json', $context);
            if ($object->isInitialized('packageReadyTime') && null !== $object->getPackageReadyTime()) {
                $data['packageReadyTime'] = $object->getPackageReadyTime();
            }
            if ($object->isInitialized('customerCloseTime') && null !== $object->getCustomerCloseTime()) {
                $data['customerCloseTime'] = $object->getCustomerCloseTime();
            }
            if ($object->isInitialized('shipmentAttributes') && null !== $object->getShipmentAttributes()) {
                $values = [];
                foreach ($object->getShipmentAttributes() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['shipmentAttributes'] = $values;
            }
            if ($object->isInitialized('freightPickupSpecialServiceDetail') && null !== $object->getFreightPickupSpecialServiceDetail()) {
                $data['freightPickupSpecialServiceDetail'] = $this->normalizer->normalize($object->getFreightPickupSpecialServiceDetail(), 'json', $context);
            }
            if ($object->isInitialized('dispatchDate') && null !== $object->getDispatchDate()) {
                $data['dispatchDate'] = $object->getDispatchDate();
            }
            if ($object->isInitialized('numberOfBusinessDays') && null !== $object->getNumberOfBusinessDays()) {
                $data['numberOfBusinessDays'] = $object->getNumberOfBusinessDays();
            }
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsAvailabilitiesPostBody' => false];
        }
    }
}
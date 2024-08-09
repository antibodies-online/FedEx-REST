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
    class PickupV1PickupsAvailabilitiesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pickupAddress', $data)) {
                $object->setPickupAddress($this->denormalizer->denormalize($data['pickupAddress'], \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostBodyPickupAddress::class, 'json', $context));
                unset($data['pickupAddress']);
            }
            if (\array_key_exists('dispatchDate', $data)) {
                $object->setDispatchDate($data['dispatchDate']);
                unset($data['dispatchDate']);
            }
            if (\array_key_exists('packageReadyTime', $data)) {
                $object->setPackageReadyTime($data['packageReadyTime']);
                unset($data['packageReadyTime']);
            }
            if (\array_key_exists('customerCloseTime', $data)) {
                $object->setCustomerCloseTime($data['customerCloseTime']);
                unset($data['customerCloseTime']);
            }
            if (\array_key_exists('pickupType', $data)) {
                $object->setPickupType($data['pickupType']);
                unset($data['pickupType']);
            }
            if (\array_key_exists('pickupRequestType', $data)) {
                $values = [];
                foreach ($data['pickupRequestType'] as $value) {
                    $values[] = $value;
                }
                $object->setPickupRequestType($values);
                unset($data['pickupRequestType']);
            }
            if (\array_key_exists('shipmentAttributes', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['shipmentAttributes'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setShipmentAttributes($values_1);
                unset($data['shipmentAttributes']);
            }
            if (\array_key_exists('numberOfBusinessDays', $data)) {
                $object->setNumberOfBusinessDays($data['numberOfBusinessDays']);
                unset($data['numberOfBusinessDays']);
            }
            if (\array_key_exists('packageDetails', $data)) {
                $values_2 = [];
                foreach ($data['packageDetails'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostBodyPackageDetailsItem::class, 'json', $context);
                }
                $object->setPackageDetails($values_2);
                unset($data['packageDetails']);
            }
            if (\array_key_exists('associatedAccountNumber', $data)) {
                $object->setAssociatedAccountNumber($data['associatedAccountNumber']);
                unset($data['associatedAccountNumber']);
            }
            if (\array_key_exists('associatedAccountNumberType', $data)) {
                $object->setAssociatedAccountNumberType($data['associatedAccountNumberType']);
                unset($data['associatedAccountNumberType']);
            }
            if (\array_key_exists('carriers', $data)) {
                $values_3 = [];
                foreach ($data['carriers'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setCarriers($values_3);
                unset($data['carriers']);
            }
            if (\array_key_exists('countryRelationship', $data)) {
                $object->setCountryRelationship($data['countryRelationship']);
                unset($data['countryRelationship']);
            }
            foreach ($data as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_4;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['pickupAddress'] = $this->normalizer->normalize($object->getPickupAddress(), 'json', $context);
            if ($object->isInitialized('dispatchDate') && null !== $object->getDispatchDate()) {
                $data['dispatchDate'] = $object->getDispatchDate();
            }
            if ($object->isInitialized('packageReadyTime') && null !== $object->getPackageReadyTime()) {
                $data['packageReadyTime'] = $object->getPackageReadyTime();
            }
            if ($object->isInitialized('customerCloseTime') && null !== $object->getCustomerCloseTime()) {
                $data['customerCloseTime'] = $object->getCustomerCloseTime();
            }
            if ($object->isInitialized('pickupType') && null !== $object->getPickupType()) {
                $data['pickupType'] = $object->getPickupType();
            }
            $values = [];
            foreach ($object->getPickupRequestType() as $value) {
                $values[] = $value;
            }
            $data['pickupRequestType'] = $values;
            if ($object->isInitialized('shipmentAttributes') && null !== $object->getShipmentAttributes()) {
                $values_1 = [];
                foreach ($object->getShipmentAttributes() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['shipmentAttributes'] = $values_1;
            }
            if ($object->isInitialized('numberOfBusinessDays') && null !== $object->getNumberOfBusinessDays()) {
                $data['numberOfBusinessDays'] = $object->getNumberOfBusinessDays();
            }
            if ($object->isInitialized('packageDetails') && null !== $object->getPackageDetails()) {
                $values_2 = [];
                foreach ($object->getPackageDetails() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['packageDetails'] = $values_2;
            }
            if ($object->isInitialized('associatedAccountNumber') && null !== $object->getAssociatedAccountNumber()) {
                $data['associatedAccountNumber'] = $object->getAssociatedAccountNumber();
            }
            if ($object->isInitialized('associatedAccountNumberType') && null !== $object->getAssociatedAccountNumberType()) {
                $data['associatedAccountNumberType'] = $object->getAssociatedAccountNumberType();
            }
            $values_3 = [];
            foreach ($object->getCarriers() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['carriers'] = $values_3;
            $data['countryRelationship'] = $object->getCountryRelationship();
            foreach ($object as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostBody::class => false];
        }
    }
} else {
    class PickupV1PickupsAvailabilitiesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostBody::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pickupAddress', $data)) {
                $object->setPickupAddress($this->denormalizer->denormalize($data['pickupAddress'], \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostBodyPickupAddress::class, 'json', $context));
                unset($data['pickupAddress']);
            }
            if (\array_key_exists('dispatchDate', $data)) {
                $object->setDispatchDate($data['dispatchDate']);
                unset($data['dispatchDate']);
            }
            if (\array_key_exists('packageReadyTime', $data)) {
                $object->setPackageReadyTime($data['packageReadyTime']);
                unset($data['packageReadyTime']);
            }
            if (\array_key_exists('customerCloseTime', $data)) {
                $object->setCustomerCloseTime($data['customerCloseTime']);
                unset($data['customerCloseTime']);
            }
            if (\array_key_exists('pickupType', $data)) {
                $object->setPickupType($data['pickupType']);
                unset($data['pickupType']);
            }
            if (\array_key_exists('pickupRequestType', $data)) {
                $values = [];
                foreach ($data['pickupRequestType'] as $value) {
                    $values[] = $value;
                }
                $object->setPickupRequestType($values);
                unset($data['pickupRequestType']);
            }
            if (\array_key_exists('shipmentAttributes', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['shipmentAttributes'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setShipmentAttributes($values_1);
                unset($data['shipmentAttributes']);
            }
            if (\array_key_exists('numberOfBusinessDays', $data)) {
                $object->setNumberOfBusinessDays($data['numberOfBusinessDays']);
                unset($data['numberOfBusinessDays']);
            }
            if (\array_key_exists('packageDetails', $data)) {
                $values_2 = [];
                foreach ($data['packageDetails'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostBodyPackageDetailsItem::class, 'json', $context);
                }
                $object->setPackageDetails($values_2);
                unset($data['packageDetails']);
            }
            if (\array_key_exists('associatedAccountNumber', $data)) {
                $object->setAssociatedAccountNumber($data['associatedAccountNumber']);
                unset($data['associatedAccountNumber']);
            }
            if (\array_key_exists('associatedAccountNumberType', $data)) {
                $object->setAssociatedAccountNumberType($data['associatedAccountNumberType']);
                unset($data['associatedAccountNumberType']);
            }
            if (\array_key_exists('carriers', $data)) {
                $values_3 = [];
                foreach ($data['carriers'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setCarriers($values_3);
                unset($data['carriers']);
            }
            if (\array_key_exists('countryRelationship', $data)) {
                $object->setCountryRelationship($data['countryRelationship']);
                unset($data['countryRelationship']);
            }
            foreach ($data as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_4;
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
            if ($object->isInitialized('dispatchDate') && null !== $object->getDispatchDate()) {
                $data['dispatchDate'] = $object->getDispatchDate();
            }
            if ($object->isInitialized('packageReadyTime') && null !== $object->getPackageReadyTime()) {
                $data['packageReadyTime'] = $object->getPackageReadyTime();
            }
            if ($object->isInitialized('customerCloseTime') && null !== $object->getCustomerCloseTime()) {
                $data['customerCloseTime'] = $object->getCustomerCloseTime();
            }
            if ($object->isInitialized('pickupType') && null !== $object->getPickupType()) {
                $data['pickupType'] = $object->getPickupType();
            }
            $values = [];
            foreach ($object->getPickupRequestType() as $value) {
                $values[] = $value;
            }
            $data['pickupRequestType'] = $values;
            if ($object->isInitialized('shipmentAttributes') && null !== $object->getShipmentAttributes()) {
                $values_1 = [];
                foreach ($object->getShipmentAttributes() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['shipmentAttributes'] = $values_1;
            }
            if ($object->isInitialized('numberOfBusinessDays') && null !== $object->getNumberOfBusinessDays()) {
                $data['numberOfBusinessDays'] = $object->getNumberOfBusinessDays();
            }
            if ($object->isInitialized('packageDetails') && null !== $object->getPackageDetails()) {
                $values_2 = [];
                foreach ($object->getPackageDetails() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['packageDetails'] = $values_2;
            }
            if ($object->isInitialized('associatedAccountNumber') && null !== $object->getAssociatedAccountNumber()) {
                $data['associatedAccountNumber'] = $object->getAssociatedAccountNumber();
            }
            if ($object->isInitialized('associatedAccountNumberType') && null !== $object->getAssociatedAccountNumberType()) {
                $data['associatedAccountNumberType'] = $object->getAssociatedAccountNumberType();
            }
            $values_3 = [];
            foreach ($object->getCarriers() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['carriers'] = $values_3;
            $data['countryRelationship'] = $object->getCountryRelationship();
            foreach ($object as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostBody::class => false];
        }
    }
}
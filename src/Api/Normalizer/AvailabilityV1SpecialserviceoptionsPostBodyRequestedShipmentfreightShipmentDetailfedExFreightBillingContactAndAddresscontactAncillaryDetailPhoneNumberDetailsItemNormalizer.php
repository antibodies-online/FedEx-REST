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
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailPhoneNumberDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailPhoneNumberDetailsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailPhoneNumberDetailsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailPhoneNumberDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($this->denormalizer->denormalize($data['number'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailPhoneNumberDetailsItemNumber', 'json', $context));
                unset($data['number']);
            }
            if (\array_key_exists('permissions', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['permissions'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setPermissions($values);
                unset($data['permissions']);
            }
            if (\array_key_exists('usage', $data)) {
                $object->setUsage($data['usage']);
                unset($data['usage']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
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
            if ($object->isInitialized('number') && null !== $object->getNumber()) {
                $data['number'] = $this->normalizer->normalize($object->getNumber(), 'json', $context);
            }
            if ($object->isInitialized('permissions') && null !== $object->getPermissions()) {
                $values = [];
                foreach ($object->getPermissions() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['permissions'] = $values;
            }
            if ($object->isInitialized('usage') && null !== $object->getUsage()) {
                $data['usage'] = $object->getUsage();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailPhoneNumberDetailsItem' => false];
        }
    }
} else {
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailPhoneNumberDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailPhoneNumberDetailsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailPhoneNumberDetailsItem';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailPhoneNumberDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($this->denormalizer->denormalize($data['number'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailPhoneNumberDetailsItemNumber', 'json', $context));
                unset($data['number']);
            }
            if (\array_key_exists('permissions', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['permissions'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setPermissions($values);
                unset($data['permissions']);
            }
            if (\array_key_exists('usage', $data)) {
                $object->setUsage($data['usage']);
                unset($data['usage']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
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
            if ($object->isInitialized('number') && null !== $object->getNumber()) {
                $data['number'] = $this->normalizer->normalize($object->getNumber(), 'json', $context);
            }
            if ($object->isInitialized('permissions') && null !== $object->getPermissions()) {
                $values = [];
                foreach ($object->getPermissions() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['permissions'] = $values;
            }
            if ($object->isInitialized('usage') && null !== $object->getUsage()) {
                $data['usage'] = $object->getUsage();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailPhoneNumberDetailsItem' => false];
        }
    }
}
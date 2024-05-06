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
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailEmailAddressesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailEmailAddressesItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailEmailAddressesItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailEmailAddressesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('emailNotificationFormatType', $data)) {
                $object->setEmailNotificationFormatType($data['emailNotificationFormatType']);
                unset($data['emailNotificationFormatType']);
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($data['address']);
                unset($data['address']);
            }
            if (\array_key_exists('permissions', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['permissions'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setPermissions($values);
                unset($data['permissions']);
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
            if ($object->isInitialized('emailNotificationFormatType') && null !== $object->getEmailNotificationFormatType()) {
                $data['emailNotificationFormatType'] = $object->getEmailNotificationFormatType();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $object->getAddress();
            }
            if ($object->isInitialized('permissions') && null !== $object->getPermissions()) {
                $values = [];
                foreach ($object->getPermissions() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['permissions'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailEmailAddressesItem' => false];
        }
    }
} else {
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailEmailAddressesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailEmailAddressesItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailEmailAddressesItem';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailEmailAddressesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('emailNotificationFormatType', $data)) {
                $object->setEmailNotificationFormatType($data['emailNotificationFormatType']);
                unset($data['emailNotificationFormatType']);
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($data['address']);
                unset($data['address']);
            }
            if (\array_key_exists('permissions', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['permissions'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setPermissions($values);
                unset($data['permissions']);
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
            if ($object->isInitialized('emailNotificationFormatType') && null !== $object->getEmailNotificationFormatType()) {
                $data['emailNotificationFormatType'] = $object->getEmailNotificationFormatType();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $object->getAddress();
            }
            if ($object->isInitialized('permissions') && null !== $object->getPermissions()) {
                $values = [];
                foreach ($object->getPermissions() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['permissions'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailEmailAddressesItem' => false];
        }
    }
}
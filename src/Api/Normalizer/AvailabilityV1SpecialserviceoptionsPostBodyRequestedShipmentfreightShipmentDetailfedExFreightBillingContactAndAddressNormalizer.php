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
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddress';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddress';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contact', $data)) {
                $object->setContact($data['contact']);
                unset($data['contact']);
            }
            if (\array_key_exists('contactAncillaryDetail', $data)) {
                $object->setContactAncillaryDetail($this->denormalizer->denormalize($data['contactAncillaryDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetail', 'json', $context));
                unset($data['contactAncillaryDetail']);
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($data['address']);
                unset($data['address']);
            }
            if (\array_key_exists('addressAncillaryDetail', $data)) {
                $object->setAddressAncillaryDetail($this->denormalizer->denormalize($data['addressAncillaryDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddressaddressAncillaryDetail', 'json', $context));
                unset($data['addressAncillaryDetail']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['contact'] = $object->getContact();
            if ($object->isInitialized('contactAncillaryDetail') && null !== $object->getContactAncillaryDetail()) {
                $data['contactAncillaryDetail'] = $this->normalizer->normalize($object->getContactAncillaryDetail(), 'json', $context);
            }
            $data['address'] = $object->getAddress();
            if ($object->isInitialized('addressAncillaryDetail') && null !== $object->getAddressAncillaryDetail()) {
                $data['addressAncillaryDetail'] = $this->normalizer->normalize($object->getAddressAncillaryDetail(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddress' => false];
        }
    }
} else {
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddress';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddress';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contact', $data)) {
                $object->setContact($data['contact']);
                unset($data['contact']);
            }
            if (\array_key_exists('contactAncillaryDetail', $data)) {
                $object->setContactAncillaryDetail($this->denormalizer->denormalize($data['contactAncillaryDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetail', 'json', $context));
                unset($data['contactAncillaryDetail']);
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($data['address']);
                unset($data['address']);
            }
            if (\array_key_exists('addressAncillaryDetail', $data)) {
                $object->setAddressAncillaryDetail($this->denormalizer->denormalize($data['addressAncillaryDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddressaddressAncillaryDetail', 'json', $context));
                unset($data['addressAncillaryDetail']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            $data['contact'] = $object->getContact();
            if ($object->isInitialized('contactAncillaryDetail') && null !== $object->getContactAncillaryDetail()) {
                $data['contactAncillaryDetail'] = $this->normalizer->normalize($object->getContactAncillaryDetail(), 'json', $context);
            }
            $data['address'] = $object->getAddress();
            if ($object->isInitialized('addressAncillaryDetail') && null !== $object->getAddressAncillaryDetail()) {
                $data['addressAncillaryDetail'] = $this->normalizer->normalize($object->getAddressAncillaryDetail(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddress' => false];
        }
    }
}
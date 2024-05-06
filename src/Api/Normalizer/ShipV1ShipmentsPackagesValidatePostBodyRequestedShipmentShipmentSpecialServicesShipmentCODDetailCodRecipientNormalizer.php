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
    class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipient';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipient';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipient();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress', 'json', $context));
                unset($data['address']);
            }
            if (\array_key_exists('contact', $data)) {
                $object->setContact($this->denormalizer->denormalize($data['contact'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientcontact', 'json', $context));
                unset($data['contact']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaccountNumber', 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('tins', $data)) {
                $values = [];
                foreach ($data['tins'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipienttinsItem', 'json', $context);
                }
                $object->setTins($values);
                unset($data['tins']);
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
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('contact') && null !== $object->getContact()) {
                $data['contact'] = $this->normalizer->normalize($object->getContact(), 'json', $context);
            }
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            }
            if ($object->isInitialized('tins') && null !== $object->getTins()) {
                $values = [];
                foreach ($object->getTins() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['tins'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipient' => false];
        }
    }
} else {
    class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipient';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipient';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipient();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress', 'json', $context));
                unset($data['address']);
            }
            if (\array_key_exists('contact', $data)) {
                $object->setContact($this->denormalizer->denormalize($data['contact'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientcontact', 'json', $context));
                unset($data['contact']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaccountNumber', 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('tins', $data)) {
                $values = [];
                foreach ($data['tins'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipienttinsItem', 'json', $context);
                }
                $object->setTins($values);
                unset($data['tins']);
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
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('contact') && null !== $object->getContact()) {
                $data['contact'] = $this->normalizer->normalize($object->getContact(), 'json', $context);
            }
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            }
            if ($object->isInitialized('tins') && null !== $object->getTins()) {
                $values = [];
                foreach ($object->getTins() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['tins'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipient' => false];
        }
    }
}
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
    class ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescription::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescription::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescription();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('code', $data)) {
                $object->setCode($data['code']);
                unset($data['code']);
            }
            if (\array_key_exists('names', $data)) {
                $values = [];
                foreach ($data['names'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescriptionNamesItem::class, 'json', $context);
                }
                $object->setNames($values);
                unset($data['names']);
            }
            if (\array_key_exists('operatingOrgCodes', $data)) {
                $values_1 = [];
                foreach ($data['operatingOrgCodes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setOperatingOrgCodes($values_1);
                unset($data['operatingOrgCodes']);
            }
            if (\array_key_exists('astraDescription', $data)) {
                $object->setAstraDescription($data['astraDescription']);
                unset($data['astraDescription']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('serviceId', $data)) {
                $object->setServiceId($data['serviceId']);
                unset($data['serviceId']);
            }
            if (\array_key_exists('serviceCategory', $data)) {
                $object->setServiceCategory($data['serviceCategory']);
                unset($data['serviceCategory']);
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
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $values = [];
                foreach ($object->getNames() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['names'] = $values;
            }
            if ($object->isInitialized('operatingOrgCodes') && null !== $object->getOperatingOrgCodes()) {
                $values_1 = [];
                foreach ($object->getOperatingOrgCodes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['operatingOrgCodes'] = $values_1;
            }
            if ($object->isInitialized('astraDescription') && null !== $object->getAstraDescription()) {
                $data['astraDescription'] = $object->getAstraDescription();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('serviceId') && null !== $object->getServiceId()) {
                $data['serviceId'] = $object->getServiceId();
            }
            if ($object->isInitialized('serviceCategory') && null !== $object->getServiceCategory()) {
                $data['serviceCategory'] = $object->getServiceCategory();
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescription::class => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescription::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescription::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescription();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('code', $data)) {
                $object->setCode($data['code']);
                unset($data['code']);
            }
            if (\array_key_exists('names', $data)) {
                $values = [];
                foreach ($data['names'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescriptionNamesItem::class, 'json', $context);
                }
                $object->setNames($values);
                unset($data['names']);
            }
            if (\array_key_exists('operatingOrgCodes', $data)) {
                $values_1 = [];
                foreach ($data['operatingOrgCodes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setOperatingOrgCodes($values_1);
                unset($data['operatingOrgCodes']);
            }
            if (\array_key_exists('astraDescription', $data)) {
                $object->setAstraDescription($data['astraDescription']);
                unset($data['astraDescription']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('serviceId', $data)) {
                $object->setServiceId($data['serviceId']);
                unset($data['serviceId']);
            }
            if (\array_key_exists('serviceCategory', $data)) {
                $object->setServiceCategory($data['serviceCategory']);
                unset($data['serviceCategory']);
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
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $values = [];
                foreach ($object->getNames() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['names'] = $values;
            }
            if ($object->isInitialized('operatingOrgCodes') && null !== $object->getOperatingOrgCodes()) {
                $values_1 = [];
                foreach ($object->getOperatingOrgCodes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['operatingOrgCodes'] = $values_1;
            }
            if ($object->isInitialized('astraDescription') && null !== $object->getAstraDescription()) {
                $data['astraDescription'] = $object->getAstraDescription();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('serviceId') && null !== $object->getServiceId()) {
                $data['serviceId'] = $object->getServiceId();
            }
            if ($object->isInitialized('serviceCategory') && null !== $object->getServiceCategory()) {
                $data['serviceCategory'] = $object->getServiceCategory();
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescription::class => false];
        }
    }
}
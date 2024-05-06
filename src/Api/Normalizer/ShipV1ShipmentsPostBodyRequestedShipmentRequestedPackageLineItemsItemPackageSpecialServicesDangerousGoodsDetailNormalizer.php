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
    class ShipV1ShipmentsPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('cargoAircraftOnly', $data)) {
                $object->setCargoAircraftOnly($data['cargoAircraftOnly']);
                unset($data['cargoAircraftOnly']);
            }
            if (\array_key_exists('accessibility', $data)) {
                $object->setAccessibility($data['accessibility']);
                unset($data['accessibility']);
            }
            if (\array_key_exists('options', $data)) {
                $values = [];
                foreach ($data['options'] as $value) {
                    $values[] = $value;
                }
                $object->setOptions($values);
                unset($data['options']);
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
            if ($object->isInitialized('cargoAircraftOnly') && null !== $object->getCargoAircraftOnly()) {
                $data['cargoAircraftOnly'] = $object->getCargoAircraftOnly();
            }
            $data['accessibility'] = $object->getAccessibility();
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values = [];
                foreach ($object->getOptions() as $value) {
                    $values[] = $value;
                }
                $data['options'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail' => false];
        }
    }
} else {
    class ShipV1ShipmentsPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('cargoAircraftOnly', $data)) {
                $object->setCargoAircraftOnly($data['cargoAircraftOnly']);
                unset($data['cargoAircraftOnly']);
            }
            if (\array_key_exists('accessibility', $data)) {
                $object->setAccessibility($data['accessibility']);
                unset($data['accessibility']);
            }
            if (\array_key_exists('options', $data)) {
                $values = [];
                foreach ($data['options'] as $value) {
                    $values[] = $value;
                }
                $object->setOptions($values);
                unset($data['options']);
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
            if ($object->isInitialized('cargoAircraftOnly') && null !== $object->getCargoAircraftOnly()) {
                $data['cargoAircraftOnly'] = $object->getCargoAircraftOnly();
            }
            $data['accessibility'] = $object->getAccessibility();
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values = [];
                foreach ($object->getOptions() as $value) {
                    $values[] = $value;
                }
                $data['options'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail' => false];
        }
    }
}
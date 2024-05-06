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
    class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPriorityAlertDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPriorityAlertDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPriorityAlertDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPriorityAlertDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('enhancementTypes', $data)) {
                $values = [];
                foreach ($data['enhancementTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setEnhancementTypes($values);
                unset($data['enhancementTypes']);
            }
            if (\array_key_exists('content', $data)) {
                $values_1 = [];
                foreach ($data['content'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setContent($values_1);
                unset($data['content']);
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
            if ($object->isInitialized('enhancementTypes') && null !== $object->getEnhancementTypes()) {
                $values = [];
                foreach ($object->getEnhancementTypes() as $value) {
                    $values[] = $value;
                }
                $data['enhancementTypes'] = $values;
            }
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $values_1 = [];
                foreach ($object->getContent() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['content'] = $values_1;
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPriorityAlertDetail' => false];
        }
    }
} else {
    class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPriorityAlertDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPriorityAlertDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPriorityAlertDetail';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPriorityAlertDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('enhancementTypes', $data)) {
                $values = [];
                foreach ($data['enhancementTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setEnhancementTypes($values);
                unset($data['enhancementTypes']);
            }
            if (\array_key_exists('content', $data)) {
                $values_1 = [];
                foreach ($data['content'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setContent($values_1);
                unset($data['content']);
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
            if ($object->isInitialized('enhancementTypes') && null !== $object->getEnhancementTypes()) {
                $values = [];
                foreach ($object->getEnhancementTypes() as $value) {
                    $values[] = $value;
                }
                $data['enhancementTypes'] = $values;
            }
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $values_1 = [];
                foreach ($object->getContent() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['content'] = $values_1;
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPriorityAlertDetail' => false];
        }
    }
}
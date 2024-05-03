<?php

namespace AntibodiesOnline\FedEx\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use AntibodiesOnline\FedEx\Runtime\Normalizer\CheckArray;
use AntibodiesOnline\FedEx\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemBatteryOptionListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemBatteryOptionListItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemBatteryOptionListItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemBatteryOptionListItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('batteryPackingType', $data)) {
                $object->setBatteryPackingType($data['batteryPackingType']);
                unset($data['batteryPackingType']);
            }
            if (\array_key_exists('batteryRegulatoryType', $data)) {
                $object->setBatteryRegulatoryType($data['batteryRegulatoryType']);
                unset($data['batteryRegulatoryType']);
            }
            if (\array_key_exists('batteryMaterialType', $data)) {
                $object->setBatteryMaterialType($data['batteryMaterialType']);
                unset($data['batteryMaterialType']);
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
            if ($object->isInitialized('batteryPackingType') && null !== $object->getBatteryPackingType()) {
                $data['batteryPackingType'] = $object->getBatteryPackingType();
            }
            if ($object->isInitialized('batteryRegulatoryType') && null !== $object->getBatteryRegulatoryType()) {
                $data['batteryRegulatoryType'] = $object->getBatteryRegulatoryType();
            }
            if ($object->isInitialized('batteryMaterialType') && null !== $object->getBatteryMaterialType()) {
                $data['batteryMaterialType'] = $object->getBatteryMaterialType();
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
            return ['AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemBatteryOptionListItem' => false];
        }
    }
} else {
    class AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemBatteryOptionListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemBatteryOptionListItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemBatteryOptionListItem';
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
            $object = new \AntibodiesOnline\FedEx\Model\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemBatteryOptionListItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('batteryPackingType', $data)) {
                $object->setBatteryPackingType($data['batteryPackingType']);
                unset($data['batteryPackingType']);
            }
            if (\array_key_exists('batteryRegulatoryType', $data)) {
                $object->setBatteryRegulatoryType($data['batteryRegulatoryType']);
                unset($data['batteryRegulatoryType']);
            }
            if (\array_key_exists('batteryMaterialType', $data)) {
                $object->setBatteryMaterialType($data['batteryMaterialType']);
                unset($data['batteryMaterialType']);
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
            if ($object->isInitialized('batteryPackingType') && null !== $object->getBatteryPackingType()) {
                $data['batteryPackingType'] = $object->getBatteryPackingType();
            }
            if ($object->isInitialized('batteryRegulatoryType') && null !== $object->getBatteryRegulatoryType()) {
                $data['batteryRegulatoryType'] = $object->getBatteryRegulatoryType();
            }
            if ($object->isInitialized('batteryMaterialType') && null !== $object->getBatteryMaterialType()) {
                $data['batteryMaterialType'] = $object->getBatteryMaterialType();
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
            return ['AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemBatteryOptionListItem' => false];
        }
    }
}
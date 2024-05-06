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
    class PickupV1FreightPickupsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('associatedAccountNumber', $data)) {
                $object->setAssociatedAccountNumber($data['associatedAccountNumber']);
                unset($data['associatedAccountNumber']);
            }
            if (\array_key_exists('originDetail', $data)) {
                $object->setOriginDetail($data['originDetail']);
                unset($data['originDetail']);
            }
            if (\array_key_exists('totalWeight', $data)) {
                $values = [];
                foreach ($data['totalWeight'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyTotalWeightItem', 'json', $context);
                }
                $object->setTotalWeight($values);
                unset($data['totalWeight']);
            }
            if (\array_key_exists('packageCount', $data)) {
                $object->setPackageCount($data['packageCount']);
                unset($data['packageCount']);
            }
            if (\array_key_exists('remarks', $data)) {
                $object->setRemarks($data['remarks']);
                unset($data['remarks']);
            }
            if (\array_key_exists('countryRelationships', $data)) {
                $object->setCountryRelationships($data['countryRelationships']);
                unset($data['countryRelationships']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('commodityDescription', $data)) {
                $object->setCommodityDescription($data['commodityDescription']);
                unset($data['commodityDescription']);
            }
            if (\array_key_exists('freightPickupDetail', $data)) {
                $object->setFreightPickupDetail($this->denormalizer->denormalize($data['freightPickupDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetail', 'json', $context));
                unset($data['freightPickupDetail']);
            }
            if (\array_key_exists('oversizePackageCount', $data)) {
                $object->setOversizePackageCount($data['oversizePackageCount']);
                unset($data['oversizePackageCount']);
            }
            if (\array_key_exists('pickupNotificationDetail', $data)) {
                $object->setPickupNotificationDetail($data['pickupNotificationDetail']);
                unset($data['pickupNotificationDetail']);
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
            $data['associatedAccountNumber'] = $object->getAssociatedAccountNumber();
            $data['originDetail'] = $object->getOriginDetail();
            if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
                $values = [];
                foreach ($object->getTotalWeight() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['totalWeight'] = $values;
            }
            if ($object->isInitialized('packageCount') && null !== $object->getPackageCount()) {
                $data['packageCount'] = $object->getPackageCount();
            }
            if ($object->isInitialized('remarks') && null !== $object->getRemarks()) {
                $data['remarks'] = $object->getRemarks();
            }
            if ($object->isInitialized('countryRelationships') && null !== $object->getCountryRelationships()) {
                $data['countryRelationships'] = $object->getCountryRelationships();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('commodityDescription') && null !== $object->getCommodityDescription()) {
                $data['commodityDescription'] = $object->getCommodityDescription();
            }
            $data['freightPickupDetail'] = $this->normalizer->normalize($object->getFreightPickupDetail(), 'json', $context);
            if ($object->isInitialized('oversizePackageCount') && null !== $object->getOversizePackageCount()) {
                $data['oversizePackageCount'] = $object->getOversizePackageCount();
            }
            if ($object->isInitialized('pickupNotificationDetail') && null !== $object->getPickupNotificationDetail()) {
                $data['pickupNotificationDetail'] = $object->getPickupNotificationDetail();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBody' => false];
        }
    }
} else {
    class PickupV1FreightPickupsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBody';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('associatedAccountNumber', $data)) {
                $object->setAssociatedAccountNumber($data['associatedAccountNumber']);
                unset($data['associatedAccountNumber']);
            }
            if (\array_key_exists('originDetail', $data)) {
                $object->setOriginDetail($data['originDetail']);
                unset($data['originDetail']);
            }
            if (\array_key_exists('totalWeight', $data)) {
                $values = [];
                foreach ($data['totalWeight'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyTotalWeightItem', 'json', $context);
                }
                $object->setTotalWeight($values);
                unset($data['totalWeight']);
            }
            if (\array_key_exists('packageCount', $data)) {
                $object->setPackageCount($data['packageCount']);
                unset($data['packageCount']);
            }
            if (\array_key_exists('remarks', $data)) {
                $object->setRemarks($data['remarks']);
                unset($data['remarks']);
            }
            if (\array_key_exists('countryRelationships', $data)) {
                $object->setCountryRelationships($data['countryRelationships']);
                unset($data['countryRelationships']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('commodityDescription', $data)) {
                $object->setCommodityDescription($data['commodityDescription']);
                unset($data['commodityDescription']);
            }
            if (\array_key_exists('freightPickupDetail', $data)) {
                $object->setFreightPickupDetail($this->denormalizer->denormalize($data['freightPickupDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetail', 'json', $context));
                unset($data['freightPickupDetail']);
            }
            if (\array_key_exists('oversizePackageCount', $data)) {
                $object->setOversizePackageCount($data['oversizePackageCount']);
                unset($data['oversizePackageCount']);
            }
            if (\array_key_exists('pickupNotificationDetail', $data)) {
                $object->setPickupNotificationDetail($data['pickupNotificationDetail']);
                unset($data['pickupNotificationDetail']);
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
            $data['associatedAccountNumber'] = $object->getAssociatedAccountNumber();
            $data['originDetail'] = $object->getOriginDetail();
            if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
                $values = [];
                foreach ($object->getTotalWeight() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['totalWeight'] = $values;
            }
            if ($object->isInitialized('packageCount') && null !== $object->getPackageCount()) {
                $data['packageCount'] = $object->getPackageCount();
            }
            if ($object->isInitialized('remarks') && null !== $object->getRemarks()) {
                $data['remarks'] = $object->getRemarks();
            }
            if ($object->isInitialized('countryRelationships') && null !== $object->getCountryRelationships()) {
                $data['countryRelationships'] = $object->getCountryRelationships();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('commodityDescription') && null !== $object->getCommodityDescription()) {
                $data['commodityDescription'] = $object->getCommodityDescription();
            }
            $data['freightPickupDetail'] = $this->normalizer->normalize($object->getFreightPickupDetail(), 'json', $context);
            if ($object->isInitialized('oversizePackageCount') && null !== $object->getOversizePackageCount()) {
                $data['oversizePackageCount'] = $object->getOversizePackageCount();
            }
            if ($object->isInitialized('pickupNotificationDetail') && null !== $object->getPickupNotificationDetail()) {
                $data['pickupNotificationDetail'] = $object->getPickupNotificationDetail();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBody' => false];
        }
    }
}
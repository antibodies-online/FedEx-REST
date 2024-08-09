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
    class PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumberNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumber::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumber::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumber();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('trackingQualifier', $data)) {
                $object->setTrackingQualifier($data['trackingQualifier']);
                unset($data['trackingQualifier']);
            }
            if (\array_key_exists('trackingCarrier', $data)) {
                $object->setTrackingCarrier($data['trackingCarrier']);
                unset($data['trackingCarrier']);
            }
            if (\array_key_exists('trackingUniqueId', $data)) {
                $object->setTrackingUniqueId($data['trackingUniqueId']);
                unset($data['trackingUniqueId']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('trackingQualifier') && null !== $object->getTrackingQualifier()) {
                $data['trackingQualifier'] = $object->getTrackingQualifier();
            }
            if ($object->isInitialized('trackingCarrier') && null !== $object->getTrackingCarrier()) {
                $data['trackingCarrier'] = $object->getTrackingCarrier();
            }
            if ($object->isInitialized('trackingUniqueId') && null !== $object->getTrackingUniqueId()) {
                $data['trackingUniqueId'] = $object->getTrackingUniqueId();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumber::class => false];
        }
    }
} else {
    class PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumberNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumber::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumber::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumber();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('trackingQualifier', $data)) {
                $object->setTrackingQualifier($data['trackingQualifier']);
                unset($data['trackingQualifier']);
            }
            if (\array_key_exists('trackingCarrier', $data)) {
                $object->setTrackingCarrier($data['trackingCarrier']);
                unset($data['trackingCarrier']);
            }
            if (\array_key_exists('trackingUniqueId', $data)) {
                $object->setTrackingUniqueId($data['trackingUniqueId']);
                unset($data['trackingUniqueId']);
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
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('trackingQualifier') && null !== $object->getTrackingQualifier()) {
                $data['trackingQualifier'] = $object->getTrackingQualifier();
            }
            if ($object->isInitialized('trackingCarrier') && null !== $object->getTrackingCarrier()) {
                $data['trackingCarrier'] = $object->getTrackingCarrier();
            }
            if ($object->isInitialized('trackingUniqueId') && null !== $object->getTrackingUniqueId()) {
                $data['trackingUniqueId'] = $object->getTrackingUniqueId();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumber::class => false];
        }
    }
}
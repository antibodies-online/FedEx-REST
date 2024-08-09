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
    class TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoPackageIdentifiersItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoPackageIdentifiersItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoPackageIdentifiersItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoPackageIdentifiersItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('value', $data)) {
                $values = [];
                foreach ($data['value'] as $value) {
                    $values[] = $value;
                }
                $object->setValue($values);
                unset($data['value']);
            }
            if (\array_key_exists('trackingNumberUniqueId', $data)) {
                $object->setTrackingNumberUniqueId($data['trackingNumberUniqueId']);
                unset($data['trackingNumberUniqueId']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('value') && null !== $object->getValue()) {
                $values = [];
                foreach ($object->getValue() as $value) {
                    $values[] = $value;
                }
                $data['value'] = $values;
            }
            if ($object->isInitialized('trackingNumberUniqueId') && null !== $object->getTrackingNumberUniqueId()) {
                $data['trackingNumberUniqueId'] = $object->getTrackingNumberUniqueId();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoPackageIdentifiersItem::class => false];
        }
    }
} else {
    class TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoPackageIdentifiersItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoPackageIdentifiersItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoPackageIdentifiersItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoPackageIdentifiersItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('value', $data)) {
                $values = [];
                foreach ($data['value'] as $value) {
                    $values[] = $value;
                }
                $object->setValue($values);
                unset($data['value']);
            }
            if (\array_key_exists('trackingNumberUniqueId', $data)) {
                $object->setTrackingNumberUniqueId($data['trackingNumberUniqueId']);
                unset($data['trackingNumberUniqueId']);
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
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('value') && null !== $object->getValue()) {
                $values = [];
                foreach ($object->getValue() as $value) {
                    $values[] = $value;
                }
                $data['value'] = $values;
            }
            if ($object->isInitialized('trackingNumberUniqueId') && null !== $object->getTrackingNumberUniqueId()) {
                $data['trackingNumberUniqueId'] = $object->getTrackingNumberUniqueId();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoPackageIdentifiersItem::class => false];
        }
    }
}
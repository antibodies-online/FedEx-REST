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
    class TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailAncillaryDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailAncillaryDetailsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailAncillaryDetailsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailAncillaryDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('reason', $data)) {
                $object->setReason($data['reason']);
                unset($data['reason']);
            }
            if (\array_key_exists('reasonDescription', $data)) {
                $object->setReasonDescription($data['reasonDescription']);
                unset($data['reasonDescription']);
            }
            if (\array_key_exists('action', $data)) {
                $object->setAction($data['action']);
                unset($data['action']);
            }
            if (\array_key_exists('actionDescription', $data)) {
                $object->setActionDescription($data['actionDescription']);
                unset($data['actionDescription']);
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
            if ($object->isInitialized('reason') && null !== $object->getReason()) {
                $data['reason'] = $object->getReason();
            }
            if ($object->isInitialized('reasonDescription') && null !== $object->getReasonDescription()) {
                $data['reasonDescription'] = $object->getReasonDescription();
            }
            if ($object->isInitialized('action') && null !== $object->getAction()) {
                $data['action'] = $object->getAction();
            }
            if ($object->isInitialized('actionDescription') && null !== $object->getActionDescription()) {
                $data['actionDescription'] = $object->getActionDescription();
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
            return [\AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailAncillaryDetailsItem::class => false];
        }
    }
} else {
    class TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailAncillaryDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailAncillaryDetailsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailAncillaryDetailsItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailAncillaryDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('reason', $data)) {
                $object->setReason($data['reason']);
                unset($data['reason']);
            }
            if (\array_key_exists('reasonDescription', $data)) {
                $object->setReasonDescription($data['reasonDescription']);
                unset($data['reasonDescription']);
            }
            if (\array_key_exists('action', $data)) {
                $object->setAction($data['action']);
                unset($data['action']);
            }
            if (\array_key_exists('actionDescription', $data)) {
                $object->setActionDescription($data['actionDescription']);
                unset($data['actionDescription']);
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
            if ($object->isInitialized('reason') && null !== $object->getReason()) {
                $data['reason'] = $object->getReason();
            }
            if ($object->isInitialized('reasonDescription') && null !== $object->getReasonDescription()) {
                $data['reasonDescription'] = $object->getReasonDescription();
            }
            if ($object->isInitialized('action') && null !== $object->getAction()) {
                $data['action'] = $object->getAction();
            }
            if ($object->isInitialized('actionDescription') && null !== $object->getActionDescription()) {
                $data['actionDescription'] = $object->getActionDescription();
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
            return [\AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailAncillaryDetailsItem::class => false];
        }
    }
}
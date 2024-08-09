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
    class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('timeStamp', $data)) {
                $object->setTimeStamp($data['timeStamp']);
                unset($data['timeStamp']);
            }
            if (\array_key_exists('consolidationID', $data)) {
                $object->setConsolidationID($data['consolidationID']);
                unset($data['consolidationID']);
            }
            if (\array_key_exists('reasonDetail', $data)) {
                $object->setReasonDetail($this->denormalizer->denormalize($data['reasonDetail'], \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItemReasonDetail::class, 'json', $context));
                unset($data['reasonDetail']);
            }
            if (\array_key_exists('packageCount', $data)) {
                $object->setPackageCount($data['packageCount']);
                unset($data['packageCount']);
            }
            if (\array_key_exists('eventType', $data)) {
                $object->setEventType($data['eventType']);
                unset($data['eventType']);
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
            if ($object->isInitialized('timeStamp') && null !== $object->getTimeStamp()) {
                $data['timeStamp'] = $object->getTimeStamp();
            }
            if ($object->isInitialized('consolidationID') && null !== $object->getConsolidationID()) {
                $data['consolidationID'] = $object->getConsolidationID();
            }
            if ($object->isInitialized('reasonDetail') && null !== $object->getReasonDetail()) {
                $data['reasonDetail'] = $this->normalizer->normalize($object->getReasonDetail(), 'json', $context);
            }
            if ($object->isInitialized('packageCount') && null !== $object->getPackageCount()) {
                $data['packageCount'] = $object->getPackageCount();
            }
            if ($object->isInitialized('eventType') && null !== $object->getEventType()) {
                $data['eventType'] = $object->getEventType();
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
            return [\AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItem::class => false];
        }
    }
} else {
    class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('timeStamp', $data)) {
                $object->setTimeStamp($data['timeStamp']);
                unset($data['timeStamp']);
            }
            if (\array_key_exists('consolidationID', $data)) {
                $object->setConsolidationID($data['consolidationID']);
                unset($data['consolidationID']);
            }
            if (\array_key_exists('reasonDetail', $data)) {
                $object->setReasonDetail($this->denormalizer->denormalize($data['reasonDetail'], \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItemReasonDetail::class, 'json', $context));
                unset($data['reasonDetail']);
            }
            if (\array_key_exists('packageCount', $data)) {
                $object->setPackageCount($data['packageCount']);
                unset($data['packageCount']);
            }
            if (\array_key_exists('eventType', $data)) {
                $object->setEventType($data['eventType']);
                unset($data['eventType']);
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
            if ($object->isInitialized('timeStamp') && null !== $object->getTimeStamp()) {
                $data['timeStamp'] = $object->getTimeStamp();
            }
            if ($object->isInitialized('consolidationID') && null !== $object->getConsolidationID()) {
                $data['consolidationID'] = $object->getConsolidationID();
            }
            if ($object->isInitialized('reasonDetail') && null !== $object->getReasonDetail()) {
                $data['reasonDetail'] = $this->normalizer->normalize($object->getReasonDetail(), 'json', $context);
            }
            if ($object->isInitialized('packageCount') && null !== $object->getPackageCount()) {
                $data['packageCount'] = $object->getPackageCount();
            }
            if ($object->isInitialized('eventType') && null !== $object->getEventType()) {
                $data['eventType'] = $object->getEventType();
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
            return [\AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItem::class => false];
        }
    }
}
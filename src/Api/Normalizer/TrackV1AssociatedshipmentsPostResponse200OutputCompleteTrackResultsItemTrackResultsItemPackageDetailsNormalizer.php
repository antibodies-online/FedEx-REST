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
    class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetails::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetails::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('physicalPackagingType', $data)) {
                $object->setPhysicalPackagingType($data['physicalPackagingType']);
                unset($data['physicalPackagingType']);
            }
            if (\array_key_exists('sequenceNumber', $data)) {
                $object->setSequenceNumber($data['sequenceNumber']);
                unset($data['sequenceNumber']);
            }
            if (\array_key_exists('undeliveredCount', $data)) {
                $object->setUndeliveredCount($data['undeliveredCount']);
                unset($data['undeliveredCount']);
            }
            if (\array_key_exists('packagingDescription', $data)) {
                $object->setPackagingDescription($this->denormalizer->denormalize($data['packagingDescription'], \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsPackagingDescription::class, 'json', $context));
                unset($data['packagingDescription']);
            }
            if (\array_key_exists('count', $data)) {
                $object->setCount($data['count']);
                unset($data['count']);
            }
            if (\array_key_exists('weightAndDimensions', $data)) {
                $object->setWeightAndDimensions($this->denormalizer->denormalize($data['weightAndDimensions'], \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsWeightAndDimensions::class, 'json', $context));
                unset($data['weightAndDimensions']);
            }
            if (\array_key_exists('packageContent', $data)) {
                $values = [];
                foreach ($data['packageContent'] as $value) {
                    $values[] = $value;
                }
                $object->setPackageContent($values);
                unset($data['packageContent']);
            }
            if (\array_key_exists('contentPieceCount', $data)) {
                $object->setContentPieceCount($data['contentPieceCount']);
                unset($data['contentPieceCount']);
            }
            if (\array_key_exists('declaredValue', $data)) {
                $object->setDeclaredValue($this->denormalizer->denormalize($data['declaredValue'], \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsDeclaredValue::class, 'json', $context));
                unset($data['declaredValue']);
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
            if ($object->isInitialized('physicalPackagingType') && null !== $object->getPhysicalPackagingType()) {
                $data['physicalPackagingType'] = $object->getPhysicalPackagingType();
            }
            if ($object->isInitialized('sequenceNumber') && null !== $object->getSequenceNumber()) {
                $data['sequenceNumber'] = $object->getSequenceNumber();
            }
            if ($object->isInitialized('undeliveredCount') && null !== $object->getUndeliveredCount()) {
                $data['undeliveredCount'] = $object->getUndeliveredCount();
            }
            if ($object->isInitialized('packagingDescription') && null !== $object->getPackagingDescription()) {
                $data['packagingDescription'] = $this->normalizer->normalize($object->getPackagingDescription(), 'json', $context);
            }
            if ($object->isInitialized('count') && null !== $object->getCount()) {
                $data['count'] = $object->getCount();
            }
            if ($object->isInitialized('weightAndDimensions') && null !== $object->getWeightAndDimensions()) {
                $data['weightAndDimensions'] = $this->normalizer->normalize($object->getWeightAndDimensions(), 'json', $context);
            }
            if ($object->isInitialized('packageContent') && null !== $object->getPackageContent()) {
                $values = [];
                foreach ($object->getPackageContent() as $value) {
                    $values[] = $value;
                }
                $data['packageContent'] = $values;
            }
            if ($object->isInitialized('contentPieceCount') && null !== $object->getContentPieceCount()) {
                $data['contentPieceCount'] = $object->getContentPieceCount();
            }
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['declaredValue'] = $this->normalizer->normalize($object->getDeclaredValue(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetails::class => false];
        }
    }
} else {
    class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetails::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetails::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('physicalPackagingType', $data)) {
                $object->setPhysicalPackagingType($data['physicalPackagingType']);
                unset($data['physicalPackagingType']);
            }
            if (\array_key_exists('sequenceNumber', $data)) {
                $object->setSequenceNumber($data['sequenceNumber']);
                unset($data['sequenceNumber']);
            }
            if (\array_key_exists('undeliveredCount', $data)) {
                $object->setUndeliveredCount($data['undeliveredCount']);
                unset($data['undeliveredCount']);
            }
            if (\array_key_exists('packagingDescription', $data)) {
                $object->setPackagingDescription($this->denormalizer->denormalize($data['packagingDescription'], \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsPackagingDescription::class, 'json', $context));
                unset($data['packagingDescription']);
            }
            if (\array_key_exists('count', $data)) {
                $object->setCount($data['count']);
                unset($data['count']);
            }
            if (\array_key_exists('weightAndDimensions', $data)) {
                $object->setWeightAndDimensions($this->denormalizer->denormalize($data['weightAndDimensions'], \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsWeightAndDimensions::class, 'json', $context));
                unset($data['weightAndDimensions']);
            }
            if (\array_key_exists('packageContent', $data)) {
                $values = [];
                foreach ($data['packageContent'] as $value) {
                    $values[] = $value;
                }
                $object->setPackageContent($values);
                unset($data['packageContent']);
            }
            if (\array_key_exists('contentPieceCount', $data)) {
                $object->setContentPieceCount($data['contentPieceCount']);
                unset($data['contentPieceCount']);
            }
            if (\array_key_exists('declaredValue', $data)) {
                $object->setDeclaredValue($this->denormalizer->denormalize($data['declaredValue'], \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsDeclaredValue::class, 'json', $context));
                unset($data['declaredValue']);
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
            if ($object->isInitialized('physicalPackagingType') && null !== $object->getPhysicalPackagingType()) {
                $data['physicalPackagingType'] = $object->getPhysicalPackagingType();
            }
            if ($object->isInitialized('sequenceNumber') && null !== $object->getSequenceNumber()) {
                $data['sequenceNumber'] = $object->getSequenceNumber();
            }
            if ($object->isInitialized('undeliveredCount') && null !== $object->getUndeliveredCount()) {
                $data['undeliveredCount'] = $object->getUndeliveredCount();
            }
            if ($object->isInitialized('packagingDescription') && null !== $object->getPackagingDescription()) {
                $data['packagingDescription'] = $this->normalizer->normalize($object->getPackagingDescription(), 'json', $context);
            }
            if ($object->isInitialized('count') && null !== $object->getCount()) {
                $data['count'] = $object->getCount();
            }
            if ($object->isInitialized('weightAndDimensions') && null !== $object->getWeightAndDimensions()) {
                $data['weightAndDimensions'] = $this->normalizer->normalize($object->getWeightAndDimensions(), 'json', $context);
            }
            if ($object->isInitialized('packageContent') && null !== $object->getPackageContent()) {
                $values = [];
                foreach ($object->getPackageContent() as $value) {
                    $values[] = $value;
                }
                $data['packageContent'] = $values;
            }
            if ($object->isInitialized('contentPieceCount') && null !== $object->getContentPieceCount()) {
                $data['contentPieceCount'] = $object->getContentPieceCount();
            }
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['declaredValue'] = $this->normalizer->normalize($object->getDeclaredValue(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetails::class => false];
        }
    }
}
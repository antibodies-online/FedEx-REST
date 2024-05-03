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
    class TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetails';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetails';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contents', $data)) {
                $values = [];
                foreach ($data['contents'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsContentsItem', 'json', $context);
                }
                $object->setContents($values);
                unset($data['contents']);
            }
            if (\array_key_exists('beforePossessionStatus', $data)) {
                $object->setBeforePossessionStatus($data['beforePossessionStatus']);
                unset($data['beforePossessionStatus']);
            }
            if (\array_key_exists('weight', $data)) {
                $values_1 = [];
                foreach ($data['weight'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsWeightItem', 'json', $context);
                }
                $object->setWeight($values_1);
                unset($data['weight']);
            }
            if (\array_key_exists('contentPieceCount', $data)) {
                $object->setContentPieceCount($data['contentPieceCount']);
                unset($data['contentPieceCount']);
            }
            if (\array_key_exists('splitShipments', $data)) {
                $values_2 = [];
                foreach ($data['splitShipments'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsSplitShipmentsItem', 'json', $context);
                }
                $object->setSplitShipments($values_2);
                unset($data['splitShipments']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('contents') && null !== $object->getContents()) {
                $values = [];
                foreach ($object->getContents() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['contents'] = $values;
            }
            if ($object->isInitialized('beforePossessionStatus') && null !== $object->getBeforePossessionStatus()) {
                $data['beforePossessionStatus'] = $object->getBeforePossessionStatus();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $values_1 = [];
                foreach ($object->getWeight() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['weight'] = $values_1;
            }
            if ($object->isInitialized('contentPieceCount') && null !== $object->getContentPieceCount()) {
                $data['contentPieceCount'] = $object->getContentPieceCount();
            }
            if ($object->isInitialized('splitShipments') && null !== $object->getSplitShipments()) {
                $values_2 = [];
                foreach ($object->getSplitShipments() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['splitShipments'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetails' => false];
        }
    }
} else {
    class TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetails';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetails';
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
            $object = new \AntibodiesOnline\FedEx\Model\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contents', $data)) {
                $values = [];
                foreach ($data['contents'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsContentsItem', 'json', $context);
                }
                $object->setContents($values);
                unset($data['contents']);
            }
            if (\array_key_exists('beforePossessionStatus', $data)) {
                $object->setBeforePossessionStatus($data['beforePossessionStatus']);
                unset($data['beforePossessionStatus']);
            }
            if (\array_key_exists('weight', $data)) {
                $values_1 = [];
                foreach ($data['weight'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsWeightItem', 'json', $context);
                }
                $object->setWeight($values_1);
                unset($data['weight']);
            }
            if (\array_key_exists('contentPieceCount', $data)) {
                $object->setContentPieceCount($data['contentPieceCount']);
                unset($data['contentPieceCount']);
            }
            if (\array_key_exists('splitShipments', $data)) {
                $values_2 = [];
                foreach ($data['splitShipments'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsSplitShipmentsItem', 'json', $context);
                }
                $object->setSplitShipments($values_2);
                unset($data['splitShipments']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('contents') && null !== $object->getContents()) {
                $values = [];
                foreach ($object->getContents() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['contents'] = $values;
            }
            if ($object->isInitialized('beforePossessionStatus') && null !== $object->getBeforePossessionStatus()) {
                $data['beforePossessionStatus'] = $object->getBeforePossessionStatus();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $values_1 = [];
                foreach ($object->getWeight() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['weight'] = $values_1;
            }
            if ($object->isInitialized('contentPieceCount') && null !== $object->getContentPieceCount()) {
                $data['contentPieceCount'] = $object->getContentPieceCount();
            }
            if ($object->isInitialized('splitShipments') && null !== $object->getSplitShipments()) {
                $values_2 = [];
                foreach ($object->getSplitShipments() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['splitShipments'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetails' => false];
        }
    }
}
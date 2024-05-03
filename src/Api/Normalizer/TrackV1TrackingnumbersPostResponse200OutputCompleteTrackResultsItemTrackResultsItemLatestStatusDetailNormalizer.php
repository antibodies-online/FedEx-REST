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
    class TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('scanLocation', $data)) {
                $object->setScanLocation($this->denormalizer->denormalize($data['scanLocation'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailScanLocation', 'json', $context));
                unset($data['scanLocation']);
            }
            if (\array_key_exists('code', $data)) {
                $object->setCode($data['code']);
                unset($data['code']);
            }
            if (\array_key_exists('derivedCode', $data)) {
                $object->setDerivedCode($data['derivedCode']);
                unset($data['derivedCode']);
            }
            if (\array_key_exists('ancillaryDetails', $data)) {
                $values = [];
                foreach ($data['ancillaryDetails'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailAncillaryDetailsItem', 'json', $context);
                }
                $object->setAncillaryDetails($values);
                unset($data['ancillaryDetails']);
            }
            if (\array_key_exists('statusByLocale', $data)) {
                $object->setStatusByLocale($data['statusByLocale']);
                unset($data['statusByLocale']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('delayDetail', $data)) {
                $object->setDelayDetail($this->denormalizer->denormalize($data['delayDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailDelayDetail', 'json', $context));
                unset($data['delayDetail']);
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
            if ($object->isInitialized('scanLocation') && null !== $object->getScanLocation()) {
                $data['scanLocation'] = $this->normalizer->normalize($object->getScanLocation(), 'json', $context);
            }
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('derivedCode') && null !== $object->getDerivedCode()) {
                $data['derivedCode'] = $object->getDerivedCode();
            }
            if ($object->isInitialized('ancillaryDetails') && null !== $object->getAncillaryDetails()) {
                $values = [];
                foreach ($object->getAncillaryDetails() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ancillaryDetails'] = $values;
            }
            if ($object->isInitialized('statusByLocale') && null !== $object->getStatusByLocale()) {
                $data['statusByLocale'] = $object->getStatusByLocale();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('delayDetail') && null !== $object->getDelayDetail()) {
                $data['delayDetail'] = $this->normalizer->normalize($object->getDelayDetail(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetail' => false];
        }
    }
} else {
    class TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetail';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('scanLocation', $data)) {
                $object->setScanLocation($this->denormalizer->denormalize($data['scanLocation'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailScanLocation', 'json', $context));
                unset($data['scanLocation']);
            }
            if (\array_key_exists('code', $data)) {
                $object->setCode($data['code']);
                unset($data['code']);
            }
            if (\array_key_exists('derivedCode', $data)) {
                $object->setDerivedCode($data['derivedCode']);
                unset($data['derivedCode']);
            }
            if (\array_key_exists('ancillaryDetails', $data)) {
                $values = [];
                foreach ($data['ancillaryDetails'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailAncillaryDetailsItem', 'json', $context);
                }
                $object->setAncillaryDetails($values);
                unset($data['ancillaryDetails']);
            }
            if (\array_key_exists('statusByLocale', $data)) {
                $object->setStatusByLocale($data['statusByLocale']);
                unset($data['statusByLocale']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('delayDetail', $data)) {
                $object->setDelayDetail($this->denormalizer->denormalize($data['delayDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailDelayDetail', 'json', $context));
                unset($data['delayDetail']);
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
            if ($object->isInitialized('scanLocation') && null !== $object->getScanLocation()) {
                $data['scanLocation'] = $this->normalizer->normalize($object->getScanLocation(), 'json', $context);
            }
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('derivedCode') && null !== $object->getDerivedCode()) {
                $data['derivedCode'] = $object->getDerivedCode();
            }
            if ($object->isInitialized('ancillaryDetails') && null !== $object->getAncillaryDetails()) {
                $values = [];
                foreach ($object->getAncillaryDetails() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ancillaryDetails'] = $values;
            }
            if ($object->isInitialized('statusByLocale') && null !== $object->getStatusByLocale()) {
                $data['statusByLocale'] = $object->getStatusByLocale();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('delayDetail') && null !== $object->getDelayDetail()) {
                $data['delayDetail'] = $this->normalizer->normalize($object->getDelayDetail(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetail' => false];
        }
    }
}
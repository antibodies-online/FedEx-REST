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
    class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
                unset($data['date']);
            }
            if (\array_key_exists('derivedStatus', $data)) {
                $object->setDerivedStatus($data['derivedStatus']);
                unset($data['derivedStatus']);
            }
            if (\array_key_exists('scanLocation', $data)) {
                $object->setScanLocation($this->denormalizer->denormalize($data['scanLocation'], 'AntibodiesOnline\\FedEx\\Model\\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemScanLocation', 'json', $context));
                unset($data['scanLocation']);
            }
            if (\array_key_exists('locationId', $data)) {
                $object->setLocationId($data['locationId']);
                unset($data['locationId']);
            }
            if (\array_key_exists('locationType', $data)) {
                $object->setLocationType($data['locationType']);
                unset($data['locationType']);
            }
            if (\array_key_exists('exceptionDescription', $data)) {
                $object->setExceptionDescription($data['exceptionDescription']);
                unset($data['exceptionDescription']);
            }
            if (\array_key_exists('eventDescription', $data)) {
                $object->setEventDescription($data['eventDescription']);
                unset($data['eventDescription']);
            }
            if (\array_key_exists('eventType', $data)) {
                $object->setEventType($data['eventType']);
                unset($data['eventType']);
            }
            if (\array_key_exists('derivedStatusCode', $data)) {
                $object->setDerivedStatusCode($data['derivedStatusCode']);
                unset($data['derivedStatusCode']);
            }
            if (\array_key_exists('exceptionCode', $data)) {
                $object->setExceptionCode($data['exceptionCode']);
                unset($data['exceptionCode']);
            }
            if (\array_key_exists('delayDetail', $data)) {
                $object->setDelayDetail($this->denormalizer->denormalize($data['delayDetail'], 'AntibodiesOnline\\FedEx\\Model\\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemDelayDetail', 'json', $context));
                unset($data['delayDetail']);
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
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }
            if ($object->isInitialized('derivedStatus') && null !== $object->getDerivedStatus()) {
                $data['derivedStatus'] = $object->getDerivedStatus();
            }
            if ($object->isInitialized('scanLocation') && null !== $object->getScanLocation()) {
                $data['scanLocation'] = $this->normalizer->normalize($object->getScanLocation(), 'json', $context);
            }
            if ($object->isInitialized('locationId') && null !== $object->getLocationId()) {
                $data['locationId'] = $object->getLocationId();
            }
            if ($object->isInitialized('locationType') && null !== $object->getLocationType()) {
                $data['locationType'] = $object->getLocationType();
            }
            if ($object->isInitialized('exceptionDescription') && null !== $object->getExceptionDescription()) {
                $data['exceptionDescription'] = $object->getExceptionDescription();
            }
            if ($object->isInitialized('eventDescription') && null !== $object->getEventDescription()) {
                $data['eventDescription'] = $object->getEventDescription();
            }
            if ($object->isInitialized('eventType') && null !== $object->getEventType()) {
                $data['eventType'] = $object->getEventType();
            }
            if ($object->isInitialized('derivedStatusCode') && null !== $object->getDerivedStatusCode()) {
                $data['derivedStatusCode'] = $object->getDerivedStatusCode();
            }
            if ($object->isInitialized('exceptionCode') && null !== $object->getExceptionCode()) {
                $data['exceptionCode'] = $object->getExceptionCode();
            }
            if ($object->isInitialized('delayDetail') && null !== $object->getDelayDetail()) {
                $data['delayDetail'] = $this->normalizer->normalize($object->getDelayDetail(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Model\\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItem' => false];
        }
    }
} else {
    class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItem';
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
            $object = new \AntibodiesOnline\FedEx\Model\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
                unset($data['date']);
            }
            if (\array_key_exists('derivedStatus', $data)) {
                $object->setDerivedStatus($data['derivedStatus']);
                unset($data['derivedStatus']);
            }
            if (\array_key_exists('scanLocation', $data)) {
                $object->setScanLocation($this->denormalizer->denormalize($data['scanLocation'], 'AntibodiesOnline\\FedEx\\Model\\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemScanLocation', 'json', $context));
                unset($data['scanLocation']);
            }
            if (\array_key_exists('locationId', $data)) {
                $object->setLocationId($data['locationId']);
                unset($data['locationId']);
            }
            if (\array_key_exists('locationType', $data)) {
                $object->setLocationType($data['locationType']);
                unset($data['locationType']);
            }
            if (\array_key_exists('exceptionDescription', $data)) {
                $object->setExceptionDescription($data['exceptionDescription']);
                unset($data['exceptionDescription']);
            }
            if (\array_key_exists('eventDescription', $data)) {
                $object->setEventDescription($data['eventDescription']);
                unset($data['eventDescription']);
            }
            if (\array_key_exists('eventType', $data)) {
                $object->setEventType($data['eventType']);
                unset($data['eventType']);
            }
            if (\array_key_exists('derivedStatusCode', $data)) {
                $object->setDerivedStatusCode($data['derivedStatusCode']);
                unset($data['derivedStatusCode']);
            }
            if (\array_key_exists('exceptionCode', $data)) {
                $object->setExceptionCode($data['exceptionCode']);
                unset($data['exceptionCode']);
            }
            if (\array_key_exists('delayDetail', $data)) {
                $object->setDelayDetail($this->denormalizer->denormalize($data['delayDetail'], 'AntibodiesOnline\\FedEx\\Model\\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemDelayDetail', 'json', $context));
                unset($data['delayDetail']);
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
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }
            if ($object->isInitialized('derivedStatus') && null !== $object->getDerivedStatus()) {
                $data['derivedStatus'] = $object->getDerivedStatus();
            }
            if ($object->isInitialized('scanLocation') && null !== $object->getScanLocation()) {
                $data['scanLocation'] = $this->normalizer->normalize($object->getScanLocation(), 'json', $context);
            }
            if ($object->isInitialized('locationId') && null !== $object->getLocationId()) {
                $data['locationId'] = $object->getLocationId();
            }
            if ($object->isInitialized('locationType') && null !== $object->getLocationType()) {
                $data['locationType'] = $object->getLocationType();
            }
            if ($object->isInitialized('exceptionDescription') && null !== $object->getExceptionDescription()) {
                $data['exceptionDescription'] = $object->getExceptionDescription();
            }
            if ($object->isInitialized('eventDescription') && null !== $object->getEventDescription()) {
                $data['eventDescription'] = $object->getEventDescription();
            }
            if ($object->isInitialized('eventType') && null !== $object->getEventType()) {
                $data['eventType'] = $object->getEventType();
            }
            if ($object->isInitialized('derivedStatusCode') && null !== $object->getDerivedStatusCode()) {
                $data['derivedStatusCode'] = $object->getDerivedStatusCode();
            }
            if ($object->isInitialized('exceptionCode') && null !== $object->getExceptionCode()) {
                $data['exceptionCode'] = $object->getExceptionCode();
            }
            if ($object->isInitialized('delayDetail') && null !== $object->getDelayDetail()) {
                $data['delayDetail'] = $this->normalizer->normalize($object->getDelayDetail(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Model\\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItem' => false];
        }
    }
}
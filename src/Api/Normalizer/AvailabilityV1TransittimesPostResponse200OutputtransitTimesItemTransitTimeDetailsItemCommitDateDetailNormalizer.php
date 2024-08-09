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
    class AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dayOfWeek', $data)) {
                $object->setDayOfWeek($data['dayOfWeek']);
                unset($data['dayOfWeek']);
            }
            if (\array_key_exists('time', $data)) {
                $object->setTime($data['time']);
                unset($data['time']);
            }
            if (\array_key_exists('day', $data)) {
                $object->setDay($data['day']);
                unset($data['day']);
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
            if ($object->isInitialized('dayOfWeek') && null !== $object->getDayOfWeek()) {
                $data['dayOfWeek'] = $object->getDayOfWeek();
            }
            if ($object->isInitialized('time') && null !== $object->getTime()) {
                $data['time'] = $object->getTime();
            }
            if ($object->isInitialized('day') && null !== $object->getDay()) {
                $data['day'] = $object->getDay();
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
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetail::class => false];
        }
    }
} else {
    class AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetail::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dayOfWeek', $data)) {
                $object->setDayOfWeek($data['dayOfWeek']);
                unset($data['dayOfWeek']);
            }
            if (\array_key_exists('time', $data)) {
                $object->setTime($data['time']);
                unset($data['time']);
            }
            if (\array_key_exists('day', $data)) {
                $object->setDay($data['day']);
                unset($data['day']);
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
            if ($object->isInitialized('dayOfWeek') && null !== $object->getDayOfWeek()) {
                $data['dayOfWeek'] = $object->getDayOfWeek();
            }
            if ($object->isInitialized('time') && null !== $object->getTime()) {
                $data['time'] = $object->getTime();
            }
            if ($object->isInitialized('day') && null !== $object->getDay()) {
                $data['day'] = $object->getDay();
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
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetail::class => false];
        }
    }
}
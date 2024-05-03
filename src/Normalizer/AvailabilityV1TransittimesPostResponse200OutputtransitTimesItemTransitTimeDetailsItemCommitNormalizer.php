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
    class AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommit';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommit';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommit();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('brokerCommitTimestamp', $data)) {
                $object->setBrokerCommitTimestamp($data['brokerCommitTimestamp']);
                unset($data['brokerCommitTimestamp']);
            }
            if (\array_key_exists('cutOffTime', $data)) {
                $object->setCutOffTime($data['cutOffTime']);
                unset($data['cutOffTime']);
            }
            if (\array_key_exists('commodityName', $data)) {
                $object->setCommodityName($data['commodityName']);
                unset($data['commodityName']);
            }
            if (\array_key_exists('transitDays', $data)) {
                $object->setTransitDays($this->denormalizer->denormalize($data['transitDays'], 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitTransitDays', 'json', $context));
                unset($data['transitDays']);
            }
            if (\array_key_exists('commitMessageDetails', $data)) {
                $object->setCommitMessageDetails($data['commitMessageDetails']);
                unset($data['commitMessageDetails']);
            }
            if (\array_key_exists('derivedDestinationDetail', $data)) {
                $object->setDerivedDestinationDetail($this->denormalizer->denormalize($data['derivedDestinationDetail'], 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDerivedDestinationDetail', 'json', $context));
                unset($data['derivedDestinationDetail']);
            }
            if (\array_key_exists('dateDetail', $data)) {
                $object->setDateDetail($this->denormalizer->denormalize($data['dateDetail'], 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetail', 'json', $context));
                unset($data['dateDetail']);
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
            if ($object->isInitialized('brokerCommitTimestamp') && null !== $object->getBrokerCommitTimestamp()) {
                $data['brokerCommitTimestamp'] = $object->getBrokerCommitTimestamp();
            }
            if ($object->isInitialized('cutOffTime') && null !== $object->getCutOffTime()) {
                $data['cutOffTime'] = $object->getCutOffTime();
            }
            if ($object->isInitialized('commodityName') && null !== $object->getCommodityName()) {
                $data['commodityName'] = $object->getCommodityName();
            }
            if ($object->isInitialized('transitDays') && null !== $object->getTransitDays()) {
                $data['transitDays'] = $this->normalizer->normalize($object->getTransitDays(), 'json', $context);
            }
            if ($object->isInitialized('commitMessageDetails') && null !== $object->getCommitMessageDetails()) {
                $data['commitMessageDetails'] = $object->getCommitMessageDetails();
            }
            if ($object->isInitialized('derivedDestinationDetail') && null !== $object->getDerivedDestinationDetail()) {
                $data['derivedDestinationDetail'] = $this->normalizer->normalize($object->getDerivedDestinationDetail(), 'json', $context);
            }
            if ($object->isInitialized('dateDetail') && null !== $object->getDateDetail()) {
                $data['dateDetail'] = $this->normalizer->normalize($object->getDateDetail(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Model\\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommit' => false];
        }
    }
} else {
    class AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommit';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommit';
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
            $object = new \AntibodiesOnline\FedEx\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommit();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('brokerCommitTimestamp', $data)) {
                $object->setBrokerCommitTimestamp($data['brokerCommitTimestamp']);
                unset($data['brokerCommitTimestamp']);
            }
            if (\array_key_exists('cutOffTime', $data)) {
                $object->setCutOffTime($data['cutOffTime']);
                unset($data['cutOffTime']);
            }
            if (\array_key_exists('commodityName', $data)) {
                $object->setCommodityName($data['commodityName']);
                unset($data['commodityName']);
            }
            if (\array_key_exists('transitDays', $data)) {
                $object->setTransitDays($this->denormalizer->denormalize($data['transitDays'], 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitTransitDays', 'json', $context));
                unset($data['transitDays']);
            }
            if (\array_key_exists('commitMessageDetails', $data)) {
                $object->setCommitMessageDetails($data['commitMessageDetails']);
                unset($data['commitMessageDetails']);
            }
            if (\array_key_exists('derivedDestinationDetail', $data)) {
                $object->setDerivedDestinationDetail($this->denormalizer->denormalize($data['derivedDestinationDetail'], 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDerivedDestinationDetail', 'json', $context));
                unset($data['derivedDestinationDetail']);
            }
            if (\array_key_exists('dateDetail', $data)) {
                $object->setDateDetail($this->denormalizer->denormalize($data['dateDetail'], 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetail', 'json', $context));
                unset($data['dateDetail']);
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
            if ($object->isInitialized('brokerCommitTimestamp') && null !== $object->getBrokerCommitTimestamp()) {
                $data['brokerCommitTimestamp'] = $object->getBrokerCommitTimestamp();
            }
            if ($object->isInitialized('cutOffTime') && null !== $object->getCutOffTime()) {
                $data['cutOffTime'] = $object->getCutOffTime();
            }
            if ($object->isInitialized('commodityName') && null !== $object->getCommodityName()) {
                $data['commodityName'] = $object->getCommodityName();
            }
            if ($object->isInitialized('transitDays') && null !== $object->getTransitDays()) {
                $data['transitDays'] = $this->normalizer->normalize($object->getTransitDays(), 'json', $context);
            }
            if ($object->isInitialized('commitMessageDetails') && null !== $object->getCommitMessageDetails()) {
                $data['commitMessageDetails'] = $object->getCommitMessageDetails();
            }
            if ($object->isInitialized('derivedDestinationDetail') && null !== $object->getDerivedDestinationDetail()) {
                $data['derivedDestinationDetail'] = $this->normalizer->normalize($object->getDerivedDestinationDetail(), 'json', $context);
            }
            if ($object->isInitialized('dateDetail') && null !== $object->getDateDetail()) {
                $data['dateDetail'] = $this->normalizer->normalize($object->getDateDetail(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Model\\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommit' => false];
        }
    }
}
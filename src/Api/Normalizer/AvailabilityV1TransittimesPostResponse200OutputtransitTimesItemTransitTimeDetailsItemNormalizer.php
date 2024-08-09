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
    class AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('customerMessages', $data)) {
                $values = [];
                foreach ($data['customerMessages'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCustomerMessagesItem::class, 'json', $context);
                }
                $object->setCustomerMessages($values);
                unset($data['customerMessages']);
            }
            if (\array_key_exists('distance', $data)) {
                $object->setDistance($this->denormalizer->denormalize($data['distance'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDistance::class, 'json', $context));
                unset($data['distance']);
            }
            if (\array_key_exists('commit', $data)) {
                $object->setCommit($this->denormalizer->denormalize($data['commit'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommit::class, 'json', $context));
                unset($data['commit']);
            }
            if (\array_key_exists('destinationLocation', $data)) {
                $object->setDestinationLocation($this->denormalizer->denormalize($data['destinationLocation'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDestinationLocation::class, 'json', $context));
                unset($data['destinationLocation']);
            }
            if (\array_key_exists('serviceName', $data)) {
                $object->setServiceName($data['serviceName']);
                unset($data['serviceName']);
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
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('customerMessages') && null !== $object->getCustomerMessages()) {
                $values = [];
                foreach ($object->getCustomerMessages() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customerMessages'] = $values;
            }
            if ($object->isInitialized('distance') && null !== $object->getDistance()) {
                $data['distance'] = $this->normalizer->normalize($object->getDistance(), 'json', $context);
            }
            if ($object->isInitialized('commit') && null !== $object->getCommit()) {
                $data['commit'] = $this->normalizer->normalize($object->getCommit(), 'json', $context);
            }
            if ($object->isInitialized('destinationLocation') && null !== $object->getDestinationLocation()) {
                $data['destinationLocation'] = $this->normalizer->normalize($object->getDestinationLocation(), 'json', $context);
            }
            if ($object->isInitialized('serviceName') && null !== $object->getServiceName()) {
                $data['serviceName'] = $object->getServiceName();
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
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItem::class => false];
        }
    }
} else {
    class AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('customerMessages', $data)) {
                $values = [];
                foreach ($data['customerMessages'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCustomerMessagesItem::class, 'json', $context);
                }
                $object->setCustomerMessages($values);
                unset($data['customerMessages']);
            }
            if (\array_key_exists('distance', $data)) {
                $object->setDistance($this->denormalizer->denormalize($data['distance'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDistance::class, 'json', $context));
                unset($data['distance']);
            }
            if (\array_key_exists('commit', $data)) {
                $object->setCommit($this->denormalizer->denormalize($data['commit'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommit::class, 'json', $context));
                unset($data['commit']);
            }
            if (\array_key_exists('destinationLocation', $data)) {
                $object->setDestinationLocation($this->denormalizer->denormalize($data['destinationLocation'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDestinationLocation::class, 'json', $context));
                unset($data['destinationLocation']);
            }
            if (\array_key_exists('serviceName', $data)) {
                $object->setServiceName($data['serviceName']);
                unset($data['serviceName']);
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
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('customerMessages') && null !== $object->getCustomerMessages()) {
                $values = [];
                foreach ($object->getCustomerMessages() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customerMessages'] = $values;
            }
            if ($object->isInitialized('distance') && null !== $object->getDistance()) {
                $data['distance'] = $this->normalizer->normalize($object->getDistance(), 'json', $context);
            }
            if ($object->isInitialized('commit') && null !== $object->getCommit()) {
                $data['commit'] = $this->normalizer->normalize($object->getCommit(), 'json', $context);
            }
            if ($object->isInitialized('destinationLocation') && null !== $object->getDestinationLocation()) {
                $data['destinationLocation'] = $this->normalizer->normalize($object->getDestinationLocation(), 'json', $context);
            }
            if ($object->isInitialized('serviceName') && null !== $object->getServiceName()) {
                $data['serviceName'] = $object->getServiceName();
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
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItem::class => false];
        }
    }
}
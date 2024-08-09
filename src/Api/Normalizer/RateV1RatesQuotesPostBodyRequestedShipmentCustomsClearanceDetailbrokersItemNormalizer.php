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
    class RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('broker', $data)) {
                $object->setBroker($this->denormalizer->denormalize($data['broker'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItemBroker::class, 'json', $context));
                unset($data['broker']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('brokerCommitTimestamp', $data)) {
                $object->setBrokerCommitTimestamp($data['brokerCommitTimestamp']);
                unset($data['brokerCommitTimestamp']);
            }
            if (\array_key_exists('brokerCommitDayOfWeek', $data)) {
                $object->setBrokerCommitDayOfWeek($data['brokerCommitDayOfWeek']);
                unset($data['brokerCommitDayOfWeek']);
            }
            if (\array_key_exists('brokerLocationId', $data)) {
                $object->setBrokerLocationId($data['brokerLocationId']);
                unset($data['brokerLocationId']);
            }
            if (\array_key_exists('brokerAddress', $data)) {
                $object->setBrokerAddress($this->denormalizer->denormalize($data['brokerAddress'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItemBrokerAddress::class, 'json', $context));
                unset($data['brokerAddress']);
            }
            if (\array_key_exists('brokerToDestinationDays', $data)) {
                $object->setBrokerToDestinationDays($data['brokerToDestinationDays']);
                unset($data['brokerToDestinationDays']);
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
            $data['broker'] = $this->normalizer->normalize($object->getBroker(), 'json', $context);
            $data['type'] = $object->getType();
            if ($object->isInitialized('brokerCommitTimestamp') && null !== $object->getBrokerCommitTimestamp()) {
                $data['brokerCommitTimestamp'] = $object->getBrokerCommitTimestamp();
            }
            if ($object->isInitialized('brokerCommitDayOfWeek') && null !== $object->getBrokerCommitDayOfWeek()) {
                $data['brokerCommitDayOfWeek'] = $object->getBrokerCommitDayOfWeek();
            }
            if ($object->isInitialized('brokerLocationId') && null !== $object->getBrokerLocationId()) {
                $data['brokerLocationId'] = $object->getBrokerLocationId();
            }
            if ($object->isInitialized('brokerAddress') && null !== $object->getBrokerAddress()) {
                $data['brokerAddress'] = $this->normalizer->normalize($object->getBrokerAddress(), 'json', $context);
            }
            if ($object->isInitialized('brokerToDestinationDays') && null !== $object->getBrokerToDestinationDays()) {
                $data['brokerToDestinationDays'] = $object->getBrokerToDestinationDays();
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItem::class => false];
        }
    }
} else {
    class RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('broker', $data)) {
                $object->setBroker($this->denormalizer->denormalize($data['broker'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItemBroker::class, 'json', $context));
                unset($data['broker']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('brokerCommitTimestamp', $data)) {
                $object->setBrokerCommitTimestamp($data['brokerCommitTimestamp']);
                unset($data['brokerCommitTimestamp']);
            }
            if (\array_key_exists('brokerCommitDayOfWeek', $data)) {
                $object->setBrokerCommitDayOfWeek($data['brokerCommitDayOfWeek']);
                unset($data['brokerCommitDayOfWeek']);
            }
            if (\array_key_exists('brokerLocationId', $data)) {
                $object->setBrokerLocationId($data['brokerLocationId']);
                unset($data['brokerLocationId']);
            }
            if (\array_key_exists('brokerAddress', $data)) {
                $object->setBrokerAddress($this->denormalizer->denormalize($data['brokerAddress'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItemBrokerAddress::class, 'json', $context));
                unset($data['brokerAddress']);
            }
            if (\array_key_exists('brokerToDestinationDays', $data)) {
                $object->setBrokerToDestinationDays($data['brokerToDestinationDays']);
                unset($data['brokerToDestinationDays']);
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
            $data['broker'] = $this->normalizer->normalize($object->getBroker(), 'json', $context);
            $data['type'] = $object->getType();
            if ($object->isInitialized('brokerCommitTimestamp') && null !== $object->getBrokerCommitTimestamp()) {
                $data['brokerCommitTimestamp'] = $object->getBrokerCommitTimestamp();
            }
            if ($object->isInitialized('brokerCommitDayOfWeek') && null !== $object->getBrokerCommitDayOfWeek()) {
                $data['brokerCommitDayOfWeek'] = $object->getBrokerCommitDayOfWeek();
            }
            if ($object->isInitialized('brokerLocationId') && null !== $object->getBrokerLocationId()) {
                $data['brokerLocationId'] = $object->getBrokerLocationId();
            }
            if ($object->isInitialized('brokerAddress') && null !== $object->getBrokerAddress()) {
                $data['brokerAddress'] = $this->normalizer->normalize($object->getBrokerAddress(), 'json', $context);
            }
            if ($object->isInitialized('brokerToDestinationDays') && null !== $object->getBrokerToDestinationDays()) {
                $data['brokerToDestinationDays'] = $object->getBrokerToDestinationDays();
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItem::class => false];
        }
    }
}
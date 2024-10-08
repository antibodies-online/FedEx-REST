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
    class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('distance', $data)) {
                $object->setDistance($this->denormalizer->denormalize($data['distance'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDistance::class, 'json', $context));
                unset($data['distance']);
            }
            if (\array_key_exists('destinationLocation', $data)) {
                $object->setDestinationLocation($this->denormalizer->denormalize($data['destinationLocation'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocation::class, 'json', $context));
                unset($data['destinationLocation']);
            }
            if (\array_key_exists('originLocation', $data)) {
                $object->setOriginLocation($this->denormalizer->denormalize($data['originLocation'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocation::class, 'json', $context));
                unset($data['originLocation']);
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
            if ($object->isInitialized('distance') && null !== $object->getDistance()) {
                $data['distance'] = $this->normalizer->normalize($object->getDistance(), 'json', $context);
            }
            if ($object->isInitialized('destinationLocation') && null !== $object->getDestinationLocation()) {
                $data['destinationLocation'] = $this->normalizer->normalize($object->getDestinationLocation(), 'json', $context);
            }
            if ($object->isInitialized('originLocation') && null !== $object->getOriginLocation()) {
                $data['originLocation'] = $this->normalizer->normalize($object->getOriginLocation(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItem::class => false];
        }
    }
} else {
    class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('distance', $data)) {
                $object->setDistance($this->denormalizer->denormalize($data['distance'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDistance::class, 'json', $context));
                unset($data['distance']);
            }
            if (\array_key_exists('destinationLocation', $data)) {
                $object->setDestinationLocation($this->denormalizer->denormalize($data['destinationLocation'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocation::class, 'json', $context));
                unset($data['destinationLocation']);
            }
            if (\array_key_exists('originLocation', $data)) {
                $object->setOriginLocation($this->denormalizer->denormalize($data['originLocation'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocation::class, 'json', $context));
                unset($data['originLocation']);
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
            if ($object->isInitialized('distance') && null !== $object->getDistance()) {
                $data['distance'] = $this->normalizer->normalize($object->getDistance(), 'json', $context);
            }
            if ($object->isInitialized('destinationLocation') && null !== $object->getDestinationLocation()) {
                $data['destinationLocation'] = $this->normalizer->normalize($object->getDestinationLocation(), 'json', $context);
            }
            if ($object->isInitialized('originLocation') && null !== $object->getOriginLocation()) {
                $data['originLocation'] = $this->normalizer->normalize($object->getOriginLocation(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItem::class => false];
        }
    }
}
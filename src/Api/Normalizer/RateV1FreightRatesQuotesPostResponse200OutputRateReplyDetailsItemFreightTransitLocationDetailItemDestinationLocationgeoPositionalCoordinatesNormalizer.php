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
    class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationgeoPositionalCoordinatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationgeoPositionalCoordinates::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationgeoPositionalCoordinates::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationgeoPositionalCoordinates();
            if (\array_key_exists('latitude', $data) && \is_int($data['latitude'])) {
                $data['latitude'] = (double) $data['latitude'];
            }
            if (\array_key_exists('longitude', $data) && \is_int($data['longitude'])) {
                $data['longitude'] = (double) $data['longitude'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('latitude', $data)) {
                $object->setLatitude($data['latitude']);
                unset($data['latitude']);
            }
            if (\array_key_exists('longitude', $data)) {
                $object->setLongitude($data['longitude']);
                unset($data['longitude']);
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
            if ($object->isInitialized('latitude') && null !== $object->getLatitude()) {
                $data['latitude'] = $object->getLatitude();
            }
            if ($object->isInitialized('longitude') && null !== $object->getLongitude()) {
                $data['longitude'] = $object->getLongitude();
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationgeoPositionalCoordinates::class => false];
        }
    }
} else {
    class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationgeoPositionalCoordinatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationgeoPositionalCoordinates::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationgeoPositionalCoordinates::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationgeoPositionalCoordinates();
            if (\array_key_exists('latitude', $data) && \is_int($data['latitude'])) {
                $data['latitude'] = (double) $data['latitude'];
            }
            if (\array_key_exists('longitude', $data) && \is_int($data['longitude'])) {
                $data['longitude'] = (double) $data['longitude'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('latitude', $data)) {
                $object->setLatitude($data['latitude']);
                unset($data['latitude']);
            }
            if (\array_key_exists('longitude', $data)) {
                $object->setLongitude($data['longitude']);
                unset($data['longitude']);
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
            if ($object->isInitialized('latitude') && null !== $object->getLatitude()) {
                $data['latitude'] = $object->getLatitude();
            }
            if ($object->isInitialized('longitude') && null !== $object->getLongitude()) {
                $data['longitude'] = $object->getLongitude();
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationgeoPositionalCoordinates::class => false];
        }
    }
}
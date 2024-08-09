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
    class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocation::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocation::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('geoPositionalCoordinates', $data)) {
                $object->setGeoPositionalCoordinates($this->denormalizer->denormalize($data['geoPositionalCoordinates'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationgeoPositionalCoordinates::class, 'json', $context));
                unset($data['geoPositionalCoordinates']);
            }
            if (\array_key_exists('storeHours', $data)) {
                $values = [];
                foreach ($data['storeHours'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationstoreHoursItem::class, 'json', $context);
                }
                $object->setStoreHours($values);
                unset($data['storeHours']);
            }
            if (\array_key_exists('locationId', $data)) {
                $object->setLocationId($data['locationId']);
                unset($data['locationId']);
            }
            if (\array_key_exists('specialInstructions', $data)) {
                $object->setSpecialInstructions($data['specialInstructions']);
                unset($data['specialInstructions']);
            }
            if (\array_key_exists('locationAttributeTypes', $data)) {
                $values_1 = [];
                foreach ($data['locationAttributeTypes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setLocationAttributeTypes($values_1);
                unset($data['locationAttributeTypes']);
            }
            if (\array_key_exists('mapURL', $data)) {
                $object->setMapURL($data['mapURL']);
                unset($data['mapURL']);
            }
            if (\array_key_exists('locationType', $data)) {
                $object->setLocationType($data['locationType']);
                unset($data['locationType']);
            }
            if (\array_key_exists('contactAndAddress', $data)) {
                $object->setContactAndAddress($this->denormalizer->denormalize($data['contactAndAddress'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcontactAndAddress::class, 'json', $context));
                unset($data['contactAndAddress']);
            }
            if (\array_key_exists('carrierDetails', $data)) {
                $values_2 = [];
                foreach ($data['carrierDetails'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItem::class, 'json', $context);
                }
                $object->setCarrierDetails($values_2);
                unset($data['carrierDetails']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('geoPositionalCoordinates') && null !== $object->getGeoPositionalCoordinates()) {
                $data['geoPositionalCoordinates'] = $this->normalizer->normalize($object->getGeoPositionalCoordinates(), 'json', $context);
            }
            if ($object->isInitialized('storeHours') && null !== $object->getStoreHours()) {
                $values = [];
                foreach ($object->getStoreHours() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['storeHours'] = $values;
            }
            if ($object->isInitialized('locationId') && null !== $object->getLocationId()) {
                $data['locationId'] = $object->getLocationId();
            }
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $data['specialInstructions'] = $object->getSpecialInstructions();
            }
            if ($object->isInitialized('locationAttributeTypes') && null !== $object->getLocationAttributeTypes()) {
                $values_1 = [];
                foreach ($object->getLocationAttributeTypes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['locationAttributeTypes'] = $values_1;
            }
            if ($object->isInitialized('mapURL') && null !== $object->getMapURL()) {
                $data['mapURL'] = $object->getMapURL();
            }
            if ($object->isInitialized('locationType') && null !== $object->getLocationType()) {
                $data['locationType'] = $object->getLocationType();
            }
            if ($object->isInitialized('contactAndAddress') && null !== $object->getContactAndAddress()) {
                $data['contactAndAddress'] = $this->normalizer->normalize($object->getContactAndAddress(), 'json', $context);
            }
            if ($object->isInitialized('carrierDetails') && null !== $object->getCarrierDetails()) {
                $values_2 = [];
                foreach ($object->getCarrierDetails() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['carrierDetails'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocation::class => false];
        }
    }
} else {
    class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocation::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocation::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('geoPositionalCoordinates', $data)) {
                $object->setGeoPositionalCoordinates($this->denormalizer->denormalize($data['geoPositionalCoordinates'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationgeoPositionalCoordinates::class, 'json', $context));
                unset($data['geoPositionalCoordinates']);
            }
            if (\array_key_exists('storeHours', $data)) {
                $values = [];
                foreach ($data['storeHours'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationstoreHoursItem::class, 'json', $context);
                }
                $object->setStoreHours($values);
                unset($data['storeHours']);
            }
            if (\array_key_exists('locationId', $data)) {
                $object->setLocationId($data['locationId']);
                unset($data['locationId']);
            }
            if (\array_key_exists('specialInstructions', $data)) {
                $object->setSpecialInstructions($data['specialInstructions']);
                unset($data['specialInstructions']);
            }
            if (\array_key_exists('locationAttributeTypes', $data)) {
                $values_1 = [];
                foreach ($data['locationAttributeTypes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setLocationAttributeTypes($values_1);
                unset($data['locationAttributeTypes']);
            }
            if (\array_key_exists('mapURL', $data)) {
                $object->setMapURL($data['mapURL']);
                unset($data['mapURL']);
            }
            if (\array_key_exists('locationType', $data)) {
                $object->setLocationType($data['locationType']);
                unset($data['locationType']);
            }
            if (\array_key_exists('contactAndAddress', $data)) {
                $object->setContactAndAddress($this->denormalizer->denormalize($data['contactAndAddress'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcontactAndAddress::class, 'json', $context));
                unset($data['contactAndAddress']);
            }
            if (\array_key_exists('carrierDetails', $data)) {
                $values_2 = [];
                foreach ($data['carrierDetails'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItem::class, 'json', $context);
                }
                $object->setCarrierDetails($values_2);
                unset($data['carrierDetails']);
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
            if ($object->isInitialized('geoPositionalCoordinates') && null !== $object->getGeoPositionalCoordinates()) {
                $data['geoPositionalCoordinates'] = $this->normalizer->normalize($object->getGeoPositionalCoordinates(), 'json', $context);
            }
            if ($object->isInitialized('storeHours') && null !== $object->getStoreHours()) {
                $values = [];
                foreach ($object->getStoreHours() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['storeHours'] = $values;
            }
            if ($object->isInitialized('locationId') && null !== $object->getLocationId()) {
                $data['locationId'] = $object->getLocationId();
            }
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $data['specialInstructions'] = $object->getSpecialInstructions();
            }
            if ($object->isInitialized('locationAttributeTypes') && null !== $object->getLocationAttributeTypes()) {
                $values_1 = [];
                foreach ($object->getLocationAttributeTypes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['locationAttributeTypes'] = $values_1;
            }
            if ($object->isInitialized('mapURL') && null !== $object->getMapURL()) {
                $data['mapURL'] = $object->getMapURL();
            }
            if ($object->isInitialized('locationType') && null !== $object->getLocationType()) {
                $data['locationType'] = $object->getLocationType();
            }
            if ($object->isInitialized('contactAndAddress') && null !== $object->getContactAndAddress()) {
                $data['contactAndAddress'] = $this->normalizer->normalize($object->getContactAndAddress(), 'json', $context);
            }
            if ($object->isInitialized('carrierDetails') && null !== $object->getCarrierDetails()) {
                $values_2 = [];
                foreach ($object->getCarrierDetails() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['carrierDetails'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocation::class => false];
        }
    }
}
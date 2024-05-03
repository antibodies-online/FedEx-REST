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
    class LocationV1LocationsPostResponse200OutputlocationDetailListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\LocationV1LocationsPostResponse200OutputlocationDetailListItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('distance', $data)) {
                $object->setDistance($this->denormalizer->denormalize($data['distance'], 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItemdistance', 'json', $context));
                unset($data['distance']);
            }
            if (\array_key_exists('contactAndAddress', $data)) {
                $object->setContactAndAddress($this->denormalizer->denormalize($data['contactAndAddress'], 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItemcontactAndAddress', 'json', $context));
                unset($data['contactAndAddress']);
            }
            if (\array_key_exists('locationId', $data)) {
                $object->setLocationId($data['locationId']);
                unset($data['locationId']);
            }
            if (\array_key_exists('storeHours', $data)) {
                $values = [];
                foreach ($data['storeHours'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItemstoreHoursItem', 'json', $context);
                }
                $object->setStoreHours($values);
                unset($data['storeHours']);
            }
            if (\array_key_exists('carrierDetailList', $data)) {
                $values_1 = [];
                foreach ($data['carrierDetailList'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItemcarrierDetailListItem', 'json', $context);
                }
                $object->setCarrierDetailList($values_1);
                unset($data['carrierDetailList']);
            }
            if (\array_key_exists('geoPositionalCoordinates', $data)) {
                $object->setGeoPositionalCoordinates($this->denormalizer->denormalize($data['geoPositionalCoordinates'], 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItemgeoPositionalCoordinates', 'json', $context));
                unset($data['geoPositionalCoordinates']);
            }
            if (\array_key_exists('locationType', $data)) {
                $object->setLocationType($data['locationType']);
                unset($data['locationType']);
            }
            if (\array_key_exists('locationAttributeTypes', $data)) {
                $values_2 = [];
                foreach ($data['locationAttributeTypes'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setLocationAttributeTypes($values_2);
                unset($data['locationAttributeTypes']);
            }
            if (\array_key_exists('lockerAvailability', $data)) {
                $object->setLockerAvailability($data['lockerAvailability']);
                unset($data['lockerAvailability']);
            }
            if (\array_key_exists('packageMaximumLimits', $data)) {
                $object->setPackageMaximumLimits($this->denormalizer->denormalize($data['packageMaximumLimits'], 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItempackageMaximumLimits', 'json', $context));
                unset($data['packageMaximumLimits']);
            }
            if (\array_key_exists('specialInstructions', $data)) {
                $object->setSpecialInstructions($data['specialInstructions']);
                unset($data['specialInstructions']);
            }
            if (\array_key_exists('rthservice', $data)) {
                $object->setRthservice($data['rthservice']);
                unset($data['rthservice']);
            }
            if (\array_key_exists('locationCapabilities', $data)) {
                $object->setLocationCapabilities($this->denormalizer->denormalize($data['locationCapabilities'], 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItemlocationCapabilities', 'json', $context));
                unset($data['locationCapabilities']);
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
            if ($object->isInitialized('distance') && null !== $object->getDistance()) {
                $data['distance'] = $this->normalizer->normalize($object->getDistance(), 'json', $context);
            }
            if ($object->isInitialized('contactAndAddress') && null !== $object->getContactAndAddress()) {
                $data['contactAndAddress'] = $this->normalizer->normalize($object->getContactAndAddress(), 'json', $context);
            }
            if ($object->isInitialized('locationId') && null !== $object->getLocationId()) {
                $data['locationId'] = $object->getLocationId();
            }
            if ($object->isInitialized('storeHours') && null !== $object->getStoreHours()) {
                $values = [];
                foreach ($object->getStoreHours() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['storeHours'] = $values;
            }
            if ($object->isInitialized('carrierDetailList') && null !== $object->getCarrierDetailList()) {
                $values_1 = [];
                foreach ($object->getCarrierDetailList() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['carrierDetailList'] = $values_1;
            }
            if ($object->isInitialized('geoPositionalCoordinates') && null !== $object->getGeoPositionalCoordinates()) {
                $data['geoPositionalCoordinates'] = $this->normalizer->normalize($object->getGeoPositionalCoordinates(), 'json', $context);
            }
            if ($object->isInitialized('locationType') && null !== $object->getLocationType()) {
                $data['locationType'] = $object->getLocationType();
            }
            if ($object->isInitialized('locationAttributeTypes') && null !== $object->getLocationAttributeTypes()) {
                $values_2 = [];
                foreach ($object->getLocationAttributeTypes() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['locationAttributeTypes'] = $values_2;
            }
            if ($object->isInitialized('lockerAvailability') && null !== $object->getLockerAvailability()) {
                $data['lockerAvailability'] = $object->getLockerAvailability();
            }
            if ($object->isInitialized('packageMaximumLimits') && null !== $object->getPackageMaximumLimits()) {
                $data['packageMaximumLimits'] = $this->normalizer->normalize($object->getPackageMaximumLimits(), 'json', $context);
            }
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $data['specialInstructions'] = $object->getSpecialInstructions();
            }
            if ($object->isInitialized('rthservice') && null !== $object->getRthservice()) {
                $data['rthservice'] = $object->getRthservice();
            }
            if ($object->isInitialized('locationCapabilities') && null !== $object->getLocationCapabilities()) {
                $data['locationCapabilities'] = $this->normalizer->normalize($object->getLocationCapabilities(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItem' => false];
        }
    }
} else {
    class LocationV1LocationsPostResponse200OutputlocationDetailListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItem';
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
            $object = new \AntibodiesOnline\FedEx\Model\LocationV1LocationsPostResponse200OutputlocationDetailListItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('distance', $data)) {
                $object->setDistance($this->denormalizer->denormalize($data['distance'], 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItemdistance', 'json', $context));
                unset($data['distance']);
            }
            if (\array_key_exists('contactAndAddress', $data)) {
                $object->setContactAndAddress($this->denormalizer->denormalize($data['contactAndAddress'], 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItemcontactAndAddress', 'json', $context));
                unset($data['contactAndAddress']);
            }
            if (\array_key_exists('locationId', $data)) {
                $object->setLocationId($data['locationId']);
                unset($data['locationId']);
            }
            if (\array_key_exists('storeHours', $data)) {
                $values = [];
                foreach ($data['storeHours'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItemstoreHoursItem', 'json', $context);
                }
                $object->setStoreHours($values);
                unset($data['storeHours']);
            }
            if (\array_key_exists('carrierDetailList', $data)) {
                $values_1 = [];
                foreach ($data['carrierDetailList'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItemcarrierDetailListItem', 'json', $context);
                }
                $object->setCarrierDetailList($values_1);
                unset($data['carrierDetailList']);
            }
            if (\array_key_exists('geoPositionalCoordinates', $data)) {
                $object->setGeoPositionalCoordinates($this->denormalizer->denormalize($data['geoPositionalCoordinates'], 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItemgeoPositionalCoordinates', 'json', $context));
                unset($data['geoPositionalCoordinates']);
            }
            if (\array_key_exists('locationType', $data)) {
                $object->setLocationType($data['locationType']);
                unset($data['locationType']);
            }
            if (\array_key_exists('locationAttributeTypes', $data)) {
                $values_2 = [];
                foreach ($data['locationAttributeTypes'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setLocationAttributeTypes($values_2);
                unset($data['locationAttributeTypes']);
            }
            if (\array_key_exists('lockerAvailability', $data)) {
                $object->setLockerAvailability($data['lockerAvailability']);
                unset($data['lockerAvailability']);
            }
            if (\array_key_exists('packageMaximumLimits', $data)) {
                $object->setPackageMaximumLimits($this->denormalizer->denormalize($data['packageMaximumLimits'], 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItempackageMaximumLimits', 'json', $context));
                unset($data['packageMaximumLimits']);
            }
            if (\array_key_exists('specialInstructions', $data)) {
                $object->setSpecialInstructions($data['specialInstructions']);
                unset($data['specialInstructions']);
            }
            if (\array_key_exists('rthservice', $data)) {
                $object->setRthservice($data['rthservice']);
                unset($data['rthservice']);
            }
            if (\array_key_exists('locationCapabilities', $data)) {
                $object->setLocationCapabilities($this->denormalizer->denormalize($data['locationCapabilities'], 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItemlocationCapabilities', 'json', $context));
                unset($data['locationCapabilities']);
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
            if ($object->isInitialized('distance') && null !== $object->getDistance()) {
                $data['distance'] = $this->normalizer->normalize($object->getDistance(), 'json', $context);
            }
            if ($object->isInitialized('contactAndAddress') && null !== $object->getContactAndAddress()) {
                $data['contactAndAddress'] = $this->normalizer->normalize($object->getContactAndAddress(), 'json', $context);
            }
            if ($object->isInitialized('locationId') && null !== $object->getLocationId()) {
                $data['locationId'] = $object->getLocationId();
            }
            if ($object->isInitialized('storeHours') && null !== $object->getStoreHours()) {
                $values = [];
                foreach ($object->getStoreHours() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['storeHours'] = $values;
            }
            if ($object->isInitialized('carrierDetailList') && null !== $object->getCarrierDetailList()) {
                $values_1 = [];
                foreach ($object->getCarrierDetailList() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['carrierDetailList'] = $values_1;
            }
            if ($object->isInitialized('geoPositionalCoordinates') && null !== $object->getGeoPositionalCoordinates()) {
                $data['geoPositionalCoordinates'] = $this->normalizer->normalize($object->getGeoPositionalCoordinates(), 'json', $context);
            }
            if ($object->isInitialized('locationType') && null !== $object->getLocationType()) {
                $data['locationType'] = $object->getLocationType();
            }
            if ($object->isInitialized('locationAttributeTypes') && null !== $object->getLocationAttributeTypes()) {
                $values_2 = [];
                foreach ($object->getLocationAttributeTypes() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['locationAttributeTypes'] = $values_2;
            }
            if ($object->isInitialized('lockerAvailability') && null !== $object->getLockerAvailability()) {
                $data['lockerAvailability'] = $object->getLockerAvailability();
            }
            if ($object->isInitialized('packageMaximumLimits') && null !== $object->getPackageMaximumLimits()) {
                $data['packageMaximumLimits'] = $this->normalizer->normalize($object->getPackageMaximumLimits(), 'json', $context);
            }
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $data['specialInstructions'] = $object->getSpecialInstructions();
            }
            if ($object->isInitialized('rthservice') && null !== $object->getRthservice()) {
                $data['rthservice'] = $object->getRthservice();
            }
            if ($object->isInitialized('locationCapabilities') && null !== $object->getLocationCapabilities()) {
                $data['locationCapabilities'] = $this->normalizer->normalize($object->getLocationCapabilities(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlocationDetailListItem' => false];
        }
    }
}
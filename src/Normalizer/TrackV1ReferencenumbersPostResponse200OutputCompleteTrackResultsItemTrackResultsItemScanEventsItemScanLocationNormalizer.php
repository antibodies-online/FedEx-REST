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
    class TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemScanLocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemScanLocation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemScanLocation';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemScanLocation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('addressClassification', $data)) {
                $object->setAddressClassification($data['addressClassification']);
                unset($data['addressClassification']);
            }
            if (\array_key_exists('residential', $data)) {
                $object->setResidential($data['residential']);
                unset($data['residential']);
            }
            if (\array_key_exists('streetLines', $data)) {
                $values = [];
                foreach ($data['streetLines'] as $value) {
                    $values[] = $value;
                }
                $object->setStreetLines($values);
                unset($data['streetLines']);
            }
            if (\array_key_exists('city', $data)) {
                $object->setCity($data['city']);
                unset($data['city']);
            }
            if (\array_key_exists('urbanizationCode', $data)) {
                $object->setUrbanizationCode($data['urbanizationCode']);
                unset($data['urbanizationCode']);
            }
            if (\array_key_exists('stateOrProvinceCode', $data)) {
                $object->setStateOrProvinceCode($data['stateOrProvinceCode']);
                unset($data['stateOrProvinceCode']);
            }
            if (\array_key_exists('postalCode', $data)) {
                $object->setPostalCode($data['postalCode']);
                unset($data['postalCode']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('countryName', $data)) {
                $object->setCountryName($data['countryName']);
                unset($data['countryName']);
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
            if ($object->isInitialized('addressClassification') && null !== $object->getAddressClassification()) {
                $data['addressClassification'] = $object->getAddressClassification();
            }
            if ($object->isInitialized('residential') && null !== $object->getResidential()) {
                $data['residential'] = $object->getResidential();
            }
            if ($object->isInitialized('streetLines') && null !== $object->getStreetLines()) {
                $values = [];
                foreach ($object->getStreetLines() as $value) {
                    $values[] = $value;
                }
                $data['streetLines'] = $values;
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('urbanizationCode') && null !== $object->getUrbanizationCode()) {
                $data['urbanizationCode'] = $object->getUrbanizationCode();
            }
            if ($object->isInitialized('stateOrProvinceCode') && null !== $object->getStateOrProvinceCode()) {
                $data['stateOrProvinceCode'] = $object->getStateOrProvinceCode();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['postalCode'] = $object->getPostalCode();
            }
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['countryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('countryName') && null !== $object->getCountryName()) {
                $data['countryName'] = $object->getCountryName();
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
            return ['AntibodiesOnline\\FedEx\\Model\\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemScanLocation' => false];
        }
    }
} else {
    class TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemScanLocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemScanLocation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemScanLocation';
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
            $object = new \AntibodiesOnline\FedEx\Model\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemScanLocation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('addressClassification', $data)) {
                $object->setAddressClassification($data['addressClassification']);
                unset($data['addressClassification']);
            }
            if (\array_key_exists('residential', $data)) {
                $object->setResidential($data['residential']);
                unset($data['residential']);
            }
            if (\array_key_exists('streetLines', $data)) {
                $values = [];
                foreach ($data['streetLines'] as $value) {
                    $values[] = $value;
                }
                $object->setStreetLines($values);
                unset($data['streetLines']);
            }
            if (\array_key_exists('city', $data)) {
                $object->setCity($data['city']);
                unset($data['city']);
            }
            if (\array_key_exists('urbanizationCode', $data)) {
                $object->setUrbanizationCode($data['urbanizationCode']);
                unset($data['urbanizationCode']);
            }
            if (\array_key_exists('stateOrProvinceCode', $data)) {
                $object->setStateOrProvinceCode($data['stateOrProvinceCode']);
                unset($data['stateOrProvinceCode']);
            }
            if (\array_key_exists('postalCode', $data)) {
                $object->setPostalCode($data['postalCode']);
                unset($data['postalCode']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('countryName', $data)) {
                $object->setCountryName($data['countryName']);
                unset($data['countryName']);
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
            if ($object->isInitialized('addressClassification') && null !== $object->getAddressClassification()) {
                $data['addressClassification'] = $object->getAddressClassification();
            }
            if ($object->isInitialized('residential') && null !== $object->getResidential()) {
                $data['residential'] = $object->getResidential();
            }
            if ($object->isInitialized('streetLines') && null !== $object->getStreetLines()) {
                $values = [];
                foreach ($object->getStreetLines() as $value) {
                    $values[] = $value;
                }
                $data['streetLines'] = $values;
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('urbanizationCode') && null !== $object->getUrbanizationCode()) {
                $data['urbanizationCode'] = $object->getUrbanizationCode();
            }
            if ($object->isInitialized('stateOrProvinceCode') && null !== $object->getStateOrProvinceCode()) {
                $data['stateOrProvinceCode'] = $object->getStateOrProvinceCode();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['postalCode'] = $object->getPostalCode();
            }
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['countryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('countryName') && null !== $object->getCountryName()) {
                $data['countryName'] = $object->getCountryName();
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
            return ['AntibodiesOnline\\FedEx\\Model\\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemScanLocation' => false];
        }
    }
}
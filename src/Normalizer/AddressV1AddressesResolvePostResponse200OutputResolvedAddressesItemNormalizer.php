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
    class AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('streetLinesToken', $data)) {
                $values = [];
                foreach ($data['streetLinesToken'] as $value) {
                    $values[] = $value;
                }
                $object->setStreetLinesToken($values);
                unset($data['streetLinesToken']);
            }
            if (\array_key_exists('city', $data)) {
                $object->setCity($data['city']);
                unset($data['city']);
            }
            if (\array_key_exists('stateOrProvinceCode', $data)) {
                $object->setStateOrProvinceCode($data['stateOrProvinceCode']);
                unset($data['stateOrProvinceCode']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('customerMessage', $data)) {
                $values_1 = [];
                foreach ($data['customerMessage'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCustomerMessage($values_1);
                unset($data['customerMessage']);
            }
            if (\array_key_exists('cityToken', $data)) {
                $values_2 = [];
                foreach ($data['cityToken'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemCityTokenItem', 'json', $context);
                }
                $object->setCityToken($values_2);
                unset($data['cityToken']);
            }
            if (\array_key_exists('postalCodeToken', $data)) {
                $object->setPostalCodeToken($this->denormalizer->denormalize($data['postalCodeToken'], 'AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemPostalCodeToken', 'json', $context));
                unset($data['postalCodeToken']);
            }
            if (\array_key_exists('parsedPostalCode', $data)) {
                $object->setParsedPostalCode($this->denormalizer->denormalize($data['parsedPostalCode'], 'AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCode', 'json', $context));
                unset($data['parsedPostalCode']);
            }
            if (\array_key_exists('classification', $data)) {
                $object->setClassification($data['classification']);
                unset($data['classification']);
            }
            if (\array_key_exists('postOfficeBox', $data)) {
                $object->setPostOfficeBox($data['postOfficeBox']);
                unset($data['postOfficeBox']);
            }
            if (\array_key_exists('normalizedStatusNameDPV', $data)) {
                $object->setNormalizedStatusNameDPV($data['normalizedStatusNameDPV']);
                unset($data['normalizedStatusNameDPV']);
            }
            if (\array_key_exists('standardizedStatusNameMatchSource', $data)) {
                $object->setStandardizedStatusNameMatchSource($data['standardizedStatusNameMatchSource']);
                unset($data['standardizedStatusNameMatchSource']);
            }
            if (\array_key_exists('resolutionMethodName', $data)) {
                $object->setResolutionMethodName($data['resolutionMethodName']);
                unset($data['resolutionMethodName']);
            }
            if (\array_key_exists('ruralRouteHighwayContract', $data)) {
                $object->setRuralRouteHighwayContract($data['ruralRouteHighwayContract']);
                unset($data['ruralRouteHighwayContract']);
            }
            if (\array_key_exists('generalDelivery', $data)) {
                $object->setGeneralDelivery($data['generalDelivery']);
                unset($data['generalDelivery']);
            }
            if (\array_key_exists('attributes', $data)) {
                $object->setAttributes($this->denormalizer->denormalize($data['attributes'], 'AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributes', 'json', $context));
                unset($data['attributes']);
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
            if ($object->isInitialized('streetLinesToken') && null !== $object->getStreetLinesToken()) {
                $values = [];
                foreach ($object->getStreetLinesToken() as $value) {
                    $values[] = $value;
                }
                $data['streetLinesToken'] = $values;
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('stateOrProvinceCode') && null !== $object->getStateOrProvinceCode()) {
                $data['stateOrProvinceCode'] = $object->getStateOrProvinceCode();
            }
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['countryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('customerMessage') && null !== $object->getCustomerMessage()) {
                $values_1 = [];
                foreach ($object->getCustomerMessage() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['customerMessage'] = $values_1;
            }
            if ($object->isInitialized('cityToken') && null !== $object->getCityToken()) {
                $values_2 = [];
                foreach ($object->getCityToken() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['cityToken'] = $values_2;
            }
            if ($object->isInitialized('postalCodeToken') && null !== $object->getPostalCodeToken()) {
                $data['postalCodeToken'] = $this->normalizer->normalize($object->getPostalCodeToken(), 'json', $context);
            }
            if ($object->isInitialized('parsedPostalCode') && null !== $object->getParsedPostalCode()) {
                $data['parsedPostalCode'] = $this->normalizer->normalize($object->getParsedPostalCode(), 'json', $context);
            }
            if ($object->isInitialized('classification') && null !== $object->getClassification()) {
                $data['classification'] = $object->getClassification();
            }
            if ($object->isInitialized('postOfficeBox') && null !== $object->getPostOfficeBox()) {
                $data['postOfficeBox'] = $object->getPostOfficeBox();
            }
            if ($object->isInitialized('normalizedStatusNameDPV') && null !== $object->getNormalizedStatusNameDPV()) {
                $data['normalizedStatusNameDPV'] = $object->getNormalizedStatusNameDPV();
            }
            if ($object->isInitialized('standardizedStatusNameMatchSource') && null !== $object->getStandardizedStatusNameMatchSource()) {
                $data['standardizedStatusNameMatchSource'] = $object->getStandardizedStatusNameMatchSource();
            }
            if ($object->isInitialized('resolutionMethodName') && null !== $object->getResolutionMethodName()) {
                $data['resolutionMethodName'] = $object->getResolutionMethodName();
            }
            if ($object->isInitialized('ruralRouteHighwayContract') && null !== $object->getRuralRouteHighwayContract()) {
                $data['ruralRouteHighwayContract'] = $object->getRuralRouteHighwayContract();
            }
            if ($object->isInitialized('generalDelivery') && null !== $object->getGeneralDelivery()) {
                $data['generalDelivery'] = $object->getGeneralDelivery();
            }
            if ($object->isInitialized('attributes') && null !== $object->getAttributes()) {
                $data['attributes'] = $this->normalizer->normalize($object->getAttributes(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItem' => false];
        }
    }
} else {
    class AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItem';
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
            $object = new \AntibodiesOnline\FedEx\Model\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('streetLinesToken', $data)) {
                $values = [];
                foreach ($data['streetLinesToken'] as $value) {
                    $values[] = $value;
                }
                $object->setStreetLinesToken($values);
                unset($data['streetLinesToken']);
            }
            if (\array_key_exists('city', $data)) {
                $object->setCity($data['city']);
                unset($data['city']);
            }
            if (\array_key_exists('stateOrProvinceCode', $data)) {
                $object->setStateOrProvinceCode($data['stateOrProvinceCode']);
                unset($data['stateOrProvinceCode']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('customerMessage', $data)) {
                $values_1 = [];
                foreach ($data['customerMessage'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCustomerMessage($values_1);
                unset($data['customerMessage']);
            }
            if (\array_key_exists('cityToken', $data)) {
                $values_2 = [];
                foreach ($data['cityToken'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemCityTokenItem', 'json', $context);
                }
                $object->setCityToken($values_2);
                unset($data['cityToken']);
            }
            if (\array_key_exists('postalCodeToken', $data)) {
                $object->setPostalCodeToken($this->denormalizer->denormalize($data['postalCodeToken'], 'AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemPostalCodeToken', 'json', $context));
                unset($data['postalCodeToken']);
            }
            if (\array_key_exists('parsedPostalCode', $data)) {
                $object->setParsedPostalCode($this->denormalizer->denormalize($data['parsedPostalCode'], 'AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCode', 'json', $context));
                unset($data['parsedPostalCode']);
            }
            if (\array_key_exists('classification', $data)) {
                $object->setClassification($data['classification']);
                unset($data['classification']);
            }
            if (\array_key_exists('postOfficeBox', $data)) {
                $object->setPostOfficeBox($data['postOfficeBox']);
                unset($data['postOfficeBox']);
            }
            if (\array_key_exists('normalizedStatusNameDPV', $data)) {
                $object->setNormalizedStatusNameDPV($data['normalizedStatusNameDPV']);
                unset($data['normalizedStatusNameDPV']);
            }
            if (\array_key_exists('standardizedStatusNameMatchSource', $data)) {
                $object->setStandardizedStatusNameMatchSource($data['standardizedStatusNameMatchSource']);
                unset($data['standardizedStatusNameMatchSource']);
            }
            if (\array_key_exists('resolutionMethodName', $data)) {
                $object->setResolutionMethodName($data['resolutionMethodName']);
                unset($data['resolutionMethodName']);
            }
            if (\array_key_exists('ruralRouteHighwayContract', $data)) {
                $object->setRuralRouteHighwayContract($data['ruralRouteHighwayContract']);
                unset($data['ruralRouteHighwayContract']);
            }
            if (\array_key_exists('generalDelivery', $data)) {
                $object->setGeneralDelivery($data['generalDelivery']);
                unset($data['generalDelivery']);
            }
            if (\array_key_exists('attributes', $data)) {
                $object->setAttributes($this->denormalizer->denormalize($data['attributes'], 'AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributes', 'json', $context));
                unset($data['attributes']);
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
            if ($object->isInitialized('streetLinesToken') && null !== $object->getStreetLinesToken()) {
                $values = [];
                foreach ($object->getStreetLinesToken() as $value) {
                    $values[] = $value;
                }
                $data['streetLinesToken'] = $values;
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('stateOrProvinceCode') && null !== $object->getStateOrProvinceCode()) {
                $data['stateOrProvinceCode'] = $object->getStateOrProvinceCode();
            }
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['countryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('customerMessage') && null !== $object->getCustomerMessage()) {
                $values_1 = [];
                foreach ($object->getCustomerMessage() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['customerMessage'] = $values_1;
            }
            if ($object->isInitialized('cityToken') && null !== $object->getCityToken()) {
                $values_2 = [];
                foreach ($object->getCityToken() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['cityToken'] = $values_2;
            }
            if ($object->isInitialized('postalCodeToken') && null !== $object->getPostalCodeToken()) {
                $data['postalCodeToken'] = $this->normalizer->normalize($object->getPostalCodeToken(), 'json', $context);
            }
            if ($object->isInitialized('parsedPostalCode') && null !== $object->getParsedPostalCode()) {
                $data['parsedPostalCode'] = $this->normalizer->normalize($object->getParsedPostalCode(), 'json', $context);
            }
            if ($object->isInitialized('classification') && null !== $object->getClassification()) {
                $data['classification'] = $object->getClassification();
            }
            if ($object->isInitialized('postOfficeBox') && null !== $object->getPostOfficeBox()) {
                $data['postOfficeBox'] = $object->getPostOfficeBox();
            }
            if ($object->isInitialized('normalizedStatusNameDPV') && null !== $object->getNormalizedStatusNameDPV()) {
                $data['normalizedStatusNameDPV'] = $object->getNormalizedStatusNameDPV();
            }
            if ($object->isInitialized('standardizedStatusNameMatchSource') && null !== $object->getStandardizedStatusNameMatchSource()) {
                $data['standardizedStatusNameMatchSource'] = $object->getStandardizedStatusNameMatchSource();
            }
            if ($object->isInitialized('resolutionMethodName') && null !== $object->getResolutionMethodName()) {
                $data['resolutionMethodName'] = $object->getResolutionMethodName();
            }
            if ($object->isInitialized('ruralRouteHighwayContract') && null !== $object->getRuralRouteHighwayContract()) {
                $data['ruralRouteHighwayContract'] = $object->getRuralRouteHighwayContract();
            }
            if ($object->isInitialized('generalDelivery') && null !== $object->getGeneralDelivery()) {
                $data['generalDelivery'] = $object->getGeneralDelivery();
            }
            if ($object->isInitialized('attributes') && null !== $object->getAttributes()) {
                $data['attributes'] = $this->normalizer->normalize($object->getAttributes(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItem' => false];
        }
    }
}
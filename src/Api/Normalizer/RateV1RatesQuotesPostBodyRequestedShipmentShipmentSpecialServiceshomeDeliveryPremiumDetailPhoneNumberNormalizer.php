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
    class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetailPhoneNumberNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetailPhoneNumber';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetailPhoneNumber';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetailPhoneNumber();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('areaCode', $data)) {
                $object->setAreaCode($data['areaCode']);
                unset($data['areaCode']);
            }
            if (\array_key_exists('extension', $data)) {
                $object->setExtension($data['extension']);
                unset($data['extension']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('personalIdentificationNumber', $data)) {
                $object->setPersonalIdentificationNumber($data['personalIdentificationNumber']);
                unset($data['personalIdentificationNumber']);
            }
            if (\array_key_exists('localNumber', $data)) {
                $object->setLocalNumber($data['localNumber']);
                unset($data['localNumber']);
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
            if ($object->isInitialized('areaCode') && null !== $object->getAreaCode()) {
                $data['areaCode'] = $object->getAreaCode();
            }
            if ($object->isInitialized('extension') && null !== $object->getExtension()) {
                $data['extension'] = $object->getExtension();
            }
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['countryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('personalIdentificationNumber') && null !== $object->getPersonalIdentificationNumber()) {
                $data['personalIdentificationNumber'] = $object->getPersonalIdentificationNumber();
            }
            if ($object->isInitialized('localNumber') && null !== $object->getLocalNumber()) {
                $data['localNumber'] = $object->getLocalNumber();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetailPhoneNumber' => false];
        }
    }
} else {
    class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetailPhoneNumberNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetailPhoneNumber';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetailPhoneNumber';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetailPhoneNumber();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('areaCode', $data)) {
                $object->setAreaCode($data['areaCode']);
                unset($data['areaCode']);
            }
            if (\array_key_exists('extension', $data)) {
                $object->setExtension($data['extension']);
                unset($data['extension']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('personalIdentificationNumber', $data)) {
                $object->setPersonalIdentificationNumber($data['personalIdentificationNumber']);
                unset($data['personalIdentificationNumber']);
            }
            if (\array_key_exists('localNumber', $data)) {
                $object->setLocalNumber($data['localNumber']);
                unset($data['localNumber']);
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
            if ($object->isInitialized('areaCode') && null !== $object->getAreaCode()) {
                $data['areaCode'] = $object->getAreaCode();
            }
            if ($object->isInitialized('extension') && null !== $object->getExtension()) {
                $data['extension'] = $object->getExtension();
            }
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['countryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('personalIdentificationNumber') && null !== $object->getPersonalIdentificationNumber()) {
                $data['personalIdentificationNumber'] = $object->getPersonalIdentificationNumber();
            }
            if ($object->isInitialized('localNumber') && null !== $object->getLocalNumber()) {
                $data['localNumber'] = $object->getLocalNumber();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetailPhoneNumber' => false];
        }
    }
}
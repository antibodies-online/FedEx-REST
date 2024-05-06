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
    class CountryV1PostalValidatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\CountryV1PostalValidatePostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\CountryV1PostalValidatePostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\CountryV1PostalValidatePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('carrierCode', $data)) {
                $object->setCarrierCode($data['carrierCode']);
                unset($data['carrierCode']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('stateOrProvinceCode', $data)) {
                $object->setStateOrProvinceCode($data['stateOrProvinceCode']);
                unset($data['stateOrProvinceCode']);
            }
            if (\array_key_exists('postalCode', $data)) {
                $object->setPostalCode($data['postalCode']);
                unset($data['postalCode']);
            }
            if (\array_key_exists('shipDate', $data)) {
                $object->setShipDate($data['shipDate']);
                unset($data['shipDate']);
            }
            if (\array_key_exists('routingCode', $data)) {
                $object->setRoutingCode($data['routingCode']);
                unset($data['routingCode']);
            }
            if (\array_key_exists('checkForMismatch', $data)) {
                $object->setCheckForMismatch($data['checkForMismatch']);
                unset($data['checkForMismatch']);
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
            $data['carrierCode'] = $object->getCarrierCode();
            $data['countryCode'] = $object->getCountryCode();
            $data['stateOrProvinceCode'] = $object->getStateOrProvinceCode();
            $data['postalCode'] = $object->getPostalCode();
            $data['shipDate'] = $object->getShipDate();
            if ($object->isInitialized('routingCode') && null !== $object->getRoutingCode()) {
                $data['routingCode'] = $object->getRoutingCode();
            }
            if ($object->isInitialized('checkForMismatch') && null !== $object->getCheckForMismatch()) {
                $data['checkForMismatch'] = $object->getCheckForMismatch();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\CountryV1PostalValidatePostBody' => false];
        }
    }
} else {
    class CountryV1PostalValidatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\CountryV1PostalValidatePostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\CountryV1PostalValidatePostBody';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\CountryV1PostalValidatePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('carrierCode', $data)) {
                $object->setCarrierCode($data['carrierCode']);
                unset($data['carrierCode']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('stateOrProvinceCode', $data)) {
                $object->setStateOrProvinceCode($data['stateOrProvinceCode']);
                unset($data['stateOrProvinceCode']);
            }
            if (\array_key_exists('postalCode', $data)) {
                $object->setPostalCode($data['postalCode']);
                unset($data['postalCode']);
            }
            if (\array_key_exists('shipDate', $data)) {
                $object->setShipDate($data['shipDate']);
                unset($data['shipDate']);
            }
            if (\array_key_exists('routingCode', $data)) {
                $object->setRoutingCode($data['routingCode']);
                unset($data['routingCode']);
            }
            if (\array_key_exists('checkForMismatch', $data)) {
                $object->setCheckForMismatch($data['checkForMismatch']);
                unset($data['checkForMismatch']);
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
            $data['carrierCode'] = $object->getCarrierCode();
            $data['countryCode'] = $object->getCountryCode();
            $data['stateOrProvinceCode'] = $object->getStateOrProvinceCode();
            $data['postalCode'] = $object->getPostalCode();
            $data['shipDate'] = $object->getShipDate();
            if ($object->isInitialized('routingCode') && null !== $object->getRoutingCode()) {
                $data['routingCode'] = $object->getRoutingCode();
            }
            if ($object->isInitialized('checkForMismatch') && null !== $object->getCheckForMismatch()) {
                $data['checkForMismatch'] = $object->getCheckForMismatch();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\CountryV1PostalValidatePostBody' => false];
        }
    }
}
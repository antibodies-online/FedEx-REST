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
    class CountryV1PostalValidatePostResponse200OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\CountryV1PostalValidatePostResponse200Output';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\CountryV1PostalValidatePostResponse200Output';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\CountryV1PostalValidatePostResponse200Output();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('cityFirstInitials', $data)) {
                $object->setCityFirstInitials($data['cityFirstInitials']);
                unset($data['cityFirstInitials']);
            }
            if (\array_key_exists('stateOrProvinceCode', $data)) {
                $object->setStateOrProvinceCode($data['stateOrProvinceCode']);
                unset($data['stateOrProvinceCode']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values = [];
                foreach ($data['alerts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\CountryV1PostalValidatePostResponse200OutputAlertsItem', 'json', $context);
                }
                $object->setAlerts($values);
                unset($data['alerts']);
            }
            if (\array_key_exists('locationDescriptions', $data)) {
                $values_1 = [];
                foreach ($data['locationDescriptions'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Api\\Model\\CountryV1PostalValidatePostResponse200OutputLocationDescriptionsItem', 'json', $context);
                }
                $object->setLocationDescriptions($values_1);
                unset($data['locationDescriptions']);
            }
            if (\array_key_exists('cleanedPostalCode', $data)) {
                $object->setCleanedPostalCode($data['cleanedPostalCode']);
                unset($data['cleanedPostalCode']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['countryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('cityFirstInitials') && null !== $object->getCityFirstInitials()) {
                $data['cityFirstInitials'] = $object->getCityFirstInitials();
            }
            if ($object->isInitialized('stateOrProvinceCode') && null !== $object->getStateOrProvinceCode()) {
                $data['stateOrProvinceCode'] = $object->getStateOrProvinceCode();
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values = [];
                foreach ($object->getAlerts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['alerts'] = $values;
            }
            if ($object->isInitialized('locationDescriptions') && null !== $object->getLocationDescriptions()) {
                $values_1 = [];
                foreach ($object->getLocationDescriptions() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['locationDescriptions'] = $values_1;
            }
            if ($object->isInitialized('cleanedPostalCode') && null !== $object->getCleanedPostalCode()) {
                $data['cleanedPostalCode'] = $object->getCleanedPostalCode();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\CountryV1PostalValidatePostResponse200Output' => false];
        }
    }
} else {
    class CountryV1PostalValidatePostResponse200OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\CountryV1PostalValidatePostResponse200Output';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\CountryV1PostalValidatePostResponse200Output';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\CountryV1PostalValidatePostResponse200Output();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('cityFirstInitials', $data)) {
                $object->setCityFirstInitials($data['cityFirstInitials']);
                unset($data['cityFirstInitials']);
            }
            if (\array_key_exists('stateOrProvinceCode', $data)) {
                $object->setStateOrProvinceCode($data['stateOrProvinceCode']);
                unset($data['stateOrProvinceCode']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values = [];
                foreach ($data['alerts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\CountryV1PostalValidatePostResponse200OutputAlertsItem', 'json', $context);
                }
                $object->setAlerts($values);
                unset($data['alerts']);
            }
            if (\array_key_exists('locationDescriptions', $data)) {
                $values_1 = [];
                foreach ($data['locationDescriptions'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Api\\Model\\CountryV1PostalValidatePostResponse200OutputLocationDescriptionsItem', 'json', $context);
                }
                $object->setLocationDescriptions($values_1);
                unset($data['locationDescriptions']);
            }
            if (\array_key_exists('cleanedPostalCode', $data)) {
                $object->setCleanedPostalCode($data['cleanedPostalCode']);
                unset($data['cleanedPostalCode']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['countryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('cityFirstInitials') && null !== $object->getCityFirstInitials()) {
                $data['cityFirstInitials'] = $object->getCityFirstInitials();
            }
            if ($object->isInitialized('stateOrProvinceCode') && null !== $object->getStateOrProvinceCode()) {
                $data['stateOrProvinceCode'] = $object->getStateOrProvinceCode();
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values = [];
                foreach ($object->getAlerts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['alerts'] = $values;
            }
            if ($object->isInitialized('locationDescriptions') && null !== $object->getLocationDescriptions()) {
                $values_1 = [];
                foreach ($object->getLocationDescriptions() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['locationDescriptions'] = $values_1;
            }
            if ($object->isInitialized('cleanedPostalCode') && null !== $object->getCleanedPostalCode()) {
                $data['cleanedPostalCode'] = $object->getCleanedPostalCode();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\CountryV1PostalValidatePostResponse200Output' => false];
        }
    }
}
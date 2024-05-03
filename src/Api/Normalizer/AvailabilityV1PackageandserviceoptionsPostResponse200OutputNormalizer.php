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
    class AvailabilityV1PackageandserviceoptionsPostResponse200OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200Output';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200Output';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostResponse200Output();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('packageOptions', $data)) {
                $values = [];
                foreach ($data['packageOptions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItem', 'json', $context);
                }
                $object->setPackageOptions($values);
                unset($data['packageOptions']);
            }
            if (\array_key_exists('oneRate', $data)) {
                $object->setOneRate($data['oneRate']);
                unset($data['oneRate']);
            }
            if (\array_key_exists('advancedRegulatoryPackages', $data)) {
                $values_1 = [];
                foreach ($data['advancedRegulatoryPackages'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputAdvancedRegulatoryPackagesItem', 'json', $context);
                }
                $object->setAdvancedRegulatoryPackages($values_1);
                unset($data['advancedRegulatoryPackages']);
            }
            if (\array_key_exists('serviceOptions', $data)) {
                $values_2 = [];
                foreach ($data['serviceOptions'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputServiceOptionsItem', 'json', $context);
                }
                $object->setServiceOptions($values_2);
                unset($data['serviceOptions']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values_3 = [];
                foreach ($data['alerts'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputAlertsItem', 'json', $context);
                }
                $object->setAlerts($values_3);
                unset($data['alerts']);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('packageOptions') && null !== $object->getPackageOptions()) {
                $values = [];
                foreach ($object->getPackageOptions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['packageOptions'] = $values;
            }
            if ($object->isInitialized('oneRate') && null !== $object->getOneRate()) {
                $data['oneRate'] = $object->getOneRate();
            }
            if ($object->isInitialized('advancedRegulatoryPackages') && null !== $object->getAdvancedRegulatoryPackages()) {
                $values_1 = [];
                foreach ($object->getAdvancedRegulatoryPackages() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['advancedRegulatoryPackages'] = $values_1;
            }
            if ($object->isInitialized('serviceOptions') && null !== $object->getServiceOptions()) {
                $values_2 = [];
                foreach ($object->getServiceOptions() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['serviceOptions'] = $values_2;
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values_3 = [];
                foreach ($object->getAlerts() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['alerts'] = $values_3;
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200Output' => false];
        }
    }
} else {
    class AvailabilityV1PackageandserviceoptionsPostResponse200OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200Output';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200Output';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostResponse200Output();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('packageOptions', $data)) {
                $values = [];
                foreach ($data['packageOptions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItem', 'json', $context);
                }
                $object->setPackageOptions($values);
                unset($data['packageOptions']);
            }
            if (\array_key_exists('oneRate', $data)) {
                $object->setOneRate($data['oneRate']);
                unset($data['oneRate']);
            }
            if (\array_key_exists('advancedRegulatoryPackages', $data)) {
                $values_1 = [];
                foreach ($data['advancedRegulatoryPackages'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputAdvancedRegulatoryPackagesItem', 'json', $context);
                }
                $object->setAdvancedRegulatoryPackages($values_1);
                unset($data['advancedRegulatoryPackages']);
            }
            if (\array_key_exists('serviceOptions', $data)) {
                $values_2 = [];
                foreach ($data['serviceOptions'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputServiceOptionsItem', 'json', $context);
                }
                $object->setServiceOptions($values_2);
                unset($data['serviceOptions']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values_3 = [];
                foreach ($data['alerts'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputAlertsItem', 'json', $context);
                }
                $object->setAlerts($values_3);
                unset($data['alerts']);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
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
            if ($object->isInitialized('packageOptions') && null !== $object->getPackageOptions()) {
                $values = [];
                foreach ($object->getPackageOptions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['packageOptions'] = $values;
            }
            if ($object->isInitialized('oneRate') && null !== $object->getOneRate()) {
                $data['oneRate'] = $object->getOneRate();
            }
            if ($object->isInitialized('advancedRegulatoryPackages') && null !== $object->getAdvancedRegulatoryPackages()) {
                $values_1 = [];
                foreach ($object->getAdvancedRegulatoryPackages() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['advancedRegulatoryPackages'] = $values_1;
            }
            if ($object->isInitialized('serviceOptions') && null !== $object->getServiceOptions()) {
                $values_2 = [];
                foreach ($object->getServiceOptions() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['serviceOptions'] = $values_2;
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values_3 = [];
                foreach ($object->getAlerts() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['alerts'] = $values_3;
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200Output' => false];
        }
    }
}
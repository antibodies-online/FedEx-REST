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
    class AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('oneRateMaxWeightAllowed', $data)) {
                $object->setOneRateMaxWeightAllowed($data['oneRateMaxWeightAllowed']);
                unset($data['oneRateMaxWeightAllowed']);
            }
            if (\array_key_exists('maxWeightAllowed', $data)) {
                $object->setMaxWeightAllowed($data['maxWeightAllowed']);
                unset($data['maxWeightAllowed']);
            }
            if (\array_key_exists('rateTypes', $data)) {
                $values = [];
                foreach ($data['rateTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setRateTypes($values);
                unset($data['rateTypes']);
            }
            if (\array_key_exists('packagingInfoList', $data)) {
                $values_1 = [];
                foreach ($data['packagingInfoList'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemPackagingInfoListItem', 'json', $context);
                }
                $object->setPackagingInfoList($values_1);
                unset($data['packagingInfoList']);
            }
            if (\array_key_exists('packageType', $data)) {
                $object->setPackageType($this->denormalizer->denormalize($data['packageType'], 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemPackageType', 'json', $context));
                unset($data['packageType']);
            }
            if (\array_key_exists('maxMetricWeightAllowed', $data)) {
                $object->setMaxMetricWeightAllowed($data['maxMetricWeightAllowed']);
                unset($data['maxMetricWeightAllowed']);
            }
            if (\array_key_exists('oneRateMaxMetricWeightAllowed', $data)) {
                $object->setOneRateMaxMetricWeightAllowed($data['oneRateMaxMetricWeightAllowed']);
                unset($data['oneRateMaxMetricWeightAllowed']);
            }
            if (\array_key_exists('maxDeclaredValue', $data)) {
                $object->setMaxDeclaredValue($this->denormalizer->denormalize($data['maxDeclaredValue'], 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemMaxDeclaredValue', 'json', $context));
                unset($data['maxDeclaredValue']);
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
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('oneRateMaxWeightAllowed') && null !== $object->getOneRateMaxWeightAllowed()) {
                $data['oneRateMaxWeightAllowed'] = $object->getOneRateMaxWeightAllowed();
            }
            if ($object->isInitialized('maxWeightAllowed') && null !== $object->getMaxWeightAllowed()) {
                $data['maxWeightAllowed'] = $object->getMaxWeightAllowed();
            }
            if ($object->isInitialized('rateTypes') && null !== $object->getRateTypes()) {
                $values = [];
                foreach ($object->getRateTypes() as $value) {
                    $values[] = $value;
                }
                $data['rateTypes'] = $values;
            }
            if ($object->isInitialized('packagingInfoList') && null !== $object->getPackagingInfoList()) {
                $values_1 = [];
                foreach ($object->getPackagingInfoList() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['packagingInfoList'] = $values_1;
            }
            if ($object->isInitialized('packageType') && null !== $object->getPackageType()) {
                $data['packageType'] = $this->normalizer->normalize($object->getPackageType(), 'json', $context);
            }
            if ($object->isInitialized('maxMetricWeightAllowed') && null !== $object->getMaxMetricWeightAllowed()) {
                $data['maxMetricWeightAllowed'] = $object->getMaxMetricWeightAllowed();
            }
            if ($object->isInitialized('oneRateMaxMetricWeightAllowed') && null !== $object->getOneRateMaxMetricWeightAllowed()) {
                $data['oneRateMaxMetricWeightAllowed'] = $object->getOneRateMaxMetricWeightAllowed();
            }
            if ($object->isInitialized('maxDeclaredValue') && null !== $object->getMaxDeclaredValue()) {
                $data['maxDeclaredValue'] = $this->normalizer->normalize($object->getMaxDeclaredValue(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItem' => false];
        }
    }
} else {
    class AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItem';
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
            $object = new \AntibodiesOnline\FedEx\Model\AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('oneRateMaxWeightAllowed', $data)) {
                $object->setOneRateMaxWeightAllowed($data['oneRateMaxWeightAllowed']);
                unset($data['oneRateMaxWeightAllowed']);
            }
            if (\array_key_exists('maxWeightAllowed', $data)) {
                $object->setMaxWeightAllowed($data['maxWeightAllowed']);
                unset($data['maxWeightAllowed']);
            }
            if (\array_key_exists('rateTypes', $data)) {
                $values = [];
                foreach ($data['rateTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setRateTypes($values);
                unset($data['rateTypes']);
            }
            if (\array_key_exists('packagingInfoList', $data)) {
                $values_1 = [];
                foreach ($data['packagingInfoList'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemPackagingInfoListItem', 'json', $context);
                }
                $object->setPackagingInfoList($values_1);
                unset($data['packagingInfoList']);
            }
            if (\array_key_exists('packageType', $data)) {
                $object->setPackageType($this->denormalizer->denormalize($data['packageType'], 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemPackageType', 'json', $context));
                unset($data['packageType']);
            }
            if (\array_key_exists('maxMetricWeightAllowed', $data)) {
                $object->setMaxMetricWeightAllowed($data['maxMetricWeightAllowed']);
                unset($data['maxMetricWeightAllowed']);
            }
            if (\array_key_exists('oneRateMaxMetricWeightAllowed', $data)) {
                $object->setOneRateMaxMetricWeightAllowed($data['oneRateMaxMetricWeightAllowed']);
                unset($data['oneRateMaxMetricWeightAllowed']);
            }
            if (\array_key_exists('maxDeclaredValue', $data)) {
                $object->setMaxDeclaredValue($this->denormalizer->denormalize($data['maxDeclaredValue'], 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemMaxDeclaredValue', 'json', $context));
                unset($data['maxDeclaredValue']);
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
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('oneRateMaxWeightAllowed') && null !== $object->getOneRateMaxWeightAllowed()) {
                $data['oneRateMaxWeightAllowed'] = $object->getOneRateMaxWeightAllowed();
            }
            if ($object->isInitialized('maxWeightAllowed') && null !== $object->getMaxWeightAllowed()) {
                $data['maxWeightAllowed'] = $object->getMaxWeightAllowed();
            }
            if ($object->isInitialized('rateTypes') && null !== $object->getRateTypes()) {
                $values = [];
                foreach ($object->getRateTypes() as $value) {
                    $values[] = $value;
                }
                $data['rateTypes'] = $values;
            }
            if ($object->isInitialized('packagingInfoList') && null !== $object->getPackagingInfoList()) {
                $values_1 = [];
                foreach ($object->getPackagingInfoList() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['packagingInfoList'] = $values_1;
            }
            if ($object->isInitialized('packageType') && null !== $object->getPackageType()) {
                $data['packageType'] = $this->normalizer->normalize($object->getPackageType(), 'json', $context);
            }
            if ($object->isInitialized('maxMetricWeightAllowed') && null !== $object->getMaxMetricWeightAllowed()) {
                $data['maxMetricWeightAllowed'] = $object->getMaxMetricWeightAllowed();
            }
            if ($object->isInitialized('oneRateMaxMetricWeightAllowed') && null !== $object->getOneRateMaxMetricWeightAllowed()) {
                $data['oneRateMaxMetricWeightAllowed'] = $object->getOneRateMaxMetricWeightAllowed();
            }
            if ($object->isInitialized('maxDeclaredValue') && null !== $object->getMaxDeclaredValue()) {
                $data['maxDeclaredValue'] = $this->normalizer->normalize($object->getMaxDeclaredValue(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Model\\AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItem' => false];
        }
    }
}
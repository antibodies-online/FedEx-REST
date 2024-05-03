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
    class LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dayofweek', $data)) {
                $object->setDayofweek($data['dayofweek']);
                unset($data['dayofweek']);
            }
            if (\array_key_exists('operationalHoursType', $data)) {
                $object->setOperationalHoursType($data['operationalHoursType']);
                unset($data['operationalHoursType']);
            }
            if (\array_key_exists('operationalHours', $data)) {
                $values = [];
                foreach ($data['operationalHours'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItemOperationalHoursItem', 'json', $context);
                }
                $object->setOperationalHours($values);
                unset($data['operationalHours']);
            }
            if (\array_key_exists('exceptionalHoursType', $data)) {
                $object->setExceptionalHoursType($data['exceptionalHoursType']);
                unset($data['exceptionalHoursType']);
            }
            if (\array_key_exists('exceptionalHours', $data)) {
                $values_1 = [];
                foreach ($data['exceptionalHours'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItemExceptionalHoursItem', 'json', $context);
                }
                $object->setExceptionalHours($values_1);
                unset($data['exceptionalHours']);
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
            if ($object->isInitialized('dayofweek') && null !== $object->getDayofweek()) {
                $data['dayofweek'] = $object->getDayofweek();
            }
            if ($object->isInitialized('operationalHoursType') && null !== $object->getOperationalHoursType()) {
                $data['operationalHoursType'] = $object->getOperationalHoursType();
            }
            if ($object->isInitialized('operationalHours') && null !== $object->getOperationalHours()) {
                $values = [];
                foreach ($object->getOperationalHours() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['operationalHours'] = $values;
            }
            if ($object->isInitialized('exceptionalHoursType') && null !== $object->getExceptionalHoursType()) {
                $data['exceptionalHoursType'] = $object->getExceptionalHoursType();
            }
            if ($object->isInitialized('exceptionalHours') && null !== $object->getExceptionalHours()) {
                $values_1 = [];
                foreach ($object->getExceptionalHours() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['exceptionalHours'] = $values_1;
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
            return ['AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItem' => false];
        }
    }
} else {
    class LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItem';
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
            $object = new \AntibodiesOnline\FedEx\Model\LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dayofweek', $data)) {
                $object->setDayofweek($data['dayofweek']);
                unset($data['dayofweek']);
            }
            if (\array_key_exists('operationalHoursType', $data)) {
                $object->setOperationalHoursType($data['operationalHoursType']);
                unset($data['operationalHoursType']);
            }
            if (\array_key_exists('operationalHours', $data)) {
                $values = [];
                foreach ($data['operationalHours'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItemOperationalHoursItem', 'json', $context);
                }
                $object->setOperationalHours($values);
                unset($data['operationalHours']);
            }
            if (\array_key_exists('exceptionalHoursType', $data)) {
                $object->setExceptionalHoursType($data['exceptionalHoursType']);
                unset($data['exceptionalHoursType']);
            }
            if (\array_key_exists('exceptionalHours', $data)) {
                $values_1 = [];
                foreach ($data['exceptionalHours'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItemExceptionalHoursItem', 'json', $context);
                }
                $object->setExceptionalHours($values_1);
                unset($data['exceptionalHours']);
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
            if ($object->isInitialized('dayofweek') && null !== $object->getDayofweek()) {
                $data['dayofweek'] = $object->getDayofweek();
            }
            if ($object->isInitialized('operationalHoursType') && null !== $object->getOperationalHoursType()) {
                $data['operationalHoursType'] = $object->getOperationalHoursType();
            }
            if ($object->isInitialized('operationalHours') && null !== $object->getOperationalHours()) {
                $values = [];
                foreach ($object->getOperationalHours() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['operationalHours'] = $values;
            }
            if ($object->isInitialized('exceptionalHoursType') && null !== $object->getExceptionalHoursType()) {
                $data['exceptionalHoursType'] = $object->getExceptionalHoursType();
            }
            if ($object->isInitialized('exceptionalHours') && null !== $object->getExceptionalHours()) {
                $values_1 = [];
                foreach ($object->getExceptionalHours() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['exceptionalHours'] = $values_1;
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
            return ['AntibodiesOnline\\FedEx\\Model\\LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItem' => false];
        }
    }
}
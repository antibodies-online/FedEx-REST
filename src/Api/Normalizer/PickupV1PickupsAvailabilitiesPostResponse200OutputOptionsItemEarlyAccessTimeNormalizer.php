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
    class PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemEarlyAccessTimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemEarlyAccessTime';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemEarlyAccessTime';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemEarlyAccessTime();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('hours', $data)) {
                $object->setHours($data['hours']);
                unset($data['hours']);
            }
            if (\array_key_exists('minutes', $data)) {
                $object->setMinutes($data['minutes']);
                unset($data['minutes']);
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
            if ($object->isInitialized('hours') && null !== $object->getHours()) {
                $data['hours'] = $object->getHours();
            }
            if ($object->isInitialized('minutes') && null !== $object->getMinutes()) {
                $data['minutes'] = $object->getMinutes();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemEarlyAccessTime' => false];
        }
    }
} else {
    class PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemEarlyAccessTimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemEarlyAccessTime';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemEarlyAccessTime';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemEarlyAccessTime();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('hours', $data)) {
                $object->setHours($data['hours']);
                unset($data['hours']);
            }
            if (\array_key_exists('minutes', $data)) {
                $object->setMinutes($data['minutes']);
                unset($data['minutes']);
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
            if ($object->isInitialized('hours') && null !== $object->getHours()) {
                $data['hours'] = $object->getHours();
            }
            if ($object->isInitialized('minutes') && null !== $object->getMinutes()) {
                $data['minutes'] = $object->getMinutes();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemEarlyAccessTime' => false];
        }
    }
}
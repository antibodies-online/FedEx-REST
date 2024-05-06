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
    class PickupV1PickupsAvailabilitiesPostBodyShipmentAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostBodyShipmentAttributes';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostBodyShipmentAttributes';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostBodyShipmentAttributes();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostBodyShipmentAttributesweight', 'json', $context));
                unset($data['weight']);
            }
            if (\array_key_exists('packagingType', $data)) {
                $object->setPackagingType($data['packagingType']);
                unset($data['packagingType']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostBodyShipmentAttributesdimensions', 'json', $context));
                unset($data['dimensions']);
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
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            }
            if ($object->isInitialized('packagingType') && null !== $object->getPackagingType()) {
                $data['packagingType'] = $object->getPackagingType();
            }
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostBodyShipmentAttributes' => false];
        }
    }
} else {
    class PickupV1PickupsAvailabilitiesPostBodyShipmentAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostBodyShipmentAttributes';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostBodyShipmentAttributes';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostBodyShipmentAttributes();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostBodyShipmentAttributesweight', 'json', $context));
                unset($data['weight']);
            }
            if (\array_key_exists('packagingType', $data)) {
                $object->setPackagingType($data['packagingType']);
                unset($data['packagingType']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostBodyShipmentAttributesdimensions', 'json', $context));
                unset($data['dimensions']);
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
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            }
            if ($object->isInitialized('packagingType') && null !== $object->getPackagingType()) {
                $data['packagingType'] = $object->getPackagingType();
            }
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1PickupsAvailabilitiesPostBodyShipmentAttributes' => false];
        }
    }
}
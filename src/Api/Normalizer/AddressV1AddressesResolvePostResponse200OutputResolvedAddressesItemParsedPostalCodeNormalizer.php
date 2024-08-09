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
    class AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCodeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCode::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCode::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCode();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('base', $data)) {
                $object->setBase($data['base']);
                unset($data['base']);
            }
            if (\array_key_exists('addOn', $data)) {
                $object->setAddOn($data['addOn']);
                unset($data['addOn']);
            }
            if (\array_key_exists('deliveryPoint', $data)) {
                $object->setDeliveryPoint($data['deliveryPoint']);
                unset($data['deliveryPoint']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('base') && null !== $object->getBase()) {
                $data['base'] = $object->getBase();
            }
            if ($object->isInitialized('addOn') && null !== $object->getAddOn()) {
                $data['addOn'] = $object->getAddOn();
            }
            if ($object->isInitialized('deliveryPoint') && null !== $object->getDeliveryPoint()) {
                $data['deliveryPoint'] = $object->getDeliveryPoint();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCode::class => false];
        }
    }
} else {
    class AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCodeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCode::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCode::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCode();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('base', $data)) {
                $object->setBase($data['base']);
                unset($data['base']);
            }
            if (\array_key_exists('addOn', $data)) {
                $object->setAddOn($data['addOn']);
                unset($data['addOn']);
            }
            if (\array_key_exists('deliveryPoint', $data)) {
                $object->setDeliveryPoint($data['deliveryPoint']);
                unset($data['deliveryPoint']);
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
            if ($object->isInitialized('base') && null !== $object->getBase()) {
                $data['base'] = $object->getBase();
            }
            if ($object->isInitialized('addOn') && null !== $object->getAddOn()) {
                $data['addOn'] = $object->getAddOn();
            }
            if ($object->isInitialized('deliveryPoint') && null !== $object->getDeliveryPoint()) {
                $data['deliveryPoint'] = $object->getDeliveryPoint();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCode::class => false];
        }
    }
}
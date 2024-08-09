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
    class AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('declaredValue', $data)) {
                $object->setDeclaredValue($this->denormalizer->denormalize($data['declaredValue'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemDeclaredValue::class, 'json', $context));
                unset($data['declaredValue']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemWeight::class, 'json', $context));
                unset($data['weight']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemDimensions::class, 'json', $context));
                unset($data['dimensions']);
            }
            if (\array_key_exists('packageSpecialServices', $data)) {
                $object->setPackageSpecialServices($this->denormalizer->denormalize($data['packageSpecialServices'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices::class, 'json', $context));
                unset($data['packageSpecialServices']);
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
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['declaredValue'] = $this->normalizer->normalize($object->getDeclaredValue(), 'json', $context);
            }
            $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('packageSpecialServices') && null !== $object->getPackageSpecialServices()) {
                $data['packageSpecialServices'] = $this->normalizer->normalize($object->getPackageSpecialServices(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItem::class => false];
        }
    }
} else {
    class AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('declaredValue', $data)) {
                $object->setDeclaredValue($this->denormalizer->denormalize($data['declaredValue'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemDeclaredValue::class, 'json', $context));
                unset($data['declaredValue']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemWeight::class, 'json', $context));
                unset($data['weight']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemDimensions::class, 'json', $context));
                unset($data['dimensions']);
            }
            if (\array_key_exists('packageSpecialServices', $data)) {
                $object->setPackageSpecialServices($this->denormalizer->denormalize($data['packageSpecialServices'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices::class, 'json', $context));
                unset($data['packageSpecialServices']);
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
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['declaredValue'] = $this->normalizer->normalize($object->getDeclaredValue(), 'json', $context);
            }
            $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('packageSpecialServices') && null !== $object->getPackageSpecialServices()) {
                $data['packageSpecialServices'] = $this->normalizer->normalize($object->getPackageSpecialServices(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItem::class => false];
        }
    }
}
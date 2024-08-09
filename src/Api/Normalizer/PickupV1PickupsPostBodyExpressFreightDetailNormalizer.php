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
    class PickupV1PickupsPostBodyExpressFreightDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyExpressFreightDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyExpressFreightDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyExpressFreightDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('truckType', $data)) {
                $object->setTruckType($data['truckType']);
                unset($data['truckType']);
            }
            if (\array_key_exists('service', $data)) {
                $object->setService($data['service']);
                unset($data['service']);
            }
            if (\array_key_exists('trailerLength', $data)) {
                $object->setTrailerLength($data['trailerLength']);
                unset($data['trailerLength']);
            }
            if (\array_key_exists('bookingNumber', $data)) {
                $object->setBookingNumber($data['bookingNumber']);
                unset($data['bookingNumber']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyExpressFreightDetaildimensions::class, 'json', $context));
                unset($data['dimensions']);
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
            if ($object->isInitialized('truckType') && null !== $object->getTruckType()) {
                $data['truckType'] = $object->getTruckType();
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['service'] = $object->getService();
            }
            if ($object->isInitialized('trailerLength') && null !== $object->getTrailerLength()) {
                $data['trailerLength'] = $object->getTrailerLength();
            }
            if ($object->isInitialized('bookingNumber') && null !== $object->getBookingNumber()) {
                $data['bookingNumber'] = $object->getBookingNumber();
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
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyExpressFreightDetail::class => false];
        }
    }
} else {
    class PickupV1PickupsPostBodyExpressFreightDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyExpressFreightDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyExpressFreightDetail::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyExpressFreightDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('truckType', $data)) {
                $object->setTruckType($data['truckType']);
                unset($data['truckType']);
            }
            if (\array_key_exists('service', $data)) {
                $object->setService($data['service']);
                unset($data['service']);
            }
            if (\array_key_exists('trailerLength', $data)) {
                $object->setTrailerLength($data['trailerLength']);
                unset($data['trailerLength']);
            }
            if (\array_key_exists('bookingNumber', $data)) {
                $object->setBookingNumber($data['bookingNumber']);
                unset($data['bookingNumber']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyExpressFreightDetaildimensions::class, 'json', $context));
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
            if ($object->isInitialized('truckType') && null !== $object->getTruckType()) {
                $data['truckType'] = $object->getTruckType();
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['service'] = $object->getService();
            }
            if ($object->isInitialized('trailerLength') && null !== $object->getTrailerLength()) {
                $data['trailerLength'] = $object->getTrailerLength();
            }
            if ($object->isInitialized('bookingNumber') && null !== $object->getBookingNumber()) {
                $data['bookingNumber'] = $object->getBookingNumber();
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
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyExpressFreightDetail::class => false];
        }
    }
}
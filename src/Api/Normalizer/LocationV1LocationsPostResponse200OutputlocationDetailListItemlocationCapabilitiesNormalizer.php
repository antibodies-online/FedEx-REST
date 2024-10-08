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
    class LocationV1LocationsPostResponse200OutputlocationDetailListItemlocationCapabilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputlocationDetailListItemlocationCapabilities::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputlocationDetailListItemlocationCapabilities::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputlocationDetailListItemlocationCapabilities();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('carrierCode', $data)) {
                $object->setCarrierCode($data['carrierCode']);
                unset($data['carrierCode']);
            }
            if (\array_key_exists('transferOfPossessionType', $data)) {
                $object->setTransferOfPossessionType($data['transferOfPossessionType']);
                unset($data['transferOfPossessionType']);
            }
            if (\array_key_exists('serviceCategory', $data)) {
                $object->setServiceCategory($data['serviceCategory']);
                unset($data['serviceCategory']);
            }
            if (\array_key_exists('daysOfWeek', $data)) {
                $values = [];
                foreach ($data['daysOfWeek'] as $value) {
                    $values[] = $value;
                }
                $object->setDaysOfWeek($values);
                unset($data['daysOfWeek']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('carrierCode') && null !== $object->getCarrierCode()) {
                $data['carrierCode'] = $object->getCarrierCode();
            }
            if ($object->isInitialized('transferOfPossessionType') && null !== $object->getTransferOfPossessionType()) {
                $data['transferOfPossessionType'] = $object->getTransferOfPossessionType();
            }
            if ($object->isInitialized('serviceCategory') && null !== $object->getServiceCategory()) {
                $data['serviceCategory'] = $object->getServiceCategory();
            }
            if ($object->isInitialized('daysOfWeek') && null !== $object->getDaysOfWeek()) {
                $values = [];
                foreach ($object->getDaysOfWeek() as $value) {
                    $values[] = $value;
                }
                $data['daysOfWeek'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputlocationDetailListItemlocationCapabilities::class => false];
        }
    }
} else {
    class LocationV1LocationsPostResponse200OutputlocationDetailListItemlocationCapabilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputlocationDetailListItemlocationCapabilities::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputlocationDetailListItemlocationCapabilities::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputlocationDetailListItemlocationCapabilities();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('carrierCode', $data)) {
                $object->setCarrierCode($data['carrierCode']);
                unset($data['carrierCode']);
            }
            if (\array_key_exists('transferOfPossessionType', $data)) {
                $object->setTransferOfPossessionType($data['transferOfPossessionType']);
                unset($data['transferOfPossessionType']);
            }
            if (\array_key_exists('serviceCategory', $data)) {
                $object->setServiceCategory($data['serviceCategory']);
                unset($data['serviceCategory']);
            }
            if (\array_key_exists('daysOfWeek', $data)) {
                $values = [];
                foreach ($data['daysOfWeek'] as $value) {
                    $values[] = $value;
                }
                $object->setDaysOfWeek($values);
                unset($data['daysOfWeek']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('carrierCode') && null !== $object->getCarrierCode()) {
                $data['carrierCode'] = $object->getCarrierCode();
            }
            if ($object->isInitialized('transferOfPossessionType') && null !== $object->getTransferOfPossessionType()) {
                $data['transferOfPossessionType'] = $object->getTransferOfPossessionType();
            }
            if ($object->isInitialized('serviceCategory') && null !== $object->getServiceCategory()) {
                $data['serviceCategory'] = $object->getServiceCategory();
            }
            if ($object->isInitialized('daysOfWeek') && null !== $object->getDaysOfWeek()) {
                $values = [];
                foreach ($object->getDaysOfWeek() as $value) {
                    $values[] = $value;
                }
                $data['daysOfWeek'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputlocationDetailListItemlocationCapabilities::class => false];
        }
    }
}
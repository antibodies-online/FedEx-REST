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
    class AvailabilityV1PackageandserviceoptionsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('requestedShipment', $data)) {
                $object->setRequestedShipment($data['requestedShipment']);
                unset($data['requestedShipment']);
            }
            if (\array_key_exists('carrierCodes', $data)) {
                $values = [];
                foreach ($data['carrierCodes'] as $value) {
                    $values[] = $value;
                }
                $object->setCarrierCodes($values);
                unset($data['carrierCodes']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostBodyAccountNumber::class, 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('systemOfMeasureType', $data)) {
                $object->setSystemOfMeasureType($data['systemOfMeasureType']);
                unset($data['systemOfMeasureType']);
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
            $data['requestedShipment'] = $object->getRequestedShipment();
            if ($object->isInitialized('carrierCodes') && null !== $object->getCarrierCodes()) {
                $values = [];
                foreach ($object->getCarrierCodes() as $value) {
                    $values[] = $value;
                }
                $data['carrierCodes'] = $values;
            }
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            }
            if ($object->isInitialized('systemOfMeasureType') && null !== $object->getSystemOfMeasureType()) {
                $data['systemOfMeasureType'] = $object->getSystemOfMeasureType();
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
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostBody::class => false];
        }
    }
} else {
    class AvailabilityV1PackageandserviceoptionsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostBody::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('requestedShipment', $data)) {
                $object->setRequestedShipment($data['requestedShipment']);
                unset($data['requestedShipment']);
            }
            if (\array_key_exists('carrierCodes', $data)) {
                $values = [];
                foreach ($data['carrierCodes'] as $value) {
                    $values[] = $value;
                }
                $object->setCarrierCodes($values);
                unset($data['carrierCodes']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostBodyAccountNumber::class, 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('systemOfMeasureType', $data)) {
                $object->setSystemOfMeasureType($data['systemOfMeasureType']);
                unset($data['systemOfMeasureType']);
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
            $data['requestedShipment'] = $object->getRequestedShipment();
            if ($object->isInitialized('carrierCodes') && null !== $object->getCarrierCodes()) {
                $values = [];
                foreach ($object->getCarrierCodes() as $value) {
                    $values[] = $value;
                }
                $data['carrierCodes'] = $values;
            }
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            }
            if ($object->isInitialized('systemOfMeasureType') && null !== $object->getSystemOfMeasureType()) {
                $data['systemOfMeasureType'] = $object->getSystemOfMeasureType();
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
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostBody::class => false];
        }
    }
}
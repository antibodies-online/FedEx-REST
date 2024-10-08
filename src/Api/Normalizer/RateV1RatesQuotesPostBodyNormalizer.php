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
    class RateV1RatesQuotesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyAccountNumber::class, 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('rateRequestControlParameters', $data)) {
                $object->setRateRequestControlParameters($this->denormalizer->denormalize($data['rateRequestControlParameters'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRateRequestControlParameters::class, 'json', $context));
                unset($data['rateRequestControlParameters']);
            }
            if (\array_key_exists('requestedShipment', $data)) {
                $object->setRequestedShipment($this->denormalizer->denormalize($data['requestedShipment'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipment::class, 'json', $context));
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
            $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            if ($object->isInitialized('rateRequestControlParameters') && null !== $object->getRateRequestControlParameters()) {
                $data['rateRequestControlParameters'] = $this->normalizer->normalize($object->getRateRequestControlParameters(), 'json', $context);
            }
            $data['requestedShipment'] = $this->normalizer->normalize($object->getRequestedShipment(), 'json', $context);
            if ($object->isInitialized('carrierCodes') && null !== $object->getCarrierCodes()) {
                $values = [];
                foreach ($object->getCarrierCodes() as $value) {
                    $values[] = $value;
                }
                $data['carrierCodes'] = $values;
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBody::class => false];
        }
    }
} else {
    class RateV1RatesQuotesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBody::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyAccountNumber::class, 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('rateRequestControlParameters', $data)) {
                $object->setRateRequestControlParameters($this->denormalizer->denormalize($data['rateRequestControlParameters'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRateRequestControlParameters::class, 'json', $context));
                unset($data['rateRequestControlParameters']);
            }
            if (\array_key_exists('requestedShipment', $data)) {
                $object->setRequestedShipment($this->denormalizer->denormalize($data['requestedShipment'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipment::class, 'json', $context));
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
            $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            if ($object->isInitialized('rateRequestControlParameters') && null !== $object->getRateRequestControlParameters()) {
                $data['rateRequestControlParameters'] = $this->normalizer->normalize($object->getRateRequestControlParameters(), 'json', $context);
            }
            $data['requestedShipment'] = $this->normalizer->normalize($object->getRequestedShipment(), 'json', $context);
            if ($object->isInitialized('carrierCodes') && null !== $object->getCarrierCodes()) {
                $values = [];
                foreach ($object->getCarrierCodes() as $value) {
                    $values[] = $value;
                }
                $data['carrierCodes'] = $values;
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBody::class => false];
        }
    }
}
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
    class RateV1FreightRatesQuotesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyAccountNumber::class, 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('rateRequestControlParameters', $data)) {
                $object->setRateRequestControlParameters($this->denormalizer->denormalize($data['rateRequestControlParameters'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyRateRequestControlParameters::class, 'json', $context));
                unset($data['rateRequestControlParameters']);
            }
            if (\array_key_exists('freightRequestedShipment', $data)) {
                $object->setFreightRequestedShipment($this->denormalizer->denormalize($data['freightRequestedShipment'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipment::class, 'json', $context));
                unset($data['freightRequestedShipment']);
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
            $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            if ($object->isInitialized('rateRequestControlParameters') && null !== $object->getRateRequestControlParameters()) {
                $data['rateRequestControlParameters'] = $this->normalizer->normalize($object->getRateRequestControlParameters(), 'json', $context);
            }
            $data['freightRequestedShipment'] = $this->normalizer->normalize($object->getFreightRequestedShipment(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBody::class => false];
        }
    }
} else {
    class RateV1FreightRatesQuotesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBody::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyAccountNumber::class, 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('rateRequestControlParameters', $data)) {
                $object->setRateRequestControlParameters($this->denormalizer->denormalize($data['rateRequestControlParameters'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyRateRequestControlParameters::class, 'json', $context));
                unset($data['rateRequestControlParameters']);
            }
            if (\array_key_exists('freightRequestedShipment', $data)) {
                $object->setFreightRequestedShipment($this->denormalizer->denormalize($data['freightRequestedShipment'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipment::class, 'json', $context));
                unset($data['freightRequestedShipment']);
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
            $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            if ($object->isInitialized('rateRequestControlParameters') && null !== $object->getRateRequestControlParameters()) {
                $data['rateRequestControlParameters'] = $this->normalizer->normalize($object->getRateRequestControlParameters(), 'json', $context);
            }
            $data['freightRequestedShipment'] = $this->normalizer->normalize($object->getFreightRequestedShipment(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBody::class => false];
        }
    }
}
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
    class RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('brokers', $data)) {
                $values = [];
                foreach ($data['brokers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItem::class, 'json', $context);
                }
                $object->setBrokers($values);
                unset($data['brokers']);
            }
            if (\array_key_exists('commercialInvoice', $data)) {
                $object->setCommercialInvoice($this->denormalizer->denormalize($data['commercialInvoice'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailcommercialInvoice::class, 'json', $context));
                unset($data['commercialInvoice']);
            }
            if (\array_key_exists('freightOnValue', $data)) {
                $object->setFreightOnValue($data['freightOnValue']);
                unset($data['freightOnValue']);
            }
            if (\array_key_exists('dutiesPayment', $data)) {
                $object->setDutiesPayment($this->denormalizer->denormalize($data['dutiesPayment'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPayment::class, 'json', $context));
                unset($data['dutiesPayment']);
            }
            if (\array_key_exists('commodities', $data)) {
                $values_1 = [];
                foreach ($data['commodities'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailcommoditiesItem::class, 'json', $context);
                }
                $object->setCommodities($values_1);
                unset($data['commodities']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('brokers') && null !== $object->getBrokers()) {
                $values = [];
                foreach ($object->getBrokers() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['brokers'] = $values;
            }
            if ($object->isInitialized('commercialInvoice') && null !== $object->getCommercialInvoice()) {
                $data['commercialInvoice'] = $this->normalizer->normalize($object->getCommercialInvoice(), 'json', $context);
            }
            if ($object->isInitialized('freightOnValue') && null !== $object->getFreightOnValue()) {
                $data['freightOnValue'] = $object->getFreightOnValue();
            }
            if ($object->isInitialized('dutiesPayment') && null !== $object->getDutiesPayment()) {
                $data['dutiesPayment'] = $this->normalizer->normalize($object->getDutiesPayment(), 'json', $context);
            }
            $values_1 = [];
            foreach ($object->getCommodities() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['commodities'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetail::class => false];
        }
    }
} else {
    class RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetail::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('brokers', $data)) {
                $values = [];
                foreach ($data['brokers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItem::class, 'json', $context);
                }
                $object->setBrokers($values);
                unset($data['brokers']);
            }
            if (\array_key_exists('commercialInvoice', $data)) {
                $object->setCommercialInvoice($this->denormalizer->denormalize($data['commercialInvoice'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailcommercialInvoice::class, 'json', $context));
                unset($data['commercialInvoice']);
            }
            if (\array_key_exists('freightOnValue', $data)) {
                $object->setFreightOnValue($data['freightOnValue']);
                unset($data['freightOnValue']);
            }
            if (\array_key_exists('dutiesPayment', $data)) {
                $object->setDutiesPayment($this->denormalizer->denormalize($data['dutiesPayment'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPayment::class, 'json', $context));
                unset($data['dutiesPayment']);
            }
            if (\array_key_exists('commodities', $data)) {
                $values_1 = [];
                foreach ($data['commodities'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailcommoditiesItem::class, 'json', $context);
                }
                $object->setCommodities($values_1);
                unset($data['commodities']);
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
            if ($object->isInitialized('brokers') && null !== $object->getBrokers()) {
                $values = [];
                foreach ($object->getBrokers() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['brokers'] = $values;
            }
            if ($object->isInitialized('commercialInvoice') && null !== $object->getCommercialInvoice()) {
                $data['commercialInvoice'] = $this->normalizer->normalize($object->getCommercialInvoice(), 'json', $context);
            }
            if ($object->isInitialized('freightOnValue') && null !== $object->getFreightOnValue()) {
                $data['freightOnValue'] = $object->getFreightOnValue();
            }
            if ($object->isInitialized('dutiesPayment') && null !== $object->getDutiesPayment()) {
                $data['dutiesPayment'] = $this->normalizer->normalize($object->getDutiesPayment(), 'json', $context);
            }
            $values_1 = [];
            foreach ($object->getCommodities() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['commodities'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetail::class => false];
        }
    }
}
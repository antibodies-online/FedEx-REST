<?php

namespace AntibodiesOnline\FedEx\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use AntibodiesOnline\FedEx\Runtime\Normalizer\CheckArray;
use AntibodiesOnline\FedEx\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class RateV1FreightRatesQuotesPostResponse200OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200Output';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200Output';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\RateV1FreightRatesQuotesPostResponse200Output();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('customerTransactionId', $data)) {
                $object->setCustomerTransactionId($data['customerTransactionId']);
                unset($data['customerTransactionId']);
            }
            if (\array_key_exists('rateReplyDetails', $data)) {
                $values = [];
                foreach ($data['rateReplyDetails'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItem', 'json', $context);
                }
                $object->setRateReplyDetails($values);
                unset($data['rateReplyDetails']);
            }
            if (\array_key_exists('quoteDate', $data)) {
                $object->setQuoteDate($data['quoteDate']);
                unset($data['quoteDate']);
            }
            if (\array_key_exists('encoded', $data)) {
                $object->setEncoded($data['encoded']);
                unset($data['encoded']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values_1 = [];
                foreach ($data['alerts'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputAlertsItem', 'json', $context);
                }
                $object->setAlerts($values_1);
                unset($data['alerts']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('customerTransactionId') && null !== $object->getCustomerTransactionId()) {
                $data['customerTransactionId'] = $object->getCustomerTransactionId();
            }
            if ($object->isInitialized('rateReplyDetails') && null !== $object->getRateReplyDetails()) {
                $values = [];
                foreach ($object->getRateReplyDetails() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['rateReplyDetails'] = $values;
            }
            if ($object->isInitialized('quoteDate') && null !== $object->getQuoteDate()) {
                $data['quoteDate'] = $object->getQuoteDate();
            }
            if ($object->isInitialized('encoded') && null !== $object->getEncoded()) {
                $data['encoded'] = $object->getEncoded();
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values_1 = [];
                foreach ($object->getAlerts() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['alerts'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200Output' => false];
        }
    }
} else {
    class RateV1FreightRatesQuotesPostResponse200OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200Output';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200Output';
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
            $object = new \AntibodiesOnline\FedEx\Model\RateV1FreightRatesQuotesPostResponse200Output();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('customerTransactionId', $data)) {
                $object->setCustomerTransactionId($data['customerTransactionId']);
                unset($data['customerTransactionId']);
            }
            if (\array_key_exists('rateReplyDetails', $data)) {
                $values = [];
                foreach ($data['rateReplyDetails'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItem', 'json', $context);
                }
                $object->setRateReplyDetails($values);
                unset($data['rateReplyDetails']);
            }
            if (\array_key_exists('quoteDate', $data)) {
                $object->setQuoteDate($data['quoteDate']);
                unset($data['quoteDate']);
            }
            if (\array_key_exists('encoded', $data)) {
                $object->setEncoded($data['encoded']);
                unset($data['encoded']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values_1 = [];
                foreach ($data['alerts'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputAlertsItem', 'json', $context);
                }
                $object->setAlerts($values_1);
                unset($data['alerts']);
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
            if ($object->isInitialized('customerTransactionId') && null !== $object->getCustomerTransactionId()) {
                $data['customerTransactionId'] = $object->getCustomerTransactionId();
            }
            if ($object->isInitialized('rateReplyDetails') && null !== $object->getRateReplyDetails()) {
                $values = [];
                foreach ($object->getRateReplyDetails() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['rateReplyDetails'] = $values;
            }
            if ($object->isInitialized('quoteDate') && null !== $object->getQuoteDate()) {
                $data['quoteDate'] = $object->getQuoteDate();
            }
            if ($object->isInitialized('encoded') && null !== $object->getEncoded()) {
                $data['encoded'] = $object->getEncoded();
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values_1 = [];
                foreach ($object->getAlerts() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['alerts'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200Output' => false];
        }
    }
}
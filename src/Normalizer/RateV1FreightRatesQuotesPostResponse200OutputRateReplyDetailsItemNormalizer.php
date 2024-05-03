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
    class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('serviceName', $data)) {
                $object->setServiceName($data['serviceName']);
                unset($data['serviceName']);
            }
            if (\array_key_exists('packagingType', $data)) {
                $object->setPackagingType($data['packagingType']);
                unset($data['packagingType']);
            }
            if (\array_key_exists('customerMessages', $data)) {
                $values = [];
                foreach ($data['customerMessages'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCustomerMessagesItem', 'json', $context);
                }
                $object->setCustomerMessages($values);
                unset($data['customerMessages']);
            }
            if (\array_key_exists('ratedShipmentDetails', $data)) {
                $object->setRatedShipmentDetails($this->denormalizer->denormalize($data['ratedShipmentDetails'], 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetails', 'json', $context));
                unset($data['ratedShipmentDetails']);
            }
            if (\array_key_exists('freightTransitLocationDetail', $data)) {
                $values_1 = [];
                foreach ($data['freightTransitLocationDetail'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItem', 'json', $context);
                }
                $object->setFreightTransitLocationDetail($values_1);
                unset($data['freightTransitLocationDetail']);
            }
            if (\array_key_exists('operationalDetail', $data)) {
                $object->setOperationalDetail($this->denormalizer->denormalize($data['operationalDetail'], 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail', 'json', $context));
                unset($data['operationalDetail']);
            }
            if (\array_key_exists('signatureOptionType', $data)) {
                $object->setSignatureOptionType($data['signatureOptionType']);
                unset($data['signatureOptionType']);
            }
            if (\array_key_exists('serviceDescription', $data)) {
                $object->setServiceDescription($this->denormalizer->denormalize($data['serviceDescription'], 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemServiceDescription', 'json', $context));
                unset($data['serviceDescription']);
            }
            if (\array_key_exists('brokerDetail', $data)) {
                $object->setBrokerDetail($this->denormalizer->denormalize($data['brokerDetail'], 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetail', 'json', $context));
                unset($data['brokerDetail']);
            }
            if (\array_key_exists('commit', $data)) {
                $object->setCommit($this->denormalizer->denormalize($data['commit'], 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommit', 'json', $context));
                unset($data['commit']);
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
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('serviceName') && null !== $object->getServiceName()) {
                $data['serviceName'] = $object->getServiceName();
            }
            if ($object->isInitialized('packagingType') && null !== $object->getPackagingType()) {
                $data['packagingType'] = $object->getPackagingType();
            }
            if ($object->isInitialized('customerMessages') && null !== $object->getCustomerMessages()) {
                $values = [];
                foreach ($object->getCustomerMessages() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customerMessages'] = $values;
            }
            if ($object->isInitialized('ratedShipmentDetails') && null !== $object->getRatedShipmentDetails()) {
                $data['ratedShipmentDetails'] = $this->normalizer->normalize($object->getRatedShipmentDetails(), 'json', $context);
            }
            if ($object->isInitialized('freightTransitLocationDetail') && null !== $object->getFreightTransitLocationDetail()) {
                $values_1 = [];
                foreach ($object->getFreightTransitLocationDetail() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['freightTransitLocationDetail'] = $values_1;
            }
            if ($object->isInitialized('operationalDetail') && null !== $object->getOperationalDetail()) {
                $data['operationalDetail'] = $this->normalizer->normalize($object->getOperationalDetail(), 'json', $context);
            }
            if ($object->isInitialized('signatureOptionType') && null !== $object->getSignatureOptionType()) {
                $data['signatureOptionType'] = $object->getSignatureOptionType();
            }
            if ($object->isInitialized('serviceDescription') && null !== $object->getServiceDescription()) {
                $data['serviceDescription'] = $this->normalizer->normalize($object->getServiceDescription(), 'json', $context);
            }
            if ($object->isInitialized('brokerDetail') && null !== $object->getBrokerDetail()) {
                $data['brokerDetail'] = $this->normalizer->normalize($object->getBrokerDetail(), 'json', $context);
            }
            if ($object->isInitialized('commit') && null !== $object->getCommit()) {
                $data['commit'] = $this->normalizer->normalize($object->getCommit(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItem' => false];
        }
    }
} else {
    class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItem';
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
            $object = new \AntibodiesOnline\FedEx\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('serviceName', $data)) {
                $object->setServiceName($data['serviceName']);
                unset($data['serviceName']);
            }
            if (\array_key_exists('packagingType', $data)) {
                $object->setPackagingType($data['packagingType']);
                unset($data['packagingType']);
            }
            if (\array_key_exists('customerMessages', $data)) {
                $values = [];
                foreach ($data['customerMessages'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCustomerMessagesItem', 'json', $context);
                }
                $object->setCustomerMessages($values);
                unset($data['customerMessages']);
            }
            if (\array_key_exists('ratedShipmentDetails', $data)) {
                $object->setRatedShipmentDetails($this->denormalizer->denormalize($data['ratedShipmentDetails'], 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetails', 'json', $context));
                unset($data['ratedShipmentDetails']);
            }
            if (\array_key_exists('freightTransitLocationDetail', $data)) {
                $values_1 = [];
                foreach ($data['freightTransitLocationDetail'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItem', 'json', $context);
                }
                $object->setFreightTransitLocationDetail($values_1);
                unset($data['freightTransitLocationDetail']);
            }
            if (\array_key_exists('operationalDetail', $data)) {
                $object->setOperationalDetail($this->denormalizer->denormalize($data['operationalDetail'], 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemOperationalDetail', 'json', $context));
                unset($data['operationalDetail']);
            }
            if (\array_key_exists('signatureOptionType', $data)) {
                $object->setSignatureOptionType($data['signatureOptionType']);
                unset($data['signatureOptionType']);
            }
            if (\array_key_exists('serviceDescription', $data)) {
                $object->setServiceDescription($this->denormalizer->denormalize($data['serviceDescription'], 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemServiceDescription', 'json', $context));
                unset($data['serviceDescription']);
            }
            if (\array_key_exists('brokerDetail', $data)) {
                $object->setBrokerDetail($this->denormalizer->denormalize($data['brokerDetail'], 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetail', 'json', $context));
                unset($data['brokerDetail']);
            }
            if (\array_key_exists('commit', $data)) {
                $object->setCommit($this->denormalizer->denormalize($data['commit'], 'AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommit', 'json', $context));
                unset($data['commit']);
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
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('serviceName') && null !== $object->getServiceName()) {
                $data['serviceName'] = $object->getServiceName();
            }
            if ($object->isInitialized('packagingType') && null !== $object->getPackagingType()) {
                $data['packagingType'] = $object->getPackagingType();
            }
            if ($object->isInitialized('customerMessages') && null !== $object->getCustomerMessages()) {
                $values = [];
                foreach ($object->getCustomerMessages() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customerMessages'] = $values;
            }
            if ($object->isInitialized('ratedShipmentDetails') && null !== $object->getRatedShipmentDetails()) {
                $data['ratedShipmentDetails'] = $this->normalizer->normalize($object->getRatedShipmentDetails(), 'json', $context);
            }
            if ($object->isInitialized('freightTransitLocationDetail') && null !== $object->getFreightTransitLocationDetail()) {
                $values_1 = [];
                foreach ($object->getFreightTransitLocationDetail() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['freightTransitLocationDetail'] = $values_1;
            }
            if ($object->isInitialized('operationalDetail') && null !== $object->getOperationalDetail()) {
                $data['operationalDetail'] = $this->normalizer->normalize($object->getOperationalDetail(), 'json', $context);
            }
            if ($object->isInitialized('signatureOptionType') && null !== $object->getSignatureOptionType()) {
                $data['signatureOptionType'] = $object->getSignatureOptionType();
            }
            if ($object->isInitialized('serviceDescription') && null !== $object->getServiceDescription()) {
                $data['serviceDescription'] = $this->normalizer->normalize($object->getServiceDescription(), 'json', $context);
            }
            if ($object->isInitialized('brokerDetail') && null !== $object->getBrokerDetail()) {
                $data['brokerDetail'] = $this->normalizer->normalize($object->getBrokerDetail(), 'json', $context);
            }
            if ($object->isInitialized('commit') && null !== $object->getCommit()) {
                $data['commit'] = $this->normalizer->normalize($object->getCommit(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItem' => false];
        }
    }
}
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
    class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipment::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipment::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipper', $data)) {
                $object->setShipper($this->denormalizer->denormalize($data['shipper'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShipper::class, 'json', $context));
                unset($data['shipper']);
            }
            if (\array_key_exists('recipient', $data)) {
                $object->setRecipient($this->denormalizer->denormalize($data['recipient'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRecipient::class, 'json', $context));
                unset($data['recipient']);
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('preferredCurrency', $data)) {
                $object->setPreferredCurrency($data['preferredCurrency']);
                unset($data['preferredCurrency']);
            }
            if (\array_key_exists('shippingChargesPayment', $data)) {
                $object->setShippingChargesPayment($this->denormalizer->denormalize($data['shippingChargesPayment'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPayment::class, 'json', $context));
                unset($data['shippingChargesPayment']);
            }
            if (\array_key_exists('rateRequestType', $data)) {
                $values = [];
                foreach ($data['rateRequestType'] as $value) {
                    $values[] = $value;
                }
                $object->setRateRequestType($values);
                unset($data['rateRequestType']);
            }
            if (\array_key_exists('shipDateStamp', $data)) {
                $object->setShipDateStamp($data['shipDateStamp']);
                unset($data['shipDateStamp']);
            }
            if (\array_key_exists('requestedPackageLineItems', $data)) {
                $values_1 = [];
                foreach ($data['requestedPackageLineItems'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem::class, 'json', $context);
                }
                $object->setRequestedPackageLineItems($values_1);
                unset($data['requestedPackageLineItems']);
            }
            if (\array_key_exists('totalPackageCount', $data)) {
                $object->setTotalPackageCount($data['totalPackageCount']);
                unset($data['totalPackageCount']);
            }
            if (\array_key_exists('totalWeight', $data)) {
                $object->setTotalWeight($data['totalWeight']);
                unset($data['totalWeight']);
            }
            if (\array_key_exists('freightShipmentDetail', $data)) {
                $object->setFreightShipmentDetail($this->denormalizer->denormalize($data['freightShipmentDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetail::class, 'json', $context));
                unset($data['freightShipmentDetail']);
            }
            if (\array_key_exists('freightShipmentSpecialServices', $data)) {
                $object->setFreightShipmentSpecialServices($this->denormalizer->denormalize($data['freightShipmentSpecialServices'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServices::class, 'json', $context));
                unset($data['freightShipmentSpecialServices']);
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
            $data['shipper'] = $this->normalizer->normalize($object->getShipper(), 'json', $context);
            $data['recipient'] = $this->normalizer->normalize($object->getRecipient(), 'json', $context);
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('preferredCurrency') && null !== $object->getPreferredCurrency()) {
                $data['preferredCurrency'] = $object->getPreferredCurrency();
            }
            if ($object->isInitialized('shippingChargesPayment') && null !== $object->getShippingChargesPayment()) {
                $data['shippingChargesPayment'] = $this->normalizer->normalize($object->getShippingChargesPayment(), 'json', $context);
            }
            if ($object->isInitialized('rateRequestType') && null !== $object->getRateRequestType()) {
                $values = [];
                foreach ($object->getRateRequestType() as $value) {
                    $values[] = $value;
                }
                $data['rateRequestType'] = $values;
            }
            if ($object->isInitialized('shipDateStamp') && null !== $object->getShipDateStamp()) {
                $data['shipDateStamp'] = $object->getShipDateStamp();
            }
            $values_1 = [];
            foreach ($object->getRequestedPackageLineItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['requestedPackageLineItems'] = $values_1;
            if ($object->isInitialized('totalPackageCount') && null !== $object->getTotalPackageCount()) {
                $data['totalPackageCount'] = $object->getTotalPackageCount();
            }
            if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
                $data['totalWeight'] = $object->getTotalWeight();
            }
            $data['freightShipmentDetail'] = $this->normalizer->normalize($object->getFreightShipmentDetail(), 'json', $context);
            if ($object->isInitialized('freightShipmentSpecialServices') && null !== $object->getFreightShipmentSpecialServices()) {
                $data['freightShipmentSpecialServices'] = $this->normalizer->normalize($object->getFreightShipmentSpecialServices(), 'json', $context);
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipment::class => false];
        }
    }
} else {
    class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipment::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipment::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipper', $data)) {
                $object->setShipper($this->denormalizer->denormalize($data['shipper'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShipper::class, 'json', $context));
                unset($data['shipper']);
            }
            if (\array_key_exists('recipient', $data)) {
                $object->setRecipient($this->denormalizer->denormalize($data['recipient'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRecipient::class, 'json', $context));
                unset($data['recipient']);
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('preferredCurrency', $data)) {
                $object->setPreferredCurrency($data['preferredCurrency']);
                unset($data['preferredCurrency']);
            }
            if (\array_key_exists('shippingChargesPayment', $data)) {
                $object->setShippingChargesPayment($this->denormalizer->denormalize($data['shippingChargesPayment'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPayment::class, 'json', $context));
                unset($data['shippingChargesPayment']);
            }
            if (\array_key_exists('rateRequestType', $data)) {
                $values = [];
                foreach ($data['rateRequestType'] as $value) {
                    $values[] = $value;
                }
                $object->setRateRequestType($values);
                unset($data['rateRequestType']);
            }
            if (\array_key_exists('shipDateStamp', $data)) {
                $object->setShipDateStamp($data['shipDateStamp']);
                unset($data['shipDateStamp']);
            }
            if (\array_key_exists('requestedPackageLineItems', $data)) {
                $values_1 = [];
                foreach ($data['requestedPackageLineItems'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem::class, 'json', $context);
                }
                $object->setRequestedPackageLineItems($values_1);
                unset($data['requestedPackageLineItems']);
            }
            if (\array_key_exists('totalPackageCount', $data)) {
                $object->setTotalPackageCount($data['totalPackageCount']);
                unset($data['totalPackageCount']);
            }
            if (\array_key_exists('totalWeight', $data)) {
                $object->setTotalWeight($data['totalWeight']);
                unset($data['totalWeight']);
            }
            if (\array_key_exists('freightShipmentDetail', $data)) {
                $object->setFreightShipmentDetail($this->denormalizer->denormalize($data['freightShipmentDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetail::class, 'json', $context));
                unset($data['freightShipmentDetail']);
            }
            if (\array_key_exists('freightShipmentSpecialServices', $data)) {
                $object->setFreightShipmentSpecialServices($this->denormalizer->denormalize($data['freightShipmentSpecialServices'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServices::class, 'json', $context));
                unset($data['freightShipmentSpecialServices']);
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
            $data['shipper'] = $this->normalizer->normalize($object->getShipper(), 'json', $context);
            $data['recipient'] = $this->normalizer->normalize($object->getRecipient(), 'json', $context);
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('preferredCurrency') && null !== $object->getPreferredCurrency()) {
                $data['preferredCurrency'] = $object->getPreferredCurrency();
            }
            if ($object->isInitialized('shippingChargesPayment') && null !== $object->getShippingChargesPayment()) {
                $data['shippingChargesPayment'] = $this->normalizer->normalize($object->getShippingChargesPayment(), 'json', $context);
            }
            if ($object->isInitialized('rateRequestType') && null !== $object->getRateRequestType()) {
                $values = [];
                foreach ($object->getRateRequestType() as $value) {
                    $values[] = $value;
                }
                $data['rateRequestType'] = $values;
            }
            if ($object->isInitialized('shipDateStamp') && null !== $object->getShipDateStamp()) {
                $data['shipDateStamp'] = $object->getShipDateStamp();
            }
            $values_1 = [];
            foreach ($object->getRequestedPackageLineItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['requestedPackageLineItems'] = $values_1;
            if ($object->isInitialized('totalPackageCount') && null !== $object->getTotalPackageCount()) {
                $data['totalPackageCount'] = $object->getTotalPackageCount();
            }
            if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
                $data['totalWeight'] = $object->getTotalWeight();
            }
            $data['freightShipmentDetail'] = $this->normalizer->normalize($object->getFreightShipmentDetail(), 'json', $context);
            if ($object->isInitialized('freightShipmentSpecialServices') && null !== $object->getFreightShipmentSpecialServices()) {
                $data['freightShipmentSpecialServices'] = $this->normalizer->normalize($object->getFreightShipmentSpecialServices(), 'json', $context);
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipment::class => false];
        }
    }
}
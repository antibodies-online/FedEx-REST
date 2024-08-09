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
    class AvailabilityV1TransittimesPostBodyRequestedShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipment::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipment::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipper', $data)) {
                $object->setShipper($this->denormalizer->denormalize($data['shipper'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentShipper::class, 'json', $context));
                unset($data['shipper']);
            }
            if (\array_key_exists('recipients', $data)) {
                $values = [];
                foreach ($data['recipients'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRecipientsItem::class, 'json', $context);
                }
                $object->setRecipients($values);
                unset($data['recipients']);
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('packagingType', $data)) {
                $object->setPackagingType($data['packagingType']);
                unset($data['packagingType']);
            }
            if (\array_key_exists('shipDatestamp', $data)) {
                $object->setShipDatestamp($data['shipDatestamp']);
                unset($data['shipDatestamp']);
            }
            if (\array_key_exists('pickupType', $data)) {
                $object->setPickupType($data['pickupType']);
                unset($data['pickupType']);
            }
            if (\array_key_exists('shippingChargesPayment', $data)) {
                $object->setShippingChargesPayment($this->denormalizer->denormalize($data['shippingChargesPayment'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPayment::class, 'json', $context));
                unset($data['shippingChargesPayment']);
            }
            if (\array_key_exists('requestedPackageLineItems', $data)) {
                $values_1 = [];
                foreach ($data['requestedPackageLineItems'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItem::class, 'json', $context);
                }
                $object->setRequestedPackageLineItems($values_1);
                unset($data['requestedPackageLineItems']);
            }
            if (\array_key_exists('shipmentSpecialServices', $data)) {
                $object->setShipmentSpecialServices($this->denormalizer->denormalize($data['shipmentSpecialServices'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServices::class, 'json', $context));
                unset($data['shipmentSpecialServices']);
            }
            if (\array_key_exists('customsClearanceDetail', $data)) {
                $object->setCustomsClearanceDetail($this->denormalizer->denormalize($data['customsClearanceDetail'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetail::class, 'json', $context));
                unset($data['customsClearanceDetail']);
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
            $values = [];
            foreach ($object->getRecipients() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['recipients'] = $values;
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            $data['packagingType'] = $object->getPackagingType();
            if ($object->isInitialized('shipDatestamp') && null !== $object->getShipDatestamp()) {
                $data['shipDatestamp'] = $object->getShipDatestamp();
            }
            if ($object->isInitialized('pickupType') && null !== $object->getPickupType()) {
                $data['pickupType'] = $object->getPickupType();
            }
            if ($object->isInitialized('shippingChargesPayment') && null !== $object->getShippingChargesPayment()) {
                $data['shippingChargesPayment'] = $this->normalizer->normalize($object->getShippingChargesPayment(), 'json', $context);
            }
            $values_1 = [];
            foreach ($object->getRequestedPackageLineItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['requestedPackageLineItems'] = $values_1;
            if ($object->isInitialized('shipmentSpecialServices') && null !== $object->getShipmentSpecialServices()) {
                $data['shipmentSpecialServices'] = $this->normalizer->normalize($object->getShipmentSpecialServices(), 'json', $context);
            }
            if ($object->isInitialized('customsClearanceDetail') && null !== $object->getCustomsClearanceDetail()) {
                $data['customsClearanceDetail'] = $this->normalizer->normalize($object->getCustomsClearanceDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipment::class => false];
        }
    }
} else {
    class AvailabilityV1TransittimesPostBodyRequestedShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipment::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipment::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipper', $data)) {
                $object->setShipper($this->denormalizer->denormalize($data['shipper'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentShipper::class, 'json', $context));
                unset($data['shipper']);
            }
            if (\array_key_exists('recipients', $data)) {
                $values = [];
                foreach ($data['recipients'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRecipientsItem::class, 'json', $context);
                }
                $object->setRecipients($values);
                unset($data['recipients']);
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('packagingType', $data)) {
                $object->setPackagingType($data['packagingType']);
                unset($data['packagingType']);
            }
            if (\array_key_exists('shipDatestamp', $data)) {
                $object->setShipDatestamp($data['shipDatestamp']);
                unset($data['shipDatestamp']);
            }
            if (\array_key_exists('pickupType', $data)) {
                $object->setPickupType($data['pickupType']);
                unset($data['pickupType']);
            }
            if (\array_key_exists('shippingChargesPayment', $data)) {
                $object->setShippingChargesPayment($this->denormalizer->denormalize($data['shippingChargesPayment'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPayment::class, 'json', $context));
                unset($data['shippingChargesPayment']);
            }
            if (\array_key_exists('requestedPackageLineItems', $data)) {
                $values_1 = [];
                foreach ($data['requestedPackageLineItems'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItem::class, 'json', $context);
                }
                $object->setRequestedPackageLineItems($values_1);
                unset($data['requestedPackageLineItems']);
            }
            if (\array_key_exists('shipmentSpecialServices', $data)) {
                $object->setShipmentSpecialServices($this->denormalizer->denormalize($data['shipmentSpecialServices'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServices::class, 'json', $context));
                unset($data['shipmentSpecialServices']);
            }
            if (\array_key_exists('customsClearanceDetail', $data)) {
                $object->setCustomsClearanceDetail($this->denormalizer->denormalize($data['customsClearanceDetail'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetail::class, 'json', $context));
                unset($data['customsClearanceDetail']);
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
            $values = [];
            foreach ($object->getRecipients() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['recipients'] = $values;
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            $data['packagingType'] = $object->getPackagingType();
            if ($object->isInitialized('shipDatestamp') && null !== $object->getShipDatestamp()) {
                $data['shipDatestamp'] = $object->getShipDatestamp();
            }
            if ($object->isInitialized('pickupType') && null !== $object->getPickupType()) {
                $data['pickupType'] = $object->getPickupType();
            }
            if ($object->isInitialized('shippingChargesPayment') && null !== $object->getShippingChargesPayment()) {
                $data['shippingChargesPayment'] = $this->normalizer->normalize($object->getShippingChargesPayment(), 'json', $context);
            }
            $values_1 = [];
            foreach ($object->getRequestedPackageLineItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['requestedPackageLineItems'] = $values_1;
            if ($object->isInitialized('shipmentSpecialServices') && null !== $object->getShipmentSpecialServices()) {
                $data['shipmentSpecialServices'] = $this->normalizer->normalize($object->getShipmentSpecialServices(), 'json', $context);
            }
            if ($object->isInitialized('customsClearanceDetail') && null !== $object->getCustomsClearanceDetail()) {
                $data['customsClearanceDetail'] = $this->normalizer->normalize($object->getCustomsClearanceDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipment::class => false];
        }
    }
}
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
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipment';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipper', $data)) {
                $object->setShipper($this->denormalizer->denormalize($data['shipper'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipper', 'json', $context));
                unset($data['shipper']);
            }
            if (\array_key_exists('recipient', $data)) {
                $object->setRecipient($this->denormalizer->denormalize($data['recipient'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipient', 'json', $context));
                unset($data['recipient']);
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('packagingType', $data)) {
                $object->setPackagingType($data['packagingType']);
                unset($data['packagingType']);
            }
            if (\array_key_exists('shipDateStamp', $data)) {
                $object->setShipDateStamp($data['shipDateStamp']);
                unset($data['shipDateStamp']);
            }
            if (\array_key_exists('requestedPackageLineItems', $data)) {
                $values = [];
                foreach ($data['requestedPackageLineItems'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItem', 'json', $context);
                }
                $object->setRequestedPackageLineItems($values);
                unset($data['requestedPackageLineItems']);
            }
            if (\array_key_exists('dropoffType', $data)) {
                $object->setDropoffType($data['dropoffType']);
                unset($data['dropoffType']);
            }
            if (\array_key_exists('variableHandlingChargeDetail', $data)) {
                $object->setVariableHandlingChargeDetail($this->denormalizer->denormalize($data['variableHandlingChargeDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentvariableHandlingChargeDetail', 'json', $context));
                unset($data['variableHandlingChargeDetail']);
            }
            if (\array_key_exists('freightShipmentDetail', $data)) {
                $object->setFreightShipmentDetail($this->denormalizer->denormalize($data['freightShipmentDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetail', 'json', $context));
                unset($data['freightShipmentDetail']);
            }
            if (\array_key_exists('specialServicesRequested', $data)) {
                $object->setSpecialServicesRequested($this->denormalizer->denormalize($data['specialServicesRequested'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequested', 'json', $context));
                unset($data['specialServicesRequested']);
            }
            if (\array_key_exists('pickupType', $data)) {
                $object->setPickupType($data['pickupType']);
                unset($data['pickupType']);
            }
            if (\array_key_exists('shippingDocumentSpecification', $data)) {
                $object->setShippingDocumentSpecification($data['shippingDocumentSpecification']);
                unset($data['shippingDocumentSpecification']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['shipper'] = $this->normalizer->normalize($object->getShipper(), 'json', $context);
            $data['recipient'] = $this->normalizer->normalize($object->getRecipient(), 'json', $context);
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            $data['packagingType'] = $object->getPackagingType();
            if ($object->isInitialized('shipDateStamp') && null !== $object->getShipDateStamp()) {
                $data['shipDateStamp'] = $object->getShipDateStamp();
            }
            $values = [];
            foreach ($object->getRequestedPackageLineItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['requestedPackageLineItems'] = $values;
            if ($object->isInitialized('dropoffType') && null !== $object->getDropoffType()) {
                $data['dropoffType'] = $object->getDropoffType();
            }
            if ($object->isInitialized('variableHandlingChargeDetail') && null !== $object->getVariableHandlingChargeDetail()) {
                $data['variableHandlingChargeDetail'] = $this->normalizer->normalize($object->getVariableHandlingChargeDetail(), 'json', $context);
            }
            if ($object->isInitialized('freightShipmentDetail') && null !== $object->getFreightShipmentDetail()) {
                $data['freightShipmentDetail'] = $this->normalizer->normalize($object->getFreightShipmentDetail(), 'json', $context);
            }
            if ($object->isInitialized('specialServicesRequested') && null !== $object->getSpecialServicesRequested()) {
                $data['specialServicesRequested'] = $this->normalizer->normalize($object->getSpecialServicesRequested(), 'json', $context);
            }
            if ($object->isInitialized('pickupType') && null !== $object->getPickupType()) {
                $data['pickupType'] = $object->getPickupType();
            }
            if ($object->isInitialized('shippingDocumentSpecification') && null !== $object->getShippingDocumentSpecification()) {
                $data['shippingDocumentSpecification'] = $object->getShippingDocumentSpecification();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipment' => false];
        }
    }
} else {
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipment';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipper', $data)) {
                $object->setShipper($this->denormalizer->denormalize($data['shipper'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipper', 'json', $context));
                unset($data['shipper']);
            }
            if (\array_key_exists('recipient', $data)) {
                $object->setRecipient($this->denormalizer->denormalize($data['recipient'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipient', 'json', $context));
                unset($data['recipient']);
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('packagingType', $data)) {
                $object->setPackagingType($data['packagingType']);
                unset($data['packagingType']);
            }
            if (\array_key_exists('shipDateStamp', $data)) {
                $object->setShipDateStamp($data['shipDateStamp']);
                unset($data['shipDateStamp']);
            }
            if (\array_key_exists('requestedPackageLineItems', $data)) {
                $values = [];
                foreach ($data['requestedPackageLineItems'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItem', 'json', $context);
                }
                $object->setRequestedPackageLineItems($values);
                unset($data['requestedPackageLineItems']);
            }
            if (\array_key_exists('dropoffType', $data)) {
                $object->setDropoffType($data['dropoffType']);
                unset($data['dropoffType']);
            }
            if (\array_key_exists('variableHandlingChargeDetail', $data)) {
                $object->setVariableHandlingChargeDetail($this->denormalizer->denormalize($data['variableHandlingChargeDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentvariableHandlingChargeDetail', 'json', $context));
                unset($data['variableHandlingChargeDetail']);
            }
            if (\array_key_exists('freightShipmentDetail', $data)) {
                $object->setFreightShipmentDetail($this->denormalizer->denormalize($data['freightShipmentDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetail', 'json', $context));
                unset($data['freightShipmentDetail']);
            }
            if (\array_key_exists('specialServicesRequested', $data)) {
                $object->setSpecialServicesRequested($this->denormalizer->denormalize($data['specialServicesRequested'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequested', 'json', $context));
                unset($data['specialServicesRequested']);
            }
            if (\array_key_exists('pickupType', $data)) {
                $object->setPickupType($data['pickupType']);
                unset($data['pickupType']);
            }
            if (\array_key_exists('shippingDocumentSpecification', $data)) {
                $object->setShippingDocumentSpecification($data['shippingDocumentSpecification']);
                unset($data['shippingDocumentSpecification']);
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
            $data['shipper'] = $this->normalizer->normalize($object->getShipper(), 'json', $context);
            $data['recipient'] = $this->normalizer->normalize($object->getRecipient(), 'json', $context);
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            $data['packagingType'] = $object->getPackagingType();
            if ($object->isInitialized('shipDateStamp') && null !== $object->getShipDateStamp()) {
                $data['shipDateStamp'] = $object->getShipDateStamp();
            }
            $values = [];
            foreach ($object->getRequestedPackageLineItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['requestedPackageLineItems'] = $values;
            if ($object->isInitialized('dropoffType') && null !== $object->getDropoffType()) {
                $data['dropoffType'] = $object->getDropoffType();
            }
            if ($object->isInitialized('variableHandlingChargeDetail') && null !== $object->getVariableHandlingChargeDetail()) {
                $data['variableHandlingChargeDetail'] = $this->normalizer->normalize($object->getVariableHandlingChargeDetail(), 'json', $context);
            }
            if ($object->isInitialized('freightShipmentDetail') && null !== $object->getFreightShipmentDetail()) {
                $data['freightShipmentDetail'] = $this->normalizer->normalize($object->getFreightShipmentDetail(), 'json', $context);
            }
            if ($object->isInitialized('specialServicesRequested') && null !== $object->getSpecialServicesRequested()) {
                $data['specialServicesRequested'] = $this->normalizer->normalize($object->getSpecialServicesRequested(), 'json', $context);
            }
            if ($object->isInitialized('pickupType') && null !== $object->getPickupType()) {
                $data['pickupType'] = $object->getPickupType();
            }
            if ($object->isInitialized('shippingDocumentSpecification') && null !== $object->getShippingDocumentSpecification()) {
                $data['shippingDocumentSpecification'] = $object->getShippingDocumentSpecification();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipment' => false];
        }
    }
}
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
    class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServices::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServices::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServices();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('specialServiceTypes', $data)) {
                $values = [];
                foreach ($data['specialServiceTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setSpecialServiceTypes($values);
                unset($data['specialServiceTypes']);
            }
            if (\array_key_exists('freightGuaranteeDetail', $data)) {
                $object->setFreightGuaranteeDetail($this->denormalizer->denormalize($data['freightGuaranteeDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightGuaranteeDetail::class, 'json', $context));
                unset($data['freightGuaranteeDetail']);
            }
            if (\array_key_exists('shipmentCODDetail', $data)) {
                $object->setShipmentCODDetail($this->denormalizer->denormalize($data['shipmentCODDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetail::class, 'json', $context));
                unset($data['shipmentCODDetail']);
            }
            if (\array_key_exists('freightDirectDetail', $data)) {
                $object->setFreightDirectDetail($this->denormalizer->denormalize($data['freightDirectDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightDirectDetail::class, 'json', $context));
                unset($data['freightDirectDetail']);
            }
            if (\array_key_exists('customDeliveryWindowDetail', $data)) {
                $object->setCustomDeliveryWindowDetail($this->denormalizer->denormalize($data['customDeliveryWindowDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesCustomDeliveryWindowDetail::class, 'json', $context));
                unset($data['customDeliveryWindowDetail']);
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
            if ($object->isInitialized('specialServiceTypes') && null !== $object->getSpecialServiceTypes()) {
                $values = [];
                foreach ($object->getSpecialServiceTypes() as $value) {
                    $values[] = $value;
                }
                $data['specialServiceTypes'] = $values;
            }
            if ($object->isInitialized('freightGuaranteeDetail') && null !== $object->getFreightGuaranteeDetail()) {
                $data['freightGuaranteeDetail'] = $this->normalizer->normalize($object->getFreightGuaranteeDetail(), 'json', $context);
            }
            if ($object->isInitialized('shipmentCODDetail') && null !== $object->getShipmentCODDetail()) {
                $data['shipmentCODDetail'] = $this->normalizer->normalize($object->getShipmentCODDetail(), 'json', $context);
            }
            if ($object->isInitialized('freightDirectDetail') && null !== $object->getFreightDirectDetail()) {
                $data['freightDirectDetail'] = $this->normalizer->normalize($object->getFreightDirectDetail(), 'json', $context);
            }
            if ($object->isInitialized('customDeliveryWindowDetail') && null !== $object->getCustomDeliveryWindowDetail()) {
                $data['customDeliveryWindowDetail'] = $this->normalizer->normalize($object->getCustomDeliveryWindowDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServices::class => false];
        }
    }
} else {
    class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServices::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServices::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServices();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('specialServiceTypes', $data)) {
                $values = [];
                foreach ($data['specialServiceTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setSpecialServiceTypes($values);
                unset($data['specialServiceTypes']);
            }
            if (\array_key_exists('freightGuaranteeDetail', $data)) {
                $object->setFreightGuaranteeDetail($this->denormalizer->denormalize($data['freightGuaranteeDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightGuaranteeDetail::class, 'json', $context));
                unset($data['freightGuaranteeDetail']);
            }
            if (\array_key_exists('shipmentCODDetail', $data)) {
                $object->setShipmentCODDetail($this->denormalizer->denormalize($data['shipmentCODDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetail::class, 'json', $context));
                unset($data['shipmentCODDetail']);
            }
            if (\array_key_exists('freightDirectDetail', $data)) {
                $object->setFreightDirectDetail($this->denormalizer->denormalize($data['freightDirectDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightDirectDetail::class, 'json', $context));
                unset($data['freightDirectDetail']);
            }
            if (\array_key_exists('customDeliveryWindowDetail', $data)) {
                $object->setCustomDeliveryWindowDetail($this->denormalizer->denormalize($data['customDeliveryWindowDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesCustomDeliveryWindowDetail::class, 'json', $context));
                unset($data['customDeliveryWindowDetail']);
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
            if ($object->isInitialized('specialServiceTypes') && null !== $object->getSpecialServiceTypes()) {
                $values = [];
                foreach ($object->getSpecialServiceTypes() as $value) {
                    $values[] = $value;
                }
                $data['specialServiceTypes'] = $values;
            }
            if ($object->isInitialized('freightGuaranteeDetail') && null !== $object->getFreightGuaranteeDetail()) {
                $data['freightGuaranteeDetail'] = $this->normalizer->normalize($object->getFreightGuaranteeDetail(), 'json', $context);
            }
            if ($object->isInitialized('shipmentCODDetail') && null !== $object->getShipmentCODDetail()) {
                $data['shipmentCODDetail'] = $this->normalizer->normalize($object->getShipmentCODDetail(), 'json', $context);
            }
            if ($object->isInitialized('freightDirectDetail') && null !== $object->getFreightDirectDetail()) {
                $data['freightDirectDetail'] = $this->normalizer->normalize($object->getFreightDirectDetail(), 'json', $context);
            }
            if ($object->isInitialized('customDeliveryWindowDetail') && null !== $object->getCustomDeliveryWindowDetail()) {
                $data['customDeliveryWindowDetail'] = $this->normalizer->normalize($object->getCustomDeliveryWindowDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServices::class => false];
        }
    }
}
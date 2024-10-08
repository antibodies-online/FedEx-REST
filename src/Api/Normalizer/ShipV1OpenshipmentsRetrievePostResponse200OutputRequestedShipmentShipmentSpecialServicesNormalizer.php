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
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServices::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServices::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServices();
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
            if (\array_key_exists('etdDetail', $data)) {
                $object->setEtdDetail($this->denormalizer->denormalize($data['etdDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetail::class, 'json', $context));
                unset($data['etdDetail']);
            }
            if (\array_key_exists('returnShipmentDetail', $data)) {
                $object->setReturnShipmentDetail($this->denormalizer->denormalize($data['returnShipmentDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetail::class, 'json', $context));
                unset($data['returnShipmentDetail']);
            }
            if (\array_key_exists('deliveryOnInvoiceAcceptanceDetail', $data)) {
                $object->setDeliveryOnInvoiceAcceptanceDetail($this->denormalizer->denormalize($data['deliveryOnInvoiceAcceptanceDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail::class, 'json', $context));
                unset($data['deliveryOnInvoiceAcceptanceDetail']);
            }
            if (\array_key_exists('internationalTrafficInArmsRegulationsDetail', $data)) {
                $object->setInternationalTrafficInArmsRegulationsDetail($this->denormalizer->denormalize($data['internationalTrafficInArmsRegulationsDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail::class, 'json', $context));
                unset($data['internationalTrafficInArmsRegulationsDetail']);
            }
            if (\array_key_exists('pendingShipmentDetail', $data)) {
                $object->setPendingShipmentDetail($this->denormalizer->denormalize($data['pendingShipmentDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetail::class, 'json', $context));
                unset($data['pendingShipmentDetail']);
            }
            if (\array_key_exists('holdAtLocationDetail', $data)) {
                $object->setHoldAtLocationDetail($this->denormalizer->denormalize($data['holdAtLocationDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail::class, 'json', $context));
                unset($data['holdAtLocationDetail']);
            }
            if (\array_key_exists('shipmentCODDetail', $data)) {
                $object->setShipmentCODDetail($this->denormalizer->denormalize($data['shipmentCODDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesShipmentCODDetail::class, 'json', $context));
                unset($data['shipmentCODDetail']);
            }
            if (\array_key_exists('shipmentDryIceDetail', $data)) {
                $object->setShipmentDryIceDetail($this->denormalizer->denormalize($data['shipmentDryIceDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail::class, 'json', $context));
                unset($data['shipmentDryIceDetail']);
            }
            if (\array_key_exists('internationalControlledExportDetail', $data)) {
                $object->setInternationalControlledExportDetail($this->denormalizer->denormalize($data['internationalControlledExportDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail::class, 'json', $context));
                unset($data['internationalControlledExportDetail']);
            }
            if (\array_key_exists('homeDeliveryPremiumDetail', $data)) {
                $object->setHomeDeliveryPremiumDetail($this->denormalizer->denormalize($data['homeDeliveryPremiumDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail::class, 'json', $context));
                unset($data['homeDeliveryPremiumDetail']);
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
            if ($object->isInitialized('etdDetail') && null !== $object->getEtdDetail()) {
                $data['etdDetail'] = $this->normalizer->normalize($object->getEtdDetail(), 'json', $context);
            }
            if ($object->isInitialized('returnShipmentDetail') && null !== $object->getReturnShipmentDetail()) {
                $data['returnShipmentDetail'] = $this->normalizer->normalize($object->getReturnShipmentDetail(), 'json', $context);
            }
            if ($object->isInitialized('deliveryOnInvoiceAcceptanceDetail') && null !== $object->getDeliveryOnInvoiceAcceptanceDetail()) {
                $data['deliveryOnInvoiceAcceptanceDetail'] = $this->normalizer->normalize($object->getDeliveryOnInvoiceAcceptanceDetail(), 'json', $context);
            }
            if ($object->isInitialized('internationalTrafficInArmsRegulationsDetail') && null !== $object->getInternationalTrafficInArmsRegulationsDetail()) {
                $data['internationalTrafficInArmsRegulationsDetail'] = $this->normalizer->normalize($object->getInternationalTrafficInArmsRegulationsDetail(), 'json', $context);
            }
            if ($object->isInitialized('pendingShipmentDetail') && null !== $object->getPendingShipmentDetail()) {
                $data['pendingShipmentDetail'] = $this->normalizer->normalize($object->getPendingShipmentDetail(), 'json', $context);
            }
            if ($object->isInitialized('holdAtLocationDetail') && null !== $object->getHoldAtLocationDetail()) {
                $data['holdAtLocationDetail'] = $this->normalizer->normalize($object->getHoldAtLocationDetail(), 'json', $context);
            }
            if ($object->isInitialized('shipmentCODDetail') && null !== $object->getShipmentCODDetail()) {
                $data['shipmentCODDetail'] = $this->normalizer->normalize($object->getShipmentCODDetail(), 'json', $context);
            }
            if ($object->isInitialized('shipmentDryIceDetail') && null !== $object->getShipmentDryIceDetail()) {
                $data['shipmentDryIceDetail'] = $this->normalizer->normalize($object->getShipmentDryIceDetail(), 'json', $context);
            }
            if ($object->isInitialized('internationalControlledExportDetail') && null !== $object->getInternationalControlledExportDetail()) {
                $data['internationalControlledExportDetail'] = $this->normalizer->normalize($object->getInternationalControlledExportDetail(), 'json', $context);
            }
            if ($object->isInitialized('homeDeliveryPremiumDetail') && null !== $object->getHomeDeliveryPremiumDetail()) {
                $data['homeDeliveryPremiumDetail'] = $this->normalizer->normalize($object->getHomeDeliveryPremiumDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServices::class => false];
        }
    }
} else {
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServices::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServices::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServices();
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
            if (\array_key_exists('etdDetail', $data)) {
                $object->setEtdDetail($this->denormalizer->denormalize($data['etdDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetail::class, 'json', $context));
                unset($data['etdDetail']);
            }
            if (\array_key_exists('returnShipmentDetail', $data)) {
                $object->setReturnShipmentDetail($this->denormalizer->denormalize($data['returnShipmentDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetail::class, 'json', $context));
                unset($data['returnShipmentDetail']);
            }
            if (\array_key_exists('deliveryOnInvoiceAcceptanceDetail', $data)) {
                $object->setDeliveryOnInvoiceAcceptanceDetail($this->denormalizer->denormalize($data['deliveryOnInvoiceAcceptanceDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail::class, 'json', $context));
                unset($data['deliveryOnInvoiceAcceptanceDetail']);
            }
            if (\array_key_exists('internationalTrafficInArmsRegulationsDetail', $data)) {
                $object->setInternationalTrafficInArmsRegulationsDetail($this->denormalizer->denormalize($data['internationalTrafficInArmsRegulationsDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail::class, 'json', $context));
                unset($data['internationalTrafficInArmsRegulationsDetail']);
            }
            if (\array_key_exists('pendingShipmentDetail', $data)) {
                $object->setPendingShipmentDetail($this->denormalizer->denormalize($data['pendingShipmentDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetail::class, 'json', $context));
                unset($data['pendingShipmentDetail']);
            }
            if (\array_key_exists('holdAtLocationDetail', $data)) {
                $object->setHoldAtLocationDetail($this->denormalizer->denormalize($data['holdAtLocationDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail::class, 'json', $context));
                unset($data['holdAtLocationDetail']);
            }
            if (\array_key_exists('shipmentCODDetail', $data)) {
                $object->setShipmentCODDetail($this->denormalizer->denormalize($data['shipmentCODDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesShipmentCODDetail::class, 'json', $context));
                unset($data['shipmentCODDetail']);
            }
            if (\array_key_exists('shipmentDryIceDetail', $data)) {
                $object->setShipmentDryIceDetail($this->denormalizer->denormalize($data['shipmentDryIceDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail::class, 'json', $context));
                unset($data['shipmentDryIceDetail']);
            }
            if (\array_key_exists('internationalControlledExportDetail', $data)) {
                $object->setInternationalControlledExportDetail($this->denormalizer->denormalize($data['internationalControlledExportDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail::class, 'json', $context));
                unset($data['internationalControlledExportDetail']);
            }
            if (\array_key_exists('homeDeliveryPremiumDetail', $data)) {
                $object->setHomeDeliveryPremiumDetail($this->denormalizer->denormalize($data['homeDeliveryPremiumDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail::class, 'json', $context));
                unset($data['homeDeliveryPremiumDetail']);
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
            if ($object->isInitialized('etdDetail') && null !== $object->getEtdDetail()) {
                $data['etdDetail'] = $this->normalizer->normalize($object->getEtdDetail(), 'json', $context);
            }
            if ($object->isInitialized('returnShipmentDetail') && null !== $object->getReturnShipmentDetail()) {
                $data['returnShipmentDetail'] = $this->normalizer->normalize($object->getReturnShipmentDetail(), 'json', $context);
            }
            if ($object->isInitialized('deliveryOnInvoiceAcceptanceDetail') && null !== $object->getDeliveryOnInvoiceAcceptanceDetail()) {
                $data['deliveryOnInvoiceAcceptanceDetail'] = $this->normalizer->normalize($object->getDeliveryOnInvoiceAcceptanceDetail(), 'json', $context);
            }
            if ($object->isInitialized('internationalTrafficInArmsRegulationsDetail') && null !== $object->getInternationalTrafficInArmsRegulationsDetail()) {
                $data['internationalTrafficInArmsRegulationsDetail'] = $this->normalizer->normalize($object->getInternationalTrafficInArmsRegulationsDetail(), 'json', $context);
            }
            if ($object->isInitialized('pendingShipmentDetail') && null !== $object->getPendingShipmentDetail()) {
                $data['pendingShipmentDetail'] = $this->normalizer->normalize($object->getPendingShipmentDetail(), 'json', $context);
            }
            if ($object->isInitialized('holdAtLocationDetail') && null !== $object->getHoldAtLocationDetail()) {
                $data['holdAtLocationDetail'] = $this->normalizer->normalize($object->getHoldAtLocationDetail(), 'json', $context);
            }
            if ($object->isInitialized('shipmentCODDetail') && null !== $object->getShipmentCODDetail()) {
                $data['shipmentCODDetail'] = $this->normalizer->normalize($object->getShipmentCODDetail(), 'json', $context);
            }
            if ($object->isInitialized('shipmentDryIceDetail') && null !== $object->getShipmentDryIceDetail()) {
                $data['shipmentDryIceDetail'] = $this->normalizer->normalize($object->getShipmentDryIceDetail(), 'json', $context);
            }
            if ($object->isInitialized('internationalControlledExportDetail') && null !== $object->getInternationalControlledExportDetail()) {
                $data['internationalControlledExportDetail'] = $this->normalizer->normalize($object->getInternationalControlledExportDetail(), 'json', $context);
            }
            if ($object->isInitialized('homeDeliveryPremiumDetail') && null !== $object->getHomeDeliveryPremiumDetail()) {
                $data['homeDeliveryPremiumDetail'] = $this->normalizer->normalize($object->getHomeDeliveryPremiumDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServices::class => false];
        }
    }
}
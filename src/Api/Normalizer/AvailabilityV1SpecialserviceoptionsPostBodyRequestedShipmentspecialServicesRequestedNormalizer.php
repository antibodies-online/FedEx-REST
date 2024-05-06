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
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequested';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequested';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequested();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('internationalControlledExportDetail', $data)) {
                $object->setInternationalControlledExportDetail($this->denormalizer->denormalize($data['internationalControlledExportDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedinternationalControlledExportDetail', 'json', $context));
                unset($data['internationalControlledExportDetail']);
            }
            if (\array_key_exists('returnShipmentDetail', $data)) {
                $object->setReturnShipmentDetail($this->denormalizer->denormalize($data['returnShipmentDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedreturnShipmentDetail', 'json', $context));
                unset($data['returnShipmentDetail']);
            }
            if (\array_key_exists('homeDeliveryPremiumDetail', $data)) {
                $object->setHomeDeliveryPremiumDetail($this->denormalizer->denormalize($data['homeDeliveryPremiumDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedhomeDeliveryPremiumDetail', 'json', $context));
                unset($data['homeDeliveryPremiumDetail']);
            }
            if (\array_key_exists('returnEmailDetail', $data)) {
                $object->setReturnEmailDetail($this->denormalizer->denormalize($data['returnEmailDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedreturnEmailDetail', 'json', $context));
                unset($data['returnEmailDetail']);
            }
            if (\array_key_exists('specialServiceTypes', $data)) {
                $values = [];
                foreach ($data['specialServiceTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setSpecialServiceTypes($values);
                unset($data['specialServiceTypes']);
            }
            if (\array_key_exists('saturdayDeliveryDetail', $data)) {
                $object->setSaturdayDeliveryDetail($this->denormalizer->denormalize($data['saturdayDeliveryDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetail', 'json', $context));
                unset($data['saturdayDeliveryDetail']);
            }
            if (\array_key_exists('holdAtLocationDetail', $data)) {
                $object->setHoldAtLocationDetail($this->denormalizer->denormalize($data['holdAtLocationDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetail', 'json', $context));
                unset($data['holdAtLocationDetail']);
            }
            if (\array_key_exists('codDetail', $data)) {
                $object->setCodDetail($this->denormalizer->denormalize($data['codDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedcodDetail', 'json', $context));
                unset($data['codDetail']);
            }
            if (\array_key_exists('shipmentDryIceDetail', $data)) {
                $object->setShipmentDryIceDetail($this->denormalizer->denormalize($data['shipmentDryIceDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedshipmentDryIceDetail', 'json', $context));
                unset($data['shipmentDryIceDetail']);
            }
            if (\array_key_exists('freightDirectDetail', $data)) {
                $object->setFreightDirectDetail($this->denormalizer->denormalize($data['freightDirectDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedfreightDirectDetail', 'json', $context));
                unset($data['freightDirectDetail']);
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
            if ($object->isInitialized('internationalControlledExportDetail') && null !== $object->getInternationalControlledExportDetail()) {
                $data['internationalControlledExportDetail'] = $this->normalizer->normalize($object->getInternationalControlledExportDetail(), 'json', $context);
            }
            if ($object->isInitialized('returnShipmentDetail') && null !== $object->getReturnShipmentDetail()) {
                $data['returnShipmentDetail'] = $this->normalizer->normalize($object->getReturnShipmentDetail(), 'json', $context);
            }
            if ($object->isInitialized('homeDeliveryPremiumDetail') && null !== $object->getHomeDeliveryPremiumDetail()) {
                $data['homeDeliveryPremiumDetail'] = $this->normalizer->normalize($object->getHomeDeliveryPremiumDetail(), 'json', $context);
            }
            if ($object->isInitialized('returnEmailDetail') && null !== $object->getReturnEmailDetail()) {
                $data['returnEmailDetail'] = $this->normalizer->normalize($object->getReturnEmailDetail(), 'json', $context);
            }
            if ($object->isInitialized('specialServiceTypes') && null !== $object->getSpecialServiceTypes()) {
                $values = [];
                foreach ($object->getSpecialServiceTypes() as $value) {
                    $values[] = $value;
                }
                $data['specialServiceTypes'] = $values;
            }
            if ($object->isInitialized('saturdayDeliveryDetail') && null !== $object->getSaturdayDeliveryDetail()) {
                $data['saturdayDeliveryDetail'] = $this->normalizer->normalize($object->getSaturdayDeliveryDetail(), 'json', $context);
            }
            if ($object->isInitialized('holdAtLocationDetail') && null !== $object->getHoldAtLocationDetail()) {
                $data['holdAtLocationDetail'] = $this->normalizer->normalize($object->getHoldAtLocationDetail(), 'json', $context);
            }
            if ($object->isInitialized('codDetail') && null !== $object->getCodDetail()) {
                $data['codDetail'] = $this->normalizer->normalize($object->getCodDetail(), 'json', $context);
            }
            if ($object->isInitialized('shipmentDryIceDetail') && null !== $object->getShipmentDryIceDetail()) {
                $data['shipmentDryIceDetail'] = $this->normalizer->normalize($object->getShipmentDryIceDetail(), 'json', $context);
            }
            if ($object->isInitialized('freightDirectDetail') && null !== $object->getFreightDirectDetail()) {
                $data['freightDirectDetail'] = $this->normalizer->normalize($object->getFreightDirectDetail(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequested' => false];
        }
    }
} else {
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequested';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequested';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequested();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('internationalControlledExportDetail', $data)) {
                $object->setInternationalControlledExportDetail($this->denormalizer->denormalize($data['internationalControlledExportDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedinternationalControlledExportDetail', 'json', $context));
                unset($data['internationalControlledExportDetail']);
            }
            if (\array_key_exists('returnShipmentDetail', $data)) {
                $object->setReturnShipmentDetail($this->denormalizer->denormalize($data['returnShipmentDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedreturnShipmentDetail', 'json', $context));
                unset($data['returnShipmentDetail']);
            }
            if (\array_key_exists('homeDeliveryPremiumDetail', $data)) {
                $object->setHomeDeliveryPremiumDetail($this->denormalizer->denormalize($data['homeDeliveryPremiumDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedhomeDeliveryPremiumDetail', 'json', $context));
                unset($data['homeDeliveryPremiumDetail']);
            }
            if (\array_key_exists('returnEmailDetail', $data)) {
                $object->setReturnEmailDetail($this->denormalizer->denormalize($data['returnEmailDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedreturnEmailDetail', 'json', $context));
                unset($data['returnEmailDetail']);
            }
            if (\array_key_exists('specialServiceTypes', $data)) {
                $values = [];
                foreach ($data['specialServiceTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setSpecialServiceTypes($values);
                unset($data['specialServiceTypes']);
            }
            if (\array_key_exists('saturdayDeliveryDetail', $data)) {
                $object->setSaturdayDeliveryDetail($this->denormalizer->denormalize($data['saturdayDeliveryDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetail', 'json', $context));
                unset($data['saturdayDeliveryDetail']);
            }
            if (\array_key_exists('holdAtLocationDetail', $data)) {
                $object->setHoldAtLocationDetail($this->denormalizer->denormalize($data['holdAtLocationDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetail', 'json', $context));
                unset($data['holdAtLocationDetail']);
            }
            if (\array_key_exists('codDetail', $data)) {
                $object->setCodDetail($this->denormalizer->denormalize($data['codDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedcodDetail', 'json', $context));
                unset($data['codDetail']);
            }
            if (\array_key_exists('shipmentDryIceDetail', $data)) {
                $object->setShipmentDryIceDetail($this->denormalizer->denormalize($data['shipmentDryIceDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedshipmentDryIceDetail', 'json', $context));
                unset($data['shipmentDryIceDetail']);
            }
            if (\array_key_exists('freightDirectDetail', $data)) {
                $object->setFreightDirectDetail($this->denormalizer->denormalize($data['freightDirectDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedfreightDirectDetail', 'json', $context));
                unset($data['freightDirectDetail']);
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
            if ($object->isInitialized('internationalControlledExportDetail') && null !== $object->getInternationalControlledExportDetail()) {
                $data['internationalControlledExportDetail'] = $this->normalizer->normalize($object->getInternationalControlledExportDetail(), 'json', $context);
            }
            if ($object->isInitialized('returnShipmentDetail') && null !== $object->getReturnShipmentDetail()) {
                $data['returnShipmentDetail'] = $this->normalizer->normalize($object->getReturnShipmentDetail(), 'json', $context);
            }
            if ($object->isInitialized('homeDeliveryPremiumDetail') && null !== $object->getHomeDeliveryPremiumDetail()) {
                $data['homeDeliveryPremiumDetail'] = $this->normalizer->normalize($object->getHomeDeliveryPremiumDetail(), 'json', $context);
            }
            if ($object->isInitialized('returnEmailDetail') && null !== $object->getReturnEmailDetail()) {
                $data['returnEmailDetail'] = $this->normalizer->normalize($object->getReturnEmailDetail(), 'json', $context);
            }
            if ($object->isInitialized('specialServiceTypes') && null !== $object->getSpecialServiceTypes()) {
                $values = [];
                foreach ($object->getSpecialServiceTypes() as $value) {
                    $values[] = $value;
                }
                $data['specialServiceTypes'] = $values;
            }
            if ($object->isInitialized('saturdayDeliveryDetail') && null !== $object->getSaturdayDeliveryDetail()) {
                $data['saturdayDeliveryDetail'] = $this->normalizer->normalize($object->getSaturdayDeliveryDetail(), 'json', $context);
            }
            if ($object->isInitialized('holdAtLocationDetail') && null !== $object->getHoldAtLocationDetail()) {
                $data['holdAtLocationDetail'] = $this->normalizer->normalize($object->getHoldAtLocationDetail(), 'json', $context);
            }
            if ($object->isInitialized('codDetail') && null !== $object->getCodDetail()) {
                $data['codDetail'] = $this->normalizer->normalize($object->getCodDetail(), 'json', $context);
            }
            if ($object->isInitialized('shipmentDryIceDetail') && null !== $object->getShipmentDryIceDetail()) {
                $data['shipmentDryIceDetail'] = $this->normalizer->normalize($object->getShipmentDryIceDetail(), 'json', $context);
            }
            if ($object->isInitialized('freightDirectDetail') && null !== $object->getFreightDirectDetail()) {
                $data['freightDirectDetail'] = $this->normalizer->normalize($object->getFreightDirectDetail(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequested' => false];
        }
    }
}
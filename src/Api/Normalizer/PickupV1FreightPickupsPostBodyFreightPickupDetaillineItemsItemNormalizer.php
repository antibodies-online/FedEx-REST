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
    class PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItem();
            if (\array_key_exists('sequenceNumber', $data) && \is_int($data['sequenceNumber'])) {
                $data['sequenceNumber'] = (double) $data['sequenceNumber'];
            }
            if (\array_key_exists('totalHandlingUnits', $data) && \is_int($data['totalHandlingUnits'])) {
                $data['totalHandlingUnits'] = (double) $data['totalHandlingUnits'];
            }
            if (\array_key_exists('pieces', $data) && \is_int($data['pieces'])) {
                $data['pieces'] = (double) $data['pieces'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($this->denormalizer->denormalize($data['trackingNumber'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumber', 'json', $context));
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('service', $data)) {
                $object->setService($data['service']);
                unset($data['service']);
            }
            if (\array_key_exists('sequenceNumber', $data)) {
                $object->setSequenceNumber($data['sequenceNumber']);
                unset($data['sequenceNumber']);
            }
            if (\array_key_exists('totalHandlingUnits', $data)) {
                $object->setTotalHandlingUnits($data['totalHandlingUnits']);
                unset($data['totalHandlingUnits']);
            }
            if (\array_key_exists('justOneMore', $data)) {
                $object->setJustOneMore($data['justOneMore']);
                unset($data['justOneMore']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('packaging', $data)) {
                $object->setPackaging($data['packaging']);
                unset($data['packaging']);
            }
            if (\array_key_exists('pieces', $data)) {
                $object->setPieces($data['pieces']);
                unset($data['pieces']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemWeight', 'json', $context));
                unset($data['weight']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemDimensions', 'json', $context));
                unset($data['dimensions']);
            }
            if (\array_key_exists('destination', $data)) {
                $object->setDestination($this->denormalizer->denormalize($data['destination'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemDestination', 'json', $context));
                unset($data['destination']);
            }
            if (\array_key_exists('shipmentSpecialServicesRequested', $data)) {
                $object->setShipmentSpecialServicesRequested($this->denormalizer->denormalize($data['shipmentSpecialServicesRequested'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequested', 'json', $context));
                unset($data['shipmentSpecialServicesRequested']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $this->normalizer->normalize($object->getTrackingNumber(), 'json', $context);
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['service'] = $object->getService();
            }
            if ($object->isInitialized('sequenceNumber') && null !== $object->getSequenceNumber()) {
                $data['sequenceNumber'] = $object->getSequenceNumber();
            }
            if ($object->isInitialized('totalHandlingUnits') && null !== $object->getTotalHandlingUnits()) {
                $data['totalHandlingUnits'] = $object->getTotalHandlingUnits();
            }
            if ($object->isInitialized('justOneMore') && null !== $object->getJustOneMore()) {
                $data['justOneMore'] = $object->getJustOneMore();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('packaging') && null !== $object->getPackaging()) {
                $data['packaging'] = $object->getPackaging();
            }
            if ($object->isInitialized('pieces') && null !== $object->getPieces()) {
                $data['pieces'] = $object->getPieces();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            }
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('destination') && null !== $object->getDestination()) {
                $data['destination'] = $this->normalizer->normalize($object->getDestination(), 'json', $context);
            }
            if ($object->isInitialized('shipmentSpecialServicesRequested') && null !== $object->getShipmentSpecialServicesRequested()) {
                $data['shipmentSpecialServicesRequested'] = $this->normalizer->normalize($object->getShipmentSpecialServicesRequested(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItem' => false];
        }
    }
} else {
    class PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItem';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItem();
            if (\array_key_exists('sequenceNumber', $data) && \is_int($data['sequenceNumber'])) {
                $data['sequenceNumber'] = (double) $data['sequenceNumber'];
            }
            if (\array_key_exists('totalHandlingUnits', $data) && \is_int($data['totalHandlingUnits'])) {
                $data['totalHandlingUnits'] = (double) $data['totalHandlingUnits'];
            }
            if (\array_key_exists('pieces', $data) && \is_int($data['pieces'])) {
                $data['pieces'] = (double) $data['pieces'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($this->denormalizer->denormalize($data['trackingNumber'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumber', 'json', $context));
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('service', $data)) {
                $object->setService($data['service']);
                unset($data['service']);
            }
            if (\array_key_exists('sequenceNumber', $data)) {
                $object->setSequenceNumber($data['sequenceNumber']);
                unset($data['sequenceNumber']);
            }
            if (\array_key_exists('totalHandlingUnits', $data)) {
                $object->setTotalHandlingUnits($data['totalHandlingUnits']);
                unset($data['totalHandlingUnits']);
            }
            if (\array_key_exists('justOneMore', $data)) {
                $object->setJustOneMore($data['justOneMore']);
                unset($data['justOneMore']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('packaging', $data)) {
                $object->setPackaging($data['packaging']);
                unset($data['packaging']);
            }
            if (\array_key_exists('pieces', $data)) {
                $object->setPieces($data['pieces']);
                unset($data['pieces']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemWeight', 'json', $context));
                unset($data['weight']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemDimensions', 'json', $context));
                unset($data['dimensions']);
            }
            if (\array_key_exists('destination', $data)) {
                $object->setDestination($this->denormalizer->denormalize($data['destination'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemDestination', 'json', $context));
                unset($data['destination']);
            }
            if (\array_key_exists('shipmentSpecialServicesRequested', $data)) {
                $object->setShipmentSpecialServicesRequested($this->denormalizer->denormalize($data['shipmentSpecialServicesRequested'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequested', 'json', $context));
                unset($data['shipmentSpecialServicesRequested']);
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
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $this->normalizer->normalize($object->getTrackingNumber(), 'json', $context);
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['service'] = $object->getService();
            }
            if ($object->isInitialized('sequenceNumber') && null !== $object->getSequenceNumber()) {
                $data['sequenceNumber'] = $object->getSequenceNumber();
            }
            if ($object->isInitialized('totalHandlingUnits') && null !== $object->getTotalHandlingUnits()) {
                $data['totalHandlingUnits'] = $object->getTotalHandlingUnits();
            }
            if ($object->isInitialized('justOneMore') && null !== $object->getJustOneMore()) {
                $data['justOneMore'] = $object->getJustOneMore();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('packaging') && null !== $object->getPackaging()) {
                $data['packaging'] = $object->getPackaging();
            }
            if ($object->isInitialized('pieces') && null !== $object->getPieces()) {
                $data['pieces'] = $object->getPieces();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            }
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('destination') && null !== $object->getDestination()) {
                $data['destination'] = $this->normalizer->normalize($object->getDestination(), 'json', $context);
            }
            if ($object->isInitialized('shipmentSpecialServicesRequested') && null !== $object->getShipmentSpecialServicesRequested()) {
                $data['shipmentSpecialServicesRequested'] = $this->normalizer->normalize($object->getShipmentSpecialServicesRequested(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItem' => false];
        }
    }
}
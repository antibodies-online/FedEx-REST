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
    class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sequenceNumber', $data)) {
                $object->setSequenceNumber($data['sequenceNumber']);
                unset($data['sequenceNumber']);
            }
            if (\array_key_exists('subPackagingType', $data)) {
                $object->setSubPackagingType($data['subPackagingType']);
                unset($data['subPackagingType']);
            }
            if (\array_key_exists('customerReferences', $data)) {
                $values = [];
                foreach ($data['customerReferences'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemCustomerReferencesItem::class, 'json', $context);
                }
                $object->setCustomerReferences($values);
                unset($data['customerReferences']);
            }
            if (\array_key_exists('declaredValue', $data)) {
                $object->setDeclaredValue($this->denormalizer->denormalize($data['declaredValue'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemDeclaredValue::class, 'json', $context));
                unset($data['declaredValue']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemWeight::class, 'json', $context));
                unset($data['weight']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemDimensions::class, 'json', $context));
                unset($data['dimensions']);
            }
            if (\array_key_exists('physicalPackaging', $data)) {
                $object->setPhysicalPackaging($data['physicalPackaging']);
                unset($data['physicalPackaging']);
            }
            if (\array_key_exists('groupPackageCount', $data)) {
                $object->setGroupPackageCount($data['groupPackageCount']);
                unset($data['groupPackageCount']);
            }
            if (\array_key_exists('itemDescriptionForClearance', $data)) {
                $object->setItemDescriptionForClearance($data['itemDescriptionForClearance']);
                unset($data['itemDescriptionForClearance']);
            }
            if (\array_key_exists('contentRecord', $data)) {
                $values_1 = [];
                foreach ($data['contentRecord'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemContentRecordItem::class, 'json', $context);
                }
                $object->setContentRecord($values_1);
                unset($data['contentRecord']);
            }
            if (\array_key_exists('itemDescription', $data)) {
                $object->setItemDescription($data['itemDescription']);
                unset($data['itemDescription']);
            }
            if (\array_key_exists('variableHandlingChargeDetail', $data)) {
                $object->setVariableHandlingChargeDetail($this->denormalizer->denormalize($data['variableHandlingChargeDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemVariableHandlingChargeDetail::class, 'json', $context));
                unset($data['variableHandlingChargeDetail']);
            }
            if (\array_key_exists('associatedFreightLineItems', $data)) {
                $values_2 = [];
                foreach ($data['associatedFreightLineItems'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemAssociatedFreightLineItemsItem::class, 'json', $context);
                }
                $object->setAssociatedFreightLineItems($values_2);
                unset($data['associatedFreightLineItems']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('sequenceNumber') && null !== $object->getSequenceNumber()) {
                $data['sequenceNumber'] = $object->getSequenceNumber();
            }
            $data['subPackagingType'] = $object->getSubPackagingType();
            if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
                $values = [];
                foreach ($object->getCustomerReferences() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customerReferences'] = $values;
            }
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['declaredValue'] = $this->normalizer->normalize($object->getDeclaredValue(), 'json', $context);
            }
            $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('physicalPackaging') && null !== $object->getPhysicalPackaging()) {
                $data['physicalPackaging'] = $object->getPhysicalPackaging();
            }
            if ($object->isInitialized('groupPackageCount') && null !== $object->getGroupPackageCount()) {
                $data['groupPackageCount'] = $object->getGroupPackageCount();
            }
            if ($object->isInitialized('itemDescriptionForClearance') && null !== $object->getItemDescriptionForClearance()) {
                $data['itemDescriptionForClearance'] = $object->getItemDescriptionForClearance();
            }
            if ($object->isInitialized('contentRecord') && null !== $object->getContentRecord()) {
                $values_1 = [];
                foreach ($object->getContentRecord() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['contentRecord'] = $values_1;
            }
            if ($object->isInitialized('itemDescription') && null !== $object->getItemDescription()) {
                $data['itemDescription'] = $object->getItemDescription();
            }
            if ($object->isInitialized('variableHandlingChargeDetail') && null !== $object->getVariableHandlingChargeDetail()) {
                $data['variableHandlingChargeDetail'] = $this->normalizer->normalize($object->getVariableHandlingChargeDetail(), 'json', $context);
            }
            $values_2 = [];
            foreach ($object->getAssociatedFreightLineItems() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['associatedFreightLineItems'] = $values_2;
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem::class => false];
        }
    }
} else {
    class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sequenceNumber', $data)) {
                $object->setSequenceNumber($data['sequenceNumber']);
                unset($data['sequenceNumber']);
            }
            if (\array_key_exists('subPackagingType', $data)) {
                $object->setSubPackagingType($data['subPackagingType']);
                unset($data['subPackagingType']);
            }
            if (\array_key_exists('customerReferences', $data)) {
                $values = [];
                foreach ($data['customerReferences'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemCustomerReferencesItem::class, 'json', $context);
                }
                $object->setCustomerReferences($values);
                unset($data['customerReferences']);
            }
            if (\array_key_exists('declaredValue', $data)) {
                $object->setDeclaredValue($this->denormalizer->denormalize($data['declaredValue'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemDeclaredValue::class, 'json', $context));
                unset($data['declaredValue']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemWeight::class, 'json', $context));
                unset($data['weight']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemDimensions::class, 'json', $context));
                unset($data['dimensions']);
            }
            if (\array_key_exists('physicalPackaging', $data)) {
                $object->setPhysicalPackaging($data['physicalPackaging']);
                unset($data['physicalPackaging']);
            }
            if (\array_key_exists('groupPackageCount', $data)) {
                $object->setGroupPackageCount($data['groupPackageCount']);
                unset($data['groupPackageCount']);
            }
            if (\array_key_exists('itemDescriptionForClearance', $data)) {
                $object->setItemDescriptionForClearance($data['itemDescriptionForClearance']);
                unset($data['itemDescriptionForClearance']);
            }
            if (\array_key_exists('contentRecord', $data)) {
                $values_1 = [];
                foreach ($data['contentRecord'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemContentRecordItem::class, 'json', $context);
                }
                $object->setContentRecord($values_1);
                unset($data['contentRecord']);
            }
            if (\array_key_exists('itemDescription', $data)) {
                $object->setItemDescription($data['itemDescription']);
                unset($data['itemDescription']);
            }
            if (\array_key_exists('variableHandlingChargeDetail', $data)) {
                $object->setVariableHandlingChargeDetail($this->denormalizer->denormalize($data['variableHandlingChargeDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemVariableHandlingChargeDetail::class, 'json', $context));
                unset($data['variableHandlingChargeDetail']);
            }
            if (\array_key_exists('associatedFreightLineItems', $data)) {
                $values_2 = [];
                foreach ($data['associatedFreightLineItems'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemAssociatedFreightLineItemsItem::class, 'json', $context);
                }
                $object->setAssociatedFreightLineItems($values_2);
                unset($data['associatedFreightLineItems']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('sequenceNumber') && null !== $object->getSequenceNumber()) {
                $data['sequenceNumber'] = $object->getSequenceNumber();
            }
            $data['subPackagingType'] = $object->getSubPackagingType();
            if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
                $values = [];
                foreach ($object->getCustomerReferences() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customerReferences'] = $values;
            }
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['declaredValue'] = $this->normalizer->normalize($object->getDeclaredValue(), 'json', $context);
            }
            $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('physicalPackaging') && null !== $object->getPhysicalPackaging()) {
                $data['physicalPackaging'] = $object->getPhysicalPackaging();
            }
            if ($object->isInitialized('groupPackageCount') && null !== $object->getGroupPackageCount()) {
                $data['groupPackageCount'] = $object->getGroupPackageCount();
            }
            if ($object->isInitialized('itemDescriptionForClearance') && null !== $object->getItemDescriptionForClearance()) {
                $data['itemDescriptionForClearance'] = $object->getItemDescriptionForClearance();
            }
            if ($object->isInitialized('contentRecord') && null !== $object->getContentRecord()) {
                $values_1 = [];
                foreach ($object->getContentRecord() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['contentRecord'] = $values_1;
            }
            if ($object->isInitialized('itemDescription') && null !== $object->getItemDescription()) {
                $data['itemDescription'] = $object->getItemDescription();
            }
            if ($object->isInitialized('variableHandlingChargeDetail') && null !== $object->getVariableHandlingChargeDetail()) {
                $data['variableHandlingChargeDetail'] = $this->normalizer->normalize($object->getVariableHandlingChargeDetail(), 'json', $context);
            }
            $values_2 = [];
            foreach ($object->getAssociatedFreightLineItems() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['associatedFreightLineItems'] = $values_2;
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem::class => false];
        }
    }
}
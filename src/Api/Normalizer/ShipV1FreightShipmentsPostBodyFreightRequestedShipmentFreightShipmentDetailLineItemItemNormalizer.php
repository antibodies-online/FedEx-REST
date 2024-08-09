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
    class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('handlingUnits', $data)) {
                $object->setHandlingUnits($data['handlingUnits']);
                unset($data['handlingUnits']);
            }
            if (\array_key_exists('nmfcCode', $data)) {
                $object->setNmfcCode($data['nmfcCode']);
                unset($data['nmfcCode']);
            }
            if (\array_key_exists('subPackagingType', $data)) {
                $object->setSubPackagingType($data['subPackagingType']);
                unset($data['subPackagingType']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemWeight::class, 'json', $context));
                unset($data['weight']);
            }
            if (\array_key_exists('pieces', $data)) {
                $object->setPieces($data['pieces']);
                unset($data['pieces']);
            }
            if (\array_key_exists('volume', $data)) {
                $object->setVolume($this->denormalizer->denormalize($data['volume'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemVolume::class, 'json', $context));
                unset($data['volume']);
            }
            if (\array_key_exists('freightClass', $data)) {
                $object->setFreightClass($data['freightClass']);
                unset($data['freightClass']);
            }
            if (\array_key_exists('purchaseOrderNumber', $data)) {
                $object->setPurchaseOrderNumber($data['purchaseOrderNumber']);
                unset($data['purchaseOrderNumber']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('hazardousMaterials', $data)) {
                $object->setHazardousMaterials($data['hazardousMaterials']);
                unset($data['hazardousMaterials']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemDimensions::class, 'json', $context));
                unset($data['dimensions']);
            }
            if (\array_key_exists('classProvidedByCustomer', $data)) {
                $object->setClassProvidedByCustomer($data['classProvidedByCustomer']);
                unset($data['classProvidedByCustomer']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('handlingUnits') && null !== $object->getHandlingUnits()) {
                $data['handlingUnits'] = $object->getHandlingUnits();
            }
            if ($object->isInitialized('nmfcCode') && null !== $object->getNmfcCode()) {
                $data['nmfcCode'] = $object->getNmfcCode();
            }
            $data['subPackagingType'] = $object->getSubPackagingType();
            $data['description'] = $object->getDescription();
            $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            $data['pieces'] = $object->getPieces();
            if ($object->isInitialized('volume') && null !== $object->getVolume()) {
                $data['volume'] = $this->normalizer->normalize($object->getVolume(), 'json', $context);
            }
            $data['freightClass'] = $object->getFreightClass();
            if ($object->isInitialized('purchaseOrderNumber') && null !== $object->getPurchaseOrderNumber()) {
                $data['purchaseOrderNumber'] = $object->getPurchaseOrderNumber();
            }
            $data['id'] = $object->getId();
            if ($object->isInitialized('hazardousMaterials') && null !== $object->getHazardousMaterials()) {
                $data['hazardousMaterials'] = $object->getHazardousMaterials();
            }
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('classProvidedByCustomer') && null !== $object->getClassProvidedByCustomer()) {
                $data['classProvidedByCustomer'] = $object->getClassProvidedByCustomer();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItem::class => false];
        }
    }
} else {
    class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('handlingUnits', $data)) {
                $object->setHandlingUnits($data['handlingUnits']);
                unset($data['handlingUnits']);
            }
            if (\array_key_exists('nmfcCode', $data)) {
                $object->setNmfcCode($data['nmfcCode']);
                unset($data['nmfcCode']);
            }
            if (\array_key_exists('subPackagingType', $data)) {
                $object->setSubPackagingType($data['subPackagingType']);
                unset($data['subPackagingType']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemWeight::class, 'json', $context));
                unset($data['weight']);
            }
            if (\array_key_exists('pieces', $data)) {
                $object->setPieces($data['pieces']);
                unset($data['pieces']);
            }
            if (\array_key_exists('volume', $data)) {
                $object->setVolume($this->denormalizer->denormalize($data['volume'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemVolume::class, 'json', $context));
                unset($data['volume']);
            }
            if (\array_key_exists('freightClass', $data)) {
                $object->setFreightClass($data['freightClass']);
                unset($data['freightClass']);
            }
            if (\array_key_exists('purchaseOrderNumber', $data)) {
                $object->setPurchaseOrderNumber($data['purchaseOrderNumber']);
                unset($data['purchaseOrderNumber']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('hazardousMaterials', $data)) {
                $object->setHazardousMaterials($data['hazardousMaterials']);
                unset($data['hazardousMaterials']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemDimensions::class, 'json', $context));
                unset($data['dimensions']);
            }
            if (\array_key_exists('classProvidedByCustomer', $data)) {
                $object->setClassProvidedByCustomer($data['classProvidedByCustomer']);
                unset($data['classProvidedByCustomer']);
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
            if ($object->isInitialized('handlingUnits') && null !== $object->getHandlingUnits()) {
                $data['handlingUnits'] = $object->getHandlingUnits();
            }
            if ($object->isInitialized('nmfcCode') && null !== $object->getNmfcCode()) {
                $data['nmfcCode'] = $object->getNmfcCode();
            }
            $data['subPackagingType'] = $object->getSubPackagingType();
            $data['description'] = $object->getDescription();
            $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            $data['pieces'] = $object->getPieces();
            if ($object->isInitialized('volume') && null !== $object->getVolume()) {
                $data['volume'] = $this->normalizer->normalize($object->getVolume(), 'json', $context);
            }
            $data['freightClass'] = $object->getFreightClass();
            if ($object->isInitialized('purchaseOrderNumber') && null !== $object->getPurchaseOrderNumber()) {
                $data['purchaseOrderNumber'] = $object->getPurchaseOrderNumber();
            }
            $data['id'] = $object->getId();
            if ($object->isInitialized('hazardousMaterials') && null !== $object->getHazardousMaterials()) {
                $data['hazardousMaterials'] = $object->getHazardousMaterials();
            }
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('classProvidedByCustomer') && null !== $object->getClassProvidedByCustomer()) {
                $data['classProvidedByCustomer'] = $object->getClassProvidedByCustomer();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItem::class => false];
        }
    }
}
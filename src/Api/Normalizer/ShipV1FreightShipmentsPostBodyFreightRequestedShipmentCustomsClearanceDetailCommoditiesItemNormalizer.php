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
    class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('unitPrice', $data)) {
                $object->setUnitPrice($this->denormalizer->denormalize($data['unitPrice'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItemUnitPrice::class, 'json', $context));
                unset($data['unitPrice']);
            }
            if (\array_key_exists('additionalMeasures', $data)) {
                $values = [];
                foreach ($data['additionalMeasures'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItemAdditionalMeasuresItem::class, 'json', $context);
                }
                $object->setAdditionalMeasures($values);
                unset($data['additionalMeasures']);
            }
            if (\array_key_exists('numberOfPieces', $data)) {
                $object->setNumberOfPieces($data['numberOfPieces']);
                unset($data['numberOfPieces']);
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($data['quantity']);
                unset($data['quantity']);
            }
            if (\array_key_exists('quantityUnits', $data)) {
                $object->setQuantityUnits($data['quantityUnits']);
                unset($data['quantityUnits']);
            }
            if (\array_key_exists('customsValue', $data)) {
                $object->setCustomsValue($this->denormalizer->denormalize($data['customsValue'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItemCustomsValue::class, 'json', $context));
                unset($data['customsValue']);
            }
            if (\array_key_exists('countryOfManufacture', $data)) {
                $object->setCountryOfManufacture($data['countryOfManufacture']);
                unset($data['countryOfManufacture']);
            }
            if (\array_key_exists('cIMarksAndNumbers', $data)) {
                $object->setCIMarksAndNumbers($data['cIMarksAndNumbers']);
                unset($data['cIMarksAndNumbers']);
            }
            if (\array_key_exists('harmonizedCode', $data)) {
                $object->setHarmonizedCode($data['harmonizedCode']);
                unset($data['harmonizedCode']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItemWeight::class, 'json', $context));
                unset($data['weight']);
            }
            if (\array_key_exists('exportLicenseNumber', $data)) {
                $object->setExportLicenseNumber($data['exportLicenseNumber']);
                unset($data['exportLicenseNumber']);
            }
            if (\array_key_exists('exportLicenseExpirationDate', $data)) {
                $object->setExportLicenseExpirationDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['exportLicenseExpirationDate']));
                unset($data['exportLicenseExpirationDate']);
            }
            if (\array_key_exists('partNumber', $data)) {
                $object->setPartNumber($data['partNumber']);
                unset($data['partNumber']);
            }
            if (\array_key_exists('purpose', $data)) {
                $object->setPurpose($data['purpose']);
                unset($data['purpose']);
            }
            if (\array_key_exists('usmcaDetail', $data)) {
                $object->setUsmcaDetail($this->denormalizer->denormalize($data['usmcaDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItemUsmcaDetail::class, 'json', $context));
                unset($data['usmcaDetail']);
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
            $data['unitPrice'] = $this->normalizer->normalize($object->getUnitPrice(), 'json', $context);
            if ($object->isInitialized('additionalMeasures') && null !== $object->getAdditionalMeasures()) {
                $values = [];
                foreach ($object->getAdditionalMeasures() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['additionalMeasures'] = $values;
            }
            if ($object->isInitialized('numberOfPieces') && null !== $object->getNumberOfPieces()) {
                $data['numberOfPieces'] = $object->getNumberOfPieces();
            }
            $data['quantity'] = $object->getQuantity();
            $data['quantityUnits'] = $object->getQuantityUnits();
            if ($object->isInitialized('customsValue') && null !== $object->getCustomsValue()) {
                $data['customsValue'] = $this->normalizer->normalize($object->getCustomsValue(), 'json', $context);
            }
            $data['countryOfManufacture'] = $object->getCountryOfManufacture();
            if ($object->isInitialized('cIMarksAndNumbers') && null !== $object->getCIMarksAndNumbers()) {
                $data['cIMarksAndNumbers'] = $object->getCIMarksAndNumbers();
            }
            if ($object->isInitialized('harmonizedCode') && null !== $object->getHarmonizedCode()) {
                $data['harmonizedCode'] = $object->getHarmonizedCode();
            }
            $data['description'] = $object->getDescription();
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            if ($object->isInitialized('exportLicenseNumber') && null !== $object->getExportLicenseNumber()) {
                $data['exportLicenseNumber'] = $object->getExportLicenseNumber();
            }
            if ($object->isInitialized('exportLicenseExpirationDate') && null !== $object->getExportLicenseExpirationDate()) {
                $data['exportLicenseExpirationDate'] = $object->getExportLicenseExpirationDate()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('partNumber') && null !== $object->getPartNumber()) {
                $data['partNumber'] = $object->getPartNumber();
            }
            if ($object->isInitialized('purpose') && null !== $object->getPurpose()) {
                $data['purpose'] = $object->getPurpose();
            }
            if ($object->isInitialized('usmcaDetail') && null !== $object->getUsmcaDetail()) {
                $data['usmcaDetail'] = $this->normalizer->normalize($object->getUsmcaDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItem::class => false];
        }
    }
} else {
    class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('unitPrice', $data)) {
                $object->setUnitPrice($this->denormalizer->denormalize($data['unitPrice'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItemUnitPrice::class, 'json', $context));
                unset($data['unitPrice']);
            }
            if (\array_key_exists('additionalMeasures', $data)) {
                $values = [];
                foreach ($data['additionalMeasures'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItemAdditionalMeasuresItem::class, 'json', $context);
                }
                $object->setAdditionalMeasures($values);
                unset($data['additionalMeasures']);
            }
            if (\array_key_exists('numberOfPieces', $data)) {
                $object->setNumberOfPieces($data['numberOfPieces']);
                unset($data['numberOfPieces']);
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($data['quantity']);
                unset($data['quantity']);
            }
            if (\array_key_exists('quantityUnits', $data)) {
                $object->setQuantityUnits($data['quantityUnits']);
                unset($data['quantityUnits']);
            }
            if (\array_key_exists('customsValue', $data)) {
                $object->setCustomsValue($this->denormalizer->denormalize($data['customsValue'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItemCustomsValue::class, 'json', $context));
                unset($data['customsValue']);
            }
            if (\array_key_exists('countryOfManufacture', $data)) {
                $object->setCountryOfManufacture($data['countryOfManufacture']);
                unset($data['countryOfManufacture']);
            }
            if (\array_key_exists('cIMarksAndNumbers', $data)) {
                $object->setCIMarksAndNumbers($data['cIMarksAndNumbers']);
                unset($data['cIMarksAndNumbers']);
            }
            if (\array_key_exists('harmonizedCode', $data)) {
                $object->setHarmonizedCode($data['harmonizedCode']);
                unset($data['harmonizedCode']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItemWeight::class, 'json', $context));
                unset($data['weight']);
            }
            if (\array_key_exists('exportLicenseNumber', $data)) {
                $object->setExportLicenseNumber($data['exportLicenseNumber']);
                unset($data['exportLicenseNumber']);
            }
            if (\array_key_exists('exportLicenseExpirationDate', $data)) {
                $object->setExportLicenseExpirationDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['exportLicenseExpirationDate']));
                unset($data['exportLicenseExpirationDate']);
            }
            if (\array_key_exists('partNumber', $data)) {
                $object->setPartNumber($data['partNumber']);
                unset($data['partNumber']);
            }
            if (\array_key_exists('purpose', $data)) {
                $object->setPurpose($data['purpose']);
                unset($data['purpose']);
            }
            if (\array_key_exists('usmcaDetail', $data)) {
                $object->setUsmcaDetail($this->denormalizer->denormalize($data['usmcaDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItemUsmcaDetail::class, 'json', $context));
                unset($data['usmcaDetail']);
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
            $data['unitPrice'] = $this->normalizer->normalize($object->getUnitPrice(), 'json', $context);
            if ($object->isInitialized('additionalMeasures') && null !== $object->getAdditionalMeasures()) {
                $values = [];
                foreach ($object->getAdditionalMeasures() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['additionalMeasures'] = $values;
            }
            if ($object->isInitialized('numberOfPieces') && null !== $object->getNumberOfPieces()) {
                $data['numberOfPieces'] = $object->getNumberOfPieces();
            }
            $data['quantity'] = $object->getQuantity();
            $data['quantityUnits'] = $object->getQuantityUnits();
            if ($object->isInitialized('customsValue') && null !== $object->getCustomsValue()) {
                $data['customsValue'] = $this->normalizer->normalize($object->getCustomsValue(), 'json', $context);
            }
            $data['countryOfManufacture'] = $object->getCountryOfManufacture();
            if ($object->isInitialized('cIMarksAndNumbers') && null !== $object->getCIMarksAndNumbers()) {
                $data['cIMarksAndNumbers'] = $object->getCIMarksAndNumbers();
            }
            if ($object->isInitialized('harmonizedCode') && null !== $object->getHarmonizedCode()) {
                $data['harmonizedCode'] = $object->getHarmonizedCode();
            }
            $data['description'] = $object->getDescription();
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            if ($object->isInitialized('exportLicenseNumber') && null !== $object->getExportLicenseNumber()) {
                $data['exportLicenseNumber'] = $object->getExportLicenseNumber();
            }
            if ($object->isInitialized('exportLicenseExpirationDate') && null !== $object->getExportLicenseExpirationDate()) {
                $data['exportLicenseExpirationDate'] = $object->getExportLicenseExpirationDate()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('partNumber') && null !== $object->getPartNumber()) {
                $data['partNumber'] = $object->getPartNumber();
            }
            if ($object->isInitialized('purpose') && null !== $object->getPurpose()) {
                $data['purpose'] = $object->getPurpose();
            }
            if ($object->isInitialized('usmcaDetail') && null !== $object->getUsmcaDetail()) {
                $data['usmcaDetail'] = $this->normalizer->normalize($object->getUsmcaDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItem::class => false];
        }
    }
}
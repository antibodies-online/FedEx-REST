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
    class AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($data['quantity']);
                unset($data['quantity']);
            }
            if (\array_key_exists('unitPrice', $data)) {
                $object->setUnitPrice($this->denormalizer->denormalize($data['unitPrice'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemUnitPrice', 'json', $context));
                unset($data['unitPrice']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemWeight', 'json', $context));
                unset($data['weight']);
            }
            if (\array_key_exists('customsValue', $data)) {
                $object->setCustomsValue($this->denormalizer->denormalize($data['customsValue'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemCustomsValue', 'json', $context));
                unset($data['customsValue']);
            }
            if (\array_key_exists('numberOfPieces', $data)) {
                $object->setNumberOfPieces($data['numberOfPieces']);
                unset($data['numberOfPieces']);
            }
            if (\array_key_exists('countryOfManufacture', $data)) {
                $object->setCountryOfManufacture($data['countryOfManufacture']);
                unset($data['countryOfManufacture']);
            }
            if (\array_key_exists('quantityUnits', $data)) {
                $object->setQuantityUnits($data['quantityUnits']);
                unset($data['quantityUnits']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('harmonizedCode', $data)) {
                $object->setHarmonizedCode($data['harmonizedCode']);
                unset($data['harmonizedCode']);
            }
            if (\array_key_exists('partNumber', $data)) {
                $object->setPartNumber($data['partNumber']);
                unset($data['partNumber']);
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
            $data['description'] = $object->getDescription();
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('unitPrice') && null !== $object->getUnitPrice()) {
                $data['unitPrice'] = $this->normalizer->normalize($object->getUnitPrice(), 'json', $context);
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            }
            $data['customsValue'] = $this->normalizer->normalize($object->getCustomsValue(), 'json', $context);
            $data['numberOfPieces'] = $object->getNumberOfPieces();
            if ($object->isInitialized('countryOfManufacture') && null !== $object->getCountryOfManufacture()) {
                $data['countryOfManufacture'] = $object->getCountryOfManufacture();
            }
            if ($object->isInitialized('quantityUnits') && null !== $object->getQuantityUnits()) {
                $data['quantityUnits'] = $object->getQuantityUnits();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('harmonizedCode') && null !== $object->getHarmonizedCode()) {
                $data['harmonizedCode'] = $object->getHarmonizedCode();
            }
            if ($object->isInitialized('partNumber') && null !== $object->getPartNumber()) {
                $data['partNumber'] = $object->getPartNumber();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem' => false];
        }
    }
} else {
    class AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($data['quantity']);
                unset($data['quantity']);
            }
            if (\array_key_exists('unitPrice', $data)) {
                $object->setUnitPrice($this->denormalizer->denormalize($data['unitPrice'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemUnitPrice', 'json', $context));
                unset($data['unitPrice']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemWeight', 'json', $context));
                unset($data['weight']);
            }
            if (\array_key_exists('customsValue', $data)) {
                $object->setCustomsValue($this->denormalizer->denormalize($data['customsValue'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemCustomsValue', 'json', $context));
                unset($data['customsValue']);
            }
            if (\array_key_exists('numberOfPieces', $data)) {
                $object->setNumberOfPieces($data['numberOfPieces']);
                unset($data['numberOfPieces']);
            }
            if (\array_key_exists('countryOfManufacture', $data)) {
                $object->setCountryOfManufacture($data['countryOfManufacture']);
                unset($data['countryOfManufacture']);
            }
            if (\array_key_exists('quantityUnits', $data)) {
                $object->setQuantityUnits($data['quantityUnits']);
                unset($data['quantityUnits']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('harmonizedCode', $data)) {
                $object->setHarmonizedCode($data['harmonizedCode']);
                unset($data['harmonizedCode']);
            }
            if (\array_key_exists('partNumber', $data)) {
                $object->setPartNumber($data['partNumber']);
                unset($data['partNumber']);
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
            $data['description'] = $object->getDescription();
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('unitPrice') && null !== $object->getUnitPrice()) {
                $data['unitPrice'] = $this->normalizer->normalize($object->getUnitPrice(), 'json', $context);
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            }
            $data['customsValue'] = $this->normalizer->normalize($object->getCustomsValue(), 'json', $context);
            $data['numberOfPieces'] = $object->getNumberOfPieces();
            if ($object->isInitialized('countryOfManufacture') && null !== $object->getCountryOfManufacture()) {
                $data['countryOfManufacture'] = $object->getCountryOfManufacture();
            }
            if ($object->isInitialized('quantityUnits') && null !== $object->getQuantityUnits()) {
                $data['quantityUnits'] = $object->getQuantityUnits();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('harmonizedCode') && null !== $object->getHarmonizedCode()) {
                $data['harmonizedCode'] = $object->getHarmonizedCode();
            }
            if ($object->isInitialized('partNumber') && null !== $object->getPartNumber()) {
                $data['partNumber'] = $object->getPartNumber();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem' => false];
        }
    }
}
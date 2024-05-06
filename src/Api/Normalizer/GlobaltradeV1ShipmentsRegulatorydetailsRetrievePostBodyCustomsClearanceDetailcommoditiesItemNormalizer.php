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
    class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($data['quantity']);
                unset($data['quantity']);
            }
            if (\array_key_exists('quantityUOM', $data)) {
                $object->setQuantityUOM($data['quantityUOM']);
                unset($data['quantityUOM']);
            }
            if (\array_key_exists('customsValue', $data)) {
                $object->setCustomsValue($this->denormalizer->denormalize($data['customsValue'], 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemCustomsValue', 'json', $context));
                unset($data['customsValue']);
            }
            if (\array_key_exists('countryOfManufacture', $data)) {
                $object->setCountryOfManufacture($data['countryOfManufacture']);
                unset($data['countryOfManufacture']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('harmonizedCode', $data)) {
                $object->setHarmonizedCode($data['harmonizedCode']);
                unset($data['harmonizedCode']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemWeight', 'json', $context));
                unset($data['weight']);
            }
            if (\array_key_exists('commodityId', $data)) {
                $object->setCommodityId($data['commodityId']);
                unset($data['commodityId']);
            }
            if (\array_key_exists('additionalMeasures', $data)) {
                $object->setAdditionalMeasures($this->denormalizer->denormalize($data['additionalMeasures'], 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasures', 'json', $context));
                unset($data['additionalMeasures']);
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
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('quantityUOM') && null !== $object->getQuantityUOM()) {
                $data['quantityUOM'] = $object->getQuantityUOM();
            }
            if ($object->isInitialized('customsValue') && null !== $object->getCustomsValue()) {
                $data['customsValue'] = $this->normalizer->normalize($object->getCustomsValue(), 'json', $context);
            }
            if ($object->isInitialized('countryOfManufacture') && null !== $object->getCountryOfManufacture()) {
                $data['countryOfManufacture'] = $object->getCountryOfManufacture();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            $data['harmonizedCode'] = $object->getHarmonizedCode();
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            }
            if ($object->isInitialized('commodityId') && null !== $object->getCommodityId()) {
                $data['commodityId'] = $object->getCommodityId();
            }
            if ($object->isInitialized('additionalMeasures') && null !== $object->getAdditionalMeasures()) {
                $data['additionalMeasures'] = $this->normalizer->normalize($object->getAdditionalMeasures(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItem' => false];
        }
    }
} else {
    class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItem';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($data['quantity']);
                unset($data['quantity']);
            }
            if (\array_key_exists('quantityUOM', $data)) {
                $object->setQuantityUOM($data['quantityUOM']);
                unset($data['quantityUOM']);
            }
            if (\array_key_exists('customsValue', $data)) {
                $object->setCustomsValue($this->denormalizer->denormalize($data['customsValue'], 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemCustomsValue', 'json', $context));
                unset($data['customsValue']);
            }
            if (\array_key_exists('countryOfManufacture', $data)) {
                $object->setCountryOfManufacture($data['countryOfManufacture']);
                unset($data['countryOfManufacture']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('harmonizedCode', $data)) {
                $object->setHarmonizedCode($data['harmonizedCode']);
                unset($data['harmonizedCode']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemWeight', 'json', $context));
                unset($data['weight']);
            }
            if (\array_key_exists('commodityId', $data)) {
                $object->setCommodityId($data['commodityId']);
                unset($data['commodityId']);
            }
            if (\array_key_exists('additionalMeasures', $data)) {
                $object->setAdditionalMeasures($this->denormalizer->denormalize($data['additionalMeasures'], 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasures', 'json', $context));
                unset($data['additionalMeasures']);
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
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('quantityUOM') && null !== $object->getQuantityUOM()) {
                $data['quantityUOM'] = $object->getQuantityUOM();
            }
            if ($object->isInitialized('customsValue') && null !== $object->getCustomsValue()) {
                $data['customsValue'] = $this->normalizer->normalize($object->getCustomsValue(), 'json', $context);
            }
            if ($object->isInitialized('countryOfManufacture') && null !== $object->getCountryOfManufacture()) {
                $data['countryOfManufacture'] = $object->getCountryOfManufacture();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            $data['harmonizedCode'] = $object->getHarmonizedCode();
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            }
            if ($object->isInitialized('commodityId') && null !== $object->getCommodityId()) {
                $data['commodityId'] = $object->getCommodityId();
            }
            if ($object->isInitialized('additionalMeasures') && null !== $object->getAdditionalMeasures()) {
                $data['additionalMeasures'] = $this->normalizer->normalize($object->getAdditionalMeasures(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItem' => false];
        }
    }
}
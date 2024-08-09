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
    class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('subPackagingType', $data)) {
                $object->setSubPackagingType($data['subPackagingType']);
                unset($data['subPackagingType']);
            }
            if (\array_key_exists('groupPackageCount', $data)) {
                $object->setGroupPackageCount($data['groupPackageCount']);
                unset($data['groupPackageCount']);
            }
            if (\array_key_exists('contentRecord', $data)) {
                $values = [];
                foreach ($data['contentRecord'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemContentRecordItem::class, 'json', $context);
                }
                $object->setContentRecord($values);
                unset($data['contentRecord']);
            }
            if (\array_key_exists('declaredValue', $data)) {
                $object->setDeclaredValue($data['declaredValue']);
                unset($data['declaredValue']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($data['weight']);
                unset($data['weight']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($data['dimensions']);
                unset($data['dimensions']);
            }
            if (\array_key_exists('variableHandlingChargeDetail', $data)) {
                $object->setVariableHandlingChargeDetail($this->denormalizer->denormalize($data['variableHandlingChargeDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemVariableHandlingChargeDetail::class, 'json', $context));
                unset($data['variableHandlingChargeDetail']);
            }
            if (\array_key_exists('packageSpecialServices', $data)) {
                $object->setPackageSpecialServices($this->denormalizer->denormalize($data['packageSpecialServices'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices::class, 'json', $context));
                unset($data['packageSpecialServices']);
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
            if ($object->isInitialized('subPackagingType') && null !== $object->getSubPackagingType()) {
                $data['subPackagingType'] = $object->getSubPackagingType();
            }
            if ($object->isInitialized('groupPackageCount') && null !== $object->getGroupPackageCount()) {
                $data['groupPackageCount'] = $object->getGroupPackageCount();
            }
            if ($object->isInitialized('contentRecord') && null !== $object->getContentRecord()) {
                $values = [];
                foreach ($object->getContentRecord() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['contentRecord'] = $values;
            }
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['declaredValue'] = $object->getDeclaredValue();
            }
            $data['weight'] = $object->getWeight();
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $object->getDimensions();
            }
            if ($object->isInitialized('variableHandlingChargeDetail') && null !== $object->getVariableHandlingChargeDetail()) {
                $data['variableHandlingChargeDetail'] = $this->normalizer->normalize($object->getVariableHandlingChargeDetail(), 'json', $context);
            }
            if ($object->isInitialized('packageSpecialServices') && null !== $object->getPackageSpecialServices()) {
                $data['packageSpecialServices'] = $this->normalizer->normalize($object->getPackageSpecialServices(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItem::class => false];
        }
    }
} else {
    class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('subPackagingType', $data)) {
                $object->setSubPackagingType($data['subPackagingType']);
                unset($data['subPackagingType']);
            }
            if (\array_key_exists('groupPackageCount', $data)) {
                $object->setGroupPackageCount($data['groupPackageCount']);
                unset($data['groupPackageCount']);
            }
            if (\array_key_exists('contentRecord', $data)) {
                $values = [];
                foreach ($data['contentRecord'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemContentRecordItem::class, 'json', $context);
                }
                $object->setContentRecord($values);
                unset($data['contentRecord']);
            }
            if (\array_key_exists('declaredValue', $data)) {
                $object->setDeclaredValue($data['declaredValue']);
                unset($data['declaredValue']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($data['weight']);
                unset($data['weight']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($data['dimensions']);
                unset($data['dimensions']);
            }
            if (\array_key_exists('variableHandlingChargeDetail', $data)) {
                $object->setVariableHandlingChargeDetail($this->denormalizer->denormalize($data['variableHandlingChargeDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemVariableHandlingChargeDetail::class, 'json', $context));
                unset($data['variableHandlingChargeDetail']);
            }
            if (\array_key_exists('packageSpecialServices', $data)) {
                $object->setPackageSpecialServices($this->denormalizer->denormalize($data['packageSpecialServices'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices::class, 'json', $context));
                unset($data['packageSpecialServices']);
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
            if ($object->isInitialized('subPackagingType') && null !== $object->getSubPackagingType()) {
                $data['subPackagingType'] = $object->getSubPackagingType();
            }
            if ($object->isInitialized('groupPackageCount') && null !== $object->getGroupPackageCount()) {
                $data['groupPackageCount'] = $object->getGroupPackageCount();
            }
            if ($object->isInitialized('contentRecord') && null !== $object->getContentRecord()) {
                $values = [];
                foreach ($object->getContentRecord() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['contentRecord'] = $values;
            }
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['declaredValue'] = $object->getDeclaredValue();
            }
            $data['weight'] = $object->getWeight();
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $object->getDimensions();
            }
            if ($object->isInitialized('variableHandlingChargeDetail') && null !== $object->getVariableHandlingChargeDetail()) {
                $data['variableHandlingChargeDetail'] = $this->normalizer->normalize($object->getVariableHandlingChargeDetail(), 'json', $context);
            }
            if ($object->isInitialized('packageSpecialServices') && null !== $object->getPackageSpecialServices()) {
                $data['packageSpecialServices'] = $this->normalizer->normalize($object->getPackageSpecialServices(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItem::class => false];
        }
    }
}
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
    class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetails::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetails::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('regulatoryStatements', $data)) {
                $object->setRegulatoryStatements($this->denormalizer->denormalize($data['regulatoryStatements'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatements::class, 'json', $context));
                unset($data['regulatoryStatements']);
            }
            if (\array_key_exists('requiredCommodityUnitsOfMeasure', $data)) {
                $values = [];
                foreach ($data['requiredCommodityUnitsOfMeasure'] as $value) {
                    $values[] = $value;
                }
                $object->setRequiredCommodityUnitsOfMeasure($values);
                unset($data['requiredCommodityUnitsOfMeasure']);
            }
            if (\array_key_exists('level', $data)) {
                $object->setLevel($data['level']);
                unset($data['level']);
            }
            if (\array_key_exists('commodityIndex', $data)) {
                $object->setCommodityIndex($data['commodityIndex']);
                unset($data['commodityIndex']);
            }
            if (\array_key_exists('regulatoryDocuments', $data)) {
                $object->setRegulatoryDocuments($this->denormalizer->denormalize($data['regulatoryDocuments'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocuments::class, 'json', $context));
                unset($data['regulatoryDocuments']);
            }
            if (\array_key_exists('regulatoryCountryAdvisories', $data)) {
                $object->setRegulatoryCountryAdvisories($this->denormalizer->denormalize($data['regulatoryCountryAdvisories'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryCountryAdvisories::class, 'json', $context));
                unset($data['regulatoryCountryAdvisories']);
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
            if ($object->isInitialized('regulatoryStatements') && null !== $object->getRegulatoryStatements()) {
                $data['regulatoryStatements'] = $this->normalizer->normalize($object->getRegulatoryStatements(), 'json', $context);
            }
            if ($object->isInitialized('requiredCommodityUnitsOfMeasure') && null !== $object->getRequiredCommodityUnitsOfMeasure()) {
                $values = [];
                foreach ($object->getRequiredCommodityUnitsOfMeasure() as $value) {
                    $values[] = $value;
                }
                $data['requiredCommodityUnitsOfMeasure'] = $values;
            }
            if ($object->isInitialized('level') && null !== $object->getLevel()) {
                $data['level'] = $object->getLevel();
            }
            if ($object->isInitialized('commodityIndex') && null !== $object->getCommodityIndex()) {
                $data['commodityIndex'] = $object->getCommodityIndex();
            }
            if ($object->isInitialized('regulatoryDocuments') && null !== $object->getRegulatoryDocuments()) {
                $data['regulatoryDocuments'] = $this->normalizer->normalize($object->getRegulatoryDocuments(), 'json', $context);
            }
            if ($object->isInitialized('regulatoryCountryAdvisories') && null !== $object->getRegulatoryCountryAdvisories()) {
                $data['regulatoryCountryAdvisories'] = $this->normalizer->normalize($object->getRegulatoryCountryAdvisories(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetails::class => false];
        }
    }
} else {
    class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetails::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetails::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('regulatoryStatements', $data)) {
                $object->setRegulatoryStatements($this->denormalizer->denormalize($data['regulatoryStatements'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatements::class, 'json', $context));
                unset($data['regulatoryStatements']);
            }
            if (\array_key_exists('requiredCommodityUnitsOfMeasure', $data)) {
                $values = [];
                foreach ($data['requiredCommodityUnitsOfMeasure'] as $value) {
                    $values[] = $value;
                }
                $object->setRequiredCommodityUnitsOfMeasure($values);
                unset($data['requiredCommodityUnitsOfMeasure']);
            }
            if (\array_key_exists('level', $data)) {
                $object->setLevel($data['level']);
                unset($data['level']);
            }
            if (\array_key_exists('commodityIndex', $data)) {
                $object->setCommodityIndex($data['commodityIndex']);
                unset($data['commodityIndex']);
            }
            if (\array_key_exists('regulatoryDocuments', $data)) {
                $object->setRegulatoryDocuments($this->denormalizer->denormalize($data['regulatoryDocuments'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocuments::class, 'json', $context));
                unset($data['regulatoryDocuments']);
            }
            if (\array_key_exists('regulatoryCountryAdvisories', $data)) {
                $object->setRegulatoryCountryAdvisories($this->denormalizer->denormalize($data['regulatoryCountryAdvisories'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryCountryAdvisories::class, 'json', $context));
                unset($data['regulatoryCountryAdvisories']);
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
            if ($object->isInitialized('regulatoryStatements') && null !== $object->getRegulatoryStatements()) {
                $data['regulatoryStatements'] = $this->normalizer->normalize($object->getRegulatoryStatements(), 'json', $context);
            }
            if ($object->isInitialized('requiredCommodityUnitsOfMeasure') && null !== $object->getRequiredCommodityUnitsOfMeasure()) {
                $values = [];
                foreach ($object->getRequiredCommodityUnitsOfMeasure() as $value) {
                    $values[] = $value;
                }
                $data['requiredCommodityUnitsOfMeasure'] = $values;
            }
            if ($object->isInitialized('level') && null !== $object->getLevel()) {
                $data['level'] = $object->getLevel();
            }
            if ($object->isInitialized('commodityIndex') && null !== $object->getCommodityIndex()) {
                $data['commodityIndex'] = $object->getCommodityIndex();
            }
            if ($object->isInitialized('regulatoryDocuments') && null !== $object->getRegulatoryDocuments()) {
                $data['regulatoryDocuments'] = $this->normalizer->normalize($object->getRegulatoryDocuments(), 'json', $context);
            }
            if ($object->isInitialized('regulatoryCountryAdvisories') && null !== $object->getRegulatoryCountryAdvisories()) {
                $data['regulatoryCountryAdvisories'] = $this->normalizer->normalize($object->getRegulatoryCountryAdvisories(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetails::class => false];
        }
    }
}
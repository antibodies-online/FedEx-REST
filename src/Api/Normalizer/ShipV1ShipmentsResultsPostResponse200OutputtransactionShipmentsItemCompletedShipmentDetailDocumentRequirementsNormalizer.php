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
    class ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailDocumentRequirementsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailDocumentRequirements::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailDocumentRequirements::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailDocumentRequirements();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('requiredDocuments', $data)) {
                $values = [];
                foreach ($data['requiredDocuments'] as $value) {
                    $values[] = $value;
                }
                $object->setRequiredDocuments($values);
                unset($data['requiredDocuments']);
            }
            if (\array_key_exists('prohibitedDocuments', $data)) {
                $values_1 = [];
                foreach ($data['prohibitedDocuments'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setProhibitedDocuments($values_1);
                unset($data['prohibitedDocuments']);
            }
            if (\array_key_exists('generationDetails', $data)) {
                $values_2 = [];
                foreach ($data['generationDetails'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailDocumentRequirementsGenerationDetailsItem::class, 'json', $context);
                }
                $object->setGenerationDetails($values_2);
                unset($data['generationDetails']);
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
            if ($object->isInitialized('requiredDocuments') && null !== $object->getRequiredDocuments()) {
                $values = [];
                foreach ($object->getRequiredDocuments() as $value) {
                    $values[] = $value;
                }
                $data['requiredDocuments'] = $values;
            }
            if ($object->isInitialized('prohibitedDocuments') && null !== $object->getProhibitedDocuments()) {
                $values_1 = [];
                foreach ($object->getProhibitedDocuments() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['prohibitedDocuments'] = $values_1;
            }
            if ($object->isInitialized('generationDetails') && null !== $object->getGenerationDetails()) {
                $values_2 = [];
                foreach ($object->getGenerationDetails() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['generationDetails'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailDocumentRequirements::class => false];
        }
    }
} else {
    class ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailDocumentRequirementsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailDocumentRequirements::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailDocumentRequirements::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailDocumentRequirements();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('requiredDocuments', $data)) {
                $values = [];
                foreach ($data['requiredDocuments'] as $value) {
                    $values[] = $value;
                }
                $object->setRequiredDocuments($values);
                unset($data['requiredDocuments']);
            }
            if (\array_key_exists('prohibitedDocuments', $data)) {
                $values_1 = [];
                foreach ($data['prohibitedDocuments'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setProhibitedDocuments($values_1);
                unset($data['prohibitedDocuments']);
            }
            if (\array_key_exists('generationDetails', $data)) {
                $values_2 = [];
                foreach ($data['generationDetails'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailDocumentRequirementsGenerationDetailsItem::class, 'json', $context);
                }
                $object->setGenerationDetails($values_2);
                unset($data['generationDetails']);
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
            if ($object->isInitialized('requiredDocuments') && null !== $object->getRequiredDocuments()) {
                $values = [];
                foreach ($object->getRequiredDocuments() as $value) {
                    $values[] = $value;
                }
                $data['requiredDocuments'] = $values;
            }
            if ($object->isInitialized('prohibitedDocuments') && null !== $object->getProhibitedDocuments()) {
                $values_1 = [];
                foreach ($object->getProhibitedDocuments() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['prohibitedDocuments'] = $values_1;
            }
            if ($object->isInitialized('generationDetails') && null !== $object->getGenerationDetails()) {
                $values_2 = [];
                foreach ($object->getGenerationDetails() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['generationDetails'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailDocumentRequirements::class => false];
        }
    }
}
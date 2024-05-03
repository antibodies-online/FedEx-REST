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
    class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescription';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescription';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescription();
            if (\array_key_exists('percentage', $data) && \is_int($data['percentage'])) {
                $data['percentage'] = (double) $data['percentage'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sequenceNumber', $data)) {
                $object->setSequenceNumber($data['sequenceNumber']);
                unset($data['sequenceNumber']);
            }
            if (\array_key_exists('processingOptions', $data)) {
                $values = [];
                foreach ($data['processingOptions'] as $value) {
                    $values[] = $value;
                }
                $object->setProcessingOptions($values);
                unset($data['processingOptions']);
            }
            if (\array_key_exists('subsidiaryClasses', $data)) {
                $values_1 = [];
                foreach ($data['subsidiaryClasses'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setSubsidiaryClasses($values_1);
                unset($data['subsidiaryClasses']);
            }
            if (\array_key_exists('labelText', $data)) {
                $object->setLabelText($data['labelText']);
                unset($data['labelText']);
            }
            if (\array_key_exists('technicalName', $data)) {
                $object->setTechnicalName($data['technicalName']);
                unset($data['technicalName']);
            }
            if (\array_key_exists('packingDetails', $data)) {
                $object->setPackingDetails($this->denormalizer->denormalize($data['packingDetails'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescriptionPackingDetails', 'json', $context));
                unset($data['packingDetails']);
            }
            if (\array_key_exists('authorization', $data)) {
                $object->setAuthorization($data['authorization']);
                unset($data['authorization']);
            }
            if (\array_key_exists('reportableQuantity', $data)) {
                $object->setReportableQuantity($data['reportableQuantity']);
                unset($data['reportableQuantity']);
            }
            if (\array_key_exists('percentage', $data)) {
                $object->setPercentage($data['percentage']);
                unset($data['percentage']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('packingGroup', $data)) {
                $object->setPackingGroup($data['packingGroup']);
                unset($data['packingGroup']);
            }
            if (\array_key_exists('properShippingName', $data)) {
                $object->setProperShippingName($data['properShippingName']);
                unset($data['properShippingName']);
            }
            if (\array_key_exists('hazardClass', $data)) {
                $object->setHazardClass($data['hazardClass']);
                unset($data['hazardClass']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('sequenceNumber') && null !== $object->getSequenceNumber()) {
                $data['sequenceNumber'] = $object->getSequenceNumber();
            }
            if ($object->isInitialized('processingOptions') && null !== $object->getProcessingOptions()) {
                $values = [];
                foreach ($object->getProcessingOptions() as $value) {
                    $values[] = $value;
                }
                $data['processingOptions'] = $values;
            }
            if ($object->isInitialized('subsidiaryClasses') && null !== $object->getSubsidiaryClasses()) {
                $values_1 = [];
                foreach ($object->getSubsidiaryClasses() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['subsidiaryClasses'] = $values_1;
            }
            if ($object->isInitialized('labelText') && null !== $object->getLabelText()) {
                $data['labelText'] = $object->getLabelText();
            }
            if ($object->isInitialized('technicalName') && null !== $object->getTechnicalName()) {
                $data['technicalName'] = $object->getTechnicalName();
            }
            if ($object->isInitialized('packingDetails') && null !== $object->getPackingDetails()) {
                $data['packingDetails'] = $this->normalizer->normalize($object->getPackingDetails(), 'json', $context);
            }
            if ($object->isInitialized('authorization') && null !== $object->getAuthorization()) {
                $data['authorization'] = $object->getAuthorization();
            }
            $data['reportableQuantity'] = $object->getReportableQuantity();
            if ($object->isInitialized('percentage') && null !== $object->getPercentage()) {
                $data['percentage'] = $object->getPercentage();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            $data['packingGroup'] = $object->getPackingGroup();
            if ($object->isInitialized('properShippingName') && null !== $object->getProperShippingName()) {
                $data['properShippingName'] = $object->getProperShippingName();
            }
            if ($object->isInitialized('hazardClass') && null !== $object->getHazardClass()) {
                $data['hazardClass'] = $object->getHazardClass();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescription' => false];
        }
    }
} else {
    class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescription';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescription';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescription();
            if (\array_key_exists('percentage', $data) && \is_int($data['percentage'])) {
                $data['percentage'] = (double) $data['percentage'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sequenceNumber', $data)) {
                $object->setSequenceNumber($data['sequenceNumber']);
                unset($data['sequenceNumber']);
            }
            if (\array_key_exists('processingOptions', $data)) {
                $values = [];
                foreach ($data['processingOptions'] as $value) {
                    $values[] = $value;
                }
                $object->setProcessingOptions($values);
                unset($data['processingOptions']);
            }
            if (\array_key_exists('subsidiaryClasses', $data)) {
                $values_1 = [];
                foreach ($data['subsidiaryClasses'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setSubsidiaryClasses($values_1);
                unset($data['subsidiaryClasses']);
            }
            if (\array_key_exists('labelText', $data)) {
                $object->setLabelText($data['labelText']);
                unset($data['labelText']);
            }
            if (\array_key_exists('technicalName', $data)) {
                $object->setTechnicalName($data['technicalName']);
                unset($data['technicalName']);
            }
            if (\array_key_exists('packingDetails', $data)) {
                $object->setPackingDetails($this->denormalizer->denormalize($data['packingDetails'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescriptionPackingDetails', 'json', $context));
                unset($data['packingDetails']);
            }
            if (\array_key_exists('authorization', $data)) {
                $object->setAuthorization($data['authorization']);
                unset($data['authorization']);
            }
            if (\array_key_exists('reportableQuantity', $data)) {
                $object->setReportableQuantity($data['reportableQuantity']);
                unset($data['reportableQuantity']);
            }
            if (\array_key_exists('percentage', $data)) {
                $object->setPercentage($data['percentage']);
                unset($data['percentage']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('packingGroup', $data)) {
                $object->setPackingGroup($data['packingGroup']);
                unset($data['packingGroup']);
            }
            if (\array_key_exists('properShippingName', $data)) {
                $object->setProperShippingName($data['properShippingName']);
                unset($data['properShippingName']);
            }
            if (\array_key_exists('hazardClass', $data)) {
                $object->setHazardClass($data['hazardClass']);
                unset($data['hazardClass']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('processingOptions') && null !== $object->getProcessingOptions()) {
                $values = [];
                foreach ($object->getProcessingOptions() as $value) {
                    $values[] = $value;
                }
                $data['processingOptions'] = $values;
            }
            if ($object->isInitialized('subsidiaryClasses') && null !== $object->getSubsidiaryClasses()) {
                $values_1 = [];
                foreach ($object->getSubsidiaryClasses() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['subsidiaryClasses'] = $values_1;
            }
            if ($object->isInitialized('labelText') && null !== $object->getLabelText()) {
                $data['labelText'] = $object->getLabelText();
            }
            if ($object->isInitialized('technicalName') && null !== $object->getTechnicalName()) {
                $data['technicalName'] = $object->getTechnicalName();
            }
            if ($object->isInitialized('packingDetails') && null !== $object->getPackingDetails()) {
                $data['packingDetails'] = $this->normalizer->normalize($object->getPackingDetails(), 'json', $context);
            }
            if ($object->isInitialized('authorization') && null !== $object->getAuthorization()) {
                $data['authorization'] = $object->getAuthorization();
            }
            $data['reportableQuantity'] = $object->getReportableQuantity();
            if ($object->isInitialized('percentage') && null !== $object->getPercentage()) {
                $data['percentage'] = $object->getPercentage();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            $data['packingGroup'] = $object->getPackingGroup();
            if ($object->isInitialized('properShippingName') && null !== $object->getProperShippingName()) {
                $data['properShippingName'] = $object->getProperShippingName();
            }
            if ($object->isInitialized('hazardClass') && null !== $object->getHazardClass()) {
                $data['hazardClass'] = $object->getHazardClass();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescription' => false];
        }
    }
}
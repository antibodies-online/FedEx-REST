<?php

namespace AntibodiesOnline\FedEx\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use AntibodiesOnline\FedEx\Runtime\Normalizer\CheckArray;
use AntibodiesOnline\FedEx\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sequenceNumber', $data)) {
                $object->setSequenceNumber($data['sequenceNumber']);
                unset($data['sequenceNumber']);
            }
            if (\array_key_exists('packingInstructions', $data)) {
                $object->setPackingInstructions($data['packingInstructions']);
                unset($data['packingInstructions']);
            }
            if (\array_key_exists('subsidiaryClasses', $data)) {
                $values = [];
                foreach ($data['subsidiaryClasses'] as $value) {
                    $values[] = $value;
                }
                $object->setSubsidiaryClasses($values);
                unset($data['subsidiaryClasses']);
            }
            if (\array_key_exists('labelText', $data)) {
                $object->setLabelText($data['labelText']);
                unset($data['labelText']);
            }
            if (\array_key_exists('tunnelRestrictionCode', $data)) {
                $object->setTunnelRestrictionCode($data['tunnelRestrictionCode']);
                unset($data['tunnelRestrictionCode']);
            }
            if (\array_key_exists('specialProvisions', $data)) {
                $object->setSpecialProvisions($data['specialProvisions']);
                unset($data['specialProvisions']);
            }
            if (\array_key_exists('properShippingNameAndDescription', $data)) {
                $object->setProperShippingNameAndDescription($data['properShippingNameAndDescription']);
                unset($data['properShippingNameAndDescription']);
            }
            if (\array_key_exists('technicalName', $data)) {
                $object->setTechnicalName($data['technicalName']);
                unset($data['technicalName']);
            }
            if (\array_key_exists('symbols', $data)) {
                $object->setSymbols($data['symbols']);
                unset($data['symbols']);
            }
            if (\array_key_exists('authorization', $data)) {
                $object->setAuthorization($data['authorization']);
                unset($data['authorization']);
            }
            if (\array_key_exists('attributes', $data)) {
                $values_1 = [];
                foreach ($data['attributes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAttributes($values_1);
                unset($data['attributes']);
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
            if ($object->isInitialized('packingInstructions') && null !== $object->getPackingInstructions()) {
                $data['packingInstructions'] = $object->getPackingInstructions();
            }
            if ($object->isInitialized('subsidiaryClasses') && null !== $object->getSubsidiaryClasses()) {
                $values = [];
                foreach ($object->getSubsidiaryClasses() as $value) {
                    $values[] = $value;
                }
                $data['subsidiaryClasses'] = $values;
            }
            if ($object->isInitialized('labelText') && null !== $object->getLabelText()) {
                $data['labelText'] = $object->getLabelText();
            }
            if ($object->isInitialized('tunnelRestrictionCode') && null !== $object->getTunnelRestrictionCode()) {
                $data['tunnelRestrictionCode'] = $object->getTunnelRestrictionCode();
            }
            if ($object->isInitialized('specialProvisions') && null !== $object->getSpecialProvisions()) {
                $data['specialProvisions'] = $object->getSpecialProvisions();
            }
            if ($object->isInitialized('properShippingNameAndDescription') && null !== $object->getProperShippingNameAndDescription()) {
                $data['properShippingNameAndDescription'] = $object->getProperShippingNameAndDescription();
            }
            if ($object->isInitialized('technicalName') && null !== $object->getTechnicalName()) {
                $data['technicalName'] = $object->getTechnicalName();
            }
            if ($object->isInitialized('symbols') && null !== $object->getSymbols()) {
                $data['symbols'] = $object->getSymbols();
            }
            if ($object->isInitialized('authorization') && null !== $object->getAuthorization()) {
                $data['authorization'] = $object->getAuthorization();
            }
            if ($object->isInitialized('attributes') && null !== $object->getAttributes()) {
                $values_1 = [];
                foreach ($object->getAttributes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['attributes'] = $values_1;
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('packingGroup') && null !== $object->getPackingGroup()) {
                $data['packingGroup'] = $object->getPackingGroup();
            }
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription';
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
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sequenceNumber', $data)) {
                $object->setSequenceNumber($data['sequenceNumber']);
                unset($data['sequenceNumber']);
            }
            if (\array_key_exists('packingInstructions', $data)) {
                $object->setPackingInstructions($data['packingInstructions']);
                unset($data['packingInstructions']);
            }
            if (\array_key_exists('subsidiaryClasses', $data)) {
                $values = [];
                foreach ($data['subsidiaryClasses'] as $value) {
                    $values[] = $value;
                }
                $object->setSubsidiaryClasses($values);
                unset($data['subsidiaryClasses']);
            }
            if (\array_key_exists('labelText', $data)) {
                $object->setLabelText($data['labelText']);
                unset($data['labelText']);
            }
            if (\array_key_exists('tunnelRestrictionCode', $data)) {
                $object->setTunnelRestrictionCode($data['tunnelRestrictionCode']);
                unset($data['tunnelRestrictionCode']);
            }
            if (\array_key_exists('specialProvisions', $data)) {
                $object->setSpecialProvisions($data['specialProvisions']);
                unset($data['specialProvisions']);
            }
            if (\array_key_exists('properShippingNameAndDescription', $data)) {
                $object->setProperShippingNameAndDescription($data['properShippingNameAndDescription']);
                unset($data['properShippingNameAndDescription']);
            }
            if (\array_key_exists('technicalName', $data)) {
                $object->setTechnicalName($data['technicalName']);
                unset($data['technicalName']);
            }
            if (\array_key_exists('symbols', $data)) {
                $object->setSymbols($data['symbols']);
                unset($data['symbols']);
            }
            if (\array_key_exists('authorization', $data)) {
                $object->setAuthorization($data['authorization']);
                unset($data['authorization']);
            }
            if (\array_key_exists('attributes', $data)) {
                $values_1 = [];
                foreach ($data['attributes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAttributes($values_1);
                unset($data['attributes']);
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
            if ($object->isInitialized('packingInstructions') && null !== $object->getPackingInstructions()) {
                $data['packingInstructions'] = $object->getPackingInstructions();
            }
            if ($object->isInitialized('subsidiaryClasses') && null !== $object->getSubsidiaryClasses()) {
                $values = [];
                foreach ($object->getSubsidiaryClasses() as $value) {
                    $values[] = $value;
                }
                $data['subsidiaryClasses'] = $values;
            }
            if ($object->isInitialized('labelText') && null !== $object->getLabelText()) {
                $data['labelText'] = $object->getLabelText();
            }
            if ($object->isInitialized('tunnelRestrictionCode') && null !== $object->getTunnelRestrictionCode()) {
                $data['tunnelRestrictionCode'] = $object->getTunnelRestrictionCode();
            }
            if ($object->isInitialized('specialProvisions') && null !== $object->getSpecialProvisions()) {
                $data['specialProvisions'] = $object->getSpecialProvisions();
            }
            if ($object->isInitialized('properShippingNameAndDescription') && null !== $object->getProperShippingNameAndDescription()) {
                $data['properShippingNameAndDescription'] = $object->getProperShippingNameAndDescription();
            }
            if ($object->isInitialized('technicalName') && null !== $object->getTechnicalName()) {
                $data['technicalName'] = $object->getTechnicalName();
            }
            if ($object->isInitialized('symbols') && null !== $object->getSymbols()) {
                $data['symbols'] = $object->getSymbols();
            }
            if ($object->isInitialized('authorization') && null !== $object->getAuthorization()) {
                $data['authorization'] = $object->getAuthorization();
            }
            if ($object->isInitialized('attributes') && null !== $object->getAttributes()) {
                $values_1 = [];
                foreach ($object->getAttributes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['attributes'] = $values_1;
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('packingGroup') && null !== $object->getPackingGroup()) {
                $data['packingGroup'] = $object->getPackingGroup();
            }
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription' => false];
        }
    }
}
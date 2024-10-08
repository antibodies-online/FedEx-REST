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
    class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetail();
            if (\array_key_exists('radioactiveTransportIndex', $data) && \is_int($data['radioactiveTransportIndex'])) {
                $data['radioactiveTransportIndex'] = (double) $data['radioactiveTransportIndex'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('regulation', $data)) {
                $object->setRegulation($data['regulation']);
                unset($data['regulation']);
            }
            if (\array_key_exists('accessibility', $data)) {
                $object->setAccessibility($data['accessibility']);
                unset($data['accessibility']);
            }
            if (\array_key_exists('labelType', $data)) {
                $object->setLabelType($data['labelType']);
                unset($data['labelType']);
            }
            if (\array_key_exists('containers', $data)) {
                $values = [];
                foreach ($data['containers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItem::class, 'json', $context);
                }
                $object->setContainers($values);
                unset($data['containers']);
            }
            if (\array_key_exists('cargoAircraftOnly', $data)) {
                $object->setCargoAircraftOnly($data['cargoAircraftOnly']);
                unset($data['cargoAircraftOnly']);
            }
            if (\array_key_exists('referenceId', $data)) {
                $object->setReferenceId($data['referenceId']);
                unset($data['referenceId']);
            }
            if (\array_key_exists('radioactiveTransportIndex', $data)) {
                $object->setRadioactiveTransportIndex($data['radioactiveTransportIndex']);
                unset($data['radioactiveTransportIndex']);
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
            if ($object->isInitialized('regulation') && null !== $object->getRegulation()) {
                $data['regulation'] = $object->getRegulation();
            }
            if ($object->isInitialized('accessibility') && null !== $object->getAccessibility()) {
                $data['accessibility'] = $object->getAccessibility();
            }
            if ($object->isInitialized('labelType') && null !== $object->getLabelType()) {
                $data['labelType'] = $object->getLabelType();
            }
            if ($object->isInitialized('containers') && null !== $object->getContainers()) {
                $values = [];
                foreach ($object->getContainers() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['containers'] = $values;
            }
            if ($object->isInitialized('cargoAircraftOnly') && null !== $object->getCargoAircraftOnly()) {
                $data['cargoAircraftOnly'] = $object->getCargoAircraftOnly();
            }
            if ($object->isInitialized('referenceId') && null !== $object->getReferenceId()) {
                $data['referenceId'] = $object->getReferenceId();
            }
            if ($object->isInitialized('radioactiveTransportIndex') && null !== $object->getRadioactiveTransportIndex()) {
                $data['radioactiveTransportIndex'] = $object->getRadioactiveTransportIndex();
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetail::class => false];
        }
    }
} else {
    class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetail::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetail();
            if (\array_key_exists('radioactiveTransportIndex', $data) && \is_int($data['radioactiveTransportIndex'])) {
                $data['radioactiveTransportIndex'] = (double) $data['radioactiveTransportIndex'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('regulation', $data)) {
                $object->setRegulation($data['regulation']);
                unset($data['regulation']);
            }
            if (\array_key_exists('accessibility', $data)) {
                $object->setAccessibility($data['accessibility']);
                unset($data['accessibility']);
            }
            if (\array_key_exists('labelType', $data)) {
                $object->setLabelType($data['labelType']);
                unset($data['labelType']);
            }
            if (\array_key_exists('containers', $data)) {
                $values = [];
                foreach ($data['containers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItem::class, 'json', $context);
                }
                $object->setContainers($values);
                unset($data['containers']);
            }
            if (\array_key_exists('cargoAircraftOnly', $data)) {
                $object->setCargoAircraftOnly($data['cargoAircraftOnly']);
                unset($data['cargoAircraftOnly']);
            }
            if (\array_key_exists('referenceId', $data)) {
                $object->setReferenceId($data['referenceId']);
                unset($data['referenceId']);
            }
            if (\array_key_exists('radioactiveTransportIndex', $data)) {
                $object->setRadioactiveTransportIndex($data['radioactiveTransportIndex']);
                unset($data['radioactiveTransportIndex']);
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
            if ($object->isInitialized('regulation') && null !== $object->getRegulation()) {
                $data['regulation'] = $object->getRegulation();
            }
            if ($object->isInitialized('accessibility') && null !== $object->getAccessibility()) {
                $data['accessibility'] = $object->getAccessibility();
            }
            if ($object->isInitialized('labelType') && null !== $object->getLabelType()) {
                $data['labelType'] = $object->getLabelType();
            }
            if ($object->isInitialized('containers') && null !== $object->getContainers()) {
                $values = [];
                foreach ($object->getContainers() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['containers'] = $values;
            }
            if ($object->isInitialized('cargoAircraftOnly') && null !== $object->getCargoAircraftOnly()) {
                $data['cargoAircraftOnly'] = $object->getCargoAircraftOnly();
            }
            if ($object->isInitialized('referenceId') && null !== $object->getReferenceId()) {
                $data['referenceId'] = $object->getReferenceId();
            }
            if ($object->isInitialized('radioactiveTransportIndex') && null !== $object->getRadioactiveTransportIndex()) {
                $data['radioactiveTransportIndex'] = $object->getRadioactiveTransportIndex();
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetail::class => false];
        }
    }
}
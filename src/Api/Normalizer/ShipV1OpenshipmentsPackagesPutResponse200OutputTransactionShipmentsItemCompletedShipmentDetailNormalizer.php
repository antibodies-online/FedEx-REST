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
    class ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('completedPackageDetails', $data)) {
                $values = [];
                foreach ($data['completedPackageDetails'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItem::class, 'json', $context);
                }
                $object->setCompletedPackageDetails($values);
                unset($data['completedPackageDetails']);
            }
            if (\array_key_exists('operationalDetail', $data)) {
                $object->setOperationalDetail($this->denormalizer->denormalize($data['operationalDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailOperationalDetail::class, 'json', $context));
                unset($data['operationalDetail']);
            }
            if (\array_key_exists('carrierCode', $data)) {
                $object->setCarrierCode($data['carrierCode']);
                unset($data['carrierCode']);
            }
            if (\array_key_exists('completedHoldAtLocationDetail', $data)) {
                $object->setCompletedHoldAtLocationDetail($this->denormalizer->denormalize($data['completedHoldAtLocationDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetail::class, 'json', $context));
                unset($data['completedHoldAtLocationDetail']);
            }
            if (\array_key_exists('completedEtdDetail', $data)) {
                $object->setCompletedEtdDetail($this->denormalizer->denormalize($data['completedEtdDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedEtdDetail::class, 'json', $context));
                unset($data['completedEtdDetail']);
            }
            if (\array_key_exists('packagingDescription', $data)) {
                $object->setPackagingDescription($data['packagingDescription']);
                unset($data['packagingDescription']);
            }
            if (\array_key_exists('masterTrackingId', $data)) {
                $object->setMasterTrackingId($this->denormalizer->denormalize($data['masterTrackingId'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailMasterTrackingId::class, 'json', $context));
                unset($data['masterTrackingId']);
            }
            if (\array_key_exists('serviceDescription', $data)) {
                $object->setServiceDescription($this->denormalizer->denormalize($data['serviceDescription'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescription::class, 'json', $context));
                unset($data['serviceDescription']);
            }
            if (\array_key_exists('usDomestic', $data)) {
                $object->setUsDomestic($data['usDomestic']);
                unset($data['usDomestic']);
            }
            if (\array_key_exists('hazardousShipmentDetail', $data)) {
                $object->setHazardousShipmentDetail($this->denormalizer->denormalize($data['hazardousShipmentDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail::class, 'json', $context));
                unset($data['hazardousShipmentDetail']);
            }
            if (\array_key_exists('shipmentRating', $data)) {
                $object->setShipmentRating($this->denormalizer->denormalize($data['shipmentRating'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRating::class, 'json', $context));
                unset($data['shipmentRating']);
            }
            if (\array_key_exists('documentRequirements', $data)) {
                $object->setDocumentRequirements($this->denormalizer->denormalize($data['documentRequirements'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailDocumentRequirements::class, 'json', $context));
                unset($data['documentRequirements']);
            }
            if (\array_key_exists('exportComplianceStatement', $data)) {
                $object->setExportComplianceStatement($data['exportComplianceStatement']);
                unset($data['exportComplianceStatement']);
            }
            if (\array_key_exists('accessDetail', $data)) {
                $object->setAccessDetail($this->denormalizer->denormalize($data['accessDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailAccessDetail::class, 'json', $context));
                unset($data['accessDetail']);
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
            if ($object->isInitialized('completedPackageDetails') && null !== $object->getCompletedPackageDetails()) {
                $values = [];
                foreach ($object->getCompletedPackageDetails() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['completedPackageDetails'] = $values;
            }
            if ($object->isInitialized('operationalDetail') && null !== $object->getOperationalDetail()) {
                $data['operationalDetail'] = $this->normalizer->normalize($object->getOperationalDetail(), 'json', $context);
            }
            if ($object->isInitialized('carrierCode') && null !== $object->getCarrierCode()) {
                $data['carrierCode'] = $object->getCarrierCode();
            }
            if ($object->isInitialized('completedHoldAtLocationDetail') && null !== $object->getCompletedHoldAtLocationDetail()) {
                $data['completedHoldAtLocationDetail'] = $this->normalizer->normalize($object->getCompletedHoldAtLocationDetail(), 'json', $context);
            }
            if ($object->isInitialized('completedEtdDetail') && null !== $object->getCompletedEtdDetail()) {
                $data['completedEtdDetail'] = $this->normalizer->normalize($object->getCompletedEtdDetail(), 'json', $context);
            }
            if ($object->isInitialized('packagingDescription') && null !== $object->getPackagingDescription()) {
                $data['packagingDescription'] = $object->getPackagingDescription();
            }
            if ($object->isInitialized('masterTrackingId') && null !== $object->getMasterTrackingId()) {
                $data['masterTrackingId'] = $this->normalizer->normalize($object->getMasterTrackingId(), 'json', $context);
            }
            if ($object->isInitialized('serviceDescription') && null !== $object->getServiceDescription()) {
                $data['serviceDescription'] = $this->normalizer->normalize($object->getServiceDescription(), 'json', $context);
            }
            if ($object->isInitialized('usDomestic') && null !== $object->getUsDomestic()) {
                $data['usDomestic'] = $object->getUsDomestic();
            }
            if ($object->isInitialized('hazardousShipmentDetail') && null !== $object->getHazardousShipmentDetail()) {
                $data['hazardousShipmentDetail'] = $this->normalizer->normalize($object->getHazardousShipmentDetail(), 'json', $context);
            }
            if ($object->isInitialized('shipmentRating') && null !== $object->getShipmentRating()) {
                $data['shipmentRating'] = $this->normalizer->normalize($object->getShipmentRating(), 'json', $context);
            }
            if ($object->isInitialized('documentRequirements') && null !== $object->getDocumentRequirements()) {
                $data['documentRequirements'] = $this->normalizer->normalize($object->getDocumentRequirements(), 'json', $context);
            }
            if ($object->isInitialized('exportComplianceStatement') && null !== $object->getExportComplianceStatement()) {
                $data['exportComplianceStatement'] = $object->getExportComplianceStatement();
            }
            if ($object->isInitialized('accessDetail') && null !== $object->getAccessDetail()) {
                $data['accessDetail'] = $this->normalizer->normalize($object->getAccessDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetail::class => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetail::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('completedPackageDetails', $data)) {
                $values = [];
                foreach ($data['completedPackageDetails'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItem::class, 'json', $context);
                }
                $object->setCompletedPackageDetails($values);
                unset($data['completedPackageDetails']);
            }
            if (\array_key_exists('operationalDetail', $data)) {
                $object->setOperationalDetail($this->denormalizer->denormalize($data['operationalDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailOperationalDetail::class, 'json', $context));
                unset($data['operationalDetail']);
            }
            if (\array_key_exists('carrierCode', $data)) {
                $object->setCarrierCode($data['carrierCode']);
                unset($data['carrierCode']);
            }
            if (\array_key_exists('completedHoldAtLocationDetail', $data)) {
                $object->setCompletedHoldAtLocationDetail($this->denormalizer->denormalize($data['completedHoldAtLocationDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetail::class, 'json', $context));
                unset($data['completedHoldAtLocationDetail']);
            }
            if (\array_key_exists('completedEtdDetail', $data)) {
                $object->setCompletedEtdDetail($this->denormalizer->denormalize($data['completedEtdDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedEtdDetail::class, 'json', $context));
                unset($data['completedEtdDetail']);
            }
            if (\array_key_exists('packagingDescription', $data)) {
                $object->setPackagingDescription($data['packagingDescription']);
                unset($data['packagingDescription']);
            }
            if (\array_key_exists('masterTrackingId', $data)) {
                $object->setMasterTrackingId($this->denormalizer->denormalize($data['masterTrackingId'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailMasterTrackingId::class, 'json', $context));
                unset($data['masterTrackingId']);
            }
            if (\array_key_exists('serviceDescription', $data)) {
                $object->setServiceDescription($this->denormalizer->denormalize($data['serviceDescription'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailServiceDescription::class, 'json', $context));
                unset($data['serviceDescription']);
            }
            if (\array_key_exists('usDomestic', $data)) {
                $object->setUsDomestic($data['usDomestic']);
                unset($data['usDomestic']);
            }
            if (\array_key_exists('hazardousShipmentDetail', $data)) {
                $object->setHazardousShipmentDetail($this->denormalizer->denormalize($data['hazardousShipmentDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail::class, 'json', $context));
                unset($data['hazardousShipmentDetail']);
            }
            if (\array_key_exists('shipmentRating', $data)) {
                $object->setShipmentRating($this->denormalizer->denormalize($data['shipmentRating'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRating::class, 'json', $context));
                unset($data['shipmentRating']);
            }
            if (\array_key_exists('documentRequirements', $data)) {
                $object->setDocumentRequirements($this->denormalizer->denormalize($data['documentRequirements'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailDocumentRequirements::class, 'json', $context));
                unset($data['documentRequirements']);
            }
            if (\array_key_exists('exportComplianceStatement', $data)) {
                $object->setExportComplianceStatement($data['exportComplianceStatement']);
                unset($data['exportComplianceStatement']);
            }
            if (\array_key_exists('accessDetail', $data)) {
                $object->setAccessDetail($this->denormalizer->denormalize($data['accessDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailAccessDetail::class, 'json', $context));
                unset($data['accessDetail']);
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
            if ($object->isInitialized('completedPackageDetails') && null !== $object->getCompletedPackageDetails()) {
                $values = [];
                foreach ($object->getCompletedPackageDetails() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['completedPackageDetails'] = $values;
            }
            if ($object->isInitialized('operationalDetail') && null !== $object->getOperationalDetail()) {
                $data['operationalDetail'] = $this->normalizer->normalize($object->getOperationalDetail(), 'json', $context);
            }
            if ($object->isInitialized('carrierCode') && null !== $object->getCarrierCode()) {
                $data['carrierCode'] = $object->getCarrierCode();
            }
            if ($object->isInitialized('completedHoldAtLocationDetail') && null !== $object->getCompletedHoldAtLocationDetail()) {
                $data['completedHoldAtLocationDetail'] = $this->normalizer->normalize($object->getCompletedHoldAtLocationDetail(), 'json', $context);
            }
            if ($object->isInitialized('completedEtdDetail') && null !== $object->getCompletedEtdDetail()) {
                $data['completedEtdDetail'] = $this->normalizer->normalize($object->getCompletedEtdDetail(), 'json', $context);
            }
            if ($object->isInitialized('packagingDescription') && null !== $object->getPackagingDescription()) {
                $data['packagingDescription'] = $object->getPackagingDescription();
            }
            if ($object->isInitialized('masterTrackingId') && null !== $object->getMasterTrackingId()) {
                $data['masterTrackingId'] = $this->normalizer->normalize($object->getMasterTrackingId(), 'json', $context);
            }
            if ($object->isInitialized('serviceDescription') && null !== $object->getServiceDescription()) {
                $data['serviceDescription'] = $this->normalizer->normalize($object->getServiceDescription(), 'json', $context);
            }
            if ($object->isInitialized('usDomestic') && null !== $object->getUsDomestic()) {
                $data['usDomestic'] = $object->getUsDomestic();
            }
            if ($object->isInitialized('hazardousShipmentDetail') && null !== $object->getHazardousShipmentDetail()) {
                $data['hazardousShipmentDetail'] = $this->normalizer->normalize($object->getHazardousShipmentDetail(), 'json', $context);
            }
            if ($object->isInitialized('shipmentRating') && null !== $object->getShipmentRating()) {
                $data['shipmentRating'] = $this->normalizer->normalize($object->getShipmentRating(), 'json', $context);
            }
            if ($object->isInitialized('documentRequirements') && null !== $object->getDocumentRequirements()) {
                $data['documentRequirements'] = $this->normalizer->normalize($object->getDocumentRequirements(), 'json', $context);
            }
            if ($object->isInitialized('exportComplianceStatement') && null !== $object->getExportComplianceStatement()) {
                $data['exportComplianceStatement'] = $object->getExportComplianceStatement();
            }
            if ($object->isInitialized('accessDetail') && null !== $object->getAccessDetail()) {
                $data['accessDetail'] = $this->normalizer->normalize($object->getAccessDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetail::class => false];
        }
    }
}
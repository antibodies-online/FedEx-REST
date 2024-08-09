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
    class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('shipDatestamp', $data)) {
                $object->setShipDatestamp($data['shipDatestamp']);
                unset($data['shipDatestamp']);
            }
            if (\array_key_exists('serviceCategory', $data)) {
                $object->setServiceCategory($data['serviceCategory']);
                unset($data['serviceCategory']);
            }
            if (\array_key_exists('shipmentDocuments', $data)) {
                $values = [];
                foreach ($data['shipmentDocuments'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItem::class, 'json', $context);
                }
                $object->setShipmentDocuments($values);
                unset($data['shipmentDocuments']);
            }
            if (\array_key_exists('pieceResponses', $data)) {
                $values_1 = [];
                foreach ($data['pieceResponses'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItem::class, 'json', $context);
                }
                $object->setPieceResponses($values_1);
                unset($data['pieceResponses']);
            }
            if (\array_key_exists('serviceName', $data)) {
                $object->setServiceName($data['serviceName']);
                unset($data['serviceName']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values_2 = [];
                foreach ($data['alerts'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemAlertsItem::class, 'json', $context);
                }
                $object->setAlerts($values_2);
                unset($data['alerts']);
            }
            if (\array_key_exists('completedShipmentDetail', $data)) {
                $object->setCompletedShipmentDetail($this->denormalizer->denormalize($data['completedShipmentDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetail::class, 'json', $context));
                unset($data['completedShipmentDetail']);
            }
            if (\array_key_exists('shipmentAdvisoryDetails', $data)) {
                $object->setShipmentAdvisoryDetails($this->denormalizer->denormalize($data['shipmentAdvisoryDetails'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetails::class, 'json', $context));
                unset($data['shipmentAdvisoryDetails']);
            }
            if (\array_key_exists('masterTrackingNumber', $data)) {
                $object->setMasterTrackingNumber($data['masterTrackingNumber']);
                unset($data['masterTrackingNumber']);
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
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('shipDatestamp') && null !== $object->getShipDatestamp()) {
                $data['shipDatestamp'] = $object->getShipDatestamp();
            }
            if ($object->isInitialized('serviceCategory') && null !== $object->getServiceCategory()) {
                $data['serviceCategory'] = $object->getServiceCategory();
            }
            if ($object->isInitialized('shipmentDocuments') && null !== $object->getShipmentDocuments()) {
                $values = [];
                foreach ($object->getShipmentDocuments() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['shipmentDocuments'] = $values;
            }
            if ($object->isInitialized('pieceResponses') && null !== $object->getPieceResponses()) {
                $values_1 = [];
                foreach ($object->getPieceResponses() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['pieceResponses'] = $values_1;
            }
            if ($object->isInitialized('serviceName') && null !== $object->getServiceName()) {
                $data['serviceName'] = $object->getServiceName();
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values_2 = [];
                foreach ($object->getAlerts() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['alerts'] = $values_2;
            }
            if ($object->isInitialized('completedShipmentDetail') && null !== $object->getCompletedShipmentDetail()) {
                $data['completedShipmentDetail'] = $this->normalizer->normalize($object->getCompletedShipmentDetail(), 'json', $context);
            }
            if ($object->isInitialized('shipmentAdvisoryDetails') && null !== $object->getShipmentAdvisoryDetails()) {
                $data['shipmentAdvisoryDetails'] = $this->normalizer->normalize($object->getShipmentAdvisoryDetails(), 'json', $context);
            }
            if ($object->isInitialized('masterTrackingNumber') && null !== $object->getMasterTrackingNumber()) {
                $data['masterTrackingNumber'] = $object->getMasterTrackingNumber();
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItem::class => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('shipDatestamp', $data)) {
                $object->setShipDatestamp($data['shipDatestamp']);
                unset($data['shipDatestamp']);
            }
            if (\array_key_exists('serviceCategory', $data)) {
                $object->setServiceCategory($data['serviceCategory']);
                unset($data['serviceCategory']);
            }
            if (\array_key_exists('shipmentDocuments', $data)) {
                $values = [];
                foreach ($data['shipmentDocuments'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItem::class, 'json', $context);
                }
                $object->setShipmentDocuments($values);
                unset($data['shipmentDocuments']);
            }
            if (\array_key_exists('pieceResponses', $data)) {
                $values_1 = [];
                foreach ($data['pieceResponses'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItem::class, 'json', $context);
                }
                $object->setPieceResponses($values_1);
                unset($data['pieceResponses']);
            }
            if (\array_key_exists('serviceName', $data)) {
                $object->setServiceName($data['serviceName']);
                unset($data['serviceName']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values_2 = [];
                foreach ($data['alerts'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemAlertsItem::class, 'json', $context);
                }
                $object->setAlerts($values_2);
                unset($data['alerts']);
            }
            if (\array_key_exists('completedShipmentDetail', $data)) {
                $object->setCompletedShipmentDetail($this->denormalizer->denormalize($data['completedShipmentDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetail::class, 'json', $context));
                unset($data['completedShipmentDetail']);
            }
            if (\array_key_exists('shipmentAdvisoryDetails', $data)) {
                $object->setShipmentAdvisoryDetails($this->denormalizer->denormalize($data['shipmentAdvisoryDetails'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetails::class, 'json', $context));
                unset($data['shipmentAdvisoryDetails']);
            }
            if (\array_key_exists('masterTrackingNumber', $data)) {
                $object->setMasterTrackingNumber($data['masterTrackingNumber']);
                unset($data['masterTrackingNumber']);
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
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('shipDatestamp') && null !== $object->getShipDatestamp()) {
                $data['shipDatestamp'] = $object->getShipDatestamp();
            }
            if ($object->isInitialized('serviceCategory') && null !== $object->getServiceCategory()) {
                $data['serviceCategory'] = $object->getServiceCategory();
            }
            if ($object->isInitialized('shipmentDocuments') && null !== $object->getShipmentDocuments()) {
                $values = [];
                foreach ($object->getShipmentDocuments() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['shipmentDocuments'] = $values;
            }
            if ($object->isInitialized('pieceResponses') && null !== $object->getPieceResponses()) {
                $values_1 = [];
                foreach ($object->getPieceResponses() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['pieceResponses'] = $values_1;
            }
            if ($object->isInitialized('serviceName') && null !== $object->getServiceName()) {
                $data['serviceName'] = $object->getServiceName();
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values_2 = [];
                foreach ($object->getAlerts() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['alerts'] = $values_2;
            }
            if ($object->isInitialized('completedShipmentDetail') && null !== $object->getCompletedShipmentDetail()) {
                $data['completedShipmentDetail'] = $this->normalizer->normalize($object->getCompletedShipmentDetail(), 'json', $context);
            }
            if ($object->isInitialized('shipmentAdvisoryDetails') && null !== $object->getShipmentAdvisoryDetails()) {
                $data['shipmentAdvisoryDetails'] = $this->normalizer->normalize($object->getShipmentAdvisoryDetails(), 'json', $context);
            }
            if ($object->isInitialized('masterTrackingNumber') && null !== $object->getMasterTrackingNumber()) {
                $data['masterTrackingNumber'] = $object->getMasterTrackingNumber();
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItem::class => false];
        }
    }
}
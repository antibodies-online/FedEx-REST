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
    class ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItem();
            if (\array_key_exists('netChargeAmount', $data) && \is_int($data['netChargeAmount'])) {
                $data['netChargeAmount'] = (double) $data['netChargeAmount'];
            }
            if (\array_key_exists('additionalChargesDiscount', $data) && \is_int($data['additionalChargesDiscount'])) {
                $data['additionalChargesDiscount'] = (double) $data['additionalChargesDiscount'];
            }
            if (\array_key_exists('netListRateAmount', $data) && \is_int($data['netListRateAmount'])) {
                $data['netListRateAmount'] = (double) $data['netListRateAmount'];
            }
            if (\array_key_exists('baseRateAmount', $data) && \is_int($data['baseRateAmount'])) {
                $data['baseRateAmount'] = (double) $data['baseRateAmount'];
            }
            if (\array_key_exists('netDiscountAmount', $data) && \is_int($data['netDiscountAmount'])) {
                $data['netDiscountAmount'] = (double) $data['netDiscountAmount'];
            }
            if (\array_key_exists('codcollectionAmount', $data) && \is_int($data['codcollectionAmount'])) {
                $data['codcollectionAmount'] = (double) $data['codcollectionAmount'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('netChargeAmount', $data)) {
                $object->setNetChargeAmount($data['netChargeAmount']);
                unset($data['netChargeAmount']);
            }
            if (\array_key_exists('transactionDetails', $data)) {
                $values = [];
                foreach ($data['transactionDetails'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItemTransactionDetailsItem::class, 'json', $context);
                }
                $object->setTransactionDetails($values);
                unset($data['transactionDetails']);
            }
            if (\array_key_exists('packageDocuments', $data)) {
                $values_1 = [];
                foreach ($data['packageDocuments'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItemPackageDocumentsItem::class, 'json', $context);
                }
                $object->setPackageDocuments($values_1);
                unset($data['packageDocuments']);
            }
            if (\array_key_exists('acceptanceTrackingNumber', $data)) {
                $object->setAcceptanceTrackingNumber($data['acceptanceTrackingNumber']);
                unset($data['acceptanceTrackingNumber']);
            }
            if (\array_key_exists('serviceCategory', $data)) {
                $object->setServiceCategory($data['serviceCategory']);
                unset($data['serviceCategory']);
            }
            if (\array_key_exists('listCustomerTotalCharge', $data)) {
                $object->setListCustomerTotalCharge($data['listCustomerTotalCharge']);
                unset($data['listCustomerTotalCharge']);
            }
            if (\array_key_exists('deliveryTimestamp', $data)) {
                $object->setDeliveryTimestamp($data['deliveryTimestamp']);
                unset($data['deliveryTimestamp']);
            }
            if (\array_key_exists('trackingIdType', $data)) {
                $object->setTrackingIdType($data['trackingIdType']);
                unset($data['trackingIdType']);
            }
            if (\array_key_exists('additionalChargesDiscount', $data)) {
                $object->setAdditionalChargesDiscount($data['additionalChargesDiscount']);
                unset($data['additionalChargesDiscount']);
            }
            if (\array_key_exists('netListRateAmount', $data)) {
                $object->setNetListRateAmount($data['netListRateAmount']);
                unset($data['netListRateAmount']);
            }
            if (\array_key_exists('baseRateAmount', $data)) {
                $object->setBaseRateAmount($data['baseRateAmount']);
                unset($data['baseRateAmount']);
            }
            if (\array_key_exists('packageSequenceNumber', $data)) {
                $object->setPackageSequenceNumber($data['packageSequenceNumber']);
                unset($data['packageSequenceNumber']);
            }
            if (\array_key_exists('netDiscountAmount', $data)) {
                $object->setNetDiscountAmount($data['netDiscountAmount']);
                unset($data['netDiscountAmount']);
            }
            if (\array_key_exists('codcollectionAmount', $data)) {
                $object->setCodcollectionAmount($data['codcollectionAmount']);
                unset($data['codcollectionAmount']);
            }
            if (\array_key_exists('masterTrackingNumber', $data)) {
                $object->setMasterTrackingNumber($data['masterTrackingNumber']);
                unset($data['masterTrackingNumber']);
            }
            if (\array_key_exists('acceptanceType', $data)) {
                $object->setAcceptanceType($data['acceptanceType']);
                unset($data['acceptanceType']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('successful', $data)) {
                $object->setSuccessful($data['successful']);
                unset($data['successful']);
            }
            if (\array_key_exists('customerReferences', $data)) {
                $values_2 = [];
                foreach ($data['customerReferences'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItemCustomerReferencesItem::class, 'json', $context);
                }
                $object->setCustomerReferences($values_2);
                unset($data['customerReferences']);
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
            if ($object->isInitialized('netChargeAmount') && null !== $object->getNetChargeAmount()) {
                $data['netChargeAmount'] = $object->getNetChargeAmount();
            }
            if ($object->isInitialized('transactionDetails') && null !== $object->getTransactionDetails()) {
                $values = [];
                foreach ($object->getTransactionDetails() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['transactionDetails'] = $values;
            }
            if ($object->isInitialized('packageDocuments') && null !== $object->getPackageDocuments()) {
                $values_1 = [];
                foreach ($object->getPackageDocuments() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['packageDocuments'] = $values_1;
            }
            if ($object->isInitialized('acceptanceTrackingNumber') && null !== $object->getAcceptanceTrackingNumber()) {
                $data['acceptanceTrackingNumber'] = $object->getAcceptanceTrackingNumber();
            }
            if ($object->isInitialized('serviceCategory') && null !== $object->getServiceCategory()) {
                $data['serviceCategory'] = $object->getServiceCategory();
            }
            if ($object->isInitialized('listCustomerTotalCharge') && null !== $object->getListCustomerTotalCharge()) {
                $data['listCustomerTotalCharge'] = $object->getListCustomerTotalCharge();
            }
            if ($object->isInitialized('deliveryTimestamp') && null !== $object->getDeliveryTimestamp()) {
                $data['deliveryTimestamp'] = $object->getDeliveryTimestamp();
            }
            if ($object->isInitialized('trackingIdType') && null !== $object->getTrackingIdType()) {
                $data['trackingIdType'] = $object->getTrackingIdType();
            }
            if ($object->isInitialized('additionalChargesDiscount') && null !== $object->getAdditionalChargesDiscount()) {
                $data['additionalChargesDiscount'] = $object->getAdditionalChargesDiscount();
            }
            if ($object->isInitialized('netListRateAmount') && null !== $object->getNetListRateAmount()) {
                $data['netListRateAmount'] = $object->getNetListRateAmount();
            }
            if ($object->isInitialized('baseRateAmount') && null !== $object->getBaseRateAmount()) {
                $data['baseRateAmount'] = $object->getBaseRateAmount();
            }
            if ($object->isInitialized('packageSequenceNumber') && null !== $object->getPackageSequenceNumber()) {
                $data['packageSequenceNumber'] = $object->getPackageSequenceNumber();
            }
            if ($object->isInitialized('netDiscountAmount') && null !== $object->getNetDiscountAmount()) {
                $data['netDiscountAmount'] = $object->getNetDiscountAmount();
            }
            if ($object->isInitialized('codcollectionAmount') && null !== $object->getCodcollectionAmount()) {
                $data['codcollectionAmount'] = $object->getCodcollectionAmount();
            }
            if ($object->isInitialized('masterTrackingNumber') && null !== $object->getMasterTrackingNumber()) {
                $data['masterTrackingNumber'] = $object->getMasterTrackingNumber();
            }
            if ($object->isInitialized('acceptanceType') && null !== $object->getAcceptanceType()) {
                $data['acceptanceType'] = $object->getAcceptanceType();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('successful') && null !== $object->getSuccessful()) {
                $data['successful'] = $object->getSuccessful();
            }
            if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
                $values_2 = [];
                foreach ($object->getCustomerReferences() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['customerReferences'] = $values_2;
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItem::class => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItem();
            if (\array_key_exists('netChargeAmount', $data) && \is_int($data['netChargeAmount'])) {
                $data['netChargeAmount'] = (double) $data['netChargeAmount'];
            }
            if (\array_key_exists('additionalChargesDiscount', $data) && \is_int($data['additionalChargesDiscount'])) {
                $data['additionalChargesDiscount'] = (double) $data['additionalChargesDiscount'];
            }
            if (\array_key_exists('netListRateAmount', $data) && \is_int($data['netListRateAmount'])) {
                $data['netListRateAmount'] = (double) $data['netListRateAmount'];
            }
            if (\array_key_exists('baseRateAmount', $data) && \is_int($data['baseRateAmount'])) {
                $data['baseRateAmount'] = (double) $data['baseRateAmount'];
            }
            if (\array_key_exists('netDiscountAmount', $data) && \is_int($data['netDiscountAmount'])) {
                $data['netDiscountAmount'] = (double) $data['netDiscountAmount'];
            }
            if (\array_key_exists('codcollectionAmount', $data) && \is_int($data['codcollectionAmount'])) {
                $data['codcollectionAmount'] = (double) $data['codcollectionAmount'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('netChargeAmount', $data)) {
                $object->setNetChargeAmount($data['netChargeAmount']);
                unset($data['netChargeAmount']);
            }
            if (\array_key_exists('transactionDetails', $data)) {
                $values = [];
                foreach ($data['transactionDetails'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItemTransactionDetailsItem::class, 'json', $context);
                }
                $object->setTransactionDetails($values);
                unset($data['transactionDetails']);
            }
            if (\array_key_exists('packageDocuments', $data)) {
                $values_1 = [];
                foreach ($data['packageDocuments'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItemPackageDocumentsItem::class, 'json', $context);
                }
                $object->setPackageDocuments($values_1);
                unset($data['packageDocuments']);
            }
            if (\array_key_exists('acceptanceTrackingNumber', $data)) {
                $object->setAcceptanceTrackingNumber($data['acceptanceTrackingNumber']);
                unset($data['acceptanceTrackingNumber']);
            }
            if (\array_key_exists('serviceCategory', $data)) {
                $object->setServiceCategory($data['serviceCategory']);
                unset($data['serviceCategory']);
            }
            if (\array_key_exists('listCustomerTotalCharge', $data)) {
                $object->setListCustomerTotalCharge($data['listCustomerTotalCharge']);
                unset($data['listCustomerTotalCharge']);
            }
            if (\array_key_exists('deliveryTimestamp', $data)) {
                $object->setDeliveryTimestamp($data['deliveryTimestamp']);
                unset($data['deliveryTimestamp']);
            }
            if (\array_key_exists('trackingIdType', $data)) {
                $object->setTrackingIdType($data['trackingIdType']);
                unset($data['trackingIdType']);
            }
            if (\array_key_exists('additionalChargesDiscount', $data)) {
                $object->setAdditionalChargesDiscount($data['additionalChargesDiscount']);
                unset($data['additionalChargesDiscount']);
            }
            if (\array_key_exists('netListRateAmount', $data)) {
                $object->setNetListRateAmount($data['netListRateAmount']);
                unset($data['netListRateAmount']);
            }
            if (\array_key_exists('baseRateAmount', $data)) {
                $object->setBaseRateAmount($data['baseRateAmount']);
                unset($data['baseRateAmount']);
            }
            if (\array_key_exists('packageSequenceNumber', $data)) {
                $object->setPackageSequenceNumber($data['packageSequenceNumber']);
                unset($data['packageSequenceNumber']);
            }
            if (\array_key_exists('netDiscountAmount', $data)) {
                $object->setNetDiscountAmount($data['netDiscountAmount']);
                unset($data['netDiscountAmount']);
            }
            if (\array_key_exists('codcollectionAmount', $data)) {
                $object->setCodcollectionAmount($data['codcollectionAmount']);
                unset($data['codcollectionAmount']);
            }
            if (\array_key_exists('masterTrackingNumber', $data)) {
                $object->setMasterTrackingNumber($data['masterTrackingNumber']);
                unset($data['masterTrackingNumber']);
            }
            if (\array_key_exists('acceptanceType', $data)) {
                $object->setAcceptanceType($data['acceptanceType']);
                unset($data['acceptanceType']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('successful', $data)) {
                $object->setSuccessful($data['successful']);
                unset($data['successful']);
            }
            if (\array_key_exists('customerReferences', $data)) {
                $values_2 = [];
                foreach ($data['customerReferences'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItemCustomerReferencesItem::class, 'json', $context);
                }
                $object->setCustomerReferences($values_2);
                unset($data['customerReferences']);
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
            if ($object->isInitialized('netChargeAmount') && null !== $object->getNetChargeAmount()) {
                $data['netChargeAmount'] = $object->getNetChargeAmount();
            }
            if ($object->isInitialized('transactionDetails') && null !== $object->getTransactionDetails()) {
                $values = [];
                foreach ($object->getTransactionDetails() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['transactionDetails'] = $values;
            }
            if ($object->isInitialized('packageDocuments') && null !== $object->getPackageDocuments()) {
                $values_1 = [];
                foreach ($object->getPackageDocuments() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['packageDocuments'] = $values_1;
            }
            if ($object->isInitialized('acceptanceTrackingNumber') && null !== $object->getAcceptanceTrackingNumber()) {
                $data['acceptanceTrackingNumber'] = $object->getAcceptanceTrackingNumber();
            }
            if ($object->isInitialized('serviceCategory') && null !== $object->getServiceCategory()) {
                $data['serviceCategory'] = $object->getServiceCategory();
            }
            if ($object->isInitialized('listCustomerTotalCharge') && null !== $object->getListCustomerTotalCharge()) {
                $data['listCustomerTotalCharge'] = $object->getListCustomerTotalCharge();
            }
            if ($object->isInitialized('deliveryTimestamp') && null !== $object->getDeliveryTimestamp()) {
                $data['deliveryTimestamp'] = $object->getDeliveryTimestamp();
            }
            if ($object->isInitialized('trackingIdType') && null !== $object->getTrackingIdType()) {
                $data['trackingIdType'] = $object->getTrackingIdType();
            }
            if ($object->isInitialized('additionalChargesDiscount') && null !== $object->getAdditionalChargesDiscount()) {
                $data['additionalChargesDiscount'] = $object->getAdditionalChargesDiscount();
            }
            if ($object->isInitialized('netListRateAmount') && null !== $object->getNetListRateAmount()) {
                $data['netListRateAmount'] = $object->getNetListRateAmount();
            }
            if ($object->isInitialized('baseRateAmount') && null !== $object->getBaseRateAmount()) {
                $data['baseRateAmount'] = $object->getBaseRateAmount();
            }
            if ($object->isInitialized('packageSequenceNumber') && null !== $object->getPackageSequenceNumber()) {
                $data['packageSequenceNumber'] = $object->getPackageSequenceNumber();
            }
            if ($object->isInitialized('netDiscountAmount') && null !== $object->getNetDiscountAmount()) {
                $data['netDiscountAmount'] = $object->getNetDiscountAmount();
            }
            if ($object->isInitialized('codcollectionAmount') && null !== $object->getCodcollectionAmount()) {
                $data['codcollectionAmount'] = $object->getCodcollectionAmount();
            }
            if ($object->isInitialized('masterTrackingNumber') && null !== $object->getMasterTrackingNumber()) {
                $data['masterTrackingNumber'] = $object->getMasterTrackingNumber();
            }
            if ($object->isInitialized('acceptanceType') && null !== $object->getAcceptanceType()) {
                $data['acceptanceType'] = $object->getAcceptanceType();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('successful') && null !== $object->getSuccessful()) {
                $data['successful'] = $object->getSuccessful();
            }
            if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
                $values_2 = [];
                foreach ($object->getCustomerReferences() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['customerReferences'] = $values_2;
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemPieceResponsesItem::class => false];
        }
    }
}
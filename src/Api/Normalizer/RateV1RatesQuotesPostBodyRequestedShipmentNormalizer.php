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
    class RateV1RatesQuotesPostBodyRequestedShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipment::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipment::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipment();
            if (\array_key_exists('totalWeight', $data) && \is_int($data['totalWeight'])) {
                $data['totalWeight'] = (double) $data['totalWeight'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipper', $data)) {
                $object->setShipper($this->denormalizer->denormalize($data['shipper'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipper::class, 'json', $context));
                unset($data['shipper']);
            }
            if (\array_key_exists('recipient', $data)) {
                $object->setRecipient($this->denormalizer->denormalize($data['recipient'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRecipient::class, 'json', $context));
                unset($data['recipient']);
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('emailNotificationDetail', $data)) {
                $object->setEmailNotificationDetail($this->denormalizer->denormalize($data['emailNotificationDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetail::class, 'json', $context));
                unset($data['emailNotificationDetail']);
            }
            if (\array_key_exists('preferredCurrency', $data)) {
                $object->setPreferredCurrency($data['preferredCurrency']);
                unset($data['preferredCurrency']);
            }
            if (\array_key_exists('rateRequestType', $data)) {
                $values = [];
                foreach ($data['rateRequestType'] as $value) {
                    $values[] = $value;
                }
                $object->setRateRequestType($values);
                unset($data['rateRequestType']);
            }
            if (\array_key_exists('shipDateStamp', $data)) {
                $object->setShipDateStamp($data['shipDateStamp']);
                unset($data['shipDateStamp']);
            }
            if (\array_key_exists('pickupType', $data)) {
                $object->setPickupType($data['pickupType']);
                unset($data['pickupType']);
            }
            if (\array_key_exists('requestedPackageLineItems', $data)) {
                $values_1 = [];
                foreach ($data['requestedPackageLineItems'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItem::class, 'json', $context);
                }
                $object->setRequestedPackageLineItems($values_1);
                unset($data['requestedPackageLineItems']);
            }
            if (\array_key_exists('documentShipment', $data)) {
                $object->setDocumentShipment($data['documentShipment']);
                unset($data['documentShipment']);
            }
            if (\array_key_exists('variableHandlingChargeDetail', $data)) {
                $object->setVariableHandlingChargeDetail($this->denormalizer->denormalize($data['variableHandlingChargeDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentVariableHandlingChargeDetail::class, 'json', $context));
                unset($data['variableHandlingChargeDetail']);
            }
            if (\array_key_exists('packagingType', $data)) {
                $object->setPackagingType($data['packagingType']);
                unset($data['packagingType']);
            }
            if (\array_key_exists('totalPackageCount', $data)) {
                $object->setTotalPackageCount($data['totalPackageCount']);
                unset($data['totalPackageCount']);
            }
            if (\array_key_exists('totalWeight', $data)) {
                $object->setTotalWeight($data['totalWeight']);
                unset($data['totalWeight']);
            }
            if (\array_key_exists('shipmentSpecialServices', $data)) {
                $object->setShipmentSpecialServices($this->denormalizer->denormalize($data['shipmentSpecialServices'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServices::class, 'json', $context));
                unset($data['shipmentSpecialServices']);
            }
            if (\array_key_exists('customsClearanceDetail', $data)) {
                $object->setCustomsClearanceDetail($this->denormalizer->denormalize($data['customsClearanceDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetail::class, 'json', $context));
                unset($data['customsClearanceDetail']);
            }
            if (\array_key_exists('groupShipment', $data)) {
                $object->setGroupShipment($data['groupShipment']);
                unset($data['groupShipment']);
            }
            if (\array_key_exists('serviceTypeDetail', $data)) {
                $object->setServiceTypeDetail($this->denormalizer->denormalize($data['serviceTypeDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentServiceTypeDetail::class, 'json', $context));
                unset($data['serviceTypeDetail']);
            }
            if (\array_key_exists('smartPostInfoDetail', $data)) {
                $object->setSmartPostInfoDetail($this->denormalizer->denormalize($data['smartPostInfoDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentSmartPostInfoDetail::class, 'json', $context));
                unset($data['smartPostInfoDetail']);
            }
            if (\array_key_exists('expressFreightDetail', $data)) {
                $object->setExpressFreightDetail($this->denormalizer->denormalize($data['expressFreightDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentExpressFreightDetail::class, 'json', $context));
                unset($data['expressFreightDetail']);
            }
            if (\array_key_exists('groundShipment', $data)) {
                $object->setGroundShipment($data['groundShipment']);
                unset($data['groundShipment']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['shipper'] = $this->normalizer->normalize($object->getShipper(), 'json', $context);
            $data['recipient'] = $this->normalizer->normalize($object->getRecipient(), 'json', $context);
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('emailNotificationDetail') && null !== $object->getEmailNotificationDetail()) {
                $data['emailNotificationDetail'] = $this->normalizer->normalize($object->getEmailNotificationDetail(), 'json', $context);
            }
            if ($object->isInitialized('preferredCurrency') && null !== $object->getPreferredCurrency()) {
                $data['preferredCurrency'] = $object->getPreferredCurrency();
            }
            if ($object->isInitialized('rateRequestType') && null !== $object->getRateRequestType()) {
                $values = [];
                foreach ($object->getRateRequestType() as $value) {
                    $values[] = $value;
                }
                $data['rateRequestType'] = $values;
            }
            if ($object->isInitialized('shipDateStamp') && null !== $object->getShipDateStamp()) {
                $data['shipDateStamp'] = $object->getShipDateStamp();
            }
            $data['pickupType'] = $object->getPickupType();
            $values_1 = [];
            foreach ($object->getRequestedPackageLineItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['requestedPackageLineItems'] = $values_1;
            if ($object->isInitialized('documentShipment') && null !== $object->getDocumentShipment()) {
                $data['documentShipment'] = $object->getDocumentShipment();
            }
            if ($object->isInitialized('variableHandlingChargeDetail') && null !== $object->getVariableHandlingChargeDetail()) {
                $data['variableHandlingChargeDetail'] = $this->normalizer->normalize($object->getVariableHandlingChargeDetail(), 'json', $context);
            }
            if ($object->isInitialized('packagingType') && null !== $object->getPackagingType()) {
                $data['packagingType'] = $object->getPackagingType();
            }
            if ($object->isInitialized('totalPackageCount') && null !== $object->getTotalPackageCount()) {
                $data['totalPackageCount'] = $object->getTotalPackageCount();
            }
            if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
                $data['totalWeight'] = $object->getTotalWeight();
            }
            if ($object->isInitialized('shipmentSpecialServices') && null !== $object->getShipmentSpecialServices()) {
                $data['shipmentSpecialServices'] = $this->normalizer->normalize($object->getShipmentSpecialServices(), 'json', $context);
            }
            if ($object->isInitialized('customsClearanceDetail') && null !== $object->getCustomsClearanceDetail()) {
                $data['customsClearanceDetail'] = $this->normalizer->normalize($object->getCustomsClearanceDetail(), 'json', $context);
            }
            if ($object->isInitialized('groupShipment') && null !== $object->getGroupShipment()) {
                $data['groupShipment'] = $object->getGroupShipment();
            }
            if ($object->isInitialized('serviceTypeDetail') && null !== $object->getServiceTypeDetail()) {
                $data['serviceTypeDetail'] = $this->normalizer->normalize($object->getServiceTypeDetail(), 'json', $context);
            }
            if ($object->isInitialized('smartPostInfoDetail') && null !== $object->getSmartPostInfoDetail()) {
                $data['smartPostInfoDetail'] = $this->normalizer->normalize($object->getSmartPostInfoDetail(), 'json', $context);
            }
            if ($object->isInitialized('expressFreightDetail') && null !== $object->getExpressFreightDetail()) {
                $data['expressFreightDetail'] = $this->normalizer->normalize($object->getExpressFreightDetail(), 'json', $context);
            }
            if ($object->isInitialized('groundShipment') && null !== $object->getGroundShipment()) {
                $data['groundShipment'] = $object->getGroundShipment();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipment::class => false];
        }
    }
} else {
    class RateV1RatesQuotesPostBodyRequestedShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipment::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipment::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipment();
            if (\array_key_exists('totalWeight', $data) && \is_int($data['totalWeight'])) {
                $data['totalWeight'] = (double) $data['totalWeight'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipper', $data)) {
                $object->setShipper($this->denormalizer->denormalize($data['shipper'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipper::class, 'json', $context));
                unset($data['shipper']);
            }
            if (\array_key_exists('recipient', $data)) {
                $object->setRecipient($this->denormalizer->denormalize($data['recipient'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRecipient::class, 'json', $context));
                unset($data['recipient']);
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('emailNotificationDetail', $data)) {
                $object->setEmailNotificationDetail($this->denormalizer->denormalize($data['emailNotificationDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetail::class, 'json', $context));
                unset($data['emailNotificationDetail']);
            }
            if (\array_key_exists('preferredCurrency', $data)) {
                $object->setPreferredCurrency($data['preferredCurrency']);
                unset($data['preferredCurrency']);
            }
            if (\array_key_exists('rateRequestType', $data)) {
                $values = [];
                foreach ($data['rateRequestType'] as $value) {
                    $values[] = $value;
                }
                $object->setRateRequestType($values);
                unset($data['rateRequestType']);
            }
            if (\array_key_exists('shipDateStamp', $data)) {
                $object->setShipDateStamp($data['shipDateStamp']);
                unset($data['shipDateStamp']);
            }
            if (\array_key_exists('pickupType', $data)) {
                $object->setPickupType($data['pickupType']);
                unset($data['pickupType']);
            }
            if (\array_key_exists('requestedPackageLineItems', $data)) {
                $values_1 = [];
                foreach ($data['requestedPackageLineItems'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItem::class, 'json', $context);
                }
                $object->setRequestedPackageLineItems($values_1);
                unset($data['requestedPackageLineItems']);
            }
            if (\array_key_exists('documentShipment', $data)) {
                $object->setDocumentShipment($data['documentShipment']);
                unset($data['documentShipment']);
            }
            if (\array_key_exists('variableHandlingChargeDetail', $data)) {
                $object->setVariableHandlingChargeDetail($this->denormalizer->denormalize($data['variableHandlingChargeDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentVariableHandlingChargeDetail::class, 'json', $context));
                unset($data['variableHandlingChargeDetail']);
            }
            if (\array_key_exists('packagingType', $data)) {
                $object->setPackagingType($data['packagingType']);
                unset($data['packagingType']);
            }
            if (\array_key_exists('totalPackageCount', $data)) {
                $object->setTotalPackageCount($data['totalPackageCount']);
                unset($data['totalPackageCount']);
            }
            if (\array_key_exists('totalWeight', $data)) {
                $object->setTotalWeight($data['totalWeight']);
                unset($data['totalWeight']);
            }
            if (\array_key_exists('shipmentSpecialServices', $data)) {
                $object->setShipmentSpecialServices($this->denormalizer->denormalize($data['shipmentSpecialServices'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServices::class, 'json', $context));
                unset($data['shipmentSpecialServices']);
            }
            if (\array_key_exists('customsClearanceDetail', $data)) {
                $object->setCustomsClearanceDetail($this->denormalizer->denormalize($data['customsClearanceDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetail::class, 'json', $context));
                unset($data['customsClearanceDetail']);
            }
            if (\array_key_exists('groupShipment', $data)) {
                $object->setGroupShipment($data['groupShipment']);
                unset($data['groupShipment']);
            }
            if (\array_key_exists('serviceTypeDetail', $data)) {
                $object->setServiceTypeDetail($this->denormalizer->denormalize($data['serviceTypeDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentServiceTypeDetail::class, 'json', $context));
                unset($data['serviceTypeDetail']);
            }
            if (\array_key_exists('smartPostInfoDetail', $data)) {
                $object->setSmartPostInfoDetail($this->denormalizer->denormalize($data['smartPostInfoDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentSmartPostInfoDetail::class, 'json', $context));
                unset($data['smartPostInfoDetail']);
            }
            if (\array_key_exists('expressFreightDetail', $data)) {
                $object->setExpressFreightDetail($this->denormalizer->denormalize($data['expressFreightDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentExpressFreightDetail::class, 'json', $context));
                unset($data['expressFreightDetail']);
            }
            if (\array_key_exists('groundShipment', $data)) {
                $object->setGroundShipment($data['groundShipment']);
                unset($data['groundShipment']);
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
            $data['shipper'] = $this->normalizer->normalize($object->getShipper(), 'json', $context);
            $data['recipient'] = $this->normalizer->normalize($object->getRecipient(), 'json', $context);
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('emailNotificationDetail') && null !== $object->getEmailNotificationDetail()) {
                $data['emailNotificationDetail'] = $this->normalizer->normalize($object->getEmailNotificationDetail(), 'json', $context);
            }
            if ($object->isInitialized('preferredCurrency') && null !== $object->getPreferredCurrency()) {
                $data['preferredCurrency'] = $object->getPreferredCurrency();
            }
            if ($object->isInitialized('rateRequestType') && null !== $object->getRateRequestType()) {
                $values = [];
                foreach ($object->getRateRequestType() as $value) {
                    $values[] = $value;
                }
                $data['rateRequestType'] = $values;
            }
            if ($object->isInitialized('shipDateStamp') && null !== $object->getShipDateStamp()) {
                $data['shipDateStamp'] = $object->getShipDateStamp();
            }
            $data['pickupType'] = $object->getPickupType();
            $values_1 = [];
            foreach ($object->getRequestedPackageLineItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['requestedPackageLineItems'] = $values_1;
            if ($object->isInitialized('documentShipment') && null !== $object->getDocumentShipment()) {
                $data['documentShipment'] = $object->getDocumentShipment();
            }
            if ($object->isInitialized('variableHandlingChargeDetail') && null !== $object->getVariableHandlingChargeDetail()) {
                $data['variableHandlingChargeDetail'] = $this->normalizer->normalize($object->getVariableHandlingChargeDetail(), 'json', $context);
            }
            if ($object->isInitialized('packagingType') && null !== $object->getPackagingType()) {
                $data['packagingType'] = $object->getPackagingType();
            }
            if ($object->isInitialized('totalPackageCount') && null !== $object->getTotalPackageCount()) {
                $data['totalPackageCount'] = $object->getTotalPackageCount();
            }
            if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
                $data['totalWeight'] = $object->getTotalWeight();
            }
            if ($object->isInitialized('shipmentSpecialServices') && null !== $object->getShipmentSpecialServices()) {
                $data['shipmentSpecialServices'] = $this->normalizer->normalize($object->getShipmentSpecialServices(), 'json', $context);
            }
            if ($object->isInitialized('customsClearanceDetail') && null !== $object->getCustomsClearanceDetail()) {
                $data['customsClearanceDetail'] = $this->normalizer->normalize($object->getCustomsClearanceDetail(), 'json', $context);
            }
            if ($object->isInitialized('groupShipment') && null !== $object->getGroupShipment()) {
                $data['groupShipment'] = $object->getGroupShipment();
            }
            if ($object->isInitialized('serviceTypeDetail') && null !== $object->getServiceTypeDetail()) {
                $data['serviceTypeDetail'] = $this->normalizer->normalize($object->getServiceTypeDetail(), 'json', $context);
            }
            if ($object->isInitialized('smartPostInfoDetail') && null !== $object->getSmartPostInfoDetail()) {
                $data['smartPostInfoDetail'] = $this->normalizer->normalize($object->getSmartPostInfoDetail(), 'json', $context);
            }
            if ($object->isInitialized('expressFreightDetail') && null !== $object->getExpressFreightDetail()) {
                $data['expressFreightDetail'] = $this->normalizer->normalize($object->getExpressFreightDetail(), 'json', $context);
            }
            if ($object->isInitialized('groundShipment') && null !== $object->getGroundShipment()) {
                $data['groundShipment'] = $object->getGroundShipment();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipment::class => false];
        }
    }
}
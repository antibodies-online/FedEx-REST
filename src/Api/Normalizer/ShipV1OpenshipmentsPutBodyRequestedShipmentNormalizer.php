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
    class ShipV1OpenshipmentsPutBodyRequestedShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipment';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipment();
            if (\array_key_exists('totalWeight', $data) && \is_int($data['totalWeight'])) {
                $data['totalWeight'] = (double) $data['totalWeight'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipDatestamp', $data)) {
                $object->setShipDatestamp($data['shipDatestamp']);
                unset($data['shipDatestamp']);
            }
            if (\array_key_exists('pickupType', $data)) {
                $object->setPickupType($data['pickupType']);
                unset($data['pickupType']);
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('packagingType', $data)) {
                $object->setPackagingType($data['packagingType']);
                unset($data['packagingType']);
            }
            if (\array_key_exists('totalWeight', $data)) {
                $object->setTotalWeight($data['totalWeight']);
                unset($data['totalWeight']);
            }
            if (\array_key_exists('shipper', $data)) {
                $object->setShipper($this->denormalizer->denormalize($data['shipper'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentShipper', 'json', $context));
                unset($data['shipper']);
            }
            if (\array_key_exists('recipients', $data)) {
                $values = [];
                foreach ($data['recipients'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentRecipientsItem', 'json', $context);
                }
                $object->setRecipients($values);
                unset($data['recipients']);
            }
            if (\array_key_exists('soldTo', $data)) {
                $object->setSoldTo($this->denormalizer->denormalize($data['soldTo'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentSoldTo', 'json', $context));
                unset($data['soldTo']);
            }
            if (\array_key_exists('origin', $data)) {
                $object->setOrigin($this->denormalizer->denormalize($data['origin'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentOrigin', 'json', $context));
                unset($data['origin']);
            }
            if (\array_key_exists('shippingChargesPayment', $data)) {
                $object->setShippingChargesPayment($this->denormalizer->denormalize($data['shippingChargesPayment'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentShippingChargesPayment', 'json', $context));
                unset($data['shippingChargesPayment']);
            }
            if (\array_key_exists('shipmentSpecialServices', $data)) {
                $object->setShipmentSpecialServices($this->denormalizer->denormalize($data['shipmentSpecialServices'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServices', 'json', $context));
                unset($data['shipmentSpecialServices']);
            }
            if (\array_key_exists('emailNotificationDetail', $data)) {
                $object->setEmailNotificationDetail($this->denormalizer->denormalize($data['emailNotificationDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentEmailNotificationDetail', 'json', $context));
                unset($data['emailNotificationDetail']);
            }
            if (\array_key_exists('expressFreightDetail', $data)) {
                $object->setExpressFreightDetail($this->denormalizer->denormalize($data['expressFreightDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentExpressFreightDetail', 'json', $context));
                unset($data['expressFreightDetail']);
            }
            if (\array_key_exists('variableHandlingChargeDetail', $data)) {
                $object->setVariableHandlingChargeDetail($this->denormalizer->denormalize($data['variableHandlingChargeDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentVariableHandlingChargeDetail', 'json', $context));
                unset($data['variableHandlingChargeDetail']);
            }
            if (\array_key_exists('customsClearanceDetail', $data)) {
                $object->setCustomsClearanceDetail($this->denormalizer->denormalize($data['customsClearanceDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetail', 'json', $context));
                unset($data['customsClearanceDetail']);
            }
            if (\array_key_exists('smartPostInfoDetail', $data)) {
                $object->setSmartPostInfoDetail($this->denormalizer->denormalize($data['smartPostInfoDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentSmartPostInfoDetail', 'json', $context));
                unset($data['smartPostInfoDetail']);
            }
            if (\array_key_exists('blockInsightVisibility', $data)) {
                $object->setBlockInsightVisibility($data['blockInsightVisibility']);
                unset($data['blockInsightVisibility']);
            }
            if (\array_key_exists('rateRequestType', $data)) {
                $values_1 = [];
                foreach ($data['rateRequestType'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRateRequestType($values_1);
                unset($data['rateRequestType']);
            }
            if (\array_key_exists('preferredCurrency', $data)) {
                $object->setPreferredCurrency($data['preferredCurrency']);
                unset($data['preferredCurrency']);
            }
            if (\array_key_exists('requestedPackageLineItems', $data)) {
                $values_2 = [];
                foreach ($data['requestedPackageLineItems'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentRequestedPackageLineItemsItem', 'json', $context);
                }
                $object->setRequestedPackageLineItems($values_2);
                unset($data['requestedPackageLineItems']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('shipDatestamp') && null !== $object->getShipDatestamp()) {
                $data['shipDatestamp'] = $object->getShipDatestamp();
            }
            $data['pickupType'] = $object->getPickupType();
            $data['serviceType'] = $object->getServiceType();
            $data['packagingType'] = $object->getPackagingType();
            if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
                $data['totalWeight'] = $object->getTotalWeight();
            }
            $data['shipper'] = $this->normalizer->normalize($object->getShipper(), 'json', $context);
            $values = [];
            foreach ($object->getRecipients() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['recipients'] = $values;
            if ($object->isInitialized('soldTo') && null !== $object->getSoldTo()) {
                $data['soldTo'] = $this->normalizer->normalize($object->getSoldTo(), 'json', $context);
            }
            if ($object->isInitialized('origin') && null !== $object->getOrigin()) {
                $data['origin'] = $this->normalizer->normalize($object->getOrigin(), 'json', $context);
            }
            $data['shippingChargesPayment'] = $this->normalizer->normalize($object->getShippingChargesPayment(), 'json', $context);
            if ($object->isInitialized('shipmentSpecialServices') && null !== $object->getShipmentSpecialServices()) {
                $data['shipmentSpecialServices'] = $this->normalizer->normalize($object->getShipmentSpecialServices(), 'json', $context);
            }
            if ($object->isInitialized('emailNotificationDetail') && null !== $object->getEmailNotificationDetail()) {
                $data['emailNotificationDetail'] = $this->normalizer->normalize($object->getEmailNotificationDetail(), 'json', $context);
            }
            if ($object->isInitialized('expressFreightDetail') && null !== $object->getExpressFreightDetail()) {
                $data['expressFreightDetail'] = $this->normalizer->normalize($object->getExpressFreightDetail(), 'json', $context);
            }
            if ($object->isInitialized('variableHandlingChargeDetail') && null !== $object->getVariableHandlingChargeDetail()) {
                $data['variableHandlingChargeDetail'] = $this->normalizer->normalize($object->getVariableHandlingChargeDetail(), 'json', $context);
            }
            if ($object->isInitialized('customsClearanceDetail') && null !== $object->getCustomsClearanceDetail()) {
                $data['customsClearanceDetail'] = $this->normalizer->normalize($object->getCustomsClearanceDetail(), 'json', $context);
            }
            if ($object->isInitialized('smartPostInfoDetail') && null !== $object->getSmartPostInfoDetail()) {
                $data['smartPostInfoDetail'] = $this->normalizer->normalize($object->getSmartPostInfoDetail(), 'json', $context);
            }
            if ($object->isInitialized('blockInsightVisibility') && null !== $object->getBlockInsightVisibility()) {
                $data['blockInsightVisibility'] = $object->getBlockInsightVisibility();
            }
            if ($object->isInitialized('rateRequestType') && null !== $object->getRateRequestType()) {
                $values_1 = [];
                foreach ($object->getRateRequestType() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['rateRequestType'] = $values_1;
            }
            if ($object->isInitialized('preferredCurrency') && null !== $object->getPreferredCurrency()) {
                $data['preferredCurrency'] = $object->getPreferredCurrency();
            }
            $values_2 = [];
            foreach ($object->getRequestedPackageLineItems() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['requestedPackageLineItems'] = $values_2;
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipment' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPutBodyRequestedShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipment';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipment();
            if (\array_key_exists('totalWeight', $data) && \is_int($data['totalWeight'])) {
                $data['totalWeight'] = (double) $data['totalWeight'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipDatestamp', $data)) {
                $object->setShipDatestamp($data['shipDatestamp']);
                unset($data['shipDatestamp']);
            }
            if (\array_key_exists('pickupType', $data)) {
                $object->setPickupType($data['pickupType']);
                unset($data['pickupType']);
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('packagingType', $data)) {
                $object->setPackagingType($data['packagingType']);
                unset($data['packagingType']);
            }
            if (\array_key_exists('totalWeight', $data)) {
                $object->setTotalWeight($data['totalWeight']);
                unset($data['totalWeight']);
            }
            if (\array_key_exists('shipper', $data)) {
                $object->setShipper($this->denormalizer->denormalize($data['shipper'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentShipper', 'json', $context));
                unset($data['shipper']);
            }
            if (\array_key_exists('recipients', $data)) {
                $values = [];
                foreach ($data['recipients'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentRecipientsItem', 'json', $context);
                }
                $object->setRecipients($values);
                unset($data['recipients']);
            }
            if (\array_key_exists('soldTo', $data)) {
                $object->setSoldTo($this->denormalizer->denormalize($data['soldTo'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentSoldTo', 'json', $context));
                unset($data['soldTo']);
            }
            if (\array_key_exists('origin', $data)) {
                $object->setOrigin($this->denormalizer->denormalize($data['origin'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentOrigin', 'json', $context));
                unset($data['origin']);
            }
            if (\array_key_exists('shippingChargesPayment', $data)) {
                $object->setShippingChargesPayment($this->denormalizer->denormalize($data['shippingChargesPayment'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentShippingChargesPayment', 'json', $context));
                unset($data['shippingChargesPayment']);
            }
            if (\array_key_exists('shipmentSpecialServices', $data)) {
                $object->setShipmentSpecialServices($this->denormalizer->denormalize($data['shipmentSpecialServices'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServices', 'json', $context));
                unset($data['shipmentSpecialServices']);
            }
            if (\array_key_exists('emailNotificationDetail', $data)) {
                $object->setEmailNotificationDetail($this->denormalizer->denormalize($data['emailNotificationDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentEmailNotificationDetail', 'json', $context));
                unset($data['emailNotificationDetail']);
            }
            if (\array_key_exists('expressFreightDetail', $data)) {
                $object->setExpressFreightDetail($this->denormalizer->denormalize($data['expressFreightDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentExpressFreightDetail', 'json', $context));
                unset($data['expressFreightDetail']);
            }
            if (\array_key_exists('variableHandlingChargeDetail', $data)) {
                $object->setVariableHandlingChargeDetail($this->denormalizer->denormalize($data['variableHandlingChargeDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentVariableHandlingChargeDetail', 'json', $context));
                unset($data['variableHandlingChargeDetail']);
            }
            if (\array_key_exists('customsClearanceDetail', $data)) {
                $object->setCustomsClearanceDetail($this->denormalizer->denormalize($data['customsClearanceDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetail', 'json', $context));
                unset($data['customsClearanceDetail']);
            }
            if (\array_key_exists('smartPostInfoDetail', $data)) {
                $object->setSmartPostInfoDetail($this->denormalizer->denormalize($data['smartPostInfoDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentSmartPostInfoDetail', 'json', $context));
                unset($data['smartPostInfoDetail']);
            }
            if (\array_key_exists('blockInsightVisibility', $data)) {
                $object->setBlockInsightVisibility($data['blockInsightVisibility']);
                unset($data['blockInsightVisibility']);
            }
            if (\array_key_exists('rateRequestType', $data)) {
                $values_1 = [];
                foreach ($data['rateRequestType'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRateRequestType($values_1);
                unset($data['rateRequestType']);
            }
            if (\array_key_exists('preferredCurrency', $data)) {
                $object->setPreferredCurrency($data['preferredCurrency']);
                unset($data['preferredCurrency']);
            }
            if (\array_key_exists('requestedPackageLineItems', $data)) {
                $values_2 = [];
                foreach ($data['requestedPackageLineItems'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentRequestedPackageLineItemsItem', 'json', $context);
                }
                $object->setRequestedPackageLineItems($values_2);
                unset($data['requestedPackageLineItems']);
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
            if ($object->isInitialized('shipDatestamp') && null !== $object->getShipDatestamp()) {
                $data['shipDatestamp'] = $object->getShipDatestamp();
            }
            $data['pickupType'] = $object->getPickupType();
            $data['serviceType'] = $object->getServiceType();
            $data['packagingType'] = $object->getPackagingType();
            if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
                $data['totalWeight'] = $object->getTotalWeight();
            }
            $data['shipper'] = $this->normalizer->normalize($object->getShipper(), 'json', $context);
            $values = [];
            foreach ($object->getRecipients() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['recipients'] = $values;
            if ($object->isInitialized('soldTo') && null !== $object->getSoldTo()) {
                $data['soldTo'] = $this->normalizer->normalize($object->getSoldTo(), 'json', $context);
            }
            if ($object->isInitialized('origin') && null !== $object->getOrigin()) {
                $data['origin'] = $this->normalizer->normalize($object->getOrigin(), 'json', $context);
            }
            $data['shippingChargesPayment'] = $this->normalizer->normalize($object->getShippingChargesPayment(), 'json', $context);
            if ($object->isInitialized('shipmentSpecialServices') && null !== $object->getShipmentSpecialServices()) {
                $data['shipmentSpecialServices'] = $this->normalizer->normalize($object->getShipmentSpecialServices(), 'json', $context);
            }
            if ($object->isInitialized('emailNotificationDetail') && null !== $object->getEmailNotificationDetail()) {
                $data['emailNotificationDetail'] = $this->normalizer->normalize($object->getEmailNotificationDetail(), 'json', $context);
            }
            if ($object->isInitialized('expressFreightDetail') && null !== $object->getExpressFreightDetail()) {
                $data['expressFreightDetail'] = $this->normalizer->normalize($object->getExpressFreightDetail(), 'json', $context);
            }
            if ($object->isInitialized('variableHandlingChargeDetail') && null !== $object->getVariableHandlingChargeDetail()) {
                $data['variableHandlingChargeDetail'] = $this->normalizer->normalize($object->getVariableHandlingChargeDetail(), 'json', $context);
            }
            if ($object->isInitialized('customsClearanceDetail') && null !== $object->getCustomsClearanceDetail()) {
                $data['customsClearanceDetail'] = $this->normalizer->normalize($object->getCustomsClearanceDetail(), 'json', $context);
            }
            if ($object->isInitialized('smartPostInfoDetail') && null !== $object->getSmartPostInfoDetail()) {
                $data['smartPostInfoDetail'] = $this->normalizer->normalize($object->getSmartPostInfoDetail(), 'json', $context);
            }
            if ($object->isInitialized('blockInsightVisibility') && null !== $object->getBlockInsightVisibility()) {
                $data['blockInsightVisibility'] = $object->getBlockInsightVisibility();
            }
            if ($object->isInitialized('rateRequestType') && null !== $object->getRateRequestType()) {
                $values_1 = [];
                foreach ($object->getRateRequestType() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['rateRequestType'] = $values_1;
            }
            if ($object->isInitialized('preferredCurrency') && null !== $object->getPreferredCurrency()) {
                $data['preferredCurrency'] = $object->getPreferredCurrency();
            }
            $values_2 = [];
            foreach ($object->getRequestedPackageLineItems() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['requestedPackageLineItems'] = $values_2;
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipment' => false];
        }
    }
}
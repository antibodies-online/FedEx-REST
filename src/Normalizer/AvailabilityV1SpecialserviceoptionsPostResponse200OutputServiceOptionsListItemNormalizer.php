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
    class AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('issEnabled', $data)) {
                $object->setIssEnabled($data['issEnabled']);
                unset($data['issEnabled']);
            }
            if (\array_key_exists('signatureOptionsList', $data)) {
                $values = [];
                foreach ($data['signatureOptionsList'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemSignatureOptionsListItem', 'json', $context);
                }
                $object->setSignatureOptionsList($values);
                unset($data['signatureOptionsList']);
            }
            if (\array_key_exists('packageSpecialServicesList', $data)) {
                $values_1 = [];
                foreach ($data['packageSpecialServicesList'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemPackageSpecialServicesListItem', 'json', $context);
                }
                $object->setPackageSpecialServicesList($values_1);
                unset($data['packageSpecialServicesList']);
            }
            if (\array_key_exists('returnShipmentList', $data)) {
                $values_2 = [];
                foreach ($data['returnShipmentList'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setReturnShipmentList($values_2);
                unset($data['returnShipmentList']);
            }
            if (\array_key_exists('carrierCode', $data)) {
                $object->setCarrierCode($data['carrierCode']);
                unset($data['carrierCode']);
            }
            if (\array_key_exists('batteryOptionList', $data)) {
                $values_3 = [];
                foreach ($data['batteryOptionList'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemBatteryOptionListItem', 'json', $context);
                }
                $object->setBatteryOptionList($values_3);
                unset($data['batteryOptionList']);
            }
            if (\array_key_exists('alertList', $data)) {
                $values_4 = [];
                foreach ($data['alertList'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemAlertListItem', 'json', $context);
                }
                $object->setAlertList($values_4);
                unset($data['alertList']);
            }
            if (\array_key_exists('shipmentSpecialServicesList', $data)) {
                $values_5 = [];
                foreach ($data['shipmentSpecialServicesList'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemShipmentSpecialServicesListItem', 'json', $context);
                }
                $object->setShipmentSpecialServicesList($values_5);
                unset($data['shipmentSpecialServicesList']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values_6 = [];
                foreach ($data['alerts'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemAlertsItem', 'json', $context);
                }
                $object->setAlerts($values_6);
                unset($data['alerts']);
            }
            foreach ($data as $key => $value_7) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_7;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('issEnabled') && null !== $object->getIssEnabled()) {
                $data['issEnabled'] = $object->getIssEnabled();
            }
            if ($object->isInitialized('signatureOptionsList') && null !== $object->getSignatureOptionsList()) {
                $values = [];
                foreach ($object->getSignatureOptionsList() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['signatureOptionsList'] = $values;
            }
            if ($object->isInitialized('packageSpecialServicesList') && null !== $object->getPackageSpecialServicesList()) {
                $values_1 = [];
                foreach ($object->getPackageSpecialServicesList() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['packageSpecialServicesList'] = $values_1;
            }
            if ($object->isInitialized('returnShipmentList') && null !== $object->getReturnShipmentList()) {
                $values_2 = [];
                foreach ($object->getReturnShipmentList() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['returnShipmentList'] = $values_2;
            }
            if ($object->isInitialized('carrierCode') && null !== $object->getCarrierCode()) {
                $data['carrierCode'] = $object->getCarrierCode();
            }
            if ($object->isInitialized('batteryOptionList') && null !== $object->getBatteryOptionList()) {
                $values_3 = [];
                foreach ($object->getBatteryOptionList() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['batteryOptionList'] = $values_3;
            }
            if ($object->isInitialized('alertList') && null !== $object->getAlertList()) {
                $values_4 = [];
                foreach ($object->getAlertList() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['alertList'] = $values_4;
            }
            if ($object->isInitialized('shipmentSpecialServicesList') && null !== $object->getShipmentSpecialServicesList()) {
                $values_5 = [];
                foreach ($object->getShipmentSpecialServicesList() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['shipmentSpecialServicesList'] = $values_5;
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values_6 = [];
                foreach ($object->getAlerts() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }
                $data['alerts'] = $values_6;
            }
            foreach ($object as $key => $value_7) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_7;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItem' => false];
        }
    }
} else {
    class AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItem';
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
            $object = new \AntibodiesOnline\FedEx\Model\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('issEnabled', $data)) {
                $object->setIssEnabled($data['issEnabled']);
                unset($data['issEnabled']);
            }
            if (\array_key_exists('signatureOptionsList', $data)) {
                $values = [];
                foreach ($data['signatureOptionsList'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemSignatureOptionsListItem', 'json', $context);
                }
                $object->setSignatureOptionsList($values);
                unset($data['signatureOptionsList']);
            }
            if (\array_key_exists('packageSpecialServicesList', $data)) {
                $values_1 = [];
                foreach ($data['packageSpecialServicesList'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemPackageSpecialServicesListItem', 'json', $context);
                }
                $object->setPackageSpecialServicesList($values_1);
                unset($data['packageSpecialServicesList']);
            }
            if (\array_key_exists('returnShipmentList', $data)) {
                $values_2 = [];
                foreach ($data['returnShipmentList'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setReturnShipmentList($values_2);
                unset($data['returnShipmentList']);
            }
            if (\array_key_exists('carrierCode', $data)) {
                $object->setCarrierCode($data['carrierCode']);
                unset($data['carrierCode']);
            }
            if (\array_key_exists('batteryOptionList', $data)) {
                $values_3 = [];
                foreach ($data['batteryOptionList'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemBatteryOptionListItem', 'json', $context);
                }
                $object->setBatteryOptionList($values_3);
                unset($data['batteryOptionList']);
            }
            if (\array_key_exists('alertList', $data)) {
                $values_4 = [];
                foreach ($data['alertList'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemAlertListItem', 'json', $context);
                }
                $object->setAlertList($values_4);
                unset($data['alertList']);
            }
            if (\array_key_exists('shipmentSpecialServicesList', $data)) {
                $values_5 = [];
                foreach ($data['shipmentSpecialServicesList'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemShipmentSpecialServicesListItem', 'json', $context);
                }
                $object->setShipmentSpecialServicesList($values_5);
                unset($data['shipmentSpecialServicesList']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values_6 = [];
                foreach ($data['alerts'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemAlertsItem', 'json', $context);
                }
                $object->setAlerts($values_6);
                unset($data['alerts']);
            }
            foreach ($data as $key => $value_7) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_7;
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
            if ($object->isInitialized('issEnabled') && null !== $object->getIssEnabled()) {
                $data['issEnabled'] = $object->getIssEnabled();
            }
            if ($object->isInitialized('signatureOptionsList') && null !== $object->getSignatureOptionsList()) {
                $values = [];
                foreach ($object->getSignatureOptionsList() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['signatureOptionsList'] = $values;
            }
            if ($object->isInitialized('packageSpecialServicesList') && null !== $object->getPackageSpecialServicesList()) {
                $values_1 = [];
                foreach ($object->getPackageSpecialServicesList() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['packageSpecialServicesList'] = $values_1;
            }
            if ($object->isInitialized('returnShipmentList') && null !== $object->getReturnShipmentList()) {
                $values_2 = [];
                foreach ($object->getReturnShipmentList() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['returnShipmentList'] = $values_2;
            }
            if ($object->isInitialized('carrierCode') && null !== $object->getCarrierCode()) {
                $data['carrierCode'] = $object->getCarrierCode();
            }
            if ($object->isInitialized('batteryOptionList') && null !== $object->getBatteryOptionList()) {
                $values_3 = [];
                foreach ($object->getBatteryOptionList() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['batteryOptionList'] = $values_3;
            }
            if ($object->isInitialized('alertList') && null !== $object->getAlertList()) {
                $values_4 = [];
                foreach ($object->getAlertList() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['alertList'] = $values_4;
            }
            if ($object->isInitialized('shipmentSpecialServicesList') && null !== $object->getShipmentSpecialServicesList()) {
                $values_5 = [];
                foreach ($object->getShipmentSpecialServicesList() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['shipmentSpecialServicesList'] = $values_5;
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values_6 = [];
                foreach ($object->getAlerts() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }
                $data['alerts'] = $values_6;
            }
            foreach ($object as $key => $value_7) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_7;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItem' => false];
        }
    }
}
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
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetail();
            if (\array_key_exists('clientDiscountPercent', $data) && \is_int($data['clientDiscountPercent'])) {
                $data['clientDiscountPercent'] = (double) $data['clientDiscountPercent'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipmentDimensions', $data)) {
                $object->setShipmentDimensions($this->denormalizer->denormalize($data['shipmentDimensions'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailshipmentDimensions::class, 'json', $context));
                unset($data['shipmentDimensions']);
            }
            if (\array_key_exists('alternateBilling', $data)) {
                $object->setAlternateBilling($data['alternateBilling']);
                unset($data['alternateBilling']);
            }
            if (\array_key_exists('lineItem', $data)) {
                $values = [];
                foreach ($data['lineItem'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItem::class, 'json', $context);
                }
                $object->setLineItem($values);
                unset($data['lineItem']);
            }
            if (\array_key_exists('role', $data)) {
                $object->setRole($data['role']);
                unset($data['role']);
            }
            if (\array_key_exists('clientDiscountPercent', $data)) {
                $object->setClientDiscountPercent($data['clientDiscountPercent']);
                unset($data['clientDiscountPercent']);
            }
            if (\array_key_exists('fedExFreightBillingContactAndAddress', $data)) {
                $object->setFedExFreightBillingContactAndAddress($this->denormalizer->denormalize($data['fedExFreightBillingContactAndAddress'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddress::class, 'json', $context));
                unset($data['fedExFreightBillingContactAndAddress']);
            }
            if (\array_key_exists('aliasID', $data)) {
                $object->setAliasID($data['aliasID']);
                unset($data['aliasID']);
            }
            if (\array_key_exists('liabilityCoverageDetail', $data)) {
                $object->setLiabilityCoverageDetail($this->denormalizer->denormalize($data['liabilityCoverageDetail'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailliabilityCoverageDetail::class, 'json', $context));
                unset($data['liabilityCoverageDetail']);
            }
            if (\array_key_exists('fedExFreightAccountNumber', $data)) {
                $object->setFedExFreightAccountNumber($this->denormalizer->denormalize($data['fedExFreightAccountNumber'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightAccountNumber::class, 'json', $context));
                unset($data['fedExFreightAccountNumber']);
            }
            if (\array_key_exists('totalHandlingUnits', $data)) {
                $object->setTotalHandlingUnits($data['totalHandlingUnits']);
                unset($data['totalHandlingUnits']);
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
            if ($object->isInitialized('shipmentDimensions') && null !== $object->getShipmentDimensions()) {
                $data['shipmentDimensions'] = $this->normalizer->normalize($object->getShipmentDimensions(), 'json', $context);
            }
            if ($object->isInitialized('alternateBilling') && null !== $object->getAlternateBilling()) {
                $data['alternateBilling'] = $object->getAlternateBilling();
            }
            if ($object->isInitialized('lineItem') && null !== $object->getLineItem()) {
                $values = [];
                foreach ($object->getLineItem() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['lineItem'] = $values;
            }
            if ($object->isInitialized('role') && null !== $object->getRole()) {
                $data['role'] = $object->getRole();
            }
            if ($object->isInitialized('clientDiscountPercent') && null !== $object->getClientDiscountPercent()) {
                $data['clientDiscountPercent'] = $object->getClientDiscountPercent();
            }
            if ($object->isInitialized('fedExFreightBillingContactAndAddress') && null !== $object->getFedExFreightBillingContactAndAddress()) {
                $data['fedExFreightBillingContactAndAddress'] = $this->normalizer->normalize($object->getFedExFreightBillingContactAndAddress(), 'json', $context);
            }
            if ($object->isInitialized('aliasID') && null !== $object->getAliasID()) {
                $data['aliasID'] = $object->getAliasID();
            }
            if ($object->isInitialized('liabilityCoverageDetail') && null !== $object->getLiabilityCoverageDetail()) {
                $data['liabilityCoverageDetail'] = $this->normalizer->normalize($object->getLiabilityCoverageDetail(), 'json', $context);
            }
            if ($object->isInitialized('fedExFreightAccountNumber') && null !== $object->getFedExFreightAccountNumber()) {
                $data['fedExFreightAccountNumber'] = $this->normalizer->normalize($object->getFedExFreightAccountNumber(), 'json', $context);
            }
            if ($object->isInitialized('totalHandlingUnits') && null !== $object->getTotalHandlingUnits()) {
                $data['totalHandlingUnits'] = $object->getTotalHandlingUnits();
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
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetail::class => false];
        }
    }
} else {
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetail::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetail();
            if (\array_key_exists('clientDiscountPercent', $data) && \is_int($data['clientDiscountPercent'])) {
                $data['clientDiscountPercent'] = (double) $data['clientDiscountPercent'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipmentDimensions', $data)) {
                $object->setShipmentDimensions($this->denormalizer->denormalize($data['shipmentDimensions'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailshipmentDimensions::class, 'json', $context));
                unset($data['shipmentDimensions']);
            }
            if (\array_key_exists('alternateBilling', $data)) {
                $object->setAlternateBilling($data['alternateBilling']);
                unset($data['alternateBilling']);
            }
            if (\array_key_exists('lineItem', $data)) {
                $values = [];
                foreach ($data['lineItem'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItem::class, 'json', $context);
                }
                $object->setLineItem($values);
                unset($data['lineItem']);
            }
            if (\array_key_exists('role', $data)) {
                $object->setRole($data['role']);
                unset($data['role']);
            }
            if (\array_key_exists('clientDiscountPercent', $data)) {
                $object->setClientDiscountPercent($data['clientDiscountPercent']);
                unset($data['clientDiscountPercent']);
            }
            if (\array_key_exists('fedExFreightBillingContactAndAddress', $data)) {
                $object->setFedExFreightBillingContactAndAddress($this->denormalizer->denormalize($data['fedExFreightBillingContactAndAddress'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddress::class, 'json', $context));
                unset($data['fedExFreightBillingContactAndAddress']);
            }
            if (\array_key_exists('aliasID', $data)) {
                $object->setAliasID($data['aliasID']);
                unset($data['aliasID']);
            }
            if (\array_key_exists('liabilityCoverageDetail', $data)) {
                $object->setLiabilityCoverageDetail($this->denormalizer->denormalize($data['liabilityCoverageDetail'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailliabilityCoverageDetail::class, 'json', $context));
                unset($data['liabilityCoverageDetail']);
            }
            if (\array_key_exists('fedExFreightAccountNumber', $data)) {
                $object->setFedExFreightAccountNumber($this->denormalizer->denormalize($data['fedExFreightAccountNumber'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightAccountNumber::class, 'json', $context));
                unset($data['fedExFreightAccountNumber']);
            }
            if (\array_key_exists('totalHandlingUnits', $data)) {
                $object->setTotalHandlingUnits($data['totalHandlingUnits']);
                unset($data['totalHandlingUnits']);
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
            if ($object->isInitialized('shipmentDimensions') && null !== $object->getShipmentDimensions()) {
                $data['shipmentDimensions'] = $this->normalizer->normalize($object->getShipmentDimensions(), 'json', $context);
            }
            if ($object->isInitialized('alternateBilling') && null !== $object->getAlternateBilling()) {
                $data['alternateBilling'] = $object->getAlternateBilling();
            }
            if ($object->isInitialized('lineItem') && null !== $object->getLineItem()) {
                $values = [];
                foreach ($object->getLineItem() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['lineItem'] = $values;
            }
            if ($object->isInitialized('role') && null !== $object->getRole()) {
                $data['role'] = $object->getRole();
            }
            if ($object->isInitialized('clientDiscountPercent') && null !== $object->getClientDiscountPercent()) {
                $data['clientDiscountPercent'] = $object->getClientDiscountPercent();
            }
            if ($object->isInitialized('fedExFreightBillingContactAndAddress') && null !== $object->getFedExFreightBillingContactAndAddress()) {
                $data['fedExFreightBillingContactAndAddress'] = $this->normalizer->normalize($object->getFedExFreightBillingContactAndAddress(), 'json', $context);
            }
            if ($object->isInitialized('aliasID') && null !== $object->getAliasID()) {
                $data['aliasID'] = $object->getAliasID();
            }
            if ($object->isInitialized('liabilityCoverageDetail') && null !== $object->getLiabilityCoverageDetail()) {
                $data['liabilityCoverageDetail'] = $this->normalizer->normalize($object->getLiabilityCoverageDetail(), 'json', $context);
            }
            if ($object->isInitialized('fedExFreightAccountNumber') && null !== $object->getFedExFreightAccountNumber()) {
                $data['fedExFreightAccountNumber'] = $this->normalizer->normalize($object->getFedExFreightAccountNumber(), 'json', $context);
            }
            if ($object->isInitialized('totalHandlingUnits') && null !== $object->getTotalHandlingUnits()) {
                $data['totalHandlingUnits'] = $object->getTotalHandlingUnits();
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
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetail::class => false];
        }
    }
}
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
    class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetail();
            if (\array_key_exists('clientDiscountPercent', $data) && \is_int($data['clientDiscountPercent'])) {
                $data['clientDiscountPercent'] = (double) $data['clientDiscountPercent'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('role', $data)) {
                $object->setRole($data['role']);
                unset($data['role']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailaccountNumber', 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('declaredValueUnits', $data)) {
                $object->setDeclaredValueUnits($data['declaredValueUnits']);
                unset($data['declaredValueUnits']);
            }
            if (\array_key_exists('shipmentDimensions', $data)) {
                $object->setShipmentDimensions($data['shipmentDimensions']);
                unset($data['shipmentDimensions']);
            }
            if (\array_key_exists('lineItem', $data)) {
                $values = [];
                foreach ($data['lineItem'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItem', 'json', $context);
                }
                $object->setLineItem($values);
                unset($data['lineItem']);
            }
            if (\array_key_exists('clientDiscountPercent', $data)) {
                $object->setClientDiscountPercent($data['clientDiscountPercent']);
                unset($data['clientDiscountPercent']);
            }
            if (\array_key_exists('fedExFreightBillingContactAndAddress', $data)) {
                $object->setFedExFreightBillingContactAndAddress($this->denormalizer->denormalize($data['fedExFreightBillingContactAndAddress'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddress', 'json', $context));
                unset($data['fedExFreightBillingContactAndAddress']);
            }
            if (\array_key_exists('aliasID', $data)) {
                $object->setAliasID($data['aliasID']);
                unset($data['aliasID']);
            }
            if (\array_key_exists('hazardousMaterialsOfferor', $data)) {
                $object->setHazardousMaterialsOfferor($data['hazardousMaterialsOfferor']);
                unset($data['hazardousMaterialsOfferor']);
            }
            if (\array_key_exists('declaredValuePerUnit', $data)) {
                $object->setDeclaredValuePerUnit($data['declaredValuePerUnit']);
                unset($data['declaredValuePerUnit']);
            }
            if (\array_key_exists('totalHandlingUnits', $data)) {
                $object->setTotalHandlingUnits($data['totalHandlingUnits']);
                unset($data['totalHandlingUnits']);
            }
            if (\array_key_exists('alternateBillingParty', $data)) {
                $object->setAlternateBillingParty($this->denormalizer->denormalize($data['alternateBillingParty'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingParty', 'json', $context));
                unset($data['alternateBillingParty']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['role'] = $object->getRole();
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            }
            if ($object->isInitialized('declaredValueUnits') && null !== $object->getDeclaredValueUnits()) {
                $data['declaredValueUnits'] = $object->getDeclaredValueUnits();
            }
            if ($object->isInitialized('shipmentDimensions') && null !== $object->getShipmentDimensions()) {
                $data['shipmentDimensions'] = $object->getShipmentDimensions();
            }
            $values = [];
            foreach ($object->getLineItem() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['lineItem'] = $values;
            if ($object->isInitialized('clientDiscountPercent') && null !== $object->getClientDiscountPercent()) {
                $data['clientDiscountPercent'] = $object->getClientDiscountPercent();
            }
            if ($object->isInitialized('fedExFreightBillingContactAndAddress') && null !== $object->getFedExFreightBillingContactAndAddress()) {
                $data['fedExFreightBillingContactAndAddress'] = $this->normalizer->normalize($object->getFedExFreightBillingContactAndAddress(), 'json', $context);
            }
            if ($object->isInitialized('aliasID') && null !== $object->getAliasID()) {
                $data['aliasID'] = $object->getAliasID();
            }
            if ($object->isInitialized('hazardousMaterialsOfferor') && null !== $object->getHazardousMaterialsOfferor()) {
                $data['hazardousMaterialsOfferor'] = $object->getHazardousMaterialsOfferor();
            }
            if ($object->isInitialized('declaredValuePerUnit') && null !== $object->getDeclaredValuePerUnit()) {
                $data['declaredValuePerUnit'] = $object->getDeclaredValuePerUnit();
            }
            $data['totalHandlingUnits'] = $object->getTotalHandlingUnits();
            if ($object->isInitialized('alternateBillingParty') && null !== $object->getAlternateBillingParty()) {
                $data['alternateBillingParty'] = $this->normalizer->normalize($object->getAlternateBillingParty(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetail' => false];
        }
    }
} else {
    class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetail';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetail();
            if (\array_key_exists('clientDiscountPercent', $data) && \is_int($data['clientDiscountPercent'])) {
                $data['clientDiscountPercent'] = (double) $data['clientDiscountPercent'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('role', $data)) {
                $object->setRole($data['role']);
                unset($data['role']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailaccountNumber', 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('declaredValueUnits', $data)) {
                $object->setDeclaredValueUnits($data['declaredValueUnits']);
                unset($data['declaredValueUnits']);
            }
            if (\array_key_exists('shipmentDimensions', $data)) {
                $object->setShipmentDimensions($data['shipmentDimensions']);
                unset($data['shipmentDimensions']);
            }
            if (\array_key_exists('lineItem', $data)) {
                $values = [];
                foreach ($data['lineItem'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItem', 'json', $context);
                }
                $object->setLineItem($values);
                unset($data['lineItem']);
            }
            if (\array_key_exists('clientDiscountPercent', $data)) {
                $object->setClientDiscountPercent($data['clientDiscountPercent']);
                unset($data['clientDiscountPercent']);
            }
            if (\array_key_exists('fedExFreightBillingContactAndAddress', $data)) {
                $object->setFedExFreightBillingContactAndAddress($this->denormalizer->denormalize($data['fedExFreightBillingContactAndAddress'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddress', 'json', $context));
                unset($data['fedExFreightBillingContactAndAddress']);
            }
            if (\array_key_exists('aliasID', $data)) {
                $object->setAliasID($data['aliasID']);
                unset($data['aliasID']);
            }
            if (\array_key_exists('hazardousMaterialsOfferor', $data)) {
                $object->setHazardousMaterialsOfferor($data['hazardousMaterialsOfferor']);
                unset($data['hazardousMaterialsOfferor']);
            }
            if (\array_key_exists('declaredValuePerUnit', $data)) {
                $object->setDeclaredValuePerUnit($data['declaredValuePerUnit']);
                unset($data['declaredValuePerUnit']);
            }
            if (\array_key_exists('totalHandlingUnits', $data)) {
                $object->setTotalHandlingUnits($data['totalHandlingUnits']);
                unset($data['totalHandlingUnits']);
            }
            if (\array_key_exists('alternateBillingParty', $data)) {
                $object->setAlternateBillingParty($this->denormalizer->denormalize($data['alternateBillingParty'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingParty', 'json', $context));
                unset($data['alternateBillingParty']);
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
            $data['role'] = $object->getRole();
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            }
            if ($object->isInitialized('declaredValueUnits') && null !== $object->getDeclaredValueUnits()) {
                $data['declaredValueUnits'] = $object->getDeclaredValueUnits();
            }
            if ($object->isInitialized('shipmentDimensions') && null !== $object->getShipmentDimensions()) {
                $data['shipmentDimensions'] = $object->getShipmentDimensions();
            }
            $values = [];
            foreach ($object->getLineItem() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['lineItem'] = $values;
            if ($object->isInitialized('clientDiscountPercent') && null !== $object->getClientDiscountPercent()) {
                $data['clientDiscountPercent'] = $object->getClientDiscountPercent();
            }
            if ($object->isInitialized('fedExFreightBillingContactAndAddress') && null !== $object->getFedExFreightBillingContactAndAddress()) {
                $data['fedExFreightBillingContactAndAddress'] = $this->normalizer->normalize($object->getFedExFreightBillingContactAndAddress(), 'json', $context);
            }
            if ($object->isInitialized('aliasID') && null !== $object->getAliasID()) {
                $data['aliasID'] = $object->getAliasID();
            }
            if ($object->isInitialized('hazardousMaterialsOfferor') && null !== $object->getHazardousMaterialsOfferor()) {
                $data['hazardousMaterialsOfferor'] = $object->getHazardousMaterialsOfferor();
            }
            if ($object->isInitialized('declaredValuePerUnit') && null !== $object->getDeclaredValuePerUnit()) {
                $data['declaredValuePerUnit'] = $object->getDeclaredValuePerUnit();
            }
            $data['totalHandlingUnits'] = $object->getTotalHandlingUnits();
            if ($object->isInitialized('alternateBillingParty') && null !== $object->getAlternateBillingParty()) {
                $data['alternateBillingParty'] = $this->normalizer->normalize($object->getAlternateBillingParty(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetail' => false];
        }
    }
}
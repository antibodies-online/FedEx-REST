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
    class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetail();
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
            if (\array_key_exists('specialServicePayments', $data)) {
                $values = [];
                foreach ($data['specialServicePayments'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailSpecialServicePaymentsItem::class, 'json', $context);
                }
                $object->setSpecialServicePayments($values);
                unset($data['specialServicePayments']);
            }
            if (\array_key_exists('liabilityCoverageDetail', $data)) {
                $object->setLiabilityCoverageDetail($this->denormalizer->denormalize($data['liabilityCoverageDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLiabilityCoverageDetail::class, 'json', $context));
                unset($data['liabilityCoverageDetail']);
            }
            if (\array_key_exists('fedExFreightAccountNumber', $data)) {
                $object->setFedExFreightAccountNumber($data['fedExFreightAccountNumber']);
                unset($data['fedExFreightAccountNumber']);
            }
            if (\array_key_exists('declaredValueUnits', $data)) {
                $object->setDeclaredValueUnits($data['declaredValueUnits']);
                unset($data['declaredValueUnits']);
            }
            if (\array_key_exists('printedReferences', $data)) {
                $values_1 = [];
                foreach ($data['printedReferences'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailPrintedReferencesItem::class, 'json', $context);
                }
                $object->setPrintedReferences($values_1);
                unset($data['printedReferences']);
            }
            if (\array_key_exists('hazardousMaterialsEmergencyContactNumber', $data)) {
                $object->setHazardousMaterialsEmergencyContactNumber($this->denormalizer->denormalize($data['hazardousMaterialsEmergencyContactNumber'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailHazardousMaterialsEmergencyContactNumber::class, 'json', $context));
                unset($data['hazardousMaterialsEmergencyContactNumber']);
            }
            if (\array_key_exists('lineItem', $data)) {
                $values_2 = [];
                foreach ($data['lineItem'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItem::class, 'json', $context);
                }
                $object->setLineItem($values_2);
                unset($data['lineItem']);
            }
            if (\array_key_exists('clientDiscountPercent', $data)) {
                $object->setClientDiscountPercent($data['clientDiscountPercent']);
                unset($data['clientDiscountPercent']);
            }
            if (\array_key_exists('coupons', $data)) {
                $values_3 = [];
                foreach ($data['coupons'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setCoupons($values_3);
                unset($data['coupons']);
            }
            if (\array_key_exists('fedExFreightBillingContactAndAddress', $data)) {
                $object->setFedExFreightBillingContactAndAddress($this->denormalizer->denormalize($data['fedExFreightBillingContactAndAddress'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailFedExFreightBillingContactAndAddress::class, 'json', $context));
                unset($data['fedExFreightBillingContactAndAddress']);
            }
            if (\array_key_exists('aliasID', $data)) {
                $object->setAliasID($data['aliasID']);
                unset($data['aliasID']);
            }
            if (\array_key_exists('collectTermsType', $data)) {
                $object->setCollectTermsType($data['collectTermsType']);
                unset($data['collectTermsType']);
            }
            if (\array_key_exists('hazardousMaterialsOfferor', $data)) {
                $object->setHazardousMaterialsOfferor($data['hazardousMaterialsOfferor']);
                unset($data['hazardousMaterialsOfferor']);
            }
            if (\array_key_exists('declaredValuePerUnit', $data)) {
                $object->setDeclaredValuePerUnit($this->denormalizer->denormalize($data['declaredValuePerUnit'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailDeclaredValuePerUnit::class, 'json', $context));
                unset($data['declaredValuePerUnit']);
            }
            if (\array_key_exists('totalHandlingUnits', $data)) {
                $object->setTotalHandlingUnits($data['totalHandlingUnits']);
                unset($data['totalHandlingUnits']);
            }
            if (\array_key_exists('alternateBillingParty', $data)) {
                $object->setAlternateBillingParty($this->denormalizer->denormalize($data['alternateBillingParty'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingParty::class, 'json', $context));
                unset($data['alternateBillingParty']);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['role'] = $object->getRole();
            if ($object->isInitialized('specialServicePayments') && null !== $object->getSpecialServicePayments()) {
                $values = [];
                foreach ($object->getSpecialServicePayments() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['specialServicePayments'] = $values;
            }
            if ($object->isInitialized('liabilityCoverageDetail') && null !== $object->getLiabilityCoverageDetail()) {
                $data['liabilityCoverageDetail'] = $this->normalizer->normalize($object->getLiabilityCoverageDetail(), 'json', $context);
            }
            if ($object->isInitialized('fedExFreightAccountNumber') && null !== $object->getFedExFreightAccountNumber()) {
                $data['fedExFreightAccountNumber'] = $object->getFedExFreightAccountNumber();
            }
            if ($object->isInitialized('declaredValueUnits') && null !== $object->getDeclaredValueUnits()) {
                $data['declaredValueUnits'] = $object->getDeclaredValueUnits();
            }
            if ($object->isInitialized('printedReferences') && null !== $object->getPrintedReferences()) {
                $values_1 = [];
                foreach ($object->getPrintedReferences() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['printedReferences'] = $values_1;
            }
            if ($object->isInitialized('hazardousMaterialsEmergencyContactNumber') && null !== $object->getHazardousMaterialsEmergencyContactNumber()) {
                $data['hazardousMaterialsEmergencyContactNumber'] = $this->normalizer->normalize($object->getHazardousMaterialsEmergencyContactNumber(), 'json', $context);
            }
            $values_2 = [];
            foreach ($object->getLineItem() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['lineItem'] = $values_2;
            if ($object->isInitialized('clientDiscountPercent') && null !== $object->getClientDiscountPercent()) {
                $data['clientDiscountPercent'] = $object->getClientDiscountPercent();
            }
            if ($object->isInitialized('coupons') && null !== $object->getCoupons()) {
                $values_3 = [];
                foreach ($object->getCoupons() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['coupons'] = $values_3;
            }
            $data['fedExFreightBillingContactAndAddress'] = $this->normalizer->normalize($object->getFedExFreightBillingContactAndAddress(), 'json', $context);
            if ($object->isInitialized('aliasID') && null !== $object->getAliasID()) {
                $data['aliasID'] = $object->getAliasID();
            }
            if ($object->isInitialized('collectTermsType') && null !== $object->getCollectTermsType()) {
                $data['collectTermsType'] = $object->getCollectTermsType();
            }
            if ($object->isInitialized('hazardousMaterialsOfferor') && null !== $object->getHazardousMaterialsOfferor()) {
                $data['hazardousMaterialsOfferor'] = $object->getHazardousMaterialsOfferor();
            }
            if ($object->isInitialized('declaredValuePerUnit') && null !== $object->getDeclaredValuePerUnit()) {
                $data['declaredValuePerUnit'] = $this->normalizer->normalize($object->getDeclaredValuePerUnit(), 'json', $context);
            }
            $data['totalHandlingUnits'] = $object->getTotalHandlingUnits();
            if ($object->isInitialized('alternateBillingParty') && null !== $object->getAlternateBillingParty()) {
                $data['alternateBillingParty'] = $this->normalizer->normalize($object->getAlternateBillingParty(), 'json', $context);
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetail::class => false];
        }
    }
} else {
    class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetail::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetail();
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
            if (\array_key_exists('specialServicePayments', $data)) {
                $values = [];
                foreach ($data['specialServicePayments'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailSpecialServicePaymentsItem::class, 'json', $context);
                }
                $object->setSpecialServicePayments($values);
                unset($data['specialServicePayments']);
            }
            if (\array_key_exists('liabilityCoverageDetail', $data)) {
                $object->setLiabilityCoverageDetail($this->denormalizer->denormalize($data['liabilityCoverageDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLiabilityCoverageDetail::class, 'json', $context));
                unset($data['liabilityCoverageDetail']);
            }
            if (\array_key_exists('fedExFreightAccountNumber', $data)) {
                $object->setFedExFreightAccountNumber($data['fedExFreightAccountNumber']);
                unset($data['fedExFreightAccountNumber']);
            }
            if (\array_key_exists('declaredValueUnits', $data)) {
                $object->setDeclaredValueUnits($data['declaredValueUnits']);
                unset($data['declaredValueUnits']);
            }
            if (\array_key_exists('printedReferences', $data)) {
                $values_1 = [];
                foreach ($data['printedReferences'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailPrintedReferencesItem::class, 'json', $context);
                }
                $object->setPrintedReferences($values_1);
                unset($data['printedReferences']);
            }
            if (\array_key_exists('hazardousMaterialsEmergencyContactNumber', $data)) {
                $object->setHazardousMaterialsEmergencyContactNumber($this->denormalizer->denormalize($data['hazardousMaterialsEmergencyContactNumber'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailHazardousMaterialsEmergencyContactNumber::class, 'json', $context));
                unset($data['hazardousMaterialsEmergencyContactNumber']);
            }
            if (\array_key_exists('lineItem', $data)) {
                $values_2 = [];
                foreach ($data['lineItem'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItem::class, 'json', $context);
                }
                $object->setLineItem($values_2);
                unset($data['lineItem']);
            }
            if (\array_key_exists('clientDiscountPercent', $data)) {
                $object->setClientDiscountPercent($data['clientDiscountPercent']);
                unset($data['clientDiscountPercent']);
            }
            if (\array_key_exists('coupons', $data)) {
                $values_3 = [];
                foreach ($data['coupons'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setCoupons($values_3);
                unset($data['coupons']);
            }
            if (\array_key_exists('fedExFreightBillingContactAndAddress', $data)) {
                $object->setFedExFreightBillingContactAndAddress($this->denormalizer->denormalize($data['fedExFreightBillingContactAndAddress'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailFedExFreightBillingContactAndAddress::class, 'json', $context));
                unset($data['fedExFreightBillingContactAndAddress']);
            }
            if (\array_key_exists('aliasID', $data)) {
                $object->setAliasID($data['aliasID']);
                unset($data['aliasID']);
            }
            if (\array_key_exists('collectTermsType', $data)) {
                $object->setCollectTermsType($data['collectTermsType']);
                unset($data['collectTermsType']);
            }
            if (\array_key_exists('hazardousMaterialsOfferor', $data)) {
                $object->setHazardousMaterialsOfferor($data['hazardousMaterialsOfferor']);
                unset($data['hazardousMaterialsOfferor']);
            }
            if (\array_key_exists('declaredValuePerUnit', $data)) {
                $object->setDeclaredValuePerUnit($this->denormalizer->denormalize($data['declaredValuePerUnit'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailDeclaredValuePerUnit::class, 'json', $context));
                unset($data['declaredValuePerUnit']);
            }
            if (\array_key_exists('totalHandlingUnits', $data)) {
                $object->setTotalHandlingUnits($data['totalHandlingUnits']);
                unset($data['totalHandlingUnits']);
            }
            if (\array_key_exists('alternateBillingParty', $data)) {
                $object->setAlternateBillingParty($this->denormalizer->denormalize($data['alternateBillingParty'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingParty::class, 'json', $context));
                unset($data['alternateBillingParty']);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
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
            if ($object->isInitialized('specialServicePayments') && null !== $object->getSpecialServicePayments()) {
                $values = [];
                foreach ($object->getSpecialServicePayments() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['specialServicePayments'] = $values;
            }
            if ($object->isInitialized('liabilityCoverageDetail') && null !== $object->getLiabilityCoverageDetail()) {
                $data['liabilityCoverageDetail'] = $this->normalizer->normalize($object->getLiabilityCoverageDetail(), 'json', $context);
            }
            if ($object->isInitialized('fedExFreightAccountNumber') && null !== $object->getFedExFreightAccountNumber()) {
                $data['fedExFreightAccountNumber'] = $object->getFedExFreightAccountNumber();
            }
            if ($object->isInitialized('declaredValueUnits') && null !== $object->getDeclaredValueUnits()) {
                $data['declaredValueUnits'] = $object->getDeclaredValueUnits();
            }
            if ($object->isInitialized('printedReferences') && null !== $object->getPrintedReferences()) {
                $values_1 = [];
                foreach ($object->getPrintedReferences() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['printedReferences'] = $values_1;
            }
            if ($object->isInitialized('hazardousMaterialsEmergencyContactNumber') && null !== $object->getHazardousMaterialsEmergencyContactNumber()) {
                $data['hazardousMaterialsEmergencyContactNumber'] = $this->normalizer->normalize($object->getHazardousMaterialsEmergencyContactNumber(), 'json', $context);
            }
            $values_2 = [];
            foreach ($object->getLineItem() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['lineItem'] = $values_2;
            if ($object->isInitialized('clientDiscountPercent') && null !== $object->getClientDiscountPercent()) {
                $data['clientDiscountPercent'] = $object->getClientDiscountPercent();
            }
            if ($object->isInitialized('coupons') && null !== $object->getCoupons()) {
                $values_3 = [];
                foreach ($object->getCoupons() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['coupons'] = $values_3;
            }
            $data['fedExFreightBillingContactAndAddress'] = $this->normalizer->normalize($object->getFedExFreightBillingContactAndAddress(), 'json', $context);
            if ($object->isInitialized('aliasID') && null !== $object->getAliasID()) {
                $data['aliasID'] = $object->getAliasID();
            }
            if ($object->isInitialized('collectTermsType') && null !== $object->getCollectTermsType()) {
                $data['collectTermsType'] = $object->getCollectTermsType();
            }
            if ($object->isInitialized('hazardousMaterialsOfferor') && null !== $object->getHazardousMaterialsOfferor()) {
                $data['hazardousMaterialsOfferor'] = $object->getHazardousMaterialsOfferor();
            }
            if ($object->isInitialized('declaredValuePerUnit') && null !== $object->getDeclaredValuePerUnit()) {
                $data['declaredValuePerUnit'] = $this->normalizer->normalize($object->getDeclaredValuePerUnit(), 'json', $context);
            }
            $data['totalHandlingUnits'] = $object->getTotalHandlingUnits();
            if ($object->isInitialized('alternateBillingParty') && null !== $object->getAlternateBillingParty()) {
                $data['alternateBillingParty'] = $this->normalizer->normalize($object->getAlternateBillingParty(), 'json', $context);
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetail::class => false];
        }
    }
}
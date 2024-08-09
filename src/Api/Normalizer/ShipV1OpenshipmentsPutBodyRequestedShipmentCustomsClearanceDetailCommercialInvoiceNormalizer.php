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
    class ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('originatorName', $data)) {
                $object->setOriginatorName($data['originatorName']);
                unset($data['originatorName']);
            }
            if (\array_key_exists('comments', $data)) {
                $values = [];
                foreach ($data['comments'] as $value) {
                    $values[] = $value;
                }
                $object->setComments($values);
                unset($data['comments']);
            }
            if (\array_key_exists('customerReferences', $data)) {
                $values_1 = [];
                foreach ($data['customerReferences'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoiceCustomerReferencesItem::class, 'json', $context);
                }
                $object->setCustomerReferences($values_1);
                unset($data['customerReferences']);
            }
            if (\array_key_exists('taxesOrMiscellaneousCharge', $data)) {
                $object->setTaxesOrMiscellaneousCharge($this->denormalizer->denormalize($data['taxesOrMiscellaneousCharge'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoiceTaxesOrMiscellaneousCharge::class, 'json', $context));
                unset($data['taxesOrMiscellaneousCharge']);
            }
            if (\array_key_exists('taxesOrMiscellaneousChargeType', $data)) {
                $object->setTaxesOrMiscellaneousChargeType($data['taxesOrMiscellaneousChargeType']);
                unset($data['taxesOrMiscellaneousChargeType']);
            }
            if (\array_key_exists('freightCharge', $data)) {
                $object->setFreightCharge($this->denormalizer->denormalize($data['freightCharge'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoiceFreightCharge::class, 'json', $context));
                unset($data['freightCharge']);
            }
            if (\array_key_exists('packingCosts', $data)) {
                $object->setPackingCosts($this->denormalizer->denormalize($data['packingCosts'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoicePackingCosts::class, 'json', $context));
                unset($data['packingCosts']);
            }
            if (\array_key_exists('handlingCosts', $data)) {
                $object->setHandlingCosts($this->denormalizer->denormalize($data['handlingCosts'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoiceHandlingCosts::class, 'json', $context));
                unset($data['handlingCosts']);
            }
            if (\array_key_exists('declarationStatement', $data)) {
                $object->setDeclarationStatement($data['declarationStatement']);
                unset($data['declarationStatement']);
            }
            if (\array_key_exists('termsOfSale', $data)) {
                $object->setTermsOfSale($data['termsOfSale']);
                unset($data['termsOfSale']);
            }
            if (\array_key_exists('specialInstructions', $data)) {
                $object->setSpecialInstructions($data['specialInstructions']);
                unset($data['specialInstructions']);
            }
            if (\array_key_exists('shipmentPurpose', $data)) {
                $object->setShipmentPurpose($data['shipmentPurpose']);
                unset($data['shipmentPurpose']);
            }
            if (\array_key_exists('emailNotificationDetail', $data)) {
                $object->setEmailNotificationDetail($this->denormalizer->denormalize($data['emailNotificationDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoiceEmailNotificationDetail::class, 'json', $context));
                unset($data['emailNotificationDetail']);
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
            if ($object->isInitialized('originatorName') && null !== $object->getOriginatorName()) {
                $data['originatorName'] = $object->getOriginatorName();
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $values = [];
                foreach ($object->getComments() as $value) {
                    $values[] = $value;
                }
                $data['comments'] = $values;
            }
            if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
                $values_1 = [];
                foreach ($object->getCustomerReferences() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['customerReferences'] = $values_1;
            }
            if ($object->isInitialized('taxesOrMiscellaneousCharge') && null !== $object->getTaxesOrMiscellaneousCharge()) {
                $data['taxesOrMiscellaneousCharge'] = $this->normalizer->normalize($object->getTaxesOrMiscellaneousCharge(), 'json', $context);
            }
            if ($object->isInitialized('taxesOrMiscellaneousChargeType') && null !== $object->getTaxesOrMiscellaneousChargeType()) {
                $data['taxesOrMiscellaneousChargeType'] = $object->getTaxesOrMiscellaneousChargeType();
            }
            if ($object->isInitialized('freightCharge') && null !== $object->getFreightCharge()) {
                $data['freightCharge'] = $this->normalizer->normalize($object->getFreightCharge(), 'json', $context);
            }
            if ($object->isInitialized('packingCosts') && null !== $object->getPackingCosts()) {
                $data['packingCosts'] = $this->normalizer->normalize($object->getPackingCosts(), 'json', $context);
            }
            if ($object->isInitialized('handlingCosts') && null !== $object->getHandlingCosts()) {
                $data['handlingCosts'] = $this->normalizer->normalize($object->getHandlingCosts(), 'json', $context);
            }
            if ($object->isInitialized('declarationStatement') && null !== $object->getDeclarationStatement()) {
                $data['declarationStatement'] = $object->getDeclarationStatement();
            }
            if ($object->isInitialized('termsOfSale') && null !== $object->getTermsOfSale()) {
                $data['termsOfSale'] = $object->getTermsOfSale();
            }
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $data['specialInstructions'] = $object->getSpecialInstructions();
            }
            if ($object->isInitialized('shipmentPurpose') && null !== $object->getShipmentPurpose()) {
                $data['shipmentPurpose'] = $object->getShipmentPurpose();
            }
            if ($object->isInitialized('emailNotificationDetail') && null !== $object->getEmailNotificationDetail()) {
                $data['emailNotificationDetail'] = $this->normalizer->normalize($object->getEmailNotificationDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice::class => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('originatorName', $data)) {
                $object->setOriginatorName($data['originatorName']);
                unset($data['originatorName']);
            }
            if (\array_key_exists('comments', $data)) {
                $values = [];
                foreach ($data['comments'] as $value) {
                    $values[] = $value;
                }
                $object->setComments($values);
                unset($data['comments']);
            }
            if (\array_key_exists('customerReferences', $data)) {
                $values_1 = [];
                foreach ($data['customerReferences'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoiceCustomerReferencesItem::class, 'json', $context);
                }
                $object->setCustomerReferences($values_1);
                unset($data['customerReferences']);
            }
            if (\array_key_exists('taxesOrMiscellaneousCharge', $data)) {
                $object->setTaxesOrMiscellaneousCharge($this->denormalizer->denormalize($data['taxesOrMiscellaneousCharge'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoiceTaxesOrMiscellaneousCharge::class, 'json', $context));
                unset($data['taxesOrMiscellaneousCharge']);
            }
            if (\array_key_exists('taxesOrMiscellaneousChargeType', $data)) {
                $object->setTaxesOrMiscellaneousChargeType($data['taxesOrMiscellaneousChargeType']);
                unset($data['taxesOrMiscellaneousChargeType']);
            }
            if (\array_key_exists('freightCharge', $data)) {
                $object->setFreightCharge($this->denormalizer->denormalize($data['freightCharge'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoiceFreightCharge::class, 'json', $context));
                unset($data['freightCharge']);
            }
            if (\array_key_exists('packingCosts', $data)) {
                $object->setPackingCosts($this->denormalizer->denormalize($data['packingCosts'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoicePackingCosts::class, 'json', $context));
                unset($data['packingCosts']);
            }
            if (\array_key_exists('handlingCosts', $data)) {
                $object->setHandlingCosts($this->denormalizer->denormalize($data['handlingCosts'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoiceHandlingCosts::class, 'json', $context));
                unset($data['handlingCosts']);
            }
            if (\array_key_exists('declarationStatement', $data)) {
                $object->setDeclarationStatement($data['declarationStatement']);
                unset($data['declarationStatement']);
            }
            if (\array_key_exists('termsOfSale', $data)) {
                $object->setTermsOfSale($data['termsOfSale']);
                unset($data['termsOfSale']);
            }
            if (\array_key_exists('specialInstructions', $data)) {
                $object->setSpecialInstructions($data['specialInstructions']);
                unset($data['specialInstructions']);
            }
            if (\array_key_exists('shipmentPurpose', $data)) {
                $object->setShipmentPurpose($data['shipmentPurpose']);
                unset($data['shipmentPurpose']);
            }
            if (\array_key_exists('emailNotificationDetail', $data)) {
                $object->setEmailNotificationDetail($this->denormalizer->denormalize($data['emailNotificationDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoiceEmailNotificationDetail::class, 'json', $context));
                unset($data['emailNotificationDetail']);
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
            if ($object->isInitialized('originatorName') && null !== $object->getOriginatorName()) {
                $data['originatorName'] = $object->getOriginatorName();
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $values = [];
                foreach ($object->getComments() as $value) {
                    $values[] = $value;
                }
                $data['comments'] = $values;
            }
            if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
                $values_1 = [];
                foreach ($object->getCustomerReferences() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['customerReferences'] = $values_1;
            }
            if ($object->isInitialized('taxesOrMiscellaneousCharge') && null !== $object->getTaxesOrMiscellaneousCharge()) {
                $data['taxesOrMiscellaneousCharge'] = $this->normalizer->normalize($object->getTaxesOrMiscellaneousCharge(), 'json', $context);
            }
            if ($object->isInitialized('taxesOrMiscellaneousChargeType') && null !== $object->getTaxesOrMiscellaneousChargeType()) {
                $data['taxesOrMiscellaneousChargeType'] = $object->getTaxesOrMiscellaneousChargeType();
            }
            if ($object->isInitialized('freightCharge') && null !== $object->getFreightCharge()) {
                $data['freightCharge'] = $this->normalizer->normalize($object->getFreightCharge(), 'json', $context);
            }
            if ($object->isInitialized('packingCosts') && null !== $object->getPackingCosts()) {
                $data['packingCosts'] = $this->normalizer->normalize($object->getPackingCosts(), 'json', $context);
            }
            if ($object->isInitialized('handlingCosts') && null !== $object->getHandlingCosts()) {
                $data['handlingCosts'] = $this->normalizer->normalize($object->getHandlingCosts(), 'json', $context);
            }
            if ($object->isInitialized('declarationStatement') && null !== $object->getDeclarationStatement()) {
                $data['declarationStatement'] = $object->getDeclarationStatement();
            }
            if ($object->isInitialized('termsOfSale') && null !== $object->getTermsOfSale()) {
                $data['termsOfSale'] = $object->getTermsOfSale();
            }
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $data['specialInstructions'] = $object->getSpecialInstructions();
            }
            if ($object->isInitialized('shipmentPurpose') && null !== $object->getShipmentPurpose()) {
                $data['shipmentPurpose'] = $object->getShipmentPurpose();
            }
            if ($object->isInitialized('emailNotificationDetail') && null !== $object->getEmailNotificationDetail()) {
                $data['emailNotificationDetail'] = $this->normalizer->normalize($object->getEmailNotificationDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice::class => false];
        }
    }
}
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
    class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('regulatoryControls', $data)) {
                $values = [];
                foreach ($data['regulatoryControls'] as $value) {
                    $values[] = $value;
                }
                $object->setRegulatoryControls($values);
                unset($data['regulatoryControls']);
            }
            if (\array_key_exists('brokers', $data)) {
                $values_1 = [];
                foreach ($data['brokers'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailBrokersItem', 'json', $context);
                }
                $object->setBrokers($values_1);
                unset($data['brokers']);
            }
            if (\array_key_exists('commercialInvoice', $data)) {
                $object->setCommercialInvoice($this->denormalizer->denormalize($data['commercialInvoice'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoice', 'json', $context));
                unset($data['commercialInvoice']);
            }
            if (\array_key_exists('freightOnValue', $data)) {
                $object->setFreightOnValue($data['freightOnValue']);
                unset($data['freightOnValue']);
            }
            if (\array_key_exists('dutiesPayment', $data)) {
                $object->setDutiesPayment($this->denormalizer->denormalize($data['dutiesPayment'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPayment', 'json', $context));
                unset($data['dutiesPayment']);
            }
            if (\array_key_exists('commodities', $data)) {
                $values_2 = [];
                foreach ($data['commodities'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItem', 'json', $context);
                }
                $object->setCommodities($values_2);
                unset($data['commodities']);
            }
            if (\array_key_exists('isDocumentOnly', $data)) {
                $object->setIsDocumentOnly($data['isDocumentOnly']);
                unset($data['isDocumentOnly']);
            }
            if (\array_key_exists('recipientCustomsId', $data)) {
                $object->setRecipientCustomsId($this->denormalizer->denormalize($data['recipientCustomsId'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailRecipientCustomsId', 'json', $context));
                unset($data['recipientCustomsId']);
            }
            if (\array_key_exists('customsOption', $data)) {
                $object->setCustomsOption($this->denormalizer->denormalize($data['customsOption'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCustomsOption', 'json', $context));
                unset($data['customsOption']);
            }
            if (\array_key_exists('importerOfRecord', $data)) {
                $object->setImporterOfRecord($this->denormalizer->denormalize($data['importerOfRecord'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecord', 'json', $context));
                unset($data['importerOfRecord']);
            }
            if (\array_key_exists('generatedDocumentLocale', $data)) {
                $object->setGeneratedDocumentLocale($data['generatedDocumentLocale']);
                unset($data['generatedDocumentLocale']);
            }
            if (\array_key_exists('exportDetail', $data)) {
                $object->setExportDetail($this->denormalizer->denormalize($data['exportDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailExportDetail', 'json', $context));
                unset($data['exportDetail']);
            }
            if (\array_key_exists('totalCustomsValue', $data)) {
                $object->setTotalCustomsValue($this->denormalizer->denormalize($data['totalCustomsValue'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailTotalCustomsValue', 'json', $context));
                unset($data['totalCustomsValue']);
            }
            if (\array_key_exists('partiesToTransactionAreRelated', $data)) {
                $object->setPartiesToTransactionAreRelated($data['partiesToTransactionAreRelated']);
                unset($data['partiesToTransactionAreRelated']);
            }
            if (\array_key_exists('declarationStatementDetail', $data)) {
                $object->setDeclarationStatementDetail($this->denormalizer->denormalize($data['declarationStatementDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail', 'json', $context));
                unset($data['declarationStatementDetail']);
            }
            if (\array_key_exists('insuranceCharge', $data)) {
                $object->setInsuranceCharge($this->denormalizer->denormalize($data['insuranceCharge'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailInsuranceCharge', 'json', $context));
                unset($data['insuranceCharge']);
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
            if ($object->isInitialized('regulatoryControls') && null !== $object->getRegulatoryControls()) {
                $values = [];
                foreach ($object->getRegulatoryControls() as $value) {
                    $values[] = $value;
                }
                $data['regulatoryControls'] = $values;
            }
            if ($object->isInitialized('brokers') && null !== $object->getBrokers()) {
                $values_1 = [];
                foreach ($object->getBrokers() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['brokers'] = $values_1;
            }
            $data['commercialInvoice'] = $this->normalizer->normalize($object->getCommercialInvoice(), 'json', $context);
            if ($object->isInitialized('freightOnValue') && null !== $object->getFreightOnValue()) {
                $data['freightOnValue'] = $object->getFreightOnValue();
            }
            if ($object->isInitialized('dutiesPayment') && null !== $object->getDutiesPayment()) {
                $data['dutiesPayment'] = $this->normalizer->normalize($object->getDutiesPayment(), 'json', $context);
            }
            $values_2 = [];
            foreach ($object->getCommodities() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['commodities'] = $values_2;
            if ($object->isInitialized('isDocumentOnly') && null !== $object->getIsDocumentOnly()) {
                $data['isDocumentOnly'] = $object->getIsDocumentOnly();
            }
            if ($object->isInitialized('recipientCustomsId') && null !== $object->getRecipientCustomsId()) {
                $data['recipientCustomsId'] = $this->normalizer->normalize($object->getRecipientCustomsId(), 'json', $context);
            }
            if ($object->isInitialized('customsOption') && null !== $object->getCustomsOption()) {
                $data['customsOption'] = $this->normalizer->normalize($object->getCustomsOption(), 'json', $context);
            }
            if ($object->isInitialized('importerOfRecord') && null !== $object->getImporterOfRecord()) {
                $data['importerOfRecord'] = $this->normalizer->normalize($object->getImporterOfRecord(), 'json', $context);
            }
            if ($object->isInitialized('generatedDocumentLocale') && null !== $object->getGeneratedDocumentLocale()) {
                $data['generatedDocumentLocale'] = $object->getGeneratedDocumentLocale();
            }
            if ($object->isInitialized('exportDetail') && null !== $object->getExportDetail()) {
                $data['exportDetail'] = $this->normalizer->normalize($object->getExportDetail(), 'json', $context);
            }
            if ($object->isInitialized('totalCustomsValue') && null !== $object->getTotalCustomsValue()) {
                $data['totalCustomsValue'] = $this->normalizer->normalize($object->getTotalCustomsValue(), 'json', $context);
            }
            if ($object->isInitialized('partiesToTransactionAreRelated') && null !== $object->getPartiesToTransactionAreRelated()) {
                $data['partiesToTransactionAreRelated'] = $object->getPartiesToTransactionAreRelated();
            }
            if ($object->isInitialized('declarationStatementDetail') && null !== $object->getDeclarationStatementDetail()) {
                $data['declarationStatementDetail'] = $this->normalizer->normalize($object->getDeclarationStatementDetail(), 'json', $context);
            }
            if ($object->isInitialized('insuranceCharge') && null !== $object->getInsuranceCharge()) {
                $data['insuranceCharge'] = $this->normalizer->normalize($object->getInsuranceCharge(), 'json', $context);
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetail' => false];
        }
    }
} else {
    class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetail';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('regulatoryControls', $data)) {
                $values = [];
                foreach ($data['regulatoryControls'] as $value) {
                    $values[] = $value;
                }
                $object->setRegulatoryControls($values);
                unset($data['regulatoryControls']);
            }
            if (\array_key_exists('brokers', $data)) {
                $values_1 = [];
                foreach ($data['brokers'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailBrokersItem', 'json', $context);
                }
                $object->setBrokers($values_1);
                unset($data['brokers']);
            }
            if (\array_key_exists('commercialInvoice', $data)) {
                $object->setCommercialInvoice($this->denormalizer->denormalize($data['commercialInvoice'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoice', 'json', $context));
                unset($data['commercialInvoice']);
            }
            if (\array_key_exists('freightOnValue', $data)) {
                $object->setFreightOnValue($data['freightOnValue']);
                unset($data['freightOnValue']);
            }
            if (\array_key_exists('dutiesPayment', $data)) {
                $object->setDutiesPayment($this->denormalizer->denormalize($data['dutiesPayment'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPayment', 'json', $context));
                unset($data['dutiesPayment']);
            }
            if (\array_key_exists('commodities', $data)) {
                $values_2 = [];
                foreach ($data['commodities'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommoditiesItem', 'json', $context);
                }
                $object->setCommodities($values_2);
                unset($data['commodities']);
            }
            if (\array_key_exists('isDocumentOnly', $data)) {
                $object->setIsDocumentOnly($data['isDocumentOnly']);
                unset($data['isDocumentOnly']);
            }
            if (\array_key_exists('recipientCustomsId', $data)) {
                $object->setRecipientCustomsId($this->denormalizer->denormalize($data['recipientCustomsId'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailRecipientCustomsId', 'json', $context));
                unset($data['recipientCustomsId']);
            }
            if (\array_key_exists('customsOption', $data)) {
                $object->setCustomsOption($this->denormalizer->denormalize($data['customsOption'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCustomsOption', 'json', $context));
                unset($data['customsOption']);
            }
            if (\array_key_exists('importerOfRecord', $data)) {
                $object->setImporterOfRecord($this->denormalizer->denormalize($data['importerOfRecord'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecord', 'json', $context));
                unset($data['importerOfRecord']);
            }
            if (\array_key_exists('generatedDocumentLocale', $data)) {
                $object->setGeneratedDocumentLocale($data['generatedDocumentLocale']);
                unset($data['generatedDocumentLocale']);
            }
            if (\array_key_exists('exportDetail', $data)) {
                $object->setExportDetail($this->denormalizer->denormalize($data['exportDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailExportDetail', 'json', $context));
                unset($data['exportDetail']);
            }
            if (\array_key_exists('totalCustomsValue', $data)) {
                $object->setTotalCustomsValue($this->denormalizer->denormalize($data['totalCustomsValue'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailTotalCustomsValue', 'json', $context));
                unset($data['totalCustomsValue']);
            }
            if (\array_key_exists('partiesToTransactionAreRelated', $data)) {
                $object->setPartiesToTransactionAreRelated($data['partiesToTransactionAreRelated']);
                unset($data['partiesToTransactionAreRelated']);
            }
            if (\array_key_exists('declarationStatementDetail', $data)) {
                $object->setDeclarationStatementDetail($this->denormalizer->denormalize($data['declarationStatementDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail', 'json', $context));
                unset($data['declarationStatementDetail']);
            }
            if (\array_key_exists('insuranceCharge', $data)) {
                $object->setInsuranceCharge($this->denormalizer->denormalize($data['insuranceCharge'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailInsuranceCharge', 'json', $context));
                unset($data['insuranceCharge']);
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
            if ($object->isInitialized('regulatoryControls') && null !== $object->getRegulatoryControls()) {
                $values = [];
                foreach ($object->getRegulatoryControls() as $value) {
                    $values[] = $value;
                }
                $data['regulatoryControls'] = $values;
            }
            if ($object->isInitialized('brokers') && null !== $object->getBrokers()) {
                $values_1 = [];
                foreach ($object->getBrokers() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['brokers'] = $values_1;
            }
            $data['commercialInvoice'] = $this->normalizer->normalize($object->getCommercialInvoice(), 'json', $context);
            if ($object->isInitialized('freightOnValue') && null !== $object->getFreightOnValue()) {
                $data['freightOnValue'] = $object->getFreightOnValue();
            }
            if ($object->isInitialized('dutiesPayment') && null !== $object->getDutiesPayment()) {
                $data['dutiesPayment'] = $this->normalizer->normalize($object->getDutiesPayment(), 'json', $context);
            }
            $values_2 = [];
            foreach ($object->getCommodities() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['commodities'] = $values_2;
            if ($object->isInitialized('isDocumentOnly') && null !== $object->getIsDocumentOnly()) {
                $data['isDocumentOnly'] = $object->getIsDocumentOnly();
            }
            if ($object->isInitialized('recipientCustomsId') && null !== $object->getRecipientCustomsId()) {
                $data['recipientCustomsId'] = $this->normalizer->normalize($object->getRecipientCustomsId(), 'json', $context);
            }
            if ($object->isInitialized('customsOption') && null !== $object->getCustomsOption()) {
                $data['customsOption'] = $this->normalizer->normalize($object->getCustomsOption(), 'json', $context);
            }
            if ($object->isInitialized('importerOfRecord') && null !== $object->getImporterOfRecord()) {
                $data['importerOfRecord'] = $this->normalizer->normalize($object->getImporterOfRecord(), 'json', $context);
            }
            if ($object->isInitialized('generatedDocumentLocale') && null !== $object->getGeneratedDocumentLocale()) {
                $data['generatedDocumentLocale'] = $object->getGeneratedDocumentLocale();
            }
            if ($object->isInitialized('exportDetail') && null !== $object->getExportDetail()) {
                $data['exportDetail'] = $this->normalizer->normalize($object->getExportDetail(), 'json', $context);
            }
            if ($object->isInitialized('totalCustomsValue') && null !== $object->getTotalCustomsValue()) {
                $data['totalCustomsValue'] = $this->normalizer->normalize($object->getTotalCustomsValue(), 'json', $context);
            }
            if ($object->isInitialized('partiesToTransactionAreRelated') && null !== $object->getPartiesToTransactionAreRelated()) {
                $data['partiesToTransactionAreRelated'] = $object->getPartiesToTransactionAreRelated();
            }
            if ($object->isInitialized('declarationStatementDetail') && null !== $object->getDeclarationStatementDetail()) {
                $data['declarationStatementDetail'] = $this->normalizer->normalize($object->getDeclarationStatementDetail(), 'json', $context);
            }
            if ($object->isInitialized('insuranceCharge') && null !== $object->getInsuranceCharge()) {
                $data['insuranceCharge'] = $this->normalizer->normalize($object->getInsuranceCharge(), 'json', $context);
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetail' => false];
        }
    }
}
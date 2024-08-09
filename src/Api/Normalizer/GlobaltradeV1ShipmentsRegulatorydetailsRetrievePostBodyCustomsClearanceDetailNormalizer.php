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
    class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetail();
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
            if (\array_key_exists('insuranceCharges', $data)) {
                $object->setInsuranceCharges($this->denormalizer->denormalize($data['insuranceCharges'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailinsuranceCharges::class, 'json', $context));
                unset($data['insuranceCharges']);
            }
            if (\array_key_exists('importerOfRecordAccountNumber', $data)) {
                $object->setImporterOfRecordAccountNumber($this->denormalizer->denormalize($data['importerOfRecordAccountNumber'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailimporterOfRecordAccountNumber::class, 'json', $context));
                unset($data['importerOfRecordAccountNumber']);
            }
            if (\array_key_exists('customsValue', $data)) {
                $object->setCustomsValue($this->denormalizer->denormalize($data['customsValue'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcustomsValue::class, 'json', $context));
                unset($data['customsValue']);
            }
            if (\array_key_exists('commercialInvoice', $data)) {
                $object->setCommercialInvoice($this->denormalizer->denormalize($data['commercialInvoice'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommercialInvoice::class, 'json', $context));
                unset($data['commercialInvoice']);
            }
            if (\array_key_exists('commodities', $data)) {
                $values_1 = [];
                foreach ($data['commodities'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItem::class, 'json', $context);
                }
                $object->setCommodities($values_1);
                unset($data['commodities']);
            }
            if (\array_key_exists('documentContent', $data)) {
                $object->setDocumentContent($data['documentContent']);
                unset($data['documentContent']);
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
            if ($object->isInitialized('regulatoryControls') && null !== $object->getRegulatoryControls()) {
                $values = [];
                foreach ($object->getRegulatoryControls() as $value) {
                    $values[] = $value;
                }
                $data['regulatoryControls'] = $values;
            }
            if ($object->isInitialized('insuranceCharges') && null !== $object->getInsuranceCharges()) {
                $data['insuranceCharges'] = $this->normalizer->normalize($object->getInsuranceCharges(), 'json', $context);
            }
            if ($object->isInitialized('importerOfRecordAccountNumber') && null !== $object->getImporterOfRecordAccountNumber()) {
                $data['importerOfRecordAccountNumber'] = $this->normalizer->normalize($object->getImporterOfRecordAccountNumber(), 'json', $context);
            }
            $data['customsValue'] = $this->normalizer->normalize($object->getCustomsValue(), 'json', $context);
            if ($object->isInitialized('commercialInvoice') && null !== $object->getCommercialInvoice()) {
                $data['commercialInvoice'] = $this->normalizer->normalize($object->getCommercialInvoice(), 'json', $context);
            }
            $values_1 = [];
            foreach ($object->getCommodities() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['commodities'] = $values_1;
            if ($object->isInitialized('documentContent') && null !== $object->getDocumentContent()) {
                $data['documentContent'] = $object->getDocumentContent();
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
            return [\AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetail::class => false];
        }
    }
} else {
    class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetail::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetail();
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
            if (\array_key_exists('insuranceCharges', $data)) {
                $object->setInsuranceCharges($this->denormalizer->denormalize($data['insuranceCharges'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailinsuranceCharges::class, 'json', $context));
                unset($data['insuranceCharges']);
            }
            if (\array_key_exists('importerOfRecordAccountNumber', $data)) {
                $object->setImporterOfRecordAccountNumber($this->denormalizer->denormalize($data['importerOfRecordAccountNumber'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailimporterOfRecordAccountNumber::class, 'json', $context));
                unset($data['importerOfRecordAccountNumber']);
            }
            if (\array_key_exists('customsValue', $data)) {
                $object->setCustomsValue($this->denormalizer->denormalize($data['customsValue'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcustomsValue::class, 'json', $context));
                unset($data['customsValue']);
            }
            if (\array_key_exists('commercialInvoice', $data)) {
                $object->setCommercialInvoice($this->denormalizer->denormalize($data['commercialInvoice'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommercialInvoice::class, 'json', $context));
                unset($data['commercialInvoice']);
            }
            if (\array_key_exists('commodities', $data)) {
                $values_1 = [];
                foreach ($data['commodities'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItem::class, 'json', $context);
                }
                $object->setCommodities($values_1);
                unset($data['commodities']);
            }
            if (\array_key_exists('documentContent', $data)) {
                $object->setDocumentContent($data['documentContent']);
                unset($data['documentContent']);
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
            if ($object->isInitialized('regulatoryControls') && null !== $object->getRegulatoryControls()) {
                $values = [];
                foreach ($object->getRegulatoryControls() as $value) {
                    $values[] = $value;
                }
                $data['regulatoryControls'] = $values;
            }
            if ($object->isInitialized('insuranceCharges') && null !== $object->getInsuranceCharges()) {
                $data['insuranceCharges'] = $this->normalizer->normalize($object->getInsuranceCharges(), 'json', $context);
            }
            if ($object->isInitialized('importerOfRecordAccountNumber') && null !== $object->getImporterOfRecordAccountNumber()) {
                $data['importerOfRecordAccountNumber'] = $this->normalizer->normalize($object->getImporterOfRecordAccountNumber(), 'json', $context);
            }
            $data['customsValue'] = $this->normalizer->normalize($object->getCustomsValue(), 'json', $context);
            if ($object->isInitialized('commercialInvoice') && null !== $object->getCommercialInvoice()) {
                $data['commercialInvoice'] = $this->normalizer->normalize($object->getCommercialInvoice(), 'json', $context);
            }
            $values_1 = [];
            foreach ($object->getCommodities() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['commodities'] = $values_1;
            if ($object->isInitialized('documentContent') && null !== $object->getDocumentContent()) {
                $data['documentContent'] = $object->getDocumentContent();
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
            return [\AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetail::class => false];
        }
    }
}
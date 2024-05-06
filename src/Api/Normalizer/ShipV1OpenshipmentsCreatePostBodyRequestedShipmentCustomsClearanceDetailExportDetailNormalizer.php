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
    class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailExportDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('destinationControlDetail', $data)) {
                $object->setDestinationControlDetail($this->denormalizer->denormalize($data['destinationControlDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailExportDetailDestinationControlDetail', 'json', $context));
                unset($data['destinationControlDetail']);
            }
            if (\array_key_exists('b13AFilingOption', $data)) {
                $object->setB13AFilingOption($data['b13AFilingOption']);
                unset($data['b13AFilingOption']);
            }
            if (\array_key_exists('exportComplianceStatement', $data)) {
                $object->setExportComplianceStatement($data['exportComplianceStatement']);
                unset($data['exportComplianceStatement']);
            }
            if (\array_key_exists('permitNumber', $data)) {
                $object->setPermitNumber($data['permitNumber']);
                unset($data['permitNumber']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('destinationControlDetail') && null !== $object->getDestinationControlDetail()) {
                $data['destinationControlDetail'] = $this->normalizer->normalize($object->getDestinationControlDetail(), 'json', $context);
            }
            if ($object->isInitialized('b13AFilingOption') && null !== $object->getB13AFilingOption()) {
                $data['b13AFilingOption'] = $object->getB13AFilingOption();
            }
            if ($object->isInitialized('exportComplianceStatement') && null !== $object->getExportComplianceStatement()) {
                $data['exportComplianceStatement'] = $object->getExportComplianceStatement();
            }
            if ($object->isInitialized('permitNumber') && null !== $object->getPermitNumber()) {
                $data['permitNumber'] = $object->getPermitNumber();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailExportDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('destinationControlDetail', $data)) {
                $object->setDestinationControlDetail($this->denormalizer->denormalize($data['destinationControlDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailExportDetailDestinationControlDetail', 'json', $context));
                unset($data['destinationControlDetail']);
            }
            if (\array_key_exists('b13AFilingOption', $data)) {
                $object->setB13AFilingOption($data['b13AFilingOption']);
                unset($data['b13AFilingOption']);
            }
            if (\array_key_exists('exportComplianceStatement', $data)) {
                $object->setExportComplianceStatement($data['exportComplianceStatement']);
                unset($data['exportComplianceStatement']);
            }
            if (\array_key_exists('permitNumber', $data)) {
                $object->setPermitNumber($data['permitNumber']);
                unset($data['permitNumber']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('destinationControlDetail') && null !== $object->getDestinationControlDetail()) {
                $data['destinationControlDetail'] = $this->normalizer->normalize($object->getDestinationControlDetail(), 'json', $context);
            }
            if ($object->isInitialized('b13AFilingOption') && null !== $object->getB13AFilingOption()) {
                $data['b13AFilingOption'] = $object->getB13AFilingOption();
            }
            if ($object->isInitialized('exportComplianceStatement') && null !== $object->getExportComplianceStatement()) {
                $data['exportComplianceStatement'] = $object->getExportComplianceStatement();
            }
            if ($object->isInitialized('permitNumber') && null !== $object->getPermitNumber()) {
                $data['permitNumber'] = $object->getPermitNumber();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail' => false];
        }
    }
}
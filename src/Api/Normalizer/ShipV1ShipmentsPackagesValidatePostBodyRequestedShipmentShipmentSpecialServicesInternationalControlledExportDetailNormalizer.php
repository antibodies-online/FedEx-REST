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
    class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('licenseOrPermitExpirationDate', $data)) {
                $object->setLicenseOrPermitExpirationDate($data['licenseOrPermitExpirationDate']);
                unset($data['licenseOrPermitExpirationDate']);
            }
            if (\array_key_exists('licenseOrPermitNumber', $data)) {
                $object->setLicenseOrPermitNumber($data['licenseOrPermitNumber']);
                unset($data['licenseOrPermitNumber']);
            }
            if (\array_key_exists('entryNumber', $data)) {
                $object->setEntryNumber($data['entryNumber']);
                unset($data['entryNumber']);
            }
            if (\array_key_exists('foreignTradeZoneCode', $data)) {
                $object->setForeignTradeZoneCode($data['foreignTradeZoneCode']);
                unset($data['foreignTradeZoneCode']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
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
            if ($object->isInitialized('licenseOrPermitExpirationDate') && null !== $object->getLicenseOrPermitExpirationDate()) {
                $data['licenseOrPermitExpirationDate'] = $object->getLicenseOrPermitExpirationDate();
            }
            if ($object->isInitialized('licenseOrPermitNumber') && null !== $object->getLicenseOrPermitNumber()) {
                $data['licenseOrPermitNumber'] = $object->getLicenseOrPermitNumber();
            }
            if ($object->isInitialized('entryNumber') && null !== $object->getEntryNumber()) {
                $data['entryNumber'] = $object->getEntryNumber();
            }
            if ($object->isInitialized('foreignTradeZoneCode') && null !== $object->getForeignTradeZoneCode()) {
                $data['foreignTradeZoneCode'] = $object->getForeignTradeZoneCode();
            }
            $data['type'] = $object->getType();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail' => false];
        }
    }
} else {
    class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('licenseOrPermitExpirationDate', $data)) {
                $object->setLicenseOrPermitExpirationDate($data['licenseOrPermitExpirationDate']);
                unset($data['licenseOrPermitExpirationDate']);
            }
            if (\array_key_exists('licenseOrPermitNumber', $data)) {
                $object->setLicenseOrPermitNumber($data['licenseOrPermitNumber']);
                unset($data['licenseOrPermitNumber']);
            }
            if (\array_key_exists('entryNumber', $data)) {
                $object->setEntryNumber($data['entryNumber']);
                unset($data['entryNumber']);
            }
            if (\array_key_exists('foreignTradeZoneCode', $data)) {
                $object->setForeignTradeZoneCode($data['foreignTradeZoneCode']);
                unset($data['foreignTradeZoneCode']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
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
            if ($object->isInitialized('licenseOrPermitExpirationDate') && null !== $object->getLicenseOrPermitExpirationDate()) {
                $data['licenseOrPermitExpirationDate'] = $object->getLicenseOrPermitExpirationDate();
            }
            if ($object->isInitialized('licenseOrPermitNumber') && null !== $object->getLicenseOrPermitNumber()) {
                $data['licenseOrPermitNumber'] = $object->getLicenseOrPermitNumber();
            }
            if ($object->isInitialized('entryNumber') && null !== $object->getEntryNumber()) {
                $data['entryNumber'] = $object->getEntryNumber();
            }
            if ($object->isInitialized('foreignTradeZoneCode') && null !== $object->getForeignTradeZoneCode()) {
                $data['foreignTradeZoneCode'] = $object->getForeignTradeZoneCode();
            }
            $data['type'] = $object->getType();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail' => false];
        }
    }
}
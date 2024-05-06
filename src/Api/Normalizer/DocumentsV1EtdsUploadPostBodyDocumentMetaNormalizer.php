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
    class DocumentsV1EtdsUploadPostBodyDocumentMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\DocumentsV1EtdsUploadPostBodyDocumentMeta';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\DocumentsV1EtdsUploadPostBodyDocumentMeta';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostBodyDocumentMeta();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipDocumentType', $data)) {
                $object->setShipDocumentType($data['shipDocumentType']);
                unset($data['shipDocumentType']);
            }
            if (\array_key_exists('formCode', $data)) {
                $object->setFormCode($data['formCode']);
                unset($data['formCode']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('shipmentDate', $data)) {
                $object->setShipmentDate($data['shipmentDate']);
                unset($data['shipmentDate']);
            }
            if (\array_key_exists('originLocationCode', $data)) {
                $object->setOriginLocationCode($data['originLocationCode']);
                unset($data['originLocationCode']);
            }
            if (\array_key_exists('originCountryCode', $data)) {
                $object->setOriginCountryCode($data['originCountryCode']);
                unset($data['originCountryCode']);
            }
            if (\array_key_exists('destinationLocationCode', $data)) {
                $object->setDestinationLocationCode($data['destinationLocationCode']);
                unset($data['destinationLocationCode']);
            }
            if (\array_key_exists('destinationCountryCode', $data)) {
                $object->setDestinationCountryCode($data['destinationCountryCode']);
                unset($data['destinationCountryCode']);
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
            $data['shipDocumentType'] = $object->getShipDocumentType();
            if ($object->isInitialized('formCode') && null !== $object->getFormCode()) {
                $data['formCode'] = $object->getFormCode();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('shipmentDate') && null !== $object->getShipmentDate()) {
                $data['shipmentDate'] = $object->getShipmentDate();
            }
            if ($object->isInitialized('originLocationCode') && null !== $object->getOriginLocationCode()) {
                $data['originLocationCode'] = $object->getOriginLocationCode();
            }
            $data['originCountryCode'] = $object->getOriginCountryCode();
            if ($object->isInitialized('destinationLocationCode') && null !== $object->getDestinationLocationCode()) {
                $data['destinationLocationCode'] = $object->getDestinationLocationCode();
            }
            $data['destinationCountryCode'] = $object->getDestinationCountryCode();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\DocumentsV1EtdsUploadPostBodyDocumentMeta' => false];
        }
    }
} else {
    class DocumentsV1EtdsUploadPostBodyDocumentMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\DocumentsV1EtdsUploadPostBodyDocumentMeta';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\DocumentsV1EtdsUploadPostBodyDocumentMeta';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostBodyDocumentMeta();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipDocumentType', $data)) {
                $object->setShipDocumentType($data['shipDocumentType']);
                unset($data['shipDocumentType']);
            }
            if (\array_key_exists('formCode', $data)) {
                $object->setFormCode($data['formCode']);
                unset($data['formCode']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('shipmentDate', $data)) {
                $object->setShipmentDate($data['shipmentDate']);
                unset($data['shipmentDate']);
            }
            if (\array_key_exists('originLocationCode', $data)) {
                $object->setOriginLocationCode($data['originLocationCode']);
                unset($data['originLocationCode']);
            }
            if (\array_key_exists('originCountryCode', $data)) {
                $object->setOriginCountryCode($data['originCountryCode']);
                unset($data['originCountryCode']);
            }
            if (\array_key_exists('destinationLocationCode', $data)) {
                $object->setDestinationLocationCode($data['destinationLocationCode']);
                unset($data['destinationLocationCode']);
            }
            if (\array_key_exists('destinationCountryCode', $data)) {
                $object->setDestinationCountryCode($data['destinationCountryCode']);
                unset($data['destinationCountryCode']);
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
            $data['shipDocumentType'] = $object->getShipDocumentType();
            if ($object->isInitialized('formCode') && null !== $object->getFormCode()) {
                $data['formCode'] = $object->getFormCode();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('shipmentDate') && null !== $object->getShipmentDate()) {
                $data['shipmentDate'] = $object->getShipmentDate();
            }
            if ($object->isInitialized('originLocationCode') && null !== $object->getOriginLocationCode()) {
                $data['originLocationCode'] = $object->getOriginLocationCode();
            }
            $data['originCountryCode'] = $object->getOriginCountryCode();
            if ($object->isInitialized('destinationLocationCode') && null !== $object->getDestinationLocationCode()) {
                $data['destinationLocationCode'] = $object->getDestinationLocationCode();
            }
            $data['destinationCountryCode'] = $object->getDestinationCountryCode();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\DocumentsV1EtdsUploadPostBodyDocumentMeta' => false];
        }
    }
}
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
    class DocumentsV1EtdsEncodedmultiuploadPostBodyMetaDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBodyMetaDataItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBodyMetaDataItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBodyMetaDataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fileReferenceId', $data)) {
                $object->setFileReferenceId($data['fileReferenceId']);
                unset($data['fileReferenceId']);
            }
            if (\array_key_exists('contentType', $data)) {
                $object->setContentType($data['contentType']);
                unset($data['contentType']);
            }
            if (\array_key_exists('formCode', $data)) {
                $object->setFormCode($data['formCode']);
                unset($data['formCode']);
            }
            if (\array_key_exists('originLocationCode', $data)) {
                $object->setOriginLocationCode($data['originLocationCode']);
                unset($data['originLocationCode']);
            }
            if (\array_key_exists('destinationLocationCode', $data)) {
                $object->setDestinationLocationCode($data['destinationLocationCode']);
                unset($data['destinationLocationCode']);
            }
            if (\array_key_exists('shipDocumentType', $data)) {
                $object->setShipDocumentType($data['shipDocumentType']);
                unset($data['shipDocumentType']);
            }
            if (\array_key_exists('fileContentBase64', $data)) {
                $object->setFileContentBase64($data['fileContentBase64']);
                unset($data['fileContentBase64']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('fileReferenceId') && null !== $object->getFileReferenceId()) {
                $data['fileReferenceId'] = $object->getFileReferenceId();
            }
            $data['contentType'] = $object->getContentType();
            if ($object->isInitialized('formCode') && null !== $object->getFormCode()) {
                $data['formCode'] = $object->getFormCode();
            }
            if ($object->isInitialized('originLocationCode') && null !== $object->getOriginLocationCode()) {
                $data['originLocationCode'] = $object->getOriginLocationCode();
            }
            if ($object->isInitialized('destinationLocationCode') && null !== $object->getDestinationLocationCode()) {
                $data['destinationLocationCode'] = $object->getDestinationLocationCode();
            }
            $data['shipDocumentType'] = $object->getShipDocumentType();
            $data['fileContentBase64'] = $object->getFileContentBase64();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBodyMetaDataItem::class => false];
        }
    }
} else {
    class DocumentsV1EtdsEncodedmultiuploadPostBodyMetaDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBodyMetaDataItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBodyMetaDataItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBodyMetaDataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fileReferenceId', $data)) {
                $object->setFileReferenceId($data['fileReferenceId']);
                unset($data['fileReferenceId']);
            }
            if (\array_key_exists('contentType', $data)) {
                $object->setContentType($data['contentType']);
                unset($data['contentType']);
            }
            if (\array_key_exists('formCode', $data)) {
                $object->setFormCode($data['formCode']);
                unset($data['formCode']);
            }
            if (\array_key_exists('originLocationCode', $data)) {
                $object->setOriginLocationCode($data['originLocationCode']);
                unset($data['originLocationCode']);
            }
            if (\array_key_exists('destinationLocationCode', $data)) {
                $object->setDestinationLocationCode($data['destinationLocationCode']);
                unset($data['destinationLocationCode']);
            }
            if (\array_key_exists('shipDocumentType', $data)) {
                $object->setShipDocumentType($data['shipDocumentType']);
                unset($data['shipDocumentType']);
            }
            if (\array_key_exists('fileContentBase64', $data)) {
                $object->setFileContentBase64($data['fileContentBase64']);
                unset($data['fileContentBase64']);
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
            if ($object->isInitialized('fileReferenceId') && null !== $object->getFileReferenceId()) {
                $data['fileReferenceId'] = $object->getFileReferenceId();
            }
            $data['contentType'] = $object->getContentType();
            if ($object->isInitialized('formCode') && null !== $object->getFormCode()) {
                $data['formCode'] = $object->getFormCode();
            }
            if ($object->isInitialized('originLocationCode') && null !== $object->getOriginLocationCode()) {
                $data['originLocationCode'] = $object->getOriginLocationCode();
            }
            if ($object->isInitialized('destinationLocationCode') && null !== $object->getDestinationLocationCode()) {
                $data['destinationLocationCode'] = $object->getDestinationLocationCode();
            }
            $data['shipDocumentType'] = $object->getShipDocumentType();
            $data['fileContentBase64'] = $object->getFileContentBase64();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBodyMetaDataItem::class => false];
        }
    }
}
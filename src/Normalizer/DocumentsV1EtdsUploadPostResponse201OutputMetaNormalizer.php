<?php

namespace AntibodiesOnline\FedEx\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use AntibodiesOnline\FedEx\Runtime\Normalizer\CheckArray;
use AntibodiesOnline\FedEx\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class DocumentsV1EtdsUploadPostResponse201OutputMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\DocumentsV1EtdsUploadPostResponse201OutputMeta';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\DocumentsV1EtdsUploadPostResponse201OutputMeta';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\DocumentsV1EtdsUploadPostResponse201OutputMeta();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('documentType', $data)) {
                $object->setDocumentType($data['documentType']);
                unset($data['documentType']);
            }
            if (\array_key_exists('docId', $data)) {
                $object->setDocId($data['docId']);
                unset($data['docId']);
            }
            if (\array_key_exists('folderId', $data)) {
                $values = [];
                foreach ($data['folderId'] as $value) {
                    $values[] = $value;
                }
                $object->setFolderId($values);
                unset($data['folderId']);
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
            if ($object->isInitialized('documentType') && null !== $object->getDocumentType()) {
                $data['documentType'] = $object->getDocumentType();
            }
            if ($object->isInitialized('docId') && null !== $object->getDocId()) {
                $data['docId'] = $object->getDocId();
            }
            if ($object->isInitialized('folderId') && null !== $object->getFolderId()) {
                $values = [];
                foreach ($object->getFolderId() as $value) {
                    $values[] = $value;
                }
                $data['folderId'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Model\\DocumentsV1EtdsUploadPostResponse201OutputMeta' => false];
        }
    }
} else {
    class DocumentsV1EtdsUploadPostResponse201OutputMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\DocumentsV1EtdsUploadPostResponse201OutputMeta';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\DocumentsV1EtdsUploadPostResponse201OutputMeta';
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
            $object = new \AntibodiesOnline\FedEx\Model\DocumentsV1EtdsUploadPostResponse201OutputMeta();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('documentType', $data)) {
                $object->setDocumentType($data['documentType']);
                unset($data['documentType']);
            }
            if (\array_key_exists('docId', $data)) {
                $object->setDocId($data['docId']);
                unset($data['docId']);
            }
            if (\array_key_exists('folderId', $data)) {
                $values = [];
                foreach ($data['folderId'] as $value) {
                    $values[] = $value;
                }
                $object->setFolderId($values);
                unset($data['folderId']);
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
            if ($object->isInitialized('documentType') && null !== $object->getDocumentType()) {
                $data['documentType'] = $object->getDocumentType();
            }
            if ($object->isInitialized('docId') && null !== $object->getDocId()) {
                $data['docId'] = $object->getDocId();
            }
            if ($object->isInitialized('folderId') && null !== $object->getFolderId()) {
                $values = [];
                foreach ($object->getFolderId() as $value) {
                    $values[] = $value;
                }
                $data['folderId'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Model\\DocumentsV1EtdsUploadPostResponse201OutputMeta' => false];
        }
    }
}
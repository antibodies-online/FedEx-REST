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
    class DocumentsV1LhsimagesUploadPostBodyDocumentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostBodyDocument::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostBodyDocument::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostBodyDocument();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('referenceId', $data)) {
                $object->setReferenceId($data['referenceId']);
                unset($data['referenceId']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('contentType', $data)) {
                $object->setContentType($data['contentType']);
                unset($data['contentType']);
            }
            if (\array_key_exists('rules', $data)) {
                $object->setRules($this->denormalizer->denormalize($data['rules'], \AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostBodyDocumentRules::class, 'json', $context));
                unset($data['rules']);
            }
            if (\array_key_exists('meta', $data)) {
                $object->setMeta($this->denormalizer->denormalize($data['meta'], \AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostBodyDocumentMeta::class, 'json', $context));
                unset($data['meta']);
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
            $data['referenceId'] = $object->getReferenceId();
            $data['name'] = $object->getName();
            $data['contentType'] = $object->getContentType();
            $data['rules'] = $this->normalizer->normalize($object->getRules(), 'json', $context);
            $data['meta'] = $this->normalizer->normalize($object->getMeta(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostBodyDocument::class => false];
        }
    }
} else {
    class DocumentsV1LhsimagesUploadPostBodyDocumentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostBodyDocument::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostBodyDocument::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostBodyDocument();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('referenceId', $data)) {
                $object->setReferenceId($data['referenceId']);
                unset($data['referenceId']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('contentType', $data)) {
                $object->setContentType($data['contentType']);
                unset($data['contentType']);
            }
            if (\array_key_exists('rules', $data)) {
                $object->setRules($this->denormalizer->denormalize($data['rules'], \AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostBodyDocumentRules::class, 'json', $context));
                unset($data['rules']);
            }
            if (\array_key_exists('meta', $data)) {
                $object->setMeta($this->denormalizer->denormalize($data['meta'], \AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostBodyDocumentMeta::class, 'json', $context));
                unset($data['meta']);
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
            $data['referenceId'] = $object->getReferenceId();
            $data['name'] = $object->getName();
            $data['contentType'] = $object->getContentType();
            $data['rules'] = $this->normalizer->normalize($object->getRules(), 'json', $context);
            $data['meta'] = $this->normalizer->normalize($object->getMeta(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostBodyDocument::class => false];
        }
    }
}
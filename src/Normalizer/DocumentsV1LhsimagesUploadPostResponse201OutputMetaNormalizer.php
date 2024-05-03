<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Normalizer;

use AntibodiesOnline\FedEx\Runtime\Normalizer\CheckArray;
use AntibodiesOnline\FedEx\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class DocumentsV1LhsimagesUploadPostResponse201OutputMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\DocumentsV1LhsimagesUploadPostResponse201OutputMeta';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\DocumentsV1LhsimagesUploadPostResponse201OutputMeta';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostResponse201OutputMeta();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('imageType', $data)) {
                $object->setImageType($data['imageType']);
                unset($data['imageType']);
            }
            if (\array_key_exists('imageIndex', $data)) {
                $object->setImageIndex($data['imageIndex']);
                unset($data['imageIndex']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('imageType') && null !== $object->getImageType()) {
                $data['imageType'] = $object->getImageType();
            }
            if ($object->isInitialized('imageIndex') && null !== $object->getImageIndex()) {
                $data['imageIndex'] = $object->getImageIndex();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\DocumentsV1LhsimagesUploadPostResponse201OutputMeta' => false];
        }
    }
} else {
    class DocumentsV1LhsimagesUploadPostResponse201OutputMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\DocumentsV1LhsimagesUploadPostResponse201OutputMeta';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\DocumentsV1LhsimagesUploadPostResponse201OutputMeta';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostResponse201OutputMeta();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('imageType', $data)) {
                $object->setImageType($data['imageType']);
                unset($data['imageType']);
            }
            if (\array_key_exists('imageIndex', $data)) {
                $object->setImageIndex($data['imageIndex']);
                unset($data['imageIndex']);
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
            if ($object->isInitialized('imageType') && null !== $object->getImageType()) {
                $data['imageType'] = $object->getImageType();
            }
            if ($object->isInitialized('imageIndex') && null !== $object->getImageIndex()) {
                $data['imageIndex'] = $object->getImageIndex();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\DocumentsV1LhsimagesUploadPostResponse201OutputMeta' => false];
        }
    }
}

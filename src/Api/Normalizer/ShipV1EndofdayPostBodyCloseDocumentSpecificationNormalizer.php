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
    class ShipV1EndofdayPostBodyCloseDocumentSpecificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostBodyCloseDocumentSpecification::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostBodyCloseDocumentSpecification::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostBodyCloseDocumentSpecification();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('closeDocumentTypes', $data)) {
                $values = [];
                foreach ($data['closeDocumentTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setCloseDocumentTypes($values);
                unset($data['closeDocumentTypes']);
            }
            if (\array_key_exists('op950Detail', $data)) {
                $object->setOp950Detail($this->denormalizer->denormalize($data['op950Detail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostBodyCloseDocumentSpecificationOp950Detail::class, 'json', $context));
                unset($data['op950Detail']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('closeDocumentTypes') && null !== $object->getCloseDocumentTypes()) {
                $values = [];
                foreach ($object->getCloseDocumentTypes() as $value) {
                    $values[] = $value;
                }
                $data['closeDocumentTypes'] = $values;
            }
            if ($object->isInitialized('op950Detail') && null !== $object->getOp950Detail()) {
                $data['op950Detail'] = $this->normalizer->normalize($object->getOp950Detail(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostBodyCloseDocumentSpecification::class => false];
        }
    }
} else {
    class ShipV1EndofdayPostBodyCloseDocumentSpecificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostBodyCloseDocumentSpecification::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostBodyCloseDocumentSpecification::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostBodyCloseDocumentSpecification();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('closeDocumentTypes', $data)) {
                $values = [];
                foreach ($data['closeDocumentTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setCloseDocumentTypes($values);
                unset($data['closeDocumentTypes']);
            }
            if (\array_key_exists('op950Detail', $data)) {
                $object->setOp950Detail($this->denormalizer->denormalize($data['op950Detail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostBodyCloseDocumentSpecificationOp950Detail::class, 'json', $context));
                unset($data['op950Detail']);
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
            if ($object->isInitialized('closeDocumentTypes') && null !== $object->getCloseDocumentTypes()) {
                $values = [];
                foreach ($object->getCloseDocumentTypes() as $value) {
                    $values[] = $value;
                }
                $data['closeDocumentTypes'] = $values;
            }
            if ($object->isInitialized('op950Detail') && null !== $object->getOp950Detail()) {
                $data['op950Detail'] = $this->normalizer->normalize($object->getOp950Detail(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostBodyCloseDocumentSpecification::class => false];
        }
    }
}
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
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormatOptionsRequestedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormatOptionsRequested';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormatOptionsRequested';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormatOptionsRequested();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('options', $data)) {
                $values = [];
                foreach ($data['options'] as $value) {
                    $values[] = $value;
                }
                $object->setOptions($values);
                unset($data['options']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values = [];
                foreach ($object->getOptions() as $value) {
                    $values[] = $value;
                }
                $data['options'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormatOptionsRequested' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormatOptionsRequestedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormatOptionsRequested';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormatOptionsRequested';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormatOptionsRequested();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('options', $data)) {
                $values = [];
                foreach ($data['options'] as $value) {
                    $values[] = $value;
                }
                $object->setOptions($values);
                unset($data['options']);
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
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values = [];
                foreach ($object->getOptions() as $value) {
                    $values[] = $value;
                }
                $data['options'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormatOptionsRequested' => false];
        }
    }
}

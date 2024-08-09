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
    class ShipV1EndofdayPutResponse200OutputCloseDocumentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse200OutputCloseDocumentsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse200OutputCloseDocumentsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse200OutputCloseDocumentsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('shippingCycle', $data)) {
                $object->setShippingCycle($data['shippingCycle']);
                unset($data['shippingCycle']);
            }
            if (\array_key_exists('shippingDocumentDisposition', $data)) {
                $object->setShippingDocumentDisposition($data['shippingDocumentDisposition']);
                unset($data['shippingDocumentDisposition']);
            }
            if (\array_key_exists('accessReference', $data)) {
                $object->setAccessReference($data['accessReference']);
                unset($data['accessReference']);
            }
            if (\array_key_exists('resolution', $data)) {
                $object->setResolution($data['resolution']);
                unset($data['resolution']);
            }
            if (\array_key_exists('copiesToPrint', $data)) {
                $object->setCopiesToPrint($data['copiesToPrint']);
                unset($data['copiesToPrint']);
            }
            if (\array_key_exists('parts', $data)) {
                $values = [];
                foreach ($data['parts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse200OutputCloseDocumentsItemPartsItem::class, 'json', $context);
                }
                $object->setParts($values);
                unset($data['parts']);
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
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('shippingCycle') && null !== $object->getShippingCycle()) {
                $data['shippingCycle'] = $object->getShippingCycle();
            }
            if ($object->isInitialized('shippingDocumentDisposition') && null !== $object->getShippingDocumentDisposition()) {
                $data['shippingDocumentDisposition'] = $object->getShippingDocumentDisposition();
            }
            if ($object->isInitialized('accessReference') && null !== $object->getAccessReference()) {
                $data['accessReference'] = $object->getAccessReference();
            }
            if ($object->isInitialized('resolution') && null !== $object->getResolution()) {
                $data['resolution'] = $object->getResolution();
            }
            if ($object->isInitialized('copiesToPrint') && null !== $object->getCopiesToPrint()) {
                $data['copiesToPrint'] = $object->getCopiesToPrint();
            }
            if ($object->isInitialized('parts') && null !== $object->getParts()) {
                $values = [];
                foreach ($object->getParts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['parts'] = $values;
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse200OutputCloseDocumentsItem::class => false];
        }
    }
} else {
    class ShipV1EndofdayPutResponse200OutputCloseDocumentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse200OutputCloseDocumentsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse200OutputCloseDocumentsItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse200OutputCloseDocumentsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('shippingCycle', $data)) {
                $object->setShippingCycle($data['shippingCycle']);
                unset($data['shippingCycle']);
            }
            if (\array_key_exists('shippingDocumentDisposition', $data)) {
                $object->setShippingDocumentDisposition($data['shippingDocumentDisposition']);
                unset($data['shippingDocumentDisposition']);
            }
            if (\array_key_exists('accessReference', $data)) {
                $object->setAccessReference($data['accessReference']);
                unset($data['accessReference']);
            }
            if (\array_key_exists('resolution', $data)) {
                $object->setResolution($data['resolution']);
                unset($data['resolution']);
            }
            if (\array_key_exists('copiesToPrint', $data)) {
                $object->setCopiesToPrint($data['copiesToPrint']);
                unset($data['copiesToPrint']);
            }
            if (\array_key_exists('parts', $data)) {
                $values = [];
                foreach ($data['parts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse200OutputCloseDocumentsItemPartsItem::class, 'json', $context);
                }
                $object->setParts($values);
                unset($data['parts']);
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
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('shippingCycle') && null !== $object->getShippingCycle()) {
                $data['shippingCycle'] = $object->getShippingCycle();
            }
            if ($object->isInitialized('shippingDocumentDisposition') && null !== $object->getShippingDocumentDisposition()) {
                $data['shippingDocumentDisposition'] = $object->getShippingDocumentDisposition();
            }
            if ($object->isInitialized('accessReference') && null !== $object->getAccessReference()) {
                $data['accessReference'] = $object->getAccessReference();
            }
            if ($object->isInitialized('resolution') && null !== $object->getResolution()) {
                $data['resolution'] = $object->getResolution();
            }
            if ($object->isInitialized('copiesToPrint') && null !== $object->getCopiesToPrint()) {
                $data['copiesToPrint'] = $object->getCopiesToPrint();
            }
            if ($object->isInitialized('parts') && null !== $object->getParts()) {
                $values = [];
                foreach ($object->getParts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['parts'] = $values;
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse200OutputCloseDocumentsItem::class => false];
        }
    }
}
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
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('attributes', $data)) {
                $values = [];
                foreach ($data['attributes'] as $value) {
                    $values[] = $value;
                }
                $object->setAttributes($values);
                unset($data['attributes']);
            }
            if (\array_key_exists('attachedDocuments', $data)) {
                $values_1 = [];
                foreach ($data['attachedDocuments'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetailAttachedDocumentsItem', 'json', $context);
                }
                $object->setAttachedDocuments($values_1);
                unset($data['attachedDocuments']);
            }
            if (\array_key_exists('requestedDocumentTypes', $data)) {
                $values_2 = [];
                foreach ($data['requestedDocumentTypes'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setRequestedDocumentTypes($values_2);
                unset($data['requestedDocumentTypes']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('attributes') && null !== $object->getAttributes()) {
                $values = [];
                foreach ($object->getAttributes() as $value) {
                    $values[] = $value;
                }
                $data['attributes'] = $values;
            }
            if ($object->isInitialized('attachedDocuments') && null !== $object->getAttachedDocuments()) {
                $values_1 = [];
                foreach ($object->getAttachedDocuments() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['attachedDocuments'] = $values_1;
            }
            if ($object->isInitialized('requestedDocumentTypes') && null !== $object->getRequestedDocumentTypes()) {
                $values_2 = [];
                foreach ($object->getRequestedDocumentTypes() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['requestedDocumentTypes'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetail' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetail';
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
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('attributes', $data)) {
                $values = [];
                foreach ($data['attributes'] as $value) {
                    $values[] = $value;
                }
                $object->setAttributes($values);
                unset($data['attributes']);
            }
            if (\array_key_exists('attachedDocuments', $data)) {
                $values_1 = [];
                foreach ($data['attachedDocuments'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetailAttachedDocumentsItem', 'json', $context);
                }
                $object->setAttachedDocuments($values_1);
                unset($data['attachedDocuments']);
            }
            if (\array_key_exists('requestedDocumentTypes', $data)) {
                $values_2 = [];
                foreach ($data['requestedDocumentTypes'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setRequestedDocumentTypes($values_2);
                unset($data['requestedDocumentTypes']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('attributes') && null !== $object->getAttributes()) {
                $values = [];
                foreach ($object->getAttributes() as $value) {
                    $values[] = $value;
                }
                $data['attributes'] = $values;
            }
            if ($object->isInitialized('attachedDocuments') && null !== $object->getAttachedDocuments()) {
                $values_1 = [];
                foreach ($object->getAttachedDocuments() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['attachedDocuments'] = $values_1;
            }
            if ($object->isInitialized('requestedDocumentTypes') && null !== $object->getRequestedDocumentTypes()) {
                $values_2 = [];
                foreach ($object->getRequestedDocumentTypes() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['requestedDocumentTypes'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetail' => false];
        }
    }
}
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
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pendingShipmentType', $data)) {
                $object->setPendingShipmentType($data['pendingShipmentType']);
                unset($data['pendingShipmentType']);
            }
            if (\array_key_exists('processingOptions', $data)) {
                $object->setProcessingOptions($this->denormalizer->denormalize($data['processingOptions'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailProcessingOptions', 'json', $context));
                unset($data['processingOptions']);
            }
            if (\array_key_exists('recommendedDocumentSpecification', $data)) {
                $object->setRecommendedDocumentSpecification($this->denormalizer->denormalize($data['recommendedDocumentSpecification'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailRecommendedDocumentSpecification', 'json', $context));
                unset($data['recommendedDocumentSpecification']);
            }
            if (\array_key_exists('emailLabelDetail', $data)) {
                $object->setEmailLabelDetail($this->denormalizer->denormalize($data['emailLabelDetail'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetail', 'json', $context));
                unset($data['emailLabelDetail']);
            }
            if (\array_key_exists('attachedDocuments', $data)) {
                $values = [];
                foreach ($data['attachedDocuments'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailAttachedDocumentsItem', 'json', $context);
                }
                $object->setAttachedDocuments($values);
                unset($data['attachedDocuments']);
            }
            if (\array_key_exists('expirationTimeStamp', $data)) {
                $object->setExpirationTimeStamp($data['expirationTimeStamp']);
                unset($data['expirationTimeStamp']);
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
            $data['pendingShipmentType'] = $object->getPendingShipmentType();
            if ($object->isInitialized('processingOptions') && null !== $object->getProcessingOptions()) {
                $data['processingOptions'] = $this->normalizer->normalize($object->getProcessingOptions(), 'json', $context);
            }
            if ($object->isInitialized('recommendedDocumentSpecification') && null !== $object->getRecommendedDocumentSpecification()) {
                $data['recommendedDocumentSpecification'] = $this->normalizer->normalize($object->getRecommendedDocumentSpecification(), 'json', $context);
            }
            $data['emailLabelDetail'] = $this->normalizer->normalize($object->getEmailLabelDetail(), 'json', $context);
            if ($object->isInitialized('attachedDocuments') && null !== $object->getAttachedDocuments()) {
                $values = [];
                foreach ($object->getAttachedDocuments() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['attachedDocuments'] = $values;
            }
            if ($object->isInitialized('expirationTimeStamp') && null !== $object->getExpirationTimeStamp()) {
                $data['expirationTimeStamp'] = $object->getExpirationTimeStamp();
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetail' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetail';
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
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pendingShipmentType', $data)) {
                $object->setPendingShipmentType($data['pendingShipmentType']);
                unset($data['pendingShipmentType']);
            }
            if (\array_key_exists('processingOptions', $data)) {
                $object->setProcessingOptions($this->denormalizer->denormalize($data['processingOptions'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailProcessingOptions', 'json', $context));
                unset($data['processingOptions']);
            }
            if (\array_key_exists('recommendedDocumentSpecification', $data)) {
                $object->setRecommendedDocumentSpecification($this->denormalizer->denormalize($data['recommendedDocumentSpecification'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailRecommendedDocumentSpecification', 'json', $context));
                unset($data['recommendedDocumentSpecification']);
            }
            if (\array_key_exists('emailLabelDetail', $data)) {
                $object->setEmailLabelDetail($this->denormalizer->denormalize($data['emailLabelDetail'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetail', 'json', $context));
                unset($data['emailLabelDetail']);
            }
            if (\array_key_exists('attachedDocuments', $data)) {
                $values = [];
                foreach ($data['attachedDocuments'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailAttachedDocumentsItem', 'json', $context);
                }
                $object->setAttachedDocuments($values);
                unset($data['attachedDocuments']);
            }
            if (\array_key_exists('expirationTimeStamp', $data)) {
                $object->setExpirationTimeStamp($data['expirationTimeStamp']);
                unset($data['expirationTimeStamp']);
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
            $data['pendingShipmentType'] = $object->getPendingShipmentType();
            if ($object->isInitialized('processingOptions') && null !== $object->getProcessingOptions()) {
                $data['processingOptions'] = $this->normalizer->normalize($object->getProcessingOptions(), 'json', $context);
            }
            if ($object->isInitialized('recommendedDocumentSpecification') && null !== $object->getRecommendedDocumentSpecification()) {
                $data['recommendedDocumentSpecification'] = $this->normalizer->normalize($object->getRecommendedDocumentSpecification(), 'json', $context);
            }
            $data['emailLabelDetail'] = $this->normalizer->normalize($object->getEmailLabelDetail(), 'json', $context);
            if ($object->isInitialized('attachedDocuments') && null !== $object->getAttachedDocuments()) {
                $values = [];
                foreach ($object->getAttachedDocuments() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['attachedDocuments'] = $values;
            }
            if ($object->isInitialized('expirationTimeStamp') && null !== $object->getExpirationTimeStamp()) {
                $data['expirationTimeStamp'] = $object->getExpirationTimeStamp();
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetail' => false];
        }
    }
}
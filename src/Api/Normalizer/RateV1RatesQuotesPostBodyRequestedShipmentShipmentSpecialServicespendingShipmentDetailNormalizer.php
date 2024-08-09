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
    class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pendingShipmentType', $data)) {
                $object->setPendingShipmentType($data['pendingShipmentType']);
                unset($data['pendingShipmentType']);
            }
            if (\array_key_exists('processingOptions', $data)) {
                $object->setProcessingOptions($this->denormalizer->denormalize($data['processingOptions'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailProcessingOptions::class, 'json', $context));
                unset($data['processingOptions']);
            }
            if (\array_key_exists('recommendedDocumentSpecification', $data)) {
                $object->setRecommendedDocumentSpecification($this->denormalizer->denormalize($data['recommendedDocumentSpecification'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailRecommendedDocumentSpecification::class, 'json', $context));
                unset($data['recommendedDocumentSpecification']);
            }
            if (\array_key_exists('emailLabelDetail', $data)) {
                $object->setEmailLabelDetail($this->denormalizer->denormalize($data['emailLabelDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetail::class, 'json', $context));
                unset($data['emailLabelDetail']);
            }
            if (\array_key_exists('documentReferences', $data)) {
                $values = [];
                foreach ($data['documentReferences'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailDocumentReferencesItem::class, 'json', $context);
                }
                $object->setDocumentReferences($values);
                unset($data['documentReferences']);
            }
            if (\array_key_exists('expirationTimeStamp', $data)) {
                $object->setExpirationTimeStamp($data['expirationTimeStamp']);
                unset($data['expirationTimeStamp']);
            }
            if (\array_key_exists('shipmentDryIceDetail', $data)) {
                $object->setShipmentDryIceDetail($this->denormalizer->denormalize($data['shipmentDryIceDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailShipmentDryIceDetail::class, 'json', $context));
                unset($data['shipmentDryIceDetail']);
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
            if ($object->isInitialized('pendingShipmentType') && null !== $object->getPendingShipmentType()) {
                $data['pendingShipmentType'] = $object->getPendingShipmentType();
            }
            if ($object->isInitialized('processingOptions') && null !== $object->getProcessingOptions()) {
                $data['processingOptions'] = $this->normalizer->normalize($object->getProcessingOptions(), 'json', $context);
            }
            if ($object->isInitialized('recommendedDocumentSpecification') && null !== $object->getRecommendedDocumentSpecification()) {
                $data['recommendedDocumentSpecification'] = $this->normalizer->normalize($object->getRecommendedDocumentSpecification(), 'json', $context);
            }
            if ($object->isInitialized('emailLabelDetail') && null !== $object->getEmailLabelDetail()) {
                $data['emailLabelDetail'] = $this->normalizer->normalize($object->getEmailLabelDetail(), 'json', $context);
            }
            if ($object->isInitialized('documentReferences') && null !== $object->getDocumentReferences()) {
                $values = [];
                foreach ($object->getDocumentReferences() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['documentReferences'] = $values;
            }
            if ($object->isInitialized('expirationTimeStamp') && null !== $object->getExpirationTimeStamp()) {
                $data['expirationTimeStamp'] = $object->getExpirationTimeStamp();
            }
            if ($object->isInitialized('shipmentDryIceDetail') && null !== $object->getShipmentDryIceDetail()) {
                $data['shipmentDryIceDetail'] = $this->normalizer->normalize($object->getShipmentDryIceDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetail::class => false];
        }
    }
} else {
    class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetail::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pendingShipmentType', $data)) {
                $object->setPendingShipmentType($data['pendingShipmentType']);
                unset($data['pendingShipmentType']);
            }
            if (\array_key_exists('processingOptions', $data)) {
                $object->setProcessingOptions($this->denormalizer->denormalize($data['processingOptions'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailProcessingOptions::class, 'json', $context));
                unset($data['processingOptions']);
            }
            if (\array_key_exists('recommendedDocumentSpecification', $data)) {
                $object->setRecommendedDocumentSpecification($this->denormalizer->denormalize($data['recommendedDocumentSpecification'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailRecommendedDocumentSpecification::class, 'json', $context));
                unset($data['recommendedDocumentSpecification']);
            }
            if (\array_key_exists('emailLabelDetail', $data)) {
                $object->setEmailLabelDetail($this->denormalizer->denormalize($data['emailLabelDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetail::class, 'json', $context));
                unset($data['emailLabelDetail']);
            }
            if (\array_key_exists('documentReferences', $data)) {
                $values = [];
                foreach ($data['documentReferences'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailDocumentReferencesItem::class, 'json', $context);
                }
                $object->setDocumentReferences($values);
                unset($data['documentReferences']);
            }
            if (\array_key_exists('expirationTimeStamp', $data)) {
                $object->setExpirationTimeStamp($data['expirationTimeStamp']);
                unset($data['expirationTimeStamp']);
            }
            if (\array_key_exists('shipmentDryIceDetail', $data)) {
                $object->setShipmentDryIceDetail($this->denormalizer->denormalize($data['shipmentDryIceDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailShipmentDryIceDetail::class, 'json', $context));
                unset($data['shipmentDryIceDetail']);
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
            if ($object->isInitialized('pendingShipmentType') && null !== $object->getPendingShipmentType()) {
                $data['pendingShipmentType'] = $object->getPendingShipmentType();
            }
            if ($object->isInitialized('processingOptions') && null !== $object->getProcessingOptions()) {
                $data['processingOptions'] = $this->normalizer->normalize($object->getProcessingOptions(), 'json', $context);
            }
            if ($object->isInitialized('recommendedDocumentSpecification') && null !== $object->getRecommendedDocumentSpecification()) {
                $data['recommendedDocumentSpecification'] = $this->normalizer->normalize($object->getRecommendedDocumentSpecification(), 'json', $context);
            }
            if ($object->isInitialized('emailLabelDetail') && null !== $object->getEmailLabelDetail()) {
                $data['emailLabelDetail'] = $this->normalizer->normalize($object->getEmailLabelDetail(), 'json', $context);
            }
            if ($object->isInitialized('documentReferences') && null !== $object->getDocumentReferences()) {
                $values = [];
                foreach ($object->getDocumentReferences() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['documentReferences'] = $values;
            }
            if ($object->isInitialized('expirationTimeStamp') && null !== $object->getExpirationTimeStamp()) {
                $data['expirationTimeStamp'] = $object->getExpirationTimeStamp();
            }
            if ($object->isInitialized('shipmentDryIceDetail') && null !== $object->getShipmentDryIceDetail()) {
                $data['shipmentDryIceDetail'] = $this->normalizer->normalize($object->getShipmentDryIceDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetail::class => false];
        }
    }
}
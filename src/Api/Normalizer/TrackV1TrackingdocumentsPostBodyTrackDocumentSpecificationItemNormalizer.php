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
    class TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('trackingNumberInfo', $data)) {
                $object->setTrackingNumberInfo($this->denormalizer->denormalize($data['trackingNumberInfo'], \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItemTrackingNumberInfo::class, 'json', $context));
                unset($data['trackingNumberInfo']);
            }
            if (\array_key_exists('shipDateBegin', $data)) {
                $object->setShipDateBegin($data['shipDateBegin']);
                unset($data['shipDateBegin']);
            }
            if (\array_key_exists('shipDateEnd', $data)) {
                $object->setShipDateEnd($data['shipDateEnd']);
                unset($data['shipDateEnd']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($data['accountNumber']);
                unset($data['accountNumber']);
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
            $data['trackingNumberInfo'] = $this->normalizer->normalize($object->getTrackingNumberInfo(), 'json', $context);
            if ($object->isInitialized('shipDateBegin') && null !== $object->getShipDateBegin()) {
                $data['shipDateBegin'] = $object->getShipDateBegin();
            }
            if ($object->isInitialized('shipDateEnd') && null !== $object->getShipDateEnd()) {
                $data['shipDateEnd'] = $object->getShipDateEnd();
            }
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['accountNumber'] = $object->getAccountNumber();
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
            return [\AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItem::class => false];
        }
    }
} else {
    class TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('trackingNumberInfo', $data)) {
                $object->setTrackingNumberInfo($this->denormalizer->denormalize($data['trackingNumberInfo'], \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItemTrackingNumberInfo::class, 'json', $context));
                unset($data['trackingNumberInfo']);
            }
            if (\array_key_exists('shipDateBegin', $data)) {
                $object->setShipDateBegin($data['shipDateBegin']);
                unset($data['shipDateBegin']);
            }
            if (\array_key_exists('shipDateEnd', $data)) {
                $object->setShipDateEnd($data['shipDateEnd']);
                unset($data['shipDateEnd']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($data['accountNumber']);
                unset($data['accountNumber']);
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
            $data['trackingNumberInfo'] = $this->normalizer->normalize($object->getTrackingNumberInfo(), 'json', $context);
            if ($object->isInitialized('shipDateBegin') && null !== $object->getShipDateBegin()) {
                $data['shipDateBegin'] = $object->getShipDateBegin();
            }
            if ($object->isInitialized('shipDateEnd') && null !== $object->getShipDateEnd()) {
                $data['shipDateEnd'] = $object->getShipDateEnd();
            }
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['accountNumber'] = $object->getAccountNumber();
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
            return [\AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostBodyTrackDocumentSpecificationItem::class => false];
        }
    }
}
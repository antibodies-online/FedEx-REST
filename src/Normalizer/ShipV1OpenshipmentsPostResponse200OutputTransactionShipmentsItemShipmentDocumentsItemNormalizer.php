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
    class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentKey', $data)) {
                $object->setContentKey($data['contentKey']);
                unset($data['contentKey']);
            }
            if (\array_key_exists('copiesToPrint', $data)) {
                $object->setCopiesToPrint($data['copiesToPrint']);
                unset($data['copiesToPrint']);
            }
            if (\array_key_exists('contentType', $data)) {
                $object->setContentType($data['contentType']);
                unset($data['contentType']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('docType', $data)) {
                $object->setDocType($data['docType']);
                unset($data['docType']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values = [];
                foreach ($data['alerts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItemAlertsItem', 'json', $context);
                }
                $object->setAlerts($values);
                unset($data['alerts']);
            }
            if (\array_key_exists('encodedLabel', $data)) {
                $object->setEncodedLabel($data['encodedLabel']);
                unset($data['encodedLabel']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
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
            if ($object->isInitialized('contentKey') && null !== $object->getContentKey()) {
                $data['contentKey'] = $object->getContentKey();
            }
            if ($object->isInitialized('copiesToPrint') && null !== $object->getCopiesToPrint()) {
                $data['copiesToPrint'] = $object->getCopiesToPrint();
            }
            if ($object->isInitialized('contentType') && null !== $object->getContentType()) {
                $data['contentType'] = $object->getContentType();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('docType') && null !== $object->getDocType()) {
                $data['docType'] = $object->getDocType();
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values = [];
                foreach ($object->getAlerts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['alerts'] = $values;
            }
            if ($object->isInitialized('encodedLabel') && null !== $object->getEncodedLabel()) {
                $data['encodedLabel'] = $object->getEncodedLabel();
            }
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItem' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItem';
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
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentKey', $data)) {
                $object->setContentKey($data['contentKey']);
                unset($data['contentKey']);
            }
            if (\array_key_exists('copiesToPrint', $data)) {
                $object->setCopiesToPrint($data['copiesToPrint']);
                unset($data['copiesToPrint']);
            }
            if (\array_key_exists('contentType', $data)) {
                $object->setContentType($data['contentType']);
                unset($data['contentType']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('docType', $data)) {
                $object->setDocType($data['docType']);
                unset($data['docType']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values = [];
                foreach ($data['alerts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItemAlertsItem', 'json', $context);
                }
                $object->setAlerts($values);
                unset($data['alerts']);
            }
            if (\array_key_exists('encodedLabel', $data)) {
                $object->setEncodedLabel($data['encodedLabel']);
                unset($data['encodedLabel']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
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
            if ($object->isInitialized('contentKey') && null !== $object->getContentKey()) {
                $data['contentKey'] = $object->getContentKey();
            }
            if ($object->isInitialized('copiesToPrint') && null !== $object->getCopiesToPrint()) {
                $data['copiesToPrint'] = $object->getCopiesToPrint();
            }
            if ($object->isInitialized('contentType') && null !== $object->getContentType()) {
                $data['contentType'] = $object->getContentType();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('docType') && null !== $object->getDocType()) {
                $data['docType'] = $object->getDocType();
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values = [];
                foreach ($object->getAlerts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['alerts'] = $values;
            }
            if ($object->isInitialized('encodedLabel') && null !== $object->getEncodedLabel()) {
                $data['encodedLabel'] = $object->getEncodedLabel();
            }
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentDocumentsItem' => false];
        }
    }
}
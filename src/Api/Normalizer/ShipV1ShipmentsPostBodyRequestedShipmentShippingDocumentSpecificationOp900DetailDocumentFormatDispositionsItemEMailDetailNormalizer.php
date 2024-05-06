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
    class ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationOp900DetailDocumentFormatDispositionsItemEMailDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationOp900DetailDocumentFormatDispositionsItemEMailDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationOp900DetailDocumentFormatDispositionsItemEMailDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationOp900DetailDocumentFormatDispositionsItemEMailDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('eMailRecipients', $data)) {
                $values = [];
                foreach ($data['eMailRecipients'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationOp900DetailDocumentFormatDispositionsItemEMailDetailEMailRecipientsItem', 'json', $context);
                }
                $object->setEMailRecipients($values);
                unset($data['eMailRecipients']);
            }
            if (\array_key_exists('locale', $data)) {
                $object->setLocale($data['locale']);
                unset($data['locale']);
            }
            if (\array_key_exists('grouping', $data)) {
                $object->setGrouping($data['grouping']);
                unset($data['grouping']);
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
            $values = [];
            foreach ($object->getEMailRecipients() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['eMailRecipients'] = $values;
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
            }
            if ($object->isInitialized('grouping') && null !== $object->getGrouping()) {
                $data['grouping'] = $object->getGrouping();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationOp900DetailDocumentFormatDispositionsItemEMailDetail' => false];
        }
    }
} else {
    class ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationOp900DetailDocumentFormatDispositionsItemEMailDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationOp900DetailDocumentFormatDispositionsItemEMailDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationOp900DetailDocumentFormatDispositionsItemEMailDetail';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationOp900DetailDocumentFormatDispositionsItemEMailDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('eMailRecipients', $data)) {
                $values = [];
                foreach ($data['eMailRecipients'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationOp900DetailDocumentFormatDispositionsItemEMailDetailEMailRecipientsItem', 'json', $context);
                }
                $object->setEMailRecipients($values);
                unset($data['eMailRecipients']);
            }
            if (\array_key_exists('locale', $data)) {
                $object->setLocale($data['locale']);
                unset($data['locale']);
            }
            if (\array_key_exists('grouping', $data)) {
                $object->setGrouping($data['grouping']);
                unset($data['grouping']);
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
            $values = [];
            foreach ($object->getEMailRecipients() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['eMailRecipients'] = $values;
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
            }
            if ($object->isInitialized('grouping') && null !== $object->getGrouping()) {
                $data['grouping'] = $object->getGrouping();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationOp900DetailDocumentFormatDispositionsItemEMailDetail' => false];
        }
    }
}
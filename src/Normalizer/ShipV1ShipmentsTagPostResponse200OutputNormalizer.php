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
    class ShipV1ShipmentsTagPostResponse200OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsTagPostResponse200Output';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsTagPostResponse200Output';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsTagPostResponse200Output();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('masterTrackingNumber', $data)) {
                $object->setMasterTrackingNumber($data['masterTrackingNumber']);
                unset($data['masterTrackingNumber']);
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('shipTimestamp', $data)) {
                $object->setShipTimestamp($data['shipTimestamp']);
                unset($data['shipTimestamp']);
            }
            if (\array_key_exists('completedTagDetail', $data)) {
                $object->setCompletedTagDetail($this->denormalizer->denormalize($data['completedTagDetail'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsTagPostResponse200OutputCompletedTagDetail', 'json', $context));
                unset($data['completedTagDetail']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values = [];
                foreach ($data['alerts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsTagPostResponse200OutputAlertsItem', 'json', $context);
                }
                $object->setAlerts($values);
                unset($data['alerts']);
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
            if ($object->isInitialized('masterTrackingNumber') && null !== $object->getMasterTrackingNumber()) {
                $data['masterTrackingNumber'] = $object->getMasterTrackingNumber();
            }
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('shipTimestamp') && null !== $object->getShipTimestamp()) {
                $data['shipTimestamp'] = $object->getShipTimestamp();
            }
            if ($object->isInitialized('completedTagDetail') && null !== $object->getCompletedTagDetail()) {
                $data['completedTagDetail'] = $this->normalizer->normalize($object->getCompletedTagDetail(), 'json', $context);
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values = [];
                foreach ($object->getAlerts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['alerts'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsTagPostResponse200Output' => false];
        }
    }
} else {
    class ShipV1ShipmentsTagPostResponse200OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsTagPostResponse200Output';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsTagPostResponse200Output';
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
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsTagPostResponse200Output();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('masterTrackingNumber', $data)) {
                $object->setMasterTrackingNumber($data['masterTrackingNumber']);
                unset($data['masterTrackingNumber']);
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('shipTimestamp', $data)) {
                $object->setShipTimestamp($data['shipTimestamp']);
                unset($data['shipTimestamp']);
            }
            if (\array_key_exists('completedTagDetail', $data)) {
                $object->setCompletedTagDetail($this->denormalizer->denormalize($data['completedTagDetail'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsTagPostResponse200OutputCompletedTagDetail', 'json', $context));
                unset($data['completedTagDetail']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values = [];
                foreach ($data['alerts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsTagPostResponse200OutputAlertsItem', 'json', $context);
                }
                $object->setAlerts($values);
                unset($data['alerts']);
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
            if ($object->isInitialized('masterTrackingNumber') && null !== $object->getMasterTrackingNumber()) {
                $data['masterTrackingNumber'] = $object->getMasterTrackingNumber();
            }
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('shipTimestamp') && null !== $object->getShipTimestamp()) {
                $data['shipTimestamp'] = $object->getShipTimestamp();
            }
            if ($object->isInitialized('completedTagDetail') && null !== $object->getCompletedTagDetail()) {
                $data['completedTagDetail'] = $this->normalizer->normalize($object->getCompletedTagDetail(), 'json', $context);
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values = [];
                foreach ($object->getAlerts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['alerts'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1ShipmentsTagPostResponse200Output' => false];
        }
    }
}
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
    class ShipV1ShipmentsCancelPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsCancelPutBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsCancelPutBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsCancelPutBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsCancelPutBodyAccountNumber', 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('emailShipment', $data)) {
                $object->setEmailShipment($data['emailShipment']);
                unset($data['emailShipment']);
            }
            if (\array_key_exists('senderCountryCode', $data)) {
                $object->setSenderCountryCode($data['senderCountryCode']);
                unset($data['senderCountryCode']);
            }
            if (\array_key_exists('deletionControl', $data)) {
                $object->setDeletionControl($data['deletionControl']);
                unset($data['deletionControl']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            if ($object->isInitialized('emailShipment') && null !== $object->getEmailShipment()) {
                $data['emailShipment'] = $object->getEmailShipment();
            }
            if ($object->isInitialized('senderCountryCode') && null !== $object->getSenderCountryCode()) {
                $data['senderCountryCode'] = $object->getSenderCountryCode();
            }
            if ($object->isInitialized('deletionControl') && null !== $object->getDeletionControl()) {
                $data['deletionControl'] = $object->getDeletionControl();
            }
            $data['trackingNumber'] = $object->getTrackingNumber();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsCancelPutBody' => false];
        }
    }
} else {
    class ShipV1ShipmentsCancelPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsCancelPutBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsCancelPutBody';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsCancelPutBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsCancelPutBodyAccountNumber', 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('emailShipment', $data)) {
                $object->setEmailShipment($data['emailShipment']);
                unset($data['emailShipment']);
            }
            if (\array_key_exists('senderCountryCode', $data)) {
                $object->setSenderCountryCode($data['senderCountryCode']);
                unset($data['senderCountryCode']);
            }
            if (\array_key_exists('deletionControl', $data)) {
                $object->setDeletionControl($data['deletionControl']);
                unset($data['deletionControl']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
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
            $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            if ($object->isInitialized('emailShipment') && null !== $object->getEmailShipment()) {
                $data['emailShipment'] = $object->getEmailShipment();
            }
            if ($object->isInitialized('senderCountryCode') && null !== $object->getSenderCountryCode()) {
                $data['senderCountryCode'] = $object->getSenderCountryCode();
            }
            if ($object->isInitialized('deletionControl') && null !== $object->getDeletionControl()) {
                $data['deletionControl'] = $object->getDeletionControl();
            }
            $data['trackingNumber'] = $object->getTrackingNumber();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1ShipmentsCancelPutBody' => false];
        }
    }
}
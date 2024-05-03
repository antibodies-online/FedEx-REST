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
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetailPhoneNumberNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetailPhoneNumber';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetailPhoneNumber';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetailPhoneNumber();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('areaCode', $data)) {
                $object->setAreaCode($data['areaCode']);
                unset($data['areaCode']);
            }
            if (\array_key_exists('localNumber', $data)) {
                $object->setLocalNumber($data['localNumber']);
                unset($data['localNumber']);
            }
            if (\array_key_exists('extension', $data)) {
                $object->setExtension($data['extension']);
                unset($data['extension']);
            }
            if (\array_key_exists('personalIdentificationNumber', $data)) {
                $object->setPersonalIdentificationNumber($data['personalIdentificationNumber']);
                unset($data['personalIdentificationNumber']);
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
            if ($object->isInitialized('areaCode') && null !== $object->getAreaCode()) {
                $data['areaCode'] = $object->getAreaCode();
            }
            if ($object->isInitialized('localNumber') && null !== $object->getLocalNumber()) {
                $data['localNumber'] = $object->getLocalNumber();
            }
            if ($object->isInitialized('extension') && null !== $object->getExtension()) {
                $data['extension'] = $object->getExtension();
            }
            if ($object->isInitialized('personalIdentificationNumber') && null !== $object->getPersonalIdentificationNumber()) {
                $data['personalIdentificationNumber'] = $object->getPersonalIdentificationNumber();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetailPhoneNumber' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetailPhoneNumberNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetailPhoneNumber';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetailPhoneNumber';
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
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetailPhoneNumber();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('areaCode', $data)) {
                $object->setAreaCode($data['areaCode']);
                unset($data['areaCode']);
            }
            if (\array_key_exists('localNumber', $data)) {
                $object->setLocalNumber($data['localNumber']);
                unset($data['localNumber']);
            }
            if (\array_key_exists('extension', $data)) {
                $object->setExtension($data['extension']);
                unset($data['extension']);
            }
            if (\array_key_exists('personalIdentificationNumber', $data)) {
                $object->setPersonalIdentificationNumber($data['personalIdentificationNumber']);
                unset($data['personalIdentificationNumber']);
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
            if ($object->isInitialized('areaCode') && null !== $object->getAreaCode()) {
                $data['areaCode'] = $object->getAreaCode();
            }
            if ($object->isInitialized('localNumber') && null !== $object->getLocalNumber()) {
                $data['localNumber'] = $object->getLocalNumber();
            }
            if ($object->isInitialized('extension') && null !== $object->getExtension()) {
                $data['extension'] = $object->getExtension();
            }
            if ($object->isInitialized('personalIdentificationNumber') && null !== $object->getPersonalIdentificationNumber()) {
                $data['personalIdentificationNumber'] = $object->getPersonalIdentificationNumber();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetailPhoneNumber' => false];
        }
    }
}
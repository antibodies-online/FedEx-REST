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
    class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('transportationType', $data)) {
                $object->setTransportationType($data['transportationType']);
                unset($data['transportationType']);
            }
            if (\array_key_exists('emailAddress', $data)) {
                $object->setEmailAddress($data['emailAddress']);
                unset($data['emailAddress']);
            }
            if (\array_key_exists('phoneNumberDetails', $data)) {
                $values = [];
                foreach ($data['phoneNumberDetails'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItemPhoneNumberDetailsItem', 'json', $context);
                }
                $object->setPhoneNumberDetails($values);
                unset($data['phoneNumberDetails']);
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
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('transportationType') && null !== $object->getTransportationType()) {
                $data['transportationType'] = $object->getTransportationType();
            }
            if ($object->isInitialized('emailAddress') && null !== $object->getEmailAddress()) {
                $data['emailAddress'] = $object->getEmailAddress();
            }
            if ($object->isInitialized('phoneNumberDetails') && null !== $object->getPhoneNumberDetails()) {
                $values = [];
                foreach ($object->getPhoneNumberDetails() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['phoneNumberDetails'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItem' => false];
        }
    }
} else {
    class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItem';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('transportationType', $data)) {
                $object->setTransportationType($data['transportationType']);
                unset($data['transportationType']);
            }
            if (\array_key_exists('emailAddress', $data)) {
                $object->setEmailAddress($data['emailAddress']);
                unset($data['emailAddress']);
            }
            if (\array_key_exists('phoneNumberDetails', $data)) {
                $values = [];
                foreach ($data['phoneNumberDetails'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItemPhoneNumberDetailsItem', 'json', $context);
                }
                $object->setPhoneNumberDetails($values);
                unset($data['phoneNumberDetails']);
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
            if ($object->isInitialized('transportationType') && null !== $object->getTransportationType()) {
                $data['transportationType'] = $object->getTransportationType();
            }
            if ($object->isInitialized('emailAddress') && null !== $object->getEmailAddress()) {
                $data['emailAddress'] = $object->getEmailAddress();
            }
            if ($object->isInitialized('phoneNumberDetails') && null !== $object->getPhoneNumberDetails()) {
                $values = [];
                foreach ($object->getPhoneNumberDetails() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['phoneNumberDetails'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItem' => false];
        }
    }
}
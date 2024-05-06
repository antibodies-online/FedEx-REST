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
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('emailAddresses', $data)) {
                $values = [];
                foreach ($data['emailAddresses'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetailEmailAddressesItem', 'json', $context);
                }
                $object->setEmailAddresses($values);
                unset($data['emailAddresses']);
            }
            if (\array_key_exists('prefix', $data)) {
                $object->setPrefix($data['prefix']);
                unset($data['prefix']);
            }
            if (\array_key_exists('phoneNumberDetails', $data)) {
                $values_1 = [];
                foreach ($data['phoneNumberDetails'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetailPhoneNumberDetailsItem', 'json', $context);
                }
                $object->setPhoneNumberDetails($values_1);
                unset($data['phoneNumberDetails']);
            }
            if (\array_key_exists('companyName', $data)) {
                $object->setCompanyName($this->denormalizer->denormalize($data['companyName'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetailCompanyName', 'json', $context));
                unset($data['companyName']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('emailAddresses') && null !== $object->getEmailAddresses()) {
                $values = [];
                foreach ($object->getEmailAddresses() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['emailAddresses'] = $values;
            }
            if ($object->isInitialized('prefix') && null !== $object->getPrefix()) {
                $data['prefix'] = $object->getPrefix();
            }
            if ($object->isInitialized('phoneNumberDetails') && null !== $object->getPhoneNumberDetails()) {
                $values_1 = [];
                foreach ($object->getPhoneNumberDetails() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['phoneNumberDetails'] = $values_1;
            }
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['companyName'] = $this->normalizer->normalize($object->getCompanyName(), 'json', $context);
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetail' => false];
        }
    }
} else {
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetail';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('emailAddresses', $data)) {
                $values = [];
                foreach ($data['emailAddresses'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetailEmailAddressesItem', 'json', $context);
                }
                $object->setEmailAddresses($values);
                unset($data['emailAddresses']);
            }
            if (\array_key_exists('prefix', $data)) {
                $object->setPrefix($data['prefix']);
                unset($data['prefix']);
            }
            if (\array_key_exists('phoneNumberDetails', $data)) {
                $values_1 = [];
                foreach ($data['phoneNumberDetails'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetailPhoneNumberDetailsItem', 'json', $context);
                }
                $object->setPhoneNumberDetails($values_1);
                unset($data['phoneNumberDetails']);
            }
            if (\array_key_exists('companyName', $data)) {
                $object->setCompanyName($this->denormalizer->denormalize($data['companyName'], 'AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetailCompanyName', 'json', $context));
                unset($data['companyName']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('emailAddresses') && null !== $object->getEmailAddresses()) {
                $values = [];
                foreach ($object->getEmailAddresses() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['emailAddresses'] = $values;
            }
            if ($object->isInitialized('prefix') && null !== $object->getPrefix()) {
                $data['prefix'] = $object->getPrefix();
            }
            if ($object->isInitialized('phoneNumberDetails') && null !== $object->getPhoneNumberDetails()) {
                $values_1 = [];
                foreach ($object->getPhoneNumberDetails() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['phoneNumberDetails'] = $values_1;
            }
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['companyName'] = $this->normalizer->normalize($object->getCompanyName(), 'json', $context);
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetail' => false];
        }
    }
}
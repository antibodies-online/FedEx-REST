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
    class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetailLocationContactAndAddressContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetailLocationContactAndAddressContact';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetailLocationContactAndAddressContact';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetailLocationContactAndAddressContact();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('personName', $data)) {
                $object->setPersonName($data['personName']);
                unset($data['personName']);
            }
            if (\array_key_exists('emailAddress', $data)) {
                $object->setEmailAddress($data['emailAddress']);
                unset($data['emailAddress']);
            }
            if (\array_key_exists('phoneNumber', $data)) {
                $object->setPhoneNumber($data['phoneNumber']);
                unset($data['phoneNumber']);
            }
            if (\array_key_exists('phoneExtension', $data)) {
                $object->setPhoneExtension($data['phoneExtension']);
                unset($data['phoneExtension']);
            }
            if (\array_key_exists('faxNumber', $data)) {
                $object->setFaxNumber($data['faxNumber']);
                unset($data['faxNumber']);
            }
            if (\array_key_exists('companyName', $data)) {
                $object->setCompanyName($data['companyName']);
                unset($data['companyName']);
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
            if ($object->isInitialized('personName') && null !== $object->getPersonName()) {
                $data['personName'] = $object->getPersonName();
            }
            if ($object->isInitialized('emailAddress') && null !== $object->getEmailAddress()) {
                $data['emailAddress'] = $object->getEmailAddress();
            }
            if ($object->isInitialized('phoneNumber') && null !== $object->getPhoneNumber()) {
                $data['phoneNumber'] = $object->getPhoneNumber();
            }
            if ($object->isInitialized('phoneExtension') && null !== $object->getPhoneExtension()) {
                $data['phoneExtension'] = $object->getPhoneExtension();
            }
            if ($object->isInitialized('faxNumber') && null !== $object->getFaxNumber()) {
                $data['faxNumber'] = $object->getFaxNumber();
            }
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['companyName'] = $object->getCompanyName();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetailLocationContactAndAddressContact' => false];
        }
    }
} else {
    class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetailLocationContactAndAddressContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetailLocationContactAndAddressContact';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetailLocationContactAndAddressContact';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetailLocationContactAndAddressContact();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('personName', $data)) {
                $object->setPersonName($data['personName']);
                unset($data['personName']);
            }
            if (\array_key_exists('emailAddress', $data)) {
                $object->setEmailAddress($data['emailAddress']);
                unset($data['emailAddress']);
            }
            if (\array_key_exists('phoneNumber', $data)) {
                $object->setPhoneNumber($data['phoneNumber']);
                unset($data['phoneNumber']);
            }
            if (\array_key_exists('phoneExtension', $data)) {
                $object->setPhoneExtension($data['phoneExtension']);
                unset($data['phoneExtension']);
            }
            if (\array_key_exists('faxNumber', $data)) {
                $object->setFaxNumber($data['faxNumber']);
                unset($data['faxNumber']);
            }
            if (\array_key_exists('companyName', $data)) {
                $object->setCompanyName($data['companyName']);
                unset($data['companyName']);
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
            if ($object->isInitialized('personName') && null !== $object->getPersonName()) {
                $data['personName'] = $object->getPersonName();
            }
            if ($object->isInitialized('emailAddress') && null !== $object->getEmailAddress()) {
                $data['emailAddress'] = $object->getEmailAddress();
            }
            if ($object->isInitialized('phoneNumber') && null !== $object->getPhoneNumber()) {
                $data['phoneNumber'] = $object->getPhoneNumber();
            }
            if ($object->isInitialized('phoneExtension') && null !== $object->getPhoneExtension()) {
                $data['phoneExtension'] = $object->getPhoneExtension();
            }
            if ($object->isInitialized('faxNumber') && null !== $object->getFaxNumber()) {
                $data['faxNumber'] = $object->getFaxNumber();
            }
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['companyName'] = $object->getCompanyName();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetailLocationContactAndAddressContact' => false];
        }
    }
}
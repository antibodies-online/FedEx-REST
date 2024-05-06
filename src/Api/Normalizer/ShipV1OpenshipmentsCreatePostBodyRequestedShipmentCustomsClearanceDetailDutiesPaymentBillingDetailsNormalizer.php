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
    class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentBillingDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentBillingDetails';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentBillingDetails';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentBillingDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('billingCode', $data)) {
                $object->setBillingCode($data['billingCode']);
                unset($data['billingCode']);
            }
            if (\array_key_exists('billingType', $data)) {
                $object->setBillingType($data['billingType']);
                unset($data['billingType']);
            }
            if (\array_key_exists('aliasId', $data)) {
                $object->setAliasId($data['aliasId']);
                unset($data['aliasId']);
            }
            if (\array_key_exists('accountNickname', $data)) {
                $object->setAccountNickname($data['accountNickname']);
                unset($data['accountNickname']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($data['accountNumber']);
                unset($data['accountNumber']);
            }
            if (\array_key_exists('accountNumberCountryCode', $data)) {
                $object->setAccountNumberCountryCode($data['accountNumberCountryCode']);
                unset($data['accountNumberCountryCode']);
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
            if ($object->isInitialized('billingCode') && null !== $object->getBillingCode()) {
                $data['billingCode'] = $object->getBillingCode();
            }
            if ($object->isInitialized('billingType') && null !== $object->getBillingType()) {
                $data['billingType'] = $object->getBillingType();
            }
            if ($object->isInitialized('aliasId') && null !== $object->getAliasId()) {
                $data['aliasId'] = $object->getAliasId();
            }
            if ($object->isInitialized('accountNickname') && null !== $object->getAccountNickname()) {
                $data['accountNickname'] = $object->getAccountNickname();
            }
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['accountNumber'] = $object->getAccountNumber();
            }
            if ($object->isInitialized('accountNumberCountryCode') && null !== $object->getAccountNumberCountryCode()) {
                $data['accountNumberCountryCode'] = $object->getAccountNumberCountryCode();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentBillingDetails' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentBillingDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentBillingDetails';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentBillingDetails';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentBillingDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('billingCode', $data)) {
                $object->setBillingCode($data['billingCode']);
                unset($data['billingCode']);
            }
            if (\array_key_exists('billingType', $data)) {
                $object->setBillingType($data['billingType']);
                unset($data['billingType']);
            }
            if (\array_key_exists('aliasId', $data)) {
                $object->setAliasId($data['aliasId']);
                unset($data['aliasId']);
            }
            if (\array_key_exists('accountNickname', $data)) {
                $object->setAccountNickname($data['accountNickname']);
                unset($data['accountNickname']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($data['accountNumber']);
                unset($data['accountNumber']);
            }
            if (\array_key_exists('accountNumberCountryCode', $data)) {
                $object->setAccountNumberCountryCode($data['accountNumberCountryCode']);
                unset($data['accountNumberCountryCode']);
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
            if ($object->isInitialized('billingCode') && null !== $object->getBillingCode()) {
                $data['billingCode'] = $object->getBillingCode();
            }
            if ($object->isInitialized('billingType') && null !== $object->getBillingType()) {
                $data['billingType'] = $object->getBillingType();
            }
            if ($object->isInitialized('aliasId') && null !== $object->getAliasId()) {
                $data['aliasId'] = $object->getAliasId();
            }
            if ($object->isInitialized('accountNickname') && null !== $object->getAccountNickname()) {
                $data['accountNickname'] = $object->getAccountNickname();
            }
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['accountNumber'] = $object->getAccountNumber();
            }
            if ($object->isInitialized('accountNumberCountryCode') && null !== $object->getAccountNumberCountryCode()) {
                $data['accountNumberCountryCode'] = $object->getAccountNumberCountryCode();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentBillingDetails' => false];
        }
    }
}
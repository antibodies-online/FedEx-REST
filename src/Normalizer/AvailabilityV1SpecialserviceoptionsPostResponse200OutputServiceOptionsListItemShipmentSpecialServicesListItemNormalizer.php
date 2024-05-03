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
    class AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemShipmentSpecialServicesListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemShipmentSpecialServicesListItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemShipmentSpecialServicesListItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemShipmentSpecialServicesListItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('customerIntegrationMode', $data)) {
                $object->setCustomerIntegrationMode($data['customerIntegrationMode']);
                unset($data['customerIntegrationMode']);
            }
            if (\array_key_exists('astraDescription', $data)) {
                $object->setAstraDescription($data['astraDescription']);
                unset($data['astraDescription']);
            }
            if (\array_key_exists('ltlPaymentTerms', $data)) {
                $values = [];
                foreach ($data['ltlPaymentTerms'] as $value) {
                    $values[] = $value;
                }
                $object->setLtlPaymentTerms($values);
                unset($data['ltlPaymentTerms']);
            }
            if (\array_key_exists('subType', $data)) {
                $object->setSubType($data['subType']);
                unset($data['subType']);
            }
            if (\array_key_exists('value', $data)) {
                $object->setValue($data['value']);
                unset($data['value']);
            }
            if (\array_key_exists('specialServiceType', $data)) {
                $object->setSpecialServiceType($data['specialServiceType']);
                unset($data['specialServiceType']);
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
            if ($object->isInitialized('customerIntegrationMode') && null !== $object->getCustomerIntegrationMode()) {
                $data['customerIntegrationMode'] = $object->getCustomerIntegrationMode();
            }
            if ($object->isInitialized('astraDescription') && null !== $object->getAstraDescription()) {
                $data['astraDescription'] = $object->getAstraDescription();
            }
            if ($object->isInitialized('ltlPaymentTerms') && null !== $object->getLtlPaymentTerms()) {
                $values = [];
                foreach ($object->getLtlPaymentTerms() as $value) {
                    $values[] = $value;
                }
                $data['ltlPaymentTerms'] = $values;
            }
            if ($object->isInitialized('subType') && null !== $object->getSubType()) {
                $data['subType'] = $object->getSubType();
            }
            if ($object->isInitialized('value') && null !== $object->getValue()) {
                $data['value'] = $object->getValue();
            }
            if ($object->isInitialized('specialServiceType') && null !== $object->getSpecialServiceType()) {
                $data['specialServiceType'] = $object->getSpecialServiceType();
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
            return ['AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemShipmentSpecialServicesListItem' => false];
        }
    }
} else {
    class AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemShipmentSpecialServicesListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemShipmentSpecialServicesListItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemShipmentSpecialServicesListItem';
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
            $object = new \AntibodiesOnline\FedEx\Model\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemShipmentSpecialServicesListItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('customerIntegrationMode', $data)) {
                $object->setCustomerIntegrationMode($data['customerIntegrationMode']);
                unset($data['customerIntegrationMode']);
            }
            if (\array_key_exists('astraDescription', $data)) {
                $object->setAstraDescription($data['astraDescription']);
                unset($data['astraDescription']);
            }
            if (\array_key_exists('ltlPaymentTerms', $data)) {
                $values = [];
                foreach ($data['ltlPaymentTerms'] as $value) {
                    $values[] = $value;
                }
                $object->setLtlPaymentTerms($values);
                unset($data['ltlPaymentTerms']);
            }
            if (\array_key_exists('subType', $data)) {
                $object->setSubType($data['subType']);
                unset($data['subType']);
            }
            if (\array_key_exists('value', $data)) {
                $object->setValue($data['value']);
                unset($data['value']);
            }
            if (\array_key_exists('specialServiceType', $data)) {
                $object->setSpecialServiceType($data['specialServiceType']);
                unset($data['specialServiceType']);
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
            if ($object->isInitialized('customerIntegrationMode') && null !== $object->getCustomerIntegrationMode()) {
                $data['customerIntegrationMode'] = $object->getCustomerIntegrationMode();
            }
            if ($object->isInitialized('astraDescription') && null !== $object->getAstraDescription()) {
                $data['astraDescription'] = $object->getAstraDescription();
            }
            if ($object->isInitialized('ltlPaymentTerms') && null !== $object->getLtlPaymentTerms()) {
                $values = [];
                foreach ($object->getLtlPaymentTerms() as $value) {
                    $values[] = $value;
                }
                $data['ltlPaymentTerms'] = $values;
            }
            if ($object->isInitialized('subType') && null !== $object->getSubType()) {
                $data['subType'] = $object->getSubType();
            }
            if ($object->isInitialized('value') && null !== $object->getValue()) {
                $data['value'] = $object->getValue();
            }
            if ($object->isInitialized('specialServiceType') && null !== $object->getSpecialServiceType()) {
                $data['specialServiceType'] = $object->getSpecialServiceType();
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
            return ['AntibodiesOnline\\FedEx\\Model\\AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemShipmentSpecialServicesListItem' => false];
        }
    }
}
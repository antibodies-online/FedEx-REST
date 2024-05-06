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
    class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('offeror', $data)) {
                $object->setOfferor($data['offeror']);
                unset($data['offeror']);
            }
            if (\array_key_exists('accessibility', $data)) {
                $object->setAccessibility($data['accessibility']);
                unset($data['accessibility']);
            }
            if (\array_key_exists('emergencyContactNumber', $data)) {
                $object->setEmergencyContactNumber($data['emergencyContactNumber']);
                unset($data['emergencyContactNumber']);
            }
            if (\array_key_exists('options', $data)) {
                $values = [];
                foreach ($data['options'] as $value) {
                    $values[] = $value;
                }
                $object->setOptions($values);
                unset($data['options']);
            }
            if (\array_key_exists('containers', $data)) {
                $values_1 = [];
                foreach ($data['containers'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItem', 'json', $context);
                }
                $object->setContainers($values_1);
                unset($data['containers']);
            }
            if (\array_key_exists('regulation', $data)) {
                $object->setRegulation($data['regulation']);
                unset($data['regulation']);
            }
            if (\array_key_exists('packaging', $data)) {
                $object->setPackaging($this->denormalizer->denormalize($data['packaging'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailPackaging', 'json', $context));
                unset($data['packaging']);
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
            if ($object->isInitialized('offeror') && null !== $object->getOfferor()) {
                $data['offeror'] = $object->getOfferor();
            }
            if ($object->isInitialized('accessibility') && null !== $object->getAccessibility()) {
                $data['accessibility'] = $object->getAccessibility();
            }
            if ($object->isInitialized('emergencyContactNumber') && null !== $object->getEmergencyContactNumber()) {
                $data['emergencyContactNumber'] = $object->getEmergencyContactNumber();
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values = [];
                foreach ($object->getOptions() as $value) {
                    $values[] = $value;
                }
                $data['options'] = $values;
            }
            if ($object->isInitialized('containers') && null !== $object->getContainers()) {
                $values_1 = [];
                foreach ($object->getContainers() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['containers'] = $values_1;
            }
            if ($object->isInitialized('regulation') && null !== $object->getRegulation()) {
                $data['regulation'] = $object->getRegulation();
            }
            if ($object->isInitialized('packaging') && null !== $object->getPackaging()) {
                $data['packaging'] = $this->normalizer->normalize($object->getPackaging(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetail' => false];
        }
    }
} else {
    class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetail';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('offeror', $data)) {
                $object->setOfferor($data['offeror']);
                unset($data['offeror']);
            }
            if (\array_key_exists('accessibility', $data)) {
                $object->setAccessibility($data['accessibility']);
                unset($data['accessibility']);
            }
            if (\array_key_exists('emergencyContactNumber', $data)) {
                $object->setEmergencyContactNumber($data['emergencyContactNumber']);
                unset($data['emergencyContactNumber']);
            }
            if (\array_key_exists('options', $data)) {
                $values = [];
                foreach ($data['options'] as $value) {
                    $values[] = $value;
                }
                $object->setOptions($values);
                unset($data['options']);
            }
            if (\array_key_exists('containers', $data)) {
                $values_1 = [];
                foreach ($data['containers'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItem', 'json', $context);
                }
                $object->setContainers($values_1);
                unset($data['containers']);
            }
            if (\array_key_exists('regulation', $data)) {
                $object->setRegulation($data['regulation']);
                unset($data['regulation']);
            }
            if (\array_key_exists('packaging', $data)) {
                $object->setPackaging($this->denormalizer->denormalize($data['packaging'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailPackaging', 'json', $context));
                unset($data['packaging']);
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
            if ($object->isInitialized('offeror') && null !== $object->getOfferor()) {
                $data['offeror'] = $object->getOfferor();
            }
            if ($object->isInitialized('accessibility') && null !== $object->getAccessibility()) {
                $data['accessibility'] = $object->getAccessibility();
            }
            if ($object->isInitialized('emergencyContactNumber') && null !== $object->getEmergencyContactNumber()) {
                $data['emergencyContactNumber'] = $object->getEmergencyContactNumber();
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values = [];
                foreach ($object->getOptions() as $value) {
                    $values[] = $value;
                }
                $data['options'] = $values;
            }
            if ($object->isInitialized('containers') && null !== $object->getContainers()) {
                $values_1 = [];
                foreach ($object->getContainers() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['containers'] = $values_1;
            }
            if ($object->isInitialized('regulation') && null !== $object->getRegulation()) {
                $data['regulation'] = $object->getRegulation();
            }
            if ($object->isInitialized('packaging') && null !== $object->getPackaging()) {
                $data['packaging'] = $this->normalizer->normalize($object->getPackaging(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetail' => false];
        }
    }
}
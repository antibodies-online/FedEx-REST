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
    class ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItemvariableHandlingChargeDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItemvariableHandlingChargeDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItemvariableHandlingChargeDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItemvariableHandlingChargeDetail();
            if (\array_key_exists('percentValue', $data) && \is_int($data['percentValue'])) {
                $data['percentValue'] = (double) $data['percentValue'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('rateType', $data)) {
                $object->setRateType($data['rateType']);
                unset($data['rateType']);
            }
            if (\array_key_exists('percentValue', $data)) {
                $object->setPercentValue($data['percentValue']);
                unset($data['percentValue']);
            }
            if (\array_key_exists('rateLevelType', $data)) {
                $object->setRateLevelType($data['rateLevelType']);
                unset($data['rateLevelType']);
            }
            if (\array_key_exists('fixedValue', $data)) {
                $object->setFixedValue($this->denormalizer->denormalize($data['fixedValue'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItemvariableHandlingChargeDetailFixedValue', 'json', $context));
                unset($data['fixedValue']);
            }
            if (\array_key_exists('rateElementBasis', $data)) {
                $object->setRateElementBasis($data['rateElementBasis']);
                unset($data['rateElementBasis']);
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
            if ($object->isInitialized('rateType') && null !== $object->getRateType()) {
                $data['rateType'] = $object->getRateType();
            }
            if ($object->isInitialized('percentValue') && null !== $object->getPercentValue()) {
                $data['percentValue'] = $object->getPercentValue();
            }
            if ($object->isInitialized('rateLevelType') && null !== $object->getRateLevelType()) {
                $data['rateLevelType'] = $object->getRateLevelType();
            }
            if ($object->isInitialized('fixedValue') && null !== $object->getFixedValue()) {
                $data['fixedValue'] = $this->normalizer->normalize($object->getFixedValue(), 'json', $context);
            }
            if ($object->isInitialized('rateElementBasis') && null !== $object->getRateElementBasis()) {
                $data['rateElementBasis'] = $object->getRateElementBasis();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItemvariableHandlingChargeDetail' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItemvariableHandlingChargeDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItemvariableHandlingChargeDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItemvariableHandlingChargeDetail';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItemvariableHandlingChargeDetail();
            if (\array_key_exists('percentValue', $data) && \is_int($data['percentValue'])) {
                $data['percentValue'] = (double) $data['percentValue'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('rateType', $data)) {
                $object->setRateType($data['rateType']);
                unset($data['rateType']);
            }
            if (\array_key_exists('percentValue', $data)) {
                $object->setPercentValue($data['percentValue']);
                unset($data['percentValue']);
            }
            if (\array_key_exists('rateLevelType', $data)) {
                $object->setRateLevelType($data['rateLevelType']);
                unset($data['rateLevelType']);
            }
            if (\array_key_exists('fixedValue', $data)) {
                $object->setFixedValue($this->denormalizer->denormalize($data['fixedValue'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItemvariableHandlingChargeDetailFixedValue', 'json', $context));
                unset($data['fixedValue']);
            }
            if (\array_key_exists('rateElementBasis', $data)) {
                $object->setRateElementBasis($data['rateElementBasis']);
                unset($data['rateElementBasis']);
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
            if ($object->isInitialized('rateType') && null !== $object->getRateType()) {
                $data['rateType'] = $object->getRateType();
            }
            if ($object->isInitialized('percentValue') && null !== $object->getPercentValue()) {
                $data['percentValue'] = $object->getPercentValue();
            }
            if ($object->isInitialized('rateLevelType') && null !== $object->getRateLevelType()) {
                $data['rateLevelType'] = $object->getRateLevelType();
            }
            if ($object->isInitialized('fixedValue') && null !== $object->getFixedValue()) {
                $data['fixedValue'] = $this->normalizer->normalize($object->getFixedValue(), 'json', $context);
            }
            if ($object->isInitialized('rateElementBasis') && null !== $object->getRateElementBasis()) {
                $data['rateElementBasis'] = $object->getRateElementBasis();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItemvariableHandlingChargeDetail' => false];
        }
    }
}
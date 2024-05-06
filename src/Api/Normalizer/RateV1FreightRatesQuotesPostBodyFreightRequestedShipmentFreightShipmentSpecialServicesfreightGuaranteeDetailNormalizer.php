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
    class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightGuaranteeDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightGuaranteeDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightGuaranteeDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightGuaranteeDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('freightGuaranteeType', $data)) {
                $object->setFreightGuaranteeType($data['freightGuaranteeType']);
                unset($data['freightGuaranteeType']);
            }
            if (\array_key_exists('guaranteeTimestamp', $data)) {
                $object->setGuaranteeTimestamp($data['guaranteeTimestamp']);
                unset($data['guaranteeTimestamp']);
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
            if ($object->isInitialized('freightGuaranteeType') && null !== $object->getFreightGuaranteeType()) {
                $data['freightGuaranteeType'] = $object->getFreightGuaranteeType();
            }
            if ($object->isInitialized('guaranteeTimestamp') && null !== $object->getGuaranteeTimestamp()) {
                $data['guaranteeTimestamp'] = $object->getGuaranteeTimestamp();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightGuaranteeDetail' => false];
        }
    }
} else {
    class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightGuaranteeDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightGuaranteeDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightGuaranteeDetail';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightGuaranteeDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('freightGuaranteeType', $data)) {
                $object->setFreightGuaranteeType($data['freightGuaranteeType']);
                unset($data['freightGuaranteeType']);
            }
            if (\array_key_exists('guaranteeTimestamp', $data)) {
                $object->setGuaranteeTimestamp($data['guaranteeTimestamp']);
                unset($data['guaranteeTimestamp']);
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
            if ($object->isInitialized('freightGuaranteeType') && null !== $object->getFreightGuaranteeType()) {
                $data['freightGuaranteeType'] = $object->getFreightGuaranteeType();
            }
            if ($object->isInitialized('guaranteeTimestamp') && null !== $object->getGuaranteeTimestamp()) {
                $data['guaranteeTimestamp'] = $object->getGuaranteeTimestamp();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightGuaranteeDetail' => false];
        }
    }
}
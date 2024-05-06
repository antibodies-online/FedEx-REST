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
    class TrackV1ReferencenumbersPostBodyReferencesInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1ReferencenumbersPostBodyReferencesInformation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1ReferencenumbersPostBodyReferencesInformation';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostBodyReferencesInformation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('carrierCode', $data)) {
                $object->setCarrierCode($data['carrierCode']);
                unset($data['carrierCode']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('value', $data)) {
                $object->setValue($data['value']);
                unset($data['value']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($data['accountNumber']);
                unset($data['accountNumber']);
            }
            if (\array_key_exists('shipDateBegin', $data)) {
                $object->setShipDateBegin($data['shipDateBegin']);
                unset($data['shipDateBegin']);
            }
            if (\array_key_exists('shipDateEndDate', $data)) {
                $object->setShipDateEndDate($data['shipDateEndDate']);
                unset($data['shipDateEndDate']);
            }
            if (\array_key_exists('destinationCountryCode', $data)) {
                $object->setDestinationCountryCode($data['destinationCountryCode']);
                unset($data['destinationCountryCode']);
            }
            if (\array_key_exists('destinationPostalCode', $data)) {
                $object->setDestinationPostalCode($data['destinationPostalCode']);
                unset($data['destinationPostalCode']);
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
            if ($object->isInitialized('carrierCode') && null !== $object->getCarrierCode()) {
                $data['carrierCode'] = $object->getCarrierCode();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            $data['value'] = $object->getValue();
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['accountNumber'] = $object->getAccountNumber();
            }
            $data['shipDateBegin'] = $object->getShipDateBegin();
            $data['shipDateEndDate'] = $object->getShipDateEndDate();
            if ($object->isInitialized('destinationCountryCode') && null !== $object->getDestinationCountryCode()) {
                $data['destinationCountryCode'] = $object->getDestinationCountryCode();
            }
            if ($object->isInitialized('destinationPostalCode') && null !== $object->getDestinationPostalCode()) {
                $data['destinationPostalCode'] = $object->getDestinationPostalCode();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1ReferencenumbersPostBodyReferencesInformation' => false];
        }
    }
} else {
    class TrackV1ReferencenumbersPostBodyReferencesInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1ReferencenumbersPostBodyReferencesInformation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1ReferencenumbersPostBodyReferencesInformation';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostBodyReferencesInformation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('carrierCode', $data)) {
                $object->setCarrierCode($data['carrierCode']);
                unset($data['carrierCode']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('value', $data)) {
                $object->setValue($data['value']);
                unset($data['value']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($data['accountNumber']);
                unset($data['accountNumber']);
            }
            if (\array_key_exists('shipDateBegin', $data)) {
                $object->setShipDateBegin($data['shipDateBegin']);
                unset($data['shipDateBegin']);
            }
            if (\array_key_exists('shipDateEndDate', $data)) {
                $object->setShipDateEndDate($data['shipDateEndDate']);
                unset($data['shipDateEndDate']);
            }
            if (\array_key_exists('destinationCountryCode', $data)) {
                $object->setDestinationCountryCode($data['destinationCountryCode']);
                unset($data['destinationCountryCode']);
            }
            if (\array_key_exists('destinationPostalCode', $data)) {
                $object->setDestinationPostalCode($data['destinationPostalCode']);
                unset($data['destinationPostalCode']);
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
            if ($object->isInitialized('carrierCode') && null !== $object->getCarrierCode()) {
                $data['carrierCode'] = $object->getCarrierCode();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            $data['value'] = $object->getValue();
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['accountNumber'] = $object->getAccountNumber();
            }
            $data['shipDateBegin'] = $object->getShipDateBegin();
            $data['shipDateEndDate'] = $object->getShipDateEndDate();
            if ($object->isInitialized('destinationCountryCode') && null !== $object->getDestinationCountryCode()) {
                $data['destinationCountryCode'] = $object->getDestinationCountryCode();
            }
            if ($object->isInitialized('destinationPostalCode') && null !== $object->getDestinationPostalCode()) {
                $data['destinationPostalCode'] = $object->getDestinationPostalCode();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1ReferencenumbersPostBodyReferencesInformation' => false];
        }
    }
}
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
    class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('addTransportationChargesDetail', $data)) {
                $object->setAddTransportationChargesDetail($this->denormalizer->denormalize($data['addTransportationChargesDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailaddTransportationChargesDetail::class, 'json', $context));
                unset($data['addTransportationChargesDetail']);
            }
            if (\array_key_exists('codRecipient', $data)) {
                $object->setCodRecipient($this->denormalizer->denormalize($data['codRecipient'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipient::class, 'json', $context));
                unset($data['codRecipient']);
            }
            if (\array_key_exists('remitToName', $data)) {
                $object->setRemitToName($data['remitToName']);
                unset($data['remitToName']);
            }
            if (\array_key_exists('codCollectionType', $data)) {
                $object->setCodCollectionType($data['codCollectionType']);
                unset($data['codCollectionType']);
            }
            if (\array_key_exists('financialInstitutionContactAndAddress', $data)) {
                $object->setFinancialInstitutionContactAndAddress($this->denormalizer->denormalize($data['financialInstitutionContactAndAddress'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddress::class, 'json', $context));
                unset($data['financialInstitutionContactAndAddress']);
            }
            if (\array_key_exists('returnReferenceIndicatorType', $data)) {
                $object->setReturnReferenceIndicatorType($data['returnReferenceIndicatorType']);
                unset($data['returnReferenceIndicatorType']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('addTransportationChargesDetail') && null !== $object->getAddTransportationChargesDetail()) {
                $data['addTransportationChargesDetail'] = $this->normalizer->normalize($object->getAddTransportationChargesDetail(), 'json', $context);
            }
            if ($object->isInitialized('codRecipient') && null !== $object->getCodRecipient()) {
                $data['codRecipient'] = $this->normalizer->normalize($object->getCodRecipient(), 'json', $context);
            }
            if ($object->isInitialized('remitToName') && null !== $object->getRemitToName()) {
                $data['remitToName'] = $object->getRemitToName();
            }
            if ($object->isInitialized('codCollectionType') && null !== $object->getCodCollectionType()) {
                $data['codCollectionType'] = $object->getCodCollectionType();
            }
            if ($object->isInitialized('financialInstitutionContactAndAddress') && null !== $object->getFinancialInstitutionContactAndAddress()) {
                $data['financialInstitutionContactAndAddress'] = $this->normalizer->normalize($object->getFinancialInstitutionContactAndAddress(), 'json', $context);
            }
            if ($object->isInitialized('returnReferenceIndicatorType') && null !== $object->getReturnReferenceIndicatorType()) {
                $data['returnReferenceIndicatorType'] = $object->getReturnReferenceIndicatorType();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetail::class => false];
        }
    }
} else {
    class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetail::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('addTransportationChargesDetail', $data)) {
                $object->setAddTransportationChargesDetail($this->denormalizer->denormalize($data['addTransportationChargesDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailaddTransportationChargesDetail::class, 'json', $context));
                unset($data['addTransportationChargesDetail']);
            }
            if (\array_key_exists('codRecipient', $data)) {
                $object->setCodRecipient($this->denormalizer->denormalize($data['codRecipient'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipient::class, 'json', $context));
                unset($data['codRecipient']);
            }
            if (\array_key_exists('remitToName', $data)) {
                $object->setRemitToName($data['remitToName']);
                unset($data['remitToName']);
            }
            if (\array_key_exists('codCollectionType', $data)) {
                $object->setCodCollectionType($data['codCollectionType']);
                unset($data['codCollectionType']);
            }
            if (\array_key_exists('financialInstitutionContactAndAddress', $data)) {
                $object->setFinancialInstitutionContactAndAddress($this->denormalizer->denormalize($data['financialInstitutionContactAndAddress'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddress::class, 'json', $context));
                unset($data['financialInstitutionContactAndAddress']);
            }
            if (\array_key_exists('returnReferenceIndicatorType', $data)) {
                $object->setReturnReferenceIndicatorType($data['returnReferenceIndicatorType']);
                unset($data['returnReferenceIndicatorType']);
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
            if ($object->isInitialized('addTransportationChargesDetail') && null !== $object->getAddTransportationChargesDetail()) {
                $data['addTransportationChargesDetail'] = $this->normalizer->normalize($object->getAddTransportationChargesDetail(), 'json', $context);
            }
            if ($object->isInitialized('codRecipient') && null !== $object->getCodRecipient()) {
                $data['codRecipient'] = $this->normalizer->normalize($object->getCodRecipient(), 'json', $context);
            }
            if ($object->isInitialized('remitToName') && null !== $object->getRemitToName()) {
                $data['remitToName'] = $object->getRemitToName();
            }
            if ($object->isInitialized('codCollectionType') && null !== $object->getCodCollectionType()) {
                $data['codCollectionType'] = $object->getCodCollectionType();
            }
            if ($object->isInitialized('financialInstitutionContactAndAddress') && null !== $object->getFinancialInstitutionContactAndAddress()) {
                $data['financialInstitutionContactAndAddress'] = $this->normalizer->normalize($object->getFinancialInstitutionContactAndAddress(), 'json', $context);
            }
            if ($object->isInitialized('returnReferenceIndicatorType') && null !== $object->getReturnReferenceIndicatorType()) {
                $data['returnReferenceIndicatorType'] = $object->getReturnReferenceIndicatorType();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetail::class => false];
        }
    }
}
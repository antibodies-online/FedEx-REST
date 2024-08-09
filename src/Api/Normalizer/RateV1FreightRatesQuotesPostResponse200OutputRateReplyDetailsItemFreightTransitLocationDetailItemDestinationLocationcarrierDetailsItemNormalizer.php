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
    class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('countryRelationshipType', $data)) {
                $object->setCountryRelationshipType($data['countryRelationshipType']);
                unset($data['countryRelationshipType']);
            }
            if (\array_key_exists('carrierCodeType', $data)) {
                $object->setCarrierCodeType($data['carrierCodeType']);
                unset($data['carrierCodeType']);
            }
            if (\array_key_exists('latestDropoffDetails', $data)) {
                $object->setLatestDropoffDetails($this->denormalizer->denormalize($data['latestDropoffDetails'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItemLatestDropoffDetails::class, 'json', $context));
                unset($data['latestDropoffDetails']);
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
            if ($object->isInitialized('countryRelationshipType') && null !== $object->getCountryRelationshipType()) {
                $data['countryRelationshipType'] = $object->getCountryRelationshipType();
            }
            if ($object->isInitialized('carrierCodeType') && null !== $object->getCarrierCodeType()) {
                $data['carrierCodeType'] = $object->getCarrierCodeType();
            }
            if ($object->isInitialized('latestDropoffDetails') && null !== $object->getLatestDropoffDetails()) {
                $data['latestDropoffDetails'] = $this->normalizer->normalize($object->getLatestDropoffDetails(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItem::class => false];
        }
    }
} else {
    class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('countryRelationshipType', $data)) {
                $object->setCountryRelationshipType($data['countryRelationshipType']);
                unset($data['countryRelationshipType']);
            }
            if (\array_key_exists('carrierCodeType', $data)) {
                $object->setCarrierCodeType($data['carrierCodeType']);
                unset($data['carrierCodeType']);
            }
            if (\array_key_exists('latestDropoffDetails', $data)) {
                $object->setLatestDropoffDetails($this->denormalizer->denormalize($data['latestDropoffDetails'], \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItemLatestDropoffDetails::class, 'json', $context));
                unset($data['latestDropoffDetails']);
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
            if ($object->isInitialized('countryRelationshipType') && null !== $object->getCountryRelationshipType()) {
                $data['countryRelationshipType'] = $object->getCountryRelationshipType();
            }
            if ($object->isInitialized('carrierCodeType') && null !== $object->getCarrierCodeType()) {
                $data['carrierCodeType'] = $object->getCarrierCodeType();
            }
            if ($object->isInitialized('latestDropoffDetails') && null !== $object->getLatestDropoffDetails()) {
                $data['latestDropoffDetails'] = $this->normalizer->normalize($object->getLatestDropoffDetails(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItem::class => false];
        }
    }
}
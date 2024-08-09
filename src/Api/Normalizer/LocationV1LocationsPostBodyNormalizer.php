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
    class LocationV1LocationsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('locationsSummaryRequestControlParameters', $data)) {
                $object->setLocationsSummaryRequestControlParameters($this->denormalizer->denormalize($data['locationsSummaryRequestControlParameters'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBodyLocationsSummaryRequestControlParameters::class, 'json', $context));
                unset($data['locationsSummaryRequestControlParameters']);
            }
            if (\array_key_exists('constraints', $data)) {
                $object->setConstraints($this->denormalizer->denormalize($data['constraints'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBodyConstraints::class, 'json', $context));
                unset($data['constraints']);
            }
            if (\array_key_exists('locationSearchCriterion', $data)) {
                $object->setLocationSearchCriterion($data['locationSearchCriterion']);
                unset($data['locationSearchCriterion']);
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($this->denormalizer->denormalize($data['location'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBodyLocation::class, 'json', $context));
                unset($data['location']);
            }
            if (\array_key_exists('phoneNumber', $data)) {
                $object->setPhoneNumber($data['phoneNumber']);
                unset($data['phoneNumber']);
            }
            if (\array_key_exists('multipleMatchesAction', $data)) {
                $object->setMultipleMatchesAction($data['multipleMatchesAction']);
                unset($data['multipleMatchesAction']);
            }
            if (\array_key_exists('sort', $data)) {
                $object->setSort($this->denormalizer->denormalize($data['sort'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBodySort::class, 'json', $context));
                unset($data['sort']);
            }
            if (\array_key_exists('trackingInfo', $data)) {
                $object->setTrackingInfo($this->denormalizer->denormalize($data['trackingInfo'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBodyTrackingInfo::class, 'json', $context));
                unset($data['trackingInfo']);
            }
            if (\array_key_exists('sameState', $data)) {
                $object->setSameState($data['sameState']);
                unset($data['sameState']);
            }
            if (\array_key_exists('sameCountry', $data)) {
                $object->setSameCountry($data['sameCountry']);
                unset($data['sameCountry']);
            }
            if (\array_key_exists('redirectToHoldType', $data)) {
                $object->setRedirectToHoldType($data['redirectToHoldType']);
                unset($data['redirectToHoldType']);
            }
            if (\array_key_exists('locationAttrTypes', $data)) {
                $values = [];
                foreach ($data['locationAttrTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setLocationAttrTypes($values);
                unset($data['locationAttrTypes']);
            }
            if (\array_key_exists('locationCapabilities', $data)) {
                $values_1 = [];
                foreach ($data['locationCapabilities'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBodyLocationCapabilitiesItem::class, 'json', $context);
                }
                $object->setLocationCapabilities($values_1);
                unset($data['locationCapabilities']);
            }
            if (\array_key_exists('packageAttributes', $data)) {
                $values_2 = [];
                foreach ($data['packageAttributes'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBodyPackageAttributesItem::class, 'json', $context);
                }
                $object->setPackageAttributes($values_2);
                unset($data['packageAttributes']);
            }
            if (\array_key_exists('locationTypes', $data)) {
                $values_3 = [];
                foreach ($data['locationTypes'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setLocationTypes($values_3);
                unset($data['locationTypes']);
            }
            if (\array_key_exists('includeHoliday', $data)) {
                $object->setIncludeHoliday($data['includeHoliday']);
                unset($data['includeHoliday']);
            }
            if (\array_key_exists('dropoffTime', $data)) {
                $object->setDropoffTime($data['dropoffTime']);
                unset($data['dropoffTime']);
            }
            if (\array_key_exists('dropOffServiceType', $data)) {
                $object->setDropOffServiceType($data['dropOffServiceType']);
                unset($data['dropOffServiceType']);
            }
            if (\array_key_exists('carrierCodes', $data)) {
                $values_4 = [];
                foreach ($data['carrierCodes'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setCarrierCodes($values_4);
                unset($data['carrierCodes']);
            }
            if (\array_key_exists('getCall', $data)) {
                $object->setGetCall($data['getCall']);
                unset($data['getCall']);
            }
            foreach ($data as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_5;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('locationsSummaryRequestControlParameters') && null !== $object->getLocationsSummaryRequestControlParameters()) {
                $data['locationsSummaryRequestControlParameters'] = $this->normalizer->normalize($object->getLocationsSummaryRequestControlParameters(), 'json', $context);
            }
            if ($object->isInitialized('constraints') && null !== $object->getConstraints()) {
                $data['constraints'] = $this->normalizer->normalize($object->getConstraints(), 'json', $context);
            }
            if ($object->isInitialized('locationSearchCriterion') && null !== $object->getLocationSearchCriterion()) {
                $data['locationSearchCriterion'] = $object->getLocationSearchCriterion();
            }
            $data['location'] = $this->normalizer->normalize($object->getLocation(), 'json', $context);
            if ($object->isInitialized('phoneNumber') && null !== $object->getPhoneNumber()) {
                $data['phoneNumber'] = $object->getPhoneNumber();
            }
            if ($object->isInitialized('multipleMatchesAction') && null !== $object->getMultipleMatchesAction()) {
                $data['multipleMatchesAction'] = $object->getMultipleMatchesAction();
            }
            if ($object->isInitialized('sort') && null !== $object->getSort()) {
                $data['sort'] = $this->normalizer->normalize($object->getSort(), 'json', $context);
            }
            if ($object->isInitialized('trackingInfo') && null !== $object->getTrackingInfo()) {
                $data['trackingInfo'] = $this->normalizer->normalize($object->getTrackingInfo(), 'json', $context);
            }
            if ($object->isInitialized('sameState') && null !== $object->getSameState()) {
                $data['sameState'] = $object->getSameState();
            }
            if ($object->isInitialized('sameCountry') && null !== $object->getSameCountry()) {
                $data['sameCountry'] = $object->getSameCountry();
            }
            if ($object->isInitialized('redirectToHoldType') && null !== $object->getRedirectToHoldType()) {
                $data['redirectToHoldType'] = $object->getRedirectToHoldType();
            }
            if ($object->isInitialized('locationAttrTypes') && null !== $object->getLocationAttrTypes()) {
                $values = [];
                foreach ($object->getLocationAttrTypes() as $value) {
                    $values[] = $value;
                }
                $data['locationAttrTypes'] = $values;
            }
            if ($object->isInitialized('locationCapabilities') && null !== $object->getLocationCapabilities()) {
                $values_1 = [];
                foreach ($object->getLocationCapabilities() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['locationCapabilities'] = $values_1;
            }
            if ($object->isInitialized('packageAttributes') && null !== $object->getPackageAttributes()) {
                $values_2 = [];
                foreach ($object->getPackageAttributes() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['packageAttributes'] = $values_2;
            }
            if ($object->isInitialized('locationTypes') && null !== $object->getLocationTypes()) {
                $values_3 = [];
                foreach ($object->getLocationTypes() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['locationTypes'] = $values_3;
            }
            if ($object->isInitialized('includeHoliday') && null !== $object->getIncludeHoliday()) {
                $data['includeHoliday'] = $object->getIncludeHoliday();
            }
            if ($object->isInitialized('dropoffTime') && null !== $object->getDropoffTime()) {
                $data['dropoffTime'] = $object->getDropoffTime();
            }
            if ($object->isInitialized('dropOffServiceType') && null !== $object->getDropOffServiceType()) {
                $data['dropOffServiceType'] = $object->getDropOffServiceType();
            }
            if ($object->isInitialized('carrierCodes') && null !== $object->getCarrierCodes()) {
                $values_4 = [];
                foreach ($object->getCarrierCodes() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['carrierCodes'] = $values_4;
            }
            if ($object->isInitialized('getCall') && null !== $object->getGetCall()) {
                $data['getCall'] = $object->getGetCall();
            }
            foreach ($object as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_5;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBody::class => false];
        }
    }
} else {
    class LocationV1LocationsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBody::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('locationsSummaryRequestControlParameters', $data)) {
                $object->setLocationsSummaryRequestControlParameters($this->denormalizer->denormalize($data['locationsSummaryRequestControlParameters'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBodyLocationsSummaryRequestControlParameters::class, 'json', $context));
                unset($data['locationsSummaryRequestControlParameters']);
            }
            if (\array_key_exists('constraints', $data)) {
                $object->setConstraints($this->denormalizer->denormalize($data['constraints'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBodyConstraints::class, 'json', $context));
                unset($data['constraints']);
            }
            if (\array_key_exists('locationSearchCriterion', $data)) {
                $object->setLocationSearchCriterion($data['locationSearchCriterion']);
                unset($data['locationSearchCriterion']);
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($this->denormalizer->denormalize($data['location'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBodyLocation::class, 'json', $context));
                unset($data['location']);
            }
            if (\array_key_exists('phoneNumber', $data)) {
                $object->setPhoneNumber($data['phoneNumber']);
                unset($data['phoneNumber']);
            }
            if (\array_key_exists('multipleMatchesAction', $data)) {
                $object->setMultipleMatchesAction($data['multipleMatchesAction']);
                unset($data['multipleMatchesAction']);
            }
            if (\array_key_exists('sort', $data)) {
                $object->setSort($this->denormalizer->denormalize($data['sort'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBodySort::class, 'json', $context));
                unset($data['sort']);
            }
            if (\array_key_exists('trackingInfo', $data)) {
                $object->setTrackingInfo($this->denormalizer->denormalize($data['trackingInfo'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBodyTrackingInfo::class, 'json', $context));
                unset($data['trackingInfo']);
            }
            if (\array_key_exists('sameState', $data)) {
                $object->setSameState($data['sameState']);
                unset($data['sameState']);
            }
            if (\array_key_exists('sameCountry', $data)) {
                $object->setSameCountry($data['sameCountry']);
                unset($data['sameCountry']);
            }
            if (\array_key_exists('redirectToHoldType', $data)) {
                $object->setRedirectToHoldType($data['redirectToHoldType']);
                unset($data['redirectToHoldType']);
            }
            if (\array_key_exists('locationAttrTypes', $data)) {
                $values = [];
                foreach ($data['locationAttrTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setLocationAttrTypes($values);
                unset($data['locationAttrTypes']);
            }
            if (\array_key_exists('locationCapabilities', $data)) {
                $values_1 = [];
                foreach ($data['locationCapabilities'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBodyLocationCapabilitiesItem::class, 'json', $context);
                }
                $object->setLocationCapabilities($values_1);
                unset($data['locationCapabilities']);
            }
            if (\array_key_exists('packageAttributes', $data)) {
                $values_2 = [];
                foreach ($data['packageAttributes'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBodyPackageAttributesItem::class, 'json', $context);
                }
                $object->setPackageAttributes($values_2);
                unset($data['packageAttributes']);
            }
            if (\array_key_exists('locationTypes', $data)) {
                $values_3 = [];
                foreach ($data['locationTypes'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setLocationTypes($values_3);
                unset($data['locationTypes']);
            }
            if (\array_key_exists('includeHoliday', $data)) {
                $object->setIncludeHoliday($data['includeHoliday']);
                unset($data['includeHoliday']);
            }
            if (\array_key_exists('dropoffTime', $data)) {
                $object->setDropoffTime($data['dropoffTime']);
                unset($data['dropoffTime']);
            }
            if (\array_key_exists('dropOffServiceType', $data)) {
                $object->setDropOffServiceType($data['dropOffServiceType']);
                unset($data['dropOffServiceType']);
            }
            if (\array_key_exists('carrierCodes', $data)) {
                $values_4 = [];
                foreach ($data['carrierCodes'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setCarrierCodes($values_4);
                unset($data['carrierCodes']);
            }
            if (\array_key_exists('getCall', $data)) {
                $object->setGetCall($data['getCall']);
                unset($data['getCall']);
            }
            foreach ($data as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_5;
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
            if ($object->isInitialized('locationsSummaryRequestControlParameters') && null !== $object->getLocationsSummaryRequestControlParameters()) {
                $data['locationsSummaryRequestControlParameters'] = $this->normalizer->normalize($object->getLocationsSummaryRequestControlParameters(), 'json', $context);
            }
            if ($object->isInitialized('constraints') && null !== $object->getConstraints()) {
                $data['constraints'] = $this->normalizer->normalize($object->getConstraints(), 'json', $context);
            }
            if ($object->isInitialized('locationSearchCriterion') && null !== $object->getLocationSearchCriterion()) {
                $data['locationSearchCriterion'] = $object->getLocationSearchCriterion();
            }
            $data['location'] = $this->normalizer->normalize($object->getLocation(), 'json', $context);
            if ($object->isInitialized('phoneNumber') && null !== $object->getPhoneNumber()) {
                $data['phoneNumber'] = $object->getPhoneNumber();
            }
            if ($object->isInitialized('multipleMatchesAction') && null !== $object->getMultipleMatchesAction()) {
                $data['multipleMatchesAction'] = $object->getMultipleMatchesAction();
            }
            if ($object->isInitialized('sort') && null !== $object->getSort()) {
                $data['sort'] = $this->normalizer->normalize($object->getSort(), 'json', $context);
            }
            if ($object->isInitialized('trackingInfo') && null !== $object->getTrackingInfo()) {
                $data['trackingInfo'] = $this->normalizer->normalize($object->getTrackingInfo(), 'json', $context);
            }
            if ($object->isInitialized('sameState') && null !== $object->getSameState()) {
                $data['sameState'] = $object->getSameState();
            }
            if ($object->isInitialized('sameCountry') && null !== $object->getSameCountry()) {
                $data['sameCountry'] = $object->getSameCountry();
            }
            if ($object->isInitialized('redirectToHoldType') && null !== $object->getRedirectToHoldType()) {
                $data['redirectToHoldType'] = $object->getRedirectToHoldType();
            }
            if ($object->isInitialized('locationAttrTypes') && null !== $object->getLocationAttrTypes()) {
                $values = [];
                foreach ($object->getLocationAttrTypes() as $value) {
                    $values[] = $value;
                }
                $data['locationAttrTypes'] = $values;
            }
            if ($object->isInitialized('locationCapabilities') && null !== $object->getLocationCapabilities()) {
                $values_1 = [];
                foreach ($object->getLocationCapabilities() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['locationCapabilities'] = $values_1;
            }
            if ($object->isInitialized('packageAttributes') && null !== $object->getPackageAttributes()) {
                $values_2 = [];
                foreach ($object->getPackageAttributes() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['packageAttributes'] = $values_2;
            }
            if ($object->isInitialized('locationTypes') && null !== $object->getLocationTypes()) {
                $values_3 = [];
                foreach ($object->getLocationTypes() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['locationTypes'] = $values_3;
            }
            if ($object->isInitialized('includeHoliday') && null !== $object->getIncludeHoliday()) {
                $data['includeHoliday'] = $object->getIncludeHoliday();
            }
            if ($object->isInitialized('dropoffTime') && null !== $object->getDropoffTime()) {
                $data['dropoffTime'] = $object->getDropoffTime();
            }
            if ($object->isInitialized('dropOffServiceType') && null !== $object->getDropOffServiceType()) {
                $data['dropOffServiceType'] = $object->getDropOffServiceType();
            }
            if ($object->isInitialized('carrierCodes') && null !== $object->getCarrierCodes()) {
                $values_4 = [];
                foreach ($object->getCarrierCodes() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['carrierCodes'] = $values_4;
            }
            if ($object->isInitialized('getCall') && null !== $object->getGetCall()) {
                $data['getCall'] = $object->getGetCall();
            }
            foreach ($object as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_5;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostBody::class => false];
        }
    }
}
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
    class LocationV1LocationsPostResponse200OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200Output::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200Output::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200Output();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('totalResults', $data)) {
                $object->setTotalResults($data['totalResults']);
                unset($data['totalResults']);
            }
            if (\array_key_exists('resultsReturned', $data)) {
                $object->setResultsReturned($data['resultsReturned']);
                unset($data['resultsReturned']);
            }
            if (\array_key_exists('matchedAddress', $data)) {
                $object->setMatchedAddress($this->denormalizer->denormalize($data['matchedAddress'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputmatchedAddress::class, 'json', $context));
                unset($data['matchedAddress']);
            }
            if (\array_key_exists('matchedAddressGeoCoord', $data)) {
                $object->setMatchedAddressGeoCoord($this->denormalizer->denormalize($data['matchedAddressGeoCoord'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputmatchedAddressGeoCoord::class, 'json', $context));
                unset($data['matchedAddressGeoCoord']);
            }
            if (\array_key_exists('locationDetailList', $data)) {
                $values = [];
                foreach ($data['locationDetailList'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputlocationDetailListItem::class, 'json', $context);
                }
                $object->setLocationDetailList($values);
                unset($data['locationDetailList']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values_1 = [];
                foreach ($data['alerts'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputalertsItem::class, 'json', $context);
                }
                $object->setAlerts($values_1);
                unset($data['alerts']);
            }
            if (\array_key_exists('nearestLocation', $data)) {
                $object->setNearestLocation($this->denormalizer->denormalize($data['nearestLocation'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputnearestLocation::class, 'json', $context));
                unset($data['nearestLocation']);
            }
            if (\array_key_exists('latestLocation', $data)) {
                $object->setLatestLocation($this->denormalizer->denormalize($data['latestLocation'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputlatestLocation::class, 'json', $context));
                unset($data['latestLocation']);
            }
            if (\array_key_exists('ambiguousAddress', $data)) {
                $values_2 = [];
                foreach ($data['ambiguousAddress'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputambiguousAddressItem::class, 'json', $context);
                }
                $object->setAmbiguousAddress($values_2);
                unset($data['ambiguousAddress']);
            }
            if (\array_key_exists('ambiguousLocationsReturned', $data)) {
                $object->setAmbiguousLocationsReturned($data['ambiguousLocationsReturned']);
                unset($data['ambiguousLocationsReturned']);
            }
            if (\array_key_exists('nearestLocationReturned', $data)) {
                $object->setNearestLocationReturned($data['nearestLocationReturned']);
                unset($data['nearestLocationReturned']);
            }
            if (\array_key_exists('latestLocationReturned', $data)) {
                $object->setLatestLocationReturned($data['latestLocationReturned']);
                unset($data['latestLocationReturned']);
            }
            if (\array_key_exists('lockerAvailabilityCode', $data)) {
                $object->setLockerAvailabilityCode($data['lockerAvailabilityCode']);
                unset($data['lockerAvailabilityCode']);
            }
            if (\array_key_exists('lockerAvailabilityMessage', $data)) {
                $object->setLockerAvailabilityMessage($data['lockerAvailabilityMessage']);
                unset($data['lockerAvailabilityMessage']);
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($this->denormalizer->denormalize($data['location'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200Outputlocation::class, 'json', $context));
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
                $object->setSort($this->denormalizer->denormalize($data['sort'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200Outputsort::class, 'json', $context));
                unset($data['sort']);
            }
            if (\array_key_exists('trackingInfo', $data)) {
                $object->setTrackingInfo($this->denormalizer->denormalize($data['trackingInfo'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputtrackingInfo::class, 'json', $context));
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
                $values_3 = [];
                foreach ($data['locationAttrTypes'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setLocationAttrTypes($values_3);
                unset($data['locationAttrTypes']);
            }
            if (\array_key_exists('locationCapabilities', $data)) {
                $values_4 = [];
                foreach ($data['locationCapabilities'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputlocationCapabilitiesItem::class, 'json', $context);
                }
                $object->setLocationCapabilities($values_4);
                unset($data['locationCapabilities']);
            }
            if (\array_key_exists('packageMaximumLimits', $data)) {
                $values_5 = [];
                foreach ($data['packageMaximumLimits'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputpackageMaximumLimitsItem::class, 'json', $context);
                }
                $object->setPackageMaximumLimits($values_5);
                unset($data['packageMaximumLimits']);
            }
            if (\array_key_exists('locationTypes', $data)) {
                $values_6 = [];
                foreach ($data['locationTypes'] as $value_6) {
                    $values_6[] = $value_6;
                }
                $object->setLocationTypes($values_6);
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
            if (\array_key_exists('searchBy', $data)) {
                $object->setSearchBy($data['searchBy']);
                unset($data['searchBy']);
            }
            if (\array_key_exists('contentOptions', $data)) {
                $object->setContentOptions($data['contentOptions']);
                unset($data['contentOptions']);
            }
            if (\array_key_exists('carrierCodes', $data)) {
                $values_7 = [];
                foreach ($data['carrierCodes'] as $value_7) {
                    $values_7[] = $value_7;
                }
                $object->setCarrierCodes($values_7);
                unset($data['carrierCodes']);
            }
            if (\array_key_exists('getCall', $data)) {
                $object->setGetCall($data['getCall']);
                unset($data['getCall']);
            }
            foreach ($data as $key => $value_8) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_8;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('totalResults') && null !== $object->getTotalResults()) {
                $data['totalResults'] = $object->getTotalResults();
            }
            if ($object->isInitialized('resultsReturned') && null !== $object->getResultsReturned()) {
                $data['resultsReturned'] = $object->getResultsReturned();
            }
            if ($object->isInitialized('matchedAddress') && null !== $object->getMatchedAddress()) {
                $data['matchedAddress'] = $this->normalizer->normalize($object->getMatchedAddress(), 'json', $context);
            }
            if ($object->isInitialized('matchedAddressGeoCoord') && null !== $object->getMatchedAddressGeoCoord()) {
                $data['matchedAddressGeoCoord'] = $this->normalizer->normalize($object->getMatchedAddressGeoCoord(), 'json', $context);
            }
            if ($object->isInitialized('locationDetailList') && null !== $object->getLocationDetailList()) {
                $values = [];
                foreach ($object->getLocationDetailList() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['locationDetailList'] = $values;
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values_1 = [];
                foreach ($object->getAlerts() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['alerts'] = $values_1;
            }
            if ($object->isInitialized('nearestLocation') && null !== $object->getNearestLocation()) {
                $data['nearestLocation'] = $this->normalizer->normalize($object->getNearestLocation(), 'json', $context);
            }
            if ($object->isInitialized('latestLocation') && null !== $object->getLatestLocation()) {
                $data['latestLocation'] = $this->normalizer->normalize($object->getLatestLocation(), 'json', $context);
            }
            if ($object->isInitialized('ambiguousAddress') && null !== $object->getAmbiguousAddress()) {
                $values_2 = [];
                foreach ($object->getAmbiguousAddress() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['ambiguousAddress'] = $values_2;
            }
            if ($object->isInitialized('ambiguousLocationsReturned') && null !== $object->getAmbiguousLocationsReturned()) {
                $data['ambiguousLocationsReturned'] = $object->getAmbiguousLocationsReturned();
            }
            if ($object->isInitialized('nearestLocationReturned') && null !== $object->getNearestLocationReturned()) {
                $data['nearestLocationReturned'] = $object->getNearestLocationReturned();
            }
            if ($object->isInitialized('latestLocationReturned') && null !== $object->getLatestLocationReturned()) {
                $data['latestLocationReturned'] = $object->getLatestLocationReturned();
            }
            if ($object->isInitialized('lockerAvailabilityCode') && null !== $object->getLockerAvailabilityCode()) {
                $data['lockerAvailabilityCode'] = $object->getLockerAvailabilityCode();
            }
            if ($object->isInitialized('lockerAvailabilityMessage') && null !== $object->getLockerAvailabilityMessage()) {
                $data['lockerAvailabilityMessage'] = $object->getLockerAvailabilityMessage();
            }
            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['location'] = $this->normalizer->normalize($object->getLocation(), 'json', $context);
            }
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
                $values_3 = [];
                foreach ($object->getLocationAttrTypes() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['locationAttrTypes'] = $values_3;
            }
            if ($object->isInitialized('locationCapabilities') && null !== $object->getLocationCapabilities()) {
                $values_4 = [];
                foreach ($object->getLocationCapabilities() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['locationCapabilities'] = $values_4;
            }
            if ($object->isInitialized('packageMaximumLimits') && null !== $object->getPackageMaximumLimits()) {
                $values_5 = [];
                foreach ($object->getPackageMaximumLimits() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['packageMaximumLimits'] = $values_5;
            }
            if ($object->isInitialized('locationTypes') && null !== $object->getLocationTypes()) {
                $values_6 = [];
                foreach ($object->getLocationTypes() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['locationTypes'] = $values_6;
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
            if ($object->isInitialized('searchBy') && null !== $object->getSearchBy()) {
                $data['searchBy'] = $object->getSearchBy();
            }
            if ($object->isInitialized('contentOptions') && null !== $object->getContentOptions()) {
                $data['contentOptions'] = $object->getContentOptions();
            }
            if ($object->isInitialized('carrierCodes') && null !== $object->getCarrierCodes()) {
                $values_7 = [];
                foreach ($object->getCarrierCodes() as $value_7) {
                    $values_7[] = $value_7;
                }
                $data['carrierCodes'] = $values_7;
            }
            if ($object->isInitialized('getCall') && null !== $object->getGetCall()) {
                $data['getCall'] = $object->getGetCall();
            }
            foreach ($object as $key => $value_8) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_8;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200Output::class => false];
        }
    }
} else {
    class LocationV1LocationsPostResponse200OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200Output::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200Output::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200Output();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('totalResults', $data)) {
                $object->setTotalResults($data['totalResults']);
                unset($data['totalResults']);
            }
            if (\array_key_exists('resultsReturned', $data)) {
                $object->setResultsReturned($data['resultsReturned']);
                unset($data['resultsReturned']);
            }
            if (\array_key_exists('matchedAddress', $data)) {
                $object->setMatchedAddress($this->denormalizer->denormalize($data['matchedAddress'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputmatchedAddress::class, 'json', $context));
                unset($data['matchedAddress']);
            }
            if (\array_key_exists('matchedAddressGeoCoord', $data)) {
                $object->setMatchedAddressGeoCoord($this->denormalizer->denormalize($data['matchedAddressGeoCoord'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputmatchedAddressGeoCoord::class, 'json', $context));
                unset($data['matchedAddressGeoCoord']);
            }
            if (\array_key_exists('locationDetailList', $data)) {
                $values = [];
                foreach ($data['locationDetailList'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputlocationDetailListItem::class, 'json', $context);
                }
                $object->setLocationDetailList($values);
                unset($data['locationDetailList']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values_1 = [];
                foreach ($data['alerts'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputalertsItem::class, 'json', $context);
                }
                $object->setAlerts($values_1);
                unset($data['alerts']);
            }
            if (\array_key_exists('nearestLocation', $data)) {
                $object->setNearestLocation($this->denormalizer->denormalize($data['nearestLocation'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputnearestLocation::class, 'json', $context));
                unset($data['nearestLocation']);
            }
            if (\array_key_exists('latestLocation', $data)) {
                $object->setLatestLocation($this->denormalizer->denormalize($data['latestLocation'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputlatestLocation::class, 'json', $context));
                unset($data['latestLocation']);
            }
            if (\array_key_exists('ambiguousAddress', $data)) {
                $values_2 = [];
                foreach ($data['ambiguousAddress'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputambiguousAddressItem::class, 'json', $context);
                }
                $object->setAmbiguousAddress($values_2);
                unset($data['ambiguousAddress']);
            }
            if (\array_key_exists('ambiguousLocationsReturned', $data)) {
                $object->setAmbiguousLocationsReturned($data['ambiguousLocationsReturned']);
                unset($data['ambiguousLocationsReturned']);
            }
            if (\array_key_exists('nearestLocationReturned', $data)) {
                $object->setNearestLocationReturned($data['nearestLocationReturned']);
                unset($data['nearestLocationReturned']);
            }
            if (\array_key_exists('latestLocationReturned', $data)) {
                $object->setLatestLocationReturned($data['latestLocationReturned']);
                unset($data['latestLocationReturned']);
            }
            if (\array_key_exists('lockerAvailabilityCode', $data)) {
                $object->setLockerAvailabilityCode($data['lockerAvailabilityCode']);
                unset($data['lockerAvailabilityCode']);
            }
            if (\array_key_exists('lockerAvailabilityMessage', $data)) {
                $object->setLockerAvailabilityMessage($data['lockerAvailabilityMessage']);
                unset($data['lockerAvailabilityMessage']);
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($this->denormalizer->denormalize($data['location'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200Outputlocation::class, 'json', $context));
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
                $object->setSort($this->denormalizer->denormalize($data['sort'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200Outputsort::class, 'json', $context));
                unset($data['sort']);
            }
            if (\array_key_exists('trackingInfo', $data)) {
                $object->setTrackingInfo($this->denormalizer->denormalize($data['trackingInfo'], \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputtrackingInfo::class, 'json', $context));
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
                $values_3 = [];
                foreach ($data['locationAttrTypes'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setLocationAttrTypes($values_3);
                unset($data['locationAttrTypes']);
            }
            if (\array_key_exists('locationCapabilities', $data)) {
                $values_4 = [];
                foreach ($data['locationCapabilities'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputlocationCapabilitiesItem::class, 'json', $context);
                }
                $object->setLocationCapabilities($values_4);
                unset($data['locationCapabilities']);
            }
            if (\array_key_exists('packageMaximumLimits', $data)) {
                $values_5 = [];
                foreach ($data['packageMaximumLimits'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200OutputpackageMaximumLimitsItem::class, 'json', $context);
                }
                $object->setPackageMaximumLimits($values_5);
                unset($data['packageMaximumLimits']);
            }
            if (\array_key_exists('locationTypes', $data)) {
                $values_6 = [];
                foreach ($data['locationTypes'] as $value_6) {
                    $values_6[] = $value_6;
                }
                $object->setLocationTypes($values_6);
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
            if (\array_key_exists('searchBy', $data)) {
                $object->setSearchBy($data['searchBy']);
                unset($data['searchBy']);
            }
            if (\array_key_exists('contentOptions', $data)) {
                $object->setContentOptions($data['contentOptions']);
                unset($data['contentOptions']);
            }
            if (\array_key_exists('carrierCodes', $data)) {
                $values_7 = [];
                foreach ($data['carrierCodes'] as $value_7) {
                    $values_7[] = $value_7;
                }
                $object->setCarrierCodes($values_7);
                unset($data['carrierCodes']);
            }
            if (\array_key_exists('getCall', $data)) {
                $object->setGetCall($data['getCall']);
                unset($data['getCall']);
            }
            foreach ($data as $key => $value_8) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_8;
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
            if ($object->isInitialized('totalResults') && null !== $object->getTotalResults()) {
                $data['totalResults'] = $object->getTotalResults();
            }
            if ($object->isInitialized('resultsReturned') && null !== $object->getResultsReturned()) {
                $data['resultsReturned'] = $object->getResultsReturned();
            }
            if ($object->isInitialized('matchedAddress') && null !== $object->getMatchedAddress()) {
                $data['matchedAddress'] = $this->normalizer->normalize($object->getMatchedAddress(), 'json', $context);
            }
            if ($object->isInitialized('matchedAddressGeoCoord') && null !== $object->getMatchedAddressGeoCoord()) {
                $data['matchedAddressGeoCoord'] = $this->normalizer->normalize($object->getMatchedAddressGeoCoord(), 'json', $context);
            }
            if ($object->isInitialized('locationDetailList') && null !== $object->getLocationDetailList()) {
                $values = [];
                foreach ($object->getLocationDetailList() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['locationDetailList'] = $values;
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values_1 = [];
                foreach ($object->getAlerts() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['alerts'] = $values_1;
            }
            if ($object->isInitialized('nearestLocation') && null !== $object->getNearestLocation()) {
                $data['nearestLocation'] = $this->normalizer->normalize($object->getNearestLocation(), 'json', $context);
            }
            if ($object->isInitialized('latestLocation') && null !== $object->getLatestLocation()) {
                $data['latestLocation'] = $this->normalizer->normalize($object->getLatestLocation(), 'json', $context);
            }
            if ($object->isInitialized('ambiguousAddress') && null !== $object->getAmbiguousAddress()) {
                $values_2 = [];
                foreach ($object->getAmbiguousAddress() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['ambiguousAddress'] = $values_2;
            }
            if ($object->isInitialized('ambiguousLocationsReturned') && null !== $object->getAmbiguousLocationsReturned()) {
                $data['ambiguousLocationsReturned'] = $object->getAmbiguousLocationsReturned();
            }
            if ($object->isInitialized('nearestLocationReturned') && null !== $object->getNearestLocationReturned()) {
                $data['nearestLocationReturned'] = $object->getNearestLocationReturned();
            }
            if ($object->isInitialized('latestLocationReturned') && null !== $object->getLatestLocationReturned()) {
                $data['latestLocationReturned'] = $object->getLatestLocationReturned();
            }
            if ($object->isInitialized('lockerAvailabilityCode') && null !== $object->getLockerAvailabilityCode()) {
                $data['lockerAvailabilityCode'] = $object->getLockerAvailabilityCode();
            }
            if ($object->isInitialized('lockerAvailabilityMessage') && null !== $object->getLockerAvailabilityMessage()) {
                $data['lockerAvailabilityMessage'] = $object->getLockerAvailabilityMessage();
            }
            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['location'] = $this->normalizer->normalize($object->getLocation(), 'json', $context);
            }
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
                $values_3 = [];
                foreach ($object->getLocationAttrTypes() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['locationAttrTypes'] = $values_3;
            }
            if ($object->isInitialized('locationCapabilities') && null !== $object->getLocationCapabilities()) {
                $values_4 = [];
                foreach ($object->getLocationCapabilities() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['locationCapabilities'] = $values_4;
            }
            if ($object->isInitialized('packageMaximumLimits') && null !== $object->getPackageMaximumLimits()) {
                $values_5 = [];
                foreach ($object->getPackageMaximumLimits() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['packageMaximumLimits'] = $values_5;
            }
            if ($object->isInitialized('locationTypes') && null !== $object->getLocationTypes()) {
                $values_6 = [];
                foreach ($object->getLocationTypes() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['locationTypes'] = $values_6;
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
            if ($object->isInitialized('searchBy') && null !== $object->getSearchBy()) {
                $data['searchBy'] = $object->getSearchBy();
            }
            if ($object->isInitialized('contentOptions') && null !== $object->getContentOptions()) {
                $data['contentOptions'] = $object->getContentOptions();
            }
            if ($object->isInitialized('carrierCodes') && null !== $object->getCarrierCodes()) {
                $values_7 = [];
                foreach ($object->getCarrierCodes() as $value_7) {
                    $values_7[] = $value_7;
                }
                $data['carrierCodes'] = $values_7;
            }
            if ($object->isInitialized('getCall') && null !== $object->getGetCall()) {
                $data['getCall'] = $object->getGetCall();
            }
            foreach ($object as $key => $value_8) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_8;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse200Output::class => false];
        }
    }
}
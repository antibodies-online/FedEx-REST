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
    class AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributes';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributes';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributes();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('POBox', $data)) {
                $object->setPOBox($data['POBox']);
                unset($data['POBox']);
            }
            if (\array_key_exists('POBoxOnlyZIP', $data)) {
                $object->setPOBoxOnlyZIP($data['POBoxOnlyZIP']);
                unset($data['POBoxOnlyZIP']);
            }
            if (\array_key_exists('SplitZip', $data)) {
                $object->setSplitZip($data['SplitZip']);
                unset($data['SplitZip']);
            }
            if (\array_key_exists('SuiteRequiredButMissing', $data)) {
                $object->setSuiteRequiredButMissing($data['SuiteRequiredButMissing']);
                unset($data['SuiteRequiredButMissing']);
            }
            if (\array_key_exists('InvalidSuiteNumber', $data)) {
                $object->setInvalidSuiteNumber($data['InvalidSuiteNumber']);
                unset($data['InvalidSuiteNumber']);
            }
            if (\array_key_exists('ResolutionInput', $data)) {
                $object->setResolutionInput($data['ResolutionInput']);
                unset($data['ResolutionInput']);
            }
            if (\array_key_exists('DPV', $data)) {
                $object->setDPV($data['DPV']);
                unset($data['DPV']);
            }
            if (\array_key_exists('ResolutionMethod', $data)) {
                $object->setResolutionMethod($data['ResolutionMethod']);
                unset($data['ResolutionMethod']);
            }
            if (\array_key_exists('DataVintage', $data)) {
                $object->setDataVintage($data['DataVintage']);
                unset($data['DataVintage']);
            }
            if (\array_key_exists('MatchSource', $data)) {
                $object->setMatchSource($data['MatchSource']);
                unset($data['MatchSource']);
            }
            if (\array_key_exists('CountrySupported', $data)) {
                $object->setCountrySupported($data['CountrySupported']);
                unset($data['CountrySupported']);
            }
            if (\array_key_exists('ValidlyFormed', $data)) {
                $object->setValidlyFormed($data['ValidlyFormed']);
                unset($data['ValidlyFormed']);
            }
            if (\array_key_exists('Matched', $data)) {
                $object->setMatched($data['Matched']);
                unset($data['Matched']);
            }
            if (\array_key_exists('Resolved', $data)) {
                $object->setResolved($data['Resolved']);
                unset($data['Resolved']);
            }
            if (\array_key_exists('Inserted', $data)) {
                $object->setInserted($data['Inserted']);
                unset($data['Inserted']);
            }
            if (\array_key_exists('MultiUnitBase', $data)) {
                $object->setMultiUnitBase($data['MultiUnitBase']);
                unset($data['MultiUnitBase']);
            }
            if (\array_key_exists('ZIP11Match', $data)) {
                $object->setZIP11Match($data['ZIP11Match']);
                unset($data['ZIP11Match']);
            }
            if (\array_key_exists('ZIP4Match', $data)) {
                $object->setZIP4Match($data['ZIP4Match']);
                unset($data['ZIP4Match']);
            }
            if (\array_key_exists('UniqueZIP', $data)) {
                $object->setUniqueZIP($data['UniqueZIP']);
                unset($data['UniqueZIP']);
            }
            if (\array_key_exists('StreetAddress', $data)) {
                $object->setStreetAddress($data['StreetAddress']);
                unset($data['StreetAddress']);
            }
            if (\array_key_exists('RRConversion', $data)) {
                $object->setRRConversion($data['RRConversion']);
                unset($data['RRConversion']);
            }
            if (\array_key_exists('ValidMultiUnit', $data)) {
                $object->setValidMultiUnit($data['ValidMultiUnit']);
                unset($data['ValidMultiUnit']);
            }
            if (\array_key_exists('AddressType', $data)) {
                $object->setAddressType($data['AddressType']);
                unset($data['AddressType']);
            }
            if (\array_key_exists('AddressPrecision', $data)) {
                $object->setAddressPrecision($data['AddressPrecision']);
                unset($data['AddressPrecision']);
            }
            if (\array_key_exists('MultipleMatches', $data)) {
                $object->setMultipleMatches($data['MultipleMatches']);
                unset($data['MultipleMatches']);
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
            if ($object->isInitialized('pOBox') && null !== $object->getPOBox()) {
                $data['POBox'] = $object->getPOBox();
            }
            if ($object->isInitialized('pOBoxOnlyZIP') && null !== $object->getPOBoxOnlyZIP()) {
                $data['POBoxOnlyZIP'] = $object->getPOBoxOnlyZIP();
            }
            if ($object->isInitialized('splitZip') && null !== $object->getSplitZip()) {
                $data['SplitZip'] = $object->getSplitZip();
            }
            if ($object->isInitialized('suiteRequiredButMissing') && null !== $object->getSuiteRequiredButMissing()) {
                $data['SuiteRequiredButMissing'] = $object->getSuiteRequiredButMissing();
            }
            if ($object->isInitialized('invalidSuiteNumber') && null !== $object->getInvalidSuiteNumber()) {
                $data['InvalidSuiteNumber'] = $object->getInvalidSuiteNumber();
            }
            if ($object->isInitialized('resolutionInput') && null !== $object->getResolutionInput()) {
                $data['ResolutionInput'] = $object->getResolutionInput();
            }
            if ($object->isInitialized('dPV') && null !== $object->getDPV()) {
                $data['DPV'] = $object->getDPV();
            }
            if ($object->isInitialized('resolutionMethod') && null !== $object->getResolutionMethod()) {
                $data['ResolutionMethod'] = $object->getResolutionMethod();
            }
            if ($object->isInitialized('dataVintage') && null !== $object->getDataVintage()) {
                $data['DataVintage'] = $object->getDataVintage();
            }
            if ($object->isInitialized('matchSource') && null !== $object->getMatchSource()) {
                $data['MatchSource'] = $object->getMatchSource();
            }
            if ($object->isInitialized('countrySupported') && null !== $object->getCountrySupported()) {
                $data['CountrySupported'] = $object->getCountrySupported();
            }
            if ($object->isInitialized('validlyFormed') && null !== $object->getValidlyFormed()) {
                $data['ValidlyFormed'] = $object->getValidlyFormed();
            }
            if ($object->isInitialized('matched') && null !== $object->getMatched()) {
                $data['Matched'] = $object->getMatched();
            }
            if ($object->isInitialized('resolved') && null !== $object->getResolved()) {
                $data['Resolved'] = $object->getResolved();
            }
            if ($object->isInitialized('inserted') && null !== $object->getInserted()) {
                $data['Inserted'] = $object->getInserted();
            }
            if ($object->isInitialized('multiUnitBase') && null !== $object->getMultiUnitBase()) {
                $data['MultiUnitBase'] = $object->getMultiUnitBase();
            }
            if ($object->isInitialized('zIP11Match') && null !== $object->getZIP11Match()) {
                $data['ZIP11Match'] = $object->getZIP11Match();
            }
            if ($object->isInitialized('zIP4Match') && null !== $object->getZIP4Match()) {
                $data['ZIP4Match'] = $object->getZIP4Match();
            }
            if ($object->isInitialized('uniqueZIP') && null !== $object->getUniqueZIP()) {
                $data['UniqueZIP'] = $object->getUniqueZIP();
            }
            if ($object->isInitialized('streetAddress') && null !== $object->getStreetAddress()) {
                $data['StreetAddress'] = $object->getStreetAddress();
            }
            if ($object->isInitialized('rRConversion') && null !== $object->getRRConversion()) {
                $data['RRConversion'] = $object->getRRConversion();
            }
            if ($object->isInitialized('validMultiUnit') && null !== $object->getValidMultiUnit()) {
                $data['ValidMultiUnit'] = $object->getValidMultiUnit();
            }
            if ($object->isInitialized('addressType') && null !== $object->getAddressType()) {
                $data['AddressType'] = $object->getAddressType();
            }
            if ($object->isInitialized('addressPrecision') && null !== $object->getAddressPrecision()) {
                $data['AddressPrecision'] = $object->getAddressPrecision();
            }
            if ($object->isInitialized('multipleMatches') && null !== $object->getMultipleMatches()) {
                $data['MultipleMatches'] = $object->getMultipleMatches();
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
            return ['AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributes' => false];
        }
    }
} else {
    class AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributes';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributes';
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
            $object = new \AntibodiesOnline\FedEx\Model\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributes();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('POBox', $data)) {
                $object->setPOBox($data['POBox']);
                unset($data['POBox']);
            }
            if (\array_key_exists('POBoxOnlyZIP', $data)) {
                $object->setPOBoxOnlyZIP($data['POBoxOnlyZIP']);
                unset($data['POBoxOnlyZIP']);
            }
            if (\array_key_exists('SplitZip', $data)) {
                $object->setSplitZip($data['SplitZip']);
                unset($data['SplitZip']);
            }
            if (\array_key_exists('SuiteRequiredButMissing', $data)) {
                $object->setSuiteRequiredButMissing($data['SuiteRequiredButMissing']);
                unset($data['SuiteRequiredButMissing']);
            }
            if (\array_key_exists('InvalidSuiteNumber', $data)) {
                $object->setInvalidSuiteNumber($data['InvalidSuiteNumber']);
                unset($data['InvalidSuiteNumber']);
            }
            if (\array_key_exists('ResolutionInput', $data)) {
                $object->setResolutionInput($data['ResolutionInput']);
                unset($data['ResolutionInput']);
            }
            if (\array_key_exists('DPV', $data)) {
                $object->setDPV($data['DPV']);
                unset($data['DPV']);
            }
            if (\array_key_exists('ResolutionMethod', $data)) {
                $object->setResolutionMethod($data['ResolutionMethod']);
                unset($data['ResolutionMethod']);
            }
            if (\array_key_exists('DataVintage', $data)) {
                $object->setDataVintage($data['DataVintage']);
                unset($data['DataVintage']);
            }
            if (\array_key_exists('MatchSource', $data)) {
                $object->setMatchSource($data['MatchSource']);
                unset($data['MatchSource']);
            }
            if (\array_key_exists('CountrySupported', $data)) {
                $object->setCountrySupported($data['CountrySupported']);
                unset($data['CountrySupported']);
            }
            if (\array_key_exists('ValidlyFormed', $data)) {
                $object->setValidlyFormed($data['ValidlyFormed']);
                unset($data['ValidlyFormed']);
            }
            if (\array_key_exists('Matched', $data)) {
                $object->setMatched($data['Matched']);
                unset($data['Matched']);
            }
            if (\array_key_exists('Resolved', $data)) {
                $object->setResolved($data['Resolved']);
                unset($data['Resolved']);
            }
            if (\array_key_exists('Inserted', $data)) {
                $object->setInserted($data['Inserted']);
                unset($data['Inserted']);
            }
            if (\array_key_exists('MultiUnitBase', $data)) {
                $object->setMultiUnitBase($data['MultiUnitBase']);
                unset($data['MultiUnitBase']);
            }
            if (\array_key_exists('ZIP11Match', $data)) {
                $object->setZIP11Match($data['ZIP11Match']);
                unset($data['ZIP11Match']);
            }
            if (\array_key_exists('ZIP4Match', $data)) {
                $object->setZIP4Match($data['ZIP4Match']);
                unset($data['ZIP4Match']);
            }
            if (\array_key_exists('UniqueZIP', $data)) {
                $object->setUniqueZIP($data['UniqueZIP']);
                unset($data['UniqueZIP']);
            }
            if (\array_key_exists('StreetAddress', $data)) {
                $object->setStreetAddress($data['StreetAddress']);
                unset($data['StreetAddress']);
            }
            if (\array_key_exists('RRConversion', $data)) {
                $object->setRRConversion($data['RRConversion']);
                unset($data['RRConversion']);
            }
            if (\array_key_exists('ValidMultiUnit', $data)) {
                $object->setValidMultiUnit($data['ValidMultiUnit']);
                unset($data['ValidMultiUnit']);
            }
            if (\array_key_exists('AddressType', $data)) {
                $object->setAddressType($data['AddressType']);
                unset($data['AddressType']);
            }
            if (\array_key_exists('AddressPrecision', $data)) {
                $object->setAddressPrecision($data['AddressPrecision']);
                unset($data['AddressPrecision']);
            }
            if (\array_key_exists('MultipleMatches', $data)) {
                $object->setMultipleMatches($data['MultipleMatches']);
                unset($data['MultipleMatches']);
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
            if ($object->isInitialized('pOBox') && null !== $object->getPOBox()) {
                $data['POBox'] = $object->getPOBox();
            }
            if ($object->isInitialized('pOBoxOnlyZIP') && null !== $object->getPOBoxOnlyZIP()) {
                $data['POBoxOnlyZIP'] = $object->getPOBoxOnlyZIP();
            }
            if ($object->isInitialized('splitZip') && null !== $object->getSplitZip()) {
                $data['SplitZip'] = $object->getSplitZip();
            }
            if ($object->isInitialized('suiteRequiredButMissing') && null !== $object->getSuiteRequiredButMissing()) {
                $data['SuiteRequiredButMissing'] = $object->getSuiteRequiredButMissing();
            }
            if ($object->isInitialized('invalidSuiteNumber') && null !== $object->getInvalidSuiteNumber()) {
                $data['InvalidSuiteNumber'] = $object->getInvalidSuiteNumber();
            }
            if ($object->isInitialized('resolutionInput') && null !== $object->getResolutionInput()) {
                $data['ResolutionInput'] = $object->getResolutionInput();
            }
            if ($object->isInitialized('dPV') && null !== $object->getDPV()) {
                $data['DPV'] = $object->getDPV();
            }
            if ($object->isInitialized('resolutionMethod') && null !== $object->getResolutionMethod()) {
                $data['ResolutionMethod'] = $object->getResolutionMethod();
            }
            if ($object->isInitialized('dataVintage') && null !== $object->getDataVintage()) {
                $data['DataVintage'] = $object->getDataVintage();
            }
            if ($object->isInitialized('matchSource') && null !== $object->getMatchSource()) {
                $data['MatchSource'] = $object->getMatchSource();
            }
            if ($object->isInitialized('countrySupported') && null !== $object->getCountrySupported()) {
                $data['CountrySupported'] = $object->getCountrySupported();
            }
            if ($object->isInitialized('validlyFormed') && null !== $object->getValidlyFormed()) {
                $data['ValidlyFormed'] = $object->getValidlyFormed();
            }
            if ($object->isInitialized('matched') && null !== $object->getMatched()) {
                $data['Matched'] = $object->getMatched();
            }
            if ($object->isInitialized('resolved') && null !== $object->getResolved()) {
                $data['Resolved'] = $object->getResolved();
            }
            if ($object->isInitialized('inserted') && null !== $object->getInserted()) {
                $data['Inserted'] = $object->getInserted();
            }
            if ($object->isInitialized('multiUnitBase') && null !== $object->getMultiUnitBase()) {
                $data['MultiUnitBase'] = $object->getMultiUnitBase();
            }
            if ($object->isInitialized('zIP11Match') && null !== $object->getZIP11Match()) {
                $data['ZIP11Match'] = $object->getZIP11Match();
            }
            if ($object->isInitialized('zIP4Match') && null !== $object->getZIP4Match()) {
                $data['ZIP4Match'] = $object->getZIP4Match();
            }
            if ($object->isInitialized('uniqueZIP') && null !== $object->getUniqueZIP()) {
                $data['UniqueZIP'] = $object->getUniqueZIP();
            }
            if ($object->isInitialized('streetAddress') && null !== $object->getStreetAddress()) {
                $data['StreetAddress'] = $object->getStreetAddress();
            }
            if ($object->isInitialized('rRConversion') && null !== $object->getRRConversion()) {
                $data['RRConversion'] = $object->getRRConversion();
            }
            if ($object->isInitialized('validMultiUnit') && null !== $object->getValidMultiUnit()) {
                $data['ValidMultiUnit'] = $object->getValidMultiUnit();
            }
            if ($object->isInitialized('addressType') && null !== $object->getAddressType()) {
                $data['AddressType'] = $object->getAddressType();
            }
            if ($object->isInitialized('addressPrecision') && null !== $object->getAddressPrecision()) {
                $data['AddressPrecision'] = $object->getAddressPrecision();
            }
            if ($object->isInitialized('multipleMatches') && null !== $object->getMultipleMatches()) {
                $data['MultipleMatches'] = $object->getMultipleMatches();
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
            return ['AntibodiesOnline\\FedEx\\Model\\AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributes' => false];
        }
    }
}
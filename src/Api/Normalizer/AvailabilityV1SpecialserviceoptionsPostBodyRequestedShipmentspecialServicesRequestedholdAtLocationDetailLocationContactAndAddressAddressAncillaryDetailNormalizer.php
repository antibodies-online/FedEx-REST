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
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddressAncillaryDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddressAncillaryDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddressAncillaryDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddressAncillaryDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('locationInCity', $data)) {
                $object->setLocationInCity($data['locationInCity']);
                unset($data['locationInCity']);
            }
            if (\array_key_exists('suite', $data)) {
                $object->setSuite($data['suite']);
                unset($data['suite']);
            }
            if (\array_key_exists('addressVerificationOverrideReason', $data)) {
                $object->setAddressVerificationOverrideReason($data['addressVerificationOverrideReason']);
                unset($data['addressVerificationOverrideReason']);
            }
            if (\array_key_exists('locationInProperty', $data)) {
                $object->setLocationInProperty($data['locationInProperty']);
                unset($data['locationInProperty']);
            }
            if (\array_key_exists('addtionalDescriptions', $data)) {
                $object->setAddtionalDescriptions($data['addtionalDescriptions']);
                unset($data['addtionalDescriptions']);
            }
            if (\array_key_exists('department', $data)) {
                $object->setDepartment($data['department']);
                unset($data['department']);
            }
            if (\array_key_exists('roomFloor', $data)) {
                $object->setRoomFloor($data['roomFloor']);
                unset($data['roomFloor']);
            }
            if (\array_key_exists('crossStreet', $data)) {
                $object->setCrossStreet($data['crossStreet']);
                unset($data['crossStreet']);
            }
            if (\array_key_exists('building', $data)) {
                $object->setBuilding($data['building']);
                unset($data['building']);
            }
            if (\array_key_exists('apartment', $data)) {
                $object->setApartment($data['apartment']);
                unset($data['apartment']);
            }
            if (\array_key_exists('room', $data)) {
                $object->setRoom($data['room']);
                unset($data['room']);
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
            if ($object->isInitialized('locationInCity') && null !== $object->getLocationInCity()) {
                $data['locationInCity'] = $object->getLocationInCity();
            }
            if ($object->isInitialized('suite') && null !== $object->getSuite()) {
                $data['suite'] = $object->getSuite();
            }
            if ($object->isInitialized('addressVerificationOverrideReason') && null !== $object->getAddressVerificationOverrideReason()) {
                $data['addressVerificationOverrideReason'] = $object->getAddressVerificationOverrideReason();
            }
            if ($object->isInitialized('locationInProperty') && null !== $object->getLocationInProperty()) {
                $data['locationInProperty'] = $object->getLocationInProperty();
            }
            if ($object->isInitialized('addtionalDescriptions') && null !== $object->getAddtionalDescriptions()) {
                $data['addtionalDescriptions'] = $object->getAddtionalDescriptions();
            }
            if ($object->isInitialized('department') && null !== $object->getDepartment()) {
                $data['department'] = $object->getDepartment();
            }
            if ($object->isInitialized('roomFloor') && null !== $object->getRoomFloor()) {
                $data['roomFloor'] = $object->getRoomFloor();
            }
            if ($object->isInitialized('crossStreet') && null !== $object->getCrossStreet()) {
                $data['crossStreet'] = $object->getCrossStreet();
            }
            if ($object->isInitialized('building') && null !== $object->getBuilding()) {
                $data['building'] = $object->getBuilding();
            }
            if ($object->isInitialized('apartment') && null !== $object->getApartment()) {
                $data['apartment'] = $object->getApartment();
            }
            if ($object->isInitialized('room') && null !== $object->getRoom()) {
                $data['room'] = $object->getRoom();
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
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddressAncillaryDetail::class => false];
        }
    }
} else {
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddressAncillaryDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddressAncillaryDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddressAncillaryDetail::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddressAncillaryDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('locationInCity', $data)) {
                $object->setLocationInCity($data['locationInCity']);
                unset($data['locationInCity']);
            }
            if (\array_key_exists('suite', $data)) {
                $object->setSuite($data['suite']);
                unset($data['suite']);
            }
            if (\array_key_exists('addressVerificationOverrideReason', $data)) {
                $object->setAddressVerificationOverrideReason($data['addressVerificationOverrideReason']);
                unset($data['addressVerificationOverrideReason']);
            }
            if (\array_key_exists('locationInProperty', $data)) {
                $object->setLocationInProperty($data['locationInProperty']);
                unset($data['locationInProperty']);
            }
            if (\array_key_exists('addtionalDescriptions', $data)) {
                $object->setAddtionalDescriptions($data['addtionalDescriptions']);
                unset($data['addtionalDescriptions']);
            }
            if (\array_key_exists('department', $data)) {
                $object->setDepartment($data['department']);
                unset($data['department']);
            }
            if (\array_key_exists('roomFloor', $data)) {
                $object->setRoomFloor($data['roomFloor']);
                unset($data['roomFloor']);
            }
            if (\array_key_exists('crossStreet', $data)) {
                $object->setCrossStreet($data['crossStreet']);
                unset($data['crossStreet']);
            }
            if (\array_key_exists('building', $data)) {
                $object->setBuilding($data['building']);
                unset($data['building']);
            }
            if (\array_key_exists('apartment', $data)) {
                $object->setApartment($data['apartment']);
                unset($data['apartment']);
            }
            if (\array_key_exists('room', $data)) {
                $object->setRoom($data['room']);
                unset($data['room']);
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
            if ($object->isInitialized('locationInCity') && null !== $object->getLocationInCity()) {
                $data['locationInCity'] = $object->getLocationInCity();
            }
            if ($object->isInitialized('suite') && null !== $object->getSuite()) {
                $data['suite'] = $object->getSuite();
            }
            if ($object->isInitialized('addressVerificationOverrideReason') && null !== $object->getAddressVerificationOverrideReason()) {
                $data['addressVerificationOverrideReason'] = $object->getAddressVerificationOverrideReason();
            }
            if ($object->isInitialized('locationInProperty') && null !== $object->getLocationInProperty()) {
                $data['locationInProperty'] = $object->getLocationInProperty();
            }
            if ($object->isInitialized('addtionalDescriptions') && null !== $object->getAddtionalDescriptions()) {
                $data['addtionalDescriptions'] = $object->getAddtionalDescriptions();
            }
            if ($object->isInitialized('department') && null !== $object->getDepartment()) {
                $data['department'] = $object->getDepartment();
            }
            if ($object->isInitialized('roomFloor') && null !== $object->getRoomFloor()) {
                $data['roomFloor'] = $object->getRoomFloor();
            }
            if ($object->isInitialized('crossStreet') && null !== $object->getCrossStreet()) {
                $data['crossStreet'] = $object->getCrossStreet();
            }
            if ($object->isInitialized('building') && null !== $object->getBuilding()) {
                $data['building'] = $object->getBuilding();
            }
            if ($object->isInitialized('apartment') && null !== $object->getApartment()) {
                $data['apartment'] = $object->getApartment();
            }
            if ($object->isInitialized('room') && null !== $object->getRoom()) {
                $data['room'] = $object->getRoom();
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
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddressAncillaryDetail::class => false];
        }
    }
}
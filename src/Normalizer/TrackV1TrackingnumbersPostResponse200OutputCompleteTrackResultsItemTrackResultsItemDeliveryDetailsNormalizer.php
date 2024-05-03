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
    class TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetails';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetails';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('receivedByName', $data)) {
                $object->setReceivedByName($data['receivedByName']);
                unset($data['receivedByName']);
            }
            if (\array_key_exists('destinationServiceArea', $data)) {
                $object->setDestinationServiceArea($data['destinationServiceArea']);
                unset($data['destinationServiceArea']);
            }
            if (\array_key_exists('destinationServiceAreaDescription', $data)) {
                $object->setDestinationServiceAreaDescription($data['destinationServiceAreaDescription']);
                unset($data['destinationServiceAreaDescription']);
            }
            if (\array_key_exists('locationDescription', $data)) {
                $object->setLocationDescription($data['locationDescription']);
                unset($data['locationDescription']);
            }
            if (\array_key_exists('actualDeliveryAddress', $data)) {
                $object->setActualDeliveryAddress($this->denormalizer->denormalize($data['actualDeliveryAddress'], 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetailsActualDeliveryAddress', 'json', $context));
                unset($data['actualDeliveryAddress']);
            }
            if (\array_key_exists('deliveryToday', $data)) {
                $object->setDeliveryToday($data['deliveryToday']);
                unset($data['deliveryToday']);
            }
            if (\array_key_exists('locationType', $data)) {
                $object->setLocationType($data['locationType']);
                unset($data['locationType']);
            }
            if (\array_key_exists('signedByName', $data)) {
                $object->setSignedByName($data['signedByName']);
                unset($data['signedByName']);
            }
            if (\array_key_exists('officeOrderDeliveryMethod', $data)) {
                $object->setOfficeOrderDeliveryMethod($data['officeOrderDeliveryMethod']);
                unset($data['officeOrderDeliveryMethod']);
            }
            if (\array_key_exists('deliveryAttempts', $data)) {
                $object->setDeliveryAttempts($data['deliveryAttempts']);
                unset($data['deliveryAttempts']);
            }
            if (\array_key_exists('deliveryOptionEligibilityDetails', $data)) {
                $values = [];
                foreach ($data['deliveryOptionEligibilityDetails'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetailsDeliveryOptionEligibilityDetailsItem', 'json', $context);
                }
                $object->setDeliveryOptionEligibilityDetails($values);
                unset($data['deliveryOptionEligibilityDetails']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('receivedByName') && null !== $object->getReceivedByName()) {
                $data['receivedByName'] = $object->getReceivedByName();
            }
            if ($object->isInitialized('destinationServiceArea') && null !== $object->getDestinationServiceArea()) {
                $data['destinationServiceArea'] = $object->getDestinationServiceArea();
            }
            if ($object->isInitialized('destinationServiceAreaDescription') && null !== $object->getDestinationServiceAreaDescription()) {
                $data['destinationServiceAreaDescription'] = $object->getDestinationServiceAreaDescription();
            }
            if ($object->isInitialized('locationDescription') && null !== $object->getLocationDescription()) {
                $data['locationDescription'] = $object->getLocationDescription();
            }
            if ($object->isInitialized('actualDeliveryAddress') && null !== $object->getActualDeliveryAddress()) {
                $data['actualDeliveryAddress'] = $this->normalizer->normalize($object->getActualDeliveryAddress(), 'json', $context);
            }
            if ($object->isInitialized('deliveryToday') && null !== $object->getDeliveryToday()) {
                $data['deliveryToday'] = $object->getDeliveryToday();
            }
            if ($object->isInitialized('locationType') && null !== $object->getLocationType()) {
                $data['locationType'] = $object->getLocationType();
            }
            if ($object->isInitialized('signedByName') && null !== $object->getSignedByName()) {
                $data['signedByName'] = $object->getSignedByName();
            }
            if ($object->isInitialized('officeOrderDeliveryMethod') && null !== $object->getOfficeOrderDeliveryMethod()) {
                $data['officeOrderDeliveryMethod'] = $object->getOfficeOrderDeliveryMethod();
            }
            if ($object->isInitialized('deliveryAttempts') && null !== $object->getDeliveryAttempts()) {
                $data['deliveryAttempts'] = $object->getDeliveryAttempts();
            }
            if ($object->isInitialized('deliveryOptionEligibilityDetails') && null !== $object->getDeliveryOptionEligibilityDetails()) {
                $values = [];
                foreach ($object->getDeliveryOptionEligibilityDetails() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['deliveryOptionEligibilityDetails'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetails' => false];
        }
    }
} else {
    class TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetails';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetails';
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
            $object = new \AntibodiesOnline\FedEx\Model\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('receivedByName', $data)) {
                $object->setReceivedByName($data['receivedByName']);
                unset($data['receivedByName']);
            }
            if (\array_key_exists('destinationServiceArea', $data)) {
                $object->setDestinationServiceArea($data['destinationServiceArea']);
                unset($data['destinationServiceArea']);
            }
            if (\array_key_exists('destinationServiceAreaDescription', $data)) {
                $object->setDestinationServiceAreaDescription($data['destinationServiceAreaDescription']);
                unset($data['destinationServiceAreaDescription']);
            }
            if (\array_key_exists('locationDescription', $data)) {
                $object->setLocationDescription($data['locationDescription']);
                unset($data['locationDescription']);
            }
            if (\array_key_exists('actualDeliveryAddress', $data)) {
                $object->setActualDeliveryAddress($this->denormalizer->denormalize($data['actualDeliveryAddress'], 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetailsActualDeliveryAddress', 'json', $context));
                unset($data['actualDeliveryAddress']);
            }
            if (\array_key_exists('deliveryToday', $data)) {
                $object->setDeliveryToday($data['deliveryToday']);
                unset($data['deliveryToday']);
            }
            if (\array_key_exists('locationType', $data)) {
                $object->setLocationType($data['locationType']);
                unset($data['locationType']);
            }
            if (\array_key_exists('signedByName', $data)) {
                $object->setSignedByName($data['signedByName']);
                unset($data['signedByName']);
            }
            if (\array_key_exists('officeOrderDeliveryMethod', $data)) {
                $object->setOfficeOrderDeliveryMethod($data['officeOrderDeliveryMethod']);
                unset($data['officeOrderDeliveryMethod']);
            }
            if (\array_key_exists('deliveryAttempts', $data)) {
                $object->setDeliveryAttempts($data['deliveryAttempts']);
                unset($data['deliveryAttempts']);
            }
            if (\array_key_exists('deliveryOptionEligibilityDetails', $data)) {
                $values = [];
                foreach ($data['deliveryOptionEligibilityDetails'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetailsDeliveryOptionEligibilityDetailsItem', 'json', $context);
                }
                $object->setDeliveryOptionEligibilityDetails($values);
                unset($data['deliveryOptionEligibilityDetails']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('receivedByName') && null !== $object->getReceivedByName()) {
                $data['receivedByName'] = $object->getReceivedByName();
            }
            if ($object->isInitialized('destinationServiceArea') && null !== $object->getDestinationServiceArea()) {
                $data['destinationServiceArea'] = $object->getDestinationServiceArea();
            }
            if ($object->isInitialized('destinationServiceAreaDescription') && null !== $object->getDestinationServiceAreaDescription()) {
                $data['destinationServiceAreaDescription'] = $object->getDestinationServiceAreaDescription();
            }
            if ($object->isInitialized('locationDescription') && null !== $object->getLocationDescription()) {
                $data['locationDescription'] = $object->getLocationDescription();
            }
            if ($object->isInitialized('actualDeliveryAddress') && null !== $object->getActualDeliveryAddress()) {
                $data['actualDeliveryAddress'] = $this->normalizer->normalize($object->getActualDeliveryAddress(), 'json', $context);
            }
            if ($object->isInitialized('deliveryToday') && null !== $object->getDeliveryToday()) {
                $data['deliveryToday'] = $object->getDeliveryToday();
            }
            if ($object->isInitialized('locationType') && null !== $object->getLocationType()) {
                $data['locationType'] = $object->getLocationType();
            }
            if ($object->isInitialized('signedByName') && null !== $object->getSignedByName()) {
                $data['signedByName'] = $object->getSignedByName();
            }
            if ($object->isInitialized('officeOrderDeliveryMethod') && null !== $object->getOfficeOrderDeliveryMethod()) {
                $data['officeOrderDeliveryMethod'] = $object->getOfficeOrderDeliveryMethod();
            }
            if ($object->isInitialized('deliveryAttempts') && null !== $object->getDeliveryAttempts()) {
                $data['deliveryAttempts'] = $object->getDeliveryAttempts();
            }
            if ($object->isInitialized('deliveryOptionEligibilityDetails') && null !== $object->getDeliveryOptionEligibilityDetails()) {
                $values = [];
                foreach ($object->getDeliveryOptionEligibilityDetails() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['deliveryOptionEligibilityDetails'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetails' => false];
        }
    }
}
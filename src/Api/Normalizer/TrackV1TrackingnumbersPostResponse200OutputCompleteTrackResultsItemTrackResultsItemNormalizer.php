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
    class TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('trackingNumberInfo', $data)) {
                $object->setTrackingNumberInfo($this->denormalizer->denormalize($data['trackingNumberInfo'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemTrackingNumberInfo', 'json', $context));
                unset($data['trackingNumberInfo']);
            }
            if (\array_key_exists('additionalTrackingInfo', $data)) {
                $object->setAdditionalTrackingInfo($this->denormalizer->denormalize($data['additionalTrackingInfo'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfo', 'json', $context));
                unset($data['additionalTrackingInfo']);
            }
            if (\array_key_exists('distanceToDestination', $data)) {
                $object->setDistanceToDestination($this->denormalizer->denormalize($data['distanceToDestination'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDistanceToDestination', 'json', $context));
                unset($data['distanceToDestination']);
            }
            if (\array_key_exists('consolidationDetail', $data)) {
                $values = [];
                foreach ($data['consolidationDetail'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItem', 'json', $context);
                }
                $object->setConsolidationDetail($values);
                unset($data['consolidationDetail']);
            }
            if (\array_key_exists('meterNumber', $data)) {
                $object->setMeterNumber($data['meterNumber']);
                unset($data['meterNumber']);
            }
            if (\array_key_exists('returnDetail', $data)) {
                $object->setReturnDetail($this->denormalizer->denormalize($data['returnDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReturnDetail', 'json', $context));
                unset($data['returnDetail']);
            }
            if (\array_key_exists('serviceDetail', $data)) {
                $object->setServiceDetail($this->denormalizer->denormalize($data['serviceDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemServiceDetail', 'json', $context));
                unset($data['serviceDetail']);
            }
            if (\array_key_exists('destinationLocation', $data)) {
                $object->setDestinationLocation($this->denormalizer->denormalize($data['destinationLocation'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocation', 'json', $context));
                unset($data['destinationLocation']);
            }
            if (\array_key_exists('latestStatusDetail', $data)) {
                $object->setLatestStatusDetail($this->denormalizer->denormalize($data['latestStatusDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetail', 'json', $context));
                unset($data['latestStatusDetail']);
            }
            if (\array_key_exists('serviceCommitMessage', $data)) {
                $object->setServiceCommitMessage($this->denormalizer->denormalize($data['serviceCommitMessage'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemServiceCommitMessage', 'json', $context));
                unset($data['serviceCommitMessage']);
            }
            if (\array_key_exists('informationNotes', $data)) {
                $values_1 = [];
                foreach ($data['informationNotes'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemInformationNotesItem', 'json', $context);
                }
                $object->setInformationNotes($values_1);
                unset($data['informationNotes']);
            }
            if (\array_key_exists('error', $data)) {
                $object->setError($this->denormalizer->denormalize($data['error'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemError', 'json', $context));
                unset($data['error']);
            }
            if (\array_key_exists('specialHandlings', $data)) {
                $values_2 = [];
                foreach ($data['specialHandlings'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemSpecialHandlingsItem', 'json', $context);
                }
                $object->setSpecialHandlings($values_2);
                unset($data['specialHandlings']);
            }
            if (\array_key_exists('availableImages', $data)) {
                $values_3 = [];
                foreach ($data['availableImages'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAvailableImagesItem', 'json', $context);
                }
                $object->setAvailableImages($values_3);
                unset($data['availableImages']);
            }
            if (\array_key_exists('deliveryDetails', $data)) {
                $object->setDeliveryDetails($this->denormalizer->denormalize($data['deliveryDetails'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetails', 'json', $context));
                unset($data['deliveryDetails']);
            }
            if (\array_key_exists('scanEvents', $data)) {
                $values_4 = [];
                foreach ($data['scanEvents'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItem', 'json', $context);
                }
                $object->setScanEvents($values_4);
                unset($data['scanEvents']);
            }
            if (\array_key_exists('dateAndTimes', $data)) {
                $values_5 = [];
                foreach ($data['dateAndTimes'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDateAndTimesItem', 'json', $context);
                }
                $object->setDateAndTimes($values_5);
                unset($data['dateAndTimes']);
            }
            if (\array_key_exists('packageDetails', $data)) {
                $object->setPackageDetails($this->denormalizer->denormalize($data['packageDetails'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetails', 'json', $context));
                unset($data['packageDetails']);
            }
            if (\array_key_exists('goodsClassificationCode', $data)) {
                $object->setGoodsClassificationCode($data['goodsClassificationCode']);
                unset($data['goodsClassificationCode']);
            }
            if (\array_key_exists('holdAtLocation', $data)) {
                $object->setHoldAtLocation($this->denormalizer->denormalize($data['holdAtLocation'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemHoldAtLocation', 'json', $context));
                unset($data['holdAtLocation']);
            }
            if (\array_key_exists('customDeliveryOptions', $data)) {
                $values_6 = [];
                foreach ($data['customDeliveryOptions'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemCustomDeliveryOptionsItem', 'json', $context);
                }
                $object->setCustomDeliveryOptions($values_6);
                unset($data['customDeliveryOptions']);
            }
            if (\array_key_exists('estimatedDeliveryTimeWindow', $data)) {
                $object->setEstimatedDeliveryTimeWindow($this->denormalizer->denormalize($data['estimatedDeliveryTimeWindow'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemEstimatedDeliveryTimeWindow', 'json', $context));
                unset($data['estimatedDeliveryTimeWindow']);
            }
            if (\array_key_exists('pieceCounts', $data)) {
                $values_7 = [];
                foreach ($data['pieceCounts'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPieceCountsItem', 'json', $context);
                }
                $object->setPieceCounts($values_7);
                unset($data['pieceCounts']);
            }
            if (\array_key_exists('originLocation', $data)) {
                $object->setOriginLocation($this->denormalizer->denormalize($data['originLocation'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocation', 'json', $context));
                unset($data['originLocation']);
            }
            if (\array_key_exists('recipientInformation', $data)) {
                $object->setRecipientInformation($this->denormalizer->denormalize($data['recipientInformation'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformation', 'json', $context));
                unset($data['recipientInformation']);
            }
            if (\array_key_exists('standardTransitTimeWindow', $data)) {
                $object->setStandardTransitTimeWindow($this->denormalizer->denormalize($data['standardTransitTimeWindow'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemStandardTransitTimeWindow', 'json', $context));
                unset($data['standardTransitTimeWindow']);
            }
            if (\array_key_exists('shipmentDetails', $data)) {
                $object->setShipmentDetails($this->denormalizer->denormalize($data['shipmentDetails'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetails', 'json', $context));
                unset($data['shipmentDetails']);
            }
            if (\array_key_exists('reasonDetail', $data)) {
                $object->setReasonDetail($this->denormalizer->denormalize($data['reasonDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReasonDetail', 'json', $context));
                unset($data['reasonDetail']);
            }
            if (\array_key_exists('availableNotifications', $data)) {
                $values_8 = [];
                foreach ($data['availableNotifications'] as $value_8) {
                    $values_8[] = $value_8;
                }
                $object->setAvailableNotifications($values_8);
                unset($data['availableNotifications']);
            }
            if (\array_key_exists('shipperInformation', $data)) {
                $object->setShipperInformation($this->denormalizer->denormalize($data['shipperInformation'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformation', 'json', $context));
                unset($data['shipperInformation']);
            }
            if (\array_key_exists('lastUpdatedDestinationAddress', $data)) {
                $object->setLastUpdatedDestinationAddress($this->denormalizer->denormalize($data['lastUpdatedDestinationAddress'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLastUpdatedDestinationAddress', 'json', $context));
                unset($data['lastUpdatedDestinationAddress']);
            }
            foreach ($data as $key => $value_9) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_9;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('trackingNumberInfo') && null !== $object->getTrackingNumberInfo()) {
                $data['trackingNumberInfo'] = $this->normalizer->normalize($object->getTrackingNumberInfo(), 'json', $context);
            }
            if ($object->isInitialized('additionalTrackingInfo') && null !== $object->getAdditionalTrackingInfo()) {
                $data['additionalTrackingInfo'] = $this->normalizer->normalize($object->getAdditionalTrackingInfo(), 'json', $context);
            }
            if ($object->isInitialized('distanceToDestination') && null !== $object->getDistanceToDestination()) {
                $data['distanceToDestination'] = $this->normalizer->normalize($object->getDistanceToDestination(), 'json', $context);
            }
            if ($object->isInitialized('consolidationDetail') && null !== $object->getConsolidationDetail()) {
                $values = [];
                foreach ($object->getConsolidationDetail() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['consolidationDetail'] = $values;
            }
            if ($object->isInitialized('meterNumber') && null !== $object->getMeterNumber()) {
                $data['meterNumber'] = $object->getMeterNumber();
            }
            if ($object->isInitialized('returnDetail') && null !== $object->getReturnDetail()) {
                $data['returnDetail'] = $this->normalizer->normalize($object->getReturnDetail(), 'json', $context);
            }
            if ($object->isInitialized('serviceDetail') && null !== $object->getServiceDetail()) {
                $data['serviceDetail'] = $this->normalizer->normalize($object->getServiceDetail(), 'json', $context);
            }
            if ($object->isInitialized('destinationLocation') && null !== $object->getDestinationLocation()) {
                $data['destinationLocation'] = $this->normalizer->normalize($object->getDestinationLocation(), 'json', $context);
            }
            if ($object->isInitialized('latestStatusDetail') && null !== $object->getLatestStatusDetail()) {
                $data['latestStatusDetail'] = $this->normalizer->normalize($object->getLatestStatusDetail(), 'json', $context);
            }
            if ($object->isInitialized('serviceCommitMessage') && null !== $object->getServiceCommitMessage()) {
                $data['serviceCommitMessage'] = $this->normalizer->normalize($object->getServiceCommitMessage(), 'json', $context);
            }
            if ($object->isInitialized('informationNotes') && null !== $object->getInformationNotes()) {
                $values_1 = [];
                foreach ($object->getInformationNotes() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['informationNotes'] = $values_1;
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $this->normalizer->normalize($object->getError(), 'json', $context);
            }
            if ($object->isInitialized('specialHandlings') && null !== $object->getSpecialHandlings()) {
                $values_2 = [];
                foreach ($object->getSpecialHandlings() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['specialHandlings'] = $values_2;
            }
            if ($object->isInitialized('availableImages') && null !== $object->getAvailableImages()) {
                $values_3 = [];
                foreach ($object->getAvailableImages() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['availableImages'] = $values_3;
            }
            if ($object->isInitialized('deliveryDetails') && null !== $object->getDeliveryDetails()) {
                $data['deliveryDetails'] = $this->normalizer->normalize($object->getDeliveryDetails(), 'json', $context);
            }
            if ($object->isInitialized('scanEvents') && null !== $object->getScanEvents()) {
                $values_4 = [];
                foreach ($object->getScanEvents() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['scanEvents'] = $values_4;
            }
            if ($object->isInitialized('dateAndTimes') && null !== $object->getDateAndTimes()) {
                $values_5 = [];
                foreach ($object->getDateAndTimes() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['dateAndTimes'] = $values_5;
            }
            if ($object->isInitialized('packageDetails') && null !== $object->getPackageDetails()) {
                $data['packageDetails'] = $this->normalizer->normalize($object->getPackageDetails(), 'json', $context);
            }
            if ($object->isInitialized('goodsClassificationCode') && null !== $object->getGoodsClassificationCode()) {
                $data['goodsClassificationCode'] = $object->getGoodsClassificationCode();
            }
            if ($object->isInitialized('holdAtLocation') && null !== $object->getHoldAtLocation()) {
                $data['holdAtLocation'] = $this->normalizer->normalize($object->getHoldAtLocation(), 'json', $context);
            }
            if ($object->isInitialized('customDeliveryOptions') && null !== $object->getCustomDeliveryOptions()) {
                $values_6 = [];
                foreach ($object->getCustomDeliveryOptions() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }
                $data['customDeliveryOptions'] = $values_6;
            }
            if ($object->isInitialized('estimatedDeliveryTimeWindow') && null !== $object->getEstimatedDeliveryTimeWindow()) {
                $data['estimatedDeliveryTimeWindow'] = $this->normalizer->normalize($object->getEstimatedDeliveryTimeWindow(), 'json', $context);
            }
            if ($object->isInitialized('pieceCounts') && null !== $object->getPieceCounts()) {
                $values_7 = [];
                foreach ($object->getPieceCounts() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['pieceCounts'] = $values_7;
            }
            if ($object->isInitialized('originLocation') && null !== $object->getOriginLocation()) {
                $data['originLocation'] = $this->normalizer->normalize($object->getOriginLocation(), 'json', $context);
            }
            if ($object->isInitialized('recipientInformation') && null !== $object->getRecipientInformation()) {
                $data['recipientInformation'] = $this->normalizer->normalize($object->getRecipientInformation(), 'json', $context);
            }
            if ($object->isInitialized('standardTransitTimeWindow') && null !== $object->getStandardTransitTimeWindow()) {
                $data['standardTransitTimeWindow'] = $this->normalizer->normalize($object->getStandardTransitTimeWindow(), 'json', $context);
            }
            if ($object->isInitialized('shipmentDetails') && null !== $object->getShipmentDetails()) {
                $data['shipmentDetails'] = $this->normalizer->normalize($object->getShipmentDetails(), 'json', $context);
            }
            if ($object->isInitialized('reasonDetail') && null !== $object->getReasonDetail()) {
                $data['reasonDetail'] = $this->normalizer->normalize($object->getReasonDetail(), 'json', $context);
            }
            if ($object->isInitialized('availableNotifications') && null !== $object->getAvailableNotifications()) {
                $values_8 = [];
                foreach ($object->getAvailableNotifications() as $value_8) {
                    $values_8[] = $value_8;
                }
                $data['availableNotifications'] = $values_8;
            }
            if ($object->isInitialized('shipperInformation') && null !== $object->getShipperInformation()) {
                $data['shipperInformation'] = $this->normalizer->normalize($object->getShipperInformation(), 'json', $context);
            }
            if ($object->isInitialized('lastUpdatedDestinationAddress') && null !== $object->getLastUpdatedDestinationAddress()) {
                $data['lastUpdatedDestinationAddress'] = $this->normalizer->normalize($object->getLastUpdatedDestinationAddress(), 'json', $context);
            }
            foreach ($object as $key => $value_9) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_9;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItem' => false];
        }
    }
} else {
    class TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItem';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('trackingNumberInfo', $data)) {
                $object->setTrackingNumberInfo($this->denormalizer->denormalize($data['trackingNumberInfo'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemTrackingNumberInfo', 'json', $context));
                unset($data['trackingNumberInfo']);
            }
            if (\array_key_exists('additionalTrackingInfo', $data)) {
                $object->setAdditionalTrackingInfo($this->denormalizer->denormalize($data['additionalTrackingInfo'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfo', 'json', $context));
                unset($data['additionalTrackingInfo']);
            }
            if (\array_key_exists('distanceToDestination', $data)) {
                $object->setDistanceToDestination($this->denormalizer->denormalize($data['distanceToDestination'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDistanceToDestination', 'json', $context));
                unset($data['distanceToDestination']);
            }
            if (\array_key_exists('consolidationDetail', $data)) {
                $values = [];
                foreach ($data['consolidationDetail'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItem', 'json', $context);
                }
                $object->setConsolidationDetail($values);
                unset($data['consolidationDetail']);
            }
            if (\array_key_exists('meterNumber', $data)) {
                $object->setMeterNumber($data['meterNumber']);
                unset($data['meterNumber']);
            }
            if (\array_key_exists('returnDetail', $data)) {
                $object->setReturnDetail($this->denormalizer->denormalize($data['returnDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReturnDetail', 'json', $context));
                unset($data['returnDetail']);
            }
            if (\array_key_exists('serviceDetail', $data)) {
                $object->setServiceDetail($this->denormalizer->denormalize($data['serviceDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemServiceDetail', 'json', $context));
                unset($data['serviceDetail']);
            }
            if (\array_key_exists('destinationLocation', $data)) {
                $object->setDestinationLocation($this->denormalizer->denormalize($data['destinationLocation'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocation', 'json', $context));
                unset($data['destinationLocation']);
            }
            if (\array_key_exists('latestStatusDetail', $data)) {
                $object->setLatestStatusDetail($this->denormalizer->denormalize($data['latestStatusDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetail', 'json', $context));
                unset($data['latestStatusDetail']);
            }
            if (\array_key_exists('serviceCommitMessage', $data)) {
                $object->setServiceCommitMessage($this->denormalizer->denormalize($data['serviceCommitMessage'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemServiceCommitMessage', 'json', $context));
                unset($data['serviceCommitMessage']);
            }
            if (\array_key_exists('informationNotes', $data)) {
                $values_1 = [];
                foreach ($data['informationNotes'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemInformationNotesItem', 'json', $context);
                }
                $object->setInformationNotes($values_1);
                unset($data['informationNotes']);
            }
            if (\array_key_exists('error', $data)) {
                $object->setError($this->denormalizer->denormalize($data['error'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemError', 'json', $context));
                unset($data['error']);
            }
            if (\array_key_exists('specialHandlings', $data)) {
                $values_2 = [];
                foreach ($data['specialHandlings'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemSpecialHandlingsItem', 'json', $context);
                }
                $object->setSpecialHandlings($values_2);
                unset($data['specialHandlings']);
            }
            if (\array_key_exists('availableImages', $data)) {
                $values_3 = [];
                foreach ($data['availableImages'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAvailableImagesItem', 'json', $context);
                }
                $object->setAvailableImages($values_3);
                unset($data['availableImages']);
            }
            if (\array_key_exists('deliveryDetails', $data)) {
                $object->setDeliveryDetails($this->denormalizer->denormalize($data['deliveryDetails'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetails', 'json', $context));
                unset($data['deliveryDetails']);
            }
            if (\array_key_exists('scanEvents', $data)) {
                $values_4 = [];
                foreach ($data['scanEvents'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItem', 'json', $context);
                }
                $object->setScanEvents($values_4);
                unset($data['scanEvents']);
            }
            if (\array_key_exists('dateAndTimes', $data)) {
                $values_5 = [];
                foreach ($data['dateAndTimes'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDateAndTimesItem', 'json', $context);
                }
                $object->setDateAndTimes($values_5);
                unset($data['dateAndTimes']);
            }
            if (\array_key_exists('packageDetails', $data)) {
                $object->setPackageDetails($this->denormalizer->denormalize($data['packageDetails'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetails', 'json', $context));
                unset($data['packageDetails']);
            }
            if (\array_key_exists('goodsClassificationCode', $data)) {
                $object->setGoodsClassificationCode($data['goodsClassificationCode']);
                unset($data['goodsClassificationCode']);
            }
            if (\array_key_exists('holdAtLocation', $data)) {
                $object->setHoldAtLocation($this->denormalizer->denormalize($data['holdAtLocation'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemHoldAtLocation', 'json', $context));
                unset($data['holdAtLocation']);
            }
            if (\array_key_exists('customDeliveryOptions', $data)) {
                $values_6 = [];
                foreach ($data['customDeliveryOptions'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemCustomDeliveryOptionsItem', 'json', $context);
                }
                $object->setCustomDeliveryOptions($values_6);
                unset($data['customDeliveryOptions']);
            }
            if (\array_key_exists('estimatedDeliveryTimeWindow', $data)) {
                $object->setEstimatedDeliveryTimeWindow($this->denormalizer->denormalize($data['estimatedDeliveryTimeWindow'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemEstimatedDeliveryTimeWindow', 'json', $context));
                unset($data['estimatedDeliveryTimeWindow']);
            }
            if (\array_key_exists('pieceCounts', $data)) {
                $values_7 = [];
                foreach ($data['pieceCounts'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPieceCountsItem', 'json', $context);
                }
                $object->setPieceCounts($values_7);
                unset($data['pieceCounts']);
            }
            if (\array_key_exists('originLocation', $data)) {
                $object->setOriginLocation($this->denormalizer->denormalize($data['originLocation'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocation', 'json', $context));
                unset($data['originLocation']);
            }
            if (\array_key_exists('recipientInformation', $data)) {
                $object->setRecipientInformation($this->denormalizer->denormalize($data['recipientInformation'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformation', 'json', $context));
                unset($data['recipientInformation']);
            }
            if (\array_key_exists('standardTransitTimeWindow', $data)) {
                $object->setStandardTransitTimeWindow($this->denormalizer->denormalize($data['standardTransitTimeWindow'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemStandardTransitTimeWindow', 'json', $context));
                unset($data['standardTransitTimeWindow']);
            }
            if (\array_key_exists('shipmentDetails', $data)) {
                $object->setShipmentDetails($this->denormalizer->denormalize($data['shipmentDetails'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetails', 'json', $context));
                unset($data['shipmentDetails']);
            }
            if (\array_key_exists('reasonDetail', $data)) {
                $object->setReasonDetail($this->denormalizer->denormalize($data['reasonDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReasonDetail', 'json', $context));
                unset($data['reasonDetail']);
            }
            if (\array_key_exists('availableNotifications', $data)) {
                $values_8 = [];
                foreach ($data['availableNotifications'] as $value_8) {
                    $values_8[] = $value_8;
                }
                $object->setAvailableNotifications($values_8);
                unset($data['availableNotifications']);
            }
            if (\array_key_exists('shipperInformation', $data)) {
                $object->setShipperInformation($this->denormalizer->denormalize($data['shipperInformation'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformation', 'json', $context));
                unset($data['shipperInformation']);
            }
            if (\array_key_exists('lastUpdatedDestinationAddress', $data)) {
                $object->setLastUpdatedDestinationAddress($this->denormalizer->denormalize($data['lastUpdatedDestinationAddress'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLastUpdatedDestinationAddress', 'json', $context));
                unset($data['lastUpdatedDestinationAddress']);
            }
            foreach ($data as $key => $value_9) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_9;
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
            if ($object->isInitialized('trackingNumberInfo') && null !== $object->getTrackingNumberInfo()) {
                $data['trackingNumberInfo'] = $this->normalizer->normalize($object->getTrackingNumberInfo(), 'json', $context);
            }
            if ($object->isInitialized('additionalTrackingInfo') && null !== $object->getAdditionalTrackingInfo()) {
                $data['additionalTrackingInfo'] = $this->normalizer->normalize($object->getAdditionalTrackingInfo(), 'json', $context);
            }
            if ($object->isInitialized('distanceToDestination') && null !== $object->getDistanceToDestination()) {
                $data['distanceToDestination'] = $this->normalizer->normalize($object->getDistanceToDestination(), 'json', $context);
            }
            if ($object->isInitialized('consolidationDetail') && null !== $object->getConsolidationDetail()) {
                $values = [];
                foreach ($object->getConsolidationDetail() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['consolidationDetail'] = $values;
            }
            if ($object->isInitialized('meterNumber') && null !== $object->getMeterNumber()) {
                $data['meterNumber'] = $object->getMeterNumber();
            }
            if ($object->isInitialized('returnDetail') && null !== $object->getReturnDetail()) {
                $data['returnDetail'] = $this->normalizer->normalize($object->getReturnDetail(), 'json', $context);
            }
            if ($object->isInitialized('serviceDetail') && null !== $object->getServiceDetail()) {
                $data['serviceDetail'] = $this->normalizer->normalize($object->getServiceDetail(), 'json', $context);
            }
            if ($object->isInitialized('destinationLocation') && null !== $object->getDestinationLocation()) {
                $data['destinationLocation'] = $this->normalizer->normalize($object->getDestinationLocation(), 'json', $context);
            }
            if ($object->isInitialized('latestStatusDetail') && null !== $object->getLatestStatusDetail()) {
                $data['latestStatusDetail'] = $this->normalizer->normalize($object->getLatestStatusDetail(), 'json', $context);
            }
            if ($object->isInitialized('serviceCommitMessage') && null !== $object->getServiceCommitMessage()) {
                $data['serviceCommitMessage'] = $this->normalizer->normalize($object->getServiceCommitMessage(), 'json', $context);
            }
            if ($object->isInitialized('informationNotes') && null !== $object->getInformationNotes()) {
                $values_1 = [];
                foreach ($object->getInformationNotes() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['informationNotes'] = $values_1;
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $this->normalizer->normalize($object->getError(), 'json', $context);
            }
            if ($object->isInitialized('specialHandlings') && null !== $object->getSpecialHandlings()) {
                $values_2 = [];
                foreach ($object->getSpecialHandlings() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['specialHandlings'] = $values_2;
            }
            if ($object->isInitialized('availableImages') && null !== $object->getAvailableImages()) {
                $values_3 = [];
                foreach ($object->getAvailableImages() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['availableImages'] = $values_3;
            }
            if ($object->isInitialized('deliveryDetails') && null !== $object->getDeliveryDetails()) {
                $data['deliveryDetails'] = $this->normalizer->normalize($object->getDeliveryDetails(), 'json', $context);
            }
            if ($object->isInitialized('scanEvents') && null !== $object->getScanEvents()) {
                $values_4 = [];
                foreach ($object->getScanEvents() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['scanEvents'] = $values_4;
            }
            if ($object->isInitialized('dateAndTimes') && null !== $object->getDateAndTimes()) {
                $values_5 = [];
                foreach ($object->getDateAndTimes() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['dateAndTimes'] = $values_5;
            }
            if ($object->isInitialized('packageDetails') && null !== $object->getPackageDetails()) {
                $data['packageDetails'] = $this->normalizer->normalize($object->getPackageDetails(), 'json', $context);
            }
            if ($object->isInitialized('goodsClassificationCode') && null !== $object->getGoodsClassificationCode()) {
                $data['goodsClassificationCode'] = $object->getGoodsClassificationCode();
            }
            if ($object->isInitialized('holdAtLocation') && null !== $object->getHoldAtLocation()) {
                $data['holdAtLocation'] = $this->normalizer->normalize($object->getHoldAtLocation(), 'json', $context);
            }
            if ($object->isInitialized('customDeliveryOptions') && null !== $object->getCustomDeliveryOptions()) {
                $values_6 = [];
                foreach ($object->getCustomDeliveryOptions() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }
                $data['customDeliveryOptions'] = $values_6;
            }
            if ($object->isInitialized('estimatedDeliveryTimeWindow') && null !== $object->getEstimatedDeliveryTimeWindow()) {
                $data['estimatedDeliveryTimeWindow'] = $this->normalizer->normalize($object->getEstimatedDeliveryTimeWindow(), 'json', $context);
            }
            if ($object->isInitialized('pieceCounts') && null !== $object->getPieceCounts()) {
                $values_7 = [];
                foreach ($object->getPieceCounts() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['pieceCounts'] = $values_7;
            }
            if ($object->isInitialized('originLocation') && null !== $object->getOriginLocation()) {
                $data['originLocation'] = $this->normalizer->normalize($object->getOriginLocation(), 'json', $context);
            }
            if ($object->isInitialized('recipientInformation') && null !== $object->getRecipientInformation()) {
                $data['recipientInformation'] = $this->normalizer->normalize($object->getRecipientInformation(), 'json', $context);
            }
            if ($object->isInitialized('standardTransitTimeWindow') && null !== $object->getStandardTransitTimeWindow()) {
                $data['standardTransitTimeWindow'] = $this->normalizer->normalize($object->getStandardTransitTimeWindow(), 'json', $context);
            }
            if ($object->isInitialized('shipmentDetails') && null !== $object->getShipmentDetails()) {
                $data['shipmentDetails'] = $this->normalizer->normalize($object->getShipmentDetails(), 'json', $context);
            }
            if ($object->isInitialized('reasonDetail') && null !== $object->getReasonDetail()) {
                $data['reasonDetail'] = $this->normalizer->normalize($object->getReasonDetail(), 'json', $context);
            }
            if ($object->isInitialized('availableNotifications') && null !== $object->getAvailableNotifications()) {
                $values_8 = [];
                foreach ($object->getAvailableNotifications() as $value_8) {
                    $values_8[] = $value_8;
                }
                $data['availableNotifications'] = $values_8;
            }
            if ($object->isInitialized('shipperInformation') && null !== $object->getShipperInformation()) {
                $data['shipperInformation'] = $this->normalizer->normalize($object->getShipperInformation(), 'json', $context);
            }
            if ($object->isInitialized('lastUpdatedDestinationAddress') && null !== $object->getLastUpdatedDestinationAddress()) {
                $data['lastUpdatedDestinationAddress'] = $this->normalizer->normalize($object->getLastUpdatedDestinationAddress(), 'json', $context);
            }
            foreach ($object as $key => $value_9) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_9;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItem' => false];
        }
    }
}
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
    class TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfo';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('hasAssociatedShipments', $data)) {
                $object->setHasAssociatedShipments($data['hasAssociatedShipments']);
                unset($data['hasAssociatedShipments']);
            }
            if (\array_key_exists('nickname', $data)) {
                $object->setNickname($data['nickname']);
                unset($data['nickname']);
            }
            if (\array_key_exists('packageIdentifiers', $data)) {
                $values = [];
                foreach ($data['packageIdentifiers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoPackageIdentifiersItem', 'json', $context);
                }
                $object->setPackageIdentifiers($values);
                unset($data['packageIdentifiers']);
            }
            if (\array_key_exists('shipmentNotes', $data)) {
                $object->setShipmentNotes($data['shipmentNotes']);
                unset($data['shipmentNotes']);
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
            if ($object->isInitialized('hasAssociatedShipments') && null !== $object->getHasAssociatedShipments()) {
                $data['hasAssociatedShipments'] = $object->getHasAssociatedShipments();
            }
            if ($object->isInitialized('nickname') && null !== $object->getNickname()) {
                $data['nickname'] = $object->getNickname();
            }
            if ($object->isInitialized('packageIdentifiers') && null !== $object->getPackageIdentifiers()) {
                $values = [];
                foreach ($object->getPackageIdentifiers() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['packageIdentifiers'] = $values;
            }
            if ($object->isInitialized('shipmentNotes') && null !== $object->getShipmentNotes()) {
                $data['shipmentNotes'] = $object->getShipmentNotes();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfo' => false];
        }
    }
} else {
    class TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfo';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('hasAssociatedShipments', $data)) {
                $object->setHasAssociatedShipments($data['hasAssociatedShipments']);
                unset($data['hasAssociatedShipments']);
            }
            if (\array_key_exists('nickname', $data)) {
                $object->setNickname($data['nickname']);
                unset($data['nickname']);
            }
            if (\array_key_exists('packageIdentifiers', $data)) {
                $values = [];
                foreach ($data['packageIdentifiers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoPackageIdentifiersItem', 'json', $context);
                }
                $object->setPackageIdentifiers($values);
                unset($data['packageIdentifiers']);
            }
            if (\array_key_exists('shipmentNotes', $data)) {
                $object->setShipmentNotes($data['shipmentNotes']);
                unset($data['shipmentNotes']);
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
            if ($object->isInitialized('hasAssociatedShipments') && null !== $object->getHasAssociatedShipments()) {
                $data['hasAssociatedShipments'] = $object->getHasAssociatedShipments();
            }
            if ($object->isInitialized('nickname') && null !== $object->getNickname()) {
                $data['nickname'] = $object->getNickname();
            }
            if ($object->isInitialized('packageIdentifiers') && null !== $object->getPackageIdentifiers()) {
                $values = [];
                foreach ($object->getPackageIdentifiers() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['packageIdentifiers'] = $values;
            }
            if ($object->isInitialized('shipmentNotes') && null !== $object->getShipmentNotes()) {
                $data['shipmentNotes'] = $object->getShipmentNotes();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfo' => false];
        }
    }
}
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
    class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sequenceNumber', $data)) {
                $object->setSequenceNumber($data['sequenceNumber']);
                unset($data['sequenceNumber']);
            }
            if (\array_key_exists('operationalDetail', $data)) {
                $object->setOperationalDetail($this->denormalizer->denormalize($data['operationalDetail'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetail', 'json', $context));
                unset($data['operationalDetail']);
            }
            if (\array_key_exists('signatureOption', $data)) {
                $object->setSignatureOption($data['signatureOption']);
                unset($data['signatureOption']);
            }
            if (\array_key_exists('trackingIds', $data)) {
                $values = [];
                foreach ($data['trackingIds'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemTrackingIdsItem', 'json', $context);
                }
                $object->setTrackingIds($values);
                unset($data['trackingIds']);
            }
            if (\array_key_exists('groupNumber', $data)) {
                $object->setGroupNumber($data['groupNumber']);
                unset($data['groupNumber']);
            }
            if (\array_key_exists('oversizeClass', $data)) {
                $object->setOversizeClass($data['oversizeClass']);
                unset($data['oversizeClass']);
            }
            if (\array_key_exists('packageRating', $data)) {
                $object->setPackageRating($this->denormalizer->denormalize($data['packageRating'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRating', 'json', $context));
                unset($data['packageRating']);
            }
            if (\array_key_exists('dryIceWeight', $data)) {
                $object->setDryIceWeight($this->denormalizer->denormalize($data['dryIceWeight'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemDryIceWeight', 'json', $context));
                unset($data['dryIceWeight']);
            }
            if (\array_key_exists('hazardousPackageDetail', $data)) {
                $object->setHazardousPackageDetail($this->denormalizer->denormalize($data['hazardousPackageDetail'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetail', 'json', $context));
                unset($data['hazardousPackageDetail']);
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
            if ($object->isInitialized('sequenceNumber') && null !== $object->getSequenceNumber()) {
                $data['sequenceNumber'] = $object->getSequenceNumber();
            }
            if ($object->isInitialized('operationalDetail') && null !== $object->getOperationalDetail()) {
                $data['operationalDetail'] = $this->normalizer->normalize($object->getOperationalDetail(), 'json', $context);
            }
            if ($object->isInitialized('signatureOption') && null !== $object->getSignatureOption()) {
                $data['signatureOption'] = $object->getSignatureOption();
            }
            if ($object->isInitialized('trackingIds') && null !== $object->getTrackingIds()) {
                $values = [];
                foreach ($object->getTrackingIds() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['trackingIds'] = $values;
            }
            if ($object->isInitialized('groupNumber') && null !== $object->getGroupNumber()) {
                $data['groupNumber'] = $object->getGroupNumber();
            }
            if ($object->isInitialized('oversizeClass') && null !== $object->getOversizeClass()) {
                $data['oversizeClass'] = $object->getOversizeClass();
            }
            if ($object->isInitialized('packageRating') && null !== $object->getPackageRating()) {
                $data['packageRating'] = $this->normalizer->normalize($object->getPackageRating(), 'json', $context);
            }
            if ($object->isInitialized('dryIceWeight') && null !== $object->getDryIceWeight()) {
                $data['dryIceWeight'] = $this->normalizer->normalize($object->getDryIceWeight(), 'json', $context);
            }
            if ($object->isInitialized('hazardousPackageDetail') && null !== $object->getHazardousPackageDetail()) {
                $data['hazardousPackageDetail'] = $this->normalizer->normalize($object->getHazardousPackageDetail(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItem' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItem';
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
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sequenceNumber', $data)) {
                $object->setSequenceNumber($data['sequenceNumber']);
                unset($data['sequenceNumber']);
            }
            if (\array_key_exists('operationalDetail', $data)) {
                $object->setOperationalDetail($this->denormalizer->denormalize($data['operationalDetail'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetail', 'json', $context));
                unset($data['operationalDetail']);
            }
            if (\array_key_exists('signatureOption', $data)) {
                $object->setSignatureOption($data['signatureOption']);
                unset($data['signatureOption']);
            }
            if (\array_key_exists('trackingIds', $data)) {
                $values = [];
                foreach ($data['trackingIds'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemTrackingIdsItem', 'json', $context);
                }
                $object->setTrackingIds($values);
                unset($data['trackingIds']);
            }
            if (\array_key_exists('groupNumber', $data)) {
                $object->setGroupNumber($data['groupNumber']);
                unset($data['groupNumber']);
            }
            if (\array_key_exists('oversizeClass', $data)) {
                $object->setOversizeClass($data['oversizeClass']);
                unset($data['oversizeClass']);
            }
            if (\array_key_exists('packageRating', $data)) {
                $object->setPackageRating($this->denormalizer->denormalize($data['packageRating'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRating', 'json', $context));
                unset($data['packageRating']);
            }
            if (\array_key_exists('dryIceWeight', $data)) {
                $object->setDryIceWeight($this->denormalizer->denormalize($data['dryIceWeight'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemDryIceWeight', 'json', $context));
                unset($data['dryIceWeight']);
            }
            if (\array_key_exists('hazardousPackageDetail', $data)) {
                $object->setHazardousPackageDetail($this->denormalizer->denormalize($data['hazardousPackageDetail'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetail', 'json', $context));
                unset($data['hazardousPackageDetail']);
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
            if ($object->isInitialized('sequenceNumber') && null !== $object->getSequenceNumber()) {
                $data['sequenceNumber'] = $object->getSequenceNumber();
            }
            if ($object->isInitialized('operationalDetail') && null !== $object->getOperationalDetail()) {
                $data['operationalDetail'] = $this->normalizer->normalize($object->getOperationalDetail(), 'json', $context);
            }
            if ($object->isInitialized('signatureOption') && null !== $object->getSignatureOption()) {
                $data['signatureOption'] = $object->getSignatureOption();
            }
            if ($object->isInitialized('trackingIds') && null !== $object->getTrackingIds()) {
                $values = [];
                foreach ($object->getTrackingIds() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['trackingIds'] = $values;
            }
            if ($object->isInitialized('groupNumber') && null !== $object->getGroupNumber()) {
                $data['groupNumber'] = $object->getGroupNumber();
            }
            if ($object->isInitialized('oversizeClass') && null !== $object->getOversizeClass()) {
                $data['oversizeClass'] = $object->getOversizeClass();
            }
            if ($object->isInitialized('packageRating') && null !== $object->getPackageRating()) {
                $data['packageRating'] = $this->normalizer->normalize($object->getPackageRating(), 'json', $context);
            }
            if ($object->isInitialized('dryIceWeight') && null !== $object->getDryIceWeight()) {
                $data['dryIceWeight'] = $this->normalizer->normalize($object->getDryIceWeight(), 'json', $context);
            }
            if ($object->isInitialized('hazardousPackageDetail') && null !== $object->getHazardousPackageDetail()) {
                $data['hazardousPackageDetail'] = $this->normalizer->normalize($object->getHazardousPackageDetail(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItem' => false];
        }
    }
}
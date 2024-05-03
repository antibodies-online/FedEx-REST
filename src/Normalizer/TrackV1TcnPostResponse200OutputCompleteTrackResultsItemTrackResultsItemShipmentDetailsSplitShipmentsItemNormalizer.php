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
    class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsSplitShipmentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsSplitShipmentsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsSplitShipmentsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsSplitShipmentsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pieceCount', $data)) {
                $object->setPieceCount($data['pieceCount']);
                unset($data['pieceCount']);
            }
            if (\array_key_exists('statusDescription', $data)) {
                $object->setStatusDescription($data['statusDescription']);
                unset($data['statusDescription']);
            }
            if (\array_key_exists('timestamp', $data)) {
                $object->setTimestamp($data['timestamp']);
                unset($data['timestamp']);
            }
            if (\array_key_exists('statusCode', $data)) {
                $object->setStatusCode($data['statusCode']);
                unset($data['statusCode']);
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
            if ($object->isInitialized('pieceCount') && null !== $object->getPieceCount()) {
                $data['pieceCount'] = $object->getPieceCount();
            }
            if ($object->isInitialized('statusDescription') && null !== $object->getStatusDescription()) {
                $data['statusDescription'] = $object->getStatusDescription();
            }
            if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
                $data['timestamp'] = $object->getTimestamp();
            }
            if ($object->isInitialized('statusCode') && null !== $object->getStatusCode()) {
                $data['statusCode'] = $object->getStatusCode();
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
            return ['AntibodiesOnline\\FedEx\\Model\\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsSplitShipmentsItem' => false];
        }
    }
} else {
    class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsSplitShipmentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsSplitShipmentsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsSplitShipmentsItem';
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
            $object = new \AntibodiesOnline\FedEx\Model\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsSplitShipmentsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pieceCount', $data)) {
                $object->setPieceCount($data['pieceCount']);
                unset($data['pieceCount']);
            }
            if (\array_key_exists('statusDescription', $data)) {
                $object->setStatusDescription($data['statusDescription']);
                unset($data['statusDescription']);
            }
            if (\array_key_exists('timestamp', $data)) {
                $object->setTimestamp($data['timestamp']);
                unset($data['timestamp']);
            }
            if (\array_key_exists('statusCode', $data)) {
                $object->setStatusCode($data['statusCode']);
                unset($data['statusCode']);
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
            if ($object->isInitialized('pieceCount') && null !== $object->getPieceCount()) {
                $data['pieceCount'] = $object->getPieceCount();
            }
            if ($object->isInitialized('statusDescription') && null !== $object->getStatusDescription()) {
                $data['statusDescription'] = $object->getStatusDescription();
            }
            if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
                $data['timestamp'] = $object->getTimestamp();
            }
            if ($object->isInitialized('statusCode') && null !== $object->getStatusCode()) {
                $data['statusCode'] = $object->getStatusCode();
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
            return ['AntibodiesOnline\\FedEx\\Model\\TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsSplitShipmentsItem' => false];
        }
    }
}
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
    class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemTransactionDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemTransactionDetailsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemTransactionDetailsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemTransactionDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('transactionDetails', $data)) {
                $object->setTransactionDetails($data['transactionDetails']);
                unset($data['transactionDetails']);
            }
            if (\array_key_exists('transactionId', $data)) {
                $object->setTransactionId($data['transactionId']);
                unset($data['transactionId']);
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
            if ($object->isInitialized('transactionDetails') && null !== $object->getTransactionDetails()) {
                $data['transactionDetails'] = $object->getTransactionDetails();
            }
            if ($object->isInitialized('transactionId') && null !== $object->getTransactionId()) {
                $data['transactionId'] = $object->getTransactionId();
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemTransactionDetailsItem' => false];
        }
    }
} else {
    class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemTransactionDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemTransactionDetailsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemTransactionDetailsItem';
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
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemTransactionDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('transactionDetails', $data)) {
                $object->setTransactionDetails($data['transactionDetails']);
                unset($data['transactionDetails']);
            }
            if (\array_key_exists('transactionId', $data)) {
                $object->setTransactionId($data['transactionId']);
                unset($data['transactionId']);
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
            if ($object->isInitialized('transactionDetails') && null !== $object->getTransactionDetails()) {
                $data['transactionDetails'] = $object->getTransactionDetails();
            }
            if ($object->isInitialized('transactionId') && null !== $object->getTransactionId()) {
                $data['transactionId'] = $object->getTransactionId();
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemTransactionDetailsItem' => false];
        }
    }
}
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
    class ShipV1ShipmentsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('mergeLabelDocOption', $data)) {
                $object->setMergeLabelDocOption($data['mergeLabelDocOption']);
                unset($data['mergeLabelDocOption']);
            }
            if (\array_key_exists('requestedShipment', $data)) {
                $object->setRequestedShipment($this->denormalizer->denormalize($data['requestedShipment'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipment::class, 'json', $context));
                unset($data['requestedShipment']);
            }
            if (\array_key_exists('labelResponseOptions', $data)) {
                $object->setLabelResponseOptions($data['labelResponseOptions']);
                unset($data['labelResponseOptions']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyAccountNumber::class, 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('shipAction', $data)) {
                $object->setShipAction($data['shipAction']);
                unset($data['shipAction']);
            }
            if (\array_key_exists('processingOptionType', $data)) {
                $object->setProcessingOptionType($data['processingOptionType']);
                unset($data['processingOptionType']);
            }
            if (\array_key_exists('oneLabelAtATime', $data)) {
                $object->setOneLabelAtATime($data['oneLabelAtATime']);
                unset($data['oneLabelAtATime']);
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
            if ($object->isInitialized('mergeLabelDocOption') && null !== $object->getMergeLabelDocOption()) {
                $data['mergeLabelDocOption'] = $object->getMergeLabelDocOption();
            }
            $data['requestedShipment'] = $this->normalizer->normalize($object->getRequestedShipment(), 'json', $context);
            $data['labelResponseOptions'] = $object->getLabelResponseOptions();
            $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            if ($object->isInitialized('shipAction') && null !== $object->getShipAction()) {
                $data['shipAction'] = $object->getShipAction();
            }
            if ($object->isInitialized('processingOptionType') && null !== $object->getProcessingOptionType()) {
                $data['processingOptionType'] = $object->getProcessingOptionType();
            }
            if ($object->isInitialized('oneLabelAtATime') && null !== $object->getOneLabelAtATime()) {
                $data['oneLabelAtATime'] = $object->getOneLabelAtATime();
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBody::class => false];
        }
    }
} else {
    class ShipV1ShipmentsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBody::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('mergeLabelDocOption', $data)) {
                $object->setMergeLabelDocOption($data['mergeLabelDocOption']);
                unset($data['mergeLabelDocOption']);
            }
            if (\array_key_exists('requestedShipment', $data)) {
                $object->setRequestedShipment($this->denormalizer->denormalize($data['requestedShipment'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipment::class, 'json', $context));
                unset($data['requestedShipment']);
            }
            if (\array_key_exists('labelResponseOptions', $data)) {
                $object->setLabelResponseOptions($data['labelResponseOptions']);
                unset($data['labelResponseOptions']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyAccountNumber::class, 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('shipAction', $data)) {
                $object->setShipAction($data['shipAction']);
                unset($data['shipAction']);
            }
            if (\array_key_exists('processingOptionType', $data)) {
                $object->setProcessingOptionType($data['processingOptionType']);
                unset($data['processingOptionType']);
            }
            if (\array_key_exists('oneLabelAtATime', $data)) {
                $object->setOneLabelAtATime($data['oneLabelAtATime']);
                unset($data['oneLabelAtATime']);
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
            if ($object->isInitialized('mergeLabelDocOption') && null !== $object->getMergeLabelDocOption()) {
                $data['mergeLabelDocOption'] = $object->getMergeLabelDocOption();
            }
            $data['requestedShipment'] = $this->normalizer->normalize($object->getRequestedShipment(), 'json', $context);
            $data['labelResponseOptions'] = $object->getLabelResponseOptions();
            $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            if ($object->isInitialized('shipAction') && null !== $object->getShipAction()) {
                $data['shipAction'] = $object->getShipAction();
            }
            if ($object->isInitialized('processingOptionType') && null !== $object->getProcessingOptionType()) {
                $data['processingOptionType'] = $object->getProcessingOptionType();
            }
            if ($object->isInitialized('oneLabelAtATime') && null !== $object->getOneLabelAtATime()) {
                $data['oneLabelAtATime'] = $object->getOneLabelAtATime();
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBody::class => false];
        }
    }
}
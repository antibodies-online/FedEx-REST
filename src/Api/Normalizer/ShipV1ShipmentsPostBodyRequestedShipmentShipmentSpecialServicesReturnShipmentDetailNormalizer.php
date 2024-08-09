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
    class ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('returnEmailDetail', $data)) {
                $object->setReturnEmailDetail($this->denormalizer->denormalize($data['returnEmailDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail::class, 'json', $context));
                unset($data['returnEmailDetail']);
            }
            if (\array_key_exists('rma', $data)) {
                $object->setRma($this->denormalizer->denormalize($data['rma'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma::class, 'json', $context));
                unset($data['rma']);
            }
            if (\array_key_exists('returnAssociationDetail', $data)) {
                $object->setReturnAssociationDetail($this->denormalizer->denormalize($data['returnAssociationDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail::class, 'json', $context));
                unset($data['returnAssociationDetail']);
            }
            if (\array_key_exists('returnType', $data)) {
                $object->setReturnType($data['returnType']);
                unset($data['returnType']);
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
            if ($object->isInitialized('returnEmailDetail') && null !== $object->getReturnEmailDetail()) {
                $data['returnEmailDetail'] = $this->normalizer->normalize($object->getReturnEmailDetail(), 'json', $context);
            }
            if ($object->isInitialized('rma') && null !== $object->getRma()) {
                $data['rma'] = $this->normalizer->normalize($object->getRma(), 'json', $context);
            }
            if ($object->isInitialized('returnAssociationDetail') && null !== $object->getReturnAssociationDetail()) {
                $data['returnAssociationDetail'] = $this->normalizer->normalize($object->getReturnAssociationDetail(), 'json', $context);
            }
            $data['returnType'] = $object->getReturnType();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetail::class => false];
        }
    }
} else {
    class ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetail::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('returnEmailDetail', $data)) {
                $object->setReturnEmailDetail($this->denormalizer->denormalize($data['returnEmailDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail::class, 'json', $context));
                unset($data['returnEmailDetail']);
            }
            if (\array_key_exists('rma', $data)) {
                $object->setRma($this->denormalizer->denormalize($data['rma'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma::class, 'json', $context));
                unset($data['rma']);
            }
            if (\array_key_exists('returnAssociationDetail', $data)) {
                $object->setReturnAssociationDetail($this->denormalizer->denormalize($data['returnAssociationDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail::class, 'json', $context));
                unset($data['returnAssociationDetail']);
            }
            if (\array_key_exists('returnType', $data)) {
                $object->setReturnType($data['returnType']);
                unset($data['returnType']);
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
            if ($object->isInitialized('returnEmailDetail') && null !== $object->getReturnEmailDetail()) {
                $data['returnEmailDetail'] = $this->normalizer->normalize($object->getReturnEmailDetail(), 'json', $context);
            }
            if ($object->isInitialized('rma') && null !== $object->getRma()) {
                $data['rma'] = $this->normalizer->normalize($object->getRma(), 'json', $context);
            }
            if ($object->isInitialized('returnAssociationDetail') && null !== $object->getReturnAssociationDetail()) {
                $data['returnAssociationDetail'] = $this->normalizer->normalize($object->getReturnAssociationDetail(), 'json', $context);
            }
            $data['returnType'] = $object->getReturnType();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetail::class => false];
        }
    }
}
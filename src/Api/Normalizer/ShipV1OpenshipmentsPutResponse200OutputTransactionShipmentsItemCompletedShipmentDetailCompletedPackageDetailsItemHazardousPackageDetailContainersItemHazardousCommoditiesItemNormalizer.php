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
    class ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItem();
            if (\array_key_exists('massPoints', $data) && \is_int($data['massPoints'])) {
                $data['massPoints'] = (double) $data['massPoints'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($this->denormalizer->denormalize($data['quantity'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemQuantity', 'json', $context));
                unset($data['quantity']);
            }
            if (\array_key_exists('options', $data)) {
                $object->setOptions($this->denormalizer->denormalize($data['options'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptions', 'json', $context));
                unset($data['options']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($this->denormalizer->denormalize($data['description'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription', 'json', $context));
                unset($data['description']);
            }
            if (\array_key_exists('netExplosiveDetail', $data)) {
                $object->setNetExplosiveDetail($this->denormalizer->denormalize($data['netExplosiveDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemNetExplosiveDetail', 'json', $context));
                unset($data['netExplosiveDetail']);
            }
            if (\array_key_exists('massPoints', $data)) {
                $object->setMassPoints($data['massPoints']);
                unset($data['massPoints']);
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
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['quantity'] = $this->normalizer->normalize($object->getQuantity(), 'json', $context);
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $data['options'] = $this->normalizer->normalize($object->getOptions(), 'json', $context);
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $this->normalizer->normalize($object->getDescription(), 'json', $context);
            }
            if ($object->isInitialized('netExplosiveDetail') && null !== $object->getNetExplosiveDetail()) {
                $data['netExplosiveDetail'] = $this->normalizer->normalize($object->getNetExplosiveDetail(), 'json', $context);
            }
            if ($object->isInitialized('massPoints') && null !== $object->getMassPoints()) {
                $data['massPoints'] = $object->getMassPoints();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItem' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItem';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItem();
            if (\array_key_exists('massPoints', $data) && \is_int($data['massPoints'])) {
                $data['massPoints'] = (double) $data['massPoints'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($this->denormalizer->denormalize($data['quantity'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemQuantity', 'json', $context));
                unset($data['quantity']);
            }
            if (\array_key_exists('options', $data)) {
                $object->setOptions($this->denormalizer->denormalize($data['options'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptions', 'json', $context));
                unset($data['options']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($this->denormalizer->denormalize($data['description'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription', 'json', $context));
                unset($data['description']);
            }
            if (\array_key_exists('netExplosiveDetail', $data)) {
                $object->setNetExplosiveDetail($this->denormalizer->denormalize($data['netExplosiveDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemNetExplosiveDetail', 'json', $context));
                unset($data['netExplosiveDetail']);
            }
            if (\array_key_exists('massPoints', $data)) {
                $object->setMassPoints($data['massPoints']);
                unset($data['massPoints']);
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
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['quantity'] = $this->normalizer->normalize($object->getQuantity(), 'json', $context);
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $data['options'] = $this->normalizer->normalize($object->getOptions(), 'json', $context);
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $this->normalizer->normalize($object->getDescription(), 'json', $context);
            }
            if ($object->isInitialized('netExplosiveDetail') && null !== $object->getNetExplosiveDetail()) {
                $data['netExplosiveDetail'] = $this->normalizer->normalize($object->getNetExplosiveDetail(), 'json', $context);
            }
            if ($object->isInitialized('massPoints') && null !== $object->getMassPoints()) {
                $data['massPoints'] = $object->getMassPoints();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItem' => false];
        }
    }
}
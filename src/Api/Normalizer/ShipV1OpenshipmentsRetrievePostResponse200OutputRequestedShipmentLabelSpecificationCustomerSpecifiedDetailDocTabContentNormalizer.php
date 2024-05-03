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
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContent';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContent';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('docTabContentType', $data)) {
                $object->setDocTabContentType($data['docTabContentType']);
                unset($data['docTabContentType']);
            }
            if (\array_key_exists('zone001', $data)) {
                $object->setZone001($this->denormalizer->denormalize($data['zone001'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentZone001', 'json', $context));
                unset($data['zone001']);
            }
            if (\array_key_exists('barcoded', $data)) {
                $object->setBarcoded($this->denormalizer->denormalize($data['barcoded'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentBarcoded', 'json', $context));
                unset($data['barcoded']);
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
            if ($object->isInitialized('docTabContentType') && null !== $object->getDocTabContentType()) {
                $data['docTabContentType'] = $object->getDocTabContentType();
            }
            if ($object->isInitialized('zone001') && null !== $object->getZone001()) {
                $data['zone001'] = $this->normalizer->normalize($object->getZone001(), 'json', $context);
            }
            if ($object->isInitialized('barcoded') && null !== $object->getBarcoded()) {
                $data['barcoded'] = $this->normalizer->normalize($object->getBarcoded(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContent' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContent';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContent';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('docTabContentType', $data)) {
                $object->setDocTabContentType($data['docTabContentType']);
                unset($data['docTabContentType']);
            }
            if (\array_key_exists('zone001', $data)) {
                $object->setZone001($this->denormalizer->denormalize($data['zone001'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentZone001', 'json', $context));
                unset($data['zone001']);
            }
            if (\array_key_exists('barcoded', $data)) {
                $object->setBarcoded($this->denormalizer->denormalize($data['barcoded'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentBarcoded', 'json', $context));
                unset($data['barcoded']);
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
            if ($object->isInitialized('docTabContentType') && null !== $object->getDocTabContentType()) {
                $data['docTabContentType'] = $object->getDocTabContentType();
            }
            if ($object->isInitialized('zone001') && null !== $object->getZone001()) {
                $data['zone001'] = $this->normalizer->normalize($object->getZone001(), 'json', $context);
            }
            if ($object->isInitialized('barcoded') && null !== $object->getBarcoded()) {
                $data['barcoded'] = $this->normalizer->normalize($object->getBarcoded(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContent' => false];
        }
    }
}
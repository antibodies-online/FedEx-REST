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
    class ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('astraHandlingText', $data)) {
                $object->setAstraHandlingText($data['astraHandlingText']);
                unset($data['astraHandlingText']);
            }
            if (\array_key_exists('barcodes', $data)) {
                $object->setBarcodes($this->denormalizer->denormalize($data['barcodes'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodes', 'json', $context));
                unset($data['barcodes']);
            }
            if (\array_key_exists('operationalInstructions', $data)) {
                $values = [];
                foreach ($data['operationalInstructions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailOperationalInstructionsItem', 'json', $context);
                }
                $object->setOperationalInstructions($values);
                unset($data['operationalInstructions']);
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
            if ($object->isInitialized('astraHandlingText') && null !== $object->getAstraHandlingText()) {
                $data['astraHandlingText'] = $object->getAstraHandlingText();
            }
            if ($object->isInitialized('barcodes') && null !== $object->getBarcodes()) {
                $data['barcodes'] = $this->normalizer->normalize($object->getBarcodes(), 'json', $context);
            }
            if ($object->isInitialized('operationalInstructions') && null !== $object->getOperationalInstructions()) {
                $values = [];
                foreach ($object->getOperationalInstructions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['operationalInstructions'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetail' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetail';
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
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('astraHandlingText', $data)) {
                $object->setAstraHandlingText($data['astraHandlingText']);
                unset($data['astraHandlingText']);
            }
            if (\array_key_exists('barcodes', $data)) {
                $object->setBarcodes($this->denormalizer->denormalize($data['barcodes'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodes', 'json', $context));
                unset($data['barcodes']);
            }
            if (\array_key_exists('operationalInstructions', $data)) {
                $values = [];
                foreach ($data['operationalInstructions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailOperationalInstructionsItem', 'json', $context);
                }
                $object->setOperationalInstructions($values);
                unset($data['operationalInstructions']);
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
            if ($object->isInitialized('astraHandlingText') && null !== $object->getAstraHandlingText()) {
                $data['astraHandlingText'] = $object->getAstraHandlingText();
            }
            if ($object->isInitialized('barcodes') && null !== $object->getBarcodes()) {
                $data['barcodes'] = $this->normalizer->normalize($object->getBarcodes(), 'json', $context);
            }
            if ($object->isInitialized('operationalInstructions') && null !== $object->getOperationalInstructions()) {
                $values = [];
                foreach ($object->getOperationalInstructions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['operationalInstructions'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetail' => false];
        }
    }
}
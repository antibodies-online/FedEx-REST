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
    class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('derivedHarmonizedCode', $data)) {
                $object->setDerivedHarmonizedCode($data['derivedHarmonizedCode']);
                unset($data['derivedHarmonizedCode']);
            }
            if (\array_key_exists('advisory', $data)) {
                $object->setAdvisory($this->denormalizer->denormalize($data['advisory'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemAdvisory', 'json', $context));
                unset($data['advisory']);
            }
            if (\array_key_exists('commodityIndex', $data)) {
                $object->setCommodityIndex($data['commodityIndex']);
                unset($data['commodityIndex']);
            }
            if (\array_key_exists('source', $data)) {
                $object->setSource($data['source']);
                unset($data['source']);
            }
            if (\array_key_exists('categories', $data)) {
                $values = [];
                foreach ($data['categories'] as $value) {
                    $values[] = $value;
                }
                $object->setCategories($values);
                unset($data['categories']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('waiver', $data)) {
                $object->setWaiver($this->denormalizer->denormalize($data['waiver'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiver', 'json', $context));
                unset($data['waiver']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
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
            if ($object->isInitialized('derivedHarmonizedCode') && null !== $object->getDerivedHarmonizedCode()) {
                $data['derivedHarmonizedCode'] = $object->getDerivedHarmonizedCode();
            }
            if ($object->isInitialized('advisory') && null !== $object->getAdvisory()) {
                $data['advisory'] = $this->normalizer->normalize($object->getAdvisory(), 'json', $context);
            }
            if ($object->isInitialized('commodityIndex') && null !== $object->getCommodityIndex()) {
                $data['commodityIndex'] = $object->getCommodityIndex();
            }
            if ($object->isInitialized('source') && null !== $object->getSource()) {
                $data['source'] = $object->getSource();
            }
            if ($object->isInitialized('categories') && null !== $object->getCategories()) {
                $values = [];
                foreach ($object->getCategories() as $value) {
                    $values[] = $value;
                }
                $data['categories'] = $values;
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('waiver') && null !== $object->getWaiver()) {
                $data['waiver'] = $this->normalizer->normalize($object->getWaiver(), 'json', $context);
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItem' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItem';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('derivedHarmonizedCode', $data)) {
                $object->setDerivedHarmonizedCode($data['derivedHarmonizedCode']);
                unset($data['derivedHarmonizedCode']);
            }
            if (\array_key_exists('advisory', $data)) {
                $object->setAdvisory($this->denormalizer->denormalize($data['advisory'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemAdvisory', 'json', $context));
                unset($data['advisory']);
            }
            if (\array_key_exists('commodityIndex', $data)) {
                $object->setCommodityIndex($data['commodityIndex']);
                unset($data['commodityIndex']);
            }
            if (\array_key_exists('source', $data)) {
                $object->setSource($data['source']);
                unset($data['source']);
            }
            if (\array_key_exists('categories', $data)) {
                $values = [];
                foreach ($data['categories'] as $value) {
                    $values[] = $value;
                }
                $object->setCategories($values);
                unset($data['categories']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('waiver', $data)) {
                $object->setWaiver($this->denormalizer->denormalize($data['waiver'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemWaiver', 'json', $context));
                unset($data['waiver']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
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
            if ($object->isInitialized('derivedHarmonizedCode') && null !== $object->getDerivedHarmonizedCode()) {
                $data['derivedHarmonizedCode'] = $object->getDerivedHarmonizedCode();
            }
            if ($object->isInitialized('advisory') && null !== $object->getAdvisory()) {
                $data['advisory'] = $this->normalizer->normalize($object->getAdvisory(), 'json', $context);
            }
            if ($object->isInitialized('commodityIndex') && null !== $object->getCommodityIndex()) {
                $data['commodityIndex'] = $object->getCommodityIndex();
            }
            if ($object->isInitialized('source') && null !== $object->getSource()) {
                $data['source'] = $object->getSource();
            }
            if ($object->isInitialized('categories') && null !== $object->getCategories()) {
                $values = [];
                foreach ($object->getCategories() as $value) {
                    $values[] = $value;
                }
                $data['categories'] = $values;
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('waiver') && null !== $object->getWaiver()) {
                $data['waiver'] = $this->normalizer->normalize($object->getWaiver(), 'json', $context);
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItem' => false];
        }
    }
}
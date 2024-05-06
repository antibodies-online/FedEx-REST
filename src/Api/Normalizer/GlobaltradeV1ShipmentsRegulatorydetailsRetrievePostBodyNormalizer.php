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
    class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('totalCommodityValue', $data)) {
                $object->setTotalCommodityValue($this->denormalizer->denormalize($data['totalCommodityValue'], 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyTotalCommodityValue', 'json', $context));
                unset($data['totalCommodityValue']);
            }
            if (\array_key_exists('originAddress', $data)) {
                $object->setOriginAddress($this->denormalizer->denormalize($data['originAddress'], 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyOriginAddress', 'json', $context));
                unset($data['originAddress']);
            }
            if (\array_key_exists('destinationAddress', $data)) {
                $object->setDestinationAddress($this->denormalizer->denormalize($data['destinationAddress'], 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyDestinationAddress', 'json', $context));
                unset($data['destinationAddress']);
            }
            if (\array_key_exists('serviceOptionType', $data)) {
                $values = [];
                foreach ($data['serviceOptionType'] as $value) {
                    $values[] = $value;
                }
                $object->setServiceOptionType($values);
                unset($data['serviceOptionType']);
            }
            if (\array_key_exists('customsClearanceDetail', $data)) {
                $object->setCustomsClearanceDetail($this->denormalizer->denormalize($data['customsClearanceDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetail', 'json', $context));
                unset($data['customsClearanceDetail']);
            }
            if (\array_key_exists('shipDate', $data)) {
                $object->setShipDate($data['shipDate']);
                unset($data['shipDate']);
            }
            if (\array_key_exists('carrierCode', $data)) {
                $object->setCarrierCode($data['carrierCode']);
                unset($data['carrierCode']);
            }
            if (\array_key_exists('totalWeight', $data)) {
                $object->setTotalWeight($this->denormalizer->denormalize($data['totalWeight'], 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyTotalWeight', 'json', $context));
                unset($data['totalWeight']);
            }
            if (\array_key_exists('includeURLReferences', $data)) {
                $object->setIncludeURLReferences($data['includeURLReferences']);
                unset($data['includeURLReferences']);
            }
            if (\array_key_exists('consolidationType', $data)) {
                $object->setConsolidationType($data['consolidationType']);
                unset($data['consolidationType']);
            }
            if (\array_key_exists('consolidationRole', $data)) {
                $object->setConsolidationRole($data['consolidationRole']);
                unset($data['consolidationRole']);
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
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('totalCommodityValue') && null !== $object->getTotalCommodityValue()) {
                $data['totalCommodityValue'] = $this->normalizer->normalize($object->getTotalCommodityValue(), 'json', $context);
            }
            $data['originAddress'] = $this->normalizer->normalize($object->getOriginAddress(), 'json', $context);
            $data['destinationAddress'] = $this->normalizer->normalize($object->getDestinationAddress(), 'json', $context);
            if ($object->isInitialized('serviceOptionType') && null !== $object->getServiceOptionType()) {
                $values = [];
                foreach ($object->getServiceOptionType() as $value) {
                    $values[] = $value;
                }
                $data['serviceOptionType'] = $values;
            }
            if ($object->isInitialized('customsClearanceDetail') && null !== $object->getCustomsClearanceDetail()) {
                $data['customsClearanceDetail'] = $this->normalizer->normalize($object->getCustomsClearanceDetail(), 'json', $context);
            }
            if ($object->isInitialized('shipDate') && null !== $object->getShipDate()) {
                $data['shipDate'] = $object->getShipDate();
            }
            $data['carrierCode'] = $object->getCarrierCode();
            if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
                $data['totalWeight'] = $this->normalizer->normalize($object->getTotalWeight(), 'json', $context);
            }
            if ($object->isInitialized('includeURLReferences') && null !== $object->getIncludeURLReferences()) {
                $data['includeURLReferences'] = $object->getIncludeURLReferences();
            }
            if ($object->isInitialized('consolidationType') && null !== $object->getConsolidationType()) {
                $data['consolidationType'] = $object->getConsolidationType();
            }
            if ($object->isInitialized('consolidationRole') && null !== $object->getConsolidationRole()) {
                $data['consolidationRole'] = $object->getConsolidationRole();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBody' => false];
        }
    }
} else {
    class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBody';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceType', $data)) {
                $object->setServiceType($data['serviceType']);
                unset($data['serviceType']);
            }
            if (\array_key_exists('totalCommodityValue', $data)) {
                $object->setTotalCommodityValue($this->denormalizer->denormalize($data['totalCommodityValue'], 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyTotalCommodityValue', 'json', $context));
                unset($data['totalCommodityValue']);
            }
            if (\array_key_exists('originAddress', $data)) {
                $object->setOriginAddress($this->denormalizer->denormalize($data['originAddress'], 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyOriginAddress', 'json', $context));
                unset($data['originAddress']);
            }
            if (\array_key_exists('destinationAddress', $data)) {
                $object->setDestinationAddress($this->denormalizer->denormalize($data['destinationAddress'], 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyDestinationAddress', 'json', $context));
                unset($data['destinationAddress']);
            }
            if (\array_key_exists('serviceOptionType', $data)) {
                $values = [];
                foreach ($data['serviceOptionType'] as $value) {
                    $values[] = $value;
                }
                $object->setServiceOptionType($values);
                unset($data['serviceOptionType']);
            }
            if (\array_key_exists('customsClearanceDetail', $data)) {
                $object->setCustomsClearanceDetail($this->denormalizer->denormalize($data['customsClearanceDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetail', 'json', $context));
                unset($data['customsClearanceDetail']);
            }
            if (\array_key_exists('shipDate', $data)) {
                $object->setShipDate($data['shipDate']);
                unset($data['shipDate']);
            }
            if (\array_key_exists('carrierCode', $data)) {
                $object->setCarrierCode($data['carrierCode']);
                unset($data['carrierCode']);
            }
            if (\array_key_exists('totalWeight', $data)) {
                $object->setTotalWeight($this->denormalizer->denormalize($data['totalWeight'], 'AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyTotalWeight', 'json', $context));
                unset($data['totalWeight']);
            }
            if (\array_key_exists('includeURLReferences', $data)) {
                $object->setIncludeURLReferences($data['includeURLReferences']);
                unset($data['includeURLReferences']);
            }
            if (\array_key_exists('consolidationType', $data)) {
                $object->setConsolidationType($data['consolidationType']);
                unset($data['consolidationType']);
            }
            if (\array_key_exists('consolidationRole', $data)) {
                $object->setConsolidationRole($data['consolidationRole']);
                unset($data['consolidationRole']);
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
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['serviceType'] = $object->getServiceType();
            }
            if ($object->isInitialized('totalCommodityValue') && null !== $object->getTotalCommodityValue()) {
                $data['totalCommodityValue'] = $this->normalizer->normalize($object->getTotalCommodityValue(), 'json', $context);
            }
            $data['originAddress'] = $this->normalizer->normalize($object->getOriginAddress(), 'json', $context);
            $data['destinationAddress'] = $this->normalizer->normalize($object->getDestinationAddress(), 'json', $context);
            if ($object->isInitialized('serviceOptionType') && null !== $object->getServiceOptionType()) {
                $values = [];
                foreach ($object->getServiceOptionType() as $value) {
                    $values[] = $value;
                }
                $data['serviceOptionType'] = $values;
            }
            if ($object->isInitialized('customsClearanceDetail') && null !== $object->getCustomsClearanceDetail()) {
                $data['customsClearanceDetail'] = $this->normalizer->normalize($object->getCustomsClearanceDetail(), 'json', $context);
            }
            if ($object->isInitialized('shipDate') && null !== $object->getShipDate()) {
                $data['shipDate'] = $object->getShipDate();
            }
            $data['carrierCode'] = $object->getCarrierCode();
            if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
                $data['totalWeight'] = $this->normalizer->normalize($object->getTotalWeight(), 'json', $context);
            }
            if ($object->isInitialized('includeURLReferences') && null !== $object->getIncludeURLReferences()) {
                $data['includeURLReferences'] = $object->getIncludeURLReferences();
            }
            if ($object->isInitialized('consolidationType') && null !== $object->getConsolidationType()) {
                $data['consolidationType'] = $object->getConsolidationType();
            }
            if ($object->isInitialized('consolidationRole') && null !== $object->getConsolidationRole()) {
                $data['consolidationRole'] = $object->getConsolidationRole();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBody' => false];
        }
    }
}
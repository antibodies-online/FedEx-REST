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
    class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasuresNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasures::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasures::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasures();
            if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
                $data['quantity'] = (double) $data['quantity'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('uom', $data)) {
                $object->setUom($data['uom']);
                unset($data['uom']);
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($data['quantity']);
                unset($data['quantity']);
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
            $data['uom'] = $object->getUom();
            $data['quantity'] = $object->getQuantity();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasures::class => false];
        }
    }
} else {
    class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasuresNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasures::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasures::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasures();
            if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
                $data['quantity'] = (double) $data['quantity'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('uom', $data)) {
                $object->setUom($data['uom']);
                unset($data['uom']);
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($data['quantity']);
                unset($data['quantity']);
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
            $data['uom'] = $object->getUom();
            $data['quantity'] = $object->getQuantity();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasures::class => false];
        }
    }
}
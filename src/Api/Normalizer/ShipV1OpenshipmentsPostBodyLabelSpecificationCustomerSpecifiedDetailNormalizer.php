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
    class ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('maskedData', $data)) {
                $values = [];
                foreach ($data['maskedData'] as $value) {
                    $values[] = $value;
                }
                $object->setMaskedData($values);
                unset($data['maskedData']);
            }
            if (\array_key_exists('regulatoryLabels', $data)) {
                $values_1 = [];
                foreach ($data['regulatoryLabels'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailRegulatoryLabelsItem::class, 'json', $context);
                }
                $object->setRegulatoryLabels($values_1);
                unset($data['regulatoryLabels']);
            }
            if (\array_key_exists('additionalLabels', $data)) {
                $values_2 = [];
                foreach ($data['additionalLabels'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailAdditionalLabelsItem::class, 'json', $context);
                }
                $object->setAdditionalLabels($values_2);
                unset($data['additionalLabels']);
            }
            if (\array_key_exists('docTabContent', $data)) {
                $object->setDocTabContent($this->denormalizer->denormalize($data['docTabContent'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailDocTabContent::class, 'json', $context));
                unset($data['docTabContent']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('maskedData') && null !== $object->getMaskedData()) {
                $values = [];
                foreach ($object->getMaskedData() as $value) {
                    $values[] = $value;
                }
                $data['maskedData'] = $values;
            }
            if ($object->isInitialized('regulatoryLabels') && null !== $object->getRegulatoryLabels()) {
                $values_1 = [];
                foreach ($object->getRegulatoryLabels() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['regulatoryLabels'] = $values_1;
            }
            if ($object->isInitialized('additionalLabels') && null !== $object->getAdditionalLabels()) {
                $values_2 = [];
                foreach ($object->getAdditionalLabels() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['additionalLabels'] = $values_2;
            }
            if ($object->isInitialized('docTabContent') && null !== $object->getDocTabContent()) {
                $data['docTabContent'] = $this->normalizer->normalize($object->getDocTabContent(), 'json', $context);
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetail::class => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetail::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('maskedData', $data)) {
                $values = [];
                foreach ($data['maskedData'] as $value) {
                    $values[] = $value;
                }
                $object->setMaskedData($values);
                unset($data['maskedData']);
            }
            if (\array_key_exists('regulatoryLabels', $data)) {
                $values_1 = [];
                foreach ($data['regulatoryLabels'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailRegulatoryLabelsItem::class, 'json', $context);
                }
                $object->setRegulatoryLabels($values_1);
                unset($data['regulatoryLabels']);
            }
            if (\array_key_exists('additionalLabels', $data)) {
                $values_2 = [];
                foreach ($data['additionalLabels'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailAdditionalLabelsItem::class, 'json', $context);
                }
                $object->setAdditionalLabels($values_2);
                unset($data['additionalLabels']);
            }
            if (\array_key_exists('docTabContent', $data)) {
                $object->setDocTabContent($this->denormalizer->denormalize($data['docTabContent'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailDocTabContent::class, 'json', $context));
                unset($data['docTabContent']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('maskedData') && null !== $object->getMaskedData()) {
                $values = [];
                foreach ($object->getMaskedData() as $value) {
                    $values[] = $value;
                }
                $data['maskedData'] = $values;
            }
            if ($object->isInitialized('regulatoryLabels') && null !== $object->getRegulatoryLabels()) {
                $values_1 = [];
                foreach ($object->getRegulatoryLabels() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['regulatoryLabels'] = $values_1;
            }
            if ($object->isInitialized('additionalLabels') && null !== $object->getAdditionalLabels()) {
                $values_2 = [];
                foreach ($object->getAdditionalLabels() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['additionalLabels'] = $values_2;
            }
            if ($object->isInitialized('docTabContent') && null !== $object->getDocTabContent()) {
                $data['docTabContent'] = $this->normalizer->normalize($object->getDocTabContent(), 'json', $context);
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetail::class => false];
        }
    }
}
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
    class ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900DetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900Detail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900Detail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900Detail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('customerImageUsages', $data)) {
                $values = [];
                foreach ($data['customerImageUsages'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900DetailCustomerImageUsagesItem', 'json', $context);
                }
                $object->setCustomerImageUsages($values);
                unset($data['customerImageUsages']);
            }
            if (\array_key_exists('signatureName', $data)) {
                $object->setSignatureName($data['signatureName']);
                unset($data['signatureName']);
            }
            if (\array_key_exists('documentFormat', $data)) {
                $object->setDocumentFormat($this->denormalizer->denormalize($data['documentFormat'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900DetailDocumentFormat', 'json', $context));
                unset($data['documentFormat']);
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
            if ($object->isInitialized('customerImageUsages') && null !== $object->getCustomerImageUsages()) {
                $values = [];
                foreach ($object->getCustomerImageUsages() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customerImageUsages'] = $values;
            }
            if ($object->isInitialized('signatureName') && null !== $object->getSignatureName()) {
                $data['signatureName'] = $object->getSignatureName();
            }
            if ($object->isInitialized('documentFormat') && null !== $object->getDocumentFormat()) {
                $data['documentFormat'] = $this->normalizer->normalize($object->getDocumentFormat(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900Detail' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900DetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900Detail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900Detail';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900Detail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('customerImageUsages', $data)) {
                $values = [];
                foreach ($data['customerImageUsages'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900DetailCustomerImageUsagesItem', 'json', $context);
                }
                $object->setCustomerImageUsages($values);
                unset($data['customerImageUsages']);
            }
            if (\array_key_exists('signatureName', $data)) {
                $object->setSignatureName($data['signatureName']);
                unset($data['signatureName']);
            }
            if (\array_key_exists('documentFormat', $data)) {
                $object->setDocumentFormat($this->denormalizer->denormalize($data['documentFormat'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900DetailDocumentFormat', 'json', $context));
                unset($data['documentFormat']);
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
            if ($object->isInitialized('customerImageUsages') && null !== $object->getCustomerImageUsages()) {
                $values = [];
                foreach ($object->getCustomerImageUsages() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customerImageUsages'] = $values;
            }
            if ($object->isInitialized('signatureName') && null !== $object->getSignatureName()) {
                $data['signatureName'] = $object->getSignatureName();
            }
            if ($object->isInitialized('documentFormat') && null !== $object->getDocumentFormat()) {
                $data['documentFormat'] = $this->normalizer->normalize($object->getDocumentFormat(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900Detail' => false];
        }
    }
}
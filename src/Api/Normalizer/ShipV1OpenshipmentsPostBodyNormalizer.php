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
    class ShipV1OpenshipmentsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('labelResponseOptions', $data)) {
                $object->setLabelResponseOptions($data['labelResponseOptions']);
                unset($data['labelResponseOptions']);
            }
            if (\array_key_exists('edtRequestType', $data)) {
                $object->setEdtRequestType($data['edtRequestType']);
                unset($data['edtRequestType']);
            }
            if (\array_key_exists('labelSpecification', $data)) {
                $object->setLabelSpecification($this->denormalizer->denormalize($data['labelSpecification'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBodyLabelSpecification', 'json', $context));
                unset($data['labelSpecification']);
            }
            if (\array_key_exists('index', $data)) {
                $object->setIndex($data['index']);
                unset($data['index']);
            }
            if (\array_key_exists('shippingDocumentSpecification', $data)) {
                $object->setShippingDocumentSpecification($this->denormalizer->denormalize($data['shippingDocumentSpecification'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBodyShippingDocumentSpecification', 'json', $context));
                unset($data['shippingDocumentSpecification']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBodyAccountNumber', 'json', $context));
                unset($data['accountNumber']);
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
            $data['labelResponseOptions'] = $object->getLabelResponseOptions();
            if ($object->isInitialized('edtRequestType') && null !== $object->getEdtRequestType()) {
                $data['edtRequestType'] = $object->getEdtRequestType();
            }
            $data['labelSpecification'] = $this->normalizer->normalize($object->getLabelSpecification(), 'json', $context);
            $data['index'] = $object->getIndex();
            if ($object->isInitialized('shippingDocumentSpecification') && null !== $object->getShippingDocumentSpecification()) {
                $data['shippingDocumentSpecification'] = $this->normalizer->normalize($object->getShippingDocumentSpecification(), 'json', $context);
            }
            $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBody' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBody';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('labelResponseOptions', $data)) {
                $object->setLabelResponseOptions($data['labelResponseOptions']);
                unset($data['labelResponseOptions']);
            }
            if (\array_key_exists('edtRequestType', $data)) {
                $object->setEdtRequestType($data['edtRequestType']);
                unset($data['edtRequestType']);
            }
            if (\array_key_exists('labelSpecification', $data)) {
                $object->setLabelSpecification($this->denormalizer->denormalize($data['labelSpecification'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBodyLabelSpecification', 'json', $context));
                unset($data['labelSpecification']);
            }
            if (\array_key_exists('index', $data)) {
                $object->setIndex($data['index']);
                unset($data['index']);
            }
            if (\array_key_exists('shippingDocumentSpecification', $data)) {
                $object->setShippingDocumentSpecification($this->denormalizer->denormalize($data['shippingDocumentSpecification'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBodyShippingDocumentSpecification', 'json', $context));
                unset($data['shippingDocumentSpecification']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBodyAccountNumber', 'json', $context));
                unset($data['accountNumber']);
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
            $data['labelResponseOptions'] = $object->getLabelResponseOptions();
            if ($object->isInitialized('edtRequestType') && null !== $object->getEdtRequestType()) {
                $data['edtRequestType'] = $object->getEdtRequestType();
            }
            $data['labelSpecification'] = $this->normalizer->normalize($object->getLabelSpecification(), 'json', $context);
            $data['index'] = $object->getIndex();
            if ($object->isInitialized('shippingDocumentSpecification') && null !== $object->getShippingDocumentSpecification()) {
                $data['shippingDocumentSpecification'] = $this->normalizer->normalize($object->getShippingDocumentSpecification(), 'json', $context);
            }
            $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPostBody' => false];
        }
    }
}
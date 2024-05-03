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
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormat';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormat';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormat();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('provideInstructions', $data)) {
                $object->setProvideInstructions($data['provideInstructions']);
                unset($data['provideInstructions']);
            }
            if (\array_key_exists('optionsRequested', $data)) {
                $object->setOptionsRequested($this->denormalizer->denormalize($data['optionsRequested'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatOptionsRequested', 'json', $context));
                unset($data['optionsRequested']);
            }
            if (\array_key_exists('stockType', $data)) {
                $object->setStockType($data['stockType']);
                unset($data['stockType']);
            }
            if (\array_key_exists('dispositions', $data)) {
                $values = [];
                foreach ($data['dispositions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatDispositionsItem', 'json', $context);
                }
                $object->setDispositions($values);
                unset($data['dispositions']);
            }
            if (\array_key_exists('locale', $data)) {
                $object->setLocale($data['locale']);
                unset($data['locale']);
            }
            if (\array_key_exists('docType', $data)) {
                $object->setDocType($data['docType']);
                unset($data['docType']);
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
            if ($object->isInitialized('provideInstructions') && null !== $object->getProvideInstructions()) {
                $data['provideInstructions'] = $object->getProvideInstructions();
            }
            if ($object->isInitialized('optionsRequested') && null !== $object->getOptionsRequested()) {
                $data['optionsRequested'] = $this->normalizer->normalize($object->getOptionsRequested(), 'json', $context);
            }
            if ($object->isInitialized('stockType') && null !== $object->getStockType()) {
                $data['stockType'] = $object->getStockType();
            }
            if ($object->isInitialized('dispositions') && null !== $object->getDispositions()) {
                $values = [];
                foreach ($object->getDispositions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['dispositions'] = $values;
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
            }
            if ($object->isInitialized('docType') && null !== $object->getDocType()) {
                $data['docType'] = $object->getDocType();
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormat' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormat';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormat';
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
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormat();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('provideInstructions', $data)) {
                $object->setProvideInstructions($data['provideInstructions']);
                unset($data['provideInstructions']);
            }
            if (\array_key_exists('optionsRequested', $data)) {
                $object->setOptionsRequested($this->denormalizer->denormalize($data['optionsRequested'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatOptionsRequested', 'json', $context));
                unset($data['optionsRequested']);
            }
            if (\array_key_exists('stockType', $data)) {
                $object->setStockType($data['stockType']);
                unset($data['stockType']);
            }
            if (\array_key_exists('dispositions', $data)) {
                $values = [];
                foreach ($data['dispositions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatDispositionsItem', 'json', $context);
                }
                $object->setDispositions($values);
                unset($data['dispositions']);
            }
            if (\array_key_exists('locale', $data)) {
                $object->setLocale($data['locale']);
                unset($data['locale']);
            }
            if (\array_key_exists('docType', $data)) {
                $object->setDocType($data['docType']);
                unset($data['docType']);
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
            if ($object->isInitialized('provideInstructions') && null !== $object->getProvideInstructions()) {
                $data['provideInstructions'] = $object->getProvideInstructions();
            }
            if ($object->isInitialized('optionsRequested') && null !== $object->getOptionsRequested()) {
                $data['optionsRequested'] = $this->normalizer->normalize($object->getOptionsRequested(), 'json', $context);
            }
            if ($object->isInitialized('stockType') && null !== $object->getStockType()) {
                $data['stockType'] = $object->getStockType();
            }
            if ($object->isInitialized('dispositions') && null !== $object->getDispositions()) {
                $values = [];
                foreach ($object->getDispositions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['dispositions'] = $values;
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
            }
            if ($object->isInitialized('docType') && null !== $object->getDocType()) {
                $data['docType'] = $object->getDocType();
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormat' => false];
        }
    }
}
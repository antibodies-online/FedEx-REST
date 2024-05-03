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
    class TrackV1TrackingdocumentsPostResponse200OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingdocumentsPostResponse200Output';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingdocumentsPostResponse200Output';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\TrackV1TrackingdocumentsPostResponse200Output();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('localization', $data)) {
                $object->setLocalization($this->denormalizer->denormalize($data['localization'], 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingdocumentsPostResponse200OutputLocalization', 'json', $context));
                unset($data['localization']);
            }
            if (\array_key_exists('documentType', $data)) {
                $object->setDocumentType($data['documentType']);
                unset($data['documentType']);
            }
            if (\array_key_exists('documentFormat', $data)) {
                $object->setDocumentFormat($data['documentFormat']);
                unset($data['documentFormat']);
            }
            if (\array_key_exists('document', $data)) {
                $values = [];
                foreach ($data['document'] as $value) {
                    $values[] = $value;
                }
                $object->setDocument($values);
                unset($data['document']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values_1 = [];
                foreach ($data['alerts'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingdocumentsPostResponse200OutputAlertsItem', 'json', $context);
                }
                $object->setAlerts($values_1);
                unset($data['alerts']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('localization') && null !== $object->getLocalization()) {
                $data['localization'] = $this->normalizer->normalize($object->getLocalization(), 'json', $context);
            }
            if ($object->isInitialized('documentType') && null !== $object->getDocumentType()) {
                $data['documentType'] = $object->getDocumentType();
            }
            if ($object->isInitialized('documentFormat') && null !== $object->getDocumentFormat()) {
                $data['documentFormat'] = $object->getDocumentFormat();
            }
            if ($object->isInitialized('document') && null !== $object->getDocument()) {
                $values = [];
                foreach ($object->getDocument() as $value) {
                    $values[] = $value;
                }
                $data['document'] = $values;
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values_1 = [];
                foreach ($object->getAlerts() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['alerts'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingdocumentsPostResponse200Output' => false];
        }
    }
} else {
    class TrackV1TrackingdocumentsPostResponse200OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingdocumentsPostResponse200Output';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingdocumentsPostResponse200Output';
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
            $object = new \AntibodiesOnline\FedEx\Model\TrackV1TrackingdocumentsPostResponse200Output();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('localization', $data)) {
                $object->setLocalization($this->denormalizer->denormalize($data['localization'], 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingdocumentsPostResponse200OutputLocalization', 'json', $context));
                unset($data['localization']);
            }
            if (\array_key_exists('documentType', $data)) {
                $object->setDocumentType($data['documentType']);
                unset($data['documentType']);
            }
            if (\array_key_exists('documentFormat', $data)) {
                $object->setDocumentFormat($data['documentFormat']);
                unset($data['documentFormat']);
            }
            if (\array_key_exists('document', $data)) {
                $values = [];
                foreach ($data['document'] as $value) {
                    $values[] = $value;
                }
                $object->setDocument($values);
                unset($data['document']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values_1 = [];
                foreach ($data['alerts'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingdocumentsPostResponse200OutputAlertsItem', 'json', $context);
                }
                $object->setAlerts($values_1);
                unset($data['alerts']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('localization') && null !== $object->getLocalization()) {
                $data['localization'] = $this->normalizer->normalize($object->getLocalization(), 'json', $context);
            }
            if ($object->isInitialized('documentType') && null !== $object->getDocumentType()) {
                $data['documentType'] = $object->getDocumentType();
            }
            if ($object->isInitialized('documentFormat') && null !== $object->getDocumentFormat()) {
                $data['documentFormat'] = $object->getDocumentFormat();
            }
            if ($object->isInitialized('document') && null !== $object->getDocument()) {
                $values = [];
                foreach ($object->getDocument() as $value) {
                    $values[] = $value;
                }
                $data['document'] = $values;
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values_1 = [];
                foreach ($object->getAlerts() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['alerts'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\TrackV1TrackingdocumentsPostResponse200Output' => false];
        }
    }
}
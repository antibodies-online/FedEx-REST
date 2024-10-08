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
    class TrackV1ReferencenumbersPostResponse200OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200Output::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200Output::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200Output();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('cxsErrors', $data)) {
                $values = [];
                foreach ($data['cxsErrors'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200OutputCxsErrorsItem::class, 'json', $context);
                }
                $object->setCxsErrors($values);
                unset($data['cxsErrors']);
            }
            if (\array_key_exists('completeTrackResults', $data)) {
                $values_1 = [];
                foreach ($data['completeTrackResults'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItem::class, 'json', $context);
                }
                $object->setCompleteTrackResults($values_1);
                unset($data['completeTrackResults']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values_2 = [];
                foreach ($data['alerts'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200OutputAlertsItem::class, 'json', $context);
                }
                $object->setAlerts($values_2);
                unset($data['alerts']);
            }
            if (\array_key_exists('successful', $data)) {
                $object->setSuccessful($data['successful']);
                unset($data['successful']);
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
            if ($object->isInitialized('cxsErrors') && null !== $object->getCxsErrors()) {
                $values = [];
                foreach ($object->getCxsErrors() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['cxsErrors'] = $values;
            }
            if ($object->isInitialized('completeTrackResults') && null !== $object->getCompleteTrackResults()) {
                $values_1 = [];
                foreach ($object->getCompleteTrackResults() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['completeTrackResults'] = $values_1;
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values_2 = [];
                foreach ($object->getAlerts() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['alerts'] = $values_2;
            }
            if ($object->isInitialized('successful') && null !== $object->getSuccessful()) {
                $data['successful'] = $object->getSuccessful();
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
            return [\AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200Output::class => false];
        }
    }
} else {
    class TrackV1ReferencenumbersPostResponse200OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200Output::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200Output::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200Output();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('cxsErrors', $data)) {
                $values = [];
                foreach ($data['cxsErrors'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200OutputCxsErrorsItem::class, 'json', $context);
                }
                $object->setCxsErrors($values);
                unset($data['cxsErrors']);
            }
            if (\array_key_exists('completeTrackResults', $data)) {
                $values_1 = [];
                foreach ($data['completeTrackResults'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItem::class, 'json', $context);
                }
                $object->setCompleteTrackResults($values_1);
                unset($data['completeTrackResults']);
            }
            if (\array_key_exists('alerts', $data)) {
                $values_2 = [];
                foreach ($data['alerts'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200OutputAlertsItem::class, 'json', $context);
                }
                $object->setAlerts($values_2);
                unset($data['alerts']);
            }
            if (\array_key_exists('successful', $data)) {
                $object->setSuccessful($data['successful']);
                unset($data['successful']);
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
            if ($object->isInitialized('cxsErrors') && null !== $object->getCxsErrors()) {
                $values = [];
                foreach ($object->getCxsErrors() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['cxsErrors'] = $values;
            }
            if ($object->isInitialized('completeTrackResults') && null !== $object->getCompleteTrackResults()) {
                $values_1 = [];
                foreach ($object->getCompleteTrackResults() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['completeTrackResults'] = $values_1;
            }
            if ($object->isInitialized('alerts') && null !== $object->getAlerts()) {
                $values_2 = [];
                foreach ($object->getAlerts() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['alerts'] = $values_2;
            }
            if ($object->isInitialized('successful') && null !== $object->getSuccessful()) {
                $data['successful'] = $object->getSuccessful();
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
            return [\AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse200Output::class => false];
        }
    }
}
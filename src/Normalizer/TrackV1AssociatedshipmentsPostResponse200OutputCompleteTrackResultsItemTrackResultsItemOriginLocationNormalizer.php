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
    class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocation';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('locationId', $data)) {
                $object->setLocationId($data['locationId']);
                unset($data['locationId']);
            }
            if (\array_key_exists('locationContactAndAddress', $data)) {
                $object->setLocationContactAndAddress($this->denormalizer->denormalize($data['locationContactAndAddress'], 'AntibodiesOnline\\FedEx\\Model\\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocationlocationContactAndAddress', 'json', $context));
                unset($data['locationContactAndAddress']);
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
            if ($object->isInitialized('locationId') && null !== $object->getLocationId()) {
                $data['locationId'] = $object->getLocationId();
            }
            if ($object->isInitialized('locationContactAndAddress') && null !== $object->getLocationContactAndAddress()) {
                $data['locationContactAndAddress'] = $this->normalizer->normalize($object->getLocationContactAndAddress(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocation' => false];
        }
    }
} else {
    class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocation';
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
            $object = new \AntibodiesOnline\FedEx\Model\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('locationId', $data)) {
                $object->setLocationId($data['locationId']);
                unset($data['locationId']);
            }
            if (\array_key_exists('locationContactAndAddress', $data)) {
                $object->setLocationContactAndAddress($this->denormalizer->denormalize($data['locationContactAndAddress'], 'AntibodiesOnline\\FedEx\\Model\\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocationlocationContactAndAddress', 'json', $context));
                unset($data['locationContactAndAddress']);
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
            if ($object->isInitialized('locationId') && null !== $object->getLocationId()) {
                $data['locationId'] = $object->getLocationId();
            }
            if ($object->isInitialized('locationContactAndAddress') && null !== $object->getLocationContactAndAddress()) {
                $data['locationContactAndAddress'] = $this->normalizer->normalize($object->getLocationContactAndAddress(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Model\\TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocation' => false];
        }
    }
}
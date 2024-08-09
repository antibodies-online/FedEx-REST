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
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pieces', $data)) {
                $object->setPieces($data['pieces']);
                unset($data['pieces']);
            }
            if (\array_key_exists('volume', $data)) {
                $object->setVolume($this->denormalizer->denormalize($data['volume'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItemVolume::class, 'json', $context));
                unset($data['volume']);
            }
            if (\array_key_exists('handlingUnits', $data)) {
                $object->setHandlingUnits($data['handlingUnits']);
                unset($data['handlingUnits']);
            }
            if (\array_key_exists('freightClass', $data)) {
                $object->setFreightClass($data['freightClass']);
                unset($data['freightClass']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($data['weight']);
                unset($data['weight']);
            }
            if (\array_key_exists('packaging', $data)) {
                $object->setPackaging($data['packaging']);
                unset($data['packaging']);
            }
            if (\array_key_exists('classProvidedByCustomer', $data)) {
                $object->setClassProvidedByCustomer($data['classProvidedByCustomer']);
                unset($data['classProvidedByCustomer']);
            }
            if (\array_key_exists('hazardousMaterials', $data)) {
                $object->setHazardousMaterials($data['hazardousMaterials']);
                unset($data['hazardousMaterials']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($data['dimensions']);
                unset($data['dimensions']);
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
            if ($object->isInitialized('pieces') && null !== $object->getPieces()) {
                $data['pieces'] = $object->getPieces();
            }
            if ($object->isInitialized('volume') && null !== $object->getVolume()) {
                $data['volume'] = $this->normalizer->normalize($object->getVolume(), 'json', $context);
            }
            if ($object->isInitialized('handlingUnits') && null !== $object->getHandlingUnits()) {
                $data['handlingUnits'] = $object->getHandlingUnits();
            }
            $data['freightClass'] = $object->getFreightClass();
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            $data['weight'] = $object->getWeight();
            if ($object->isInitialized('packaging') && null !== $object->getPackaging()) {
                $data['packaging'] = $object->getPackaging();
            }
            if ($object->isInitialized('classProvidedByCustomer') && null !== $object->getClassProvidedByCustomer()) {
                $data['classProvidedByCustomer'] = $object->getClassProvidedByCustomer();
            }
            if ($object->isInitialized('hazardousMaterials') && null !== $object->getHazardousMaterials()) {
                $data['hazardousMaterials'] = $object->getHazardousMaterials();
            }
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $object->getDimensions();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItem::class => false];
        }
    }
} else {
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pieces', $data)) {
                $object->setPieces($data['pieces']);
                unset($data['pieces']);
            }
            if (\array_key_exists('volume', $data)) {
                $object->setVolume($this->denormalizer->denormalize($data['volume'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItemVolume::class, 'json', $context));
                unset($data['volume']);
            }
            if (\array_key_exists('handlingUnits', $data)) {
                $object->setHandlingUnits($data['handlingUnits']);
                unset($data['handlingUnits']);
            }
            if (\array_key_exists('freightClass', $data)) {
                $object->setFreightClass($data['freightClass']);
                unset($data['freightClass']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($data['weight']);
                unset($data['weight']);
            }
            if (\array_key_exists('packaging', $data)) {
                $object->setPackaging($data['packaging']);
                unset($data['packaging']);
            }
            if (\array_key_exists('classProvidedByCustomer', $data)) {
                $object->setClassProvidedByCustomer($data['classProvidedByCustomer']);
                unset($data['classProvidedByCustomer']);
            }
            if (\array_key_exists('hazardousMaterials', $data)) {
                $object->setHazardousMaterials($data['hazardousMaterials']);
                unset($data['hazardousMaterials']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($data['dimensions']);
                unset($data['dimensions']);
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
            if ($object->isInitialized('pieces') && null !== $object->getPieces()) {
                $data['pieces'] = $object->getPieces();
            }
            if ($object->isInitialized('volume') && null !== $object->getVolume()) {
                $data['volume'] = $this->normalizer->normalize($object->getVolume(), 'json', $context);
            }
            if ($object->isInitialized('handlingUnits') && null !== $object->getHandlingUnits()) {
                $data['handlingUnits'] = $object->getHandlingUnits();
            }
            $data['freightClass'] = $object->getFreightClass();
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            $data['weight'] = $object->getWeight();
            if ($object->isInitialized('packaging') && null !== $object->getPackaging()) {
                $data['packaging'] = $object->getPackaging();
            }
            if ($object->isInitialized('classProvidedByCustomer') && null !== $object->getClassProvidedByCustomer()) {
                $data['classProvidedByCustomer'] = $object->getClassProvidedByCustomer();
            }
            if ($object->isInitialized('hazardousMaterials') && null !== $object->getHazardousMaterials()) {
                $data['hazardousMaterials'] = $object->getHazardousMaterials();
            }
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $object->getDimensions();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItem::class => false];
        }
    }
}
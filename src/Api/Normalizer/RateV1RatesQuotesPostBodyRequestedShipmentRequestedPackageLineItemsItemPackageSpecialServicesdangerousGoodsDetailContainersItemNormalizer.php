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
    class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('offeror', $data)) {
                $object->setOfferor($data['offeror']);
                unset($data['offeror']);
            }
            if (\array_key_exists('hazardousCommodities', $data)) {
                $values = [];
                foreach ($data['hazardousCommodities'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItem::class, 'json', $context);
                }
                $object->setHazardousCommodities($values);
                unset($data['hazardousCommodities']);
            }
            if (\array_key_exists('numberOfContainers', $data)) {
                $object->setNumberOfContainers($data['numberOfContainers']);
                unset($data['numberOfContainers']);
            }
            if (\array_key_exists('containerType', $data)) {
                $object->setContainerType($data['containerType']);
                unset($data['containerType']);
            }
            if (\array_key_exists('emergencyContactNumber', $data)) {
                $object->setEmergencyContactNumber($this->denormalizer->denormalize($data['emergencyContactNumber'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemEmergencyContactNumber::class, 'json', $context));
                unset($data['emergencyContactNumber']);
            }
            if (\array_key_exists('packaging', $data)) {
                $object->setPackaging($this->denormalizer->denormalize($data['packaging'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemPackaging::class, 'json', $context));
                unset($data['packaging']);
            }
            if (\array_key_exists('packingType', $data)) {
                $object->setPackingType($data['packingType']);
                unset($data['packingType']);
            }
            if (\array_key_exists('radioactiveContainerClass', $data)) {
                $object->setRadioactiveContainerClass($data['radioactiveContainerClass']);
                unset($data['radioactiveContainerClass']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('offeror') && null !== $object->getOfferor()) {
                $data['offeror'] = $object->getOfferor();
            }
            if ($object->isInitialized('hazardousCommodities') && null !== $object->getHazardousCommodities()) {
                $values = [];
                foreach ($object->getHazardousCommodities() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['hazardousCommodities'] = $values;
            }
            if ($object->isInitialized('numberOfContainers') && null !== $object->getNumberOfContainers()) {
                $data['numberOfContainers'] = $object->getNumberOfContainers();
            }
            if ($object->isInitialized('containerType') && null !== $object->getContainerType()) {
                $data['containerType'] = $object->getContainerType();
            }
            if ($object->isInitialized('emergencyContactNumber') && null !== $object->getEmergencyContactNumber()) {
                $data['emergencyContactNumber'] = $this->normalizer->normalize($object->getEmergencyContactNumber(), 'json', $context);
            }
            if ($object->isInitialized('packaging') && null !== $object->getPackaging()) {
                $data['packaging'] = $this->normalizer->normalize($object->getPackaging(), 'json', $context);
            }
            if ($object->isInitialized('packingType') && null !== $object->getPackingType()) {
                $data['packingType'] = $object->getPackingType();
            }
            if ($object->isInitialized('radioactiveContainerClass') && null !== $object->getRadioactiveContainerClass()) {
                $data['radioactiveContainerClass'] = $object->getRadioactiveContainerClass();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItem::class => false];
        }
    }
} else {
    class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('offeror', $data)) {
                $object->setOfferor($data['offeror']);
                unset($data['offeror']);
            }
            if (\array_key_exists('hazardousCommodities', $data)) {
                $values = [];
                foreach ($data['hazardousCommodities'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItem::class, 'json', $context);
                }
                $object->setHazardousCommodities($values);
                unset($data['hazardousCommodities']);
            }
            if (\array_key_exists('numberOfContainers', $data)) {
                $object->setNumberOfContainers($data['numberOfContainers']);
                unset($data['numberOfContainers']);
            }
            if (\array_key_exists('containerType', $data)) {
                $object->setContainerType($data['containerType']);
                unset($data['containerType']);
            }
            if (\array_key_exists('emergencyContactNumber', $data)) {
                $object->setEmergencyContactNumber($this->denormalizer->denormalize($data['emergencyContactNumber'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemEmergencyContactNumber::class, 'json', $context));
                unset($data['emergencyContactNumber']);
            }
            if (\array_key_exists('packaging', $data)) {
                $object->setPackaging($this->denormalizer->denormalize($data['packaging'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemPackaging::class, 'json', $context));
                unset($data['packaging']);
            }
            if (\array_key_exists('packingType', $data)) {
                $object->setPackingType($data['packingType']);
                unset($data['packingType']);
            }
            if (\array_key_exists('radioactiveContainerClass', $data)) {
                $object->setRadioactiveContainerClass($data['radioactiveContainerClass']);
                unset($data['radioactiveContainerClass']);
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
            if ($object->isInitialized('offeror') && null !== $object->getOfferor()) {
                $data['offeror'] = $object->getOfferor();
            }
            if ($object->isInitialized('hazardousCommodities') && null !== $object->getHazardousCommodities()) {
                $values = [];
                foreach ($object->getHazardousCommodities() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['hazardousCommodities'] = $values;
            }
            if ($object->isInitialized('numberOfContainers') && null !== $object->getNumberOfContainers()) {
                $data['numberOfContainers'] = $object->getNumberOfContainers();
            }
            if ($object->isInitialized('containerType') && null !== $object->getContainerType()) {
                $data['containerType'] = $object->getContainerType();
            }
            if ($object->isInitialized('emergencyContactNumber') && null !== $object->getEmergencyContactNumber()) {
                $data['emergencyContactNumber'] = $this->normalizer->normalize($object->getEmergencyContactNumber(), 'json', $context);
            }
            if ($object->isInitialized('packaging') && null !== $object->getPackaging()) {
                $data['packaging'] = $this->normalizer->normalize($object->getPackaging(), 'json', $context);
            }
            if ($object->isInitialized('packingType') && null !== $object->getPackingType()) {
                $data['packingType'] = $object->getPackingType();
            }
            if ($object->isInitialized('radioactiveContainerClass') && null !== $object->getRadioactiveContainerClass()) {
                $data['radioactiveContainerClass'] = $object->getRadioactiveContainerClass();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItem::class => false];
        }
    }
}
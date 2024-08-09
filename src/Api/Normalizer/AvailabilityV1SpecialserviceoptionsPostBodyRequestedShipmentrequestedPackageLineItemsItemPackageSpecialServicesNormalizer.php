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
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServices::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServices::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServices();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('signatureOptionType', $data)) {
                $object->setSignatureOptionType($data['signatureOptionType']);
                unset($data['signatureOptionType']);
            }
            if (\array_key_exists('signatureOptionDetail', $data)) {
                $object->setSignatureOptionDetail($this->denormalizer->denormalize($data['signatureOptionDetail'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesSignatureOptionDetail::class, 'json', $context));
                unset($data['signatureOptionDetail']);
            }
            if (\array_key_exists('alcoholDetail', $data)) {
                $object->setAlcoholDetail($this->denormalizer->denormalize($data['alcoholDetail'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail::class, 'json', $context));
                unset($data['alcoholDetail']);
            }
            if (\array_key_exists('dangerousGoodsDetail', $data)) {
                $object->setDangerousGoodsDetail($this->denormalizer->denormalize($data['dangerousGoodsDetail'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail::class, 'json', $context));
                unset($data['dangerousGoodsDetail']);
            }
            if (\array_key_exists('pieceCountVerificationBoxCount', $data)) {
                $object->setPieceCountVerificationBoxCount($data['pieceCountVerificationBoxCount']);
                unset($data['pieceCountVerificationBoxCount']);
            }
            if (\array_key_exists('batteryDetails', $data)) {
                $values = [];
                foreach ($data['batteryDetails'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesBatteryDetailsItem::class, 'json', $context);
                }
                $object->setBatteryDetails($values);
                unset($data['batteryDetails']);
            }
            if (\array_key_exists('specialServiceTypes', $data)) {
                $values_1 = [];
                foreach ($data['specialServiceTypes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setSpecialServiceTypes($values_1);
                unset($data['specialServiceTypes']);
            }
            if (\array_key_exists('codDetail', $data)) {
                $object->setCodDetail($data['codDetail']);
                unset($data['codDetail']);
            }
            if (\array_key_exists('dryIceWeight', $data)) {
                $object->setDryIceWeight($data['dryIceWeight']);
                unset($data['dryIceWeight']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('signatureOptionType') && null !== $object->getSignatureOptionType()) {
                $data['signatureOptionType'] = $object->getSignatureOptionType();
            }
            if ($object->isInitialized('signatureOptionDetail') && null !== $object->getSignatureOptionDetail()) {
                $data['signatureOptionDetail'] = $this->normalizer->normalize($object->getSignatureOptionDetail(), 'json', $context);
            }
            if ($object->isInitialized('alcoholDetail') && null !== $object->getAlcoholDetail()) {
                $data['alcoholDetail'] = $this->normalizer->normalize($object->getAlcoholDetail(), 'json', $context);
            }
            if ($object->isInitialized('dangerousGoodsDetail') && null !== $object->getDangerousGoodsDetail()) {
                $data['dangerousGoodsDetail'] = $this->normalizer->normalize($object->getDangerousGoodsDetail(), 'json', $context);
            }
            if ($object->isInitialized('pieceCountVerificationBoxCount') && null !== $object->getPieceCountVerificationBoxCount()) {
                $data['pieceCountVerificationBoxCount'] = $object->getPieceCountVerificationBoxCount();
            }
            if ($object->isInitialized('batteryDetails') && null !== $object->getBatteryDetails()) {
                $values = [];
                foreach ($object->getBatteryDetails() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['batteryDetails'] = $values;
            }
            if ($object->isInitialized('specialServiceTypes') && null !== $object->getSpecialServiceTypes()) {
                $values_1 = [];
                foreach ($object->getSpecialServiceTypes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['specialServiceTypes'] = $values_1;
            }
            $data['codDetail'] = $object->getCodDetail();
            if ($object->isInitialized('dryIceWeight') && null !== $object->getDryIceWeight()) {
                $data['dryIceWeight'] = $object->getDryIceWeight();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServices::class => false];
        }
    }
} else {
    class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServices::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServices::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServices();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('signatureOptionType', $data)) {
                $object->setSignatureOptionType($data['signatureOptionType']);
                unset($data['signatureOptionType']);
            }
            if (\array_key_exists('signatureOptionDetail', $data)) {
                $object->setSignatureOptionDetail($this->denormalizer->denormalize($data['signatureOptionDetail'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesSignatureOptionDetail::class, 'json', $context));
                unset($data['signatureOptionDetail']);
            }
            if (\array_key_exists('alcoholDetail', $data)) {
                $object->setAlcoholDetail($this->denormalizer->denormalize($data['alcoholDetail'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail::class, 'json', $context));
                unset($data['alcoholDetail']);
            }
            if (\array_key_exists('dangerousGoodsDetail', $data)) {
                $object->setDangerousGoodsDetail($this->denormalizer->denormalize($data['dangerousGoodsDetail'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail::class, 'json', $context));
                unset($data['dangerousGoodsDetail']);
            }
            if (\array_key_exists('pieceCountVerificationBoxCount', $data)) {
                $object->setPieceCountVerificationBoxCount($data['pieceCountVerificationBoxCount']);
                unset($data['pieceCountVerificationBoxCount']);
            }
            if (\array_key_exists('batteryDetails', $data)) {
                $values = [];
                foreach ($data['batteryDetails'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesBatteryDetailsItem::class, 'json', $context);
                }
                $object->setBatteryDetails($values);
                unset($data['batteryDetails']);
            }
            if (\array_key_exists('specialServiceTypes', $data)) {
                $values_1 = [];
                foreach ($data['specialServiceTypes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setSpecialServiceTypes($values_1);
                unset($data['specialServiceTypes']);
            }
            if (\array_key_exists('codDetail', $data)) {
                $object->setCodDetail($data['codDetail']);
                unset($data['codDetail']);
            }
            if (\array_key_exists('dryIceWeight', $data)) {
                $object->setDryIceWeight($data['dryIceWeight']);
                unset($data['dryIceWeight']);
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
            if ($object->isInitialized('signatureOptionType') && null !== $object->getSignatureOptionType()) {
                $data['signatureOptionType'] = $object->getSignatureOptionType();
            }
            if ($object->isInitialized('signatureOptionDetail') && null !== $object->getSignatureOptionDetail()) {
                $data['signatureOptionDetail'] = $this->normalizer->normalize($object->getSignatureOptionDetail(), 'json', $context);
            }
            if ($object->isInitialized('alcoholDetail') && null !== $object->getAlcoholDetail()) {
                $data['alcoholDetail'] = $this->normalizer->normalize($object->getAlcoholDetail(), 'json', $context);
            }
            if ($object->isInitialized('dangerousGoodsDetail') && null !== $object->getDangerousGoodsDetail()) {
                $data['dangerousGoodsDetail'] = $this->normalizer->normalize($object->getDangerousGoodsDetail(), 'json', $context);
            }
            if ($object->isInitialized('pieceCountVerificationBoxCount') && null !== $object->getPieceCountVerificationBoxCount()) {
                $data['pieceCountVerificationBoxCount'] = $object->getPieceCountVerificationBoxCount();
            }
            if ($object->isInitialized('batteryDetails') && null !== $object->getBatteryDetails()) {
                $values = [];
                foreach ($object->getBatteryDetails() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['batteryDetails'] = $values;
            }
            if ($object->isInitialized('specialServiceTypes') && null !== $object->getSpecialServiceTypes()) {
                $values_1 = [];
                foreach ($object->getSpecialServiceTypes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['specialServiceTypes'] = $values_1;
            }
            $data['codDetail'] = $object->getCodDetail();
            if ($object->isInitialized('dryIceWeight') && null !== $object->getDryIceWeight()) {
                $data['dryIceWeight'] = $object->getDryIceWeight();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServices::class => false];
        }
    }
}
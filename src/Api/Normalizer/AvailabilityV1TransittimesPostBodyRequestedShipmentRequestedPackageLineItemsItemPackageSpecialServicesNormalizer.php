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
    class AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('specialServiceTypes', $data)) {
                $values = [];
                foreach ($data['specialServiceTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setSpecialServiceTypes($values);
                unset($data['specialServiceTypes']);
            }
            if (\array_key_exists('codDetail', $data)) {
                $object->setCodDetail($this->denormalizer->denormalize($data['codDetail'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesCodDetail::class, 'json', $context));
                unset($data['codDetail']);
            }
            if (\array_key_exists('dryIceWeight', $data)) {
                $object->setDryIceWeight($this->denormalizer->denormalize($data['dryIceWeight'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDryIceWeight::class, 'json', $context));
                unset($data['dryIceWeight']);
            }
            if (\array_key_exists('dangerousGoodsDetail', $data)) {
                $object->setDangerousGoodsDetail($this->denormalizer->denormalize($data['dangerousGoodsDetail'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail::class, 'json', $context));
                unset($data['dangerousGoodsDetail']);
            }
            if (\array_key_exists('alcoholDetail', $data)) {
                $object->setAlcoholDetail($this->denormalizer->denormalize($data['alcoholDetail'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail::class, 'json', $context));
                unset($data['alcoholDetail']);
            }
            if (\array_key_exists('pieceCountVerificationBoxCount', $data)) {
                $object->setPieceCountVerificationBoxCount($data['pieceCountVerificationBoxCount']);
                unset($data['pieceCountVerificationBoxCount']);
            }
            if (\array_key_exists('batteryDetails', $data)) {
                $object->setBatteryDetails($this->denormalizer->denormalize($data['batteryDetails'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesBatteryDetails::class, 'json', $context));
                unset($data['batteryDetails']);
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
            if ($object->isInitialized('specialServiceTypes') && null !== $object->getSpecialServiceTypes()) {
                $values = [];
                foreach ($object->getSpecialServiceTypes() as $value) {
                    $values[] = $value;
                }
                $data['specialServiceTypes'] = $values;
            }
            if ($object->isInitialized('codDetail') && null !== $object->getCodDetail()) {
                $data['codDetail'] = $this->normalizer->normalize($object->getCodDetail(), 'json', $context);
            }
            if ($object->isInitialized('dryIceWeight') && null !== $object->getDryIceWeight()) {
                $data['dryIceWeight'] = $this->normalizer->normalize($object->getDryIceWeight(), 'json', $context);
            }
            if ($object->isInitialized('dangerousGoodsDetail') && null !== $object->getDangerousGoodsDetail()) {
                $data['dangerousGoodsDetail'] = $this->normalizer->normalize($object->getDangerousGoodsDetail(), 'json', $context);
            }
            if ($object->isInitialized('alcoholDetail') && null !== $object->getAlcoholDetail()) {
                $data['alcoholDetail'] = $this->normalizer->normalize($object->getAlcoholDetail(), 'json', $context);
            }
            if ($object->isInitialized('pieceCountVerificationBoxCount') && null !== $object->getPieceCountVerificationBoxCount()) {
                $data['pieceCountVerificationBoxCount'] = $object->getPieceCountVerificationBoxCount();
            }
            if ($object->isInitialized('batteryDetails') && null !== $object->getBatteryDetails()) {
                $data['batteryDetails'] = $this->normalizer->normalize($object->getBatteryDetails(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices::class => false];
        }
    }
} else {
    class AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('specialServiceTypes', $data)) {
                $values = [];
                foreach ($data['specialServiceTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setSpecialServiceTypes($values);
                unset($data['specialServiceTypes']);
            }
            if (\array_key_exists('codDetail', $data)) {
                $object->setCodDetail($this->denormalizer->denormalize($data['codDetail'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesCodDetail::class, 'json', $context));
                unset($data['codDetail']);
            }
            if (\array_key_exists('dryIceWeight', $data)) {
                $object->setDryIceWeight($this->denormalizer->denormalize($data['dryIceWeight'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDryIceWeight::class, 'json', $context));
                unset($data['dryIceWeight']);
            }
            if (\array_key_exists('dangerousGoodsDetail', $data)) {
                $object->setDangerousGoodsDetail($this->denormalizer->denormalize($data['dangerousGoodsDetail'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail::class, 'json', $context));
                unset($data['dangerousGoodsDetail']);
            }
            if (\array_key_exists('alcoholDetail', $data)) {
                $object->setAlcoholDetail($this->denormalizer->denormalize($data['alcoholDetail'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesAlcoholDetail::class, 'json', $context));
                unset($data['alcoholDetail']);
            }
            if (\array_key_exists('pieceCountVerificationBoxCount', $data)) {
                $object->setPieceCountVerificationBoxCount($data['pieceCountVerificationBoxCount']);
                unset($data['pieceCountVerificationBoxCount']);
            }
            if (\array_key_exists('batteryDetails', $data)) {
                $object->setBatteryDetails($this->denormalizer->denormalize($data['batteryDetails'], \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesBatteryDetails::class, 'json', $context));
                unset($data['batteryDetails']);
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
            if ($object->isInitialized('specialServiceTypes') && null !== $object->getSpecialServiceTypes()) {
                $values = [];
                foreach ($object->getSpecialServiceTypes() as $value) {
                    $values[] = $value;
                }
                $data['specialServiceTypes'] = $values;
            }
            if ($object->isInitialized('codDetail') && null !== $object->getCodDetail()) {
                $data['codDetail'] = $this->normalizer->normalize($object->getCodDetail(), 'json', $context);
            }
            if ($object->isInitialized('dryIceWeight') && null !== $object->getDryIceWeight()) {
                $data['dryIceWeight'] = $this->normalizer->normalize($object->getDryIceWeight(), 'json', $context);
            }
            if ($object->isInitialized('dangerousGoodsDetail') && null !== $object->getDangerousGoodsDetail()) {
                $data['dangerousGoodsDetail'] = $this->normalizer->normalize($object->getDangerousGoodsDetail(), 'json', $context);
            }
            if ($object->isInitialized('alcoholDetail') && null !== $object->getAlcoholDetail()) {
                $data['alcoholDetail'] = $this->normalizer->normalize($object->getAlcoholDetail(), 'json', $context);
            }
            if ($object->isInitialized('pieceCountVerificationBoxCount') && null !== $object->getPieceCountVerificationBoxCount()) {
                $data['pieceCountVerificationBoxCount'] = $object->getPieceCountVerificationBoxCount();
            }
            if ($object->isInitialized('batteryDetails') && null !== $object->getBatteryDetails()) {
                $data['batteryDetails'] = $this->normalizer->normalize($object->getBatteryDetails(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices::class => false];
        }
    }
}
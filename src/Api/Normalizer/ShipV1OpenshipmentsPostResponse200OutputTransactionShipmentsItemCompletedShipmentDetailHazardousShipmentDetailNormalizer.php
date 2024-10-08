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
    class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('hazardousSummaryDetail', $data)) {
                $object->setHazardousSummaryDetail($this->denormalizer->denormalize($data['hazardousSummaryDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail::class, 'json', $context));
                unset($data['hazardousSummaryDetail']);
            }
            if (\array_key_exists('adrLicense', $data)) {
                $object->setAdrLicense($this->denormalizer->denormalize($data['adrLicense'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense::class, 'json', $context));
                unset($data['adrLicense']);
            }
            if (\array_key_exists('dryIceDetail', $data)) {
                $object->setDryIceDetail($this->denormalizer->denormalize($data['dryIceDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail::class, 'json', $context));
                unset($data['dryIceDetail']);
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
            if ($object->isInitialized('hazardousSummaryDetail') && null !== $object->getHazardousSummaryDetail()) {
                $data['hazardousSummaryDetail'] = $this->normalizer->normalize($object->getHazardousSummaryDetail(), 'json', $context);
            }
            if ($object->isInitialized('adrLicense') && null !== $object->getAdrLicense()) {
                $data['adrLicense'] = $this->normalizer->normalize($object->getAdrLicense(), 'json', $context);
            }
            if ($object->isInitialized('dryIceDetail') && null !== $object->getDryIceDetail()) {
                $data['dryIceDetail'] = $this->normalizer->normalize($object->getDryIceDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail::class => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('hazardousSummaryDetail', $data)) {
                $object->setHazardousSummaryDetail($this->denormalizer->denormalize($data['hazardousSummaryDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail::class, 'json', $context));
                unset($data['hazardousSummaryDetail']);
            }
            if (\array_key_exists('adrLicense', $data)) {
                $object->setAdrLicense($this->denormalizer->denormalize($data['adrLicense'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense::class, 'json', $context));
                unset($data['adrLicense']);
            }
            if (\array_key_exists('dryIceDetail', $data)) {
                $object->setDryIceDetail($this->denormalizer->denormalize($data['dryIceDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail::class, 'json', $context));
                unset($data['dryIceDetail']);
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
            if ($object->isInitialized('hazardousSummaryDetail') && null !== $object->getHazardousSummaryDetail()) {
                $data['hazardousSummaryDetail'] = $this->normalizer->normalize($object->getHazardousSummaryDetail(), 'json', $context);
            }
            if ($object->isInitialized('adrLicense') && null !== $object->getAdrLicense()) {
                $data['adrLicense'] = $this->normalizer->normalize($object->getAdrLicense(), 'json', $context);
            }
            if ($object->isInitialized('dryIceDetail') && null !== $object->getDryIceDetail()) {
                $data['dryIceDetail'] = $this->normalizer->normalize($object->getDryIceDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail::class => false];
        }
    }
}
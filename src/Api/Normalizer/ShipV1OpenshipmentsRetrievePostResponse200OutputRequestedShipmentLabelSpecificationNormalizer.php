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
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecification::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecification::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecification();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('labelFormatType', $data)) {
                $object->setLabelFormatType($data['labelFormatType']);
                unset($data['labelFormatType']);
            }
            if (\array_key_exists('labelOrder', $data)) {
                $object->setLabelOrder($data['labelOrder']);
                unset($data['labelOrder']);
            }
            if (\array_key_exists('customerSpecifiedDetail', $data)) {
                $object->setCustomerSpecifiedDetail($this->denormalizer->denormalize($data['customerSpecifiedDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetail::class, 'json', $context));
                unset($data['customerSpecifiedDetail']);
            }
            if (\array_key_exists('printedLabelOrigin', $data)) {
                $object->setPrintedLabelOrigin($this->denormalizer->denormalize($data['printedLabelOrigin'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationPrintedLabelOrigin::class, 'json', $context));
                unset($data['printedLabelOrigin']);
            }
            if (\array_key_exists('labelStockType', $data)) {
                $object->setLabelStockType($data['labelStockType']);
                unset($data['labelStockType']);
            }
            if (\array_key_exists('labelRotation', $data)) {
                $object->setLabelRotation($data['labelRotation']);
                unset($data['labelRotation']);
            }
            if (\array_key_exists('imageType', $data)) {
                $object->setImageType($data['imageType']);
                unset($data['imageType']);
            }
            if (\array_key_exists('labelPrintingOrientation', $data)) {
                $object->setLabelPrintingOrientation($data['labelPrintingOrientation']);
                unset($data['labelPrintingOrientation']);
            }
            if (\array_key_exists('returnedDispositionDetail', $data)) {
                $object->setReturnedDispositionDetail($data['returnedDispositionDetail']);
                unset($data['returnedDispositionDetail']);
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
            if ($object->isInitialized('labelFormatType') && null !== $object->getLabelFormatType()) {
                $data['labelFormatType'] = $object->getLabelFormatType();
            }
            if ($object->isInitialized('labelOrder') && null !== $object->getLabelOrder()) {
                $data['labelOrder'] = $object->getLabelOrder();
            }
            if ($object->isInitialized('customerSpecifiedDetail') && null !== $object->getCustomerSpecifiedDetail()) {
                $data['customerSpecifiedDetail'] = $this->normalizer->normalize($object->getCustomerSpecifiedDetail(), 'json', $context);
            }
            if ($object->isInitialized('printedLabelOrigin') && null !== $object->getPrintedLabelOrigin()) {
                $data['printedLabelOrigin'] = $this->normalizer->normalize($object->getPrintedLabelOrigin(), 'json', $context);
            }
            $data['labelStockType'] = $object->getLabelStockType();
            if ($object->isInitialized('labelRotation') && null !== $object->getLabelRotation()) {
                $data['labelRotation'] = $object->getLabelRotation();
            }
            $data['imageType'] = $object->getImageType();
            if ($object->isInitialized('labelPrintingOrientation') && null !== $object->getLabelPrintingOrientation()) {
                $data['labelPrintingOrientation'] = $object->getLabelPrintingOrientation();
            }
            if ($object->isInitialized('returnedDispositionDetail') && null !== $object->getReturnedDispositionDetail()) {
                $data['returnedDispositionDetail'] = $object->getReturnedDispositionDetail();
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecification::class => false];
        }
    }
} else {
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecification::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecification::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecification();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('labelFormatType', $data)) {
                $object->setLabelFormatType($data['labelFormatType']);
                unset($data['labelFormatType']);
            }
            if (\array_key_exists('labelOrder', $data)) {
                $object->setLabelOrder($data['labelOrder']);
                unset($data['labelOrder']);
            }
            if (\array_key_exists('customerSpecifiedDetail', $data)) {
                $object->setCustomerSpecifiedDetail($this->denormalizer->denormalize($data['customerSpecifiedDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetail::class, 'json', $context));
                unset($data['customerSpecifiedDetail']);
            }
            if (\array_key_exists('printedLabelOrigin', $data)) {
                $object->setPrintedLabelOrigin($this->denormalizer->denormalize($data['printedLabelOrigin'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationPrintedLabelOrigin::class, 'json', $context));
                unset($data['printedLabelOrigin']);
            }
            if (\array_key_exists('labelStockType', $data)) {
                $object->setLabelStockType($data['labelStockType']);
                unset($data['labelStockType']);
            }
            if (\array_key_exists('labelRotation', $data)) {
                $object->setLabelRotation($data['labelRotation']);
                unset($data['labelRotation']);
            }
            if (\array_key_exists('imageType', $data)) {
                $object->setImageType($data['imageType']);
                unset($data['imageType']);
            }
            if (\array_key_exists('labelPrintingOrientation', $data)) {
                $object->setLabelPrintingOrientation($data['labelPrintingOrientation']);
                unset($data['labelPrintingOrientation']);
            }
            if (\array_key_exists('returnedDispositionDetail', $data)) {
                $object->setReturnedDispositionDetail($data['returnedDispositionDetail']);
                unset($data['returnedDispositionDetail']);
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
            if ($object->isInitialized('labelFormatType') && null !== $object->getLabelFormatType()) {
                $data['labelFormatType'] = $object->getLabelFormatType();
            }
            if ($object->isInitialized('labelOrder') && null !== $object->getLabelOrder()) {
                $data['labelOrder'] = $object->getLabelOrder();
            }
            if ($object->isInitialized('customerSpecifiedDetail') && null !== $object->getCustomerSpecifiedDetail()) {
                $data['customerSpecifiedDetail'] = $this->normalizer->normalize($object->getCustomerSpecifiedDetail(), 'json', $context);
            }
            if ($object->isInitialized('printedLabelOrigin') && null !== $object->getPrintedLabelOrigin()) {
                $data['printedLabelOrigin'] = $this->normalizer->normalize($object->getPrintedLabelOrigin(), 'json', $context);
            }
            $data['labelStockType'] = $object->getLabelStockType();
            if ($object->isInitialized('labelRotation') && null !== $object->getLabelRotation()) {
                $data['labelRotation'] = $object->getLabelRotation();
            }
            $data['imageType'] = $object->getImageType();
            if ($object->isInitialized('labelPrintingOrientation') && null !== $object->getLabelPrintingOrientation()) {
                $data['labelPrintingOrientation'] = $object->getLabelPrintingOrientation();
            }
            if ($object->isInitialized('returnedDispositionDetail') && null !== $object->getReturnedDispositionDetail()) {
                $data['returnedDispositionDetail'] = $object->getReturnedDispositionDetail();
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecification::class => false];
        }
    }
}
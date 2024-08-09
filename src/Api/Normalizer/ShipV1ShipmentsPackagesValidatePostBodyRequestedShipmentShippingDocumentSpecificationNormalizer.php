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
    class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecification::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecification::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecification();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('generalAgencyAgreementDetail', $data)) {
                $object->setGeneralAgencyAgreementDetail($this->denormalizer->denormalize($data['generalAgencyAgreementDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetail::class, 'json', $context));
                unset($data['generalAgencyAgreementDetail']);
            }
            if (\array_key_exists('returnInstructionsDetail', $data)) {
                $object->setReturnInstructionsDetail($this->denormalizer->denormalize($data['returnInstructionsDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetail::class, 'json', $context));
                unset($data['returnInstructionsDetail']);
            }
            if (\array_key_exists('op900Detail', $data)) {
                $object->setOp900Detail($this->denormalizer->denormalize($data['op900Detail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationOp900Detail::class, 'json', $context));
                unset($data['op900Detail']);
            }
            if (\array_key_exists('usmcaCertificationOfOriginDetail', $data)) {
                $object->setUsmcaCertificationOfOriginDetail($this->denormalizer->denormalize($data['usmcaCertificationOfOriginDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetail::class, 'json', $context));
                unset($data['usmcaCertificationOfOriginDetail']);
            }
            if (\array_key_exists('usmcaCommercialInvoiceCertificationOfOriginDetail', $data)) {
                $object->setUsmcaCommercialInvoiceCertificationOfOriginDetail($this->denormalizer->denormalize($data['usmcaCommercialInvoiceCertificationOfOriginDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail::class, 'json', $context));
                unset($data['usmcaCommercialInvoiceCertificationOfOriginDetail']);
            }
            if (\array_key_exists('shippingDocumentTypes', $data)) {
                $values = [];
                foreach ($data['shippingDocumentTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setShippingDocumentTypes($values);
                unset($data['shippingDocumentTypes']);
            }
            if (\array_key_exists('certificateOfOrigin', $data)) {
                $object->setCertificateOfOrigin($this->denormalizer->denormalize($data['certificateOfOrigin'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOrigin::class, 'json', $context));
                unset($data['certificateOfOrigin']);
            }
            if (\array_key_exists('commercialInvoiceDetail', $data)) {
                $object->setCommercialInvoiceDetail($this->denormalizer->denormalize($data['commercialInvoiceDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail::class, 'json', $context));
                unset($data['commercialInvoiceDetail']);
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
            if ($object->isInitialized('generalAgencyAgreementDetail') && null !== $object->getGeneralAgencyAgreementDetail()) {
                $data['generalAgencyAgreementDetail'] = $this->normalizer->normalize($object->getGeneralAgencyAgreementDetail(), 'json', $context);
            }
            if ($object->isInitialized('returnInstructionsDetail') && null !== $object->getReturnInstructionsDetail()) {
                $data['returnInstructionsDetail'] = $this->normalizer->normalize($object->getReturnInstructionsDetail(), 'json', $context);
            }
            if ($object->isInitialized('op900Detail') && null !== $object->getOp900Detail()) {
                $data['op900Detail'] = $this->normalizer->normalize($object->getOp900Detail(), 'json', $context);
            }
            if ($object->isInitialized('usmcaCertificationOfOriginDetail') && null !== $object->getUsmcaCertificationOfOriginDetail()) {
                $data['usmcaCertificationOfOriginDetail'] = $this->normalizer->normalize($object->getUsmcaCertificationOfOriginDetail(), 'json', $context);
            }
            if ($object->isInitialized('usmcaCommercialInvoiceCertificationOfOriginDetail') && null !== $object->getUsmcaCommercialInvoiceCertificationOfOriginDetail()) {
                $data['usmcaCommercialInvoiceCertificationOfOriginDetail'] = $this->normalizer->normalize($object->getUsmcaCommercialInvoiceCertificationOfOriginDetail(), 'json', $context);
            }
            if ($object->isInitialized('shippingDocumentTypes') && null !== $object->getShippingDocumentTypes()) {
                $values = [];
                foreach ($object->getShippingDocumentTypes() as $value) {
                    $values[] = $value;
                }
                $data['shippingDocumentTypes'] = $values;
            }
            if ($object->isInitialized('certificateOfOrigin') && null !== $object->getCertificateOfOrigin()) {
                $data['certificateOfOrigin'] = $this->normalizer->normalize($object->getCertificateOfOrigin(), 'json', $context);
            }
            if ($object->isInitialized('commercialInvoiceDetail') && null !== $object->getCommercialInvoiceDetail()) {
                $data['commercialInvoiceDetail'] = $this->normalizer->normalize($object->getCommercialInvoiceDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecification::class => false];
        }
    }
} else {
    class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecification::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecification::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecification();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('generalAgencyAgreementDetail', $data)) {
                $object->setGeneralAgencyAgreementDetail($this->denormalizer->denormalize($data['generalAgencyAgreementDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetail::class, 'json', $context));
                unset($data['generalAgencyAgreementDetail']);
            }
            if (\array_key_exists('returnInstructionsDetail', $data)) {
                $object->setReturnInstructionsDetail($this->denormalizer->denormalize($data['returnInstructionsDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetail::class, 'json', $context));
                unset($data['returnInstructionsDetail']);
            }
            if (\array_key_exists('op900Detail', $data)) {
                $object->setOp900Detail($this->denormalizer->denormalize($data['op900Detail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationOp900Detail::class, 'json', $context));
                unset($data['op900Detail']);
            }
            if (\array_key_exists('usmcaCertificationOfOriginDetail', $data)) {
                $object->setUsmcaCertificationOfOriginDetail($this->denormalizer->denormalize($data['usmcaCertificationOfOriginDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetail::class, 'json', $context));
                unset($data['usmcaCertificationOfOriginDetail']);
            }
            if (\array_key_exists('usmcaCommercialInvoiceCertificationOfOriginDetail', $data)) {
                $object->setUsmcaCommercialInvoiceCertificationOfOriginDetail($this->denormalizer->denormalize($data['usmcaCommercialInvoiceCertificationOfOriginDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail::class, 'json', $context));
                unset($data['usmcaCommercialInvoiceCertificationOfOriginDetail']);
            }
            if (\array_key_exists('shippingDocumentTypes', $data)) {
                $values = [];
                foreach ($data['shippingDocumentTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setShippingDocumentTypes($values);
                unset($data['shippingDocumentTypes']);
            }
            if (\array_key_exists('certificateOfOrigin', $data)) {
                $object->setCertificateOfOrigin($this->denormalizer->denormalize($data['certificateOfOrigin'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOrigin::class, 'json', $context));
                unset($data['certificateOfOrigin']);
            }
            if (\array_key_exists('commercialInvoiceDetail', $data)) {
                $object->setCommercialInvoiceDetail($this->denormalizer->denormalize($data['commercialInvoiceDetail'], \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail::class, 'json', $context));
                unset($data['commercialInvoiceDetail']);
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
            if ($object->isInitialized('generalAgencyAgreementDetail') && null !== $object->getGeneralAgencyAgreementDetail()) {
                $data['generalAgencyAgreementDetail'] = $this->normalizer->normalize($object->getGeneralAgencyAgreementDetail(), 'json', $context);
            }
            if ($object->isInitialized('returnInstructionsDetail') && null !== $object->getReturnInstructionsDetail()) {
                $data['returnInstructionsDetail'] = $this->normalizer->normalize($object->getReturnInstructionsDetail(), 'json', $context);
            }
            if ($object->isInitialized('op900Detail') && null !== $object->getOp900Detail()) {
                $data['op900Detail'] = $this->normalizer->normalize($object->getOp900Detail(), 'json', $context);
            }
            if ($object->isInitialized('usmcaCertificationOfOriginDetail') && null !== $object->getUsmcaCertificationOfOriginDetail()) {
                $data['usmcaCertificationOfOriginDetail'] = $this->normalizer->normalize($object->getUsmcaCertificationOfOriginDetail(), 'json', $context);
            }
            if ($object->isInitialized('usmcaCommercialInvoiceCertificationOfOriginDetail') && null !== $object->getUsmcaCommercialInvoiceCertificationOfOriginDetail()) {
                $data['usmcaCommercialInvoiceCertificationOfOriginDetail'] = $this->normalizer->normalize($object->getUsmcaCommercialInvoiceCertificationOfOriginDetail(), 'json', $context);
            }
            if ($object->isInitialized('shippingDocumentTypes') && null !== $object->getShippingDocumentTypes()) {
                $values = [];
                foreach ($object->getShippingDocumentTypes() as $value) {
                    $values[] = $value;
                }
                $data['shippingDocumentTypes'] = $values;
            }
            if ($object->isInitialized('certificateOfOrigin') && null !== $object->getCertificateOfOrigin()) {
                $data['certificateOfOrigin'] = $this->normalizer->normalize($object->getCertificateOfOrigin(), 'json', $context);
            }
            if ($object->isInitialized('commercialInvoiceDetail') && null !== $object->getCommercialInvoiceDetail()) {
                $data['commercialInvoiceDetail'] = $this->normalizer->normalize($object->getCommercialInvoiceDetail(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecification::class => false];
        }
    }
}
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
    class DocumentsV1EtdsEncodedmultiuploadPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('workflowName', $data)) {
                $object->setWorkflowName($data['workflowName']);
                unset($data['workflowName']);
            }
            if (\array_key_exists('carrierCode', $data)) {
                $object->setCarrierCode($data['carrierCode']);
                unset($data['carrierCode']);
            }
            if (\array_key_exists('orginCountryCode', $data)) {
                $object->setOrginCountryCode($data['orginCountryCode']);
                unset($data['orginCountryCode']);
            }
            if (\array_key_exists('destinationCountryCode', $data)) {
                $object->setDestinationCountryCode($data['destinationCountryCode']);
                unset($data['destinationCountryCode']);
            }
            if (\array_key_exists('shipmentDate', $data)) {
                $object->setShipmentDate($data['shipmentDate']);
                unset($data['shipmentDate']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('metaData', $data)) {
                $values = [];
                foreach ($data['metaData'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBodyMetaDataItem::class, 'json', $context);
                }
                $object->setMetaData($values);
                unset($data['metaData']);
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
            $data['workflowName'] = $object->getWorkflowName();
            $data['carrierCode'] = $object->getCarrierCode();
            $data['orginCountryCode'] = $object->getOrginCountryCode();
            $data['destinationCountryCode'] = $object->getDestinationCountryCode();
            if ($object->isInitialized('shipmentDate') && null !== $object->getShipmentDate()) {
                $data['shipmentDate'] = $object->getShipmentDate();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            $values = [];
            foreach ($object->getMetaData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['metaData'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBody::class => false];
        }
    }
} else {
    class DocumentsV1EtdsEncodedmultiuploadPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBody::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('workflowName', $data)) {
                $object->setWorkflowName($data['workflowName']);
                unset($data['workflowName']);
            }
            if (\array_key_exists('carrierCode', $data)) {
                $object->setCarrierCode($data['carrierCode']);
                unset($data['carrierCode']);
            }
            if (\array_key_exists('orginCountryCode', $data)) {
                $object->setOrginCountryCode($data['orginCountryCode']);
                unset($data['orginCountryCode']);
            }
            if (\array_key_exists('destinationCountryCode', $data)) {
                $object->setDestinationCountryCode($data['destinationCountryCode']);
                unset($data['destinationCountryCode']);
            }
            if (\array_key_exists('shipmentDate', $data)) {
                $object->setShipmentDate($data['shipmentDate']);
                unset($data['shipmentDate']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('metaData', $data)) {
                $values = [];
                foreach ($data['metaData'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBodyMetaDataItem::class, 'json', $context);
                }
                $object->setMetaData($values);
                unset($data['metaData']);
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
            $data['workflowName'] = $object->getWorkflowName();
            $data['carrierCode'] = $object->getCarrierCode();
            $data['orginCountryCode'] = $object->getOrginCountryCode();
            $data['destinationCountryCode'] = $object->getDestinationCountryCode();
            if ($object->isInitialized('shipmentDate') && null !== $object->getShipmentDate()) {
                $data['shipmentDate'] = $object->getShipmentDate();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            $values = [];
            foreach ($object->getMetaData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['metaData'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostBody::class => false];
        }
    }
}
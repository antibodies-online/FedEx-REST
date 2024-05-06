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
    class ShipV1EndofdayPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1EndofdayPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1EndofdayPostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('closeReqType', $data)) {
                $object->setCloseReqType($data['closeReqType']);
                unset($data['closeReqType']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1EndofdayPostBodyAccountNumber', 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('groundServiceCategory', $data)) {
                $object->setGroundServiceCategory($data['groundServiceCategory']);
                unset($data['groundServiceCategory']);
            }
            if (\array_key_exists('closeDate', $data)) {
                $object->setCloseDate($data['closeDate']);
                unset($data['closeDate']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('reprintOption', $data)) {
                $object->setReprintOption($data['reprintOption']);
                unset($data['reprintOption']);
            }
            if (\array_key_exists('closeDocumentSpecification', $data)) {
                $object->setCloseDocumentSpecification($this->denormalizer->denormalize($data['closeDocumentSpecification'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1EndofdayPostBodyCloseDocumentSpecification', 'json', $context));
                unset($data['closeDocumentSpecification']);
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
            if ($object->isInitialized('closeReqType') && null !== $object->getCloseReqType()) {
                $data['closeReqType'] = $object->getCloseReqType();
            }
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            }
            if ($object->isInitialized('groundServiceCategory') && null !== $object->getGroundServiceCategory()) {
                $data['groundServiceCategory'] = $object->getGroundServiceCategory();
            }
            if ($object->isInitialized('closeDate') && null !== $object->getCloseDate()) {
                $data['closeDate'] = $object->getCloseDate();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('reprintOption') && null !== $object->getReprintOption()) {
                $data['reprintOption'] = $object->getReprintOption();
            }
            if ($object->isInitialized('closeDocumentSpecification') && null !== $object->getCloseDocumentSpecification()) {
                $data['closeDocumentSpecification'] = $this->normalizer->normalize($object->getCloseDocumentSpecification(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1EndofdayPostBody' => false];
        }
    }
} else {
    class ShipV1EndofdayPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1EndofdayPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1EndofdayPostBody';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('closeReqType', $data)) {
                $object->setCloseReqType($data['closeReqType']);
                unset($data['closeReqType']);
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1EndofdayPostBodyAccountNumber', 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('groundServiceCategory', $data)) {
                $object->setGroundServiceCategory($data['groundServiceCategory']);
                unset($data['groundServiceCategory']);
            }
            if (\array_key_exists('closeDate', $data)) {
                $object->setCloseDate($data['closeDate']);
                unset($data['closeDate']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('reprintOption', $data)) {
                $object->setReprintOption($data['reprintOption']);
                unset($data['reprintOption']);
            }
            if (\array_key_exists('closeDocumentSpecification', $data)) {
                $object->setCloseDocumentSpecification($this->denormalizer->denormalize($data['closeDocumentSpecification'], 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1EndofdayPostBodyCloseDocumentSpecification', 'json', $context));
                unset($data['closeDocumentSpecification']);
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
            if ($object->isInitialized('closeReqType') && null !== $object->getCloseReqType()) {
                $data['closeReqType'] = $object->getCloseReqType();
            }
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            }
            if ($object->isInitialized('groundServiceCategory') && null !== $object->getGroundServiceCategory()) {
                $data['groundServiceCategory'] = $object->getGroundServiceCategory();
            }
            if ($object->isInitialized('closeDate') && null !== $object->getCloseDate()) {
                $data['closeDate'] = $object->getCloseDate();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('reprintOption') && null !== $object->getReprintOption()) {
                $data['reprintOption'] = $object->getReprintOption();
            }
            if ($object->isInitialized('closeDocumentSpecification') && null !== $object->getCloseDocumentSpecification()) {
                $data['closeDocumentSpecification'] = $this->normalizer->normalize($object->getCloseDocumentSpecification(), 'json', $context);
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1EndofdayPostBody' => false];
        }
    }
}
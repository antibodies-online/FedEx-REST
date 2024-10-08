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
    class ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('customerImageUsages', $data)) {
                $values = [];
                foreach ($data['customerImageUsages'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetailCustomerImageUsagesItem::class, 'json', $context);
                }
                $object->setCustomerImageUsages($values);
                unset($data['customerImageUsages']);
            }
            if (\array_key_exists('documentFormat', $data)) {
                $object->setDocumentFormat($this->denormalizer->denormalize($data['documentFormat'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormat::class, 'json', $context));
                unset($data['documentFormat']);
            }
            if (\array_key_exists('certifierSpecification', $data)) {
                $object->setCertifierSpecification($data['certifierSpecification']);
                unset($data['certifierSpecification']);
            }
            if (\array_key_exists('importerSpecification', $data)) {
                $object->setImporterSpecification($data['importerSpecification']);
                unset($data['importerSpecification']);
            }
            if (\array_key_exists('producerSpecification', $data)) {
                $object->setProducerSpecification($data['producerSpecification']);
                unset($data['producerSpecification']);
            }
            if (\array_key_exists('producer', $data)) {
                $object->setProducer($this->denormalizer->denormalize($data['producer'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetailProducer::class, 'json', $context));
                unset($data['producer']);
            }
            if (\array_key_exists('blanketPeriod', $data)) {
                $object->setBlanketPeriod($this->denormalizer->denormalize($data['blanketPeriod'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetailBlanketPeriod::class, 'json', $context));
                unset($data['blanketPeriod']);
            }
            if (\array_key_exists('certifierJobTitle', $data)) {
                $object->setCertifierJobTitle($data['certifierJobTitle']);
                unset($data['certifierJobTitle']);
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
            if ($object->isInitialized('customerImageUsages') && null !== $object->getCustomerImageUsages()) {
                $values = [];
                foreach ($object->getCustomerImageUsages() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customerImageUsages'] = $values;
            }
            if ($object->isInitialized('documentFormat') && null !== $object->getDocumentFormat()) {
                $data['documentFormat'] = $this->normalizer->normalize($object->getDocumentFormat(), 'json', $context);
            }
            if ($object->isInitialized('certifierSpecification') && null !== $object->getCertifierSpecification()) {
                $data['certifierSpecification'] = $object->getCertifierSpecification();
            }
            if ($object->isInitialized('importerSpecification') && null !== $object->getImporterSpecification()) {
                $data['importerSpecification'] = $object->getImporterSpecification();
            }
            if ($object->isInitialized('producerSpecification') && null !== $object->getProducerSpecification()) {
                $data['producerSpecification'] = $object->getProducerSpecification();
            }
            if ($object->isInitialized('producer') && null !== $object->getProducer()) {
                $data['producer'] = $this->normalizer->normalize($object->getProducer(), 'json', $context);
            }
            if ($object->isInitialized('blanketPeriod') && null !== $object->getBlanketPeriod()) {
                $data['blanketPeriod'] = $this->normalizer->normalize($object->getBlanketPeriod(), 'json', $context);
            }
            if ($object->isInitialized('certifierJobTitle') && null !== $object->getCertifierJobTitle()) {
                $data['certifierJobTitle'] = $object->getCertifierJobTitle();
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetail::class => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetail::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('customerImageUsages', $data)) {
                $values = [];
                foreach ($data['customerImageUsages'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetailCustomerImageUsagesItem::class, 'json', $context);
                }
                $object->setCustomerImageUsages($values);
                unset($data['customerImageUsages']);
            }
            if (\array_key_exists('documentFormat', $data)) {
                $object->setDocumentFormat($this->denormalizer->denormalize($data['documentFormat'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormat::class, 'json', $context));
                unset($data['documentFormat']);
            }
            if (\array_key_exists('certifierSpecification', $data)) {
                $object->setCertifierSpecification($data['certifierSpecification']);
                unset($data['certifierSpecification']);
            }
            if (\array_key_exists('importerSpecification', $data)) {
                $object->setImporterSpecification($data['importerSpecification']);
                unset($data['importerSpecification']);
            }
            if (\array_key_exists('producerSpecification', $data)) {
                $object->setProducerSpecification($data['producerSpecification']);
                unset($data['producerSpecification']);
            }
            if (\array_key_exists('producer', $data)) {
                $object->setProducer($this->denormalizer->denormalize($data['producer'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetailProducer::class, 'json', $context));
                unset($data['producer']);
            }
            if (\array_key_exists('blanketPeriod', $data)) {
                $object->setBlanketPeriod($this->denormalizer->denormalize($data['blanketPeriod'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetailBlanketPeriod::class, 'json', $context));
                unset($data['blanketPeriod']);
            }
            if (\array_key_exists('certifierJobTitle', $data)) {
                $object->setCertifierJobTitle($data['certifierJobTitle']);
                unset($data['certifierJobTitle']);
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
            if ($object->isInitialized('customerImageUsages') && null !== $object->getCustomerImageUsages()) {
                $values = [];
                foreach ($object->getCustomerImageUsages() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customerImageUsages'] = $values;
            }
            if ($object->isInitialized('documentFormat') && null !== $object->getDocumentFormat()) {
                $data['documentFormat'] = $this->normalizer->normalize($object->getDocumentFormat(), 'json', $context);
            }
            if ($object->isInitialized('certifierSpecification') && null !== $object->getCertifierSpecification()) {
                $data['certifierSpecification'] = $object->getCertifierSpecification();
            }
            if ($object->isInitialized('importerSpecification') && null !== $object->getImporterSpecification()) {
                $data['importerSpecification'] = $object->getImporterSpecification();
            }
            if ($object->isInitialized('producerSpecification') && null !== $object->getProducerSpecification()) {
                $data['producerSpecification'] = $object->getProducerSpecification();
            }
            if ($object->isInitialized('producer') && null !== $object->getProducer()) {
                $data['producer'] = $this->normalizer->normalize($object->getProducer(), 'json', $context);
            }
            if ($object->isInitialized('blanketPeriod') && null !== $object->getBlanketPeriod()) {
                $data['blanketPeriod'] = $this->normalizer->normalize($object->getBlanketPeriod(), 'json', $context);
            }
            if ($object->isInitialized('certifierJobTitle') && null !== $object->getCertifierJobTitle()) {
                $data['certifierJobTitle'] = $object->getCertifierJobTitle();
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
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetail::class => false];
        }
    }
}
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
    class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocuments::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocuments::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocuments();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('userMessage', $data)) {
                $object->setUserMessage($this->denormalizer->denormalize($data['userMessage'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsUserMessage::class, 'json', $context));
                unset($data['userMessage']);
            }
            if (\array_key_exists('supportType', $data)) {
                $object->setSupportType($data['supportType']);
                unset($data['supportType']);
            }
            if (\array_key_exists('allowability', $data)) {
                $object->setAllowability($data['allowability']);
                unset($data['allowability']);
            }
            if (\array_key_exists('fileName', $data)) {
                $object->setFileName($data['fileName']);
                unset($data['fileName']);
            }
            if (\array_key_exists('documentType', $data)) {
                $object->setDocumentType($data['documentType']);
                unset($data['documentType']);
            }
            if (\array_key_exists('agencyUrl', $data)) {
                $object->setAgencyUrl($data['agencyUrl']);
                unset($data['agencyUrl']);
            }
            if (\array_key_exists('documentUrl', $data)) {
                $object->setDocumentUrl($data['documentUrl']);
                unset($data['documentUrl']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('agencyName', $data)) {
                $object->setAgencyName($data['agencyName']);
                unset($data['agencyName']);
            }
            if (\array_key_exists('localizedAttributes', $data)) {
                $object->setLocalizedAttributes($this->denormalizer->denormalize($data['localizedAttributes'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsLocalizedAttributes::class, 'json', $context));
                unset($data['localizedAttributes']);
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
            if ($object->isInitialized('userMessage') && null !== $object->getUserMessage()) {
                $data['userMessage'] = $this->normalizer->normalize($object->getUserMessage(), 'json', $context);
            }
            if ($object->isInitialized('supportType') && null !== $object->getSupportType()) {
                $data['supportType'] = $object->getSupportType();
            }
            if ($object->isInitialized('allowability') && null !== $object->getAllowability()) {
                $data['allowability'] = $object->getAllowability();
            }
            if ($object->isInitialized('fileName') && null !== $object->getFileName()) {
                $data['fileName'] = $object->getFileName();
            }
            if ($object->isInitialized('documentType') && null !== $object->getDocumentType()) {
                $data['documentType'] = $object->getDocumentType();
            }
            if ($object->isInitialized('agencyUrl') && null !== $object->getAgencyUrl()) {
                $data['agencyUrl'] = $object->getAgencyUrl();
            }
            if ($object->isInitialized('documentUrl') && null !== $object->getDocumentUrl()) {
                $data['documentUrl'] = $object->getDocumentUrl();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('agencyName') && null !== $object->getAgencyName()) {
                $data['agencyName'] = $object->getAgencyName();
            }
            if ($object->isInitialized('localizedAttributes') && null !== $object->getLocalizedAttributes()) {
                $data['localizedAttributes'] = $this->normalizer->normalize($object->getLocalizedAttributes(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocuments::class => false];
        }
    }
} else {
    class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocuments::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocuments::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocuments();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('userMessage', $data)) {
                $object->setUserMessage($this->denormalizer->denormalize($data['userMessage'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsUserMessage::class, 'json', $context));
                unset($data['userMessage']);
            }
            if (\array_key_exists('supportType', $data)) {
                $object->setSupportType($data['supportType']);
                unset($data['supportType']);
            }
            if (\array_key_exists('allowability', $data)) {
                $object->setAllowability($data['allowability']);
                unset($data['allowability']);
            }
            if (\array_key_exists('fileName', $data)) {
                $object->setFileName($data['fileName']);
                unset($data['fileName']);
            }
            if (\array_key_exists('documentType', $data)) {
                $object->setDocumentType($data['documentType']);
                unset($data['documentType']);
            }
            if (\array_key_exists('agencyUrl', $data)) {
                $object->setAgencyUrl($data['agencyUrl']);
                unset($data['agencyUrl']);
            }
            if (\array_key_exists('documentUrl', $data)) {
                $object->setDocumentUrl($data['documentUrl']);
                unset($data['documentUrl']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('agencyName', $data)) {
                $object->setAgencyName($data['agencyName']);
                unset($data['agencyName']);
            }
            if (\array_key_exists('localizedAttributes', $data)) {
                $object->setLocalizedAttributes($this->denormalizer->denormalize($data['localizedAttributes'], \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsLocalizedAttributes::class, 'json', $context));
                unset($data['localizedAttributes']);
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
            if ($object->isInitialized('userMessage') && null !== $object->getUserMessage()) {
                $data['userMessage'] = $this->normalizer->normalize($object->getUserMessage(), 'json', $context);
            }
            if ($object->isInitialized('supportType') && null !== $object->getSupportType()) {
                $data['supportType'] = $object->getSupportType();
            }
            if ($object->isInitialized('allowability') && null !== $object->getAllowability()) {
                $data['allowability'] = $object->getAllowability();
            }
            if ($object->isInitialized('fileName') && null !== $object->getFileName()) {
                $data['fileName'] = $object->getFileName();
            }
            if ($object->isInitialized('documentType') && null !== $object->getDocumentType()) {
                $data['documentType'] = $object->getDocumentType();
            }
            if ($object->isInitialized('agencyUrl') && null !== $object->getAgencyUrl()) {
                $data['agencyUrl'] = $object->getAgencyUrl();
            }
            if ($object->isInitialized('documentUrl') && null !== $object->getDocumentUrl()) {
                $data['documentUrl'] = $object->getDocumentUrl();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('agencyName') && null !== $object->getAgencyName()) {
                $data['agencyName'] = $object->getAgencyName();
            }
            if ($object->isInitialized('localizedAttributes') && null !== $object->getLocalizedAttributes()) {
                $data['localizedAttributes'] = $this->normalizer->normalize($object->getLocalizedAttributes(), 'json', $context);
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
            return [\AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocuments::class => false];
        }
    }
}
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
    class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsUserMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsUserMessage::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsUserMessage::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsUserMessage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('code', $data)) {
                $object->setCode($data['code']);
                unset($data['code']);
            }
            if (\array_key_exists('messageParameters', $data)) {
                $values = [];
                foreach ($data['messageParameters'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsUserMessageMessageParametersItem::class, 'json', $context);
                }
                $object->setMessageParameters($values);
                unset($data['messageParameters']);
            }
            if (\array_key_exists('index', $data)) {
                $object->setIndex($data['index']);
                unset($data['index']);
            }
            if (\array_key_exists('text', $data)) {
                $object->setText($data['text']);
                unset($data['text']);
            }
            if (\array_key_exists('localizedText', $data)) {
                $object->setLocalizedText($data['localizedText']);
                unset($data['localizedText']);
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
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('messageParameters') && null !== $object->getMessageParameters()) {
                $values = [];
                foreach ($object->getMessageParameters() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['messageParameters'] = $values;
            }
            if ($object->isInitialized('index') && null !== $object->getIndex()) {
                $data['index'] = $object->getIndex();
            }
            if ($object->isInitialized('text') && null !== $object->getText()) {
                $data['text'] = $object->getText();
            }
            if ($object->isInitialized('localizedText') && null !== $object->getLocalizedText()) {
                $data['localizedText'] = $object->getLocalizedText();
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
            return [\AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsUserMessage::class => false];
        }
    }
} else {
    class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsUserMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsUserMessage::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsUserMessage::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsUserMessage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('code', $data)) {
                $object->setCode($data['code']);
                unset($data['code']);
            }
            if (\array_key_exists('messageParameters', $data)) {
                $values = [];
                foreach ($data['messageParameters'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsUserMessageMessageParametersItem::class, 'json', $context);
                }
                $object->setMessageParameters($values);
                unset($data['messageParameters']);
            }
            if (\array_key_exists('index', $data)) {
                $object->setIndex($data['index']);
                unset($data['index']);
            }
            if (\array_key_exists('text', $data)) {
                $object->setText($data['text']);
                unset($data['text']);
            }
            if (\array_key_exists('localizedText', $data)) {
                $object->setLocalizedText($data['localizedText']);
                unset($data['localizedText']);
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
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('messageParameters') && null !== $object->getMessageParameters()) {
                $values = [];
                foreach ($object->getMessageParameters() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['messageParameters'] = $values;
            }
            if ($object->isInitialized('index') && null !== $object->getIndex()) {
                $data['index'] = $object->getIndex();
            }
            if ($object->isInitialized('text') && null !== $object->getText()) {
                $data['text'] = $object->getText();
            }
            if ($object->isInitialized('localizedText') && null !== $object->getLocalizedText()) {
                $data['localizedText'] = $object->getLocalizedText();
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
            return [\AntibodiesOnline\FedEx\Api\Model\GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryStatementsUserMessage::class => false];
        }
    }
}
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
    class OauthTokenPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\OauthTokenPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\OauthTokenPostBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\OauthTokenPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('grant_type', $data)) {
                $object->setGrantType($data['grant_type']);
                unset($data['grant_type']);
            }
            if (\array_key_exists('client_id', $data)) {
                $object->setClientId($data['client_id']);
                unset($data['client_id']);
            }
            if (\array_key_exists('client_secret', $data)) {
                $object->setClientSecret($data['client_secret']);
                unset($data['client_secret']);
            }
            if (\array_key_exists('child_Key', $data)) {
                $object->setChildKey($data['child_Key']);
                unset($data['child_Key']);
            }
            if (\array_key_exists('child_secret', $data)) {
                $object->setChildSecret($data['child_secret']);
                unset($data['child_secret']);
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
            $data['grant_type'] = $object->getGrantType();
            $data['client_id'] = $object->getClientId();
            $data['client_secret'] = $object->getClientSecret();
            if ($object->isInitialized('childKey') && null !== $object->getChildKey()) {
                $data['child_Key'] = $object->getChildKey();
            }
            if ($object->isInitialized('childSecret') && null !== $object->getChildSecret()) {
                $data['child_secret'] = $object->getChildSecret();
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
            return [\AntibodiesOnline\FedEx\Api\Model\OauthTokenPostBody::class => false];
        }
    }
} else {
    class OauthTokenPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\OauthTokenPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\OauthTokenPostBody::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\OauthTokenPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('grant_type', $data)) {
                $object->setGrantType($data['grant_type']);
                unset($data['grant_type']);
            }
            if (\array_key_exists('client_id', $data)) {
                $object->setClientId($data['client_id']);
                unset($data['client_id']);
            }
            if (\array_key_exists('client_secret', $data)) {
                $object->setClientSecret($data['client_secret']);
                unset($data['client_secret']);
            }
            if (\array_key_exists('child_Key', $data)) {
                $object->setChildKey($data['child_Key']);
                unset($data['child_Key']);
            }
            if (\array_key_exists('child_secret', $data)) {
                $object->setChildSecret($data['child_secret']);
                unset($data['child_secret']);
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
            $data['grant_type'] = $object->getGrantType();
            $data['client_id'] = $object->getClientId();
            $data['client_secret'] = $object->getClientSecret();
            if ($object->isInitialized('childKey') && null !== $object->getChildKey()) {
                $data['child_Key'] = $object->getChildKey();
            }
            if ($object->isInitialized('childSecret') && null !== $object->getChildSecret()) {
                $data['child_secret'] = $object->getChildSecret();
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
            return [\AntibodiesOnline\FedEx\Api\Model\OauthTokenPostBody::class => false];
        }
    }
}
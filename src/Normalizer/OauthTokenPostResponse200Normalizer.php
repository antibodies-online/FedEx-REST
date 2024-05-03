<?php

namespace AntibodiesOnline\FedEx\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use AntibodiesOnline\FedEx\Runtime\Normalizer\CheckArray;
use AntibodiesOnline\FedEx\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class OauthTokenPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\OauthTokenPostResponse200';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\OauthTokenPostResponse200';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\OauthTokenPostResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('access_token', $data)) {
                $object->setAccessToken($data['access_token']);
                unset($data['access_token']);
            }
            if (\array_key_exists('token_type', $data)) {
                $object->setTokenType($data['token_type']);
                unset($data['token_type']);
            }
            if (\array_key_exists('expires_in', $data)) {
                $object->setExpiresIn($data['expires_in']);
                unset($data['expires_in']);
            }
            if (\array_key_exists('scope', $data)) {
                $object->setScope($data['scope']);
                unset($data['scope']);
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
            if ($object->isInitialized('accessToken') && null !== $object->getAccessToken()) {
                $data['access_token'] = $object->getAccessToken();
            }
            if ($object->isInitialized('tokenType') && null !== $object->getTokenType()) {
                $data['token_type'] = $object->getTokenType();
            }
            if ($object->isInitialized('expiresIn') && null !== $object->getExpiresIn()) {
                $data['expires_in'] = $object->getExpiresIn();
            }
            if ($object->isInitialized('scope') && null !== $object->getScope()) {
                $data['scope'] = $object->getScope();
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
            return ['AntibodiesOnline\\FedEx\\Model\\OauthTokenPostResponse200' => false];
        }
    }
} else {
    class OauthTokenPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\OauthTokenPostResponse200';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\OauthTokenPostResponse200';
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
            $object = new \AntibodiesOnline\FedEx\Model\OauthTokenPostResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('access_token', $data)) {
                $object->setAccessToken($data['access_token']);
                unset($data['access_token']);
            }
            if (\array_key_exists('token_type', $data)) {
                $object->setTokenType($data['token_type']);
                unset($data['token_type']);
            }
            if (\array_key_exists('expires_in', $data)) {
                $object->setExpiresIn($data['expires_in']);
                unset($data['expires_in']);
            }
            if (\array_key_exists('scope', $data)) {
                $object->setScope($data['scope']);
                unset($data['scope']);
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
            if ($object->isInitialized('accessToken') && null !== $object->getAccessToken()) {
                $data['access_token'] = $object->getAccessToken();
            }
            if ($object->isInitialized('tokenType') && null !== $object->getTokenType()) {
                $data['token_type'] = $object->getTokenType();
            }
            if ($object->isInitialized('expiresIn') && null !== $object->getExpiresIn()) {
                $data['expires_in'] = $object->getExpiresIn();
            }
            if ($object->isInitialized('scope') && null !== $object->getScope()) {
                $data['scope'] = $object->getScope();
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
            return ['AntibodiesOnline\\FedEx\\Model\\OauthTokenPostResponse200' => false];
        }
    }
}
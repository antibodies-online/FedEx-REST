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
    class PickupV1FreightPickupsPostBodyFreightPickupDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostBodyFreightPickupDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetailaccountNumber', 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('role', $data)) {
                $object->setRole($data['role']);
                unset($data['role']);
            }
            if (\array_key_exists('payment', $data)) {
                $object->setPayment($data['payment']);
                unset($data['payment']);
            }
            if (\array_key_exists('submittedBy', $data)) {
                $object->setSubmittedBy($this->denormalizer->denormalize($data['submittedBy'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetailsubmittedBy', 'json', $context));
                unset($data['submittedBy']);
            }
            if (\array_key_exists('lineItems', $data)) {
                $values = [];
                foreach ($data['lineItems'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItem', 'json', $context);
                }
                $object->setLineItems($values);
                unset($data['lineItems']);
            }
            if (\array_key_exists('alternateBilling', $data)) {
                $object->setAlternateBilling($this->denormalizer->denormalize($data['alternateBilling'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBilling', 'json', $context));
                unset($data['alternateBilling']);
            }
            if (\array_key_exists('userMessage', $data)) {
                $object->setUserMessage($data['userMessage']);
                unset($data['userMessage']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            }
            if ($object->isInitialized('role') && null !== $object->getRole()) {
                $data['role'] = $object->getRole();
            }
            if ($object->isInitialized('payment') && null !== $object->getPayment()) {
                $data['payment'] = $object->getPayment();
            }
            if ($object->isInitialized('submittedBy') && null !== $object->getSubmittedBy()) {
                $data['submittedBy'] = $this->normalizer->normalize($object->getSubmittedBy(), 'json', $context);
            }
            if ($object->isInitialized('lineItems') && null !== $object->getLineItems()) {
                $values = [];
                foreach ($object->getLineItems() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['lineItems'] = $values;
            }
            if ($object->isInitialized('alternateBilling') && null !== $object->getAlternateBilling()) {
                $data['alternateBilling'] = $this->normalizer->normalize($object->getAlternateBilling(), 'json', $context);
            }
            if ($object->isInitialized('userMessage') && null !== $object->getUserMessage()) {
                $data['userMessage'] = $object->getUserMessage();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetail' => false];
        }
    }
} else {
    class PickupV1FreightPickupsPostBodyFreightPickupDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetail';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostBodyFreightPickupDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('accountNumber', $data)) {
                $object->setAccountNumber($this->denormalizer->denormalize($data['accountNumber'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetailaccountNumber', 'json', $context));
                unset($data['accountNumber']);
            }
            if (\array_key_exists('role', $data)) {
                $object->setRole($data['role']);
                unset($data['role']);
            }
            if (\array_key_exists('payment', $data)) {
                $object->setPayment($data['payment']);
                unset($data['payment']);
            }
            if (\array_key_exists('submittedBy', $data)) {
                $object->setSubmittedBy($this->denormalizer->denormalize($data['submittedBy'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetailsubmittedBy', 'json', $context));
                unset($data['submittedBy']);
            }
            if (\array_key_exists('lineItems', $data)) {
                $values = [];
                foreach ($data['lineItems'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItem', 'json', $context);
                }
                $object->setLineItems($values);
                unset($data['lineItems']);
            }
            if (\array_key_exists('alternateBilling', $data)) {
                $object->setAlternateBilling($this->denormalizer->denormalize($data['alternateBilling'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBilling', 'json', $context));
                unset($data['alternateBilling']);
            }
            if (\array_key_exists('userMessage', $data)) {
                $object->setUserMessage($data['userMessage']);
                unset($data['userMessage']);
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
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['accountNumber'] = $this->normalizer->normalize($object->getAccountNumber(), 'json', $context);
            }
            if ($object->isInitialized('role') && null !== $object->getRole()) {
                $data['role'] = $object->getRole();
            }
            if ($object->isInitialized('payment') && null !== $object->getPayment()) {
                $data['payment'] = $object->getPayment();
            }
            if ($object->isInitialized('submittedBy') && null !== $object->getSubmittedBy()) {
                $data['submittedBy'] = $this->normalizer->normalize($object->getSubmittedBy(), 'json', $context);
            }
            if ($object->isInitialized('lineItems') && null !== $object->getLineItems()) {
                $values = [];
                foreach ($object->getLineItems() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['lineItems'] = $values;
            }
            if ($object->isInitialized('alternateBilling') && null !== $object->getAlternateBilling()) {
                $data['alternateBilling'] = $this->normalizer->normalize($object->getAlternateBilling(), 'json', $context);
            }
            if ($object->isInitialized('userMessage') && null !== $object->getUserMessage()) {
                $data['userMessage'] = $object->getUserMessage();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsPostBodyFreightPickupDetail' => false];
        }
    }
}
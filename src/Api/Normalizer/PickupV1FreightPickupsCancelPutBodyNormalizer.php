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
    class PickupV1FreightPickupsCancelPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsCancelPutBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsCancelPutBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsCancelPutBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('associatedAccountNumber', $data)) {
                $object->setAssociatedAccountNumber($this->denormalizer->denormalize($data['associatedAccountNumber'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsCancelPutBodyAssociatedAccountNumber', 'json', $context));
                unset($data['associatedAccountNumber']);
            }
            if (\array_key_exists('pickupConfirmationCode', $data)) {
                $object->setPickupConfirmationCode($data['pickupConfirmationCode']);
                unset($data['pickupConfirmationCode']);
            }
            if (\array_key_exists('remarks', $data)) {
                $object->setRemarks($data['remarks']);
                unset($data['remarks']);
            }
            if (\array_key_exists('reason', $data)) {
                $object->setReason($data['reason']);
                unset($data['reason']);
            }
            if (\array_key_exists('contactName', $data)) {
                $object->setContactName($data['contactName']);
                unset($data['contactName']);
            }
            if (\array_key_exists('scheduledDate', $data)) {
                $object->setScheduledDate($data['scheduledDate']);
                unset($data['scheduledDate']);
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
            $data['associatedAccountNumber'] = $this->normalizer->normalize($object->getAssociatedAccountNumber(), 'json', $context);
            $data['pickupConfirmationCode'] = $object->getPickupConfirmationCode();
            if ($object->isInitialized('remarks') && null !== $object->getRemarks()) {
                $data['remarks'] = $object->getRemarks();
            }
            $data['reason'] = $object->getReason();
            $data['contactName'] = $object->getContactName();
            if ($object->isInitialized('scheduledDate') && null !== $object->getScheduledDate()) {
                $data['scheduledDate'] = $object->getScheduledDate();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsCancelPutBody' => false];
        }
    }
} else {
    class PickupV1FreightPickupsCancelPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsCancelPutBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsCancelPutBody';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsCancelPutBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('associatedAccountNumber', $data)) {
                $object->setAssociatedAccountNumber($this->denormalizer->denormalize($data['associatedAccountNumber'], 'AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsCancelPutBodyAssociatedAccountNumber', 'json', $context));
                unset($data['associatedAccountNumber']);
            }
            if (\array_key_exists('pickupConfirmationCode', $data)) {
                $object->setPickupConfirmationCode($data['pickupConfirmationCode']);
                unset($data['pickupConfirmationCode']);
            }
            if (\array_key_exists('remarks', $data)) {
                $object->setRemarks($data['remarks']);
                unset($data['remarks']);
            }
            if (\array_key_exists('reason', $data)) {
                $object->setReason($data['reason']);
                unset($data['reason']);
            }
            if (\array_key_exists('contactName', $data)) {
                $object->setContactName($data['contactName']);
                unset($data['contactName']);
            }
            if (\array_key_exists('scheduledDate', $data)) {
                $object->setScheduledDate($data['scheduledDate']);
                unset($data['scheduledDate']);
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
            $data['associatedAccountNumber'] = $this->normalizer->normalize($object->getAssociatedAccountNumber(), 'json', $context);
            $data['pickupConfirmationCode'] = $object->getPickupConfirmationCode();
            if ($object->isInitialized('remarks') && null !== $object->getRemarks()) {
                $data['remarks'] = $object->getRemarks();
            }
            $data['reason'] = $object->getReason();
            $data['contactName'] = $object->getContactName();
            if ($object->isInitialized('scheduledDate') && null !== $object->getScheduledDate()) {
                $data['scheduledDate'] = $object->getScheduledDate();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\PickupV1FreightPickupsCancelPutBody' => false];
        }
    }
}
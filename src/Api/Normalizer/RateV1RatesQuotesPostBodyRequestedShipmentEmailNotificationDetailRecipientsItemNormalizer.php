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
    class RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailRecipientsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailRecipientsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailRecipientsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailRecipientsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('emailAddress', $data)) {
                $object->setEmailAddress($data['emailAddress']);
                unset($data['emailAddress']);
            }
            if (\array_key_exists('notificationEventType', $data)) {
                $values = [];
                foreach ($data['notificationEventType'] as $value) {
                    $values[] = $value;
                }
                $object->setNotificationEventType($values);
                unset($data['notificationEventType']);
            }
            if (\array_key_exists('smsDetail', $data)) {
                $object->setSmsDetail($data['smsDetail']);
                unset($data['smsDetail']);
            }
            if (\array_key_exists('notificationFormatType', $data)) {
                $object->setNotificationFormatType($data['notificationFormatType']);
                unset($data['notificationFormatType']);
            }
            if (\array_key_exists('emailNotificationRecipientType', $data)) {
                $object->setEmailNotificationRecipientType($data['emailNotificationRecipientType']);
                unset($data['emailNotificationRecipientType']);
            }
            if (\array_key_exists('notificationType', $data)) {
                $object->setNotificationType($data['notificationType']);
                unset($data['notificationType']);
            }
            if (\array_key_exists('locale', $data)) {
                $object->setLocale($data['locale']);
                unset($data['locale']);
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
            $data['emailAddress'] = $object->getEmailAddress();
            if ($object->isInitialized('notificationEventType') && null !== $object->getNotificationEventType()) {
                $values = [];
                foreach ($object->getNotificationEventType() as $value) {
                    $values[] = $value;
                }
                $data['notificationEventType'] = $values;
            }
            if ($object->isInitialized('smsDetail') && null !== $object->getSmsDetail()) {
                $data['smsDetail'] = $object->getSmsDetail();
            }
            if ($object->isInitialized('notificationFormatType') && null !== $object->getNotificationFormatType()) {
                $data['notificationFormatType'] = $object->getNotificationFormatType();
            }
            if ($object->isInitialized('emailNotificationRecipientType') && null !== $object->getEmailNotificationRecipientType()) {
                $data['emailNotificationRecipientType'] = $object->getEmailNotificationRecipientType();
            }
            if ($object->isInitialized('notificationType') && null !== $object->getNotificationType()) {
                $data['notificationType'] = $object->getNotificationType();
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailRecipientsItem::class => false];
        }
    }
} else {
    class RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailRecipientsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailRecipientsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailRecipientsItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailRecipientsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('emailAddress', $data)) {
                $object->setEmailAddress($data['emailAddress']);
                unset($data['emailAddress']);
            }
            if (\array_key_exists('notificationEventType', $data)) {
                $values = [];
                foreach ($data['notificationEventType'] as $value) {
                    $values[] = $value;
                }
                $object->setNotificationEventType($values);
                unset($data['notificationEventType']);
            }
            if (\array_key_exists('smsDetail', $data)) {
                $object->setSmsDetail($data['smsDetail']);
                unset($data['smsDetail']);
            }
            if (\array_key_exists('notificationFormatType', $data)) {
                $object->setNotificationFormatType($data['notificationFormatType']);
                unset($data['notificationFormatType']);
            }
            if (\array_key_exists('emailNotificationRecipientType', $data)) {
                $object->setEmailNotificationRecipientType($data['emailNotificationRecipientType']);
                unset($data['emailNotificationRecipientType']);
            }
            if (\array_key_exists('notificationType', $data)) {
                $object->setNotificationType($data['notificationType']);
                unset($data['notificationType']);
            }
            if (\array_key_exists('locale', $data)) {
                $object->setLocale($data['locale']);
                unset($data['locale']);
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
            $data['emailAddress'] = $object->getEmailAddress();
            if ($object->isInitialized('notificationEventType') && null !== $object->getNotificationEventType()) {
                $values = [];
                foreach ($object->getNotificationEventType() as $value) {
                    $values[] = $value;
                }
                $data['notificationEventType'] = $values;
            }
            if ($object->isInitialized('smsDetail') && null !== $object->getSmsDetail()) {
                $data['smsDetail'] = $object->getSmsDetail();
            }
            if ($object->isInitialized('notificationFormatType') && null !== $object->getNotificationFormatType()) {
                $data['notificationFormatType'] = $object->getNotificationFormatType();
            }
            if ($object->isInitialized('emailNotificationRecipientType') && null !== $object->getEmailNotificationRecipientType()) {
                $data['emailNotificationRecipientType'] = $object->getEmailNotificationRecipientType();
            }
            if ($object->isInitialized('notificationType') && null !== $object->getNotificationType()) {
                $data['notificationType'] = $object->getNotificationType();
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailRecipientsItem::class => false];
        }
    }
}
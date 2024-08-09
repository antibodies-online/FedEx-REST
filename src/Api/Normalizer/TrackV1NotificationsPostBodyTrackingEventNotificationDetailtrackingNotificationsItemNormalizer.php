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
    class TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('notificationDetail', $data)) {
                $object->setNotificationDetail($this->denormalizer->denormalize($data['notificationDetail'], \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetail::class, 'json', $context));
                unset($data['notificationDetail']);
            }
            if (\array_key_exists('role', $data)) {
                $object->setRole($data['role']);
                unset($data['role']);
            }
            if (\array_key_exists('notificationEventTypes', $data)) {
                $values = [];
                foreach ($data['notificationEventTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setNotificationEventTypes($values);
                unset($data['notificationEventTypes']);
            }
            if (\array_key_exists('currentResultRequestedFlag', $data)) {
                $object->setCurrentResultRequestedFlag($data['currentResultRequestedFlag']);
                unset($data['currentResultRequestedFlag']);
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
            $data['notificationDetail'] = $this->normalizer->normalize($object->getNotificationDetail(), 'json', $context);
            if ($object->isInitialized('role') && null !== $object->getRole()) {
                $data['role'] = $object->getRole();
            }
            $values = [];
            foreach ($object->getNotificationEventTypes() as $value) {
                $values[] = $value;
            }
            $data['notificationEventTypes'] = $values;
            if ($object->isInitialized('currentResultRequestedFlag') && null !== $object->getCurrentResultRequestedFlag()) {
                $data['currentResultRequestedFlag'] = $object->getCurrentResultRequestedFlag();
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
            return [\AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItem::class => false];
        }
    }
} else {
    class TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('notificationDetail', $data)) {
                $object->setNotificationDetail($this->denormalizer->denormalize($data['notificationDetail'], \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetail::class, 'json', $context));
                unset($data['notificationDetail']);
            }
            if (\array_key_exists('role', $data)) {
                $object->setRole($data['role']);
                unset($data['role']);
            }
            if (\array_key_exists('notificationEventTypes', $data)) {
                $values = [];
                foreach ($data['notificationEventTypes'] as $value) {
                    $values[] = $value;
                }
                $object->setNotificationEventTypes($values);
                unset($data['notificationEventTypes']);
            }
            if (\array_key_exists('currentResultRequestedFlag', $data)) {
                $object->setCurrentResultRequestedFlag($data['currentResultRequestedFlag']);
                unset($data['currentResultRequestedFlag']);
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
            $data['notificationDetail'] = $this->normalizer->normalize($object->getNotificationDetail(), 'json', $context);
            if ($object->isInitialized('role') && null !== $object->getRole()) {
                $data['role'] = $object->getRole();
            }
            $values = [];
            foreach ($object->getNotificationEventTypes() as $value) {
                $values[] = $value;
            }
            $data['notificationEventTypes'] = $values;
            if ($object->isInitialized('currentResultRequestedFlag') && null !== $object->getCurrentResultRequestedFlag()) {
                $data['currentResultRequestedFlag'] = $object->getCurrentResultRequestedFlag();
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
            return [\AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItem::class => false];
        }
    }
}
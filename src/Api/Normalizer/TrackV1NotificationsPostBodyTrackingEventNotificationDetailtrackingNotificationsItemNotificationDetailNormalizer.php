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
    class TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('localization', $data)) {
                $object->setLocalization($this->denormalizer->denormalize($data['localization'], \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailLocalization::class, 'json', $context));
                unset($data['localization']);
            }
            if (\array_key_exists('emailDetail', $data)) {
                $object->setEmailDetail($this->denormalizer->denormalize($data['emailDetail'], \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailEmailDetail::class, 'json', $context));
                unset($data['emailDetail']);
            }
            if (\array_key_exists('notificationType', $data)) {
                $object->setNotificationType($data['notificationType']);
                unset($data['notificationType']);
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
            $data['localization'] = $this->normalizer->normalize($object->getLocalization(), 'json', $context);
            $data['emailDetail'] = $this->normalizer->normalize($object->getEmailDetail(), 'json', $context);
            $data['notificationType'] = $object->getNotificationType();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetail::class => false];
        }
    }
} else {
    class TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetail::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('localization', $data)) {
                $object->setLocalization($this->denormalizer->denormalize($data['localization'], \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailLocalization::class, 'json', $context));
                unset($data['localization']);
            }
            if (\array_key_exists('emailDetail', $data)) {
                $object->setEmailDetail($this->denormalizer->denormalize($data['emailDetail'], \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailEmailDetail::class, 'json', $context));
                unset($data['emailDetail']);
            }
            if (\array_key_exists('notificationType', $data)) {
                $object->setNotificationType($data['notificationType']);
                unset($data['notificationType']);
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
            $data['localization'] = $this->normalizer->normalize($object->getLocalization(), 'json', $context);
            $data['emailDetail'] = $this->normalizer->normalize($object->getEmailDetail(), 'json', $context);
            $data['notificationType'] = $object->getNotificationType();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetail::class => false];
        }
    }
}
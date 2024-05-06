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
    class TrackV1NotificationsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1NotificationsPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1NotificationsPostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('senderContactName', $data)) {
                $object->setSenderContactName($data['senderContactName']);
                unset($data['senderContactName']);
            }
            if (\array_key_exists('senderEMailAddress', $data)) {
                $object->setSenderEMailAddress($data['senderEMailAddress']);
                unset($data['senderEMailAddress']);
            }
            if (\array_key_exists('trackingEventNotificationDetail', $data)) {
                $object->setTrackingEventNotificationDetail($this->denormalizer->denormalize($data['trackingEventNotificationDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1NotificationsPostBodyTrackingEventNotificationDetail', 'json', $context));
                unset($data['trackingEventNotificationDetail']);
            }
            if (\array_key_exists('trackingNumberInfo', $data)) {
                $object->setTrackingNumberInfo($this->denormalizer->denormalize($data['trackingNumberInfo'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1NotificationsPostBodyTrackingNumberInfo', 'json', $context));
                unset($data['trackingNumberInfo']);
            }
            if (\array_key_exists('shipDateBegin', $data)) {
                $object->setShipDateBegin($data['shipDateBegin']);
                unset($data['shipDateBegin']);
            }
            if (\array_key_exists('shipDateEnd', $data)) {
                $object->setShipDateEnd($data['shipDateEnd']);
                unset($data['shipDateEnd']);
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
            $data['senderContactName'] = $object->getSenderContactName();
            $data['senderEMailAddress'] = $object->getSenderEMailAddress();
            $data['trackingEventNotificationDetail'] = $this->normalizer->normalize($object->getTrackingEventNotificationDetail(), 'json', $context);
            $data['trackingNumberInfo'] = $this->normalizer->normalize($object->getTrackingNumberInfo(), 'json', $context);
            if ($object->isInitialized('shipDateBegin') && null !== $object->getShipDateBegin()) {
                $data['shipDateBegin'] = $object->getShipDateBegin();
            }
            if ($object->isInitialized('shipDateEnd') && null !== $object->getShipDateEnd()) {
                $data['shipDateEnd'] = $object->getShipDateEnd();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1NotificationsPostBody' => false];
        }
    }
} else {
    class TrackV1NotificationsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1NotificationsPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1NotificationsPostBody';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('senderContactName', $data)) {
                $object->setSenderContactName($data['senderContactName']);
                unset($data['senderContactName']);
            }
            if (\array_key_exists('senderEMailAddress', $data)) {
                $object->setSenderEMailAddress($data['senderEMailAddress']);
                unset($data['senderEMailAddress']);
            }
            if (\array_key_exists('trackingEventNotificationDetail', $data)) {
                $object->setTrackingEventNotificationDetail($this->denormalizer->denormalize($data['trackingEventNotificationDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1NotificationsPostBodyTrackingEventNotificationDetail', 'json', $context));
                unset($data['trackingEventNotificationDetail']);
            }
            if (\array_key_exists('trackingNumberInfo', $data)) {
                $object->setTrackingNumberInfo($this->denormalizer->denormalize($data['trackingNumberInfo'], 'AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1NotificationsPostBodyTrackingNumberInfo', 'json', $context));
                unset($data['trackingNumberInfo']);
            }
            if (\array_key_exists('shipDateBegin', $data)) {
                $object->setShipDateBegin($data['shipDateBegin']);
                unset($data['shipDateBegin']);
            }
            if (\array_key_exists('shipDateEnd', $data)) {
                $object->setShipDateEnd($data['shipDateEnd']);
                unset($data['shipDateEnd']);
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
            $data['senderContactName'] = $object->getSenderContactName();
            $data['senderEMailAddress'] = $object->getSenderEMailAddress();
            $data['trackingEventNotificationDetail'] = $this->normalizer->normalize($object->getTrackingEventNotificationDetail(), 'json', $context);
            $data['trackingNumberInfo'] = $this->normalizer->normalize($object->getTrackingNumberInfo(), 'json', $context);
            if ($object->isInitialized('shipDateBegin') && null !== $object->getShipDateBegin()) {
                $data['shipDateBegin'] = $object->getShipDateBegin();
            }
            if ($object->isInitialized('shipDateEnd') && null !== $object->getShipDateEnd()) {
                $data['shipDateEnd'] = $object->getShipDateEnd();
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\TrackV1NotificationsPostBody' => false];
        }
    }
}
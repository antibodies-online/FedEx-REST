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
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientaddress', 'json', $context));
                unset($data['address']);
            }
            if (\array_key_exists('contact', $data)) {
                $object->setContact($this->denormalizer->denormalize($data['contact'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact', 'json', $context));
                unset($data['contact']);
            }
            if (\array_key_exists('tins', $data)) {
                $values = [];
                foreach ($data['tins'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipienttinsItem', 'json', $context);
                }
                $object->setTins($values);
                unset($data['tins']);
            }
            if (\array_key_exists('deliveryInstructions', $data)) {
                $object->setDeliveryInstructions($data['deliveryInstructions']);
                unset($data['deliveryInstructions']);
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
            $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            $data['contact'] = $this->normalizer->normalize($object->getContact(), 'json', $context);
            if ($object->isInitialized('tins') && null !== $object->getTins()) {
                $values = [];
                foreach ($object->getTins() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['tins'] = $values;
            }
            if ($object->isInitialized('deliveryInstructions') && null !== $object->getDeliveryInstructions()) {
                $data['deliveryInstructions'] = $object->getDeliveryInstructions();
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient';
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
            $object = new \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientaddress', 'json', $context));
                unset($data['address']);
            }
            if (\array_key_exists('contact', $data)) {
                $object->setContact($this->denormalizer->denormalize($data['contact'], 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact', 'json', $context));
                unset($data['contact']);
            }
            if (\array_key_exists('tins', $data)) {
                $values = [];
                foreach ($data['tins'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipienttinsItem', 'json', $context);
                }
                $object->setTins($values);
                unset($data['tins']);
            }
            if (\array_key_exists('deliveryInstructions', $data)) {
                $object->setDeliveryInstructions($data['deliveryInstructions']);
                unset($data['deliveryInstructions']);
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
            $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            $data['contact'] = $this->normalizer->normalize($object->getContact(), 'json', $context);
            if ($object->isInitialized('tins') && null !== $object->getTins()) {
                $values = [];
                foreach ($object->getTins() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['tins'] = $values;
            }
            if ($object->isInitialized('deliveryInstructions') && null !== $object->getDeliveryInstructions()) {
                $data['deliveryInstructions'] = $object->getDeliveryInstructions();
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
            return ['AntibodiesOnline\\FedEx\\Model\\ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient' => false];
        }
    }
}
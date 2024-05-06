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
    class ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailExportDetailDestinationControlDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailExportDetailDestinationControlDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailExportDetailDestinationControlDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailExportDetailDestinationControlDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('endUser', $data)) {
                $object->setEndUser($data['endUser']);
                unset($data['endUser']);
            }
            if (\array_key_exists('statementTypes', $data)) {
                $object->setStatementTypes($data['statementTypes']);
                unset($data['statementTypes']);
            }
            if (\array_key_exists('destinationCountries', $data)) {
                $values = [];
                foreach ($data['destinationCountries'] as $value) {
                    $values[] = $value;
                }
                $object->setDestinationCountries($values);
                unset($data['destinationCountries']);
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
            if ($object->isInitialized('endUser') && null !== $object->getEndUser()) {
                $data['endUser'] = $object->getEndUser();
            }
            $data['statementTypes'] = $object->getStatementTypes();
            if ($object->isInitialized('destinationCountries') && null !== $object->getDestinationCountries()) {
                $values = [];
                foreach ($object->getDestinationCountries() as $value) {
                    $values[] = $value;
                }
                $data['destinationCountries'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailExportDetailDestinationControlDetail' => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailExportDetailDestinationControlDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailExportDetailDestinationControlDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailExportDetailDestinationControlDetail';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailExportDetailDestinationControlDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('endUser', $data)) {
                $object->setEndUser($data['endUser']);
                unset($data['endUser']);
            }
            if (\array_key_exists('statementTypes', $data)) {
                $object->setStatementTypes($data['statementTypes']);
                unset($data['statementTypes']);
            }
            if (\array_key_exists('destinationCountries', $data)) {
                $values = [];
                foreach ($data['destinationCountries'] as $value) {
                    $values[] = $value;
                }
                $object->setDestinationCountries($values);
                unset($data['destinationCountries']);
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
            if ($object->isInitialized('endUser') && null !== $object->getEndUser()) {
                $data['endUser'] = $object->getEndUser();
            }
            $data['statementTypes'] = $object->getStatementTypes();
            if ($object->isInitialized('destinationCountries') && null !== $object->getDestinationCountries()) {
                $values = [];
                foreach ($object->getDestinationCountries() as $value) {
                    $values[] = $value;
                }
                $data['destinationCountries'] = $values;
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
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailExportDetailDestinationControlDetail' => false];
        }
    }
}
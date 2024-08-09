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
    class PickupV1PickupsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('associatedAccountNumber', $data)) {
                $object->setAssociatedAccountNumber($this->denormalizer->denormalize($data['associatedAccountNumber'], \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyAssociatedAccountNumber::class, 'json', $context));
                unset($data['associatedAccountNumber']);
            }
            if (\array_key_exists('originDetail', $data)) {
                $object->setOriginDetail($data['originDetail']);
                unset($data['originDetail']);
            }
            if (\array_key_exists('associatedAccountNumberType', $data)) {
                $object->setAssociatedAccountNumberType($data['associatedAccountNumberType']);
                unset($data['associatedAccountNumberType']);
            }
            if (\array_key_exists('totalWeight', $data)) {
                $object->setTotalWeight($this->denormalizer->denormalize($data['totalWeight'], \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyTotalWeight::class, 'json', $context));
                unset($data['totalWeight']);
            }
            if (\array_key_exists('packageCount', $data)) {
                $object->setPackageCount($data['packageCount']);
                unset($data['packageCount']);
            }
            if (\array_key_exists('carrierCode', $data)) {
                $object->setCarrierCode($data['carrierCode']);
                unset($data['carrierCode']);
            }
            if (\array_key_exists('accountAddressOfRecord', $data)) {
                $object->setAccountAddressOfRecord($this->denormalizer->denormalize($data['accountAddressOfRecord'], \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyAccountAddressOfRecord::class, 'json', $context));
                unset($data['accountAddressOfRecord']);
            }
            if (\array_key_exists('remarks', $data)) {
                $object->setRemarks($data['remarks']);
                unset($data['remarks']);
            }
            if (\array_key_exists('countryRelationships', $data)) {
                $object->setCountryRelationships($data['countryRelationships']);
                unset($data['countryRelationships']);
            }
            if (\array_key_exists('pickupType', $data)) {
                $object->setPickupType($data['pickupType']);
                unset($data['pickupType']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('commodityDescription', $data)) {
                $object->setCommodityDescription($data['commodityDescription']);
                unset($data['commodityDescription']);
            }
            if (\array_key_exists('expressFreightDetail', $data)) {
                $object->setExpressFreightDetail($this->denormalizer->denormalize($data['expressFreightDetail'], \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyExpressFreightDetail::class, 'json', $context));
                unset($data['expressFreightDetail']);
            }
            if (\array_key_exists('oversizePackageCount', $data)) {
                $object->setOversizePackageCount($data['oversizePackageCount']);
                unset($data['oversizePackageCount']);
            }
            if (\array_key_exists('pickupNotificationDetail', $data)) {
                $object->setPickupNotificationDetail($data['pickupNotificationDetail']);
                unset($data['pickupNotificationDetail']);
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
            $data['associatedAccountNumber'] = $this->normalizer->normalize($object->getAssociatedAccountNumber(), 'json', $context);
            $data['originDetail'] = $object->getOriginDetail();
            if ($object->isInitialized('associatedAccountNumberType') && null !== $object->getAssociatedAccountNumberType()) {
                $data['associatedAccountNumberType'] = $object->getAssociatedAccountNumberType();
            }
            if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
                $data['totalWeight'] = $this->normalizer->normalize($object->getTotalWeight(), 'json', $context);
            }
            if ($object->isInitialized('packageCount') && null !== $object->getPackageCount()) {
                $data['packageCount'] = $object->getPackageCount();
            }
            $data['carrierCode'] = $object->getCarrierCode();
            if ($object->isInitialized('accountAddressOfRecord') && null !== $object->getAccountAddressOfRecord()) {
                $data['accountAddressOfRecord'] = $this->normalizer->normalize($object->getAccountAddressOfRecord(), 'json', $context);
            }
            if ($object->isInitialized('remarks') && null !== $object->getRemarks()) {
                $data['remarks'] = $object->getRemarks();
            }
            if ($object->isInitialized('countryRelationships') && null !== $object->getCountryRelationships()) {
                $data['countryRelationships'] = $object->getCountryRelationships();
            }
            if ($object->isInitialized('pickupType') && null !== $object->getPickupType()) {
                $data['pickupType'] = $object->getPickupType();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('commodityDescription') && null !== $object->getCommodityDescription()) {
                $data['commodityDescription'] = $object->getCommodityDescription();
            }
            if ($object->isInitialized('expressFreightDetail') && null !== $object->getExpressFreightDetail()) {
                $data['expressFreightDetail'] = $this->normalizer->normalize($object->getExpressFreightDetail(), 'json', $context);
            }
            if ($object->isInitialized('oversizePackageCount') && null !== $object->getOversizePackageCount()) {
                $data['oversizePackageCount'] = $object->getOversizePackageCount();
            }
            if ($object->isInitialized('pickupNotificationDetail') && null !== $object->getPickupNotificationDetail()) {
                $data['pickupNotificationDetail'] = $object->getPickupNotificationDetail();
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
            return [\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBody::class => false];
        }
    }
} else {
    class PickupV1PickupsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBody::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('associatedAccountNumber', $data)) {
                $object->setAssociatedAccountNumber($this->denormalizer->denormalize($data['associatedAccountNumber'], \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyAssociatedAccountNumber::class, 'json', $context));
                unset($data['associatedAccountNumber']);
            }
            if (\array_key_exists('originDetail', $data)) {
                $object->setOriginDetail($data['originDetail']);
                unset($data['originDetail']);
            }
            if (\array_key_exists('associatedAccountNumberType', $data)) {
                $object->setAssociatedAccountNumberType($data['associatedAccountNumberType']);
                unset($data['associatedAccountNumberType']);
            }
            if (\array_key_exists('totalWeight', $data)) {
                $object->setTotalWeight($this->denormalizer->denormalize($data['totalWeight'], \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyTotalWeight::class, 'json', $context));
                unset($data['totalWeight']);
            }
            if (\array_key_exists('packageCount', $data)) {
                $object->setPackageCount($data['packageCount']);
                unset($data['packageCount']);
            }
            if (\array_key_exists('carrierCode', $data)) {
                $object->setCarrierCode($data['carrierCode']);
                unset($data['carrierCode']);
            }
            if (\array_key_exists('accountAddressOfRecord', $data)) {
                $object->setAccountAddressOfRecord($this->denormalizer->denormalize($data['accountAddressOfRecord'], \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyAccountAddressOfRecord::class, 'json', $context));
                unset($data['accountAddressOfRecord']);
            }
            if (\array_key_exists('remarks', $data)) {
                $object->setRemarks($data['remarks']);
                unset($data['remarks']);
            }
            if (\array_key_exists('countryRelationships', $data)) {
                $object->setCountryRelationships($data['countryRelationships']);
                unset($data['countryRelationships']);
            }
            if (\array_key_exists('pickupType', $data)) {
                $object->setPickupType($data['pickupType']);
                unset($data['pickupType']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
                unset($data['trackingNumber']);
            }
            if (\array_key_exists('commodityDescription', $data)) {
                $object->setCommodityDescription($data['commodityDescription']);
                unset($data['commodityDescription']);
            }
            if (\array_key_exists('expressFreightDetail', $data)) {
                $object->setExpressFreightDetail($this->denormalizer->denormalize($data['expressFreightDetail'], \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBodyExpressFreightDetail::class, 'json', $context));
                unset($data['expressFreightDetail']);
            }
            if (\array_key_exists('oversizePackageCount', $data)) {
                $object->setOversizePackageCount($data['oversizePackageCount']);
                unset($data['oversizePackageCount']);
            }
            if (\array_key_exists('pickupNotificationDetail', $data)) {
                $object->setPickupNotificationDetail($data['pickupNotificationDetail']);
                unset($data['pickupNotificationDetail']);
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
            $data['originDetail'] = $object->getOriginDetail();
            if ($object->isInitialized('associatedAccountNumberType') && null !== $object->getAssociatedAccountNumberType()) {
                $data['associatedAccountNumberType'] = $object->getAssociatedAccountNumberType();
            }
            if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
                $data['totalWeight'] = $this->normalizer->normalize($object->getTotalWeight(), 'json', $context);
            }
            if ($object->isInitialized('packageCount') && null !== $object->getPackageCount()) {
                $data['packageCount'] = $object->getPackageCount();
            }
            $data['carrierCode'] = $object->getCarrierCode();
            if ($object->isInitialized('accountAddressOfRecord') && null !== $object->getAccountAddressOfRecord()) {
                $data['accountAddressOfRecord'] = $this->normalizer->normalize($object->getAccountAddressOfRecord(), 'json', $context);
            }
            if ($object->isInitialized('remarks') && null !== $object->getRemarks()) {
                $data['remarks'] = $object->getRemarks();
            }
            if ($object->isInitialized('countryRelationships') && null !== $object->getCountryRelationships()) {
                $data['countryRelationships'] = $object->getCountryRelationships();
            }
            if ($object->isInitialized('pickupType') && null !== $object->getPickupType()) {
                $data['pickupType'] = $object->getPickupType();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('commodityDescription') && null !== $object->getCommodityDescription()) {
                $data['commodityDescription'] = $object->getCommodityDescription();
            }
            if ($object->isInitialized('expressFreightDetail') && null !== $object->getExpressFreightDetail()) {
                $data['expressFreightDetail'] = $this->normalizer->normalize($object->getExpressFreightDetail(), 'json', $context);
            }
            if ($object->isInitialized('oversizePackageCount') && null !== $object->getOversizePackageCount()) {
                $data['oversizePackageCount'] = $object->getOversizePackageCount();
            }
            if ($object->isInitialized('pickupNotificationDetail') && null !== $object->getPickupNotificationDetail()) {
                $data['pickupNotificationDetail'] = $object->getPickupNotificationDetail();
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
            return [\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostBody::class => false];
        }
    }
}
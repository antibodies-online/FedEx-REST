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
    class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItem();
            if (\array_key_exists('totalNetCharge', $data) && \is_int($data['totalNetCharge'])) {
                $data['totalNetCharge'] = (double) $data['totalNetCharge'];
            }
            if (\array_key_exists('totalBaseCharge', $data) && \is_int($data['totalBaseCharge'])) {
                $data['totalBaseCharge'] = (double) $data['totalBaseCharge'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('discounts', $data)) {
                $values = [];
                foreach ($data['discounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemdiscountsItem::class, 'json', $context);
                }
                $object->setDiscounts($values);
                unset($data['discounts']);
            }
            if (\array_key_exists('pricingCode', $data)) {
                $object->setPricingCode($data['pricingCode']);
                unset($data['pricingCode']);
            }
            if (\array_key_exists('legDescription', $data)) {
                $object->setLegDescription($data['legDescription']);
                unset($data['legDescription']);
            }
            if (\array_key_exists('surcharges', $data)) {
                $values_1 = [];
                foreach ($data['surcharges'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemsurchargesItem::class, 'json', $context);
                }
                $object->setSurcharges($values_1);
                unset($data['surcharges']);
            }
            if (\array_key_exists('specialRatingApplied', $data)) {
                $values_2 = [];
                foreach ($data['specialRatingApplied'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setSpecialRatingApplied($values_2);
                unset($data['specialRatingApplied']);
            }
            if (\array_key_exists('taxes', $data)) {
                $values_3 = [];
                foreach ($data['taxes'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemtaxesItem::class, 'json', $context);
                }
                $object->setTaxes($values_3);
                unset($data['taxes']);
            }
            if (\array_key_exists('rateScale', $data)) {
                $object->setRateScale($data['rateScale']);
                unset($data['rateScale']);
            }
            if (\array_key_exists('totalNetCharge', $data)) {
                $object->setTotalNetCharge($data['totalNetCharge']);
                unset($data['totalNetCharge']);
            }
            if (\array_key_exists('totalBaseCharge', $data)) {
                $object->setTotalBaseCharge($data['totalBaseCharge']);
                unset($data['totalBaseCharge']);
            }
            if (\array_key_exists('currencyExchangeRate', $data)) {
                $object->setCurrencyExchangeRate($this->denormalizer->denormalize($data['currencyExchangeRate'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemcurrencyExchangeRate::class, 'json', $context));
                unset($data['currencyExchangeRate']);
            }
            if (\array_key_exists('totalBillingWeight', $data)) {
                $object->setTotalBillingWeight($this->denormalizer->denormalize($data['totalBillingWeight'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemtotalBillingWeight::class, 'json', $context));
                unset($data['totalBillingWeight']);
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($data['currency']);
                unset($data['currency']);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('discounts') && null !== $object->getDiscounts()) {
                $values = [];
                foreach ($object->getDiscounts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['discounts'] = $values;
            }
            if ($object->isInitialized('pricingCode') && null !== $object->getPricingCode()) {
                $data['pricingCode'] = $object->getPricingCode();
            }
            if ($object->isInitialized('legDescription') && null !== $object->getLegDescription()) {
                $data['legDescription'] = $object->getLegDescription();
            }
            if ($object->isInitialized('surcharges') && null !== $object->getSurcharges()) {
                $values_1 = [];
                foreach ($object->getSurcharges() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['surcharges'] = $values_1;
            }
            if ($object->isInitialized('specialRatingApplied') && null !== $object->getSpecialRatingApplied()) {
                $values_2 = [];
                foreach ($object->getSpecialRatingApplied() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['specialRatingApplied'] = $values_2;
            }
            if ($object->isInitialized('taxes') && null !== $object->getTaxes()) {
                $values_3 = [];
                foreach ($object->getTaxes() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['taxes'] = $values_3;
            }
            if ($object->isInitialized('rateScale') && null !== $object->getRateScale()) {
                $data['rateScale'] = $object->getRateScale();
            }
            if ($object->isInitialized('totalNetCharge') && null !== $object->getTotalNetCharge()) {
                $data['totalNetCharge'] = $object->getTotalNetCharge();
            }
            if ($object->isInitialized('totalBaseCharge') && null !== $object->getTotalBaseCharge()) {
                $data['totalBaseCharge'] = $object->getTotalBaseCharge();
            }
            if ($object->isInitialized('currencyExchangeRate') && null !== $object->getCurrencyExchangeRate()) {
                $data['currencyExchangeRate'] = $this->normalizer->normalize($object->getCurrencyExchangeRate(), 'json', $context);
            }
            if ($object->isInitialized('totalBillingWeight') && null !== $object->getTotalBillingWeight()) {
                $data['totalBillingWeight'] = $this->normalizer->normalize($object->getTotalBillingWeight(), 'json', $context);
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $object->getCurrency();
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItem::class => false];
        }
    }
} else {
    class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItem();
            if (\array_key_exists('totalNetCharge', $data) && \is_int($data['totalNetCharge'])) {
                $data['totalNetCharge'] = (double) $data['totalNetCharge'];
            }
            if (\array_key_exists('totalBaseCharge', $data) && \is_int($data['totalBaseCharge'])) {
                $data['totalBaseCharge'] = (double) $data['totalBaseCharge'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('discounts', $data)) {
                $values = [];
                foreach ($data['discounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemdiscountsItem::class, 'json', $context);
                }
                $object->setDiscounts($values);
                unset($data['discounts']);
            }
            if (\array_key_exists('pricingCode', $data)) {
                $object->setPricingCode($data['pricingCode']);
                unset($data['pricingCode']);
            }
            if (\array_key_exists('legDescription', $data)) {
                $object->setLegDescription($data['legDescription']);
                unset($data['legDescription']);
            }
            if (\array_key_exists('surcharges', $data)) {
                $values_1 = [];
                foreach ($data['surcharges'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemsurchargesItem::class, 'json', $context);
                }
                $object->setSurcharges($values_1);
                unset($data['surcharges']);
            }
            if (\array_key_exists('specialRatingApplied', $data)) {
                $values_2 = [];
                foreach ($data['specialRatingApplied'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setSpecialRatingApplied($values_2);
                unset($data['specialRatingApplied']);
            }
            if (\array_key_exists('taxes', $data)) {
                $values_3 = [];
                foreach ($data['taxes'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemtaxesItem::class, 'json', $context);
                }
                $object->setTaxes($values_3);
                unset($data['taxes']);
            }
            if (\array_key_exists('rateScale', $data)) {
                $object->setRateScale($data['rateScale']);
                unset($data['rateScale']);
            }
            if (\array_key_exists('totalNetCharge', $data)) {
                $object->setTotalNetCharge($data['totalNetCharge']);
                unset($data['totalNetCharge']);
            }
            if (\array_key_exists('totalBaseCharge', $data)) {
                $object->setTotalBaseCharge($data['totalBaseCharge']);
                unset($data['totalBaseCharge']);
            }
            if (\array_key_exists('currencyExchangeRate', $data)) {
                $object->setCurrencyExchangeRate($this->denormalizer->denormalize($data['currencyExchangeRate'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemcurrencyExchangeRate::class, 'json', $context));
                unset($data['currencyExchangeRate']);
            }
            if (\array_key_exists('totalBillingWeight', $data)) {
                $object->setTotalBillingWeight($this->denormalizer->denormalize($data['totalBillingWeight'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemtotalBillingWeight::class, 'json', $context));
                unset($data['totalBillingWeight']);
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($data['currency']);
                unset($data['currency']);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
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
            if ($object->isInitialized('discounts') && null !== $object->getDiscounts()) {
                $values = [];
                foreach ($object->getDiscounts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['discounts'] = $values;
            }
            if ($object->isInitialized('pricingCode') && null !== $object->getPricingCode()) {
                $data['pricingCode'] = $object->getPricingCode();
            }
            if ($object->isInitialized('legDescription') && null !== $object->getLegDescription()) {
                $data['legDescription'] = $object->getLegDescription();
            }
            if ($object->isInitialized('surcharges') && null !== $object->getSurcharges()) {
                $values_1 = [];
                foreach ($object->getSurcharges() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['surcharges'] = $values_1;
            }
            if ($object->isInitialized('specialRatingApplied') && null !== $object->getSpecialRatingApplied()) {
                $values_2 = [];
                foreach ($object->getSpecialRatingApplied() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['specialRatingApplied'] = $values_2;
            }
            if ($object->isInitialized('taxes') && null !== $object->getTaxes()) {
                $values_3 = [];
                foreach ($object->getTaxes() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['taxes'] = $values_3;
            }
            if ($object->isInitialized('rateScale') && null !== $object->getRateScale()) {
                $data['rateScale'] = $object->getRateScale();
            }
            if ($object->isInitialized('totalNetCharge') && null !== $object->getTotalNetCharge()) {
                $data['totalNetCharge'] = $object->getTotalNetCharge();
            }
            if ($object->isInitialized('totalBaseCharge') && null !== $object->getTotalBaseCharge()) {
                $data['totalBaseCharge'] = $object->getTotalBaseCharge();
            }
            if ($object->isInitialized('currencyExchangeRate') && null !== $object->getCurrencyExchangeRate()) {
                $data['currencyExchangeRate'] = $this->normalizer->normalize($object->getCurrencyExchangeRate(), 'json', $context);
            }
            if ($object->isInitialized('totalBillingWeight') && null !== $object->getTotalBillingWeight()) {
                $data['totalBillingWeight'] = $this->normalizer->normalize($object->getTotalBillingWeight(), 'json', $context);
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $object->getCurrency();
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItem::class => false];
        }
    }
}
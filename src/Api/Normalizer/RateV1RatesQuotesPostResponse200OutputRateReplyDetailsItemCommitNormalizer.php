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
    class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommit::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommit::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommit();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('daysInTransit', $data)) {
                $object->setDaysInTransit($data['daysInTransit']);
                unset($data['daysInTransit']);
            }
            if (\array_key_exists('guaranteedType', $data)) {
                $object->setGuaranteedType($data['guaranteedType']);
                unset($data['guaranteedType']);
            }
            if (\array_key_exists('smartPostCommitTime', $data)) {
                $object->setSmartPostCommitTime($data['smartPostCommitTime']);
                unset($data['smartPostCommitTime']);
            }
            if (\array_key_exists('dateDetail', $data)) {
                $object->setDateDetail($this->denormalizer->denormalize($data['dateDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommitdateDetail::class, 'json', $context));
                unset($data['dateDetail']);
            }
            if (\array_key_exists('delayDetails', $data)) {
                $object->setDelayDetails($this->denormalizer->denormalize($data['delayDetails'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommitdelayDetails::class, 'json', $context));
                unset($data['delayDetails']);
            }
            if (\array_key_exists('saturdayDelivery', $data)) {
                $object->setSaturdayDelivery($data['saturdayDelivery']);
                unset($data['saturdayDelivery']);
            }
            if (\array_key_exists('alternativeCommodityNames', $data)) {
                $values = [];
                foreach ($data['alternativeCommodityNames'] as $value) {
                    $values[] = $value;
                }
                $object->setAlternativeCommodityNames($values);
                unset($data['alternativeCommodityNames']);
            }
            if (\array_key_exists('transitDays', $data)) {
                $object->setTransitDays($this->denormalizer->denormalize($data['transitDays'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommittransitDays::class, 'json', $context));
                unset($data['transitDays']);
            }
            if (\array_key_exists('label', $data)) {
                $object->setLabel($data['label']);
                unset($data['label']);
            }
            if (\array_key_exists('commitMessageDetails', $data)) {
                $object->setCommitMessageDetails($data['commitMessageDetails']);
                unset($data['commitMessageDetails']);
            }
            if (\array_key_exists('commodityName', $data)) {
                $object->setCommodityName($data['commodityName']);
                unset($data['commodityName']);
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
            if ($object->isInitialized('daysInTransit') && null !== $object->getDaysInTransit()) {
                $data['daysInTransit'] = $object->getDaysInTransit();
            }
            if ($object->isInitialized('guaranteedType') && null !== $object->getGuaranteedType()) {
                $data['guaranteedType'] = $object->getGuaranteedType();
            }
            if ($object->isInitialized('smartPostCommitTime') && null !== $object->getSmartPostCommitTime()) {
                $data['smartPostCommitTime'] = $object->getSmartPostCommitTime();
            }
            if ($object->isInitialized('dateDetail') && null !== $object->getDateDetail()) {
                $data['dateDetail'] = $this->normalizer->normalize($object->getDateDetail(), 'json', $context);
            }
            if ($object->isInitialized('delayDetails') && null !== $object->getDelayDetails()) {
                $data['delayDetails'] = $this->normalizer->normalize($object->getDelayDetails(), 'json', $context);
            }
            if ($object->isInitialized('saturdayDelivery') && null !== $object->getSaturdayDelivery()) {
                $data['saturdayDelivery'] = $object->getSaturdayDelivery();
            }
            if ($object->isInitialized('alternativeCommodityNames') && null !== $object->getAlternativeCommodityNames()) {
                $values = [];
                foreach ($object->getAlternativeCommodityNames() as $value) {
                    $values[] = $value;
                }
                $data['alternativeCommodityNames'] = $values;
            }
            if ($object->isInitialized('transitDays') && null !== $object->getTransitDays()) {
                $data['transitDays'] = $this->normalizer->normalize($object->getTransitDays(), 'json', $context);
            }
            if ($object->isInitialized('label') && null !== $object->getLabel()) {
                $data['label'] = $object->getLabel();
            }
            if ($object->isInitialized('commitMessageDetails') && null !== $object->getCommitMessageDetails()) {
                $data['commitMessageDetails'] = $object->getCommitMessageDetails();
            }
            if ($object->isInitialized('commodityName') && null !== $object->getCommodityName()) {
                $data['commodityName'] = $object->getCommodityName();
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommit::class => false];
        }
    }
} else {
    class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommit::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommit::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommit();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('daysInTransit', $data)) {
                $object->setDaysInTransit($data['daysInTransit']);
                unset($data['daysInTransit']);
            }
            if (\array_key_exists('guaranteedType', $data)) {
                $object->setGuaranteedType($data['guaranteedType']);
                unset($data['guaranteedType']);
            }
            if (\array_key_exists('smartPostCommitTime', $data)) {
                $object->setSmartPostCommitTime($data['smartPostCommitTime']);
                unset($data['smartPostCommitTime']);
            }
            if (\array_key_exists('dateDetail', $data)) {
                $object->setDateDetail($this->denormalizer->denormalize($data['dateDetail'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommitdateDetail::class, 'json', $context));
                unset($data['dateDetail']);
            }
            if (\array_key_exists('delayDetails', $data)) {
                $object->setDelayDetails($this->denormalizer->denormalize($data['delayDetails'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommitdelayDetails::class, 'json', $context));
                unset($data['delayDetails']);
            }
            if (\array_key_exists('saturdayDelivery', $data)) {
                $object->setSaturdayDelivery($data['saturdayDelivery']);
                unset($data['saturdayDelivery']);
            }
            if (\array_key_exists('alternativeCommodityNames', $data)) {
                $values = [];
                foreach ($data['alternativeCommodityNames'] as $value) {
                    $values[] = $value;
                }
                $object->setAlternativeCommodityNames($values);
                unset($data['alternativeCommodityNames']);
            }
            if (\array_key_exists('transitDays', $data)) {
                $object->setTransitDays($this->denormalizer->denormalize($data['transitDays'], \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommittransitDays::class, 'json', $context));
                unset($data['transitDays']);
            }
            if (\array_key_exists('label', $data)) {
                $object->setLabel($data['label']);
                unset($data['label']);
            }
            if (\array_key_exists('commitMessageDetails', $data)) {
                $object->setCommitMessageDetails($data['commitMessageDetails']);
                unset($data['commitMessageDetails']);
            }
            if (\array_key_exists('commodityName', $data)) {
                $object->setCommodityName($data['commodityName']);
                unset($data['commodityName']);
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
            if ($object->isInitialized('daysInTransit') && null !== $object->getDaysInTransit()) {
                $data['daysInTransit'] = $object->getDaysInTransit();
            }
            if ($object->isInitialized('guaranteedType') && null !== $object->getGuaranteedType()) {
                $data['guaranteedType'] = $object->getGuaranteedType();
            }
            if ($object->isInitialized('smartPostCommitTime') && null !== $object->getSmartPostCommitTime()) {
                $data['smartPostCommitTime'] = $object->getSmartPostCommitTime();
            }
            if ($object->isInitialized('dateDetail') && null !== $object->getDateDetail()) {
                $data['dateDetail'] = $this->normalizer->normalize($object->getDateDetail(), 'json', $context);
            }
            if ($object->isInitialized('delayDetails') && null !== $object->getDelayDetails()) {
                $data['delayDetails'] = $this->normalizer->normalize($object->getDelayDetails(), 'json', $context);
            }
            if ($object->isInitialized('saturdayDelivery') && null !== $object->getSaturdayDelivery()) {
                $data['saturdayDelivery'] = $object->getSaturdayDelivery();
            }
            if ($object->isInitialized('alternativeCommodityNames') && null !== $object->getAlternativeCommodityNames()) {
                $values = [];
                foreach ($object->getAlternativeCommodityNames() as $value) {
                    $values[] = $value;
                }
                $data['alternativeCommodityNames'] = $values;
            }
            if ($object->isInitialized('transitDays') && null !== $object->getTransitDays()) {
                $data['transitDays'] = $this->normalizer->normalize($object->getTransitDays(), 'json', $context);
            }
            if ($object->isInitialized('label') && null !== $object->getLabel()) {
                $data['label'] = $object->getLabel();
            }
            if ($object->isInitialized('commitMessageDetails') && null !== $object->getCommitMessageDetails()) {
                $data['commitMessageDetails'] = $object->getCommitMessageDetails();
            }
            if ($object->isInitialized('commodityName') && null !== $object->getCommodityName()) {
                $data['commodityName'] = $object->getCommodityName();
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
            return [\AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommit::class => false];
        }
    }
}
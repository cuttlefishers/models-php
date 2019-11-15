<?php

namespace OpenActive\Enums;

/**
 * RefundTypeEnumeration enumerates several kinds of product return refund types.
 *
 */
class RefundTypeEnumeration
{
    const ExchangeRefund = \OpenActive\Enums\OA\RefundTypeEnumeration\ExchangeRefund::class;
    const FullRefund = \OpenActive\Enums\OA\RefundTypeEnumeration\FullRefund::class;
    const StoreCreditRefund = \OpenActive\Enums\OA\RefundTypeEnumeration\StoreCreditRefund::class;
}

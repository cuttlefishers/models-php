<?php

namespace OpenActive\Enums;

/**
 * ReturnFeesEnumeration expresses policies for return fees.
 *
 */
class ReturnFeesEnumeration
{
    const RestockingFees = \OpenActive\Enums\OA\ReturnFeesEnumeration\RestockingFees::class;
    const OriginalShippingFees = \OpenActive\Enums\OA\ReturnFeesEnumeration\OriginalShippingFees::class;
    const ReturnShippingFees = \OpenActive\Enums\OA\ReturnFeesEnumeration\ReturnShippingFees::class;
}

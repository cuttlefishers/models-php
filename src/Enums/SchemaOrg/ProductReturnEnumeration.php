<?php

namespace OpenActive\Enums;

/**
 * ProductReturnEnumeration enumerates several kinds of product return policy. Note that this structure may not capture all aspects of the policy.
 *
 */
class ProductReturnEnumeration
{
    const ProductReturnUnlimitedWindow = \OpenActive\Enums\OA\ProductReturnEnumeration\ProductReturnUnlimitedWindow::class;
    const ProductReturnFiniteReturnWindow = \OpenActive\Enums\OA\ProductReturnEnumeration\ProductReturnFiniteReturnWindow::class;
    const ProductReturnUnspecified = \OpenActive\Enums\OA\ProductReturnEnumeration\ProductReturnUnspecified::class;
    const ProductReturnNotPermitted = \OpenActive\Enums\OA\ProductReturnEnumeration\ProductReturnNotPermitted::class;
}

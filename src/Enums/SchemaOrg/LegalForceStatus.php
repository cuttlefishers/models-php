<?php

namespace OpenActive\Enums;

/**
 * A list of possible statuses for the legal force of a legislation.
 *
 */
class LegalForceStatus
{
    const NotInForce = \OpenActive\Enums\OA\LegalForceStatus\NotInForce::class;
    const PartiallyInForce = \OpenActive\Enums\OA\LegalForceStatus\PartiallyInForce::class;
    const InForce = \OpenActive\Enums\OA\LegalForceStatus\InForce::class;
}

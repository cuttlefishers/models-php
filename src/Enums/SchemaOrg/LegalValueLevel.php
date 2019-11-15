<?php

namespace OpenActive\Enums;

/**
 * A list of possible levels for the legal validity of a legislation.
 *
 */
class LegalValueLevel
{
    const DefinitiveLegalValue = \OpenActive\Enums\OA\LegalValueLevel\DefinitiveLegalValue::class;
    const OfficialLegalValue = \OpenActive\Enums\OA\LegalValueLevel\OfficialLegalValue::class;
    const UnofficialLegalValue = \OpenActive\Enums\OA\LegalValueLevel\UnofficialLegalValue::class;
    const AuthoritativeLegalValue = \OpenActive\Enums\OA\LegalValueLevel\AuthoritativeLegalValue::class;
}

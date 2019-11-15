<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DigitalDocumentPermission extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DigitalDocumentPermission";
    }

    /**
     * The person, organization, contact point, or audience that has been granted this permission.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $grantee;

    /**
     * The type of permission granted the person, organization, or audience.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\DigitalDocumentPermissionType|null
     */
    protected $permissionType;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getGrantee()
    {
        return $this->grantee;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\Organization $grantee
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGrantee($grantee)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "\OpenActive\Models\SchemaOrg\Audience",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $grantee = self::checkTypes($grantee, $types);

        $this->grantee = $grantee;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\DigitalDocumentPermissionType|null
     */
    public function getPermissionType()
    {
        return $this->permissionType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\DigitalDocumentPermissionType|null $permissionType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPermissionType($permissionType)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\DigitalDocumentPermissionType",
            "null",
        );

        $permissionType = self::checkTypes($permissionType, $types);

        $this->permissionType = $permissionType;
    }

}

<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FollowAction extends \OpenActive\Models\SchemaOrg\InteractAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:FollowAction";
    }

    /**
     * A sub property of object. The person or organization being followed.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $followee;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getFollowee()
    {
        return $this->followee;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $followee
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFollowee($followee)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $followee = self::checkTypes($followee, $types);

        $this->followee = $followee;
    }

}

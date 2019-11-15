<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class InsertAction extends \OpenActive\Models\SchemaOrg\AddAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:InsertAction";
    }

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $toLocation;

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getToLocation()
    {
        return $this->toLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $toLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setToLocation($toLocation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
        );

        $toLocation = self::checkTypes($toLocation, $types);

        $this->toLocation = $toLocation;
    }

}

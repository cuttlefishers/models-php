<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class JoinAction extends \OpenActive\Models\SchemaOrg\InteractAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:JoinAction";
    }

    /**
     * Upcoming or past event associated with this place, organization, or action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event
     */
    protected $event;

    /**
     * @return \OpenActive\Models\SchemaOrg\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Event $event
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEvent($event)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Event",
        );

        $event = self::checkTypes($event, $types);

        $this->event = $event;
    }

}

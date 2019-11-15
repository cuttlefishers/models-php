<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HealthTopicContent extends \OpenActive\Models\SchemaOrg\WebContent
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HealthTopicContent";
    }

    /**
     * Indicates the aspect or aspects specifically addressed in some <a class="localLink" href="https://schema.org/HealthTopicContent">HealthTopicContent</a>. For example, that the content is an overview, or that it talks about treatment, self-care, treatments or their side-effects.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\HealthAspectEnumeration|null
     */
    protected $hasHealthAspect;

    /**
     * @return \OpenActive\Enums\SchemaOrg\HealthAspectEnumeration|null
     */
    public function getHasHealthAspect()
    {
        return $this->hasHealthAspect;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\HealthAspectEnumeration|null $hasHealthAspect
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasHealthAspect($hasHealthAspect)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\HealthAspectEnumeration",
            "null",
        );

        $hasHealthAspect = self::checkTypes($hasHealthAspect, $types);

        $this->hasHealthAspect = $hasHealthAspect;
    }

}

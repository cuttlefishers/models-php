<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Brand](https://schema.org/Brand), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Brand extends \OpenActive\Models\SchemaOrg\Brand
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "Brand";
    }

    /**
     * A local non-URI identifier for the resource
     *
     * ```json
     * "identifier": "BR1234"
     * ```
     *
     * @var int|string|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null
     */
    protected $identifier;

    /**
     * The name of the brand.
     *
     * ```json
     * "name": "Play Ball!"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * A text description for the brand.
     *
     * ```json
     * "description": "Play Ball! is a series of games for people of all abilities."
     * ```
     *
     * @var string
     */
    protected $description;

    /**
     * The logo associated with the brand.
     *
     * ```json
     * "logo": {
     *   "@type": "ImageObject",
     *   "url": "http://example.com/static/image/speedball_large.jpg"
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\ImageObject
     */
    protected $logo;

    /**
     * A url where further information can be found for the brand.
     *
     * ```json
     * "url": "http://example.com/play_ball"
     * ```
     *
     * @var string
     */
    protected $url;

    /**
     * [NOTICE: This is a beta field, and is highly likely to change in future versions of this library.]
     * An related video object.
     * 
     * If you are using this property, please join the discussion at proposal [#88](https://github.com/openactive/modelling-opportunity-data/issues/88).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\VideoObject[]
     */
    protected $video;

    /**
     * @return int|string|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param int|string|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = array(
            "int",
            "string",
            "\OpenActive\Models\OA\PropertyValue",
            "\OpenActive\Models\OA\PropertyValue[]",
            "null",
        );

        $identifier = self::checkTypes($identifier, $types);

        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = array(
            "string",
        );

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDescription($description)
    {
        $types = array(
            "string",
        );

        $description = self::checkTypes($description, $types);

        $this->description = $description;
    }

    /**
     * @return \OpenActive\Models\OA\ImageObject
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param \OpenActive\Models\OA\ImageObject $logo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLogo($logo)
    {
        $types = array(
            "\OpenActive\Models\OA\ImageObject",
        );

        $logo = self::checkTypes($logo, $types);

        $this->logo = $logo;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUrl($url)
    {
        $types = array(
            "string",
        );

        $url = self::checkTypes($url, $types);

        $this->url = $url;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\VideoObject[]
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\VideoObject[] $video
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVideo($video)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\VideoObject[]",
        );

        $video = self::checkTypes($video, $types);

        $this->video = $video;
    }

}

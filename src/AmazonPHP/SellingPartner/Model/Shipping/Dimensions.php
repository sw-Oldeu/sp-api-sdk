<?php declare(strict_types=1);
/**
 * Dimensions.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace AmazonPHP\SellingPartner\Model\Shipping;

use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Dimensions implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const UNIT_IN = 'IN';

    public const UNIT_CM = 'CM';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Dimensions';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'length' => 'float',
        'width' => 'float',
        'height' => 'float',
        'unit' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'length' => null,
        'width' => null,
        'height' => null,
        'unit' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'length' => 'length',
        'width' => 'width',
        'height' => 'height',
        'unit' => 'unit',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'length' => 'setLength',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'unit' => 'setUnit',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'length' => 'getLength',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'unit' => 'getUnit',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['length'] = $data['length'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['unit'] = $data['unit'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getUnitAllowableValues() : array
    {
        return [
            self::UNIT_IN,
            self::UNIT_CM,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['length'] === null) {
            $invalidProperties[] = "'length' can't be null";
        }

        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }

        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }

        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        $allowedValues = $this->getUnitAllowableValues();

        if (null !== $this->container['unit'] && !\in_array($this->container['unit'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'unit', must be one of '%s'",
                $this->container['unit'],
                \implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets length.
     */
    public function getLength() : float
    {
        return $this->container['length'];
    }

    /**
     * Sets length.
     *
     * @param float $length the length of the container
     */
    public function setLength(float $length) : self
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets width.
     */
    public function getWidth() : float
    {
        return $this->container['width'];
    }

    /**
     * Sets width.
     *
     * @param float $width the width of the container
     */
    public function setWidth(float $width) : self
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height.
     */
    public function getHeight() : float
    {
        return $this->container['height'];
    }

    /**
     * Sets height.
     *
     * @param float $height the height of the container
     */
    public function setHeight(float $height) : self
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets unit.
     */
    public function getUnit() : string
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit.
     *
     * @param string $unit the unit of these measurements
     */
    public function setUnit(string $unit) : self
    {
        $allowedValues = $this->getUnitAllowableValues();

        if (!\in_array($unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'unit', must be one of '%s'",
                    $unit,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize() : string
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
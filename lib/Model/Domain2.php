<?php
/**
 * Domain2
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Jalismrs\Stalactite\Client\Data
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Stalactite Data API client
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: /JT-798
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Jalismrs\Stalactite\Client\Data\Model;

use \ArrayAccess;
use \Jalismrs\Stalactite\Client\Data\ObjectSerializer;

/**
 * Domain2 Class Doc Comment
 *
 * @category Class
 * @package  Jalismrs\Stalactite\Client\Data
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Domain2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Domain2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'generation_date' => '\DateTime',
        'type' => 'string',
        'api_key' => 'string',
        'external_auth' => 'bool',
        'smarte' => 'bool',
        'active' => 'bool',
        'uid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'generation_date' => 'date-time',
        'type' => null,
        'api_key' => null,
        'external_auth' => null,
        'smarte' => null,
        'active' => null,
        'uid' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'generation_date' => 'generationDate',
        'type' => 'type',
        'api_key' => 'apiKey',
        'external_auth' => 'externalAuth',
        'smarte' => 'smarte',
        'active' => 'active',
        'uid' => 'uid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'generation_date' => 'setGenerationDate',
        'type' => 'setType',
        'api_key' => 'setApiKey',
        'external_auth' => 'setExternalAuth',
        'smarte' => 'setSmarte',
        'active' => 'setActive',
        'uid' => 'setUid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'generation_date' => 'getGenerationDate',
        'type' => 'getType',
        'api_key' => 'getApiKey',
        'external_auth' => 'getExternalAuth',
        'smarte' => 'getSmarte',
        'active' => 'getActive',
        'uid' => 'getUid'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const TYPE_JT = 'jt';
    const TYPE_EJ = 'ej';
    const TYPE_API = 'api';
    const TYPE_EMPTY = '';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_JT,
            self::TYPE_EJ,
            self::TYPE_API,
            self::TYPE_EMPTY,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = $data['name'] ?? null;
        $this->container['generation_date'] = $data['generation_date'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['api_key'] = $data['api_key'] ?? null;
        $this->container['external_auth'] = $data['external_auth'] ?? null;
        $this->container['smarte'] = $data['smarte'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['uid'] = $data['uid'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['generation_date'] === null) {
            $invalidProperties[] = "'generation_date' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['api_key'] === null) {
            $invalidProperties[] = "'api_key' can't be null";
        }
        if ((mb_strlen($this->container['api_key']) > 100)) {
            $invalidProperties[] = "invalid value for 'api_key', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['external_auth'] === null) {
            $invalidProperties[] = "'external_auth' can't be null";
        }
        if ($this->container['smarte'] === null) {
            $invalidProperties[] = "'smarte' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['uid'] === null) {
            $invalidProperties[] = "'uid' can't be null";
        }
        if (!preg_match("/[a-z0-9]{64}/", $this->container['uid'])) {
            $invalidProperties[] = "invalid value for 'uid', must be conform to the pattern /[a-z0-9]{64}/.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Domain2., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets generation_date
     *
     * @return \DateTime
     */
    public function getGenerationDate()
    {
        return $this->container['generation_date'];
    }

    /**
     * Sets generation_date
     *
     * @param \DateTime $generation_date generation_date
     *
     * @return self
     */
    public function setGenerationDate($generation_date)
    {
        $this->container['generation_date'] = $generation_date;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets api_key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string $api_key api_key
     *
     * @return self
     */
    public function setApiKey($api_key)
    {
        if ((mb_strlen($api_key) > 100)) {
            throw new \InvalidArgumentException('invalid length for $api_key when calling Domain2., must be smaller than or equal to 100.');
        }

        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets external_auth
     *
     * @return bool
     */
    public function getExternalAuth()
    {
        return $this->container['external_auth'];
    }

    /**
     * Sets external_auth
     *
     * @param bool $external_auth external_auth
     *
     * @return self
     */
    public function setExternalAuth($external_auth)
    {
        $this->container['external_auth'] = $external_auth;

        return $this;
    }

    /**
     * Gets smarte
     *
     * @return bool
     */
    public function getSmarte()
    {
        return $this->container['smarte'];
    }

    /**
     * Sets smarte
     *
     * @param bool $smarte smarte
     *
     * @return self
     */
    public function setSmarte($smarte)
    {
        $this->container['smarte'] = $smarte;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string $uid uid
     *
     * @return self
     */
    public function setUid($uid)
    {

        if ((!preg_match("/[a-z0-9]{64}/", $uid))) {
            throw new \InvalidArgumentException("invalid value for $uid when calling Domain2., must conform to the pattern /[a-z0-9]{64}/.");
        }

        $this->container['uid'] = $uid;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



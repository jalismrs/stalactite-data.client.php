<?php
/**
 * User
 *
 * PHP version 7.2
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
 * The version of the OpenAPI document: 0.4.1-dev.bd231ef55e5bb92892335c80f9248fcaae852223
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
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
 * User Class Doc Comment
 *
 * @category Class
 * @package  Jalismrs\Stalactite\Client\Data
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class User implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'string',
        'last_name' => 'string',
        'first_name' => 'string',
        'admin' => 'bool',
        'posts' => '\Jalismrs\Stalactite\Client\Data\Model\Post2[]',
        'leads' => '\Jalismrs\Stalactite\Client\Data\Model\Post2[]',
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
        'email' => null,
        'last_name' => null,
        'first_name' => null,
        'admin' => null,
        'posts' => null,
        'leads' => null,
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
        'email' => 'email',
        'last_name' => 'lastName',
        'first_name' => 'firstName',
        'admin' => 'admin',
        'posts' => 'posts',
        'leads' => 'leads',
        'uid' => 'uid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'last_name' => 'setLastName',
        'first_name' => 'setFirstName',
        'admin' => 'setAdmin',
        'posts' => 'setPosts',
        'leads' => 'setLeads',
        'uid' => 'setUid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'last_name' => 'getLastName',
        'first_name' => 'getFirstName',
        'admin' => 'getAdmin',
        'posts' => 'getPosts',
        'leads' => 'getLeads',
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
        $this->container['email'] = $data['email'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['admin'] = $data['admin'] ?? null;
        $this->container['posts'] = $data['posts'] ?? null;
        $this->container['leads'] = $data['leads'] ?? null;
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

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ((mb_strlen($this->container['email']) > 180)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 180.";
        }

        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ((mb_strlen($this->container['last_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ((mb_strlen($this->container['first_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['admin'] === null) {
            $invalidProperties[] = "'admin' can't be null";
        }
        if ($this->container['posts'] === null) {
            $invalidProperties[] = "'posts' can't be null";
        }
        if ((count($this->container['posts']) > 0)) {
            $invalidProperties[] = "invalid value for 'posts', number of items must be less than or equal to 0.";
        }

        if ((count($this->container['posts']) < 1)) {
            $invalidProperties[] = "invalid value for 'posts', number of items must be greater than or equal to 1.";
        }

        if ($this->container['leads'] === null) {
            $invalidProperties[] = "'leads' can't be null";
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if ((mb_strlen($email) > 180)) {
            throw new \InvalidArgumentException('invalid length for $email when calling User., must be smaller than or equal to 180.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if ((mb_strlen($last_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling User., must be smaller than or equal to 100.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if ((mb_strlen($first_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling User., must be smaller than or equal to 100.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets admin
     *
     * @return bool
     */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
     * Sets admin
     *
     * @param bool $admin admin
     *
     * @return self
     */
    public function setAdmin($admin)
    {
        $this->container['admin'] = $admin;

        return $this;
    }

    /**
     * Gets posts
     *
     * @return \Jalismrs\Stalactite\Client\Data\Model\Post2[]
     */
    public function getPosts()
    {
        return $this->container['posts'];
    }

    /**
     * Sets posts
     *
     * @param \Jalismrs\Stalactite\Client\Data\Model\Post2[] $posts posts
     *
     * @return self
     */
    public function setPosts($posts)
    {

        if ((count($posts) > 0)) {
            throw new \InvalidArgumentException('invalid value for $posts when calling User., number of items must be less than or equal to 0.');
        }
        if ((count($posts) < 1)) {
            throw new \InvalidArgumentException('invalid length for $posts when calling User., number of items must be greater than or equal to 1.');
        }
        $this->container['posts'] = $posts;

        return $this;
    }

    /**
     * Gets leads
     *
     * @return \Jalismrs\Stalactite\Client\Data\Model\Post2[]
     */
    public function getLeads()
    {
        return $this->container['leads'];
    }

    /**
     * Sets leads
     *
     * @param \Jalismrs\Stalactite\Client\Data\Model\Post2[] $leads leads
     *
     * @return self
     */
    public function setLeads($leads)
    {
        $this->container['leads'] = $leads;

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
            throw new \InvalidArgumentException("invalid value for $uid when calling User., must conform to the pattern /[a-z0-9]{64}/.");
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



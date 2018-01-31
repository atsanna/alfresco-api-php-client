<?php
/**
 * Pagination
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfresco\Core
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Alfresco Content Services REST API
 *
 * **Core API**  Provides access to the core features of Alfresco Content Services.
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Alfresco\Core\Model;

use \ArrayAccess;

/**
 * Pagination Class Doc Comment
 *
 * @category    Class
 * @package     Alfresco\Core
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Pagination implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Pagination';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'count' => 'int',
        'has_more_items' => 'bool',
        'total_items' => 'int',
        'skip_count' => 'int',
        'max_items' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'count' => 'int64',
        'has_more_items' => null,
        'total_items' => 'int64',
        'skip_count' => 'int64',
        'max_items' => 'int64'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'count' => 'count',
        'has_more_items' => 'hasMoreItems',
        'total_items' => 'totalItems',
        'skip_count' => 'skipCount',
        'max_items' => 'maxItems'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'count' => 'setCount',
        'has_more_items' => 'setHasMoreItems',
        'total_items' => 'setTotalItems',
        'skip_count' => 'setSkipCount',
        'max_items' => 'setMaxItems'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'count' => 'getCount',
        'has_more_items' => 'getHasMoreItems',
        'total_items' => 'getTotalItems',
        'skip_count' => 'getSkipCount',
        'max_items' => 'getMaxItems'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['has_more_items'] = isset($data['has_more_items']) ? $data['has_more_items'] : null;
        $this->container['total_items'] = isset($data['total_items']) ? $data['total_items'] : null;
        $this->container['skip_count'] = isset($data['skip_count']) ? $data['skip_count'] : null;
        $this->container['max_items'] = isset($data['max_items']) ? $data['max_items'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['count'] === null) {
            $invalid_properties[] = "'count' can't be null";
        }
        if ($this->container['has_more_items'] === null) {
            $invalid_properties[] = "'has_more_items' can't be null";
        }
        if ($this->container['skip_count'] === null) {
            $invalid_properties[] = "'skip_count' can't be null";
        }
        if ($this->container['max_items'] === null) {
            $invalid_properties[] = "'max_items' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['count'] === null) {
            return false;
        }
        if ($this->container['has_more_items'] === null) {
            return false;
        }
        if ($this->container['skip_count'] === null) {
            return false;
        }
        if ($this->container['max_items'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param int $count The number of objects in the entries array.
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets has_more_items
     * @return bool
     */
    public function getHasMoreItems()
    {
        return $this->container['has_more_items'];
    }

    /**
     * Sets has_more_items
     * @param bool $has_more_items A boolean value which is **true** if there are more entities in the collection beyond those in this response. A true value means a request with a larger value for the **skipCount** or the **maxItems** parameter will return more entities.
     * @return $this
     */
    public function setHasMoreItems($has_more_items)
    {
        $this->container['has_more_items'] = $has_more_items;

        return $this;
    }

    /**
     * Gets total_items
     * @return int
     */
    public function getTotalItems()
    {
        return $this->container['total_items'];
    }

    /**
     * Sets total_items
     * @param int $total_items An integer describing the total number of entities in the collection. The API might not be able to determine this value, in which case this property will not be present.
     * @return $this
     */
    public function setTotalItems($total_items)
    {
        $this->container['total_items'] = $total_items;

        return $this;
    }

    /**
     * Gets skip_count
     * @return int
     */
    public function getSkipCount()
    {
        return $this->container['skip_count'];
    }

    /**
     * Sets skip_count
     * @param int $skip_count An integer describing how many entities exist in the collection before those included in this list. If there was no **skipCount** parameter then the  default value is 0.
     * @return $this
     */
    public function setSkipCount($skip_count)
    {
        $this->container['skip_count'] = $skip_count;

        return $this;
    }

    /**
     * Gets max_items
     * @return int
     */
    public function getMaxItems()
    {
        return $this->container['max_items'];
    }

    /**
     * Sets max_items
     * @param int $max_items The value of the **maxItems** parameter used to generate this list. If there was no **maxItems** parameter then the default value is 100.
     * @return $this
     */
    public function setMaxItems($max_items)
    {
        $this->container['max_items'] = $max_items;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Alfresco\Core\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Alfresco\Core\ObjectSerializer::sanitizeForSerialization($this));
    }
}



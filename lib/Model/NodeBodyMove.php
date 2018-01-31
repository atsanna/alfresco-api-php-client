<?php
/**
 * NodeBodyMove
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
 * NodeBodyMove Class Doc Comment
 *
 * @category    Class
 * @package     Alfresco\Core
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NodeBodyMove implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'NodeBodyMove';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'target_parent_id' => 'string',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'target_parent_id' => null,
        'name' => null
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
        'target_parent_id' => 'targetParentId',
        'name' => 'name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'target_parent_id' => 'setTargetParentId',
        'name' => 'setName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'target_parent_id' => 'getTargetParentId',
        'name' => 'getName'
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
        $this->container['target_parent_id'] = isset($data['target_parent_id']) ? $data['target_parent_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['target_parent_id'] === null) {
            $invalid_properties[] = "'target_parent_id' can't be null";
        }
        if (!is_null($this->container['name']) && !preg_match("/^(?!(.*[\\\"\\*\\\\\\>\\<\\?\/\\:\\|]+.*)|(.*[\\.]?.*[\\.]+$)|(.*[ ]+$))/", $this->container['name'])) {
            $invalid_properties[] = "invalid value for 'name', must be conform to the pattern /^(?!(.*[\\\"\\*\\\\\\>\\<\\?\/\\:\\|]+.*)|(.*[\\.]?.*[\\.]+$)|(.*[ ]+$))/.";
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

        if ($this->container['target_parent_id'] === null) {
            return false;
        }
        if (!preg_match("/^(?!(.*[\\\"\\*\\\\\\>\\<\\?\/\\:\\|]+.*)|(.*[\\.]?.*[\\.]+$)|(.*[ ]+$))/", $this->container['name'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets target_parent_id
     * @return string
     */
    public function getTargetParentId()
    {
        return $this->container['target_parent_id'];
    }

    /**
     * Sets target_parent_id
     * @param string $target_parent_id
     * @return $this
     */
    public function setTargetParentId($target_parent_id)
    {
        $this->container['target_parent_id'] = $target_parent_id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The name must not contain spaces or the following special characters: * \" < > \\ / ? : and |. The character . must not be used at the end of the name.
     * @return $this
     */
    public function setName($name)
    {

        if (!is_null($name) && (!preg_match("/^(?!(.*[\\\"\\*\\\\\\>\\<\\?\/\\:\\|]+.*)|(.*[\\.]?.*[\\.]+$)|(.*[ ]+$))/", $name))) {
            throw new \InvalidArgumentException("invalid value for $name when calling NodeBodyMove., must conform to the pattern /^(?!(.*[\\\"\\*\\\\\\>\\<\\?\/\\:\\|]+.*)|(.*[\\.]?.*[\\.]+$)|(.*[ ]+$))/.");
        }

        $this->container['name'] = $name;

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



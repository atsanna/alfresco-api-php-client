<?php
/**
 * NodeBodyUpdate
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfresco
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Alfresco Content Services REST API
 *
 * **API**  Provides access to the features of Alfresco Content Services.
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

namespace Alfresco\Model;

use \ArrayAccess;

/**
 * NodeBodyUpdate Class Doc Comment
 *
 * @category    Class
 * @package     Alfresco
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NodeBodyUpdate implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'NodeBodyUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'node_type' => 'string',
        'aspect_names' => 'string[]',
        'properties' => 'map[string,string]',
        'permissions' => '\Alfresco\Model\PermissionsBodyUpdate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'node_type' => null,
        'aspect_names' => null,
        'properties' => null,
        'permissions' => null
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
        'name' => 'name',
        'node_type' => 'nodeType',
        'aspect_names' => 'aspectNames',
        'properties' => 'properties',
        'permissions' => 'permissions'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'node_type' => 'setNodeType',
        'aspect_names' => 'setAspectNames',
        'properties' => 'setProperties',
        'permissions' => 'setPermissions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'node_type' => 'getNodeType',
        'aspect_names' => 'getAspectNames',
        'properties' => 'getProperties',
        'permissions' => 'getPermissions'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['node_type'] = isset($data['node_type']) ? $data['node_type'] : null;
        $this->container['aspect_names'] = isset($data['aspect_names']) ? $data['aspect_names'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        if (!preg_match("/^(?!(.*[\\\"\\*\\\\\\>\\<\\?\/\\:\\|]+.*)|(.*[\\.]?.*[\\.]+$)|(.*[ ]+$))/", $this->container['name'])) {
            return false;
        }
        return true;
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
            throw new \InvalidArgumentException("invalid value for $name when calling NodeBodyUpdate., must conform to the pattern /^(?!(.*[\\\"\\*\\\\\\>\\<\\?\/\\:\\|]+.*)|(.*[\\.]?.*[\\.]+$)|(.*[ ]+$))/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets node_type
     * @return string
     */
    public function getNodeType()
    {
        return $this->container['node_type'];
    }

    /**
     * Sets node_type
     * @param string $node_type
     * @return $this
     */
    public function setNodeType($node_type)
    {
        $this->container['node_type'] = $node_type;

        return $this;
    }

    /**
     * Gets aspect_names
     * @return string[]
     */
    public function getAspectNames()
    {
        return $this->container['aspect_names'];
    }

    /**
     * Sets aspect_names
     * @param string[] $aspect_names
     * @return $this
     */
    public function setAspectNames($aspect_names)
    {
        $this->container['aspect_names'] = $aspect_names;

        return $this;
    }

    /**
     * Gets properties
     * @return map[string,string]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     * @param map[string,string] $properties
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets permissions
     * @return \Alfresco\Model\PermissionsBodyUpdate
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     * @param \Alfresco\Model\PermissionsBodyUpdate $permissions
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

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
            return json_encode(\Alfresco\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Alfresco\ObjectSerializer::sanitizeForSerialization($this));
    }
}



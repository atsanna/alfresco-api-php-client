<?php
/**
 * PermissionsInfo
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
 * PermissionsInfo Class Doc Comment
 *
 * @category    Class
 * @package     Alfresco
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PermissionsInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PermissionsInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_inheritance_enabled' => 'bool',
        'inherited' => '\Alfresco\Model\PermissionElement[]',
        'locally_set' => '\Alfresco\Model\PermissionElement[]',
        'settable' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_inheritance_enabled' => null,
        'inherited' => null,
        'locally_set' => null,
        'settable' => null
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
        'is_inheritance_enabled' => 'isInheritanceEnabled',
        'inherited' => 'inherited',
        'locally_set' => 'locallySet',
        'settable' => 'settable'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'is_inheritance_enabled' => 'setIsInheritanceEnabled',
        'inherited' => 'setInherited',
        'locally_set' => 'setLocallySet',
        'settable' => 'setSettable'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'is_inheritance_enabled' => 'getIsInheritanceEnabled',
        'inherited' => 'getInherited',
        'locally_set' => 'getLocallySet',
        'settable' => 'getSettable'
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
        $this->container['is_inheritance_enabled'] = isset($data['is_inheritance_enabled']) ? $data['is_inheritance_enabled'] : null;
        $this->container['inherited'] = isset($data['inherited']) ? $data['inherited'] : null;
        $this->container['locally_set'] = isset($data['locally_set']) ? $data['locally_set'] : null;
        $this->container['settable'] = isset($data['settable']) ? $data['settable'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets is_inheritance_enabled
     * @return bool
     */
    public function getIsInheritanceEnabled()
    {
        return $this->container['is_inheritance_enabled'];
    }

    /**
     * Sets is_inheritance_enabled
     * @param bool $is_inheritance_enabled
     * @return $this
     */
    public function setIsInheritanceEnabled($is_inheritance_enabled)
    {
        $this->container['is_inheritance_enabled'] = $is_inheritance_enabled;

        return $this;
    }

    /**
     * Gets inherited
     * @return \Alfresco\Model\PermissionElement[]
     */
    public function getInherited()
    {
        return $this->container['inherited'];
    }

    /**
     * Sets inherited
     * @param \Alfresco\Model\PermissionElement[] $inherited
     * @return $this
     */
    public function setInherited($inherited)
    {
        $this->container['inherited'] = $inherited;

        return $this;
    }

    /**
     * Gets locally_set
     * @return \Alfresco\Model\PermissionElement[]
     */
    public function getLocallySet()
    {
        return $this->container['locally_set'];
    }

    /**
     * Sets locally_set
     * @param \Alfresco\Model\PermissionElement[] $locally_set
     * @return $this
     */
    public function setLocallySet($locally_set)
    {
        $this->container['locally_set'] = $locally_set;

        return $this;
    }

    /**
     * Gets settable
     * @return string[]
     */
    public function getSettable()
    {
        return $this->container['settable'];
    }

    /**
     * Sets settable
     * @param string[] $settable
     * @return $this
     */
    public function setSettable($settable)
    {
        $this->container['settable'] = $settable;

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



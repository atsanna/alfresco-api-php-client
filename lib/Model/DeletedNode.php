<?php
/**
 * DeletedNode
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
 * DeletedNode Class Doc Comment
 *
 * @category    Class
 * @package     Alfresco
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DeletedNode extends Node implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DeletedNode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'archived_by_user' => '\Alfresco\Model\UserInfo',
        'archived_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'archived_by_user' => null,
        'archived_at' => 'date-time'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'archived_by_user' => 'archivedByUser',
        'archived_at' => 'archivedAt'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'archived_by_user' => 'setArchivedByUser',
        'archived_at' => 'setArchivedAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'archived_by_user' => 'getArchivedByUser',
        'archived_at' => 'getArchivedAt'
    ];

    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    public static function getters()
    {
        return parent::getters() + self::$getters;
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
        parent::__construct($data);

        $this->container['archived_by_user'] = isset($data['archived_by_user']) ? $data['archived_by_user'] : null;
        $this->container['archived_at'] = isset($data['archived_at']) ? $data['archived_at'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = parent::listInvalidProperties();

        if ($this->container['archived_by_user'] === null) {
            $invalid_properties[] = "'archived_by_user' can't be null";
        }
        if ($this->container['archived_at'] === null) {
            $invalid_properties[] = "'archived_at' can't be null";
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
        if (!parent::valid()) {
            return false;
        }

        if ($this->container['archived_by_user'] === null) {
            return false;
        }
        if ($this->container['archived_at'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets archived_by_user
     * @return \Alfresco\Model\UserInfo
     */
    public function getArchivedByUser()
    {
        return $this->container['archived_by_user'];
    }

    /**
     * Sets archived_by_user
     * @param \Alfresco\Model\UserInfo $archived_by_user
     * @return $this
     */
    public function setArchivedByUser($archived_by_user)
    {
        $this->container['archived_by_user'] = $archived_by_user;

        return $this;
    }

    /**
     * Gets archived_at
     * @return \DateTime
     */
    public function getArchivedAt()
    {
        return $this->container['archived_at'];
    }

    /**
     * Sets archived_at
     * @param \DateTime $archived_at
     * @return $this
     */
    public function setArchivedAt($archived_at)
    {
        $this->container['archived_at'] = $archived_at;

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



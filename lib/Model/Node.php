<?php
/**
 * Node
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
 * Node Class Doc Comment
 *
 * @category    Class
 * @package     Alfresco\Core
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Node implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Node';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'node_type' => 'string',
        'is_folder' => 'bool',
        'is_file' => 'bool',
        'is_locked' => 'bool',
        'modified_at' => '\DateTime',
        'modified_by_user' => '\Alfresco\Core\Model\UserInfo',
        'created_at' => '\DateTime',
        'created_by_user' => '\Alfresco\Core\Model\UserInfo',
        'parent_id' => 'string',
        'is_link' => 'bool',
        'content' => '\Alfresco\Core\Model\ContentInfo',
        'aspect_names' => 'string[]',
        'properties' => 'object',
        'allowable_operations' => 'string[]',
        'path' => '\Alfresco\Core\Model\PathInfo',
        'permissions' => '\Alfresco\Core\Model\PermissionsInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'node_type' => null,
        'is_folder' => null,
        'is_file' => null,
        'is_locked' => null,
        'modified_at' => 'date-time',
        'modified_by_user' => null,
        'created_at' => 'date-time',
        'created_by_user' => null,
        'parent_id' => null,
        'is_link' => null,
        'content' => null,
        'aspect_names' => null,
        'properties' => null,
        'allowable_operations' => null,
        'path' => null,
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
        'id' => 'id',
        'name' => 'name',
        'node_type' => 'nodeType',
        'is_folder' => 'isFolder',
        'is_file' => 'isFile',
        'is_locked' => 'isLocked',
        'modified_at' => 'modifiedAt',
        'modified_by_user' => 'modifiedByUser',
        'created_at' => 'createdAt',
        'created_by_user' => 'createdByUser',
        'parent_id' => 'parentId',
        'is_link' => 'isLink',
        'content' => 'content',
        'aspect_names' => 'aspectNames',
        'properties' => 'properties',
        'allowable_operations' => 'allowableOperations',
        'path' => 'path',
        'permissions' => 'permissions'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'node_type' => 'setNodeType',
        'is_folder' => 'setIsFolder',
        'is_file' => 'setIsFile',
        'is_locked' => 'setIsLocked',
        'modified_at' => 'setModifiedAt',
        'modified_by_user' => 'setModifiedByUser',
        'created_at' => 'setCreatedAt',
        'created_by_user' => 'setCreatedByUser',
        'parent_id' => 'setParentId',
        'is_link' => 'setIsLink',
        'content' => 'setContent',
        'aspect_names' => 'setAspectNames',
        'properties' => 'setProperties',
        'allowable_operations' => 'setAllowableOperations',
        'path' => 'setPath',
        'permissions' => 'setPermissions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'node_type' => 'getNodeType',
        'is_folder' => 'getIsFolder',
        'is_file' => 'getIsFile',
        'is_locked' => 'getIsLocked',
        'modified_at' => 'getModifiedAt',
        'modified_by_user' => 'getModifiedByUser',
        'created_at' => 'getCreatedAt',
        'created_by_user' => 'getCreatedByUser',
        'parent_id' => 'getParentId',
        'is_link' => 'getIsLink',
        'content' => 'getContent',
        'aspect_names' => 'getAspectNames',
        'properties' => 'getProperties',
        'allowable_operations' => 'getAllowableOperations',
        'path' => 'getPath',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['node_type'] = isset($data['node_type']) ? $data['node_type'] : null;
        $this->container['is_folder'] = isset($data['is_folder']) ? $data['is_folder'] : null;
        $this->container['is_file'] = isset($data['is_file']) ? $data['is_file'] : null;
        $this->container['is_locked'] = isset($data['is_locked']) ? $data['is_locked'] : false;
        $this->container['modified_at'] = isset($data['modified_at']) ? $data['modified_at'] : null;
        $this->container['modified_by_user'] = isset($data['modified_by_user']) ? $data['modified_by_user'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['created_by_user'] = isset($data['created_by_user']) ? $data['created_by_user'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['is_link'] = isset($data['is_link']) ? $data['is_link'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['aspect_names'] = isset($data['aspect_names']) ? $data['aspect_names'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['allowable_operations'] = isset($data['allowable_operations']) ? $data['allowable_operations'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
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

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if (!preg_match("/^(?!(.*[\\\"\\*\\\\\\>\\<\\?\/\\:\\|]+.*)|(.*[\\.]?.*[\\.]+$)|(.*[ ]+$))/", $this->container['name'])) {
            $invalid_properties[] = "invalid value for 'name', must be conform to the pattern /^(?!(.*[\\\"\\*\\\\\\>\\<\\?\/\\:\\|]+.*)|(.*[\\.]?.*[\\.]+$)|(.*[ ]+$))/.";
        }

        if ($this->container['node_type'] === null) {
            $invalid_properties[] = "'node_type' can't be null";
        }
        if ($this->container['is_folder'] === null) {
            $invalid_properties[] = "'is_folder' can't be null";
        }
        if ($this->container['is_file'] === null) {
            $invalid_properties[] = "'is_file' can't be null";
        }
        if ($this->container['modified_at'] === null) {
            $invalid_properties[] = "'modified_at' can't be null";
        }
        if ($this->container['modified_by_user'] === null) {
            $invalid_properties[] = "'modified_by_user' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalid_properties[] = "'created_at' can't be null";
        }
        if ($this->container['created_by_user'] === null) {
            $invalid_properties[] = "'created_by_user' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if (!preg_match("/^(?!(.*[\\\"\\*\\\\\\>\\<\\?\/\\:\\|]+.*)|(.*[\\.]?.*[\\.]+$)|(.*[ ]+$))/", $this->container['name'])) {
            return false;
        }
        if ($this->container['node_type'] === null) {
            return false;
        }
        if ($this->container['is_folder'] === null) {
            return false;
        }
        if ($this->container['is_file'] === null) {
            return false;
        }
        if ($this->container['modified_at'] === null) {
            return false;
        }
        if ($this->container['modified_by_user'] === null) {
            return false;
        }
        if ($this->container['created_at'] === null) {
            return false;
        }
        if ($this->container['created_by_user'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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

        if ((!preg_match("/^(?!(.*[\\\"\\*\\\\\\>\\<\\?\/\\:\\|]+.*)|(.*[\\.]?.*[\\.]+$)|(.*[ ]+$))/", $name))) {
            throw new \InvalidArgumentException("invalid value for $name when calling Node., must conform to the pattern /^(?!(.*[\\\"\\*\\\\\\>\\<\\?\/\\:\\|]+.*)|(.*[\\.]?.*[\\.]+$)|(.*[ ]+$))/.");
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
     * Gets is_folder
     * @return bool
     */
    public function getIsFolder()
    {
        return $this->container['is_folder'];
    }

    /**
     * Sets is_folder
     * @param bool $is_folder
     * @return $this
     */
    public function setIsFolder($is_folder)
    {
        $this->container['is_folder'] = $is_folder;

        return $this;
    }

    /**
     * Gets is_file
     * @return bool
     */
    public function getIsFile()
    {
        return $this->container['is_file'];
    }

    /**
     * Sets is_file
     * @param bool $is_file
     * @return $this
     */
    public function setIsFile($is_file)
    {
        $this->container['is_file'] = $is_file;

        return $this;
    }

    /**
     * Gets is_locked
     * @return bool
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     * @param bool $is_locked
     * @return $this
     */
    public function setIsLocked($is_locked)
    {
        $this->container['is_locked'] = $is_locked;

        return $this;
    }

    /**
     * Gets modified_at
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->container['modified_at'];
    }

    /**
     * Sets modified_at
     * @param \DateTime $modified_at
     * @return $this
     */
    public function setModifiedAt($modified_at)
    {
        $this->container['modified_at'] = $modified_at;

        return $this;
    }

    /**
     * Gets modified_by_user
     * @return \Alfresco\Core\Model\UserInfo
     */
    public function getModifiedByUser()
    {
        return $this->container['modified_by_user'];
    }

    /**
     * Sets modified_by_user
     * @param \Alfresco\Core\Model\UserInfo $modified_by_user
     * @return $this
     */
    public function setModifiedByUser($modified_by_user)
    {
        $this->container['modified_by_user'] = $modified_by_user;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets created_by_user
     * @return \Alfresco\Core\Model\UserInfo
     */
    public function getCreatedByUser()
    {
        return $this->container['created_by_user'];
    }

    /**
     * Sets created_by_user
     * @param \Alfresco\Core\Model\UserInfo $created_by_user
     * @return $this
     */
    public function setCreatedByUser($created_by_user)
    {
        $this->container['created_by_user'] = $created_by_user;

        return $this;
    }

    /**
     * Gets parent_id
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     * @param string $parent_id
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets is_link
     * @return bool
     */
    public function getIsLink()
    {
        return $this->container['is_link'];
    }

    /**
     * Sets is_link
     * @param bool $is_link
     * @return $this
     */
    public function setIsLink($is_link)
    {
        $this->container['is_link'] = $is_link;

        return $this;
    }

    /**
     * Gets content
     * @return \Alfresco\Core\Model\ContentInfo
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     * @param \Alfresco\Core\Model\ContentInfo $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

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
     * @return object
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     * @param object $properties
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets allowable_operations
     * @return string[]
     */
    public function getAllowableOperations()
    {
        return $this->container['allowable_operations'];
    }

    /**
     * Sets allowable_operations
     * @param string[] $allowable_operations
     * @return $this
     */
    public function setAllowableOperations($allowable_operations)
    {
        $this->container['allowable_operations'] = $allowable_operations;

        return $this;
    }

    /**
     * Gets path
     * @return \Alfresco\Core\Model\PathInfo
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param \Alfresco\Core\Model\PathInfo $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets permissions
     * @return \Alfresco\Core\Model\PermissionsInfo
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     * @param \Alfresco\Core\Model\PermissionsInfo $permissions
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
            return json_encode(\Alfresco\Core\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Alfresco\Core\ObjectSerializer::sanitizeForSerialization($this));
    }
}



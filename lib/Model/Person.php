<?php
/**
 * Person
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
 * Person Class Doc Comment
 *
 * @category    Class
 * @package     Alfresco
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Person implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Person';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'description' => 'string',
        'avatar_id' => 'string',
        'email' => 'string',
        'skype_id' => 'string',
        'google_id' => 'string',
        'instant_message_id' => 'string',
        'job_title' => 'string',
        'location' => 'string',
        'company' => '\Alfresco\Model\Company',
        'mobile' => 'string',
        'telephone' => 'string',
        'status_updated_at' => '\DateTime',
        'user_status' => 'string',
        'enabled' => 'bool',
        'email_notifications_enabled' => 'bool',
        'aspect_names' => 'string[]',
        'properties' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'first_name' => null,
        'last_name' => null,
        'description' => null,
        'avatar_id' => null,
        'email' => null,
        'skype_id' => null,
        'google_id' => null,
        'instant_message_id' => null,
        'job_title' => null,
        'location' => null,
        'company' => null,
        'mobile' => null,
        'telephone' => null,
        'status_updated_at' => 'date-time',
        'user_status' => null,
        'enabled' => null,
        'email_notifications_enabled' => null,
        'aspect_names' => null,
        'properties' => null
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
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'description' => 'description',
        'avatar_id' => 'avatarId',
        'email' => 'email',
        'skype_id' => 'skypeId',
        'google_id' => 'googleId',
        'instant_message_id' => 'instantMessageId',
        'job_title' => 'jobTitle',
        'location' => 'location',
        'company' => 'company',
        'mobile' => 'mobile',
        'telephone' => 'telephone',
        'status_updated_at' => 'statusUpdatedAt',
        'user_status' => 'userStatus',
        'enabled' => 'enabled',
        'email_notifications_enabled' => 'emailNotificationsEnabled',
        'aspect_names' => 'aspectNames',
        'properties' => 'properties'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'description' => 'setDescription',
        'avatar_id' => 'setAvatarId',
        'email' => 'setEmail',
        'skype_id' => 'setSkypeId',
        'google_id' => 'setGoogleId',
        'instant_message_id' => 'setInstantMessageId',
        'job_title' => 'setJobTitle',
        'location' => 'setLocation',
        'company' => 'setCompany',
        'mobile' => 'setMobile',
        'telephone' => 'setTelephone',
        'status_updated_at' => 'setStatusUpdatedAt',
        'user_status' => 'setUserStatus',
        'enabled' => 'setEnabled',
        'email_notifications_enabled' => 'setEmailNotificationsEnabled',
        'aspect_names' => 'setAspectNames',
        'properties' => 'setProperties'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'description' => 'getDescription',
        'avatar_id' => 'getAvatarId',
        'email' => 'getEmail',
        'skype_id' => 'getSkypeId',
        'google_id' => 'getGoogleId',
        'instant_message_id' => 'getInstantMessageId',
        'job_title' => 'getJobTitle',
        'location' => 'getLocation',
        'company' => 'getCompany',
        'mobile' => 'getMobile',
        'telephone' => 'getTelephone',
        'status_updated_at' => 'getStatusUpdatedAt',
        'user_status' => 'getUserStatus',
        'enabled' => 'getEnabled',
        'email_notifications_enabled' => 'getEmailNotificationsEnabled',
        'aspect_names' => 'getAspectNames',
        'properties' => 'getProperties'
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
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['avatar_id'] = isset($data['avatar_id']) ? $data['avatar_id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['skype_id'] = isset($data['skype_id']) ? $data['skype_id'] : null;
        $this->container['google_id'] = isset($data['google_id']) ? $data['google_id'] : null;
        $this->container['instant_message_id'] = isset($data['instant_message_id']) ? $data['instant_message_id'] : null;
        $this->container['job_title'] = isset($data['job_title']) ? $data['job_title'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['status_updated_at'] = isset($data['status_updated_at']) ? $data['status_updated_at'] : null;
        $this->container['user_status'] = isset($data['user_status']) ? $data['user_status'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : true;
        $this->container['email_notifications_enabled'] = isset($data['email_notifications_enabled']) ? $data['email_notifications_enabled'] : true;
        $this->container['aspect_names'] = isset($data['aspect_names']) ? $data['aspect_names'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
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
        if ($this->container['first_name'] === null) {
            $invalid_properties[] = "'first_name' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalid_properties[] = "'enabled' can't be null";
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
        if ($this->container['first_name'] === null) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['enabled'] === null) {
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
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets avatar_id
     * @return string
     */
    public function getAvatarId()
    {
        return $this->container['avatar_id'];
    }

    /**
     * Sets avatar_id
     * @param string $avatar_id
     * @return $this
     */
    public function setAvatarId($avatar_id)
    {
        $this->container['avatar_id'] = $avatar_id;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets skype_id
     * @return string
     */
    public function getSkypeId()
    {
        return $this->container['skype_id'];
    }

    /**
     * Sets skype_id
     * @param string $skype_id
     * @return $this
     */
    public function setSkypeId($skype_id)
    {
        $this->container['skype_id'] = $skype_id;

        return $this;
    }

    /**
     * Gets google_id
     * @return string
     */
    public function getGoogleId()
    {
        return $this->container['google_id'];
    }

    /**
     * Sets google_id
     * @param string $google_id
     * @return $this
     */
    public function setGoogleId($google_id)
    {
        $this->container['google_id'] = $google_id;

        return $this;
    }

    /**
     * Gets instant_message_id
     * @return string
     */
    public function getInstantMessageId()
    {
        return $this->container['instant_message_id'];
    }

    /**
     * Sets instant_message_id
     * @param string $instant_message_id
     * @return $this
     */
    public function setInstantMessageId($instant_message_id)
    {
        $this->container['instant_message_id'] = $instant_message_id;

        return $this;
    }

    /**
     * Gets job_title
     * @return string
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     * @param string $job_title
     * @return $this
     */
    public function setJobTitle($job_title)
    {
        $this->container['job_title'] = $job_title;

        return $this;
    }

    /**
     * Gets location
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets company
     * @return \Alfresco\Model\Company
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param \Alfresco\Model\Company $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets mobile
     * @return string
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     * @param string $mobile
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets telephone
     * @return string
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     * @param string $telephone
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets status_updated_at
     * @return \DateTime
     */
    public function getStatusUpdatedAt()
    {
        return $this->container['status_updated_at'];
    }

    /**
     * Sets status_updated_at
     * @param \DateTime $status_updated_at
     * @return $this
     */
    public function setStatusUpdatedAt($status_updated_at)
    {
        $this->container['status_updated_at'] = $status_updated_at;

        return $this;
    }

    /**
     * Gets user_status
     * @return string
     */
    public function getUserStatus()
    {
        return $this->container['user_status'];
    }

    /**
     * Sets user_status
     * @param string $user_status
     * @return $this
     */
    public function setUserStatus($user_status)
    {
        $this->container['user_status'] = $user_status;

        return $this;
    }

    /**
     * Gets enabled
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets email_notifications_enabled
     * @return bool
     */
    public function getEmailNotificationsEnabled()
    {
        return $this->container['email_notifications_enabled'];
    }

    /**
     * Sets email_notifications_enabled
     * @param bool $email_notifications_enabled
     * @return $this
     */
    public function setEmailNotificationsEnabled($email_notifications_enabled)
    {
        $this->container['email_notifications_enabled'] = $email_notifications_enabled;

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



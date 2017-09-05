<?php
/**
 * ManagementEmail
 *
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Company
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Company API
 *
 * ConnectWise Company API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model;

use \ArrayAccess;

/**
 * ManagementEmail Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Company
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManagementEmail implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ManagementEmail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'management_solution' => 'string',
        'identifier' => 'string',
        'email_username' => 'string',
        'email_password' => 'string',
        'server_prefix' => 'string',
        '_info' => '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Metadata'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'management_solution' => 'managementSolution',
        'identifier' => 'identifier',
        'email_username' => 'emailUsername',
        'email_password' => 'emailPassword',
        'server_prefix' => 'serverPrefix',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'management_solution' => 'setManagementSolution',
        'identifier' => 'setIdentifier',
        'email_username' => 'setEmailUsername',
        'email_password' => 'setEmailPassword',
        'server_prefix' => 'setServerPrefix',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'management_solution' => 'getManagementSolution',
        'identifier' => 'getIdentifier',
        'email_username' => 'getEmailUsername',
        'email_password' => 'getEmailPassword',
        'server_prefix' => 'getServerPrefix',
        '_info' => 'getInfo'
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

    const MANAGEMENT_SOLUTION_DOUBLE_CHECK = 'DoubleCheck';
    const MANAGEMENT_SOLUTION_POSTINI = 'Postini';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getManagementSolutionAllowableValues()
    {
        return [
            self::MANAGEMENT_SOLUTION_DOUBLE_CHECK,
            self::MANAGEMENT_SOLUTION_POSTINI,
        ];
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
        $this->container['management_solution'] = isset($data['management_solution']) ? $data['management_solution'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['email_username'] = isset($data['email_username']) ? $data['email_username'] : null;
        $this->container['email_password'] = isset($data['email_password']) ? $data['email_password'] : null;
        $this->container['server_prefix'] = isset($data['server_prefix']) ? $data['server_prefix'] : null;
        $this->container['_info'] = isset($data['_info']) ? $data['_info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ((strlen($this->container['name']) > 30)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 30.";
        }

        if ($this->container['management_solution'] === null) {
            $invalid_properties[] = "'management_solution' can't be null";
        }
        $allowed_values = ["DoubleCheck", "Postini"];
        if (!in_array($this->container['management_solution'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'management_solution', must be one of #{allowed_values}.";
        }

        if ($this->container['identifier'] === null) {
            $invalid_properties[] = "'identifier' can't be null";
        }
        if ((strlen($this->container['identifier']) > 50)) {
            $invalid_properties[] = "invalid value for 'identifier', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['email_username']) && (strlen($this->container['email_username']) > 50)) {
            $invalid_properties[] = "invalid value for 'email_username', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['email_password']) && (strlen($this->container['email_password']) > 50)) {
            $invalid_properties[] = "invalid value for 'email_password', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['server_prefix']) && (strlen($this->container['server_prefix']) > 30)) {
            $invalid_properties[] = "invalid value for 'server_prefix', the character length must be smaller than or equal to 30.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['name'] === null) {
            return false;
        }
        if (strlen($this->container['name']) > 30) {
            return false;
        }
        if ($this->container['management_solution'] === null) {
            return false;
        }
        $allowed_values = ["DoubleCheck", "Postini"];
        if (!in_array($this->container['management_solution'], $allowed_values)) {
            return false;
        }
        if ($this->container['identifier'] === null) {
            return false;
        }
        if (strlen($this->container['identifier']) > 50) {
            return false;
        }
        if (strlen($this->container['email_username']) > 50) {
            return false;
        }
        if (strlen($this->container['email_password']) > 50) {
            return false;
        }
        if (strlen($this->container['server_prefix']) > 30) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
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
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        if ((strlen($name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ManagementEmail., must be smaller than or equal to 30.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets management_solution
     * @return string
     */
    public function getManagementSolution()
    {
        return $this->container['management_solution'];
    }

    /**
     * Sets management_solution
     * @param string $management_solution
     * @return $this
     */
    public function setManagementSolution($management_solution)
    {
        $allowed_values = array('DoubleCheck', 'Postini');
        if ((!in_array($management_solution, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'management_solution', must be one of 'DoubleCheck', 'Postini'");
        }
        $this->container['management_solution'] = $management_solution;

        return $this;
    }

    /**
     * Gets identifier
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     * @param string $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        if ((strlen($identifier) > 50)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling ManagementEmail., must be smaller than or equal to 50.');
        }

        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets email_username
     * @return string
     */
    public function getEmailUsername()
    {
        return $this->container['email_username'];
    }

    /**
     * Sets email_username
     * @param string $email_username
     * @return $this
     */
    public function setEmailUsername($email_username)
    {
        if (!is_null($email_username) && (strlen($email_username) > 50)) {
            throw new \InvalidArgumentException('invalid length for $email_username when calling ManagementEmail., must be smaller than or equal to 50.');
        }

        $this->container['email_username'] = $email_username;

        return $this;
    }

    /**
     * Gets email_password
     * @return string
     */
    public function getEmailPassword()
    {
        return $this->container['email_password'];
    }

    /**
     * Sets email_password
     * @param string $email_password The password field can only be set on initial POST.
     * @return $this
     */
    public function setEmailPassword($email_password)
    {
        if (!is_null($email_password) && (strlen($email_password) > 50)) {
            throw new \InvalidArgumentException('invalid length for $email_password when calling ManagementEmail., must be smaller than or equal to 50.');
        }

        $this->container['email_password'] = $email_password;

        return $this;
    }

    /**
     * Gets server_prefix
     * @return string
     */
    public function getServerPrefix()
    {
        return $this->container['server_prefix'];
    }

    /**
     * Sets server_prefix
     * @param string $server_prefix
     * @return $this
     */
    public function setServerPrefix($server_prefix)
    {
        if (!is_null($server_prefix) && (strlen($server_prefix) > 30)) {
            throw new \InvalidArgumentException('invalid length for $server_prefix when calling ManagementEmail., must be smaller than or equal to 30.');
        }

        $this->container['server_prefix'] = $server_prefix;

        return $this;
    }

    /**
     * Gets _info
     * @return \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Metadata
     */
    public function getInfo()
    {
        return $this->container['_info'];
    }

    /**
     * Sets _info
     * @param \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Metadata $_info Metadata of the entity
     * @return $this
     */
    public function setInfo($_info)
    {
        $this->container['_info'] = $_info;

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
            return json_encode(\Spinen\ConnectWise\Clients\Company\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Spinen\ConnectWise\Clients\Company\ObjectSerializer::sanitizeForSerialization($this));
    }
}



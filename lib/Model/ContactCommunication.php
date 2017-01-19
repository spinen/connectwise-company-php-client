<?php
/**
 * ContactCommunication
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

namespace Spinen\ConnectWise\Clients\Company\Model;

use \ArrayAccess;

/**
 * ContactCommunication Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Company
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ContactCommunication implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ContactCommunication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'contact_id' => 'int',
        'type' => '\Spinen\ConnectWise\Clients\Company\Model\CommunicationTypeReference',
        'value' => 'string',
        'extension' => 'string',
        'default_flag' => 'bool',
        'mobile_guid' => '\Spinen\ConnectWise\Clients\Company\Model\Guid',
        'communication_type' => 'string',
        '_info' => '\Spinen\ConnectWise\Clients\Company\Model\Metadata'
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
        'contact_id' => 'contactId',
        'type' => 'type',
        'value' => 'value',
        'extension' => 'extension',
        'default_flag' => 'defaultFlag',
        'mobile_guid' => 'mobileGuid',
        'communication_type' => 'communicationType',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'contact_id' => 'setContactId',
        'type' => 'setType',
        'value' => 'setValue',
        'extension' => 'setExtension',
        'default_flag' => 'setDefaultFlag',
        'mobile_guid' => 'setMobileGuid',
        'communication_type' => 'setCommunicationType',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'contact_id' => 'getContactId',
        'type' => 'getType',
        'value' => 'getValue',
        'extension' => 'getExtension',
        'default_flag' => 'getDefaultFlag',
        'mobile_guid' => 'getMobileGuid',
        'communication_type' => 'getCommunicationType',
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

    const COMMUNICATION_TYPE_PHONE = 'Phone';
    const COMMUNICATION_TYPE_FAX = 'Fax';
    const COMMUNICATION_TYPE_EMAIL = 'Email';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCommunicationTypeAllowableValues()
    {
        return [
            self::COMMUNICATION_TYPE_PHONE,
            self::COMMUNICATION_TYPE_FAX,
            self::COMMUNICATION_TYPE_EMAIL,
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
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['default_flag'] = isset($data['default_flag']) ? $data['default_flag'] : null;
        $this->container['mobile_guid'] = isset($data['mobile_guid']) ? $data['mobile_guid'] : null;
        $this->container['communication_type'] = isset($data['communication_type']) ? $data['communication_type'] : null;
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
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalid_properties[] = "'value' can't be null";
        }
        if ((strlen($this->container['value']) > 250)) {
            $invalid_properties[] = "invalid value for 'value', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['extension']) && (strlen($this->container['extension']) > 15)) {
            $invalid_properties[] = "invalid value for 'extension', the character length must be smaller than or equal to 15.";
        }

        $allowed_values = ["Phone", "Fax", "Email"];
        if (!in_array($this->container['communication_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'communication_type', must be one of #{allowed_values}.";
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
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['value'] === null) {
            return false;
        }
        if (strlen($this->container['value']) > 250) {
            return false;
        }
        if (strlen($this->container['extension']) > 15) {
            return false;
        }
        $allowed_values = ["Phone", "Fax", "Email"];
        if (!in_array($this->container['communication_type'], $allowed_values)) {
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
     * Gets contact_id
     * @return int
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     * @param int $contact_id
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets type
     * @return \Spinen\ConnectWise\Clients\Company\Model\CommunicationTypeReference
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param \Spinen\ConnectWise\Clients\Company\Model\CommunicationTypeReference $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        if ((strlen($value) > 250)) {
            throw new \InvalidArgumentException('invalid length for $value when calling ContactCommunication., must be smaller than or equal to 250.');
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets extension
     * @return string
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        if (!is_null($extension) && (strlen($extension) > 15)) {
            throw new \InvalidArgumentException('invalid length for $extension when calling ContactCommunication., must be smaller than or equal to 15.');
        }

        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets default_flag
     * @return bool
     */
    public function getDefaultFlag()
    {
        return $this->container['default_flag'];
    }

    /**
     * Sets default_flag
     * @param bool $default_flag
     * @return $this
     */
    public function setDefaultFlag($default_flag)
    {
        $this->container['default_flag'] = $default_flag;

        return $this;
    }

    /**
     * Gets mobile_guid
     * @return \Spinen\ConnectWise\Clients\Company\Model\Guid
     */
    public function getMobileGuid()
    {
        return $this->container['mobile_guid'];
    }

    /**
     * Sets mobile_guid
     * @param \Spinen\ConnectWise\Clients\Company\Model\Guid $mobile_guid
     * @return $this
     */
    public function setMobileGuid($mobile_guid)
    {
        $this->container['mobile_guid'] = $mobile_guid;

        return $this;
    }

    /**
     * Gets communication_type
     * @return string
     */
    public function getCommunicationType()
    {
        return $this->container['communication_type'];
    }

    /**
     * Sets communication_type
     * @param string $communication_type
     * @return $this
     */
    public function setCommunicationType($communication_type)
    {
        $allowed_values = array('Phone', 'Fax', 'Email');
        if (!is_null($communication_type) && (!in_array($communication_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'communication_type', must be one of 'Phone', 'Fax', 'Email'");
        }
        $this->container['communication_type'] = $communication_type;

        return $this;
    }

    /**
     * Gets _info
     * @return \Spinen\ConnectWise\Clients\Company\Model\Metadata
     */
    public function getInfo()
    {
        return $this->container['_info'];
    }

    /**
     * Sets _info
     * @param \Spinen\ConnectWise\Clients\Company\Model\Metadata $_info Metadata of the entity
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



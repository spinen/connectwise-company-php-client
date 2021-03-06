<?php
/**
 * Track
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
 * Track Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Company
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Track implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Track';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'track_id' => 'int',
        'name' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'action_taken' => 'int',
        'action_remaining' => 'int',
        'started_by' => 'string',
        'company' => '\Spinen\ConnectWise\Clients\Company\Model\CompanyReference',
        'contact' => '\Spinen\ConnectWise\Clients\Company\Model\ContactReference',
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
        'track_id' => 'trackId',
        'name' => 'name',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'action_taken' => 'actionTaken',
        'action_remaining' => 'actionRemaining',
        'started_by' => 'startedBy',
        'company' => 'company',
        'contact' => 'contact',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'track_id' => 'setTrackId',
        'name' => 'setName',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'action_taken' => 'setActionTaken',
        'action_remaining' => 'setActionRemaining',
        'started_by' => 'setStartedBy',
        'company' => 'setCompany',
        'contact' => 'setContact',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'track_id' => 'getTrackId',
        'name' => 'getName',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'action_taken' => 'getActionTaken',
        'action_remaining' => 'getActionRemaining',
        'started_by' => 'getStartedBy',
        'company' => 'getCompany',
        'contact' => 'getContact',
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
        $this->container['track_id'] = isset($data['track_id']) ? $data['track_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['action_taken'] = isset($data['action_taken']) ? $data['action_taken'] : null;
        $this->container['action_remaining'] = isset($data['action_remaining']) ? $data['action_remaining'] : null;
        $this->container['started_by'] = isset($data['started_by']) ? $data['started_by'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
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
        if ($this->container['track_id'] === null) {
            $invalid_properties[] = "'track_id' can't be null";
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
        if ($this->container['track_id'] === null) {
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
     * Gets track_id
     * @return int
     */
    public function getTrackId()
    {
        return $this->container['track_id'];
    }

    /**
     * Sets track_id
     * @param int $track_id
     * @return $this
     */
    public function setTrackId($track_id)
    {
        $this->container['track_id'] = $track_id;

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
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets start_date
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param string $start_date
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     * @param string $end_date
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets action_taken
     * @return int
     */
    public function getActionTaken()
    {
        return $this->container['action_taken'];
    }

    /**
     * Sets action_taken
     * @param int $action_taken
     * @return $this
     */
    public function setActionTaken($action_taken)
    {
        $this->container['action_taken'] = $action_taken;

        return $this;
    }

    /**
     * Gets action_remaining
     * @return int
     */
    public function getActionRemaining()
    {
        return $this->container['action_remaining'];
    }

    /**
     * Sets action_remaining
     * @param int $action_remaining
     * @return $this
     */
    public function setActionRemaining($action_remaining)
    {
        $this->container['action_remaining'] = $action_remaining;

        return $this;
    }

    /**
     * Gets started_by
     * @return string
     */
    public function getStartedBy()
    {
        return $this->container['started_by'];
    }

    /**
     * Sets started_by
     * @param string $started_by
     * @return $this
     */
    public function setStartedBy($started_by)
    {
        $this->container['started_by'] = $started_by;

        return $this;
    }

    /**
     * Gets company
     * @return \Spinen\ConnectWise\Clients\Company\Model\CompanyReference
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param \Spinen\ConnectWise\Clients\Company\Model\CompanyReference $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets contact
     * @return \Spinen\ConnectWise\Clients\Company\Model\ContactReference
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     * @param \Spinen\ConnectWise\Clients\Company\Model\ContactReference $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

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



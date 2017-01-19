<?php
/**
 * ConfigurationTypeQuestion
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
 * ConfigurationTypeQuestion Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Company
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConfigurationTypeQuestion implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ConfigurationTypeQuestion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'configuration_type_id' => 'int',
        'field_type' => 'string',
        'entry_type' => 'string',
        'sequence_number' => 'double',
        'question' => 'string',
        'number_of_decimals' => 'int',
        'required_flag' => 'bool',
        'inactive_flag' => 'bool',
        'possible_answers' => 'string[]',
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
        'configuration_type_id' => 'configurationTypeId',
        'field_type' => 'fieldType',
        'entry_type' => 'entryType',
        'sequence_number' => 'sequenceNumber',
        'question' => 'question',
        'number_of_decimals' => 'numberOfDecimals',
        'required_flag' => 'requiredFlag',
        'inactive_flag' => 'inactiveFlag',
        'possible_answers' => 'possibleAnswers',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'configuration_type_id' => 'setConfigurationTypeId',
        'field_type' => 'setFieldType',
        'entry_type' => 'setEntryType',
        'sequence_number' => 'setSequenceNumber',
        'question' => 'setQuestion',
        'number_of_decimals' => 'setNumberOfDecimals',
        'required_flag' => 'setRequiredFlag',
        'inactive_flag' => 'setInactiveFlag',
        'possible_answers' => 'setPossibleAnswers',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'configuration_type_id' => 'getConfigurationTypeId',
        'field_type' => 'getFieldType',
        'entry_type' => 'getEntryType',
        'sequence_number' => 'getSequenceNumber',
        'question' => 'getQuestion',
        'number_of_decimals' => 'getNumberOfDecimals',
        'required_flag' => 'getRequiredFlag',
        'inactive_flag' => 'getInactiveFlag',
        'possible_answers' => 'getPossibleAnswers',
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

    const FIELD_TYPE_TEXT = 'Text';
    const FIELD_TYPE_BUTTON = 'Button';
    const FIELD_TYPE_CURRENCY = 'Currency';
    const FIELD_TYPE_DATE = 'Date';
    const FIELD_TYPE_HYPERLINK = 'Hyperlink';
    const FIELD_TYPE_IP_ADDRESS = 'IPAddress';
    const FIELD_TYPE_CHECKBOX = 'Checkbox';
    const FIELD_TYPE_NUMBER = 'Number';
    const FIELD_TYPE_PERCENT = 'Percent';
    const FIELD_TYPE_TEXT_AREA = 'TextArea';
    const FIELD_TYPE_PASSWORD = 'Password';
    const ENTRY_TYPE_ENTRY_FIELD = 'EntryField';
    const ENTRY_TYPE_LIST = 'List';
    const ENTRY_TYPE_OPTION = 'Option';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFieldTypeAllowableValues()
    {
        return [
            self::FIELD_TYPE_TEXT,
            self::FIELD_TYPE_BUTTON,
            self::FIELD_TYPE_CURRENCY,
            self::FIELD_TYPE_DATE,
            self::FIELD_TYPE_HYPERLINK,
            self::FIELD_TYPE_IP_ADDRESS,
            self::FIELD_TYPE_CHECKBOX,
            self::FIELD_TYPE_NUMBER,
            self::FIELD_TYPE_PERCENT,
            self::FIELD_TYPE_TEXT_AREA,
            self::FIELD_TYPE_PASSWORD,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getEntryTypeAllowableValues()
    {
        return [
            self::ENTRY_TYPE_ENTRY_FIELD,
            self::ENTRY_TYPE_LIST,
            self::ENTRY_TYPE_OPTION,
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
        $this->container['configuration_type_id'] = isset($data['configuration_type_id']) ? $data['configuration_type_id'] : null;
        $this->container['field_type'] = isset($data['field_type']) ? $data['field_type'] : null;
        $this->container['entry_type'] = isset($data['entry_type']) ? $data['entry_type'] : null;
        $this->container['sequence_number'] = isset($data['sequence_number']) ? $data['sequence_number'] : null;
        $this->container['question'] = isset($data['question']) ? $data['question'] : null;
        $this->container['number_of_decimals'] = isset($data['number_of_decimals']) ? $data['number_of_decimals'] : null;
        $this->container['required_flag'] = isset($data['required_flag']) ? $data['required_flag'] : null;
        $this->container['inactive_flag'] = isset($data['inactive_flag']) ? $data['inactive_flag'] : null;
        $this->container['possible_answers'] = isset($data['possible_answers']) ? $data['possible_answers'] : null;
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
        if ($this->container['field_type'] === null) {
            $invalid_properties[] = "'field_type' can't be null";
        }
        $allowed_values = ["Text", "Button", "Currency", "Date", "Hyperlink", "IPAddress", "Checkbox", "Number", "Percent", "TextArea", "Password"];
        if (!in_array($this->container['field_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'field_type', must be one of #{allowed_values}.";
        }

        if ($this->container['entry_type'] === null) {
            $invalid_properties[] = "'entry_type' can't be null";
        }
        $allowed_values = ["EntryField", "List", "Option"];
        if (!in_array($this->container['entry_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'entry_type', must be one of #{allowed_values}.";
        }

        if ($this->container['question'] === null) {
            $invalid_properties[] = "'question' can't be null";
        }
        if ((strlen($this->container['question']) > 1000)) {
            $invalid_properties[] = "invalid value for 'question', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['number_of_decimals']) && ($this->container['number_of_decimals'] > 5)) {
            $invalid_properties[] = "invalid value for 'number_of_decimals', must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['number_of_decimals']) && ($this->container['number_of_decimals'] < 0)) {
            $invalid_properties[] = "invalid value for 'number_of_decimals', must be bigger than or equal to 0.";
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
        if ($this->container['field_type'] === null) {
            return false;
        }
        $allowed_values = ["Text", "Button", "Currency", "Date", "Hyperlink", "IPAddress", "Checkbox", "Number", "Percent", "TextArea", "Password"];
        if (!in_array($this->container['field_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['entry_type'] === null) {
            return false;
        }
        $allowed_values = ["EntryField", "List", "Option"];
        if (!in_array($this->container['entry_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['question'] === null) {
            return false;
        }
        if (strlen($this->container['question']) > 1000) {
            return false;
        }
        if ($this->container['number_of_decimals'] > 5) {
            return false;
        }
        if ($this->container['number_of_decimals'] < 0) {
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
     * Gets configuration_type_id
     * @return int
     */
    public function getConfigurationTypeId()
    {
        return $this->container['configuration_type_id'];
    }

    /**
     * Sets configuration_type_id
     * @param int $configuration_type_id
     * @return $this
     */
    public function setConfigurationTypeId($configuration_type_id)
    {
        $this->container['configuration_type_id'] = $configuration_type_id;

        return $this;
    }

    /**
     * Gets field_type
     * @return string
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     * @param string $field_type
     * @return $this
     */
    public function setFieldType($field_type)
    {
        $allowed_values = array('Text', 'Button', 'Currency', 'Date', 'Hyperlink', 'IPAddress', 'Checkbox', 'Number', 'Percent', 'TextArea', 'Password');
        if ((!in_array($field_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'field_type', must be one of 'Text', 'Button', 'Currency', 'Date', 'Hyperlink', 'IPAddress', 'Checkbox', 'Number', 'Percent', 'TextArea', 'Password'");
        }
        $this->container['field_type'] = $field_type;

        return $this;
    }

    /**
     * Gets entry_type
     * @return string
     */
    public function getEntryType()
    {
        return $this->container['entry_type'];
    }

    /**
     * Sets entry_type
     * @param string $entry_type
     * @return $this
     */
    public function setEntryType($entry_type)
    {
        $allowed_values = array('EntryField', 'List', 'Option');
        if ((!in_array($entry_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'entry_type', must be one of 'EntryField', 'List', 'Option'");
        }
        $this->container['entry_type'] = $entry_type;

        return $this;
    }

    /**
     * Gets sequence_number
     * @return double
     */
    public function getSequenceNumber()
    {
        return $this->container['sequence_number'];
    }

    /**
     * Sets sequence_number
     * @param double $sequence_number
     * @return $this
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

        return $this;
    }

    /**
     * Gets question
     * @return string
     */
    public function getQuestion()
    {
        return $this->container['question'];
    }

    /**
     * Sets question
     * @param string $question
     * @return $this
     */
    public function setQuestion($question)
    {
        if ((strlen($question) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $question when calling ConfigurationTypeQuestion., must be smaller than or equal to 1000.');
        }

        $this->container['question'] = $question;

        return $this;
    }

    /**
     * Gets number_of_decimals
     * @return int
     */
    public function getNumberOfDecimals()
    {
        return $this->container['number_of_decimals'];
    }

    /**
     * Sets number_of_decimals
     * @param int $number_of_decimals
     * @return $this
     */
    public function setNumberOfDecimals($number_of_decimals)
    {

        if (!is_null($number_of_decimals) && ($number_of_decimals > 5)) {
            throw new \InvalidArgumentException('invalid value for $number_of_decimals when calling ConfigurationTypeQuestion., must be smaller than or equal to 5.');
        }
        if (!is_null($number_of_decimals) && ($number_of_decimals < 0)) {
            throw new \InvalidArgumentException('invalid value for $number_of_decimals when calling ConfigurationTypeQuestion., must be bigger than or equal to 0.');
        }

        $this->container['number_of_decimals'] = $number_of_decimals;

        return $this;
    }

    /**
     * Gets required_flag
     * @return bool
     */
    public function getRequiredFlag()
    {
        return $this->container['required_flag'];
    }

    /**
     * Sets required_flag
     * @param bool $required_flag
     * @return $this
     */
    public function setRequiredFlag($required_flag)
    {
        $this->container['required_flag'] = $required_flag;

        return $this;
    }

    /**
     * Gets inactive_flag
     * @return bool
     */
    public function getInactiveFlag()
    {
        return $this->container['inactive_flag'];
    }

    /**
     * Sets inactive_flag
     * @param bool $inactive_flag
     * @return $this
     */
    public function setInactiveFlag($inactive_flag)
    {
        $this->container['inactive_flag'] = $inactive_flag;

        return $this;
    }

    /**
     * Gets possible_answers
     * @return string[]
     */
    public function getPossibleAnswers()
    {
        return $this->container['possible_answers'];
    }

    /**
     * Sets possible_answers
     * @param string[] $possible_answers
     * @return $this
     */
    public function setPossibleAnswers($possible_answers)
    {
        $this->container['possible_answers'] = $possible_answers;

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



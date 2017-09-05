<?php
/**
 * CompanySite
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
 * CompanySite Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Company
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CompanySite implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CompanySite';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'country' => '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CountryReference',
        'phone_number' => 'string',
        'fax_number' => 'string',
        'tax_code_id' => 'int',
        'expense_reimbursement' => 'double',
        'primary_address_flag' => 'bool',
        'default_shipping_flag' => 'bool',
        'default_billing_flag' => 'bool',
        'default_mailing_flag' => 'bool',
        'calendar' => '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CalendarReference',
        'time_zone' => '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TimeZoneReference',
        'company' => '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyReference',
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
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'city' => 'city',
        'state' => 'state',
        'zip' => 'zip',
        'country' => 'country',
        'phone_number' => 'phoneNumber',
        'fax_number' => 'faxNumber',
        'tax_code_id' => 'taxCodeId',
        'expense_reimbursement' => 'expenseReimbursement',
        'primary_address_flag' => 'primaryAddressFlag',
        'default_shipping_flag' => 'defaultShippingFlag',
        'default_billing_flag' => 'defaultBillingFlag',
        'default_mailing_flag' => 'defaultMailingFlag',
        'calendar' => 'calendar',
        'time_zone' => 'timeZone',
        'company' => 'company',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'city' => 'setCity',
        'state' => 'setState',
        'zip' => 'setZip',
        'country' => 'setCountry',
        'phone_number' => 'setPhoneNumber',
        'fax_number' => 'setFaxNumber',
        'tax_code_id' => 'setTaxCodeId',
        'expense_reimbursement' => 'setExpenseReimbursement',
        'primary_address_flag' => 'setPrimaryAddressFlag',
        'default_shipping_flag' => 'setDefaultShippingFlag',
        'default_billing_flag' => 'setDefaultBillingFlag',
        'default_mailing_flag' => 'setDefaultMailingFlag',
        'calendar' => 'setCalendar',
        'time_zone' => 'setTimeZone',
        'company' => 'setCompany',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'city' => 'getCity',
        'state' => 'getState',
        'zip' => 'getZip',
        'country' => 'getCountry',
        'phone_number' => 'getPhoneNumber',
        'fax_number' => 'getFaxNumber',
        'tax_code_id' => 'getTaxCodeId',
        'expense_reimbursement' => 'getExpenseReimbursement',
        'primary_address_flag' => 'getPrimaryAddressFlag',
        'default_shipping_flag' => 'getDefaultShippingFlag',
        'default_billing_flag' => 'getDefaultBillingFlag',
        'default_mailing_flag' => 'getDefaultMailingFlag',
        'calendar' => 'getCalendar',
        'time_zone' => 'getTimeZone',
        'company' => 'getCompany',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address_line1'] = isset($data['address_line1']) ? $data['address_line1'] : null;
        $this->container['address_line2'] = isset($data['address_line2']) ? $data['address_line2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['fax_number'] = isset($data['fax_number']) ? $data['fax_number'] : null;
        $this->container['tax_code_id'] = isset($data['tax_code_id']) ? $data['tax_code_id'] : null;
        $this->container['expense_reimbursement'] = isset($data['expense_reimbursement']) ? $data['expense_reimbursement'] : null;
        $this->container['primary_address_flag'] = isset($data['primary_address_flag']) ? $data['primary_address_flag'] : null;
        $this->container['default_shipping_flag'] = isset($data['default_shipping_flag']) ? $data['default_shipping_flag'] : null;
        $this->container['default_billing_flag'] = isset($data['default_billing_flag']) ? $data['default_billing_flag'] : null;
        $this->container['default_mailing_flag'] = isset($data['default_mailing_flag']) ? $data['default_mailing_flag'] : null;
        $this->container['calendar'] = isset($data['calendar']) ? $data['calendar'] : null;
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
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
        if ((strlen($this->container['name']) > 50)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['address_line1']) && (strlen($this->container['address_line1']) > 50)) {
            $invalid_properties[] = "invalid value for 'address_line1', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['address_line2']) && (strlen($this->container['address_line2']) > 50)) {
            $invalid_properties[] = "invalid value for 'address_line2', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['city']) && (strlen($this->container['city']) > 50)) {
            $invalid_properties[] = "invalid value for 'city', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['state']) && (strlen($this->container['state']) > 50)) {
            $invalid_properties[] = "invalid value for 'state', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['zip']) && (strlen($this->container['zip']) > 12)) {
            $invalid_properties[] = "invalid value for 'zip', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['phone_number']) && (strlen($this->container['phone_number']) > 30)) {
            $invalid_properties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['fax_number']) && (strlen($this->container['fax_number']) > 30)) {
            $invalid_properties[] = "invalid value for 'fax_number', the character length must be smaller than or equal to 30.";
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
        if (strlen($this->container['name']) > 50) {
            return false;
        }
        if (strlen($this->container['address_line1']) > 50) {
            return false;
        }
        if (strlen($this->container['address_line2']) > 50) {
            return false;
        }
        if (strlen($this->container['city']) > 50) {
            return false;
        }
        if (strlen($this->container['state']) > 50) {
            return false;
        }
        if (strlen($this->container['zip']) > 12) {
            return false;
        }
        if (strlen($this->container['phone_number']) > 30) {
            return false;
        }
        if (strlen($this->container['fax_number']) > 30) {
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
        if ((strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CompanySite., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address_line1
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     * @param string $address_line1
     * @return $this
     */
    public function setAddressLine1($address_line1)
    {
        if (!is_null($address_line1) && (strlen($address_line1) > 50)) {
            throw new \InvalidArgumentException('invalid length for $address_line1 when calling CompanySite., must be smaller than or equal to 50.');
        }

        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     * @param string $address_line2
     * @return $this
     */
    public function setAddressLine2($address_line2)
    {
        if (!is_null($address_line2) && (strlen($address_line2) > 50)) {
            throw new \InvalidArgumentException('invalid length for $address_line2 when calling CompanySite., must be smaller than or equal to 50.');
        }

        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        if (!is_null($city) && (strlen($city) > 50)) {
            throw new \InvalidArgumentException('invalid length for $city when calling CompanySite., must be smaller than or equal to 50.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        if (!is_null($state) && (strlen($state) > 50)) {
            throw new \InvalidArgumentException('invalid length for $state when calling CompanySite., must be smaller than or equal to 50.');
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets zip
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     * @param string $zip
     * @return $this
     */
    public function setZip($zip)
    {
        if (!is_null($zip) && (strlen($zip) > 12)) {
            throw new \InvalidArgumentException('invalid length for $zip when calling CompanySite., must be smaller than or equal to 12.');
        }

        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets country
     * @return \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CountryReference
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CountryReference $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets phone_number
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     * @param string $phone_number
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        if (!is_null($phone_number) && (strlen($phone_number) > 30)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling CompanySite., must be smaller than or equal to 30.');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets fax_number
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->container['fax_number'];
    }

    /**
     * Sets fax_number
     * @param string $fax_number
     * @return $this
     */
    public function setFaxNumber($fax_number)
    {
        if (!is_null($fax_number) && (strlen($fax_number) > 30)) {
            throw new \InvalidArgumentException('invalid length for $fax_number when calling CompanySite., must be smaller than or equal to 30.');
        }

        $this->container['fax_number'] = $fax_number;

        return $this;
    }

    /**
     * Gets tax_code_id
     * @return int
     */
    public function getTaxCodeId()
    {
        return $this->container['tax_code_id'];
    }

    /**
     * Sets tax_code_id
     * @param int $tax_code_id
     * @return $this
     */
    public function setTaxCodeId($tax_code_id)
    {
        $this->container['tax_code_id'] = $tax_code_id;

        return $this;
    }

    /**
     * Gets expense_reimbursement
     * @return double
     */
    public function getExpenseReimbursement()
    {
        return $this->container['expense_reimbursement'];
    }

    /**
     * Sets expense_reimbursement
     * @param double $expense_reimbursement
     * @return $this
     */
    public function setExpenseReimbursement($expense_reimbursement)
    {
        $this->container['expense_reimbursement'] = $expense_reimbursement;

        return $this;
    }

    /**
     * Gets primary_address_flag
     * @return bool
     */
    public function getPrimaryAddressFlag()
    {
        return $this->container['primary_address_flag'];
    }

    /**
     * Sets primary_address_flag
     * @param bool $primary_address_flag
     * @return $this
     */
    public function setPrimaryAddressFlag($primary_address_flag)
    {
        $this->container['primary_address_flag'] = $primary_address_flag;

        return $this;
    }

    /**
     * Gets default_shipping_flag
     * @return bool
     */
    public function getDefaultShippingFlag()
    {
        return $this->container['default_shipping_flag'];
    }

    /**
     * Sets default_shipping_flag
     * @param bool $default_shipping_flag
     * @return $this
     */
    public function setDefaultShippingFlag($default_shipping_flag)
    {
        $this->container['default_shipping_flag'] = $default_shipping_flag;

        return $this;
    }

    /**
     * Gets default_billing_flag
     * @return bool
     */
    public function getDefaultBillingFlag()
    {
        return $this->container['default_billing_flag'];
    }

    /**
     * Sets default_billing_flag
     * @param bool $default_billing_flag
     * @return $this
     */
    public function setDefaultBillingFlag($default_billing_flag)
    {
        $this->container['default_billing_flag'] = $default_billing_flag;

        return $this;
    }

    /**
     * Gets default_mailing_flag
     * @return bool
     */
    public function getDefaultMailingFlag()
    {
        return $this->container['default_mailing_flag'];
    }

    /**
     * Sets default_mailing_flag
     * @param bool $default_mailing_flag
     * @return $this
     */
    public function setDefaultMailingFlag($default_mailing_flag)
    {
        $this->container['default_mailing_flag'] = $default_mailing_flag;

        return $this;
    }

    /**
     * Gets calendar
     * @return \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CalendarReference
     */
    public function getCalendar()
    {
        return $this->container['calendar'];
    }

    /**
     * Sets calendar
     * @param \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CalendarReference $calendar
     * @return $this
     */
    public function setCalendar($calendar)
    {
        $this->container['calendar'] = $calendar;

        return $this;
    }

    /**
     * Gets time_zone
     * @return \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TimeZoneReference
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     * @param \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TimeZoneReference $time_zone
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
    }

    /**
     * Gets company
     * @return \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyReference
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyReference $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

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



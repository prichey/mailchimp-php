<?php
/**
 * SignupSourceSegment
 *
 * PHP version 5
 *
 * @category Class
 * @package  MailchimpMinimal
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mailchimp Marketing API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.0.9
 * Contact: apihelp@mailchimp.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MailchimpMinimal\Model;

use \ArrayAccess;
use \MailchimpMinimal\ObjectSerializer;

/**
 * SignupSourceSegment Class Doc Comment
 *
 * @category Class
 * @description An individual segment condition
 * @package  MailchimpMinimal
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SignupSourceSegment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SignupSourceSegment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'condition_type' => 'string',
        'field' => 'string',
        'op' => 'string',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'condition_type' => null,
        'field' => null,
        'op' => null,
        'value' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'condition_type' => 'condition_type',
        'field' => 'field',
        'op' => 'op',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'condition_type' => 'setConditionType',
        'field' => 'setField',
        'op' => 'setOp',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'condition_type' => 'getConditionType',
        'field' => 'getField',
        'op' => 'getOp',
        'value' => 'getValue'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const CONDITION_TYPE_SIGNUP_SOURCE = 'SignupSource';
    const FIELD_SOURCE = 'source';
    const OP_IS = 'source_is';
    const OP_NOT = 'source_not';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConditionTypeAllowableValues()
    {
        return [
            self::CONDITION_TYPE_SIGNUP_SOURCE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFieldAllowableValues()
    {
        return [
            self::FIELD_SOURCE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOpAllowableValues()
    {
        return [
            self::OP_IS,
            self::OP_NOT,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['condition_type'] = isset($data['condition_type']) ? $data['condition_type'] : null;
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['op'] = isset($data['op']) ? $data['op'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['condition_type'] === null) {
            $invalidProperties[] = "'condition_type' can't be null";
        }
        $allowedValues = $this->getConditionTypeAllowableValues();
        if (!is_null($this->container['condition_type']) && !in_array($this->container['condition_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'condition_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['field'] === null) {
            $invalidProperties[] = "'field' can't be null";
        }
        $allowedValues = $this->getFieldAllowableValues();
        if (!is_null($this->container['field']) && !in_array($this->container['field'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'field', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['op'] === null) {
            $invalidProperties[] = "'op' can't be null";
        }
        $allowedValues = $this->getOpAllowableValues();
        if (!is_null($this->container['op']) && !in_array($this->container['op'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'op', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets condition_type
     *
     * @return string
     */
    public function getConditionType()
    {
        return $this->container['condition_type'];
    }

    /**
     * Sets condition_type
     *
     * @param string $condition_type condition_type
     *
     * @return $this
     */
    public function setConditionType($condition_type)
    {
        $allowedValues = $this->getConditionTypeAllowableValues();
        if (!in_array($condition_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'condition_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['condition_type'] = $condition_type;

        return $this;
    }

    /**
     * Gets field
     *
     * @return string
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param string $field field
     *
     * @return $this
     */
    public function setField($field)
    {
        $allowedValues = $this->getFieldAllowableValues();
        if (!in_array($field, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'field', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['field'] = $field;

        return $this;
    }

    /**
     * Gets op
     *
     * @return string
     */
    public function getOp()
    {
        return $this->container['op'];
    }

    /**
     * Sets op
     *
     * @param string $op Whether the member's signup source was/was not a particular value.
     *
     * @return $this
     */
    public function setOp($op)
    {
        $allowedValues = $this->getOpAllowableValues();
        if (!in_array($op, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'op', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['op'] = $op;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value The signup source.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



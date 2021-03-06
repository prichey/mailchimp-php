<?php
/**
 * AutomationTrigger
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
 * AutomationTrigger Class Doc Comment
 *
 * @category Class
 * @description Available triggers for Automation workflows.
 * @package  MailchimpMinimal
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AutomationTrigger implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'workflow_type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AutomationTrigger';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'workflow_type' => 'string',
        'workflow_title' => 'string',
        'runtime' => '\MailchimpMinimal\Model\AutomationWorkflowRuntimeSettings',
        'workflow_emails_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'workflow_type' => null,
        'workflow_title' => null,
        'runtime' => null,
        'workflow_emails_count' => null
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
        'workflow_type' => 'workflow_type',
        'workflow_title' => 'workflow_title',
        'runtime' => 'runtime',
        'workflow_emails_count' => 'workflow_emails_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'workflow_type' => 'setWorkflowType',
        'workflow_title' => 'setWorkflowTitle',
        'runtime' => 'setRuntime',
        'workflow_emails_count' => 'setWorkflowEmailsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'workflow_type' => 'getWorkflowType',
        'workflow_title' => 'getWorkflowTitle',
        'runtime' => 'getRuntime',
        'workflow_emails_count' => 'getWorkflowEmailsCount'
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

    const WORKFLOW_TYPE_ABANDONED_BROWSE = 'abandonedBrowse';
    const WORKFLOW_TYPE_ABANDONED_CART = 'abandonedCart';
    const WORKFLOW_TYPE_API = 'api';
    const WORKFLOW_TYPE_BEST_CUSTOMERS = 'bestCustomers';
    const WORKFLOW_TYPE_CATEGORY_FOLLOWUP = 'categoryFollowup';
    const WORKFLOW_TYPE_DATE_ADDED = 'dateAdded';
    const WORKFLOW_TYPE_EMAIL_FOLLOWUP = 'emailFollowup';
    const WORKFLOW_TYPE_EMAIL_SERIES = 'emailSeries';
    const WORKFLOW_TYPE_GROUP_ADD = 'groupAdd';
    const WORKFLOW_TYPE_GROUP_REMOVE = 'groupRemove';
    const WORKFLOW_TYPE_MANDRILL = 'mandrill';
    const WORKFLOW_TYPE_PRODUCT_FOLLOWUP = 'productFollowup';
    const WORKFLOW_TYPE_PURCHASE_FOLLOWUP = 'purchaseFollowup';
    const WORKFLOW_TYPE_RECURRING_EVENT = 'recurringEvent';
    const WORKFLOW_TYPE_SPECIAL_EVENT = 'specialEvent';
    const WORKFLOW_TYPE_VISIT_URL = 'visitUrl';
    const WORKFLOW_TYPE_WELCOME_SERIES = 'welcomeSeries';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWorkflowTypeAllowableValues()
    {
        return [
            self::WORKFLOW_TYPE_ABANDONED_BROWSE,
            self::WORKFLOW_TYPE_ABANDONED_CART,
            self::WORKFLOW_TYPE_API,
            self::WORKFLOW_TYPE_BEST_CUSTOMERS,
            self::WORKFLOW_TYPE_CATEGORY_FOLLOWUP,
            self::WORKFLOW_TYPE_DATE_ADDED,
            self::WORKFLOW_TYPE_EMAIL_FOLLOWUP,
            self::WORKFLOW_TYPE_EMAIL_SERIES,
            self::WORKFLOW_TYPE_GROUP_ADD,
            self::WORKFLOW_TYPE_GROUP_REMOVE,
            self::WORKFLOW_TYPE_MANDRILL,
            self::WORKFLOW_TYPE_PRODUCT_FOLLOWUP,
            self::WORKFLOW_TYPE_PURCHASE_FOLLOWUP,
            self::WORKFLOW_TYPE_RECURRING_EVENT,
            self::WORKFLOW_TYPE_SPECIAL_EVENT,
            self::WORKFLOW_TYPE_VISIT_URL,
            self::WORKFLOW_TYPE_WELCOME_SERIES,
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
        $this->container['workflow_type'] = isset($data['workflow_type']) ? $data['workflow_type'] : null;
        $this->container['workflow_title'] = isset($data['workflow_title']) ? $data['workflow_title'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['workflow_emails_count'] = isset($data['workflow_emails_count']) ? $data['workflow_emails_count'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('workflow_type', self::$attributeMap, true);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['workflow_type'] === null) {
            $invalidProperties[] = "'workflow_type' can't be null";
        }
        $allowedValues = $this->getWorkflowTypeAllowableValues();
        if (!is_null($this->container['workflow_type']) && !in_array($this->container['workflow_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'workflow_type', must be one of '%s'",
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
     * Gets workflow_type
     *
     * @return string
     */
    public function getWorkflowType()
    {
        return $this->container['workflow_type'];
    }

    /**
     * Sets workflow_type
     *
     * @param string $workflow_type The type of Automation workflow.
     *
     * @return $this
     */
    public function setWorkflowType($workflow_type)
    {
        $allowedValues = $this->getWorkflowTypeAllowableValues();
        if (!in_array($workflow_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'workflow_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['workflow_type'] = $workflow_type;

        return $this;
    }

    /**
     * Gets workflow_title
     *
     * @return string
     */
    public function getWorkflowTitle()
    {
        return $this->container['workflow_title'];
    }

    /**
     * Sets workflow_title
     *
     * @param string $workflow_title The title of the workflow type.
     *
     * @return $this
     */
    public function setWorkflowTitle($workflow_title)
    {
        $this->container['workflow_title'] = $workflow_title;

        return $this;
    }

    /**
     * Gets runtime
     *
     * @return \MailchimpMinimal\Model\AutomationWorkflowRuntimeSettings
     */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
     * Sets runtime
     *
     * @param \MailchimpMinimal\Model\AutomationWorkflowRuntimeSettings $runtime runtime
     *
     * @return $this
     */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;

        return $this;
    }

    /**
     * Gets workflow_emails_count
     *
     * @return int
     */
    public function getWorkflowEmailsCount()
    {
        return $this->container['workflow_emails_count'];
    }

    /**
     * Sets workflow_emails_count
     *
     * @param int $workflow_emails_count The number of emails in the Automation workflow.
     *
     * @return $this
     */
    public function setWorkflowEmailsCount($workflow_emails_count)
    {
        $this->container['workflow_emails_count'] = $workflow_emails_count;

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



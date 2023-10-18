<?php
/**
 * SubscriptionDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CloudPap Console API
 *
 * CloudPap Console API
 *
 * OpenAPI spec version: v1
 * Contact: info@cloudpap.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.33
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * SubscriptionDetail Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'url' => 'string',
        'plan' => '\Swagger\Client\Model\Plan',
        'customer' => 'string',
        'trial_end' => '\DateTime',
        'start_date' => '\DateTime',
        'cancel_date' => '\DateTime',
        'ended_at' => '\DateTime',
        'state' => 'string',
        'reference' => 'string',
        'updateable_buckets' => 'string',
        'meta' => 'object',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'url' => 'uri',
        'plan' => null,
        'customer' => 'uri',
        'trial_end' => 'date',
        'start_date' => 'date',
        'cancel_date' => 'date',
        'ended_at' => 'date',
        'state' => null,
        'reference' => null,
        'updateable_buckets' => null,
        'meta' => null,
        'description' => null
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
        'id' => 'id',
        'url' => 'url',
        'plan' => 'plan',
        'customer' => 'customer',
        'trial_end' => 'trial_end',
        'start_date' => 'start_date',
        'cancel_date' => 'cancel_date',
        'ended_at' => 'ended_at',
        'state' => 'state',
        'reference' => 'reference',
        'updateable_buckets' => 'updateable_buckets',
        'meta' => 'meta',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'url' => 'setUrl',
        'plan' => 'setPlan',
        'customer' => 'setCustomer',
        'trial_end' => 'setTrialEnd',
        'start_date' => 'setStartDate',
        'cancel_date' => 'setCancelDate',
        'ended_at' => 'setEndedAt',
        'state' => 'setState',
        'reference' => 'setReference',
        'updateable_buckets' => 'setUpdateableBuckets',
        'meta' => 'setMeta',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'url' => 'getUrl',
        'plan' => 'getPlan',
        'customer' => 'getCustomer',
        'trial_end' => 'getTrialEnd',
        'start_date' => 'getStartDate',
        'cancel_date' => 'getCancelDate',
        'ended_at' => 'getEndedAt',
        'state' => 'getState',
        'reference' => 'getReference',
        'updateable_buckets' => 'getUpdateableBuckets',
        'meta' => 'getMeta',
        'description' => 'getDescription'
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

    const STATE_ACTIVE = 'active';
    const STATE_INACTIVE = 'inactive';
    const STATE_CANCELED = 'canceled';
    const STATE_ENDED = 'ended';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE,
            self::STATE_INACTIVE,
            self::STATE_CANCELED,
            self::STATE_ENDED,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['plan'] = isset($data['plan']) ? $data['plan'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['trial_end'] = isset($data['trial_end']) ? $data['trial_end'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['cancel_date'] = isset($data['cancel_date']) ? $data['cancel_date'] : null;
        $this->container['ended_at'] = isset($data['ended_at']) ? $data['ended_at'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['updateable_buckets'] = isset($data['updateable_buckets']) ? $data['updateable_buckets'] : null;
        $this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 128)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['reference']) && !preg_match("/^[^,]*$/", $this->container['reference'])) {
            $invalidProperties[] = "invalid value for 'reference', must be conform to the pattern /^[^,]*$/.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets plan
     *
     * @return \Swagger\Client\Model\Plan
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     *
     * @param \Swagger\Client\Model\Plan $plan plan
     *
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->container['plan'] = $plan;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return string
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param string $customer The customer who is subscribed to the plan.
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets trial_end
     *
     * @return \DateTime
     */
    public function getTrialEnd()
    {
        return $this->container['trial_end'];
    }

    /**
     * Sets trial_end
     *
     * @param \DateTime $trial_end trial_end
     *
     * @return $this
     */
    public function setTrialEnd($trial_end)
    {
        $this->container['trial_end'] = $trial_end;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets cancel_date
     *
     * @return \DateTime
     */
    public function getCancelDate()
    {
        return $this->container['cancel_date'];
    }

    /**
     * Sets cancel_date
     *
     * @param \DateTime $cancel_date The date when the subscription was canceled.
     *
     * @return $this
     */
    public function setCancelDate($cancel_date)
    {
        $this->container['cancel_date'] = $cancel_date;

        return $this;
    }

    /**
     * Gets ended_at
     *
     * @return \DateTime
     */
    public function getEndedAt()
    {
        return $this->container['ended_at'];
    }

    /**
     * Sets ended_at
     *
     * @param \DateTime $ended_at ended_at
     *
     * @return $this
     */
    public function setEndedAt($ended_at)
    {
        $this->container['ended_at'] = $ended_at;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state The state the subscription is in.
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference The subscription's reference in an external system.
     *
     * @return $this
     */
    public function setReference($reference)
    {
        if (!is_null($reference) && (mb_strlen($reference) > 128)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling SubscriptionDetail., must be smaller than or equal to 128.');
        }
        if (!is_null($reference) && (!preg_match("/^[^,]*$/", $reference))) {
            throw new \InvalidArgumentException("invalid value for $reference when calling SubscriptionDetail., must conform to the pattern /^[^,]*$/.");
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets updateable_buckets
     *
     * @return string
     */
    public function getUpdateableBuckets()
    {
        return $this->container['updateable_buckets'];
    }

    /**
     * Sets updateable_buckets
     *
     * @param string $updateable_buckets updateable_buckets
     *
     * @return $this
     */
    public function setUpdateableBuckets($updateable_buckets)
    {
        $this->container['updateable_buckets'] = $updateable_buckets;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return object
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param object $meta meta
     *
     * @return $this
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $description when calling SubscriptionDetail., must be smaller than or equal to 1024.');
        }

        $this->container['description'] = $description;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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



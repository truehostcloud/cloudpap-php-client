<?php
/**
 * KubeAppTemplate
 *
 * PHP version 5
 *
 * @category Class
 * @package  Cloudpap\Client
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
 * Swagger Codegen version: 2.4.34
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Cloudpap\Client\Model;

use \ArrayAccess;
use \Cloudpap\Client\ObjectSerializer;

/**
 * KubeAppTemplate Class Doc Comment
 *
 * @category Class
 * @package  Cloudpap\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KubeAppTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KubeAppTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'plan_amount' => 'string',
        'plan_currency' => 'string',
        'plan_price_display' => 'string',
        'name' => 'string',
        'cpu' => 'float',
        'memory' => 'float',
        'bandwidth' => 'int',
        'display_icon' => 'string',
        'display_icon_type' => 'string',
        'legacy_billing_plan' => 'int',
        'billing_plan' => 'int',
        'clusters' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'plan_amount' => 'decimal',
        'plan_currency' => null,
        'plan_price_display' => null,
        'name' => null,
        'cpu' => null,
        'memory' => null,
        'bandwidth' => null,
        'display_icon' => null,
        'display_icon_type' => null,
        'legacy_billing_plan' => null,
        'billing_plan' => null,
        'clusters' => null
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
        'plan_amount' => 'plan_amount',
        'plan_currency' => 'plan_currency',
        'plan_price_display' => 'plan_price_display',
        'name' => 'name',
        'cpu' => 'cpu',
        'memory' => 'memory',
        'bandwidth' => 'bandwidth',
        'display_icon' => 'display_icon',
        'display_icon_type' => 'display_icon_type',
        'legacy_billing_plan' => 'legacy_billing_plan',
        'billing_plan' => 'billing_plan',
        'clusters' => 'clusters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'plan_amount' => 'setPlanAmount',
        'plan_currency' => 'setPlanCurrency',
        'plan_price_display' => 'setPlanPriceDisplay',
        'name' => 'setName',
        'cpu' => 'setCpu',
        'memory' => 'setMemory',
        'bandwidth' => 'setBandwidth',
        'display_icon' => 'setDisplayIcon',
        'display_icon_type' => 'setDisplayIconType',
        'legacy_billing_plan' => 'setLegacyBillingPlan',
        'billing_plan' => 'setBillingPlan',
        'clusters' => 'setClusters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'plan_amount' => 'getPlanAmount',
        'plan_currency' => 'getPlanCurrency',
        'plan_price_display' => 'getPlanPriceDisplay',
        'name' => 'getName',
        'cpu' => 'getCpu',
        'memory' => 'getMemory',
        'bandwidth' => 'getBandwidth',
        'display_icon' => 'getDisplayIcon',
        'display_icon_type' => 'getDisplayIconType',
        'legacy_billing_plan' => 'getLegacyBillingPlan',
        'billing_plan' => 'getBillingPlan',
        'clusters' => 'getClusters'
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

    const DISPLAY_ICON_TYPE_BOOTSTRAP = 'bootstrap';
    const DISPLAY_ICON_TYPE_SVG = 'svg';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDisplayIconTypeAllowableValues()
    {
        return [
            self::DISPLAY_ICON_TYPE_BOOTSTRAP,
            self::DISPLAY_ICON_TYPE_SVG,
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
        $this->container['plan_amount'] = isset($data['plan_amount']) ? $data['plan_amount'] : null;
        $this->container['plan_currency'] = isset($data['plan_currency']) ? $data['plan_currency'] : null;
        $this->container['plan_price_display'] = isset($data['plan_price_display']) ? $data['plan_price_display'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['display_icon'] = isset($data['display_icon']) ? $data['display_icon'] : null;
        $this->container['display_icon_type'] = isset($data['display_icon_type']) ? $data['display_icon_type'] : null;
        $this->container['legacy_billing_plan'] = isset($data['legacy_billing_plan']) ? $data['legacy_billing_plan'] : null;
        $this->container['billing_plan'] = isset($data['billing_plan']) ? $data['billing_plan'] : null;
        $this->container['clusters'] = isset($data['clusters']) ? $data['clusters'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['plan_currency']) && (mb_strlen($this->container['plan_currency']) < 1)) {
            $invalidProperties[] = "invalid value for 'plan_currency', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['plan_price_display']) && (mb_strlen($this->container['plan_price_display']) < 1)) {
            $invalidProperties[] = "invalid value for 'plan_price_display', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['cpu']) && ($this->container['cpu'] < 0.5)) {
            $invalidProperties[] = "invalid value for 'cpu', must be bigger than or equal to 0.5.";
        }

        if (!is_null($this->container['memory']) && ($this->container['memory'] < 0.5)) {
            $invalidProperties[] = "invalid value for 'memory', must be bigger than or equal to 0.5.";
        }

        if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'bandwidth', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] < 0)) {
            $invalidProperties[] = "invalid value for 'bandwidth', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['display_icon']) && (mb_strlen($this->container['display_icon']) > 255)) {
            $invalidProperties[] = "invalid value for 'display_icon', the character length must be smaller than or equal to 255.";
        }

        $allowedValues = $this->getDisplayIconTypeAllowableValues();
        if (!is_null($this->container['display_icon_type']) && !in_array($this->container['display_icon_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'display_icon_type', must be one of '%s'",
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
     * Gets plan_amount
     *
     * @return string
     */
    public function getPlanAmount()
    {
        return $this->container['plan_amount'];
    }

    /**
     * Sets plan_amount
     *
     * @param string $plan_amount plan_amount
     *
     * @return $this
     */
    public function setPlanAmount($plan_amount)
    {
        $this->container['plan_amount'] = $plan_amount;

        return $this;
    }

    /**
     * Gets plan_currency
     *
     * @return string
     */
    public function getPlanCurrency()
    {
        return $this->container['plan_currency'];
    }

    /**
     * Sets plan_currency
     *
     * @param string $plan_currency plan_currency
     *
     * @return $this
     */
    public function setPlanCurrency($plan_currency)
    {

        if (!is_null($plan_currency) && (mb_strlen($plan_currency) < 1)) {
            throw new \InvalidArgumentException('invalid length for $plan_currency when calling KubeAppTemplate., must be bigger than or equal to 1.');
        }

        $this->container['plan_currency'] = $plan_currency;

        return $this;
    }

    /**
     * Gets plan_price_display
     *
     * @return string
     */
    public function getPlanPriceDisplay()
    {
        return $this->container['plan_price_display'];
    }

    /**
     * Sets plan_price_display
     *
     * @param string $plan_price_display plan_price_display
     *
     * @return $this
     */
    public function setPlanPriceDisplay($plan_price_display)
    {

        if (!is_null($plan_price_display) && (mb_strlen($plan_price_display) < 1)) {
            throw new \InvalidArgumentException('invalid length for $plan_price_display when calling KubeAppTemplate., must be bigger than or equal to 1.');
        }

        $this->container['plan_price_display'] = $plan_price_display;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling KubeAppTemplate., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling KubeAppTemplate., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets cpu
     *
     * @return float
     */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
     * Sets cpu
     *
     * @param float $cpu cpu
     *
     * @return $this
     */
    public function setCpu($cpu)
    {

        if (!is_null($cpu) && ($cpu < 0.5)) {
            throw new \InvalidArgumentException('invalid value for $cpu when calling KubeAppTemplate., must be bigger than or equal to 0.5.');
        }

        $this->container['cpu'] = $cpu;

        return $this;
    }

    /**
     * Gets memory
     *
     * @return float
     */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
     * Sets memory
     *
     * @param float $memory memory
     *
     * @return $this
     */
    public function setMemory($memory)
    {

        if (!is_null($memory) && ($memory < 0.5)) {
            throw new \InvalidArgumentException('invalid value for $memory when calling KubeAppTemplate., must be bigger than or equal to 0.5.');
        }

        $this->container['memory'] = $memory;

        return $this;
    }

    /**
     * Gets bandwidth
     *
     * @return int
     */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
     * Sets bandwidth
     *
     * @param int $bandwidth bandwidth
     *
     * @return $this
     */
    public function setBandwidth($bandwidth)
    {

        if (!is_null($bandwidth) && ($bandwidth > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $bandwidth when calling KubeAppTemplate., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($bandwidth) && ($bandwidth < 0)) {
            throw new \InvalidArgumentException('invalid value for $bandwidth when calling KubeAppTemplate., must be bigger than or equal to 0.');
        }

        $this->container['bandwidth'] = $bandwidth;

        return $this;
    }

    /**
     * Gets display_icon
     *
     * @return string
     */
    public function getDisplayIcon()
    {
        return $this->container['display_icon'];
    }

    /**
     * Sets display_icon
     *
     * @param string $display_icon display_icon
     *
     * @return $this
     */
    public function setDisplayIcon($display_icon)
    {
        if (!is_null($display_icon) && (mb_strlen($display_icon) > 255)) {
            throw new \InvalidArgumentException('invalid length for $display_icon when calling KubeAppTemplate., must be smaller than or equal to 255.');
        }

        $this->container['display_icon'] = $display_icon;

        return $this;
    }

    /**
     * Gets display_icon_type
     *
     * @return string
     */
    public function getDisplayIconType()
    {
        return $this->container['display_icon_type'];
    }

    /**
     * Sets display_icon_type
     *
     * @param string $display_icon_type display_icon_type
     *
     * @return $this
     */
    public function setDisplayIconType($display_icon_type)
    {
        $allowedValues = $this->getDisplayIconTypeAllowableValues();
        if (!is_null($display_icon_type) && !in_array($display_icon_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'display_icon_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['display_icon_type'] = $display_icon_type;

        return $this;
    }

    /**
     * Gets legacy_billing_plan
     *
     * @return int
     */
    public function getLegacyBillingPlan()
    {
        return $this->container['legacy_billing_plan'];
    }

    /**
     * Sets legacy_billing_plan
     *
     * @param int $legacy_billing_plan legacy_billing_plan
     *
     * @return $this
     */
    public function setLegacyBillingPlan($legacy_billing_plan)
    {
        $this->container['legacy_billing_plan'] = $legacy_billing_plan;

        return $this;
    }

    /**
     * Gets billing_plan
     *
     * @return int
     */
    public function getBillingPlan()
    {
        return $this->container['billing_plan'];
    }

    /**
     * Sets billing_plan
     *
     * @param int $billing_plan billing_plan
     *
     * @return $this
     */
    public function setBillingPlan($billing_plan)
    {
        $this->container['billing_plan'] = $billing_plan;

        return $this;
    }

    /**
     * Gets clusters
     *
     * @return int[]
     */
    public function getClusters()
    {
        return $this->container['clusters'];
    }

    /**
     * Sets clusters
     *
     * @param int[] $clusters clusters
     *
     * @return $this
     */
    public function setClusters($clusters)
    {
        $this->container['clusters'] = $clusters;

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



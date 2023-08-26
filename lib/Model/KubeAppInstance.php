<?php
/**
 * KubeAppInstance
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
 * Swagger Codegen version: 2.4.32
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
 * KubeAppInstance Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KubeAppInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KubeAppInstance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'location_country_code' => 'string',
        'version_number' => 'string',
        'values' => 'object',
        'name' => 'string',
        'cpu' => 'float',
        'memory' => 'float',
        'hostname' => 'string',
        'domain_connection_settings' => 'object',
        'has_custom_domain' => 'bool',
        'cloudflare_dns_record_id' => 'string',
        'ready' => 'bool',
        'status' => 'string',
        'status_reason' => 'string',
        'workload_running_percentage' => 'int',
        'created_at' => '\DateTime',
        'version' => 'int',
        'tenant' => 'int',
        'template' => 'int',
        'location' => 'int',
        'legacy_billing_subscriptions' => 'int[]',
        'billing_subscriptions' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'location_country_code' => null,
        'version_number' => null,
        'values' => null,
        'name' => null,
        'cpu' => null,
        'memory' => null,
        'hostname' => null,
        'domain_connection_settings' => null,
        'has_custom_domain' => null,
        'cloudflare_dns_record_id' => null,
        'ready' => null,
        'status' => null,
        'status_reason' => null,
        'workload_running_percentage' => null,
        'created_at' => 'date-time',
        'version' => null,
        'tenant' => null,
        'template' => null,
        'location' => null,
        'legacy_billing_subscriptions' => null,
        'billing_subscriptions' => null
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
        'location_country_code' => 'location_country_code',
        'version_number' => 'version_number',
        'values' => 'values',
        'name' => 'name',
        'cpu' => 'cpu',
        'memory' => 'memory',
        'hostname' => 'hostname',
        'domain_connection_settings' => 'domain_connection_settings',
        'has_custom_domain' => 'has_custom_domain',
        'cloudflare_dns_record_id' => 'cloudflare_dns_record_id',
        'ready' => 'ready',
        'status' => 'status',
        'status_reason' => 'status_reason',
        'workload_running_percentage' => 'workload_running_percentage',
        'created_at' => 'created_at',
        'version' => 'version',
        'tenant' => 'tenant',
        'template' => 'template',
        'location' => 'location',
        'legacy_billing_subscriptions' => 'legacy_billing_subscriptions',
        'billing_subscriptions' => 'billing_subscriptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'location_country_code' => 'setLocationCountryCode',
        'version_number' => 'setVersionNumber',
        'values' => 'setValues',
        'name' => 'setName',
        'cpu' => 'setCpu',
        'memory' => 'setMemory',
        'hostname' => 'setHostname',
        'domain_connection_settings' => 'setDomainConnectionSettings',
        'has_custom_domain' => 'setHasCustomDomain',
        'cloudflare_dns_record_id' => 'setCloudflareDnsRecordId',
        'ready' => 'setReady',
        'status' => 'setStatus',
        'status_reason' => 'setStatusReason',
        'workload_running_percentage' => 'setWorkloadRunningPercentage',
        'created_at' => 'setCreatedAt',
        'version' => 'setVersion',
        'tenant' => 'setTenant',
        'template' => 'setTemplate',
        'location' => 'setLocation',
        'legacy_billing_subscriptions' => 'setLegacyBillingSubscriptions',
        'billing_subscriptions' => 'setBillingSubscriptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'location_country_code' => 'getLocationCountryCode',
        'version_number' => 'getVersionNumber',
        'values' => 'getValues',
        'name' => 'getName',
        'cpu' => 'getCpu',
        'memory' => 'getMemory',
        'hostname' => 'getHostname',
        'domain_connection_settings' => 'getDomainConnectionSettings',
        'has_custom_domain' => 'getHasCustomDomain',
        'cloudflare_dns_record_id' => 'getCloudflareDnsRecordId',
        'ready' => 'getReady',
        'status' => 'getStatus',
        'status_reason' => 'getStatusReason',
        'workload_running_percentage' => 'getWorkloadRunningPercentage',
        'created_at' => 'getCreatedAt',
        'version' => 'getVersion',
        'tenant' => 'getTenant',
        'template' => 'getTemplate',
        'location' => 'getLocation',
        'legacy_billing_subscriptions' => 'getLegacyBillingSubscriptions',
        'billing_subscriptions' => 'getBillingSubscriptions'
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
        $this->container['location_country_code'] = isset($data['location_country_code']) ? $data['location_country_code'] : null;
        $this->container['version_number'] = isset($data['version_number']) ? $data['version_number'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['domain_connection_settings'] = isset($data['domain_connection_settings']) ? $data['domain_connection_settings'] : null;
        $this->container['has_custom_domain'] = isset($data['has_custom_domain']) ? $data['has_custom_domain'] : null;
        $this->container['cloudflare_dns_record_id'] = isset($data['cloudflare_dns_record_id']) ? $data['cloudflare_dns_record_id'] : null;
        $this->container['ready'] = isset($data['ready']) ? $data['ready'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_reason'] = isset($data['status_reason']) ? $data['status_reason'] : null;
        $this->container['workload_running_percentage'] = isset($data['workload_running_percentage']) ? $data['workload_running_percentage'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['tenant'] = isset($data['tenant']) ? $data['tenant'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['legacy_billing_subscriptions'] = isset($data['legacy_billing_subscriptions']) ? $data['legacy_billing_subscriptions'] : null;
        $this->container['billing_subscriptions'] = isset($data['billing_subscriptions']) ? $data['billing_subscriptions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['location_country_code']) && (mb_strlen($this->container['location_country_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'location_country_code', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['version_number']) && (mb_strlen($this->container['version_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'version_number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['cpu']) && ($this->container['cpu'] < 0.5)) {
            $invalidProperties[] = "invalid value for 'cpu', must be bigger than or equal to 0.5.";
        }

        if (!is_null($this->container['memory']) && ($this->container['memory'] < 0.5)) {
            $invalidProperties[] = "invalid value for 'memory', must be bigger than or equal to 0.5.";
        }

        if (!is_null($this->container['hostname']) && (mb_strlen($this->container['hostname']) > 255)) {
            $invalidProperties[] = "invalid value for 'hostname', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['cloudflare_dns_record_id']) && (mb_strlen($this->container['cloudflare_dns_record_id']) > 255)) {
            $invalidProperties[] = "invalid value for 'cloudflare_dns_record_id', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 255)) {
            $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['status_reason']) && (mb_strlen($this->container['status_reason']) > 255)) {
            $invalidProperties[] = "invalid value for 'status_reason', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['workload_running_percentage']) && ($this->container['workload_running_percentage'] > 100)) {
            $invalidProperties[] = "invalid value for 'workload_running_percentage', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['workload_running_percentage']) && ($this->container['workload_running_percentage'] < 0)) {
            $invalidProperties[] = "invalid value for 'workload_running_percentage', must be bigger than or equal to 0.";
        }

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['tenant'] === null) {
            $invalidProperties[] = "'tenant' can't be null";
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
     * Gets location_country_code
     *
     * @return string
     */
    public function getLocationCountryCode()
    {
        return $this->container['location_country_code'];
    }

    /**
     * Sets location_country_code
     *
     * @param string $location_country_code location_country_code
     *
     * @return $this
     */
    public function setLocationCountryCode($location_country_code)
    {

        if (!is_null($location_country_code) && (mb_strlen($location_country_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $location_country_code when calling KubeAppInstance., must be bigger than or equal to 1.');
        }

        $this->container['location_country_code'] = $location_country_code;

        return $this;
    }

    /**
     * Gets version_number
     *
     * @return string
     */
    public function getVersionNumber()
    {
        return $this->container['version_number'];
    }

    /**
     * Sets version_number
     *
     * @param string $version_number version_number
     *
     * @return $this
     */
    public function setVersionNumber($version_number)
    {

        if (!is_null($version_number) && (mb_strlen($version_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $version_number when calling KubeAppInstance., must be bigger than or equal to 1.');
        }

        $this->container['version_number'] = $version_number;

        return $this;
    }

    /**
     * Gets values
     *
     * @return object
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param object $values values
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

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

        if (!is_null($name) && (mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling KubeAppInstance., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid value for $cpu when calling KubeAppInstance., must be bigger than or equal to 0.5.');
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
            throw new \InvalidArgumentException('invalid value for $memory when calling KubeAppInstance., must be bigger than or equal to 0.5.');
        }

        $this->container['memory'] = $memory;

        return $this;
    }

    /**
     * Gets hostname
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     *
     * @param string $hostname hostname
     *
     * @return $this
     */
    public function setHostname($hostname)
    {
        if (!is_null($hostname) && (mb_strlen($hostname) > 255)) {
            throw new \InvalidArgumentException('invalid length for $hostname when calling KubeAppInstance., must be smaller than or equal to 255.');
        }

        $this->container['hostname'] = $hostname;

        return $this;
    }

    /**
     * Gets domain_connection_settings
     *
     * @return object
     */
    public function getDomainConnectionSettings()
    {
        return $this->container['domain_connection_settings'];
    }

    /**
     * Sets domain_connection_settings
     *
     * @param object $domain_connection_settings domain_connection_settings
     *
     * @return $this
     */
    public function setDomainConnectionSettings($domain_connection_settings)
    {
        $this->container['domain_connection_settings'] = $domain_connection_settings;

        return $this;
    }

    /**
     * Gets has_custom_domain
     *
     * @return bool
     */
    public function getHasCustomDomain()
    {
        return $this->container['has_custom_domain'];
    }

    /**
     * Sets has_custom_domain
     *
     * @param bool $has_custom_domain has_custom_domain
     *
     * @return $this
     */
    public function setHasCustomDomain($has_custom_domain)
    {
        $this->container['has_custom_domain'] = $has_custom_domain;

        return $this;
    }

    /**
     * Gets cloudflare_dns_record_id
     *
     * @return string
     */
    public function getCloudflareDnsRecordId()
    {
        return $this->container['cloudflare_dns_record_id'];
    }

    /**
     * Sets cloudflare_dns_record_id
     *
     * @param string $cloudflare_dns_record_id cloudflare_dns_record_id
     *
     * @return $this
     */
    public function setCloudflareDnsRecordId($cloudflare_dns_record_id)
    {
        if (!is_null($cloudflare_dns_record_id) && (mb_strlen($cloudflare_dns_record_id) > 255)) {
            throw new \InvalidArgumentException('invalid length for $cloudflare_dns_record_id when calling KubeAppInstance., must be smaller than or equal to 255.');
        }

        $this->container['cloudflare_dns_record_id'] = $cloudflare_dns_record_id;

        return $this;
    }

    /**
     * Gets ready
     *
     * @return bool
     */
    public function getReady()
    {
        return $this->container['ready'];
    }

    /**
     * Sets ready
     *
     * @param bool $ready ready
     *
     * @return $this
     */
    public function setReady($ready)
    {
        $this->container['ready'] = $ready;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        if (!is_null($status) && (mb_strlen($status) > 255)) {
            throw new \InvalidArgumentException('invalid length for $status when calling KubeAppInstance., must be smaller than or equal to 255.');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_reason
     *
     * @return string
     */
    public function getStatusReason()
    {
        return $this->container['status_reason'];
    }

    /**
     * Sets status_reason
     *
     * @param string $status_reason status_reason
     *
     * @return $this
     */
    public function setStatusReason($status_reason)
    {
        if (!is_null($status_reason) && (mb_strlen($status_reason) > 255)) {
            throw new \InvalidArgumentException('invalid length for $status_reason when calling KubeAppInstance., must be smaller than or equal to 255.');
        }

        $this->container['status_reason'] = $status_reason;

        return $this;
    }

    /**
     * Gets workload_running_percentage
     *
     * @return int
     */
    public function getWorkloadRunningPercentage()
    {
        return $this->container['workload_running_percentage'];
    }

    /**
     * Sets workload_running_percentage
     *
     * @param int $workload_running_percentage workload_running_percentage
     *
     * @return $this
     */
    public function setWorkloadRunningPercentage($workload_running_percentage)
    {

        if (!is_null($workload_running_percentage) && ($workload_running_percentage > 100)) {
            throw new \InvalidArgumentException('invalid value for $workload_running_percentage when calling KubeAppInstance., must be smaller than or equal to 100.');
        }
        if (!is_null($workload_running_percentage) && ($workload_running_percentage < 0)) {
            throw new \InvalidArgumentException('invalid value for $workload_running_percentage when calling KubeAppInstance., must be bigger than or equal to 0.');
        }

        $this->container['workload_running_percentage'] = $workload_running_percentage;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets tenant
     *
     * @return int
     */
    public function getTenant()
    {
        return $this->container['tenant'];
    }

    /**
     * Sets tenant
     *
     * @param int $tenant tenant
     *
     * @return $this
     */
    public function setTenant($tenant)
    {
        $this->container['tenant'] = $tenant;

        return $this;
    }

    /**
     * Gets template
     *
     * @return int
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param int $template template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets location
     *
     * @return int
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param int $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets legacy_billing_subscriptions
     *
     * @return int[]
     */
    public function getLegacyBillingSubscriptions()
    {
        return $this->container['legacy_billing_subscriptions'];
    }

    /**
     * Sets legacy_billing_subscriptions
     *
     * @param int[] $legacy_billing_subscriptions legacy_billing_subscriptions
     *
     * @return $this
     */
    public function setLegacyBillingSubscriptions($legacy_billing_subscriptions)
    {
        $this->container['legacy_billing_subscriptions'] = $legacy_billing_subscriptions;

        return $this;
    }

    /**
     * Gets billing_subscriptions
     *
     * @return int[]
     */
    public function getBillingSubscriptions()
    {
        return $this->container['billing_subscriptions'];
    }

    /**
     * Sets billing_subscriptions
     *
     * @param int[] $billing_subscriptions billing_subscriptions
     *
     * @return $this
     */
    public function setBillingSubscriptions($billing_subscriptions)
    {
        $this->container['billing_subscriptions'] = $billing_subscriptions;

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



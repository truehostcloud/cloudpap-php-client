<?php
/**
 * ConnectDomain
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
 * ConnectDomain Class Doc Comment
 *
 * @category Class
 * @package  Cloudpap\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConnectDomain implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConnectDomain';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'domain_name' => 'string',
        'kube_app_instance' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'domain_name' => null,
        'kube_app_instance' => null
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
        'domain_name' => 'domain_name',
        'kube_app_instance' => 'kube_app_instance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain_name' => 'setDomainName',
        'kube_app_instance' => 'setKubeAppInstance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain_name' => 'getDomainName',
        'kube_app_instance' => 'getKubeAppInstance'
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
        $this->container['domain_name'] = isset($data['domain_name']) ? $data['domain_name'] : null;
        $this->container['kube_app_instance'] = isset($data['kube_app_instance']) ? $data['kube_app_instance'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['domain_name'] === null) {
            $invalidProperties[] = "'domain_name' can't be null";
        }
        if ((mb_strlen($this->container['domain_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'domain_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['kube_app_instance'] === null) {
            $invalidProperties[] = "'kube_app_instance' can't be null";
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
     * Gets domain_name
     *
     * @return string
     */
    public function getDomainName()
    {
        return $this->container['domain_name'];
    }

    /**
     * Sets domain_name
     *
     * @param string $domain_name domain_name
     *
     * @return $this
     */
    public function setDomainName($domain_name)
    {

        if ((mb_strlen($domain_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $domain_name when calling ConnectDomain., must be bigger than or equal to 1.');
        }

        $this->container['domain_name'] = $domain_name;

        return $this;
    }

    /**
     * Gets kube_app_instance
     *
     * @return int
     */
    public function getKubeAppInstance()
    {
        return $this->container['kube_app_instance'];
    }

    /**
     * Sets kube_app_instance
     *
     * @param int $kube_app_instance kube_app_instance
     *
     * @return $this
     */
    public function setKubeAppInstance($kube_app_instance)
    {
        $this->container['kube_app_instance'] = $kube_app_instance;

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



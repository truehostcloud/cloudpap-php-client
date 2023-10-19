<?php
/**
 * KubeAppVersion
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
 * KubeAppVersion Class Doc Comment
 *
 * @category Class
 * @package  Cloudpap\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KubeAppVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KubeAppVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'version' => 'string',
        'helm_chart_version' => 'string',
        'default_values' => 'object',
        'enabled' => 'bool',
        'override_values_schema' => 'object',
        'values_schema' => 'object',
        'credentials_mapping' => 'object',
        'kube_app' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'version' => null,
        'helm_chart_version' => null,
        'default_values' => null,
        'enabled' => null,
        'override_values_schema' => null,
        'values_schema' => null,
        'credentials_mapping' => null,
        'kube_app' => null
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
        'version' => 'version',
        'helm_chart_version' => 'helm_chart_version',
        'default_values' => 'default_values',
        'enabled' => 'enabled',
        'override_values_schema' => 'override_values_schema',
        'values_schema' => 'values_schema',
        'credentials_mapping' => 'credentials_mapping',
        'kube_app' => 'kube_app'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'version' => 'setVersion',
        'helm_chart_version' => 'setHelmChartVersion',
        'default_values' => 'setDefaultValues',
        'enabled' => 'setEnabled',
        'override_values_schema' => 'setOverrideValuesSchema',
        'values_schema' => 'setValuesSchema',
        'credentials_mapping' => 'setCredentialsMapping',
        'kube_app' => 'setKubeApp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'version' => 'getVersion',
        'helm_chart_version' => 'getHelmChartVersion',
        'default_values' => 'getDefaultValues',
        'enabled' => 'getEnabled',
        'override_values_schema' => 'getOverrideValuesSchema',
        'values_schema' => 'getValuesSchema',
        'credentials_mapping' => 'getCredentialsMapping',
        'kube_app' => 'getKubeApp'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['helm_chart_version'] = isset($data['helm_chart_version']) ? $data['helm_chart_version'] : null;
        $this->container['default_values'] = isset($data['default_values']) ? $data['default_values'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['override_values_schema'] = isset($data['override_values_schema']) ? $data['override_values_schema'] : null;
        $this->container['values_schema'] = isset($data['values_schema']) ? $data['values_schema'] : null;
        $this->container['credentials_mapping'] = isset($data['credentials_mapping']) ? $data['credentials_mapping'] : null;
        $this->container['kube_app'] = isset($data['kube_app']) ? $data['kube_app'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ((mb_strlen($this->container['version']) > 255)) {
            $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['version']) < 1)) {
            $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['helm_chart_version'] === null) {
            $invalidProperties[] = "'helm_chart_version' can't be null";
        }
        if ((mb_strlen($this->container['helm_chart_version']) > 255)) {
            $invalidProperties[] = "invalid value for 'helm_chart_version', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['helm_chart_version']) < 1)) {
            $invalidProperties[] = "invalid value for 'helm_chart_version', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['kube_app'] === null) {
            $invalidProperties[] = "'kube_app' can't be null";
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
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        if ((mb_strlen($version) > 255)) {
            throw new \InvalidArgumentException('invalid length for $version when calling KubeAppVersion., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $version when calling KubeAppVersion., must be bigger than or equal to 1.');
        }

        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets helm_chart_version
     *
     * @return string
     */
    public function getHelmChartVersion()
    {
        return $this->container['helm_chart_version'];
    }

    /**
     * Sets helm_chart_version
     *
     * @param string $helm_chart_version helm_chart_version
     *
     * @return $this
     */
    public function setHelmChartVersion($helm_chart_version)
    {
        if ((mb_strlen($helm_chart_version) > 255)) {
            throw new \InvalidArgumentException('invalid length for $helm_chart_version when calling KubeAppVersion., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($helm_chart_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $helm_chart_version when calling KubeAppVersion., must be bigger than or equal to 1.');
        }

        $this->container['helm_chart_version'] = $helm_chart_version;

        return $this;
    }

    /**
     * Gets default_values
     *
     * @return object
     */
    public function getDefaultValues()
    {
        return $this->container['default_values'];
    }

    /**
     * Sets default_values
     *
     * @param object $default_values default_values
     *
     * @return $this
     */
    public function setDefaultValues($default_values)
    {
        $this->container['default_values'] = $default_values;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets override_values_schema
     *
     * @return object
     */
    public function getOverrideValuesSchema()
    {
        return $this->container['override_values_schema'];
    }

    /**
     * Sets override_values_schema
     *
     * @param object $override_values_schema override_values_schema
     *
     * @return $this
     */
    public function setOverrideValuesSchema($override_values_schema)
    {
        $this->container['override_values_schema'] = $override_values_schema;

        return $this;
    }

    /**
     * Gets values_schema
     *
     * @return object
     */
    public function getValuesSchema()
    {
        return $this->container['values_schema'];
    }

    /**
     * Sets values_schema
     *
     * @param object $values_schema values_schema
     *
     * @return $this
     */
    public function setValuesSchema($values_schema)
    {
        $this->container['values_schema'] = $values_schema;

        return $this;
    }

    /**
     * Gets credentials_mapping
     *
     * @return object
     */
    public function getCredentialsMapping()
    {
        return $this->container['credentials_mapping'];
    }

    /**
     * Sets credentials_mapping
     *
     * @param object $credentials_mapping credentials_mapping
     *
     * @return $this
     */
    public function setCredentialsMapping($credentials_mapping)
    {
        $this->container['credentials_mapping'] = $credentials_mapping;

        return $this;
    }

    /**
     * Gets kube_app
     *
     * @return int
     */
    public function getKubeApp()
    {
        return $this->container['kube_app'];
    }

    /**
     * Sets kube_app
     *
     * @param int $kube_app kube_app
     *
     * @return $this
     */
    public function setKubeApp($kube_app)
    {
        $this->container['kube_app'] = $kube_app;

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


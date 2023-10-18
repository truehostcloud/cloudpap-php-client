<?php
/**
 * VirtualMachineImage
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
 * VirtualMachineImage Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VirtualMachineImage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VirtualMachineImage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'uid' => 'string',
        'url' => 'string',
        'os_type' => 'string',
        'os_version' => 'string',
        'default_root_user' => 'string',
        'network_card_name' => 'string',
        'gateway_on_network_data' => 'bool',
        'additional_runcmd' => 'string',
        'additional_bootcmd' => 'string',
        'additional_packages' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'uid' => null,
        'url' => 'uri',
        'os_type' => null,
        'os_version' => null,
        'default_root_user' => null,
        'network_card_name' => null,
        'gateway_on_network_data' => null,
        'additional_runcmd' => null,
        'additional_bootcmd' => null,
        'additional_packages' => null
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
        'name' => 'name',
        'uid' => 'uid',
        'url' => 'url',
        'os_type' => 'os_type',
        'os_version' => 'os_version',
        'default_root_user' => 'default_root_user',
        'network_card_name' => 'network_card_name',
        'gateway_on_network_data' => 'gateway_on_network_data',
        'additional_runcmd' => 'additional_runcmd',
        'additional_bootcmd' => 'additional_bootcmd',
        'additional_packages' => 'additional_packages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'uid' => 'setUid',
        'url' => 'setUrl',
        'os_type' => 'setOsType',
        'os_version' => 'setOsVersion',
        'default_root_user' => 'setDefaultRootUser',
        'network_card_name' => 'setNetworkCardName',
        'gateway_on_network_data' => 'setGatewayOnNetworkData',
        'additional_runcmd' => 'setAdditionalRuncmd',
        'additional_bootcmd' => 'setAdditionalBootcmd',
        'additional_packages' => 'setAdditionalPackages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'uid' => 'getUid',
        'url' => 'getUrl',
        'os_type' => 'getOsType',
        'os_version' => 'getOsVersion',
        'default_root_user' => 'getDefaultRootUser',
        'network_card_name' => 'getNetworkCardName',
        'gateway_on_network_data' => 'getGatewayOnNetworkData',
        'additional_runcmd' => 'getAdditionalRuncmd',
        'additional_bootcmd' => 'getAdditionalBootcmd',
        'additional_packages' => 'getAdditionalPackages'
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

    const OS_TYPE_WINDOWS = 'windows';
    const OS_TYPE_LINUX = 'linux';
    const OS_TYPE_SLES = 'SLEs';
    const OS_TYPE_DEBIAN = 'debian';
    const OS_TYPE_FEDORA = 'fedora';
    const OS_TYPE_GENTOO = 'gentoo';
    const OS_TYPE_ORACLE = 'oracle';
    const OS_TYPE_REDHAT = 'redhat';
    const OS_TYPE_OPEN_SUSE = 'openSUSE';
    const OS_TYPE_UBUNTU = 'ubuntu';
    const OS_TYPE_OTHER_LINUX = 'otherLinux';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOsTypeAllowableValues()
    {
        return [
            self::OS_TYPE_WINDOWS,
            self::OS_TYPE_LINUX,
            self::OS_TYPE_SLES,
            self::OS_TYPE_DEBIAN,
            self::OS_TYPE_FEDORA,
            self::OS_TYPE_GENTOO,
            self::OS_TYPE_ORACLE,
            self::OS_TYPE_REDHAT,
            self::OS_TYPE_OPEN_SUSE,
            self::OS_TYPE_UBUNTU,
            self::OS_TYPE_OTHER_LINUX,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['os_type'] = isset($data['os_type']) ? $data['os_type'] : null;
        $this->container['os_version'] = isset($data['os_version']) ? $data['os_version'] : null;
        $this->container['default_root_user'] = isset($data['default_root_user']) ? $data['default_root_user'] : null;
        $this->container['network_card_name'] = isset($data['network_card_name']) ? $data['network_card_name'] : null;
        $this->container['gateway_on_network_data'] = isset($data['gateway_on_network_data']) ? $data['gateway_on_network_data'] : null;
        $this->container['additional_runcmd'] = isset($data['additional_runcmd']) ? $data['additional_runcmd'] : null;
        $this->container['additional_bootcmd'] = isset($data['additional_bootcmd']) ? $data['additional_bootcmd'] : null;
        $this->container['additional_packages'] = isset($data['additional_packages']) ? $data['additional_packages'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['uid']) && (mb_strlen($this->container['uid']) < 1)) {
            $invalidProperties[] = "invalid value for 'uid', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ((mb_strlen($this->container['url']) > 200)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 200.";
        }

        if ((mb_strlen($this->container['url']) < 1)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getOsTypeAllowableValues();
        if (!is_null($this->container['os_type']) && !in_array($this->container['os_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'os_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['os_version']) && (mb_strlen($this->container['os_version']) > 255)) {
            $invalidProperties[] = "invalid value for 'os_version', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['os_version']) && (mb_strlen($this->container['os_version']) < 1)) {
            $invalidProperties[] = "invalid value for 'os_version', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['default_root_user']) && (mb_strlen($this->container['default_root_user']) > 255)) {
            $invalidProperties[] = "invalid value for 'default_root_user', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['default_root_user']) && (mb_strlen($this->container['default_root_user']) < 1)) {
            $invalidProperties[] = "invalid value for 'default_root_user', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['network_card_name']) && (mb_strlen($this->container['network_card_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'network_card_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['network_card_name']) && (mb_strlen($this->container['network_card_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'network_card_name', the character length must be bigger than or equal to 1.";
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
            throw new \InvalidArgumentException('invalid length for $name when calling VirtualMachineImage., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling VirtualMachineImage., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string $uid uid
     *
     * @return $this
     */
    public function setUid($uid)
    {

        if (!is_null($uid) && (mb_strlen($uid) < 1)) {
            throw new \InvalidArgumentException('invalid length for $uid when calling VirtualMachineImage., must be bigger than or equal to 1.');
        }

        $this->container['uid'] = $uid;

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
        if ((mb_strlen($url) > 200)) {
            throw new \InvalidArgumentException('invalid length for $url when calling VirtualMachineImage., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $url when calling VirtualMachineImage., must be bigger than or equal to 1.');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets os_type
     *
     * @return string
     */
    public function getOsType()
    {
        return $this->container['os_type'];
    }

    /**
     * Sets os_type
     *
     * @param string $os_type os_type
     *
     * @return $this
     */
    public function setOsType($os_type)
    {
        $allowedValues = $this->getOsTypeAllowableValues();
        if (!is_null($os_type) && !in_array($os_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'os_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['os_type'] = $os_type;

        return $this;
    }

    /**
     * Gets os_version
     *
     * @return string
     */
    public function getOsVersion()
    {
        return $this->container['os_version'];
    }

    /**
     * Sets os_version
     *
     * @param string $os_version os_version
     *
     * @return $this
     */
    public function setOsVersion($os_version)
    {
        if (!is_null($os_version) && (mb_strlen($os_version) > 255)) {
            throw new \InvalidArgumentException('invalid length for $os_version when calling VirtualMachineImage., must be smaller than or equal to 255.');
        }
        if (!is_null($os_version) && (mb_strlen($os_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $os_version when calling VirtualMachineImage., must be bigger than or equal to 1.');
        }

        $this->container['os_version'] = $os_version;

        return $this;
    }

    /**
     * Gets default_root_user
     *
     * @return string
     */
    public function getDefaultRootUser()
    {
        return $this->container['default_root_user'];
    }

    /**
     * Sets default_root_user
     *
     * @param string $default_root_user default_root_user
     *
     * @return $this
     */
    public function setDefaultRootUser($default_root_user)
    {
        if (!is_null($default_root_user) && (mb_strlen($default_root_user) > 255)) {
            throw new \InvalidArgumentException('invalid length for $default_root_user when calling VirtualMachineImage., must be smaller than or equal to 255.');
        }
        if (!is_null($default_root_user) && (mb_strlen($default_root_user) < 1)) {
            throw new \InvalidArgumentException('invalid length for $default_root_user when calling VirtualMachineImage., must be bigger than or equal to 1.');
        }

        $this->container['default_root_user'] = $default_root_user;

        return $this;
    }

    /**
     * Gets network_card_name
     *
     * @return string
     */
    public function getNetworkCardName()
    {
        return $this->container['network_card_name'];
    }

    /**
     * Sets network_card_name
     *
     * @param string $network_card_name network_card_name
     *
     * @return $this
     */
    public function setNetworkCardName($network_card_name)
    {
        if (!is_null($network_card_name) && (mb_strlen($network_card_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $network_card_name when calling VirtualMachineImage., must be smaller than or equal to 255.');
        }
        if (!is_null($network_card_name) && (mb_strlen($network_card_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $network_card_name when calling VirtualMachineImage., must be bigger than or equal to 1.');
        }

        $this->container['network_card_name'] = $network_card_name;

        return $this;
    }

    /**
     * Gets gateway_on_network_data
     *
     * @return bool
     */
    public function getGatewayOnNetworkData()
    {
        return $this->container['gateway_on_network_data'];
    }

    /**
     * Sets gateway_on_network_data
     *
     * @param bool $gateway_on_network_data gateway_on_network_data
     *
     * @return $this
     */
    public function setGatewayOnNetworkData($gateway_on_network_data)
    {
        $this->container['gateway_on_network_data'] = $gateway_on_network_data;

        return $this;
    }

    /**
     * Gets additional_runcmd
     *
     * @return string
     */
    public function getAdditionalRuncmd()
    {
        return $this->container['additional_runcmd'];
    }

    /**
     * Sets additional_runcmd
     *
     * @param string $additional_runcmd additional_runcmd
     *
     * @return $this
     */
    public function setAdditionalRuncmd($additional_runcmd)
    {
        $this->container['additional_runcmd'] = $additional_runcmd;

        return $this;
    }

    /**
     * Gets additional_bootcmd
     *
     * @return string
     */
    public function getAdditionalBootcmd()
    {
        return $this->container['additional_bootcmd'];
    }

    /**
     * Sets additional_bootcmd
     *
     * @param string $additional_bootcmd additional_bootcmd
     *
     * @return $this
     */
    public function setAdditionalBootcmd($additional_bootcmd)
    {
        $this->container['additional_bootcmd'] = $additional_bootcmd;

        return $this;
    }

    /**
     * Gets additional_packages
     *
     * @return string
     */
    public function getAdditionalPackages()
    {
        return $this->container['additional_packages'];
    }

    /**
     * Sets additional_packages
     *
     * @param string $additional_packages additional_packages
     *
     * @return $this
     */
    public function setAdditionalPackages($additional_packages)
    {
        $this->container['additional_packages'] = $additional_packages;

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



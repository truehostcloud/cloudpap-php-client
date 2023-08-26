# Swagger\Client\KubeAppsInstancesApi

All URIs are relative to *http://localhost:8000/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**kubeAppsInstancesConnectDomain**](KubeAppsInstancesApi.md#kubeAppsInstancesConnectDomain) | **POST** /kube-apps-instances/{id}/connect-domain/ | 
[**kubeAppsInstancesCreate**](KubeAppsInstancesApi.md#kubeAppsInstancesCreate) | **POST** /kube-apps-instances/ | 
[**kubeAppsInstancesDelete**](KubeAppsInstancesApi.md#kubeAppsInstancesDelete) | **DELETE** /kube-apps-instances/{id}/ | 
[**kubeAppsInstancesList**](KubeAppsInstancesApi.md#kubeAppsInstancesList) | **GET** /kube-apps-instances/ | 
[**kubeAppsInstancesPartialUpdate**](KubeAppsInstancesApi.md#kubeAppsInstancesPartialUpdate) | **PATCH** /kube-apps-instances/{id}/ | 
[**kubeAppsInstancesRead**](KubeAppsInstancesApi.md#kubeAppsInstancesRead) | **GET** /kube-apps-instances/{id}/ | 
[**kubeAppsInstancesUpdate**](KubeAppsInstancesApi.md#kubeAppsInstancesUpdate) | **PUT** /kube-apps-instances/{id}/ | 


# **kubeAppsInstancesConnectDomain**
> \Swagger\Client\Model\ConnectDomain kubeAppsInstancesConnectDomain($id, $data)



Connect a domain to a KubeAppInstance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KubeAppsInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app instance.
$data = new \Swagger\Client\Model\ConnectDomain(); // \Swagger\Client\Model\ConnectDomain | 

try {
    $result = $apiInstance->kubeAppsInstancesConnectDomain($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubeAppsInstancesApi->kubeAppsInstancesConnectDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this kube app instance. |
 **data** | [**\Swagger\Client\Model\ConnectDomain**](../Model/ConnectDomain.md)|  |

### Return type

[**\Swagger\Client\Model\ConnectDomain**](../Model/ConnectDomain.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kubeAppsInstancesCreate**
> \Swagger\Client\Model\KubeAppInstance kubeAppsInstancesCreate($data)



Override create method to set tenant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KubeAppsInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\KubeAppInstance(); // \Swagger\Client\Model\KubeAppInstance | 

try {
    $result = $apiInstance->kubeAppsInstancesCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubeAppsInstancesApi->kubeAppsInstancesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)|  |

### Return type

[**\Swagger\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kubeAppsInstancesDelete**
> kubeAppsInstancesDelete($id)



Kube app instance view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KubeAppsInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app instance.

try {
    $apiInstance->kubeAppsInstancesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling KubeAppsInstancesApi->kubeAppsInstancesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this kube app instance. |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kubeAppsInstancesList**
> \Swagger\Client\Model\KubeAppInstance[] kubeAppsInstancesList()



Kube app instance view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KubeAppsInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->kubeAppsInstancesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubeAppsInstancesApi->kubeAppsInstancesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\KubeAppInstance[]**](../Model/KubeAppInstance.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kubeAppsInstancesPartialUpdate**
> \Swagger\Client\Model\KubeAppInstance kubeAppsInstancesPartialUpdate($id, $data)



Kube app instance view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KubeAppsInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app instance.
$data = new \Swagger\Client\Model\KubeAppInstance(); // \Swagger\Client\Model\KubeAppInstance | 

try {
    $result = $apiInstance->kubeAppsInstancesPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubeAppsInstancesApi->kubeAppsInstancesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this kube app instance. |
 **data** | [**\Swagger\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)|  |

### Return type

[**\Swagger\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kubeAppsInstancesRead**
> \Swagger\Client\Model\KubeAppInstance kubeAppsInstancesRead($id)



Kube app instance view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KubeAppsInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app instance.

try {
    $result = $apiInstance->kubeAppsInstancesRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubeAppsInstancesApi->kubeAppsInstancesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this kube app instance. |

### Return type

[**\Swagger\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kubeAppsInstancesUpdate**
> \Swagger\Client\Model\KubeAppInstance kubeAppsInstancesUpdate($id, $data)



Kube app instance view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KubeAppsInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app instance.
$data = new \Swagger\Client\Model\KubeAppInstance(); // \Swagger\Client\Model\KubeAppInstance | 

try {
    $result = $apiInstance->kubeAppsInstancesUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubeAppsInstancesApi->kubeAppsInstancesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this kube app instance. |
 **data** | [**\Swagger\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)|  |

### Return type

[**\Swagger\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


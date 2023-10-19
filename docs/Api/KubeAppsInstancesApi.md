# Cloudpap\Client\KubeAppsInstancesApi

All URIs are relative to *https://console.cloudpap.com/api*

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
> \Cloudpap\Client\Model\ConnectDomain kubeAppsInstancesConnectDomain($id, $data)



Connect a domain to a KubeAppInstance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\KubeAppsInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app instance.
$data = new \Cloudpap\Client\Model\ConnectDomain(); // \Cloudpap\Client\Model\ConnectDomain | 

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
 **data** | [**\Cloudpap\Client\Model\ConnectDomain**](../Model/ConnectDomain.md)|  |

### Return type

[**\Cloudpap\Client\Model\ConnectDomain**](../Model/ConnectDomain.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kubeAppsInstancesCreate**
> \Cloudpap\Client\Model\KubeAppInstance kubeAppsInstancesCreate($data)



Override create method to set tenant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\KubeAppsInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Cloudpap\Client\Model\KubeAppInstance(); // \Cloudpap\Client\Model\KubeAppInstance | 

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
 **data** | [**\Cloudpap\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)|  |

### Return type

[**\Cloudpap\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)

### Authorization

[Bearer](../../README.md#Bearer)

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

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\KubeAppsInstancesApi(
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kubeAppsInstancesList**
> \Cloudpap\Client\Model\KubeAppInstance[] kubeAppsInstancesList()



Kube app instance view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\KubeAppsInstancesApi(
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

[**\Cloudpap\Client\Model\KubeAppInstance[]**](../Model/KubeAppInstance.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kubeAppsInstancesPartialUpdate**
> \Cloudpap\Client\Model\KubeAppInstance kubeAppsInstancesPartialUpdate($id, $data)



Kube app instance view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\KubeAppsInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app instance.
$data = new \Cloudpap\Client\Model\KubeAppInstance(); // \Cloudpap\Client\Model\KubeAppInstance | 

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
 **data** | [**\Cloudpap\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)|  |

### Return type

[**\Cloudpap\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kubeAppsInstancesRead**
> \Cloudpap\Client\Model\KubeAppInstance kubeAppsInstancesRead($id)



Kube app instance view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\KubeAppsInstancesApi(
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

[**\Cloudpap\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kubeAppsInstancesUpdate**
> \Cloudpap\Client\Model\KubeAppInstance kubeAppsInstancesUpdate($id, $data)



Kube app instance view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\KubeAppsInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app instance.
$data = new \Cloudpap\Client\Model\KubeAppInstance(); // \Cloudpap\Client\Model\KubeAppInstance | 

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
 **data** | [**\Cloudpap\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)|  |

### Return type

[**\Cloudpap\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Swagger\Client\KubeAppsVersionsApi

All URIs are relative to *http://localhost:8000/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**kubeAppsVersionsList**](KubeAppsVersionsApi.md#kubeAppsVersionsList) | **GET** /kube-apps-versions/ | 
[**kubeAppsVersionsRead**](KubeAppsVersionsApi.md#kubeAppsVersionsRead) | **GET** /kube-apps-versions/{id}/ | 


# **kubeAppsVersionsList**
> \Swagger\Client\Model\KubeAppVersion[] kubeAppsVersionsList()



Kube app version view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KubeAppsVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->kubeAppsVersionsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubeAppsVersionsApi->kubeAppsVersionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\KubeAppVersion[]**](../Model/KubeAppVersion.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kubeAppsVersionsRead**
> \Swagger\Client\Model\KubeAppVersion kubeAppsVersionsRead($id)



Kube app version view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KubeAppsVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app version.

try {
    $result = $apiInstance->kubeAppsVersionsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubeAppsVersionsApi->kubeAppsVersionsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this kube app version. |

### Return type

[**\Swagger\Client\Model\KubeAppVersion**](../Model/KubeAppVersion.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


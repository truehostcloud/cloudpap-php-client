# Swagger\Client\KubeAppsLocationsApi

All URIs are relative to *http://localhost:8000/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**kubeAppsLocationsList**](KubeAppsLocationsApi.md#kubeAppsLocationsList) | **GET** /kube-apps-locations/ | 
[**kubeAppsLocationsRead**](KubeAppsLocationsApi.md#kubeAppsLocationsRead) | **GET** /kube-apps-locations/{id}/ | 


# **kubeAppsLocationsList**
> \Swagger\Client\Model\KubeAppsLocation[] kubeAppsLocationsList()



Kube app location view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KubeAppsLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->kubeAppsLocationsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubeAppsLocationsApi->kubeAppsLocationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\KubeAppsLocation[]**](../Model/KubeAppsLocation.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kubeAppsLocationsRead**
> \Swagger\Client\Model\KubeAppsLocation kubeAppsLocationsRead($id)



Kube app location view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KubeAppsLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube apps location.

try {
    $result = $apiInstance->kubeAppsLocationsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubeAppsLocationsApi->kubeAppsLocationsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this kube apps location. |

### Return type

[**\Swagger\Client\Model\KubeAppsLocation**](../Model/KubeAppsLocation.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


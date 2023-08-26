# Swagger\Client\KubeAppsTemplatesApi

All URIs are relative to *http://localhost:8000/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**kubeAppsTemplatesList**](KubeAppsTemplatesApi.md#kubeAppsTemplatesList) | **GET** /kube-apps-templates/ | 
[**kubeAppsTemplatesRead**](KubeAppsTemplatesApi.md#kubeAppsTemplatesRead) | **GET** /kube-apps-templates/{id}/ | 


# **kubeAppsTemplatesList**
> \Swagger\Client\Model\KubeAppTemplate[] kubeAppsTemplatesList()



Kube app template view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KubeAppsTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->kubeAppsTemplatesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubeAppsTemplatesApi->kubeAppsTemplatesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\KubeAppTemplate[]**](../Model/KubeAppTemplate.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kubeAppsTemplatesRead**
> \Swagger\Client\Model\KubeAppTemplate kubeAppsTemplatesRead($id)



Kube app template view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KubeAppsTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app template.

try {
    $result = $apiInstance->kubeAppsTemplatesRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubeAppsTemplatesApi->kubeAppsTemplatesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this kube app template. |

### Return type

[**\Swagger\Client\Model\KubeAppTemplate**](../Model/KubeAppTemplate.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


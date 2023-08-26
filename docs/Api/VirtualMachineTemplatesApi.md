# Swagger\Client\VirtualMachineTemplatesApi

All URIs are relative to *http://localhost:8000/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**virtualMachineTemplatesList**](VirtualMachineTemplatesApi.md#virtualMachineTemplatesList) | **GET** /virtual-machine-templates/ | 
[**virtualMachineTemplatesRead**](VirtualMachineTemplatesApi.md#virtualMachineTemplatesRead) | **GET** /virtual-machine-templates/{id}/ | 


# **virtualMachineTemplatesList**
> \Swagger\Client\Model\VirtualMachineTemplate[] virtualMachineTemplatesList()



Virtual machine template view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\VirtualMachineTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->virtualMachineTemplatesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachineTemplatesApi->virtualMachineTemplatesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\VirtualMachineTemplate[]**](../Model/VirtualMachineTemplate.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachineTemplatesRead**
> \Swagger\Client\Model\VirtualMachineTemplate virtualMachineTemplatesRead($id)



Virtual machine template view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\VirtualMachineTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine template.

try {
    $result = $apiInstance->virtualMachineTemplatesRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachineTemplatesApi->virtualMachineTemplatesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine template. |

### Return type

[**\Swagger\Client\Model\VirtualMachineTemplate**](../Model/VirtualMachineTemplate.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


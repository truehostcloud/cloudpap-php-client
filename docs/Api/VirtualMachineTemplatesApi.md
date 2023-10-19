# Cloudpap\Client\VirtualMachineTemplatesApi

All URIs are relative to *https://console.cloudpap.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**virtualMachineTemplatesList**](VirtualMachineTemplatesApi.md#virtualMachineTemplatesList) | **GET** /virtual-machine-templates/ | 
[**virtualMachineTemplatesRead**](VirtualMachineTemplatesApi.md#virtualMachineTemplatesRead) | **GET** /virtual-machine-templates/{id}/ | 


# **virtualMachineTemplatesList**
> \Cloudpap\Client\Model\VirtualMachineTemplate[] virtualMachineTemplatesList()



Virtual machine template view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachineTemplatesApi(
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

[**\Cloudpap\Client\Model\VirtualMachineTemplate[]**](../Model/VirtualMachineTemplate.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachineTemplatesRead**
> \Cloudpap\Client\Model\VirtualMachineTemplate virtualMachineTemplatesRead($id)



Virtual machine template view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachineTemplatesApi(
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

[**\Cloudpap\Client\Model\VirtualMachineTemplate**](../Model/VirtualMachineTemplate.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


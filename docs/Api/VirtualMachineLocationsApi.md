# Cloudpap\Client\VirtualMachineLocationsApi

All URIs are relative to *https://console.cloudpap.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**virtualMachineLocationsList**](VirtualMachineLocationsApi.md#virtualMachineLocationsList) | **GET** /virtual-machine-locations/ | 
[**virtualMachineLocationsRead**](VirtualMachineLocationsApi.md#virtualMachineLocationsRead) | **GET** /virtual-machine-locations/{id}/ | 


# **virtualMachineLocationsList**
> \Cloudpap\Client\Model\VirtualMachineLocation[] virtualMachineLocationsList()



Virtual machine location view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachineLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->virtualMachineLocationsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachineLocationsApi->virtualMachineLocationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Cloudpap\Client\Model\VirtualMachineLocation[]**](../Model/VirtualMachineLocation.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachineLocationsRead**
> \Cloudpap\Client\Model\VirtualMachineLocation virtualMachineLocationsRead($id)



Virtual machine location view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachineLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine location.

try {
    $result = $apiInstance->virtualMachineLocationsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachineLocationsApi->virtualMachineLocationsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine location. |

### Return type

[**\Cloudpap\Client\Model\VirtualMachineLocation**](../Model/VirtualMachineLocation.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


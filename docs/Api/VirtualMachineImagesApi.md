# Swagger\Client\VirtualMachineImagesApi

All URIs are relative to *http://localhost:8000/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**virtualMachineImagesList**](VirtualMachineImagesApi.md#virtualMachineImagesList) | **GET** /virtual-machine-images/ | 
[**virtualMachineImagesRead**](VirtualMachineImagesApi.md#virtualMachineImagesRead) | **GET** /virtual-machine-images/{id}/ | 


# **virtualMachineImagesList**
> \Swagger\Client\Model\VirtualMachineImage[] virtualMachineImagesList()



Virtual machine image view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\VirtualMachineImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->virtualMachineImagesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachineImagesApi->virtualMachineImagesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\VirtualMachineImage[]**](../Model/VirtualMachineImage.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachineImagesRead**
> \Swagger\Client\Model\VirtualMachineImage virtualMachineImagesRead($id)



Virtual machine image view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\VirtualMachineImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine image.

try {
    $result = $apiInstance->virtualMachineImagesRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachineImagesApi->virtualMachineImagesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine image. |

### Return type

[**\Swagger\Client\Model\VirtualMachineImage**](../Model/VirtualMachineImage.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


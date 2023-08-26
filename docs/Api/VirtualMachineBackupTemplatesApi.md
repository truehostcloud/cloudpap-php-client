# Swagger\Client\VirtualMachineBackupTemplatesApi

All URIs are relative to *http://localhost:8000/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**virtualMachineBackupTemplatesList**](VirtualMachineBackupTemplatesApi.md#virtualMachineBackupTemplatesList) | **GET** /virtual-machine-backup-templates/ | 
[**virtualMachineBackupTemplatesRead**](VirtualMachineBackupTemplatesApi.md#virtualMachineBackupTemplatesRead) | **GET** /virtual-machine-backup-templates/{id}/ | 


# **virtualMachineBackupTemplatesList**
> \Swagger\Client\Model\VirtualMachineBackupTemplate[] virtualMachineBackupTemplatesList()



Virtual machine backup template view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\VirtualMachineBackupTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->virtualMachineBackupTemplatesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachineBackupTemplatesApi->virtualMachineBackupTemplatesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\VirtualMachineBackupTemplate[]**](../Model/VirtualMachineBackupTemplate.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachineBackupTemplatesRead**
> \Swagger\Client\Model\VirtualMachineBackupTemplate virtualMachineBackupTemplatesRead($id)



Virtual machine backup template view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\VirtualMachineBackupTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine backup template.

try {
    $result = $apiInstance->virtualMachineBackupTemplatesRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachineBackupTemplatesApi->virtualMachineBackupTemplatesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine backup template. |

### Return type

[**\Swagger\Client\Model\VirtualMachineBackupTemplate**](../Model/VirtualMachineBackupTemplate.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


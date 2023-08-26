# Swagger\Client\VirtualMachineBackupsApi

All URIs are relative to *http://localhost:8000/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**virtualMachineBackupsDelete**](VirtualMachineBackupsApi.md#virtualMachineBackupsDelete) | **DELETE** /virtual-machine-backups/{id}/ | 
[**virtualMachineBackupsList**](VirtualMachineBackupsApi.md#virtualMachineBackupsList) | **GET** /virtual-machine-backups/ | 
[**virtualMachineBackupsRead**](VirtualMachineBackupsApi.md#virtualMachineBackupsRead) | **GET** /virtual-machine-backups/{id}/ | 
[**virtualMachineBackupsRestore**](VirtualMachineBackupsApi.md#virtualMachineBackupsRestore) | **POST** /virtual-machine-backups/{id}/restore/ | 


# **virtualMachineBackupsDelete**
> virtualMachineBackupsDelete($id)



Virtual machine backup view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachineBackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine backup.

try {
    $apiInstance->virtualMachineBackupsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachineBackupsApi->virtualMachineBackupsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine backup. |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachineBackupsList**
> \Swagger\Client\Model\VirtualMachineBackup[] virtualMachineBackupsList($virtual_machine)



Virtual machine backup view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachineBackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_machine = "virtual_machine_example"; // string | 

try {
    $result = $apiInstance->virtualMachineBackupsList($virtual_machine);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachineBackupsApi->virtualMachineBackupsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_machine** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\VirtualMachineBackup[]**](../Model/VirtualMachineBackup.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachineBackupsRead**
> \Swagger\Client\Model\VirtualMachineBackup virtualMachineBackupsRead($id)



Virtual machine backup view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachineBackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine backup.

try {
    $result = $apiInstance->virtualMachineBackupsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachineBackupsApi->virtualMachineBackupsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine backup. |

### Return type

[**\Swagger\Client\Model\VirtualMachineBackup**](../Model/VirtualMachineBackup.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachineBackupsRestore**
> \Swagger\Client\Model\VirtualMachineBackup virtualMachineBackupsRestore($id, $data)



Restore virtual machine backup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachineBackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine backup.
$data = new \Swagger\Client\Model\VirtualMachineBackup(); // \Swagger\Client\Model\VirtualMachineBackup | 

try {
    $result = $apiInstance->virtualMachineBackupsRestore($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachineBackupsApi->virtualMachineBackupsRestore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine backup. |
 **data** | [**\Swagger\Client\Model\VirtualMachineBackup**](../Model/VirtualMachineBackup.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachineBackup**](../Model/VirtualMachineBackup.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


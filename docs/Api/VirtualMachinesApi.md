# Cloudpap\Client\VirtualMachinesApi

All URIs are relative to *https://console.cloudpap.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**virtualMachinesChangeVmBackupTemplate**](VirtualMachinesApi.md#virtualMachinesChangeVmBackupTemplate) | **POST** /virtual-machines/{id}/change-backup-template/ | 
[**virtualMachinesChangeVmImage**](VirtualMachinesApi.md#virtualMachinesChangeVmImage) | **POST** /virtual-machines/{id}/change-image/ | 
[**virtualMachinesChangeVmTemplate**](VirtualMachinesApi.md#virtualMachinesChangeVmTemplate) | **POST** /virtual-machines/{id}/change-template/ | 
[**virtualMachinesCloneVm**](VirtualMachinesApi.md#virtualMachinesCloneVm) | **POST** /virtual-machines/{id}/clone/ | 
[**virtualMachinesCreate**](VirtualMachinesApi.md#virtualMachinesCreate) | **POST** /virtual-machines/ | 
[**virtualMachinesDelete**](VirtualMachinesApi.md#virtualMachinesDelete) | **DELETE** /virtual-machines/{id}/ | 
[**virtualMachinesDisableVmBackup**](VirtualMachinesApi.md#virtualMachinesDisableVmBackup) | **POST** /virtual-machines/{id}/disable-backup/ | 
[**virtualMachinesList**](VirtualMachinesApi.md#virtualMachinesList) | **GET** /virtual-machines/ | 
[**virtualMachinesPartialUpdate**](VirtualMachinesApi.md#virtualMachinesPartialUpdate) | **PATCH** /virtual-machines/{id}/ | 
[**virtualMachinesPauseVm**](VirtualMachinesApi.md#virtualMachinesPauseVm) | **POST** /virtual-machines/{id}/pause/ | 
[**virtualMachinesRead**](VirtualMachinesApi.md#virtualMachinesRead) | **GET** /virtual-machines/{id}/ | 
[**virtualMachinesRebuildVm**](VirtualMachinesApi.md#virtualMachinesRebuildVm) | **POST** /virtual-machines/{id}/rebuild/ | 
[**virtualMachinesResetVmPassword**](VirtualMachinesApi.md#virtualMachinesResetVmPassword) | **POST** /virtual-machines/{id}/reset-password/ | 
[**virtualMachinesRestartVm**](VirtualMachinesApi.md#virtualMachinesRestartVm) | **POST** /virtual-machines/{id}/restart/ | 
[**virtualMachinesSoftRebootVm**](VirtualMachinesApi.md#virtualMachinesSoftRebootVm) | **POST** /virtual-machines/{id}/soft-reboot/ | 
[**virtualMachinesStartVm**](VirtualMachinesApi.md#virtualMachinesStartVm) | **POST** /virtual-machines/{id}/start/ | 
[**virtualMachinesStopVm**](VirtualMachinesApi.md#virtualMachinesStopVm) | **POST** /virtual-machines/{id}/stop/ | 
[**virtualMachinesTakeVmBackup**](VirtualMachinesApi.md#virtualMachinesTakeVmBackup) | **POST** /virtual-machines/{id}/take-backup/ | 
[**virtualMachinesTakeVmSnapshot**](VirtualMachinesApi.md#virtualMachinesTakeVmSnapshot) | **POST** /virtual-machines/{id}/take-snapshot/ | 
[**virtualMachinesUnpauseVm**](VirtualMachinesApi.md#virtualMachinesUnpauseVm) | **POST** /virtual-machines/{id}/unpause/ | 
[**virtualMachinesUpdate**](VirtualMachinesApi.md#virtualMachinesUpdate) | **PUT** /virtual-machines/{id}/ | 


# **virtualMachinesChangeVmBackupTemplate**
> \Cloudpap\Client\Model\VirtualMachineChangeBackupTemplate virtualMachinesChangeVmBackupTemplate($id, $data)



Change virtual machine backup template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Cloudpap\Client\Model\VirtualMachineChangeBackupTemplate(); // \Cloudpap\Client\Model\VirtualMachineChangeBackupTemplate | 

try {
    $result = $apiInstance->virtualMachinesChangeVmBackupTemplate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesChangeVmBackupTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Cloudpap\Client\Model\VirtualMachineChangeBackupTemplate**](../Model/VirtualMachineChangeBackupTemplate.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachineChangeBackupTemplate**](../Model/VirtualMachineChangeBackupTemplate.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesChangeVmImage**
> \Cloudpap\Client\Model\VirtualMachineChangeImage virtualMachinesChangeVmImage($id, $data)



Change virtual machine image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Cloudpap\Client\Model\VirtualMachineChangeImage(); // \Cloudpap\Client\Model\VirtualMachineChangeImage | 

try {
    $result = $apiInstance->virtualMachinesChangeVmImage($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesChangeVmImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Cloudpap\Client\Model\VirtualMachineChangeImage**](../Model/VirtualMachineChangeImage.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachineChangeImage**](../Model/VirtualMachineChangeImage.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesChangeVmTemplate**
> \Cloudpap\Client\Model\VirtualMachineChangeTemplate virtualMachinesChangeVmTemplate($id, $data)



Change virtual machine template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Cloudpap\Client\Model\VirtualMachineChangeTemplate(); // \Cloudpap\Client\Model\VirtualMachineChangeTemplate | 

try {
    $result = $apiInstance->virtualMachinesChangeVmTemplate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesChangeVmTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Cloudpap\Client\Model\VirtualMachineChangeTemplate**](../Model/VirtualMachineChangeTemplate.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachineChangeTemplate**](../Model/VirtualMachineChangeTemplate.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesCloneVm**
> \Cloudpap\Client\Model\VirtualMachineActions virtualMachinesCloneVm($id, $data)



Clone virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Cloudpap\Client\Model\VirtualMachineActions(); // \Cloudpap\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->virtualMachinesCloneVm($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesCloneVm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesCreate**
> \Cloudpap\Client\Model\VirtualMachine virtualMachinesCreate($data)



Override create method to set tenant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Cloudpap\Client\Model\VirtualMachine(); // \Cloudpap\Client\Model\VirtualMachine | 

try {
    $result = $apiInstance->virtualMachinesCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Cloudpap\Client\Model\VirtualMachine**](../Model/VirtualMachine.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachine**](../Model/VirtualMachine.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesDelete**
> virtualMachinesDelete($id)



Virtual machine view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $apiInstance->virtualMachinesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesDisableVmBackup**
> \Cloudpap\Client\Model\VirtualMachineActions virtualMachinesDisableVmBackup($id, $data)



Disable virtual machine backup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Cloudpap\Client\Model\VirtualMachineActions(); // \Cloudpap\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->virtualMachinesDisableVmBackup($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesDisableVmBackup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesList**
> \Cloudpap\Client\Model\VirtualMachine[] virtualMachinesList()



Virtual machine view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->virtualMachinesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Cloudpap\Client\Model\VirtualMachine[]**](../Model/VirtualMachine.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesPartialUpdate**
> \Cloudpap\Client\Model\VirtualMachine virtualMachinesPartialUpdate($id, $data)



Virtual machine view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Cloudpap\Client\Model\VirtualMachine(); // \Cloudpap\Client\Model\VirtualMachine | 

try {
    $result = $apiInstance->virtualMachinesPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Cloudpap\Client\Model\VirtualMachine**](../Model/VirtualMachine.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachine**](../Model/VirtualMachine.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesPauseVm**
> \Cloudpap\Client\Model\VirtualMachineActions virtualMachinesPauseVm($id, $data)



Pause virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Cloudpap\Client\Model\VirtualMachineActions(); // \Cloudpap\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->virtualMachinesPauseVm($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesPauseVm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesRead**
> \Cloudpap\Client\Model\VirtualMachine virtualMachinesRead($id)



Virtual machine view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->virtualMachinesRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |

### Return type

[**\Cloudpap\Client\Model\VirtualMachine**](../Model/VirtualMachine.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesRebuildVm**
> \Cloudpap\Client\Model\VirtualMachineActions virtualMachinesRebuildVm($id, $data)



Rebuild virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Cloudpap\Client\Model\VirtualMachineActions(); // \Cloudpap\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->virtualMachinesRebuildVm($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesRebuildVm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesResetVmPassword**
> \Cloudpap\Client\Model\VirtualMachinePasswordReset virtualMachinesResetVmPassword($id, $data)



Reset virtual machine password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Cloudpap\Client\Model\VirtualMachinePasswordReset(); // \Cloudpap\Client\Model\VirtualMachinePasswordReset | 

try {
    $result = $apiInstance->virtualMachinesResetVmPassword($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesResetVmPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Cloudpap\Client\Model\VirtualMachinePasswordReset**](../Model/VirtualMachinePasswordReset.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachinePasswordReset**](../Model/VirtualMachinePasswordReset.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesRestartVm**
> \Cloudpap\Client\Model\VirtualMachineActions virtualMachinesRestartVm($id, $data)



Restart virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Cloudpap\Client\Model\VirtualMachineActions(); // \Cloudpap\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->virtualMachinesRestartVm($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesRestartVm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesSoftRebootVm**
> \Cloudpap\Client\Model\VirtualMachineActions virtualMachinesSoftRebootVm($id, $data)



Soft reboot virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Cloudpap\Client\Model\VirtualMachineActions(); // \Cloudpap\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->virtualMachinesSoftRebootVm($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesSoftRebootVm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesStartVm**
> \Cloudpap\Client\Model\VirtualMachineActions virtualMachinesStartVm($id, $data)



Start virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Cloudpap\Client\Model\VirtualMachineActions(); // \Cloudpap\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->virtualMachinesStartVm($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesStartVm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesStopVm**
> \Cloudpap\Client\Model\VirtualMachineActions virtualMachinesStopVm($id, $data)



Stop virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Cloudpap\Client\Model\VirtualMachineActions(); // \Cloudpap\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->virtualMachinesStopVm($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesStopVm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesTakeVmBackup**
> \Cloudpap\Client\Model\VirtualMachineActions virtualMachinesTakeVmBackup($id, $data)



Take virtual machine backup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Cloudpap\Client\Model\VirtualMachineActions(); // \Cloudpap\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->virtualMachinesTakeVmBackup($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesTakeVmBackup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesTakeVmSnapshot**
> \Cloudpap\Client\Model\VirtualMachineActions virtualMachinesTakeVmSnapshot($id, $data)



Take virtual machine snapshot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Cloudpap\Client\Model\VirtualMachineActions(); // \Cloudpap\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->virtualMachinesTakeVmSnapshot($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesTakeVmSnapshot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesUnpauseVm**
> \Cloudpap\Client\Model\VirtualMachineActions virtualMachinesUnpauseVm($id, $data)



Unpause virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Cloudpap\Client\Model\VirtualMachineActions(); // \Cloudpap\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->virtualMachinesUnpauseVm($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesUnpauseVm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesUpdate**
> \Cloudpap\Client\Model\VirtualMachine virtualMachinesUpdate($id, $data)



Virtual machine view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Cloudpap\Client\Model\VirtualMachine(); // \Cloudpap\Client\Model\VirtualMachine | 

try {
    $result = $apiInstance->virtualMachinesUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->virtualMachinesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Cloudpap\Client\Model\VirtualMachine**](../Model/VirtualMachine.md)|  |

### Return type

[**\Cloudpap\Client\Model\VirtualMachine**](../Model/VirtualMachine.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


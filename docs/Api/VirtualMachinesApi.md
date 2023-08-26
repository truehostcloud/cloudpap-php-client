# Swagger\Client\VirtualMachinesApi

All URIs are relative to *http://localhost:8000/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**virtualMachinesChangeVmBackupTemplate**](VirtualMachinesApi.md#virtualMachinesChangeVmBackupTemplate) | **POST** /virtual-machines/{id}/change-backup-template/ | 
[**virtualMachinesChangeVmTemplate**](VirtualMachinesApi.md#virtualMachinesChangeVmTemplate) | **POST** /virtual-machines/{id}/change-template/ | 
[**virtualMachinesCreate**](VirtualMachinesApi.md#virtualMachinesCreate) | **POST** /virtual-machines/ | 
[**virtualMachinesDelete**](VirtualMachinesApi.md#virtualMachinesDelete) | **DELETE** /virtual-machines/{id}/ | 
[**virtualMachinesDisableVmBackup**](VirtualMachinesApi.md#virtualMachinesDisableVmBackup) | **POST** /virtual-machines/{id}/disable-backup/ | 
[**virtualMachinesList**](VirtualMachinesApi.md#virtualMachinesList) | **GET** /virtual-machines/ | 
[**virtualMachinesPartialUpdate**](VirtualMachinesApi.md#virtualMachinesPartialUpdate) | **PATCH** /virtual-machines/{id}/ | 
[**virtualMachinesPauseVm**](VirtualMachinesApi.md#virtualMachinesPauseVm) | **POST** /virtual-machines/{id}/pause/ | 
[**virtualMachinesRead**](VirtualMachinesApi.md#virtualMachinesRead) | **GET** /virtual-machines/{id}/ | 
[**virtualMachinesRebuildVm**](VirtualMachinesApi.md#virtualMachinesRebuildVm) | **POST** /virtual-machines/{id}/rebuild/ | 
[**virtualMachinesRestartVm**](VirtualMachinesApi.md#virtualMachinesRestartVm) | **POST** /virtual-machines/{id}/restart/ | 
[**virtualMachinesSoftRebootVm**](VirtualMachinesApi.md#virtualMachinesSoftRebootVm) | **POST** /virtual-machines/{id}/soft-reboot/ | 
[**virtualMachinesStartVm**](VirtualMachinesApi.md#virtualMachinesStartVm) | **POST** /virtual-machines/{id}/start/ | 
[**virtualMachinesStopVm**](VirtualMachinesApi.md#virtualMachinesStopVm) | **POST** /virtual-machines/{id}/stop/ | 
[**virtualMachinesTakeVmBackup**](VirtualMachinesApi.md#virtualMachinesTakeVmBackup) | **POST** /virtual-machines/{id}/take-backup/ | 
[**virtualMachinesTakeVmSnapshot**](VirtualMachinesApi.md#virtualMachinesTakeVmSnapshot) | **POST** /virtual-machines/{id}/take-snapshot/ | 
[**virtualMachinesUnpauseVm**](VirtualMachinesApi.md#virtualMachinesUnpauseVm) | **POST** /virtual-machines/{id}/unpause/ | 
[**virtualMachinesUpdate**](VirtualMachinesApi.md#virtualMachinesUpdate) | **PUT** /virtual-machines/{id}/ | 


# **virtualMachinesChangeVmBackupTemplate**
> \Swagger\Client\Model\VirtualMachineChangeBackupTemplate virtualMachinesChangeVmBackupTemplate($id, $data)



Change virtual machine backup template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineChangeBackupTemplate(); // \Swagger\Client\Model\VirtualMachineChangeBackupTemplate | 

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
 **data** | [**\Swagger\Client\Model\VirtualMachineChangeBackupTemplate**](../Model/VirtualMachineChangeBackupTemplate.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachineChangeBackupTemplate**](../Model/VirtualMachineChangeBackupTemplate.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesChangeVmTemplate**
> \Swagger\Client\Model\VirtualMachineChangeTemplate virtualMachinesChangeVmTemplate($id, $data)



Change virtual machine template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineChangeTemplate(); // \Swagger\Client\Model\VirtualMachineChangeTemplate | 

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
 **data** | [**\Swagger\Client\Model\VirtualMachineChangeTemplate**](../Model/VirtualMachineChangeTemplate.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachineChangeTemplate**](../Model/VirtualMachineChangeTemplate.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesCreate**
> \Swagger\Client\Model\VirtualMachine virtualMachinesCreate($data)



Override create method to set tenant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\VirtualMachine(); // \Swagger\Client\Model\VirtualMachine | 

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
 **data** | [**\Swagger\Client\Model\VirtualMachine**](../Model/VirtualMachine.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachine**](../Model/VirtualMachine.md)

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
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
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
> \Swagger\Client\Model\VirtualMachineActions virtualMachinesDisableVmBackup($id, $data)



Disable virtual machine backup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

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
 **data** | [**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesList**
> \Swagger\Client\Model\VirtualMachine[] virtualMachinesList()



Virtual machine view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
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

[**\Swagger\Client\Model\VirtualMachine[]**](../Model/VirtualMachine.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesPartialUpdate**
> \Swagger\Client\Model\VirtualMachine virtualMachinesPartialUpdate($id, $data)



Virtual machine view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachine(); // \Swagger\Client\Model\VirtualMachine | 

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
 **data** | [**\Swagger\Client\Model\VirtualMachine**](../Model/VirtualMachine.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachine**](../Model/VirtualMachine.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesPauseVm**
> \Swagger\Client\Model\VirtualMachineActions virtualMachinesPauseVm($id, $data)



Pause virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

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
 **data** | [**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesRead**
> \Swagger\Client\Model\VirtualMachine virtualMachinesRead($id)



Virtual machine view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
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

[**\Swagger\Client\Model\VirtualMachine**](../Model/VirtualMachine.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesRebuildVm**
> \Swagger\Client\Model\VirtualMachineActions virtualMachinesRebuildVm($id, $data)



Rebuild virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

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
 **data** | [**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesRestartVm**
> \Swagger\Client\Model\VirtualMachineActions virtualMachinesRestartVm($id, $data)



Restart virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

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
 **data** | [**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesSoftRebootVm**
> \Swagger\Client\Model\VirtualMachineActions virtualMachinesSoftRebootVm($id, $data)



Soft reboot virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

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
 **data** | [**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesStartVm**
> \Swagger\Client\Model\VirtualMachineActions virtualMachinesStartVm($id, $data)



Start virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

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
 **data** | [**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesStopVm**
> \Swagger\Client\Model\VirtualMachineActions virtualMachinesStopVm($id, $data)



Stop virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

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
 **data** | [**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesTakeVmBackup**
> \Swagger\Client\Model\VirtualMachineActions virtualMachinesTakeVmBackup($id, $data)



Take virtual machine backup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

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
 **data** | [**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesTakeVmSnapshot**
> \Swagger\Client\Model\VirtualMachineActions virtualMachinesTakeVmSnapshot($id, $data)



Take virtual machine snapshot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

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
 **data** | [**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesUnpauseVm**
> \Swagger\Client\Model\VirtualMachineActions virtualMachinesUnpauseVm($id, $data)



Unpause virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

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
 **data** | [**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachineActions**](../Model/VirtualMachineActions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualMachinesUpdate**
> \Swagger\Client\Model\VirtualMachine virtualMachinesUpdate($id, $data)



Virtual machine view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachine(); // \Swagger\Client\Model\VirtualMachine | 

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
 **data** | [**\Swagger\Client\Model\VirtualMachine**](../Model/VirtualMachine.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachine**](../Model/VirtualMachine.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


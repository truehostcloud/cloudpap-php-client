# Swagger\Client\ApiApi

All URIs are relative to *https://console.cloudpap.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiBillingCardsCreate**](ApiApi.md#apiBillingCardsCreate) | **POST** /api/billing/cards/ | 
[**apiBillingCardsDefault**](ApiApi.md#apiBillingCardsDefault) | **PATCH** /api/billing/cards/{id}/default/ | 
[**apiBillingCardsDelete**](ApiApi.md#apiBillingCardsDelete) | **DELETE** /api/billing/cards/{id}/ | 
[**apiBillingCardsList**](ApiApi.md#apiBillingCardsList) | **GET** /api/billing/cards/ | 
[**apiBillingCardsRead**](ApiApi.md#apiBillingCardsRead) | **GET** /api/billing/cards/{id}/ | 
[**apiBillingCustomersAppliedCoupons**](ApiApi.md#apiBillingCustomersAppliedCoupons) | **GET** /api/billing/customers/{id}/applied-coupons/ | 
[**apiBillingCustomersApplyCoupon**](ApiApi.md#apiBillingCustomersApplyCoupon) | **POST** /api/billing/customers/{id}/apply-coupon/ | 
[**apiBillingCustomersBillingWallet**](ApiApi.md#apiBillingCustomersBillingWallet) | **GET** /api/billing/customers/{id}/billing-wallet/ | 
[**apiBillingCustomersList**](ApiApi.md#apiBillingCustomersList) | **GET** /api/billing/customers/ | 
[**apiBillingCustomersPartialUpdate**](ApiApi.md#apiBillingCustomersPartialUpdate) | **PATCH** /api/billing/customers/{id}/ | 
[**apiBillingCustomersRead**](ApiApi.md#apiBillingCustomersRead) | **GET** /api/billing/customers/{id}/ | 
[**apiBillingCustomersUpdate**](ApiApi.md#apiBillingCustomersUpdate) | **PUT** /api/billing/customers/{id}/ | 
[**apiBillingInvoicesList**](ApiApi.md#apiBillingInvoicesList) | **GET** /api/billing/invoices/ | 
[**apiBillingInvoicesRead**](ApiApi.md#apiBillingInvoicesRead) | **GET** /api/billing/invoices/{id}/ | 
[**apiBillingPaymentMethodsCreate**](ApiApi.md#apiBillingPaymentMethodsCreate) | **POST** /api/billing/payment-methods/ | 
[**apiBillingPaymentMethodsDelete**](ApiApi.md#apiBillingPaymentMethodsDelete) | **DELETE** /api/billing/payment-methods/{id}/ | 
[**apiBillingPaymentMethodsList**](ApiApi.md#apiBillingPaymentMethodsList) | **GET** /api/billing/payment-methods/ | 
[**apiBillingPaymentMethodsPartialUpdate**](ApiApi.md#apiBillingPaymentMethodsPartialUpdate) | **PATCH** /api/billing/payment-methods/{id}/ | 
[**apiBillingPaymentMethodsRead**](ApiApi.md#apiBillingPaymentMethodsRead) | **GET** /api/billing/payment-methods/{id}/ | 
[**apiBillingPaymentMethodsUpdate**](ApiApi.md#apiBillingPaymentMethodsUpdate) | **PUT** /api/billing/payment-methods/{id}/ | 
[**apiBillingTransactionsList**](ApiApi.md#apiBillingTransactionsList) | **GET** /api/billing/transactions/ | 
[**apiBillingTransactionsRead**](ApiApi.md#apiBillingTransactionsRead) | **GET** /api/billing/transactions/{id}/ | 
[**apiKubeAppsInstancesConnectDomain**](ApiApi.md#apiKubeAppsInstancesConnectDomain) | **POST** /api/kube-apps-instances/{id}/connect-domain/ | 
[**apiKubeAppsInstancesCreate**](ApiApi.md#apiKubeAppsInstancesCreate) | **POST** /api/kube-apps-instances/ | 
[**apiKubeAppsInstancesDelete**](ApiApi.md#apiKubeAppsInstancesDelete) | **DELETE** /api/kube-apps-instances/{id}/ | 
[**apiKubeAppsInstancesList**](ApiApi.md#apiKubeAppsInstancesList) | **GET** /api/kube-apps-instances/ | 
[**apiKubeAppsInstancesPartialUpdate**](ApiApi.md#apiKubeAppsInstancesPartialUpdate) | **PATCH** /api/kube-apps-instances/{id}/ | 
[**apiKubeAppsInstancesRead**](ApiApi.md#apiKubeAppsInstancesRead) | **GET** /api/kube-apps-instances/{id}/ | 
[**apiKubeAppsInstancesUpdate**](ApiApi.md#apiKubeAppsInstancesUpdate) | **PUT** /api/kube-apps-instances/{id}/ | 
[**apiKubeAppsList**](ApiApi.md#apiKubeAppsList) | **GET** /api/kube-apps/ | 
[**apiKubeAppsLocationsList**](ApiApi.md#apiKubeAppsLocationsList) | **GET** /api/kube-apps-locations/ | 
[**apiKubeAppsLocationsRead**](ApiApi.md#apiKubeAppsLocationsRead) | **GET** /api/kube-apps-locations/{id}/ | 
[**apiKubeAppsRead**](ApiApi.md#apiKubeAppsRead) | **GET** /api/kube-apps/{id}/ | 
[**apiKubeAppsTemplatesList**](ApiApi.md#apiKubeAppsTemplatesList) | **GET** /api/kube-apps-templates/ | 
[**apiKubeAppsTemplatesRead**](ApiApi.md#apiKubeAppsTemplatesRead) | **GET** /api/kube-apps-templates/{id}/ | 
[**apiKubeAppsVersionsList**](ApiApi.md#apiKubeAppsVersionsList) | **GET** /api/kube-apps-versions/ | 
[**apiKubeAppsVersionsRead**](ApiApi.md#apiKubeAppsVersionsRead) | **GET** /api/kube-apps-versions/{id}/ | 
[**apiMarketingFocusItemsList**](ApiApi.md#apiMarketingFocusItemsList) | **GET** /api/marketing/focus-items/ | 
[**apiMarketingFocusItemsRead**](ApiApi.md#apiMarketingFocusItemsRead) | **GET** /api/marketing/focus-items/{id}/ | 
[**apiSocialAuthCreate**](ApiApi.md#apiSocialAuthCreate) | **POST** /api/social-auth/ | 
[**apiSocialAuthGithubAuth**](ApiApi.md#apiSocialAuthGithubAuth) | **POST** /api/social-auth/github/ | 
[**apiSocialAuthGoogleAuth**](ApiApi.md#apiSocialAuthGoogleAuth) | **POST** /api/social-auth/google/ | 
[**apiTokenVerifyCreate**](ApiApi.md#apiTokenVerifyCreate) | **POST** /api/token/verify/ | 
[**apiVirtualMachineBackupTemplatesList**](ApiApi.md#apiVirtualMachineBackupTemplatesList) | **GET** /api/virtual-machine-backup-templates/ | 
[**apiVirtualMachineBackupTemplatesRead**](ApiApi.md#apiVirtualMachineBackupTemplatesRead) | **GET** /api/virtual-machine-backup-templates/{id}/ | 
[**apiVirtualMachineBackupsDelete**](ApiApi.md#apiVirtualMachineBackupsDelete) | **DELETE** /api/virtual-machine-backups/{id}/ | 
[**apiVirtualMachineBackupsList**](ApiApi.md#apiVirtualMachineBackupsList) | **GET** /api/virtual-machine-backups/ | 
[**apiVirtualMachineBackupsRead**](ApiApi.md#apiVirtualMachineBackupsRead) | **GET** /api/virtual-machine-backups/{id}/ | 
[**apiVirtualMachineBackupsRestore**](ApiApi.md#apiVirtualMachineBackupsRestore) | **POST** /api/virtual-machine-backups/{id}/restore/ | 
[**apiVirtualMachineImagesList**](ApiApi.md#apiVirtualMachineImagesList) | **GET** /api/virtual-machine-images/ | 
[**apiVirtualMachineImagesRead**](ApiApi.md#apiVirtualMachineImagesRead) | **GET** /api/virtual-machine-images/{id}/ | 
[**apiVirtualMachineLocationsList**](ApiApi.md#apiVirtualMachineLocationsList) | **GET** /api/virtual-machine-locations/ | 
[**apiVirtualMachineLocationsRead**](ApiApi.md#apiVirtualMachineLocationsRead) | **GET** /api/virtual-machine-locations/{id}/ | 
[**apiVirtualMachineTemplatesList**](ApiApi.md#apiVirtualMachineTemplatesList) | **GET** /api/virtual-machine-templates/ | 
[**apiVirtualMachineTemplatesRead**](ApiApi.md#apiVirtualMachineTemplatesRead) | **GET** /api/virtual-machine-templates/{id}/ | 
[**apiVirtualMachinesChangeVmBackupTemplate**](ApiApi.md#apiVirtualMachinesChangeVmBackupTemplate) | **POST** /api/virtual-machines/{id}/change-backup-template/ | 
[**apiVirtualMachinesChangeVmImage**](ApiApi.md#apiVirtualMachinesChangeVmImage) | **POST** /api/virtual-machines/{id}/change-image/ | 
[**apiVirtualMachinesChangeVmTemplate**](ApiApi.md#apiVirtualMachinesChangeVmTemplate) | **POST** /api/virtual-machines/{id}/change-template/ | 
[**apiVirtualMachinesCloneVm**](ApiApi.md#apiVirtualMachinesCloneVm) | **POST** /api/virtual-machines/{id}/clone/ | 
[**apiVirtualMachinesCreate**](ApiApi.md#apiVirtualMachinesCreate) | **POST** /api/virtual-machines/ | 
[**apiVirtualMachinesDelete**](ApiApi.md#apiVirtualMachinesDelete) | **DELETE** /api/virtual-machines/{id}/ | 
[**apiVirtualMachinesDisableVmBackup**](ApiApi.md#apiVirtualMachinesDisableVmBackup) | **POST** /api/virtual-machines/{id}/disable-backup/ | 
[**apiVirtualMachinesList**](ApiApi.md#apiVirtualMachinesList) | **GET** /api/virtual-machines/ | 
[**apiVirtualMachinesPartialUpdate**](ApiApi.md#apiVirtualMachinesPartialUpdate) | **PATCH** /api/virtual-machines/{id}/ | 
[**apiVirtualMachinesPauseVm**](ApiApi.md#apiVirtualMachinesPauseVm) | **POST** /api/virtual-machines/{id}/pause/ | 
[**apiVirtualMachinesRead**](ApiApi.md#apiVirtualMachinesRead) | **GET** /api/virtual-machines/{id}/ | 
[**apiVirtualMachinesRebuildVm**](ApiApi.md#apiVirtualMachinesRebuildVm) | **POST** /api/virtual-machines/{id}/rebuild/ | 
[**apiVirtualMachinesResetVmPassword**](ApiApi.md#apiVirtualMachinesResetVmPassword) | **POST** /api/virtual-machines/{id}/reset-password/ | 
[**apiVirtualMachinesRestartVm**](ApiApi.md#apiVirtualMachinesRestartVm) | **POST** /api/virtual-machines/{id}/restart/ | 
[**apiVirtualMachinesSoftRebootVm**](ApiApi.md#apiVirtualMachinesSoftRebootVm) | **POST** /api/virtual-machines/{id}/soft-reboot/ | 
[**apiVirtualMachinesStartVm**](ApiApi.md#apiVirtualMachinesStartVm) | **POST** /api/virtual-machines/{id}/start/ | 
[**apiVirtualMachinesStopVm**](ApiApi.md#apiVirtualMachinesStopVm) | **POST** /api/virtual-machines/{id}/stop/ | 
[**apiVirtualMachinesTakeVmBackup**](ApiApi.md#apiVirtualMachinesTakeVmBackup) | **POST** /api/virtual-machines/{id}/take-backup/ | 
[**apiVirtualMachinesTakeVmSnapshot**](ApiApi.md#apiVirtualMachinesTakeVmSnapshot) | **POST** /api/virtual-machines/{id}/take-snapshot/ | 
[**apiVirtualMachinesUnpauseVm**](ApiApi.md#apiVirtualMachinesUnpauseVm) | **POST** /api/virtual-machines/{id}/unpause/ | 
[**apiVirtualMachinesUpdate**](ApiApi.md#apiVirtualMachinesUpdate) | **PUT** /api/virtual-machines/{id}/ | 


# **apiBillingCardsCreate**
> \Swagger\Client\Model\BillingCard apiBillingCardsCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\BillingCard(); // \Swagger\Client\Model\BillingCard | 

try {
    $result = $apiInstance->apiBillingCardsCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingCardsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\BillingCard**](../Model/BillingCard.md)|  |

### Return type

[**\Swagger\Client\Model\BillingCard**](../Model/BillingCard.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingCardsDefault**
> \Swagger\Client\Model\BillingCard apiBillingCardsDefault($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this billing card.
$data = new \Swagger\Client\Model\BillingCard(); // \Swagger\Client\Model\BillingCard | 

try {
    $result = $apiInstance->apiBillingCardsDefault($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingCardsDefault: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this billing card. |
 **data** | [**\Swagger\Client\Model\BillingCard**](../Model/BillingCard.md)|  |

### Return type

[**\Swagger\Client\Model\BillingCard**](../Model/BillingCard.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingCardsDelete**
> apiBillingCardsDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this billing card.

try {
    $apiInstance->apiBillingCardsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingCardsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this billing card. |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingCardsList**
> \Swagger\Client\Model\BillingCard[] apiBillingCardsList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiBillingCardsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingCardsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BillingCard[]**](../Model/BillingCard.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingCardsRead**
> \Swagger\Client\Model\BillingCard apiBillingCardsRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this billing card.

try {
    $result = $apiInstance->apiBillingCardsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingCardsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this billing card. |

### Return type

[**\Swagger\Client\Model\BillingCard**](../Model/BillingCard.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingCustomersAppliedCoupons**
> \Swagger\Client\Model\BillingCustomer apiBillingCustomersAppliedCoupons($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tenant.

try {
    $result = $apiInstance->apiBillingCustomersAppliedCoupons($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingCustomersAppliedCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this tenant. |

### Return type

[**\Swagger\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingCustomersApplyCoupon**
> \Swagger\Client\Model\CouponClaim apiBillingCustomersApplyCoupon($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tenant.
$data = new \Swagger\Client\Model\CouponClaim(); // \Swagger\Client\Model\CouponClaim | 

try {
    $result = $apiInstance->apiBillingCustomersApplyCoupon($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingCustomersApplyCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this tenant. |
 **data** | [**\Swagger\Client\Model\CouponClaim**](../Model/CouponClaim.md)|  |

### Return type

[**\Swagger\Client\Model\CouponClaim**](../Model/CouponClaim.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingCustomersBillingWallet**
> \Swagger\Client\Model\BillingCustomer apiBillingCustomersBillingWallet($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tenant.

try {
    $result = $apiInstance->apiBillingCustomersBillingWallet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingCustomersBillingWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this tenant. |

### Return type

[**\Swagger\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingCustomersList**
> \Swagger\Client\Model\BillingCustomer[] apiBillingCustomersList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiBillingCustomersList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingCustomersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BillingCustomer[]**](../Model/BillingCustomer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingCustomersPartialUpdate**
> \Swagger\Client\Model\BillingCustomer apiBillingCustomersPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tenant.
$data = new \Swagger\Client\Model\BillingCustomer(); // \Swagger\Client\Model\BillingCustomer | 

try {
    $result = $apiInstance->apiBillingCustomersPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingCustomersPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this tenant. |
 **data** | [**\Swagger\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)|  |

### Return type

[**\Swagger\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingCustomersRead**
> \Swagger\Client\Model\BillingCustomer apiBillingCustomersRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tenant.

try {
    $result = $apiInstance->apiBillingCustomersRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingCustomersRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this tenant. |

### Return type

[**\Swagger\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingCustomersUpdate**
> \Swagger\Client\Model\BillingCustomer apiBillingCustomersUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tenant.
$data = new \Swagger\Client\Model\BillingCustomer(); // \Swagger\Client\Model\BillingCustomer | 

try {
    $result = $apiInstance->apiBillingCustomersUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingCustomersUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this tenant. |
 **data** | [**\Swagger\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)|  |

### Return type

[**\Swagger\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingInvoicesList**
> \Swagger\Client\Model\BillingInvoice[] apiBillingInvoicesList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiBillingInvoicesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingInvoicesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BillingInvoice[]**](../Model/BillingInvoice.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingInvoicesRead**
> \Swagger\Client\Model\BillingInvoice apiBillingInvoicesRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this invoice.

try {
    $result = $apiInstance->apiBillingInvoicesRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingInvoicesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this invoice. |

### Return type

[**\Swagger\Client\Model\BillingInvoice**](../Model/BillingInvoice.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingPaymentMethodsCreate**
> \Swagger\Client\Model\BillingPaymentMethod apiBillingPaymentMethodsCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\BillingPaymentMethod(); // \Swagger\Client\Model\BillingPaymentMethod | 

try {
    $result = $apiInstance->apiBillingPaymentMethodsCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingPaymentMethodsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)|  |

### Return type

[**\Swagger\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingPaymentMethodsDelete**
> apiBillingPaymentMethodsDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this payment method.

try {
    $apiInstance->apiBillingPaymentMethodsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingPaymentMethodsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this payment method. |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingPaymentMethodsList**
> \Swagger\Client\Model\BillingPaymentMethod[] apiBillingPaymentMethodsList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiBillingPaymentMethodsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingPaymentMethodsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BillingPaymentMethod[]**](../Model/BillingPaymentMethod.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingPaymentMethodsPartialUpdate**
> \Swagger\Client\Model\BillingPaymentMethod apiBillingPaymentMethodsPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this payment method.
$data = new \Swagger\Client\Model\BillingPaymentMethod(); // \Swagger\Client\Model\BillingPaymentMethod | 

try {
    $result = $apiInstance->apiBillingPaymentMethodsPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingPaymentMethodsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this payment method. |
 **data** | [**\Swagger\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)|  |

### Return type

[**\Swagger\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingPaymentMethodsRead**
> \Swagger\Client\Model\BillingPaymentMethod apiBillingPaymentMethodsRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this payment method.

try {
    $result = $apiInstance->apiBillingPaymentMethodsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingPaymentMethodsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this payment method. |

### Return type

[**\Swagger\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingPaymentMethodsUpdate**
> \Swagger\Client\Model\BillingPaymentMethod apiBillingPaymentMethodsUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this payment method.
$data = new \Swagger\Client\Model\BillingPaymentMethod(); // \Swagger\Client\Model\BillingPaymentMethod | 

try {
    $result = $apiInstance->apiBillingPaymentMethodsUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingPaymentMethodsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this payment method. |
 **data** | [**\Swagger\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)|  |

### Return type

[**\Swagger\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingTransactionsList**
> \Swagger\Client\Model\BillingTransaction[] apiBillingTransactionsList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiBillingTransactionsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingTransactionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BillingTransaction[]**](../Model/BillingTransaction.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBillingTransactionsRead**
> \Swagger\Client\Model\BillingTransaction apiBillingTransactionsRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this transaction.

try {
    $result = $apiInstance->apiBillingTransactionsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiBillingTransactionsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this transaction. |

### Return type

[**\Swagger\Client\Model\BillingTransaction**](../Model/BillingTransaction.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiKubeAppsInstancesConnectDomain**
> \Swagger\Client\Model\ConnectDomain apiKubeAppsInstancesConnectDomain($id, $data)



Connect a domain to a KubeAppInstance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app instance.
$data = new \Swagger\Client\Model\ConnectDomain(); // \Swagger\Client\Model\ConnectDomain | 

try {
    $result = $apiInstance->apiKubeAppsInstancesConnectDomain($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiKubeAppsInstancesConnectDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this kube app instance. |
 **data** | [**\Swagger\Client\Model\ConnectDomain**](../Model/ConnectDomain.md)|  |

### Return type

[**\Swagger\Client\Model\ConnectDomain**](../Model/ConnectDomain.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiKubeAppsInstancesCreate**
> \Swagger\Client\Model\KubeAppInstance apiKubeAppsInstancesCreate($data)



Override create method to set tenant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\KubeAppInstance(); // \Swagger\Client\Model\KubeAppInstance | 

try {
    $result = $apiInstance->apiKubeAppsInstancesCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiKubeAppsInstancesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)|  |

### Return type

[**\Swagger\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiKubeAppsInstancesDelete**
> apiKubeAppsInstancesDelete($id)



Kube app instance view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app instance.

try {
    $apiInstance->apiKubeAppsInstancesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiKubeAppsInstancesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this kube app instance. |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiKubeAppsInstancesList**
> \Swagger\Client\Model\KubeAppInstance[] apiKubeAppsInstancesList()



Kube app instance view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiKubeAppsInstancesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiKubeAppsInstancesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\KubeAppInstance[]**](../Model/KubeAppInstance.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiKubeAppsInstancesPartialUpdate**
> \Swagger\Client\Model\KubeAppInstance apiKubeAppsInstancesPartialUpdate($id, $data)



Kube app instance view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app instance.
$data = new \Swagger\Client\Model\KubeAppInstance(); // \Swagger\Client\Model\KubeAppInstance | 

try {
    $result = $apiInstance->apiKubeAppsInstancesPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiKubeAppsInstancesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this kube app instance. |
 **data** | [**\Swagger\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)|  |

### Return type

[**\Swagger\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiKubeAppsInstancesRead**
> \Swagger\Client\Model\KubeAppInstance apiKubeAppsInstancesRead($id)



Kube app instance view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app instance.

try {
    $result = $apiInstance->apiKubeAppsInstancesRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiKubeAppsInstancesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this kube app instance. |

### Return type

[**\Swagger\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiKubeAppsInstancesUpdate**
> \Swagger\Client\Model\KubeAppInstance apiKubeAppsInstancesUpdate($id, $data)



Kube app instance view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app instance.
$data = new \Swagger\Client\Model\KubeAppInstance(); // \Swagger\Client\Model\KubeAppInstance | 

try {
    $result = $apiInstance->apiKubeAppsInstancesUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiKubeAppsInstancesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this kube app instance. |
 **data** | [**\Swagger\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)|  |

### Return type

[**\Swagger\Client\Model\KubeAppInstance**](../Model/KubeAppInstance.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiKubeAppsList**
> \Swagger\Client\Model\KubeApp[] apiKubeAppsList()



Kube app view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiKubeAppsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiKubeAppsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\KubeApp[]**](../Model/KubeApp.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiKubeAppsLocationsList**
> \Swagger\Client\Model\KubeAppsLocation[] apiKubeAppsLocationsList()



Kube app location view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiKubeAppsLocationsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiKubeAppsLocationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\KubeAppsLocation[]**](../Model/KubeAppsLocation.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiKubeAppsLocationsRead**
> \Swagger\Client\Model\KubeAppsLocation apiKubeAppsLocationsRead($id)



Kube app location view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube apps location.

try {
    $result = $apiInstance->apiKubeAppsLocationsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiKubeAppsLocationsRead: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiKubeAppsRead**
> \Swagger\Client\Model\KubeApp apiKubeAppsRead($id)



Kube app view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app.

try {
    $result = $apiInstance->apiKubeAppsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiKubeAppsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this kube app. |

### Return type

[**\Swagger\Client\Model\KubeApp**](../Model/KubeApp.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiKubeAppsTemplatesList**
> \Swagger\Client\Model\KubeAppTemplate[] apiKubeAppsTemplatesList()



Kube app template view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiKubeAppsTemplatesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiKubeAppsTemplatesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\KubeAppTemplate[]**](../Model/KubeAppTemplate.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiKubeAppsTemplatesRead**
> \Swagger\Client\Model\KubeAppTemplate apiKubeAppsTemplatesRead($id)



Kube app template view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app template.

try {
    $result = $apiInstance->apiKubeAppsTemplatesRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiKubeAppsTemplatesRead: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiKubeAppsVersionsList**
> \Swagger\Client\Model\KubeAppVersion[] apiKubeAppsVersionsList()



Kube app version view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiKubeAppsVersionsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiKubeAppsVersionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\KubeAppVersion[]**](../Model/KubeAppVersion.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiKubeAppsVersionsRead**
> \Swagger\Client\Model\KubeAppVersion apiKubeAppsVersionsRead($id)



Kube app version view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this kube app version.

try {
    $result = $apiInstance->apiKubeAppsVersionsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiKubeAppsVersionsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this kube app version. |

### Return type

[**\Swagger\Client\Model\KubeAppVersion**](../Model/KubeAppVersion.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiMarketingFocusItemsList**
> \Swagger\Client\Model\MauticFocusItem[] apiMarketingFocusItemsList()



Mautic focus item view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiMarketingFocusItemsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiMarketingFocusItemsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MauticFocusItem[]**](../Model/MauticFocusItem.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiMarketingFocusItemsRead**
> \Swagger\Client\Model\MauticFocusItem apiMarketingFocusItemsRead($id)



Mautic focus item view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this mautic focus item.

try {
    $result = $apiInstance->apiMarketingFocusItemsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiMarketingFocusItemsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this mautic focus item. |

### Return type

[**\Swagger\Client\Model\MauticFocusItem**](../Model/MauticFocusItem.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSocialAuthCreate**
> \Swagger\Client\Model\SocialLogin apiSocialAuthCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\SocialLogin(); // \Swagger\Client\Model\SocialLogin | 

try {
    $result = $apiInstance->apiSocialAuthCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiSocialAuthCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\SocialLogin**](../Model/SocialLogin.md)|  |

### Return type

[**\Swagger\Client\Model\SocialLogin**](../Model/SocialLogin.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSocialAuthGithubAuth**
> \Swagger\Client\Model\SocialLogin apiSocialAuthGithubAuth($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\SocialLogin(); // \Swagger\Client\Model\SocialLogin | 

try {
    $result = $apiInstance->apiSocialAuthGithubAuth($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiSocialAuthGithubAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\SocialLogin**](../Model/SocialLogin.md)|  |

### Return type

[**\Swagger\Client\Model\SocialLogin**](../Model/SocialLogin.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSocialAuthGoogleAuth**
> \Swagger\Client\Model\SocialLogin apiSocialAuthGoogleAuth($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\SocialLogin(); // \Swagger\Client\Model\SocialLogin | 

try {
    $result = $apiInstance->apiSocialAuthGoogleAuth($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiSocialAuthGoogleAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\SocialLogin**](../Model/SocialLogin.md)|  |

### Return type

[**\Swagger\Client\Model\SocialLogin**](../Model/SocialLogin.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiTokenVerifyCreate**
> \Swagger\Client\Model\TokenVerify apiTokenVerifyCreate($data)



Takes a token and indicates if it is valid.  This view provides no information about a token's fitness for a particular use.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\TokenVerify(); // \Swagger\Client\Model\TokenVerify | 

try {
    $result = $apiInstance->apiTokenVerifyCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiTokenVerifyCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TokenVerify**](../Model/TokenVerify.md)|  |

### Return type

[**\Swagger\Client\Model\TokenVerify**](../Model/TokenVerify.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiVirtualMachineBackupTemplatesList**
> \Swagger\Client\Model\VirtualMachineBackupTemplate[] apiVirtualMachineBackupTemplatesList()



Virtual machine backup template view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiVirtualMachineBackupTemplatesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachineBackupTemplatesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\VirtualMachineBackupTemplate[]**](../Model/VirtualMachineBackupTemplate.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiVirtualMachineBackupTemplatesRead**
> \Swagger\Client\Model\VirtualMachineBackupTemplate apiVirtualMachineBackupTemplatesRead($id)



Virtual machine backup template view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine backup template.

try {
    $result = $apiInstance->apiVirtualMachineBackupTemplatesRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachineBackupTemplatesRead: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiVirtualMachineBackupsDelete**
> apiVirtualMachineBackupsDelete($id)



Virtual machine backup view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine backup.

try {
    $apiInstance->apiVirtualMachineBackupsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachineBackupsDelete: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachineBackupsList**
> \Swagger\Client\Model\VirtualMachineBackup[] apiVirtualMachineBackupsList($virtual_machine)



Virtual machine backup view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_machine = "virtual_machine_example"; // string | 

try {
    $result = $apiInstance->apiVirtualMachineBackupsList($virtual_machine);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachineBackupsList: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachineBackupsRead**
> \Swagger\Client\Model\VirtualMachineBackup apiVirtualMachineBackupsRead($id)



Virtual machine backup view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine backup.

try {
    $result = $apiInstance->apiVirtualMachineBackupsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachineBackupsRead: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachineBackupsRestore**
> \Swagger\Client\Model\VirtualMachineBackup apiVirtualMachineBackupsRestore($id, $data)



Restore virtual machine backup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine backup.
$data = new \Swagger\Client\Model\VirtualMachineBackup(); // \Swagger\Client\Model\VirtualMachineBackup | 

try {
    $result = $apiInstance->apiVirtualMachineBackupsRestore($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachineBackupsRestore: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachineImagesList**
> \Swagger\Client\Model\VirtualMachineImage[] apiVirtualMachineImagesList()



Virtual machine image view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiVirtualMachineImagesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachineImagesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\VirtualMachineImage[]**](../Model/VirtualMachineImage.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiVirtualMachineImagesRead**
> \Swagger\Client\Model\VirtualMachineImage apiVirtualMachineImagesRead($id)



Virtual machine image view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine image.

try {
    $result = $apiInstance->apiVirtualMachineImagesRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachineImagesRead: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiVirtualMachineLocationsList**
> \Swagger\Client\Model\VirtualMachineLocation[] apiVirtualMachineLocationsList()



Virtual machine location view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiVirtualMachineLocationsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachineLocationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\VirtualMachineLocation[]**](../Model/VirtualMachineLocation.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiVirtualMachineLocationsRead**
> \Swagger\Client\Model\VirtualMachineLocation apiVirtualMachineLocationsRead($id)



Virtual machine location view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine location.

try {
    $result = $apiInstance->apiVirtualMachineLocationsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachineLocationsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine location. |

### Return type

[**\Swagger\Client\Model\VirtualMachineLocation**](../Model/VirtualMachineLocation.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiVirtualMachineTemplatesList**
> \Swagger\Client\Model\VirtualMachineTemplate[] apiVirtualMachineTemplatesList()



Virtual machine template view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiVirtualMachineTemplatesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachineTemplatesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\VirtualMachineTemplate[]**](../Model/VirtualMachineTemplate.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiVirtualMachineTemplatesRead**
> \Swagger\Client\Model\VirtualMachineTemplate apiVirtualMachineTemplatesRead($id)



Virtual machine template view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine template.

try {
    $result = $apiInstance->apiVirtualMachineTemplatesRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachineTemplatesRead: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiVirtualMachinesChangeVmBackupTemplate**
> \Swagger\Client\Model\VirtualMachineChangeBackupTemplate apiVirtualMachinesChangeVmBackupTemplate($id, $data)



Change virtual machine backup template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineChangeBackupTemplate(); // \Swagger\Client\Model\VirtualMachineChangeBackupTemplate | 

try {
    $result = $apiInstance->apiVirtualMachinesChangeVmBackupTemplate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesChangeVmBackupTemplate: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesChangeVmImage**
> \Swagger\Client\Model\VirtualMachineChangeImage apiVirtualMachinesChangeVmImage($id, $data)



Change virtual machine image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineChangeImage(); // \Swagger\Client\Model\VirtualMachineChangeImage | 

try {
    $result = $apiInstance->apiVirtualMachinesChangeVmImage($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesChangeVmImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Swagger\Client\Model\VirtualMachineChangeImage**](../Model/VirtualMachineChangeImage.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachineChangeImage**](../Model/VirtualMachineChangeImage.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiVirtualMachinesChangeVmTemplate**
> \Swagger\Client\Model\VirtualMachineChangeTemplate apiVirtualMachinesChangeVmTemplate($id, $data)



Change virtual machine template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineChangeTemplate(); // \Swagger\Client\Model\VirtualMachineChangeTemplate | 

try {
    $result = $apiInstance->apiVirtualMachinesChangeVmTemplate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesChangeVmTemplate: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesCloneVm**
> \Swagger\Client\Model\VirtualMachineActions apiVirtualMachinesCloneVm($id, $data)



Clone virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->apiVirtualMachinesCloneVm($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesCloneVm: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesCreate**
> \Swagger\Client\Model\VirtualMachine apiVirtualMachinesCreate($data)



Override create method to set tenant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\VirtualMachine(); // \Swagger\Client\Model\VirtualMachine | 

try {
    $result = $apiInstance->apiVirtualMachinesCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesCreate: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesDelete**
> apiVirtualMachinesDelete($id)



Virtual machine view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $apiInstance->apiVirtualMachinesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesDelete: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesDisableVmBackup**
> \Swagger\Client\Model\VirtualMachineActions apiVirtualMachinesDisableVmBackup($id, $data)



Disable virtual machine backup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->apiVirtualMachinesDisableVmBackup($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesDisableVmBackup: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesList**
> \Swagger\Client\Model\VirtualMachine[] apiVirtualMachinesList()



Virtual machine view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiVirtualMachinesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesList: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesPartialUpdate**
> \Swagger\Client\Model\VirtualMachine apiVirtualMachinesPartialUpdate($id, $data)



Virtual machine view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachine(); // \Swagger\Client\Model\VirtualMachine | 

try {
    $result = $apiInstance->apiVirtualMachinesPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesPartialUpdate: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesPauseVm**
> \Swagger\Client\Model\VirtualMachineActions apiVirtualMachinesPauseVm($id, $data)



Pause virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->apiVirtualMachinesPauseVm($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesPauseVm: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesRead**
> \Swagger\Client\Model\VirtualMachine apiVirtualMachinesRead($id)



Virtual machine view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->apiVirtualMachinesRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesRead: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesRebuildVm**
> \Swagger\Client\Model\VirtualMachineActions apiVirtualMachinesRebuildVm($id, $data)



Rebuild virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->apiVirtualMachinesRebuildVm($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesRebuildVm: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesResetVmPassword**
> \Swagger\Client\Model\VirtualMachinePasswordReset apiVirtualMachinesResetVmPassword($id, $data)



Reset virtual machine password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachinePasswordReset(); // \Swagger\Client\Model\VirtualMachinePasswordReset | 

try {
    $result = $apiInstance->apiVirtualMachinesResetVmPassword($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesResetVmPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this virtual machine. |
 **data** | [**\Swagger\Client\Model\VirtualMachinePasswordReset**](../Model/VirtualMachinePasswordReset.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualMachinePasswordReset**](../Model/VirtualMachinePasswordReset.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiVirtualMachinesRestartVm**
> \Swagger\Client\Model\VirtualMachineActions apiVirtualMachinesRestartVm($id, $data)



Restart virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->apiVirtualMachinesRestartVm($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesRestartVm: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesSoftRebootVm**
> \Swagger\Client\Model\VirtualMachineActions apiVirtualMachinesSoftRebootVm($id, $data)



Soft reboot virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->apiVirtualMachinesSoftRebootVm($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesSoftRebootVm: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesStartVm**
> \Swagger\Client\Model\VirtualMachineActions apiVirtualMachinesStartVm($id, $data)



Start virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->apiVirtualMachinesStartVm($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesStartVm: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesStopVm**
> \Swagger\Client\Model\VirtualMachineActions apiVirtualMachinesStopVm($id, $data)



Stop virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->apiVirtualMachinesStopVm($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesStopVm: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesTakeVmBackup**
> \Swagger\Client\Model\VirtualMachineActions apiVirtualMachinesTakeVmBackup($id, $data)



Take virtual machine backup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->apiVirtualMachinesTakeVmBackup($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesTakeVmBackup: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesTakeVmSnapshot**
> \Swagger\Client\Model\VirtualMachineActions apiVirtualMachinesTakeVmSnapshot($id, $data)



Take virtual machine snapshot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->apiVirtualMachinesTakeVmSnapshot($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesTakeVmSnapshot: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesUnpauseVm**
> \Swagger\Client\Model\VirtualMachineActions apiVirtualMachinesUnpauseVm($id, $data)



Unpause virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachineActions(); // \Swagger\Client\Model\VirtualMachineActions | 

try {
    $result = $apiInstance->apiVirtualMachinesUnpauseVm($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesUnpauseVm: ', $e->getMessage(), PHP_EOL;
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

# **apiVirtualMachinesUpdate**
> \Swagger\Client\Model\VirtualMachine apiVirtualMachinesUpdate($id, $data)



Virtual machine view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$data = new \Swagger\Client\Model\VirtualMachine(); // \Swagger\Client\Model\VirtualMachine | 

try {
    $result = $apiInstance->apiVirtualMachinesUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiVirtualMachinesUpdate: ', $e->getMessage(), PHP_EOL;
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


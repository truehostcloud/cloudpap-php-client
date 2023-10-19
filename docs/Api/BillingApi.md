# Cloudpap\Client\BillingApi

All URIs are relative to *https://console.cloudpap.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingCardsCreate**](BillingApi.md#billingCardsCreate) | **POST** /billing/cards/ | 
[**billingCardsDefault**](BillingApi.md#billingCardsDefault) | **PATCH** /billing/cards/{id}/default/ | 
[**billingCardsDelete**](BillingApi.md#billingCardsDelete) | **DELETE** /billing/cards/{id}/ | 
[**billingCardsList**](BillingApi.md#billingCardsList) | **GET** /billing/cards/ | 
[**billingCardsRead**](BillingApi.md#billingCardsRead) | **GET** /billing/cards/{id}/ | 
[**billingCustomersAppliedCoupons**](BillingApi.md#billingCustomersAppliedCoupons) | **GET** /billing/customers/{id}/applied-coupons/ | 
[**billingCustomersApplyCoupon**](BillingApi.md#billingCustomersApplyCoupon) | **POST** /billing/customers/{id}/apply-coupon/ | 
[**billingCustomersBillingWallet**](BillingApi.md#billingCustomersBillingWallet) | **GET** /billing/customers/{id}/billing-wallet/ | 
[**billingCustomersList**](BillingApi.md#billingCustomersList) | **GET** /billing/customers/ | 
[**billingCustomersPartialUpdate**](BillingApi.md#billingCustomersPartialUpdate) | **PATCH** /billing/customers/{id}/ | 
[**billingCustomersRead**](BillingApi.md#billingCustomersRead) | **GET** /billing/customers/{id}/ | 
[**billingCustomersUpdate**](BillingApi.md#billingCustomersUpdate) | **PUT** /billing/customers/{id}/ | 
[**billingInvoicesList**](BillingApi.md#billingInvoicesList) | **GET** /billing/invoices/ | 
[**billingInvoicesRead**](BillingApi.md#billingInvoicesRead) | **GET** /billing/invoices/{id}/ | 
[**billingPaymentMethodsCreate**](BillingApi.md#billingPaymentMethodsCreate) | **POST** /billing/payment-methods/ | 
[**billingPaymentMethodsDelete**](BillingApi.md#billingPaymentMethodsDelete) | **DELETE** /billing/payment-methods/{id}/ | 
[**billingPaymentMethodsList**](BillingApi.md#billingPaymentMethodsList) | **GET** /billing/payment-methods/ | 
[**billingPaymentMethodsPartialUpdate**](BillingApi.md#billingPaymentMethodsPartialUpdate) | **PATCH** /billing/payment-methods/{id}/ | 
[**billingPaymentMethodsRead**](BillingApi.md#billingPaymentMethodsRead) | **GET** /billing/payment-methods/{id}/ | 
[**billingPaymentMethodsUpdate**](BillingApi.md#billingPaymentMethodsUpdate) | **PUT** /billing/payment-methods/{id}/ | 
[**billingTransactionsList**](BillingApi.md#billingTransactionsList) | **GET** /billing/transactions/ | 
[**billingTransactionsRead**](BillingApi.md#billingTransactionsRead) | **GET** /billing/transactions/{id}/ | 


# **billingCardsCreate**
> \Cloudpap\Client\Model\BillingCard billingCardsCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Cloudpap\Client\Model\BillingCard(); // \Cloudpap\Client\Model\BillingCard | 

try {
    $result = $apiInstance->billingCardsCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingCardsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Cloudpap\Client\Model\BillingCard**](../Model/BillingCard.md)|  |

### Return type

[**\Cloudpap\Client\Model\BillingCard**](../Model/BillingCard.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCardsDefault**
> \Cloudpap\Client\Model\BillingCard billingCardsDefault($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this billing card.
$data = new \Cloudpap\Client\Model\BillingCard(); // \Cloudpap\Client\Model\BillingCard | 

try {
    $result = $apiInstance->billingCardsDefault($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingCardsDefault: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this billing card. |
 **data** | [**\Cloudpap\Client\Model\BillingCard**](../Model/BillingCard.md)|  |

### Return type

[**\Cloudpap\Client\Model\BillingCard**](../Model/BillingCard.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCardsDelete**
> billingCardsDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this billing card.

try {
    $apiInstance->billingCardsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingCardsDelete: ', $e->getMessage(), PHP_EOL;
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

# **billingCardsList**
> \Cloudpap\Client\Model\BillingCard[] billingCardsList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->billingCardsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingCardsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Cloudpap\Client\Model\BillingCard[]**](../Model/BillingCard.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCardsRead**
> \Cloudpap\Client\Model\BillingCard billingCardsRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this billing card.

try {
    $result = $apiInstance->billingCardsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingCardsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this billing card. |

### Return type

[**\Cloudpap\Client\Model\BillingCard**](../Model/BillingCard.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCustomersAppliedCoupons**
> \Cloudpap\Client\Model\BillingCustomer billingCustomersAppliedCoupons($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tenant.

try {
    $result = $apiInstance->billingCustomersAppliedCoupons($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingCustomersAppliedCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this tenant. |

### Return type

[**\Cloudpap\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCustomersApplyCoupon**
> \Cloudpap\Client\Model\CouponClaim billingCustomersApplyCoupon($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tenant.
$data = new \Cloudpap\Client\Model\CouponClaim(); // \Cloudpap\Client\Model\CouponClaim | 

try {
    $result = $apiInstance->billingCustomersApplyCoupon($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingCustomersApplyCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this tenant. |
 **data** | [**\Cloudpap\Client\Model\CouponClaim**](../Model/CouponClaim.md)|  |

### Return type

[**\Cloudpap\Client\Model\CouponClaim**](../Model/CouponClaim.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCustomersBillingWallet**
> \Cloudpap\Client\Model\BillingCustomer billingCustomersBillingWallet($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tenant.

try {
    $result = $apiInstance->billingCustomersBillingWallet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingCustomersBillingWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this tenant. |

### Return type

[**\Cloudpap\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCustomersList**
> \Cloudpap\Client\Model\BillingCustomer[] billingCustomersList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->billingCustomersList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingCustomersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Cloudpap\Client\Model\BillingCustomer[]**](../Model/BillingCustomer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCustomersPartialUpdate**
> \Cloudpap\Client\Model\BillingCustomer billingCustomersPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tenant.
$data = new \Cloudpap\Client\Model\BillingCustomer(); // \Cloudpap\Client\Model\BillingCustomer | 

try {
    $result = $apiInstance->billingCustomersPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingCustomersPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this tenant. |
 **data** | [**\Cloudpap\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)|  |

### Return type

[**\Cloudpap\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCustomersRead**
> \Cloudpap\Client\Model\BillingCustomer billingCustomersRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tenant.

try {
    $result = $apiInstance->billingCustomersRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingCustomersRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this tenant. |

### Return type

[**\Cloudpap\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCustomersUpdate**
> \Cloudpap\Client\Model\BillingCustomer billingCustomersUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tenant.
$data = new \Cloudpap\Client\Model\BillingCustomer(); // \Cloudpap\Client\Model\BillingCustomer | 

try {
    $result = $apiInstance->billingCustomersUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingCustomersUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this tenant. |
 **data** | [**\Cloudpap\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)|  |

### Return type

[**\Cloudpap\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingInvoicesList**
> \Cloudpap\Client\Model\BillingInvoice[] billingInvoicesList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->billingInvoicesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingInvoicesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Cloudpap\Client\Model\BillingInvoice[]**](../Model/BillingInvoice.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingInvoicesRead**
> \Cloudpap\Client\Model\BillingInvoice billingInvoicesRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this invoice.

try {
    $result = $apiInstance->billingInvoicesRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingInvoicesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this invoice. |

### Return type

[**\Cloudpap\Client\Model\BillingInvoice**](../Model/BillingInvoice.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingPaymentMethodsCreate**
> \Cloudpap\Client\Model\BillingPaymentMethod billingPaymentMethodsCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Cloudpap\Client\Model\BillingPaymentMethod(); // \Cloudpap\Client\Model\BillingPaymentMethod | 

try {
    $result = $apiInstance->billingPaymentMethodsCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingPaymentMethodsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Cloudpap\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)|  |

### Return type

[**\Cloudpap\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingPaymentMethodsDelete**
> billingPaymentMethodsDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this payment method.

try {
    $apiInstance->billingPaymentMethodsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingPaymentMethodsDelete: ', $e->getMessage(), PHP_EOL;
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

# **billingPaymentMethodsList**
> \Cloudpap\Client\Model\BillingPaymentMethod[] billingPaymentMethodsList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->billingPaymentMethodsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingPaymentMethodsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Cloudpap\Client\Model\BillingPaymentMethod[]**](../Model/BillingPaymentMethod.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingPaymentMethodsPartialUpdate**
> \Cloudpap\Client\Model\BillingPaymentMethod billingPaymentMethodsPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this payment method.
$data = new \Cloudpap\Client\Model\BillingPaymentMethod(); // \Cloudpap\Client\Model\BillingPaymentMethod | 

try {
    $result = $apiInstance->billingPaymentMethodsPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingPaymentMethodsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this payment method. |
 **data** | [**\Cloudpap\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)|  |

### Return type

[**\Cloudpap\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingPaymentMethodsRead**
> \Cloudpap\Client\Model\BillingPaymentMethod billingPaymentMethodsRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this payment method.

try {
    $result = $apiInstance->billingPaymentMethodsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingPaymentMethodsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this payment method. |

### Return type

[**\Cloudpap\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingPaymentMethodsUpdate**
> \Cloudpap\Client\Model\BillingPaymentMethod billingPaymentMethodsUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this payment method.
$data = new \Cloudpap\Client\Model\BillingPaymentMethod(); // \Cloudpap\Client\Model\BillingPaymentMethod | 

try {
    $result = $apiInstance->billingPaymentMethodsUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingPaymentMethodsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this payment method. |
 **data** | [**\Cloudpap\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)|  |

### Return type

[**\Cloudpap\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingTransactionsList**
> \Cloudpap\Client\Model\BillingTransaction[] billingTransactionsList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->billingTransactionsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingTransactionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Cloudpap\Client\Model\BillingTransaction[]**](../Model/BillingTransaction.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingTransactionsRead**
> \Cloudpap\Client\Model\BillingTransaction billingTransactionsRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this transaction.

try {
    $result = $apiInstance->billingTransactionsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingTransactionsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this transaction. |

### Return type

[**\Cloudpap\Client\Model\BillingTransaction**](../Model/BillingTransaction.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


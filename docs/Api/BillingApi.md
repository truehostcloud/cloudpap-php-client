# Swagger\Client\BillingApi

All URIs are relative to *http://localhost:8000/api*

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
> \Swagger\Client\Model\BillingCard billingCardsCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\BillingCard(); // \Swagger\Client\Model\BillingCard | 

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
 **data** | [**\Swagger\Client\Model\BillingCard**](../Model/BillingCard.md)|  |

### Return type

[**\Swagger\Client\Model\BillingCard**](../Model/BillingCard.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCardsDefault**
> \Swagger\Client\Model\BillingCard billingCardsDefault($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this billing card.
$data = new \Swagger\Client\Model\BillingCard(); // \Swagger\Client\Model\BillingCard | 

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
 **data** | [**\Swagger\Client\Model\BillingCard**](../Model/BillingCard.md)|  |

### Return type

[**\Swagger\Client\Model\BillingCard**](../Model/BillingCard.md)

### Authorization

[Basic](../../README.md#Basic)

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

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
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

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCardsList**
> \Swagger\Client\Model\BillingCard[] billingCardsList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
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

[**\Swagger\Client\Model\BillingCard[]**](../Model/BillingCard.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCardsRead**
> \Swagger\Client\Model\BillingCard billingCardsRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
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

[**\Swagger\Client\Model\BillingCard**](../Model/BillingCard.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCustomersAppliedCoupons**
> \Swagger\Client\Model\BillingCustomer billingCustomersAppliedCoupons($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
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

[**\Swagger\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCustomersApplyCoupon**
> \Swagger\Client\Model\CouponClaim billingCustomersApplyCoupon($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tenant.
$data = new \Swagger\Client\Model\CouponClaim(); // \Swagger\Client\Model\CouponClaim | 

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
 **data** | [**\Swagger\Client\Model\CouponClaim**](../Model/CouponClaim.md)|  |

### Return type

[**\Swagger\Client\Model\CouponClaim**](../Model/CouponClaim.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCustomersBillingWallet**
> \Swagger\Client\Model\BillingCustomer billingCustomersBillingWallet($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
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

[**\Swagger\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCustomersList**
> \Swagger\Client\Model\BillingCustomer[] billingCustomersList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
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

[**\Swagger\Client\Model\BillingCustomer[]**](../Model/BillingCustomer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCustomersPartialUpdate**
> \Swagger\Client\Model\BillingCustomer billingCustomersPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tenant.
$data = new \Swagger\Client\Model\BillingCustomer(); // \Swagger\Client\Model\BillingCustomer | 

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
 **data** | [**\Swagger\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)|  |

### Return type

[**\Swagger\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCustomersRead**
> \Swagger\Client\Model\BillingCustomer billingCustomersRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
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

[**\Swagger\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCustomersUpdate**
> \Swagger\Client\Model\BillingCustomer billingCustomersUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tenant.
$data = new \Swagger\Client\Model\BillingCustomer(); // \Swagger\Client\Model\BillingCustomer | 

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
 **data** | [**\Swagger\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)|  |

### Return type

[**\Swagger\Client\Model\BillingCustomer**](../Model/BillingCustomer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingInvoicesList**
> \Swagger\Client\Model\BillingInvoice[] billingInvoicesList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
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

[**\Swagger\Client\Model\BillingInvoice[]**](../Model/BillingInvoice.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingInvoicesRead**
> \Swagger\Client\Model\BillingInvoice billingInvoicesRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
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

[**\Swagger\Client\Model\BillingInvoice**](../Model/BillingInvoice.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingPaymentMethodsCreate**
> \Swagger\Client\Model\BillingPaymentMethod billingPaymentMethodsCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\BillingPaymentMethod(); // \Swagger\Client\Model\BillingPaymentMethod | 

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
 **data** | [**\Swagger\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)|  |

### Return type

[**\Swagger\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)

### Authorization

[Basic](../../README.md#Basic)

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

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
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

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingPaymentMethodsList**
> \Swagger\Client\Model\BillingPaymentMethod[] billingPaymentMethodsList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
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

[**\Swagger\Client\Model\BillingPaymentMethod[]**](../Model/BillingPaymentMethod.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingPaymentMethodsPartialUpdate**
> \Swagger\Client\Model\BillingPaymentMethod billingPaymentMethodsPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this payment method.
$data = new \Swagger\Client\Model\BillingPaymentMethod(); // \Swagger\Client\Model\BillingPaymentMethod | 

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
 **data** | [**\Swagger\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)|  |

### Return type

[**\Swagger\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingPaymentMethodsRead**
> \Swagger\Client\Model\BillingPaymentMethod billingPaymentMethodsRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
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

[**\Swagger\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingPaymentMethodsUpdate**
> \Swagger\Client\Model\BillingPaymentMethod billingPaymentMethodsUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this payment method.
$data = new \Swagger\Client\Model\BillingPaymentMethod(); // \Swagger\Client\Model\BillingPaymentMethod | 

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
 **data** | [**\Swagger\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)|  |

### Return type

[**\Swagger\Client\Model\BillingPaymentMethod**](../Model/BillingPaymentMethod.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingTransactionsList**
> \Swagger\Client\Model\BillingTransaction[] billingTransactionsList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
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

[**\Swagger\Client\Model\BillingTransaction[]**](../Model/BillingTransaction.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingTransactionsRead**
> \Swagger\Client\Model\BillingTransaction billingTransactionsRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillingApi(
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

[**\Swagger\Client\Model\BillingTransaction**](../Model/BillingTransaction.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


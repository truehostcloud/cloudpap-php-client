# Swagger\Client\MarketingApi

All URIs are relative to *http://localhost:8000/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**marketingFocusItemsList**](MarketingApi.md#marketingFocusItemsList) | **GET** /marketing/focus-items/ | 
[**marketingFocusItemsRead**](MarketingApi.md#marketingFocusItemsRead) | **GET** /marketing/focus-items/{id}/ | 


# **marketingFocusItemsList**
> \Swagger\Client\Model\MauticFocusItem[] marketingFocusItemsList()



Mautic focus item view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MarketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->marketingFocusItemsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketingApi->marketingFocusItemsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MauticFocusItem[]**](../Model/MauticFocusItem.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingFocusItemsRead**
> \Swagger\Client\Model\MauticFocusItem marketingFocusItemsRead($id)



Mautic focus item view set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MarketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this mautic focus item.

try {
    $result = $apiInstance->marketingFocusItemsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketingApi->marketingFocusItemsRead: ', $e->getMessage(), PHP_EOL;
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

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


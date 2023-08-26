# Swagger\Client\TokenApi

All URIs are relative to *http://localhost:8000/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokenVerifyCreate**](TokenApi.md#tokenVerifyCreate) | **POST** /token/verify/ | 


# **tokenVerifyCreate**
> \Swagger\Client\Model\TokenVerify tokenVerifyCreate($data)



Takes a token and indicates if it is valid.  This view provides no information about a token's fitness for a particular use.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\TokenVerify(); // \Swagger\Client\Model\TokenVerify | 

try {
    $result = $apiInstance->tokenVerifyCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->tokenVerifyCreate: ', $e->getMessage(), PHP_EOL;
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


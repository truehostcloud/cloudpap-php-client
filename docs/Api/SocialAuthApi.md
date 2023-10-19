# Cloudpap\Client\SocialAuthApi

All URIs are relative to *https://console.cloudpap.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**socialAuthCreate**](SocialAuthApi.md#socialAuthCreate) | **POST** /social-auth/ | 
[**socialAuthGithubAuth**](SocialAuthApi.md#socialAuthGithubAuth) | **POST** /social-auth/github/ | 
[**socialAuthGoogleAuth**](SocialAuthApi.md#socialAuthGoogleAuth) | **POST** /social-auth/google/ | 


# **socialAuthCreate**
> \Cloudpap\Client\Model\SocialLogin socialAuthCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\SocialAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Cloudpap\Client\Model\SocialLogin(); // \Cloudpap\Client\Model\SocialLogin | 

try {
    $result = $apiInstance->socialAuthCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialAuthApi->socialAuthCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Cloudpap\Client\Model\SocialLogin**](../Model/SocialLogin.md)|  |

### Return type

[**\Cloudpap\Client\Model\SocialLogin**](../Model/SocialLogin.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **socialAuthGithubAuth**
> \Cloudpap\Client\Model\SocialLogin socialAuthGithubAuth($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\SocialAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Cloudpap\Client\Model\SocialLogin(); // \Cloudpap\Client\Model\SocialLogin | 

try {
    $result = $apiInstance->socialAuthGithubAuth($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialAuthApi->socialAuthGithubAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Cloudpap\Client\Model\SocialLogin**](../Model/SocialLogin.md)|  |

### Return type

[**\Cloudpap\Client\Model\SocialLogin**](../Model/SocialLogin.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **socialAuthGoogleAuth**
> \Cloudpap\Client\Model\SocialLogin socialAuthGoogleAuth($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cloudpap\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Cloudpap\Client\Api\SocialAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Cloudpap\Client\Model\SocialLogin(); // \Cloudpap\Client\Model\SocialLogin | 

try {
    $result = $apiInstance->socialAuthGoogleAuth($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialAuthApi->socialAuthGoogleAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Cloudpap\Client\Model\SocialLogin**](../Model/SocialLogin.md)|  |

### Return type

[**\Cloudpap\Client\Model\SocialLogin**](../Model/SocialLogin.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


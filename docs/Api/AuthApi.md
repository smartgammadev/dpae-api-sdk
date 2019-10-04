# DPAE\AuthApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/DPAE/1.0.0-oas3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticate**](AuthApi.md#authenticate) | **POST** /authentifier_dpae | 

# **authenticate**
> string authenticate($body)



Authentication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = DPAE\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DPAE\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new DPAE\SDK\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DPAE\Model\AuthRequest(); // \DPAE\Model\AuthRequest | 

try {
    $result = $apiInstance->authenticate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authenticate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DPAE\Model\AuthRequest**](../Model/AuthRequest.md)|  | [optional]

### Return type

**string**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


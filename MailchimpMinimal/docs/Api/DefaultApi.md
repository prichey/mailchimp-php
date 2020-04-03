# MailchimpMinimal\DefaultApi

All URIs are relative to *https://us19.api.mailchimp.com/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPing**](DefaultApi.md#getPing) | **GET** /ping | Ping the API


# **getPing**
> \MailchimpMinimal\Model\APIHealthStatus getPing()

Ping the API

A health check for the API that won't return any account-specific information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = MailchimpMinimal\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailchimpMinimal\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPing();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MailchimpMinimal\Model\APIHealthStatus**](../Model/APIHealthStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


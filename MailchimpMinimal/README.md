# MailchimpMinimal
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.0.9
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/postlight/mailchimp.git"
    }
  ],
  "require": {
    "postlight/mailchimp": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/MailchimpMinimal/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://us19.api.mailchimp.com/3.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**getPing**](docs/Api/DefaultApi.md#getping) | **GET** /ping | Ping the API


## Documentation For Models

 - [APIHealthStatus](docs/Model/APIHealthStatus.md)
 - [AddressMergeSegment](docs/Model/AddressMergeSegment.md)
 - [AimSegment](docs/Model/AimSegment.md)
 - [AutomationRuntimeHours](docs/Model/AutomationRuntimeHours.md)
 - [AutomationSegment](docs/Model/AutomationSegment.md)
 - [AutomationTrigger](docs/Model/AutomationTrigger.md)
 - [AutomationWorkflowRuntimeSettings](docs/Model/AutomationWorkflowRuntimeSettings.md)
 - [BirthdayMergeSegment](docs/Model/BirthdayMergeSegment.md)
 - [CampaignPollSegment](docs/Model/CampaignPollSegment.md)
 - [ConversationSegment](docs/Model/ConversationSegment.md)
 - [CountryStateSegment](docs/Model/CountryStateSegment.md)
 - [DateMergeSegment](docs/Model/DateMergeSegment.md)
 - [DateSegment](docs/Model/DateSegment.md)
 - [EcommCategorySegment](docs/Model/EcommCategorySegment.md)
 - [EcommNumberSegment](docs/Model/EcommNumberSegment.md)
 - [EcommPurchasedSegment](docs/Model/EcommPurchasedSegment.md)
 - [EcommSpentSegment](docs/Model/EcommSpentSegment.md)
 - [EcommStoreSegment](docs/Model/EcommStoreSegment.md)
 - [EmailClientSegment](docs/Model/EmailClientSegment.md)
 - [EmailSegment](docs/Model/EmailSegment.md)
 - [EventBestCustomers](docs/Model/EventBestCustomers.md)
 - [EventCategoryFollowup](docs/Model/EventCategoryFollowup.md)
 - [EventEmailFollowup](docs/Model/EventEmailFollowup.md)
 - [EventEmailSeries](docs/Model/EventEmailSeries.md)
 - [EventGroupAdd](docs/Model/EventGroupAdd.md)
 - [EventGroupRemove](docs/Model/EventGroupRemove.md)
 - [EventMandrill](docs/Model/EventMandrill.md)
 - [EventProductFollowup](docs/Model/EventProductFollowup.md)
 - [EventPurchaseFollowup](docs/Model/EventPurchaseFollowup.md)
 - [EventVisitUrl](docs/Model/EventVisitUrl.md)
 - [EventWelcomeSeries](docs/Model/EventWelcomeSeries.md)
 - [FuzzySegment](docs/Model/FuzzySegment.md)
 - [GeoInSegment](docs/Model/GeoInSegment.md)
 - [GoalActivitySegment](docs/Model/GoalActivitySegment.md)
 - [Hours](docs/Model/Hours.md)
 - [IpGeoInZipSegment](docs/Model/IpGeoInZipSegment.md)
 - [LanguageSegment](docs/Model/LanguageSegment.md)
 - [MemberRatingSegment](docs/Model/MemberRatingSegment.md)
 - [MergeRecurringEvent](docs/Model/MergeRecurringEvent.md)
 - [MergeSpecialEvent](docs/Model/MergeSpecialEvent.md)
 - [ProblemDetailDocument](docs/Model/ProblemDetailDocument.md)
 - [RuntimeASAP](docs/Model/RuntimeASAP.md)
 - [RuntimeAt](docs/Model/RuntimeAt.md)
 - [RuntimeBetween](docs/Model/RuntimeBetween.md)
 - [SegmentCondition](docs/Model/SegmentCondition.md)
 - [SignupSourceSegment](docs/Model/SignupSourceSegment.md)
 - [SocialAgeSegment](docs/Model/SocialAgeSegment.md)
 - [SocialGenderSegment](docs/Model/SocialGenderSegment.md)
 - [SocialInfluenceSegment](docs/Model/SocialInfluenceSegment.md)
 - [SocialNetworkFollowSegment](docs/Model/SocialNetworkFollowSegment.md)
 - [SocialNetworkSegment](docs/Model/SocialNetworkSegment.md)
 - [StaticSegment](docs/Model/StaticSegment.md)
 - [SurveyMonkeySegment](docs/Model/SurveyMonkeySegment.md)
 - [TextMergeSegment](docs/Model/TextMergeSegment.md)
 - [VIPSegment](docs/Model/VIPSegment.md)
 - [ZipSegment](docs/Model/ZipSegment.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication


## Author

apihelp@mailchimp.com


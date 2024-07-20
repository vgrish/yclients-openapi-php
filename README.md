# Vgrish\YclientsOpenApi

yclients-openapi-php package for YCLIENTS generated based on the openapi schema


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/vgrish/yclients-openapi-php/"
    }
  ],
  "require": {
    "vgrish/yclients-openapi-php": "main"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/yclients-openapi-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}}; // string | Bearer partner_token
$auth_request = {"login":"{{login}}","password":"{{password}}"}; // \Vgrish\YclientsOpenApi\Model\AuthRequest

try {
    $result = $apiInstance->authUser($accept, $content_type, $authorization, $auth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->authUser: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.yclients.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**authUser**](docs/Api/DefaultApi.md#authuser) | **POST** /auth | Авторизовать пользователя
*DefaultApi* | [**clientCreate**](docs/Api/DefaultApi.md#clientcreate) | **POST** /clients/{company_id} | Добавить клиента
*DefaultApi* | [**clientGet**](docs/Api/DefaultApi.md#clientget) | **GET** /client/{company_id}/{id} | Получить клиента
*DefaultApi* | [**clientGetList**](docs/Api/DefaultApi.md#clientgetlist) | **POST** /company/{company_id}/clients/search | Получить список клиентов
*DefaultApi* | [**clientRemove**](docs/Api/DefaultApi.md#clientremove) | **DELETE** /client/{company_id}/{id} | Удалить клиента
*DefaultApi* | [**clientUpdate**](docs/Api/DefaultApi.md#clientupdate) | **PUT** /client/{company_id}/{id} | Редактировать клиента
*DefaultApi* | [**financeTransactionByVisitOrRecordGet**](docs/Api/DefaultApi.md#financetransactionbyvisitorrecordget) | **GET** /timetable/transactions/{company_id} | Получение транзакций по ID визита или записи
*DefaultApi* | [**financeTransactionCreate**](docs/Api/DefaultApi.md#financetransactioncreate) | **POST** /finance_transactions/{company_id} | Создание финансовой транзакции
*DefaultApi* | [**financeTransactionGet**](docs/Api/DefaultApi.md#financetransactionget) | **GET** /finance_transactions/{company_id}/{transaction_id} | Получение финансовой транзакции
*DefaultApi* | [**financeTransactionGetList**](docs/Api/DefaultApi.md#financetransactiongetlist) | **GET** /transactions/{company_id} | Получить транзакции
*DefaultApi* | [**financeTransactionRemove**](docs/Api/DefaultApi.md#financetransactionremove) | **DELETE** /finance_transactions/{company_id}/{transaction_id} | Удаление транзакции
*DefaultApi* | [**financeTransactionUpdate**](docs/Api/DefaultApi.md#financetransactionupdate) | **PUT** /finance_transactions/{company_id}/{transaction_id} | Обновление финансовой транзакции
*AuthApi* | [**authUser**](docs/Api/AuthApi.md#authuser) | **POST** /auth | Авторизовать пользователя
*ClientApi* | [**clientCreate**](docs/Api/ClientApi.md#clientcreate) | **POST** /clients/{company_id} | Добавить клиента
*ClientApi* | [**clientGet**](docs/Api/ClientApi.md#clientget) | **GET** /client/{company_id}/{id} | Получить клиента
*ClientApi* | [**clientGetList**](docs/Api/ClientApi.md#clientgetlist) | **POST** /company/{company_id}/clients/search | Получить список клиентов
*ClientApi* | [**clientRemove**](docs/Api/ClientApi.md#clientremove) | **DELETE** /client/{company_id}/{id} | Удалить клиента
*ClientApi* | [**clientUpdate**](docs/Api/ClientApi.md#clientupdate) | **PUT** /client/{company_id}/{id} | Редактировать клиента
*FinanceTransactionApi* | [**financeTransactionByVisitOrRecordGet**](docs/Api/FinanceTransactionApi.md#financetransactionbyvisitorrecordget) | **GET** /timetable/transactions/{company_id} | Получение транзакций по ID визита или записи
*FinanceTransactionApi* | [**financeTransactionCreate**](docs/Api/FinanceTransactionApi.md#financetransactioncreate) | **POST** /finance_transactions/{company_id} | Создание финансовой транзакции
*FinanceTransactionApi* | [**financeTransactionGet**](docs/Api/FinanceTransactionApi.md#financetransactionget) | **GET** /finance_transactions/{company_id}/{transaction_id} | Получение финансовой транзакции
*FinanceTransactionApi* | [**financeTransactionGetList**](docs/Api/FinanceTransactionApi.md#financetransactiongetlist) | **GET** /transactions/{company_id} | Получить транзакции
*FinanceTransactionApi* | [**financeTransactionRemove**](docs/Api/FinanceTransactionApi.md#financetransactionremove) | **DELETE** /finance_transactions/{company_id}/{transaction_id} | Удаление транзакции
*FinanceTransactionApi* | [**financeTransactionUpdate**](docs/Api/FinanceTransactionApi.md#financetransactionupdate) | **PUT** /finance_transactions/{company_id}/{transaction_id} | Обновление финансовой транзакции

## Models

- [AuthRequest](docs/Model/AuthRequest.md)
- [AuthResponse](docs/Model/AuthResponse.md)
- [AuthUserResponse](docs/Model/AuthUserResponse.md)
- [BaseResponse](docs/Model/BaseResponse.md)
- [ClientCreateRequest](docs/Model/ClientCreateRequest.md)
- [ClientCreateResponse](docs/Model/ClientCreateResponse.md)
- [ClientGetListRequest](docs/Model/ClientGetListRequest.md)
- [ClientGetListRequestFilters](docs/Model/ClientGetListRequestFilters.md)
- [ClientGetListRequestState](docs/Model/ClientGetListRequestState.md)
- [ClientGetListResponse](docs/Model/ClientGetListResponse.md)
- [ClientGetResponse](docs/Model/ClientGetResponse.md)
- [ClientRemoveResponse](docs/Model/ClientRemoveResponse.md)
- [ClientResponse](docs/Model/ClientResponse.md)
- [ClientUpdateRequest](docs/Model/ClientUpdateRequest.md)
- [ClientUpdateResponse](docs/Model/ClientUpdateResponse.md)
- [FinanceTransactionByVisitOrRecordGetResponse](docs/Model/FinanceTransactionByVisitOrRecordGetResponse.md)
- [FinanceTransactionCreateRequest](docs/Model/FinanceTransactionCreateRequest.md)
- [FinanceTransactionCreateResponse](docs/Model/FinanceTransactionCreateResponse.md)
- [FinanceTransactionGetListResponse](docs/Model/FinanceTransactionGetListResponse.md)
- [FinanceTransactionGetResponse](docs/Model/FinanceTransactionGetResponse.md)
- [FinanceTransactionRemoveResponse](docs/Model/FinanceTransactionRemoveResponse.md)
- [FinanceTransactionResponse](docs/Model/FinanceTransactionResponse.md)
- [FinanceTransactionUpdateResponse](docs/Model/FinanceTransactionUpdateResponse.md)

## Authorization
Endpoints do not require authorization.


## Author

[Vgrish@gmail.com](mailto:vgrish@gmail.com)




## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `1.0.0`
    - Generator version: `4.3.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

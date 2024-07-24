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
$auth_user_request = {"login":"{{login}}","password":"{{password}}"}; // \Vgrish\YclientsOpenApi\Model\AuthUserRequest

try {
    $result = $apiInstance->authUser($accept, $content_type, $authorization, $auth_user_request);
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
*DefaultApi* | [**companyCreate**](docs/Api/DefaultApi.md#companycreate) | **POST** /companies | Создать компанию
*DefaultApi* | [**companyGet**](docs/Api/DefaultApi.md#companyget) | **GET** /company/{id}/ | Получить компанию
*DefaultApi* | [**companyGetList**](docs/Api/DefaultApi.md#companygetlist) | **GET** /companies | Получить список компаний
*DefaultApi* | [**companyRemove**](docs/Api/DefaultApi.md#companyremove) | **DELETE** /company/{id}/ | Удалить компанию
*DefaultApi* | [**companyUpdate**](docs/Api/DefaultApi.md#companyupdate) | **PUT** /company/{id}/ | Изменить компанию
*DefaultApi* | [**loyaltyCardByClientIdGetList**](docs/Api/DefaultApi.md#loyaltycardbyclientidgetlist) | **GET** /loyalty/client_cards/{client_id} | Получить список карт клиента по ID
*DefaultApi* | [**loyaltyCardByClientPhoneGetList**](docs/Api/DefaultApi.md#loyaltycardbyclientphonegetlist) | **GET** /loyalty/cards/{phone}/{chain_id}/{company_id} | Получить список карт клиента по номеру телефона
*DefaultApi* | [**loyaltyCardCreate**](docs/Api/DefaultApi.md#loyaltycardcreate) | **POST** /loyalty/cards/{company_id} | Выдать карту лояльности
*DefaultApi* | [**loyaltyCardRemove**](docs/Api/DefaultApi.md#loyaltycardremove) | **DELETE** /loyalty/cards/{company_id}/{card_id} | Удалить карту  лояльности
*DefaultApi* | [**loyaltyCardTransactionCreate**](docs/Api/DefaultApi.md#loyaltycardtransactioncreate) | **POST** /company/{company_id}/loyalty/cards/{card_id}/manual_transaction | Ручное списание/пополнение карты лояльности в компании
*DefaultApi* | [**loyaltyCardTypeByChainIdGetList**](docs/Api/DefaultApi.md#loyaltycardtypebychainidgetlist) | **GET** /chain/{chain_id}/loyalty/card_types | Получить список типов карт, доступных в сети
*DefaultApi* | [**loyaltyCardTypeByClientPhoneGetList**](docs/Api/DefaultApi.md#loyaltycardtypebyclientphonegetlist) | **GET** /loyalty/card_types/client/{company_id}/{phone} | Получить список типов карт доступных для выдачи клиенту
*DefaultApi* | [**loyaltyCardTypeByCompanyIdGetList**](docs/Api/DefaultApi.md#loyaltycardtypebycompanyidgetlist) | **GET** /loyalty/card_types/salon/{company_id} | Получить список типов карт доступных в филиале
*DefaultApi* | [**loyaltyTransactionGetList**](docs/Api/DefaultApi.md#loyaltytransactiongetlist) | **GET** /chain/{chain_id}/loyalty/transactions | Получить список транзакций лояльности в сети
*AuthApi* | [**authUser**](docs/Api/AuthApi.md#authuser) | **POST** /auth | Авторизовать пользователя
*ClientApi* | [**clientCreate**](docs/Api/ClientApi.md#clientcreate) | **POST** /clients/{company_id} | Добавить клиента
*ClientApi* | [**clientGet**](docs/Api/ClientApi.md#clientget) | **GET** /client/{company_id}/{id} | Получить клиента
*ClientApi* | [**clientGetList**](docs/Api/ClientApi.md#clientgetlist) | **POST** /company/{company_id}/clients/search | Получить список клиентов
*ClientApi* | [**clientRemove**](docs/Api/ClientApi.md#clientremove) | **DELETE** /client/{company_id}/{id} | Удалить клиента
*ClientApi* | [**clientUpdate**](docs/Api/ClientApi.md#clientupdate) | **PUT** /client/{company_id}/{id} | Редактировать клиента
*CompanyApi* | [**companyCreate**](docs/Api/CompanyApi.md#companycreate) | **POST** /companies | Создать компанию
*CompanyApi* | [**companyGet**](docs/Api/CompanyApi.md#companyget) | **GET** /company/{id}/ | Получить компанию
*CompanyApi* | [**companyGetList**](docs/Api/CompanyApi.md#companygetlist) | **GET** /companies | Получить список компаний
*CompanyApi* | [**companyRemove**](docs/Api/CompanyApi.md#companyremove) | **DELETE** /company/{id}/ | Удалить компанию
*CompanyApi* | [**companyUpdate**](docs/Api/CompanyApi.md#companyupdate) | **PUT** /company/{id}/ | Изменить компанию
*LoyaltyCardApi* | [**loyaltyCardByClientIdGetList**](docs/Api/LoyaltyCardApi.md#loyaltycardbyclientidgetlist) | **GET** /loyalty/client_cards/{client_id} | Получить список карт клиента по ID
*LoyaltyCardApi* | [**loyaltyCardByClientPhoneGetList**](docs/Api/LoyaltyCardApi.md#loyaltycardbyclientphonegetlist) | **GET** /loyalty/cards/{phone}/{chain_id}/{company_id} | Получить список карт клиента по номеру телефона
*LoyaltyCardApi* | [**loyaltyCardCreate**](docs/Api/LoyaltyCardApi.md#loyaltycardcreate) | **POST** /loyalty/cards/{company_id} | Выдать карту лояльности
*LoyaltyCardApi* | [**loyaltyCardRemove**](docs/Api/LoyaltyCardApi.md#loyaltycardremove) | **DELETE** /loyalty/cards/{company_id}/{card_id} | Удалить карту  лояльности
*LoyaltyCardApi* | [**loyaltyCardTransactionCreate**](docs/Api/LoyaltyCardApi.md#loyaltycardtransactioncreate) | **POST** /company/{company_id}/loyalty/cards/{card_id}/manual_transaction | Ручное списание/пополнение карты лояльности в компании
*LoyaltyCardApi* | [**loyaltyCardTypeByChainIdGetList**](docs/Api/LoyaltyCardApi.md#loyaltycardtypebychainidgetlist) | **GET** /chain/{chain_id}/loyalty/card_types | Получить список типов карт, доступных в сети
*LoyaltyCardApi* | [**loyaltyCardTypeByClientPhoneGetList**](docs/Api/LoyaltyCardApi.md#loyaltycardtypebyclientphonegetlist) | **GET** /loyalty/card_types/client/{company_id}/{phone} | Получить список типов карт доступных для выдачи клиенту
*LoyaltyCardApi* | [**loyaltyCardTypeByCompanyIdGetList**](docs/Api/LoyaltyCardApi.md#loyaltycardtypebycompanyidgetlist) | **GET** /loyalty/card_types/salon/{company_id} | Получить список типов карт доступных в филиале
*LoyaltyTransactionApi* | [**loyaltyTransactionGetList**](docs/Api/LoyaltyTransactionApi.md#loyaltytransactiongetlist) | **GET** /chain/{chain_id}/loyalty/transactions | Получить список транзакций лояльности в сети

## Models

- [AuthResponse](docs/Model/AuthResponse.md)
- [AuthUserRequest](docs/Model/AuthUserRequest.md)
- [AuthUserResponse](docs/Model/AuthUserResponse.md)
- [BaseResponse](docs/Model/BaseResponse.md)
- [ClientCreateRequest](docs/Model/ClientCreateRequest.md)
- [ClientCreateResponse](docs/Model/ClientCreateResponse.md)
- [ClientGetListRequest](docs/Model/ClientGetListRequest.md)
- [ClientGetListRequestFilters](docs/Model/ClientGetListRequestFilters.md)
- [ClientGetListRequestState](docs/Model/ClientGetListRequestState.md)
- [ClientGetListResponse](docs/Model/ClientGetListResponse.md)
- [ClientGetResponse](docs/Model/ClientGetResponse.md)
- [ClientResponse](docs/Model/ClientResponse.md)
- [ClientUpdateRequest](docs/Model/ClientUpdateRequest.md)
- [ClientUpdateResponse](docs/Model/ClientUpdateResponse.md)
- [CompanyCreateRequest](docs/Model/CompanyCreateRequest.md)
- [CompanyCreateResponse](docs/Model/CompanyCreateResponse.md)
- [CompanyGetListResponse](docs/Model/CompanyGetListResponse.md)
- [CompanyGetResponse](docs/Model/CompanyGetResponse.md)
- [CompanyResponse](docs/Model/CompanyResponse.md)
- [CompanyUpdateRequest](docs/Model/CompanyUpdateRequest.md)
- [CompanyUpdateResponse](docs/Model/CompanyUpdateResponse.md)
- [LoyaltyCardByClientIdGetListResponse](docs/Model/LoyaltyCardByClientIdGetListResponse.md)
- [LoyaltyCardByClientPhoneGetListResponse](docs/Model/LoyaltyCardByClientPhoneGetListResponse.md)
- [LoyaltyCardCreateRequest](docs/Model/LoyaltyCardCreateRequest.md)
- [LoyaltyCardCreateResponse](docs/Model/LoyaltyCardCreateResponse.md)
- [LoyaltyCardResponse](docs/Model/LoyaltyCardResponse.md)
- [LoyaltyCardTransactionCreateResponse](docs/Model/LoyaltyCardTransactionCreateResponse.md)
- [LoyaltyCardTypeByChainIdGetListResponse](docs/Model/LoyaltyCardTypeByChainIdGetListResponse.md)
- [LoyaltyCardTypeByClientPhoneGetListResponse](docs/Model/LoyaltyCardTypeByClientPhoneGetListResponse.md)
- [LoyaltyCardTypeByCompanyIdGetListResponse](docs/Model/LoyaltyCardTypeByCompanyIdGetListResponse.md)
- [LoyaltyCardTypeResponse](docs/Model/LoyaltyCardTypeResponse.md)
- [LoyaltyTransactionCreateRequest](docs/Model/LoyaltyTransactionCreateRequest.md)
- [LoyaltyTransactionGetListResponse](docs/Model/LoyaltyTransactionGetListResponse.md)
- [LoyaltyTransactionResponse](docs/Model/LoyaltyTransactionResponse.md)

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

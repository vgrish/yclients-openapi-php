# # LoyaltyTransactionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор транзакции |
**visit_id** | **int** | Идентификатор визита | [optional]
**status_id** | **int** | Идентификатор статуса транзакции | [optional]
**amount** | **double** | Сумма оплаты лояльностью | [optional]
**type_id** | **int** | Тип транзакции лояльности | [optional]
**card_id** | **int** | Идентификатор карты лояльности | [optional]
**program_id** | **int** | Идентификатор программы лояльности | [optional]
**certificate_id** | **int** | Идентификатор сертификата | [optional]
**abonement_id** | **int** | Идентификатор абонемента | [optional]
**salon_group_id** | **int** | ID сети салонов, в рамках лояльности которой была создана данная транзакция | [optional]
**item_id** | **int** | Идентификатор позиции в заказе, если транзакция связана с продажей товара или услуги | [optional]
**item_type_id** | **int** | Тип позиции в заказе, к которой относится данная транзакция (1 Оказание услуги, 7 Продажа товара), если применимо | [optional]
**item_record_id** | **int** | ID записи к которой относится позиция в заказе, если применимо | [optional]
**goods_transaction_id** | **int** | ID транзакции продажи товара | [optional]
**services_transaction_id** | **int** | ID транзакции оказания услуг | [optional]
**is_discount** | **bool** |  | [optional]
**is_loyalty_withdraw** | **bool** |  | [optional]
**type** | **map[string,object]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

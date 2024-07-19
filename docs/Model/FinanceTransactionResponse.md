# # FinanceTransactionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор транзакции | 
**document_id** | **int** | Идентификатор документа | 
**date** | [**\DateTime**](\DateTime.md) | Дата создания транзакции | [optional] 
**amount** | **float** | Сумма транзакции | [optional] 
**comment** | **string** | Комментарий | [optional] 
**last_change_date** | [**\DateTime**](\DateTime.md) | Дата последнего изменения | [optional] 
**record_id** | **int** | Идентификатор записи | [optional] 
**visit_id** | **int** | Идентификатор визита | [optional] 
**sold_item_id** | **int** | Идентификатор проданного товара/услуги | [optional] 
**sold_item_type** | **string** | Тип сущности продаджи (товар/услуга) | [optional] 
**expense** | **map[string,object]** | Тип платежа | [optional] 
**master** | [**AnyOfMapArray**](AnyOfMapArray.md) | Мастер | [optional] 
**supplier** | [**AnyOfMapArray**](AnyOfMapArray.md) | Контрагент | [optional] 
**account** | **map[string,object]** | Касса | [optional] 
**client** | **map[string,object]** | Клиент | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)



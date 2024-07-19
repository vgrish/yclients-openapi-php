<?php
/**
 * ClientResponse
 *
 * @category Class
 * @package  Vgrish\YclientsOpenApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Yclients
 *
 * yclients-openapi-php package for YCLIENTS generated based on the openapi schema
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Vgrish\YclientsOpenApi\Model;

use ArrayAccess;
use Vgrish\YclientsOpenApi\ObjectSerializer;

/**
 * ClientResponse Class Doc Comment
 *
 * @category Class
 * @package  Vgrish\YclientsOpenApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ClientResponse implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClientResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'surname' => 'string',
        'patronymic' => 'string',
        'display_name' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'card' => 'string',
        'birth_date' => 'string',
        'comment' => 'string',
        'discount' => 'int',
        'visits' => 'int',
        'sex_id' => 'int',
        'sex' => 'string',
        'sms_check' => 'int',
        'sms_bot' => 'int',
        'sms_not' => 'int',
        'spent' => 'int',
        'paid' => 'int',
        'balance' => 'int',
        'importance_id' => 'int',
        'importance' => 'string',
        'categories' => 'string[]',
        'last_change_date' => 'string',
        'custom_fields' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'surname' => null,
        'patronymic' => null,
        'display_name' => null,
        'phone' => null,
        'email' => null,
        'card' => null,
        'birth_date' => null,
        'comment' => null,
        'discount' => null,
        'visits' => null,
        'sex_id' => null,
        'sex' => null,
        'sms_check' => null,
        'sms_bot' => null,
        'sms_not' => null,
        'spent' => null,
        'paid' => null,
        'balance' => null,
        'importance_id' => null,
        'importance' => null,
        'categories' => null,
        'last_change_date' => null,
        'custom_fields' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'surname' => 'surname',
        'patronymic' => 'patronymic',
        'display_name' => 'display_name',
        'phone' => 'phone',
        'email' => 'email',
        'card' => 'card',
        'birth_date' => 'birth_date',
        'comment' => 'comment',
        'discount' => 'discount',
        'visits' => 'visits',
        'sex_id' => 'sex_id',
        'sex' => 'sex',
        'sms_check' => 'sms_check',
        'sms_bot' => 'sms_bot',
        'sms_not' => 'sms_not',
        'spent' => 'spent',
        'paid' => 'paid',
        'balance' => 'balance',
        'importance_id' => 'importance_id',
        'importance' => 'importance',
        'categories' => 'categories',
        'last_change_date' => 'last_change_date',
        'custom_fields' => 'custom_fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'surname' => 'setSurname',
        'patronymic' => 'setPatronymic',
        'display_name' => 'setDisplayName',
        'phone' => 'setPhone',
        'email' => 'setEmail',
        'card' => 'setCard',
        'birth_date' => 'setBirthDate',
        'comment' => 'setComment',
        'discount' => 'setDiscount',
        'visits' => 'setVisits',
        'sex_id' => 'setSexId',
        'sex' => 'setSex',
        'sms_check' => 'setSmsCheck',
        'sms_bot' => 'setSmsBot',
        'sms_not' => 'setSmsNot',
        'spent' => 'setSpent',
        'paid' => 'setPaid',
        'balance' => 'setBalance',
        'importance_id' => 'setImportanceId',
        'importance' => 'setImportance',
        'categories' => 'setCategories',
        'last_change_date' => 'setLastChangeDate',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'surname' => 'getSurname',
        'patronymic' => 'getPatronymic',
        'display_name' => 'getDisplayName',
        'phone' => 'getPhone',
        'email' => 'getEmail',
        'card' => 'getCard',
        'birth_date' => 'getBirthDate',
        'comment' => 'getComment',
        'discount' => 'getDiscount',
        'visits' => 'getVisits',
        'sex_id' => 'getSexId',
        'sex' => 'getSex',
        'sms_check' => 'getSmsCheck',
        'sms_bot' => 'getSmsBot',
        'sms_not' => 'getSmsNot',
        'spent' => 'getSpent',
        'paid' => 'getPaid',
        'balance' => 'getBalance',
        'importance_id' => 'getImportanceId',
        'importance' => 'getImportance',
        'categories' => 'getCategories',
        'last_change_date' => 'getLastChangeDate',
        'custom_fields' => 'getCustomFields'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }





    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['patronymic'] = isset($data['patronymic']) ? $data['patronymic'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['visits'] = isset($data['visits']) ? $data['visits'] : null;
        $this->container['sex_id'] = isset($data['sex_id']) ? $data['sex_id'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['sms_check'] = isset($data['sms_check']) ? $data['sms_check'] : null;
        $this->container['sms_bot'] = isset($data['sms_bot']) ? $data['sms_bot'] : null;
        $this->container['sms_not'] = isset($data['sms_not']) ? $data['sms_not'] : null;
        $this->container['spent'] = isset($data['spent']) ? $data['spent'] : null;
        $this->container['paid'] = isset($data['paid']) ? $data['paid'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['importance_id'] = isset($data['importance_id']) ? $data['importance_id'] : null;
        $this->container['importance'] = isset($data['importance']) ? $data['importance'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['last_change_date'] = isset($data['last_change_date']) ? $data['last_change_date'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id ID клиента
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Имя клиента
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string|null
     */
    public function getSurname() : ?string
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string|null $surname Фамилия клиента
     *
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets patronymic
     *
     * @return string|null
     */
    public function getPatronymic() : ?string
    {
        return $this->container['patronymic'];
    }

    /**
     * Sets patronymic
     *
     * @param string|null $patronymic Отчество клиента
     *
     * @return $this
     */
    public function setPatronymic($patronymic)
    {
        $this->container['patronymic'] = $patronymic;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName() : ?string
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name display_name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone() : ?string
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Телефон клиента
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Email клиента
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets card
     *
     * @return string|null
     */
    public function getCard() : ?string
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param string|null $card Номер карты клиента
     *
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return string|null
     */
    public function getBirthDate() : ?string
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param string|null $birth_date Дата рождения клиента в формате yyyy-mm-dd
     *
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment() : ?string
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment Комментарий
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return int|null
     */
    public function getDiscount() : ?int
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param int|null $discount Скидка клиента
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets visits
     *
     * @return int|null
     */
    public function getVisits() : ?int
    {
        return $this->container['visits'];
    }

    /**
     * Sets visits
     *
     * @param int|null $visits visits
     *
     * @return $this
     */
    public function setVisits($visits)
    {
        $this->container['visits'] = $visits;

        return $this;
    }

    /**
     * Gets sex_id
     *
     * @return int|null
     */
    public function getSexId() : ?int
    {
        return $this->container['sex_id'];
    }

    /**
     * Sets sex_id
     *
     * @param int|null $sex_id Пол клиента (1 - мужской, 2 - женский, 0 - не известен)
     *
     * @return $this
     */
    public function setSexId($sex_id)
    {
        $this->container['sex_id'] = $sex_id;

        return $this;
    }

    /**
     * Gets sex
     *
     * @return string|null
     */
    public function getSex() : ?string
    {
        return $this->container['sex'];
    }

    /**
     * Sets sex
     *
     * @param string|null $sex sex
     *
     * @return $this
     */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;

        return $this;
    }

    /**
     * Gets sms_check
     *
     * @return int|null
     */
    public function getSmsCheck() : ?int
    {
        return $this->container['sms_check'];
    }

    /**
     * Sets sms_check
     *
     * @param int|null $sms_check 1 - Поздравлять с Днем Рождения по SMS, 0 - не поздравлять
     *
     * @return $this
     */
    public function setSmsCheck($sms_check)
    {
        $this->container['sms_check'] = $sms_check;

        return $this;
    }

    /**
     * Gets sms_bot
     *
     * @return int|null
     */
    public function getSmsBot() : ?int
    {
        return $this->container['sms_bot'];
    }

    /**
     * Sets sms_bot
     *
     * @param int|null $sms_bot sms_bot
     *
     * @return $this
     */
    public function setSmsBot($sms_bot)
    {
        $this->container['sms_bot'] = $sms_bot;

        return $this;
    }

    /**
     * Gets sms_not
     *
     * @return int|null
     */
    public function getSmsNot() : ?int
    {
        return $this->container['sms_not'];
    }

    /**
     * Sets sms_not
     *
     * @param int|null $sms_not 1 - Исключить клиента из SMS рассылок, 0 - не исключать
     *
     * @return $this
     */
    public function setSmsNot($sms_not)
    {
        $this->container['sms_not'] = $sms_not;

        return $this;
    }

    /**
     * Gets spent
     *
     * @return int|null
     */
    public function getSpent() : ?int
    {
        return $this->container['spent'];
    }

    /**
     * Sets spent
     *
     * @param int|null $spent Сколько потратил средств в компании на момент добавления
     *
     * @return $this
     */
    public function setSpent($spent)
    {
        $this->container['spent'] = $spent;

        return $this;
    }

    /**
     * Gets paid
     *
     * @return int|null
     */
    public function getPaid() : ?int
    {
        return $this->container['paid'];
    }

    /**
     * Sets paid
     *
     * @param int|null $paid paid
     *
     * @return $this
     */
    public function setPaid($paid)
    {
        $this->container['paid'] = $paid;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return int|null
     */
    public function getBalance() : ?int
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param int|null $balance Баланс клиента
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets importance_id
     *
     * @return int|null
     */
    public function getImportanceId() : ?int
    {
        return $this->container['importance_id'];
    }

    /**
     * Sets importance_id
     *
     * @param int|null $importance_id Класс важности клиента (0 - нет, 1 - бронза, 2 - серебро, 3 - золото)
     *
     * @return $this
     */
    public function setImportanceId($importance_id)
    {
        $this->container['importance_id'] = $importance_id;

        return $this;
    }

    /**
     * Gets importance
     *
     * @return string|null
     */
    public function getImportance() : ?string
    {
        return $this->container['importance'];
    }

    /**
     * Sets importance
     *
     * @param string|null $importance importance
     *
     * @return $this
     */
    public function setImportance($importance)
    {
        $this->container['importance'] = $importance;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return string[]|null
     */
    public function getCategories() : ?array
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[]|null $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets last_change_date
     *
     * @return string|null
     */
    public function getLastChangeDate() : ?string
    {
        return $this->container['last_change_date'];
    }

    /**
     * Sets last_change_date
     *
     * @param string|null $last_change_date last_change_date
     *
     * @return $this
     */
    public function setLastChangeDate($last_change_date)
    {
        $this->container['last_change_date'] = $last_change_date;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return object|null
     */
    public function getCustomFields() : ?object
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object|null $custom_fields Массив дополнительных полей клиента в виде пар \"api-key\": \"value\"
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset) : mixed
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value) : void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString() : string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Gets array presentation of the object
     *
     * @return array
     */
    public function toArray() : array
    {
        $array = [];
        foreach ($this->container as $key => $value) {
            if (is_a($value, ModelInterface::class)) {
                $array[$key] = $value->toArray();
            } else {
                $array[$key] = $value;
            }
        }
        return $array;
    }

}



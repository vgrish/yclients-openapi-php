<?php
/**
 * LoyaltyCardResponse
 *
 * PHP version 7.4
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
 * Generated by: https://openapi-generator.tech
 * Generator version: 4.3.1
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
 * LoyaltyCardResponse Class Doc Comment
 *
 * @category Class
 * @description Получить список карт клиента
 * @package  Vgrish\YclientsOpenApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LoyaltyCardResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoyaltyCardResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'balance' => 'float',
        'points' => 'int',
        'paid_amount' => 'float',
        'sold_amount' => 'float',
        'visits_count' => 'int',
        'number' => 'string',
        'type_id' => 'int',
        'salon_group_id' => 'int',
        'type' => 'map[string,object]',
        'salon_group' => 'map[string,object]',
        'programs' => 'map[string,object][]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'balance' => 'float',
        'points' => 'int32',
        'paid_amount' => 'float',
        'sold_amount' => 'float',
        'visits_count' => 'int32',
        'number' => null,
        'type_id' => 'int32',
        'salon_group_id' => 'int32',
        'type' => null,
        'salon_group' => null,
        'programs' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'balance' => false,
        'points' => false,
        'paid_amount' => false,
        'sold_amount' => false,
        'visits_count' => false,
        'number' => false,
        'type_id' => false,
        'salon_group_id' => false,
        'type' => false,
        'salon_group' => false,
        'programs' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables() : array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull() : array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull) : void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property) : bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property) : bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'balance' => 'balance',
        'points' => 'points',
        'paid_amount' => 'paid_amount',
        'sold_amount' => 'sold_amount',
        'visits_count' => 'visits_count',
        'number' => 'number',
        'type_id' => 'type_id',
        'salon_group_id' => 'salon_group_id',
        'type' => 'type',
        'salon_group' => 'salon_group',
        'programs' => 'programs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'balance' => 'setBalance',
        'points' => 'setPoints',
        'paid_amount' => 'setPaidAmount',
        'sold_amount' => 'setSoldAmount',
        'visits_count' => 'setVisitsCount',
        'number' => 'setNumber',
        'type_id' => 'setTypeId',
        'salon_group_id' => 'setSalonGroupId',
        'type' => 'setType',
        'salon_group' => 'setSalonGroup',
        'programs' => 'setPrograms'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'balance' => 'getBalance',
        'points' => 'getPoints',
        'paid_amount' => 'getPaidAmount',
        'sold_amount' => 'getSoldAmount',
        'visits_count' => 'getVisitsCount',
        'number' => 'getNumber',
        'type_id' => 'getTypeId',
        'salon_group_id' => 'getSalonGroupId',
        'type' => 'getType',
        'salon_group' => 'getSalonGroup',
        'programs' => 'getPrograms'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('points', $data ?? [], null);
        $this->setIfExists('paid_amount', $data ?? [], null);
        $this->setIfExists('sold_amount', $data ?? [], null);
        $this->setIfExists('visits_count', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('type_id', $data ?? [], null);
        $this->setIfExists('salon_group_id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('salon_group', $data ?? [], null);
        $this->setIfExists('programs', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue) : void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

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
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Идентификатор карты лояльности
     *
     * @return self
     */
    public function setId($id) : self
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float|null
     */
    public function getBalance() : ?float
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float|null $balance Баланс карты лояльности
     *
     * @return self
     */
    public function setBalance($balance) : self
    {
        if (is_null($balance)) {
            throw new \InvalidArgumentException('non-nullable balance cannot be null');
        }
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets points
     *
     * @return int|null
     */
    public function getPoints() : ?int
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param int|null $points points
     *
     * @return self
     */
    public function setPoints($points) : self
    {
        if (is_null($points)) {
            throw new \InvalidArgumentException('non-nullable points cannot be null');
        }
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets paid_amount
     *
     * @return float|null
     */
    public function getPaidAmount() : ?float
    {
        return $this->container['paid_amount'];
    }

    /**
     * Sets paid_amount
     *
     * @param float|null $paid_amount Сумма \"Оплачено\"
     *
     * @return self
     */
    public function setPaidAmount($paid_amount) : self
    {
        if (is_null($paid_amount)) {
            throw new \InvalidArgumentException('non-nullable paid_amount cannot be null');
        }
        $this->container['paid_amount'] = $paid_amount;

        return $this;
    }

    /**
     * Gets sold_amount
     *
     * @return float|null
     */
    public function getSoldAmount() : ?float
    {
        return $this->container['sold_amount'];
    }

    /**
     * Sets sold_amount
     *
     * @param float|null $sold_amount Сумма \"Продано\"
     *
     * @return self
     */
    public function setSoldAmount($sold_amount) : self
    {
        if (is_null($sold_amount)) {
            throw new \InvalidArgumentException('non-nullable sold_amount cannot be null');
        }
        $this->container['sold_amount'] = $sold_amount;

        return $this;
    }

    /**
     * Gets visits_count
     *
     * @return int|null
     */
    public function getVisitsCount() : ?int
    {
        return $this->container['visits_count'];
    }

    /**
     * Sets visits_count
     *
     * @param int|null $visits_count Количество визитов
     *
     * @return self
     */
    public function setVisitsCount($visits_count) : self
    {
        if (is_null($visits_count)) {
            throw new \InvalidArgumentException('non-nullable visits_count cannot be null');
        }
        $this->container['visits_count'] = $visits_count;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber() : ?string
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number Номер карты
     *
     * @return self
     */
    public function setNumber($number) : self
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int|null
     */
    public function getTypeId() : ?int
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int|null $type_id Идентификатор типа карты лояльности
     *
     * @return self
     */
    public function setTypeId($type_id) : self
    {
        if (is_null($type_id)) {
            throw new \InvalidArgumentException('non-nullable type_id cannot be null');
        }
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets salon_group_id
     *
     * @return int|null
     */
    public function getSalonGroupId() : ?int
    {
        return $this->container['salon_group_id'];
    }

    /**
     * Sets salon_group_id
     *
     * @param int|null $salon_group_id Идентификатор сети, где создана карта
     *
     * @return self
     */
    public function setSalonGroupId($salon_group_id) : self
    {
        if (is_null($salon_group_id)) {
            throw new \InvalidArgumentException('non-nullable salon_group_id cannot be null');
        }
        $this->container['salon_group_id'] = $salon_group_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return map[string,object]|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param map[string,object]|null $type Объект, содержащий в себе поля \"id\" и \"title\": идентификатор типа карты и название типа карты, соотвественно
     *
     * @return self
     */
    public function setType($type) : self
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets salon_group
     *
     * @return map[string,object]|null
     */
    public function getSalonGroup()
    {
        return $this->container['salon_group'];
    }

    /**
     * Sets salon_group
     *
     * @param map[string,object]|null $salon_group Объект, содержащий в себе поля \"id\" и \"title\": идентификатор сети, где создан тип карты и название этой сети
     *
     * @return self
     */
    public function setSalonGroup($salon_group) : self
    {
        if (is_null($salon_group)) {
            throw new \InvalidArgumentException('non-nullable salon_group cannot be null');
        }
        $this->container['salon_group'] = $salon_group;

        return $this;
    }

    /**
     * Gets programs
     *
     * @return map[string,object][]|null
     */
    public function getPrograms()
    {
        return $this->container['programs'];
    }

    /**
     * Sets programs
     *
     * @param map[string,object][]|null $programs Массив с информацией об акциях, привязанных к карте лояльности
     *
     * @return self
     */
    public function setPrograms($programs) : self
    {
        if (is_null($programs)) {
            throw new \InvalidArgumentException('non-nullable programs cannot be null');
        }
        $this->container['programs'] = $programs;

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
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
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
        return json_decode(json_encode(ObjectSerializer::sanitizeForSerialization($this)), true);
    }

}



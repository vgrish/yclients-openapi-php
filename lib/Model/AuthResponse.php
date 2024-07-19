<?php
/**
 * AuthResponse
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
 * AuthResponse Class Doc Comment
 *
 * @category Class
 * @package  Vgrish\YclientsOpenApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuthResponse implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuthResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'user_token' => 'string',
        'name' => 'string',
        'phone' => 'string',
        'login' => 'string',
        'email' => 'string',
        'avatar' => 'string',
        'is_approved' => 'bool',
        'is_email_confirmed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'user_token' => null,
        'name' => null,
        'phone' => null,
        'login' => null,
        'email' => null,
        'avatar' => null,
        'is_approved' => null,
        'is_email_confirmed' => null
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
        'user_token' => 'user_token',
        'name' => 'name',
        'phone' => 'phone',
        'login' => 'login',
        'email' => 'email',
        'avatar' => 'avatar',
        'is_approved' => 'is_approved',
        'is_email_confirmed' => 'is_email_confirmed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_token' => 'setUserToken',
        'name' => 'setName',
        'phone' => 'setPhone',
        'login' => 'setLogin',
        'email' => 'setEmail',
        'avatar' => 'setAvatar',
        'is_approved' => 'setIsApproved',
        'is_email_confirmed' => 'setIsEmailConfirmed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_token' => 'getUserToken',
        'name' => 'getName',
        'phone' => 'getPhone',
        'login' => 'getLogin',
        'email' => 'getEmail',
        'avatar' => 'getAvatar',
        'is_approved' => 'getIsApproved',
        'is_email_confirmed' => 'getIsEmailConfirmed'
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
        $this->container['user_token'] = isset($data['user_token']) ? $data['user_token'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
        $this->container['is_approved'] = isset($data['is_approved']) ? $data['is_approved'] : null;
        $this->container['is_email_confirmed'] = isset($data['is_email_confirmed']) ? $data['is_email_confirmed'] : null;
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
        if ($this->container['user_token'] === null) {
            $invalidProperties[] = "'user_token' can't be null";
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
     * Gets user_token
     *
     * @return string
     */
    public function getUserToken() : string
    {
        return $this->container['user_token'];
    }

    /**
     * Sets user_token
     *
     * @param string $user_token User_token пользователя
     *
     * @return $this
     */
    public function setUserToken($user_token)
    {
        $this->container['user_token'] = $user_token;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Имя пользователя
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string|null $phone Телефон пользователя
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets login
     *
     * @return string|null
     */
    public function getLogin() : ?string
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param string|null $login Логин пользователя
     *
     * @return $this
     */
    public function setLogin($login)
    {
        $this->container['login'] = $login;

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
     * @param string|null $email Почтовый адрес пользователя
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string|null
     */
    public function getAvatar() : ?string
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string|null $avatar Путь к файлу аватарки пользователя
     *
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets is_approved
     *
     * @return bool|null
     */
    public function getIsApproved() : ?bool
    {
        return $this->container['is_approved'];
    }

    /**
     * Sets is_approved
     *
     * @param bool|null $is_approved Подтвержден ли пользователь в системе
     *
     * @return $this
     */
    public function setIsApproved($is_approved)
    {
        $this->container['is_approved'] = $is_approved;

        return $this;
    }

    /**
     * Gets is_email_confirmed
     *
     * @return bool|null
     */
    public function getIsEmailConfirmed() : ?bool
    {
        return $this->container['is_email_confirmed'];
    }

    /**
     * Sets is_email_confirmed
     *
     * @param bool|null $is_email_confirmed Подтвержден ли email пользователя в системе
     *
     * @return $this
     */
    public function setIsEmailConfirmed($is_email_confirmed)
    {
        $this->container['is_email_confirmed'] = $is_email_confirmed;

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



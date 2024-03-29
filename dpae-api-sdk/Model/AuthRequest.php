<?php
/**
 * AuthRequest.
 *
 * PHP version 5
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DPAE.
 *
 * Connection of Troops & DPAE
 *
 * OpenAPI spec version: 1.0.0-oas3
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.11
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DPAE\Model;

use ArrayAccess;
use DPAE\ObjectSerializer;

/**
 * AuthRequest Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class AuthRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'AuthRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'siret' => 'string',
'nom' => 'string',
'prenom' => 'string',
'motdepasse' => 'string',
'service' => 'int',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'siret' => null,
'nom' => null,
'prenom' => null,
'motdepasse' => null,
'service' => null,    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'siret' => 'siret',
'nom' => 'nom',
'prenom' => 'prenom',
'motdepasse' => 'motdepasse',
'service' => 'service',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'siret' => 'setSiret',
'nom' => 'setNom',
'prenom' => 'setPrenom',
'motdepasse' => 'setMotdepasse',
'service' => 'setService',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'siret' => 'getSiret',
'nom' => 'getNom',
'prenom' => 'getPrenom',
'motdepasse' => 'getMotdepasse',
'service' => 'getService',    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['siret'] = isset($data['siret']) ? $data['siret'] : null;
        $this->container['nom'] = isset($data['nom']) ? $data['nom'] : null;
        $this->container['prenom'] = isset($data['prenom']) ? $data['prenom'] : null;
        $this->container['motdepasse'] = isset($data['motdepasse']) ? $data['motdepasse'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets siret.
     *
     * @return string
     */
    public function getSiret()
    {
        return $this->container['siret'];
    }

    /**
     * Sets siret.
     *
     * @param string $siret siret
     *
     * @return $this
     */
    public function setSiret($siret)
    {
        $this->container['siret'] = $siret;

        return $this;
    }

    /**
     * Gets nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->container['nom'];
    }

    /**
     * Sets nom.
     *
     * @param string $nom nom
     *
     * @return $this
     */
    public function setNom($nom)
    {
        $this->container['nom'] = $nom;

        return $this;
    }

    /**
     * Gets prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->container['prenom'];
    }

    /**
     * Sets prenom.
     *
     * @param string $prenom prenom
     *
     * @return $this
     */
    public function setPrenom($prenom)
    {
        $this->container['prenom'] = $prenom;

        return $this;
    }

    /**
     * Gets motdepasse.
     *
     * @return string
     */
    public function getMotdepasse()
    {
        return $this->container['motdepasse'];
    }

    /**
     * Sets motdepasse.
     *
     * @param string $motdepasse motdepasse
     *
     * @return $this
     */
    public function setMotdepasse($motdepasse)
    {
        $this->container['motdepasse'] = $motdepasse;

        return $this;
    }

    /**
     * Gets service.
     *
     * @return int
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service.
     *
     * @param int $service service
     *
     * @return $this
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
     */
    public function offsetSet($offset, $value)
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
     * @param int $offset Offset
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

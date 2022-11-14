<?php
/**
 * DomainUpdateDomainRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Domain
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\Domain\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * DomainUpdateDomainRequest Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DomainUpdateDomainRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'domainUpdateDomainRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accept_update_fee' => 'double',
        'additional_data' => '\Openprovider\Api\Rest\Client\Domain\Model\DomainUpdateAdditionalData',
        'admin_handle' => 'string',
        'auth_code' => 'string',
        'autorenew' => 'string',
        'billing_handle' => 'string',
        'comments' => 'string',
        'dnssec_keys' => '\Openprovider\Api\Rest\Client\Domain\Model\DomainDnssecKey[]',
        'domain' => '\Openprovider\Api\Rest\Client\Domain\Model\DomainDomain',
        'force_registry_update' => 'bool',
        'id' => 'int',
        'is_dnssec_enabled' => 'bool',
        'is_locked' => 'bool',
        'is_private_whois_enabled' => 'bool',
        'is_sectigo_dns_enabled' => 'bool',
        'is_spamexperts_enabled' => 'bool',
        'name_servers' => '\Openprovider\Api\Rest\Client\Domain\Model\DomainNameserver[]',
        'ns_group' => 'string',
        'ns_template_id' => 'int',
        'ns_template_name' => 'string',
        'owner_handle' => 'string',
        'remove_nses' => 'bool',
        'reseller_handle' => 'string',
        'reset_auth_code' => 'bool',
        'scheduled_at' => 'string',
        'tech_handle' => 'string',
        'use_domicile' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accept_update_fee' => 'double',
        'additional_data' => null,
        'admin_handle' => null,
        'auth_code' => null,
        'autorenew' => null,
        'billing_handle' => null,
        'comments' => null,
        'dnssec_keys' => null,
        'domain' => null,
        'force_registry_update' => 'boolean',
        'id' => 'int32',
        'is_dnssec_enabled' => 'boolean',
        'is_locked' => 'boolean',
        'is_private_whois_enabled' => 'boolean',
        'is_sectigo_dns_enabled' => 'boolean',
        'is_spamexperts_enabled' => 'boolean',
        'name_servers' => null,
        'ns_group' => null,
        'ns_template_id' => 'int32',
        'ns_template_name' => null,
        'owner_handle' => null,
        'remove_nses' => 'boolean',
        'reseller_handle' => null,
        'reset_auth_code' => 'boolean',
        'scheduled_at' => null,
        'tech_handle' => null,
        'use_domicile' => 'boolean'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
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
        'accept_update_fee' => 'accept_update_fee',
        'additional_data' => 'additional_data',
        'admin_handle' => 'admin_handle',
        'auth_code' => 'auth_code',
        'autorenew' => 'autorenew',
        'billing_handle' => 'billing_handle',
        'comments' => 'comments',
        'dnssec_keys' => 'dnssec_keys',
        'domain' => 'domain',
        'force_registry_update' => 'force_registry_update',
        'id' => 'id',
        'is_dnssec_enabled' => 'is_dnssec_enabled',
        'is_locked' => 'is_locked',
        'is_private_whois_enabled' => 'is_private_whois_enabled',
        'is_sectigo_dns_enabled' => 'is_sectigo_dns_enabled',
        'is_spamexperts_enabled' => 'is_spamexperts_enabled',
        'name_servers' => 'name_servers',
        'ns_group' => 'ns_group',
        'ns_template_id' => 'ns_template_id',
        'ns_template_name' => 'ns_template_name',
        'owner_handle' => 'owner_handle',
        'remove_nses' => 'remove_nses',
        'reseller_handle' => 'reseller_handle',
        'reset_auth_code' => 'reset_auth_code',
        'scheduled_at' => 'scheduled_at',
        'tech_handle' => 'tech_handle',
        'use_domicile' => 'use_domicile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accept_update_fee' => 'setAcceptUpdateFee',
        'additional_data' => 'setAdditionalData',
        'admin_handle' => 'setAdminHandle',
        'auth_code' => 'setAuthCode',
        'autorenew' => 'setAutorenew',
        'billing_handle' => 'setBillingHandle',
        'comments' => 'setComments',
        'dnssec_keys' => 'setDnssecKeys',
        'domain' => 'setDomain',
        'force_registry_update' => 'setForceRegistryUpdate',
        'id' => 'setId',
        'is_dnssec_enabled' => 'setIsDnssecEnabled',
        'is_locked' => 'setIsLocked',
        'is_private_whois_enabled' => 'setIsPrivateWhoisEnabled',
        'is_sectigo_dns_enabled' => 'setIsSectigoDnsEnabled',
        'is_spamexperts_enabled' => 'setIsSpamexpertsEnabled',
        'name_servers' => 'setNameServers',
        'ns_group' => 'setNsGroup',
        'ns_template_id' => 'setNsTemplateId',
        'ns_template_name' => 'setNsTemplateName',
        'owner_handle' => 'setOwnerHandle',
        'remove_nses' => 'setRemoveNses',
        'reseller_handle' => 'setResellerHandle',
        'reset_auth_code' => 'setResetAuthCode',
        'scheduled_at' => 'setScheduledAt',
        'tech_handle' => 'setTechHandle',
        'use_domicile' => 'setUseDomicile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accept_update_fee' => 'getAcceptUpdateFee',
        'additional_data' => 'getAdditionalData',
        'admin_handle' => 'getAdminHandle',
        'auth_code' => 'getAuthCode',
        'autorenew' => 'getAutorenew',
        'billing_handle' => 'getBillingHandle',
        'comments' => 'getComments',
        'dnssec_keys' => 'getDnssecKeys',
        'domain' => 'getDomain',
        'force_registry_update' => 'getForceRegistryUpdate',
        'id' => 'getId',
        'is_dnssec_enabled' => 'getIsDnssecEnabled',
        'is_locked' => 'getIsLocked',
        'is_private_whois_enabled' => 'getIsPrivateWhoisEnabled',
        'is_sectigo_dns_enabled' => 'getIsSectigoDnsEnabled',
        'is_spamexperts_enabled' => 'getIsSpamexpertsEnabled',
        'name_servers' => 'getNameServers',
        'ns_group' => 'getNsGroup',
        'ns_template_id' => 'getNsTemplateId',
        'ns_template_name' => 'getNsTemplateName',
        'owner_handle' => 'getOwnerHandle',
        'remove_nses' => 'getRemoveNses',
        'reseller_handle' => 'getResellerHandle',
        'reset_auth_code' => 'getResetAuthCode',
        'scheduled_at' => 'getScheduledAt',
        'tech_handle' => 'getTechHandle',
        'use_domicile' => 'getUseDomicile'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
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
        $this->container['accept_update_fee'] = isset($data['accept_update_fee']) ? $data['accept_update_fee'] : null;
        $this->container['additional_data'] = isset($data['additional_data']) ? $data['additional_data'] : null;
        $this->container['admin_handle'] = isset($data['admin_handle']) ? $data['admin_handle'] : null;
        $this->container['auth_code'] = isset($data['auth_code']) ? $data['auth_code'] : null;
        $this->container['autorenew'] = isset($data['autorenew']) ? $data['autorenew'] : null;
        $this->container['billing_handle'] = isset($data['billing_handle']) ? $data['billing_handle'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['dnssec_keys'] = isset($data['dnssec_keys']) ? $data['dnssec_keys'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['force_registry_update'] = isset($data['force_registry_update']) ? $data['force_registry_update'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_dnssec_enabled'] = isset($data['is_dnssec_enabled']) ? $data['is_dnssec_enabled'] : null;
        $this->container['is_locked'] = isset($data['is_locked']) ? $data['is_locked'] : null;
        $this->container['is_private_whois_enabled'] = isset($data['is_private_whois_enabled']) ? $data['is_private_whois_enabled'] : null;
        $this->container['is_sectigo_dns_enabled'] = isset($data['is_sectigo_dns_enabled']) ? $data['is_sectigo_dns_enabled'] : null;
        $this->container['is_spamexperts_enabled'] = isset($data['is_spamexperts_enabled']) ? $data['is_spamexperts_enabled'] : null;
        $this->container['name_servers'] = isset($data['name_servers']) ? $data['name_servers'] : null;
        $this->container['ns_group'] = isset($data['ns_group']) ? $data['ns_group'] : null;
        $this->container['ns_template_id'] = isset($data['ns_template_id']) ? $data['ns_template_id'] : null;
        $this->container['ns_template_name'] = isset($data['ns_template_name']) ? $data['ns_template_name'] : null;
        $this->container['owner_handle'] = isset($data['owner_handle']) ? $data['owner_handle'] : null;
        $this->container['remove_nses'] = isset($data['remove_nses']) ? $data['remove_nses'] : null;
        $this->container['reseller_handle'] = isset($data['reseller_handle']) ? $data['reseller_handle'] : null;
        $this->container['reset_auth_code'] = isset($data['reset_auth_code']) ? $data['reset_auth_code'] : null;
        $this->container['scheduled_at'] = isset($data['scheduled_at']) ? $data['scheduled_at'] : null;
        $this->container['tech_handle'] = isset($data['tech_handle']) ? $data['tech_handle'] : null;
        $this->container['use_domicile'] = isset($data['use_domicile']) ? $data['use_domicile'] : null;
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
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets accept_update_fee
     *
     * @return double|null
     */
    public function getAcceptUpdateFee()
    {
        return $this->container['accept_update_fee'];
    }

    /**
     * Sets accept_update_fee
     *
     * @param double|null $accept_update_fee accept_update_fee
     *
     * @return $this
     */
    public function setAcceptUpdateFee($accept_update_fee)
    {
        $this->container['accept_update_fee'] = $accept_update_fee;

        return $this;
    }

    /**
     * Gets additional_data
     *
     * @return \Openprovider\Api\Rest\Client\Domain\Model\DomainUpdateAdditionalData|null
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     *
     * @param \Openprovider\Api\Rest\Client\Domain\Model\DomainUpdateAdditionalData|null $additional_data additional_data
     *
     * @return $this
     */
    public function setAdditionalData($additional_data)
    {
        $this->container['additional_data'] = $additional_data;

        return $this;
    }

    /**
     * Gets admin_handle
     *
     * @return string|null
     */
    public function getAdminHandle()
    {
        return $this->container['admin_handle'];
    }

    /**
     * Sets admin_handle
     *
     * @param string|null $admin_handle admin_handle
     *
     * @return $this
     */
    public function setAdminHandle($admin_handle)
    {
        $this->container['admin_handle'] = $admin_handle;

        return $this;
    }

    /**
     * Gets auth_code
     *
     * @return string|null
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param string|null $auth_code auth_code
     *
     * @return $this
     */
    public function setAuthCode($auth_code)
    {
        $this->container['auth_code'] = $auth_code;

        return $this;
    }

    /**
     * Gets autorenew
     *
     * @return string|null
     */
    public function getAutorenew()
    {
        return $this->container['autorenew'];
    }

    /**
     * Sets autorenew
     *
     * @param string|null $autorenew autorenew
     *
     * @return $this
     */
    public function setAutorenew($autorenew)
    {
        $this->container['autorenew'] = $autorenew;

        return $this;
    }

    /**
     * Gets billing_handle
     *
     * @return string|null
     */
    public function getBillingHandle()
    {
        return $this->container['billing_handle'];
    }

    /**
     * Sets billing_handle
     *
     * @param string|null $billing_handle billing_handle
     *
     * @return $this
     */
    public function setBillingHandle($billing_handle)
    {
        $this->container['billing_handle'] = $billing_handle;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets dnssec_keys
     *
     * @return \Openprovider\Api\Rest\Client\Domain\Model\DomainDnssecKey[]|null
     */
    public function getDnssecKeys()
    {
        return $this->container['dnssec_keys'];
    }

    /**
     * Sets dnssec_keys
     *
     * @param \Openprovider\Api\Rest\Client\Domain\Model\DomainDnssecKey[]|null $dnssec_keys dnssec_keys
     *
     * @return $this
     */
    public function setDnssecKeys($dnssec_keys)
    {
        $this->container['dnssec_keys'] = $dnssec_keys;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return \Openprovider\Api\Rest\Client\Domain\Model\DomainDomain|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param \Openprovider\Api\Rest\Client\Domain\Model\DomainDomain|null $domain domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets force_registry_update
     *
     * @return bool|null
     */
    public function getForceRegistryUpdate()
    {
        return $this->container['force_registry_update'];
    }

    /**
     * Sets force_registry_update
     *
     * @param bool|null $force_registry_update force_registry_update
     *
     * @return $this
     */
    public function setForceRegistryUpdate($force_registry_update)
    {
        $this->container['force_registry_update'] = $force_registry_update;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_dnssec_enabled
     *
     * @return bool|null
     */
    public function getIsDnssecEnabled()
    {
        return $this->container['is_dnssec_enabled'];
    }

    /**
     * Sets is_dnssec_enabled
     *
     * @param bool|null $is_dnssec_enabled is_dnssec_enabled
     *
     * @return $this
     */
    public function setIsDnssecEnabled($is_dnssec_enabled)
    {
        $this->container['is_dnssec_enabled'] = $is_dnssec_enabled;

        return $this;
    }

    /**
     * Gets is_locked
     *
     * @return bool|null
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     *
     * @param bool|null $is_locked is_locked
     *
     * @return $this
     */
    public function setIsLocked($is_locked)
    {
        $this->container['is_locked'] = $is_locked;

        return $this;
    }

    /**
     * Gets is_private_whois_enabled
     *
     * @return bool|null
     */
    public function getIsPrivateWhoisEnabled()
    {
        return $this->container['is_private_whois_enabled'];
    }

    /**
     * Sets is_private_whois_enabled
     *
     * @param bool|null $is_private_whois_enabled is_private_whois_enabled
     *
     * @return $this
     */
    public function setIsPrivateWhoisEnabled($is_private_whois_enabled)
    {
        $this->container['is_private_whois_enabled'] = $is_private_whois_enabled;

        return $this;
    }

    /**
     * Gets is_sectigo_dns_enabled
     *
     * @return bool|null
     */
    public function getIsSectigoDnsEnabled()
    {
        return $this->container['is_sectigo_dns_enabled'];
    }

    /**
     * Sets is_sectigo_dns_enabled
     *
     * @param bool|null $is_sectigo_dns_enabled is_sectigo_dns_enabled
     *
     * @return $this
     */
    public function setIsSectigoDnsEnabled($is_sectigo_dns_enabled)
    {
        $this->container['is_sectigo_dns_enabled'] = $is_sectigo_dns_enabled;

        return $this;
    }

    /**
     * Gets is_spamexperts_enabled
     *
     * @return bool|null
     */
    public function getIsSpamexpertsEnabled()
    {
        return $this->container['is_spamexperts_enabled'];
    }

    /**
     * Sets is_spamexperts_enabled
     *
     * @param bool|null $is_spamexperts_enabled is_spamexperts_enabled
     *
     * @return $this
     */
    public function setIsSpamexpertsEnabled($is_spamexperts_enabled)
    {
        $this->container['is_spamexperts_enabled'] = $is_spamexperts_enabled;

        return $this;
    }

    /**
     * Gets name_servers
     *
     * @return \Openprovider\Api\Rest\Client\Domain\Model\DomainNameserver[]|null
     */
    public function getNameServers()
    {
        return $this->container['name_servers'];
    }

    /**
     * Sets name_servers
     *
     * @param \Openprovider\Api\Rest\Client\Domain\Model\DomainNameserver[]|null $name_servers name_servers
     *
     * @return $this
     */
    public function setNameServers($name_servers)
    {
        $this->container['name_servers'] = $name_servers;

        return $this;
    }

    /**
     * Gets ns_group
     *
     * @return string|null
     */
    public function getNsGroup()
    {
        return $this->container['ns_group'];
    }

    /**
     * Sets ns_group
     *
     * @param string|null $ns_group ns_group
     *
     * @return $this
     */
    public function setNsGroup($ns_group)
    {
        $this->container['ns_group'] = $ns_group;

        return $this;
    }

    /**
     * Gets ns_template_id
     *
     * @return int|null
     */
    public function getNsTemplateId()
    {
        return $this->container['ns_template_id'];
    }

    /**
     * Sets ns_template_id
     *
     * @param int|null $ns_template_id ns_template_id
     *
     * @return $this
     */
    public function setNsTemplateId($ns_template_id)
    {
        $this->container['ns_template_id'] = $ns_template_id;

        return $this;
    }

    /**
     * Gets ns_template_name
     *
     * @return string|null
     */
    public function getNsTemplateName()
    {
        return $this->container['ns_template_name'];
    }

    /**
     * Sets ns_template_name
     *
     * @param string|null $ns_template_name ns_template_name
     *
     * @return $this
     */
    public function setNsTemplateName($ns_template_name)
    {
        $this->container['ns_template_name'] = $ns_template_name;

        return $this;
    }

    /**
     * Gets owner_handle
     *
     * @return string|null
     */
    public function getOwnerHandle()
    {
        return $this->container['owner_handle'];
    }

    /**
     * Sets owner_handle
     *
     * @param string|null $owner_handle owner_handle
     *
     * @return $this
     */
    public function setOwnerHandle($owner_handle)
    {
        $this->container['owner_handle'] = $owner_handle;

        return $this;
    }

    /**
     * Gets remove_nses
     *
     * @return bool|null
     */
    public function getRemoveNses()
    {
        return $this->container['remove_nses'];
    }

    /**
     * Sets remove_nses
     *
     * @param bool|null $remove_nses remove_nses
     *
     * @return $this
     */
    public function setRemoveNses($remove_nses)
    {
        $this->container['remove_nses'] = $remove_nses;

        return $this;
    }

    /**
     * Gets reseller_handle
     *
     * @return string|null
     */
    public function getResellerHandle()
    {
        return $this->container['reseller_handle'];
    }

    /**
     * Sets reseller_handle
     *
     * @param string|null $reseller_handle reseller_handle
     *
     * @return $this
     */
    public function setResellerHandle($reseller_handle)
    {
        $this->container['reseller_handle'] = $reseller_handle;

        return $this;
    }

    /**
     * Gets reset_auth_code
     *
     * @return bool|null
     */
    public function getResetAuthCode()
    {
        return $this->container['reset_auth_code'];
    }

    /**
     * Sets reset_auth_code
     *
     * @param bool|null $reset_auth_code reset_auth_code
     *
     * @return $this
     */
    public function setResetAuthCode($reset_auth_code)
    {
        $this->container['reset_auth_code'] = $reset_auth_code;

        return $this;
    }

    /**
     * Gets scheduled_at
     *
     * @return string|null
     */
    public function getScheduledAt()
    {
        return $this->container['scheduled_at'];
    }

    /**
     * Sets scheduled_at
     *
     * @param string|null $scheduled_at scheduled_at
     *
     * @return $this
     */
    public function setScheduledAt($scheduled_at)
    {
        $this->container['scheduled_at'] = $scheduled_at;

        return $this;
    }

    /**
     * Gets tech_handle
     *
     * @return string|null
     */
    public function getTechHandle()
    {
        return $this->container['tech_handle'];
    }

    /**
     * Sets tech_handle
     *
     * @param string|null $tech_handle tech_handle
     *
     * @return $this
     */
    public function setTechHandle($tech_handle)
    {
        $this->container['tech_handle'] = $tech_handle;

        return $this;
    }

    /**
     * Gets use_domicile
     *
     * @return bool|null
     */
    public function getUseDomicile()
    {
        return $this->container['use_domicile'];
    }

    /**
     * Sets use_domicile
     *
     * @param bool|null $use_domicile use_domicile
     *
     * @return $this
     */
    public function setUseDomicile($use_domicile)
    {
        $this->container['use_domicile'] = $use_domicile;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetGet($offset)
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}



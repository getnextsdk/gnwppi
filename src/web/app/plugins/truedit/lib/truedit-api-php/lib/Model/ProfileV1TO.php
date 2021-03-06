<?php
/**
 * ProfileV1TO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TruEdit REST API
 *
 * Welcome to the TruEdit Platform REST API Reference! You can use this REST API to develop integrations between TruEdit and other applications or script interactions with TruEdit.
 *
 * OpenAPI spec version: 1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ProfileV1TO Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProfileV1TO implements ModelInterface, ArrayAccess {

	const DISCRIMINATOR = null;

	/**
	  * The original name of the model.
	  *
	  * @var string
	  */
	protected static $swaggerModelName = 'ProfileV1TO';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  *
	  * @var string[]
	  */
	protected static $swaggerTypes = [
		'any_child_profile'      => 'bool',
		'automations'            => '\Swagger\Client\Model\ReferenceV1TO[]',
		'child_profiles'         => '\Swagger\Client\Model\ReferenceV1TO[]',
		'cmd_fields'             => '\Swagger\Client\Model\ReferenceV1TO[]',
		'icon_selection'         => 'string',
		'id'                     => 'int',
		'keep_all_versions'      => 'bool',
		'keep_first_xx_versions' => 'int',
		'keep_last_xx_versions'  => 'int',
		'name'                   => 'string',
		'output_types'           => '\Swagger\Client\Model\ReferenceV1TO[]',
		'overview'               => 'bool',
		'profile_type'           => '\Swagger\Client\Model\ReferenceV1TO',
		'root_profile'           => 'bool',
		'self_child_profile'     => 'bool',
		'tru_author'             => 'bool',
		'workflow'               => '\Swagger\Client\Model\ReferenceV1TO',
	];

	/**
	  * Array of property to format mappings. Used for (de)serialization
	  *
	  * @var string[]
	  */
	protected static $swaggerFormats = [
		'any_child_profile'      => null,
		'automations'            => null,
		'child_profiles'         => null,
		'cmd_fields'             => null,
		'icon_selection'         => null,
		'id'                     => 'int64',
		'keep_all_versions'      => null,
		'keep_first_xx_versions' => 'int32',
		'keep_last_xx_versions'  => 'int32',
		'name'                   => null,
		'output_types'           => null,
		'overview'               => null,
		'profile_type'           => null,
		'root_profile'           => null,
		'self_child_profile'     => null,
		'tru_author'             => null,
		'workflow'               => null,
	];

	/**
	 * Array of property to type mappings. Used for (de)serialization
	 *
	 * @return array
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	/**
	 * Array of property to format mappings. Used for (de)serialization
	 *
	 * @return array
	 */
	public static function swaggerFormats() {
		return self::$swaggerFormats;
	}

	/**
	 * Array of attributes where the key is the local name,
	 * and the value is the original name
	 *
	 * @var string[]
	 */
	protected static $attributeMap = [
		'any_child_profile'      => 'anyChildProfile',
		'automations'            => 'automations',
		'child_profiles'         => 'childProfiles',
		'cmd_fields'             => 'cmdFields',
		'icon_selection'         => 'iconSelection',
		'id'                     => 'id',
		'keep_all_versions'      => 'keepAllVersions',
		'keep_first_xx_versions' => 'keepFirstXXVersions',
		'keep_last_xx_versions'  => 'keepLastXXVersions',
		'name'                   => 'name',
		'output_types'           => 'outputTypes',
		'overview'               => 'overview',
		'profile_type'           => 'profileType',
		'root_profile'           => 'rootProfile',
		'self_child_profile'     => 'selfChildProfile',
		'tru_author'             => 'truAuthor',
		'workflow'               => 'workflow',
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 *
	 * @var string[]
	 */
	protected static $setters = [
		'any_child_profile'      => 'setAnyChildProfile',
		'automations'            => 'setAutomations',
		'child_profiles'         => 'setChildProfiles',
		'cmd_fields'             => 'setCmdFields',
		'icon_selection'         => 'setIconSelection',
		'id'                     => 'setId',
		'keep_all_versions'      => 'setKeepAllVersions',
		'keep_first_xx_versions' => 'setKeepFirstXxVersions',
		'keep_last_xx_versions'  => 'setKeepLastXxVersions',
		'name'                   => 'setName',
		'output_types'           => 'setOutputTypes',
		'overview'               => 'setOverview',
		'profile_type'           => 'setProfileType',
		'root_profile'           => 'setRootProfile',
		'self_child_profile'     => 'setSelfChildProfile',
		'tru_author'             => 'setTruAuthor',
		'workflow'               => 'setWorkflow',
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 *
	 * @var string[]
	 */
	protected static $getters = [
		'any_child_profile'      => 'getAnyChildProfile',
		'automations'            => 'getAutomations',
		'child_profiles'         => 'getChildProfiles',
		'cmd_fields'             => 'getCmdFields',
		'icon_selection'         => 'getIconSelection',
		'id'                     => 'getId',
		'keep_all_versions'      => 'getKeepAllVersions',
		'keep_first_xx_versions' => 'getKeepFirstXxVersions',
		'keep_last_xx_versions'  => 'getKeepLastXxVersions',
		'name'                   => 'getName',
		'output_types'           => 'getOutputTypes',
		'overview'               => 'getOverview',
		'profile_type'           => 'getProfileType',
		'root_profile'           => 'getRootProfile',
		'self_child_profile'     => 'getSelfChildProfile',
		'tru_author'             => 'getTruAuthor',
		'workflow'               => 'getWorkflow',
	];

	/**
	 * Array of attributes where the key is the local name,
	 * and the value is the original name
	 *
	 * @return array
	 */
	public static function attributeMap() {
		return self::$attributeMap;
	}

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 *
	 * @return array
	 */
	public static function setters() {
		return self::$setters;
	}

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 *
	 * @return array
	 */
	public static function getters() {
		return self::$getters;
	}

	/**
	 * The original name of the model.
	 *
	 * @return string
	 */
	public function getModelName() {
		return self::$swaggerModelName;
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
	public function __construct( array $data = null ) {
		$this->container['any_child_profile']      = isset( $data['any_child_profile'] ) ? $data['any_child_profile'] : null;
		$this->container['automations']            = isset( $data['automations'] ) ? $data['automations'] : null;
		$this->container['child_profiles']         = isset( $data['child_profiles'] ) ? $data['child_profiles'] : null;
		$this->container['cmd_fields']             = isset( $data['cmd_fields'] ) ? $data['cmd_fields'] : null;
		$this->container['icon_selection']         = isset( $data['icon_selection'] ) ? $data['icon_selection'] : null;
		$this->container['id']                     = isset( $data['id'] ) ? $data['id'] : null;
		$this->container['keep_all_versions']      = isset( $data['keep_all_versions'] ) ? $data['keep_all_versions'] : null;
		$this->container['keep_first_xx_versions'] = isset( $data['keep_first_xx_versions'] ) ? $data['keep_first_xx_versions'] : null;
		$this->container['keep_last_xx_versions']  = isset( $data['keep_last_xx_versions'] ) ? $data['keep_last_xx_versions'] : null;
		$this->container['name']                   = isset( $data['name'] ) ? $data['name'] : null;
		$this->container['output_types']           = isset( $data['output_types'] ) ? $data['output_types'] : null;
		$this->container['overview']               = isset( $data['overview'] ) ? $data['overview'] : null;
		$this->container['profile_type']           = isset( $data['profile_type'] ) ? $data['profile_type'] : null;
		$this->container['root_profile']           = isset( $data['root_profile'] ) ? $data['root_profile'] : null;
		$this->container['self_child_profile']     = isset( $data['self_child_profile'] ) ? $data['self_child_profile'] : null;
		$this->container['tru_author']             = isset( $data['tru_author'] ) ? $data['tru_author'] : null;
		$this->container['workflow']               = isset( $data['workflow'] ) ? $data['workflow'] : null;
	}

	/**
	 * Show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function listInvalidProperties() {
		$invalidProperties = [];

		return $invalidProperties;
	}

	/**
	 * Validate all the properties in the model
	 * return true if all passed
	 *
	 * @return bool True if all properties are valid
	 */
	public function valid() {

		return true;
	}


	/**
	 * Gets any_child_profile
	 *
	 * @return bool
	 */
	public function getAnyChildProfile() {
		return $this->container['any_child_profile'];
	}

	/**
	 * Sets any_child_profile
	 *
	 * @param bool $any_child_profile any_child_profile
	 *
	 * @return $this
	 */
	public function setAnyChildProfile( $any_child_profile ) {
		$this->container['any_child_profile'] = $any_child_profile;

		return $this;
	}

	/**
	 * Gets automations
	 *
	 * @return \Swagger\Client\Model\ReferenceV1TO[]
	 */
	public function getAutomations() {
		return $this->container['automations'];
	}

	/**
	 * Sets automations
	 *
	 * @param \Swagger\Client\Model\ReferenceV1TO[] $automations automations
	 *
	 * @return $this
	 */
	public function setAutomations( $automations ) {
		$this->container['automations'] = $automations;

		return $this;
	}

	/**
	 * Gets child_profiles
	 *
	 * @return \Swagger\Client\Model\ReferenceV1TO[]
	 */
	public function getChildProfiles() {
		return $this->container['child_profiles'];
	}

	/**
	 * Sets child_profiles
	 *
	 * @param \Swagger\Client\Model\ReferenceV1TO[] $child_profiles child_profiles
	 *
	 * @return $this
	 */
	public function setChildProfiles( $child_profiles ) {
		$this->container['child_profiles'] = $child_profiles;

		return $this;
	}

	/**
	 * Gets cmd_fields
	 *
	 * @return \Swagger\Client\Model\ReferenceV1TO[]
	 */
	public function getCmdFields() {
		return $this->container['cmd_fields'];
	}

	/**
	 * Sets cmd_fields
	 *
	 * @param \Swagger\Client\Model\ReferenceV1TO[] $cmd_fields cmd_fields
	 *
	 * @return $this
	 */
	public function setCmdFields( $cmd_fields ) {
		$this->container['cmd_fields'] = $cmd_fields;

		return $this;
	}

	/**
	 * Gets icon_selection
	 *
	 * @return string
	 */
	public function getIconSelection() {
		return $this->container['icon_selection'];
	}

	/**
	 * Sets icon_selection
	 *
	 * @param string $icon_selection icon_selection
	 *
	 * @return $this
	 */
	public function setIconSelection( $icon_selection ) {
		$this->container['icon_selection'] = $icon_selection;

		return $this;
	}

	/**
	 * Gets id
	 *
	 * @return int
	 */
	public function getId() {
		return $this->container['id'];
	}

	/**
	 * Sets id
	 *
	 * @param int $id id
	 *
	 * @return $this
	 */
	public function setId( $id ) {
		$this->container['id'] = $id;

		return $this;
	}

	/**
	 * Gets keep_all_versions
	 *
	 * @return bool
	 */
	public function getKeepAllVersions() {
		return $this->container['keep_all_versions'];
	}

	/**
	 * Sets keep_all_versions
	 *
	 * @param bool $keep_all_versions keep_all_versions
	 *
	 * @return $this
	 */
	public function setKeepAllVersions( $keep_all_versions ) {
		$this->container['keep_all_versions'] = $keep_all_versions;

		return $this;
	}

	/**
	 * Gets keep_first_xx_versions
	 *
	 * @return int
	 */
	public function getKeepFirstXxVersions() {
		return $this->container['keep_first_xx_versions'];
	}

	/**
	 * Sets keep_first_xx_versions
	 *
	 * @param int $keep_first_xx_versions keep_first_xx_versions
	 *
	 * @return $this
	 */
	public function setKeepFirstXxVersions( $keep_first_xx_versions ) {
		$this->container['keep_first_xx_versions'] = $keep_first_xx_versions;

		return $this;
	}

	/**
	 * Gets keep_last_xx_versions
	 *
	 * @return int
	 */
	public function getKeepLastXxVersions() {
		return $this->container['keep_last_xx_versions'];
	}

	/**
	 * Sets keep_last_xx_versions
	 *
	 * @param int $keep_last_xx_versions keep_last_xx_versions
	 *
	 * @return $this
	 */
	public function setKeepLastXxVersions( $keep_last_xx_versions ) {
		$this->container['keep_last_xx_versions'] = $keep_last_xx_versions;

		return $this;
	}

	/**
	 * Gets name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->container['name'];
	}

	/**
	 * Sets name
	 *
	 * @param string $name name
	 *
	 * @return $this
	 */
	public function setName( $name ) {
		$this->container['name'] = $name;

		return $this;
	}

	/**
	 * Gets output_types
	 *
	 * @return \Swagger\Client\Model\ReferenceV1TO[]
	 */
	public function getOutputTypes() {
		return $this->container['output_types'];
	}

	/**
	 * Sets output_types
	 *
	 * @param \Swagger\Client\Model\ReferenceV1TO[] $output_types output_types
	 *
	 * @return $this
	 */
	public function setOutputTypes( $output_types ) {
		$this->container['output_types'] = $output_types;

		return $this;
	}

	/**
	 * Gets overview
	 *
	 * @return bool
	 */
	public function getOverview() {
		return $this->container['overview'];
	}

	/**
	 * Sets overview
	 *
	 * @param bool $overview overview
	 *
	 * @return $this
	 */
	public function setOverview( $overview ) {
		$this->container['overview'] = $overview;

		return $this;
	}

	/**
	 * Gets profile_type
	 *
	 * @return \Swagger\Client\Model\ReferenceV1TO
	 */
	public function getProfileType() {
		return $this->container['profile_type'];
	}

	/**
	 * Sets profile_type
	 *
	 * @param \Swagger\Client\Model\ReferenceV1TO $profile_type profile_type
	 *
	 * @return $this
	 */
	public function setProfileType( $profile_type ) {
		$this->container['profile_type'] = $profile_type;

		return $this;
	}

	/**
	 * Gets root_profile
	 *
	 * @return bool
	 */
	public function getRootProfile() {
		return $this->container['root_profile'];
	}

	/**
	 * Sets root_profile
	 *
	 * @param bool $root_profile root_profile
	 *
	 * @return $this
	 */
	public function setRootProfile( $root_profile ) {
		$this->container['root_profile'] = $root_profile;

		return $this;
	}

	/**
	 * Gets self_child_profile
	 *
	 * @return bool
	 */
	public function getSelfChildProfile() {
		return $this->container['self_child_profile'];
	}

	/**
	 * Sets self_child_profile
	 *
	 * @param bool $self_child_profile self_child_profile
	 *
	 * @return $this
	 */
	public function setSelfChildProfile( $self_child_profile ) {
		$this->container['self_child_profile'] = $self_child_profile;

		return $this;
	}

	/**
	 * Gets tru_author
	 *
	 * @return bool
	 */
	public function getTruAuthor() {
		return $this->container['tru_author'];
	}

	/**
	 * Sets tru_author
	 *
	 * @param bool $tru_author tru_author
	 *
	 * @return $this
	 */
	public function setTruAuthor( $tru_author ) {
		$this->container['tru_author'] = $tru_author;

		return $this;
	}

	/**
	 * Gets workflow
	 *
	 * @return \Swagger\Client\Model\ReferenceV1TO
	 */
	public function getWorkflow() {
		return $this->container['workflow'];
	}

	/**
	 * Sets workflow
	 *
	 * @param \Swagger\Client\Model\ReferenceV1TO $workflow workflow
	 *
	 * @return $this
	 */
	public function setWorkflow( $workflow ) {
		$this->container['workflow'] = $workflow;

		return $this;
	}
	/**
	 * Returns true if offset exists. False otherwise.
	 *
	 * @param integer $offset Offset
	 *
	 * @return boolean
	 */
	public function offsetExists( $offset ) {
		return isset( $this->container[ $offset ] );
	}

	/**
	 * Gets offset.
	 *
	 * @param integer $offset Offset
	 *
	 * @return mixed
	 */
	public function offsetGet( $offset ) {
		return isset( $this->container[ $offset ] ) ? $this->container[ $offset ] : null;
	}

	/**
	 * Sets value based on offset.
	 *
	 * @param integer $offset Offset
	 * @param mixed   $value  Value to be set
	 *
	 * @return void
	 */
	public function offsetSet( $offset, $value ) {
		if ( is_null( $offset ) ) {
			$this->container[] = $value;
		} else {
			$this->container[ $offset ] = $value;
		}
	}

	/**
	 * Unsets offset.
	 *
	 * @param integer $offset Offset
	 *
	 * @return void
	 */
	public function offsetUnset( $offset ) {
		unset( $this->container[ $offset ] );
	}

	/**
	 * Gets the string presentation of the object
	 *
	 * @return string
	 */
	public function __toString() {
		if ( defined( 'JSON_PRETTY_PRINT' ) ) { // use JSON pretty print
			return json_encode(
				ObjectSerializer::sanitizeForSerialization( $this ),
				JSON_PRETTY_PRINT
			);
		}

		return json_encode( ObjectSerializer::sanitizeForSerialization( $this ) );
	}
}



<?php
/**
 * Wallee SDK
 *
 * This library allows to interact with the Wallee payment service.
 * Wallee SDK: 1.0.0
 * 
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Wallee\Sdk\Model;

use \Wallee\Sdk\ValidationException;

/**
 * Subscriber model
 *
 * @category    Class
 * @description A subscriber represents everyone who is subscribed to a product.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class Subscriber  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Subscriber';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'additionalAllowedPaymentMethodConfigurations' => 'int[]',
		'billingAddress' => '\Wallee\Sdk\Model\Address',
		'description' => 'string',
		'disallowedPaymentMethodConfigurations' => 'int[]',
		'emailAddress' => 'string',
		'externalId' => 'string',
		'id' => 'int',
		'language' => 'string',
		'linkedSpaceId' => 'int',
		'plannedPurgeDate' => '\DateTime',
		'reference' => 'string',
		'shippingAddress' => '\Wallee\Sdk\Model\Address',
		'state' => 'string',
		'version' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	
	/**
	 * Values of state.
	 */
	const STATE_CREATE = 'CREATE';
	const STATE_ACTIVE = 'ACTIVE';
	const STATE_INACTIVE = 'INACTIVE';
	const STATE_DELETING = 'DELETING';
	const STATE_DELETED = 'DELETED';
	
	/**
	 * Returns allowable values of state.
	 *
	 * @return string[]
	 */
	public function getStateAllowableValues() {
		return array(
			self::STATE_CREATE,
			self::STATE_ACTIVE,
			self::STATE_INACTIVE,
			self::STATE_DELETING,
			self::STATE_DELETED,
		);
	}
	

	/**
	 * @var int[]
	 */
	private $additionalAllowedPaymentMethodConfigurations;

	/**
	 * @var \Wallee\Sdk\Model\Address
	 */
	private $billingAddress;

	/**
	 * The subscriber description can be used to add a description to the subscriber. This is used in the back office to identify the subscriber.
	 *
	 * @var string
	 */
	private $description;

	/**
	 * @var int[]
	 */
	private $disallowedPaymentMethodConfigurations;

	/**
	 * The email address is used to communicate with the subscriber. There can be only one subscriber per space with the same email address.
	 *
	 * @var string
	 */
	private $emailAddress;

	/**
	 * The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
	 *
	 * @var string
	 */
	private $externalId;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The subscriber language determines the language which is used to communicate with the subscriber in emails and documents (e.g. invoices).
	 *
	 * @var string
	 */
	private $language;

	/**
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * The subscriber reference identifies the subscriber in administrative interfaces (e.g. customer id).
	 *
	 * @var string
	 */
	private $reference;

	/**
	 * @var \Wallee\Sdk\Model\Address
	 */
	private $shippingAddress;

	/**
	 * 
	 *
	 * @var string
	 */
	private $state;

	/**
	 * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
	 *
	 * @var int
	 */
	private $version;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['additionalAllowedPaymentMethodConfigurations']) && $data['additionalAllowedPaymentMethodConfigurations'] != null) {
			$this->setAdditionalAllowedPaymentMethodConfigurations($data['additionalAllowedPaymentMethodConfigurations']);
		}
		if (isset($data['billingAddress']) && $data['billingAddress'] != null) {
			$this->setBillingAddress($data['billingAddress']);
		}
		if (isset($data['disallowedPaymentMethodConfigurations']) && $data['disallowedPaymentMethodConfigurations'] != null) {
			$this->setDisallowedPaymentMethodConfigurations($data['disallowedPaymentMethodConfigurations']);
		}
		if (isset($data['id']) && $data['id'] != null) {
			$this->setId($data['id']);
		}
		if (isset($data['linkedSpaceId']) && $data['linkedSpaceId'] != null) {
			$this->setLinkedSpaceId($data['linkedSpaceId']);
		}
		if (isset($data['shippingAddress']) && $data['shippingAddress'] != null) {
			$this->setShippingAddress($data['shippingAddress']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns additionalAllowedPaymentMethodConfigurations.
	 *
	 * @return int[]
	 */
	public function getAdditionalAllowedPaymentMethodConfigurations() {
		return $this->additionalAllowedPaymentMethodConfigurations;
	}

	/**
	 * Sets additionalAllowedPaymentMethodConfigurations.
	 *
	 * @param int[] $additionalAllowedPaymentMethodConfigurations
	 * @return Subscriber
	 */
	public function setAdditionalAllowedPaymentMethodConfigurations($additionalAllowedPaymentMethodConfigurations) {
		$this->additionalAllowedPaymentMethodConfigurations = $additionalAllowedPaymentMethodConfigurations;

		return $this;
	}

	/**
	 * Returns billingAddress.
	 *
	 * @return \Wallee\Sdk\Model\Address
	 */
	public function getBillingAddress() {
		return $this->billingAddress;
	}

	/**
	 * Sets billingAddress.
	 *
	 * @param \Wallee\Sdk\Model\Address $billingAddress
	 * @return Subscriber
	 */
	public function setBillingAddress($billingAddress) {
		$this->billingAddress = $billingAddress;

		return $this;
	}

	/**
	 * Returns description.
	 *
	 * The subscriber description can be used to add a description to the subscriber. This is used in the back office to identify the subscriber.
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets description.
	 *
	 * @param string $description
	 * @return Subscriber
	 */
	protected function setDescription($description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Returns disallowedPaymentMethodConfigurations.
	 *
	 * @return int[]
	 */
	public function getDisallowedPaymentMethodConfigurations() {
		return $this->disallowedPaymentMethodConfigurations;
	}

	/**
	 * Sets disallowedPaymentMethodConfigurations.
	 *
	 * @param int[] $disallowedPaymentMethodConfigurations
	 * @return Subscriber
	 */
	public function setDisallowedPaymentMethodConfigurations($disallowedPaymentMethodConfigurations) {
		$this->disallowedPaymentMethodConfigurations = $disallowedPaymentMethodConfigurations;

		return $this;
	}

	/**
	 * Returns emailAddress.
	 *
	 * The email address is used to communicate with the subscriber. There can be only one subscriber per space with the same email address.
	 *
	 * @return string
	 */
	public function getEmailAddress() {
		return $this->emailAddress;
	}

	/**
	 * Sets emailAddress.
	 *
	 * @param string $emailAddress
	 * @return Subscriber
	 */
	protected function setEmailAddress($emailAddress) {
		$this->emailAddress = $emailAddress;

		return $this;
	}

	/**
	 * Returns externalId.
	 *
	 * The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
	 *
	 * @return string
	 */
	public function getExternalId() {
		return $this->externalId;
	}

	/**
	 * Sets externalId.
	 *
	 * @param string $externalId
	 * @return Subscriber
	 */
	protected function setExternalId($externalId) {
		$this->externalId = $externalId;

		return $this;
	}

	/**
	 * Returns id.
	 *
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Sets id.
	 *
	 * @param int $id
	 * @return Subscriber
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns language.
	 *
	 * The subscriber language determines the language which is used to communicate with the subscriber in emails and documents (e.g. invoices).
	 *
	 * @return string
	 */
	public function getLanguage() {
		return $this->language;
	}

	/**
	 * Sets language.
	 *
	 * @param string $language
	 * @return Subscriber
	 */
	protected function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns linkedSpaceId.
	 *
	 * @return int
	 */
	public function getLinkedSpaceId() {
		return $this->linkedSpaceId;
	}

	/**
	 * Sets linkedSpaceId.
	 *
	 * @param int $linkedSpaceId
	 * @return Subscriber
	 */
	public function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns plannedPurgeDate.
	 *
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @return \DateTime
	 */
	public function getPlannedPurgeDate() {
		return $this->plannedPurgeDate;
	}

	/**
	 * Sets plannedPurgeDate.
	 *
	 * @param \DateTime $plannedPurgeDate
	 * @return Subscriber
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns reference.
	 *
	 * The subscriber reference identifies the subscriber in administrative interfaces (e.g. customer id).
	 *
	 * @return string
	 */
	public function getReference() {
		return $this->reference;
	}

	/**
	 * Sets reference.
	 *
	 * @param string $reference
	 * @return Subscriber
	 */
	protected function setReference($reference) {
		$this->reference = $reference;

		return $this;
	}

	/**
	 * Returns shippingAddress.
	 *
	 * @return \Wallee\Sdk\Model\Address
	 */
	public function getShippingAddress() {
		return $this->shippingAddress;
	}

	/**
	 * Sets shippingAddress.
	 *
	 * @param \Wallee\Sdk\Model\Address $shippingAddress
	 * @return Subscriber
	 */
	public function setShippingAddress($shippingAddress) {
		$this->shippingAddress = $shippingAddress;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param string $state
	 * @return Subscriber
	 */
	protected function setState($state) {
		$allowed_values = array('CREATE', 'ACTIVE', 'INACTIVE', 'DELETING', 'DELETED');
		if (!is_null($state) && (!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'CREATE', 'ACTIVE', 'INACTIVE', 'DELETING', 'DELETED'");
		}
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns version.
	 *
	 * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
	 *
	 * @return int
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * Sets version.
	 *
	 * @param int $version
	 * @return Subscriber
	 */
	public function setVersion($version) {
		$this->version = $version;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		$allowed_values = array("CREATE", "ACTIVE", "INACTIVE", "DELETING", "DELETED");
		if (!in_array($this->getState(), $allowed_values)) {
			throw new ValidationException("invalid value for 'state', must be one of #{allowed_values}.", 'state', $this);
		}

	}

	/**
	 * Returns true if all the properties in the model are valid.
	 *
	 * @return boolean
	 */
	public function isValid() {
		try {
			$this->validate();
			return true;
		} catch (ValidationException $e) {
			return false;
		}
	}

	/**
	 * Returns the string presentation of the object.
	 *
	 * @return string
	 */
	public function __toString() {
		if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
			return json_encode(\Wallee\Sdk\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
		}

		return json_encode(\Wallee\Sdk\ObjectSerializer::sanitizeForSerialization($this));
	}

}


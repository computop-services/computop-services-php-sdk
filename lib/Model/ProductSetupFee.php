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
 * ProductSetupFee model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class ProductSetupFee  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'ProductSetupFee';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'component' => '\Wallee\Sdk\Model\SubscriptionProductComponent',
		'description' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
		'id' => 'int',
		'linkedSpaceId' => 'int',
		'name' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
		'onDowngradeCreditedAmount' => '\Wallee\Sdk\Model\PersistableCurrencyAmount[]',
		'onUpgradeCreditedAmount' => '\Wallee\Sdk\Model\PersistableCurrencyAmount[]',
		'setupFee' => '\Wallee\Sdk\Model\PersistableCurrencyAmount[]',
		'type' => 'string',
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
	 * Values of type.
	 */
	const TYPE_METERED_FEE = 'METERED_FEE';
	const TYPE_SETUP_FEE = 'SETUP_FEE';
	const TYPE_PERIOD_FEE = 'PERIOD_FEE';
	
	/**
	 * Returns allowable values of type.
	 *
	 * @return string[]
	 */
	public function getTypeAllowableValues() {
		return array(
			self::TYPE_METERED_FEE,
			self::TYPE_SETUP_FEE,
			self::TYPE_PERIOD_FEE,
		);
	}
	

	/**
	 * @var \Wallee\Sdk\Model\SubscriptionProductComponent
	 */
	private $component;

	/**
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	private $description;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	private $name;

	/**
	 * When the subscription is changed and the change is considered as a downgrade the amount defined by this property will be credited to the subscriber.
	 *
	 * @var \Wallee\Sdk\Model\PersistableCurrencyAmount[]
	 */
	private $onDowngradeCreditedAmount;

	/**
	 * When the subscription is changed and the change is considered as a upgrade the amount defined by this property will be credited to the subscriber.
	 *
	 * @var \Wallee\Sdk\Model\PersistableCurrencyAmount[]
	 */
	private $onUpgradeCreditedAmount;

	/**
	 * The setup fee is charged when the subscriber subscribes to this component. The setup fee is debited with the first charge for the subscriptions.
	 *
	 * @var \Wallee\Sdk\Model\PersistableCurrencyAmount[]
	 */
	private $setupFee;

	/**
	 * 
	 *
	 * @var string
	 */
	private $type;

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
		if (isset($data['component']) && $data['component'] != null) {
			$this->setComponent($data['component']);
		}
		if (isset($data['description']) && $data['description'] != null) {
			$this->setDescription($data['description']);
		}
		if (isset($data['id']) && $data['id'] != null) {
			$this->setId($data['id']);
		}
		if (isset($data['linkedSpaceId']) && $data['linkedSpaceId'] != null) {
			$this->setLinkedSpaceId($data['linkedSpaceId']);
		}
		if (isset($data['name']) && $data['name'] != null) {
			$this->setName($data['name']);
		}
		if (isset($data['onDowngradeCreditedAmount']) && $data['onDowngradeCreditedAmount'] != null) {
			$this->setOnDowngradeCreditedAmount($data['onDowngradeCreditedAmount']);
		}
		if (isset($data['onUpgradeCreditedAmount']) && $data['onUpgradeCreditedAmount'] != null) {
			$this->setOnUpgradeCreditedAmount($data['onUpgradeCreditedAmount']);
		}
		if (isset($data['setupFee']) && $data['setupFee'] != null) {
			$this->setSetupFee($data['setupFee']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns component.
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionProductComponent
	 */
	public function getComponent() {
		return $this->component;
	}

	/**
	 * Sets component.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionProductComponent $component
	 * @return ProductSetupFee
	 */
	public function setComponent($component) {
		$this->component = $component;

		return $this;
	}

	/**
	 * Returns description.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets description.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedString $description
	 * @return ProductSetupFee
	 */
	public function setDescription($description) {
		$this->description = $description;

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
	 * @return ProductSetupFee
	 */
	public function setId($id) {
		$this->id = $id;

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
	 * @return ProductSetupFee
	 */
	public function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets name.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedString $name
	 * @return ProductSetupFee
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns onDowngradeCreditedAmount.
	 *
	 * When the subscription is changed and the change is considered as a downgrade the amount defined by this property will be credited to the subscriber.
	 *
	 * @return \Wallee\Sdk\Model\PersistableCurrencyAmount[]
	 */
	public function getOnDowngradeCreditedAmount() {
		return $this->onDowngradeCreditedAmount;
	}

	/**
	 * Sets onDowngradeCreditedAmount.
	 *
	 * @param \Wallee\Sdk\Model\PersistableCurrencyAmount[] $onDowngradeCreditedAmount
	 * @return ProductSetupFee
	 */
	public function setOnDowngradeCreditedAmount($onDowngradeCreditedAmount) {
		$this->onDowngradeCreditedAmount = $onDowngradeCreditedAmount;

		return $this;
	}

	/**
	 * Returns onUpgradeCreditedAmount.
	 *
	 * When the subscription is changed and the change is considered as a upgrade the amount defined by this property will be credited to the subscriber.
	 *
	 * @return \Wallee\Sdk\Model\PersistableCurrencyAmount[]
	 */
	public function getOnUpgradeCreditedAmount() {
		return $this->onUpgradeCreditedAmount;
	}

	/**
	 * Sets onUpgradeCreditedAmount.
	 *
	 * @param \Wallee\Sdk\Model\PersistableCurrencyAmount[] $onUpgradeCreditedAmount
	 * @return ProductSetupFee
	 */
	public function setOnUpgradeCreditedAmount($onUpgradeCreditedAmount) {
		$this->onUpgradeCreditedAmount = $onUpgradeCreditedAmount;

		return $this;
	}

	/**
	 * Returns setupFee.
	 *
	 * The setup fee is charged when the subscriber subscribes to this component. The setup fee is debited with the first charge for the subscriptions.
	 *
	 * @return \Wallee\Sdk\Model\PersistableCurrencyAmount[]
	 */
	public function getSetupFee() {
		return $this->setupFee;
	}

	/**
	 * Sets setupFee.
	 *
	 * @param \Wallee\Sdk\Model\PersistableCurrencyAmount[] $setupFee
	 * @return ProductSetupFee
	 */
	public function setSetupFee($setupFee) {
		$this->setupFee = $setupFee;

		return $this;
	}

	/**
	 * Returns type.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets type.
	 *
	 * @param string $type
	 * @return ProductSetupFee
	 */
	protected function setType($type) {
		$allowed_values = array('METERED_FEE', 'SETUP_FEE', 'PERIOD_FEE');
		if (!is_null($type) && (!in_array($type, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'METERED_FEE', 'SETUP_FEE', 'PERIOD_FEE'");
		}
		$this->type = $type;

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
	 * @return ProductSetupFee
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

		$allowed_values = array("METERED_FEE", "SETUP_FEE", "PERIOD_FEE");
		if (!in_array($this->getType(), $allowed_values)) {
			throw new ValidationException("invalid value for 'type', must be one of #{allowed_values}.", 'type', $this);
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


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
 * TransactionCreate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class TransactionCreate extends TransactionPending  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Transaction.Create';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes + parent::swaggerTypes();
	}

	
	/**
	 * Values of customersPresence.
	 */
	const CUSTOMERS_PRESENCE_NOT_PRESENT = 'NOT_PRESENT';
	const CUSTOMERS_PRESENCE_VIRTUAL_PRESENT = 'VIRTUAL_PRESENT';
	const CUSTOMERS_PRESENCE_PHYSICAL_PRESENT = 'PHYSICAL_PRESENT';
	
	/**
	 * Returns allowable values of customersPresence.
	 *
	 * @return string[]
	 */
	public function getCustomersPresenceAllowableValues() {
		return [
			self::CUSTOMERS_PRESENCE_NOT_PRESENT,
			self::CUSTOMERS_PRESENCE_VIRTUAL_PRESENT,
			self::CUSTOMERS_PRESENCE_PHYSICAL_PRESENT,
		];
	}
	


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		$this->setBillingAddress(isset($data['billingAddress']) ? $data['billingAddress'] : null);
		$this->setChargeRetryEnabled(isset($data['chargeRetryEnabled']) ? $data['chargeRetryEnabled'] : null);
		$this->setCustomersPresence(isset($data['customersPresence']) ? $data['customersPresence'] : null);
		$this->setLineItems(isset($data['lineItems']) ? $data['lineItems'] : null);
		$this->setShippingAddress(isset($data['shippingAddress']) ? $data['shippingAddress'] : null);
		$this->setSpaceViewId(isset($data['spaceViewId']) ? $data['spaceViewId'] : null);
		$this->setToken(isset($data['token']) ? $data['token'] : null);
	}


	/**
	 * Returns billingAddress.
	 *
	 * @return \Wallee\Sdk\Model\AddressCreate
	 */
	public function getBillingAddress() {
		return parent::getBillingAddress();
	}

	/**
	 * Sets billingAddress.
	 *
	 * @param \Wallee\Sdk\Model\AddressCreate $billingAddress
	 * @return TransactionCreate
	 */
	public function setBillingAddress($billingAddress) {
		return parent::setBillingAddress($billingAddress);
	}

	/**
	 * Returns chargeRetryEnabled.
	 *
	 * When the charging of the customer fails we can retry the charging. This implies that we redirect the user back to the payment page which allows the customer to retry. By default we will retry.
	 *
	 * @return bool
	 */
	public function getChargeRetryEnabled() {
		return parent::getChargeRetryEnabled();
	}

	/**
	 * Sets chargeRetryEnabled.
	 *
	 * @param bool $chargeRetryEnabled
	 * @return TransactionCreate
	 */
	public function setChargeRetryEnabled($chargeRetryEnabled) {
		return parent::setChargeRetryEnabled($chargeRetryEnabled);
	}

	/**
	 * Returns customersPresence.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getCustomersPresence() {
		return parent::getCustomersPresence();
	}

	/**
	 * Sets customersPresence.
	 *
	 * @param string $customersPresence
	 * @return TransactionCreate
	 */
	public function setCustomersPresence($customersPresence) {
		$allowed_values = array('NOT_PRESENT', 'VIRTUAL_PRESENT', 'PHYSICAL_PRESENT');
		if ((!in_array($customersPresence, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'customersPresence', must be one of 'NOT_PRESENT', 'VIRTUAL_PRESENT', 'PHYSICAL_PRESENT'");
		}
		return parent::setCustomersPresence($customersPresence);
	}

	/**
	 * Returns lineItems.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\LineItemCreate[]
	 */
	public function getLineItems() {
		return parent::getLineItems();
	}

	/**
	 * Sets lineItems.
	 *
	 * @param \Wallee\Sdk\Model\LineItemCreate[] $lineItems
	 * @return TransactionCreate
	 */
	public function setLineItems($lineItems) {
		return parent::setLineItems($lineItems);
	}

	/**
	 * Returns shippingAddress.
	 *
	 * @return \Wallee\Sdk\Model\AddressCreate
	 */
	public function getShippingAddress() {
		return parent::getShippingAddress();
	}

	/**
	 * Sets shippingAddress.
	 *
	 * @param \Wallee\Sdk\Model\AddressCreate $shippingAddress
	 * @return TransactionCreate
	 */
	public function setShippingAddress($shippingAddress) {
		return parent::setShippingAddress($shippingAddress);
	}

	/**
	 * Returns spaceViewId.
	 *
	 * @return \Wallee\Sdk\Model\EntityReference
	 */
	public function getSpaceViewId() {
		return parent::getSpaceViewId();
	}

	/**
	 * Sets spaceViewId.
	 *
	 * @param \Wallee\Sdk\Model\EntityReference $spaceViewId
	 * @return TransactionCreate
	 */
	public function setSpaceViewId($spaceViewId) {
		return parent::setSpaceViewId($spaceViewId);
	}

	/**
	 * Returns token.
	 *
	 * @return \Wallee\Sdk\Model\Token
	 */
	public function getToken() {
		return parent::getToken();
	}

	/**
	 * Sets token.
	 *
	 * @param \Wallee\Sdk\Model\Token $token
	 * @return TransactionCreate
	 */
	public function setToken($token) {
		return parent::setToken($token);
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

		if ($this->getCustomersPresence() === null) {
			throw new ValidationException("'customersPresence' can't be null", 'customersPresence', $this);
		}
		$allowed_values = ["NOT_PRESENT", "VIRTUAL_PRESENT", "PHYSICAL_PRESENT"];
		if (!in_array($this->getCustomersPresence(), $allowed_values)) {
			throw new ValidationException("invalid value for 'customersPresence', must be one of #{allowed_values}.", 'customersPresence', $this);
		}

		if ($this->getLineItems() === null) {
			throw new ValidationException("'lineItems' can't be null", 'lineItems', $this);
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

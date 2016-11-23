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
 * TransactionLineItemUpdateRequest model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class TransactionLineItemUpdateRequest  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'TransactionLineItemUpdateRequest';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'newLineItems' => '\Wallee\Sdk\Model\LineItem[]',
		'transactionId' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\LineItem[]
	 */
	private $newLineItems;

	/**
	 * 
	 *
	 * @var int
	 */
	private $transactionId;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		$this->setNewLineItems(isset($data['newLineItems']) ? $data['newLineItems'] : null);
	}


	/**
	 * Returns newLineItems.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\LineItem[]
	 */
	public function getNewLineItems() {
		return $this->newLineItems;
	}

	/**
	 * Sets newLineItems.
	 *
	 * @param \Wallee\Sdk\Model\LineItem[] $newLineItems
	 * @return TransactionLineItemUpdateRequest
	 */
	public function setNewLineItems($newLineItems) {
		$this->newLineItems = $newLineItems;

		return $this;
	}

	/**
	 * Returns transactionId.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getTransactionId() {
		return $this->transactionId;
	}

	/**
	 * Sets transactionId.
	 *
	 * @param int $transactionId
	 * @return TransactionLineItemUpdateRequest
	 */
	protected function setTransactionId($transactionId) {
		$this->transactionId = $transactionId;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

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

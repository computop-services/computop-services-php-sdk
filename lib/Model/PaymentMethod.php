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
 * PaymentMethod model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class PaymentMethod  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'PaymentMethod';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'dataCollectionTypes' => 'string[]',
		'description' => 'map[string,string]',
		'id' => 'int',
		'imagePath' => 'string',
		'name' => 'map[string,string]',
		'supportedCurrencies' => 'string[]'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	
	/**
	 * Values of dataCollectionTypes.
	 */
	const DATA_COLLECTION_TYPES_ONSITE = 'ONSITE';
	const DATA_COLLECTION_TYPES_OFFSITE = 'OFFSITE';
	
	/**
	 * Returns allowable values of dataCollectionTypes.
	 *
	 * @return string[]
	 */
	public function getDataCollectionTypesAllowableValues() {
		return array(
			self::DATA_COLLECTION_TYPES_ONSITE,
			self::DATA_COLLECTION_TYPES_OFFSITE,
		);
	}
	

	/**
	 * 
	 *
	 * @var string[]
	 */
	private $dataCollectionTypes;

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $description;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * 
	 *
	 * @var string
	 */
	private $imagePath;

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $name;

	/**
	 * 
	 *
	 * @var string[]
	 */
	private $supportedCurrencies;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['dataCollectionTypes']) && $data['dataCollectionTypes'] != null) {
			$this->setDataCollectionTypes($data['dataCollectionTypes']);
		}
		if (isset($data['description']) && $data['description'] != null) {
			$this->setDescription($data['description']);
		}
		if (isset($data['name']) && $data['name'] != null) {
			$this->setName($data['name']);
		}
		if (isset($data['supportedCurrencies']) && $data['supportedCurrencies'] != null) {
			$this->setSupportedCurrencies($data['supportedCurrencies']);
		}
	}


	/**
	 * Returns dataCollectionTypes.
	 *
	 * 
	 *
	 * @return string[]
	 */
	public function getDataCollectionTypes() {
		return $this->dataCollectionTypes;
	}

	/**
	 * Sets dataCollectionTypes.
	 *
	 * @param string[] $dataCollectionTypes
	 * @return PaymentMethod
	 */
	public function setDataCollectionTypes($dataCollectionTypes) {
		$allowed_values = array('ONSITE', 'OFFSITE');
		if (!is_null($dataCollectionTypes) && (array_diff($dataCollectionTypes, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'dataCollectionTypes', must be one of 'ONSITE', 'OFFSITE'");
		}
		$this->dataCollectionTypes = $dataCollectionTypes;

		return $this;
	}

	/**
	 * Returns description.
	 *
	 * 
	 *
	 * @return map[string,string]
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets description.
	 *
	 * @param map[string,string] $description
	 * @return PaymentMethod
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
	 * @return PaymentMethod
	 */
	protected function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns imagePath.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getImagePath() {
		return $this->imagePath;
	}

	/**
	 * Sets imagePath.
	 *
	 * @param string $imagePath
	 * @return PaymentMethod
	 */
	protected function setImagePath($imagePath) {
		$this->imagePath = $imagePath;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * 
	 *
	 * @return map[string,string]
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets name.
	 *
	 * @param map[string,string] $name
	 * @return PaymentMethod
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns supportedCurrencies.
	 *
	 * 
	 *
	 * @return string[]
	 */
	public function getSupportedCurrencies() {
		return $this->supportedCurrencies;
	}

	/**
	 * Sets supportedCurrencies.
	 *
	 * @param string[] $supportedCurrencies
	 * @return PaymentMethod
	 */
	public function setSupportedCurrencies($supportedCurrencies) {
		$this->supportedCurrencies = $supportedCurrencies;

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


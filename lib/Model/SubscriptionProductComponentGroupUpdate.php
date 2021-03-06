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
 * SubscriptionProductComponentGroupUpdate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionProductComponentGroupUpdate extends SubscriptionProductComponentGroup  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionProductComponentGroup.Update';

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
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		if (isset($data['name']) && $data['name'] != null) {
			$this->setName($data['name']);
		}
		if (isset($data['optional']) && $data['optional'] != null) {
			$this->setOptional($data['optional']);
		}
		if (isset($data['productVersion']) && $data['productVersion'] != null) {
			$this->setProductVersion($data['productVersion']);
		}
		if (isset($data['sortOrder']) && $data['sortOrder'] != null) {
			$this->setSortOrder($data['sortOrder']);
		}
	}


	/**
	 * Returns name.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedStringUpdate
	 */
	public function getName() {
		return parent::getName();
	}

	/**
	 * Sets name.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedStringUpdate $name
	 * @return SubscriptionProductComponentGroupUpdate
	 */
	public function setName($name) {
		return parent::setName($name);
	}

	/**
	 * Returns optional.
	 *
	 * The component group can be optional. This means no component has to be selected by the subscriber.
	 *
	 * @return bool
	 */
	public function getOptional() {
		return parent::getOptional();
	}

	/**
	 * Sets optional.
	 *
	 * @param bool $optional
	 * @return SubscriptionProductComponentGroupUpdate
	 */
	public function setOptional($optional) {
		return parent::setOptional($optional);
	}

	/**
	 * Returns productVersion.
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionProductVersion
	 */
	public function getProductVersion() {
		return parent::getProductVersion();
	}

	/**
	 * Sets productVersion.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionProductVersion $productVersion
	 * @return SubscriptionProductComponentGroupUpdate
	 */
	public function setProductVersion($productVersion) {
		return parent::setProductVersion($productVersion);
	}

	/**
	 * Returns sortOrder.
	 *
	 * The sort order controls in which order the component group is listed. The sort order is used to order the component groups in ascending order.
	 *
	 * @return int
	 */
	public function getSortOrder() {
		return parent::getSortOrder();
	}

	/**
	 * Sets sortOrder.
	 *
	 * @param int $sortOrder
	 * @return SubscriptionProductComponentGroupUpdate
	 */
	public function setSortOrder($sortOrder) {
		return parent::setSortOrder($sortOrder);
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

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


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
 * SubscriptionMetric model
 *
 * @category    Class
 * @description A metric represents the usage of a resource that can be measured.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionMetric  {

    /**
     * The original name of the model.
     *
     * @var string
     */
    private static $swaggerModelName = 'SubscriptionMetric';

    /**
     * An array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    private static $swaggerTypes = array(
        'description' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
        'id' => 'int',
        'linkedSpaceId' => '\Wallee\Sdk\Model\EntityReference',
        'name' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
        'plannedPurgeDate' => 'string',
        'state' => 'string',
        'type' => '\Wallee\Sdk\Model\SubscriptionMetricType',
        'version' => 'int'    );

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
        return [
            self::STATE_CREATE,
            self::STATE_ACTIVE,
            self::STATE_INACTIVE,
            self::STATE_DELETING,
            self::STATE_DELETED,
        ];
    }
    
    
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
     * @var \Wallee\Sdk\Model\EntityReference
     */
    private $linkedSpaceId;
    
    /**
     * @var \Wallee\Sdk\Model\DatabaseTranslatedString
     */
    private $name;
    
    /**
     * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
     *
     * @var string
     */
    private $plannedPurgeDate;
    
    /**
     * 
     *
     * @var string
     */
    private $state;
    
    /**
     * @var \Wallee\Sdk\Model\SubscriptionMetricType
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
        $this->setDescription(isset($data['description']) ? $data['description'] : null);
        $this->setLinkedSpaceId(isset($data['linkedSpaceId']) ? $data['linkedSpaceId'] : null);
        $this->setName(isset($data['name']) ? $data['name'] : null);
        $this->setType(isset($data['type']) ? $data['type'] : null);
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
     * @return SubscriptionMetric
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
     * @return SubscriptionMetric
     */
    protected function setId($id) {
        $this->id = $id;

        return $this;
    }

    /**
     * Returns linkedSpaceId.
     *
     * @return \Wallee\Sdk\Model\EntityReference
     */
    public function getLinkedSpaceId() {
        return $this->linkedSpaceId;
    }

    /**
     * Sets linkedSpaceId.
     *
     * @param \Wallee\Sdk\Model\EntityReference $linkedSpaceId
     * @return SubscriptionMetric
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
     * @return SubscriptionMetric
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Returns plannedPurgeDate.
     *
     * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
     *
     * @return string
     */
    public function getPlannedPurgeDate() {
        return $this->plannedPurgeDate;
    }

    /**
     * Sets plannedPurgeDate.
     *
     * @param string $plannedPurgeDate
     * @return SubscriptionMetric
     */
    protected function setPlannedPurgeDate($plannedPurgeDate) {
        $this->plannedPurgeDate = $plannedPurgeDate;

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
     * @return SubscriptionMetric
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
     * Returns type.
     *
     * @return \Wallee\Sdk\Model\SubscriptionMetricType
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Sets type.
     *
     * @param \Wallee\Sdk\Model\SubscriptionMetricType $type
     * @return SubscriptionMetric
     */
    public function setType($type) {
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
     * @return SubscriptionMetric
     */
    protected function setVersion($version) {
        $this->version = $version;

        return $this;
    }
    
    /**
     * Validates the model's properties and throws a ValidationException if the validation fails.
     *
     * @throws ValidationException
     */
    public function validate() {
        
        $allowed_values = ["CREATE", "ACTIVE", "INACTIVE", "DELETING", "DELETED"];
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
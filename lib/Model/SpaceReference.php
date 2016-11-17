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
 * SpaceReference model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SpaceReference  {

    /**
     * The original name of the model.
     *
     * @var string
     */
    private static $swaggerModelName = 'SpaceReference';

    /**
     * An array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    private static $swaggerTypes = array(
        'createdOn' => 'string',
        'id' => 'int',
        'linkedSpaceId' => '\Wallee\Sdk\Model\EntityReference',
        'plannedPurgeDate' => 'string',
        'spaceId' => '\Wallee\Sdk\Model\EntityReference',
        'state' => 'string',
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
    const STATE_RESTRICTED_ACTIVE = 'RESTRICTED_ACTIVE';
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
            self::STATE_RESTRICTED_ACTIVE,
            self::STATE_ACTIVE,
            self::STATE_INACTIVE,
            self::STATE_DELETING,
            self::STATE_DELETED,
        ];
    }
    
    
    /**
     * 
     *
     * @var string
     */
    private $createdOn;
    
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
     * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
     *
     * @var string
     */
    private $plannedPurgeDate;
    
    /**
     * @var \Wallee\Sdk\Model\EntityReference
     */
    private $spaceId;
    
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
        $this->setLinkedSpaceId(isset($data['linkedSpaceId']) ? $data['linkedSpaceId'] : null);
        $this->setSpaceId(isset($data['spaceId']) ? $data['spaceId'] : null);
    }


    /**
     * Returns createdOn.
     *
     * 
     *
     * @return string
     */
    public function getCreatedOn() {
        return $this->createdOn;
    }

    /**
     * Sets createdOn.
     *
     * @param string $createdOn
     * @return SpaceReference
     */
    protected function setCreatedOn($createdOn) {
        $this->createdOn = $createdOn;

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
     * @return SpaceReference
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
     * @return SpaceReference
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
     * @return string
     */
    public function getPlannedPurgeDate() {
        return $this->plannedPurgeDate;
    }

    /**
     * Sets plannedPurgeDate.
     *
     * @param string $plannedPurgeDate
     * @return SpaceReference
     */
    protected function setPlannedPurgeDate($plannedPurgeDate) {
        $this->plannedPurgeDate = $plannedPurgeDate;

        return $this;
    }

    /**
     * Returns spaceId.
     *
     * @return \Wallee\Sdk\Model\EntityReference
     */
    public function getSpaceId() {
        return $this->spaceId;
    }

    /**
     * Sets spaceId.
     *
     * @param \Wallee\Sdk\Model\EntityReference $spaceId
     * @return SpaceReference
     */
    public function setSpaceId($spaceId) {
        $this->spaceId = $spaceId;

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
     * @return SpaceReference
     */
    protected function setState($state) {
        $allowed_values = array('RESTRICTED_ACTIVE', 'ACTIVE', 'INACTIVE', 'DELETING', 'DELETED');
        if (!is_null($state) && (!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'RESTRICTED_ACTIVE', 'ACTIVE', 'INACTIVE', 'DELETING', 'DELETED'");
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
     * @return SpaceReference
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
        
        $allowed_values = ["RESTRICTED_ACTIVE", "ACTIVE", "INACTIVE", "DELETING", "DELETED"];
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
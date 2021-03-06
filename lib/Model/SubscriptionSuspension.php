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
 * SubscriptionSuspension model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionSuspension  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionSuspension';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'createdOn' => '\DateTime',
		'effectiveEndDate' => '\DateTime',
		'endAction' => 'string',
		'id' => 'int',
		'language' => 'string',
		'linkedSpaceId' => 'int',
		'note' => 'string',
		'periodBill' => 'int',
		'plannedEndDate' => '\DateTime',
		'plannedPurgeDate' => '\DateTime',
		'reason' => 'string',
		'state' => 'string',
		'subscription' => 'int',
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
	 * Values of endAction.
	 */
	const END_ACTION_TERMINATE = 'TERMINATE';
	const END_ACTION_REACTIVATE = 'REACTIVATE';
	
	/**
	 * Returns allowable values of endAction.
	 *
	 * @return string[]
	 */
	public function getEndActionAllowableValues() {
		return array(
			self::END_ACTION_TERMINATE,
			self::END_ACTION_REACTIVATE,
		);
	}
	
	/**
	 * Values of reason.
	 */
	const REASON_FAILED_CHARGE = 'FAILED_CHARGE';
	const REASON_SUBSCRIBER_INITIATED_REFUND = 'SUBSCRIBER_INITIATED_REFUND';
	const REASON_MANUAL = 'MANUAL';
	
	/**
	 * Returns allowable values of reason.
	 *
	 * @return string[]
	 */
	public function getReasonAllowableValues() {
		return array(
			self::REASON_FAILED_CHARGE,
			self::REASON_SUBSCRIBER_INITIATED_REFUND,
			self::REASON_MANUAL,
		);
	}
	
	/**
	 * Values of state.
	 */
	const STATE_RUNNING = 'RUNNING';
	const STATE_ENDED = 'ENDED';
	
	/**
	 * Returns allowable values of state.
	 *
	 * @return string[]
	 */
	public function getStateAllowableValues() {
		return array(
			self::STATE_RUNNING,
			self::STATE_ENDED,
		);
	}
	

	/**
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @var \DateTime
	 */
	private $createdOn;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $effectiveEndDate;

	/**
	 * When the suspension reaches the planned end date the end action will be carried out. This action is only executed when the suspension is ended automatically based on the end date.
	 *
	 * @var string
	 */
	private $endAction;

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
	private $language;

	/**
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * The note may contain some internal information for the suspension. The note will not be disclosed to the subscriber.
	 *
	 * @var string
	 */
	private $note;

	/**
	 * @var int
	 */
	private $periodBill;

	/**
	 * The planned end date of the suspension identifies the date on which the suspension will be ended automatically.
	 *
	 * @var \DateTime
	 */
	private $plannedEndDate;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * The suspension reason indicates why a suspension has been created.
	 *
	 * @var string
	 */
	private $reason;

	/**
	 * 
	 *
	 * @var string
	 */
	private $state;

	/**
	 * @var int
	 */
	private $subscription;

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
		if (isset($data['id']) && $data['id'] != null) {
			$this->setId($data['id']);
		}
		if (isset($data['linkedSpaceId']) && $data['linkedSpaceId'] != null) {
			$this->setLinkedSpaceId($data['linkedSpaceId']);
		}
		if (isset($data['periodBill']) && $data['periodBill'] != null) {
			$this->setPeriodBill($data['periodBill']);
		}
		if (isset($data['subscription']) && $data['subscription'] != null) {
			$this->setSubscription($data['subscription']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns createdOn.
	 *
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @return \DateTime
	 */
	public function getCreatedOn() {
		return $this->createdOn;
	}

	/**
	 * Sets createdOn.
	 *
	 * @param \DateTime $createdOn
	 * @return SubscriptionSuspension
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns effectiveEndDate.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getEffectiveEndDate() {
		return $this->effectiveEndDate;
	}

	/**
	 * Sets effectiveEndDate.
	 *
	 * @param \DateTime $effectiveEndDate
	 * @return SubscriptionSuspension
	 */
	protected function setEffectiveEndDate($effectiveEndDate) {
		$this->effectiveEndDate = $effectiveEndDate;

		return $this;
	}

	/**
	 * Returns endAction.
	 *
	 * When the suspension reaches the planned end date the end action will be carried out. This action is only executed when the suspension is ended automatically based on the end date.
	 *
	 * @return string
	 */
	public function getEndAction() {
		return $this->endAction;
	}

	/**
	 * Sets endAction.
	 *
	 * @param string $endAction
	 * @return SubscriptionSuspension
	 */
	protected function setEndAction($endAction) {
		$allowed_values = array('TERMINATE', 'REACTIVATE');
		if (!is_null($endAction) && (!in_array($endAction, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'endAction', must be one of 'TERMINATE', 'REACTIVATE'");
		}
		$this->endAction = $endAction;

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
	 * @return SubscriptionSuspension
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns language.
	 *
	 * 
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
	 * @return SubscriptionSuspension
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
	 * @return SubscriptionSuspension
	 */
	public function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns note.
	 *
	 * The note may contain some internal information for the suspension. The note will not be disclosed to the subscriber.
	 *
	 * @return string
	 */
	public function getNote() {
		return $this->note;
	}

	/**
	 * Sets note.
	 *
	 * @param string $note
	 * @return SubscriptionSuspension
	 */
	protected function setNote($note) {
		$this->note = $note;

		return $this;
	}

	/**
	 * Returns periodBill.
	 *
	 * @return int
	 */
	public function getPeriodBill() {
		return $this->periodBill;
	}

	/**
	 * Sets periodBill.
	 *
	 * @param int $periodBill
	 * @return SubscriptionSuspension
	 */
	public function setPeriodBill($periodBill) {
		$this->periodBill = $periodBill;

		return $this;
	}

	/**
	 * Returns plannedEndDate.
	 *
	 * The planned end date of the suspension identifies the date on which the suspension will be ended automatically.
	 *
	 * @return \DateTime
	 */
	public function getPlannedEndDate() {
		return $this->plannedEndDate;
	}

	/**
	 * Sets plannedEndDate.
	 *
	 * @param \DateTime $plannedEndDate
	 * @return SubscriptionSuspension
	 */
	protected function setPlannedEndDate($plannedEndDate) {
		$this->plannedEndDate = $plannedEndDate;

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
	 * @return SubscriptionSuspension
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns reason.
	 *
	 * The suspension reason indicates why a suspension has been created.
	 *
	 * @return string
	 */
	public function getReason() {
		return $this->reason;
	}

	/**
	 * Sets reason.
	 *
	 * @param string $reason
	 * @return SubscriptionSuspension
	 */
	protected function setReason($reason) {
		$allowed_values = array('FAILED_CHARGE', 'SUBSCRIBER_INITIATED_REFUND', 'MANUAL');
		if (!is_null($reason) && (!in_array($reason, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'reason', must be one of 'FAILED_CHARGE', 'SUBSCRIBER_INITIATED_REFUND', 'MANUAL'");
		}
		$this->reason = $reason;

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
	 * @return SubscriptionSuspension
	 */
	protected function setState($state) {
		$allowed_values = array('RUNNING', 'ENDED');
		if (!is_null($state) && (!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'RUNNING', 'ENDED'");
		}
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns subscription.
	 *
	 * @return int
	 */
	public function getSubscription() {
		return $this->subscription;
	}

	/**
	 * Sets subscription.
	 *
	 * @param int $subscription
	 * @return SubscriptionSuspension
	 */
	public function setSubscription($subscription) {
		$this->subscription = $subscription;

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
	 * @return SubscriptionSuspension
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

		$allowed_values = array("TERMINATE", "REACTIVATE");
		if (!in_array($this->getEndAction(), $allowed_values)) {
			throw new ValidationException("invalid value for 'endAction', must be one of #{allowed_values}.", 'endAction', $this);
		}

		$allowed_values = array("FAILED_CHARGE", "SUBSCRIBER_INITIATED_REFUND", "MANUAL");
		if (!in_array($this->getReason(), $allowed_values)) {
			throw new ValidationException("invalid value for 'reason', must be one of #{allowed_values}.", 'reason', $this);
		}

		$allowed_values = array("RUNNING", "ENDED");
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


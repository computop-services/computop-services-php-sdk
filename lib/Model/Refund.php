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
 * Refund model
 *
 * @category    Class
 * @description The refund represents a credit back to the customer. It can be issued by the merchant or by the customer (reversal).
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class Refund  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Refund';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'amount' => 'float',
		'baseLineItems' => '\Wallee\Sdk\Model\LineItem[]',
		'createdBy' => 'int',
		'createdOn' => '\DateTime',
		'externalId' => 'string',
		'failedOn' => '\DateTime',
		'failureReason' => '\Wallee\Sdk\Model\FailureReason',
		'id' => 'int',
		'labels' => '\Wallee\Sdk\Model\Label[]',
		'language' => 'string',
		'lineItems' => '\Wallee\Sdk\Model\LineItem[]',
		'linkedSpaceId' => 'int',
		'merchantReference' => 'string',
		'nextUpdateOn' => '\DateTime',
		'plannedPurgeDate' => '\DateTime',
		'processorReference' => 'string',
		'reducedLineItems' => '\Wallee\Sdk\Model\LineItem[]',
		'reductions' => '\Wallee\Sdk\Model\LineItemReduction[]',
		'state' => 'string',
		'succeededOn' => '\DateTime',
		'taxes' => '\Wallee\Sdk\Model\Tax[]',
		'timeoutOn' => '\DateTime',
		'transaction' => '\Wallee\Sdk\Model\Transaction',
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
	 * Values of state.
	 */
	const STATE_CREATE = 'CREATE';
	const STATE_PENDING = 'PENDING';
	const STATE_MANUAL_CHECK = 'MANUAL_CHECK';
	const STATE_FAILED = 'FAILED';
	const STATE_SUCCESSFUL = 'SUCCESSFUL';
	
	/**
	 * Returns allowable values of state.
	 *
	 * @return string[]
	 */
	public function getStateAllowableValues() {
		return array(
			self::STATE_CREATE,
			self::STATE_PENDING,
			self::STATE_MANUAL_CHECK,
			self::STATE_FAILED,
			self::STATE_SUCCESSFUL,
		);
	}
	
	/**
	 * Values of type.
	 */
	const TYPE_CUSTOMER_INITIATED_AUTOMATIC = 'CUSTOMER_INITIATED_AUTOMATIC';
	const TYPE_CUSTOMER_INITIATED_MANUAL = 'CUSTOMER_INITIATED_MANUAL';
	const TYPE_MERCHANT_INITIATED_ONLINE = 'MERCHANT_INITIATED_ONLINE';
	const TYPE_MERCHANT_INITIATED_OFFLINE = 'MERCHANT_INITIATED_OFFLINE';
	
	/**
	 * Returns allowable values of type.
	 *
	 * @return string[]
	 */
	public function getTypeAllowableValues() {
		return array(
			self::TYPE_CUSTOMER_INITIATED_AUTOMATIC,
			self::TYPE_CUSTOMER_INITIATED_MANUAL,
			self::TYPE_MERCHANT_INITIATED_ONLINE,
			self::TYPE_MERCHANT_INITIATED_OFFLINE,
		);
	}
	

	/**
	 * 
	 *
	 * @var float
	 */
	private $amount;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\LineItem[]
	 */
	private $baseLineItems;

	/**
	 * @var int
	 */
	private $createdBy;

	/**
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @var \DateTime
	 */
	private $createdOn;

	/**
	 * The external id helps to identify duplicate calls to the refund service. As such the external ID has to be unique per transaction.
	 *
	 * @var string
	 */
	private $externalId;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $failedOn;

	/**
	 * @var \Wallee\Sdk\Model\FailureReason
	 */
	private $failureReason;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\Label[]
	 */
	private $labels;

	/**
	 * 
	 *
	 * @var string
	 */
	private $language;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\LineItem[]
	 */
	private $lineItems;

	/**
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * 
	 *
	 * @var string
	 */
	private $merchantReference;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $nextUpdateOn;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * 
	 *
	 * @var string
	 */
	private $processorReference;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\LineItem[]
	 */
	private $reducedLineItems;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\LineItemReduction[]
	 */
	private $reductions;

	/**
	 * 
	 *
	 * @var string
	 */
	private $state;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $succeededOn;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\Tax[]
	 */
	private $taxes;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $timeoutOn;

	/**
	 * @var \Wallee\Sdk\Model\Transaction
	 */
	private $transaction;

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
		if (isset($data['baseLineItems']) && $data['baseLineItems'] != null) {
			$this->setBaseLineItems($data['baseLineItems']);
		}
		if (isset($data['createdBy']) && $data['createdBy'] != null) {
			$this->setCreatedBy($data['createdBy']);
		}
		if (isset($data['failureReason']) && $data['failureReason'] != null) {
			$this->setFailureReason($data['failureReason']);
		}
		if (isset($data['id']) && $data['id'] != null) {
			$this->setId($data['id']);
		}
		if (isset($data['labels']) && $data['labels'] != null) {
			$this->setLabels($data['labels']);
		}
		if (isset($data['lineItems']) && $data['lineItems'] != null) {
			$this->setLineItems($data['lineItems']);
		}
		if (isset($data['linkedSpaceId']) && $data['linkedSpaceId'] != null) {
			$this->setLinkedSpaceId($data['linkedSpaceId']);
		}
		if (isset($data['reducedLineItems']) && $data['reducedLineItems'] != null) {
			$this->setReducedLineItems($data['reducedLineItems']);
		}
		if (isset($data['reductions']) && $data['reductions'] != null) {
			$this->setReductions($data['reductions']);
		}
		if (isset($data['taxes']) && $data['taxes'] != null) {
			$this->setTaxes($data['taxes']);
		}
		if (isset($data['transaction']) && $data['transaction'] != null) {
			$this->setTransaction($data['transaction']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns amount.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * Sets amount.
	 *
	 * @param float $amount
	 * @return Refund
	 */
	protected function setAmount($amount) {
		$this->amount = $amount;

		return $this;
	}

	/**
	 * Returns baseLineItems.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\LineItem[]
	 */
	public function getBaseLineItems() {
		return $this->baseLineItems;
	}

	/**
	 * Sets baseLineItems.
	 *
	 * @param \Wallee\Sdk\Model\LineItem[] $baseLineItems
	 * @return Refund
	 */
	public function setBaseLineItems($baseLineItems) {
		$this->baseLineItems = $baseLineItems;

		return $this;
	}

	/**
	 * Returns createdBy.
	 *
	 * @return int
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Sets createdBy.
	 *
	 * @param int $createdBy
	 * @return Refund
	 */
	public function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;

		return $this;
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
	 * @return Refund
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns externalId.
	 *
	 * The external id helps to identify duplicate calls to the refund service. As such the external ID has to be unique per transaction.
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
	 * @return Refund
	 */
	protected function setExternalId($externalId) {
		$this->externalId = $externalId;

		return $this;
	}

	/**
	 * Returns failedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getFailedOn() {
		return $this->failedOn;
	}

	/**
	 * Sets failedOn.
	 *
	 * @param \DateTime $failedOn
	 * @return Refund
	 */
	protected function setFailedOn($failedOn) {
		$this->failedOn = $failedOn;

		return $this;
	}

	/**
	 * Returns failureReason.
	 *
	 * @return \Wallee\Sdk\Model\FailureReason
	 */
	public function getFailureReason() {
		return $this->failureReason;
	}

	/**
	 * Sets failureReason.
	 *
	 * @param \Wallee\Sdk\Model\FailureReason $failureReason
	 * @return Refund
	 */
	public function setFailureReason($failureReason) {
		$this->failureReason = $failureReason;

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
	 * @return Refund
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns labels.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\Label[]
	 */
	public function getLabels() {
		return $this->labels;
	}

	/**
	 * Sets labels.
	 *
	 * @param \Wallee\Sdk\Model\Label[] $labels
	 * @return Refund
	 */
	public function setLabels($labels) {
		$this->labels = $labels;

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
	 * @return Refund
	 */
	protected function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns lineItems.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\LineItem[]
	 */
	public function getLineItems() {
		return $this->lineItems;
	}

	/**
	 * Sets lineItems.
	 *
	 * @param \Wallee\Sdk\Model\LineItem[] $lineItems
	 * @return Refund
	 */
	public function setLineItems($lineItems) {
		$this->lineItems = $lineItems;

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
	 * @return Refund
	 */
	public function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns merchantReference.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getMerchantReference() {
		return $this->merchantReference;
	}

	/**
	 * Sets merchantReference.
	 *
	 * @param string $merchantReference
	 * @return Refund
	 */
	protected function setMerchantReference($merchantReference) {
		$this->merchantReference = $merchantReference;

		return $this;
	}

	/**
	 * Returns nextUpdateOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getNextUpdateOn() {
		return $this->nextUpdateOn;
	}

	/**
	 * Sets nextUpdateOn.
	 *
	 * @param \DateTime $nextUpdateOn
	 * @return Refund
	 */
	protected function setNextUpdateOn($nextUpdateOn) {
		$this->nextUpdateOn = $nextUpdateOn;

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
	 * @return Refund
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns processorReference.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getProcessorReference() {
		return $this->processorReference;
	}

	/**
	 * Sets processorReference.
	 *
	 * @param string $processorReference
	 * @return Refund
	 */
	protected function setProcessorReference($processorReference) {
		$this->processorReference = $processorReference;

		return $this;
	}

	/**
	 * Returns reducedLineItems.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\LineItem[]
	 */
	public function getReducedLineItems() {
		return $this->reducedLineItems;
	}

	/**
	 * Sets reducedLineItems.
	 *
	 * @param \Wallee\Sdk\Model\LineItem[] $reducedLineItems
	 * @return Refund
	 */
	public function setReducedLineItems($reducedLineItems) {
		$this->reducedLineItems = $reducedLineItems;

		return $this;
	}

	/**
	 * Returns reductions.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\LineItemReduction[]
	 */
	public function getReductions() {
		return $this->reductions;
	}

	/**
	 * Sets reductions.
	 *
	 * @param \Wallee\Sdk\Model\LineItemReduction[] $reductions
	 * @return Refund
	 */
	public function setReductions($reductions) {
		$this->reductions = $reductions;

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
	 * @return Refund
	 */
	protected function setState($state) {
		$allowed_values = array('CREATE', 'PENDING', 'MANUAL_CHECK', 'FAILED', 'SUCCESSFUL');
		if (!is_null($state) && (!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'CREATE', 'PENDING', 'MANUAL_CHECK', 'FAILED', 'SUCCESSFUL'");
		}
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns succeededOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getSucceededOn() {
		return $this->succeededOn;
	}

	/**
	 * Sets succeededOn.
	 *
	 * @param \DateTime $succeededOn
	 * @return Refund
	 */
	protected function setSucceededOn($succeededOn) {
		$this->succeededOn = $succeededOn;

		return $this;
	}

	/**
	 * Returns taxes.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\Tax[]
	 */
	public function getTaxes() {
		return $this->taxes;
	}

	/**
	 * Sets taxes.
	 *
	 * @param \Wallee\Sdk\Model\Tax[] $taxes
	 * @return Refund
	 */
	public function setTaxes($taxes) {
		$this->taxes = $taxes;

		return $this;
	}

	/**
	 * Returns timeoutOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getTimeoutOn() {
		return $this->timeoutOn;
	}

	/**
	 * Sets timeoutOn.
	 *
	 * @param \DateTime $timeoutOn
	 * @return Refund
	 */
	protected function setTimeoutOn($timeoutOn) {
		$this->timeoutOn = $timeoutOn;

		return $this;
	}

	/**
	 * Returns transaction.
	 *
	 * @return \Wallee\Sdk\Model\Transaction
	 */
	public function getTransaction() {
		return $this->transaction;
	}

	/**
	 * Sets transaction.
	 *
	 * @param \Wallee\Sdk\Model\Transaction $transaction
	 * @return Refund
	 */
	public function setTransaction($transaction) {
		$this->transaction = $transaction;

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
	 * @return Refund
	 */
	protected function setType($type) {
		$allowed_values = array('CUSTOMER_INITIATED_AUTOMATIC', 'CUSTOMER_INITIATED_MANUAL', 'MERCHANT_INITIATED_ONLINE', 'MERCHANT_INITIATED_OFFLINE');
		if (!is_null($type) && (!in_array($type, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'CUSTOMER_INITIATED_AUTOMATIC', 'CUSTOMER_INITIATED_MANUAL', 'MERCHANT_INITIATED_ONLINE', 'MERCHANT_INITIATED_OFFLINE'");
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
	 * @return Refund
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

		$allowed_values = array("CREATE", "PENDING", "MANUAL_CHECK", "FAILED", "SUCCESSFUL");
		if (!in_array($this->getState(), $allowed_values)) {
			throw new ValidationException("invalid value for 'state', must be one of #{allowed_values}.", 'state', $this);
		}

		$allowed_values = array("CUSTOMER_INITIATED_AUTOMATIC", "CUSTOMER_INITIATED_MANUAL", "MERCHANT_INITIATED_ONLINE", "MERCHANT_INITIATED_OFFLINE");
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


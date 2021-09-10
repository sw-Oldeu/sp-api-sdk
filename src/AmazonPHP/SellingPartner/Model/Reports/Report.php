<?php declare(strict_types=1);
/**
 * Report.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Reports.
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * The version of the OpenAPI document: 2020-09-04
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\Reports;

use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Report implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const PROCESSING_STATUS_CANCELLED = 'CANCELLED';

    public const PROCESSING_STATUS_DONE = 'DONE';

    public const PROCESSING_STATUS_FATAL = 'FATAL';

    public const PROCESSING_STATUS_IN_PROGRESS = 'IN_PROGRESS';

    public const PROCESSING_STATUS_IN_QUEUE = 'IN_QUEUE';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Report';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'marketplace_ids' => 'string[]',
        'report_id' => 'string',
        'report_type' => 'string',
        'data_start_time' => '\DateTime',
        'data_end_time' => '\DateTime',
        'report_schedule_id' => 'string',
        'created_time' => '\DateTime',
        'processing_status' => 'string',
        'processing_start_time' => '\DateTime',
        'processing_end_time' => '\DateTime',
        'report_document_id' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'marketplace_ids' => null,
        'report_id' => null,
        'report_type' => null,
        'data_start_time' => 'date-time',
        'data_end_time' => 'date-time',
        'report_schedule_id' => null,
        'created_time' => 'date-time',
        'processing_status' => null,
        'processing_start_time' => 'date-time',
        'processing_end_time' => 'date-time',
        'report_document_id' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'marketplace_ids' => 'marketplaceIds',
        'report_id' => 'reportId',
        'report_type' => 'reportType',
        'data_start_time' => 'dataStartTime',
        'data_end_time' => 'dataEndTime',
        'report_schedule_id' => 'reportScheduleId',
        'created_time' => 'createdTime',
        'processing_status' => 'processingStatus',
        'processing_start_time' => 'processingStartTime',
        'processing_end_time' => 'processingEndTime',
        'report_document_id' => 'reportDocumentId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'marketplace_ids' => 'setMarketplaceIds',
        'report_id' => 'setReportId',
        'report_type' => 'setReportType',
        'data_start_time' => 'setDataStartTime',
        'data_end_time' => 'setDataEndTime',
        'report_schedule_id' => 'setReportScheduleId',
        'created_time' => 'setCreatedTime',
        'processing_status' => 'setProcessingStatus',
        'processing_start_time' => 'setProcessingStartTime',
        'processing_end_time' => 'setProcessingEndTime',
        'report_document_id' => 'setReportDocumentId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'marketplace_ids' => 'getMarketplaceIds',
        'report_id' => 'getReportId',
        'report_type' => 'getReportType',
        'data_start_time' => 'getDataStartTime',
        'data_end_time' => 'getDataEndTime',
        'report_schedule_id' => 'getReportScheduleId',
        'created_time' => 'getCreatedTime',
        'processing_status' => 'getProcessingStatus',
        'processing_start_time' => 'getProcessingStartTime',
        'processing_end_time' => 'getProcessingEndTime',
        'report_document_id' => 'getReportDocumentId',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['marketplace_ids'] = $data['marketplace_ids'] ?? null;
        $this->container['report_id'] = $data['report_id'] ?? null;
        $this->container['report_type'] = $data['report_type'] ?? null;
        $this->container['data_start_time'] = $data['data_start_time'] ?? null;
        $this->container['data_end_time'] = $data['data_end_time'] ?? null;
        $this->container['report_schedule_id'] = $data['report_schedule_id'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['processing_status'] = $data['processing_status'] ?? null;
        $this->container['processing_start_time'] = $data['processing_start_time'] ?? null;
        $this->container['processing_end_time'] = $data['processing_end_time'] ?? null;
        $this->container['report_document_id'] = $data['report_document_id'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getProcessingStatusAllowableValues() : array
    {
        return [
            self::PROCESSING_STATUS_CANCELLED,
            self::PROCESSING_STATUS_DONE,
            self::PROCESSING_STATUS_FATAL,
            self::PROCESSING_STATUS_IN_PROGRESS,
            self::PROCESSING_STATUS_IN_QUEUE,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['report_id'] === null) {
            $invalidProperties[] = "'report_id' can't be null";
        }

        if ($this->container['report_type'] === null) {
            $invalidProperties[] = "'report_type' can't be null";
        }

        if ($this->container['created_time'] === null) {
            $invalidProperties[] = "'created_time' can't be null";
        }

        if ($this->container['processing_status'] === null) {
            $invalidProperties[] = "'processing_status' can't be null";
        }
        $allowedValues = $this->getProcessingStatusAllowableValues();

        if (null !== $this->container['processing_status'] && !\in_array($this->container['processing_status'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'processing_status', must be one of '%s'",
                $this->container['processing_status'],
                \implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets marketplace_ids.
     *
     * @return null|string[]
     */
    public function getMarketplaceIds() : ?array
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids.
     *
     * @param null|string[] $marketplace_ids a list of marketplace identifiers for the report
     */
    public function setMarketplaceIds(?array $marketplace_ids) : self
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets report_id.
     */
    public function getReportId() : string
    {
        return $this->container['report_id'];
    }

    /**
     * Sets report_id.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID.
     */
    public function setReportId(string $report_id) : self
    {
        $this->container['report_id'] = $report_id;

        return $this;
    }

    /**
     * Gets report_type.
     */
    public function getReportType() : string
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type.
     *
     * @param string $report_type the report type
     */
    public function setReportType(string $report_type) : self
    {
        $this->container['report_type'] = $report_type;

        return $this;
    }

    /**
     * Gets data_start_time.
     */
    public function getDataStartTime() : ?\DateTime
    {
        return $this->container['data_start_time'];
    }

    /**
     * Sets data_start_time.
     *
     * @param null|\DateTime $data_start_time the start of a date and time range used for selecting the data to report
     */
    public function setDataStartTime(?\DateTime $data_start_time) : self
    {
        $this->container['data_start_time'] = $data_start_time;

        return $this;
    }

    /**
     * Gets data_end_time.
     */
    public function getDataEndTime() : ?\DateTime
    {
        return $this->container['data_end_time'];
    }

    /**
     * Sets data_end_time.
     *
     * @param null|\DateTime $data_end_time the end of a date and time range used for selecting the data to report
     */
    public function setDataEndTime(?\DateTime $data_end_time) : self
    {
        $this->container['data_end_time'] = $data_end_time;

        return $this;
    }

    /**
     * Gets report_schedule_id.
     */
    public function getReportScheduleId() : ?string
    {
        return $this->container['report_schedule_id'];
    }

    /**
     * Sets report_schedule_id.
     *
     * @param null|string $report_schedule_id The identifier of the report schedule that created this report (if any). This identifier is unique only in combination with a seller ID.
     */
    public function setReportScheduleId(?string $report_schedule_id) : self
    {
        $this->container['report_schedule_id'] = $report_schedule_id;

        return $this;
    }

    /**
     * Gets created_time.
     */
    public function getCreatedTime() : \DateTime
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time.
     *
     * @param \DateTime $created_time the date and time when the report was created
     */
    public function setCreatedTime(\DateTime $created_time) : self
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets processing_status.
     */
    public function getProcessingStatus() : string
    {
        return $this->container['processing_status'];
    }

    /**
     * Sets processing_status.
     *
     * @param string $processing_status the processing status of the report
     */
    public function setProcessingStatus(string $processing_status) : self
    {
        $allowedValues = $this->getProcessingStatusAllowableValues();

        if (!\in_array($processing_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'processing_status', must be one of '%s'",
                    $processing_status,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['processing_status'] = $processing_status;

        return $this;
    }

    /**
     * Gets processing_start_time.
     */
    public function getProcessingStartTime() : ?\DateTime
    {
        return $this->container['processing_start_time'];
    }

    /**
     * Sets processing_start_time.
     *
     * @param null|\DateTime $processing_start_time the date and time when the report processing started, in ISO 8601 date time format
     */
    public function setProcessingStartTime(?\DateTime $processing_start_time) : self
    {
        $this->container['processing_start_time'] = $processing_start_time;

        return $this;
    }

    /**
     * Gets processing_end_time.
     */
    public function getProcessingEndTime() : ?\DateTime
    {
        return $this->container['processing_end_time'];
    }

    /**
     * Sets processing_end_time.
     *
     * @param null|\DateTime $processing_end_time the date and time when the report processing completed, in ISO 8601 date time format
     */
    public function setProcessingEndTime(?\DateTime $processing_end_time) : self
    {
        $this->container['processing_end_time'] = $processing_end_time;

        return $this;
    }

    /**
     * Gets report_document_id.
     */
    public function getReportDocumentId() : ?string
    {
        return $this->container['report_document_id'];
    }

    /**
     * Sets report_document_id.
     *
     * @param null|string $report_document_id The identifier for the report document. Pass this into the getReportDocument operation to get the information you will need to retrieve and decrypt the report document's contents.
     */
    public function setReportDocumentId(?string $report_document_id) : self
    {
        $this->container['report_document_id'] = $report_document_id;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}

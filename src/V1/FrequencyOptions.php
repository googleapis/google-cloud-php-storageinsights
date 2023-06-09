<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/storageinsights/v1/storageinsights.proto

namespace Google\Cloud\StorageInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ReportConfig Resource:
 * Options to setup frequency of report generation.
 *
 * Generated from protobuf message <code>google.cloud.storageinsights.v1.FrequencyOptions</code>
 */
class FrequencyOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Frequency of report generation.
     *
     * Generated from protobuf field <code>.google.cloud.storageinsights.v1.FrequencyOptions.Frequency frequency = 1;</code>
     */
    protected $frequency = 0;
    /**
     * The date from which report generation should start.
     * UTC time zone.
     *
     * Generated from protobuf field <code>.google.type.Date start_date = 2;</code>
     */
    protected $start_date = null;
    /**
     * The date on which report generation should stop (Inclusive).
     * UTC time zone.
     *
     * Generated from protobuf field <code>.google.type.Date end_date = 3;</code>
     */
    protected $end_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $frequency
     *           Frequency of report generation.
     *     @type \Google\Type\Date $start_date
     *           The date from which report generation should start.
     *           UTC time zone.
     *     @type \Google\Type\Date $end_date
     *           The date on which report generation should stop (Inclusive).
     *           UTC time zone.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Storageinsights\V1\Storageinsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Frequency of report generation.
     *
     * Generated from protobuf field <code>.google.cloud.storageinsights.v1.FrequencyOptions.Frequency frequency = 1;</code>
     * @return int
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Frequency of report generation.
     *
     * Generated from protobuf field <code>.google.cloud.storageinsights.v1.FrequencyOptions.Frequency frequency = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFrequency($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\StorageInsights\V1\FrequencyOptions\Frequency::class);
        $this->frequency = $var;

        return $this;
    }

    /**
     * The date from which report generation should start.
     * UTC time zone.
     *
     * Generated from protobuf field <code>.google.type.Date start_date = 2;</code>
     * @return \Google\Type\Date|null
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    public function hasStartDate()
    {
        return isset($this->start_date);
    }

    public function clearStartDate()
    {
        unset($this->start_date);
    }

    /**
     * The date from which report generation should start.
     * UTC time zone.
     *
     * Generated from protobuf field <code>.google.type.Date start_date = 2;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->start_date = $var;

        return $this;
    }

    /**
     * The date on which report generation should stop (Inclusive).
     * UTC time zone.
     *
     * Generated from protobuf field <code>.google.type.Date end_date = 3;</code>
     * @return \Google\Type\Date|null
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    public function hasEndDate()
    {
        return isset($this->end_date);
    }

    public function clearEndDate()
    {
        unset($this->end_date);
    }

    /**
     * The date on which report generation should stop (Inclusive).
     * UTC time zone.
     *
     * Generated from protobuf field <code>.google.type.Date end_date = 3;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->end_date = $var;

        return $this;
    }

}


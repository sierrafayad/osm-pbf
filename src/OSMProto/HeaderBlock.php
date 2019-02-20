<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/osmformat.proto

namespace OSMProto;

use Google\Protobuf\Internal\GPBUtil;
use OSMProto\GPBMetadata\Osmformat;

/**
 * Generated from protobuf message <code>OSMReader.HeaderBlock</code>
 */
class HeaderBlock extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.OSMReader.HeaderBBox bbox = 1;</code>
     */
    private $bbox = null;
    /**
     * Additional tags to aid in parsing this dataset
     *
     * Generated from protobuf field <code>repeated string required_features = 4;</code>
     */
    private $required_features;
    /**
     * Generated from protobuf field <code>repeated string optional_features = 5;</code>
     */
    private $optional_features;
    /**
     * Generated from protobuf field <code>string writingprogram = 16;</code>
     */
    private $writingprogram = '';
    /**
     * From the bbox field.
     *
     * Generated from protobuf field <code>string source = 17;</code>
     */
    private $source = '';
    /**
     * replication timestamp, expressed in seconds since the epoch,
     * otherwise the same value as in the "timestamp=..." field
     * in the state.txt file used by Osmosis
     *
     * Generated from protobuf field <code>int64 osmosis_replication_timestamp = 32;</code>
     */
    private $osmosis_replication_timestamp = 0;
    /**
     * replication sequence number (sequenceNumber in state.txt)
     *
     * Generated from protobuf field <code>int64 osmosis_replication_sequence_number = 33;</code>
     */
    private $osmosis_replication_sequence_number = 0;
    /**
     * replication base URL (from Osmosis' configuration.txt file)
     *
     * Generated from protobuf field <code>string osmosis_replication_base_url = 34;</code>
     */
    private $osmosis_replication_base_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type HeaderBBox $bbox
     * @type string[]|\Google\Protobuf\Internal\RepeatedField $required_features
     *           Additional tags to aid in parsing this dataset
     * @type string[]|\Google\Protobuf\Internal\RepeatedField $optional_features
     * @type string $writingprogram
     * @type string $source
     *           From the bbox field.
     * @type int|string $osmosis_replication_timestamp
     *           replication timestamp, expressed in seconds since the epoch,
     *           otherwise the same value as in the "timestamp=..." field
     *           in the state.txt file used by Osmosis
     * @type int|string $osmosis_replication_sequence_number
     *           replication sequence number (sequenceNumber in state.txt)
     * @type string $osmosis_replication_base_url
     *           replication base URL (from Osmosis' configuration.txt file)
     * }
     */
    public function __construct($data = NULL)
    {
        Osmformat::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.OSMReader.HeaderBBox bbox = 1;</code>
     * @return HeaderBBox
     */
    public function getBbox()
    {
        return $this->bbox;
    }

    /**
     * Generated from protobuf field <code>.OSMReader.HeaderBBox bbox = 1;</code>
     * @param HeaderBBox $var
     * @return $this
     * @throws \Exception
     */
    public function setBbox($var)
    {
        GPBUtil::checkMessage($var, HeaderBBox::class);
        $this->bbox = $var;

        return $this;
    }

    /**
     * Additional tags to aid in parsing this dataset
     *
     * Generated from protobuf field <code>repeated string required_features = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequiredFeatures()
    {
        return $this->required_features;
    }

    /**
     * Additional tags to aid in parsing this dataset
     *
     * Generated from protobuf field <code>repeated string required_features = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @throws \Exception
     */
    public function setRequiredFeatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->required_features = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string optional_features = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOptionalFeatures()
    {
        return $this->optional_features;
    }

    /**
     * Generated from protobuf field <code>repeated string optional_features = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @throws \Exception
     */
    public function setOptionalFeatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->optional_features = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string writingprogram = 16;</code>
     * @return string
     */
    public function getWritingprogram()
    {
        return $this->writingprogram;
    }

    /**
     * Generated from protobuf field <code>string writingprogram = 16;</code>
     * @param string $var
     * @return $this
     * @throws \Exception
     */
    public function setWritingprogram($var)
    {
        GPBUtil::checkString($var, True);
        $this->writingprogram = $var;

        return $this;
    }

    /**
     * From the bbox field.
     *
     * Generated from protobuf field <code>string source = 17;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * From the bbox field.
     *
     * Generated from protobuf field <code>string source = 17;</code>
     * @param string $var
     * @return $this
     * @throws \Exception
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * replication timestamp, expressed in seconds since the epoch,
     * otherwise the same value as in the "timestamp=..." field
     * in the state.txt file used by Osmosis
     *
     * Generated from protobuf field <code>int64 osmosis_replication_timestamp = 32;</code>
     * @return int|string
     */
    public function getOsmosisReplicationTimestamp()
    {
        return $this->osmosis_replication_timestamp;
    }

    /**
     * replication timestamp, expressed in seconds since the epoch,
     * otherwise the same value as in the "timestamp=..." field
     * in the state.txt file used by Osmosis
     *
     * Generated from protobuf field <code>int64 osmosis_replication_timestamp = 32;</code>
     * @param int|string $var
     * @return $this
     * @throws \Exception
     */
    public function setOsmosisReplicationTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->osmosis_replication_timestamp = $var;

        return $this;
    }

    /**
     * replication sequence number (sequenceNumber in state.txt)
     *
     * Generated from protobuf field <code>int64 osmosis_replication_sequence_number = 33;</code>
     * @return int|string
     */
    public function getOsmosisReplicationSequenceNumber()
    {
        return $this->osmosis_replication_sequence_number;
    }

    /**
     * replication sequence number (sequenceNumber in state.txt)
     *
     * Generated from protobuf field <code>int64 osmosis_replication_sequence_number = 33;</code>
     * @param int|string $var
     * @return $this
     * @throws \Exception
     */
    public function setOsmosisReplicationSequenceNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->osmosis_replication_sequence_number = $var;

        return $this;
    }

    /**
     * replication base URL (from Osmosis' configuration.txt file)
     *
     * Generated from protobuf field <code>string osmosis_replication_base_url = 34;</code>
     * @return string
     */
    public function getOsmosisReplicationBaseUrl()
    {
        return $this->osmosis_replication_base_url;
    }

    /**
     * replication base URL (from Osmosis' configuration.txt file)
     *
     * Generated from protobuf field <code>string osmosis_replication_base_url = 34;</code>
     * @param string $var
     * @return $this
     * @throws \Exception
     */
    public function setOsmosisReplicationBaseUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->osmosis_replication_base_url = $var;

        return $this;
    }

}


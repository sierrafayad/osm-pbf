<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/osmformat.proto

namespace OSMProto;

use Google\Protobuf\Internal\GPBUtil;
use OSMProto\GPBMetadata\Osmformat;

/**
 * Generated from protobuf message <code>OSMReader.Node</code>
 */
class Node extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>sint64 id = 1;</code>
     */
    private $id = 0;
    /**
     * Parallel arrays.
     *
     * Generated from protobuf field <code>repeated uint32 keys = 2 [packed = true];</code>
     */
    private $keys;
    /**
     * String IDs.
     *
     * Generated from protobuf field <code>repeated uint32 vals = 3 [packed = true];</code>
     */
    private $vals;
    /**
     * May be omitted in omitmeta
     *
     * Generated from protobuf field <code>.OSMReader.Info info = 4;</code>
     */
    private $info = null;
    /**
     * Generated from protobuf field <code>sint64 lat = 8;</code>
     */
    private $lat = 0;
    /**
     * Generated from protobuf field <code>sint64 lon = 9;</code>
     */
    private $lon = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type int|string $id
     * @type int[]|\Google\Protobuf\Internal\RepeatedField $keys
     *           Parallel arrays.
     * @type int[]|\Google\Protobuf\Internal\RepeatedField $vals
     *           String IDs.
     * @type Info $info
     *           May be omitted in omitmeta
     * @type int|string $lat
     * @type int|string $lon
     * }
     */
    public function __construct($data = NULL)
    {
        Osmformat::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>sint64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>sint64 id = 1;</code>
     * @param int|string $var
     * @return $this
     * @throws \Exception
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Parallel arrays.
     *
     * Generated from protobuf field <code>repeated uint32 keys = 2 [packed = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * Parallel arrays.
     *
     * Generated from protobuf field <code>repeated uint32 keys = 2 [packed = true];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @throws \Exception
     */
    public function setKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->keys = $arr;

        return $this;
    }

    /**
     * String IDs.
     *
     * Generated from protobuf field <code>repeated uint32 vals = 3 [packed = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVals()
    {
        return $this->vals;
    }

    /**
     * String IDs.
     *
     * Generated from protobuf field <code>repeated uint32 vals = 3 [packed = true];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @throws \Exception
     */
    public function setVals($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->vals = $arr;

        return $this;
    }

    /**
     * May be omitted in omitmeta
     *
     * Generated from protobuf field <code>.OSMReader.Info info = 4;</code>
     * @return Info
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * May be omitted in omitmeta
     *
     * Generated from protobuf field <code>.OSMReader.Info info = 4;</code>
     * @param Info $var
     * @return $this
     * @throws \Exception
     */
    public function setInfo($var)
    {
        GPBUtil::checkMessage($var, Info::class);
        $this->info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>sint64 lat = 8;</code>
     * @return int|string
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Generated from protobuf field <code>sint64 lat = 8;</code>
     * @param int|string $var
     * @return $this
     * @throws \Exception
     */
    public function setLat($var)
    {
        GPBUtil::checkInt64($var);
        $this->lat = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>sint64 lon = 9;</code>
     * @return int|string
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Generated from protobuf field <code>sint64 lon = 9;</code>
     * @param int|string $var
     * @return $this
     * @throws \Exception
     */
    public function setLon($var)
    {
        GPBUtil::checkInt64($var);
        $this->lon = $var;

        return $this;
    }

}


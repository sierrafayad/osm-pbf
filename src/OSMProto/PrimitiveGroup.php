<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/osmformat.proto

namespace OSMProto;

use Google\Protobuf\Internal\GPBUtil;
use OSMProto\GPBMetadata\Osmformat;

/**
 * Group of OSMPrimitives. All primitives in a group must be the same type.
 *
 * Generated from protobuf message <code>OSMReader.PrimitiveGroup</code>
 */
class PrimitiveGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .OSMReader.Node nodes = 1;</code>
     */
    private $nodes;
    /**
     * Generated from protobuf field <code>.OSMReader.DenseNodes dense = 2;</code>
     */
    private $dense = null;
    /**
     * Generated from protobuf field <code>repeated .OSMReader.Way ways = 3;</code>
     */
    private $ways;
    /**
     * Generated from protobuf field <code>repeated .OSMReader.Relation relations = 4;</code>
     */
    private $relations;
    /**
     * Generated from protobuf field <code>repeated .OSMReader.ChangeSet changesets = 5;</code>
     */
    private $changesets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type Node[]|\Google\Protobuf\Internal\RepeatedField $nodes
     * @type DenseNodes $dense
     * @type Way[]|\Google\Protobuf\Internal\RepeatedField $ways
     * @type Relation[]|\Google\Protobuf\Internal\RepeatedField $relations
     * @type ChangeSet[]|\Google\Protobuf\Internal\RepeatedField $changesets
     * }
     */
    public function __construct($data = NULL)
    {
        Osmformat::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .OSMReader.Node nodes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * Generated from protobuf field <code>repeated .OSMReader.Node nodes = 1;</code>
     * @param Node[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @throws \Exception
     */
    public function setNodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, Node::class);
        $this->nodes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.OSMReader.DenseNodes dense = 2;</code>
     * @return DenseNodes
     */
    public function getDense()
    {
        return $this->dense;
    }

    /**
     * Generated from protobuf field <code>.OSMReader.DenseNodes dense = 2;</code>
     * @param DenseNodes $var
     * @return $this
     * @throws \Exception
     */
    public function setDense($var)
    {
        GPBUtil::checkMessage($var, DenseNodes::class);
        $this->dense = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .OSMReader.Way ways = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWays()
    {
        return $this->ways;
    }

    /**
     * Generated from protobuf field <code>repeated .OSMReader.Way ways = 3;</code>
     * @param Way[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @throws \Exception
     */
    public function setWays($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, Way::class);
        $this->ways = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .OSMReader.Relation relations = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRelations()
    {
        return $this->relations;
    }

    /**
     * Generated from protobuf field <code>repeated .OSMReader.Relation relations = 4;</code>
     * @param Relation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @throws \Exception
     */
    public function setRelations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, Relation::class);
        $this->relations = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .OSMReader.ChangeSet changesets = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChangesets()
    {
        return $this->changesets;
    }

    /**
     * Generated from protobuf field <code>repeated .OSMReader.ChangeSet changesets = 5;</code>
     * @param ChangeSet[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @throws \Exception
     */
    public function setChangesets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, ChangeSet::class);
        $this->changesets = $arr;

        return $this;
    }

}


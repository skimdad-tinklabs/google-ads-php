<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/ad_group_criterion_label.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A relationship between an ad group criterion and a label.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.AdGroupCriterionLabel</code>
 */
class AdGroupCriterionLabel extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the ad group criterion label.
     * Ad group criterion label resource names have the form:
     * `customers/{customer_id}/adGroupCriterionLabels/{ad_group_id}~{criterion_id}~{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The ad group criterion to which the label is attached.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 2;</code>
     */
    private $ad_group_criterion = null;
    /**
     * The label assigned to the ad group criterion.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3;</code>
     */
    private $label = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the ad group criterion label.
     *           Ad group criterion label resource names have the form:
     *           `customers/{customer_id}/adGroupCriterionLabels/{ad_group_id}~{criterion_id}~{label_id}`
     *     @type \Google\Protobuf\StringValue $ad_group_criterion
     *           The ad group criterion to which the label is attached.
     *     @type \Google\Protobuf\StringValue $label
     *           The label assigned to the ad group criterion.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\AdGroupCriterionLabel::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the ad group criterion label.
     * Ad group criterion label resource names have the form:
     * `customers/{customer_id}/adGroupCriterionLabels/{ad_group_id}~{criterion_id}~{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the ad group criterion label.
     * Ad group criterion label resource names have the form:
     * `customers/{customer_id}/adGroupCriterionLabels/{ad_group_id}~{criterion_id}~{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The ad group criterion to which the label is attached.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroupCriterion()
    {
        return $this->ad_group_criterion;
    }

    /**
     * The ad group criterion to which the label is attached.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroupCriterion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group_criterion = $var;

        return $this;
    }

    /**
     * The label assigned to the ad group criterion.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * The label assigned to the ad group criterion.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->label = $var;

        return $this;
    }

}

